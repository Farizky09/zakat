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
        Schema::create('pembayar', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pembayar');
            $table->string('nohp_pembayar');
            $table->string('jk_pembayar');
            $table->text('alamat_pembayar');
            $table->string('rt');
            $table->string('rw');
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pembayar');
    }
};
