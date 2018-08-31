<?php

use App\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    public function run()
    {
        // test user
        User::create([
            'first_name' => 'adswipetest',
            'last_name' => 'adswipetest',
            'email' => 'adswipeuser@adswipe.com',
            'password' => bcrypt('adswipetest99'),
        ]);
    }
}
