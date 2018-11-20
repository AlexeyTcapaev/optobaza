<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\User;
use App\Category;
use App\Product;
use App\Tag;
use App\Http\Controllers\Controller;

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
        return view('admin.carousel');
    }
}
