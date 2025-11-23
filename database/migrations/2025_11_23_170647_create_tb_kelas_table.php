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
        Schema::create('tb_kelas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('mentor_id')->constrained('tb_mentor')->onDelete('cascade');
            $table->string('nama_kelas');
            $table->string('kategori');
            $table->integer('harga');
            $table->string('profil_kelas');
            $table->string('deskripsi_kelas');
            $table->enum('status_publikasi', ['draft', 'pending', 'diterima', 'ditolak', 'non-aktif']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_kelas');
    }
};
