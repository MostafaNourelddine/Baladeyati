<?php

namespace App\Http\Controllers;

use App\Models\news;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class newsController extends Controller
{
    public function search(Request $request){
        return view('search.news',[
            'news'=>news::latest()->filter(request(['search']))->simplePaginate(3)
        ]);
    }
    public function index(){
        // $news=news::paginate(15);
        // return view('sections.news',compact('news'));
        return view('sections.news',[
            'news'=>news::latest()->paginate(15)
        ]);
    }
    public function create(){
        return view('create.createNew');
    }
    public function store(Request $request)
    {
       $input = $request->validate([
        'title' => 'required',
        'summary' => 'required',
        'banner_image' => 'required',
        'tinymce_body' => 'required',
       ]);
  $news=news::create($input);
return redirect(route('index'));
}
public function openNew(news $new){
return view('sections.new',['new'=>$new]);
}
public function showEdit(news $new){
    // dd($new);
return view('edit.edit',['new'=>$new]);
}

public function update(news $new,Request $request){
    $input = $request->validate([
        'title' => 'required',
        'summary' => 'required',
        'banner_image' => 'required',
        'tinymce_body' => 'required',
       ]);

       $new->update($input);
return redirect(route('index'));
}
}
