<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
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
        for($i = 0; $i < 10; $i++) {
            $train = new Train();
            $train->company = $faker->randomElement(['Trenitalia','TokyoRail','UanmèCheTren']); 
            $train->departure_station = $faker->city(); 
            $train->arrival_station = $faker->city();
            $train->departure_time = $faker->time();
            $train->arrival_time = $faker->time();  
            $train->train_code = $faker->randomNumber(5, true);
            $train->carriages_number = $faker->numberBetween(3,12);
            $train->on_time = $faker->boolean();
            $train->cancelled =$faker->boolean();
            $train->save();
        };
    }
}
