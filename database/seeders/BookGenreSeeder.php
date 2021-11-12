<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookGenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['bookid' => 1, 'genre_id' => 1],
            ['bookid' => 1, 'genre_id' => 6],
            ['bookid' => 2, 'genre_id' => 2],
            ['bookid' => 2, 'genre_id' => 4],
            ['bookid' => 3, 'genre_id' => 2],
            ['bookid' => 3, 'genre_id' => 6],
            ['bookid' => 4, 'genre_id' => 2],
            ['bookid' => 4, 'genre_id' => 8],
            ['bookid' => 5, 'genre_id' => 4],
            ['bookid' => 5, 'genre_id' => 5],
            ['bookid' => 6, 'genre_id' => 5],
            ['bookid' => 6, 'genre_id' => 9],
            ['bookid' => 7, 'genre_id' => 6],
            ['bookid' => 7, 'genre_id' => 1],
            ['bookid' => 8, 'genre_id' => 7],
            ['bookid' => 8, 'genre_id' => 6],
            ['bookid' => 9, 'genre_id' => 1],
            ['bookid' => 9, 'genre_id' => 6],
            ['bookid' => 10, 'genre_id' => 3],
            ['bookid' => 10, 'genre_id' => 6],
            ['bookid' => 11, 'genre_id' => 2],
            ['bookid' => 11, 'genre_id' => 4],
            ['bookid' => 12, 'genre_id' => 2],
            ['bookid' => 12, 'genre_id' => 5],
            ['bookid' => 12, 'genre_id' => 6],
            ['bookid' => 13, 'genre_id' => 6],
            ['bookid' => 13, 'genre_id' => 10],
            ['bookid' => 14, 'genre_id' => 6],
            ['bookid' => 14, 'genre_id' => 1],
            ['bookid' => 14, 'genre_id' => 7],
            ['bookid' => 13, 'genre_id' => 1],
            ['bookid' => 13, 'genre_id' => 6],
        ];

        DB::table('book_genres')->insert($data); // Query Builder approach
    }
}
