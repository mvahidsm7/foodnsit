<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('bayar', function (Blueprint $table){
            $table->unsignedBigInteger('user');
            $table->unsignedBigInteger('no_pes')->nullable();
            $table->timestamps();
            $table->foreign('user')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('no_pes')->references('no_pes')->on('pesan')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
