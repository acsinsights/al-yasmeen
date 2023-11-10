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
use App\Models\WebsiteData;
use Illuminate\Support\Facades\File;

class PageController extends Controller
{
    public function getWebsiteSettings()
    {
        $settings = WebsiteData::all();
        $data = [];
        foreach ($settings as  $setting) {
            $data[$setting->slug] =   $setting->value;
        }
        return $data;
    }

    public function home()
    {
        $data = $this->getWebsiteSettings();
        $projects = Project::all();
        // dd($data["facebook-link"]);
        return view('frontend.home', compact('projects','data'));
    }
    public function  enquiry_store(Request $request)
    {
        $request->validate([
            "name" => "required",
            "email" => "required|email",
            "phone" => "required",
            "message" => "required",
        ]);

        $enquiry = new Enquiry([
            "name" => $request->name,
            "email" => $request->email,
            "phone" => $request->phone,
            "message" => $request->message,
        ]);
        $enquiry->save();

        return back()->with('success', 'Form submitted successfully');
    }
    public function about()
    {
        $data = $this->getWebsiteSettings();
        $testimonials = Testimonial::all();
        return view('frontend.about', compact('testimonials','data'));
    }
    public function services()
    {
        $data = $this->getWebsiteSettings();
        return view('frontend.services', compact('data'));
    }

    public function project()
    {
        $data = $this->getWebsiteSettings();
        $projects = Project::latest()->with('images')->paginate(4);
        $testimonials = Testimonial::all();
        return view('frontend.project', compact('projects', 'testimonials', 'data'));
    }
    public function contact()
    {
        $data = $this->getWebsiteSettings();
        return view('frontend.contact',compact('data'));
    }

    protected function contact_store(Request $request)
    {

        $request->validate([
            "name" => "required",
            "email" => "required|email",
            "phone" => "required",
            "message" => "required",
        ]);

        $form = new Message([
            "name" => $request->name,
            "email" => $request->email,
            "phone" => $request->phone,
            "message" => $request->message,
        ]);
        $form->save();

        return back()->with('success', 'Form submitted successfully');
    }
}
