@extends('dashboard2')

@section('content')
<div class="col-sm-12 main">
    <div class="row">
        <div class="text-center" style="font-weight:bold; font-size:25px;">LAPANGAN KERJA</div>        
        <div class="row" style="margin-top:10px;">            
            <div class="col-md-12">
                <div class="panel panel-default">                    
                    <div class="panel-heading">
                        Mengisi Berkas
                    </div>
                    <div class="panel-body">                                                    
                        <form action="{{ url('masyarakat/lapangan-kerja/lamar/store') }}" method="post" enctype= multipart/form-data>
                            @csrf
                            <div class="form-group">
                                <label for="">Nama Perusahaan</label>
                                <input type="text" class="form-control" value="{{ $data->name_perusahaan }}" readonly>
                                <input type="text" name="id_lapangan_kerja" value="{{ $data->id }}" hidden>
                            </div>
                            <div class="form-group">
                                <label for="">Nama Pelamar</label>
                                <input type="text" class="form-control" value="{{ Auth::user()->name }}" readonly>
                                <input type="text"  name="id_user" value="{{ Auth::user()->id }}" hidden>
                            </div>
                            <div class="form-group">
                                <label for="">Berkas</label>
                                <label for="" style="font-weight:normal; font-size:10px;">
                                    * Berkas harus dikirim dalam format .rar, yang berisikan Curriculum Vitae (CV) atau daftar riwayat hidup,
                                    Surat lamaran kerja (Cover Letter), Portofolio, Ijazah dan transkrip nilai, Pas Foto terbaru, 
                                    Sertifikat atau piagam penghargaan, Surat Keterangan Catatan Kepolisian (SKCK) dan Identitas Pribadi (Fotokopi KTP/KK)
                                </label>
                                <input type="file" class="form-control" name="berkas_lamaran">                                
                            </div>                        
                    </div>   
                    <div class="panel-footer">
                        <div class="text-start">
                            <button type="submit" class="btn btn-sm btn-success">Kirim</button>
                            <a href="{{ url('masyarakat/lapangan-kerja') }}" class="btn btn-sm btn-danger">Cancel</a>
                        </div>
                        </form>
                    </div>
                </div>
            </div>            
        </div>           
    </div>
</div>
@endsection
