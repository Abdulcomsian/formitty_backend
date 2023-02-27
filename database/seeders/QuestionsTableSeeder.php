<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Question;
use App\Models\AssessmentTool;
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
        $faker = \Faker\Factory::create();

        // Create questions for questionnaire assessment_tool_id
        $questionnaireToolIds = AssessmentTool::where('type', 'questionnaire')->pluck('id')->toArray();

        foreach ($questionnaireToolIds as $assessmentToolId) {
            for ($i = 0; $i < 10; $i++) {
                $question = Question::create([
                    'assessment_tool_id' => $assessmentToolId,
                    'title' => $faker->sentence,
                    'type' => $faker->randomElement(['multiple_choice', 'open_ended']),
                ]);
            }

            // Add options for multiple_choice questions
            if ($question->type == 'multiple_choice') {
                for ($j = 0; $j < 4; $j++) {
                    Option::create([
                        'question_id' => $question->id,
                        'title' => $faker->sentence,
                    ]);
                }
            }
        }
/*        for ($i = 0; $i < 400; $i++) {
            Question::create([
                'assessment_tool_id' => $faker->numberBetween(1, 40),
                'title' => $faker->sentence,
                'type' => $faker->randomElement(['multiple_choice', 'open_ended']),
            ]);
        }*/

       /* for ($i = 0; $i < 4000; $i++) {
            Option::create([
                'question_id' => $faker->numberBetween(1, 400),
                'title' => $faker->sentence,
            ]);
        }*/
    }
}
