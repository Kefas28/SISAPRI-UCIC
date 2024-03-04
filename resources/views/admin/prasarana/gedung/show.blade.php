@extends('admin.layouts.main')

@section('content-admin')
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-12 col-xl-6">
                <div class="bg-light rounded h-100 p-4">
                    <h6 class="mb-4">Detail Gedung</h6>
                    <p>Nama Gedung: {{ $gedung->nama_gedung }}</p>
                    <p>Lokasi: {{ $gedung->lokasi }}</p>
                    <p>Jumlah Lantai: {{ $gedung->lantai }}</p>
                    <img src="{{ asset($gedung->gambar) }}" alt="Gambar Gedung">
                </div>
            </div>
        </div>
    </div>
@endsection
