<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Models\BuatSertif;
use Illuminate\Support\Facades\File;

class BuatSertifController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = BuatSertif::all();

        return view('BuatSertif.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = new BuatSertif;
        return view('BuatSertif.create', compact('model'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $model = new BuatSertif;
        if($request->hasFile('foto')){
            $request->file('foto')->move('public.image/', $request->file('foto')->getClientOriginalName());
            $model->foto = $request->file('foto')->getClientOriginalName();
        }
        $model->nama_sertifikat = $request->nama_sertifikat;
        $model->judul_pelatihan = $request->judul_pelatihan;
        $model->nama_penyelenggara = $request->nama_penyelenggara;
        $model->save();

        return redirect('BuatSertif');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $model = BuatSertif::find($id);
        return view('BuatSertif.edit', compact('model'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $model = BuatSertif::find($id);
        $model->nama_sertifikat = $request->nama_sertifikat;
        $model->judul_pelatihan = $request->judul_pelatihan;
        $model->nama_penyelenggara = $request->nama_penyelenggara;
        if($request->foto_new == NULL){
            $model->foto = $request->foto;
        }else{
            $foto = time().'.'.$request->foto_new->extension();
            $request->foto_new->move(public_path('image/'), $foto);
            $model->foto = $foto;
        }        
        $model->save();

        return redirect('BuatSertif');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // $model = BuatSertif::find($id);
        // $model->delete();
        // return redirect('BuatSertif');
        $model = BuatSertif::find($id);
        $model->delete();
        return redirect('BuatSertif');
    }
    public function search(Request $request){
        $nama_sertifikat = $request->nama_sertifikat;
        $data = \DB::table('BuatSertif')->where('nama_sertifikat', 'like', "%".$nama_sertifikat."%")->get();
        return view('BuatSertif.index', [
            "datas" => $data,
        ]);
    }
}
    
