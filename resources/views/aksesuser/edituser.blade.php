@extends('layouts.dashboard')

@section('content')
    <div>
        <h2 class="text-center">Edit Data Pengguna GiatKaya</h2>
    </div>
    <br/>
    <form method="POST" action="{{ url('aksesdata/update/'.$users->id) }}">
        @csrf
        <div class="form-group">
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
        </div>
            <button type="submit" class="btn btn-info">Edit</button>
    </form>
@endsection