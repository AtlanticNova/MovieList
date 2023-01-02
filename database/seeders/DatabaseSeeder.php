<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ActorsSeeder::class);
        $this->call(AdminSeeder::class);
        $this->call(GenreSeeder::class);
        $this->call(MovieSeeder::class);
        $this->call(MovieCharacterSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(WatchlistSeeder::class);
        $this->call(MovieGenreSeeder::class);
    }
}
