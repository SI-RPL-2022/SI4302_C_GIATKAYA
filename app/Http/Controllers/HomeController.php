<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function masyarakatHome()
    {
        return view('Masyarakat.masyarakatHome');
    }
    public function adminHome()
    
    {
        return view('Admin.adminHome');
    }
    public function index()
    {
        $users = DB::table('users')->get();
        return view('dashboard2',['users'=> $users]);

    }
}
{{  }}{{  }}{{  }}