<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Training;

class TrainingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Training::all();

        return view('training.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = new Training;
        return view('training.create', compact('model'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $model = new Training;
        $model->name_training = $request->name_training;
        $model->jenis_training = $request->jenis_training;
        $model->detail_pelatihan = $request->detail_pelatihan;
        $model->save();

        return redirect('training');
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
        $model = Training::find($id);
        return view('training.edit', compact('model'));
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
        $model = Training::find($id);
        $model->name_training = $request->name_training;
        $model->jenis_training = $request->jenis_training;
        $model->detail_pelatihan = $request->detail_pelatihan;
        $model->save();

        return redirect('training');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = Training::find($id);
        $model->delete();
        return redirect('training');
    }
    public function search(Request $request){
        $jenis_training = $request->jenis_training;
        $data = \DB::table('training')->where('jenis_training', 'like', "%".$jenis_training."%")->get();
        return view('training.index', [
            "datas" => $data,
        ]);
    }
}
    
