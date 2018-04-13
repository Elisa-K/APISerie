<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $this->call(SeriesTableSeeder::class);
         $this->call(SeasonsTableSeeder::class);
         $this->call(EpisodesTableSeeder::class);
    }
}
