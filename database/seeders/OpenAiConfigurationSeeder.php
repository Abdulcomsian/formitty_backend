<?php

namespace Database\Seeders;

use App\Models\OpenAiConfiguration;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OpenAiConfigurationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        OpenAiConfiguration::create([
            'client_key' => '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',
            'organization_key' => 'org-6oc7dro0mGzxO3qzULeAA79r' 
        ]);
    }
}
