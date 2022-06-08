@extends('layouts.dashboard')
@section('title','Pengembalian Pinjaman')
@section('content')
  <div class="panel panel-default">
    <h2 class="text-center" style="margin-bottom: 20px;">Daftar Tagihan Pinjaman</h2>
  </div>
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title"><i class="fas fa-regular fa-coins me-2"></i>&nbsp;Data Pinjaman Pengguna</h3>
  </div>
    <div class="main-body">
    
          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">
                    <div class="mt-3">
                      <h4>John Doe</h4>
                      <p class="text-muted font-size-sm">Jl Garuda, Pandeglang</p>
                      <button class="btn btn-info">Edit Profile</button>
                      <button class="btn btn-danger">Bayar Tagihan</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Full Name</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      Kenneth Valdez
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">NIK</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      fip@jukmuh.al
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Usaha</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      (239) 816-9029
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Total Pinjaman</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      (320) 380-4539
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
    </div>
<div class="panel panel-default">
  <div class="panel-heading"><strong>List Tagihan Anda</strong></div>
  <table class="table">
      <tr>
        <th>No</th>
        <th>Nama Lengkap</th>
        <th>Email</th>
        <th>Nomor Handphone</th>
        <th>Metode Pembayaran</th>
        <th>Jumlah Bayar</th>
      </tr>
  </table>
</div>
@endsection