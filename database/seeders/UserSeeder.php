<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');

        for($i = 1; $i <= 20; $i++){
            DBT::table('users')->insert([
                'name' =>$faker->name,
                'email'=>$faker->email,
                'email_verified_at'=>now(),
                'password' => Hash::make('password'),
                'creatae_update' =>now(),
                'update_at' =>now(),
            ]);
        }
    }
}
