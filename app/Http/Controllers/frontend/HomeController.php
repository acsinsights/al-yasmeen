<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Message;
use App\Models\Enquiry;
use App\Models\Testimonial;
use Carbon\Carbon;
use App\Models\User;

use Illuminate\Support\Facades\File;

class HomeController extends Controller
{
    // public function index()
    // {
    //     return view('frontend.home');
    // }
    public function index()
    {
        $users = User::all();
        $projects = Project::all();
        return view('frontend.home',compact('projects', 'users'));
    }
    public function services()
    {
        $users = User::all();
        return view('frontend.services' , compact('users'));
    }
    public function project()
    {
        $users = User::all();
        $projects = Project::latest()->with('images')->paginate(4);
        $testimonials = Testimonial::all();
        return view('frontend.project', compact('projects', 'testimonials','users'));
    }
    public function about()
    {
        $users = User::all();
        $testimonials = Testimonial::all();
        return view('frontend.about', compact('testimonials','users'));
    }
    public function contact()
    {
        $users = User::all();
        return view('frontend.contact')->with('users', $users);
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
    protected function enquirysubmit(Request $request)
    {
        $enquiryforms = new Enquiry([
            "name" => $request->name,
            "email" => $request->email,
            "phone" => $request->phone,
            'date' => Carbon::now()->format('Y-m-d'),
            "message" => $request->message,
        ]);
        $enquiryforms->save();

        return back()->with('success', 'Form submitted successfully');
    }
}
