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
        for( $i = 0; $i <= 125; $i++){
            $train = new Train();

            // $train -> brand = 'trenitalia';
            // $train -> departure_station = 'milano';
            // $train -> arrive_station = 'roma';
            // $train -> departure_hour = '9';
            // $train -> arrive_hour = '12';
            // $train -> train_code = '0A8F9';
            // $train -> number_of_carriage = '8';
            // $train -> in_time = 'yes';
            // $train -> delayed = 'no';
            // $train -> deleted = 'no';

            $train -> brand = $faker->word();
            $train -> arrive_station = $faker->city();
            $train -> departure_station = $faker->city();
            $train -> arrive_hour = $faker->time();
            $train -> departure_hour = $faker->time();
            $train -> train_code = $faker->numberBetween(5, 17);
            $train -> number_of_carriage = $faker->numberBetween(1, 25);
            $train -> seats_available = $faker->numberBetween(1, 222);
            $train -> in_time = $faker->boolean(true);
            $train -> delayed = $faker->boolean(false);
            $train -> deleted = $faker->boolean(false);

            $train -> save();
        }
    }
}
