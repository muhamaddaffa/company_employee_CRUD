<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('employees')->insert([
            ['firstname' => 'John', 'lastname' => 'Doe', 'company_id' => 1, 'email' => 'john.doe@example.com', 'phone' => '1234567890', 'created_at' => now(), 'updated_at' => now()],
            ['firstname' => 'Jane', 'lastname' => 'Smith', 'company_id' => 2, 'email' => 'jane.smith@example.com', 'phone' => '1234567891', 'created_at' => now(), 'updated_at' => now()],
            ['firstname' => 'Robert', 'lastname' => 'Brown', 'company_id' => 3, 'email' => 'robert.brown@example.com', 'phone' => '1234567892', 'created_at' => now(), 'updated_at' => now()],
            ['firstname' => 'Emily', 'lastname' => 'Davis', 'company_id' => 4, 'email' => 'emily.davis@example.com', 'phone' => '1234567893', 'created_at' => now(), 'updated_at' => now()],
            ['firstname' => 'Michael', 'lastname' => 'Wilson', 'company_id' => 5, 'email' => 'michael.wilson@example.com', 'phone' => '1234567894', 'created_at' => now(), 'updated_at' => now()],
            ['firstname' => 'Emma', 'lastname' => 'Clark', 'company_id' => 6, 'email' => 'emma.clark@example.com', 'phone' => '1234567895', 'created_at' => now(), 'updated_at' => now()],
            ['firstname' => 'William', 'lastname' => 'Martinez', 'company_id' => 7, 'email' => 'william.martinez@example.com', 'phone' => '1234567896', 'created_at' => now(), 'updated_at' => now()],
            ['firstname' => 'Olivia', 'lastname' => 'Garcia', 'company_id' => 8, 'email' => 'olivia.garcia@example.com', 'phone' => '1234567897', 'created_at' => now(), 'updated_at' => now()],
            ['firstname' => 'James', 'lastname' => 'Lopez', 'company_id' => 9, 'email' => 'james.lopez@example.com', 'phone' => '1234567898', 'created_at' => now(), 'updated_at' => now()],
            ['firstname' => 'Isabella', 'lastname' => 'Hernandez', 'company_id' => 10, 'email' => 'isabella.hernandez@example.com', 'phone' => '1234567899', 'created_at' => now(), 'updated_at' => now()],
            ['firstname' => 'Benjamin', 'lastname' => 'Moore', 'company_id' => 11, 'email' => 'benjamin.moore@example.com', 'phone' => '9876543210', 'created_at' => now(), 'updated_at' => now()],
            ['firstname' => 'Sophia', 'lastname' => 'Taylor', 'company_id' => 12, 'email' => 'sophia.taylor@example.com', 'phone' => '9876543211', 'created_at' => now(), 'updated_at' => now()],
            ['firstname' => 'Alexander', 'lastname' => 'Anderson', 'company_id' => 13, 'email' => 'alexander.anderson@example.com', 'phone' => '9876543212', 'created_at' => now(), 'updated_at' => now()],
            ['firstname' => 'Mia', 'lastname' => 'Thomas', 'company_id' => 14, 'email' => 'mia.thomas@example.com', 'phone' => '9876543213', 'created_at' => now(), 'updated_at' => now()],
            ['firstname' => 'Elijah', 'lastname' => 'Jackson', 'company_id' => 15, 'email' => 'elijah.jackson@example.com', 'phone' => '9876543214', 'created_at' => now(), 'updated_at' => now()],
            ['firstname' => 'Charlotte', 'lastname' => 'White', 'company_id' => 16, 'email' => 'charlotte.white@example.com', 'phone' => '9876543215', 'created_at' => now(), 'updated_at' => now()],
            ['firstname' => 'Daniel', 'lastname' => 'Harris', 'company_id' => 17, 'email' => 'daniel.harris@example.com', 'phone' => '9876543216', 'created_at' => now(), 'updated_at' => now()],
            ['firstname' => 'Amelia', 'lastname' => 'Martin', 'company_id' => 18, 'email' => 'amelia.martin@example.com', 'phone' => '9876543217', 'created_at' => now(), 'updated_at' => now()],
            ['firstname' => 'Henry', 'lastname' => 'Thompson', 'company_id' => 19, 'email' => 'henry.thompson@example.com', 'phone' => '9876543218', 'created_at' => now(), 'updated_at' => now()],
            ['firstname' => 'Evelyn', 'lastname' => 'Martinez', 'company_id' => 20, 'email' => 'evelyn.martinez@example.com', 'phone' => '9876543219', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
