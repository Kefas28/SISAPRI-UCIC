@extends('admin.layouts.main')

@section('content-admin')
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-12 col-xl-6">
                <div class="bg-light rounded h-100 p-4">
                    <h6 class="mb-4">Detail Ruang</h6>
                    <p>Nama Ruang: {{ $ruang->nama_ruang }}</p>
                    <p>Gedung: {{ $ruang->gedung }}</p>
                    <p>Lokasi: {{ $ruang->lokasi }}</p>
                    <p>Kapasitas: {{ $ruang->kapasitas }}</p>
                    <p>Jumlah Lantai: {{ $ruang->lantai }}</p>
                    <img src="{{ asset($ruang->gambar) }}" alt="Gambar Ruang">
                </div>
            </div>
        </div>
    </div>
@endsection
