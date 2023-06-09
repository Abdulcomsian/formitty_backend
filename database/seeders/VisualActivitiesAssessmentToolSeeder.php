<?php

namespace Database\Seeders;

use App\Models\AssessmentTool;
use App\Models\Question;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VisualActivitiesAssessmentToolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $assessment_tool = AssessmentTool::create([
            'title' => 'Visual Activities Questionnaire (VAQ)',
            'slug' => 'visual-activities',
            'type' => 'questionnaire'
        ]);

        $question1 = Question::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'I have problems adjusting to bright room lighting, after the
room lighting has been rather dim.',
            'type' => 'multiple_choice',
        ]);

        $question2 = Question::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'I have trouble noticing things in my peripheral vision.',
            'type' => 'multiple_choice',
        ]);

        $question3 = Question::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'I have trouble finding a specific item on a crowded supermarket shelf.',
            'type' => 'multiple_choice',
        ]);

        $question4 = Question::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'I have problems with lights around me causing glare when I am trying to see something.',
            'type' => 'multiple_choice',
        ]);

        $question5 = Question::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'I tend to confuse colors.',
            'type' => 'multiple_choice',
        ]);

        $question6 = Question::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'I have trouble locating a sign when it is surrounded by a lot of other signs.',
            'type' => 'multiple_choice',
        ]);

        $question7 = Question::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'I have problems reading small print (for example, phone book, newspapers).',
            'type' => 'multiple_choice',
        ]);

        $question8 = Question::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'I have trouble reading a sign or recognizing a picture when it is moving, such as an ad on a passing bus or truck.',
            'type' => 'multiple_choice',
        ]);

        $question9 = Question::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'When pouring liquid, I have trouble judging the level of the liquid
            in a container, such as the level of coffee in a cup.',
            'type' => 'multiple_choice',
        ]);

        $question10 = Question::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'I have trouble reading the menu in a dimly lit restaurant.',
            'type' => 'multiple_choice',
        ]);

        $question11 = Question::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'I have trouble seeing moving objects coming from the side until
            they are right in front of me.',
            'type' => 'multiple_choice',
        ]);

        $question12 = Question::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'It takes me a long time to adjust to darkness after being in
            bright light.',
            'type' => 'multiple_choice',
        ]);

        $question13 = Question::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'When I amm driving, other cars surprise me from the side,
            because I don not notice them until the last moment.',
            'type' => 'multiple_choice',
        ]);

        $question14 = Question::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'I have trouble driving when there are headlights from oncoming
            cars in my field of view.',
            'type' => 'multiple_choice',
        ]);

        $question15 = Question::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'I have difficulty reading small print under poor lighting.',
            'type' => 'multiple_choice',
        ]);

        $question16 = Question::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'I have problems locating something when it is surrounded by a lot of other things.',
            'type' => 'multiple_choice',
        ]);

        $question17 = Question::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => ' The color names that I use disagree with those that other people use.',
            'type' => 'multiple_choice',
        ]);

        $question18 = Question::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'I have problems carrying out activities that require a lot of visual concentration and attention.',
            'type' => 'multiple_choice',
        ]);

        $question19 = Question::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'When I am walking along, I have trouble noticing objects off to the side.',
            'type' => 'multiple_choice',
        ]);

        $question20 = Question::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'It takes me a long time to find an item in an unfamiliar store.',
            'type' => 'multiple_choice',
        ]);

        $question21 = Question::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'Sometimes when I reach for an object, I find that it is further away (or closer) than I thought.',
            'type' => 'multiple_choice',
        ]);

        $question22 = Question::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'I have difficulty noticing when the car in front of me is
            speeding up or slowing down.',
            'type' => 'multiple_choice',
        ]);

        $question23 = Question::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'It takes me a long time to adjust to bright sunshine after I
            have been inside a building for a lengthy period of time.',
            'type' => 'multiple_choice',
        ]);

        $question24 = Question::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'When driving at night, objects from the side unexpectedly
            appear or pop up in my field of view.',
            'type' => 'multiple_choice',
        ]);


        $question25 = Question::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => ' I have difficulty distinguishing between colors.',
            'type' => 'multiple_choice',
        ]);

        $question26 = Question::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'I bump into people in a busy store because I have problems
            seeing them in my peripheral vision.',
            'type' => 'multiple_choice',
        ]);

        $question27 = Question::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'I have difficulty doing any type of work which requires me to
            see well up close.',
            'type' => 'multiple_choice',
        ]);

        $question28 = Question::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'I have trouble adjusting from bright to dim lighting, such as
            when going from daylight into a dark movie theater.',
            'type' => 'multiple_choice',
        ]);

        $question29 = Question::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'When driving at night in the rain, I have difficulty seeing the
            road because of headlights from oncoming cars.',
            'type' => 'multiple_choice',
        ]);

        $question30 = Question::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'When riding in a car, other cars on the road seem to be going
            too fast.',
            'type' => 'multiple_choice',
        ]);

        $question31 = Question::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'I find it difficult changing lanes in traffic because I have
            trouble seeing cars in the next lane.',
            'type' => 'multiple_choice',
        ]);

        $question32 = Question::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'I have problems judging how close or far things are from me.',
            'type' => 'multiple_choice',
        ]);

        $question33 = Question::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'It takes me a long time to get acquainted with new
            surroundings.',
            'type' => 'multiple_choice',
        ]);

    }
}
