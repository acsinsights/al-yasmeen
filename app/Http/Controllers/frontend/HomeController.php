<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Image;
use App\Models\Message;

use Carbon\Carbon;

use Illuminate\Support\Facades\File;

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







    protected function submit(Request $request)
    {
        $form = new Message([
            "name" => $request->name,
            "email" => $request->email,
            "phone" => $request->phone,
            'date' => Carbon::now()->format('Y-m-d'),
            // "links" => $request->link,
            // "service_id" => $request->select_req,
            "message" => $request->message,
        ]);
        $form->save();

        return back()->with('success', 'Form submitted successfully');
    }
}
