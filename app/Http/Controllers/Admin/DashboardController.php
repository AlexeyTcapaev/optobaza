<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\User;
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

        return view('admin.catalog');
    }
}
