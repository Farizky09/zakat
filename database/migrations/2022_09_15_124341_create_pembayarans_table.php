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
        Schema::create('pembayaran', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_amil')->constrained('users');
            $table->foreignId('id_zakat')->constrained('zakat');
            $table->foreignId('id_pembayar')->constrained('pembayar');
            $table->date('tgl_penyerahan');
            $table->double('pembayaran_beras')->nullable();
            $table->integer('pembayaran_uang')->nullable();
            $table->integer('jml_tanggungan');
            $table->string('total_pembayaran')->nullable();
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
        Schema::dropIfExists('pembayarans');
    }
};
