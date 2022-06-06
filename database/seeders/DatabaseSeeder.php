<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::create([
            'name' => 'User',
            'email' => 'user@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make(12345678),
            'remember_token' => Str::random(10),
        ]);

         \App\Models\Admin::create([
             'name' => 'Admin',
             'email' => 'admin@admin.com',
             'email_verified_at' => now(),
             'password' => Hash::make(12345678),
             'remember_token' => Str::random(10),
         ]);
    }
}
