<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Helpers\LogActivity;

use Illuminate\Support\Facades\Log;
use App\User;
use Illuminate\Support\Facades\Mail;
use DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use  Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redis;

class WebSiteController extends Controller
{
   public function aboutus(){
    return view('web.about-us');
   }
   public function services(){
    $services=DB::table('tbl_categories_sub')->where('status',1)->get();
    return view('web.services',compact('services'));
   }
}
