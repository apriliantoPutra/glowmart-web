<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'phone'=> '982920202',
            'password'=> Hash::make('12345'),
            'is_admin'=> true,
            'is_approved'=> true
        ]);
        User::create([
            'name' => 'user',
            'email' => 'user@gmail.com',
            'phone'=> '094994',
            'password'=> Hash::make('12345'),
        ]);
        
        User::factory(3)->create();

    }
}
