<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    public function home()
    {
        return view('home');
    }

    public function home11()
    {
        return view('home11');
    }

    public function showCheckPageaa()
    {
        return view('welcome');
    }

    public function showCheckPagelog()
    {
        return view('loginpage');
    }
}
