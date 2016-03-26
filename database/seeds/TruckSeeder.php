<?php

use Illuminate\Database\Seeder;

use App\Models\Truck;

class TruckSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Truck::create(['number' => 1]);
        Truck::create(['number' => 2]);
        Truck::create(['number' => 3]);
    }
}
