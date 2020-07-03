<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class PeopleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('App\models\People');
        for ($i=0; $i<100; $i++) {
            DB::table('People')-> insert([
            'first_name' =>  $faker->firstName(),
            'last_name' =>  $faker->lastName(),
            'address_line_1' =>  $faker->address(),
            'address_line_2' =>  $faker->streetAddress(),
            'city' =>  $faker->city(),
            'lng' =>  $faker->longitude(),
            'lat' =>  $faker->latitude(),
            'email' =>  $faker->safeEmail(),
            'phone' =>  '+880'.$faker->numberBetween(0000000000, 9999999999),
            'created_at' =>  \Carbon\Carbon::now(),
            'updated_at' =>  \Carbon\Carbon::now(),
        ]);
        }
    }
}
