<?php

use Carbon\Carbon;
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
        Schema::create('pesan', function (Blueprint $table) {
            $table->id();
            $table->string('kd_pes')->unique();
            $table->date('tanggal');
            $table->time('jam');
            $table->enum('status', [1, 2, 3, 4])->default(1);
            $table->timestamps();
            $expired = Carbon::now()->addHours(2)->timezone('Asia/Jakarta');
            $table->datetime('expired_at')->default($expired);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pesan');
    }
};
