@extends('admin.layouts.main')

@section('content-admin')
    <div class="container-fluid pt-4 px-4">
        <div class="col-12">
            <div class="bg-light rounded h-100 p-4">
                <h5 class="mb-4">Konten Prasarana</h5>
                <a href="{{ route('prasarana.create') }}" class="btn btn-outline-primary mb-2">Tambah Konten
                    Prasarana</a>
                <table id="example" class="table table-striped" style="width:100%">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Judul</th>
                            <th scope="col">Deskripsi</th>
                            <th scope="col">Gambar</th>
                            <th scope="col">Keterangan</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($konten_prasaranas as $konten_prasarana)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $konten_prasarana->judul }}</td>
                                <td>{{ $konten_prasarana->deskripsi }}</td>
                                <td><img src="{{ asset($konten_prasarana->gambar) }}" alt="{{ $konten_prasarana->judul }}"
                                        width="100"></td>
                                <td>{{ $konten_prasarana->keterangan }}</td>
                                <td>
                                    <a href="{{ route('prasarana.show', $konten_prasarana->id_konten_prasarana) }}"
                                        class="btn btn-info btn-sm">Lihat</a>
                                    <a href="{{ route('prasarana.edit', $konten_prasarana->id_konten_prasarana) }}"
                                        class="btn btn-warning btn-sm">Edit</a>
                                    <form action="{{ route('prasarana.destroy', $konten_prasarana->id_konten_prasarana) }}"
                                        method="POST" class="d-inline">
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
