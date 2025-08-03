<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebSiteController extends Controller
{
   public function aboutus(){
    return view('web.about-us');
   }
   public function services(){
    return view('web.services');
   }
}
