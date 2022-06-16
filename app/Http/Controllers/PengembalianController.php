<?php

namespace App\Http\Controllers;
use App\Models\Pengembalian;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PengembalianController extends Controller
{
    public function index(){

        $pengembalian = Pengembalian::all();
        return view('pinjaman.pengembalian',['pengembalian'=>$pengembalian]);
    }

    public function edit($id){
        $pengembalian = Pengembalian::find($id);
        return view('pinjaman.keterangan', compact('pengembalian'));
    }

    public function update(Request $request, $id)
    {
        $pengembalian = Pengembalian::find($id);
        $pengembalian->nama_lengkap = $request->nama_lengkap;
        $pengembalian->email = $request->email;
        $pengembalian->no_hp = $request->no_hp;
        $pengembalian->metode = $request->metode;
        $pengembalian->jumlah_bayar = $request->jumlah_bayar;
        $pengembalian->save();

        return redirect('edit');
    }
    
}
