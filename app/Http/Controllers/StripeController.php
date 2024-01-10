<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\PaymentIntent;
use App\Models\SubscriptionPlan;
use Illuminate\Support\Facades\Validator;
use Stripe\Exception\CardException;


class StripeController extends Controller
{
    function __construct()
    {
        Stripe::setApiKey(env('STRIPE_SECRET'));
    }

    public function getPaymentIntent(Request $request){

        $validator = Validator::make($request->all , [
            'plan_id' => 'required|numeric'
        ]);

        if($validator->fails()){
            return response()->json(['status' => false , 'msg' => 'Something Went Wrong' , 'error' => $validator->getMessageBag()]);
        }
        
        $subscriptionPlan = SubscriptionPlan::where('id' , $request->plan_id)->first();

        if(!$subscriptionPlan){
            return response()->json(['status' => false , 'msg' => 'Something Went Wrong' , 'error' => 'No plan found with this id']);
        }

        dd("here");

        try{
            $paymentIntent = PaymentIntent::create([
                'amount' => $subscriptionPlan->amount,
                'currency' => 'usd',
                'payment_method_types' => ['card'],
            ]);

            return response()->json(['status' => true , 'paymentIntent' => $paymentIntent->client_secret]);

        }catch(CardException $e){
            return response()->json(['status' => false , 'msg' => 'Something Went Wrong' , 'error' => $e->getMessage()]);
        }

    }
}
