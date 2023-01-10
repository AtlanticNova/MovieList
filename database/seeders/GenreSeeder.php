<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('genres')->insert([
            [
                //1
                'name'=>'Action'
            ],
            [
                //2
                'name'=>'Adventure'
            ],
            [
                //3
                'name'=>'Horror'
            ],
            [
                //4
                'name'=>'Drama'
            ],
            [
                //5
                'name'=>'Thriller'
            ],
            [
                //6
                'name'=>'Melodrama'
            ],
            [
                //7
                'name'=>'Romance'
            ],
            [
                //8
                'name'=>'Documentary'
            ],
            [
                //9
                'name'=>'Fantasy'
            ],
            [
                //10
                'name'=>'Mystery'
            ],
            [
                //11
                'name'=>'Crime'
            ],
        ]);
    }
}
