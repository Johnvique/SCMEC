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
});

Route::get('/profile', function () {
    return view('profile');
});
Route::get('/admin/index', function () {
    return view('admin/index');
});

Route::get('/primary', function () {
    return view('primary');
});
Route::get('/secondary', function () {
    return view('secondary');
});
Route::get('/boys', function () {
    return view('boys');
});

Route::get('/admission', function () {
    return view('admission');
});

Route::get('/school_gallery', function () {
    return view('school_gallery');
});

Route::get('/fee_structure', function () {
    return view('fee_structure');
});

Route::get('/contact', function () {
    return view('contact');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
