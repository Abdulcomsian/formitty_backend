<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Question;
use App\Models\AssessmentTool;
use App\Models\Option;
use App\Models\AssessmentGroup;

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

        // Create questions for questionnaire assessment_tool_idss
        $questionnaireToolIds = AssessmentTool::where([['type', 'questionnaire'],['id' !== 1]])->pluck('id')->toArray();

        foreach ($questionnaireToolIds as $assessmentToolId) {

            for ($i = 0; $i < 5; $i++) {
                $group = AssessmentGroup::create([
                    'assessment_tool_id' => $assessmentToolId,
                    'title' => $faker->sentence,
                ]);

                for ($i = 0; $i < 10; $i++) {
                    $question = Question::create([
                        'assessment_group_id' => $group->id ,
                        'assessment_tool_id' => $assessmentToolId ,
                        'title' => $faker->sentence,
                        'type' => $faker->randomElement(['multiple_choice', 'open_ended']),
                    ]);

                    if ($question->type == 'multiple_choice') {
                        for ($j = 0; $j < 4; $j++) {
                            Option::create([
                                'question_id' => $question->id,
                                'title' => $faker->sentence,
                                'point' => $faker->numberBetween(-4, 4),
                            ]);
                        }
                    }
                }

            }
        }
    }
}
