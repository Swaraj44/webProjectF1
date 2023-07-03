<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;


class Custom extends Controller
{
    //
    public function login(){
        return view('loginpage');

    }

    public function registration(){

        return view('Regpage');
    }

    public function contactus(){

        return view('contact_us');
    }

    public function about(){

        return view('About us');
    }


    public function base(){

        return view('base');
    }

    public function dash_ug(){

        return view('dashboard ug');
     }

    
     public function dash_g(){

        return view('dashboard g');
     }

     public function dash_pg(){

        return view('dashboard pg');
     }


     


    public function regUser(Request $req){

       // echo "HI !";
       return view('home');
    }


    public function testing(){

        return view('testing');
     }

    
   
}
