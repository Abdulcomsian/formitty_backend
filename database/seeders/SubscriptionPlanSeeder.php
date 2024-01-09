<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\SubscriptionPlan;

class SubscriptionPlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $plan = new SubscriptionPlan;
        $plan->title = 'Formitty Monthly Test Plan';
        $plan->plan_id = 'price_1OWdesDIWRQsl2HU2qeTZwqX';
        $plan->amount = 15.00;
        $plan->save();
        
    }
}
