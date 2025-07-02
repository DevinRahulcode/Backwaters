<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
      public function index(){
        $meta = 6;
    return view('frontend.gallery',compact('meta'));
   } 
}
