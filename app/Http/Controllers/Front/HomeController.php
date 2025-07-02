<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
   public function index(){

      $meta = 1;
    return view('frontend.home',compact('meta'));
    
   } 
}
