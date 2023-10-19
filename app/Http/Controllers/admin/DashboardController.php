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
        $forms = Message::latest()->take(5)->get();
        $forms= Message::all();
        $mytime = Carbon::now()->format('Y-m-d');
        return view('admin.dashboard', compact('projects', 'users','forms','mytime'));
    }
    public function testimonial()
    {
        return view('admin.alltestimonial');
    }

    public function profile()
    {
        $users = User::all();
        return view('admin.profile', compact('users'));
    }
    public function upload(Request $request)
    {
        if($request->hasFile('profile_img')){
            $filename = $request->profile_img->getClientOriginalName();
            $destinationPath = public_path('profile-img/');
            Auth()->user()->update(['profile_img'=>$filename]);
        }
        return redirect()->back();
    }

    protected function formmessage(Request $request,$id)
    {
        $forms= Message::findOrFail($id);
        return view('admin.form-messages',compact('forms'));
    }
    protected function inbox()
    {
        $forms= Message::all();
        return view('admin.form',compact('forms'));
    }

    protected function enquiryinbox()
    {
        $enquiryforms= Enquiry::all();
        return view('admin.enquiry-form.enquiryform',compact('enquiryforms'));
    }

    // protected function widgets()
    // {
    //     $users= User::all();
    //     return view('admin.integration.widgets',compact('users'));
    // }

    //  protected function tracking()
    //  {
    //      return view('admin.integration.tracking');
    //  }
    protected function enquiry()
    {
        $enquiryforms= Enquiry::all();
        return view('admin.enquiry-form',compact('enquiryforms'));
    }
    protected function d_form($id)
    {
        // contact form
        $forms = Message::findOrFail($id);
        $forms->delete();
        return back()->with('success', 'Deleted successfully');
    }
    protected function enquiry_form($id)
    {
        // enquiry form
        $enquiryforms = Enquiry::findOrFail($id);
        $enquiryforms->delete();
        return back()->with('success', 'Deleted successfully');
    }
    protected function all_d_form()
    {
        $forms = Message::truncate();
        return back()->with('success', 'All messages deleted successfully');
    }
}
