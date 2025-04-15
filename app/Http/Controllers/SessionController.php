<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
    public function create(){
        return view('auth.login');
    }
    public function store(){
      //validate
      $attributes = request()->validate([
           'email'=>['required','email'],
           'password'=>['required']
      ]);
      //attempt to user login 
    
      if (!  Auth::attempt($attributes)){
       throw ValidationException::withMessages([
        'email'=>'Sorry, these Credentials do not match.'
       ]);
      };

      //regenerate session tokken
      request()->session()->regenerate();
      //redirect
      return redirect('/jobs');

    }
    public function destroy(){
        Auth::logout();
        return redirect('/');
     }
}
