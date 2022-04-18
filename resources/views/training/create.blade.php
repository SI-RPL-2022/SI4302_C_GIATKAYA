@extends('layouts.dashboard')

@section('content')
    <br/>
    <form method="POST" action="{{ url('training/store') }}">
        @csrf
        Nama Pelatihan : <input type="text" name="name_training"><br/>
        Kategori Pelatihan : <input type="text" name="jenis_training"><br/>
        Detail Pelatihan : <input type="text" name="detail_pelatihan"><br/>
        <button type="submit">SIMPAN</button>
    </form>
@endsection