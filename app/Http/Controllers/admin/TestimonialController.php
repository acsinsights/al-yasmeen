<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Testimonial; 
use Illuminate\Support\Facades\File;

class TestimonialController extends Controller
{
    public function index()
    {
        $testimonials = Testimonial::all();
        return view('admin.alltestimonial')->with('testimonials', $testimonials);
    }

    public function create()
    {
        return view('admin.addtestimonial');
    }

    public function store(Request $request)
    {
        if ($request->hasFile("cover")) {
            $file = $request->file("cover");
            $imageName = time() . '_' . $file->getClientOriginalName();
            $file->move(\public_path("testiimages/"), $imageName);

            $testimonials = new Testimonial([
                "custname" => $request->name,
                "custdesignation" => $request->custdesignation,
                "custreview" => $request->review,
                "custimg" => $imageName,
            //   "custlogo" => $imageName,
                "custcompany" => $request->custcompany,
                "date" => $request->date,
            ]);
            $testimonials->save();
        }

        return redirect("/admin/alltestimonial")->with('success', 'Added Successfully');
    }

    // ?Edit function for posts
    public function edit($id)
    {
        $testimonials = Testimonial::findOrFail($id);
        return view('admin.edittestimonial')->with('testimonials', $testimonials);
    }

    // ?Update function for posts
    public function update(Request $request, $id)
    {
        $post = Testimonial::findOrFail($id);
        if ($request->hasFile("cover")) {
            if (file::exists("testiimages/" . $post->custimg)) {
                File::delete("testiimages/" . $post->custimg);
            }
            $file = $request->file("cover");
            $post->custimg = time() . '_' . $file->getClientOriginalName();
            $file->move(\public_path("testiimages/"),  $post->custimg);
            $request['cover'] =  $post->custimg;
        }
        $post->update([
            "custname" => $request->name,
            "custdesignation" => $request->custdesignation,
            "custreview" => $request->review,
             "custimg" =>  $post->custimg,
        //    "custlogo" => $request->cover,
            "custcompany" => $request->custcompany,
            "date" => $request->date,
        ]);
        return redirect("/admin/alltestimonial")->with('success', 'Updated Successfully');
    }
    public function destroy($id)
    {
        $posts = Testimonial::findOrFail($id);

        if (File::exists("testiimages/" . $posts->custimg)) {
            File::delete("testiimages/" . $posts->custimg);
        }
        $posts->delete();
        return back()->with('success', 'Deleted Successfully');
    }
    public function deletecover($id)
    {
        $custimg = Testimonial::findOrFail($id)->custimg;
        if (File::exists("testiimages/" . $custimg)) {
            File::delete("testiimages/" . $custimg);
        }
        return back();
    }
}
