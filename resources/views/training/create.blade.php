@extends('layouts.dashboard')

@section('content')
    <div>
        <h2 class="text-center">Create Training Skill</h2>
    </div>
    <br/>
    
    <form method="POST" action="{{ url('training/store') }}">
        @csrf
        <div class="form-group">
            <label for="first_name">Nama Pelatihan</label>
            <input type="text" class="form-control" id="first_name" name="name_training">
        </div>
        <div class="form-group">
            <label for="first_name">Metode Pelatihan</label>
            <input type="text" class="form-control" id="first_name" name="metode_training">
        </div>
        <div class="form-group">
            <label for="last_name">Kategori Pelatihan</label>
            <input type="text" class="form-control" id="last_name" name="jenis_training">
        </div>
        <div class="form-group">
            <label for="last_name">Detail Pelatihan</label>
            <input type="text" class="form-control" id="last_name" name="detail_pelatihan">
        </div>
        <div class="form-group">
            <label for="last_name">Trainer</label>
            <input type="text" class="form-control" id="last_name" name="trainer">
        </div>
            <button type="submit" class="btn btn-info">Tambah</button>
    </form>
@endsection