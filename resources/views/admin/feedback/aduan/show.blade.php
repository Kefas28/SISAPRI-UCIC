@extends('admin.layouts.main')

@section('content-admin')
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-12 col-xl-6">
                <div class="bg-light rounded h-100 p-4">
                    <h6 class="mb-4">Detail Aduan</h6>
                    <div>
                        <p><strong>Nama Pengadu:</strong> {{ $aduan->nama_pengadu }}</p>
                        <p><strong>NIM:</strong> {{ $aduan->nim }}</p>
                        <p><strong>Prodi:</strong> {{ $aduan->prodi }}</p>
                        <p><strong>Lokasi:</strong> {{ $aduan->lokasi }}</p>
                        <p><strong>Keterangan Aduan:</strong> {{ $aduan->keterangan_aduan }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
