<?php

namespace Database\Seeders;

use App\Models\BookGenre;
use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(GenreSeeder::class);
        $this->call(BookSeeder::class);
        $this->call(BookGenreSeeder::class);
        $this->call(RoleSeeder::class);
    }
}
