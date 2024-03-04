<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    // Rektorat
    public function bauk()
    {
        $data = auth()->user();

        return view('bauk.dashboard.index', compact('data'));
    }

    public function baak()
    {
        $data = auth()->user();

        return view('baak.dashboard.index', compact('data'));
    }

    public function dosen()
    {
    $data = auth()->user();

        return view('dosen.dashboard.index', compact('data'));
    }

    public function mahasiswa()
    {
        $data = auth()->user();

        return view('mahasiswa.dashboard.index', compact('data'));
    }

    public function guest()
    {
        return view('pages.backend.prasarana.kampus.index');
    }
}
