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

        $validator = Validator::make($request->all() , [
            'plan_id' => 'required|numeric'
        ]);

        if($validator->fails()){
            return response()->json(['status' => false , 'msg' => 'Something Went Wrong' , 'error' => $validator->getMessageBag()]);
        }
        
        $subscriptionPlan = SubscriptionPlan::where('id' , $request->plan_id)->first();

        if(!$subscriptionPlan){
            return response()->json(['status' => false , 'msg' => 'Something Went Wrong' , 'error' => 'No plan found with this id']);
        }

        try{
            $paymentIntent = PaymentIntent::create([
                'amount' => $subscriptionPlan->amount * 100,
                'currency' => 'usd',
                'payment_method_types' => ['card'],
            ]);

            return response()->json(['status' => true , 'paymentIntent' => $paymentIntent->client_secret]);

        }catch(CardException $e){
            return response()->json(['status' => false , 'msg' => 'Something Went Wrong' , 'error' => $e->getMessage()]);
        }

    }

    public function addSubscription(Request $request){
        $validator = Validator::make($request->all() , [
            'plan_id' => 'required|numeric',
            'payment_method' => 'required|string'
        ]);

        if($validator->fails()){
            return response()->json(['status' => false , 'msg' => 'Something Went Wrong' , 'error' => $validator->getMessageBag()]);
        }

        $subscriptionPlan =  SubscriptionPlan::where('id' , $request->plan_id)->first();
        
        if(!$subscriptionPlan){
            return response()->json(['status' => false , 'msg' => 'Something Went Wrong' , 'error' => 'No Plan Found This Id']);
        }


        if(!is_null(auth()->user()->lastSubscription->ends_at)){
            return response()->json(['status' => false , 'msg' => 'Something Went Wrong' , 'error' => 'Already Subscribe To Plan']);
        }

        try{

           if(!$request->user()->stripe_id){
                $request->user()->createStripeCustomer();
           }

           $request->user()->updateDefaultPaymentMethod($request->payment_method);

           $subscription = $request->user()->newSubscription('default' , $subscriptionPlan->plan_id)->create($request->payment_method);

           if($subscription){
                return response()->json(['status' => true , 'msg' => 'Subscription Added Successfully']);
           }

        }catch(CardException $e){
            return response()->json(['status' => false , 'msg' => 'Something Went Wrong' , 'error' => $e->getMessage()]);
        } 

    }
}
