<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\WebSiteController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\TrainingController;
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    $services=DB::table('tbl_categories_sub')->where('status',1)->get();

    $projects=DB::table('projects')->where('status',1)->get();


    return view('welcome',compact('services','projects'));
});
Route::post('/logout', [WebSiteController::class, 'logout'])->name('logout');
Route::get('/about', [WebSiteController::class, 'aboutus']);
Route::get('/services', [WebSiteController::class, 'services']);
Route::get('/portfolio', [WebSiteController::class, 'portfolio']);

Route::get('/contact', [WebSiteController::class, 'contactUs']);
// Project Profile
Route::get('/project-profile/{id}', [WebSiteController::class, 'projectProfile']);


Route::get('/project-registration',[WebSiteController::class,'projectRegistration']);
Route::post('/project-registration-data',[WebSiteController::class,'projectRegistrationData']);

Route::get('/web-login', [WebSiteController::class, 'webLogin']);
Route::post('/web-login-user-data', [WebSiteController::class, 'webLoginUserData']);
Route::get('/customer-dashboard', [WebSiteController::class, 'customerDashboard']);

Route::get('/website-change-customer-password/{id}', [WebSiteController::class, 'websiteChangeCustomerPassword']);
Route::post('/website-change-customer-password-data', [WebSiteController::class, 'websiteChangeCustomerPasswordData']);
Route::get('/website-edit-customer-profile/{id}', [WebSiteController::class, 'websiteEditCustomerProfile']);
Route::post('/website-edit-customer-profile-data', [WebSiteController::class, 'websiteEditCustomerProfileData']);

//Training Controller
Route::get('/training', [TrainingController::class, 'training']);
Route::get('/training-dashboard', [TrainingController::class, 'trainingDashboard']);

Route::get('/web-add-course', [TrainingController::class, 'webAddCourse']);
Route::post('/web-add-course-data', [TrainingController::class, 'webAddCourseData']);
Route::get('/web-my-courses', [TrainingController::class, 'webMyCourses']);






//Student Controller
 Route::get('/student-dashboard', [StudentController::class, 'studentDashboard']);


// =================================== Back - End Servies   =====================================

Route::get('/web-admin-dashboard', function () {
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

    return view('web.web-admin-dashboard',compact('customer_profile','customer_projects'));

});
// Route::get('/admin-home', [AdminController::class, 'adminWelcome']);

//sidemenu website


Route::get('/web-my-projects', [WebSiteController::class, 'webMyProjects']);

Route::get('/web-my-profile', function () {
    $user=Auth::id();
    $customer_profile=DB::table('users')->where('id',$user)->get();
    return view('web.web-my-profile',compact('customer_profile'));
});

Route::get('/admin-home', function () {
    $user=Auth::id();
    $contentdetails=DB::table('users')->where('id',$user)->get();
    return view('admin.admin-home',compact('contentdetails'));
});

Route::get('/login', [AdminController::class, 'loginPage']);
Route::post('/login-admin-panel',[AdminController::class,'loginAdmin']);
Route::get('/logout', [AdminController::class, 'signout']);


//log activity
Route::get('/add-to-log', [AdminController::class, 'myTestAddToLog']);
Route::get('/logActivity', [AdminController::class, 'logActivity']);

//course categories
Route::get('/add-services',[AdminController::class,'AddServices']);
Route::post('/add-services-data',[AdminController::class,'AddServiceData']);
Route::get('/add-services-list',[AdminController::class,'AddServicesList']);

Route::get('/admin-add-project',[AdminController::class,'AddProject']);
Route::post('/add-project-data',[AdminController::class,'AddProjectData']);



