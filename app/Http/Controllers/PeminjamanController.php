<?php

namespace App\Http\Controllers;

use App\Models\Peminjaman;
use Illuminate\Http\Request;

class PeminjamanController extends Controller
{
    public function index()
    {
        $peminjamans = Peminjaman::all();
        return view('admin.peminjaman.index', compact('peminjamans'));
    }

    public function create()
    {
        return view('admin.peminjaman.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'role' => 'required|in:Mahasiswa,Dosen,Staf',
            'nama_jenis_kegiatan' => 'required',
            'tanggal_kegiatan' => 'required|date',
            'waktu_kegiatan' => 'required|in:08:00,10:00,12:00,14:00,16:00',
            'jumlah_peserta' => 'required|integer',
            'ruang_keterangan' => 'required',
            'hari_peminjaman' => 'required|in:Senin,Selasa,Rabu,Kamis,Jumat,Sabtu',
            'ruangan' => 'required|max:10',
            'status' => 'required|in:Menunggu,Disetujui,Ditolak',
        ]);

        Peminjaman::create($request->all());

        return redirect()->route('ruangan.index')->with('success', 'Peminjaman berhasil ditambahkan');
    }

    public function show($id)
    {
        $peminjaman = Peminjaman::findOrFail($id);
        return view('admin.peminjaman.show', compact('peminjaman'));
    }

    public function edit($id)
    {
        $peminjaman = Peminjaman::findOrFail($id);
        return view('admin.peminjaman.edit', compact('peminjaman'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'role' => 'required|in:Mahasiswa,Dosen,Staf',
            'nama_jenis_kegiatan' => 'required',
            'tanggal_kegiatan' => 'required|date',
            'waktu_kegiatan' => 'required|in:08:00,10:00,12:00,14:00,16:00',
            'jumlah_peserta' => 'required|integer',
            'ruang_keterangan' => 'required',
            'hari_peminjaman' => 'required|in:Senin,Selasa,Rabu,Kamis,Jumat,Sabtu',
            'ruangan' => 'required|max:10',
            'status' => 'required|in:Menunggu,Disetujui,Ditolak',
        ]);

        $peminjaman = Peminjaman::findOrFail($id);
        $peminjaman->update($request->all());

        return redirect()->route('ruangan.index')->with('success', 'Peminjaman berhasil diperbarui');
    }

    public function destroy($id)
    {
        $peminjaman = Peminjaman::findOrFail($id);
        $peminjaman->delete();

        return redirect()->route('ruangan.index')->with('success', 'Peminjaman berhasil dihapus');
    }
}
