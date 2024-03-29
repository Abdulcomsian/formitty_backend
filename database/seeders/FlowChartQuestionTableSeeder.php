<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\FlowchartQuestions;
use App\Models\AssessmentTool;

class FlowChartQuestionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        $flowChartToolIds = AssessmentTool::where('type', 'flow_chart')->pluck('id')->toArray();

        foreach ($flowChartToolIds as $assessmentToolId) {
            for ($i = 0; $i < 1; $i++) {
                $question = FlowchartQuestions::create([
                    'assessment_tool_id' => $assessmentToolId,
                    'title' => $faker->sentence,
                    'parent_id' => null,
                ]);

                $parentQuestion = $question;

                for ($j = 0; $j < 2; $j++) {
                    $childQuestion = FlowchartQuestions::create([
                        'title' => $faker->sentence,
                        'parent_id' => $parentQuestion->id,
                    ]);

                    $parentQuestion = $childQuestion;

                    for ($k = 0; $k < 2; $k++) {
                        $childQuestion = FlowchartQuestions::create([
                            'title' => $faker->sentence,
                            'parent_id' => $parentQuestion->id,
                        ]);

                        $parentQuestion = $childQuestion;

                        for ($l = 0; $l < 2; $l++) {
                            $childQuestion = FlowchartQuestions::create([
                                'title' => $faker->sentence,
                                'parent_id' => $parentQuestion->id,
                            ]);

//                            $parentQuestion = $childQuestion;
                        }
                    }
                }
            }
        }

    }
}