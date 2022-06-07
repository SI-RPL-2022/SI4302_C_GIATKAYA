@extends('layouts.dashboard')

@section('content')
    <div>
        <h2 class="text-center">Create Certificate</h2>
    </div>
    <br/>
    <form method="POST" action="{{ url('BuatSertif/store') }}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="first_name">Nama Sertifikat</label>
            <input type="text" class="form-control form" name="nama_sertifikat">
        </div>
        <div class="form-group">
            <label for="first_name">Judul Pelatihan</label>
            <input type="text" class="form-control form" name="judul_pelatihan">
        </div> 
        <div class="form-group">
            <label for="last_name">Trainer</label>
            <input type="text" class="form-control form" name="nama_penyelenggara">
        </div>
        <div class="form-group">
            <label for="formFile" class="form-label">Foto Sertifikat</label>
            <input type="file" name="foto" type="file" id="formFile">
        </div>
            <button type="submit" class="btn btn-info">Tambah</button>
            <a href="{{ url()->previous() }}" class="btn btn-danger">Cancel</a>
            <button type="reset" class="btn btn-warning" value="Reset"><i class="fa-solid fa-arrows-rotate"></i></button>
    </form>
@endsection