<?php
namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
class RegisterController extends Controller
{
    public function create()
    {
        return view('create');
    }
    public function store(Request $request)
    {
       $input = $request->validate([
        'name' => 'required',
        'email' => 'required',
        'password' => 'required',
       ]);
  $admin=USER::create($input);
return redirect(route('getdata'));
    }
}
