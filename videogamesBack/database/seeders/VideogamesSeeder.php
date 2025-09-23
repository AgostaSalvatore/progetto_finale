<?php

namespace Database\Seeders;

use App\Models\Videogame;
use Faker\Generator as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VideogamesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i = 0; $i < 10; $i++) {
            $newVideogame = new Videogame();

            $newVideogame->title        = $faker->sentence(3);
            $newVideogame->release_date = $faker->date();
            $newVideogame->description  = $faker->text();
            $newVideogame->price        = $faker->randomFloat(2, 0, 100);
            $newVideogame->cover_image  = $faker->image();

            $newVideogame->save();
        }
    }
}
