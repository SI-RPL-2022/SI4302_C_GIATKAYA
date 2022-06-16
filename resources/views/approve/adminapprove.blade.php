@extends('layouts.dashboard')
@section('title','Approve Admin Pinjaman')
@section('content')
<div class="panel panel-default">
    <h2 class="text-center" style="margin-bottom: 20px;">Approve Pembayaran</h2>
</div>
  <form action="/approve/search/{id}" method="post" enctype="multipart/form-data">
    @csrf 
    <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
            <label class="form-label" for="nama_lengkap">Search by Nama</label>
            <input type="search" id="nama_lengkap" name="nama_lengkap" class="form-control" placeholder="Search ...">
        </div>
        <button type="submit" class="btn btn-info">Cari</button>
    </form>  
  </form>
      <ul class="nav nav-tabs"  style="margin-top: 20px;">
        <li class="active"><a data-toggle="tab" href="#tab1">Approve Pinjaman</a></li>
        <li><a data-toggle="tab" href="#tab2">List Pinjaman</a></li>
      </ul>

      <div class="tab-content">
        <div id="tab1" class="tab-pane in active">
            <div style="background-color: #8FBDD3;">
                <div class="panel panel-info">
                    <!-- Default panel contents -->
                    <div class="panel-heading"><strong>Daftar Data Approve</strong> </div>

                    <!-- Table -->
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Lengkap</th>
                                    <th>Email</th>                                
                                    <th>Jumlah Pinjaman</th>
                                    <th>Durasi (bulan)</th>
                                    <th>Cicilan</th>
                                    <th>Status</th>
                                    <th>File NIK</th>
                                    <th>File Profesi</th>
                                    <th>File Pembiayaan</th>
                                    <th>File Usaha</th>
                                    <th>File SKT</th>
                                    <th>File SKU</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; ?>   
                                @foreach ($approve_loan as $key=>$value)                                
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $value->name }}</td>
                                    <td>{{ $value->email }}</td>
                                    <td>{{ $value->amount }}</td>
                                    <td>{{ $value->duration }}</td>
                                    <td>{{ $value->instalment }}</td>
                                    <td>
                                        @if($value->status == 0)
                                            <span class="label label-info label-danger">Belum Approve</span>
                                        @elseif($value->status == 1)
                                            <span class="label label-info label-success">Berhasil Approve</span>
                                        @endif
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#fileNik_{{$value->id}}">
                                            <i class="glyphicon glyphicon-open-file"></i>
                                        </button>
                                        <div class="modal fade" id="fileNik_{{$value->id}}" tabindex="-1" role="dialog" aria-labelledby="modalLabelSmall" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                        <h4 class="modal-title" id="modalLabelSmall">File NIK</h4>
                                                    </div>
                                                    <div class="modal-body">                                                        
                                                        <img src="{{asset($value->file_nik)}}" class="img-rounded" width="100%">                                                                                                      
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#fileProf_{{$value->id}}">
                                            <i class="glyphicon glyphicon-open-file"></i>
                                        </button>
                                        <div class="modal fade" id="fileProf_{{$value->id}}" tabindex="-1" role="dialog" aria-labelledby="modalLabelSmall" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                        <h4 class="modal-title" id="modalLabelSmall">File Profesi</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <img src="{{asset($value->file_profesi)}}" class="img-rounded" width="100%">                                                                                                      
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#fileBiaya_{{$value->id}}">
                                            <i class="glyphicon glyphicon-open-file"></i>
                                        </button>
                                        <div class="modal fade" id="fileBiaya_{{$value->id}}" tabindex="-1" role="dialog" aria-labelledby="modalLabelSmall" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                        <h4 class="modal-title" id="modalLabelSmall">File Pembiayaan</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <img src="{{asset($value->file_pembiayaan)}}" class="img-rounded" width="100%">                                                                                                      
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#fileUsaha_{{$value->id}}">
                                            <i class="glyphicon glyphicon-open-file"></i>
                                        </button>
                                        <div class="modal fade" id="fileUsaha_{{$value->id}}" tabindex="-1" role="dialog" aria-labelledby="modalLabelSmall" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                        <h4 class="modal-title" id="modalLabelSmall">File Foto Usaha</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <img src="{{asset($value->file_foto_usaha)}}" class="img-rounded" width="100%">                                                                                                      
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#fileskt_{{$value->id}}">
                                            <i class="glyphicon glyphicon-open-file"></i>
                                        </button>
                                        <div class="modal fade" id="fileskt_{{$value->id}}" tabindex="-1" role="dialog" aria-labelledby="modalLabelSmall" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                        <h4 class="modal-title" id="modalLabelSmall">File SKT</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <img src="{{asset($value->file_skt)}}" class="img-rounded" width="100%">                                                                                                      
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#filesku_{{$value->id}}">
                                            <i class="glyphicon glyphicon-open-file"></i>
                                        </button>
                                        <div class="modal fade" id="filesku_{{$value->id}}" tabindex="-1" role="dialog" aria-labelledby="modalLabelSmall" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                        <h4 class="modal-title" id="modalLabelSmall">File SKU</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <img src="{{asset($value->file_sku)}}" class="img-rounded" width="100%"> 
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>                                    
                                    <td class="d-md-flex justify-content-center text-center">
                                        @if($value->status == 1)
                                            -
                                        @elseif($value->status == 0)
                                        <form action="{{url('approve/loan-success/'.$value->id)}}" method="POST">
                                            @csrf
                                            <input type="text" name="user_id" value="{{ $value->user_id }}" hidden>
                                            <input type="text" name="loan_id" value="{{ $value->id }}" hidden>
                                            <button class="btn btn-sm btn-success me-md-2 " type="submit"><i class="glyphicon glyphicon-ok"></i></button>
                                        </form> &nbsp
                                        <a href="{{ url('approve/loan-failed/'.$value->id) }}" class="btn btn-sm btn-danger me-md-2"><i class="glyphicon glyphicon-remove"></i></a>                                       
                                        @endif
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>                                                        
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div id="tab2" class="tab-pane">
        <div style="background-color: #8FBDD3;">
                <div class="panel panel-info">
                    <!-- Default panel contents -->
                    <div class="panel-heading"><strong>Daftar Data Pengembalian</strong> </div>

                    <!-- Table -->
                    <div class="table-responsive">
                        <table class="table ">
                            <tr>
                                <th>No</th>
                                <th>No. Invoice</th>
                                <th>Invoice Date</th>
                                <th>Due Date</th>
                                <th>Total</th>
                                <th>instalment</th>
                                <th>Nama Lengkap</th>
                                <th>Nomor Handphone</th>
                                <th>Email</th>                               
                                <th>Metode Pembayaran</th>
                                <th>Ammount</th>
                                <th>Bukti Pembayaran</th>
                                <th>Status Cicilan</th>
                                <th>Status Pinjaman</th>
                                <th>Aksi</th>
                            </tr>
                            @foreach ($refund_loan as $key=>$value)
                            <?php $no = 1; ?> 
                                <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $value->invoice }}</td>
                                <td>{{ $value->invoice_date }}</td>
                                <td>{{ $value->due_date }}</td>
                                <td>{{ $value->total }}</td>
                                <td>{{ $value->instalment }}</td>
                                <td>
                                    @if($value->full_name == NULL)
                                        -
                                    @else
                                        {{ $value->full_name }}
                                    @endif
                                </td>
                                <td>
                                    @if($value->phone == NULL)
                                        -
                                    @else
                                        {{ $value->phone }}
                                    @endif    
                                </td>
                                <td>
                                    @if($value->email == NULL)
                                        -
                                    @else
                                        {{ $value->email }}
                                    @endif                                        
                                </td>
                                <td>
                                    @if($value->payment_method == NULL)
                                        -
                                    @else
                                        {{ $value->payment_method }}
                                    @endif                                                                            
                                </td>
                                <td>
                                    @if($value->ammount == NULL)
                                        -
                                    @else
                                        {{ $value->ammount }}
                                    @endif                                            
                                </td>
                                <td>
                                    @if($value->payment_proof == NULL)
                                        -
                                    @else                                                                            
                                    <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#payment_proof{{$value->id}}">
                                        <i class="glyphicon glyphicon-open-file"></i>
                                    </button>
                                    <div class="modal fade" id="payment_proof{{$value->id}}" tabindex="-1" role="dialog" aria-labelledby="modalLabelSmall" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                    <h4 class="modal-title" id="modalLabelSmall">File NIK</h4>
                                                </div>
                                                <div class="modal-body">                                                        
                                                    <img src="{{asset($value->payment_proof)}}" class="img-rounded" width="100%">                                                                                                      
                                                </div>
                                            </div>
                                        </div>
                                    </div>       
                                    @endif                                  
                                </td>
                                <td>
                                    @if($value->full_name == NULL && $value->phone == NULL && $value->email == NULL && $value->payment_method == NULL && $value->ammount == NULL && $value->payment_proof == NULL)
                                        -
                                    @else
                                        @if($value->status_cicilan == "Check")
                                            <span class="label label-info label-warning">Check</span>
                                        @elseif($value->status_cicilan == "Failed")
                                            <span class="label label-info label-danger">Failed</span>
                                        @elseif($value->status_cicilan == "Validated")
                                            <span class="label label-info label-success">Validated</span>
                                        @endif
                                    @endif
                                </td>      
                                <td>
                                    @if($value->status_pinjaman == "Lunas")
                                        <span class="label label-info label-success">{{ $value->status_pinjaman }}</span>
                                    @elseif($value->status_pinjaman == "Belum Lunas")
                                        <span class="label label-info label-danger">{{ $value->status_pinjaman }}</span>
                                    @endif
                                </td>                          
                                <td>
                                    @if($value->full_name == NULL && $value->phone == NULL && $value->email == NULL && $value->payment_method == NULL && $value->ammount == NULL && $value->payment_proof == NULL)
                                        -
                                    @else
                                        @if($value->total == 0)
                                            @if($value->status_pinjaman == "Lunas")
                                                -
                                            @elseif($value->status_pinjaman == "Belum Lunas")
                                            <form action="{{ url('approve/loan-bill/validasi-lunas/'.$value->id) }}" method="post">
                                                @csrf                                        
                                                <input type="text" name="status_pinjaman" value="Lunas" hidden>        
                                                <button type="submit" class="btn btn-sm btn-success">Validasi Lunas</button>
                                            </form>
                                            @endif
                                        @else   
                                            @if($value->status == 1)
                                                <button type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#keterangan{{$value->id}}">
                                                    Beri Keterangan
                                                </button>
                                                <div class="modal fade" id="keterangan{{$value->id}}" tabindex="-1" role="dialog" aria-labelledby="modalLabelSmall" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                                <h4 class="modal-title" id="modalLabelSmall">Beri Keterangan</h4>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form action="{{ url('approve/loan-bill/beri-keterangan/'.$value->id) }}" method="post">
                                                                    @csrf
                                                                    <input type="text" name="user_id" value="{{ $value->user_id }}" hidden>
                                                                    <input type="text" name="loan_id" value="{{ $value->loan_id }}" hidden>
                                                                    <input type="text" name="id" value="{{ $value->id }}" hidden>          
                                                                    <textarea name="keterangan" rows="5" class="form-control form-control-sm"></textarea>                                                                                                                                                             
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="submit" class="btn btn-sm btn-success">Kirim</button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>                                            
                                            @elseif($value->status == 0)
                                            <form action="{{ url('approve/loan-bill/approve-success/'.$value->id) }}" method="post">
                                                @csrf
                                                <input type="text" name="user_id" value="{{ $value->user_id }}" hidden>
                                                <input type="text" name="loan_id" value="{{ $value->loan_id }}" hidden>
                                                <input type="text" name="id" value="{{ $value->id }}" hidden>          
                                                <input type="text" name="ammount" value="{{ $value->ammount }}" hidden>                                  
                                                <button type="submit" class="btn btn-sm btn-success"><i class="glyphicon glyphicon-ok"></i></button>
                                            </form>&nbsp    
                                            <form action="{{ url('approve/loan-bill/approve-failed/'.$value->id) }}" method="post">
                                                @csrf
                                                <input type="text" name="user_id" value="{{ $value->user_id }}" hidden>
                                                <input type="text" name="loan_id" value="{{ $value->loan_id }}" hidden>
                                                <input type="text" name="id" value="{{ $value->id }}" hidden>                                                  
                                                <button type="submit" class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-remove"></i></button>
                                            </form>     
                                            @endif
                                        @endif                                        
                                    @endif                                                                
                                </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
      </div>
@endsection