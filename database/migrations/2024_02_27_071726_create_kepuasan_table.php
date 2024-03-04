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
        Schema::create('kepuasan', function (Blueprint $table) {
            $table->bigIncrements('id_kepuasan');
            $table->integer('no');
            $table->string('role');
            $table->string('soal_1');
            $table->string('soal_2');
            $table->string('soal_3');
            $table->string('soal_4');
            $table->string('soal_5');
            $table->string('soal_6');
            $table->string('soal_7');
            $table->string('soal_8');
            $table->string('soal_9');
            $table->string('soal_10');
            $table->string('soal_11');
            $table->string('soal_12');
            $table->string('soal_13');
            $table->string('soal_14');
            $table->string('soal_15');
            $table->string('soal_16');
            $table->string('soal_17');
            $table->string('soal_18');
            $table->string('soal_19');
            $table->string('soal_20');
            $table->string('soal_21');
            $table->string('soal_22');
            $table->string('soal_23');
            $table->string('soal_24');
            $table->string('soal_25');
            $table->string('soal_26');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kepuasan');
    }
};
