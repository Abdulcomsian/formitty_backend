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
            'type' => 'questionnaire'
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

        $question1 = Question::create([
            'assessment_group_id' => $group1->id,
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Tracheostromy management',
            'type' => 'multiple_choice',
        ]);

        Option::create([
            'question_id' => $question1->id,
            'title' => 'Yes',
        ]);

        Option::create([
            'question_id' => $question1->id,
            'title' => 'No',
        ]);

        $question2 = Question::create([
            'assessment_group_id' => $group1->id,
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Nasogastric/PEG feeding',
            'type' => 'multiple_choice',
        ]);

        Option::create([
            'question_id' => $question2->id,
            'title' => 'Yes',
        ]);

        Option::create([
            'question_id' => $question2->id,
            'title' => 'No',
        ]);

        $question3 = Question::create([
            'assessment_group_id' => $group1->id,
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Bed mobility (e.g., turning)',
            'type' => 'multiple_choice',
        ]);

        Option::create([
            'question_id' => $question3->id,
            'title' => 'Yes',
        ]);

        Option::create([
            'question_id' => $question3->id,
            'title' => 'No',
        ]);

        $question4 = Question::create([
            'assessment_group_id' => $group1->id,
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Wanders/gets lost',
            'type' => 'multiple_choice',
            'point' => '7',
        ]);

        Option::create([
            'question_id' => $question4->id,
            'title' => 'Yes',
        ]);

        Option::create([
            'question_id' => $question4->id,
            'title' => 'No',
        ]);

        $question5 = Question::create([
            'assessment_group_id' => $group1->id,
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Exhibits behaviours with potential to harm self/others',
            'type' => 'multiple_choice',
            'point' => '6',
        ]);

        Option::create([
            'question_id' => $question5->id,
            'title' => 'Yes',
        ]);

        Option::create([
            'question_id' => $question5->id,
            'title' => 'No',
        ]);

        $question6 = Question::create([
            'assessment_group_id' => $group1->id,
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Difficulty communicating basic needs',
            'type' => 'multiple_choice',
            'point' => '5',
        ]);

        Option::create([
            'question_id' => $question6->id,
            'title' => 'Yes',
        ]);

        Option::create([
            'question_id' => $question6->id,
            'title' => 'No',
        ]);

        $question7 = Question::create([
            'assessment_group_id' => $group1->id,
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'continence',
            'type' => 'multiple_choice',
            'point' => '4.3',
        ]);

        Option::create([
            'question_id' => $question7->id,
            'title' => 'Yes',
        ]);

        Option::create([
            'question_id' => $question7->id,
            'title' => 'No',
        ]);

        for ($i = 2; $i <= 5; $i++) {
            for ($j = 1; $j <= 10; $j++) {

                $question = Question::create([
                    'assessment_group_id' => $i,
                    'assessment_tool_id' => $assessment_tool->id,
                    'title' => $faker->sentence,
                    'type' => 'multiple_choice',
                    'point' => $faker->numberBetween(2, 4),
                ]);

                Option::create([
                    'question_id' => $question->id,
                    'title' => 'Yes',
                ]);

                Option::create([
                    'question_id' => $question->id,
                    'title' => 'No',
                ]);
            }
        }
    }
}
