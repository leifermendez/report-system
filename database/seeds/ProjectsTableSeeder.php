<?php

use Illuminate\Database\Seeder;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $features = [
            [
                'title' => 'Proyecto 1',
                'organizations_id' => 1,
                'url' => 'http://test1.com',
                'description' => 'demo@demo.com'
            ],
            [
                'title' => 'Proyecto 2',
                'organizations_id' => 2,
                'url' => 'http://test2.com',
                'description' => 'demo@demo.com'
            ]
        ];

        \App\Projects::insert($features);
    }
}
