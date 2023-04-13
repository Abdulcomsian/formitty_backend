<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\AssessmentGroup;
use App\Models\AssessmentTool;
use App\Models\Option;
use App\Models\Question;


class FAMAssessmentToolSeeder extends Seeder
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
            'title' => 'FAM(Functional Assessment Measure)',
            'slug' => 'functional assessment measure',
            'type' => 'questionnaire'
        ]);

        $group1 = AssessmentGroup::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'SELF CARE ITEMS',
        ]);

        $group2 = AssessmentGroup::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'SPHINCTER CONTROL',
        ]);

        $group3 = AssessmentGroup::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'MOBILITY ITEMS (Type of Transfer)',
        ]);

        $group4 = AssessmentGroup::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'LOCOMOTION',
        ]);

        $group5 = AssessmentGroup::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'COMMUNICATION ITEMS',
        ]);

        $group6 = AssessmentGroup::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'PSYCHOSOCIAL ADJUSTMENT',
        ]);

        $group7 = AssessmentGroup::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'COGNITIVE FUNCTION',
        ]);

        $question1 = Question::create([
            'assessment_group_id' => $group1->id,
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Feeding',
            'type' => 'multiple_choice',
        ]);

        Option::create([
            'question_id' => $question1->id,
            'title' => 'Adm',
        ]);

        Option::create([
            'question_id' => $question1->id,
            'title' => 'Goal',
        ]);

        Option::create([
            'question_id' => $question1->id,
            'title' => 'D/C',
        ]);

        Option::create([
            'question_id' => $question1->id,
            'title' => 'F/U',
        ]);

        $question2 = Question::create([
            'assessment_group_id' => $group1->id,
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Grooming',
            'type' => 'multiple_choice',
        ]);

        Option::create([
            'question_id' => $question2->id,
            'title' => 'Adm',
        ]);

        Option::create([
            'question_id' => $question2->id,
            'title' => 'Goal',
        ]);

        Option::create([
            'question_id' => $question2->id,
            'title' => 'D/C',
        ]);

        Option::create([
            'question_id' => $question2->id,
            'title' => 'F/U',
        ]);

        $question3 = Question::create([
            'assessment_group_id' => $group1->id,
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Bathing',
            'type' => 'multiple_choice',
        ]);

        Option::create([
            'question_id' => $question3->id,
            'title' => 'Adm',
        ]);

        Option::create([
            'question_id' => $question3->id,
            'title' => 'Goal',
        ]);

        Option::create([
            'question_id' => $question3->id,
            'title' => 'D/C',
        ]);

        Option::create([
            'question_id' => $question3->id,
            'title' => 'F/U',
        ]);

        $question4 = Question::create([
            'assessment_group_id' => $group1->id,
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Dressing Upper Body',
            'type' => 'multiple_choice',
        ]);

        Option::create([
            'question_id' => $question4->id,
            'title' => 'Adm',
        ]);

        Option::create([
            'question_id' => $question4->id,
            'title' => 'Goal',
        ]);

        Option::create([
            'question_id' => $question4->id,
            'title' => 'D/C',
        ]);

        Option::create([
            'question_id' => $question4->id,
            'title' => 'F/U',
        ]);

        $question5 = Question::create([
            'assessment_group_id' => $group1->id,
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Dressing Lower Body',
            'type' => 'multiple_choice',
        ]);

        Option::create([
            'question_id' => $question5->id,
            'title' => 'Adm',
        ]);

        Option::create([
            'question_id' => $question5->id,
            'title' => 'Goal',
        ]);

        Option::create([
            'question_id' => $question5->id,
            'title' => 'D/C',
        ]);

        Option::create([
            'question_id' => $question5->id,
            'title' => 'F/U',
        ]);

        $question6 = Question::create([
            'assessment_group_id' => $group1->id,
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Toileting',
            'type' => 'multiple_choice',
        ]);

        Option::create([
            'question_id' => $question6->id,
            'title' => 'Adm',
        ]);

        Option::create([
            'question_id' => $question6->id,
            'title' => 'Goal',
        ]);

        Option::create([
            'question_id' => $question6->id,
            'title' => 'D/C',
        ]);

        Option::create([
            'question_id' => $question6->id,
            'title' => 'F/U',
        ]);

        $question7 = Question::create([
            'assessment_group_id' => $group1->id,
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Swallowing*',
            'type' => 'multiple_choice',
        ]);

        Option::create([
            'question_id' => $question7->id,
            'title' => 'Adm',
        ]);

        Option::create([
            'question_id' => $question7->id,
            'title' => 'Goal',
        ]);

        Option::create([
            'question_id' => $question7->id,
            'title' => 'D/C',
        ]);

        Option::create([
            'question_id' => $question7->id,
            'title' => 'F/U',
        ]);

        $question8 = Question::create([
            'assessment_group_id' => $group2->id,
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Bladder Management',
            'type' => 'multiple_choice',
        ]);

        Option::create([
            'question_id' => $question8->id,
            'title' => 'Adm',
        ]);

        Option::create([
            'question_id' => $question8->id,
            'title' => 'Goal',
        ]);

        Option::create([
            'question_id' => $question8->id,
            'title' => 'D/C',
        ]);

        Option::create([
            'question_id' => $question8->id,
            'title' => 'F/U',
        ]);

        $question9 = Question::create([
            'assessment_group_id' => $group2->id,
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Bowel Management',
            'type' => 'multiple_choice',
        ]);

        Option::create([
            'question_id' => $question9->id,
            'title' => 'Adm',
        ]);

        Option::create([
            'question_id' => $question9->id,
            'title' => 'Goal',
        ]);

        Option::create([
            'question_id' => $question9->id,
            'title' => 'D/C',
        ]);

        Option::create([
            'question_id' => $question9->id,
            'title' => 'F/U',
        ]);

        $question10 = Question::create([
            'assessment_group_id' => $group3->id,
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Bed, Chair, Wheelchair',
            'type' => 'multiple_choice',
        ]);

        Option::create([
            'question_id' => $question10->id,
            'title' => 'Adm',
        ]);

        Option::create([
            'question_id' => $question10->id,
            'title' => 'Goal',
        ]);

        Option::create([
            'question_id' => $question10->id,
            'title' => 'D/C',
        ]);

        Option::create([
            'question_id' => $question10->id,
            'title' => 'F/U',
        ]);

        $question11 = Question::create([
            'assessment_group_id' => $group3->id,
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Toilet',
            'type' => 'multiple_choice',
        ]);

        Option::create([
            'question_id' => $question11->id,
            'title' => 'Adm',
        ]);

        Option::create([
            'question_id' => $question11->id,
            'title' => 'Goal',
        ]);

        Option::create([
            'question_id' => $question11->id,
            'title' => 'D/C',
        ]);

        Option::create([
            'question_id' => $question11->id,
            'title' => 'F/U',
        ]);

        $question12 = Question::create([
            'assessment_group_id' => $group3->id,
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Tub or Shower',
            'type' => 'multiple_choice',
        ]);

        Option::create([
            'question_id' => $question12->id,
            'title' => 'Adm',
        ]);

        Option::create([
            'question_id' => $question12->id,
            'title' => 'Goal',
        ]);

        Option::create([
            'question_id' => $question12->id,
            'title' => 'D/C',
        ]);

        Option::create([
            'question_id' => $question12->id,
            'title' => 'F/U',
        ]);

        $question13 = Question::create([
            'assessment_group_id' => $group3->id,
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Car Transfer*',
            'type' => 'multiple_choice',
        ]);

        Option::create([
            'question_id' => $question13->id,
            'title' => 'Adm',
        ]);

        Option::create([
            'question_id' => $question13->id,
            'title' => 'Goal',
        ]);

        Option::create([
            'question_id' => $question13->id,
            'title' => 'D/C',
        ]);

        Option::create([
            'question_id' => $question13->id,
            'title' => 'F/U',
        ]);

        $question14 = Question::create([
            'assessment_group_id' => $group4->id,
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Walking / Wheelchair (circle)',
            'type' => 'multiple_choice',
        ]);

        Option::create([
            'question_id' => $question14->id,
            'title' => 'Adm',
        ]);

        Option::create([
            'question_id' => $question14->id,
            'title' => 'Goal',
        ]);

        Option::create([
            'question_id' => $question14->id,
            'title' => 'D/C',
        ]);

        Option::create([
            'question_id' => $question14->id,
            'title' => 'F/U',
        ]);

        $question15 = Question::create([
            'assessment_group_id' => $group4->id,
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Stairs',
            'type' => 'multiple_choice',
        ]);

        Option::create([
            'question_id' => $question15->id,
            'title' => 'Adm',
        ]);

        Option::create([
            'question_id' => $question15->id,
            'title' => 'Goal',
        ]);

        Option::create([
            'question_id' => $question15->id,
            'title' => 'D/C',
        ]);

        Option::create([
            'question_id' => $question15->id,
            'title' => 'F/U',
        ]);

        $question16 = Question::create([
            'assessment_group_id' => $group4->id,
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Community Access*',
            'type' => 'multiple_choice',
        ]);

        Option::create([
            'question_id' => $question16->id,
            'title' => 'Adm',
        ]);

        Option::create([
            'question_id' => $question16->id,
            'title' => 'Goal',
        ]);

        Option::create([
            'question_id' => $question16->id,
            'title' => 'D/C',
        ]);

        Option::create([
            'question_id' => $question16->id,
            'title' => 'F/U',
        ]);

        $question17 = Question::create([
            'assessment_group_id' => $group5->id,
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Comprehension-Audio / Visual (circle)',
            'type' => 'multiple_choice',
        ]);

        Option::create([
            'question_id' => $question17->id,
            'title' => 'Adm',
        ]);

        Option::create([
            'question_id' => $question17->id,
            'title' => 'Goal',
        ]);

        Option::create([
            'question_id' => $question17->id,
            'title' => 'D/C',
        ]);

        Option::create([
            'question_id' => $question17->id,
            'title' => 'F/U',
        ]);

        $question18 = Question::create([
            'assessment_group_id' => $group5->id,
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Expression-Verbal, Non-Verbal (circle)',
            'type' => 'multiple_choice',
        ]);

        Option::create([
            'question_id' => $question18->id,
            'title' => 'Adm',
        ]);

        Option::create([
            'question_id' => $question18->id,
            'title' => 'Goal',
        ]);

        Option::create([
            'question_id' => $question18->id,
            'title' => 'D/C',
        ]);

        Option::create([
            'question_id' => $question18->id,
            'title' => 'F/U',
        ]);

        $question19 = Question::create([
            'assessment_group_id' => $group5->id,
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Reading*',
            'type' => 'multiple_choice',
        ]);

        Option::create([
            'question_id' => $question19->id,
            'title' => 'Adm',
        ]);

        Option::create([
            'question_id' => $question19->id,
            'title' => 'Goal',
        ]);

        Option::create([
            'question_id' => $question19->id,
            'title' => 'D/C',
        ]);

        Option::create([
            'question_id' => $question19->id,
            'title' => 'F/U',
        ]);

        $question20 = Question::create([
            'assessment_group_id' => $group5->id,
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Writing*',
            'type' => 'multiple_choice',
        ]);

        Option::create([
            'question_id' => $question20->id,
            'title' => 'Adm',
        ]);

        Option::create([
            'question_id' => $question20->id,
            'title' => 'Goal',
        ]);

        Option::create([
            'question_id' => $question20->id,
            'title' => 'D/C',
        ]);

        Option::create([
            'question_id' => $question20->id,
            'title' => 'F/U',
        ]);

        $question21 = Question::create([
            'assessment_group_id' => $group5->id,
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Speech Intelligibility*',
            'type' => 'multiple_choice',
        ]);

        Option::create([
            'question_id' => $question21->id,
            'title' => 'Adm',
        ]);

        Option::create([
            'question_id' => $question21->id,
            'title' => 'Goal',
        ]);

        Option::create([
            'question_id' => $question21->id,
            'title' => 'D/C',
        ]);

        Option::create([
            'question_id' => $question21->id,
            'title' => 'F/U',
        ]);

        $question22 = Question::create([
            'assessment_group_id' => $group6->id,
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Social Interaction',
            'type' => 'multiple_choice',
        ]);

        Option::create([
            'question_id' => $question22->id,
            'title' => 'Adm',
        ]);

        Option::create([
            'question_id' => $question22->id,
            'title' => 'Goal',
        ]);

        Option::create([
            'question_id' => $question22->id,
            'title' => 'D/C',
        ]);

        Option::create([
            'question_id' => $question22->id,
            'title' => 'F/U',
        ]);

        $question23 = Question::create([
            'assessment_group_id' => $group6->id,
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Emotional Status*',
            'type' => 'multiple_choice',
        ]);

        Option::create([
            'question_id' => $question23->id,
            'title' => 'Adm',
        ]);

        Option::create([
            'question_id' => $question23->id,
            'title' => 'Goal',
        ]);

        Option::create([
            'question_id' => $question23->id,
            'title' => 'D/C',
        ]);

        Option::create([
            'question_id' => $question23->id,
            'title' => 'F/U',
        ]);

        $question24 = Question::create([
            'assessment_group_id' => $group6->id,
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Adjustment to Limitations*',
            'type' => 'multiple_choice',
        ]);

        Option::create([
            'question_id' => $question24->id,
            'title' => 'Adm',
        ]);

        Option::create([
            'question_id' => $question24->id,
            'title' => 'Goal',
        ]);

        Option::create([
            'question_id' => $question24->id,
            'title' => 'D/C',
        ]);

        Option::create([
            'question_id' => $question24->id,
            'title' => 'F/U',
        ]);

        $question25 = Question::create([
            'assessment_group_id' => $group6->id,
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Employability*',
            'type' => 'multiple_choice',
        ]);

        Option::create([
            'question_id' => $question25->id,
            'title' => 'Adm',
        ]);

        Option::create([
            'question_id' => $question25->id,
            'title' => 'Goal',
        ]);

        Option::create([
            'question_id' => $question25->id,
            'title' => 'D/C',
        ]);

        Option::create([
            'question_id' => $question25->id,
            'title' => 'F/U',
        ]);

        $question26 = Question::create([
            'assessment_group_id' => $group7->id,
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Problem Solving',
            'type' => 'multiple_choice',
        ]);

        Option::create([
            'question_id' => $question26->id,
            'title' => 'Adm',
        ]);

        Option::create([
            'question_id' => $question26->id,
            'title' => 'Goal',
        ]);

        Option::create([
            'question_id' => $question26->id,
            'title' => 'D/C',
        ]);

        Option::create([
            'question_id' => $question26->id,
            'title' => 'F/U',
        ]);

        $question27 = Question::create([
            'assessment_group_id' => $group7->id,
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Memory',
            'type' => 'multiple_choice',
        ]);

        Option::create([
            'question_id' => $question27->id,
            'title' => 'Adm',
        ]);

        Option::create([
            'question_id' => $question27->id,
            'title' => 'Goal',
        ]);

        Option::create([
            'question_id' => $question27->id,
            'title' => 'D/C',
        ]);

        Option::create([
            'question_id' => $question27->id,
            'title' => 'F/U',
        ]);

        $question28 = Question::create([
            'assessment_group_id' => $group7->id,
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Orientation*',
            'type' => 'multiple_choice',
        ]);

        Option::create([
            'question_id' => $question28->id,
            'title' => 'Adm',
        ]);

        Option::create([
            'question_id' => $question28->id,
            'title' => 'Goal',
        ]);

        Option::create([
            'question_id' => $question28->id,
            'title' => 'D/C',
        ]);

        Option::create([
            'question_id' => $question28->id,
            'title' => 'F/U',
        ]);

        $question29 = Question::create([
            'assessment_group_id' => $group7->id,
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Attention*',
            'type' => 'multiple_choice',
        ]);

        Option::create([
            'question_id' => $question29->id,
            'title' => 'Adm',
        ]);

        Option::create([
            'question_id' => $question29->id,
            'title' => 'Goal',
        ]);

        Option::create([
            'question_id' => $question29->id,
            'title' => 'D/C',
        ]);

        Option::create([
            'question_id' => $question29->id,
            'title' => 'F/U',
        ]);

        $question30 = Question::create([
            'assessment_group_id' => $group7->id,
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Safety Judgement*',
            'type' => 'multiple_choice',
        ]);

        Option::create([
            'question_id' => $question30->id,
            'title' => 'Adm',
        ]);

        Option::create([
            'question_id' => $question30->id,
            'title' => 'Goal',
        ]);

        Option::create([
            'question_id' => $question30->id,
            'title' => 'D/C',
        ]);

        Option::create([
            'question_id' => $question30->id,
            'title' => 'F/U',
        ]);
    }
}
