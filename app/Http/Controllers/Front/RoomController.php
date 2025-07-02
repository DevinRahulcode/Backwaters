<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RoomController extends Controller
{
     public function index(){
      $meta = 4;
    return view('frontend.rooms',compact('meta'));
   } 
}
