<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    
    public function run()
    {
        User::updateOrCreate(
            ['email'=>'15rojoni.1997@gmail.com'],
            [
            'role' => 'SuperAdmin',
            'name' => 'Super Admin',
            'phone' => '01747436390',
            'email' => '15rojoni.1997@gmail.com',
            'username' => 'superadmin',
            'password' => bcrypt('12345678'),
            'email_verified_at' => now(),
            ]
        );
    }
}
