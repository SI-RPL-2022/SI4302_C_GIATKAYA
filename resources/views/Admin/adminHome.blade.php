@extends('layouts.dashboard')

@section('content')
<div class="col-sm-12">
          <div class="row">
            <h1 class="page-header">Dashboard</h1>

            <div class="row placeholders">
              <div class="col-xs-6 col-sm-3 placeholder">
                <div class="card bg-c-blue order-card">
                  <div class="card-block">
                    <h6 class="m-b-20"><strong>DATA PENGGUNA GIATKAYA</strong></h6>
                    <h2 class="text-right"><i class="fas fa-regular fa-user f-left"></i><span>50</span></h2>
                  </div>
                </div>
              </div>
              <div class="col-xs-6 col-sm-3 placeholder">
              <div class="card bg-c-green order-card">
                <div class="card-block">
                  <h6 class="m-b-20"><strong>JUMLAH PINJAMAN MODAL</strong></h6>
                  <h2 class="text-right"><i class="fas fa-regular fa-coins f-left"></i><span>Rp 1 Milyar</span></h2>
                </div>
              </div>
              </div>
              <div class="col-xs-6 col-sm-3 placeholder">
              <div class="card bg-c-yellow order-card">
                <div class="card-block">
                  <h6 class="m-b-20"><strong>DAFTAR PELATIHAN</strong></h6>
                    <h2 class="text-right"><i class="fa-solid fa-book-open-reader f-left"></i><span>500</span></h2>
                    <!-- <p class="m-b-0">Completed Course<span class="f-right">351</span></p> -->
                </div>
              </div>
              </div>
              <div class="col-xs-6 col-sm-3 placeholder">
              <div class="card bg-c-pink order-card">
                <div class="card-block">
                  <h6 class="m-b-20"><strong>SERTIFIKAT PELATIHAN</strong></h6>
                  <h2 class="text-right"><i class="fa fa-solid fa-file f-left"></i><span>486</span></h2>
                  <!-- <p class="m-b-0">Completed Course<span class="f-right">351</span></p> -->
                </div>
              </div>
              </div>
            </div>

            <h2 class="sub-header">Section title</h2>
            <div class="table-responsive">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Header</th>
                    <th>Header</th>
                    <th>Header</th>
                    <th>Header</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1,001</td>
                    <td>Lorem</td>
                    <td>ipsum</td>
                    <td>dolor</td>
                    <td>sit</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
@endsection
