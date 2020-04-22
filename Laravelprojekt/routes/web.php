<?php

use Illuminate\Support\Facades\Auth;
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


Route::get('/', function () {
    return view('welcome');
});
Route::get('/login','UserController@login')->name('login');
Route::post('/user/store', 'UserController@store')->name('users.store');
Route::get('/home', 'UserController@index')->name('home');
Route::get('/registration','UserController@register')->name('register');
Route::post('/loginuser','UserController@log')->name('user.login');
Route::get('/emailsend', 'EmailSendController@index')->name('emailsend');
Route::post('/emailsend/send' ,'EmailSendController@send');
Route::get('/smssend', 'SmsSendController@index')->name('smssend');
Route::post('/smssend/Smssend', 'SmsSendController@Smssend');

Auth::routes();



