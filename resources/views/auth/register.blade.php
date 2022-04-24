@extends('layouts.app')
@section('title','Register')
@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-sm-5 mt-5">
        <div class="container">
            <span class="fw-bold" style="margin-left: 60px;">Selamat Datang di</span> <span class="fw-bold" style="color: #149BFC;">GiatKaya!</span>
            <img src="{{ asset('image/kantornew.png') }}" width="100%" alt="">
        </div>
      
    </div>
    <div class="col-sm-7 mt-5 border-end-0 shadow p-3 mb-5 bg-body" style="border :2px solid #11CDEF; height:700px; border-radius: 15px;">
      <div class="row">
        <h4 class="fw-bold">Yuk Daftar Sekarang!</h4>
        <p><small class="text-muted">Sudah memiliki akun GiatKaya? <span class="fw-bold" style="color: #149BFC;"><a href="{{('/login')}}">Masuk di sini! </a></span></small></p>
        <div class="col-6 col-md-12 col-lg-5">
            <form action="{{ route('register') }}" method="post" enctype="multipart/form-data">
                @csrf
            <div class="form-floating mb-3">
                <input type="text" name="name" style="border-bottom:2px solid #11CDEF" class="form-control form-control-sm border-top-0 border-end-0 border-start-0" id="name" placeholder="Nama Lengkap">
                <label for="name">Nama Lengkap</label>
                <input type="hidden" name="status" value="Menunggu" style="border-bottom:2px solid #11CDEF" class="form-control form-control-sm border-top-0 border-end-0 border-start-0" id="name" placeholder="Nama Lengkap">
            </div>
            <div class="form-floating mb-3">
                <input type="text" name="email" style="border-bottom:2px solid #11CDEF" class="form-control form-control-sm border-top-0 border-end-0 border-start-0" id="email" placeholder="name@example.com">
                <label for="email">Email address</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" name="nomor" style="border-bottom:2px solid #11CDEF" class="form-control form-control-sm border-top-0 border-end-0 border-start-0" id="nomor" placeholder="Nomor Handphone">
                <label for="nomor">Nomor Handphone</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" name="alamat" style="border-bottom:2px solid #11CDEF" class="form-control form-control-sm border-top-0 border-end-0 border-start-0" id="alamat" placeholder="Alamat">
                <label for="alamat">Alamat</label>
            </div>
            <div class="form-floating mb-3">
                <input type="password" name="password" style="border-bottom:2px solid #11CDEF" class="form-control form-control-sm border-top-0 border-end-0 border-start-0" id="password" placeholder="Password">
                <label for="password">Password</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" name="tahun" style="border-bottom:2px solid #11CDEF" class="form-control form-control-sm border-top-0 border-end-0 border-start-0" id="tahun" placeholder="Tahun Berdiri">
                <label for="tahun">Tahun Berdiri</label>
            </div>
                    <div class="mb-3">
                        <label for="foto" class="form-label">Foto KTP</label>
                        <input class="form-control form-control-sm" name="foto" id="foto" type="file">
                    </div>
                    <button type="submit" class="btn btn-info btn-md">Buat Akun</button>
        </div>
        <div class="col-6 col-md-12 col-lg-5">
            <div class="form-floating mb-3">
                <input type="date" name="tanggal" style="border-bottom:2px solid #11CDEF" class="form-control form-control-sm border-top-0 border-end-0 border-start-0" id="tanggal" placeholder="Tanggal Lahir">
                <label for="tanggal">Tanggal Lahir</label>
            </div>
            <label for="exampleInputPassword1" class="form-label">Jenis Kelamin</label>
                    <div class="mb-3">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="gender" value="Laki-laki">
                            <label class="form-check-label" for="gender">Laki-laki</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="gender" value="Perempuan">
                            <label class="form-check-label" for="gender">Perempuan</label>
                        </div>
                    </div>
            <div class="form-floating mb-3">
                <input type="text" name="nik" style="border-bottom:2px solid #11CDEF" class="form-control form-control-sm border-top-0 border-end-0 border-start-0" id="nik" placeholder="NIK">
                <label for="nik">NIK</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" name="usaha" style="border-bottom:2px solid #11CDEF" class="form-control form-control-sm border-top-0 border-end-0 border-start-0" id="usaha" placeholder="Nama Usaha">
                <label for="usaha">Nama Usaha</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" name="bidang" style="border-bottom:2px solid #11CDEF" class="form-control form-control-sm border-top-0 border-end-0 border-start-0" id="bidang" placeholder="Bidang Usaha">
                <label for="bidang">Bidang Usaha</label>
            </div>
            <div class="form-floating mb-3">
                <input type="number" name="toko" style="border-bottom:2px solid #11CDEF" class="form-control form-control-sm border-top-0 border-end-0 border-start-0" id="toko" placeholder="Jumlah Toko">
                <label for="toko">Jumlah Toko</label>
            </div>
            </form>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> -->
