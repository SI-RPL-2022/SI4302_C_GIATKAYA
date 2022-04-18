@extends('layouts.dashboard')

@section('content')
<h2 class="sub-header text-center">Verifikasi Data User</h2>
<div class="p-3">
  <form action="/verif/search/{id}" method="post" enctype="multipart/form-data">
    @csrf 
    <div class="row vertical-align">
      <div class="col">
        <div class="input-group">
          <div class="form-outline">
          <input type="search" id="nik" name="nik" class="form-control" />
          <label class="form-label" for="nik">Search by NIK</label>
        </div>
        <button type="submit" class="btn btn-primary">
          <i class="fas fa-search"></i>
          </button>
          </div>
      </div>

      </div>
    </div>
    
  </form>
  

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
        <td>{{ $row->name }}</td>
        <td>{{ $row->nik }}</td>
        <td>{{ $row->gender }}</td>
        <td>{{ $row->usaha }}</td>
        <td>{{ $row->tahun}}</td>
        <td>{{ $row->email }}</td>
        <td><a href="#" data-toggle="modal" data-target="#modalFoto{{ $i }}">{{ $row->foto}}</a></li>
        </td>
        <td class="d-grid gap-2 d-md-flex justify-content-center text-center">
          <form action="{{route('update_status')}}" method="POST" >
            @csrf
            <input type="hidden" name="_method" value="POST">
            <input type="hidden" name="accept" value="{{$row->id}}">
            <button class="btn btn-success me-md-2" type="submit">Accept</button>
          </form>
          <form action="{{route('update_status')}}" method="POST" >
            @csrf
            <input type="hidden" name="_method" value="POST">
            <input type="hidden" name="decline" value="{{$row->id}}">
            <button class="btn btn-danger me-md-2" type="submit">Decline</button>
          </form>
        </td>
      </tr>

      <div class="modal fade" id="modalFoto{{ $i }}" tabindex="-1" aria-labelledby="modalFotoLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="modalFotoLabel">Foto KTP</h5>
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