<?php

use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
        public function run()
    {
        DB::table('users')->insert(array(
            array('name'=>'Matthias Sollie','avatar'=>'https://scontent-bru2-1.xx.fbcdn.net/v/t1.0-9/22852900_1444272825686184_4471154959038475189_n.jpg?oh=338c24ab52ab5f6497649f95a699983d&oe=5A61F793'),
            array('name'=>'Simon Van Herzele','avatar'=>'https://scontent-bru2-1.xx.fbcdn.net/v/t1.0-9/19905071_1795919043757896_2996918637583755475_n.jpg?oh=8f3a9a9d612cbff7538408ecf08276e2&oe=5AA55B5F'),
            array('name'=>'Caroline Boeykens','avatar'=>'https://scontent-bru2-1.xx.fbcdn.net/v/t1.0-9/22045796_10207837686498624_2299298734263816016_n.jpg?oh=afefd3fe8b8fe3f66ce9e6935c46f2b5&oe=5A9E1076'),
            array('name' =>'Max Vranken', 'avatar' => 'https://scontent-bru2-1.xx.fbcdn.net/v/t1.0-9/18952548_10211430851718351_1309476494644310528_n.jpg?oh=911e866ae6e6504d459aae21217d0406&oe=5AAAB825'),
            array('name' => 'Freya Claeys', 'avatar' => 'https://scontent-bru2-1.xx.fbcdn.net/v/t1.0-9/22046863_1493102444076715_480912414794487690_n.jpg?oh=fdca03a5e4ec9b8764e07a8af5c23c69&oe=5AA90A5E'),
            array('name' => 'Silke Massa', 'avatar' => 'https://scontent-bru2-1.xx.fbcdn.net/v/t1.0-9/21765227_1493077497405484_6354473367430726232_n.jpg?oh=c0016cdec69fe9ba7741785b1f75447c&oe=5A6FB591'),


        ));

        DB::table('compliments')->insert(array(
            array('zender_id'=>'7', 'ontvanger_id'=>'3', 'body'=>'Je ziet er goed uit vandaag!'),
            array('zender_id'=>'7', 'ontvanger_id'=>'5', 'body'=>'Echt een toffe foto op Instagram!'),
            array('zender_id'=>'7', 'ontvanger_id'=>'2', 'body'=>'Het etentje gisteren was zeer geslaagd!'),
            array('zender_id'=>'5', 'ontvanger_id'=>'7', 'body'=>'Je hebt goed gewerkt aan de nieuwe opdracht!'),
            array('zender_id'=>'2', 'ontvanger_id'=>'7', 'body'=>'Knappe outfit'),
            array('zender_id'=>'1', 'ontvanger_id'=>'7', 'body'=>'Nogmaals bedankt voor dat stukje cake!'),

        ));
    }
}
