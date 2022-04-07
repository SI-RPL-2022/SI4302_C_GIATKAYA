@extends('layouts.dashboard')

@section('content')
<h2 class="sub-header text-center" >Verifikasi Data User</h2>
<div class="p-3">
  <table class="table">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Nama</th>
        <th scope="col">NIK</th>
        <th scope="col">Jenis Kelamin</th>
        <th scope="col">Nama Usaha</th>
        <th scope="col">Tahun Berdiri</th>
        <th scope="col">Email</th>
        <th scope="col">Foto KTP</th>
        <th scope="col" class="text-center">Aksi</th>
      </tr>
    </thead>
    <tbody>
      @php
        $i = 1;
      @endphp
      @foreach ($data_user as $key=>$row)
      <tr class="">
        <th scope="row">{{ $i }}</th>
        <td>{{ $row->nama }}</td>
        <td>{{ $row->nik }}</td>
        <td>{{ $row->jenis_kelamin }}</td>
        <td>{{ $row->Nama_Usaha }}</td>
        <td>{{ $row->tahun_berdiri }}</td>
        <td>{{ $row->email }}</td>
        <td><a href="#" data-toggle="modal" data-target="#modalFoto{{ $i }}">{{ $row->foto_ktp }}</a></li></td>
        <td class="d-grid gap-2 d-md-flex justify-content-center text-center">
          <button class="btn btn-success me-md-2" type="button">Accept</button>
          <button class="btn btn-danger" type="button">Decline</button>
        </td>
      </tr>

      <div class="modal fade" id="modalFoto{{ $i }}" tabindex="-1" aria-labelledby="modalFotoLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="modalFotoLabel">Modal title</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              ...
            </div>
          </div>
        </div>
      </div>
      @php
        $i++;
      @endphp
      @endforeach
    </tbody>
  </table>
</div>
@endsection