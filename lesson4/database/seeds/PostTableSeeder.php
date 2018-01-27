<?php

use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$faker = Faker\Factory::create();
    	$posts = [];
        for ($i=0; $i < 1000; $i++) { 
        	$posts[] = [
        		'title' => $faker->realText($maxNbChars = 70, $indexSize = 1),
        		'content' => $faker->realText($maxNbChars = 500, $indexSize = 5)
        	];
        }

        DB::table('posts')->insert($posts);
    }
}
