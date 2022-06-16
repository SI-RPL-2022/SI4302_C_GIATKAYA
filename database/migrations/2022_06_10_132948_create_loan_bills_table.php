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
        Schema::create('loan_bills', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreignId('loan_id');
            $table->foreign('loan_id')->references('id')->on('loans');
            $table->string('invoice');
            $table->dateTime('invoice_date');
            $table->dateTime('due_date');
            $table->bigInteger('total');
            $table->string('full_name')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('payment_method')->nullable();
            $table->bigInteger('ammount')->nullable();
            $table->string('payment_proof')->nullable();
            $table->integer('status')->default(0);
            $table->integer('status_cicilan')->default('Check');
            $table->integer('status_pinjaman')->default('Belum Lunas');
            $table->string('keterangan')->nullable();
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
        Schema::dropIfExists('loan_bills');
    }
};
