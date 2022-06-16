@extends('dashboard2')

@section('content')
    <div class="col-12 main peminjaman-modal">
        <div class="row">
            <h1 class="page-header text-center border-bottom-unset"><strong>PEMINJAMAN MODAL</strong></h1>
        </div>
        @if (session('success'))
        <div class="row d-flex justify-content-center">
            <div class="col-lg-8">
                <div class="alert alert-success">{{ session('success') }}</div>
            </div>
        </div>
        @endif
        <div class="row d-flex justify-content-center">
            <div class="col-lg-8">
                <p class="pm-text-description">GiatKaya membantu menyediakan peminjaman modal atau dana kepada pelaku UMKM
                    dan masyarakat yang membutuhkan modal untuk usaha mereka. Program ini bertujuan untuk melindungi,
                    mempertahankan dan meningkatkan kemampuan ekonomi pekerja/buruh dalam penanganan dampak Corona Virus
                    Disease 2019 (Covid-19) dan juga membantu masyarakat yang kurang mampu.</p>
            </div>
        </div>
        <div class="row d-flex justify-content-center mt-2">
            <div class="col-lg-8">
                <div class="container-fluid pm-container-blue">
                    <div class="row">
                        <div class="col-lg-7">
                            <p class="h4"><strong>Persyaratan</strong></p>
                            <ul>
                                <li>Warga Negara Indonesia yang dibuktikan dengan kepemilikan NIK</li>
                                <li>Tidak termasuk kedalam PNS/ASN, TNI/POLRI, BUMN/BUMD</li>
                                <li>Tidak sedang menerima kredit/pembiayaan dari perbankan & KUR</li>
                                <li>Menyertakan bukti foto dari usaha</li>
                                <li>Memberikan bukti surat kepemilikan tanah atau bukti tempat sewa</li>
                                <li>Untuk pelaku usaha mikro yang memiliki KTP dan domisili usaha yang berbeda, bisa
                                    melampirkan Surat Keterangan Usaha (SKU)</li>
                            </ul>
                        </div>
                        <div class="col-lg-5">
                            <div class="pm-inner-container-white">
                                <p class="h4"><strong>Tentukan Dana Pinjaman Anda</strong></p>
                                <form action="{{ route('masyarakat.loan.create') }}" method="get" class="mt-3">
                                    @csrf
                                    <div class="form-group">
                                        <label for="amount">Jumlah Pinjaman</label>
                                        <select class="form-control" name="amount">
                                            <option value="1000000">RP. 1.000.000</option>
                                            <option value="2000000">RP. 2.000.000</option>
                                            <option value="3000000">RP. 3.000.000</option>
                                            <option value="4000000">RP. 4.000.000</option>
                                            <option value="5000000">RP. 5.000.000</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="duration">Periode Pinjaman</label>
                                        <select name="duration" id="" class="form-control">
                                            <option value="1">1 Bulan</option>
                                            <option value="2">2 Bulan</option>
                                            <option value="3">3 Bulan</option>
                                            <option value="6">6 Bulan</option>
                                            <option value="12">12 Bulan</option>
                                        </select>
                                    </div>
                                    <div class="form-group text-center">
                                        <button type="submit" class="btn btn-danger">AJUKAN PINJAMAN</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row d-flex justify-content-center mt-2">
            <div class="col-lg-8">
                <p class="h4"><strong>Hal yang sering ditanyakan</strong></p>
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingOne">
                            <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne"
                                    aria-expanded="true" aria-controls="collapseOne">
                                    <span class="more-less glyphicon glyphicon-chevron-down"></span>
                                    Apakah data pribadi saya aman di GiatKaya?
                                </a>
                            </h4>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                            <div class="panel-body">
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis, consequatur. Accusantium in adipisci earum laborum nihil vel assumenda facilis, nam quaerat? Similique necessitatibus earum reiciendis? Facere veniam accusamus praesentium facilis.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingTwo">
                            <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"
                                    aria-expanded="true" aria-controls="collapseTwo">
                                    <span class="more-less glyphicon glyphicon-chevron-down"></span>
                                    Bagaimana cara memaksimalkan peluang saya untuk mendapatkan pinjaman dana?
                                </a>
                            </h4>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                            <div class="panel-body">
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis, consequatur. Accusantium in adipisci earum laborum nihil vel assumenda facilis, nam quaerat? Similique necessitatibus earum reiciendis? Facere veniam accusamus praesentium facilis.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingThree">
                            <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree"
                                    aria-expanded="true" aria-controls="collapseThree">
                                    <span class="more-less glyphicon glyphicon-chevron-down"></span>
                                    Bagaimana cara memaksimalkan peluang saya untuk mendapatkan pinjaman dana?
                                </a>
                            </h4>
                        </div>
                        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                            <div class="panel-body">
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis, consequatur. Accusantium in adipisci earum laborum nihil vel assumenda facilis, nam quaerat? Similique necessitatibus earum reiciendis? Facere veniam accusamus praesentium facilis.
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
