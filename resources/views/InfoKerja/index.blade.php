@extends('layouts.dashboard')
@section('title','Lapangan Kerja')
@section('content')
<div>
    <h2 class="text-center">Informasi Pekerjaan</h2>
</div>    
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
<a class="btn btn-sm btn-info" href="{{ url('infokerja/create') }}"><i class="fa-solid fa-plus"></i>&nbsp; Tambah Informasi Kerja</a>
<a class="btn btn-sm btn-primary" href="{{ url('data-riyawat-lamaran') }}">Riwayat Lamaran</a>
<br/>
<br>
<div class="row">
  @foreach($datas as $key=>$value)
  <div class="col-md-4">
    <div class="thumbnail">
      {{-- <img data-src="holder.js/300x200" alt="..."> --}}
      <div class="caption">
        <h3>
          <b>
            <center><img src="{{ asset('public.image/'.$value->foto) }}" style="width: 190px;" alt=""></center>
          </b>
        </h3>
        <h3><b>{{ $value->name_perusahaan }}</b></h3>
        <hr>
        <div align="justify">{!! $value->deskripsi_singkat !!}...</div>
        <hr>
        <p><i class="fa-solid fa-location-dot"></i>&nbsp; {{ $value->lokasi }}</p>
        <p><i class="fa-solid fa-user-tie"></i>&nbsp; {{ $value->jabatan }}</p>
        <p><i class="fa-solid fa-money-bill"></i>&nbsp; {{ $value->gaji }}</p>
        <hr>
        <p align="center"><a class="btn btn-info" href="{{ url('infokerja/edit/'.$value->id) }}">Edit</a> <a class="btn btn-danger delete3" href="#" data-id="{{$value->id}}" data-nama="{{$value->name_perusahaan}}">Delete</a></p>
      </div>
    </div>
  </div>
  @endforeach
</div>
@endsection