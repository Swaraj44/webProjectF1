<?php

namespace App\Http\Controllers;


use App\Models\User;
use App\Models\User_Info;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Routing\Controller as BaseController;



class UserController extends Controller
{
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        //  can  confirmation email




        // Create a new article record
        $userInfo = new User_Info();
        $userInfo->full_name = $request->input('full_name');
        $userInfo->user_name = $request->input('name');
        $userInfo->email = $request->input('email');
        $userInfo->role = $request->input('role');
        $userInfo->save();





        return redirect('/')->with('success', 'Registration successful! Please log in.');
    }





    /////////////////////
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            // Redirect to a specific page after successful login
            return redirect('/home');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
