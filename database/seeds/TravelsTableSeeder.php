<?php

use Illuminate\Database\Seeder;
use App\Travel;

class TravelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $arrayTravel = config('travels');

        foreach ($arrayTravel as $item) {
            $travel = new Travel();

            $travel->location = $item["location"];
            $travel->state = $item["state"];
            $travel->price = $item["price"];
            $travel->date = $item["date"];

            $travel->save();

        }
    }
}
