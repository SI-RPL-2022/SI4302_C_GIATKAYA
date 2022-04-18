@extends('layouts.dashboard')

@section('content')
    <br/>
    <form method="POST" action="{{ url('infokerja/update/'.$model->id) }}">
        @csrf
        
        Nama Perusahaan : <input type="text" name="name_perusahaan" value="{{ $model->name_perusahaan }}"><br/>
        Lokasi : <input type="text" name="lokasi" value="{{ $model->lokasi }}"><br/>
        Jabatan : <input type="text" name="jabatan" value="{{ $model->jabatan }}"><br/>
        Gaji : <input type="text" name="gaji" value="{{ $model->gaji }}"><br/>
        <button type="submit">SIMPAN</button>
    </form>
@endsection