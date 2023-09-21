<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    protected function index()
    {
        return view('admin.dashboard');
    }
    protected function login()
    {
        return view('admin.login');
    }
}