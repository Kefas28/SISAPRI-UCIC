@extends('admin.layouts.main')

@section('content-admin')
    <div class="container-fluid pt-4 px-4">
        <div class="card">
            <div class="card-header bg-light">
                <h5 class="mb-0">Data Aduan</h5>
            </div>
            <div class="card-body">
                <a href="{{ route('aduan.create') }}" class="btn btn-outline-primary mb-2">Tambah Data Aduan</a>
                <div class="table-responsive">
                    <table id="example" class="table table-striped" style="width:100%">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama Pengadu</th>
                                <th scope="col">NIM</th>
                                <th scope="col">Prodi</th>
                                <th scope="col">Lokasi</th>
                                <th scope="col">Keterangan Aduan</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($aduans as $aduan)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $aduan->nama_pengadu }}</td>
                                    <td>{{ $aduan->nim }}</td>
                                    <td>{{ $aduan->prodi }}</td>
                                    <td>{{ $aduan->lokasi }}</td>
                                    <td>{{ $aduan->keterangan_aduan }}</td>
                                    <td>
                                        <a href="{{ route('aduan.show', $aduan->id_aduan) }}"
                                            class="btn btn-info btn-sm">Lihat</a>
                                        <a href="{{ route('aduan.edit', $aduan->id_aduan) }}"
                                            class="btn btn-warning btn-sm">Edit</a>
                                        <form action="{{ route('aduan.destroy', $aduan->id_aduan) }}" method="POST"
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
