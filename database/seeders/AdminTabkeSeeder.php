<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminTabkeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::create(
            [
                'name' => 'admin',
                'email' => 'admin@admin.com',
                'phone_number' =>'1234',
                'address' => 'Cau giay- Ha Noi',
                'password' => Hash::make('123')
            ]
        );
    }
}
