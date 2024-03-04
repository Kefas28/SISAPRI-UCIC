@extends('admin.layouts.main')

@section('content-admin')
    <div class="container-fluid pt-4 px-4">
        <div class="col-12">
            <div class="bg-light rounded h-100 p-4">
                <h5 class="mb-4">Kampus</h5>
                <a href="{{ route('kampus.create') }}" class="btn btn-outline-primary mb-2">Tambah Kampus</a>
                <table id="example" class="table table-striped" style="width:100%">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Lokasi</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Luas Tanah</th>
                            <th scope="col">Gambar</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($kampus as $kmps)
                            <tr>
                                <th scope="row">{{ $loop->index + 1 }}</th>
                                <td>{{ $kmps->lokasi }}</td>
                                <td>{{ $kmps->alamat }}</td>
                                <td>{{ $kmps->luas_tanah }}</td>
                                <td><img src="{{ asset($kmps->gambar) }}" alt="Gambar Kampus" style="max-width: 100px;">
                                </td>
                                <td>
                                    <a href="{{ route('kampus.show', $kmps->id_kampus) }}"
                                        class="btn btn-info btn-sm">Detail</a>
                                    <a href="{{ route('kampus.edit', $kmps->id_kampus) }}"
                                        class="btn btn-warning btn-sm">Edit</a>
                                    <form action="{{ route('kampus.destroy', $kmps->id_kampus) }}" method="POST"
                                        style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm"
                                            onclick="javascript: return confirm('Apakah anda yakin ingin menghapus data ini ?')">Hapus</button>
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
