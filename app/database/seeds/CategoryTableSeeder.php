<?php

use HireMe\Entities\Category;

// Composer: "fzaninotto/faker": "v1.3.0"
//use Faker\Factory as Faker;

class CategoryTableSeeder extends Seeder {

	public function run()
	{
		//$faker = Faker::create();
    /*
		foreach(range(1, 10) as $index)
		{
			Category::create([

			]);
		}*/

    Category::create([
      'id'   => 1,
      'name' => 'Backend developers',
      'slug' => 'backend-developers'
    ]);

    Category::create([
      'id'   => 2,
      'name' => 'Frontend developers',
      'slug' => 'frontend-developers'
    ]);
    
    Category::create([
      'id'   => 3,
      'name' => 'Designers',
      'slug' => 'designers'
    ]);
    
	}

}