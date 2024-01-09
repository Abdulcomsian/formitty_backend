<?php

namespace App\Http\Controllers;

use App\Models\OpenAiConfiguration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class OpenAiConfigurationController extends Controller
{
    public function updateConfigurationKey(Request $request){
        $validator = Validator::make($request->all , [
            'client_key' => 'required|string',
            'organization_key' => 'required|string'
        ]);
        
        if($validator->fails()){
            return response()->json(['status' => false , 'msg' => 'Something Went Wrong', 'error' => $validator->getMessageBag()]);
        }

        try{
            $clientKey = $request->client_key;
            $organizationKey = $request->organization_key;

            OpenAiConfiguration::update([
                'client_key' => $clientKey,
                'organization_key' => $organizationKey
            ]);

            return response()->json(['status' => true , 'msg' => 'Configuration Updated Successfully']);

        }catch(\Exception $e){
            return response()->json(['status' => false , 'msg' => 'Something Went Wrong' , 'error' => $e->getMessage()]);
        }

    }

    public function getOpenAiConfiguration(){
        try{
            $openAiConfiguration = OpenAiConfiguration::first();
            
            return response()->json(['status' => true , 'openAiConfiguration' => $openAiConfiguration ]);

        }catch(\Exception $e){

            return response()->json(['status' => false , 'msg' => 'Something Went Wrong' , 'error' => $e->getMessage()]);
        
        }
    }
}
