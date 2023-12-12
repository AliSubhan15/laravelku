<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use illuminate\Support\Facedas\Hash;
use App\Mosdels\User;

class PustakawanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::create([
            'name' => 'pustakawan',
            'email' => 'pustakawan@gmail.com',
            'email_verified_at' => now(),
            'passwor' => Hash::make ('password'),
            'create_at' => now(),
            'create_at' => now(),
        ]);

        $user->assignRole('pustakawan');
    }
}
