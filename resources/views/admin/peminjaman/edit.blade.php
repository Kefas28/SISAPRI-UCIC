@extends('admin.layouts.main')

@section('content-admin')
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Edit Peminjaman</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('ruangan.update', $peminjaman->id_peminjaman) }}">
                            @csrf
                            @method('PUT')

                            <div class="mb-3 row">
                                <label for="role" class="col-md-4 col-form-label text-md-end">Role</label>
                                <div class="col-md-6">
                                    <select id="role" class="form-control" name="role">
                                        <option value="Mahasiswa" {{ $peminjaman->role == 'Mahasiswa' ? 'selected' : '' }}>
                                            Mahasiswa</option>
                                        <option value="Dosen" {{ $peminjaman->role == 'Dosen' ? 'selected' : '' }}>Dosen
                                        </option>
                                        <option value="Staf" {{ $peminjaman->role == 'Staf' ? 'selected' : '' }}>Staf
                                        </option>
                                    </select>
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="nama_jenis_kegiatan" class="col-md-4 col-form-label text-md-end">Nama Jenis
                                    Kegiatan</label>
                                <div class="col-md-6">
                                    <input id="nama_jenis_kegiatan" type="text" class="form-control"
                                        name="nama_jenis_kegiatan" value="{{ $peminjaman->nama_jenis_kegiatan }}" required
                                        autofocus>
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="tanggal_kegiatan" class="col-md-4 col-form-label text-md-end">Tanggal
                                    Kegiatan</label>
                                <div class="col-md-6">
                                    <input id="tanggal_kegiatan" type="date" class="form-control" name="tanggal_kegiatan"
                                        value="{{ $peminjaman->tanggal_kegiatan }}" required>
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="waktu_kegiatan" class="col-md-4 col-form-label text-md-end">Waktu
                                    Kegiatan</label>
                                <div class="col-md-6">
                                    <input id="waktu_kegiatan" type="time" class="form-control" name="waktu_kegiatan"
                                        value="{{ $peminjaman->waktu_kegiatan }}" required>
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="jumlah_peserta" class="col-md-4 col-form-label text-md-end">Jumlah
                                    Peserta</label>
                                <div class="col-md-6">
                                    <input id="jumlah_peserta" type="number" class="form-control" name="jumlah_peserta"
                                        value="{{ $peminjaman->jumlah_peserta }}" required>
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="ruang_keterangan" class="col-md-4 col-form-label text-md-end">Ruang</label>
                                <div class="col-md-6">
                                    <textarea id="ruang_keterangan" class="form-control" name="ruang_keterangan" required>{{ $peminjaman->ruang_keterangan }}</textarea>
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="hari_peminjaman" class="col-md-4 col-form-label text-md-end">Hari
                                    Peminjaman</label>
                                <div class="col-md-6">
                                    <select id="hari_peminjaman" class="form-control" name="hari_peminjaman" required>
                                        <option value="Senin"
                                            {{ $peminjaman->hari_peminjaman == 'Senin' ? 'selected' : '' }}>Senin</option>
                                        <option value="Selasa"
                                            {{ $peminjaman->hari_peminjaman == 'Selasa' ? 'selected' : '' }}>Selasa
                                        </option>
                                        <option value="Rabu"
                                            {{ $peminjaman->hari_peminjaman == 'Rabu' ? 'selected' : '' }}>Rabu</option>
                                        <option value="Kamis"
                                            {{ $peminjaman->hari_peminjaman == 'Kamis' ? 'selected' : '' }}>Kamis</option>
                                        <option value="Jumat"
                                            {{ $peminjaman->hari_peminjaman == 'Jumat' ? 'selected' : '' }}>Jumat</option>
                                        <option value="Sabtu"
                                            {{ $peminjaman->hari_peminjaman == 'Sabtu' ? 'selected' : '' }}>Sabtu</option>
                                    </select>
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="ruangan" class="col-md-4 col-form-label text-md-end">Ruangan</label>
                                <div class="col-md-6">
                                    <input id="ruangan" type="text" class="form-control" name="ruangan"
                                        value="{{ $peminjaman->ruangan }}" required>
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="status" class="col-md-4 col-form-label text-md-end">Status</label>
                                <div class="col-md-6">
                                    <select id="status" class="form-control" name="status">
                                        <option value="Menunggu" {{ $peminjaman->status == 'Menunggu' ? 'selected' : '' }}>
                                            Menunggu</option>
                                        <option value="Disetujui"
                                            {{ $peminjaman->status == 'Disetujui' ? 'selected' : '' }}>Disetujui</option>
                                        <option value="Ditolak" {{ $peminjaman->status == 'Ditolak' ? 'selected' : '' }}>
                                            Ditolak</option>
                                    </select>
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
