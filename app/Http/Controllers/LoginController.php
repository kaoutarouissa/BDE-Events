<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    public function index(Request $request){
    $validate=$request->validate([
        'email'=>'required|email',
        'password'=>'required'
    ]);
      if (Auth::attempt($validate)) {
          $request->session()->regenerate();
          $user=Auth::user();

        if ($user->role == 'bde') {
            return redirect()->route('bde-dashboard');
        }
        
         if ($user->role == 'etudiant') {
            return redirect()->route('etudiant-dashboard');
        }
        }
        
     return back()->withErrors([
        'email' => 'Email ou mot de passe incorrect.',
    ]);
    }
}
