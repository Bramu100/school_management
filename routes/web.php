<?php

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

Route::get('/','App\Http\Controllers\WelcomeController@welcome')->name('welcome');
Route::get('/welcome/{id}/{name}','App\Http\Controllers\WelcomeController@nice')->name('nice');
Route::resource('/course','App\Http\Controllers\CourseController');
Route::resource('/guardian','App\http\controllers\GuardianController');
Route::resource('/staff','App\http\controllers\StaffController');
Route::resource('/student','App\http\controllers\StudentController');
Route::resource('/user','App\http\controllers\UserController');
Route::resource('/role','App\http\controllers\RoleController');
Route::resource('/sms','App\http\controllers\SmsController');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
