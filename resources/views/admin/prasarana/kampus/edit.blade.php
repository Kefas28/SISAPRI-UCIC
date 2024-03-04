@extends('admin.layouts.main')

@section('content-admin')
    <div class="container-fluid pt-4 px-4">
        <div class="row">
            <div class="col">
                <div class="bg-light rounded h-100 p-4">
                    <h5 class="mb-4">Edit Kampus</h5>
                    <form action="{{ route('kampus.update', $kampus->id_kampus) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="lokasi" class="form-label">Lokasi</label>
                            <input type="text" class="form-control" id="lokasi" name="lokasi"
                                value="{{ $kampus->lokasi }}">
                        </div>
                        <div class="mb-3">
                            <label for="alamat" class="form-label">Alamat</label>
                            <input type="text" class="form-control" id="alamat" name="alamat"
                                value="{{ $kampus->alamat }}">
                        </div>
                        <div class="mb-3">
                            <label for="luas_tanah" class="form-label">Luas Tanah</label>
                            <input type="text" class="form-control" id="luas_tanah" name="luas_tanah"
                                value="{{ $kampus->luas_tanah }}">
                        </div>
                        <div class="mb-3">
                            <label for="gambar" class="form-label">Gambar</label>
                            <input type="file" class="form-control" id="gambar" name="gambar">
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
