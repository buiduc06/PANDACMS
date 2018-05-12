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

Route::get('/', function () {
    return view('welcome');
})->name('homepage');

Route::get('login','LoginController@index')->name('login');
Route::post('login','LoginController@store')->name('login');

Route::get('logout', function() {
   Auth::logout();
   return redirect()->route('homepage')->with('msg', 'Logout success');
})->name('logout');

Route::get('register', 'RegisterController@create')->name('register');
Route::post('register', 'RegisterController@store')->name('register');

Route::get('forgot-pwd', function() {
    return view('admin.auth.forgotpassword');
})->name('forgotpwd');


