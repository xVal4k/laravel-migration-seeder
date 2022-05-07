<?php

use App\Trains;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 200; $i++) {
            $trainData = [
                'Departure_station' => $faker->city(),
                'Arrival_station'   => $faker->city(),
                'Departure_time'    => $faker->time(),
                'Arrival_time'      => $faker->time(),
                'Train'             => $faker->randomDigitNotNull()
            ];

            $train = new Trains();
            $train->fill($trainData);
            $train->save();
        }
    }
}
