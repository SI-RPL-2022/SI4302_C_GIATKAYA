@extends('layouts.dashboard')

@section('content')
    <div>
        <h2 class="text-center">Edit Data Pengguna GiatKaya</h2>
    </div>
    <br/>
    <div class="placeholder" align="center">
                <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
                <h4>
                    <span>
                    <p class="image_upload">
                    <label for="userImage">
                        <a class="btn btn-info" rel="nofollow">Change Profile Picture</a>
                    </label>
                        <input type="file" name="userImage" id="userImage" display="none">
                    </p>
                    </span>
                </h4>
              </div>
    <form method="POST" action="{{ url('aksesdata/update/'.$users->id) }}">
        @csrf
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
            <input type="text" class="form-control" name="gender" value="{{ $users->gender }}">
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
            <label for="first_name">Password</label>
            <input type="password" class="form-control" name="password" value="{{ $users->password }}">
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
        <!-- <div class="form-group">
            <label for="first_name">Nama Lengkap</label>
            <input type="text" class="form-control" name="name" value="{{ $users->name }}">
        </div>
        <div class="form-group">
            <label for="first_name">Email</label>
            <input type="text" class="form-control" name="email" value="{{ $users->email }}">
        </div>
        <div class="form-group">
            <label for="last_name">Jenis Kelamin</label>
            <input type="text" class="form-control" name="gender" value="{{ $users->gender }}">
        </div>
        <div class="form-group">
            <label for="last_name">Tanggal Lahir</label>
            <input type="text" class="form-control" name="tanggal" value="{{ $users->tanggal }}">
        </div>
        <div class="form-group">
            <label for="last_name">Alamat</label>
            <input type="text" class="form-control" name="alamat" value="{{ $users->alamat }}">
        </div>
        <div class="form-group">
            <label for="last_name">Nomor HP</label>
            <input type="text" class="form-control" name="nomor" value="{{ $users->nomor }}">
        </div>
        <div class="form-group">
            <label for="last_name">Nama Usaha</label>
            <input type="text" class="form-control" name="usaha" value="{{ $users->usaha }}">
        </div>
        <div class="form-group">
            <label for="last_name">Bidang Usaha</label>
            <input type="text" class="form-control" name="bidang" value="{{ $users->bidang }}">
        </div>
        <div class="form-group">
            <label for="last_name">Jumlah Toko</label>
            <input type="text" class="form-control" name="toko" value="{{ $users->toko }}">
        </div>
        <div class="form-group">
            <label for="last_name">Tahun Berdiri</label>
            <input type="text" class="form-control" name="tahun" value="{{ $users->tahun }}">
        </div>
        <div class="form-group">
            <label for="last_name">NIK</label>
            <input type="text" class="form-control" name="nik" value="{{ $users->nik }}">
        </div> -->
            <button type="submit" class="btn btn-info" style="margin-top: 20px;">Edit Data</button>
            <a href="{{ url()->previous() }}" class="btn btn-danger" style="margin-top: 20px;">Cancel</a>
    </form>
@endsection