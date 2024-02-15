<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Faker\Provider\en_US\Address;

use App\Models\Train;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 30; $i++) {
            $new_train = new Train();
            $new_train->agency = $faker->country();
            $new_train->departure_station = $faker->cityPrefix();
            $new_train->arrival_station = $faker->citySuffix();
            $new_train->departure_time = $faker->dateTime();
            $new_train->arrival_time = $faker->dateTime();
            $new_train->id_train = $faker->randomNumber(6, true);
            $new_train->carriage_number = $faker->numberBetween(0, 40);
            $new_train->is_puntual = $faker->boolean();
            $new_train->is_available = $faker->boolean();
            $new_train->save();
        }
    }
}
