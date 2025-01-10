<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class AdminUserSeeder extends Seeder
{
    public function run()
    {
        User::updateOrCreate(
            ['email' => 'admin@folkatech.com'],
            [
                'name' => 'Administrator',
                'password' => bcrypt('password'),
            ]
        );
    }
}