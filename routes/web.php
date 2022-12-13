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

Route::get('/', [loginController::class, 'index']);
Route::get('/register', [registerController::class, 'index']);

Route::get('/index', [indexController::class, 'index']);

Route::get('/faculty', [facultyController::class, 'index']);
Route::get('/infra', [infraController::class, 'index']);
Route::get('/management', [managementController::class, 'index']);
Route::get('/placement', [placementcontroller::class, 'index']);

Route::get('/admin', [adminController::class, 'index']);
Route::get('/admin/adminfaculty', [adminFaculty::class, 'index']);
Route::get('/admin/admininfra', [adminInfrastructure::class, 'index']);
Route::get('/admin/adminmanagement', [adminManagement::class, 'index']);
Route::get('/admin/adminplacement', [adminPlacement::class, 'index']);
Route::get('/admin/complaint', [adminviewController::class, 'index']);
route::get('/admin/view', [adminviewpageController::class, 'index']);

Route::get('/student/view', [studentviewpageController::class, 'index']);
Route::get('/student/complaint', [studentcomplaintlistController::class, 'index']);

Route::get('/forgetpassword', [forgetpasswordController::class, 'index']);
Route::get('/forgetlink', [forgetlinkController::class, 'index']);

Route::get('/femail', [facultyemail::class, 'index']);
Route::get('/pemail', [placementEmail::class, 'index']);
