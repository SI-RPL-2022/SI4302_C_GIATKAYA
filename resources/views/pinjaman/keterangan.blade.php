@extends('layouts.dashboard')
@section('title','Detail Pembayaran')
@section('content')
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Data Pinjaman Pengguna</h3>
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
    <h3 class="text-center" style="margin-bottom: 15px;"><strong>Data Detail Tagihan</strong></h3>
        <div class="panel-body">
                <tr>
                    <td colspan="1">
                    <form class="form-horizontal">
                        <fieldset>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Nama Lengkap</label>
                                <div class="col-md-8">
                                <div class="input-group"><input id="fullName" name="fullName" placeholder="Nama Lengkap" class="form-control" required="true" value="" type="text"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Email</label>
                                <div class="col-md-8 ">
                                <div class="input-group"><input id="addressLine1" name="addressLine1" placeholder="Email" class="form-control" required="true" value="" type="text"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Nomor Handphone</label>
                                <div class="col-md-8">
                                <div class="input-group"><input id="addressLine2" name="addressLine2" placeholder="Nomor Handphone" class="form-control" required="true" value="" type="text"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Metode Pembayaran</label>
                                <div class="col-md-8">
                                <div class="input-group"><input id="city" name="city" placeholder="Metode Pembayaran" class="form-control" required="true" value="" type="text"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Jumlah Bayar</label>
                                <div class="col-md-8">
                                <div class="input-group"><input id="state" name="state" placeholder="Jumlah Bayar" class="form-control" required="true" value="" type="text"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label"></label>
                                <div class="col-md-8 inputGroupContainer">
                                <button class="btn btn-info">Bayar</button>
                                <button class="btn btn-danger">Kembali</button>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                    </td>
                </tr>
        </div>
    </div>
@endsection