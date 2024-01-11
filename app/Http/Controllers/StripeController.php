<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\PaymentIntent;
use Stripe\SetupIntent;
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
            // $paymentIntent = PaymentIntent::create([
            //     'amount' => $subscriptionPlan->amount * 100,
            //     'currency' => 'usd',
            // ]);

            $setupIntent = SetupIntent::create([
                'payment_method_types' => ['card'],
                'usage' => 'off_session',
            ]);

            return response()->json(['status' => true , 'setupIntent' => $setupIntent->client_secret]);

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

        if(auth()->user()->lastSubscription && is_null(auth()->user()->lastSubscription->ends_at)){
            return response()->json(['status' => false , 'msg' => 'Something Went Wrong' , 'error' => 'Already Subscribe To Plan']);
        }

        try{
            

           if(!$request->user()->stripe_id){
                $request->user()->createAsStripeCustomer();
           }

           $request->user()->updateDefaultPaymentMethod($request->payment_method);

           $paymentMethod = $request->payment_method;

           $subscription = $request->user()->newSubscription('default' , $subscriptionPlan->plan_id)->create(null, ['payment_method' => $paymentMethod]);

           if($subscription){
                return response()->json(['status' => true , 'msg' => 'Subscription Added Successfully']);
           }

        }catch(CardException $e){
            return response()->json(['status' => false , 'msg' => 'Something Went Wrong' , 'error' => $e->getMessage()]);
        } 

    }
}


// public function addSubscription(Request $request)
//     {
//         $validator = Validator::make($request->all() , [
//             'pid' => 'required|string',
//             'paymentMethod' =>'required|string'
//         ]);

//         if($validator->fails()){
//             return response()->json(['status' => false , 'msg' => 'Something Went Wrong' , 'error' => $validator->getMessageBag()]);
//         }
            
//         try{
//             $subscriptionPlan = SubscriptionPlan::where('subscription_plan_id' , $request->pid)->first();
            
//             if(!$subscriptionPlan){
//                 return response()->json(['status' => false , 'msg' => 'Something Went Wrong' , 'error' => 'No plan found!']);
//             }

//             try{

//                 // Stripe::setApiKey(env('STRIPE_SECRET'));
                
//                 if(!$request->user()->stripe_id){
//                     $request->user()->createAsStripeCustomer();
//                 }

//                 $request->user()->updateDefaultPaymentMethod($request->paymentMethod);

//                 $subscription = $request->user()->newSubscription('default' , $subscriptionPlan->subscription_plan_id)->create($request->paymentMethod);

//                 if($subscription){
//                     return response()->json(['status' => true , 'msg' => 'Subscription Added Successfully']);
//                 }
                


//             }catch(CardException $e){
//                 return response()->json(['status' => false , 'msg' => 'Something Went Wrong']);
//             }


//         }catch(\Exception $e){
//             return response()->json(['status' => false , 'msg' => 'Something Went Wrong' , 'error' => $e->getMessage()]);
//         }


//     }

//     public function cancelSubscription(){
//         try{
//             auth()->user()->subscription('default')->cancel();

//             return redirect()->back()->with(['status' => true , 'msg' => 'Subscription canceled Successfully']);

//         }catch(CardException $e){

//             return redirect()->back()->with(['error' => $e->getMessage() , 'msg' => 'Something Went Wrong While Canceling Subscription' , 'status' => false]);
//         }
//     }

//     public function resumeSubscription(){
//         try{
//             auth()->user()->subscription('default')->resume();

//             return redirect()->back()->with(['status' => true , 'msg' => 'Subscription Resumed Successfully']);

//         }catch(CardException $e){

//             return redirect()->back()->with(['error' => $e->getMessage() , 'msg' => 'Something Went Wrong While Resuming Subscription' , 'status' => false]);
//         }
//     }
