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
            'title' => 'unable',
        ]);

        Option::create([
            'question_id' => $question1->id,
            'title' => 'needs help cutting, spreading butter, etc., or requires modified diet',
        ]);

        Option::create([
            'question_id' => $question1->id,
            'title' => 'independent',
        ]);

        $question2 = Question::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'BATHING',
            'type' => 'multiple_choice',
        ]);

        Option::create([
            'question_id' => $question2->id,
            'title' => 'dependent',
        ]);

        Option::create([
            'question_id' => $question2->id,
            'title' => 'independent (or in shower)',
        ]);

        $question3 = Question::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'GROOMING',
            'type' => 'multiple_choice',
        ]);

        Option::create([
            'question_id' => $question3->id,
            'title' => 'needs to help with personal care',
        ]);

        Option::create([
            'question_id' => $question3->id,
            'title' => 'independent face/hair/teeth/shaving (implements provided)',
        ]);

        $question4 = Question::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'DRESSING',
            'type' => 'multiple_choice',
        ]);

        Option::create([
            'question_id' => $question4->id,
            'title' => 'dependent',
        ]);

        Option::create([
            'question_id' => $question4->id,
            'title' => 'needs help but can do about half unaided',
        ]);

        Option::create([
            'question_id' => $question4->id,
            'title' => 'independent (including buttons, zips, laces, etc.)',
        ]);

        $question5 = Question::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'BOWELS',
            'type' => 'multiple_choice',
        ]);

        Option::create([
            'question_id' => $question5->id,
            'title' => 'incontinent (or needs to be given enemas)',
        ]);

        Option::create([
            'question_id' => $question5->id,
            'title' => 'occasional accident',
        ]);

        Option::create([
            'question_id' => $question5->id,
            'title' => 'continent',
        ]);

        $question6 = Question::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'BLADDER',
            'type' => 'multiple_choice',
        ]);

        Option::create([
            'question_id' => $question6->id,
            'title' => 'incontinent, or catheterized and unable to manage alone',
        ]);

        Option::create([
            'question_id' => $question6->id,
            'title' => 'occasional accident',
        ]);

        Option::create([
            'question_id' => $question6->id,
            'title' => 'continent',
        ]);

        $question7 = Question::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'TOILET USE',
            'type' => 'multiple_choice',
        ]);

        Option::create([
            'question_id' => $question7->id,
            'title' => 'dependent',
        ]);

        Option::create([
            'question_id' => $question7->id,
            'title' => 'needs some help, but can do something alone',
        ]);

        Option::create([
            'question_id' => $question7->id,
            'title' => 'independent (on and off, dressing, wiping)',
        ]);

        $question8 = Question::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'TRANSFERS (BED TO CHAIR AND BACK)',
            'type' => 'multiple_choice',
        ]);

        Option::create([
            'question_id' => $question8->id,
            'title' => 'unable, no sitting balance',
        ]);

        Option::create([
            'question_id' => $question8->id,
            'title' => 'major help (one or two people, physical), can sit',
        ]);

        Option::create([
            'question_id' => $question8->id,
            'title' => 'minor help (verbal or physical)',
        ]);

        Option::create([
            'question_id' => $question8->id,
            'title' => 'independent',
        ]);

        $question9 = Question::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'MOBILITY (ON LEVEL SURFACES)',
            'type' => 'multiple_choice',
        ]);

        Option::create([
            'question_id' => $question9->id,
            'title' => 'immobile or < 50 yards',
        ]);

        Option::create([
            'question_id' => $question9->id,
            'title' => 'wheelchair independent, including corners, > 50 yards',
        ]);

        Option::create([
            'question_id' => $question9->id,
            'title' => 'walks with help of one person (verbal or physical) > 50 yards',
        ]);

        Option::create([
            'question_id' => $question9->id,
            'title' => 'independent (but may use any aid; for example, stick) > 50 yards',
        ]);

        $question10 = Question::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'STAIRS',
            'type' => 'multiple_choice',
        ]);

        Option::create([
            'question_id' => $question10->id,
            'title' => 'unable',
        ]);

        Option::create([
            'question_id' => $question10->id,
            'title' => 'needs help (verbal, physical, carrying aid)',
        ]);

        Option::create([
            'question_id' => $question10->id,
            'title' => 'independent',
        ]);
    }
}
