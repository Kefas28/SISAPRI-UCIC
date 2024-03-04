@extends('admin.layouts.main')

@section('content-admin')
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-12 col-xl-6">
                <div class="bg-light rounded h-100 p-4">
                    <h6 class="mb-4">Detail Konten Prasarana</h6>
                    <div>
                        <p><strong>Judul:</strong> {{ $kontenPrasarana->judul }}</p>
                        <p><strong>Deskripsi:</strong> {{ $kontenPrasarana->deskripsi }}</p>
                        <p><strong>Gambar:</strong> <img src="{{ asset($kontenPrasarana->gambar) }}"
                                alt="{{ $kontenPrasarana->judul }}" width="100"></p>
                        <p><strong>Keterangan:</strong> {{ $kontenPrasarana->keterangan }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
