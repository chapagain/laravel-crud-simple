<?php

use Illuminate\Database\Seeder;

class NewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$faker = Faker\Factory::create();
		
		// add 10 rows of random data		
		for ($i=0; $i < 10; $i++) {			
			DB::table('news')->insert([
				'title' => $faker->sentence(),
				'slug' => $faker->slug,
				'short_description' => $faker->paragraph(),
				'full_content' => $faker->paragraphs(3, true), // 3 paragraphs
				'author' => $faker->name,
				'category' => $faker->colorName, // color name as category
				'created_at' => $faker->dateTime(),
				'updated_at' => $faker->dateTime(),
			]);
		}
    }
}
