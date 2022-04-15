<!DOCTYPE html>
<head>
    <title> Login </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href = "{{asset('css/auth.css')}}" rel="stylesheet">
</head>
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
  <div class="container">
    <a class="navbar-brand fw-bold" href="#">GiatKaya!</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      </ul>
      <span class="navbar-text">
        <a href="/register" type="submit" class="btn btn-info fw-bold" style="color: #ffff;">Daftar</a>
      </span>
    </div>
  </div>
</nav>
<div class="container">
  <div class="row">
    <div class="col-sm-5 mt-5">
      <span class="fw-bold" style="margin-left:60px;">Selamat Datang di</span> <span class="fw-bold" style="color: #149BFC;">GiatKaya!</span>
      <img src="{{ asset('image/kantornew.png') }}" alt="">
    </div>
    <div class="col-sm-7 shadow p-3 mb-5 bg-body" style="border :2px solid #11CDEF; height:450px; border-radius: 15px; margin-top: 120px;">
      <div class="row" style="margin-left: 100px;">
        <h4 style="margin-top: 85px;">Login sebagai rakyat GiatKaya!</h4>
        <p><small class="text-muted">Belum memiliki akun GiatKaya? <span class="fw-bold" style="color: #149BFC;"> <a href="/regis">Daftar di sini! </a></span></small></p>
        <div class="col-12 col-md-12 col-lg-7">
            @if (session('error'))
                <div class="alert alert-danger alert-dismissible fade show">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    <h6 style="font-size:12px;"><i class="icon fas fa-times"></i> Gagal!</h6>
                    <div style="font-size:11px;">{{ session('error') }}</div>
                </div>                                                            
            @endif
            <form>
                @csrf
                <div class="form-floating mb-3">
                    <input type="text" style="border-bottom:2px solid #11CDEF" class="form-control form-control-sm border-top-0 border-end-0 border-start-0" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Email address</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" style="border-bottom:2px solid #11CDEF" class="form-control form-control-sm border-top-0 border-end-0 border-start-0" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">Nomor Handphone</label>
                </div>
                <button type="submit" class="btn btn-info">Masuk</button>
            </form>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- <div class="container">
    <div class="row"> -->
        <!-- <div class="col">
            <div class="col-12 col-md-12 col-lg-4">
                1 of 2
            </div>
        </div> -->
        <!-- <div class="col">
            <div class="col-12 col-md-12 col-lg-4">
                <form>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nama Lengkap</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Email address</label>
                        <input type="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nomor Handphone</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Alamat </label>
                        <input type="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div> -->
    </div>
    <div class="row">
        <div class="col-12 col-md-12 col-lg-4">
            <div class="d-flex align-items-center">
                <img src="" alt="">
            </div>            
        </div>
        <div class="col-12 col-md-12 col-lg-4">

        </div>
    
    </div>
    
</div>