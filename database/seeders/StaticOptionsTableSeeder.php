<?php

namespace Database\Seeders;

use App\Models\StaticOption;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StaticOptionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $static = new StaticOption();
        $static->option_name = 'notes_prompt';
        $static->option_value = 'generate report using these notes objects';
        $static->save();

        $static = new StaticOption();
        $static->option_name = 'audio_prompt';
        $static->option_value = 'generate audio summary using these objects';
        $static->save();

    }
}
