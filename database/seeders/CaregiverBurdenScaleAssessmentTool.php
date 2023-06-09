<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\AssessmentGroup;
use App\Models\AssessmentTool;
use App\Models\Option;
use App\Models\Question;

class CaregiverBurdenScaleAssessmentTool extends Seeder
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
            'title' => 'Caregiver Burden Scale',
            'slug' => 'Caregiver-Burden-Scale',
            'type' => 'questionnaire'
        ]);

        $group1 = AssessmentGroup::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'In general, how often do you feel:',
        ]);

        $group2 = AssessmentGroup::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'In regard to the relative for whom you are caring, how often do you feel:',
        ]);

        $group3 = AssessmentGroup::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'When you are with the relative for whom you are caring, how often do you feel:',
        ]);

        $group4 = AssessmentGroup::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'How often do you feel that your relationship with the relative for whom you’re caring negatively impacts:',
        ]);

        $group5 = AssessmentGroup::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'How often do you:',
        ]);

        $question1 = Question::create([
            'assessment_group_id' => $group1->id,
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'There is not enough time for yourself',
            'type' => 'multiple_choice',
        ]);

        Option::create([
            'question_id' => $question1->id,
            'title' => '0',
        ]);

        Option::create([
            'question_id' => $question1->id,
            'title' => '1',
        ]);

        Option::create([
            'question_id' => $question1->id,
            'title' => '2',
        ]);

        Option::create([
            'question_id' => $question1->id,
            'title' => '3',
        ]);

        Option::create([
            'question_id' => $question1->id,
            'title' => '4',
        ]);

        $question2 = Question::create([
            'assessment_group_id' => $group1->id,
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Overtaxed with responsibilities',
            'type' => 'multiple_choice',
        ]);

        Option::create([
            'question_id' => $question2->id,
            'title' => '0',
        ]);

        Option::create([
            'question_id' => $question2->id,
            'title' => '1',
        ]);

        Option::create([
            'question_id' => $question2->id,
            'title' => '2',
        ]);

        Option::create([
            'question_id' => $question2->id,
            'title' => '3',
        ]);

        Option::create([
            'question_id' => $question2->id,
            'title' => '4',
        ]);

        $question3 = Question::create([
            'assessment_group_id' => $group1->id,
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Like you’ve lost control over your life',
            'type' => 'multiple_choice',
        ]);

        Option::create([
            'question_id' => $question3->id,
            'title' => '0',
        ]);

        Option::create([
            'question_id' => $question3->id,
            'title' => '1',
        ]);

        Option::create([
            'question_id' => $question3->id,
            'title' => '2',
        ]);

        Option::create([
            'question_id' => $question3->id,
            'title' => '3',
        ]);

        Option::create([
            'question_id' => $question3->id,
            'title' => '4',
        ]);

        $question4 = Question::create([
            'assessment_group_id' => $group2->id,
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Uncertain about what to do for your relative',
            'type' => 'multiple_choice',
        ]);

        Option::create([
            'question_id' => $question4->id,
            'title' => '0',
        ]);

        Option::create([
            'question_id' => $question4->id,
            'title' => '1',
        ]);

        Option::create([
            'question_id' => $question4->id,
            'title' => '2',
        ]);

        Option::create([
            'question_id' => $question4->id,
            'title' => '3',
        ]);

        Option::create([
            'question_id' => $question4->id,
            'title' => '4',
        ]);

        $question5 = Question::create([
            'assessment_group_id' => $group2->id,
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Like you should do more for your relative',
            'type' => 'multiple_choice',
        ]);

        Option::create([
            'question_id' => $question5->id,
            'title' => '0',
        ]);

        Option::create([
            'question_id' => $question5->id,
            'title' => '1',
        ]);

        Option::create([
            'question_id' => $question5->id,
            'title' => '2',
        ]);

        Option::create([
            'question_id' => $question5->id,
            'title' => '3',
        ]);

        Option::create([
            'question_id' => $question5->id,
            'title' => '4',
        ]);

        $question6 = Question::create([
            'assessment_group_id' => $group2->id,
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Like you could do a better job of caring',
            'type' => 'multiple_choice',
        ]);

        Option::create([
            'question_id' => $question6->id,
            'title' => '0',
        ]);

        Option::create([
            'question_id' => $question6->id,
            'title' => '1',
        ]);

        Option::create([
            'question_id' => $question6->id,
            'title' => '2',
        ]);

        Option::create([
            'question_id' => $question6->id,
            'title' => '3',
        ]);

        Option::create([
            'question_id' => $question6->id,
            'title' => '4',
        ]);


        $question7 = Question::create([
            'assessment_group_id' => $group3->id,
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'A sense of strain',
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
            'assessment_group_id' => $group3->id,
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Anger',
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
            'assessment_group_id' => $group3->id,
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Embarrassment',
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
            'assessment_group_id' => $group3->id,
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Uncomfortable about having friends over',
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
            'assessment_group_id' => $group4->id,
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Your social life',
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
            'assessment_group_id' => $group4->id,
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Other relationships with family and friends',
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
            'assessment_group_id' => $group4->id,
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Your health',
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
            'assessment_group_id' => $group4->id,
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Your privacy',
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
            'assessment_group_id' => $group5->id,
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Feel you receive excessive help requests',
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
            'assessment_group_id' => $group5->id,
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Feel all the responsibility falls on one caregiver',
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
            'assessment_group_id' => $group5->id,
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Fear the future regarding your relative',
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
            'assessment_group_id' => $group5->id,
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Fear not having enough money to care for your relative',
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
            'assessment_group_id' => $group5->id,
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Fear not being able to continue caring for your relative',
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
            'question_id' => $question19->id,
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


        $question20 = Question::create([
            'assessment_group_id' => $group5->id,
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Wish to leave the care of your relative to someone else',
            'type' => 'multiple_choice',
        ]);

        Option::create([
            'question_id' => $question20->id,
            'title' => '0',
        ]);

        Option::create([
            'question_id' => $question20->id,
            'title' => '1',
        ]);

        Option::create([
            'question_id' => $question20->id,
            'title' => '2',
        ]);

        Option::create([
            'question_id' => $question20->id,
            'title' => '3',
        ]);

        Option::create([
            'question_id' => $question20->id,
            'title' => '4',
        ]);


        $question21 = Question::create([
            'assessment_group_id' => $group5->id,
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'How much does your spouse/loved one depend on you as the caregiver?',
            'type' => 'multiple_choice',
        ]);

        Option::create([
            'question_id' => $question21->id,
            'title' => '0',
        ]);

        Option::create([
            'question_id' => $question21->id,
            'title' => '1',
        ]);

        Option::create([
            'question_id' => $question21->id,
            'title' => '2',
        ]);

        Option::create([
            'question_id' => $question21->id,
            'title' => '3',
        ]);

        Option::create([
            'question_id' => $question21->id,
            'title' => '4',
        ]);
    }
}
