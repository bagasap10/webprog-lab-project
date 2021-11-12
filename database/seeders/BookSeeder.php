<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
            ['name'=>'Leon Teletubbies', 'author'=> 'Dr. Ir. Leong', 'synopsis'=> 'This is a story of 4 teletubbies accompanied by bald yellow smiling Leon as the sun', 'price'=> 50000, 'cover'=>'leonsun.png'],
            ['name'=>'Mein Kampf', 'author'=> 'Adolf Hitler', 'synopsis'=> 'This is a story of a painter who his arts are not accepted by the world and seeks revenge', 'price'=> 720000, 'cover'=>'meinkampf.png'],
            ['name'=>'Ah shoot here we go again', 'author'=> 'lil bap', 'synopsis'=> 'Worst place in the world. Rollin Heights Balla Country. I ain\'t represented Grove Street in five years, but the Ballas won\'t give a shoot.', 'price'=> 69000, 'cover'=>'cjbap.png'],
            ['name'=>'Zakir Turun', 'author'=> 'Naik Zakir', 'synopsis'=> 'Famous for his debate in Islamic tv station, Naik Zakir writes his lifelong struggle to be known as he is today.', 'price'=> 1000000, 'cover'=>'zakirbap.png'],
            ['name'=>'Slenderman', 'author'=> 'Faze', 'synopsis'=> 'A tall bald white figure stands in Faiz\'s bed as he stares into Faiz eyes deep into his soul.', 'price'=> 42000, 'cover'=>'faizatnight.png'],
            ['name'=>'Legion', 'author'=> 'Titanfall', 'synopsis'=> 'A titan and its pilot fight in a war, war never changes.', 'price'=> 200000, 'cover'=>'legion.png'],
            ['name'=>'Optimum Pride', 'author'=> 'Pootank Eena', 'synopsis'=> 'UGHH AGHH AGHHHH AGHHHH AGHHHHH', 'price'=> 500000, 'cover'=>'optimumpride.png'],
            ['name'=>'HMMMM', 'author'=> 'Red Guy', 'synopsis'=> 'Sorry for what? Our daddy told us not to be shame of ourselves', 'price'=> 69420, 'cover'=>'hmmmm.png'],
            ['name'=>'The Smurfs', 'author'=> 'JUWEX', 'synopsis'=> 'Blue creatures lives in a mushroom, building a community of smurfs', 'price'=> 100000, 'cover'=>'smurfwex.png'],
            ['name'=>'Semarangans', 'author'=> 'Ol Bap', 'synopsis'=> 'I have been living in Semarang, let me tell you up and down living in a coast below a mountain.', 'price'=> 22000, 'cover'=>'oldbap.png'],
            ['name'=>'Kafkaesque', 'author'=> 'Franz Kafka', 'synopsis'=> 'Franz Kafka was a German-speaking Bohemian novelist and short-story writer, widely regarded as one of the major figures of 20th-century literature.', 'price'=> 1883000, 'cover'=>'kafka.png'],
            ['name'=>'Family', 'author'=> 'Dom Cornetto', 'synopsis'=> 'It\'s been a long day without you, my friend. And I\'ll tell you all about it when I see you again', 'price'=> 900000, 'cover'=>'family.png'],
            ['name'=>'ASTROWORLD', 'author'=> 'Travis Scott', 'synopsis'=> 'At least eight people are dead and many others injured after a crowd surged forward toward a stage at the Astroworld Festival in Houston on Friday night.', 'price'=> 420000, 'cover'=>'travis.png'],
            ['name'=>'Certified Lover Boy', 'author'=> 'Drake', 'synopsis'=> 'Say that you a lesbian, girl, me too', 'price'=> 50000, 'cover'=>'drizzy.png'],
            ['name'=>'Dragon Drip', 'author'=> 'GOKU', 'synopsis'=> 'Frieza took the seventh Jordan 1, Saiyans try to claim it back using the power of Supreme X North Face jacket.', 'price'=> 100000000, 'cover'=>'drip.png'],
        ];
        DB::table('books')->insert($data); // Query Builder approach
    }
}
