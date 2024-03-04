<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Kampus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KampusController extends Controller
{
    public function index()
    {
        $kampus = Kampus::all();
        return view('admin.prasarana.kampus.index', compact('kampus'));
    }

    public function create()
    {
        return view('admin.prasarana.kampus.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'lokasi' => 'required',
            'alamat' => 'required',
            'luas_tanah' => 'required|integer',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $input = $request->all();

        if ($request->hasFile('gambar')) {
            $imageName = time().'.'.$request->gambar->extension();
            $request->gambar->move(public_path('images'), $imageName);
            $input['gambar'] = 'images/'.$imageName;
        }

        Kampus::create($input);

        return redirect()->route('kampus.index')->with('success', 'Data kampus berhasil ditambahkan');
    }

    public function show($id)
    {
        $kampus = Kampus::where("id_kampus", "=", $id)->first();
        return view('admin.prasarana.kampus.show', compact('kampus'));
    }

    public function edit($id)
    {
        $kampus = Kampus::where("id_kampus", "=", $id)->first();

        // dd($kampus);

        return view('admin.prasarana.kampus.edit', compact('kampus'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'lokasi' => 'required',
            'alamat' => 'required',
            'luas_tanah' => 'required|integer',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $input = $request->all();

        if ($request->hasFile('gambar')) {
            $imageName = time().'.'.$request->gambar->extension();
            $request->gambar->move(public_path('images'), $imageName);
            $input['gambar'] = 'images/'.$imageName;
        }

        $kampus = Kampus::where("id_kampus", "=", $id)->first();

        $kampus->update($input);

        return redirect()->route('kampus.index')->with('success', 'Data kampus berhasil diperbarui');
    }

    public function destroy($id)
    {

        $kampus = Kampus::where("id_kampus", "=", $id)->first();

        $kampus->delete();

        return redirect()->route('kampus.index')->with('success', 'Data kampus berhasil dihapus');
    }


}
