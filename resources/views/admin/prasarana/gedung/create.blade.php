@extends('admin.layouts.main')

@section('content-admin')
<!-- Form Start -->
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-sm-12 col-xl-6">
            <div class="bg-light rounded h-100 p-4">
                <h6 class="mb-4">Buat Gedung Baru</h6>
                <form action="{{ route('gedung.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="nama_gedung" class="form-label">Nama Gedung</label>
                        <input type="text" class="form-control" id="nama_gedung" name="nama_gedung">
                    </div>
                    <div class="mb-3">
                        <label for="lokasi" class="form-label">Lokasi</label>
                        <input type="text" class="form-control" id="lokasi" name="lokasi">
                    </div>
                    <div class="mb-3">
                        <label for="lantai" class="form-label">Jumlah Lantai</label>
                        <input type="number" class="form-control" id="lantai" name="lantai">
                    </div>
                    <div class="mb-3">
                        <label for="gambar" class="form-label">Gambar Gedung</label>
                        <input type="file" class="form-control" id="gambar" name="gambar">
                    </div>
                    <button type="submit" class="btn btn-primary">Tambah Gedung</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
