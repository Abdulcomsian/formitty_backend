<?php

namespace Database\Seeders;

use App\Models\AssessmentGroup;
use App\Models\AssessmentTool;
use App\Models\Question;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DSMPARENTAssessmentToolSeeder extends Seeder
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
            'title' => 'DSM-5-TR Parent/Guardian-Rated Level 1 Cross-Cutting Symptom Measure—Child Age 6–17',
            'slug' => 'DSM-5-parent',
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

        $question = Question::create([
            'assessment_group_id' => $group1->id,
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Complained of stomachaches, headaches, or other aches and pains? ',
            'type' => 'multiple_choice',
        ]);

        $question2 = Question::create([
            'assessment_group_id' => $group1->id,
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Said he/she was worried about his/her health or about getting sick?',
            'type' => 'multiple_choice',
        ]);

        $question3 = Question::create([
            'assessment_group_id' => $group2->id,
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Had problems sleeping—that is, trouble falling asleep, staying asleep, or waking up too early?',
            'type' => 'multiple_choice',
        ]);

        $question4 = Question::create([
            'assessment_group_id' => $group3->id,
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Had problems paying attention when he/she was in class or doing his/her
            homework or reading a book or playing a game?',
            'type' => 'multiple_choice',
        ]);

        $question5 = Question::create([
            'assessment_group_id' => $group4->id,
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Had less fun doing things than he/she used to?',
            'type' => 'multiple_choice',
        ]);

        $question6 = Question::create([
            'assessment_group_id' => $group4->id,
            'assessment_tool_id' => $assessment_tool->id,
            'title' => ' Seemed sad or depressed for several hours?',
            'type' => 'multiple_choice',
        ]);

        $question7 = Question::create([
            'assessment_group_id' => $group5->id,
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Seemed more irritated or easily annoyed than usual?',
            'type' => 'multiple_choice',
        ]);

        $question8 = Question::create([
            'assessment_group_id' => $group6->id,
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Seemed angry or lost his/her temper?',
            'type' => 'multiple_choice',
        ]);

        $question9 = Question::create([
            'assessment_group_id' => $group7->id,
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Started lots more projects than usual or did more risky things than usual?',
            'type' => 'multiple_choice',
        ]);

        $question10 = Question::create([
            'assessment_group_id' => $group7->id,
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Slept less than usual for him/her, but still had lots of energy?',
            'type' => 'multiple_choice',
        ]);

        $question11 = Question::create([
            'assessment_group_id' => $group8->id,
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Said he/she felt nervous, anxious, or scared?',
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
            'title' => 'Said he/she couldn’t do things he/she wanted to or should have done,
            because they made him/her feel nervous?',
            'type' => 'multiple_choice',
        ]);

        $question14 = Question::create([
            'assessment_group_id' => $group9->id,
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Said that he/she heard voices—when there was no one there—speaking
            about him/her or telling him/her what to do or saying bad things to him/her?',
            'type' => 'multiple_choice',
        ]);

        $question15 = Question::create([
            'assessment_group_id' => $group9->id,
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Said that he/she had a vision when he/she was completely awake—that is,
            saw something or someone that no one else could see?',
            'type' => 'multiple_choice',
        ]);

        $question16 = Question::create([
            'assessment_group_id' => $group10->id,
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Said that he/she had thoughts that kept coming into his/her mind that he/she
            would do something bad or that something bad would happen to him/her or
            to someone else?',
            'type' => 'multiple_choice',
        ]);

        $question17 = Question::create([
            'assessment_group_id' => $group10->id,
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Said he/she felt the need to check on certain things over and over again, like
            whether a door was locked or whether the stove was turned off?',
            'type' => 'multiple_choice',
        ]);

        $question18 = Question::create([
            'assessment_group_id' => $group10->id,
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Seemed to worry a lot about things he/she touched being dirty or having
            germs or being poisoned?',
            'type' => 'multiple_choice',
        ]);

        $question19 = Question::create([
            'assessment_group_id' => $group10->id,
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Said that he/she had to do things in a certain way, like counting or saying
            special things out loud, in order to keep something bad from happening?',
            'type' => 'multiple_choice',
        ]);

        $question20 = Question::create([
            'assessment_group_id' => $group11->id,
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Had an alcoholic beverage (beer, wine, liquor, etc.)?',
            'type' => 'multiple_choice',
        ]);

        $question21 = Question::create([
            'assessment_group_id' => $group11->id,
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Smoked a cigarette, a cigar, or pipe, or used snuff or chewing tobacco?',
            'type' => 'multiple_choice',
        ]);

        $question22 = Question::create([
            'assessment_group_id' => $group11->id,
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Used drugs like marijuana, cocaine or crack, club drugs (like ecstasy),
            hallucinogens (like LSD), heroin, inhalants or solvents (like glue), or
            methamphetamine (like speed)?',
            'type' => 'multiple_choice',
        ]);

        $question23 = Question::create([
            'assessment_group_id' => $group11->id,
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Used any medicine without a doctor’s prescription (e.g., painkillers [like
            Vicodin], stimulants [like Ritalin or Adderall], sedatives or tranquilizers [like
            sleeping pills or Valium], or steroids)?',
            'type' => 'multiple_choice',
        ]);

        $question24 = Question::create([
            'assessment_group_id' => $group12->id,
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'In the past TWO (2) WEEKS, has he/she talked about wanting to kill
            himself/herself or about wanting to commit suicide?',
            'type' => 'multiple_choice',
        ]);

        $question25 = Question::create([
            'assessment_group_id' => $group12->id,
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Has he/she EVER tried to kill himself/herself?',
            'type' => 'multiple_choice',
        ]);
    }
}
