<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //qui inserisco la logica per popolare la tabella
        // dump('run TrainsTableSeeder');

        $data = [
            [
                "travel_company" => 'Italo',
                "departure_station" => 'Torino',
                "arrival_station" => 'Milano',
                "departure_time" => '13:00',
                "arrival_time" => '15:00',
                "train_number" => 'RE-7514',
                "wagon_number" => '10',
                "in_time" => true,
                "minutes_late" => '5',
                "is_cancelled" => false,
            ],
            [
                "travel_company" => 'Italo',
                "departure_station" => 'Torino',
                "arrival_station" => 'Milano',
                "departure_time" => '13:00',
                "arrival_time" => '15:00',
                "train_number" => 'RE-7514',
                "wagon_number" => '10',
                "in_time" => true,
                "minutes_late" => '5',
                "is_cancelled" => false,
            ],
        ];

        // creo nuova istanza di House con foreach
        foreach ($data as $item) {

            $new_train = new Train();
            $new_train->travel_company = $item['travel_company'];
            $new_train->departure_station = $item['departure_station'];
            $new_train->arrival_station = $item['arrival_station'];
            $new_train->departure_time = $item['departure_time'];
            $new_train->arrival_time = $item['arrival_time'];
            $new_train->train_number = $item['train_number'];
            $new_train->wagon_number = $item['wagon_number'];
            $new_train->in_time = $item['in_time'];
            $new_train->minutes_late = $item['minutes_late'];
            $new_train->is_cancelled = $item['is_cancelled'];

            // effettuo insert nel db
            $new_train->save();
        }

        // creo nuova istanza di House
        // $new_train = new Train();
        // $new_train->travel_company = 'Trenitalia';
        // $new_train->departure_station = 'Bergamo';
        // $new_train->arrival_station = 'Roma';
        // $new_train->departure_time = '10:00';
        // $new_train->arrival_time = '17:00';
        // $new_train->train_number = 'RE-4514';
        // $new_train->wagon_number = '5';
        // $new_train->in_time = true;
        // $new_train->minutes_late = '1';
        // $new_train->is_cancelled = false;

        // effettuo insert nel db
        $new_train->save();

        dump($new_train);
    }
}
