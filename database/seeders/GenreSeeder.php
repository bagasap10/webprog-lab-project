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
        $data = [
            ['name'=>'kids'],
            ['name'=>'biography'],
            ['name'=>'horror'],
            ['name'=>'fiction'],
            ['name'=>'comedy'],
            ['name'=>'romance'],
            ['name'=>'autobiography'],
            ['name'=>'religion'],
            ['name'=>'war'],
            ['name'=>'adult'],
        ];

        DB::table('genres')->insert($data); // Query Builder approach
    }
}
