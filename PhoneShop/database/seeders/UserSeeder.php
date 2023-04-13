<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use function GuzzleHttp\Promise\task;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('Users')->insert([
            'name' => 'Nguyễn Hoàng',
            'image' => 'image.img',
            'email' => 'huyhoang@gmail.com',
            'password' => bcrypt(123456789),
            'role' => 0
        ]);
    }
}