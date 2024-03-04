@extends('admin.layouts.main')

@section('content-admin')
    <div class="container-fluid pt-4 px-4">
        <div class="row">
            <div class="col">
                <div class="bg-light rounded h-100 p-4">
                    <h5 class="mb-4">Tambah Data Peminjaman</h5>

                    <form method="POST" action="{{ route('ruangan.store') }}">
                        @csrf

                        <div class="mb-3">
                            <label for="role" class="col-md-4 col-form-label text-md-right">Role</label>
                            <div class="col-md-6">
                                <select id="role" class="form-control" name="role">
                                    <option value="Mahasiswa">Mahasiswa</option>
                                    <option value="Dosen">Dosen</option>
                                    <option value="Staf">Staf</option>
                                </select>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="nama_jenis_kegiatan" class="col-md-4 col-form-label text-md-right">Nama Jenis
                                Kegiatan</label>
                            <div class="col-md-6">
                                <input id="nama_jenis_kegiatan" type="text" class="form-control"
                                    name="nama_jenis_kegiatan" required autofocus>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="tanggal_kegiatan" class="col-md-4 col-form-label text-md-right">Tanggal
                                Kegiatan</label>
                            <div class="col-md-6">
                                <input id="tanggal_kegiatan" type="date" class="form-control" name="tanggal_kegiatan"
                                    required>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="waktu_kegiatan" class="col-md-4 col-form-label text-md-right">Waktu Kegiatan</label>
                            <div class="col-md-6">
                                <select id="waktu_kegiatan" class="form-control" name="waktu_kegiatan" required>
                                    <option value="08:00">08:00 - 10:00 (2 Jam)</option>
                                    <option value="10:00">10:00 - 12:00 (2 Jam)</option>
                                    <option value="12:00">12:00 - 14:00 (2 Jam)</option>
                                    <option value="14:00">14:00 - 16:00 (2 Jam)</option>
                                    <option value="16:00">16:00 - 18:00 (2 Jam)</option>
                                </select>
                            </div>
                        </div>



                        <div class="mb-3">
                            <label for="jumlah_peserta" class="col-md-4 col-form-label text-md-right">Jumlah
                                Peserta</label>
                            <div class="col-md-6">
                                <input id="jumlah_peserta" type="number" class="form-control" name="jumlah_peserta"
                                    required>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="ruang_keterangan" class="col-md-4 col-form-label text-md-right">Keterangan</label>
                            <div class="col-md-6">
                                <textarea id="ruang_keterangan" class="form-control" name="ruang_keterangan" required></textarea>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="hari_peminjaman" class="col-md-4 col-form-label text-md-right">Hari
                                Peminjaman</label>
                            <div class="col-md-6">
                                <select id="hari_peminjaman" class="form-control" name="hari_peminjaman" required>
                                    <option value="Senin">
                                        Senin</option>
                                    <option value="Selasa">
                                        Selasa</option>
                                    <option value="Rabu">
                                        Rabu</option>
                                    <option value="Kamis">
                                        Kamis</option>
                                    <option value="Jumat">
                                        Jumat</option>
                                    <option value="Sabtu">
                                        Sabtu</option>
                                </select>
                            </div>
                        </div>


                        <div class="mb-3">
                            <label for="ruangan" class="col-md-4 col-form-label text-md-right">Ruang</label>
                            <div class="col-md-6">
                                <input id="ruangan" type="text" class="form-control" name="ruangan" required>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="status" class="col-md-4 col-form-label text-md-right">Status</label>
                            <div class="col-md-6">
                                <select id="status" class="form-control" name="status">
                                    <option value="Menunggu">Menunggu</option>
                                    <option value="Disetujui">Disetujui</option>
                                    <option value="Ditolak">Ditolak</option>
                                </select>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary">Simpan</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
