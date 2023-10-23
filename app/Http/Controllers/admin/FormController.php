<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Message;
use App\Models\Enquiry;

class FormController extends Controller
{
    public function message_index()
    {
        $forms = Message::latest()->paginate(20);
        return view('admin.message.index', compact('forms'));
    }
    public function message_destroy($id)
    {
        $form = Message::where("id", $id);
        $form->delete();
        return redirect()->back();
    }
    public function message_export(Request $request)
    {
        $request->validate([
            'start_date' => 'required|date_format:Y-m-d',
            'end_date' => 'required|date_format:Y-m-d',
        ]);
        // convert date to timestamp
        $start_date = $request->start_date;
        $end_date = $request->end_date;
        $contact_forms = Message::whereBetween('created_at', [$start_date, $end_date])->get();

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


    public function enquiry_index()
    {
        $forms = Enquiry::latest()->paginate(20);
        return view('admin.enquiry.index', compact('forms'));
    }
    public function enquiry_destroy($id)
    {
        $form = Enquiry::where("id", $id);
        $form->delete();
        return redirect()->back();
    }
    public function  enquiry_export(Request $request)
    {
        $request->validate([
            'start_date' => 'required|date_format:Y-m-d',
            'end_date' => 'required|date_format:Y-m-d',
        ]);
        // convert date to timestamp
        $start_date = $request->start_date;
        $end_date = $request->end_date;
        $contact_forms = Message::whereBetween('created_at', [$start_date, $end_date])->get();

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
}
