<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
    <style>
        @import url("https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css");
    </style>

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>

</head>

<body class="d-flex flex-column h-100">
    <div id="app">
        <nav class="navbar fixed-top navbar-expand-lg navbar-light shadow-sm" style="background-color: #e3f2fd;">
            <div class="container">
                <a class="navbar-brand fw-bold" href="#">GiatKaya!</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
                    aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarText">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Pinjaman Modal</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Lapangan Kerja</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Training Skill</a>
                        </li>
                    </ul>
                    <span class="navbar-text">
                        @guest
                        @if (Route::has('login'))
                        <a href="{{ route('login') }}" class="btn btn-info fw-bold" style="color: #ffff;">Login</a>
                        @endif

                        @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="btn btn-info fw-bold"
                            style="color: #ffff;">Register</a>
                        @endif
                        @else
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                  document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                        @endguest

                    </span>
                </div>
            </div>
        </nav>

        <main class="flex-shrink-0" style="margin-top: 4rem;">
            <div style="background-image: url('assets/image1.png');">
                <div class="container">
                    <div class="py-5 mt-5 col-6">
                        <h3 class="fw-bold">Apa itu GiatKaya?</h4>
                        <h5>GiatKaya merupakan platform media digital yang ditujukan untuk pengembangan ekonomi di Indonesia berdasarkan 17 SDGs yang dikembangkan oleh PBB. Dengan bergabung dengan kami, anda dapat memperoleh beragam informasi tentang lowongan pekerjaan yang tersedia di sekitar anda.</h5>
                        <a class="btn btn-info text-white" href="#" role="button">Daftar Sekarang</a>
                    </div>
                </div>
            </div>
            <div class="bg-info">
                <div class="container">
                    <div class="py-4">
                        <h4 class="fw-bold">Benefit Bergabung dengan GiatKaya</h4>
                        <div class="row g-2">
                            <div class="col-4">
                                <div class="p-3 text-center">
                                    <img class="mb-2" src="{{ asset('assets/Idea Sharing.png') }}" alt="">
                                    <p>Terverifikasi sebagai masyarakat pekerja Indonesia</p>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="p-3 text-center">
                                    <img class="mb-2"src="{{ asset('assets/Certificate.png') }}" alt="">
                                    <p>Mendapat sertifikat pelatihan kerja dari Pemerintah</p>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="p-3 text-center">
                                    <img class="mb-2" src="{{ asset('assets/Handshake.png') }}" alt="">
                                    <p>Peluang mendapatkan pekerjaan menjadi sangat besar</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div style="background-image: url('assets/image2.png');">
                <div class="container">
                    <div class="py-5">
                        <h3 class="mb-4 fw-bold text-center">Training Skill</h3>
                        <div class="col-6">
                            <h1 class="fw-bold text-info">GiatBelajar!</h1>
                            <h4 class="fw-bold ">Yuk Tingkatkan Skillmu!</h4>
                            <h5>Jaman sekarang sudah tidak jaman kamu cari perusahaan, tapi sekarang 
                                jamannya perusahaan cari kamu! Kalo tidak sekarang, kapan lagi? Yuk kembangkan diri kamu agar menjadi generasi yang unggul dan berkompeten. Ikuti pelatihan di GiatBelajar! dan dapatkan manfaatnya.</h5>
                            <a class="btn btn-info text-white" href="#" role="button">Daftar Pelatihan</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-info">
                <div class="container">
                    <div class="py-4">
                        <h3 class="fw-bold">Kategori Pelatihan</h3>
                        <div class="row g-4">
                            @foreach($datas as $key=>$value)
                            <div class="col-3">
                                <div class="card">
                                    <img src="..." class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <span class="badge bg-info text-white">{{ $value->metode_training }}</span>
                                        <h6 class="card-subtitle mt-1 mb-1 text-info">{{ $value->jenis_training }}</h6>
                                        <h5 class="card-title fw-bold">{{ $value->name_training }}</h5>
                                        <p class="card-text text-info">{{ $value->trainer }}</p>
                                        <a href="#" class="btn btn-info text-white">Ikut Pelatihan</a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div style="background-image: url('assets/image3.png');">
                <div class="container">
                    <div class="py-5">
                        <div class="col-6">
                            <h1 class="fw-bold text-info">Ayo Kerja!</h1>
                            <h5>Lowongan pekerjaan dapat memudahkan para masyarakat pengangguran ataupun UMKM yang mengalami kebangkrutan dalam mencari suatu pekerjaan yang layak bagi mereka.</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="">
                <div class="container">
                    <div class="py-4">
                        <h3 class="fw-bold text-center">Lowongan Pekerjaan</h3>
                        <div class="row g-4">

                        </div>
                    </div>
                </div>
            </div>
            <div style="background-image: url('assets/image4.png');">
                <div class="container">
                    <div class="py-5">
                        <h3 class="mb-5 fw-bold text-center">Pinjaman Modal atau Dana</h3>
                        <div class="col-6 mx-auto text-center">
                            <h4 class="mb-3">Peminjaman Modal Untuk Memulai Usaha, dan UMKM yang terkena dampak Covid-19 atau sedang mengalami penurunan ekonomi</h4>
                            <a class="btn btn-info text-white" href="#" role="button">MULAI AJUKAN PINJAMAN</a>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        {{-- <x-footer /> --}}
    </div>
</body>

</html>