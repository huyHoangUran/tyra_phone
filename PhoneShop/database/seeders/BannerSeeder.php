<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('banners')->insert([
            'name' => 'Sale 12.12',
            'image' => 'img.image',
            'status' => 1,
            'user_id' => 1

        ]);
    }
}
