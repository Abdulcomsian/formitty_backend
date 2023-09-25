<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\AssessmentTool;
use App\Models\Question;
use App\Models\Option;

class KettleTestAssessmentToolSeeder extends Seeder
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
            'title' => 'The Kettle Test',
            'slug' => 'kettle test',
            'type' => 'questionnaire'
        ]);

        $question1 = Question::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Description the Process of examiner.',
            'type' => 'open_ended',
        ]);

        $question2 = Question::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Recall of the instructions by the client:"What were steps you have to do"?',
            'type' => 'open_ended',
        ]);

        $question3 = Question::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'The Client description of the process:"Describe to me what you did from the beginning to the end of the Task"',
            'type' => 'open_ended',
        ]);

        $question4 = Question::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Rating of performance by the Client:"How do you rate your performance on this task between 0 to 100%?"(if the client cannot rate his/her performance then suggest the following options:"Not Good", "Fair","Not so Good","Not Good at All").',
            'type' => 'open_ended',
        ]);

        $question5 = Question::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Rating of the difficulty by the client:"How difficult was the task for you? easy(able to do b y yourself easily); a little difficult or very difficult(i needed help)".',
            'type' => 'open_ended',
        ]);

        $question6 = Question::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Additional Comments.',
            'type' => 'open_ended',
        ]);

        $question7 = Question::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Opening the water Faucet',
            'type' => 'multiple_choice',
        ]);

        Option::create([
            'question_id' => $question7->id,
            'title' => '0',
        ]);

        Option::create([
            'question_id' => $question7->id,
            'title' => '1',
        ]);

        Option::create([
            'question_id' => $question7->id,
            'title' => '2',
        ]);

        Option::create([
            'question_id' => $question7->id,
            'title' => '3',
        ]);

        Option::create([
            'question_id' => $question7->id,
            'title' => '4',
        ]);

        $question8 = Question::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Filling the kettle with about 2 Cups of water',
            'type' => 'multiple_choice',
        ]);

        Option::create([
            'question_id' => $question8->id,
            'title' => '0',
        ]);

        Option::create([
            'question_id' => $question8->id,
            'title' => '1',
        ]);

        Option::create([
            'question_id' => $question8->id,
            'title' => '2',
        ]);

        Option::create([
            'question_id' => $question8->id,
            'title' => '3',
        ]);

        Option::create([
            'question_id' => $question8->id,
            'title' => '4',
        ]);

        $question9 = Question::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Turning of the Faucet',
            'type' => 'multiple_choice',
        ]);

        Option::create([
            'question_id' => $question9->id,
            'title' => '0',
        ]);

        Option::create([
            'question_id' => $question9->id,
            'title' => '1',
        ]);

        Option::create([
            'question_id' => $question9->id,
            'title' => '2',
        ]);

        Option::create([
            'question_id' => $question9->id,
            'title' => '3',
        ]);

        Option::create([
            'question_id' => $question9->id,
            'title' => '4',
        ]);

        $question10 = Question::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Assembling the Kettle',
            'type' => 'multiple_choice',
        ]);

        Option::create([
            'question_id' => $question10->id,
            'title' => '0',
        ]);

        Option::create([
            'question_id' => $question10->id,
            'title' => '1',
        ]);

        Option::create([
            'question_id' => $question10->id,
            'title' => '2',
        ]);
        
        Option::create([
            'question_id' => $question10->id,
            'title' => '3',
        ]);

        Option::create([
            'question_id' => $question10->id,
            'title' => '4',
        ]);

        $question11 = Question::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Attaching the Electric Cord to the Kettle',
            'type' => 'multiple_choice',
        ]);

        Option::create([
            'question_id' => $question11->id,
            'title' => '0',
        ]);

        Option::create([
            'question_id' => $question11->id,
            'title' => '1',
        ]);

        Option::create([
            'question_id' => $question11->id,
            'title' => '2',
        ]);

        Option::create([
            'question_id' => $question11->id,
            'title' => '3',
        ]);

        Option::create([
            'question_id' => $question11->id,
            'title' => '4',
        ]);

        $question12 = Question::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Plugging the electric cord in an electric Socket',
            'type' => 'multiple_choice',
        ]);

        Option::create([
            'question_id' => $question12->id,
            'title' => '0',
        ]);

        Option::create([
            'question_id' => $question12->id,
            'title' => '1',
        ]);

        Option::create([
            'question_id' => $question12->id,
            'title' => '2',
        ]);

        Option::create([
            'question_id' => $question12->id,
            'title' => '3',
        ]);


        Option::create([
            'question_id' => $question12->id,
            'title' => '4',
        ]);

        $question13 = Question::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Turning on the kettle',
            'type' => 'multiple_choice',
        ]);

        Option::create([
            'question_id' => $question13->id,
            'title' => '0',
        ]);

        Option::create([
            'question_id' => $question13->id,
            'title' => '1',
        ]);

        Option::create([
            'question_id' => $question13->id,
            'title' => '2',
        ]);

        Option::create([
            'question_id' => $question13->id,
            'title' => '3',
        ]);

        Option::create([
            'question_id' => $question13->id,
            'title' => '4',
        ]);

        $question14 = Question::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Assembling the ingredients',
            'type' => 'multiple_choice',
        ]);

        Option::create([
            'question_id' => $question14->id,
            'title' => '0',
        ]);

        Option::create([
            'question_id' => $question14->id,
            'title' => '1',
        ]);

        Option::create([
            'question_id' => $question14->id,
            'title' => '2',
        ]);

        Option::create([
            'question_id' => $question14->id,
            'title' => '3',
        ]);

        Option::create([
            'question_id' => $question14->id,
            'title' => '4',
        ]);

        $question15 = Question::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Putting the ingredients into the Cup',
            'type' => 'multiple_choice',
        ]);

        Option::create([
            'question_id' => $question15->id,
            'title' => '0',
        ]);

        Option::create([
            'question_id' => $question15->id,
            'title' => '1',
        ]);

        Option::create([
            'question_id' => $question15->id,
            'title' => '2',
        ]);

        Option::create([
            'question_id' => $question15->id,
            'title' => '3',
        ]);

        Option::create([
            'question_id' => $question15->id,
            'title' => '4',
        ]);

        $question16 = Question::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Picking up the kettle when water boils',
            'type' => 'multiple_choice',
        ]);

        Option::create([
            'question_id' => $question16->id,
            'title' => '0',
        ]);

        Option::create([
            'question_id' => $question16->id,
            'title' => '1',
        ]);

        Option::create([
            'question_id' => $question16->id,
            'title' => '2',
        ]);

        Option::create([
            'question_id' => $question16->id,
            'title' => '3',
        ]);


        Option::create([
            'question_id' => $question16->id,
            'title' => '4',
        ]);

        $question17 = Question::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Pouring the water into the Cup',
            'type' => 'multiple_choice',
        ]);

        Option::create([
            'question_id' => $question17->id,
            'title' => '0',
        ]);

        Option::create([
            'question_id' => $question17->id,
            'title' => '1',
        ]);

        Option::create([
            'question_id' => $question17->id,
            'title' => '2',
        ]);

        Option::create([
            'question_id' => $question17->id,
            'title' => '3',
        ]);


        Option::create([
            'question_id' => $question17->id,
            'title' => '4',
        ]);

        $question18 = Question::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Adding the Milk',
            'type' => 'multiple_choice',
        ]);

        Option::create([
            'question_id' => $question18->id,
            'title' => '0',
        ]);

        Option::create([
            'question_id' => $question18->id,
            'title' => '1',
        ]);

        Option::create([
            'question_id' => $question18->id,
            'title' => '2',
        ]);

        Option::create([
            'question_id' => $question18->id,
            'title' => '3',
        ]);


        Option::create([
            'question_id' => $question18->id,
            'title' => '4',
        ]);

        $question19 = Question::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Indication of the task Completion(e.g. verbal,gesture,serving)',
            'type' => 'multiple_choice',
        ]);

        Option::create([
            'question_id' => $question19->id,
            'title' => '0',
        ]);

        Option::create([
            'question_id' => $question19->id,
            'title' => '1',
        ]);

        Option::create([
            'question_id' => $question12->id,
            'title' => '2',
        ]);

        Option::create([
            'question_id' => $question19->id,
            'title' => '3',
        ]);


        Option::create([
            'question_id' => $question19->id,
            'title' => '4',
        ]);

    }
}
