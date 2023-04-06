<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\AssessmentTool;
use App\Models\Option;
use App\Models\Question;

class BarthalIndexAssessmentToolSeeder extends Seeder
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
            'title' => 'The Barthal Index',
            'slug' => 'Barthal Index',
            'type' => 'questionnaire'
        ]);

        $question1 = Question::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'FEEDING',
            'type' => 'multiple_choice',
        ]);

        Option::create([
            'question_id' => $question1->id,
            'title' => '0 = unable',
        ]);

        Option::create([
            'question_id' => $question1->id,
            'title' => '5 = needs help cutting, spreading butter, etc., or requires modified diet',
        ]);

        Option::create([
            'question_id' => $question1->id,
            'title' => '10 = independent',
        ]);

        $question2 = Question::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'BATHING',
            'type' => 'multiple_choice',
        ]);

        Option::create([
            'question_id' => $question2->id,
            'title' => '0 = dependent',
        ]);

        Option::create([
            'question_id' => $question2->id,
            'title' => '5 = independent (or in shower)',
        ]);

        $question3 = Question::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'GROOMING',
            'type' => 'multiple_choice',
        ]);

        Option::create([
            'question_id' => $question3->id,
            'title' => '0 = needs to help with personal care',
        ]);

        Option::create([
            'question_id' => $question3->id,
            'title' => '5 = independent face/hair/teeth/shaving (implements provided)',
        ]);

        $question4 = Question::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'DRESSING',
            'type' => 'multiple_choice',
        ]);

        Option::create([
            'question_id' => $question4->id,
            'title' => '0 = dependent',
        ]);

        Option::create([
            'question_id' => $question4->id,
            'title' => '5 = needs help but can do about half unaided',
        ]);

        Option::create([
            'question_id' => $question4->id,
            'title' => '10 = independent (including buttons, zips, laces, etc.)',
        ]);

        $question5 = Question::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'BOWELS',
            'type' => 'multiple_choice',
        ]);

        Option::create([
            'question_id' => $question5->id,
            'title' => '0 = incontinent (or needs to be given enemas)',
        ]);

        Option::create([
            'question_id' => $question5->id,
            'title' => '5 = occasional accident',
        ]);

        Option::create([
            'question_id' => $question5->id,
            'title' => '10 = continent',
        ]);

        $question6 = Question::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'BLADDER',
            'type' => 'multiple_choice',
        ]);

        Option::create([
            'question_id' => $question6->id,
            'title' => '0 = incontinent, or catheterized and unable to manage alone',
        ]);

        Option::create([
            'question_id' => $question6->id,
            'title' => '5 = occasional accident',
        ]);

        Option::create([
            'question_id' => $question6->id,
            'title' => '10 = continent',
        ]);

        $question7 = Question::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'TOILET USE',
            'type' => 'multiple_choice',
        ]);

        Option::create([
            'question_id' => $question7->id,
            'title' => '0 = dependent',
        ]);

        Option::create([
            'question_id' => $question7->id,
            'title' => '5 = needs some help, but can do something alone',
        ]);

        Option::create([
            'question_id' => $question7->id,
            'title' => '10 = independent (on and off, dressing, wiping)',
        ]);

        $question8 = Question::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'TRANSFERS (BED TO CHAIR AND BACK)',
            'type' => 'multiple_choice',
        ]);

        Option::create([
            'question_id' => $question8->id,
            'title' => '0 = unable, no sitting balance',
        ]);

        Option::create([
            'question_id' => $question8->id,
            'title' => '5 = major help (one or two people, physical), can sit',
        ]);

        Option::create([
            'question_id' => $question8->id,
            'title' => '10 = minor help (verbal or physical)',
        ]);

        Option::create([
            'question_id' => $question8->id,
            'title' => '15 = independent',
        ]);

        $question9 = Question::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'MOBILITY (ON LEVEL SURFACES)',
            'type' => 'multiple_choice',
        ]);

        Option::create([
            'question_id' => $question9->id,
            'title' => '0 = immobile or < 50 yards',
        ]);

        Option::create([
            'question_id' => $question9->id,
            'title' => '5 = wheelchair independent, including corners, > 50 yards',
        ]);

        Option::create([
            'question_id' => $question9->id,
            'title' => '10 = walks with help of one person (verbal or physical) > 50 yards',
        ]);

        Option::create([
            'question_id' => $question9->id,
            'title' => '15= independent (but may use any aid; for example, stick) > 50 yards',
        ]);

        $question10 = Question::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'STAIRS',
            'type' => 'multiple_choice',
        ]);

        Option::create([
            'question_id' => $question10->id,
            'title' => '0 = unable',
        ]);

        Option::create([
            'question_id' => $question10->id,
            'title' => '5 = needs help (verbal, physical, carrying aid)',
        ]);

        Option::create([
            'question_id' => $question10->id,
            'title' => '10 = independent',
        ]);
    }
}
