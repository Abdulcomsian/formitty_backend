<?php

namespace Database\Seeders;

use App\Models\AssessmentGroup;
use App\Models\AssessmentTool;
use App\Models\Option;
use App\Models\Question;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CANSAssessmentToolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker = \Faker\Factory::create();

        $assessment_tool = AssessmentTool::create([
            'title' => 'Care and Needs Scale (CANS)',
            'slug' => 'care-and-needs-scale',
            'type' => 'multiple_choice'
        ]);

        $group1 = AssessmentGroup::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Requires nursing care and/or support or monitoring of severe behavioural/cognitive disabilities and/or assistance with very basic ADLs:',
        ]);

        $group2 = AssessmentGroup::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Required assistance, supervision, direction and/or cueing for basic ADLs:',
        ]);

        $group3 = AssessmentGroup::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Required assistance, supervision, direction and/or cueing for instrumental ADLs and/or social participation:',
        ]);

        $group4 = AssessmentGroup::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Required supports:',
        ]);

        $group5 = AssessmentGroup::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Does not require supports:',
        ]);

        for ($i = 1; $i <= 5; $i++) {
            for ($j = 1; $j <= 10; $j++) {
                $question = Question::create([
                    'assessment_group_id' => $i ,
                    'assessment_tool_id' => $assessment_tool->id ,
                    'title' => $faker->sentence,
                    'type' => $faker->randomElement(['multiple_choice']),
                    'point' => $faker->numberBetween(0, 7),
                ]);

                Option::create([
                    'question_id' => $question->id,
                    'title' => 'Yes',
                    'point' => $faker->numberBetween(-4, 4),
                ]);

                Option::create([
                    'question_id' => $question->id,
                    'title' => 'No',
                    'point' => $faker->numberBetween(-4, 4),
                ]);
            }
        }
    }
}
