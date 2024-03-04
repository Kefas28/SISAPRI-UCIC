<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('peminjaman', function (Blueprint $table) {
            $table->bigIncrements('id_peminjaman');
            $table->enum('role', ['Mahasiswa', 'Dosen', 'Staf'])->default('Mahasiswa');
            $table->string('nama_jenis_kegiatan');
            $table->date('tanggal_kegiatan');
            $table->time('waktu_kegiatan');
            $table->integer('jumlah_peserta');
            $table->text('ruang_keterangan');
            $table->time('jam_peminjaman');
            $table->string('hari_peminjaman', 20);
            $table->string('ruangan', 10);
            $table->enum('status', ['Menunggu', 'Disetujui', 'Ditolak'])->default('Menunggu');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('peminjaman');
    }
};
