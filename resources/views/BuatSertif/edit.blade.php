@extends('layouts.dashboard')

@section('content')
    <div>
        <h2 class="text-center">Edit Certificate</h2>
    </div>
    <br/>
    <form method="POST" action="{{ url('BuatSertif/update/'.$model->id) }}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="first_name">Nama Sertifikat</label>
            <input type="text" class="form-control form" name="nama_sertifikat" value="{{ $model->nama_sertifikat }}">
        </div>
        <div class="form-group">
            <label for="first_name">Judul Pelatihan</label>
            <input type="text" class="form-control form" name="judul_pelatihan" value="{{ $model->judul_pelatihan }}">
        </div>
        <div class="form-group">
            <label for="last_name">Trainer</label>
            <input type="text" class="form-control form" name="nama_penyelenggara" value="{{ $model->nama_penyelenggara }}">
        </div>
        <div class="form-group">
            <label for="formFile">Logo Perusahaan</label>
            <input type="file" class="form-control form" name="foto_new">
            <input type="text" name="foto" value="{{ $model->foto }}" hidden>
            <img src="{{ asset('public.image/'.$model->foto) }}" style="width: 190px; margin-top: 10px;" alt="">
        </div>
            <button type="submit" class="btn btn-info">Edit</button>
            <a href="{{ url()->previous() }}" class="btn btn-danger">Cancel</a>
    </form>
@endsection