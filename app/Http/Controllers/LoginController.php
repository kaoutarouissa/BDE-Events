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

        if (Auth::user()->role == 'bde') {
            return redirect()->route('bde-dacshboard');
        }
        
         if (Auth::user()->role == 'Étudiant') {
            return redirect()->route('Étudiant-dacshboard');
        }
        }
        
     return back()->withErrors([
        'email' => 'Email ou mot de passe incorrect.',
    ]);
    }
}
