@extends('admin.layouts.main')

@section('content-admin')
    <div class="container-fluid pt-4 px-4">
        <div class="col-12">
            <div class="bg-light rounded h-100 p-4">
                <h5 class="mb-4">Konten Sarana</h5>
                <a href="{{ route('sarana.create') }}" class="btn btn-outline-primary mb-2">Tambah Konten Sarana</a>
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
                        @foreach ($kontensaranas as $kontensarana)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $kontensarana->judul }}</td>
                                <td>{{ $kontensarana->deskripsi }}</td>
                                <td><img src="{{ asset($kontensarana->gambar) }}" alt="{{ $kontensarana->judul }}"
                                        width="100"></td>
                                <td>{{ $kontensarana->keterangan }}</td>
                                <td>
                                    <a href="{{ route('sarana.show', $kontensarana->id_konten_sarana) }}"
                                        class="btn btn-info btn-sm">Lihat</a>
                                    <a href="{{ route('sarana.edit', $kontensarana->id_konten_sarana) }}"
                                        class="btn btn-warning btn-sm">Edit</a>
                                    <form action="{{ route('sarana.destroy', $kontensarana->id_konten_sarana) }}"
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
