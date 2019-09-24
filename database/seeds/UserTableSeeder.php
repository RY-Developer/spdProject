<?php

use Illuminate\Database\Seeder;
use \App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Abraham Sinaga',
            'email' => 'archer@developer.com',
            'email_verified_at' => now(),
            'password' => bcrypt('arthur'),
            'remember_token' => Str::random(50),
            'avatar' => 'default.jpg',
            'role' => 1
        ]);
    }
}
