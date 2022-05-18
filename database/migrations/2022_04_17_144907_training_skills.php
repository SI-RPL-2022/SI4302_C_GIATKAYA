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
            $table->string('name_training',255);
            $table->enum('metode_training', ['Video Materi','Artikel Modul']);
            $table->enum('jenis_training', ['Business','Personal Skill','Tech & Development','Art, Design & Photography','Lifestyle']);
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