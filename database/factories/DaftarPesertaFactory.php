<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Daftar;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(Daftar::class, function (Faker $faker) {
    return [
        'alamat_email'      => $faker->unique()->safeEmail,
        'nama_team'         => $faker->userName,
        'nama_ketua'        => $faker->name,
        'nama_anggota1'     => $faker->name,
        'nama_anggota2'     => $faker->name,
        'nama_anggota3'     => $faker->name,
        'nama_anggota4'     => $faker->name,
        'nama_anggota5'     => $faker->name,
        'nama_anggota6'     => $faker->name,
        'jumlah_anggota'    => 6,
        'no_wa'             => $faker->e164phoneNumber(),
        'judul_lomba'       => 'Karambol',
        'id_lomba'          => '1',
    ];
});
