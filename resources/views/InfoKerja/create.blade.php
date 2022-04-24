@extends('layouts.dashboard')

@section('content')
    <div>
        <h2 class="text-center">Create Informasi Lapangan Kerja</h2>
    </div>
    <br/>
    <form method="POST" action="{{ url('infokerja/store') }}">
        @csrf
        <div class="form-group">
            <label for="first_name">Nama Perusahaan</label>
            <input type="text" class="form-control" name="name_perusahaan">
        </div>
        <div class="form-group">
            <label for="first_name">Deskripsi Lowongan</label>
            <input type="text" class="form-control" name="deskripsi">
        </div>
        <div class="form-group">
            <label for="last_name">Lokasi</label>
            <input type="text" class="form-control" name="lokasi">
        </div>
        <div class="form-group">
            <label for="last_name">Jabatan</label>
            <input type="text" class="form-control" name="jabatan">
        </div>
        <div class="form-group">
            <label for="last_name">Gaji</label>
            <input type="text" class="form-control" name="gaji">
        </div>
            <button type="submit" class="btn btn-info">Tambah</button>
    </form>
@endsection