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
                'director'=>'Jon Watts',
                'releaseDate'=>'2017-07-07',
                'imageThumbnail'=>'images/SpiderMan_Homecoming.jpg',
                'background'=>'images/Spiderman_Homecoming_bg.jpg',
            ],
            [
                'title'=>'Spider-Man: Far from Home',
                'description'=>"Peter Parker, the beloved superhero Spider-Man, faces four destructive elemental monsters while on holiday in Europe. Soon, he receives help from Mysterio, a fellow hero with mysterious origins.",
                'director'=>'Jon Watts',
                'releaseDate'=>'2019-06-03',
                'imageThumbnail'=>'images/SpiderMan_FarfromHome.jpg',
                'background'=>'images/Spiderman_FarfromHome_bg.jpg',
            ],
            [
                'title'=>'Spider-Man: No Way Home',
                'description'=>"Spider-Man seeks the help of Doctor Strange to forget his exposed secret identity as Peter Parker. However, Strange's spell goes horribly wrong, leading to unwanted guests entering their universe.",
                'director'=>'Jon Watts',
                'releaseDate'=>'2021-12-13',
                'imageThumbnail'=>'images/SpiderMan_NoWayHome.jpg',
                'background'=>'images/SpiderMan_NoWayHome_bg.jpg',
            ],
            [
                'title'=>'The Medium',
                'description'=>'In the Isan region of Thailand, a shaman realizes that his nephew has been possessed. However, the goddess that appears to have taken possession turns out not be as benevolent as she first appears.',
                'director'=>'Banjong Pisanthanakun',
                'releaseDate'=>'2021-10-20',
                'imageThumbnail'=>'images/TheMedium',
                'background'=>'images/TheMedium_bg.jpg'
            ],
            [
                'title'=>'Orphan',
                'description'=>'After losing their baby, a couple adopt a nine-year-old girl. However, they soon make a troubling discovery about her mysterious past and uncover several traits of her disturbing personality.',
                'director'=>'Jaume Collet-Serra',
                'releaseDate'=>'2009-07-24',
                'imageThumbnail'=>'images/Orphan.jpg',
                'background'=>'images/Orphan_bg.jpg'
            ],
            [
                'title'=>'Orphan: First Kill',
                'description'=>'After escaping from a psychiatric facility in Estonia, Esther travels to America by impersonating the missing daughter of a wealthy family. Yet, an unexpected twist arises that pits her against a mother who will protect her family at any cost.',
                'director'=>'William Brent Bell',
                'releaseDate'=>'2022-08-31',
                'imageThumbnail'=>'images/OrphanFirstKill.jpg',
                'background'=>'images/OrphanFirstKill_bg.jpg'
            ],
            [
                'title'=>'Ivanna',
                'description'=>"Ambar and his family are terrorised when they celebrate Lebaran in the Bandung area. Ambar, a beautiful young woman who has limited vision, is able to see things that other people can't see.",
                'director'=>'Kimo Stamboel',
                'releaseDate'=>'2022-07-14',
                'imageThumbnail'=>'images/Ivanna.jpg',
                'background'=>'images/Ivanna_bg.jpg'
            ],
            [
                'title'=>'Incantation',
                'description'=>'Six years ago, Li Ronan is cursed after breaking a religious taboo; now, she must protect her daughter from the consequences of her actions.',
                'director'=>'Kevin Ko',
                'releaseDate'=>'2022-03-18',
                'imageThumbnail'=>'images/Incantation.jpg',
                'background'=>'images/Incantation_bg.jpg'
            ],
            [
                'title'=>'Blonde',
                'description'=>'A look at the rise to fame and the epic demise of actress Marilyn Monroe, one of the biggest stars in the world.',
                'director'=>'Andrew Dominik',
                'releaseDate'=>'2022-09-16',
                'imageThumbnail'=>'images/Blonde.jpg',
                'background'=>'images/Blonde_bg.jpg'
            ],
            [
                'title'=>'Enola Holmes',
                'description'=>'While searching for her missing mother, intrepid teen Enola Holmes uses her sleuthing skills to outsmart big brother Sherlock and help a runaway lord.',
                'director'=>'Harry Bradbeer',
                'releaseDate'=>'2020-09-23',
                'imageThumbnail'=>'images/EnolaHolmes.jpg',
                'background'=>'images/EnolaHolmes_bg.jpg'
            ],
            [
                'title'=>'Enola Holmes 2',
                'description'=>"Enola Holmes takes on her first case as a detective, but to unravel the mystery of a missing girl, she'll need some help from friends -- and brother Sherlock.",
                'director'=>'Harry Bradebeer',
                'releaseDate'=>'2022-10-27',
                'imageThumbnail'=>'images/EnolaHolmes2.jpg',
                'background'=>'images/EnolaHolmes2__bg.jpg'
            ],
            [
                'title'=>'20th Century Girl',
                'description'=>'A teen girl has her eyes set on a boy for her lovesick best friend. However, things become complicated when she falls in love and is forced to choose between love and friendship.',
                'director'=>'Bang Woo-ri',
                'releaseDate'=>'2022-10-06',
                'imageThumbnail'=>'images/20thCenturyGirl.jpg',
                'background'=>'images/20thCenturyGirl_bg.jpg'
            ],
            [
                'title'=>'The Lucky One',
                'description'=>'After returning from the Iraq war, a lonely and dejected Marine tries to track down a woman who he believed was his lucky charm. While staying with her family, he finally finds peace.',
                'director'=>'Scott Hicks',
                'releaseDate'=>'2012-04-20',
                'imageThumbnail'=>'images/TheLuckyOne.jpg',
                'background'=>'images/TheLuckyOne_bg.jpg'
            ],
            // [
            //     'title'=>'',
            //     'description'=>'',
            //     'director'=>'',
            //     'releaseDate'=>'',
            //     'imageThumbnail'=>'images/.jpg',
            //     'background'=>'images/.jpg'
            // ],
        ]);
    }
}
