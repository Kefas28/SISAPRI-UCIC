<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Gedung;
use Illuminate\Http\Request;

class GedungController extends Controller
{
    public function index()
    {
        $gedungs = Gedung::all();
        return view('admin.prasarana.gedung.index', compact('gedungs'));
    }

    public function create()
    {
        return view('admin.prasarana.gedung.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_gedung' => 'required',
            'lokasi' => 'required',
            'lantai' => 'required|integer',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $input = $request->all();

        if ($request->hasFile('gambar')) {
            $imageName = time().'.'.$request->gambar->extension();
            $request->gambar->move(public_path('images'), $imageName);
            $input['gambar'] = 'images/'.$imageName;
        }

        Gedung::create($input);

        return redirect()->route('gedung.index')->with('success', 'Data gedung berhasil ditambahkan');
    }

    public function show($id)
    {
        $gedung = Gedung::where("id_gedung", "=", $id)->first();
        return view('admin.prasarana.gedung.show', compact('gedung'));
    }

    public function edit($id)
    {
        $gedung = Gedung::where("id_gedung", "=", $id)->first();
        return view('admin.prasarana.gedung.edit', compact('gedung'));
    }

    public function update(Request $request,  $id)
    {
        $request->validate([
            'nama_gedung' => 'required',
            'lokasi' => 'required',
            'lantai' => 'required|integer',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $input = $request->all();

        if ($request->hasFile('gambar')) {
            $imageName = time().'.'.$request->gambar->extension();
            $request->gambar->move(public_path('images'), $imageName);
            $input['gambar'] = 'images/'.$imageName;
        }

        $gedung = Gedung::where("id_gedung", "=", $id)->first();

        $gedung->update($input);

        return redirect()->route('gedung.index')->with('success', 'Data gedung berhasil diperbarui');
    }

    public function destroy($id)
    {
        $gedung = Gedung::where("id_gedung", "=", $id)->first();

        $gedung->delete();

        return redirect()->route('gedung.index')->with('success', 'Data gedung berhasil dihapus');
    }
}
