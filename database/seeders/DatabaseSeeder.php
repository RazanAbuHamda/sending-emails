<?php
// database/seeders/DatabaseSeeder.php

namespace Database\Seeders;

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
        // Call the EmailsListSeeder class to run the seeder
        $this->call(EmailsListSeeder::class);

        // Add more seeders if needed
    }
}
