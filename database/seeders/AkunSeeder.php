<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class AkunSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
                [
                    'username' => 'admin',
                    'name' => 'Admin Auro',
                    'email'=> 'admin@eperpus.com',
                    'role' => 'admin',
                    'password' => bcrypt('admin')
                ],
                [
                    'username' => 'visitor',
                    'name' => 'Visitor Surya',
                    'email'=> 'visitor@eperpus.com',
                    'role' => 'visitor',
                    'password' => bcrypt('visitor')
                ]

            ];
            foreach ($user as $key => $value) {
                User::create($value);
            }
    }
}
