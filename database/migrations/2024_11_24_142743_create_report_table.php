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
        Schema::create('reports', function (Blueprint $table) {
            $table->id();
            $table->string('ticket')->unique(); // Tiket unik untuk pelacakan
            $table->string('nama'); // Nama pelapor
            $table->string('email'); // Email pelapor
            $table->string('program_studi'); // Program studi pelapor
            $table->string('angkatan'); // Angkatan pelapor
            $table->string('no_hp'); // Nomor HP pelapor
            $table->enum('status_pelapor', ['Pelapor', 'Saksi']); // Status: Pelapor atau Saksi
            $table->text('pesan'); // Pesan dari pelapor
            $table->string('lampiran')->nullable(); // Lampiran opsional
            $table->enum('jenis_pelaporan', ['Kesehatan Mental', 'Kekerasan Seksual']); // Jenis pelaporan
            $table->enum('status_pelacakan', ['Diterima', 'Diproses', 'Selesai'])->default('Diterima'); // Status pelacakan
            $table->timestamps(); // Timestamps: created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('report');
    }
};
