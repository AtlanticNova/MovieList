<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('movies')->insert([
            [
                'title'=>'Spider-Man: Homecoming',
                'description'=>"Peter Parker tries to stop the Vulture from selling weapons made with advanced Chitauri technology while trying to balance his life as an ordinary high school student.",
                'actor'=>'Jacob',
                'director'=>'Jon Watts',
                'releaseDate'=>'2017-07-07',
                'imageThumbnail'=>'images/SpiderMan_Homecoming.jpg',
                'background'=>'Spider-Man: Homecoming is a 2017 American superhero film based on the Marvel Comics character Spider-Man, co-produced by Columbia Pictures and Marvel Studios, and distributed by Sony Pictures Releasing.',
            ],
            [
                'title'=>'Spider-Man: Far from Home',
                'description'=>"Peter Parker, the beloved superhero Spider-Man, faces four destructive elemental monsters while on holiday in Europe. Soon, he receives help from Mysterio, a fellow hero with mysterious origins.",
                'actor'=>'Zendaya',
                'director'=>'Jon Watts',
                'releaseDate'=>'2019-06-03',
                'imageThumbnail'=>'images/SpiderMan_FarfromHome.jpg',
                'background'=>'Spider-Man: Far From Home is a 2019 American superhero film based on the Marvel Comics character Spider-Man, co-produced by Columbia Pictures and Marvel Studios, and distributed by Sony Pictures Releasing.',
            ],
            [
                'title'=>'Spider-Man: No Way Home',
                'description'=>"Spider-Man seeks the help of Doctor Strange to forget his exposed secret identity as Peter Parker. However, Strange's spell goes horribly wrong, leading to unwanted guests entering their universe.",
                'actor'=>'Tom Holland',
                'director'=>'Jon Watts',
                'releaseDate'=>'2021-12-13',
                'imageThumbnail'=>'images/SpiderMan_NoWayHome.jpg',
                'background'=>'Spider-Man: No Way Home is a 2021 American superhero film based on the Marvel Comics character Spider-Man, co-produced by Columbia Pictures and Marvel Studios and distributed by Sony Pictures Releasing.',
            ],
        ]);
    }
}
