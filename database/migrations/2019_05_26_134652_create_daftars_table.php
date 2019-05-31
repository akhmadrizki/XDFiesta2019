<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDaftarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('daftars', function (Blueprint $table) {
            $table->bigIncrements('id_daftar');
            $table->string('alamat_email');
            $table->string('nama_team');
            $table->string('nama_ketua');
            $table->char('no_wa', 20);
            $table->string('judul_lomba');
            $table->unsignedInteger('id_lomba');
            $table->timestamps();

            // $table->foreign('id_lomba')->references('id_lomba')->on('lomba')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('daftars');
    }
}
