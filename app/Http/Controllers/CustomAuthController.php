<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomAuthController extends Controller
{
    public function login()
    {
        return view ("login");
    }
    public function registrasi()
    {
        return view ("registrasi");
    }
    public function registrasiUser(request $request)
    {
        echo 'Value posted';
    }
}
