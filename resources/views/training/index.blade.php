@extends('layouts.dashboard')
@section('title','Training Skill')
@section('content')
<div>
    <h2 class="text-center">Training Skill</h2>
</div>
<div class="p-3">
<form action="/training/search/{id}" method="post" enctype="multipart/form-data">
    @csrf 
    <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
            <label class="form-label" for="jenis_training">Search by Kategori</label>
            <input type="search" id="jenis_training" name="jenis_training" class="form-control" placeholder="Search ...">
        </div>
        <button type="submit" class="btn btn-info">Cari</button>
    </form>
</form>
<br/>
    <div style="background-color: #8FBDD3; ">
        <div class="panel panel-info">
            <!-- Default panel contents -->
            <div class="panel-heading">Daftar Pelatihan</div>

            <!-- Table -->
            <table class="table">
            <tr>
                <th>No</th>
                <th>Nama Pelatihan</th>
                <th>Metode Pelatihan</th>
                <th>Kategori Pelatihan</th>
                <th>Detail Pelatihan</th>
                <th>Trainer</th>
                <th colspan="2">Aksi</th>
            </tr>
            <?php $no = 1; ?> 
            @foreach($datas as $key=>$value)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $value->name_training }}</td>
                    <td>{{ $value->metode_training }}</td>
                    <td>{{ $value->jenis_training }}</td>
                    <td>{{ $value->detail_pelatihan }}</td>
                    <td>{{ $value->trainer }}</td>
                    <td><a class="btn btn-info" href="{{ url('training/edit/'.$value->id) }}">Edit</a></td>
                    <td><a class="btn btn-danger" href="{{ url('training/delete/'.$value->id) }}">Delete</a></td>
                </tr>
            @endforeach
            </table>
            </div>
        <a class="btn btn-info" style="float:right;" href="{{ url('training/create') }}"><i class="fa-solid fa-plus"></i>&nbsp; Tambahkan Pelatihan</a>
    </div>
@endsection