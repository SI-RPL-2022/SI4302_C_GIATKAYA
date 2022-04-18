<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\InfoKerja;

class infokerjaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = InfoKerja::all();

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
        $model->name_perusahaan = $request->name_perusahaan;
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
        $model->lokasi = $request->lokasi;
        $model->gaji = $request->gaji;
        $model->jabatan = $request->jabatan;


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
}