<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeders.
     *
     * @return void
     */
    public function run() // php artisan db:seed
    {
        $this->call([
            UserSeeder::class,
            MaterialSeeder::class,
            SurfboardModelTypeSeeder::class,
        ]);
    }
}
