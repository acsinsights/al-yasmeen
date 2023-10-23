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
        return view('admin.testimonial.index');
    }

    public function profile()
    {
        $users = User::all();
        return view('admin.profile', compact('users'));
    }
    // public function upload(Request $request)
    // {
    //     if($request->hasFile('profile_img')){
    //         $filename = $request->profile_img->getClientOriginalName();
    //         $destinationPath = public_path('profile-img/');
    //         Auth()->user()->update(['profile_img'=>$filename]);
    //     }
    //     return redirect()->back();
    // }

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
    public function export(Request $request)
    {
        $request->validate([
            'start_date' => 'required|date_format:Y-m-d',
            'end_date' => 'required|date_format:Y-m-d',
        ]);
        // convert date to timestamp
        $start_date = $request->start_date;
        $end_date = $request->end_date;
        $contact_forms = ContactForm::whereBetween('created_at', [$start_date, $end_date])->get();

        $fileName = 'contact_forms.csv';
        $headers = array(
            "Content-type"        => "text/csv",
            "Content-Disposition" => "attachment; filename=$fileName",
            "Pragma"              => "no-cache",
            "Cache-Control"       => "must-revalidate, post-check=0, pre-check=0",
            "Expires"             => "0"
        );
        $columns = array('Name', 'Email', 'Phone', 'Message', 'Created At');
        $callback = function () use ($contact_forms, $columns) {
            $file = fopen('php://output', 'w');
            fputcsv($file, $columns);
            foreach ($contact_forms as $contact_form) {
                $row['Name']  = $contact_form->name;
                $row['Email']    = $contact_form->email;
                $row['Phone']    = $contact_form->phone;
                $row['Message']  = $contact_form->message;
                $row['Created At']  = $contact_form->created_at;
                fputcsv($file, array($row['Name'], $row['Email'], $row['Phone'], $row['Message'], $row['Created At']));
            }
            fclose($file);
        };
        return response()->stream($callback, 200, $headers);
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
