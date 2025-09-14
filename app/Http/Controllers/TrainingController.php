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

class TrainingController extends Controller
{
    public function training(){
        return view('web.training');
    }

    public function trainingDashboard(){

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
        return view('training.training-dashboard',compact('customer_profile','customer_projects'));
    }

    public function webAddCourse(){
        $user=Auth::id();
        $customer_profile=DB::table('users')->where('id',$user)->get();
        return view('training.web-add-course',compact('customer_profile'));
    }

    public function webAddCourseData(Request $request){
        // dd($request->all());
    try{
        $user=Auth::id();
        $title=$request->course_title;
        $description=$request->description;
        $short_description=$request->short_description;
        $level=$request->level;
        $status=$request->status;
        $price=$request->price;
        $created_at=Carbon::now();
        $updated_at=Carbon::now();

         $file = $request->filename;
                if($file!=null){
                    $pic_name=$request->filename->getClientOriginalName();
                    $imagenames =strtotime(Carbon::now()).rand('0000','9999').".".$pic_name;
                    $destinationPath = 'uploads/profile/';
                    $upload_success =$file->move($destinationPath, $imagenames);
                    }else{
                      $imagenames="";
                }

        DB::table('courses')->insert([
            'instructor_id'=>$user,
            'title'=>$title,
            'short_description'=>$short_description,
            'description'=>$description,
            'level'=>$level,
            'status'=>$status,
            'price'=>$price,
            'thumbnail_url'=>$imagenames,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]);
        DB::commit();
        Session::flash('alert-success', 'You have successfully added a course!');
        \App\Helpers\LogActivity::addToLog('Course added successfully.');
        return redirect('/web-add-course');

    }catch(\Exception $e){
        DB::rollBack();
        Session::flash('alert-danger', 'Something went wrong!');
        \App\Helpers\LogActivity::addToLog('Error occurred while adding course: '.$e->getMessage());
        return redirect()->back()->withInput()->withErrors(['error'=>$e->getMessage()]);
    }





    }

}
