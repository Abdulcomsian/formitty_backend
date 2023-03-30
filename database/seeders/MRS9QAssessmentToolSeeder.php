<?php

namespace Database\Seeders;

use App\Models\AssessmentTool;
use App\Models\Question;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MRS9QAssessmentToolSeeder extends Seeder
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
            'title' => 'LEVEL 2—ANGER—Adult',
            'slug' => 'anger-adult',
            'type' => 'questionnaire'
        ]);

        $question1 = Question::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Do you have any symptoms that are bothering you? (For example, trouble with reading
            or writing, trouble speaking, problems with vision, numbness, weakness, balance trouble, or problems
            with swallowing?)',
            'type' => 'multiple_choice',
        ]);
        $question2 = Question::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Are you able to do the same work as before?',
            'type' => 'multiple_choice',
        ]);
        $question3 = Question::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Are you able to keep up with your hobbies?',
            'type' => 'multiple_choice',
        ]);
        $question4 = Question::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Have you maintained your ties to friends and family?',
            'type' => 'multiple_choice',
        ]);
        $question5 = Question::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Do you need help making a simple meal, doing household chores, or balancing a checkbook?',
            'type' => 'multiple_choice',
        ]);
        $question6 = Question::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Do you need help with shopping or traveling close to home?',
            'type' => 'multiple_choice',
        ]);
        $question7 = Question::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Do you need another person to help you walk?',
            'type' => 'multiple_choice',
        ]);
        $question8 = Question::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Do you need help with eating, going to the tolet, or bathing?',
            'type' => 'multiple_choice',
        ]);
        $question9 = Question::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Do you stay in bed most of the day and need constant nursing care?',
            'type' => 'multiple_choice',
        ]);
    }
}
