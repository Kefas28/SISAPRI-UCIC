@extends('admin.layouts.main')

@section('content-admin')
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-12 col-xl-6">
                <div class="bg-light rounded h-100 p-4">
                    <h6 class="mb-4">Detail Data Kepuasan</h6>
                    <div>
                        <p><strong>No:</strong> {{ $kepuasan->no }}</p>
                        <p><strong>Role/Jabatan:</strong> {{ $kepuasan->role }}</p>
                        <!-- Display other fields (soal_1, soal_2, ..., soal_25) as needed -->
                        @for ($i = 1; $i <= 25; $i++)
                            <p><strong>Soal {{ $i }}:</strong> {{ $kepuasan->{'soal_'.$i} }}</p>
                        @endfor
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
