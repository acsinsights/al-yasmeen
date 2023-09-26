<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\User;

class DashboardController extends Controller
{
    protected function index()
    {
        $projects = Project::all();
        $users= User::all();
        return view('admin.dashboard', compact('projects', 'users'));
    }
    public function profile()
    {
         $users = User::all();
        return view('admin.profile');
    }
    protected function inbox()
    {
        $forms= Message::all();
        return view('admin.form',compact('forms'));
    }


}
