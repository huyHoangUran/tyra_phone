<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $nameCate = ['SAMSUNG', 'APPLE', 'XIAOMI'];
        for ($i = 0; $i < count($nameCate); $i++)
            DB::table('categories')->insert([
                'name' => $nameCate[$i],

            ]);
    }
}
