<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KontenSarana;

class KontenSaranaController extends Controller
{
    public function index()
    {
        $kontensaranas = KontenSarana::all();
        return view('admin.konten_sarana.index', compact('kontensaranas'));
    }

    public function indexFrontend()
    {
        $konten_sarana= KontenSarana::all();
        return view('pages.frontend.sarana', compact('konten_sarana'));
    }

    public function create()
    {
        return view('admin.konten_sarana.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'keterangan' => 'nullable',
        ]);

        $input = $request->all();

        if ($request->hasFile('gambar')) {
            $imageName = time().'.'.$request->gambar->extension();
            $request->gambar->move(public_path('images'), $imageName);
            $input['gambar'] = 'images/'.$imageName;
        }

        KontenSarana::create($input);

        return redirect()->route('sarana.index')->with('success', 'Konten sarana berhasil ditambahkan');
    }

    public function show($id)
    {
        $kontensarana = KontenSarana::findOrFail($id);
        return view('admin.konten_sarana.show', compact('kontensarana'));
    }

    public function edit($id)
    {
        $kontensarana = KontenSarana::findOrFail($id);
        return view('admin.konten_sarana.edit', compact('kontensarana'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'keterangan' => 'nullable',
        ]);

        $input = $request->all();

        if ($request->hasFile('gambar')) {
            $imageName = time().'.'.$request->gambar->extension();
            $request->gambar->move(public_path('images'), $imageName);
            $input['gambar'] = 'images/'.$imageName;
        }

        $kontensarana = KontenSarana::findOrFail($id);
        $kontensarana->update($input);

        return redirect()->route('sarana.index')->with('success', 'Konten sarana berhasil diperbarui');
    }

    public function destroy($id)
    {
        $kontensarana = KontenSarana::findOrFail($id);
        $kontensarana->delete();

        return redirect()->route('sarana.index')->with('success', 'Konten sarana berhasil dihapus');
    }
}
