<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KampusController;
use App\Http\Controllers\GedungController;
use App\Http\Controllers\RuangController;
use App\Http\Controllers\KontenPrasaranaController;
use App\Http\Controllers\KontenSaranaController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\AduanController;
use App\Http\Controllers\KepuasanController;
use App\Models\Kampus;
use App\Models\Gedung;
use App\Models\Ruang;
use App\Models\KontenPrasarana;
use App\Models\KontenSarana;
use App\Models\Peminjaman;
use App\Models\Aduan;
use App\Models\Kepuasan;

Route::get('/login', [AuthController::class, 'login']);

Route::post('/login', [AuthController::class, 'loginStore']);

    // Authenticated Routes
    Route::middleware('auth')->group(function () {
        // Logout
        Route::get('/logout', [AuthController::class, 'logout']);

        Route::prefix('baak')->group(function () {
                Route::get('/dashboard', [HomeController::class, 'baak']);
                Route::resource('kampus', KampusController::class);
                Route::resource('gedung', GedungController::class);
                Route::resource('ruang', RuangController::class);
                Route::resource('konten/prasarana', KontenPrasaranaController::class);
                Route::resource('konten/sarana', KontenSaranaController::class);
                Route::resource('peminjaman/ruangan', PeminjamanController::class);
                Route::resource('aduan', AduanController::class);
                Route::resource('kepuasan', KepuasanController::class);
        });
    });

    Route::get('/', function () {
        return view('pages.frontend.index');
    });

    Route::get('/profil', function () {
        return view('pages.frontend.profil');
    });

    Route::get('/sarana', function () {
        return view('pages.frontend.sarana');
    });

    Route::get('/prasarana', [KontenPrasaranaController::class, 'indexFrontend']);

    Route::get('/sarana', [KontenSaranaController::class, 'indexFrontend']);

    Route::get('/peminjaman', function () {
        return view('pages.frontend.peminjaman');
    });

    Route::get('/pengadaan', function () {
        return view('pages.frontend.pengadaan');
    });

    Route::get('/kepuasan', function () {
        return view('pages.frontend.kepuasan');
    });

    Route::get('/aduan', function () {
        return view('pages.frontend.aduan');
    });


    // Route::prefix('admin')->group(function () {
    //     Route::middleware('roleAs:baak')->group(function () {
    //         // Route::get('/dashboard', [HomeController::class, 'baak']);
    //         Route::get('/kampus', function () { return view('baak.prasarana.kampus.index'); });
    //     });

    //     Route::middleware('roleAs:bauk')->group(function () {
    //         Route::get('/bauk/index', [HomeController::class, 'bauk']);
    //     });

    //     Route::middleware('roleAs:dosen')->group(function () {
    //         Route::get('/dosen/index', [HomeController::class, 'dosen']);
    //     });

    //     Route::middleware('roleAs:mahasiswa')->group(function () {
    //         Route::get('/mahasiswa/index', [HomeController::class, 'mahasiswa']);
    //     });
    // });
