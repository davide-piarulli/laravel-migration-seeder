<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

class TrainTableSeederFaker extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        //passo nuova istanza del faker come parametro del metodo run
        for ($i = 0; $i < 25; $i++) {
            $new_train = new Train();
            $new_train->travel_company = $faker->words(1, true);
            $new_train->departure_station = $faker->city();
            $new_train->arrival_station = $faker->city();
            $new_train->departure_time = $faker->time();
            $new_train->arrival_time = $faker->time();
            $new_train->train_number = $faker->numerify('RE-####');
            $new_train->wagon_number = $faker->randomDigitNot(0);
            $new_train->in_time = $faker->boolean();
            $new_train->minutes_late = $faker->randomDigit();
            $new_train->is_cancelled = $faker->boolean();
            // effettuo insert nel db
            $new_train->save();
        }
    }
}
