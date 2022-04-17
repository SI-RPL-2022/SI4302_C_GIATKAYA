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
            $table->id();
            $table->string('name',255);
            $table->string('email',255)->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('nomor', 13);
            $table->string('alamat',255);
            $table->string('password',255);
            $table->enum('status', ['0','1','2']);
            $table->integer('tahun')->nullable();
            $table->string('tanggal')->nullable();
            $table->string('gender',255);
            $table->string('nik')->unique()->nullable();
            $table->string('usaha',255)->nullable();
            $table->string('bidang',255)->nullable();
            $table->integer('toko')->nullable();
            $table->string('foto')->nullable();
            $table->string('is_admin')->default(0);
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
