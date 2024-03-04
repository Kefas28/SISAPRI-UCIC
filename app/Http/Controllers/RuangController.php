<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Ruang;
use Illuminate\Http\Request;

class RuangController extends Controller
{
    public function index()
    {
        $ruangs = Ruang::all();
        return view('admin.prasarana.ruang.index', compact('ruangs'));
    }

    public function create()
    {
        return view('admin.prasarana.ruang.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_ruang' => 'required',
            'gedung' => 'required',
            'lokasi' => 'required',
            'kapasitas' => 'required|integer',
            'lantai' => 'required|integer',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $input = $request->all();

        if ($request->hasFile('gambar')) {
            $imageName = time().'.'.$request->gambar->extension();
            $request->gambar->move(public_path('images'), $imageName);
            $input['gambar'] = 'images/'.$imageName;
        }

        Ruang::create($input);

        return redirect()->route('ruang.index')->with('success', 'Data ruang berhasil ditambahkan');
    }

    public function show($id)
    {
        $ruang = Ruang::where("id_ruang", "=", $id)->first();
        return view('admin.prasarana.ruang.show', compact('ruang'));
    }

    public function edit($id)
    {
        $ruang = Ruang::where("id_ruang", "=", $id)->first();
        return view('admin.prasarana.ruang.edit', compact('ruang'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_ruang' => 'required',
            'gedung' => 'required',
            'lokasi' => 'required',
            'kapasitas' => 'required|integer',
            'lantai' => 'required|integer',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $input = $request->all();

        if ($request->hasFile('gambar')) {
            $imageName = time().'.'.$request->gambar->extension();
            $request->gambar->move(public_path('images'), $imageName);
            $input['gambar'] = 'images/'.$imageName;
        }

        $ruang = Ruang::where("id_ruang", "=", $id)->first();

        $ruang->update($input);

        return redirect()->route('ruang.index')->with('success', 'Data ruang berhasil diperbarui');
    }

    public function destroy($id)
    {
        $ruang = Ruang::where("id_ruang", "=", $id)->first();

        $ruang->delete();

        return redirect()->route('ruang.index')->with('success', 'Data ruang berhasil dihapus');
    }
}
