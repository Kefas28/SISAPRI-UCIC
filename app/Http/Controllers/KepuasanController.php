<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Kepuasan;
use Illuminate\Http\Request;

class KepuasanController extends Controller
{
    public function index()
    {
        $kepuasans = Kepuasan::all();
        return view('admin.feedback.kepuasan.index', compact('kepuasans'));
    }

    public function create()
    {
        return view('admin.feedback.kepuasan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'no' => 'required|integer',
            'role' => 'required|string|max:255',
            'soal_1' => 'required|string|max:255',
            'soal_2' => 'required|string|max:255',
            'soal_3' => 'required|string|max:255',
            'soal_4' => 'required|string|max:255',
            'soal_5' => 'required|string|max:255',
            'soal_6' => 'required|string|max:255',
            'soal_7' => 'required|string|max:255',
            'soal_8' => 'required|string|max:255',
            'soal_9' => 'required|string|max:255',
            'soal_10' => 'required|string|max:255',
            'soal_11' => 'required|string|max:255',
            'soal_12' => 'required|string|max:255',
            'soal_13' => 'required|string|max:255',
            'soal_14' => 'required|string|max:255',
            'soal_15' => 'required|string|max:255',
            'soal_16' => 'required|string|max:255',
            'soal_17' => 'required|string|max:255',
            'soal_18' => 'required|string|max:255',
            'soal_19' => 'required|string|max:255',
            'soal_20' => 'required|string|max:255',
            'soal_21' => 'required|string|max:255',
            'soal_22' => 'required|string|max:255',
            'soal_23' => 'required|string|max:255',
            'soal_24' => 'required|string|max:255',
            'soal_25' => 'required|string|max:255',
        ]);

        Kepuasan::create($request->all());

        return redirect()->route('kepuasan.index')->with('success', 'Data kepuasan berhasil ditambahkan');
    }

    public function show($id)
    {
        $kepuasan = Kepuasan::findOrFail($id);
        return view('admin.feedback.kepuasan.show', compact('kepuasan'));
    }

    public function edit($id)
    {
        $kepuasan = Kepuasan::findOrFail($id);
        return view('admin.feedback.kepuasan.edit', compact('kepuasan'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'no' => 'required|integer',
            'role' => 'required|string|max:255',
            'soal_1' => 'required|string|max:255',
            'soal_2' => 'required|string|max:255',
            'soal_3' => 'required|string|max:255',
            'soal_4' => 'required|string|max:255',
            'soal_5' => 'required|string|max:255',
            'soal_6' => 'required|string|max:255',
            'soal_7' => 'required|string|max:255',
            'soal_8' => 'required|string|max:255',
            'soal_9' => 'required|string|max:255',
            'soal_10' => 'required|string|max:255',
            'soal_11' => 'required|string|max:255',
            'soal_12' => 'required|string|max:255',
            'soal_13' => 'required|string|max:255',
            'soal_14' => 'required|string|max:255',
            'soal_15' => 'required|string|max:255',
            'soal_16' => 'required|string|max:255',
            'soal_17' => 'required|string|max:255',
            'soal_18' => 'required|string|max:255',
            'soal_19' => 'required|string|max:255',
            'soal_20' => 'required|string|max:255',
            'soal_21' => 'required|string|max:255',
            'soal_22' => 'required|string|max:255',
            'soal_23' => 'required|string|max:255',
            'soal_24' => 'required|string|max:255',
            'soal_25' => 'required|string|max:255',
        ]);

        $kepuasan = Kepuasan::findOrFail($id);
        $kepuasan->update($request->all());

        return redirect()->route('kepuasan.index')->with('success', 'Data kepuasan berhasil diperbarui');
    }

    public function destroy($id)
    {
        $kepuasan = Kepuasan::findOrFail($id);
        $kepuasan->delete();

        return redirect()->route('kepuasan.index')->with('success', 'Data kepuasan berhasil dihapus');
    }
}
