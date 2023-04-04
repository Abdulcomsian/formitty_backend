<?php

namespace Database\Seeders;

use App\Models\AssessmentTool;
use App\Models\Option;
use App\Models\Question;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ISNCSCIAssessmentToolSeeder extends Seeder
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
            'title' => 'Abbreviated Life Skills Profile (LSP-16)',
            'slug' => 'abbreviated-life',
            'type' => 'questionnaire'
        ]);

        $question1 = Question::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Does this person generally have any difficulty
            with initiating and responding to conversation?',
            'type' => 'multiple_choice',
        ]);

        Option::create([
            'question_id' => $question1->id,
            'title' => 'No difficulty',
        ]);

        Option::create([
            'question_id' => $question1->id,
            'title' => 'Slight difficulty',
        ]);

        Option::create([
            'question_id' => $question1->id,
            'title' => 'Moderate difficulty',
        ]);

        Option::create([
            'question_id' => $question1->id,
            'title' => 'Extreme difficulty',
        ]);

        $question2 = Question::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Does this person generally withdraw from
            social contact?',
            'type' => 'multiple_choice',
        ]);

        Option::create([
            'question_id' => $question1->id,
            'title' => 'Does not withdraw at all',
        ]);

        Option::create([
            'question_id' => $question1->id,
            'title' => 'Withdraws slightly',
        ]);

        Option::create([
            'question_id' => $question1->id,
            'title' => 'Withdraws moderately',
        ]);

        Option::create([
            'question_id' => $question1->id,
            'title' => 'Withdraws totally or near totally',
        ]);

        $question3 = Question::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Does this person generally show warmth to
            others?',
            'type' => 'multiple_choice',
        ]);

        Option::create([
            'question_id' => $question3->id,
            'title' => 'Considerable warmth',
        ]);

        Option::create([
            'question_id' => $question3->id,
            'title' => 'Moderate warmth',
        ]);

        Option::create([
            'question_id' => $question3->id,
            'title' => 'Slight warmth',
        ]);

        Option::create([
            'question_id' => $question3->id,
            'title' => 'No warmth at all',
        ]);

        $question4 = Question::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Is this person generally well groomed (eg,
            neatly dressed, hair combed)?',
            'type' => 'multiple_choice',
        ]);

        Option::create([
            'question_id' => $question4->id,
            'title' => 'Well groomed',
        ]);

        Option::create([
            'question_id' => $question4->id,
            'title' => 'Moderately well groomed',
        ]);

        Option::create([
            'question_id' => $question4->id,
            'title' => 'Poorly groomed',
        ]);

        Option::create([
            'question_id' => $question4->id,
            'title' => 'Extremely Poorly groomed',
        ]);

        $question5 = Question::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Does this person wear clean clothes generally,
            or ensure that they are cleaned if dirty?',
            'type' => 'multiple_choice',
        ]);

        Option::create([
            'question_id' => $question5->id,
            'title' => 'Maintains cleanliness of clothes',
        ]);

        Option::create([
            'question_id' => $question5->id,
            'title' => 'Moderate cleanliness of clothes',
        ]);

        Option::create([
            'question_id' => $question5->id,
            'title' => 'Poorly cleanliness of clothes',
        ]);

        Option::create([
            'question_id' => $question5->id,
            'title' => 'Extremely Poorly groomed',
        ]);

        $question6 = Question::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Does this person generally neglect her or his
            physical health?',
            'type' => 'multiple_choice',
        ]);

        Option::create([
            'question_id' => $question6->id,
            'title' => 'No neglect',
        ]);

        Option::create([
            'question_id' => $question6->id,
            'title' => 'Slight neglect of physical problems',
        ]);

        Option::create([
            'question_id' => $question6->id,
            'title' => 'Moderate neglect of physical problems',
        ]);

        Option::create([
            'question_id' => $question6->id,
            'title' => 'Extreme neglect of physical problems',
        ]);

        $question7 = Question::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Is this person violent to others?',
            'type' => 'multiple_choice',
        ]);

        Option::create([
            'question_id' => $question7->id,
            'title' => 'Not at all',
        ]);

        Option::create([
            'question_id' => $question7->id,
            'title' => 'Rarely',
        ]);

        Option::create([
            'question_id' => $question7->id,
            'title' => 'Occasionally',
        ]);

        Option::create([
            'question_id' => $question7->id,
            'title' => 'Often',
        ]);

        $question8 = Question::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Does this person generally make and/or keep up friendships?',
            'type' => 'multiple_choice',
        ]);

        Option::create([
            'question_id' => $question8->id,
            'title' => 'Friendships made or kept up well',
        ]);

        Option::create([
            'question_id' => $question8->id,
            'title' => 'Friendships made or kept up with slight difficulty',
        ]);

        Option::create([
            'question_id' => $question8->id,
            'title' => 'Friendships made or kept up with with considerable difficulty',
        ]);

        Option::create([
            'question_id' => $question8->id,
            'title' => 'No friendships made or none kept',
        ]);

        $question9 = Question::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Does this person generally maintain an adequate diet?',
            'type' => 'multiple_choice',
        ]);

        Option::create([
            'question_id' => $question9->id,
            'title' => 'No problem',
        ]);

        Option::create([
            'question_id' => $question9->id,
            'title' => 'Slight problem',
        ]);

        Option::create([
            'question_id' => $question9->id,
            'title' => 'Moderate problem',
        ]);

        Option::create([
            'question_id' => $question9->id,
            'title' => 'Extreme problem',
        ]);

        $question10 = Question::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Does this person generally look after and take
            her or his own prescribed medication (or attend
            for prescribed injections on time) without
            reminding?',
            'type' => 'multiple_choice',
        ]);

        Option::create([
            'question_id' => $question10->id,
            'title' => 'Reliable with medication',
        ]);

        Option::create([
            'question_id' => $question10->id,
            'title' => 'Slighttly unreliable',
        ]);

        Option::create([
            'question_id' => $question10->id,
            'title' => 'Moderately unreliable',
        ]);

        Option::create([
            'question_id' => $question10->id,
            'title' => 'Extremely unreliable',
        ]);

        $question11 = Question::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Is this person willing to take psychiatric
            medication when prescribed by a doctor?',
            'type' => 'multiple_choice',
        ]);

        Option::create([
            'question_id' => $question11->id,
            'title' => 'Always',
        ]);

        Option::create([
            'question_id' => $question11->id,
            'title' => 'Usually',
        ]);

        Option::create([
            'question_id' => $question11->id,
            'title' => 'Rarely',
        ]);

        Option::create([
            'question_id' => $question11->id,
            'title' => 'Never',
        ]);
        
        $question12 = Question::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Does this person co-operate with health
            services (eg, doctors and/or other health workers)?',
            'type' => 'multiple_choice',
        ]);

        Option::create([
            'question_id' => $question12->id,
            'title' => 'Always',
        ]);

        Option::create([
            'question_id' => $question12->id,
            'title' => 'Usually',
        ]);

        Option::create([
            'question_id' => $question12->id,
            'title' => 'Rarely',
        ]);

        Option::create([
            'question_id' => $question12->id,
            'title' => 'Never',
        ]);
        
        $question13 = Question::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Does this person generally have problems (eg,
            friction, avoidance) living with others in the household?',
            'type' => 'multiple_choice',
        ]);

        Option::create([
            'question_id' => $question13->id,
            'title' => 'No obvious problem',
        ]);

        Option::create([
            'question_id' => $question13->id,
            'title' => 'Slight problems',
        ]);

        Option::create([
            'question_id' => $question13->id,
            'title' => 'Moderate problems',
        ]);

        Option::create([
            'question_id' => $question13->id,
            'title' => 'Extreme problems',
        ]);

        $question14 = Question::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Does this person behave offensively (includes
            sexual behaviour)?',
            'type' => 'multiple_choice',
        ]);

        Option::create([
            'question_id' => $question14->id,
            'title' => 'No at all',
        ]);

        Option::create([
            'question_id' => $question14->id,
            'title' => 'Rarely',
        ]);

        Option::create([
            'question_id' => $question14->id,
            'title' => 'Occasionally',
        ]);

        Option::create([
            'question_id' => $question14->id,
            'title' => 'Often',
        ]);

        $question15 = Question::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Does this person behave irresponsibly?',
            'type' => 'multiple_choice',
        ]);

        Option::create([
            'question_id' => $question15->id,
            'title' => 'No at all',
        ]);

        Option::create([
            'question_id' => $question15->id,
            'title' => 'Rarely',
        ]);

        Option::create([
            'question_id' => $question15->id,
            'title' => 'Occasionally',
        ]);

        Option::create([
            'question_id' => $question15->id,
            'title' => 'Often',
        ]);

        $question16 = Question::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'What sort of work is this person generally
            capable of (even if unemployed, retired or
            doing unpaid domestic duties)?',
            'type' => 'multiple_choice',
        ]);

        Option::create([
            'question_id' => $question16->id,
            'title' => 'Capable of full time work',
        ]);

        Option::create([
            'question_id' => $question16->id,
            'title' => 'Capable of part time work',
        ]);

        Option::create([
            'question_id' => $question16->id,
            'title' => 'Capable only of sheltered work',
        ]);

        Option::create([
            'question_id' => $question16->id,
            'title' => 'Totally incapable of work',
        ]);
    }
}
