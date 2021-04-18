<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create(
            [
                'name' => 'user',
                'email' => 'user@gmail.com',
                'phone_number' =>'12345',
                'address' => 'Bac Tu Liem - Ha Noi',
                'password' => Hash::make('123')
            ]
        );
    }
}
