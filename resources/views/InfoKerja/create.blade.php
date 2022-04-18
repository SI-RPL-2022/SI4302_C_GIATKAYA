@extends('layouts.dashboard')

@section('content')
    <br/>
    <form method="POST" action="{{ url('infokerja/store') }}">
        @csrf
        Nama Perusahaan : <input type="text" name="name_perusahaan"><br/>
        Lokasi : <input type="text" name="lokasi"><br/>
        Jabatan : <input type="text" name="jabatan"><br/>
        Gaji : <input type="text" name="gaji"><br/>
        <button type="submit">SIMPAN</button>
    </form>
@endsection