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
            <h1>Prasarana</h1>
        </div>
    </div>

    <!-- News -->

    <div class="news">
        <div class="container">
            <div class="row">

                <!-- News Column -->

                <div class="col-lg-12">

                    <div class="news_posts">
                        <!-- News Post -->
                        @if (isset($konten_prasarana) && count($konten_prasarana) > 0)
                            @foreach ($konten_prasarana as $konten)
                                <div class="news_post">
                                    <div class="news_post_image">
                                        <img src="{{ asset($konten->gambar) }}" alt="gambar">
                                    </div>
                                    <div class="news_post_top d-flex flex-column flex-sm-row">
                                        <div class="news_post_date_container">
                                            <div
                                                class="news_post_date d-flex flex-column align-items-center justify-content-center">
                                            </div>
                                        </div>
                                        <div class="news_post_title_container">
                                            <div class="news_post_title">
                                                <a href="#">{{ $konten->judul }}</a>
                                            </div>
                                            <div class="news_post_meta">
                                                <span class="news_post_author"><a
                                                        href="#">{{ $konten->keterangan }}</a></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="news_post_text">
                                        <p>{{ $konten->deskripsi }}</p>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <p>Belum ada konten prasarana yang tersedia.</p>
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
