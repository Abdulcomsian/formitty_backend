<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SubscriptionPlan;

class SubscriptionController extends Controller
{
    public function getSubscriptionPlan(Request $request){
        if(!$request->user()->subscribed()){
            $plans = SubscriptionPlan::orderBy('amount' , 'asc')->get();
            return response()->json(['status' => true , 'plans' => $plans , 'isSubscribed' => false ]);
        }else{
            return response()->json(['status' => true , 'isSubscribed' => true ]);
        }
    }
}
