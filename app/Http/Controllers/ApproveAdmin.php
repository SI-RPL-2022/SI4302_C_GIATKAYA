<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengembalian;
use Illuminate\Support\Facades\DB;

class ApproveAdmin extends Controller
{
    public function approveadmin(){
        $data = Pengembalian::where('status_bayar','0')->get();

        return view('approve.adminapprove', [
            "data_user" => $data,
        ]);
    }

    public function search(Request $request){
        $nama_lengkap = $request->nama_lengkap;
        $data = DB::table('pengembalian')->where('nama_lengkap', 'like', "%".$nama_lengkap."%")->get();
        return view('approve.adminapprove', [
            "data_user" => $data,
        ]);
    }

    public function update(Request $request){
        if (isset($request->accept)){
            $data2 = Pengembalian::find($request->accept);
            $data2->status_bayar = '1';
            $data2->save();
        }
       

        // $data = ProfileUser::all();

        // return view('verif-adm', [
        //     "data_user" => $data,
        // ]);
        return redirect('approve');
    }
}
