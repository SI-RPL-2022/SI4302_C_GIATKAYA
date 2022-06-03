@extends('layouts.dashboard')
@section('title','Ganti Password')
@section('content')
    <div>
        <h2 class="text-center">Ganti Password Pengguna GiatKaya</h2>
    </div>
    <br/>
    <div class="placeholder" align="center">
        <img src="{{asset('image/'.$data->foto_profil)}}" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">  
    </div>
<form method="post" action="{{ url('aksesdata/update-password/'.$data->id) }}" class="form-horizontal">
    @csrf
    <div class="panel panel-info" style="margin-top: 30px;">
        <div class="panel-heading" align="center" ><strong>Change Password GiatKaya<strong></div>
            <div class="panel-body">
                <div class="form-group">
                    <label for="last_name" class="col-xs-4 control-label">Password Baru</label>
                    <div class="col-xs-5">
                        <input type="password" class="form-control" name="password">
                    </div>
                </div>
                <div class="form-group">
                    <label for="last_name" class="col-xs-4 control-label">Konfirmasi Password</label>
                    <div class="col-xs-5">
                        <input type="password" class="form-control" name="password_confirmation">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-xs-offset-4 col-xs-5">
                        <button type="submit" class="btn btn-info">Ubah</button>
                        <a href="{{ url()->previous() }}" class="btn btn-danger">Cancel</a>
                    </div>
                </div>
            </div>
    </div>
    
</form>
    <!-- <form method="post" action="{{ url('aksesdata/update-password/'.$data->id) }}">
        @csrf
        <div class="form-group">
            <label for="first_name">Password Lama</label>
            <input type="password" class="form-control" name="password_lama">
        
            <label for="first_name">Password Baru</label>
            <input type="password" class="form-control" name="password">
        
            <label for="first_name">Konfirmasi Password</label>
            <input type="password" class="form-control" name="password_confirmation">
        </div>
        <button type="submit" class="btn btn-info">Ubah</button>
        <a href="{{ url()->previous() }}" class="btn btn-danger">Cancel</a>
    </form>     -->
@endsection