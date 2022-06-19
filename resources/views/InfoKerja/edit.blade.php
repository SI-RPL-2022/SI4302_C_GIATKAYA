@extends('layouts.dashboard')

@section('content')
    <div>
        <h2 class="text-center">Edit Informasi Lapangan Kerja</h2>
    </div>
    <br/>
    <form method="POST" action="{{ url('infokerja/update/'.$model->id) }}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="first_name">Nama Perusahaan</label>
            <input type="text" class="form-control form" name="name_perusahaan" value="{{ $model->name_perusahaan }}">
        </div>
        <div class="form-group">
            <label for="first_name">Deskripsi Lowongan</label>
            <textarea name="deskripsi" class="form-control form" id="editor">{{ $model->deskripsi }}</textarea>                        
        </div>
        <div class="form-group">
            <label for="last_name">Lokasi</label>
            <input type="text" class="form-control form" name="lokasi" value="{{ $model->lokasi }}">
        </div>
        <div class="form-group">
            <label for="last_name">Jabatan</label>
            <input type="text" class="form-control form" name="jabatan" value="{{ $model->jabatan }}">
        </div>
        <div class="form-group">
            <label for="last_name">Gaji</label>
            <input type="text" class="form-control form" name="gaji" value="{{ $model->gaji }}">
        </div>
        <div class="form-group">
            <label for="formFile">Logo Perusahaan</label>
            <input type="file" class="form-control form" name="foto_new">
            <input type="text" name="foto" value="{{ $model->foto }}" hidden>
            <img src="{{ asset('public.image/'.$model->foto) }}" style="width: 190px; margin-top: 10px;" alt="">
        </div>
            <button type="submit" class="btn btn-info">Edit</button>
            <a href="{{ url()->previous() }}" class="btn btn-danger">Cancel</a>
    </form>
<script src="https://cdn.ckeditor.com/ckeditor5/31.1.0/classic/ckeditor.js"></script>
<script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
</script>
@endsection