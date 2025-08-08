<?php
namespace App\Helpers;
namespace App\Http\Controllers;

use App\Helpers\LogActivity;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Log;
use App\User;
use Illuminate\Support\Facades\Mail;
use DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use  Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redis;

class AdminController extends Controller
{
    public function loginPage()
    {
        return view('admin.login-page');
    }

    public function loginAdmin(Request $request)
    {
        // dd($request->all( ));
        $ipAddress = $request->ip();
        $created_at=Carbon::now();
        $user=$request->email;

        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            $request->session()->flash('alert-success', 'Welcome to Dashboard, '. Auth::user()->name);

        //   Mail::to($user)->send(new LoginSuccessMail($user,$created_at));
        Auth::user()->update([ 'last_login_ip' => $ipAddress,'last_login_at'=>$created_at]);
            return redirect("/admin-home");
        }

        $request->session()->flash('alert-danger', 'your username and password does not match!');
        return redirect('/login');
    }

    public function adminWelcome(){
        return view('admin.admin-home');
    }

    public function signout(){
        Session::flush();
        Auth::logout();
        return Redirect('/login');
    }


    public function myTestAddToLog()
    {
        \LogActivity::addToLog('My Testing Add To Log.');
        dd('log insert successfully.');
    }


    public function logActivity()
    {
        $logs = \LogActivity::logActivityLists();
        return view('logActivity',compact('logs'));
    }


// ====================================================services for website ======================
public function AddServices()
{
    return view('admin.add-services');
}

public function AddServiceData(Request $request)
{
    try {
        // Validate incoming request data
        $request->validate([
            'service_name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'filename' => 'required|file|mimes:jpg,jpeg,png,pdf',
        ]);

        // Extract data from request
        $service_name = $request->service_name;
        $description = $request->description;
        $file = $request->file('filename');

        $imagenames = ""; // Default image name

        // Handle file upload if provided
        if ($file) {
            $pic_name = $file->getClientOriginalName();
            $imagenames = strtotime(now()) . rand(1000, 9999) . "." . $file->getClientOriginalExtension();
            $destinationPath = 'uploads/services/';
            $file->move($destinationPath, $imagenames);
        }

        // Insert data into the database
        $data = DB::table('tbl_categories_sub')->insert([
            'service_name' => $service_name,
            'description' => $description,
            'image' => $imagenames,
            'cat_id' => 0,
            'status' => 1
        ]);
        Session::flash('alert-success', 'You have successfully added a service!');
        \App\Helpers\LogActivity::addToLog('Service added successfully.');
        return redirect('/add-services');
    } catch (\Exception $e) {
        \Log::error('Error adding service: ' . $e->getMessage());
        Session::flash('alert-danger', 'Failed to add the service. Please try again.');
        return redirect()->back()->withInput()->withErrors(['error' => $e->getMessage()]);
    }

}

public function AddServicesList()
{
    $contentdetails =DB::table('tbl_categories_sub')->get();
    return view('admin.services-list',compact('contentdetails'));
}



public function AddProject()
{
    return view('admin.add-project');
}


}
