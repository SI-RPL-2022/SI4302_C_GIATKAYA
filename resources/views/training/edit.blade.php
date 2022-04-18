@extends('layouts.dashboard')

@section('content')
    <br/>
    <form method="POST" action="{{ url('training/update/'.$model->id) }}">
        @csrf
        Nama Pelatihan : <input type="text" name="name_training" value="{{ $model->name_training }}"><br/>
        Kategori Pelatihan : <input type="text" name="jenis_training" value="{{ $model->jenis_training }}"><br/>
        Detail Pelatihan : <input type="text" name="detail_pelatihan" value="{{ $model->detail_pelatihan }}"><br/>
        <button type="submit">SIMPAN</button>
    </form>
@endsection