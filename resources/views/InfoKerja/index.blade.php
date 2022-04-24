@extends('layouts.dashboard')
@section('title','Lapangan Kerja')
@section('content')
<div>
    <h2 class="text-center">Informasi Pekerjaan</h2>
</div>
    {{-- <br/>
    <a class="btn btn-info" href="{{ url('infokerja/create') }}">Tambah</a>
    <br/>
    <table class="table-bordered table">
        <tr>
            <th>Nama Perusahaan</th>
            <th>Deskripsi</th>
            <th>Lokasi</th>
            <th>Jabatan</th>
            <th>Gaji</th>
            <th colspan="2">Aksi</th>
        </tr>
        @foreach($datas as $key=>$value)
            <tr>
                <td>{{ $value->name_perusahaan }}</td>
                <td>{{ $value->deskripsi }}</td>
                <td>{{ $value->lokasi }}</td>
                <td>{{ $value->jabatan }}</td>
                <td>{{ $value->gaji }}</td>
                <td><a class="btn btn-info" href="{{ url('infokerja/edit/'.$value->id) }}">Update</a></td>
                <td><a class="btn btn-danger" href="{{ url('infokerja/delete/'.$value->id) }}">Delete</a></td>
            </tr>
        @endforeach
    </table> --}}
    {{-- <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Panel title</h3>
        </div>
        <div class="panel-body">
            Panel content
        </div>
        <div class="panel-footer">
            Panel content
        </div>
    </div> --}}
    <div class="p-3">
        <form action="/infokerja/search/{id}" method="post" enctype="multipart/form-data">
          @csrf 
          <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <label class="form-label" for="lokasi">Search by Lokasi</label>
          <input type="search" id="lokasi" name="lokasi" class="form-control" placeholder="Search ...">
        </div>
        <button type="submit" class="btn btn-info">Cari</button>
      </form>
    </div>
    <br/>
    <a class="btn btn-info" href="{{ url('infokerja/create') }}"><i class="fa-solid fa-plus"></i>&nbsp; Tambah Informasi Kerja</a>
    <br/>
    <br>
    <div class="row">
        @foreach($datas as $key=>$value)
        <div class="col-sm-6 col-md-4">
          <div class="thumbnail">
            {{-- <img data-src="holder.js/300x200" alt="..."> --}}
            <div class="caption">
              <h3><b>{{ $value->name_perusahaan }}</b></h3>
              <hr>
              <p>{{ $value->deskripsi }}</p>
              <hr>
              <p><i class="fa-solid fa-location-dot"></i>&nbsp; {{ $value->lokasi }}</p>
              <p><i class="fa-solid fa-user-tie"></i>&nbsp; {{ $value->jabatan }}</p>
              <p><i class="fa-solid fa-money-bill"></i>&nbsp; {{ $value->gaji }}</p>
              <hr>
              <p align="center"><a class="btn btn-info" href="{{ url('infokerja/edit/'.$value->id) }}">Edit</a> <a class="btn btn-danger" href="{{ url('infokerja/delete/'.$value->id) }}">Delete</a></p>
            </div>
          </div>
        </div>
        @endforeach
      </div>
@endsection