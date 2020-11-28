<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name' => 'Usuario ADMIN',
                'email' => 'admin@admin.com',
                'password' => bcrypt('12345678')
            ],
            [
                'name' => 'Demo User',
                'email' => 'demo@demo.com',
                'password' => bcrypt('12345678')
            ]
        ];

        \App\User::insert($users);
    }
}
