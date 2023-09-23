<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Project;
use Illuminate\Support\Facades\File;

class AllprojectsController extends Controller
{
    public function allprojects()
    {
        $projects = Project::all();
        return view('admin.allprojects')->with('projects', $projects);
    }



    public function create()
    {
        return view('admin.add-project');
    }



       // ?Store function for projects
       public function store(Request $request)
       {
           if ($request->hasFile("cover")) {
               $file = $request->file("cover");
               $imageName = time() . '_' . $file->getClientOriginalName();
               $file->move(\public_path("projects-img/"), $imageName);

               $project = new Project([
                   "projecttitle" => $request->projecttitle,
                   "subservice" => $request->subservice,
                   "media" => $imageName,
                   "date" => $request-> $date,
                   "hyperlinks" => $request->hyperlinks,

               ]);
               $project->save();
           }
           return redirect("/admin/allprojects")->with('success', 'Post Created Successfully');
       }

       // ?Edit function for peojects
       public function edit($id)
       {
           $projects = Project::findOrFail($id);

           return view('admin.editproject')->with('projects', $projects);
       }

       // ?Update function for posts
       public function update(Request $request, $id)
       {
           $project = Project::findOrFail($id);
           if ($request->hasFile("cover")) {
               if (file::exists("projects-img/" . $project->media)) {
                   File::delete("projects-img/" . $project->media);
               }
               $file = $request->file("cover");
               $project->media = time() . "_" . $file->getClientOriginalName();
               $file->move(\public_path("/projects-img"), $project->media);
               $request['cover'] = $project->media;
           }

           $project->update([
               "projecttitle" => $request->projecttitle,
               "subservice" => $request->subservice,
               "media" => $project->media,
               "date" =>  $request->date,
               "hyperlinks" => $request->hyperlinks,

           ]);

           return redirect("/admin/allprojects")->with('success', 'Post Updated Successfully');
       }

       public function destroy($id)
       {
           $project = Project::findOrFail($id);

           if (File::exists("projects-img/" . $project->media)) {
               File::delete("projects-img/" . $project->media);
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
