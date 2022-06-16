@extends('dashboard2')
@section('content')
<div class="col-12 main peminjaman-modal">
    <div class="row">
        <h1 class="page-header text-center border-bottom-unset">PEMINJAMAN MODAL</h1>
    </div>
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
                <p class="h2 text-center"><strong>Form Data Pinjaman Pengguna</strong></p>
                <div class="pm-inner-container-white">
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
                <hr>
                <form action="{{ route('masyarakat.loan.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-8">
                            <input type="hidden" name="amount" value="{{ old('amount', $request->amount) }}">
                            <input type="hidden" name="duration" value="{{ old('duration', $request->duration) }}">
                            <input type="hidden" name="instalment" value="{{ old('instalment', $instalment) }}">
                            <div class="form-group">
                                <table class="pm-table">
                                    <tr>
                                        <td>Jumlah Pinjaman</td>
                                        <td>: @rupiah(old('amount', $request->amount))</td>
                                    </tr>
                                    <tr>
                                        <td>Periode Pinjaman</td>
                                        <td>: {{ old('duration', $request->duration) }} Bulan</td>
                                    </tr>
                                    <tr>
                                        <td>Cicilan Perbulan</td>
                                        <td>: @rupiah(old('instalment', $instalment))</td>
                                    </tr>
                                </table>
                            </div>
                            <div class="form-group">
                                <label for="file_nik">Dokumen Kepemilikan NIK</label>
                                <input type="file" name="file_nik" id="file_nik" accept=".jpg,.png,.jpeg" class="form-control input-file" required>
                                @error('file_nik')
                                <span class="text text-white"><strong>{{ $message }}</strong></span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="file_profesi">Tidak termasuk kedalam PNS/ASN, TNI/POLRI, BUMN/BUMD</label>
                                <input type="file" name="file_profesi" id="file_profesi" accept=".jpg,.png,.jpeg" class="form-control input-file" required>
                                @error('file_profesi')
                                <span class="text text-white"><strong>{{ $message }}</strong></span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="file_pembiayaan">Tidak sedang menerima kredit/pembiayaan dari perbankan & KUR</label>
                                <input type="file" name="file_pembiayaan" id="file_pembiayaan" accept=".jpg,.png,.jpeg" class="form-control input-file" required>
                                @error('file_pembiayaan')
                                <span class="text text-white"><strong>{{ $message }}</strong></span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="file_foto_usaha">Foto Usaha</label>
                                <input type="file" name="file_foto_usaha" id="file_foto_usaha" accept=".jpg,.png,.jpeg" class="form-control input-file" required>
                                @error('file_foto_usaha')
                                <span class="text text-white"><strong>{{ $message }}</strong></span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="file_skt">Surat Kepemilikan Tanah</label>
                                <input type="file" name="file_skt" id="file_skt" accept=".jpg,.png,.jpeg" class="form-control input-file" required>
                                @error('file_skt')
                                <span class="text text-white"><strong>{{ $message }}</strong></span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="file_sku">Surat Keterangan Usaha (SKU)</label>
                                <input type="file" name="file_sku" id="file_sku" accept=".jpg,.png,.jpeg" class="form-control input-file" required>
                                @error('file_sku')
                                <span class="text text-white"><strong>{{ $message }}</strong></span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary" type="submit">Submit</button>
                                <a class="btn btn-danger" href="{{ route('masyarakat.loan.index') }}" type="submit">Cancel</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
