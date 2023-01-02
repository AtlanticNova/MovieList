<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MovieGenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('movie_genres')->insert([
            [
                'movies_id'=>'1',
                'genres_id'=>'1'
            ],
            [
                'movies_id'=>'1',
                'genres_id'=>'2',
            ],
            [
                'movies_id'=>'2',
                'genres_id'=>'1',
            ],
            [
                'movies_id'=>'2',
                'genres_id'=>'2',
            ],
            [
                'movies_id'=>'3',
                'genres_id'=>'1',
            ],
            [
                'movies_id'=>'3',
                'genres_id'=>'2',
            ],
        ]);
    }
}
