<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            'name' => 'Iphone',
            'price' => 20,
            'description' => 'mo ta',
            'image' => 'abc',
            'user_id' => 1
        ];
        DB::table('products')->insert($data);
    }
}
