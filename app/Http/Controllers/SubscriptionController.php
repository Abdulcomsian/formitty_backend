<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SubscriptionPlan;

class SubscriptionController extends Controller
{
    public function getSubscriptionPlan(){
        $plans = SubscriptionPlan::orderBy('amount' , 'asc')->get();
        return response()->json(['status' => true , 'plans' => $plans]);
    }
}
