@extends('admin.layouts.main')

@section('content-admin')
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-12 col-xl-6">
                <div class="bg-light rounded h-100 p-4">
                    <h6 class="mb-4">Detail Peminjaman</h6>
                    <div>
                        <p><strong>Role:</strong> {{ $peminjaman->role }}</p>
                        <p><strong>Nama Jenis Kegiatan:</strong> {{ $peminjaman->nama_jenis_kegiatan }}</p>
                        <p><strong>Tanggal Kegiatan:</strong> {{ $peminjaman->tanggal_kegiatan }}</p>
                        <p><strong>Waktu Kegiatan:</strong> {{ $peminjaman->waktu_kegiatan }}</p>
                        <p><strong>Jumlah Peserta:</strong> {{ $peminjaman->jumlah_peserta }}</p>
                        <p><strong>Ruang:</strong> {{ $peminjaman->ruang_keterangan }}</p>
                        <p><strong>Hari Peminjaman:</strong> {{ $peminjaman->hari_peminjaman }}</p>
                        <p><strong>Ruang:</strong> {{ $peminjaman->ruangan }}</p>
                        <p><strong>Status:</strong> {{ $peminjaman->status }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
