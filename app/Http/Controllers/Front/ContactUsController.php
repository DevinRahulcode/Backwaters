<?php

namespace App\Http\Controllers\Front;

use App\Models\ContactUs;
use App\Mail\ConatctUsMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Front\turnstile;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Http;


class ContactUsController extends Controller
{
    public function index()
    {
        $meta = 7;
        return view('frontend.contactus',compact('meta'));
    } 

   public function store(Request $request)
{
    try {
        
        // Validate Turnstile response
        $request->validate([
            'cf-turnstile-response' => ['required', function ($attribute, $value, $fail) use ($request) {
                $response = Http::asForm()->post('https://challenges.cloudflare.com/turnstile/v0/siteverify', [
                    'secret' => env('TURNSTILE_SECRET_KEY'),
                    'response' => $value,
                    'remoteip' => $request->ip(),
                ]);

                if (!($response->json()['success'] ?? false)) {
                    \Log::error('Turnstile verification failed', ['response' => $response->json()]);
                    $fail('CAPTCHA verification failed. Please try again.');
                }
            }],
            
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'country' => 'required|string|max:255',
            'check_in_date' => 'required',
            'check_out_date' => 'required',
            'message' => 'required|string|max:10000',
        ]);
        DB::beginTransaction();
        $contactUs = new ContactUs();
        $contactUs->name = $request->name;
        $contactUs->email = $request->email;
        $contactUs->country = $request->country;
        $contactUs->check_in_date = $request->check_in_date;
        $contactUs->check_out_date = $request->check_out_date;
        $contactUs->message = $request->message;
        $contactUs->save();

        // Send email if email is provided
        if ($request->email) {
            Mail::to($request->email)->send(new ConatctUsMail(
                $request->name,
                $request->country,
                $request->check_in_date,
                $request->check_out_date,
                $request->message
            ));
        }

        DB::commit();

        return response()->json(['message' => 'Thank you! Your message has been sent successfully.'], 200);
    } catch (\Illuminate\Validation\ValidationException $e) {
        \Log::error('Validation error in ContactUsController', ['errors' => $e->errors()]);
        return response()->json(['message' => 'Validation failed. Please check your inputs.', 'errors' => $e->errors()], 422);
    } catch (\Exception $e) {
        \Log::error('Error in ContactUsController', ['message' => $e->getMessage(), 'trace' => $e->getTraceAsString()]);
        DB::rollBack();
        return response()->json(['message' => 'Sorry! An error occurred while processing your request.'], 500);
    }

  }
}
