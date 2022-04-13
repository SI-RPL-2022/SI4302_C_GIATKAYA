<!DOCTYPE html>
<head>
    <title> Registrasi </title>
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
        <a href="/login" type="submit" class="btn btn-info fw-bold" style="color: #ffff;">Login</a>
      </span>
    </div>
  </div>
</nav>
<div class="container-fluid">
  <div class="row">
    <div class="col-sm-5 mt-5">
        <div class="container">
            <span class="fw-bold" style="margin-left: 50px;">Selamat Datang di</span> <span class="fw-bold" style="color: #149BFC;">GiatKaya!</span>
            <img src="{{ asset('image/kantornew.png') }}" alt="">
        </div>
      
    </div>
    <div class="col-sm-7 mt-5 border-end-0 shadow p-3 mb-5 bg-body" style="border :2px solid #11CDEF; height:700px; border-radius: 15px;">
      <div class="row">
        <h4 class="fw-bold">Yuk Daftar Sekarang!</h4>
        <p><small class="text-muted">Sudah memiliki akun GiatKaya? <span class="fw-bold" style="color: #149BFC;"><a href="/login">Masuk di sini! </a></span></small></p>
        <div class="col-6 col-md-12 col-lg-5">
            <form action="" method="post">
                @csrf
            <div class="form-floating mb-3">
                <input type="text" name="name" style="border-bottom:2px solid #11CDEF" class="form-control form-control-sm border-top-0 border-end-0 border-start-0" id="name" placeholder="Nama Lengkap" required>
                <label for="name">Nama Lengkap</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" style="border-bottom:2px solid #11CDEF" class="form-control form-control-sm border-top-0 border-end-0 border-start-0" id="email" placeholder="name@example.com" required>
                <label for="email">Email address</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" name="nomor" style="border-bottom:2px solid #11CDEF" class="form-control form-control-sm border-top-0 border-end-0 border-start-0" id="nomor" placeholder="Nomor Handphone" required>
                <label for="nomor">Nomor Handphone</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" name="alamat" style="border-bottom:2px solid #11CDEF" class="form-control form-control-sm border-top-0 border-end-0 border-start-0" id="alamat" placeholder="Alamat" required>
                <label for="alamat">Alamat</label>
            </div>
            <div class="form-floating mb-3">
                <input type="password" name="password" style="border-bottom:2px solid #11CDEF" class="form-control form-control-sm border-top-0 border-end-0 border-start-0" id="password" placeholder="Password" required>
                <label for="password">Password</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" name="tahun" style="border-bottom:2px solid #11CDEF" class="form-control form-control-sm border-top-0 border-end-0 border-start-0" id="tahun" placeholder="Tahun Berdiri">
                <label for="tahun">Tahun Berdiri (Optional)</label>
            </div>
                    <div class="mb-3">
                        <label for="formFileSm" class="form-label">Foto KTP</label>
                        <input class="form-control form-control-sm" id="formFileSm" type="file">
                    </div>
                    <a href="" type="submit" class="btn btn-info btn-md">Buat Akun</a>
        </div>
        <div class="col-6 col-md-12 col-lg-5">
            <div class="form-floating mb-3">
                <input type="date" name="tanggal" style="border-bottom:2px solid #11CDEF" class="form-control form-control-sm border-top-0 border-end-0 border-start-0" id="tanggal" placeholder="Tanggal Lahir" required>
                <label for="tanggal">Tanggal Lahir</label>
            </div>
            <label for="exampleInputPassword1" class="form-label">Jenis Kelamin</label>
                    <div class="mb-3">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                            <label class="form-check-label" for="inlineRadio1">Laki-laki</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                            <label class="form-check-label" for="inlineRadio2">Perempuan</label>
                        </div>
                    </div>
            <div class="form-floating mb-3">
                <input type="text" name="nik" style="border-bottom:2px solid #11CDEF" class="form-control form-control-sm border-top-0 border-end-0 border-start-0" id="nik" placeholder="NIK" required>
                <label for="nik">NIK</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" name="usaha" style="border-bottom:2px solid #11CDEF" class="form-control form-control-sm border-top-0 border-end-0 border-start-0" id="usaha" placeholder="Nama Usaha">
                <label for="usaha">Nama Usaha (Optional)</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" name="bidang" style="border-bottom:2px solid #11CDEF" class="form-control form-control-sm border-top-0 border-end-0 border-start-0" id="bidang" placeholder="Bidang Usaha">
                <label for="bidang">Bidang Usaha (Optional)</label>
            </div>
            <div class="form-floating mb-3">
                <input type="number" name="toko" style="border-bottom:2px solid #11CDEF" class="form-control form-control-sm border-top-0 border-end-0 border-start-0" id="toko" placeholder="Jumlah Toko">
                <label for="toko">Jumlah Toko (Optional)</label>
            </div>
            </form>
        </div>
      </div>
    </div>
  </div>
</div>
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