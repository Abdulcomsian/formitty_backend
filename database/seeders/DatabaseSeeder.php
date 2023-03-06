<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //  \App\Models\User::factory(500)->create();
        $this->call(PermissionTableSeeder::class);
        $this->call(CreateAdminUserSeeder::class);
//        $this->call(FormSeeder::class);
        $this->call(ContinenceSeeder::class);
        $this->call(AnimalSeeder::class);
        $this->call(HearingSeeder::class);
        $this->call(VehicleSeeder::class);
        $this->call(NutritionSeeder::class);
        $this->call(UserFormTableSeeder::class);
        $this->call(UserFormHeadingsTableSeeder::class);
        $this->call(FormDataTableSeeder::class);
        $this->call(AssessmentToolSeeder::class);
        $this->call(QuestionsTableSeeder::class);
        $this->call(FlowChartQuestionTableSeeder::class);
        $this->call(DogFormSeeder::class);
    }
}
