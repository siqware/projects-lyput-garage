<?php

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

use Illuminate\Support\Facades\Route;

Auth::routes();
/*Authentication*/
Route::resource('authentication','AuthenticationController');
/*home*/
Route::get('/',function (){return view('blank');})->name('home.dashboard');
/*File manager*/
Route::get('file-manager',function (){return view('vendor.file-manager.fmButton');})->name('file.manager');
Route::get('media',function (){return view('media.index');})->name('file.media');
Route::get('/home', 'HomeController@index')->name('home');
/*User*/
Route::resource('user','UserController');
