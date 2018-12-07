<?php

use App\Navbar;
use App\Page;
use App\Slide;

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
    $carousel = Slide::with('linked')->get();
    return view('index', [
        'carousel' => $carousel
    ]);
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

Route::name('admin.')->prefix('admin')->middleware('auth', 'is_admin')->group(function () {
    Route::get('/', 'Admin\DashboardController@index');
    Route::get('catalog', 'Admin\DashboardController@catalog')->name('catalog');
    Route::get('tags', 'Admin\DashboardController@tags')->name('tags');
    Route::get('carousel', 'Admin\DashboardController@carousel')->name('carousel');
    Route::get('products', 'Admin\DashboardController@products')->name('products');
    Route::get('pages', 'Admin\DashboardController@pages')->name('pages');
    Route::resource('users', 'Admin\UsersController');
    Route::resource('category', 'CategoryController');
    Route::resource('tag', 'TagController');
    Route::resource('product', 'ProductController');
    Route::resource('slide', 'SlideController');
    Route::resource('page', 'PageController');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/{page}', function ($page) {
    $page = Page::where('slug', $page)->first();
    return view('page', [
        'page' => $page
    ]);
});
