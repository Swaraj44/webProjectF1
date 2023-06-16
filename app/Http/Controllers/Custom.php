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

    public function regUser(Request $req){

       // echo "HI !";
       return view('home');
    }
}
