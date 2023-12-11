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
        Schema::create('transaksi', function (Blueprint $table) {
            $table->id();
            $table->string('no_pesan');
            $table->integer('id_pelanggan');
            $table->dateTime('tgl_pesan');
            $table->text('catatan');
            $table->bigInteger('total_harga');
            $table->date('tgl_bayar');
            $table->enum('metode', ['Ambil','Antar']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksi');
    }
};
