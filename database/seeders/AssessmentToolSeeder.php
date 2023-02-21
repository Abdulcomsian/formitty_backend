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

        $assessment_tools = [
            [
                'name' => "Assessment Tool 1",
                'slug' => "assessment-tool-1",
            ],
            [
                'name' => "Assessment Tool 2",
                'slug' => "assessment-tool-2",
            ],
            [
                'name' => "Assessment Tool 3",
                'slug' => "assessment-tool-3",
            ],
            [
                'name' => "Assessment Tool 4",
                'slug' => "assessment-tool-4",
            ],
            [
                'name' => "Assessment Tool 5",
                'slug' => "assessment-tool-5",
            ],
            [
                'name' => "Assessment Tool 6",
                'slug' => "assessment-tool-6",
            ]
        ];

        foreach ($assessment_tools as $row) {
            AssessmentTool::create($row);
        }
    }
}
