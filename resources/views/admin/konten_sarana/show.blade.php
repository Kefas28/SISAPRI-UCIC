@extends('admin.layouts.main')

@section('content-admin')
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-12 col-xl-6">
                <div class="bg-light rounded h-100 p-4">
                    <h6 class="mb-4">Detail Konten Sarana</h6>
                    <div>
                        <p><strong>Judul:</strong> {{ $kontensarana->judul }}</p>
                        <p><strong>Deskripsi:</strong> {{ $kontensarana->deskripsi }}</p>
                        <p><strong>Gambar:</strong> <img src="{{ asset($kontensarana->gambar) }}"
                                alt="{{ $kontensarana->judul }}" width="100"></p>
                        <p><strong>Keterangan:</strong> {{ $kontensarana->keterangan }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
