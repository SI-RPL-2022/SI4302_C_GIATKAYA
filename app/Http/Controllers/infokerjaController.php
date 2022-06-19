<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\InfoKerja;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;

class infokerjaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = DB::table('infokerja')
                ->select('infokerja.id', 'infokerja.name_perusahaan', 'infokerja.foto', 'infokerja.gaji', 'infokerja.lokasi',
                        'infokerja.jabatan', 'infokerja.created_at', \DB::raw('SUBSTRING(infokerja.deskripsi, 1, 200) as deskripsi_singkat'))            
                ->orderBy('infokerja.name_perusahaan', 'ASC')
                ->get();          

        return view('infokerja.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = new InfoKerja;
        return view('infokerja.create', compact('model'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $model = new InfoKerja;
        if($request->hasFile('foto')){
            $request->file('foto')->move('public.image/', $request->file('foto')->getClientOriginalName());
            $model->foto = $request->file('foto')->getClientOriginalName();
        }
        $model->name_perusahaan = $request->name_perusahaan;
        $model->deskripsi = $request->deskripsi;
        $model->lokasi = $request->lokasi;
        $model->gaji = $request->gaji;
        $model->jabatan = $request->jabatan;
        $model->save();

        return redirect('infokerja');
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
        $model = InfoKerja::find($id);
        return view('infokerja.edit', compact('model'));
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
        $model = InfoKerja::find($id);
        $model->name_perusahaan = $request->name_perusahaan;
        $model->deskripsi = $request->deskripsi;
        $model->lokasi = $request->lokasi;
        $model->gaji = $request->gaji;
        $model->jabatan = $request->jabatan;
        if($request->foto_new == NULL){
            $model->foto = $request->foto;
        }else{
            $gambar = time().'.'.$request->foto_new->extension();
            $request->foto_new->move(public_path('public.image/'), $gambar);
            $model->foto = $gambar;
        }        
        $model->save();

        return redirect('infokerja');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = InfoKerja::find($id);
        $model->delete();
        return redirect('infokerja');
    }
    public function search(Request $request){
        $lokasi = $request->lokasi;
        $data = \DB::table('infokerja')->where('lokasi', 'like', "%".$lokasi."%")->get();
        return view('infokerja.index', [
            "datas" => $data,
        ]);
    }
}