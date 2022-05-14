@extends('layouts.dashboard')
@section('title','Edit Profile User')
@section('content')
<div class="panel panel-info">
  <div class="panel-heading">
  <div>
        <h2 class="text-center">Edit Data Pengguna GiatKaya</h2>
    </div>
    <br/>
    <form method="POST" action="{{ url('aksesdata/update/'.$users->id) }}" enctype="multipart/form-data">
        @csrf
    <div class="placeholder" align="center">
                <img src="{{asset('image/'.$users->foto_profil)}}" width="200" height="200" class="img-responsive" alt="">
                <h4>
                    <span>
                    <p class="image_upload">
                    <label for="foto_profil">
                        <a class="btn btn-info">Change Profile Picture</a>
                        
                    </label>
                    <input type="file" name="foto_profil" id="foto_profil">
                        <a href="{{ url('/aksesdata/edit-password/'.$users->id) }}" class="btn btn btn-warning">Ubah Password</a>
                    </p>
                    </span>
                </h4>
              </div>
  </div>
  <div class="panel-body">
    <div class="row">
        <div class="col-xs-6">
            <label for="first_name">Nama Lengkap</label>
            <input type="text" class="form-control" name="name" value="{{ $users->name }}">
        </div>
        <div class="col-xs-6">
            <label for="first_name">Tanggal Lahir</label>
            <input type="text" class="form-control" name="tanggal" value="{{ $users->tanggal }}">
        </div>
        <div class="col-xs-6" style="margin-top: 25px;">
            <label for="first_name">Email</label>
            <input type="text" class="form-control" name="email" value="{{ $users->email }}">
        </div>
        <div class="col-xs-6" style="margin-top: 25px;">
            <label for="first_name">Jenis Kelamin</label>
            <select class="form-control form" id="sel1" name="gender">
                <option value="Laki-laki" @if($users->gender == 'Laki-laki') selected @endif>Laki-laki</option>
                <option value="Perempuan" @if($users->gender == 'Perempuan') selected @endif>Perempuan</option>
            </select>
            <!-- <input type="text" class="form-control" name="gender" value="{{ $users->gender }}"> -->
        </div>
        <div class="col-xs-6" style="margin-top: 25px;">
            <label for="first_name">Nomor Handphone</label>
            <input type="text" class="form-control" name="nomor" value="{{ $users->nomor }}">
        </div>
        <div class="col-xs-6" style="margin-top: 25px;">
            <label for="first_name">NIK</label>
            <input type="text" class="form-control" name="nik" value="{{ $users->nik }}">
        </div>
        <div class="col-xs-6" style="margin-top: 25px;">
            <label for="first_name">Alamat</label>
            <input type="text" class="form-control" name="alamat" value="{{ $users->alamat }}">
        </div>
        <div class="col-xs-6" style="margin-top: 25px;">
            <label for="first_name">Nama Usaha</label>
            <input type="text" class="form-control" name="usaha" value="{{ $users->usaha }}">
        </div>
        <div class="col-xs-6" style="margin-top: 25px;">
            <label for="first_name">Bidang Usaha</label>
            <input type="text" class="form-control" name="bidang" value="{{ $users->bidang }}">
        </div>
        <div class="col-xs-6" style="margin-top: 25px;">
            <label for="first_name">Tahun Berdiri</label>
            <input type="text" class="form-control" name="tahun" value="{{ $users->tahun }}">
        </div>
        <div class="col-xs-6" style="margin-top: 25px;">
            <label for="first_name">Jumlah Toko</label>
            <input type="number" class="form-control" name="toko" value="{{ $users->toko }}">
        </div>
    </div>
            <button type="submit" class="btn btn-info" style="margin-top: 20px;">Edit Data</button>
            <a href="{{ route('datauser') }}" class="btn btn-danger" style="margin-top: 20px;">Cancel</a>      
    </form>
  </div>
</div>
@endsection