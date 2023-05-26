<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\AssessmentTool;
use App\Models\Option;
use App\Models\Question;
use App\Models\AssessmentGroup;

class CASPYouthAssessmentToolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $assessment_tool = AssessmentTool::create([
            'title' => 'Child & Adolescent Scale of Participation (CASP-Youth Version)',
            'slug' => 'Child & Adolescent Scale of Participation (CASP-Youth Version)',
            'type' => 'questionnaire'
        ]);

        $group1 = AssessmentGroup::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'HOME PARTICIPATION',
        ]);

        $question1 = Question::create([
            'assessment_tool_id' => $group1->id,
            'title' => 'Social, play or leisure activities with family members at home (e.g., games, hobbies, “hanging out”)',
            'type' => 'multiple_choice',
        ]);


        $question2 = Question::create([
            'assessment_tool_id' => $group1->id,
            'title' => 'Social, play or leisure activities with friends at home (can include conversations on the phone or internet)',
            'type' => 'multiple_choice',
        ]);

        $question3 = Question::create([
            'assessment_tool_id' => $group1->id,
            'title' => 'Family chores, responsibilities and decisions at home (e.g., involvement in household chores and decisions about family activities and plans)',
            'type' => 'multiple_choice',
        ]);

        $question4 = Question::create([
            'assessment_tool_id' => $group1->id,
            'title' => 'Self-care activities (e.g., eating, dressing, bathing, combing or brushing hair, using the toilet)',
            'type' => 'multiple_choice',
        ]);

        $question5 = Question::create([
            'assessment_tool_id' => $group1->id,
            'title' => 'Moving about in and around the home',
            'type' => 'multiple_choice',
        ]);

        $question6 = Question::create([
            'assessment_tool_id' => $group1->id,
            'title' => 'Communicating with others at home',
            'type' => 'multiple_choice',
        ]);
        
        $group2 = AssessmentGroup::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'NEIGHBORHOOD AND COMMUNITY PARTICIPATION',
        ]);

        $question7 = Question::create([
            'assessment_tool_id' => $group2->id,
            'title' => 'Social, play, or leisure activities with friends in the neighborhood and community (e.g., casual games, “hanging out,” going to public places like a movie theater, park or restaurant)',
            'type' => 'multiple_choice',
        ]);

        $question8 = Question::create([
            'assessment_tool_id' => $group2->id,
            'title' => 'Structured events and activities in the neighborhood and community (e.g., team sports, clubs, holiday or religious events, concerts, parades and fairs)',
            'type' => 'multiple_choice',
        ]);

        $question9 = Question::create([
            'assessment_tool_id' => $group2->id,
            'title' => 'Moving around the neighborhood and community (e.g., public buildings, parks, restaurants, movies) [Please consider your primary way of moving around, NOT your use of transportation]',
            'type' => 'multiple_choice',
        ]);

        $question10 = Question::create([
            'assessment_tool_id' => $group2->id,
            'title' => 'Communicating with others in the neighborhood and community',
            'type' => 'multiple_choice',
        ]);

        $group3 = AssessmentGroup::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'SCHOOL PARTICIPATION',
        ]);

        $question11 = Question::create([
            'assessment_tool_id' => $group3->id,
            'title' => 'Educational (academic) activities with other students in your classroom at school',
            'type' => 'multiple_choice',
        ]);


        $question12 = Question::create([
            'assessment_tool_id' => $group3->id,
            'title' => 'Educational (academic) activities with other students in your classroom at school (e.g., “hanging out,” sports, clubs, hobbies, creative arts, lunchtime or recess activities)',
            'type' => 'multiple_choice',
        ]);

        $question13 = Question::create([
            'assessment_tool_id' => $group3->id,
            'title' => 'Moving around at school (e.g., to get to and use bathroom, playground, cafeteria, library or other rooms and things that are available to other students your age)',
            'type' => 'multiple_choice',
        ]);

        $question14 = Question::create([
            'assessment_tool_id' => $group3->id,
            'title' => 'Using educational materials and equipment that are available to other students in your classroom/s or that have been modified for you
            (e.g., books, computers, chairs and desks)',
            'type' => 'multiple_choice',
        ]);

        $question15 = Question::create([
            'assessment_tool_id' => $group3->id,
            'title' => 'Communicating with other students and adults at school',
            'type' => 'multiple_choice',
        ]);

        $group4 = AssessmentGroup::create([
            'assessment_tool_id' => $assessment_tool->id,
            'title' => 'HOME AND COMMUNITY LIVING ACTIVITIES',
        ]);

        $question16 = Question::create([
            'assessment_tool_id' => $group4->id,
            'title' => 'Household activities (e.g., preparing some meals, doing laundry, washing dishes)',
            'type' => 'multiple_choice',
        ]);

        $question17 = Question::create([
            'assessment_tool_id' => $group4->id,
            'title' => 'Shopping and managing money (e.g., shopping at stores, figuring out correct change)',
            'type' => 'multiple_choice',
        ]);

        $question18 = Question::create([
            'assessment_tool_id' => $group4->id,
            'title' => 'Managing daily schedule (e.g., doing and completing daily activities on time; organizing and adjusting time and schedule when needed)',
            'type' => 'multiple_choice',
        ]);

        $question19 = Question::create([
            'assessment_tool_id' => $group4->id,
            'title' => 'Using transportation to get around in the community (e.g., to and from school, work, social or leisure activities) [Driving vehicle or using public transportation]',
            'type' => 'multiple_choice',
        ]);

        $question20 = Question::create([
            'assessment_tool_id' => $group4->id,
            'title' => 'Work activities and responsibilities (e.g., completion of work tasks, punctuality, attendance and getting along with supervisors and co-workers)',
            'type' => 'multiple_choice',
        ]);

    }
}
