<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProfileUser;

class AdmController extends Controller
{
    public function verifadmin(){
        $data = ProfileUser::all();

        return view('verif-adm', [
            "data_user" => $data,
        ]);
    }
}
