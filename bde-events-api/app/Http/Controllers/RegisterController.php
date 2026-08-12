<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
class RegisterController extends Controller
{
    //
    public function register(Request $request){
        $validation=$request->validate([
            'name'=>'required|string|max:255',
            'email'=>'required|email|unique:users,email',
            'password'=>'required|confirmed',
            'role'=>'required'
            
        ]);
        $validation['password'] = Hash::make($validation['password']);

        $user=User::create($validation);
        // return redirect()->route('login');
        return response()->json([
            'message'=>'Compte créé avec succes',
            'user'=>$user,
        ],201);


    }
    public function showRegister(){
        return view('register');
    }
}
