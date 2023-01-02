<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ActorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('actors')->insert([
            [
                'name'=>'Tom Stanley Holland',
                'gender'=>'Male',
                'biography'=>'Thomas Stanley Holland is an English actor. His accolades include a British Academy Film Award, three Saturn Awards, a Guinness World Record and an appearance on the Forbes 30 Under 30 Europe list. Some publications have called him one of the most popular actors of his generation.',
                'DOB'=>'1996-06-01',
                'POB'=>'Kingston upon Thames, United Kingdom',
                'imageURL'=>'images/Tom_Holland.jpg',
                'popularity'=>'100'
            ],
            [
                'name'=>'Zendaya Maree Stoermer Coleman',
                'gender'=>'Female',
                'biography'=>'Zendaya Maree Stoermer Coleman is an American actress and singer. She has received various accolades, including two Primetime Emmy Awards. Time magazine named her one of the 100 most influential people in the world on its annual list in 2022.',
                'DOB'=>'1996-09-01',
                'POB'=>'Oakland, California, United States',
                'imageURL'=>'images/Zendaya_Maree.jpg',
                'popularity'=>'100'
            ],
            [
                'name'=>'Jacob Batalon',
                'gender'=>'Male',
                'biography'=>'Jacob Batalon is an American actor. Batalon achieved international recognition playing Ned Leeds in five Marvel Cinematic Universe superhero films, beginning with Spider-Man: Homecoming. Cameos in Avengers: Infinity War and Avengers: Endgame, and in Spider-Man: Far From Home and Spider-Man: No Way Home.',
                'DOB'=>'1996-10-09',
                'POB'=>'Honolulu, Hawaii, United States',
                'imageURL'=>'images/Jacob_Batalon.jpg',
                'popularity'=>'100'
            ]
        ]);
    }
}
