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
        Schema::create('menu', function (Blueprint $table) {
            $table->id('id_menu');
            $table->string('nama');
            $table->enum('kategori', ['makanan', 'minuman']);
            $table->string('gambar');
            $table->string('deskripsi');
            $table->decimal('harga');
            $table->timestamps();
        });
        Schema::create('menu1', function (Blueprint $table) {
            $table->id('id_menu');
            $table->string('nama');
            $table->string('gambar');
            $table->string('deskripsi');
            $table->decimal('harga');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('menu');
    }
};
