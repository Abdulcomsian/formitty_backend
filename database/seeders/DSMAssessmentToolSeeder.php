<?php

namespace Database\Seeders;

use App\Models\AssessmentTool;
use App\Models\Question;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DSMAssessmentToolSeeder extends Seeder
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
            'title' => 'DSM-5-TR Self-Rated Level 1 Cross-Cutting Symptom Measure—Adu',
            'slug' => 'DSM-5-self',
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

        $question23 = Question::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Getting all the household work done that you needed to do?',
            'type' => 'multiple_choice',
        ]);

        $question24 = Question::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Getting all the household work done that you needed to do?',
            'type' => 'multiple_choice',
        ]);

        $question25 = Question::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'If you work (paid, non-paid, self-employed) or go to school, complete questions 25-28 below. Otherwise, skip to question29.
                        Because of your health condition, in the past 30 days, how much difficulty did you have in:
                        Your day-to-day work/school?',
            'type' => 'multiple_choice',
        ]);

        $question26 = Question::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Doing your most important work/school tasks well?',
            'type' => 'multiple_choice',
        ]);

        $question27 = Question::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Getting all the work done that you need to do?',
            'type' => 'multiple_choice',
        ]);

        $question28 = Question::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Getting your work done as quickly as needed?',
            'type' => 'multiple_choice',
        ]);

        $question29 = Question::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'In the past 30 days: How much of a problem did you have in joining in community activities (for example,
                        festivities, religious or other activities) in the same way as anyone else can?',
            'type' => 'multiple_choice',
        ]);

        $question30 = Question::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'How much of a problem did you have because of barriers or hindrances in the world around you?',
            'type' => 'multiple_choice',
        ]);

        $question31 = Question::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'How much of a problem did you have living with dignity because of the attitudes and actions of others? ',
            'type' => 'multiple_choice',
        ]);

        $question32 = Question::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'How much time did you spend on your health condition, or its consequences?',
            'type' => 'multiple_choice',
        ]);

        $question33 = Question::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'How much have you been emotionally affected by your health condition?',
            'type' => 'multiple_choice',
        ]);

        $question34 = Question::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'How much has your health condition been a drain on the financial resources of you or your family? ',
            'type' => 'multiple_choice',
        ]);

        $question35 = Question::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'How much of a problem did your family have because of your health problems?',
            'type' => 'multiple_choice',
        ]);

        $question36 = Question::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'How much of a problem did you have in doing things by yourself for relaxation or pleasure?',
            'type' => 'multiple_choice',
        ]);

        $question37 = Question::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Overall, in the past 30 days, how many days were these difficulties present?',
            'type' => 'open_ended',
        ]);

        $question38 = Question::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'In the past 30 days, for how many days were you totally unable to carry out your usual activities or work because of any health condition?',
            'type' => 'open_ended',
        ]);

        $question39 = Question::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'In the past 30 days, not counting the days that you were totally unable, for how many days did you cut back or reduce your usual
activities or work because of any health condition?',
            'type' => 'open_ended',
        ]);
    }
}
