<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['name'=>'BOOK1', 'author'=> '', 'synopsis'=> '', 'price'=> 100, 'cover'=>'NamaFilenya1.png'],
            ['name'=>'BOOK2', 'author'=> '', 'synopsis'=> '', 'price'=> 100, 'cover'=>'NamaFilenya2.png'],
            ['name'=>'BOOK3', 'author'=> '', 'synopsis'=> '', 'price'=> 100, 'cover'=>'NamaFilenya3.png'],
            //...
        ];
        DB::table('books')->insert($data);
    }
}
