@extends('layouts.frontend.aduan.aduan')

@section('title', 'Collegetivity — Form Kepuasan dan Pengaduan')
@section('content')

    <!-- Home -->
    <div class="home">
        <div class="home_background_container prlx_parent">
            <div class="home_background prlx" style="background-image:url({{ url('assets/images/news_background.jpg') }})">
            </div>
        </div>
        <div class="home_content">
            <h1>Aduan</h1>
        </div>
    </div>

    <!-- Satisfaction and Feedback Form -->
    <div class="container mt-5">
        <div class="row">
            <!-- Form Column -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <!-- Form untuk Ajukan Pengaduan -->
                    <div class="col-sm-12">
                        <div class="bg-light rounded p-4 mb-4">
                            <h6 class="mb-4">Ajukan Pengaduan</h6>
                            <p>Anda dapat mengajukan pengaduan hanya untuk tahun yang sama.</p>
                            <button type="button" class="btn btn-primary" onclick="openTambahPengaduanModal()">Ajukan
                                Pengaduan</button>
                        </div>
                    </div>
                    <!-- Tombol "Detail Pengaduan Tahun Sebelumnya" -->
                    <div class="col-sm-12">
                        <div class="bg-light rounded p-4 mt-4">
                            <h6 class="mb-4">Detail Pengaduan Tahun Sebelumnya</h6>
                            <button type="button" class="btn btn-primary" onclick="showDetailAduan('2023')">2023</button>
                            <br>
                            <br>
                            <button type="button" class="btn btn-primary" onclick="showDetailAduan('2022')">2022</button>
                            <br>
                            <br>
                            <button type="button" class="btn btn-primary" onclick="showDetailAduan('2021')">2021</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Detail Aduan Modal -->
    <div class="modal fade" id="detailAduanModal" tabindex="-1" aria-labelledby="detailAduanModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="detailAduanModalLabel">Detail Aduan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Gambar, Judul, dan Deskripsi Aduan -->
                    <img src="{{ url('path_to_image') }}" alt="Gambar Aduan" class="img-fluid mb-3">
                    <h6>Judul Aduan</h6>
                    <p>Deskripsi Aduan</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary">
                        <a href="{{ url('/aduan') }}" style="color: rgb(255, 255, 255); text-decoration: none;">Tutup</a>
                    </button>
                </div>

            </div>
        </div>
    </div>
    </div>

    <!-- Tambah Pengaduan Modal -->
    <div class="modal fade" id="tambahPengaduanModal" tabindex="-1" aria-labelledby="tambahPengaduanModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="tambahPengaduanModalLabel">Tambah Pengaduan Baru</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="/tambah-pengaduan" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="judul_pengaduan" class="form-label">Judul Pengaduan</label>
                            <input type="text" class="form-control" id="judul_pengaduan" name="judul_pengaduan" required>
                        </div>
                        <div class="mb-3">
                            <label for="deskripsi_pengaduan" class="form-label">Deskripsi Pengaduan</label>
                            <textarea class="form-control" id="deskripsi_pengaduan" name="deskripsi_pengaduan" rows="3" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Kirim Pengaduan</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary">
                        <a href="{{ url('/aduan') }}" style="color: white; text-decoration: none;">Tutup</a>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <script>
        function openDetailAduan() {
            // Logika untuk membuka modal pengisian detail aduan
        }

        function showDetailAduan(year) {
            // Logika untuk menampilkan detail aduan sesuai tahun yang dipilih
            $('#detailAduanModal').modal('show');
        }

        function openTambahPengaduanModal() {
            $('#tambahPengaduanModal').modal('show');
        }
    </script>

@endsection


{{-- <!-- Home -->

    <div class="home">
        <div class="home_background_container prlx_parent">
            <div class="home_background prlx" style="background-image:url({{ url('assets/images/news_background.jpg') }})">
            </div>
        </div>
        <div class="home_content">
            <h1>Aduan</h1>
        </div>
    </div>

    <!-- Satisfaction and Feedback Form -->
    <div class="container mt-5">
        <div class="row">
            <!-- Form Column -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <!-- Tombol "Ajukan Pengaduan" -->
                    <div class="col-sm-12">
                        <div class="bg-light rounded p-4 mb-4">
                            <h6 class="mb-4">Ajukan Pengaduan</h6>
                            <p>Anda dapat mengajukan pengaduan hanya untuk tahun yang sama.</p>
                            <button type="button" class="btn btn-primary">Ajukan Pengaduan</button>
                        </div>
                    </div>
                    <!-- Tombol "Detail Pengaduan Tahun Sebelumnya" -->
                    <div class="col-sm-12">
                        <div class="bg-light rounded p-4 mt-4">
                            <h6 class="mb-4">Detail Pengaduan Tahun Sebelumnya</h6>
                            <button type="button" class="btn btn-primary">2023</button>
                            <br>
                            <br>
                            <button type="button" class="btn btn-primary">2022</button>
                            <br>
                            <br>
                            <button type="button" class="btn btn-primary">2021</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
