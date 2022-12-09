<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Seeds admin users.
     *
     * @return void
     */
    public function run() // php artisan db:seed --class=UserSeeder
    {
        // \App\Models\User::factory(10)->create();

        DB::table('users')->insert([
            'name' => 'Sean',
            'email' => 'sean@smoothboardstylers.nl',
            'email_verified_at' => now(),
            'password' => Hash::make('Password123!'),
//            'created_at' => now(),
//            'updated_at' => now(),
        ]);

        DB::table('users')->insert([
            'name' => 'Marianne',
            'email' => 'marianne@smoothboardstylers.nl',
            'email_verified_at' => now(),
            'password' => Hash::make('Password123!'),
//            'created_at' => now(),
//            'updated_at' => now(),
        ]);
    }
}
