@extends('layouts.dashboard')

@section('content')
    <div>
        <h2 class="text-center">Edit Training Skill</h2>
    </div>
    <br/>
    <form method="POST" action="{{ url('training/update/'.$model->id) }}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="first_name">Nama Pelatihan</label>
            <input type="text" class="form-control form" name="name_training" value="{{ $model->name_training }}">
        </div>
        <div class="form-group">
            <label for="first_name">Metode Pelatihan</label>
                <select class="form-control form" id="sel1" name="metode_training">
                    <option selected class="text-muted">{{ $model->metode_training }}</option>
                    <option>Video Materi</option>
                    <option>Modul</option>
                </select>
            <!-- <input type="text" class="form-control form" name="metode_training" value="{{ $model->metode_training }}"> -->
        </div>
        <div class="form-group">
            <label for="last_name">Kategori Pelatihan</label>
                <select class="form-control form" id="sel1" name="jenis_training">
                    <option selected class="text-muted">{{ $model->jenis_training }}</option>
                    <option>Business</option>
                    <option>Personal Skill</option>
                    <option>Tech & Development</option>
                    <option>Art, Design & Photography</option>
                    <option>Lifestyle</option>
                </select>
            <!-- <input type="text" class="form-control form" name="jenis_training" value="{{ $model->jenis_training }}"> -->
        </div>
        <div class="form-group">
            <label for="last_name">Detail Pelatihan</label>
            <input type="text" class="form-control form" name="detail_pelatihan" value="{{ $model->detail_pelatihan }}">
        </div>
        <div class="form-group">
            <label for="last_name">Trainer</label>
            <input type="text" class="form-control form" name="trainer" value="{{ $model->trainer }}">
        </div>
        <div class="form-group">
            <label for="formFile">Cover Thumbnail</label>
            <input type="file" class="form-control form" name="cover_new">
            <input type="text" name="cover" value="{{ $model->cover }}" hidden>
            <img src="{{ asset('image/'.$model->cover) }}" style="width: 190px; margin-top: 10px;" alt="">
        </div>
            <button type="submit" class="btn btn-info">Edit</button>
            <a href="{{ url()->previous() }}" class="btn btn-danger">Cancel</a>
    </form>
@endsection