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
                'role' => 'user',
                'imageURL'=>'Ahmad_Dani.jpg'
            ],
            [
                'username'=>'Budianto13',
                'email'=>"Budianto@gmail.com",
                'password'=>bcrypt('budi123'),
                'DOB'=>'1996-06-08',
                'phone'=>'081387668786',
                'role' => 'user',
                'imageURL'=>'Budianto.jpg',
            ],
            [
                'username'=>'PeterMarkus',
                'email'=>"peter@gmail.com",
                'password'=>bcrypt('peter123'),
                'DOB'=>'1992-09-14',
                'role' => 'user',
                'phone'=>'081219876495',
                'imageURL'=>'Peter_Markus.jpg'
            ],
            [
                'username'=>'Admin123',
                'email'=>"admin@gmail.com",
                'password'=>bcrypt('admin123'),
                'DOB'=>'1994-12-14',
                'role' => 'admin',
                'phone'=>'081223276495',
                'imageURL'=>NULL
            ],

        ]);
    }
}
