@extends('layouts.dashboard')
@section('title','Training Skill')
@section('content')
<div>
    <h2 class="text-center">Training Skill</h2>
</div>

@if ($datas->metode_training == 'Video Materi')
    <div style="padding-left: 20rem; padding-right: 20rem;">
        <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/yMe5NJxgvpg"></iframe>
        </div>
    </div>

    <div class="flex-container" style="margin-bottom: 2rem; justify-content: space-between;">
        {{-- <div style="width: 60rem;">Tes</div> --}}
        <div style="background-color: #11CDEF; padding: 1.5rem; width: 70rem; margin-left: auto; margin-right: auto">
            
            <h3 style="margin: 0; margin-bottom: 1rem;">{{ $datas->name_training }}</h3>
            <p>{{ $datas->detail_pelatihan }}</p>
            <div class="flex-container">
                <div style="width: 30rem;">
                    <p>Tipe : {{ $datas->metode_training }}</p>
                    <p>Trainer : {{ $datas->trainer }}</p>
                    <p>Kategori : {{ $datas->jenis_training }}</p>
                </div>
                <div style="width: 30rem;">
                    <p>Duration :</p>
                    <p>Release Date :</p>
                    <p>Quality :</p>
                </div>
            </div>
        </div>
    </div>
@else
    <div class="flex-container" style="margin-bottom: 2rem; justify-content: space-between;">
        <div style="padding: 1.5rem;">
            
            <h3 style="margin: 0; margin-bottom: 1rem;"><b>{{ $datas->name_training }}</b></h3>
            <p>{{ $datas->created_at }}&nbsp;&nbsp;<span><b>Author: {{ $datas->trainer }}</b></span></p>
            <div class="flex-container">
                <div style="width: 75rem;">
                    <img src="https://prod-discovery.edx-cdn.org/media/course/image/0e575a39-da1e-4e33-bb3b-e96cc6ffc58e-8372a9a276c1.png" style="width: 75rem;margin-bottom: 1rem;" alt="">
                    <div style="background-color: #11CDEF; padding: 1.5rem; ">
                        <p>{{ $datas->detail_pelatihan }}</p>
                    </div>
                </div>
                <div style="width: 40rem;">
                    <div style="background-color: #11CDEF; padding: 1.5rem;margin-bottom: 1rem;">
                        <h5><b>Rekomendasi Pelatihan</b></h5>
                        @foreach ($datas_other as $key=>$value)
                            <a class="flex-container" style="text-decoration: none" href="/masyarakat/training/{{ $value->id }}">
                                <div style="width: 15rem;">
                                    <img src="https://prod-discovery.edx-cdn.org/media/course/image/0e575a39-da1e-4e33-bb3b-e96cc6ffc58e-8372a9a276c1.png" style="width: 15rem;margin-bottom: 1rem;" alt="">
                                </div>
                                <div style="width: 20rem;">
                                    <p style="margin: 0; padding:0;"><b>{{ $value->name_training }}</b></p>
                                    <span class="label label-info">{{ $value->metode_training }}</span>
                                    <p style="margin: 0; padding:0;"><b>Trainer : </b>{{ $value->trainer }}</p>
                                    <p style="margin: 0; padding:0;"><b>Kategori : </b>{{ $value->jenis_training }}</p>
                                </div>
                            </a>
                        @endforeach
                    </div>
                    <div class="flex-container" style="background-color: #11CDEF; padding: 1.5rem;margin-bottom: 1rem;">
                        <div style="width: 15rem;">
                            <img src="https://prod-discovery.edx-cdn.org/media/course/image/0e575a39-da1e-4e33-bb3b-e96cc6ffc58e-8372a9a276c1.png" style="width: 15rem;margin-bottom: 1rem;" alt="">
                        </div>
                        <div style="width: 20rem;">
                            <p style="margin: 0; padding:0;"><b>Tipe : </b>{{ $datas->metode_training }}</p>
                            <p style="margin: 0; padding:0;"><b>Trainer : </b>{{ $datas->trainer }}</p>
                            <p style="margin: 0; padding:0;"><b>Kategori : </b>{{ $datas->jenis_training }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif


{{-- <div style="background-color: #11CDEF; padding: 1.5rem;">
    <h3>Pelatihan lainnya</h3>
    <hr>
    <div>
        @foreach($datas_other as $key=>$value)
        <div style="width: 35rem; background-color: white; padding: 1.5rem; border-radius: 10px;">
            <p style="font-weight: bold">{{ $value->name_training }}</p>
            <span class="label label-info">{{ $value->metode_training }}</span>
            <p style="color: #31A8CD">Trainer : {{ $value->trainer}}</p>
            <p style="color: #31A8CD">Kategori : {{ $value->jenis_training }}</p>
            <a href="/masyarakat/training/{{ $value->id }}" class="btn btn-primary">Lihat</a>
        </div>
        @endforeach
    </div>
</div> --}}



{{-- <div style="background-color: #31A8CD; padding: 2.5rem; border-radius: 10px;">
    <h4 style="color: white">Kategori Pelatihan</h4>

    <div class="flex-container">
        @foreach($datas as $key=>$value)
        <div class="" style="background-color: white; width: 25rem; padding: 1.5rem; border-radius: 10px;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
                <span class="label label-info">{{ $value->metode_training }}</span>
                <p style="color: #31A8CD">{{ $value->jenis_training }}</p>
                <p style="font-weight: bold">{{ $value->name_training }}</p>
                <p style="color: #31A8CD">{{ $value->trainer}}</p>
                <a href="#" class="btn btn-primary">Ikut Pelatihan</a>
            </div>
        </div>
        @endforeach
    </div>
</div> --}}

<div>
<form action="{{ route('status') }}" method="POST">
    @csrf
    <input type="hidden" name="training_id" value='{{ $training_trsc->id }}'>
    <button type="submit" class="btn btn-success">Selesai Pelatihan</button></form>
</div>

<style>
    .flex-container {
      display: flex;
      flex-wrap: wrap;
    }
    
    .flex-container > div {
      margin-right: 10px;
      margin-top: 10px;
    }
</style>

@endsection