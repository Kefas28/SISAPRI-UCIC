@extends('admin.layouts.main')

@section('content-admin')
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-12 col-xl-6">
                <div class="bg-light rounded h-100 p-4">
                    <h6 class="mb-4">Tambah Data Kepuasan</h6>
                    <form action="{{ route('kepuasan.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="no" class="form-label">No</label>
                            <input type="text" class="form-control" id="no" name="no">
                        </div>
                        <div class="mb-3">
                            <label for="role" class="form-label">Role/Jabatan</label>
                            <input type="text" class="form-control" id="role" name="role">
                        </div>
                        <!-- Add other fields (soal_1, soal_2, ..., soal_25) as needed -->
                        @for ($i = 1; $i <= 25; $i++)
                            <div class="mb-3">
                                <label for="soal_{{ $i }}" class="form-label">Soal {{ $i }}</label>
                                <input type="text" class="form-control" id="soal_{{ $i }}" name="soal_{{ $i }}">
                            </div>
                        @endfor
                        <button type="submit" class="btn btn-primary">Tambahkan Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
