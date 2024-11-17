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
        Schema::create('detail_jawaban', function (Blueprint $table) {
            $table->id();
            $table->string('soal1')->nullable();
            $table->string('soal2')->nullable();
            $table->string('soal3')->nullable();
            $table->string('soal4')->nullable();
            $table->string('soal5')->nullable();
            $table->string('soal6')->nullable();
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
        Schema::dropIfExists('detail_jawaban');
    }
};
