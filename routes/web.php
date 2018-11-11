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
    return view('index');
});
Route::get('/contacts', function () {
    return view('contacts');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/work', function () {
    return view('work');
});
Route::get('/catalog', function () {
    return view('catalog');
});
Route::get('/login', function () {
    return view('login');
});

Route::name('admin.')->namespace('Admin')->prefix('admin')->middleware('auth', 'is_admin')->group(function () {
    Route::get('/', 'DashboardController@index');
    Route::get('/catalog', 'DashboardController@catalog')->name('catalog');
    Route::resource('users', 'UsersController');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
