<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BookingController extends Controller
{
       public function index(){
        $meta = 9;
     return view('frontend.booking',compact('meta'));
   } 
}
