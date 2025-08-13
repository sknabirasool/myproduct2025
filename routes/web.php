<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\WebSiteController;
use App\Http\Controllers\AdminController;

Route::get('/', function () {
    $services=DB::table('tbl_categories_sub')->where('status',1)->get();
    return view('welcome',compact('services'));
});

Route::get('/about', [WebSiteController::class, 'aboutus']);
Route::get('/services', [WebSiteController::class, 'services']);




// =================================== Back - End Servies   =====================================
// Route::get('/admin-home', [AdminController::class, 'adminWelcome']);

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



