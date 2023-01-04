<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ActorSeeder extends Seeder
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
            ],
            [
                'name'=>'Narilya Gulmongkolpech',
                'gender'=>'Female',
                'biography'=>"Narilya Gulmongkolpech, nicknamed Yada or Benz, is a Thai actor, singer and model from Bangkok. She is currently pursuing a bachelor's degree in the Faculty of Communication Arts at Rangsit University. Originally named 'Benz' Natthida Trichaiya, she eventually changed it to a more auspicious one.",
                'DOB'=>'2000-03-26',
                'POB'=>'Bangkok, Thailand',
                'imageURL'=>'images/NarilyaGulmongkolpech.jpg',
                'popularity'=>'100'
            ],
            [
                'name'=>'Isabelle Fuhrman',
                'gender'=>'Female',
                'biography'=>'Isabelle Fuhrman is an American actress. She is known for her role as Esther in the horror film Orphan and its prequel Orphan: First Kill. She also portrayed Clove in the dystopian adventure film The Hunger Games, and Alex in the independent film The Novice.',
                'DOB'=>'1997-02-25',
                'POB'=>'Washington, D.C, United States',
                'imageURL'=>'images/IsabelleFuhrman.jpg',
                'popularity'=>'100'
            ],
            [
                'name'=>'Vera Farmiga',
                'gender'=>'Female',
                'biography'=>'Vera Ann Farmiga is an American actress who is best known for portraying paranormal investigator Lorraine Warren in the Conjuring Universe films The Conjuring, The Conjuring 2, Annabelle Comes Home and The Conjuring: The Devil Made Me Do It.',
                'DOB'=>'1973-08-06',
                'POB'=>'Clifton, New Jersey, United States',
                'imageURL'=>'images/VeraFarmiga.jpg',
                'popularity'=>'100'
            ],
            [
                'name'=>'Aryana Engineer',
                'gender'=>'Female',
                'biography'=>'Aryana Engineer is a Canadian actress who made her debut in the 2009 horror film Orphan, as a little girl named Max, alongside Vera Farmiga. In 2012 she starred, alongside Milla Jovovich, as Becky in Resident Evil: Retribution, the fifth film in the franchise.',
                'DOB'=>'2001-03-06',
                'POB'=>'Port Moody, Canada',
                'imageURL'=>'images/AryanaEngineer.jpg',
                'popularity'=>'100'
            ],
            [
                'name'=>'Julia Stiles',
                'gender'=>'Female',
                'biography'=>"Julia O'Hara Stiles is an American actress. Born and raised in New York City, Stiles began acting at the age of 11 as part of New York's La MaMa Experimental Theatre Club.",
                'DOB'=>'1981-03-28',
                'POB'=>'New York, New York, United States',
                'imageURL'=>'images/JuliaStiles.jpg',
                'popularity'=>'100'
            ],
            [
                'name'=>'Matthew Finlan',
                'gender'=>'Male',
                'biography'=>"Matthew Finlan is an actor and writer, known for Frankie Drake Mysteries (2017), Workin' Moms (2017) and The Terror (2018).",
                'DOB'=>'1975-03-29',
                'POB'=>'New York, New York, United States',
                'imageURL'=>'images/MatthewFinlan.jpg',
                'popularity'=>'100'
            ],
            [
                'name'=>'Sonia Alyssa Suryati',
                'gender'=>'Female',
                'biography'=>"Sonia Alyssa Suryati (lahir 5 Desember 1999) adalah seorang model dan pemeran Indonesia. Ia memulai kariernya dari dunia model dengan menjadi finalis pada pemilihan GADIS Sampul di tahun 2015.",
                'DOB'=>'1999-12-05',
                'POB'=>'Indonesia',
                'imageURL'=>'images/SoniaAlyssa.jpg',
                'popularity'=>'100'
            ],
            [
                'name'=>'Caitlin Halderman',
                'gender'=>'Female',
                'biography'=>"Caitlin Thomas Halderman Caniago (lahir 17 Juli 2000) adalah pemeran, model, dan penyanyi berkebangsaan Indonesia. Ia berdarah campuran Belanda-Minangkabau.",
                'DOB'=>'2000-07-17',
                'POB'=>'Indonesia',
                'imageURL'=>'images/CaitlinHalderman.jpg',
                'popularity'=>'100'
            ],
            [
                'name'=>'Junior Roberts',
                'gender'=>'Male',
                'biography'=>"Junior Glenn Roberts is an Indonesian actor and model. He is the younger brother of Cinta Brian. He debuted through the soap opera Best Friends Forever (2017), starring Randy Martin, Cassandra Lee, and Endy Arfian.",
                'DOB'=>'2000-11-09',
                'POB'=>'Jakarta, Indonesia',
                'imageURL'=>'images/JuniorRoberts.jpg',
                'popularity'=>'100'
            ],
            [
                'name'=>'Taskya Namya',
                'gender'=>'Female',
                'biography'=>"Taskya Giantri Namya lahir di Jakarta, 11 Januari 1994. Sebelum dipasangkan dengan Ari Irham, namanya tercatat sudah banyak bermain di berbagai film layar lebar. Film perdana Taskya Giantri adalah Langit ke-7 di tahun 2012 Berperan sebagai pemain utama bernama Dania. Dari situ, Taskya rutin mendapat peran di film setiap tahun.",
                'DOB'=>'1994-01-11',
                'POB'=>'Jakarta, Indonesia',
                'imageURL'=>'images/TaskyaNamya.jpg',
                'popularity'=>'100'
            ],
            [
                'name'=>'Hsuan-yen Tsai',
                'gender'=>'Female',
                'biography'=>"Hsuan-yen Tsai was born on 20 November 1987 in Taiwan. She is an actress, known for Incantation (2022), The Blue Choker (2018) and Shards of Her (2022). She has been married to Jag Huang since 2012. They have one child. BornNovember 20, 1987.",
                'DOB'=>'1987-11-20',
                'POB'=>'Taiwan',
                'imageURL'=>'images/HsuanyenTsai.jpg',
                'popularity'=>'100'
            ],
            [
                'name'=>'Kao Ying-Hsuan',
                'gender'=>'Male',
                'biography'=>"Ying-Hsuan Kao was born on 24 November 1978 in Taipei, Taiwan. He is an actor, known for Lust, Caution (2007), Incantation (2022) and Shuang quan (2013). BornNovember 24, 1978. More at IMDbPro. Contact info.",
                'DOB'=>'1987-11-24',
                'POB'=>'Taipei, Taiwan',
                'imageURL'=>'images/KaoYingHsuan.jpg',
                'popularity'=>'100'
            ],
            [
                'name'=>'Chu Chia-yi',
                'gender'=>'Male',
                'biography'=>"Born in 1992, Chu Chia-yi is a singer, actor and special effects makeup artist. He has started doing special effects makeup since 2007",
                'DOB'=>'1992-01-03',
                'POB'=>'Taipei, Taiwan',
                'imageURL'=>'images/ChuChiayi.jpg',
                'popularity'=>'100'
            ],
        ]);
    }
}
