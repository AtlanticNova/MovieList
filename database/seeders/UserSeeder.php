<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'username'=>'AhmadDani',
                'email'=>"Ahmad@gmail.com",
                'password'=>bcrypt('ahmad123'),
                'DOB'=>'2000-08-02',
                'phone'=>'081319868735',
                'imageURL'=>'images/AhmadDani.jpg'
            ],
            [
                'username'=>'Budianto13',
                'email'=>"Budianto@gmail.com",
                'password'=>bcrypt('budi123'),
                'DOB'=>'1996-06-08',
                'phone'=>'081387668786',
                'imageURL'=>'images/Budianto.jpg',
            ],
            [
                'username'=>'PeterMarkus',
                'email'=>"peter@gmail.com",
                'password'=>bcrypt('peter123'),
                'DOB'=>'1992-09-14',
                'phone'=>'081219876495',
                'imageURL'=>'images/PeterMarkus.jpg'
            ]
        ]);
    }
}
