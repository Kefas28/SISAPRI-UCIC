@extends('layouts.frontend.peminjaman.peminjaman')

@section('title', 'Collegetivity — Jadwal Perkuliahan')
@section('content')

    <!-- Home -->

    <div class="home">
        <div class="home_background_container prlx_parent">
            <div class="home_background prlx" style="background-image:url({{ url('assets/images/news_background.jpg') }})">
            </div>
        </div>
        <div class="home_content">
            <h1 class="text-white">Peminjaman</h1>
        </div>
    </div>

    <!-- Classroom Schedule and Reservation Form -->
    <div class="container mt-5">
        <div class="row">
            <!-- Form untuk Ajukan Pengaduan -->
            <div class="col-sm-12">
                <div class="bg-light rounded p-4 mb-4">
                    <h6 class="mb-4">Peminjaman</h6>
                    <p>Anda dapat mengajukan peminjaman apabila anda merupakan sivitas akademik Universitas Catur Insan
                        Cendekia.</p>
                    <button type="button" class="btn btn-primary" onclick="openTambahPeminjamanModal()">Ajukan
                        Peminjaman</button>
                </div>
            </div>
            <!-- Tambah Pengaduan Modal -->
            <div class="modal fade" id="tambahPeminjamanModal" tabindex="-1" aria-labelledby="tambahPeminjamanModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="tambahPeminjamanModalLabel">Tambah Peminjaman Baru</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="/tambah-pengaduan" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="judul_pengaduan" class="form-label">Judul Pengaduan</label>
                                    <input type="text" class="form-control" id="judul_pengaduan" name="judul_pengaduan"
                                        required>
                                </div>
                                <div class="mb-3">
                                    <label for="deskripsi_pengaduan" class="form-label">Deskripsi Pengaduan</label>
                                    <textarea class="form-control" id="deskripsi_pengaduan" name="deskripsi_pengaduan" rows="3" required></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Kirim Pengaduan</button>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                        </div>
                    </div>
                </div>
            </div>

            <script>
                function openTambahPeminjamanModal() {
                    $('#tambahPeminjamanModal').modal('show');
                }
            </script>
            <!-- Classroom Schedule Column -->
            <div class="col-lg-12">
                <div class="classroom_schedule">
                    <h2 class="mb-4">Senin</h2>
                    <div class="classroom_schedule_table">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Ruangan</th>
                                    <th>08:00 - 10:00</th>
                                    <th>10:00 - 12:00</th>
                                    <th>12:00 - 14:00</th>
                                    <th>14:00 - 16:00</th>
                                    <th>16:00 - 18:00</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>102</td>
                                    <td>
                                        <button class="btn btn-success">BKM</button>
                                    </td>
                                    <td>
                                        <button class="btn btn-danger">Kosong</button>
                                    </td>
                                    <td>
                                        <button class="btn btn-success">HIMASI</button>
                                    </td>
                                    <td>
                                        <button class="btn btn-danger">Kosong</button>
                                    </td>
                                    <td>
                                        <button class="btn btn-success">Mahasiswa</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>103</td>
                                    <td>
                                        <button class="btn btn-success">HIMABIS</button>
                                    </td>
                                    <td>
                                        <button class="btn btn-danger">Kosong</button>
                                    </td>
                                    <td>
                                        <button class="btn btn-success">HIMATIF</button>
                                    </td>
                                    <td>
                                        <button class="btn btn-success">BKM</button>
                                    </td>
                                    <td>
                                        <button class="btn btn-danger">Kosong</button>
                                    </td>
                                </tr>
                                <!-- Tambahkan lebih banyak baris sesuai kebutuhan -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Classroom Schedule and Reservation Form -->
            <div class="container mt-5">
                <div class="row">
                    <!-- Classroom Schedule Column -->
                    <div class="col-lg-12">
                        <div class="classroom_schedule">
                            <h2 class="mb-4">Selasa</h2>
                            <div class="classroom_schedule_table">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Ruangan</th>
                                            <th>08:00 - 10:00</th>
                                            <th>10:00 - 12:00</th>
                                            <th>12:00 - 14:00</th>
                                            <th>14:00 - 16:00</th>
                                            <th>16:00 - 18:00</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>102</td>
                                            <td>
                                                <button class="btn btn-success">HIMABIS</button>
                                            </td>
                                            <td>
                                                <button class="btn btn-danger">Kosong</button>
                                            </td>
                                            <td>
                                                <button class="btn btn-success">HIMATIF</button>
                                            </td>
                                            <td>
                                                <button class="btn btn-success">BKM</button>
                                            </td>
                                            <td>
                                                <button class="btn btn-danger">Kosong</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>103</td>
                                            <td>
                                                <button class="btn btn-success">HIMABIS</button>
                                            </td>
                                            <td>
                                                <button class="btn btn-danger">Kosong</button>
                                            </td>
                                            <td>
                                                <button class="btn btn-success">HIMATIF</button>
                                            </td>
                                            <td>
                                                <button class="btn btn-success">BKM</button>
                                            </td>
                                            <td>
                                                <button class="btn btn-danger">Kosong</button>
                                            </td>
                                        </tr>
                                        <!-- Tambahkan lebih banyak baris sesuai kebutuhan -->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- Classroom Schedule and Reservation Form -->
                    <div class="container mt-5">
                        <div class="row">
                            <!-- Classroom Schedule Column -->
                            <div class="col-lg-12">
                                <div class="classroom_schedule">
                                    <h2 class="mb-4">Rabu</h2>
                                    <div class="classroom_schedule_table">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Ruangan</th>
                                                    <th>08:00 - 10:00</th>
                                                    <th>10:00 - 12:00</th>
                                                    <th>12:00 - 14:00</th>
                                                    <th>14:00 - 16:00</th>
                                                    <th>16:00 - 18:00</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>102</td>
                                                    <td>
                                                        <button class="btn btn-success">HIMABIS</button>
                                                    </td>
                                                    <td>
                                                        <button class="btn btn-danger">Kosong</button>
                                                    </td>
                                                    <td>
                                                        <button class="btn btn-success">HIMATIF</button>
                                                    </td>
                                                    <td>
                                                        <button class="btn btn-success">BKM</button>
                                                    </td>
                                                    <td>
                                                        <button class="btn btn-danger">Kosong</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>103</td>
                                                    <td>
                                                        <button class="btn btn-success">HIMABIS</button>
                                                    </td>
                                                    <td>
                                                        <button class="btn btn-danger">Kosong</button>
                                                    </td>
                                                    <td>
                                                        <button class="btn btn-success">HIMATIF</button>
                                                    </td>
                                                    <td>
                                                        <button class="btn btn-success">BKM</button>
                                                    </td>
                                                    <td>
                                                        <button class="btn btn-danger">Kosong</button>
                                                    </td>
                                                </tr>
                                                <!-- Tambahkan lebih banyak baris sesuai kebutuhan -->
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- Classroom Schedule and Reservation Form -->
                            <div class="container mt-5">
                                <div class="row">
                                    <!-- Classroom Schedule Column -->
                                    <div class="col-lg-12">
                                        <div class="classroom_schedule">
                                            <h2 class="mb-4">Kamis</h2>
                                            <div class="classroom_schedule_table">
                                                <table class="table table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th>Ruangan</th>
                                                            <th>08:00 - 10:00</th>
                                                            <th>10:00 - 12:00</th>
                                                            <th>12:00 - 14:00</th>
                                                            <th>14:00 - 16:00</th>
                                                            <th>16:00 - 18:00</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>102</td>
                                                            <td>
                                                                <button class="btn btn-success">HIMABIS</button>
                                                            </td>
                                                            <td>
                                                                <button class="btn btn-danger">Kosong</button>
                                                            </td>
                                                            <td>
                                                                <button class="btn btn-success">HIMATIF</button>
                                                            </td>
                                                            <td>
                                                                <button class="btn btn-success">BKM</button>
                                                            </td>
                                                            <td>
                                                                <button class="btn btn-danger">Kosong</button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>103</td>
                                                            <td>
                                                                <button class="btn btn-success">HIMABIS</button>
                                                            </td>
                                                            <td>
                                                                <button class="btn btn-danger">Kosong</button>
                                                            </td>
                                                            <td>
                                                                <button class="btn btn-success">HIMATIF</button>
                                                            </td>
                                                            <td>
                                                                <button class="btn btn-success">BKM</button>
                                                            </td>
                                                            <td>
                                                                <button class="btn btn-danger">Kosong</button>
                                                            </td>
                                                        </tr>
                                                        <!-- Tambahkan lebih banyak baris sesuai kebutuhan -->
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Classroom Schedule and Reservation Form -->
                                    <div class="container mt-5">
                                        <div class="row">
                                            <!-- Classroom Schedule Column -->
                                            <div class="col-lg-12">
                                                <div class="classroom_schedule">
                                                    <h2 class="mb-4">Jumat</h2>
                                                    <div class="classroom_schedule_table">
                                                        <table class="table table-bordered">
                                                            <thead>
                                                                <tr>
                                                                    <th>Ruangan</th>
                                                                    <th>08:00 - 10:00</th>
                                                                    <th>10:00 - 12:00</th>
                                                                    <th>12:00 - 14:00</th>
                                                                    <th>14:00 - 16:00</th>
                                                                    <th>16:00 - 18:00</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>102</td>
                                                                    <td>
                                                                        <button class="btn btn-success">HIMABIS</button>
                                                                    </td>
                                                                    <td>
                                                                        <button class="btn btn-danger">Kosong</button>
                                                                    </td>
                                                                    <td>
                                                                        <button class="btn btn-success">HIMATIF</button>
                                                                    </td>
                                                                    <td>
                                                                        <button class="btn btn-success">BKM</button>
                                                                    </td>
                                                                    <td>
                                                                        <button class="btn btn-danger">Kosong</button>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>103</td>
                                                                    <td>
                                                                        <button class="btn btn-success">HIMABIS</button>
                                                                    </td>
                                                                    <td>
                                                                        <button class="btn btn-danger">Kosong</button>
                                                                    </td>
                                                                    <td>
                                                                        <button class="btn btn-success">HIMATIF</button>
                                                                    </td>
                                                                    <td>
                                                                        <button class="btn btn-success">BKM</button>
                                                                    </td>
                                                                    <td>
                                                                        <button class="btn btn-danger">Kosong</button>
                                                                    </td>
                                                                </tr>
                                                                <!-- Tambahkan lebih banyak baris sesuai kebutuhan -->
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Classroom Schedule and Reservation Form -->
                                            <div class="container mt-5">
                                                <div class="row">
                                                    <!-- Classroom Schedule Column -->
                                                    <div class="col-lg-12">
                                                        <div class="classroom_schedule">
                                                            <h2 class="mb-4">Sabtu</h2>
                                                            <div class="classroom_schedule_table">
                                                                <table class="table table-bordered">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>Ruangan</th>
                                                                            <th>08:00 - 10:00</th>
                                                                            <th>10:00 - 12:00</th>
                                                                            <th>12:00 - 14:00</th>
                                                                            <th>14:00 - 16:00</th>
                                                                            <th>16:00 - 18:00</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td>102</td>
                                                                            <td>
                                                                                <button
                                                                                    class="btn btn-success">HIMABIS</button>
                                                                            </td>
                                                                            <td>
                                                                                <button
                                                                                    class="btn btn-danger">Kosong</button>
                                                                            </td>
                                                                            <td>
                                                                                <button
                                                                                    class="btn btn-success">HIMATIF</button>
                                                                            </td>
                                                                            <td>
                                                                                <button
                                                                                    class="btn btn-success">BKM</button>
                                                                            </td>
                                                                            <td>
                                                                                <button
                                                                                    class="btn btn-danger">Kosong</button>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>103</td>
                                                                            <td>
                                                                                <button
                                                                                    class="btn btn-success">HIMABIS</button>
                                                                            </td>
                                                                            <td>
                                                                                <button
                                                                                    class="btn btn-danger">Kosong</button>
                                                                            </td>
                                                                            <td>
                                                                                <button
                                                                                    class="btn btn-success">HIMATIF</button>
                                                                            </td>
                                                                            <td>
                                                                                <button
                                                                                    class="btn btn-success">BKM</button>
                                                                            </td>
                                                                            <td>
                                                                                <button
                                                                                    class="btn btn-danger">Kosong</button>
                                                                            </td>
                                                                        </tr>
                                                                        <!-- Tambahkan lebih banyak baris sesuai kebutuhan -->
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>


                                                    {{-- <!-- Reservation Form Column -->
                                                    <div class="col-lg-4">
                                                        <div class="reservation_form">
                                                            <h2 class="mb-4">Form Peminjaman Ruangan</h2>
                                                            <form action="{{ url('/submit_reservation') }}"
                                                                method="post">
                                                                @csrf
                                                                <div class="mb-3">
                                                                    <label for="nama"
                                                                        class="form-label text-dark">Nama:</label>
                                                                    <input type="text" id="nama" name="nama"
                                                                        class="form-control" required>
                                                                </div>

                                                                <div class="mb-3">
                                                                    <label for="tanggal"
                                                                        class="form-label text-dark">Tanggal:</label>
                                                                    <input type="date" id="tanggal" name="tanggal"
                                                                        class="form-control" required>
                                                                </div>

                                                                <div class="mb-3">
                                                                    <label for="jam"
                                                                        class="form-label text-dark">Dari Jam:</label>
                                                                    <input type="time" id="jam" name="jam"
                                                                        class="form-control" required>
                                                                </div>

                                                                <div class="mb-3">
                                                                    <label for="jam"
                                                                        class="form-label text-dark">Sampai Jam:</label>
                                                                    <input type="time" id="jam" name="jam"
                                                                        class="form-control" required>
                                                                </div>

                                                                <div class="mb-3">
                                                                    <label for="kelas"
                                                                        class="form-label text-dark">Kelas:</label>
                                                                    <select id="kelas" name="kelas"
                                                                        class="form-select" required>
                                                                        <option value="A">Kelas A</option>
                                                                        <option value="B">Kelas B</option>
                                                                        <!-- Add more options as needed -->
                                                                    </select>
                                                                </div>

                                                                <button type="submit"
                                                                    class="btn btn-primary">Submit</button>
                                                            </form>

                                                            <!-- Notification for Admin Approval -->
                                                            <div class="alert alert-info mt-3 text-dark" role="alert">
                                                                Peminjaman menunggu persetujuan admin.
                                                            </div>
                                                        </div>
                                                    </div> --}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
