<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminLayoutController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }
    public function users()
    {
        return view('admin.users');
    }
}
