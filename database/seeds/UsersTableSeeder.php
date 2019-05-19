<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fields = [
        	'name' => 'Admin',
        	'email' => 'admin@xd.site',
        	'password' => Hash::make('fiestaxd2k19'),
        ];

        User::create($fields);
    }
}
