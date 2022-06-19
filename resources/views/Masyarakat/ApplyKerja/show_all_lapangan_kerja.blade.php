@extends('dashboard2')

@section('content')
<div class="col-sm-12 main">
    <div class="row">
        <div class="text-center" style="font-weight:bold; font-size:25px;">LAPANGAN KERJA</div>
        <div class="text-start" style="font-weight:bold; font-size:18px; margin-top:30px;">Temukan Pekerjaan Impian Anda!</div>
        <form action="{{ url('masyarakat/lapangan-kerja/cari') }}" method="get">
            <div class="row" style="margin-top:10px;">
                <div class="col-sm-2" style="padding-right: 0;">
                    <select name="kategori" class="form-control" style="font-size:13px;">
                        <option value="name_perusahaan">Nama Perusahaan</option>
                        <option value="lokasi">Lokasi</option>
                        <option value="jabatan">Jabatan</option>
                        <option value="gaji">Gaji</option>
                    </select>
                </div>
                <div class="col-sm-10" style="padding-left: 0;">
                    <div class="input-group">
                        <input type="text" name="search" class="form-control" placeholder="Search">
                        <div class="input-group-btn">
                            <button class="btn btn-info" type="submit">
                                <i class="glyphicon glyphicon-search"></i> Cari
                            </button>
                        </div>
                    </div>
                </div>
            </div>            
        </form>
        <div style="margin-top:15px;">
            <a href="{{ url('masyarakat/lapangan-kerja/riyawat-lamaran') }}" class="btn btn-sm btn-primary">Lihat Riwayat Lamaran</a>
        </div>
        <div class="text-start" style="font-weight:bold; font-size:18px; margin-top:20px;">Daftar Lowongan Kerja yang Tersedia</div>
        <div class="row" style="margin-top:10px;">
            @foreach($data as $datas)
            <div class="col-md-3">
                <div class="panel panel-default" style="height:490px; position: relative;">                    
                    <div class="panel-body">
                        <div class="text-center">
                            <img src="{{ asset('public.image/'.$datas->foto) }}" class="img-rounded" style="width: 100%; height: 140px; margin-bottom:10px;">                            
                        </div>
                        <div class="text-start">
                            <div style="font-weight:bold; font-size:16px;">{{ $datas->name_perusahaan }}</div>
                            <div style="font-weight:100; font-size:13px;">{{ $datas->jabatan }}</div>
                            <hr style="border-top: 2px solid black; margin-top:8px; margin-bottom:8px;" >
                            <div align="justify" style="font-size:11px;">
                                {!! $datas->deskripsi_singkat !!}
                            </div>
                            <hr style="border-top: 2px solid black; margin-top:8px; margin-bottom:8px;" >
                            <div style="font-size:12px;">
                                <div class="row">
                                    <div class="col-md-2" style="padding-right: 0;"><i class="fas fa-map-marker-alt"></i></div>
                                    <div class="col-md-10" style="padding-left: 0;">{{ $datas->lokasi }}</div>
                                    <div class="col-md-2" style="padding-right: 0;"><i class="fas fa-money-bill"></i></div>
                                    <div class="col-md-10" style="padding-left: 0;">Rp. {{ $datas->gaji }}</div>
                                </div>
                            </div>  
                            <hr style="border-top: 2px solid black; margin-top:8px; margin-bottom:8px;" >                                                                                                            
                            <div class="text-center" style="position: absolute; bottom: 10px;">
                                <a href="{{ url('masyarakat/lapangan-kerja/detail/'.$datas->id) }}" class="btn btn-sm btn-info">Lihat</a>
                            </div>
                        </div>
                    </div>   
                </div>
            </div>
            @endforeach            
        </div>
        {{ $data->links() }}        
    </div>
</div>
@endsection
