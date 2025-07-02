<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ResponsibilityController extends Controller
{
     public function index(){
      $meta = 3;
    return view('frontend.responsibility',compact('meta'));
   } 
}
