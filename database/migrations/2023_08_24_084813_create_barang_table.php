<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('barang', function (Blueprint $table) {
            $table->id();
            $table->string('gambar');
            $table->string('nama');
            $table->text('deskripsi');
            $table->integer('harga');
            $table->integer('stok');
            $table->string('berat');
            $table->date('produksi');
            $table->date('expired');
            $table->enum('status',['Jual','Tidak']);
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('barang');
    }
};
