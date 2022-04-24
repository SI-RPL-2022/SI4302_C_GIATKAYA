@extends('layouts.dashboard')

@section('content')
    <div>
        <h2 class="text-center">Edit Informasi Lapangan Kerja</h2>
    </div>
    <br/>
    <form method="POST" action="{{ url('infokerja/update/'.$model->id) }}">
        @csrf
        <div class="form-group">
            <label for="first_name">Nama Perusahaan</label>
            <input type="text" class="form-control" name="name_perusahaan" value="{{ $model->name_perusahaan }}">
        </div>
        <div class="form-group">
            <label for="first_name">Deskripsi Lowongan</label>
            <input type="text" class="form-control" name="deskripsi" value="{{ $model->deskripsi }}">
        </div>
        <div class="form-group">
            <label for="last_name">Lokasi</label>
            <input type="text" class="form-control" name="lokasi" value="{{ $model->lokasi }}">
        </div>
        <div class="form-group">
            <label for="last_name">Jabatan</label>
            <input type="text" class="form-control" name="jabatan" value="{{ $model->jabatan }}">
        </div>
        <div class="form-group">
            <label for="last_name">Gaji</label>
            <input type="text" class="form-control" name="gaji" value="{{ $model->gaji }}">
        </div>
            <button type="submit" class="btn btn-info">Edit</button>
    </form>
@endsection