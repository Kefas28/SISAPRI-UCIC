@extends('admin.layouts.main')

@section('content-admin')
    <div class="container-fluid pt-4 px-4">
        <div class="row">
            <div class="col">
                <div class="bg-light rounded h-100 p-4">
                    <h5 class="mb-4">Detail Kampus</h5>
                    <p><strong>Lokasi:</strong> {{ $kampus->lokasi }}</p>
                    <p><strong>Alamat:</strong> {{ $kampus->alamat }}</p>
                    <p><strong>Luas Tanah:</strong> {{ $kampus->luas_tanah }}</p>
                    <p><strong>Gambar:</strong></p>
                    <img src="{{ asset($kampus->gambar) }}" alt="Gambar Kampus" style="max-width: 300px;">
                </div>
            </div>
        </div>
    </div>
@endsection
