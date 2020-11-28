<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(FeaturesTableSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(OrganizationsTableSeeder::class);
        $this->call(ProjectsTableSeeder::class);
        $this->call(TagSeeder::class);
    }
}
