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
        $this->call(StaticOptionsTableSeeder::class);
        $this->call(AnimalSeeder::class);
        $this->call(HomeSeeder::class);
        $this->call(HearingSeeder::class);
        $this->call(VehicleSeeder::class);
        $this->call(NutritionSeeder::class);
        $this->call(DogFormSeeder::class);
        $this->call(UserFormTableSeeder::class);
        $this->call(UserFormHeadingsTableSeeder::class);
        $this->call(FormDataTableSeeder::class);
        $this->call(CANSAssessmentToolSeeder::class);
        $this->call(WHODAS2SELFAssessmentToolSeeder::class);
        $this->call(DSMSELFAssessmentToolSeeder::class);
        $this->call(DSMPARENTAssessmentToolSeeder::class);
        $this->call(DSMSELFCHILDAssessmentToolSeeder::class);
        $this->call(PROMISAssessmentToolSeeder::class);
        $this->call(LEVEL2ANGERADULTAssessmentToolSeeder::class);
        $this->call(MRS9QAssessmentToolSeeder::class);
        $this->call(HearingAssessmentToolSeeder::class);
        $this->call(VisualActivitiesAssessmentToolSeeder::class);
        $this->call(ISNCSCIAssessmentToolSeeder::class);
        $this->call(BarthalIndexAssessmentToolSeeder::class);
        $this->call(CaregiverBurdenScaleAssessmentTool::class);
        $this->call(CIQRAssessmentToolSeeder::class);
        $this->call(DASSAssessmentToolSeeder::class);
        $this->call(KettleTestAssessmentToolSeeder::class);
        $this->call(LawtonBrodyIADLAssessmentToolSeeder::class);
        $this->call(FAMAssessmentToolSeeder::class);
        $this->call(CASPYouthAssessmentToolSeeder::class);
        // $this->call(AssessmentToolSeeder::class);
        $this->call(ProstheticsSeeder::class);
//        $this->call(QuestionsTableSeeder::class);
        $this->call(FlowChartQuestionTableSeeder::class);
        //nouman seeder starts here
        $this->call(DogFormSeeder::class);
        $this->call(AnimalSeeder::class);
        $this->call(ContinenceSeeder::class);
        $this->call(NutritionSeeder::class);
        $this->call(VehicleSeeder::class);
        $this->call(HomeModicationSeeder::class);
    }
}
