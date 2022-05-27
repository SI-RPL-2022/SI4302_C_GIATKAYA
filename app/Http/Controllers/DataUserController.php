<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class DataUserController extends Controller
{
    public function read()
    {
        $users = DB::table('users')->where('status','1')->where('is_admin',0)->get();
      
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
        if($request->hasFile('foto_profil')){
            $request->file('foto_profil')->move('image/',$request->file('foto_profil')->getClientOriginalName());
            $users->foto_profil = $request->file('foto_profil')->getClientOriginalName();
        }
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

    public function editPasswordProfile($id)
    {
        $data = User::find($id);        

        return view('aksesuser.editpassword', compact('data'));
    }

    public function updatePasswordProfile(Request $request, $id)
    {
        $data = User::find($id);        

        $validate = $request->validate([
            'password_lama' => 'required|string|min:8',
            'password' => 'required|string|confirmed|min:8'                      
        ]);
    
        $password_lama = $request->password_lama;        
        
        if(Hash::check($password_lama, $data->password)){
            if($password_lama != $request->password){
                $data->password = Hash::make($request->password);
                $data->save();

                return redirect(route('datauser'))->with('success', 'Password Berhasil Diubah');
            }                
            else{
                return redirect()->back()->with("error","Password Baru dan Password Lama Tidak Boleh Sama");
            }
        }else{
            return redirect()->back()->with("error","Password Lama yang Anda Masukkan Salah");
        }                   

    }
}
