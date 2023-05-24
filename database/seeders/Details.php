<?php

namespace Database\Seeders;

use App\Models\Detail;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;


class Details extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker::create();

        for ($i = 1; $i <= 100; $i++) {
            Detail::create([
               'bookTitle' => $faker->sentence,
               'bookAuthor' => $faker->name,
               'bookYear' => $faker->year,
               'bookSynopsis' => $faker->paragraph,
               'bookImg' => $faker->imageUrl($width = 640, $height = 480),
               'publisherId' => rand(1,10),
            ]);
        }

    }
}
