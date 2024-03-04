@extends('layouts.frontend.profil.profil')

@section('title', 'Collegetivity — Aplikasi yang Membantu Dunia Perkuliahanmu!')
@section('content')


    <!-- Home -->

    <div class="home">
        <div class="home_background_container prlx_parent">
            <div class="home_background prlx" style="background-image:url({{ url('assets/images/news_background.jpg') }})">
            </div>
        </div>
        <div class="home_content">
            <h1>Tentang SISAPRI</h1>
        </div>
    </div>

    <!-- News -->

    <div class="news">
        <div class="container">
            <div class="row">

                <!-- News Post Column -->

                <div class="col-lg-8">

                    <div class="news_post_container">

                        <div class="news_post_title_container">
                            <div class="news_post_title">
                                <a href="news_post.html">Apa itu SISAPRI?</a>

                            </div>
                        </div>
                        <div class="news_post_text">
                            <p>Selamat datang di SISAPRI, Sistem Informasi Sarana dan Prasarana Terintegrasi Universitas
                                Catur Insan Cendekia! Kami dengan bangga memperkenalkan sistem ini untuk
                                mengelola keseluruhan sarana dan prasarana universitas dengan sebaik mungkin.

                                Dengan SISAPRI, Anda dapat mengelola inventaris, perawatan, dan pemeliharaan sarana dengan
                                mudah, dan memberikan informasi yang jelas terhadap aset universitas. Pengguna dapat
                                memanfaatkan sistem ini untuk melacak pemakaian ruangan, peralatan,
                                serta memberikan penilaian terhadap sarana dan prasarana yang ada.</p>
                        </div>

                        <div class="news_post_text">
                            <h2>Fitur SISAPRI</h2>
                            <ol class='ul_item'>
                                <li>
                                    <h3>Menyajikan Daftar Lengkap Sarana dan Prasarana</h3>
                                    <p>Daftar sarana dan prasarana dapat dilihat dari isi tabel dari menu sarana dan menu
                                        prasarana.</p>
                                </li>
                                <li>
                                    <h3>Peminjaman Ruangan</h3>
                                    <p>Memungkinkan pengguna untuk melakukan pemesanan ruangan secara online melalui sistem
                                        SISAPRI, dengan kemampuan untuk memilih waktu, dan durasi. Fitur ini juga
                                        menyediakan kalender yang terintegrasi untuk melihat ketersediaan ruangan secara
                                        real-time, membantu pengguna untuk memilih slot yang sesuai.</p>
                                </li>
                                <li>
                                    <h3>Pengadaan Sarana dan Prasarana</h3>
                                    <p>Fasilitas untuk mengajukan permintaan pengadaan secara online.</p>
                                </li>
                                <li>
                                    <h3>Kepuasan Pengguna</h3>
                                    <p>Sistem ini juga memiliki kuisioner kepuasan pengguna agar sarana dan prasarana yang
                                        tersedia sesuai dengan kebutuhan pengguna.</p>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
