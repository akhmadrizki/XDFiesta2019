<?php

use Illuminate\Database\Seeder;
use App\Daftar;

class DaftarPesertaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\Daftar', 30)->create();
    }
}
