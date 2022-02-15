<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('users')->insert([
            'name' => 'yasser',
            'email' => 'yassersaad@gmail.com',
            'password' => Hash::make('Yumnahamed1'),
            'birth_date' => '1991-09-08',
            'is_admin' => 1

        ]);
    }
}
