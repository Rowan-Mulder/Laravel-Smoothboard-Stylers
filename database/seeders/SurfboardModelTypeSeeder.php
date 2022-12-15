<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SurfboardModelTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() // php artisan db:seed --class=SurfboardModelTypeSeeder
    {
        DB::table('surfboard_model_types')->insert([
            ['name' => 'Round' /*, 'created_at' => now(), */ /* 'updated_at' => now(), */],
            ['name' => 'Square'],
            ['name' => 'Triangular'],
        ]);
    }
}
