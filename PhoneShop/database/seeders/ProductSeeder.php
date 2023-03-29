<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('Products')->insert([
            'name' => "Iphone 13 pro max",
            'price' => 20000000,
            'quantity' => 12,
            'image' => 'images.img',
            'description' => "Đây là iphone 13 pro max",
            'category_id' => 1,
            'user_id' => 1,

        ]);
    }
}
