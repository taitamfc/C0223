<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => '123',
            'birthday' => '2000-12-31'
        ];
        DB::table('users')->insert($data);
    }
}
