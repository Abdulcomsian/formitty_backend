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
            'title' => 'Continence',
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

        $question8 = Question::create([
            'assessment_group_id' => $group1->id,
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Eating and drinking',
            'type' => 'multiple_choice',
            'point' => '4.3',
        ]);

        Option::create([
            'question_id' => $question8->id,
            'title' => 'Yes',
        ]);

        Option::create([
            'question_id' => $question8->id,
            'title' => 'No',
        ]);

        $question9 = Question::create([
            'assessment_group_id' => $group1->id,
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Transfers/mobility (incl. stairs and indoor surfaces)',
            'type' => 'multiple_choice',
        ]);

        Option::create([
            'question_id' => $question9->id,
            'title' => 'Yes',
        ]);

        Option::create([
            'question_id' => $question9->id,
            'title' => 'No',
        ]);

        $question10 = Question::create([
            'assessment_group_id' => $group1->id,
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Other (specify):',
            'type' => 'multiple_choice',
        ]);

        Option::create([
            'question_id' => $question10->id,
            'title' => 'Yes',
        ]);

        Option::create([
            'question_id' => $question10->id,
            'title' => 'No',
        ]);

        $question11 = Question::create([
            'assessment_group_id' => $group2->id,
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Personal hygiene/toileting',
            'type' => 'multiple_choice',
        ]);

        Option::create([
            'question_id' => $question11->id,
            'title' => 'Yes',
        ]);

        Option::create([
            'question_id' => $question11->id,
            'title' => 'No',
        ]);

        $question12 = Question::create([
            'assessment_group_id' => $group2->id,
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Bathing/dressing ',
            'type' => 'multiple_choice',
            'point' => '4.2',
        ]);

        Option::create([
            'question_id' => $question12->id,
            'title' => 'Yes',
        ]);

        Option::create([
            'question_id' => $question12->id,
            'title' => 'No',
        ]);

        $question13 = Question::create([
            'assessment_group_id' => $group2->id,
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Preparation of light meal/snack',
            'type' => 'multiple_choice',
        ]);

        Option::create([
            'question_id' => $question13->id,
            'title' => 'Yes',
        ]);

        Option::create([
            'question_id' => $question13->id,
            'title' => 'No',
        ]);

        $question14 = Question::create([
            'assessment_group_id' => $group2->id,
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Other (specify):',
            'type' => 'multiple_choice',
        ]);

        Option::create([
            'question_id' => $question14->id,
            'title' => 'Yes',
        ]);

        Option::create([
            'question_id' => $question14->id,
            'title' => 'No',
        ]);

        $question15 = Question::create([
            'assessment_group_id' => $group3->id,
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Shopping',
            'type' => 'multiple_choice',
        ]);

        Option::create([
            'question_id' => $question15->id,
            'title' => 'Yes',
        ]);

        Option::create([
            'question_id' => $question15->id,
            'title' => 'No',
        ]);

        $question16 = Question::create([
            'assessment_group_id' => $group3->id,
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Domestic incl. preparation of main meal',
            'type' => 'multiple_choice',
        ]);

        Option::create([
            'question_id' => $question16->id,
            'title' => 'Yes',
        ]);

        Option::create([
            'question_id' => $question16->id,
            'title' => 'No',
        ]);

        $question17 = Question::create([
            'assessment_group_id' => $group3->id,
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Medication use',
            'type' => 'multiple_choice',
        ]);

        Option::create([
            'question_id' => $question17->id,
            'title' => 'Yes',
        ]);

        Option::create([
            'question_id' => $question17->id,
            'title' => 'No',
        ]);

        $question18 = Question::create([
            'assessment_group_id' => $group3->id,
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Money management',
            'type' => 'multiple_choice',
            'point' => '4.1',
        ]);

        Option::create([
            'question_id' => $question18->id,
            'title' => 'Yes',
        ]);

        Option::create([
            'question_id' => $question18->id,
            'title' => 'No',
        ]);

        $question19 = Question::create([
            'assessment_group_id' => $group3->id,
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Everyday devices (e.g., telephone, television)',
            'type' => 'multiple_choice',
            'point' => '3',
        ]);

        Option::create([
            'question_id' => $question19->id,
            'title' => 'Yes',
        ]);

        Option::create([
            'question_id' => $question19->id,
            'title' => 'No',
        ]);

        $question20 = Question::create([
            'assessment_group_id' => $group3->id,
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Transport and outdoor surfaces',
            'type' => 'multiple_choice',
            'point' => '2',
        ]);

        Option::create([
            'question_id' => $question20->id,
            'title' => 'Yes',
        ]);

        Option::create([
            'question_id' => $question20->id,
            'title' => 'No',
        ]);

        $question21 = Question::create([
            'assessment_group_id' => $group3->id,
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Parenting skills',
            'type' => 'multiple_choice',
            'point' => '1',
        ]);

        Option::create([
            'question_id' => $question21->id,
            'title' => 'Yes',
        ]);

        Option::create([
            'question_id' => $question21->id,
            'title' => 'No',
        ]);

        $question22 = Question::create([
            'assessment_group_id' => $group3->id,
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Interpersonal relationships',
            'type' => 'multiple_choice',
        ]);

        Option::create([
            'question_id' => $question22->id,
            'title' => 'Yes',
        ]);

        Option::create([
            'question_id' => $question22->id,
            'title' => 'No',
        ]);

        $question23 = Question::create([
            'assessment_group_id' => $group3->id,
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Leisure and recreation',
            'type' => 'multiple_choice',
        ]);

        Option::create([
            'question_id' => $question23->id,
            'title' => 'Yes',
        ]);

        Option::create([
            'question_id' => $question23->id,
            'title' => 'No',
        ]);

        $question24 = Question::create([
            'assessment_group_id' => $group3->id,
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Employment/study',
            'type' => 'multiple_choice',
        ]);

        Option::create([
            'question_id' => $question24->id,
            'title' => 'Yes',
        ]);

        Option::create([
            'question_id' => $question24->id,
            'title' => 'No',
        ]);

        $question25 = Question::create([
            'assessment_group_id' => $group3->id,
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Other (specify): ',
            'type' => 'multiple_choice',
        ]);

        Option::create([
            'question_id' => $question25->id,
            'title' => 'Yes',
        ]);

        Option::create([
            'question_id' => $question25->id,
            'title' => 'No',
        ]);

        $question26 = Question::create([
            'assessment_group_id' => $group4->id,
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Informational supports (e.g., advice)',
            'type' => 'multiple_choice',
            'point' => '3',
        ]);

        Option::create([
            'question_id' => $question26->id,
            'title' => 'Yes',
        ]);

        Option::create([
            'question_id' => $question26->id,
            'title' => 'No',
        ]);

        $question27 = Question::create([
            'assessment_group_id' => $group4->id,
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Emotional supports ',
            'type' => 'multiple_choice',
            'point' => '2',
        ]);

        Option::create([
            'question_id' => $question27->id,
            'title' => 'Yes',
        ]);

        Option::create([
            'question_id' => $question27->id,
            'title' => 'No',
        ]);

        $question28 = Question::create([
            'assessment_group_id' => $group4->id,
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Other (specify):',
            'type' => 'multiple_choice',
            'point' => '1',
        ]);

        Option::create([
            'question_id' => $question28->id,
            'title' => 'Yes',
        ]);

        Option::create([
            'question_id' => $question28->id,
            'title' => 'No',
        ]);

/*        for ($i = 2; $i <= 5; $i++) {
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
        }*/
    }
}
