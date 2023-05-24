<?php

namespace Database\Seeders;

use App\Models\Publisher;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;


class Publishers extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for($i=1;$i<=10;$i++) {
            Publisher::create([
                'publisherName' => $faker->company,
                'publisherAddress' => $faker->address,
                'publisherPhone' => $faker->phoneNumber,
                'publisherEmail' => $faker->email,
                'publisherLogo'=>$faker->imageUrl($width = 640, $height = 480)
            ]);
        }
    }
}