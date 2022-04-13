@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-sm-5 mt-5">
      <span class="fw-bold" style="margin-left:60px;">Selamat Datang di</span> <span class="fw-bold" style="color: #149BFC;">GiatKaya!</span>
      <img src="{{ asset('image/kantornew.png') }}" alt="">
    </div>
    <div class="col-sm-7 shadow p-3 mb-5 bg-body" style="border :2px solid #11CDEF; height:450px; border-radius: 15px; margin-top: 120px;">
      <div class="row" style="margin-left: 100px;">
        <h4 style="margin-top: 85px;">Login sebagai rakyat GiatKaya!</h4>
        <p><small class="text-muted">Belum memiliki akun GiatKaya? <span class="fw-bold" style="color: #149BFC;"> <a href="{{('/register')}}">Daftar di sini! </a></span></small></p>
        <div class="col-12 col-md-12 col-lg-7">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-floating mb-3">
                    <input type="text" style="border-bottom:2px solid #11CDEF" name="email" class="form-control form-control-sm border-top-0 border-end-0 border-start-0" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Email address</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="password" style="border-bottom:2px solid #11CDEF" name="password" class="form-control form-control-sm border-top-0 border-end-0 border-start-0" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">Password</label>
                </div>
                <button type="submit" class="btn btn-info">Masuk</button>
            </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> -->
