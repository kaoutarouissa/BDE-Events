<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    public function login(Request $request){
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
                  $user=Auth::user();

            $token = $user->createToken('auth_token')->plainTextToken;

      return response()->json([
        'message' => 'Connexion réussie',
        'user' => $user,
        'token' => $token
    ], 200);
    }
}
