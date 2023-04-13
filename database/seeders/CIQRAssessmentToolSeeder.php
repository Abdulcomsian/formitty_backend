<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\AssessmentTool;
use App\Models\Option;
use App\Models\Question;

class CIQRAssessmentToolSeeder extends Seeder
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
            'title' => 'The Community Integration Questionnaire-Revised(CIQ-R)',
            'slug' => 'the community integration questionnaire-revised',
            'type' => 'questionnaire'
        ]);

        $question1 = Question::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Who usually does the shopping for groceries or other necessities in your household?',
            'type' => 'multiple_choice',
        ]);

        Option::create([
            'question_id' => $question1->id,
            'title' => 'Yourself alone',
        ]);

        Option::create([
            'question_id' => $question1->id,
            'title' => 'Yourself and someone else',
        ]);

        Option::create([
            'question_id' => $question1->id,
            'title' => 'Someone else',
        ]);

        $question2 = Question::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Who usually prepares meals in your household?',
            'type' => 'multiple_choice',
        ]);

        Option::create([
            'question_id' => $question2->id,
            'title' => 'Yourself alone',
        ]);

        Option::create([
            'question_id' => $question2->id,
            'title' => 'Yourself and someone else',
        ]);

        Option::create([
            'question_id' => $question2->id,
            'title' => 'Someone else',
        ]);

        $question3 = Question::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'In your home who usually does normal everyday housework?',
            'type' => 'multiple_choice',
        ]);

        Option::create([
            'question_id' => $question3->id,
            'title' => 'Yourself alone',
        ]);

        Option::create([
            'question_id' => $question3->id,
            'title' => 'Yourself and someone else',
        ]);

        Option::create([
            'question_id' => $question3->id,
            'title' => 'Someone else',
        ]);

        $question4 = Question::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Who usually cares for the children in your home?',
            'type' => 'multiple_choice',
        ]);

        Option::create([
            'question_id' => $question4->id,
            'title' => 'Yourself alone',
        ]);

        Option::create([
            'question_id' => $question4->id,
            'title' => 'Yourself and someone else',
        ]);

        Option::create([
            'question_id' => $question4->id,
            'title' => 'Someone else',
        ]);

        Option::create([
            'question_id' => $question4->id,
            'title' => 'Not applicable (no children under 17 yrs in the home)',
        ]);

        $question5 = Question::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Who usually plans social arrangements such as get-togethers with family and friends?',
            'type' => 'multiple_choice',
        ]);

        Option::create([
            'question_id' => $question5->id,
            'title' => 'Yourself alone',
        ]);

        Option::create([
            'question_id' => $question5->id,
            'title' => 'Yourself and someone else',
        ]);

        Option::create([
            'question_id' => $question5->id,
            'title' => 'Someone else',
        ]);

        $question6 = Question::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Who usually looks after your personal finances, such as banking or paying bills?',
            'type' => 'multiple_choice',
        ]);

        Option::create([
            'question_id' => $question6->id,
            'title' => 'Yourself alone',
        ]);

        Option::create([
            'question_id' => $question6->id,
            'title' => 'Yourself and someone else',
        ]);

        Option::create([
            'question_id' => $question6->id,
            'title' => 'Someone else',
        ]);

        $question7 = Question::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Approximately how many times a month do you usually participate in shopping outside your home?',
            'type' => 'multiple_choice',
        ]);

        Option::create([
            'question_id' => $question7->id,
            'title' => '5 or more',
        ]);

        Option::create([
            'question_id' => $question7->id,
            'title' => '1-4 times',
        ]);

        Option::create([
            'question_id' => $question7->id,
            'title' => 'Never',
        ]);

        $question8 = Question::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Approximately how many times a month do you usually participate in leisure activities such as movies, sports, restaurants, etc?',
            'type' => 'multiple_choice',
        ]);

        Option::create([
            'question_id' => $question8->id,
            'title' => '5 or more',
        ]);

        Option::create([
            'question_id' => $question8->id,
            'title' => '1-4 times',
        ]);

        Option::create([
            'question_id' => $question8->id,
            'title' => 'Never',
        ]);

        $question9 = Question::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Approximately how many times a month do you usually visit friends or relatives?',
            'type' => 'multiple_choice',
        ]);

        Option::create([
            'question_id' => $question9->id,
            'title' => '5 or more',
        ]);

        Option::create([
            'question_id' => $question9->id,
            'title' => '1-4 times',
        ]);

        Option::create([
            'question_id' => $question9->id,
            'title' => 'Never',
        ]);
        
        $question10 = Question::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'When you participate in leisure activities do you usually do this alone or with others?',
            'type' => 'multiple_choice',
        ]);

        Option::create([
            'question_id' => $question10->id,
            'title' => 'Mostly alone',
        ]);

        Option::create([
            'question_id' => $question10->id,
            'title' => 'Mostly with family members',
        ]);

        Option::create([
            'question_id' => $question10->id,
            'title' => 'Mostly with friends who have a disability',
        ]);

        Option::create([
            'question_id' => $question10->id,
            'title' => 'Mostly with friends who do not have a disability',
        ]);

        Option::create([
            'question_id' => $question10->id,
            'title' => 'With a combination of family and friends',
        ]);

        $question11 = Question::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Do you have a best friend in whom you confide?',
            'type' => 'multiple_choice',
        ]);

        Option::create([
            'question_id' => $question11->id,
            'title' => 'Yes',
        ]);

        Option::create([
            'question_id' => $question11->id,
            'title' => 'No',
        ]);

        $question12 = Question::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'How often do you travel outside the home?',
            'type' => 'multiple_choice',
        ]);

        Option::create([
            'question_id' => $question12->id,
            'title' => 'Almost every day',
        ]);

        Option::create([
            'question_id' => $question12->id,
            'title' => 'Almost every week',
        ]);

        Option::create([
            'question_id' => $question12->id,
            'title' => 'Seldom / never (less than once per week)',
        ]);

        $question13 = Question::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Please check the answer that best corresponds to your current (during the past month) work situation:',
            'type' => 'multiple_choice',
        ]);

        Option::create([
            'question_id' => $question13->id,
            'title' => 'Full-time (more than 20 hours per week)',
        ]);

        Option::create([
            'question_id' => $question13->id,
            'title' => 'Part-time (less than or equal to 20 hours per week)',
        ]);

        Option::create([
            'question_id' => $question13->id,
            'title' => 'Not working, but actively looking for work',
        ]);

        Option::create([
            'question_id' => $question13->id,
            'title' => 'Not working, not looking for work',
        ]);

        Option::create([
            'question_id' => $question13->id,
            'title' => 'Not applicable, retired due to age',
        ]);

        $question14 = Question::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Please check the answer that best corresponds to your current (during the past month) school or training program situation:',
            'type' => 'multiple_choice',
        ]);

        Option::create([
            'question_id' => $question14->id,
            'title' => 'Full-time',
        ]);

        Option::create([
            'question_id' => $question14->id,
            'title' => 'Part-time',
        ]);

        Option::create([
            'question_id' => $question14->id,
            'title' => 'Not attending school or training program',
        ]);

        Option::create([
            'question_id' => $question14->id,
            'title' => 'Not applicable, retired due to age',
        ]);

        $question15 = Question::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'In the past month, how often did you engage in volunteer activities?',
            'type' => 'multiple_choice',
        ]);

        Option::create([
            'question_id' => $question15->id,
            'title' => '5 or more',
        ]);

        Option::create([
            'question_id' => $question15->id,
            'title' => '1-4 times',
        ]);

        Option::create([
            'question_id' => $question15->id,
            'title' => 'Never',
        ]);

        $question16 = Question::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'How often do you write to people for social contact using the Internet (e.g., email, social networking sites such as Facebook)?',
            'type' => 'multiple_choice',
        ]);

        Option::create([
            'question_id' => $question16->id,
            'title' => 'Every day / most days',
        ]);

        Option::create([
            'question_id' => $question16->id,
            'title' => 'Almost every week',
        ]);

        Option::create([
            'question_id' => $question16->id,
            'title' => 'Seldom / never',
        ]);

        $question17 = Question::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'How often do you talk to people for social contact using an online video link (e.g. Skype, FaceTime)?',
            'type' => 'multiple_choice',
        ]);

        Option::create([
            'question_id' => $question17->id,
            'title' => 'Every day / most days',
        ]);

        Option::create([
            'question_id' => $question17->id,
            'title' => 'Almost every week',
        ]);

        Option::create([
            'question_id' => $question17->id,
            'title' => 'Seldom / never',
        ]);

        $question18 = Question::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'How often do you make social contact with people by talking or text messaging using your phone?',
            'type' => 'multiple_choice',
        ]);

        Option::create([
            'question_id' => $question18->id,
            'title' => 'Every day / most days',
        ]);

        Option::create([
            'question_id' => $question18->id,
            'title' => 'Almost every week',
        ]);

        Option::create([
            'question_id' => $question18->id,
            'title' => 'Seldom / never',
        ]);
    }
}
