<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StoryController extends Controller
{
       public function index(){
         $meta = 2;
         return view('frontend.ourstory',compact('meta'));
   } 
}
