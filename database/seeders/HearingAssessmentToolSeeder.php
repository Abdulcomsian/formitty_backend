<?php

namespace Database\Seeders;

use App\Models\AssessmentTool;
use App\Models\Question;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HearingAssessmentToolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $assessment_tool = AssessmentTool::create([
            'title' => 'Test Your Hearing Acuity',
            'slug' => 'hearing-acutiy',
            'type' => 'questionnaire'
        ]);

        $question1 = Question::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Do you find it difficult to follow a conversation in a noisy restaurant or crowded room? ',
            'type' => 'multiple_choice',
        ]);

        $question2 = Question::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Do you sometimes feel that people are
            mumbling or not speaking clearly?',
            'type' => 'multiple_choice',
        ]);

        $question3 = Question::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Do you experience difficulty following dialog in the theater?',
            'type' => 'multiple_choice',
        ]);

        $question4 = Question::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => ' Do you sometimes find it difficult to
            understand a speaker at a public meeting or
            a religious service? ',
            'type' => 'multiple_choice',
        ]);

        $question5 = Question::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => ' Do you find yourself asking people to speak repeat themselves?',
            'type' => 'multiple_choice',
        ]);

        $question6 = Question::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Do you find men’s voices easier to understand than women’s?',
            'type' => 'multiple_choice',
        ]);

        $question7 = Question::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Do you experience difficulty understanding soft or whispered speech?',
            'type' => 'multiple_choice',
        ]);

        $question8 = Question::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Do you sometimes have difficulty understanding speech on the telephone?',
            'type' => 'multiple_choice',
        ]);

        $question9 = Question::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => ' Does a hearing problem cause you to feel embarrassed when meeting new people? ',
            'type' => 'multiple_choice',
        ]);

        $question10 = Question::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Do you feel handicapped by a hearing problem?',
            'type' => 'multiple_choice',
        ]);

        $question11 = Question::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Does a hearing problem cause you to visit
            friends, relatives or neighbors less often that you
            would like? ',
            'type' => 'multiple_choice',
        ]);

        $question12 = Question::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Do you experience ringing or noises in your ears?',
            'type' => 'multiple_choice',
        ]);

        $question13 = Question::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Do you hear better with one ear than the other?',
            'type' => 'multiple_choice',
        ]);

        $question14 = Question::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Have you had any significant noise exposure during work, recreation or military service? ',
            'type' => 'open_ended',
        ]);

        $question15 = Question::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Have any of your relatives (by birth) had hearing loss?',
            'type' => 'open_ended',
        ]);
    }
}
