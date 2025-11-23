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
        Schema::create('tb_users', function (Blueprint $table) {
            $table->id();
            $table->string('first_name', 50);
            $table->string('last_name', 50);
            $table->string('username', 30);
            $table->string('no_telepon', 20);
            $table->string('password');
            $table->enum('role', ['murid', 'mentor', 'admin'])->default('mentor');
            $table->enum('status', ['aktif', 'non-aktif'])->default('aktif');
            $table->string('deskripsi', 1000);
            $table->string('fotoProfil', 50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_users');
    }
};
