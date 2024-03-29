<?php

namespace Database\Seeders;

use App\Models\AssessmentTool;
use App\Models\AssessmentGroup;
use App\Models\Question;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DSMSELFAssessmentToolSeeder extends Seeder
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
            'title' => 'DSM-5-TR Self-Rated Level 1 Cross-Cutting Symptom Measure—Adu',
            'slug' => 'DSM-5-self',
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

        $group13 = AssessmentGroup::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => '',
        ]);

        $question1 = Question::create([
            'assessment_group_id' => $group1->id,
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Little interest or pleasure in doing things?',
            'type' => 'multiple_choice',
        ]);

        $question2 = Question::create([
            'assessment_group_id' => $group1->id,
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Feeling down, depressed, or hopeless? ',
            'type' => 'multiple_choice',
        ]);

        $question3 = Question::create([
            'assessment_group_id' => $group2->id,
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Feeling more irritated, grouchy, or angry than usual? ',
            'type' => 'multiple_choice',
        ]);

        $question4 = Question::create([
            'assessment_group_id' => $group3->id,
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Sleeping less than usual, but still have a lot of energy?',
            'type' => 'multiple_choice',
        ]);

        $question5 = Question::create([
            'assessment_group_id' => $group3->id,
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Starting lots more projects than usual or doing more risky things than usual?',
            'type' => 'multiple_choice',
        ]);

        $question6 = Question::create([
            'assessment_group_id' => $group4->id,
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Feeling nervous, anxious, frightened, worried, or on edge?',
            'type' => 'multiple_choice',
        ]);

        $question7 = Question::create([
            'assessment_group_id' => $group4->id,
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Feeling panic or being frightened?',
            'type' => 'multiple_choice',
        ]);

        $question8 = Question::create([
            'assessment_group_id' => $group4->id,
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Avoiding situations that make you anxious?',
            'type' => 'multiple_choice',
        ]);

        $question9 = Question::create([
            'assessment_group_id' => $group5->id,
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Unexplained aches and pains (e.g., head, back, joints, abdomen, legs)?',
            'type' => 'multiple_choice',
        ]);

        $question10 = Question::create([
            'assessment_group_id' => $group5->id,
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Feeling that your illnesses are not being taken seriously enough?',
            'type' => 'multiple_choice',
        ]);

        $question11 = Question::create([
            'assessment_group_id' => $group6->id,
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Thoughts of actually hurting yourself? ',
            'type' => 'multiple_choice',
        ]);

        $question12 = Question::create([
            'assessment_group_id' => $group7->id,
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Hearing things other people couldn’t hear, such as voices even when no one was around?',
            'type' => 'multiple_choice',
        ]);

        $question13 = Question::create([
            'assessment_group_id' => $group7->id,
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Feeling that someone could hear your thoughts, or that you could hear what another person was thinking?',
            'type' => 'multiple_choice',
        ]);

        $question14 = Question::create([
            'assessment_group_id' => $group8->id,
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Problems with sleep that affected your sleep quality over all?',
            'type' => 'multiple_choice',
        ]);

        $question15 = Question::create([
            'assessment_group_id' => $group9->id,
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Problems with memory (e.g., learning new information) or with location (e.g., finding your way home)?',
            'type' => 'multiple_choice',
        ]);

        $question16 = Question::create([
            'assessment_group_id' => $group10->id,
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Unpleasant thoughts, urges, or images that repeatedly enter your mind?',
            'type' => 'multiple_choice',
        ]);

        $question17 = Question::create([
            'assessment_group_id' => $group10->id,
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Feeling driven to perform certain behaviors or mental acts over and over again?',
            'type' => 'multiple_choice',
        ]);

        $question18 = Question::create([
            'assessment_group_id' => $group11->id,
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Feeling detached or distant from yourself, your body, your physical surroundings, or your memories?',
            'type' => 'multiple_choice',
        ]);

        $question19 = Question::create([
            'assessment_group_id' => $group12->id,
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Not knowing who you really are or what you want out of life? ',
            'type' => 'multiple_choice',
        ]);

        $question20 = Question::create([
            'assessment_group_id' => $group12->id,
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Not feeling close to other people or enjoying your relationships with them?',
            'type' => 'multiple_choice',
        ]);

        $question21 = Question::create([
            'assessment_group_id' => $group13->id,
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Drinking at least 4 drinks of any kind of alcohol in a single day?',
            'type' => 'multiple_choice',
        ]);

        $question22 = Question::create([
            'assessment_group_id' => $group13->id,
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Smoking any cigarettes, a cigar, or pipe, or using snuff or chewing tobacco?',
            'type' => 'multiple_choice',
        ]);

        $question23 = Question::create([
            'assessment_group_id' => $group13->id,
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Using any of the following medicines ON YOUR OWN, that is, without a
                        doctor’s prescription, in greater amounts or longer than prescribed [e.g.,
                        painkillers (like Vicodin), stimulants (like Ritalin or Adderall), sedatives or
                        tranquilizers (like sleeping pills or Valium), or drugs like marijuana, cocaine
                        or crack, club drugs (like ecstasy), hallucinogens (like LSD), heroin,
                        inhalants or solvents (like glue), or methamphetamine (like speed)]?',
            'type' => 'multiple_choice',
        ]);
    }
}
