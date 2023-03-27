<?php

namespace Database\Seeders;

use App\Models\AssessmentTool;
use App\Models\Question;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WHODAS2SELFAssessmentToolSeeder extends Seeder
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
            'title' => 'World Health Organisation Disability Assessment Schedule 2.0 - Self (WHODAS-self)',
            'slug' => 'whodas2self',
            'type' => 'questionnaire'
        ]);

        $question1 = Question::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Concentrating on doing something for ten minutes?',
            'type' => 'multiple_choice',
        ]);

        $question2 = Question::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Remembering to do important things?',
            'type' => 'multiple_choice',
        ]);

        $question3 = Question::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Analysing and finding solutions to problems in day-today life? ',
            'type' => 'multiple_choice',
        ]);

        $question4 = Question::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Learning a new task, for example, learning how to get a new place?',
            'type' => 'multiple_choice',
        ]);

        $question5 = Question::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Generally understanding what people say?',
            'type' => 'multiple_choice',
        ]);

        $question6 = Question::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Starting and maintaining a conversation?',
            'type' => 'multiple_choice',
        ]);

        $question7 = Question::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Standing for long periods such as 30 minutes?',
            'type' => 'multiple_choice',
        ]);

        $question8 = Question::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Standing up from sitting down?',
            'type' => 'multiple_choice',
        ]);

        $question9 = Question::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Moving around inside your home?',
            'type' => 'multiple_choice',
        ]);

        $question10 = Question::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Getting out of your home?',
            'type' => 'multiple_choice',
        ]);

        $question11 = Question::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Walking a long distance such as a kilometre (or equivalent)?',
            'type' => 'multiple_choice',
        ]);

        $question12 = Question::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Washing your whole body?',
            'type' => 'multiple_choice',
        ]);

        $question13 = Question::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Getting dressed?',
            'type' => 'multiple_choice',
        ]);

        $question14 = Question::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Eating?',
            'type' => 'multiple_choice',
        ]);

        $question15 = Question::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Staying by yourself for a few days?',
            'type' => 'multiple_choice',
        ]);

        $question16 = Question::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Dealing with people you do not know?',
            'type' => 'multiple_choice',
        ]);

        $question17 = Question::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Maintaining a friendship?',
            'type' => 'multiple_choice',
        ]);

        $question18 = Question::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Getting along with people who are close to you?',
            'type' => 'multiple_choice',
        ]);

        $question19 = Question::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Making new friends?',
            'type' => 'multiple_choice',
        ]);

        $question20 = Question::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Sexual activities?',
            'type' => 'multiple_choice',
        ]);

        $question21 = Question::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Taking care of your household responsibilities?',
            'type' => 'multiple_choice',
        ]);

        $question22 = Question::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Doing most important household tasks well?',
            'type' => 'multiple_choice',
        ]);
    }
}
