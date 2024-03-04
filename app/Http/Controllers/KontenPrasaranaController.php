<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\KontenPrasarana;
use Illuminate\Http\Request;

class KontenPrasaranaController extends Controller
{
    public function index()
    {
        $konten_prasaranas = KontenPrasarana::all();
        return view('admin.konten_prasarana.index', compact('konten_prasaranas'));
    }

    public function indexFrontend()
    {
        $konten_prasarana = KontenPrasarana::all();
        return view('pages.frontend.prasarana', compact('konten_prasarana'));
    }

    public function create()
    {
        return view('admin.konten_prasarana.create');
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

        KontenPrasarana::create($input);

        return redirect()->route('prasarana.index')->with('success', 'Data konten prasarana berhasil ditambahkan');
    }

    public function show($id)
    {
        $kontenPrasarana = KontenPrasarana::findOrFail($id);
        return view('admin.konten_prasarana.show', compact('kontenPrasarana'));
    }

    public function edit($id)
    {
        $kontenPrasarana = KontenPrasarana::findOrFail($id);
        return view('admin.konten_prasarana.edit', compact('kontenPrasarana'));
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

        $kontenPrasarana = KontenPrasarana::findOrFail($id);
        $kontenPrasarana->update($input);

        return redirect()->route('prasarana.index')->with('success', 'Data konten prasarana berhasil diperbarui');
    }

    public function destroy($id)
    {
        $kontenPrasarana = KontenPrasarana::findOrFail($id);
        $kontenPrasarana->delete();

        return redirect()->route('prasarana.index')->with('success', 'Data konten prasarana berhasil dihapus');
    }
}
