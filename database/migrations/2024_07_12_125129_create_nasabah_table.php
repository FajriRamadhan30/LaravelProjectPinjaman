<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNasabahTable extends Migration
{
    public function up()
    {
        Schema::create('nasabah', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('alamat');
            $table->string('nohp');
            $table->decimal('pinjaman', 15, 2);
            $table->integer('cicilan');
            $table->decimal('bunga_dibayar', 15, 2);
            $table->decimal('total_hutang_dibayar', 15, 2);
            $table->decimal('angsuran_per_bulan', 15, 2);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('nasabah');
    }
}