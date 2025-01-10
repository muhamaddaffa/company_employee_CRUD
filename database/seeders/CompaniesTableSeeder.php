<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class CompaniesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void 
     */
    public function run()
    {
        DB::table('companies')->insert([
            ['name' => 'Tech Innovators', 'logo_path' => 'logos/default.png', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Global Solutions', 'logo_path' => 'logos/default.png', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'NextGen IT', 'logo_path' => 'logos/default.png', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Bright Future Corp', 'logo_path' => 'logos/default.png', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Alpha Technologies', 'logo_path' => 'logos/default.png', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Beta Solutions', 'logo_path' => 'logos/default.png', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Delta Enterprises', 'logo_path' => 'logos/default.png', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Gamma Innovations', 'logo_path' => 'logos/default.png', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Epsilon Networks', 'logo_path' => 'logos/default.png', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Zeta Communications', 'logo_path' => 'logos/default.png', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Omicron Ventures', 'logo_path' => 'logos/default.png', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Sigma Innovations', 'logo_path' => 'logos/default.png', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Lambda Tech', 'logo_path' => 'logos/default.png', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Pi Systems', 'logo_path' => 'logos/default.png', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Omega Enterprises', 'logo_path' => 'logos/default.png', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Kappa Software', 'logo_path' => 'logos/default.png', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Theta Solutions', 'logo_path' => 'logos/default.png', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Iota Technologies', 'logo_path' => 'logos/default.png', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Mu Analytics', 'logo_path' => 'logos/default.png', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Nu Horizons', 'logo_path' => 'logos/default.png', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}

