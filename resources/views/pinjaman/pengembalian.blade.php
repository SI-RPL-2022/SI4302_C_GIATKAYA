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
    @foreach ($pengembalian as $key=>$value)
          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">
                    <div class="mt-3">
                      <h4>{{ $value->nama_lengkap }}</h4>
                      <p class="text-muted font-size-sm">Jl Garuda, Pandeglang</p>
                      <a href="" class="btn btn-info">Edit Profile</a>
                      <a href="{{ url('pinjaman/form/'.$value->id) }}" class="btn btn-danger">Bayar Tagihan</a>
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
                      {{ $value->nama_lengkap }}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">NIK</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      {{ $value->nik }}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Usaha</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      {{ $value->usaha }}
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
        <th>Jumlah Pinjaman</th>
        <th>Status</th>
      </tr>
    <?php $no = 1; ?>
      <tr>
        <td>{{ $no++ }}</td>
        <td>{{ $value->nama_lengkap }}</td>
        <td>{{ $value->email }}</td>
        <td>{{ $value->no_hp }}</td>
        <td>{{ $value->pinjaman }}</td>
        <td>{{ $value->status_bayar }}</td>
      </tr>
    @endforeach
  </table>
</div>
@endsection