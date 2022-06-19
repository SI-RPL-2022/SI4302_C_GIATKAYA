@extends('layouts.dashboard')

@section('content')
    <div>
        <h2 class="text-center">Create Informasi Lapangan Kerja</h2>
    </div>
    <br/>
    <form method="POST" action="{{ url('infokerja/store') }}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="first_name">Nama Perusahaan</label>
            <input type="text" class="form-control form" name="name_perusahaan">
        </div>
        <div class="form-group">
            <label for="first_name">Deskripsi Lowongan</label>
            <textarea name="deskripsi" class="form-control form" id="editor"></textarea>            
        </div> 
        <div class="form-group">
            <label for="last_name">Lokasi</label>
            <input type="text" class="form-control form" name="lokasi">
        </div>
        <div class="form-group">
            <label for="last_name">Jabatan</label>
            <input type="text" class="form-control form" name="jabatan">
        </div>
        <div class="form-group">
            <label for="last_name">Gaji</label>
            <input type="text" class="form-control form" name="gaji">
        </div>
        <div class="form-group">
            <label for="formFile" class="form-label">Logo Perusahaan</label>
            <input type="file" name="foto" type="file" id="formFile">
        </div>
            <button type="submit" class="btn btn-info">Tambah</button>
            <a href="{{ url()->previous() }}" class="btn btn-danger">Cancel</a>
            <button type="reset" class="btn btn-warning" value="Reset"><i class="fa-solid fa-arrows-rotate"></i></button>
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