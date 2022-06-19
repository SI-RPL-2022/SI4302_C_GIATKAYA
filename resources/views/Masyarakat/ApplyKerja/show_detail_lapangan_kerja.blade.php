@extends('dashboard2')

@section('content')
<div class="col-sm-12 main">
    <div class="row">
        <div class="text-center" style="font-weight:bold; font-size:25px;">LAPANGAN KERJA</div>
        <div class="text-start" style="font-weight:bold; font-size:18px; margin-top:30px;">Experience</div>                
        <div class="row" style="margin-top:10px;">            
            <div class="col-md-12">
                <div class="panel panel-default">                    
                    <div class="panel-heading">
                        Detail Lapangan Kerja
                    </div>
                    <div class="panel-body">                                                    
                        <div class="text-center">
                            <img src="{{ asset('public.image/'.$data->foto) }}" class="img-rounded" style=" margin-bottom:20px;">                            
                        </div>                                                    
                        <div class="text-start">
                            <div style="font-weight:bold; font-size:22px;">{{ $data->jabatan }}</div>
                            <div style="font-weight:100; font-size:16px;">{{ $data->name_perusahaan }} | {{ $data->lokasi }}</div>
                            <div style="font-weight:100; font-size:14px;">Gaji Pokok:  Rp. {{ $data->gaji }} </div>                                                        
                            <div align="justify" style="font-size:13px; margin-top:20px;">
                                {!! $data->deskripsi !!}
                            </div>                                                                        
                        </div>
                    </div>   
                    <div class="panel-footer">
                        <div class="text-start">
                            <a href="{{ url('masyarakat/lapangan-kerja/lamar/'.$data->id) }}" class="btn btn-sm btn-info">Lamar</a>
                            <a href="{{ url('masyarakat/lapangan-kerja') }}" class="btn btn-sm btn-danger">Cancel</a>
                        </div>
                    </div>
                </div>
            </div>            
        </div>           
    </div>
</div>
@endsection
