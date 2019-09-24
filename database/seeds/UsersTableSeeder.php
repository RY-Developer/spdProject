<?php

use Illuminate\Database\Seeder;
use \App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert
        ([
            ['name' => 'Abraham Sinaga',
            'email' => 'archer@developer.com',
            'email_verified_at' => now(),
            'password' => bcrypt('arthur'),
            'remember_token' => Str::random(50),
            'avatar' => 'default.jpg',
            'role' => 1]
        ]);
    }
}
