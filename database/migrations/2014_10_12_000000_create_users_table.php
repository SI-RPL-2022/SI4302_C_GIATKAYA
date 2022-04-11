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
        Schema::create('users', function (Blueprint $table) {
            $table->string('name');
            $table->string('email');
            $table->string('Jenis Kelamin');
            $table->date('tanggal lahir');
            $table->string('alamat');
            $table->string('no hp');
            $table->string('NIK')->unique();
            $table->string('nama usaha');
            $table->string('bidang usaha');
            $table->string('jumlah toko');
            $table->string('password');
            $table->string('tahun berdiri');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
