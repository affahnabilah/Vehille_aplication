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
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('bagian');
            $table->string('nama_peminta');
            $table->string('pimpinan1');
            $table->string('pimpinan2')->nullable();
            $table->string('pimpinan3')->nullable();
            $table->string('pimpinan4')->nullable();
            $table->string('pimpinan5')->nullable();
            $table->string('pelaksana1');
            $table->string('pelaksana2')->nullable();
            $table->string('pelaksana3')->nullable();
            $table->string('pelaksana4')->nullable();
            $table->string('pelaksana5')->nullable();
            $table->string('tujuan');
            $table->string('keperluan');
            $table->date('tanggal');
            $table->time('jam_berangkat');
            $table->time('jam_kembali');
            $table->string('jenis_kendaraan');
            $table->string('nopol');
            $table->string('pengemudi');
            $table->string('estimasi_bbm');
            $table->string('estimasi_tol');
            $table->string('manager_AKU_dan_umum');
            $table->string('manager_tanaman');
            $table->enum('status', ['waiting', 'approval', 'rejected'])->default('waiting');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};
