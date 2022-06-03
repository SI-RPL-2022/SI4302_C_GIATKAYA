@extends('layouts.dashboard')
@section('title','Training Skill')
@section('content')
<div>
    <h2 class="text-center">Training Skill</h2>
</div>
<div class="p-3">

<form action="/masyarakat/training/" method="post" enctype="multipart/form-data">
    @csrf 
    <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
            <label class="form-label" for="jenis_training">Search by Kategori</label>
            <input type="search" id="jenis_training" name="jenis_training" class="form-control" placeholder="Search ...">
        </div>
        <button type="submit" class="btn btn-info">Cari</button>
    </form>
</form>

<div class="text-center fw-bold">
    <h3>Beberapa pelatihan ini yang membantumu meraih impian!</h3>
</div>

<div style="background-color: #31A8CD; padding: 2.5rem; border-radius: 10px;">
    <h4 style="color: white">Kategori Pelatihan</h4>

    <div class="flex-container">
        @foreach($datas as $key=>$value)

        <div class="" style="background-color: white; width: 25rem; padding: 1.5rem; border-radius: 10px;">
            <img src="{{asset('image/'. $value->cover)}}" style="width: 220px;" class="card-img-top" alt="...">
            <div class="card-body">
                <span class="label label-info">{{ $value->metode_training }}</span>
                <p style="color: #31A8CD">{{ $value->jenis_training }}</p>
                <p style="font-weight: bold">{{ $value->name_training }}</p>
                <p style="color: #31A8CD">{{ $value->trainer}}</p>
                {{-- @if ($datas_transaction == 0)
                    <a href="/masyarakat/training/{{ $value->id }}" class="btn btn-primary">Ikut Pelatihan</a>
                @else --}}
                @foreach($datas_transaction as $key2=>$value2)
                    @if ($value2->training_id == $value->id)
                        <a href="/masyarakat/training/{{ $value->id }}" class="btn btn-success">Lanjut Pelatihan</a>
                    @else
                        <a href="/masyarakat/training/{{ $value->id }}" class="btn btn-primary">Ikut Pelatihan</a>
                    @endif
                @endforeach
                {{-- @endif --}}
            </div>
        </div>
        @endforeach
    </div>
</div>

<style>
    .flex-container {
      display: flex;
      flex-wrap: wrap;
    }
    
    .flex-container > div {
      background-color: #f1f1f1;
      margin-right: 10px;
      margin-top: 10px;
    }
</style>

{{-- <div style="background-color: #8FBDD3; ">
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
</div> --}}
@endsection