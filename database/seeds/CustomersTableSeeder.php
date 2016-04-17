<?php

use App\Customer;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;


class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('en_GB');

        for($i=0; $i<1000; $i++)
        {
        	Customer::create([
        			'surname' => $faker->lastName(),
        			'forename' => $faker->firstName(),
        			'house' => $faker->buildingNumber(),
        			'street' => $faker->streetName(),
        			'town' => $faker->city(),
        			'county' => $faker->county(),
        			'postcode' => $faker->postcode(),
        			'telephone' => $faker->phoneNumber(),
        			'email' => $faker->email()



        		]);
        }
    }
}
