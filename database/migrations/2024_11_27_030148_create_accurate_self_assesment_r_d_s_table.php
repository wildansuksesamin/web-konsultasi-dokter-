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
        Schema::create('accurate_self_assesment_r_d_s', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->text('kelebihana');
            $table->text('kelebihanb');
            $table->text('kelebihanc');
            $table->text('kekurangana');
            $table->text('kekuranganb');
            $table->text('langkah_selanjutnyaa');
            $table->text('langkah_selanjutnyab');
            $table->text('menerima_kritik_dan_sarana');
            $table->text('menerima_kritik_dan_saranb');
            $table->text('menerima_kritik_dan_saranc');
            $table->text('menerima_kritik_dan_sarand');
            $table->text('menerima_kritik_dan_sarane');
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
        Schema::dropIfExists('accurate_self_assesment_r_d_s');
    }
};
