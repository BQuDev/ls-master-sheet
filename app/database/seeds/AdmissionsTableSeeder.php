<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class AdmissionsTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();
        Admission::truncate();
		foreach(range(1, 50) as $index)
		{
			Admission::create([

            'student_id' => $faker->randomNumber(8),
            'title' => $faker->title,
            'first_name' => $faker->firstName,
            'name_2' => $faker->firstName,
            'surname' => $faker->lastName,
            'uk_street' => $faker->streetAddress,
            'uk_city' => $faker->city,
            'uk_postel_code' => $faker->postcode,
            'uk_mobile' => $faker->randomNumber(9),
            'uk_land_line' => $faker->randomNumber,
            'nationality' => $faker->country,
            'origin_street' => $faker->streetAddress,
            'origin_city' => $faker->city,
            'origin_postal_code' => $faker->postcode,
            'origin_country' => $faker->country,
            'date_of_birth' => $faker->dateTimeThisCentury->format('Y-m-d'),
            'mobile' => $faker->randomNumber,
            'land_line' => $faker->randomNumber(9),
            'email' => $faker->email,
            'facebook' => $faker->slug,
            'twitter' => $faker->slug,
            'linkedin' => $faker->slug,
            'other' => $faker->slug,
			]);
		}
	}

}