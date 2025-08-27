<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Helpers\LogActivity;
use App\Models\ProjectRegistration;
use App\Mail\ProjectRegistrationMail;

use Illuminate\Support\Facades\Log;
use App\User;
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



public function projectRegistrationData(Request $request)
{
    // dd($request->all());

    DB::beginTransaction(); // Start DB transaction

    try {
        $fname = $request->fname;
        $lname = $request->lname;
        $phone = $request->phone;
        $email = $request->email;
        $project_title = $request->project_title;
        $project_description = $request->project_description;

        $fullname = $fname . ' ' . $lname;

       $data=ProjectRegistration::create([
            'fname' => $fname,
            'lname' => $lname,
            'phone' => $phone,
            'email' => $email,
            'project_title' => $project_title,
            'project_description' => $project_description,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::commit(); // Commit transaction
        // Mail::to($email)->send(new ProjectRegistrationMail($fullname,$data));
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


}

