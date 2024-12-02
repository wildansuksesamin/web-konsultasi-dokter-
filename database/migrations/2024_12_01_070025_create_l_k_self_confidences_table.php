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
        Schema::create('l_k_self_confidences', function (Blueprint $table) {
            $table->id();
            $table->string('Kategori_Bagian');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->text('Soal_1')->nullable();
            $table->text('Soal_2')->nullable();
            $table->text('Soal_3')->nullable();
            $table->text('Soal_4')->nullable();
            $table->text('Soal_5')->nullable();
            $table->text('Soal_6')->nullable();
            $table->text('Soal_7')->nullable();
            $table->text('Soal_8')->nullable();
            $table->text('Soal_9')->nullable();
            $table->text('Soal_10')->nullable();
            $table->text('Soal_11')->nullable();
            $table->text('Soal_12')->nullable();
            $table->text('Soal_13')->nullable();
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
        Schema::dropIfExists('l_k_self_confidences');
    }
};
