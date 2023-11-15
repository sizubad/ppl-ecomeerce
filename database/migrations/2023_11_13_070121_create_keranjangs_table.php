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
        Schema::create('keranjangs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('produk_id');
            $table->unsignedBigInteger('pesanan_id')->nullable();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->float('harga');
            $table->enum('status',['baru','dalam proses','dikirim','batal'])->default('baru');
            $table->integer('jumlah');
            $table->foreign('produk_id')->references('id')->on('produks')->onDelete('CASCADE');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('CASCADE');
            $table->foreign('pesanan_id')->references('id')->on('pesanans')->onDelete('SET NULL');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('keranjangs');
    }
};
