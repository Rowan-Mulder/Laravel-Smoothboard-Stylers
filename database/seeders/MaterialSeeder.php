<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MaterialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() // php artisan db:seed --class=MaterialSeeder
    {
        DB::table('materials')->insert([
            ['name' => 'Koa wood' /*, 'created_at' => now(), */ /* 'updated_at' => now(), */],
            ['name' => 'Polystyrene'],
            ['name' => 'Kevlar'],
            ['name' => 'Carbon Fiber'],
            ['name' => 'Epoxy'],
            ['name' => 'Polyster'],
        ]);
    }
}
