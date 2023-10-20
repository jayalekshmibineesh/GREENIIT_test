<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::get('/',[HomeController::class,'index'])->name('index');
Route::get('/hr_login',[HomeController::class,'hr_login'])->name('hr_login');
Route::post('/show_login',[HomeController::class,'show_login'])->name('show_login');
Route::get('/hr_home',[HomeController::class,'hr_home'])->name('hr_home');
Route::get('/employee_login',[HomeController::class,'employee_login'])->name('employee_login');
Route::post('/emp_login',[HomeController::class,'emp_login'])->name('emp_login');
Route::get('/employee_home',[HomeController::class,'employee_home'])->name('employee_home');
Route::get('/leave_request',[HomeController::class,'leave_request'])->name('leave_request');
Route::post('/request_send',[HomeController::class,'request_send'])->name('request_send');
Route::get('/view_leaverecords',[HomeController::class,'view_leaverecords'])->name('view_leaverecords');
Route::get('/update_status/{id}',[HomeController::class,'update_status'])->name('update_status');
Route::get('/logout',[HomeController::class,'logout'])->name('logout');

