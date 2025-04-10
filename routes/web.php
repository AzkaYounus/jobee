<?php

use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;

// Home page 
Route::view('/','home');

Route ::controller(JobController::class)->group(function(){

    // Index (List all jobs)
Route::get('/jobs','index');

// Create job (Show the form to create a job)
Route::get('/jobs/create','create');

// Show job details by ID
Route::get('/jobs/{job}','show');  

// Store a new job
Route::post('/jobs','store');

// Edit job (Show the form to edit a job)
Route::get('/jobs/{job}/edit','edit');  

// Update a job
Route::patch('/jobs/{job}','update');  

// Delete a job
Route::delete('/jobs/{job}','destroy');  

});


// Contact page
Route::view('/contact','contact');
