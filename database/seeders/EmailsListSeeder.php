<?php

// database/seeders/EmailsListSeeder.php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // Import the DB facade

class EmailsListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Define the data you want to insert
        $data = [
            ['email' => 'razan.r.abuhamda@gmail.com', 'name' => 'Razan'],
            ['email' => 'rrazanramii@gmail.com', 'name' => 'Razannnnn'],
            ['email' => 'razan.r.h.abuahmda@gmail.com', 'name' => 'Rozzah'],
        ];

        // Insert the data into the 'emails_list' table
        DB::table('emails_list')->insert($data);
    }
}
