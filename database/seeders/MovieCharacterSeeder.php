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
            [
                'movies_id'=>'4',
                'actors_id'=>'4',
                'characterName'=>'Choi'
            ],
            [
                'movies_id'=>'5',
                'actors_id'=>'5',
                'characterName'=>'Esther'
            ],
            [
                'movies_id'=>'5',
                'actors_id'=>'6',
                'characterName'=>'Kate Coleman'
            ],
            [
                'movies_id'=>'5',
                'actors_id'=>'7',
                'characterName'=>'Max Coleman'
            ],
            [
                'movies_id'=>'6',
                'actors_id'=>'5',
                'characterName'=>'Esther'
            ],
            [
                'movies_id'=>'6',
                'actors_id'=>'8',
                'characterName'=>'Tricia Albright'
            ],
            [
                'movies_id'=>'6',
                'actors_id'=>'9',
                'characterName'=>'Gunnar Albright'
            ],
            [
                'movies_id'=>'7',
                'actors_id'=>'10',
                'characterName'=>'Ivanna van Dijk'
            ],
            [
                'movies_id'=>'7',
                'actors_id'=>'11',
                'characterName'=>'Ambar'
            ],
            [
                'movies_id'=>'7',
                'actors_id'=>'12',
                'characterName'=>'Arthur'
            ],
            [
                'movies_id'=>'7',
                'actors_id'=>'13',
                'characterName'=>'Rina'
            ],
            [
                'movies_id'=>'8',
                'actors_id'=>'14',
                'characterName'=>'Li Ronan'
            ],
            [
                'movies_id'=>'8',
                'actors_id'=>'15',
                'characterName'=>'Dom'
            ],
            [
                'movies_id'=>'10',
                'actors_id'=>'17',
                'characterName'=>'Enola Holmes'
            ],
            [
                'movies_id'=>'10',
                'actors_id'=>'18',
                'characterName'=>'Sherlock Holmes'
            ],
            [
                'movies_id'=>'10',
                'actors_id'=>'19',
                'characterName'=>'Tewkesbury'
            ],
            [
                'movies_id'=>'11',
                'actors_id'=>'17',
                'characterName'=>'Enola Holmes'
            ],
            [
                'movies_id'=>'11',
                'actors_id'=>'18',
                'characterName'=>'Sherlock Holmes'
            ],
            [
                'movies_id'=>'11',
                'actors_id'=>'19',
                'characterName'=>'Tewkesbury'
            ],
            [
                'movies_id'=>'12',
                'actors_id'=>'20',
                'characterName'=>'Poong Woon-ho'
            ],
            [
                'movies_id'=>'12',
                'actors_id'=>'21',
                'characterName'=>'Na Bo-ra'
            ],
            [
                'movies_id'=>'12',
                'actors_id'=>'22',
                'characterName'=>'Baek Hyun-jing'
            ],
            [
                'movies_id'=>'13',
                'actors_id'=>'23',
                'characterName'=>'Logan Thibault'
            ],
            [
                'movies_id'=>'13',
                'actors_id'=>'24',
                'characterName'=>'Beth Clayton'
            ],
            [
                'movies_id'=>'13',
                'actors_id'=>'25',
                'characterName'=>'Ellie'
            ],
            [
                'movies_id'=>'9',
                'actors_id'=>'26',
                'characterName'=>'Marilyn Monroe'
            ],
            [
                'movies_id'=>'9',
                'actors_id'=>'27',
                'characterName'=>'The Playwright'
            ],
            [
                'movies_id'=>'9',
                'actors_id'=>'28',
                'characterName'=>'Miss Flynn'
            ],
            [
                'movies_id'=>'4',
                'actors_id'=>'29',
                'characterName'=>'Noi'
            ],
            [
                'movies_id'=>'4',
                'actors_id'=>'30',
                'characterName'=>'Nim'
            ],
        ]);
    }
}
