<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\User;
use App\Category;
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
        $categories = Category::all();
        return view('admin.catalog', [
            'categories' => $categories
        ]);
    }
    public function products()
    {
        return view('admin.products');
    }
}
