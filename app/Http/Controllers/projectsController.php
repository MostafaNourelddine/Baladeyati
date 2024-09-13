<?php

namespace App\Http\Controllers;


use App\Models\projects;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class projectsController extends Controller
{
    public function search(Request $request){
        return view('search.projects',[
            'projects'=>projects::latest()->filter(request(['search']))->simplePaginate(3)
        ]);
    }
    public function index(){
        // $projects=projects::paginate(15);
        // return view('sections.projects',compact('projects'));
        return view('sections.projects',[
            'projects'=>projects::latest()->paginate(15)
        ]);
    }
    public function create(){
        return view('create.createproject');
    }
    public function store(Request $request)
    {
       $input = $request->validate([
        'date' => 'required',
        'title' => 'required',
        'banner_image'=>'required',
        'summary' => 'required',
        'end_date' => 'required',
        'tinymce_body' => 'required',
       ]);
  $projects=projects::create($input);
return redirect(route('projectIndex'));
}
public function openProject(projects $project){
return view('sections.project',['project'=>$project]);
}
public function projectEdit(projects $project){
    // dd($project);
return view('edit.projectedit',['project'=>$project]);
}

public function update(projects $project,Request $request){
    $input = $request->validate([
        'date' => 'required',
        'title' => 'required',
        'summary' => 'required',
        'banner_image'=>'required',

        'end_date' => 'required',
        'tinymce_body' => 'required',
       ]);
       $project->update($input);
return redirect(route('projectIndex'));
}
}
