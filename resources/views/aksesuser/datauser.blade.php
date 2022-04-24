@extends('layouts.dashboard')
@section('title','Data Profile User')
@section('content')

<div>
    <h2 class="text-center">Data Pengguna GiatKaya</h2>
</div>
<div class="p-3">
    <!-- <form class="navbar-form navbar-left" role="search">
        @csrf        
    <label class="form-label" for="name">Search by Nama</label>
    <br>
        <div class="form-group">
            <input type="search" id="name" name="name" class="form-control" placeholder="Search ...">
        </div>
        <button type="submit" class="btn btn-info">Cari</button>
    </form> -->
<form action="/aksesdata/search/{id}" method="post" enctype="multipart/form-data">
    @csrf 
    <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
            <label class="form-label" for="name">Search by Nama</label>
            <input type="search" id="name" name="name" class="form-control" placeholder="Search ...">
        </div>
        <button type="submit" class="btn btn-info">Cari</button>
    </form>
</form>
<!-- <form id="form" action=""  method="get" style="margin-top: 30px;">
    @csrf
        <label class="form-label" for="jenis_training">Search by Nama</label>
        <div class="col-10 col-md-11 col-lg-11">
            <input class="form-control rounded" type="text" name="search" placeholder="Cari Disini...">
        </div>
        <div class="col-2 col-md-1 col-lg-1">
            <button class="btn btn-info rounded" type="submit"><i class="fas fa-search"></i> Cari</button>
        </div>                    
</form> -->
<br/>
    <div style="background-color: #8FBDD3;">
        <div class="panel panel-info">
            <!-- Default panel contents -->
            <div class="panel-heading">Daftar Data Pengguna </div>

            <!-- Table -->
            <div class="table-responsive">
                <table class="table">
                    <tr>
                        <th>No</th>
                        <th>Nama Lengkap</th>
                        <th>Email</th>
                        <th>Jenis Kelamin</th>
                        <th>Tanggal Lahir</th>
                        <th>Alamat</th>
                        <th>Nomor HP</th>
                        <th>Nama Usaha</th>
                        <th>Bidang Usaha</th>
                        <th>Jumlah Toko</th>
                        <th>Tahun Berdiri</th>
                        <th>NIK</th>

                        <th colspan="2">Aksi</th>
                    </tr>
                    <?php $no = 1; ?> 
                    @foreach ($users as $key=>$user)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->gender }}</td>
                            <td>{{ $user->tanggal }}</td>
                            <td>{{ $user->alamat }}</td>
                            <td>{{ $user->nomor }}</td>
                            <td>{{ $user->usaha }}</td>
                            <td>{{ $user->bidang }}</td>
                            <td>{{ $user->toko }}</td>
                            <td>{{ $user->tahun }}</td>
                            <td>{{ $user->nik }}</td>
                            <td><a class="btn btn-info" href=""><i class="fa-solid fa-eye"></i></a></td>
                            <td><a class="btn btn-warning" href="{{ url('aksesdata/edit/'.$user->id) }}"><i class="fa-solid fa-pen"></i></a></td>
                            <td><a class="btn btn-danger" href="{{ url('aksesdata/delete/'.$user->id) }}"><i class="fa-solid fa-trash"></i></a></td>
                        </tr>
                    @endforeach
                </table>
            </div>
            </div>
    </div>
@endsection