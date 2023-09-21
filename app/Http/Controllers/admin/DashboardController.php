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
    public function profile()
    {
        // $users = User::all();
        return view('admin.profile');
    }


}
