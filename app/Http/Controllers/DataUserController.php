<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class DataUserController extends Controller
{
    public function read()
    {
        $users = DB::table('users') -> where('status','1') -> get();
      
        return view('aksesuser.datauser', ['users' => $users]);
    }

    public function search(Request $request){
        $name = $request->name;
        $data = DB::table('users')->where('name', 'like', "%".$name."%")->get();
        return view('aksesuser.datauser', [
            "users" => $data,
        ]);
    }

    public function edit($id)
    {
        $users = User::find($id);
        return view('aksesuser.edituser', compact('users'));
    }

    public function update(Request $request, $id)
    {
        $users = User::find($id);
        $users->name = $request->name;
        $users->email = $request->email;
        $users->gender = $request->gender;
        $users->tanggal = $request->tanggal;
        $users->alamat = $request->alamat;
        $users->nomor = $request->nomor;
        $users->password = $request->password;
        $users->usaha = $request->usaha;
        $users->bidang = $request->bidang;
        $users->toko = $request->toko;
        $users->tahun = $request->tahun;
        $users->nik = $request->nik;
        $users->save();

        return redirect('aksesdata');
    }

    public function destroy($id)
    {
        $users = User::find($id);
        $users->delete();
        return redirect('aksesdata');
    }
}
