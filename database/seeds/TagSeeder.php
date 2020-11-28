<?php

use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
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
                'name' => 'Version 1',
                'color' => 'red',
                'projects_id' => 1,
                'start_at' => '2024-02-02 00:00:00',
                'deadline_at' => '2030-02-02 00:00:00'
            ],
            [
                'name' => 'Version 2',
                'color' => 'green',
                'projects_id' => 1,
                'start_at' => '2024-02-02 00:00:00',
                'deadline_at' => '2030-02-02 00:00:00'
            ]
        ];

        \App\Tags::insert($users);
    }
}
