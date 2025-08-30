<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Helpers\LogActivity;
use App\Models\ProjectRegistration;
use App\Mail\ProjectRegistrationMail;

use Illuminate\Support\Facades\Log;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use  Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redis;

class WebSiteController extends Controller
{
   public function aboutus(){
    $projects=DB::table('projects')->where('status',1)->get();
    return view('web.about-us',compact('projects'));
   }
   public function services(){
    $services=DB::table('tbl_categories_sub')->where('status',1)->get();
    $project_logos=DB::table('projects')->where('status',1)->get();
    return view('web.services',compact('services','project_logos'));
   }

   public function portfolio(){
    $projects=DB::table('projects')->where('status',1)->get();
    return view('web.portfolio',compact('projects'));}

    public function projectProfile($id){
     $project_profile=DB::table('projects')->where('id',$id)->get();
     if(!$project_profile){
          return redirect('/')->with('alert-danger', 'Project not found!');
     }
     return view('web.project-profile',compact('project_profile'));
    }
    public function myTestAddToLog(){
          LogActivity::addToLog('This is a test log entry');
          return 'Log entry added successfully!';
     }

    public function contactUs(){
     return view('web.contact-us');
    }

    public function projectRegistration(Request $request){
       return view('web.project-registration');
    }

public function logout(Request $request)
{
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect('/');
}

public function projectRegistrationData(Request $request)
{
    DB::beginTransaction(); // Start DB transaction

    try {
        $fname = $request->fname;
        $lname = $request->lname;
        $phone = $request->phone;
        $email = $request->email;
        $project_title = $request->project_title;
        $project_description = $request->project_description;

        $fullname = $fname . ' ' . $lname;

        // Insert project registration data
        $data = ProjectRegistration::create([
            'fname' => $fname,
            'lname' => $lname,
            'phone' => $phone,
            'email' => $email,
            'project_title' => $project_title,
            'project_description' => $project_description,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        // ✅ Check if user already exists
        $existingUser = User::where('email', $email)->first();

        if (!$existingUser) {
            // Create new user if not exists
            $createUser = User::create([
                'name' => $fullname,
                'email' => $email,
                'password' => Hash::make('BuildYourProject@123'), // Default password
                'usertype' => 'user',
                'status' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }

        DB::commit(); // Commit transaction

        // Send mail
        Mail::to($email)->send(new ProjectRegistrationMail($fullname, $project_title, $email));

        Session::flash('alert-success', 'Project registration successfully done. We will contact you soon.');
        \App\Helpers\LogActivity::addToLog('Successfully registered.');
        return redirect('/project-registration');

    } catch (\Exception $e) {
        DB::rollBack(); // Rollback transaction if error occurs
        \Log::error('Error adding project: ' . $e->getMessage());
        Session::flash('alert-danger', 'Something went wrong. Please try again.');
        return redirect()->back()->withInput()->withErrors(['error' => $e->getMessage()]);
    }
}

public function webLogin(){
    return view('web.web-login');
}


public function webLoginUserData(Request $request)
{
    // Validate input
    $request->validate([
        'email' => 'required|email',
        'password' => 'required|string',
    ]);

    $email = $request->email;
    $password = $request->password;

    $user = User::where('email', $email)->first();

    if ($user && Hash::check($password, $user->password)) {
        Auth::login($user);
        \App\Helpers\LogActivity::addToLog('User logged in successfully.');
        return redirect('/customer-dashboard')->with('alert-success', 'Login successful!');
    } else {
        return redirect()->back()->with('alert-danger', 'Invalid email or password.')->withInput();
    }
}

public function customerDashboard(){
    $user=Auth::id();
    $customer_profile=DB::table('users')->where('id',$user)->get();
    $customer_projects=DB::table('tbl_customer_projects')->where('email',Auth::user()->email)->get();
    return view('web.customer-dashboard',compact('customer_profile','customer_projects'));
}






}


