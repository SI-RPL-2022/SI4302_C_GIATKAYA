@extends('layouts.dashboard')
@section('title','Detail Pembayaran')
@section('content')
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
                      <form action="/html/tags/html_form_tag_action.cfm" class="form-horizontal">
                        <div class="form-group">
                          <label for="first_name" class="col-xs-4 control-label">Nama Lengkap</label>
                          <div class="col-xs-5">
                            <input type="text" class="form-control" id="first_name" name="first_name">
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="last_name" class="col-xs-4 control-label">Email</label>
                          <div class="col-xs-5">
                            <input type="text" class="form-control" id="last_name" name="last_name">
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="first_name" class="col-xs-4 control-label">Nomor Handphone</label>
                          <div class="col-xs-5">
                            <input type="text" class="form-control" id="first_name" name="first_name">
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="last_name" class="col-xs-4 control-label">Metode Pembayaran</label>
                          <div class="col-xs-5">
                            <input type="text" class="form-control" id="last_name" name="last_name">
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="first_name" class="col-xs-4 control-label">Jumlah Bayar</label>
                          <div class="col-xs-5">
                            <input type="text" class="form-control" id="first_name" name="first_name">
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="first_name" class="col-xs-4 control-label">Bukti Pembayaran</label>
                          <div class="col-xs-5">
                          <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#smallShoes">
                            <i class="glyphicon glyphicon-open-file"></i>
                          </button>

                            <!-- The modal -->
                            <div class="modal fade" id="smallShoes" tabindex="-1" role="dialog" aria-labelledby="modalLabelSmall" aria-hidden="true">
                            <div class="modal-dialog modal-sm">
                            <div class="modal-content">

                            <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                              <h4 class="modal-title" id="modalLabelSmall">Bukti Pembayaran</h4>
                            </div>

                            <div class="modal-body">
                              Modal content...
                            </div>

                            </div>
                            </div>
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="col-xs-offset-4 col-xs-5">
                            <button type="submit" class="btn btn-info">Bayar</button>
                            <button type="submit" class="btn btn-danger">Cancel</button>
                          </div>
                        </div>
                      </form>
                    </td>
                </tr>
        </div>
    </div>
@endsection