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
        Schema::create('datadiri', function (Blueprint $table) {
            $table->id();
            $table->string('nama_apps')->nullable();
            $table->string('nohp_apps', 20)->nullable();
            $table->string('email_apps')->nullable();
            $table->text('alamat_apps')->nullable();
            $table->string('logo')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('datadiri');
    }
};
