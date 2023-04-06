<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\AssessmentTool;
use App\Models\Question;


class DASSAssessmentToolSeeder extends Seeder
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
            'title' => 'DASS(Depression Anxiety Stress Scale',
            'slug' => 'dass',
            'type' => 'questionnaire'
        ]);

        $question1 = Question::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'I found myself getting upset by quite trivial things.',
            'type' => 'multiple_choice',
        ]);

        $question2 = Question::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'I was aware of dryness of my mouth.',
            'type' => 'multiple_choice',
        ]);

        $question3 = Question::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'I could not seem to experience any positive feeling at all',
            'type' => 'multiple_choice',
        ]);

        $question4 = Question::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'I experienced breathing difficulty (eg, excessively rapid breathing, breathlessness in the absence of physical exertion).',
            'type' => 'multiple_choice',
        ]);

        $question5 = Question::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'I just could not seem to get going.',
            'type' => 'multiple_choice',
        ]);

        $question6 = Question::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'I tended to over-react to situations.',
            'type' => 'multiple_choice',
        ]);

        $question7 = Question::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'I had a feeling of shakiness (eg, legs going to give way).',
            'type' => 'multiple_choice',
        ]);

        $question8 = Question::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'I found it difficult to relax.',
            'type' => 'multiple_choice',
        ]);

        $question9 = Question::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'I found myself in situations that made me so anxious I was most relieved when they ended.',
            'type' => 'multiple_choice',
        ]);

        $question10 = Question::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'I felt that I had nothing to look forward to.',
            'type' => 'multiple_choice',
        ]);

        $question11 = Question::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'I found myself getting upset rather easily.',
            'type' => 'multiple_choice',
        ]);

        $question12 = Question::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'I felt that I was using a lot of nervous energy.',
            'type' => 'multiple_choice',
        ]);

        $question13 = Question::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'I felt sad and depressed.',
            'type' => 'multiple_choice',
        ]);

        $question14 = Question::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'I found myself getting impatient when I was delayed in any way (eg, elevators, traffic lights,being kept waiting).',
            'type' => 'multiple_choice',
        ]);

        $question15 = Question::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'I had a feeling of faintness.',
            'type' => 'multiple_choice',
        ]);

        $question16 = Question::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'I felt that I had lost interest in just about everything.',
            'type' => 'multiple_choice',
        ]);

        $question17 = Question::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'I felt I was not worth much as a person.',
            'type' => 'multiple_choice',
        ]);

        $question18 = Question::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'I felt that I was rather touchy.',
            'type' => 'multiple_choice',
        ]);

        $question19 = Question::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'I perspired noticeably (eg, hands sweaty) in the absence of high temperatures or physical exertion.',
            'type' => 'multiple_choice',
        ]);

        $question20 = Question::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'I felt scared without any good reason.',
            'type' => 'multiple_choice',
        ]);

        $question21 = Question::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'I felt that life was not worthwhile.',
            'type' => 'multiple_choice',
        ]);

    }
}
