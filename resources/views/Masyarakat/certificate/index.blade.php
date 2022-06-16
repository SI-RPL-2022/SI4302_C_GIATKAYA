@extends('layouts.dashboard')

@section('content')
        <h1 class="page-header text-center border-bottom-unset">CERTIFICATION</h1>
    </div>
    <div class="row">
        <div class="col-lg-2"></div>
        <div class="col-lg-8">
            <form action="{{ route('masyarakat.certificate.search') }}" method="get">
                @csrf
                <div class="input-group rounded-input">
                    <div class="input-group-btn">
                        <button type="submit" class="btn btn-default" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-search"></i></button>
                    </div>
                    <input name="keyword" type="text" class="form-control" aria-label="..." placeholder="Cari Pelatihan Disini!" value="{{ $keyword }}">
                </div>
            </form>
            <h3 class="fw-bolder mb-3">Sertifikat Anda</h3>
            <div class="row mb-3">
                @forelse ($certificates as $certificate)
                    <div class="col-lg-4 mb-3">
                        <div class="panel panel-default cert-panel">
                            <div class="panel-heading">
                                <canvas id="pdf-{{ $certificate->id }}" class="pdf w-100 h-auto"></canvas>
                            </div>
                            <div class="panel-body">
                                <p class="cert-title"></p>
                                <p class="cert-subtitle"></p>
                                <p class="cert-description"></p>
                            </div>
                            <div class="panel-footer text-center">
                                <a href="{{ route('masyarakat.certificate.download', $certificate->id) }}" class="button btn btn-primary cert-button">Download</a>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="alert alert-info" role="alert">Belum Ada Sertifikat</div>
                @endforelse
            </div>
            <div class="row text-center">
                {{ $certificates->links() }}
            </div>
        </div>
        <div class="col-lg-2"></div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.0.943/pdf.min.js"></script>
@foreach ($certificates as $certificate)
<script>
    var myState{{ $certificate->id }} = {
        pdf: null,
        currentPage: 1,
        zoom: 1
    }
    
    pdfjsLib.getDocument("{{ asset($certificate->file) }}").then((pdf) => {

        myState{{ $certificate->id }}.pdf = pdf;
        render{{ $certificate->id }}();

    });

    function render{{ $certificate->id }}() {
        myState{{ $certificate->id }}.pdf.getPage(myState{{ $certificate->id }}.currentPage).then((page) => {
        
            var canvas{{ $certificate->id }} = document.getElementById("pdf-{{ $certificate->id }}");
            var ctx{{ $certificate->id }} = canvas{{ $certificate->id }}.getContext('2d');
    
            var viewport{{ $certificate->id }} = page.getViewport(myState{{ $certificate->id }}.zoom);

            canvas{{ $certificate->id }}.width = viewport{{ $certificate->id }}.width;
            canvas{{ $certificate->id }}.height = viewport{{ $certificate->id }}.height;
        
            page.render({
                canvasContext: ctx{{ $certificate->id }},
                viewport: viewport{{ $certificate->id }}
            });
        });
    }
</script>
@endforeach
@endsection
