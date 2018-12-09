<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\User;
use App\Category;
use App\Product;
use App\Slide;
use App\Tag;
use App\Page;
use App\Http\Controllers\Controller;
use App\News;

class DashboardController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('admin.index', [
            'users' => $users
        ]);
    }
    public function catalog()
    {
        $categories = Category::get()->toTree();
        return view('admin.catalog', [
            'categories' => $categories
        ]);
    }
    public function tags()
    {
        $tags = Tag::all();
        return view('admin.tags', ['tags' => $tags]);
    }
    public function products()
    {
        $categories = Category::all();
        $tags = Tag::all();
        $products = Product::all()->load('category');
        return view('admin.products', [
            'categories' => $categories,
            'tags' => $tags,
            'products' => $products
        ]);
    }
    public function carousel()
    {
        $slides = Slide::all();
        $categories = Category::all();
        $products = Product::all();
        return view('admin.carousel', [
            'slides' => $slides,
            'categories' => $categories,
            'products' => $products,
        ]);
    }
    public function pages()
    {
        $pages = Page::all();
        return view('admin.pages', [
            'pages' => $pages
        ]);
    }
    public function news()
    {
        $news = News::all();
        return view('admin.news', [
            'news' => $news
        ]);
    }
}
