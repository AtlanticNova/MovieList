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
                'name'=>'Action'
            ],
            [
                'name'=>'Adventure'
            ],
            [
                'name'=>'Horror'
            ],
            [
                'name'=>'Drama'
            ],
            [
                'name'=>'Thriller'
            ],
            [
                'name'=>'Comedy'
            ],
            [
                'name'=>'Science fiction'
            ],
            [
                'name'=>'Documentary'
            ],
            [
                'name'=>'Fantasy'
            ],
            [
                'name'=>'Animation'
            ],
        ]);
    }
}
