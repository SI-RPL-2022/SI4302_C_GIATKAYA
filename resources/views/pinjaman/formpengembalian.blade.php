@extends('layouts.dashboard')
@section('title','Input Data Diri')
@section('content')
<div>
    <h2 class="text-center" style="margin-bottom: 30px;">Pembayaran Tagihan Pinjaman</h2>
</div>
<hr>
<h3 class="text-center" style="margin-bottom: 30px;">Input Data Diri</h3>
       <table class="table table-striped">
          <tbody>
             <tr>
                <td colspan="1">
                   <form class="well form-horizontal">
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
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-credit-card"></i></span><input id="city" name="city" placeholder="Metode Pembayaran" class="form-control" required="true" value="" type="text"></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-3 control-label">Jumlah Bayar</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-usd"></i></span><input id="state" name="state" placeholder="Jumlah Bayar" class="form-control" required="true" value="" type="text"></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-3 control-label"></label>
                            <div class="col-md-8 inputGroupContainer">
                            <button class="btn btn-info">Submit</button>
                            <button class="btn btn-danger">Cancel</button>
                            </div>
                         </div>
                      </fieldset>
                   </form>
                </td>
             </tr>
          </tbody>
       </table>
@endsection