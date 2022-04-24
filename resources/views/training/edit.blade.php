@extends('layouts.dashboard')

@section('content')
    <div>
        <h2 class="text-center">Edit Training Skill</h2>
    </div>
    <br/>
    <form method="POST" action="{{ url('training/update/'.$model->id) }}">
        @csrf
        <div class="form-group">
            <label for="first_name">Nama Pelatihan</label>
            <input type="text" class="form-control" name="name_training" value="{{ $model->name_training }}">
        </div>
        <div class="form-group">
            <label for="last_name">Kategori Pelatihan</label>
            <input type="text" class="form-control" name="jenis_training" value="{{ $model->jenis_training }}">
        </div>
        <div class="form-group">
            <label for="last_name">Detail Pelatihan</label>
            <input type="text" class="form-control" name="detail_pelatihan" value="{{ $model->detail_pelatihan }}">
        </div>
            <button type="submit" class="btn btn-info">Edit</button>
    </form>
@endsection