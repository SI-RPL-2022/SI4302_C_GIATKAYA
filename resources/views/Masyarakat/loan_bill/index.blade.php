@extends('dashboard2')
@section('content')
<div class="col-12 main peminjaman-modal">
    <div class="row">
        <h1 class="page-header text-center border-bottom-unset"><strong>DAFTAR TAGIHAN PINJAMAN</strong></h1>
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
                            <div style="width: 100%; height: 257.69px; background: url('{{ asset('image/'.auth()->user()->foto) }}'); background-size: cover;">

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
            <table id="example" class="table table-striped table-bordered dt" style="width:100%">
                <thead>
                    <tr>
                        <th>Invoice #</th>
                        <th>Invoice Date</th>
                        <th>Due Date</th>                        
                        <th>Total Pembayaran</th>
                        <th>Cicilan (Bulan)</th>
                        <th>Sisa Pembayaran</th>
                        <th>Status Cicilan</th>
                        <th>Status Pinjaman</th>
                        <th>Keterangan</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($bills as $bill)
                        <tr>
                            <td>{{ $bill->invoice }}</td>
                            <td>{{ $bill->invoice_date }}</td>
                            <td>{{ $bill->due_date }}</td>                            
                            <td>{{ $bill->total_pembayaran }}</td>
                            <td>{{ $bill->instalment }}</td>
                            <td>{{ $bill->sisa_pembayaran }}</td>                            
                            <td>
                                @if($bill->full_name == NULL && $bill->phone == NULL && $bill->email == NULL && $bill->payment_method == NULL && $bill->ammount == NULL && $bill->payment_proof == NULL)
                                    -
                                @else
                                    @if($bill->status_cicilan == "Failed")
                                        <span class="label label-info label-danger">{{ $bill->status_cicilan }}</span>
                                    @elseif($bill->status_cicilan == "Check")
                                        <span class="label label-info label-warning">{{ $bill->status_cicilan }}</span>
                                    @elseif($bill->status_cicilan == "Validated")
                                        <span class="label label-info label-success">{{ $bill->status_cicilan }}</span>
                                    @endif                                
                                @endif
                            </td>
                            <td>
                                @if($bill->status_pinjaman == "Lunas")
                                    <span class="label label-info label-success">{{ $bill->status_pinjaman }}</span>
                                @elseif($bill->status_pinjaman == "Belum Lunas")
                                    <span class="label label-info label-danger">{{ $bill->status_pinjaman }}</span>
                                @endif                                
                            </td>
                            <td>
                                @if($bill->status_pinjaman == "Lunas")
                                    -
                                @elseif($bill->status_pinjaman == "Belum Lunas")
                                    {{$bill->keterangan}}
                                @endif
                            </td>
                            <td>
                                @if ($bill->status==0)
                                    @if($bill->full_name == NULL && $bill->phone == NULL && $bill->email == NULL && $bill->payment_method == NULL && $bill->ammount == NULL && $bill->payment_proof == NULL)
                                        <a href="{{ route('masyarakat.bill.create', $bill->id) }}" class="btn btn-primary"><i class="fa fa-dollar"></i> Pay</a>
                                    @else                                        
                                        -
                                    @endif
                                @else
                                    -
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
<script>
    var msg = '{{Session::get('alert')}}';
    var exist = '{{Session::has('alert')}}';
    if(exist){
      alert(msg);
    }
</script>
@endsection
