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
                'imageURL'=>'Tom_Holland.jpg',
                'popularity'=>'100'
            ],
            [
                'name'=>'Zendaya Maree Stoermer Coleman',
                'gender'=>'Female',
                'biography'=>'Zendaya Maree Stoermer Coleman is an American actress and singer. She has received various accolades, including two Primetime Emmy Awards. Time magazine named her one of the 100 most influential people in the world on its annual list in 2022.',
                'DOB'=>'1996-09-01',
                'POB'=>'Oakland, California, United States',
                'imageURL'=>'Zendaya_Maree.jpg',
                'popularity'=>'100'
            ],
            [
                'name'=>'Jacob Batalon',
                'gender'=>'Male',
                'biography'=>'Jacob Batalon is an American actor. Batalon achieved international recognition playing Ned Leeds in five Marvel Cinematic Universe superhero films, beginning with Spider-Man: Homecoming. Cameos in Avengers: Infinity War and Avengers: Endgame, and in Spider-Man: Far From Home and Spider-Man: No Way Home.',
                'DOB'=>'1996-10-09',
                'POB'=>'Honolulu, Hawaii, United States',
                'imageURL'=>'Jacob_Batalon.jpg',
                'popularity'=>'100'
            ],
            [
                'name'=>'Narilya Gulmongkolpech',
                'gender'=>'Female',
                'biography'=>"Narilya Gulmongkolpech, nicknamed Yada or Benz, is a Thai actor, singer and model from Bangkok. She is currently pursuing a bachelor's degree in the Faculty of Communication Arts at Rangsit University. Originally named 'Benz' Natthida Trichaiya, she eventually changed it to a more auspicious one.",
                'DOB'=>'2000-03-26',
                'POB'=>'Bangkok, Thailand',
                'imageURL'=>'NarilyaGulmongkolpech.jpg',
                'popularity'=>'100'
            ],
            [
                'name'=>'Isabelle Fuhrman',
                'gender'=>'Female',
                'biography'=>'Isabelle Fuhrman is an American actress. She is known for her role as Esther in the horror film Orphan and its prequel Orphan: First Kill. She also portrayed Clove in the dystopian adventure film The Hunger Games, and Alex in the independent film The Novice.',
                'DOB'=>'1997-02-25',
                'POB'=>'Washington, D.C, United States',
                'imageURL'=>'IsabelleFuhrman.jpg',
                'popularity'=>'100'
            ],
            [
                'name'=>'Vera Farmiga',
                'gender'=>'Female',
                'biography'=>'Vera Ann Farmiga is an American actress who is best known for portraying paranormal investigator Lorraine Warren in the Conjuring Universe films The Conjuring, The Conjuring 2, Annabelle Comes Home and The Conjuring: The Devil Made Me Do It.',
                'DOB'=>'1973-08-06',
                'POB'=>'Clifton, New Jersey, United States',
                'imageURL'=>'VeraFarmiga.jpg',
                'popularity'=>'100'
            ],
            [
                'name'=>'Aryana Engineer',
                'gender'=>'Female',
                'biography'=>'Aryana Engineer is a Canadian actress who made her debut in the 2009 horror film Orphan, as a little girl named Max, alongside Vera Farmiga. In 2012 she starred, alongside Milla Jovovich, as Becky in Resident Evil: Retribution, the fifth film in the franchise.',
                'DOB'=>'2001-03-06',
                'POB'=>'Port Moody, Canada',
                'imageURL'=>'AryanaEngineer.jpg',
                'popularity'=>'100'
            ],
            [
                'name'=>'Julia Stiles',
                'gender'=>'Female',
                'biography'=>"Julia O'Hara Stiles is an American actress. Born and raised in New York City, Stiles began acting at the age of 11 as part of New York's La MaMa Experimental Theatre Club.",
                'DOB'=>'1981-03-28',
                'POB'=>'New York, New York, United States',
                'imageURL'=>'JuliaStiles.jpg',
                'popularity'=>'100'
            ],
            [
                'name'=>'Matthew Finlan',
                'gender'=>'Male',
                'biography'=>"Matthew Finlan is an actor and writer, known for Frankie Drake Mysteries (2017), Workin' Moms (2017) and The Terror (2018).",
                'DOB'=>'1975-03-29',
                'POB'=>'New York, New York, United States',
                'imageURL'=>'MatthewFinlan.jpg',
                'popularity'=>'100'
            ],
            [
                'name'=>'Sonia Alyssa Suryati',
                'gender'=>'Female',
                'biography'=>"Sonia Alyssa Suryati (lahir 5 Desember 1999) adalah seorang model dan pemeran Indonesia. Ia memulai kariernya dari dunia model dengan menjadi finalis pada pemilihan GADIS Sampul di tahun 2015.",
                'DOB'=>'1999-12-05',
                'POB'=>'Indonesia',
                'imageURL'=>'SoniaAlyssa.jpg',
                'popularity'=>'100'
            ],
            [
                'name'=>'Caitlin Halderman',
                'gender'=>'Female',
                'biography'=>"Caitlin Thomas Halderman Caniago (lahir 17 Juli 2000) adalah pemeran, model, dan penyanyi berkebangsaan Indonesia. Ia berdarah campuran Belanda-Minangkabau.",
                'DOB'=>'2000-07-17',
                'POB'=>'Indonesia',
                'imageURL'=>'CaitlinHalderman.jpg',
                'popularity'=>'100'
            ],
            [
                'name'=>'Junior Roberts',
                'gender'=>'Male',
                'biography'=>"Junior Glenn Roberts is an Indonesian actor and model. He is the younger brother of Cinta Brian. He debuted through the soap opera Best Friends Forever (2017), starring Randy Martin, Cassandra Lee, and Endy Arfian.",
                'DOB'=>'2000-11-09',
                'POB'=>'Jakarta, Indonesia',
                'imageURL'=>'JuniorRoberts.jpg',
                'popularity'=>'100'
            ],
            [
                'name'=>'Taskya Namya',
                'gender'=>'Female',
                'biography'=>"Taskya Giantri Namya lahir di Jakarta, 11 Januari 1994. Sebelum dipasangkan dengan Ari Irham, namanya tercatat sudah banyak bermain di berbagai film layar lebar. Film perdana Taskya Giantri adalah Langit ke-7 di tahun 2012 Berperan sebagai pemain utama bernama Dania. Dari situ, Taskya rutin mendapat peran di film setiap tahun.",
                'DOB'=>'1994-01-11',
                'POB'=>'Jakarta, Indonesia',
                'imageURL'=>'TaskyaNamya.jpg',
                'popularity'=>'100'
            ],
            [
                'name'=>'Hsuan-yen Tsai',
                'gender'=>'Female',
                'biography'=>"Hsuan-yen Tsai was born on 20 November 1987 in Taiwan. She is an actress, known for Incantation (2022), The Blue Choker (2018) and Shards of Her (2022). She has been married to Jag Huang since 2012. They have one child. BornNovember 20, 1987.",
                'DOB'=>'1987-11-20',
                'POB'=>'Taiwan',
                'imageURL'=>'HsuanyenTsai.jpg',
                'popularity'=>'100'
            ],
            [
                'name'=>'Kao Ying-Hsuan',
                'gender'=>'Male',
                'biography'=>"Ying-Hsuan Kao was born on 24 November 1978 in Taipei, Taiwan. He is an actor, known for Lust, Caution (2007), Incantation (2022) and Shuang quan (2013). BornNovember 24, 1978. More at IMDbPro. Contact info.",
                'DOB'=>'1987-11-24',
                'POB'=>'Taipei, Taiwan',
                'imageURL'=>'KaoYingHsuan.jpg',
                'popularity'=>'100'
            ],
            [
                'name'=>'Sean Lin',
                'gender'=>'Male',
                'biography'=>"About. Sean Lin is a Taiwanese actor and TV personality who was born on September 7, 1990. He made his debut in 2016, when he appeared in the movies “Loser Family” and “The Tenants Downstairs.” More recently, he has appeared in the 2019 movie “Love the Way You Are” and the drama series and “Lost Romance” (2020).",
                'DOB'=>'1990-09-07',
                'POB'=>'Taipei, Taiwan',
                'imageURL'=>'SeanLin.jpg',
                'popularity'=>'100'
            ],
            [
                'name'=>'Millie Bobby Brown',
                'gender'=>'Female',
                'biography'=>"Millie Bobby Brown is a British actress and producer. She gained recognition for playing Eleven in the Netflix science fiction series Stranger Things, for which she received nominations for two Primetime Emmy Awards. Brown has starred in the monster film Godzilla: King of the Monsters and its sequel Godzilla vs. Kong.",
                'DOB'=>'2004-02-19',
                'POB'=>'Marbella, Spain',
                'imageURL'=>'MillieBobbyBrown.jpg',
                'popularity'=>'100'
            ],
            [
                'name'=>'Henry Cavill',
                'gender'=>'Male',
                'biography'=>"Henry William Dalgliesh Cavill is a British actor. He is known for his portrayal of Charles Brandon in Showtime's The Tudors, DC Comics character Superman in the DC Extended Universe, Geralt of Rivia in the Netflix fantasy series The Witcher, and Sherlock Holmes in the Netflix film Enola Holmes and its 2022 sequel.",
                'DOB'=>'1983-05-05',
                'POB'=>'Saint Helier, Jersey',
                'imageURL'=>'HenryCavill.jpg',
                'popularity'=>'100'
            ],
            [
                'name'=>'Louis Partridge',
                'gender'=>'Male',
                'biography'=>"Louis Partridge is an English actor of film and television. He started his acting career in small roles in short films such as Beneath Water and About a Dog.",
                'DOB'=>'2003-06-03',
                'POB'=>'London, United Kingdom',
                'imageURL'=>'LouisPartridge.jpg',
                'popularity'=>'100'
            ],
            [
                'name'=>'Byeon Woo-seok',
                'gender'=>'Male',
                'biography'=>"Byeon Woo-seok is a South Korean actor and model. He is known for his roles in Live Up to Your Name, Flower Crew: Joseon Marriage Agency, Search: WWW, Record of Youth, and Moonshine, also gained widespread recognition for his leading role in the film 20th Century Girl.",
                'DOB'=>'1991-10-31',
                'POB'=>'Seoul, South Korea',
                'imageURL'=>'ByeonWooSeok.jpg',
                'popularity'=>'100'
            ],
            [
                'name'=>'Kim Yoo-Jung',
                'gender'=>'Female',
                'biography'=>"Kim Yoo-jung is a South Korean actress. She debuted as a model for a confectionery brand at the age of four.",
                'DOB'=>'1999-09-22',
                'POB'=>'Geumho-dong',
                'imageURL'=>'KimYooJung.jpg',
                'popularity'=>'100'
            ],
            [
                'name'=>'Park Jung-Woo',
                'gender'=>'Male',
                'biography'=>"Park Jung-woo is a South Korean actor.",
                'DOB'=>'1996-01-19',
                'POB'=>'South Korea',
                'imageURL'=>'ParkJungWoo.jpg',
                'popularity'=>'100'
            ],
            [
                'name'=>'Zac Efron',
                'gender'=>'Male',
                'biography'=>"Zachary David Alexander Efron is an American actor. He began acting professionally in the early 2000s and rose to prominence in the late 2000s for his leading role as Troy Bolton in the High School Musical trilogy. During this time, he also starred in the musical film Hairspray and the comedy film 17 Again.",
                'DOB'=>'1987-10-18',
                'POB'=>'California, United States',
                'imageURL'=>'ZacEfron.jpg',
                'popularity'=>'100'
            ],
            [
                'name'=>'Taylor Schilling',
                'gender'=>'Female',
                'biography'=>"Taylor Jane Schilling is an American actress. She is known for her role as Piper Chapman on the Netflix original comedy-drama series Orange Is the New Black, for which she received a nomination for the",
                'DOB'=>'1984-07-27',
                'POB'=>'Massachusetts, United States',
                'imageURL'=>'TaylorSchilling.jpg',
                'popularity'=>'100'
            ],
            [
                'name'=>'Blythe Danner',
                'gender'=>'Female',
                'biography'=>"Blythe Katherine Danner is an American actress. Accolades she has received include two Primetime Emmy Awards for Best Supporting Actress in a Drama Series for her role as Izzy Huffstodt on Huff, and a Tony Award for Best Actress for her performance in Butterflies Are Free on Broadway.",
                'DOB'=>'1943-02-03',
                'POB'=>'Pennsylvania, United States',
                'imageURL'=>'BlytheDanner.jpg',
                'popularity'=>'100'
            ],
            [
                'name'=>'Ana de Armas',
                'gender'=>'Female',
                'biography'=>"Ana Celia de Armas Caso is a Cuban and Spanish actress. She began her career in Cuba and had a leading role in the romantic drama Una rosa de Francia. At age 18, she moved to Madrid, Spain, and starred in the popular drama El internado for six seasons from 2007 to 2010.",
                'DOB'=>'1988-04-30',
                'POB'=>'Havana, Cuba',
                'imageURL'=>'AnadeArmas.jpg',
                'popularity'=>'100'
            ],
            [
                'name'=>'Adriend Brody',
                'gender'=>'Male',
                'biography'=>"Adrien Nicholas Brody is an American actor. He received widespread recognition and acclaim after starring as Władysław Szpilman in Roman Polanski's The Pianist, for which he won the Academy Award for Best Actor at age 29, becoming the youngest actor to win in that category.",
                'DOB'=>'1973-04-14',
                'POB'=>'New York, United States',
                'imageURL'=>'AdriendBrody.jpg',
                'popularity'=>'100'
            ],
            [
                'name'=>'Sara Paxton',
                'gender'=>'Female',
                'biography'=>"Sara Paxton is an American actress, voice artist, and singer. She began acting at an early age, appearing in minor roles in both films and television shows, before rising to fame in 2004, after playing the title role in the television series Darcy's Wild Life and Sarah Borden in Summerland.",
                'DOB'=>'1988-04-25',
                'POB'=>'New York, United States',
                'imageURL'=>'SaraPaxton.jpg',
                'popularity'=>'100'
            ],
            [
                'name'=>'Sirani Yankittikan',
                'gender'=>'Female',
                'biography'=>"Sirani Yankittikan is known for The Medium (2021).",
                'DOB'=>'1967-05-13',
                'POB'=>'Taipei, Taiwan',
                'imageURL'=>'SiraniYankittikan.jpg',
                'popularity'=>'100'
            ],
            [
                'name'=>'Sawanee Utoomma',
                'gender'=>'Female',
                'biography'=>"Sawanee Utoomma is a performer, theatre director and playwright. Sawanee became particularly well-known for her role in the award-winning 2021 Thai-Korean horror film 'The Medium' for which she won Best Supporting Actress at the 30th Suphannahong National Film Awards.",
                'DOB'=>'1977-09-26',
                'POB'=>'Taipei, Taiwan',
                'imageURL'=>'SawaneeUtoomma.jpg',
                'popularity'=>'100'
            ],
        ]);
    }
}
