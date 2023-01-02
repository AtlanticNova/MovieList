<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MovieCharacterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('movie_characters')->insert([
            [
                'movies_id'=>'1',
                'actors_id'=>'1',
                'characterName'=>'Peter Parker'
            ],
            [
                'movies_id'=>'1',
                'actors_id'=>'2',
                'characterName'=>'Michelle Jones'
            ],
            [
                'movies_id'=>'1',
                'actors_id'=>'3',
                'characterName'=>'Ned Leeds'
            ],
            [
                'movies_id'=>'2',
                'actors_id'=>'1',
                'characterName'=>'Peter Parker'
            ],
            [
                'movies_id'=>'2',
                'actors_id'=>'2',
                'characterName'=>'Michelle Jones'
            ],
            [
                'movies_id'=>'2',
                'actors_id'=>'3',
                'characterName'=>'Ned Leeds'
            ],
            [
                'movies_id'=>'3',
                'actors_id'=>'1',
                'characterName'=>'Peter Parker'
            ],
            [
                'movies_id'=>'3',
                'actors_id'=>'2',
                'characterName'=>'Michelle Jones'
            ],
            [
                'movies_id'=>'3',
                'actors_id'=>'3',
                'characterName'=>'Ned Leeds'
            ],
        ]);
    }
}
