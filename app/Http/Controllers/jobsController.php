<?php

namespace App\Http\Controllers;

use App\Models\jobs;
use Illuminate\Http\Request;

class jobsController extends Controller
{
    public function search(Request $request){
        return view('search.jobs',[
            'jobs'=>jobs::latest()->filter(request(['search']))->simplePaginate(3)
        ]);
    }
    public function index(){
        // $jobs=jobs::paginate(15);
        // return view('sections.jobs',compact('jobs'));
        return view('sections.jobs',[
            'jobs'=>jobs::latest()->paginate(15)
        ]);
    }
    public function create(){
        return view('create.createJob');
    }
    public function store(Request $request)
    {
       $input = $request->validate([
        'title' => 'required',
        'description' => 'required',
        'banner_image' => 'required',
        'tinymce_body' => 'required',
       ]);

  $jobs=jobs::create($input);
return redirect(route('jobIndex'));
}
public function openjob(jobs $job){
return view('sections.job',['job'=>$job]);
}
public function jobEdit(jobs $job){
    // dd($job);
return view('edit.jobedit',['job'=>$job]);
}

public function update(jobs $job,Request $request){
    $input = $request->validate([
        'title' => 'required',
        'description' => 'required',
        'banner_image' => 'required',
        'tinymce_body' => 'required',
       ]);

       $job->update($input);
return redirect(route('jobIndex'));
}
}


