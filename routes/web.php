<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\SessionController;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Route;

// Home page 
Route::view('/','home');


Route ::controller(JobController::class)->group(function(){
Route::get('/jobs','index');
Route::get('/jobs/create','create');
Route::get('/jobs/{job}','show');  
Route::post('/jobs','store')->middleware('auth');
Route::get('/jobs/{job}/edit','edit')->middleware('auth')->can('can:edit-job,job' );
Route::patch('/jobs/{job}','update')->middleware('auth')->can('can:edit-job,job' );
Route::delete('/jobs/{job}','destroy')->middleware('auth')->can('can:edit-job,job' );  
});



// Contact page
Route::view('/contact','contact');


//Auth


Route::get('/register',[RegisteredUserController::class,'create']);
Route::post('/register',[RegisteredUserController::class,'store']);

Route::get('/login',[SessionController::class,'create']);
Route::post('/login',[SessionController::class,'store']);
Route::post('/logout',[SessionController::class,'destroy']);

