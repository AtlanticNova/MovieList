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
            [
                'movies_id'=>'4',
                'genres_id'=>'3',
            ],
            [
                'movies_id'=>'4',
                'genres_id'=>'9',
            ],
            [
                'movies_id'=>'5',
                'genres_id'=>'3',
            ],
            [
                'movies_id'=>'5',
                'genres_id'=>'5',
            ],
            [
                'movies_id'=>'6',
                'genres_id'=>'3',
            ],
            [
                'movies_id'=>'6',
                'genres_id'=>'5',
            ],
            [
                'movies_id'=>'7',
                'genres_id'=>'5',
            ],
            [
                'movies_id'=>'8',
                'genres_id'=>'3',
            ],
            [
                'movies_id'=>'9',
                'genres_id'=>'4',
            ],
            [
                'movies_id'=>'10',
                'genres_id'=>'10',
            ],
            [
                'movies_id'=>'10',
                'genres_id'=>'11',
            ],
            [
                'movies_id'=>'11',
                'genres_id'=>'11',
            ],
            [
                'movies_id'=>'11',
                'genres_id'=>'10',
            ],
            [
                'movies_id'=>'12',
                'genres_id'=>'6',
            ],
            [
                'movies_id'=>'13',
                'genres_id'=>'7',
            ],
            [
                'movies_id'=>'13',
                'genres_id'=>'4',
            ],
        ]);
    }
}
