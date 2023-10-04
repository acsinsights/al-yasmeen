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
    public function show($id)
    {
        $project = Project::findOrFail($id);
        $images = $project->images()->get();
        return view('admin.project.show', compact('project', 'images'));
    }
    public function create()
    {
        return view('admin.project.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            "title" => "required|string|min:3|max:255",
            "sub_title" => "required|string|min:3|max:255",
            "company_name" => "required|string",
            "company_logo" => "required|image|mimes:jpeg,png,jpg|max:1024",
            "description" => "required|string",
            "preview_img" => "required|image|mimes:jpeg,png,jpg",
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
        $project->sub_title = $request->sub_title;
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
        $project = Project::findOrFail($id);

        return view('admin.project.edit', compact('project'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            "title" => "required|string|min:3|max:255",
            "company_name" => "required|string",
            "company_logo" => "nullable|image|mimes:jpeg,png,jpg|max:1024",
            "description" => "required|string",
            "preview_img" => "nullable|image|mimes:jpeg,png,jpg|max:1024",
            // "preview_img" => "nullable|image|mimes:jpeg,png,jpg|max:1024|dimensions:ratio=16/9",
            "location" => "required|string",
            "date" => "required|date",
        ]);
        $project = Project::findOrFail($id);
        if ($request->hasFile("company_logo")) {
            $company_logo_file = $request->file("company_logo");
            $company_logo_image =  ImageResizer::resizeImage($company_logo_file, 300);
            $company_logo_name = Str::slug($request->title) . "_" . time() . "_" . $company_logo_file->getClientOriginalName();
            $destinationPath = public_path('project/client/');
            $company_logo_image->save($destinationPath . $company_logo_name);
            // delete old image
            if (File::exists("project/client/" . $project->company_logo)) {
                File::delete("project/client/" . $project->company_logo);
            }
        }
        if ($request->hasFile("preview_img")) {
            $preview_img_file = $request->file("preview_img");
            $preview_img_image =  ImageResizer::resizeImage($preview_img_file, 300);
            $preview_img_name =  Str::slug($request->title) . "_" . time() . "_" . $preview_img_file->getClientOriginalName();
            $destinationPath = public_path('project/preview/');
            $preview_img_image->save($destinationPath . $preview_img_name);
            // delete old image
            if (File::exists("project/preview/" . $project->preview_img)) {
                File::delete("project/preview/" . $project->preview_img);
            }
        }
        $project->title = $request->title;
        $project->company_name = $request->company_name;
        if ($request->hasFile("company_logo")) {
            $project->company_logo = $company_logo_name;
        }
        $project->description = $request->description;
        if ($request->hasFile("preview_img")) {
            $project->preview_img = $preview_img_name;
        }
        $project->location = $request->location;
        $project->date = $request->date;
        $project->save();

        return redirect()->route('admin.project.index')->with('success', 'Project updated successfully.');
    }

    public function destroy($id)
    {
        $project = Project::findOrFail($id);
        if (File::exists("project/client/" . $project->company_logo)) {
            File::delete("project/client/" . $project->company_logo);
        }
        if (File::exists("project/preview/" . $project->preview_img)) {
            File::delete("project/preview/" . $project->preview_img);
        }
        $project->delete();
        return back()->with('success', 'Project deleted successfully.');
    }

    public function create_image($project_id)
    {
        $project = Project::findOrFail($project_id);
        return view('admin.project.image.create', compact('project'));
    }
    public function store_image($project_id, Request $request)
    {
        $request->validate([
            "project_image" => "required|image|mimes:jpeg,png,jpg|max:1024",
            "image_alt" => "nullable|string",
        ]);
        $project = Project::findOrFail($project_id);
        if ($request->hasFile("project_image")) {
            $image_file = $request->file("project_image");
            $image_image =  ImageResizer::resizeImage($image_file, 300);
            $image_name = Str::slug($project->title) . "_" . time() . "_" . $image_file->getClientOriginalName();
            $destinationPath = public_path('project/image/');
            $image_image->save($destinationPath . $image_name);
            $project->images()->create([
                "project_id" => $project->id,
                "image" => $image_name,
                "alt" => $request->image_alt,
            ]);
        }
        return redirect()->route('admin.project.show', $project->id)->with('success', 'Project image created successfully.');
    }
    public function destroy_image($project_id, $image_id)
    {
        $project = Project::findOrFail($project_id);
        $image = $project->images()->findOrFail($image_id);
        if (File::exists("project/image/" . $image->image)) {
            File::delete("project/image/" . $image->image);
        }
        $image->delete();
        return back()->with('success', 'Project image deleted successfully.');
    }
}
