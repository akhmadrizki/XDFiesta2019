<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWaktuTempatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('waktu_tempat', function (Blueprint $table) {
            $table->bigIncrements('id_waktu_tempat');
            $table->integer('id_lomba');
            $table->string('tm')->nullable();
            $table->string('tempat_tm')->nullable();
            $table->string('waktu')->nullable();
            $table->string('tempat')->nullable();
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
        Schema::dropIfExists('waktu_tempat');
    }
}
