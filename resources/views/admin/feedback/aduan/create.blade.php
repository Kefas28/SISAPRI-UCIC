@extends('admin.layouts.main')

@section('content-admin')
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-12 col-xl-6">
                <div class="bg-light rounded h-100 p-4">
                    <h6 class="mb-4">Tambah Aduan Baru</h6>
                    <form action="{{ route('aduan.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="nama_pengadu" class="form-label">Nama Pengadu</label>
                            <input type="text" class="form-control" id="nama_pengadu" name="nama_pengadu">
                        </div>
                        <div class="mb-3">
                            <label for="nim" class="form-label">NIM</label>
                            <input type="text" class="form-control" id="nim" name="nim">
                        </div>
                        <div class="mb-3">
                            <label for="prodi" class="form-label">Prodi</label>
                            <input type="text" class="form-control" id="prodi" name="prodi">
                        </div>
                        <div class="mb-3">
                            <label for="lokasi" class="form-label">Lokasi</label>
                            <input type="text" class="form-control" id="lokasi" name="lokasi">
                        </div>
                        <div class="mb-3">
                            <label for="keterangan_aduan" class="form-label">Keterangan Aduan</label>
                            <textarea class="form-control" id="keterangan_aduan" name="keterangan_aduan"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Tambah Aduan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
