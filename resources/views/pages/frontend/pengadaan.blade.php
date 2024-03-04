@extends('layouts.frontend.pengadaan.pengadaan')

@section('title', 'Collegetivity — Form Pengajuan')
@section('content')

    <!-- Home -->

    <div class="home">
        <div class="home_background_container prlx_parent">
            <div class="home_background prlx" style="background-image:url({{ url('assets/images/news_background.jpg') }})">
            </div>
        </div>
        <div class="home_content">
            <h1>Pengadaan</h1>
        </div>
    </div>

    <!-- Procurement Request Form -->
    <div class="container mt-5">
        <div class="row">
            <!-- Procurement Request Form Column -->
            <div class="col-lg-8">
                <div class="procurement_request">
                    <h2 class="mb-4">Form Pengajuan Pengadaan</h2>
                    <form action="{{ url('/submit_procurement_request') }}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama Mahasiswa:</label>
                            <input type="text" id="nama" name="nama" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label for="barang" class="form-label">Barang yang Diajukan:</label>
                            <input type="text" id="barang" name="barang" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label for="jumlah" class="form-label">Jumlah:</label>
                            <input type="number" id="jumlah" name="jumlah" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label for="keterangan" class="form-label">Keterangan:</label>
                            <textarea id="keterangan" name="keterangan" class="form-control" rows="3" required></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary">Ajukan Pengadaan</button>
                    </form>

                    {{-- <!-- Notification for Procurement Request Submission -->
                    <div class="alert alert-success mt-3" role="alert">
                        Pengajuan pengadaan berhasil disubmit! Terima kasih.
                    </div> --}}

                    <!-- Notification for Admin Review -->
                    <div class="alert alert-info mt-3" role="alert">
                        Pengajuan menunggu review dari admin.
                    </div>
                    <br>
                </div>
            </div>

            <!-- Additional Information Column -->
            <div class="col-lg-4 mt-4">
                <div class="additional_info">
                    <h4 class="mb-3">Info Tambahan</h4>
                    <p>
                        Silahkan isi formulir pengajuan pengadaan dengan lengkap dan benar. Pastikan deskripsi
                        barang dan jumlahnya jelas.
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
