<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Aduan;
use Illuminate\Http\Request;

class AduanController extends Controller
{
    public function index()
    {
        $aduans = Aduan::all();
        return view('admin.feedback.aduan.index', compact('aduans'));
    }

    public function create()
    {
        return view('admin.feedback.aduan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_pengadu' => 'required|string|max:255',
            'nim' => 'nullable|string|max:255',
            'prodi' => 'nullable|string|max:255',
            'lokasi' => 'required|string|max:255',
            'keterangan_aduan' => 'required|string',
        ]);

        Aduan::create($request->all());

        return redirect()->route('aduan.index')->with('success', 'Data aduan berhasil ditambahkan');
    }

    public function show($id)
    {
        $aduan = Aduan::findOrFail($id);
        return view('admin.feedback.aduan.show', compact('aduan'));
    }

    public function edit($id)
    {
        $aduan = Aduan::findOrFail($id);
        return view('admin.feedback.aduan.edit', compact('aduan'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_pengadu' => 'required|string|max:255',
            'nim' => 'nullable|string|max:255',
            'prodi' => 'nullable|string|max:255',
            'lokasi' => 'required|string|max:255',
            'keterangan_aduan' => 'required|string',
        ]);

        $aduan = Aduan::findOrFail($id);
        $aduan->update($request->all());

        return redirect()->route('aduan.index')->with('success', 'Data aduan berhasil diperbarui');
    }

    public function destroy($id)
    {
        $aduan = Aduan::findOrFail($id);
        $aduan->delete();

        return redirect()->route('aduan.index')->with('success', 'Data aduan berhasil dihapus');
    }
}
