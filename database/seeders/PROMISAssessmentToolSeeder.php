<?php

namespace Database\Seeders;

use App\Models\AssessmentTool;
use App\Models\Question;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PROMISAssessmentToolSeeder extends Seeder
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
            'title' => 'LEVEL 2—Depression—Adult',
            'slug' => 'depression-adult',
            'type' => 'questionnaire'
        ]);

        $question1 = Question::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'I felt worthless. ',
            'type' => 'multiple_choice',
        ]);

        $question2 = Question::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'I felt that I had nothing to look forward to.',
            'type' => 'multiple_choice',
        ]);

        $question3 = Question::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'I felt helpless.',
            'type' => 'multiple_choice',
        ]);

        $question4 = Question::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'I felt sad.',
            'type' => 'multiple_choice',
        ]);

        $question5 = Question::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'I felt like a failure.',
            'type' => 'multiple_choice',
        ]);

        $question6 = Question::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'I felt depressed.',
            'type' => 'multiple_choice',
        ]);

        $question7 = Question::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'I felt unhappy.',
            'type' => 'multiple_choice',
        ]);

        $question8 = Question::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'I felt hopeless.',
            'type' => 'multiple_choice',
        ]);


    }
}
