<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\LogActivity;

use Illuminate\Support\Facades\Log;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use  Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redis;

class StudentController extends Controller
{
    public function studentDashboard(){
        $user=Auth::id();
    $customer_profile=DB::table('users')->where('id',$user)->get();

    $userId = Auth::id();
    $userEmail = Auth::user()->email;

$customer_projects= DB::table('users')
    ->join('tbl_customer_projects', 'users.email', '=', 'tbl_customer_projects.email')
    ->select('users.*', 'tbl_customer_projects.*') // get all columns from both
    ->where('tbl_customer_projects.email', '!=', $userEmail) // exclude current user's projects
    ->whereNotIn('users.id', [$userId]) // exclude current user by ID
    ->get();
        return view('student.student-dashboard',compact('customer_profile','customer_projects'));
    }
}
