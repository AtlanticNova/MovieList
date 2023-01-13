<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WatchlistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('watchlists')->insert([
            [
                'users_id'=>'1',
                'movies_id'=>'1',
                'status_id'=>'1'

            ],
            [
                'users_id'=>'1',
                'movie_id'=>'3',
                'status_id'=>'2'

            ],
            [
                'users_id'=>'2',
                'movies_id'=>'3',
                'status_id'=>'3'
            ],
            [
                'users_id'=>'2',
                'movies_id'=>'2',
                'status_id'=>'2'
            ],
            [
                'users_id'=>'3',
                'movies_id'=>'1',
                'status_id'=>'1'
            ],
        ]);
    }
}
