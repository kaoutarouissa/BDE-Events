<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
   public function login(Request $request)
{
    $credentials = $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);

    if (!Auth::attempt($credentials)) {
        return response()->json([
            'message' => 'Email ou mot de passe incorrect'
        ], 401);
    }

    $user = Auth::user();

    $token = $user->createToken('auth_token')->plainTextToken;

    return response()->json([
        'message' => 'Connexion réussie',
        'token' => $token,
        'user' => $user,
    ], 200);
}
}
