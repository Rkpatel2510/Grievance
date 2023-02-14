<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\adminFaculty;
use App\Http\Controllers\adminInfrastructure;
use App\Http\Controllers\adminManagement;
use App\Http\Controllers\adminPlacement;
use App\Http\Controllers\facultyController;
use App\Http\Controllers\indexController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\registerController;
use App\Http\Controllers\placementController;
use App\Http\Controllers\managementController;
use App\Http\Controllers\infraController;
use App\Http\Controllers\forgetpasswordController;
use App\Http\Controllers\adminviewController;
use App\Http\Controllers\studentviewpageController;
use App\Http\Controllers\adminviewpageController;
use App\Http\Controllers\forgetlinkController;
use App\Http\Controllers\facultyemail;
use App\Http\Controllers\infraEmail;
use App\Http\Controllers\managementEmail;
use App\Http\Controllers\placementEmail;
use App\Http\Controllers\studentcomplaintlistController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::resource('/', loginController::class);
Route::resource('/register',registerController::class);

Route::resource('/index', indexController::class);

Route::resource('/faculty', facultyController::class);
Route::resource('/infra', infraController::class);
Route::resource('/management', managementController::class);
Route::resource('/placement', placementcontroller::class);

Route::resource('/admin', adminController::class);
Route::resource('/admin/adminfaculty', adminFaculty::class);
Route::resource('/admin/admininfra', adminInfrastructure::class);
Route::resource('/admin/adminmanagement', adminManagement::class);
Route::resource('/admin/adminplacement', adminPlacement::class);
Route::resource('/admin/complaint', adminviewController::class);
route::resource('/admin/view', adminviewpageController::class);

//Route::resource('/student/view', studentviewpageController::class);
Route::resource('/student/complaint', studentcomplaintlistController::class);

Route::resource('/forgetpassword', forgetpasswordController::class);
Route::resource('/forgetlink', forgetlinkController::class);

Route::resource('/femail', facultyemail::class);
Route::resource('/pemail', placementEmail::class);
Route::resource('/iemail', infraEmail::class);
Route::resource('/memail', managementEmail::class);