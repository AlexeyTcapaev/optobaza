<?php

use App\Navbar;
use App\Page;
use App\Slide;
use App\Product;
use App\News;
use App\Category;
use Illuminate\Http\Request;

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
    $recomendated = Product::where('recomendated', 1)->get();
    return view('index', [
        'carousel' => $carousel,
        'recomendated' => $recomendated
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
    $categories = Category::where('parent_id', null)->get();
    return view('catalog', [
        'categories' => $categories
    ]);
});

Route::post('/cart/add', function (Request $request) {

    $product = Product::find($request->id);
    Cart::add([
        'id' => $product->id,
        'name' => $product->name,
        'price' => 0,
        'quantity' => 1,
    ]);
    return back();
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/news', function () {
    $news = News::all();
    return view('news', [
        'news' => $news
    ]);
});
Route::get('/cart', function () {
    $cart = Cart::getContent();
    foreach ($cart as $key => $order) {
        $order->product = Product::find($order->id);
    }
    return view('cart', [
        'cart' => $cart
    ]);
});

Route::name('admin.')->prefix('admin')->middleware('auth', 'is_admin')->group(function () {
    Route::get('/', 'Admin\DashboardController@index');
    Route::get('catalog', 'Admin\DashboardController@catalog')->name('catalog');
    Route::get('tags', 'Admin\DashboardController@tags')->name('tags');
    Route::get('carousel', 'Admin\DashboardController@carousel')->name('carousel');
    Route::get('products', 'Admin\DashboardController@products')->name('products');
    Route::get('pages', 'Admin\DashboardController@pages')->name('pages');
    Route::get('adminnews', 'Admin\DashboardController@news')->name('adminnews');
    Route::resource('users', 'Admin\UsersController');
    Route::resource('category', 'CategoryController');
    Route::resource('tag', 'TagController');
    Route::resource('product', 'ProductController');
    Route::resource('slide', 'SlideController');
    Route::resource('page', 'PageController');
    Route::resource('news', 'NewsController');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/{page}', function ($page) {

    $page = Page::where('slug', $page)->first();
    if ($page)
        return view('page', [
        'page' => $page
    ]);
    else {
        return view('404');
    }
});
Route::get('catalog/{path}', 'CategoryController@show')->where('path', '[a-zA-Z0-9/_-]+');
Route::get('/{any}', function () {
    return view('404');
})->where('any', '.*');
