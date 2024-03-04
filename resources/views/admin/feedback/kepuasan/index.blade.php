@extends('admin.layouts.main')

@section('content-admin')
    <div class="container-fluid pt-4 px-4">
        <div class="card">
            <div class="card-header bg-light">
                <h5 class="mb-0">Data Kepuasan</h5>
            </div>
            <div class="card-body">
                <a href="{{ route('kepuasan.create') }}" class="btn btn-outline-primary mb-2">Tambah Data Kepuasan</a>
                <div class="table-responsive">
                    <table id="example" class="table table-striped" style="width:100%">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Role/Jabatan</th>
                                @for ($i = 1; $i <= 25; $i++)
                                    <th scope="col">{{ $i }}</th>
                                @endfor
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($kepuasans as $data)
                                <tr>
                                    <th scope="row">{{ $data->no }}</th>
                                    <td>{{ $data->role }}</td>
                                    @for ($i = 1; $i <= 25; $i++)
                                        <td>{{ $data->{'soal_' . $i} }}</td>
                                    @endfor
                                    <td>
                                        <a href="{{ route('kepuasan.show', $data->id_kepuasan) }}"
                                            class="btn btn-info btn-sm">Lihat</a>
                                        <a href="{{ route('kepuasan.edit', $data->id_kepuasan) }}"
                                            class="btn btn-warning btn-sm">Edit</a>
                                        <form action="{{ route('kepuasan.destroy', $data->id_kepuasan) }}" method="POST"
                                            class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm"
                                                onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
