@extends('layouts.frontend.sarana.sarana')

@section('title', 'Collegetivity — Aplikasi yang Membantu Dunia Perkuliahanmu!')
@section('content')

    <!-- Home -->

    <div class="home">
        <div class="home_background_container prlx_parent">
            <div class="home_background prlx" style="background-image:url({{ url('assets/images/news_background.jpg') }})">
            </div>
        </div>
        <div class="home_content">
            <h1>Sarana</h1>
        </div>
    </div>

    <!-- Popular -->

    <div class="popular page_section">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="section_title text-center">
                        <h1>Sarana Tersedia</h1>
                    </div>
                </div>
            </div>

            <br>

            <!-- Bootstrap Data Table -->
            @foreach ($konten_sarana as $sarana)
                <div class="card mb-4">
                    <div class="row g-0">
                        <div class="col-md-5">
                            <img src="{{ asset($sarana->gambar) }}" alt="" style="max-width: 100%;">
                        </div>
                        <div class="col-md-7">
                            <div class="card-body py-4">
                                <h4 class="card-title">{{ $sarana->judul }}</h4>
                                <p class="card-text fs-5">{{ $sarana->deskripsi }}</p>
                                <p class="card-text"><small class="text-muted">{{ $sarana->keterangan }}</small></p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
@endsection
