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
        Schema::create('training', function (Blueprint $table){
            $table->id();
            $table->string('cover');
            $table->string('name_training',255);
            $table->string('metode_training',255);
            $table->string('jenis_training',255);
            $table->string('durasi',255);
            $table->string('tgl_rilis');
            $table->string('kualitas',255);
            $table->string('detail_pelatihan',255);
            $table->string('trainer',255);
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
