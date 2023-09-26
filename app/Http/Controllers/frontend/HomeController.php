<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Image;

class HomeController extends Controller
{
    // public function index()
    // {
    //     return view('frontend.home');
    // }
     public function index()
     {
         $projects = Project::all();
         return view('frontend.home')->with('projects', $projects);
     }
    public function services()
    {
        return view('frontend.services');
    }
    public function project()
    {
        return view('frontend.project');
    }
    public function about()
    {
        return view('frontend.about');
    }
    public function contact()
    {
        return view('frontend.contact');
    }
}
