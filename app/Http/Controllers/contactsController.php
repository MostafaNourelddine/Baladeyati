<?php

namespace App\Http\Controllers;


use App\Models\contacts;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class contactsController extends Controller
{
    public function index(){

        return view('sections.contacts',[
            'contacts'=>contacts::latest()->paginate(15)
        ]);
    }
    public function create(){
        return view('create.createcontact');
    }
    public function store(Request $request)
    {
       $input = $request->validate([
        'name' => 'required',
        'occupation' => 'required',
        'phoneNumber' => 'required',
        'email' => 'required',
       ]);
  $contacts=contacts::create($input);
return redirect(route('contactIndex'));
}
public function opencontact(contacts $contact){
return view('sections.contact',['contact'=>$contact]);
}
public function contactEdit(contacts $contact){
    // dd($contact);
return view('edit.contactedit',['contact'=>$contact]);
}

public function update(contacts $contact,Request $request){
    $input = $request->validate([
        'name' => 'required',
        'occupation' => 'required',
        'phoneNumber' => 'required',
        'email' => 'required',
       ]);
       $contact->update($input);
return redirect(route('contactIndex'));
}
}
