<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'user',
            'email' => 'user@example.com',
            'password' => Hash::make('1234'),
            'remember_token' => Str::random(10),
        ]);
    }
}
