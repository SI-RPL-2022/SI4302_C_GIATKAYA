<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Training;
use App\Models\TrainingTransaction;

class UserTrainingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Training::all();

        $datas_transaction = TrainingTransaction::where('user_id','=',auth()->user()->id)->get();
        if ($datas_transaction->isEmpty()) {
            $datas_transaction[] = (object) array(
                'id' => 0, 
                'user_id' => 0, 
                'training_id' => 0
            );
        }
        // dd($datas_transaction);

        return view('user.training.index', compact('datas', 'datas_transaction'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new TrainingTransaction;
        $data->user_id = $request->user_id;
        $data->training_id = $request->training_id;
        $data->save();
        return redirect('/masyarakat/training/'.$request->training_id.'/detail');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) //$id
    {
        $datas = Training::find($id);
        $datas_transaction = TrainingTransaction::where([
            ['user_id','=',auth()->user()->id],
            ['training_id','=',$id]
        ])->get();

        if ($datas_transaction->isEmpty()) {
            $datas_transaction[] = (object) array(
                'id' => 0, 
                'user_id' => 0, 
                'training_id' => 0
            );
        }

        $datas_other = Training::where('id','!=',$id)->take(4)->get();
        // dd($datas_transaction);
        return view('user.training.show', compact('datas', 'datas_other', 'datas_transaction'));
    }

    public function detail($id) //$id
    {
        $datas = Training::find($id);
        $datas_other = Training::where('id','!=',$id)->take(4)->get();
        $training_trsc= TrainingTransaction::where('training_id','=',$datas->id)->where('user_id','=',auth()->user()->id)->first();

        // dd($datas_other);
        return view('user.training.detail', compact('datas', 'datas_other','training_trsc'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
