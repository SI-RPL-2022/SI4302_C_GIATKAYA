@extends('layouts.dashboard')
@section('title','Pembuatan Sertifikat')
@section('content')
<div>
    <h2 class="text-center">Pembuatan Sertifikat</h2>
</div>
    {{-- <br/>
    <a class="btn btn-info" href="{{ url('BuatSertif/create') }}">Tambah</a>
    <br/>
    <table class="table-bordered table">
        <tr>
            <th>Nama Sertifikat</th>
            <th>Judul Pelatihan</th>
            <th>Trainer</th>
            <th colspan="2">Aksi</th>
        </tr>
        @foreach($datas as $key=>$value)
            <tr>
                <td>{{ $value->nama_sertifikat }}</td>
                <td>{{ $value->judul_pelatihan }}</td>
                <td>{{ $value->nama_penyelenggara }}</td>
                <td><a class="btn btn-info" href="{{ url('BuatSertif/edit/'.$value->id) }}">Update</a></td>
                <td><a class="btn btn-danger" href="{{ url('BuatSertif/delete/'.$value->id) }}">Delete</a></td>
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
        <form action="/BuatSertif/search/{id}" method="post" enctype="multipart/form-data">
          @csrf 
          <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <label class="form-label" for="lokasi">Search by Nama Sertifikat</label>
          <input type="search" id="nama_sertifikat" name="nama_sertifikat" class="form-control" placeholder="Search ...">
        </div>
        <button type="submit" class="btn btn-info">Cari</button>
      </form>
    </div>
    <br/>
    <a class="btn btn-info" href="{{ url('BuatSertif/create') }}"><i class="fa-solid fa-plus"></i>&nbsp; Tambah Sertifikat</a>
    <br/>
    <br>
    <div class="row">
        @foreach($datas as $key=>$value)
        <div class="col-sm-6 col-md-4">
          <div class="thumbnail">
            {{-- <img data-src="holder.js/300x200" alt="..."> --}}
            <div class="caption">
              <h3>
                <b>
                  <center><img src="{{ asset('public.image/'.$value->foto) }}" style="width: 190px;" alt=""></center>
                </b>
              </h3>
              <h3><b>&nbsp;{{ $value->nama_sertifikat }}</b></h3>
              
              <p class="pertama">&nbsp;&nbsp;{{ $value->judul_pelatihan }}</p>
              
              <p><i class=""></i>&nbsp; {{ $value->nama_penyelenggara }}</p>
              <hr>
              <p align="center"><a class="btn btn-info" href="{{ url('BuatSertif/edit/'.$value->id) }}">Edit</a> <a class="btn btn-danger delete4" href="{{ url('BuatSertif/delete/'.$value->id) }}" data-id="{{$value->id}}" data-nama="{{$value->nama_sertifikat}}">Delete</a></p>
            </div>
          </div>
        </div>
        @endforeach
      </div>
@endsection