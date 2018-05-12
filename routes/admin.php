<?php

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register admin routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "admin" middleware group. Now create something great!
|
*/

Route::get('/', function() {
    $routes = Route::getRoutes();
    return view('admin.dashbroad.index', compact('routes'));
})->name('admin');

Route::get('category', function() {
    return view('admin.category.index');
});
Route::get('index', function() {
    $routes = Route::getRoutes();
    return view('admin.dashbroad.index', compact('routes'));
});

Route::get('404', function() {
    return view('admin.error.404');
})->name('404');


Route::get('500', function() {
    return view('admin.error.500');
})->name('500');