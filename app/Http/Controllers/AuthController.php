<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Inscription;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{
    //login
    public function login(Request $request)
    {
        // Validate the request data
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Get credentials from the request
        $credentials = $request->only('email', 'password');

        // Attempt to log the user in
        if (Auth::attempt($credentials)) {
            // Authentication passed
            return redirect()->intended('home'); 
        }

        // Authentication failed, no redirect and error message
        return back()->withErrors([
            'email' => 'Email ou mdp non valide !',
        ]);
    }


    // signup
    // public function signup(Request $request)
    // {
        
    //     $request->validate([
    //         'f_name' => 'required|string|max:255',
    //         'l_name' => 'required|string|max:255',
    //         'email' => 'required|string|email|max:255|unique:users',
    //         'password' => 'required|string|min:8|confirmed',
    //     ]);
    //     DB::beginTransaction();

    //     try {
    //     // Create a new user
    //     $user = User::create([
    //         'f_name' => $request->f_name,
    //         'l_name' => $request->l_name,
    //         'email' => $request->email,
    //         'password' => Hash::make($request->password),
    //     ]);

    //     if ($user) {
    //         // Create a new inscription
    //         $inscription = Inscription::create([
    //             'user_id' => $user->id,
    //             'f_name' => $request->f_name,
    //             'l_name' => $request->l_name,
    //             'email' => $request->email,
    //             'password' => Hash::make($request->password),
    //         ]);

    //         DB::commit();
    //     // Log the user in
    //         Auth::login($user);

    //         // Redirect to intended route or dashboard
    //         return redirect()->intended('home'); 
    //     } else {
    //         DB::rollback();
    //         // Handle error if user creation failed
    //         return redirect()->back()->withErrors(['error' => 'Failed to create user.'])->withInput();
    //     }
    // } catch (Exception $e) {
    //     // Rollback the transaction on exception
    //     DB::rollback();

    //     // If an error occurs, redirect back with an error message
    //     return redirect()->back()->withErrors(['error' => 'There was a problem with your signup. Please try again.'])->withInput();
    // }}

    public function signup(Request $request)
{
    // Validate the request data
    $request->validate([
        'f_name' => 'required|string|max:255',
        'l_name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users',
        'password' => 'required|string|min:8|confirmed',
    ]);

    // Start a database transaction
    DB::beginTransaction();

    try {
        // Create a new user
        $user = User::create([
            'f_name' => $request->f_name,
            'l_name' => $request->l_name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Ensure the user was created successfully
        if ($user) {
            // Create a new inscription
            $inscription = Inscription::create([
                'user_id' => $user->id, // Assign the user_id
                'f_name' => $request->f_name,
                'l_name' => $request->l_name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);

            // Commit the transaction
            DB::commit();

            // Log the user in
            Auth::login($user);

            // Redirect to intended route or dashboard
            return redirect()->intended('home'); 
        } else {
            // Rollback the transaction if user creation failed
            DB::rollback();

            // Handle error if user creation failed
            return redirect()->back()->withErrors(['error' => 'Failed to create user.'])->withInput();
        }

    } catch (Exception $e) {
        // Rollback the transaction on exception
        DB::rollback();

        // If an error occurs, redirect back with an error message
        return redirect()->back()->withErrors(['error' => 'There was a problem with your signup. Please try again.'])->withInput();
    }
}
}
