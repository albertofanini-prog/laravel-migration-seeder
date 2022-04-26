<?php

use Illuminate\Database\Seeder;
use App\Train;
use Faker\Generator as Faker;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker){
        for( $i = 0; $i = 125; $i++){
            $train = new Train();

            $train -> brand = $faker->word();
            $train -> arrive_station = $faker->state();
            $train -> departure_station = $faker->state();
            $train -> arrive_hour = $faker->time();
            $train -> departure_hour = $faker->time();
            $train -> train_code = $faker->numberBetween(5, 17);
            $train -> number_of_carriage = $faker->numberBetween(1, 25);
            $train -> in_time = $faker->numberBetween(0, 1);
            $train -> delayed = $faker->numberBetween(0, 1);
            $train -> deleted = $faker->numberBetween(0, 1);

            $train = new Train();
        }
    }
}
