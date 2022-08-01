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
    $this->call(chargesTableSeeder::class);
    $this->call(lasersTableSeeder::class);
    $this->call(highlightsTableSeeder::class);
    }
}
