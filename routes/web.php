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



Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('admin/home', 'HomeController@adminHome')->name('admin.home')->middleware('is_admin');
Route::get('/getuser','HomeController@user');
Route::post('/addTrainee','HomeController@trainee');
Route::post('/getTrainee','HomeController@getTrainees');
Route::post('/edituser/{id}','HomeController@edituser');
Route::post('/deleteuser/{id}','HomeController@deleteUser');
Route::post('/addcontent','HomeController@addContent');
Route::post('/addevent','HomeController@addevent');
Route::post('/getEvents','HomeController@getEvents');
Route::post('/addevaluation','HomeController@addevaluation');
Route::post('/getcontent','ContentController@index');
Route::get('/show','HomeController@show');
Route::post('/getevaluation/{id}','HomeController@getevaluation');
Route::post('/editevaluation/{id}','HomeController@editevaluation');
Route::post('/changePassword','HomeController@changePassword');
Route::post('/contactus','HomeController@contactUs');