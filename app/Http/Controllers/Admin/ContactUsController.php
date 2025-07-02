<?php

namespace App\Http\Controllers\Admin;

use App\Models\ContactUs;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;

class ContactUsController extends Controller
{
     public function index()
    {
        return view('admin.contact.list');
    }

    public function store(Request $request)
{

    $validated = $request->validate([
        'name'            => 'required|string|max:255',
        'email'           => 'required|email|max:255',
        'country'         => 'required|string|max:100',
        'check_in_date'   => 'required|date',
        'check_out_date'  => 'required|date|after_or_equal:check_in_date',
        'message'         => 'required|string|min:10',
    ]);

     ContactUs::create($validated);


    return redirect()->back()->with('success', 'Your comment has been submitted successfully!');
}

    public function show($id)
    {
        $contact = ContactUs::findOrFail(decrypt($id));

        return view('admin.contact.view',[
            'contact'=>$contact
        ]);
    }

  public function getAjaxCommentData()
{
    return DataTables::eloquent(ContactUs::query())
        ->addIndexColumn()
        ->editColumn('name', function ($contact) {
            return $contact['name'];
        })
        ->editColumn('email', function ($contact) {
            return $contact['email'];
        })
        ->editColumn('country', function ($contact) {
            return $contact['country'];
        })
        ->editColumn('check_in_date', function ($contact) {
            return $contact['check_in_date'];
        })
        ->editColumn('check_out_date', function ($contact) {
            return $contact['check_out_date'];
        })

        ->editColumn('message', function ($contact) {
            return $contact['message'];
        })
        ->addColumn('edit', function ($contact) {
            $edit_url = route('contact-us.show', encrypt($contact->id));
            return '<a href="' . $edit_url . '"><i class="fal fa-edit"></i></a>';
        })
        ->rawColumns(['edit'])
        ->toJson();
    }
}
