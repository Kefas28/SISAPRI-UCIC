@extends('admin.layouts.main')

@section('content-admin')
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-12 col-xl-6">
                <div class="bg-light rounded h-100 p-4">
                    <h6 class="mb-4">Edit Ruang</h6>
                    <form action="{{ route('ruang.update', $ruang->id_ruang) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="nama_ruang" class="form-label">Nama Ruang</label>
                            <input type="text" class="form-control" id="nama_ruang" name="nama_ruang"
                                value="{{ $ruang->nama_ruang }}">
                        </div>
                        <div class="mb-3">
                            <label for="gedung" class="form-label">Gedung</label>
                            <input type="text" class="form-control" id="gedung" name="gedung"
                                value="{{ $ruang->gedung }}">
                        </div>
                        <div class="mb-3">
                            <label for="lokasi" class="form-label">Lokasi</label>
                            <input type="text" class="form-control" id="lokasi" name="lokasi"
                                value="{{ $ruang->lokasi }}">
                        </div>
                        <div class="mb-3">
                            <label for="kapasitas" class="form-label">Kapasitas</label>
                            <input type="number" class="form-control" id="kapasitas" name="kapasitas"
                                value="{{ $ruang->kapasitas }}">
                        </div>
                        <div class="mb-3">
                            <label for="lantai" class="form-label">Jumlah Lantai</label>
                            <input type="number" class="form-control" id="lantai" name="lantai"
                                value="{{ $ruang->lantai }}">
                        </div>
                        <div class="mb-3">
                            <label for="gambar" class="form-label">Gambar Ruang</label>
                            <input type="file" class="form-control" id="gambar" name="gambar">
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
