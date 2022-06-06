<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Training;
use Illuminate\Support\Facades\File;
use App\Models\TrainingTransaction;

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
        if($request->hasFile('cover')){
            $request->file('cover')->move('image/', $request->file('cover')->getClientOriginalName());
            $model->cover = $request->file('cover')->getClientOriginalName();
        }
        $model->name_training = $request->name_training;
        $model->metode_training = $request->metode_training;
        $model->jenis_training = $request->jenis_training;
        $model->durasi = $request->durasi;
        $model->kualitas = $request->kualitas;
        $model->detail_pelatihan = $request->detail_pelatihan;
        $model->trainer = $request->trainer;
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
        $model->metode_training = $request->metode_training;
        $model->jenis_training = $request->jenis_training;
        $model->durasi = $request->durasi;
        $model->kualitas = $request->kualitas;
        $model->detail_pelatihan = $request->detail_pelatihan;
        $model->trainer = $request->trainer;
        if($request->cover_new == NULL){
            $model->cover = $request->cover;
        }else{
            $foto = time().'.'.$request->cover_new->extension();
            $request->cover_new->move(public_path('image/'), $foto);
            $model->cover = $foto;
        }        
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
    public function status(Request $request){
        $id=$request->training_id;
        $training_transaction = TrainingTransaction::find($id);
        $training_transaction->status = "Selesai";
        $training_transaction->save();
        // $datas = Training::all();

        return redirect('/masyarakat/training');
    }
}
    
