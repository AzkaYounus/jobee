<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Foundation\Auth\User as AuthUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth as Auth;
use Illuminate\Validation\Rules\Password;

class RegisteredUserController extends Controller
{
     public function create(){
        return view('auth.register');
     }


     /* this function will do what should happen when user enter fields and press resgister 
      first validate everything , apply terms and conditions 
      and then store in database */ 
     public function store(){
        

        //validate 
        $attributes = request()->validate([
         'name'=>['required'],
         'email'=>['required','email'],
         'password'=>['required', Password::min(6),'confirmed'],
        ]);
        //create user
        $user = User::create($attributes);
        //login
        Auth::login($user);
        // redirect to page 
        return redirect('/jobs');


     }
}

