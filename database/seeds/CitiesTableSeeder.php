<?php

use Illuminate\Database\Seeder;
use App\City;
class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        City::create([
            'name'=>'Bogota',

        ]);
        City::create([
            'name'=>'Cali',

        ]);
        City::create([
            'name'=>'Medellin',

        ]);
        City::create([
            'name'=>'Barranquilla',

        ]);
        City::create([
            'name'=>'Villavicencio',

        ]);
    }
}
