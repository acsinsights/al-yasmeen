<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;
use Illuminate\Support\Facades\File;
use App\Http\Controllers\ImageResizer;
use Illuminate\Support\Str;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::latest()->paginate(10);
        return view('admin.project.index', compact('projects'));
    }
    public function create()
    {
        return view('admin.project.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            "title" => "required|string|min:3|max:255",
            "company_name" => "required|string",
            "company_logo" => "required|image|mimes:jpeg,png,jpg|max:1024",
            "description" => "required|string",
            "preview_img" => "required|image|mimes:jpeg,png,jpg|max:1024",
            "location" => "required|string",
            "date" => "required|date",
        ]);

        if ($request->hasFile("company_logo")) {
            $company_logo_file = $request->file("company_logo");
            $company_logo_image =  ImageResizer::resizeImage($company_logo_file, 300);
            $company_logo_name = Str::slug($request->title) . "_" . time() . "_" . $company_logo_file->getClientOriginalName();
            $destinationPath = public_path('project/client/');
            $company_logo_image->save($destinationPath . $company_logo_name);
        }
        if ($request->hasFile("preview_img")) {
            $preview_img_file = $request->file("preview_img");
            $preview_img_image =  ImageResizer::resizeImage($preview_img_file, 300);
            $preview_img_name =  Str::slug($request->title) . "_" . time() . "_" . $preview_img_file->getClientOriginalName();
            $destinationPath = public_path('project/preview/');
            $preview_img_image->save($destinationPath . $preview_img_name);
        }

        $project = new Project();
        $project->title = $request->title;
        $project->company_name = $request->company_name;
        $project->company_logo = $company_logo_name;
        $project->description = $request->description;
        $project->preview_img = $preview_img_name;
        $project->location = $request->location;
        $project->date = $request->date;
        $project->save();

        return redirect()->route('admin.project.index')->with('success', 'Project created successfully.');
    }


    public function edit($id)
    {
        $projects = Project::findOrFail($id);

        return view('admin.project.edit', compact('projects'));
    }
    public function update(Request $request, $id)
    {
        $project = Project::findOrFail($id);
        if ($request->hasFile("cover")) {
            if (file::exists("projects-img/" . $project->preview_img)) {
                File::delete("projects-img/" . $project->preview_img);
            }
            $file = $request->file("cover");
            $project->preview_img = time() . "_" . $file->getClientOriginalName();
            $file->move(\public_path("/projects-img"), $project->preview_img);
            $request['cover'] = $project->preview_img;
        }

        $project->update([
            "projecttitle" => $request->projecttitle,
            "subservice" => $request->subservice,
            "preview_img" => $project->preview_img,
            "date" =>  $request->date,
            "hyperlinks" => $request->hyperlinks,

        ]);

        return redirect("/admin/project")->with('success', 'Post Updated Successfully');
    }

    public function destroy($id)
    {
        $project = Project::findOrFail($id);

        if (File::exists("projects-img/" . $project->preview_img)) {
            File::delete("projects-img/" . $project->preview_img);
        }
        $project->delete();
        return back()->with('success', 'Post Deleted Successfully');
    }

    public function deletecover($id)
    {
        $cover = Project::findOrFail($id)->cover;
        if (File::exists("cover/" . $cover)) {
            File::delete("cover/" . $cover);
        }
        return back();
    }
}
