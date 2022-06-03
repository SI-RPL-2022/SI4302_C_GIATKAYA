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
            <div class="panel-heading"><strong>Daftar Data Pengguna</strong> </div>

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
                            <td>{{ $user->nik }}</td>
                            <td><a class="btn btn-info" data-toggle="modal" data-target="#largeShoes_{{ $user->id }}" href=""><i class="fa-solid fa-eye"></i></a></td>
                            <!-- The modal -->
                            <div class="modal fade" id="largeShoes_{{ $user->id }}" tabindex="-1" role="dialog" aria-labelledby="modalLabelLarge" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">

                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        <h4 class="modal-title" id="modalLabelLarge">{{$user->name}}</h4>
                                    </div>
                                    <div class="modal-body">
                                        <!-- <div class="row"> -->
                                            <div class="panel panel-info">
                                                <div class="panel-heading">
                                                    <div class="placeholder" align="center">
                                                        <img src="{{asset('image/'.$user->foto_profil)}}" class="img-circle">
                                                    </div>
                                                </div>
                                                <div class="panel-body">
                                                    <div class="col-xs-6">
                                                        <label for="first_name">Nama Lengkap</label>
                                                        <p class="form-control form" style="border:2px solid #d9edf7">{{$user->name}}</p>
                                                    </div>
                                                    <div class="col-xs-6">
                                                        <label for="first_name">Tanggal Lahir</label>
                                                        <p class="form-control form" style="border:2px solid #d9edf7">{{$user->tanggal}}</p>
                                                    </div>
                                                    <div class="col-xs-6" style="margin-top: 25px;">
                                                        <label for="first_name">Email</label>
                                                        <p class="form-control form" style="border:2px solid #d9edf7">{{$user->email}}</p>
                                                    </div>
                                                    <div class="col-xs-6" style="margin-top: 25px;">
                                                        <label for="first_name">Jenis Kelamin</label>
                                                        <p class="form-control form" style="border:2px solid #d9edf7">{{$user->gender}}</p>
                                                    </div>
                                                    <div class="col-xs-6" style="margin-top: 25px;">
                                                        <label for="first_name">Nomor Handphone</label>
                                                        <p class="form-control form" style="border:2px solid #d9edf7">{{$user->nomor}}</p>
                                                    </div>
                                                    <div class="col-xs-6" style="margin-top: 25px;">
                                                        <label for="first_name">NIK</label>
                                                        <p class="form-control form" style="border:2px solid #d9edf7">{{$user->nik}}</p>
                                                    </div>
                                                    <div class="col-xs-6" style="margin-top: 25px;">
                                                        <label for="first_name">Alamat</label>
                                                        <p class="form-control form" style="border:2px solid #d9edf7">{{$user->alamat}}</p>
                                                    </div>
                                                    <div class="col-xs-6" style="margin-top: 25px;">
                                                        <label for="first_name">Nama Usaha</label>
                                                        <p class="form-control form" style="border:2px solid #d9edf7">{{$user->usaha}}</p>
                                                    </div>
                                                    <!-- <div class="col-xs-6" style="margin-top: 25px;">
                                                        <label for="first_name">Password</label>
                                                        <p class="form-control form" style="border:2px solid #d9edf7" value="{{$user->password}}" type="password">{{$user->password}}</p>
                                                    </div> -->
                                                    <div class="col-xs-6" style="margin-top: 25px;">
                                                        <label for="first_name">Bidang Usaha</label>
                                                        <p class="form-control form" style="border:2px solid #d9edf7">{{$user->bidang}}</p>
                                                    </div>
                                                    <div class="col-xs-6" style="margin-top: 25px;">
                                                        <label for="first_name">Tahun Berdiri</label>
                                                        <p class="form-control form" style="border:2px solid #d9edf7">{{$user->tahun}}</p>
                                                    </div>
                                                    <div class="col-xs-6" style="margin-top: 25px;">
                                                        <label for="first_name">Jumlah Toko</label>
                                                        <p class="form-control form" style="border:2px solid #d9edf7">{{$user->toko}}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        <!-- </div> -->
                                    </div>
                                </div>
                                </div>
                            </div>
                            <td><a class="btn btn-warning" href="{{ url('aksesdata/edit/'.$user->id) }}"><i class="fa-solid fa-pen"></i></a></td>
                            <td><a class="btn btn-danger delete" href="#" data-id="{{$user->id}}" data-nama="{{$user->name}}"><i class="fa-solid fa-trash"></i></a></td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection