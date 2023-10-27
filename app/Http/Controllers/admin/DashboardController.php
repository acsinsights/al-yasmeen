<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\User;
use App\Models\Enquiry;
use App\Models\Message;
use Carbon\Carbon;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Request as FacadesRequest;

class DashboardController extends Controller
{
    protected function index()
    {
        $projects = Project::all();
        $users= User::all();
        return view('admin.dashboard', compact('projects', 'users'));
    }


    public function testimonial()
    {
        return view('admin.testimonial.index');
    }

    public function profile()
    {
        $users = User::all();
        return view('admin.profile', compact('users'));
    }


}
