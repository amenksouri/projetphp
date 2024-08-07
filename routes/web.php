<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\FreelanceJobController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//home
Route::get('/home', function () {
    return view('home');
});

// login get
Route::get('/login', function () {
    return view('login');
})->name('login');

// login post
Route::post('/login', [AuthController::class, 'login'])->name('login.post');

// sign up get
Route::get('/signup', function () {
    return view('signup');
})->name('signup');

//signup post
Route::post('/signup', [AuthController::class, 'signup'])->name('signup.post');

//logout route
Route::post('/logout', [LogoutController::class, 'logout'])->name('logout');

// Route to show the form for adding a freelance job
Route::get('/jobs/create', function () {
    return view('add_freelance');
})->name('add_freelance');

// Route to store the newly created freelance job in the database
Route::post('/jobs', [FreelanceJobController::class, 'store'])->name('add_freelance');


Route::get('/jobs', [FreelanceJobController::class, 'index'])->name('list_freelance');

Route::delete('/jobs/{id}', [FreelanceJobController::class, 'destroy'])->name('jobs.destroy');
Route::post('/jobs/{id}/apply', [FreelanceJobController::class, 'apply'])->name('jobs.apply');