<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLombaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lomba', function (Blueprint $table) {
            $table->bigIncrements('id_lomba');
            $table->string('judul');
            $table->mediumText('deskripsi');
            $table->date('tanggal');
            $table->string('lokasi');
            $table->string('penyelenggara');
            $table->double('hadiah',8,2);
            $table->string('waktu');
            $table->string('pic');
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
        Schema::dropIfExists('lomba');
    }
}
