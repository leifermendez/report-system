<?php

use Illuminate\Database\Seeder;

class OrganizationsTableSeeder extends Seeder
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
                'name' => 'Empresa Demo 1',
                'contact' => 'Juan Carlos',
                'url' => 'http://test.com',
                'email' => 'demo@demo.com'
            ],
            [
                'name' => 'Empresa Demo 2',
                'contact' => 'Maritin',
                'url' => 'http://test1.com',
                'email' => 'demo1@demo1.com'
            ]
        ];

        \App\Organizations::insert($features);
    }
}
