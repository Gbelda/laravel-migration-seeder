<?php

use Faker\Generator as Faker;
use App\Models\Flight;
use Illuminate\Database\Seeder;

class FlightSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run(Faker $faker)
    {
        for ($i=0; $i < 8; $i++) {
            
            $_flight = new Flight();
            $_flight->destination = $faker->city();
            $_flight->airline = $faker->company();
            $_flight->price = $faker->numberBetween($min = 100, $max = 1000);
            $_flight->flight_duration = "{$faker->numberBetween($min = 1, $max = 23)} hr {$faker->numberBetween($min = 1, $max = 59)} min";
            $_flight->poster = $faker->imageUrl(200,100,'cities',true);
            $_flight->save();


        }
    }
}
