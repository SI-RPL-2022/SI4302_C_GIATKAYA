@extends('layouts.dashboard')
@section('title','Data Riwayat Lamaran')

@section('content')
<div>
    <h2 class="text-center">Informasi Pekerjaan</h2>
</div>    
<div class="p-3">
    <form action="{{ url('data-riyawat-lamaran/cari') }}" method="get">
        @csrf     
        <div class="form-group">
            <label class="form-label" for="lokasi">Nama Perusahaan</label>
            <input type="search" id="lokasi" name="search" class="form-control" placeholder="Search ...">
            </div>
            <button type="submit" class="btn btn-info">Cari</button>
        </div>        
    </form>
</div>
<br/>
<a class="btn btn-sm btn-danger" href="{{ url('infokerja') }}">Kembali</a>
<br/>
<br>
<div class="p-3 ">    
    <div class="row">
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
                            <a href="{{ url('data-riyawat-lamaran/download/'.$models->id) }}" class="btn btn-sm btn-info"><i class="fas fa-download"></i></a>
                        </td>
                        <td>
                            <a href="{{ url('data-riyawat-lamaran/delete/'.$models->id) }}" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>                                
            </table>
            {{ $model->links() }}   
        </div>         
    </div>
</div>
@endsection