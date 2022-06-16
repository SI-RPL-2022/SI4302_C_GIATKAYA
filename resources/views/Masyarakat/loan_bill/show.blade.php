@extends('dashboard2')
@section('content')
    <div class="col-12 main peminjaman-modal">
        <div class="row">
            <h1 class="page-header text-center border-bottom-unset"><strong>PEMBAYARAN TAGIHAN PINJAMAN</strong></h1>
        </div>
        @if (session('success'))
            <div class="row d-flex justify-content-center">
                <div class="col-lg-8">
                    <div class="alert alert-success">{{ session('success') }}</div>
                </div>
            </div>
        @endif
        <div class="row d-flex justify-content-center">
            <div class="col-lg-8">
                <div class="panel panel-default">
                    <div class="panel-heading"><strong>User Profile</strong></div>
                    <div class="panel-body p-0">
                        <div class="row">
                            <div class="col-lg-3" style="height: 100%; padding-right: 0px;">
                                {{-- <img src="{{ asset('image/'.auth()->user()->foto) }}" alt="" srcset="" class="pd-img-user"> --}}
                                <div
                                    style="width: 100%; height: 257.69px; background: url('{{ asset('image/' . auth()->user()->foto) }}'); background-size: cover;">

                                </div>
                            </div>
                            <div class="col-lg-9" style="padding-left: 0px;">
                                <table>
                                    <tbody>
                                        <tr>
                                            <div class="container">
                                                <p class="h3"><strong>{{ auth()->user()->name }}</strong></p>
                                                <p class="text fs-18">NIK : {{ auth()->user()->nik }}</p>
                                                <div class="d-inline-flex">
                                                    <a href="" class="btn btn-primary">Edit Profile</a>

                                                </div>
                                            </div>
                                            <hr class="hr-1">
                                        </tr>
                                        <tr>
                                            <p class="h4 text-center"><strong>Pekerjaan / Usaha</strong></p>
                                            <hr class="hr-1">
                                        </tr>
                                        <tr>
                                            <p class="h4 text-center">{{ auth()->user()->usaha }}</p>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-lg-8">
                <div class="panel panel-default card-shadow">
                    <div class="panel-body">
                        <p class="h2 text-center"><strong>Data Detail Tagihan</strong></p>
                        <div class="row d-flex justify-content-center">
                            <div class="col-lg-10">
                                <form class="form-horizontal" method="POST" action="{{ route('masyarakat.bill.update', $loan_bill->id) }}">
                                    @csrf
                                    @method('PATCH')
                                    <div class="form-group mt-2">
                                        <label for="inputEmail3" class="col-sm-2 control-label">Nama Lengkap</label>
                                        <div class="col-sm-10">
                                            <input readonly type="text" class="form-control" name="full_name" value="{{ $request->full_name }}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                                        <div class="col-sm-10">
                                            <input readonly type="email" class="form-control" name="email" value="{{ $request->email }}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-2 control-label">Nomor Handphone</label>
                                        <div class="col-sm-10">
                                            <input readonly type="text" class="form-control" name="phone" value="{{ $request->phone }}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-2 control-label">Metode Pembayaran</label>
                                        <div class="col-sm-10">
                                            <input readonly type="text" class="form-control" name="payment_method" value="{{ $request->payment_method }}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-2 control-label">Jumlah Bayar</label>
                                        <div class="col-sm-10">
                                            <input readonly type="text" class="form-control" value="@rupiah($request->ammount)">
                                            <input readonly type="hidden" class="form-control" name="ammount" value="{{ $request->ammount }}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-2 control-label">Bukti Pembayaran</label>
                                        <div class="col-sm-10">
                                            <img src="{{ asset($tempImage) }}" alt="" srcset="" style="width: 300px; height: auto;">
                                            <input readonly type="hidden" class="form-control" name="payment_proof" value="{{ $tempImage }}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-offset-2 col-sm-10">
                                            <button type="submit" class="btn btn-primary">Bayar</button>
                                            <a href="{{ route('masyarakat.bill.index', $loan_bill->id) }}" class="btn btn-danger">Kembali</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
