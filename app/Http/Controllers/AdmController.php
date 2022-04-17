<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProfileUser;
use Illuminate\Support\Facades\DB;

class AdmController extends Controller
{
    public function verifadmin(){
        $data = ProfileUser::all();

        return view('verif-adm', [
            "data_user" => $data,
        ]);
    }

    public function search(Request $request){
        $nik = $request->nik;
        $data = DB::table('profile_user')->where('nik', 'like', "%".$nik."%")->get();
        return view('verif-adm', [
            "data_user" => $data,
        ]);
    }
}
