@extends('admin.layouts.main')

@section('content-admin')
    <div class="container-fluid pt-4 px-4">
        <div class="col-12">
            <div class="bg-light rounded h-100 p-4">
                <h5 class="mb-4">Ruang</h5>
                <a href="{{ route('ruang.create') }}" class="btn btn-outline-primary mb-2">Tambah Ruang</a>
                <table id="example" class="table table-striped" style="width:100%">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nama Ruang</th>
                            <th scope="col">Gedung</th>
                            <th scope="col">Lokasi</th>
                            <th scope="col">Kapasitas</th>
                            <th scope="col">Jumlah Lantai</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($ruangs as $ruang)
                            <tr>
                                <th scope="row">{{ $ruang->id_ruang }}</th>
                                <td>{{ $ruang->nama_ruang }}</td>
                                <td>{{ $ruang->gedung }}</td>
                                <td>{{ $ruang->lokasi }}</td>
                                <td>{{ $ruang->kapasitas }}</td>
                                <td>{{ $ruang->lantai }}</td>
                                <td>
                                    <a href="{{ route('ruang.show', $ruang->id_ruang) }}"
                                        class="btn btn-info btn-sm">Lihat</a>
                                    <a href="{{ route('ruang.edit', $ruang->id_ruang) }}"
                                        class="btn btn-warning btn-sm">Edit</a>
                                    <form action="{{ route('ruang.destroy', $ruang->id_ruang) }}" method="POST"
                                        class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm"
                                            onclick="javascript: return confirm('Apakah anda yakin ingin menghapus data ini ?')">Hapus</button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
