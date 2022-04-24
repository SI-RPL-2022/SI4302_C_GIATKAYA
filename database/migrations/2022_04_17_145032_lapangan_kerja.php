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
        Schema::create('infokerja', function (Blueprint $table){
            $table->id();
            $table->string('name_perusahaan',255);
            $table->string('deskripsi',255);
            $table->string('lokasi',255);
            $table->string('jabatan')->nullable();
            $table->string('gaji');
            $table->string('is_admin') -> default(1);  
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
        //
    }
};
