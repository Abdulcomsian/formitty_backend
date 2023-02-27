<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Question;
use App\Models\Option;

class QuestionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*$faker = \Faker\Factory::create();

        for ($i = 0; $i < 100; $i++) {

            $type = $faker->randomElement(['question', 'option']);

            if($i<=15){
                $type = 'question';
            } else{
                $type = 'option';
            }

            if($type == 'option') {
                $parent_id = $faker->numberBetween(1, 15);
            } else {
                $parent_id = null;
            }

            Question::create([
                'assessment_tool_id' => $faker->numberBetween(1, 6),
                'title' => $faker->sentence,
                'type' => $type,
                'parent_id' => $parent_id
            ]);
        }*/
        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 400; $i++) {
            Question::create([
                'assessment_tool_id' => $faker->numberBetween(1, 40),
                'title' => $faker->sentence,
                'type' => $faker->randomElement(['multiple_choice', 'open_ended']),
            ]);
        }

        for ($i = 0; $i < 4000; $i++) {
            Option::create([
                'question_id' => $faker->numberBetween(1, 400),
                'title' => $faker->sentence,
            ]);
        }
    }
}
