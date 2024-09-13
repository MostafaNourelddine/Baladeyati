<?php

namespace App\Http\Controllers;

use App\Models\about;
use Illuminate\Http\Request;

class aboutController extends Controller
{
    public function index(){

        return view('sections.aboutus',[
            'about'=>about::latest()->paginate(15)
        ]);
    }
    public function aboutEdit(about $about){
        // dd($about);
    return view('edit.aboutedit',['about'=>$about]);
    }

    public function update(about $about,Request $request){
        $input = $request->validate([
            'tinymce_body' => 'required',

           ]);
           $about->update($input);
    return redirect(route('aboutIndex'));
    }
}
