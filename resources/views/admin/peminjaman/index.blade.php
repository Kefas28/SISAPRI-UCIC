@extends('admin.layouts.main')

@section('content-admin')
    <div class="container-fluid pt-4 px-4">
        <div class="col-12">
            <div class="bg-light rounded h-100 p-4">
                <h5 class="mb-4">Peminjaman Ruangan</h5>
                <a href="{{ route('ruangan.create') }}" class="btn btn-outline-primary mb-2">Tambah Data Peminjaman</a>
                <table id="example" class="table table-striped" style="width:100%">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th>Role</th>
                            <th>Nama Kegiatan</th>
                            <th>Tanggal</th>
                            <th>Waktu</th>
                            <th>Jumlah Peserta</th>
                            <th>Ruang</th>
                            <th>Hari</th>
                            <th>Ruang</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($peminjamans as $peminjaman)
                            <tr>
                                <th scope="row">{{ $loop->index + 1 }}</th>
                                <td>{{ $peminjaman->role }}</td>
                                <td>{{ $peminjaman->nama_jenis_kegiatan }}</td>
                                <td>{{ $peminjaman->tanggal_kegiatan }}</td>
                                <td>{{ $peminjaman->waktu_kegiatan }}</td>
                                <td>{{ $peminjaman->jumlah_peserta }}</td>
                                <td>{{ $peminjaman->ruang_keterangan }}</td>
                                <td>{{ $peminjaman->hari_peminjaman }}</td>
                                <td>{{ $peminjaman->ruangan }}</td>
                                <td>{{ $peminjaman->status }}</td>
                                <td>
                                    <a href="{{ route('ruangan.show', $peminjaman->id_peminjaman) }}"
                                        class="btn btn-primary">Show</a>
                                    <a
                                        href="{{ route('ruangan.edit', $peminjaman->id_peminjaman) }}"class="btn btn-warning">Edit</a>
                                    <form action="{{ route('ruangan.destroy', $peminjaman->id_peminjaman) }}"
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
