<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class CreateUsersSeeder extends Seeder
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
                'firstname' => 'Admin',
                'lastname' => 'Admin',
                'email' => 'admin@admin.com',
                'password' => bcrypt('1234'),
                'is_admin' => '1',
            ],
            [
                'firstname' => 'User',
                'lastname' => 'User',
                'email' => 'user@user.com',
                'password' => bcrypt('1234'),
                'is_admin' => '0',
            ]
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
