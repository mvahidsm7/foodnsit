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
        Schema::table('pesan', function (Blueprint $table){
            $table->unsignedBigInteger('id_user');
            $table->unsignedBigInteger('no_meja')->nullable();
            $table->unsignedBigInteger('id_menu')->nullable();
            $table->foreign('id_user')->references('id_user')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('no_meja')->references('no_meja')->on('meja')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_menu')->references('id_menu')->on('menu')->onDelete('cascade')->onUpdate('cascade');
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
