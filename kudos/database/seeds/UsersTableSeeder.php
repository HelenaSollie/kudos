<?php

    use Faker\Factory as Faker;

    class UsersTableSeeder extends Seeder {

        public function run() {

            $faker = Faker::create();

            foreach (range(1,20) as $index) {

                Lesson::create([

                        'name'=> $faker->firstName,
                        'avatar'=>$faker->image,
                        'avatar_original'=>$faker->image,
                        'gender'=>$faker->title

                ]);
            }
        }
    }