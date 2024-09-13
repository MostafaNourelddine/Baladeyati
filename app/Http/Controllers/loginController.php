<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Hash;
class LoginController extends Controller
{
    public function index()
    {
        return view('adminlogin');
    }
    public function check(Request $request)
    {
     $credentials = $request->validate([
     'email' => ['required', 'email'],
     'password' => ['required'],
        ]);

        if (Auth::attempt($credentials))
        {
           return redirect(route('getdata')) ;
         }
          return redirect(route('login'));
       }
       public function logout(Request $request){
             auth()->logout();
             $request->session()->invalidate();
             $request->session()->regenerateToken();
             return redirect(route('login'));
       }
}
