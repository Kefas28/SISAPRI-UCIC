@extends('layouts.frontend.kepuasan.kepuasan')

@section('title', 'Collegetivity — Form Kepuasan dan Pengaduan')
@section('content')

    <!-- Home -->

    <div class="home">
        <div class="home_background_container prlx_parent">
            <div class="home_background prlx" style="background-image:url({{ url('assets/images/news_background.jpg') }})">
            </div>
        </div>
        <div class="home_content">
            <h1>Kepuasan</h1>
        </div>
    </div>

    <!-- Satisfaction and Feedback Form -->
    <div class="container mt-5">
        <div class="row">
            <!-- Form Column -->
            <div class="col-lg-8">
                <div class="satisfaction_form">
                    <h2 class="mb-4">Form Kepuasan dan Pengaduan</h2>
                    <form action="{{ url('/submit_feedback') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama:</label>
                            <input type="text" id="nama" name="nama" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label for="feedback" class="form-label">Kepuasan dan Feedback:</label>
                            <textarea id="feedback" name="feedback" class="form-control" rows="3" required></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="foto" class="form-label">Upload Foto (jika ada):</label>
                            <input type="file" id="foto" name="foto" class="form-control">
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                        <br>
                        <br>
                        <br>
                    </form>
                </div>
            </div>

            <!-- Additional Information Column -->
            <div class="col-lg-4 mt-4">
                <div class="additional_info">
                    <h4 class="mb-3">Info Tambahan</h4>
                    <p>
                        Silakan berikan feedback dan kesan Anda terhadap pelayanan serta fasilitas kami. Jika ada
                        keluhan atau kerusakan sarana, sertakan juga foto sebagai bantuan.
                    </p>
                </div>
            </div>
        </div>
    </div>

@endsection
