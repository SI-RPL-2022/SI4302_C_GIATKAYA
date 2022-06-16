@extends('layouts.dashboard')
@section('title','Input Data Diri')
@section('content')
<div class="panel panel-default">
    <h2 class="text-center" style="margin-bottom: 20px;">Pembayaran Tagihan Pinjaman</h2>
</div>
<hr>
      <div class="panel panel-default">
      <h3 class="text-center" style="margin-bottom: 10px;">Input Data Diri</h3>
         <div class="panel-body">
                  <tr>
                     <td colspan="1">
                        <form method="POST" class="form-horizontal" action="{{ url('pinjaman/detail/'.$pengembalian->id) }}" enctype="multipart/form-data" style="margin-top: 10px;">
                           <fieldset>
                              <div class="form-group">
                                 <label class="col-md-3 control-label">Nama Lengkap</label>
                                 <div class="col-md-8 inputGroupContainer">
                                    <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span><input id="fullName" name="fullName" placeholder="Nama Lengkap" class="form-control" required="true" value="" type="text"></div>
                                 </div>
                              </div>
                              <div class="form-group">
                                 <label class="col-md-3 control-label">Email</label>
                                 <div class="col-md-8 inputGroupContainer">
                                    <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span><input id="addressLine1" name="addressLine1" placeholder="Email" class="form-control" required="true" value="" type="text"></div>
                                 </div>
                              </div>
                              <div class="form-group">
                                 <label class="col-md-3 control-label">Nomor Handphone</label>
                                 <div class="col-md-8 inputGroupContainer">
                                    <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-phone-alt"></i></span><input id="addressLine2" name="addressLine2" placeholder="Nomor Handphone" class="form-control" required="true" value="" type="text"></div>
                                 </div>
                              </div>
                              <div class="form-group">
                                 <label class="col-md-3 control-label">Metode Pembayaran</label>
                                 <div class="col-md-8 inputGroupContainer">
                                    <div class="input-group">
                                       <span class="input-group-addon">
                                          <i class="glyphicon glyphicon-credit-card"></i>
                                       </span>
                                       <select class="form-select form-control" aria-label="Default select example">
                                          <option selected>-- Pilih Metode Pembayaran --</option>
                                          <option value="1">Transfer Bank</option>
                                          <option value="2">M-Banking</option>
                                          <option value="3">QR Code</option>
                                       </select>
                                    </div>
                                 </div>
                              </div>
                              <div class="form-group">
                                 <label class="col-md-3 control-label">Jumlah Bayar</label>
                                 <div class="col-md-8 inputGroupContainer">
                                    <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-usd"></i></span><input id="state" name="state" placeholder="Jumlah Bayar" class="form-control" required="true" value="" type="text"></div>
                                 </div>
                              </div>
                              <div class="form-group">
                                 <label class="col-md-3 control-label">Bukti Pembayaran</label>
                                 <div class="col-md-8">
                                    <div class="input-group"><input name="state" class="form" required="true" value="" type="file"></div>
                                 </div>
                              </div>
                              <div class="form-group">
                                 <label class="col-md-3 control-label"></label>
                                 <div class="col-md-8 inputGroupContainer">
                                 <a class="btn btn-info">Submit</a>
                                 <a href="{{ url()->previous() }}" class="btn btn-danger">Cancel</a>
                                 </div>
                              </div>
                           </fieldset>
                        </form>
                     </td>
                  </tr>
         </div>
      </div>
@endsection