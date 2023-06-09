<?php

namespace Database\Seeders;

use App\Models\AssessmentGroup;
use App\Models\AssessmentTool;
use App\Models\Question;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DSMSELFCHILDAssessmentToolSeeder extends Seeder
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
            'title' => 'DSM-5-TR Self-Rated Level 1 Cross-Cutting Symptom Measure—Child Age 11–17',
            'slug' => 'DSM-5-self-child',
            'type' => 'questionnaire'
        ]);

        $group1 = AssessmentGroup::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => '',
        ]);

        $group2 = AssessmentGroup::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => '',
        ]);

        $group3 = AssessmentGroup::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => '',
        ]);

        $group4 = AssessmentGroup::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => '',
        ]);

        $group5 = AssessmentGroup::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => '',
        ]);

        $group6 = AssessmentGroup::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => '',
        ]);

        $group7 = AssessmentGroup::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => '',
        ]);

        $group8 = AssessmentGroup::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => '',
        ]);

        $group9 = AssessmentGroup::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => '',
        ]);

        $group10 = AssessmentGroup::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => '',
        ]);

        $group11 = AssessmentGroup::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => '',
        ]);

        $group12 = AssessmentGroup::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => '',
        ]);

        $question1 = Question::create([
            'assessment_group_id' => $group1->id,
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Been bothered by stomachaches, headaches, or other aches and pains?',
            'type' => 'multiple_choice',
        ]);

        $question2 = Question::create([
            'assessment_group_id' => $group1->id,
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Worried about your health or about getting sick?',
            'type' => 'multiple_choice',
        ]);

        $question3 = Question::create([
            'assessment_group_id' => $group2->id,
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Been bothered by not being able to fall asleep or stay asleep, or by waking
            up too early?',
            'type' => 'multiple_choice',
        ]);

        $question4 = Question::create([
            'assessment_group_id' => $group3->id,
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Been bothered by not being able to pay attention when you were in class or
            doing homework or reading a book or playing a game?',
            'type' => 'multiple_choice',
        ]);

        $question5 = Question::create([
            'assessment_group_id' => $group4->id,
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Had less fun doing things than you used to?',
            'type' => 'multiple_choice',
        ]);

        $question6 = Question::create([
            'assessment_group_id' => $group4->id,
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Felt sad or depressed for several hours?',
            'type' => 'multiple_choice',
        ]);

        $question7 = Question::create([
            'assessment_group_id' => $group5->id,
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Felt more irritated or easily annoyed than usual?',
            'type' => 'multiple_choice',
        ]);

        $question8 = Question::create([
            'assessment_group_id' => $group6->id,
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Felt angry or lost your temper?',
            'type' => 'multiple_choice',
        ]);

        $question9 = Question::create([
            'assessment_group_id' => $group7->id,
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Started lots more projects than usual or done more risky things than usual?',
            'type' => 'multiple_choice',
        ]);

        $question10 = Question::create([
            'assessment_group_id' => $group7->id,
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Slept less than usual but still had a lot of energy? ',
            'type' => 'multiple_choice',
        ]);

        $question11 = Question::create([
            'assessment_group_id' => $group8->id,
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Felt nervous, anxious, or scared?',
            'type' => 'multiple_choice',
        ]);

        $question12 = Question::create([
            'assessment_group_id' => $group8->id,
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Not been able to stop worrying?',
            'type' => 'multiple_choice',
        ]);

        $question13 = Question::create([
            'assessment_group_id' => $group8->id,
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Not been able to do things you wanted to or should have done, because
            they made you feel nervous?',
            'type' => 'multiple_choice',
        ]);

        $question14 = Question::create([
            'assessment_group_id' => $group9->id,
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Heard voices—when there was no one there—speaking about you or telling
            you what to do or saying bad things to you? ',
            'type' => 'multiple_choice',
        ]);

        $question15 = Question::create([
            'assessment_group_id' => $group9->id,
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Had visions when you were completely awake—that is, seen something or
            someone that no one else could see?',
            'type' => 'multiple_choice',
        ]);

        $question16 = Question::create([
            'assessment_group_id' => $group10->id,
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Had thoughts that kept coming into your mind that you would do
            something bad or that something bad would happen to you or to someone
            else?',
            'type' => 'multiple_choice',
        ]);

        $question17 = Question::create([
            'assessment_group_id' => $group10->id,
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Felt the need to check on certain things over and over again, like whether a
            door was locked or whether the stove was turned off? ',
            'type' => 'multiple_choice',
        ]);

        $question18 = Question::create([
            'assessment_group_id' => $group10->id,
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Worried a lot about things you touched being dirty or having germs or being
            poisoned?',
            'type' => 'multiple_choice',
        ]);

        $question19 = Question::create([
            'assessment_group_id' => $group10->id,
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Felt you had to do things in a certain way, like counting or saying special
            things, to keep something bad from happening?',
            'type' => 'multiple_choice',
        ]);

        $question20 = Question::create([
            'assessment_group_id' => $group11->id,
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Had an alcoholic beverage (beer, wine, liquor, etc.)?',
            'type' => 'open_ended',
        ]);

        $question21 = Question::create([
            'assessment_group_id' => $group11->id,
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Smoked a cigarette, a cigar, or pipe, or used snuff or chewing tobacco?',
            'type' => 'open_ended',
        ]);

        $question22 = Question::create([
            'assessment_group_id' => $group11->id,
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Used drugs like marijuana, cocaine or crack, club drugs (like Ecstasy),
            hallucinogens (like LSD), heroin, inhalants or solvents (like glue), or
            methamphetamine (like speed)?',
            'type' => 'open_ended',
        ]);

        $question23 = Question::create([
            'assessment_group_id' => $group11->id,
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Used any medicine without a doctor’s prescription to get high or change
            the way you feel (e.g., painkillers [like Vicodin], stimulants [like Ritalin or
            Adderall], sedatives or tranquilizers [like sleeping pills or Valium], or
            steroids)?',
            'type' => 'open_ended',
        ]);

        $question24 = Question::create([
            'assessment_group_id' => $group12->id,
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'In the last 2 weeks, have you thought about killing yourself or committing
            suicide?',
            'type' => 'open_ended',
        ]);

        $question25 = Question::create([
            'assessment_group_id' => $group12->id,
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Have you EVER tried to kill yourself?',
            'type' => 'open_ended',
        ]);
    }
}
