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


    public function showupdate()
    {
        return view('update profile');
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

        $userInfo->u_id = $request->input('u_id');
        $userInfo->mobile = $request->input('mobile');
        $userInfo->dept = $request->input('dept');
        $userInfo->type = $request->input('type');
        $userInfo->save();





        return redirect('/')->with('success', 'Registration successful! Please log in.');
    }


    ////////////////////////////////////////////////////////////////////////////////////////update  

   
    public function edit($id)
    {
        $userInfo = User_Info::find($id);
        
        return view('update profile', ['userInfo' => $userInfo]);
    }
    

    public function update(Request $request, $id)
    {
        $userInfo = UserInfo::findOrFail($id);
        
        $userInfo->full_name = $request->input('full_name');
        $userInfo->user_name = $request->input('user_name');
        $userInfo->email = $request->input('email');
        $userInfo->role = $request->input('role');

        $userInfo->u_id = $request->input('u_id');
        $userInfo->mobile = $request->input('mobile');
        $userInfo->dept = $request->input('dept');
        $userInfo->type = $request->input('type');
        
        $userInfo->save();

        return redirect()->route('profile')->with('success', 'User information updated successfully.');
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

        return redirect('/home');
    }

    // Logout method
    public function logout2()
    {
        Auth::logout();

        // Redirect to a specific page after logout
        return redirect()->route('home');
    }



    public function showUserInfo()
   {
    $userInfos = User_Info::all();
    return view('profile', compact('userInfos'));
    }

    public function showUserInfost()
    {
     $userInfos = User_Info::all();
     return view('profile st', compact('userInfos'));
     }

     public function showUserInfote()
    {
     $userInfos = User_Info::all();
     return view('profile te', compact('userInfos'));
     }


     public function info_te()
     {
      $userInfos = User_Info::all();
      return view('teachers info', compact('userInfos'));
      }


      public function dash_te(){

        $userInfos = User_Info::all();
        return view('profile te', compact('userInfos'));

     }


     public function info_st(){

        $userInfos = User_Info::all();
        return view('profile st', compact('userInfos'));
     }

     public function dash_ad(){

        $userInfos = User_Info::all();
        return view('profile admin', compact('userInfos'));
     }
}
