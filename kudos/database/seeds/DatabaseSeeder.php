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
        ));

        DB::table('compliments')->insert(array(
            array('zender_id'=>'1', 'ontvanger_id'=>'3', 'body'=>'Je ziet er goed uit vandaag!'),
        ));
    }
}
