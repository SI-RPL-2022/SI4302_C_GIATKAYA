@extends('layouts.dashboard')

@section('content')
    <div>
        <h2 class="text-center">Create Training Skill</h2>
    </div>
    <br/>
    
    <form method="POST" action="{{ url('training/store') }}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="first_name">Nama Pelatihan</label>
            <input type="text" class="form-control form" id="first_name" name="name_training">
        </div>
        <div class="form-group">
            <label for="first_name">Metode Pelatihan</label>
                <select class="form-control form" id="sel1" name="metode_training">
                    <option selected>-- Pilih Metode Pelatihan --</option>
                    <option>Video Materi</option>
                    <option>Modul</option>
                </select>
            <!-- <input type="text" class="form-control" id="first_name" name="metode_training"> -->
        </div>
        <div class="form-group">
            <label for="last_name">Kategori Pelatihan</label>
                <select class="form-control form" id="sel1" name="jenis_training">
                    <option selected class="text-muted">-- Pilih Kategori Pelatihan --</option>
                    <option>Business</option>
                    <option>Personal Skill</option>
                    <option>Tech & Development</option>
                    <option>Art, Design & Photography</option>
                    <option>Lifestyle</option>
                </select>
            <!-- <input type="text" class="form-control" id="last_name" name="jenis_training"> -->
        </div>
        <div class="form-group">
            <label for="last_name">Durasi</label>
            <input type="text" class="form-control form" id="last_name" name="durasi">
        </div>
        <div class="form-group">
            <label for="last_name">Rilis</label>
            <input type="date" class="form-control form" id="last_name" name="tgl_rilis">
        </div>
        <div class="form-group">
            <label for="last_name">Kualitas</label>
            <input type="text" class="form-control form" id="last_name" name="kualitas">
        </div>
        <div class="form-group">
            <label for="last_name">Detail Pelatihan</label>
            <input type="text" class="form-control form" id="last_name" name="detail_pelatihan">
        </div>
        <div class="form-group">
            <label for="last_name">Trainer</label>
            <input type="text" class="form-control form" id="last_name" name="trainer">
        </div>
        <div class="form-group">
            <label for="formFile" class="form-label">Cover Thumbnail</label>
            <input type="file" name="cover" type="file" id="formFile">
        </div>
            <button type="submit" class="btn btn-info">Tambah</button>
            <a href="{{ url()->previous() }}" class="btn btn-danger">Cancel</a>
            <button type="reset" class="btn btn-warning" value="Reset"><i class="fa-solid fa-arrows-rotate"></i></button>
    </form>
@endsection