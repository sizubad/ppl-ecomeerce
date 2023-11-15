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
        Schema::create('pesanans', function (Blueprint $table) {
            $table->id();
            $table->string('nomor_pesanan')->unique();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->unsignedBigInteger('pengiriman_id')->nullable();
            $table->float('total_pembayaran');
            $table->integer('jumlah');
            $table->enum('metode_pembayaran',['cod','dana','tf']);
            $table->enum('status_pembayaran',['sudah','belum'])->default('belum');
            $table->enum('status',['baru','proses','dikirim','batal'])->default('baru');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('SET NULL');
            $table->foreign('pengiriman_id')->references('id')->on('pengirimen')->onDelete('SET NULL');
            $table->string('nama_lengkap');
            $table->string('email');
            $table->string('no_hp');
            $table->string('kode_pos')->nullable();
            $table->text('alamat');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pesanans');
    }
};
