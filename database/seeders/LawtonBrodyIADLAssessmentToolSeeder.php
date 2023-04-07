<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\AssessmentTool;
use App\Models\Option;
use App\Models\Question;

class LawtonBrodyIADLAssessmentToolSeeder extends Seeder
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
            'title' => 'LAWTON - BRODY INSTRUMENTAL ACTIVITIES OF DAILY LIVING SCALE (I.A.D.L.)',
            'slug' => 'lawton_brody instrumental activities of daily living scale',
            'type' => 'questionnaire'
        ]);

        $question1 = Question::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Ability to Use Telephone?',
            'type' => 'multiple_choice',
        ]);

        Option::create([
            'question_id' => $question1->id,
            'title' => 'Operates telephone on own initiative-looks up and dials numbers, etc.',
            'point' => 1,
        ]);

        Option::create([
            'question_id' => $question1->id,
            'title' => 'Dials a few well-known numbers',
            'point' => 1,
        ]);

        Option::create([
            'question_id' => $question1->id,
            'title' => 'Answers telephone but does not dial',
            'point' => 1,
        ]);

        Option::create([
            'question_id' => $question1->id,
            'title' => 'Does not use telephone at all',
            'point' => 0,
        ]);

        $question2 = Question::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Shopping?',
            'type' => 'multiple_choice',
        ]);

        Option::create([
            'question_id' => $question2->id,
            'title' => 'Takes care of all shopping needs independently',
            'point' => 1,
        ]);

        Option::create([
            'question_id' => $question2->id,
            'title' => 'Shops independently for small purchases',
            'point' => 0,
        ]);

        Option::create([
            'question_id' => $question2->id,
            'title' => 'Needs to be accompanied on any shopping trip',
            'point' => 0,
        ]);
        Option::create([
            'question_id' => $question2->id,
            'title' => 'Completely unable to shop',
            'point' => 0,
        ]);

        $question3 = Question::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Food Preparation?',
            'type' => 'multiple_choice',
        ]);

        Option::create([
            'question_id' => $question3->id,
            'title' => 'Plans, prepares and serves adequate meals independently',
            'point' => 1,
        ]);

        Option::create([
            'question_id' => $question3->id,
            'title' => 'Prepares adequate meals if supplied with ingredients',
            'point' => 0,
        ]);

        Option::create([
            'question_id' => $question3->id,
            'title' => 'Heats, serves and prepares meals, or prepares meals, or prepares meals but does not maintain adequate diet',
            'point' => 0,
        ]);

        Option::create([
            'question_id' => $question3->id,
            'title' => 'Needs to have meals prepared and served',
            'point' => 0,
        ]);

        $question4 = Question::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Housekeeping?',
            'type' => 'multiple_choice',
        ]);

        Option::create([
            'question_id' => $question4->id,
            'title' => 'Maintains house alone or with occasional assistance (e.g. "heavy work domestic help")',
            'point' => 1,
        ]);

        Option::create([
            'question_id' => $question4->id,
            'title' => 'Performs light daily tasks such as dish washing, bed making',
            'point' => 1,
        ]);

        Option::create([
            'question_id' => $question4->id,
            'title' => 'Performs light daily tasks but cannot maintain acceptable level of cleanliness',
            'point' => 1,
        ]);

        Option::create([
            'question_id' => $question4->id,
            'title' => 'Needs help with all home maintenance tasks',
            'point' => 1,
        ]);

        Option::create([
            'question_id' => $question4->id,
            'title' => 'Does not participate in any housekeeping tasks',
            'point' => 0,
        ]);

        $question5 = Question::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Laundry?',
            'type' => 'multiple_choice',
        ]);

        Option::create([
            'question_id' => $question5->id,
            'title' => 'Does personal laundry completely',
            'point' => 1,
        ]);

        Option::create([
            'question_id' => $question5->id,
            'title' => 'Launders small items-rinses stockings, etc.',
            'point' => 1,
        ]);

        Option::create([
            'question_id' => $question5->id,
            'title' => 'All laundry must be done by others',
            'point' => 0,
        ]);

        $question6 = Question::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Mode of Transportation?',
            'type' => 'multiple_choice',
        ]);

        Option::create([
            'question_id' => $question6->id,
            'title' => 'Travels independently on public transportation or drives own car',
            'point' => 1,
        ]);

        Option::create([
            'question_id' => $question6->id,
            'title' => 'Arranges own travel via taxi, but does not otherwise use public transportation',
            'point' => 1,
        ]);

        Option::create([
            'question_id' => $question6->id,
            'title' => 'Travels on public transportation when accompanied by another',
            'point' => 1,
        ]);

        Option::create([
            'question_id' => $question6->id,
            'title' => 'Travel limited to taxi or automobile with assistance of another',
            'point' => 0,
        ]);

        Option::create([
            'question_id' => $question6->id,
            'title' => 'Does not travel at all',
            'point' => 0,
        ]);

        $question7 = Question::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Responsibility for Own Medications?',
            'type' => 'multiple_choice',
        ]);

        Option::create([
            'question_id' => $question7->id,
            'title' => 'Is responsible for taking medication in correct dosages at correct time',
            'point' => 1,
        ]);

        Option::create([
            'question_id' => $question7->id,
            'title' => 'Takes responsibility if medication is prepared in advance in separate dosage',
            'point' => 0,
        ]);

        Option::create([
            'question_id' => $question7->id,
            'title' => 'Is not capable of dispensing own medication',
            'point' => 0,
        ]);

        $question8 = Question::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Ability to Handle Finances?',
            'type' => 'multiple_choice',
        ]);

        Option::create([
            'question_id' => $question8->id,
            'title' => 'Manages financial matters independently (budgets, writes checks, pays rent, bills, goes to bank), collects and keeps track of income',
            'point' => 1,
        ]);

        Option::create([
            'question_id' => $question8->id,
            'title' => 'Manages day-to-day purchases, but needs help with banking, major purchases, etc.',
            'point' => 1,
        ]);

        Option::create([
            'question_id' => $question8->id,
            'title' => 'Incapable of handling money',
            'point' => 0,
        ]);
    }

}
