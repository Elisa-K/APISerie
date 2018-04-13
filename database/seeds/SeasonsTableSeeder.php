<?php

use Illuminate\Database\Seeder;

class SeasonsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	//Jessica Jones
    	for($i = 1; $i <= 2; $i++) {
		    DB::table('seasons')->insert([
			    'number' => $i,
			    'episode_number' => '13',
			    'serie_id' => '1',
		    ]);
	    }

	    //Game of Thrones
	    for($i = 1; $i <= 6; $i++) {
		    DB::table('seasons')->insert([
			    'number' => $i,
			    'episode_number' => '10',
			    'serie_id' => '2',
		    ]);
	    }

	    DB::table('seasons')->insert([
		    'number' => '7',
		    'episode_number' => '7',
		    'serie_id' => '2',
	    ]);

	    DB::table('seasons')->insert([
		    'number' => '8',
		    'episode_number' => '6',
		    'serie_id' => '2',
	    ]);

	    //Westworld
	    for($i = 1; $i <= 2; $i++) {
		    DB::table('seasons')->insert([
			    'number' => $i,
			    'episode_number' => '10',
			    'serie_id' => '3',
		    ]);
	    }

	    //Brooklynn Nine-Nine
	    DB::table('seasons')->insert([
		    'number' => '1',
		    'episode_number' => '22',
		    'serie_id' => '4',
	    ]);

	    for($i = 2; $i <= 3; $i++) {
		    DB::table('seasons')->insert([
			    'number' => $i,
			    'episode_number' => '23',
			    'serie_id' => '4',
		    ]);
	    }

	    for($i = 4; $i <= 5; $i++) {
		    DB::table('seasons')->insert([
			    'number' => $i,
			    'episode_number' => '22',
			    'serie_id' => '4',
		    ]);
	    }

	    //How i met your mother
	    for($i = 1; $i <= 2; $i++) {
		    DB::table('seasons')->insert([
			    'number' => $i,
			    'episode_number' => '22',
			    'serie_id' => '5',
		    ]);
	    }

	    DB::table('seasons')->insert([
		    'number' => '3',
		    'episode_number' => '20',
		    'serie_id' => '5',
	    ]);

	    for($i = 4; $i <= 9; $i++) {
		    DB::table('seasons')->insert([
			    'number' => $i,
			    'episode_number' => '24',
			    'serie_id' => '5',
		    ]);
	    }

    }
}
