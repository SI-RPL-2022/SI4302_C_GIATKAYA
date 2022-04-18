<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProfileUser;
use Illuminate\Support\Facades\DB;

class AdmController extends Controller
{
    public function verifadmin(){
        $data = ProfileUser::where('status','0')->get();

        return view('verif-adm', [
            "data_user" => $data,
        ]);
    }

    public function search(Request $request){
        $nik = $request->nik;
        $data = DB::table('users')->where('nik', 'like', "%".$nik."%")->get();
        return view('verif-adm', [
            "data_user" => $data,
        ]);
    }

    public function update(Request $request){
        if (isset($request->accept)){
            $data2 = ProfileUser::find($request->accept);
            $data2->status = '1';
            $data2->save();
        }
        elseif (isset($request->decline)){
            $data2 = ProfileUser::find($request->decline);
            $data2->status = '2';
            $data2->save();
        }
       

        // $data = ProfileUser::all();

        // return view('verif-adm', [
        //     "data_user" => $data,
        // ]);
        return redirect('/verif');
    }

}
