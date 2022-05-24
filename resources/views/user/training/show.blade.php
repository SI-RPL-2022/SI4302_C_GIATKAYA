@extends('layouts.dashboard')
@section('title','Training Skill')
@section('content')
<div>
    <h2 class="text-center">Training Skill</h2>
</div>

<div class="flex-container" style="margin-bottom: 2rem; justify-content: space-between;">
    <div style="width: 60rem;">Tes</div>
    <div style="background-color: #11CDEF; padding: 1.5rem; width: 60rem;">
        <h3 style="margin: 0; margin-bottom: 1rem;">{{ $datas->name_training }}</h3>
        <p>{{ $datas->detail_pelatihan }}</p>
        <p style="color: #f1f1f1">Tipe : {{ $datas->metode_training }}</p>
        <p style="color: #f1f1f1">Trainer : {{ $datas->trainer }}</p>
        <p style="color: #f1f1f1">Kategori : {{ $datas->jenis_training }}</p>
        <p>{{ $datas_transaction[0]->training_id }}</p>
        @if ($datas_transaction[0]->training_id == $datas->id)
            <a href="/masyarakat/training/{{ $datas->id }}/detail" class="btn btn-success">Lanjut Latihan</a>
        @else
            <a href="" class="btn btn-primary" data-toggle="modal" data-target="#training_transaction">Mulai Latihan</a>
            {{-- <a class="btn btn-info" data-toggle="modal" data-target="#largeShoes_{{ $user->id }}" href=""></a> --}}
            <div class="modal fade" id="training_transaction" tabindex="-1" role="dialog" aria-labelledby="modalLabelLarge" aria-hidden="true">
                <div class="modal-dialog modal-md">
                    <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <h4 class="modal-title" id="modalLabelLarge">Konfirmasi Ikut Pelatihan</h4>
                    </div>
                    <div class="modal-body">
                        <p>Apakah anda yakin ingin mengikuti pelatihan ini?</p>
                    </div>
                    <div class="modal-footer">
                        <form action="/masyarakat/training/{{ $datas->id }}/store" method="POST">
                            @csrf
                            <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                            <input type="hidden" name="training_id" value="{{ $datas->id }}">
                            <button type="submit" class="btn btn-primary">Mulai Latihan</button>
                        </form>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
                </div>
            </div>
        @endif

        {{-- <form action="/masyarakat/training/{{ $datas->id }}/store" method="POST">
            @csrf
            <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
            <input type="hidden" name="training_id" value="{{ $datas->id }}">
            <button type="submit" class="btn btn-primary">Mulai Latihan</button>
        </form> --}}
    </div>
</div>

<div style="background-color: #11CDEF; padding: 1.5rem;">
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
</div>

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