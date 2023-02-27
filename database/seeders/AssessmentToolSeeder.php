<?php

namespace Database\Seeders;

use App\Models\AssessmentTool;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AssessmentToolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 40; $i++) {
            AssessmentTool::create([
                'title' => $faker->sentence,
                'slug' => $faker->slug,
                'type' => $faker->randomElement(['flow_chart', 'questionnaire'])
            ]);
        }
    }
}
