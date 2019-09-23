<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$products = [];
    	$faker = Faker\Factory::create();
    	for ($i=0; $i < 20; $i++) { 
    		$item = [
    			"name" => $faker->realText($maxNbChars = 100, $indexSize = 1),
    			"feature_image" => "images/" . $faker->image("public/images", $width = 640, $height = 480, 'people', false),
    			"description" => $faker->realText($maxNbChars = 500, $indexSize = 3),
    			"slug" => $faker->realText($maxNbChars = 100, $indexSize = 1),
    			"status" => rand(0,1),
                "cate_id" => rand(1,7),
                "price" => $faker->unique()->randomNumber($nbDigits = 6),
    		];
    		$products[] = $item;
    	}
    	DB::table('products')->insert($products);
    }
}
