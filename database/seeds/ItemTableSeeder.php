<?php
/**
* 
*/
class ItemTableSeeder extends Seeder
{
	
	function run()
	{
		$faker=Faker\Factory::create();
		Item::truncated();
		foreach (range(1, 30) as $index) 
		{
			Item::create([
				'id'=>$faker->sentence,
				'title'=>$faker->sentence,
				'discription'=>$faker->paragrpah(4)
				]);
			# code...
		}

	}
}