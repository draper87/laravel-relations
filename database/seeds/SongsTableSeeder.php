<?php

use Faker\Generator as Faker;
use Illuminate\Database\Seeder;
use App\Song;

class SongsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run(Faker $faker)
     {
         for ($i=0; $i < 5 ; $i++) {
           for ($j=0; $j < 12 ; $j++) {
             $new_song = new Song();
             $new_song->title = $faker->name;
             $new_song->genre = $faker->randomElement([
               'pop',
               'jazz',
               'blues',
               'rock',
               'dance',
               'metal'
             ]);
             $new_song->albums_id = $i + 1;
             $new_song->save();
           }
         }
     }
}
