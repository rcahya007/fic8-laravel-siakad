<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory(50)->create();

        User::create([
            'name' => 'Rendy Admin',
            'email' => 'rendyadmin@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'roles' => 'mahasiswa',
        ]);
    }
}
