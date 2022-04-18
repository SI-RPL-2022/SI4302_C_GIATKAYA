@extends('layouts.dashboard')

@section('content')
    <div>
        <h2 class="text-center">Course</h2>
    </div>
    <div style="background-color: #8FBDD3; ">
        <table class="table-bordered table">
            <tr>
                <th>Nama Pelatihan</th>
                <th>Kategori Pelatihan</th>
                <th>Detail Pelatihan</th>
                <th colspan="2">Aksi</th>
            </tr>
            @foreach($datas as $key=>$value)
                <tr>
                    <td>{{ $value->name_training }}</td>
                    <td>{{ $value->jenis_training }}</td>
                    <td>{{ $value->detail_pelatihan }}</td>
                    <td><a class="btn btn-success" href="{{ url('training/edit/'.$value->id) }}">Edit</a></td>
                    <td><a class="btn btn-danger" href="{{ url('training/delete/'.$value->id) }}">Delete</a></td>
                </tr>
            @endforeach
        
        </table>
        <br/>
        <a class="btn btn-info" style="background-color: #11CDEF; float:right;" href="{{ url('training/create') }}">Tambahkan Pelatihan</a>
        <br/>
    </div>
@endsection