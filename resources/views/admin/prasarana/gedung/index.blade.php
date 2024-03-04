@extends('admin.layouts.main')

@section('content-admin')
    <div class="container-fluid pt-4 px-4">
        <div class="col-12">
            <div class="bg-light rounded h-100 p-4">
                <h5 class="mb-4">Gedung</h5>
                <a href="{{ route('gedung.create') }}" class="btn btn-outline-primary mb-2">Tambah Gedung</a>
                <table id="example" class="table table-striped" style="width:100%">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nama Gedung</th>
                            <th scope="col">Lokasi</th>
                            <th scope="col">Jumlah Lantai</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($gedungs as $gedung)
                            <tr>
                                <th scope="row">{{ $gedung->id_gedung }}</th>
                                <td>{{ $gedung->nama_gedung }}</td>
                                <td>{{ $gedung->lokasi }}</td>
                                <td>{{ $gedung->lantai }}</td>
                                <td>
                                    <a href="{{ route('gedung.show', $gedung->id_gedung) }}"
                                        class="btn btn-info btn-sm">Lihat</a>
                                    <a href="{{ route('gedung.edit', $gedung->id_gedung) }}"
                                        class="btn btn-warning btn-sm">Edit</a>
                                    <form action="{{ route('gedung.destroy', $gedung->id_gedung) }}" method="POST"
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
@endsection
