@extends('dashboard2')

@section('content')
<div class="col-sm-12 main">
    <div class="row">
        <div class="text-center" style="font-weight:bold; font-size:25px;">LAPANGAN KERJA</div>        
        <div class="row" style="margin-top:15px;">            
            <div class="col-md-12">
                <a href="{{ url('masyarakat/lapangan-kerja') }}" style="margin-bottom:10px;" class="btn btn-sm btn-danger">Kembali</a>
                <div class="panel panel-default">                    
                    <div class="panel-heading">
                        Riwayat Lamaran Kerja
                    </div>
                    <div class="panel-body">    
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Perusahaan</th>
                                        <th>Tanggal Lamar</th>
                                        <th>Berkas</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; ?>
                                    @foreach($model as $models)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $models->name_perusahaan }}</td>
                                        <td>{{ $models->created_at }}</td>
                                        <td>
                                            <a href="{{ url('masyarakat/lapangan-kerja/riyawat-lamaran/download-berkas/'.$models->id) }}" class="btn btn-sm btn-info"><i class="fas fa-download"></i></a>
                                        </td>
                                        <td>
                                            <a href="{{ url('masyarakat/lapangan-kerja/riyawat-lamaran/hapus/'.$models->id) }}" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>                                
                            </table>
                        </div>                                                                        
                    </div>  
                    <div class="panel-footer">
                        {{ $model->links() }}   
                    </div>
                </div>
            </div>            
        </div>           
    </div>
</div>
@endsection
