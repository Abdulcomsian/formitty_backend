<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Google\Cloud\Speech\V1p1beta1\RecognitionConfig\AudioEncoding;
use Google\Cloud\Speech\V1p1beta1\RecognitionConfig;
use Google\Cloud\Speech\V1p1beta1\SpeechClient;
use Google\Cloud\Speech\V1p1beta1\RecognitionAudio;
use Illuminate\Support\Facades\Validator;
use App\Models\{SpeechText};
class SpeechController extends Controller
{
    public function convertSpeech(Request $request)
    {
        try {
            $validator = Validator::make($request->all() , [
                'audioFile' => "required|file|mimes:mp3",
                'report_id' => "required|numeric"
            ]);

            if($validator->fails())
            {
                return response()->json(['status' => false , 'error' => $validator->getMessageBag() ]);
            }
            else{
                $speech = new SpeechClient([
                    'credentials' => json_decode('
                    {
                        "type": "service_account",
                        "project_id": "velvety-pagoda-388513",
                        "private_key_id": "60c176426c7d4392114103c3a7703c741506e00f",
                        "private_key": "-----BEGIN PRIVATE KEY-----\nMIIEvQIBADANBgkqhkiG9w0BAQEFAASCBKcwggSjAgEAAoIBAQDGPnWjpNnZ2YOk\nbri9/PxeKUMaqV94Q0+squXUyAnDnMryGswsuAr43OI+chZBiicaQnFapJwGxCIX\nM5KwZDIWNpKkJeXVM484AjoXPZlFtfBKzWh+8nEL1V/Q5hczhGh9X2t/Geq3iL5C\nN37giUnXLRyvDe7mKZe91e+BuwXfFci0oibQY3R9u599UxakAx6dzLvz+tF8hNPh\n/ZnxtfjUxvta7opbDXOdxkEsMQLWi9t3IbdOB4hEYDPZ7z0aWsEsnthNBszvKuLz\nBGNPNeLExqDehEYkwxFOlkAgi7Mxkzg3u6GhBHVby3rf2B+acckvfoQ3GG1GIrM9\nRrjRAD7jAgMBAAECggEACgRa7l9kkKDwiWz80cDIQbvFA8JeLBX+nyNthJBtCeDQ\n0mXvPi04hLWoiu452Krx6d5EmwdpSOA9Nr3o4hfV/hBY3Yl6sQivam2WYNlAdujI\nEQeLCasXcjkgY85Uispce0VIib4WAZsbvf3O3+qf/ArwAZprIV8lpzZ5qSz5kXmR\n7Fw9O5GbBsdhEmjwtwVUeQ+GYali0C976+KYiWoEtLUbfjRk3hoShkK/uXoc7qou\nLUMrqHL8bnIKrKC6sdSAhXDIUKiUN7HV7ptPzXhjHhXgwtOWCytiR9ogFC6qyQCC\nw9HnhmglKzNNSp3MuLucKYDFbIqtJwP6AnVuOGHy5QKBgQD5/eD6p6TWWh228RYb\ndxMCJr47AOvK2hVYI6L03Jkfmg4kAjPpH+vMwE4feUu4HiBCSv6wSRDb+QhqSIyW\nt81IYREO4XSTSF1Ih1PB/Nl1ihg95zzqhe9k8xB4TQh+1Soj1gXc7SNQ1qzhwK47\n0yEYJA9x+vwwvRo7Iw/2TQGV1QKBgQDLAjFqBOMPcMafKWato+iwtV2hmNJNwDbP\nPpqfNNe6NkqWOwNyYjbmu6pN+lbcpz/k0jPi6HcMqXcqHEYPcJGKvBGwubKMgLnD\nqwYPie383dYsLbbX/JEAGcfiAmE7HLnOM1oObcnAa5JxPOtmbH5FlIDRlR7tW9Zp\nTaCUEaVF1wKBgQCugKRx82Hh6qfBUsqew2C2aLrzTvJI+DBcBQw0JmSQpaXnRs5b\nldewZjBiUfYkAIt+GwFrpqUpF83i+t+AOa8HLhKNM51/Tc0n2qcBy3E0VgAT/f0M\nrA9uhSjjAMrEViIDP9t52uKDBEdLkodM5VS9mDZb1toBX48W5qO2xwwrPQKBgGFA\nt7N2i+BFwqFVEB93Om4NNMHJmFYvExLNhv1mL0LB55F4y/nsGykGFlws5Zfnd7CD\nEuBNRVsHhFLkIJwc7VxtJHxpOaQdtuCJ+elPxncxPv0DGWj3Ue+eaidXxISxCkJC\nT45CAjjwT8N3z73Nk+B5eAzvR1WmfV0NFzRYD7kZAoGAJgyWRp65IK3CUWgKLVxj\nebkI3tOwyEWr8bvJWIH9R+W5mqxRHyCgu1uCpHwtGjQyjb9nemmcExSwNVvdPAFh\nl8ZkihI8856DdDZPIu3XVBmSAIAOP0q1Ikr/Cptg/1BCIiAilcp53SBDYf9a72Rx\nqYhGeXXEB8THzD/gp0smyik=\n-----END PRIVATE KEY-----\n",
                        "client_email": "spark-mvp@velvety-pagoda-388513.iam.gserviceaccount.com",
                        "client_id": "105616140013948013354",
                        "auth_uri": "https://accounts.google.com/o/oauth2/auth",
                        "token_uri": "https://oauth2.googleapis.com/token",
                        "auth_provider_x509_cert_url": "https://www.googleapis.com/oauth2/v1/certs",
                        "client_x509_cert_url": "https://www.googleapis.com/robot/v1/metadata/x509/spark-mvp%40velvety-pagoda-388513.iam.gserviceaccount.com",
                        "universe_domain": "googleapis.com"
                      }
                    ', true),
                ]);
            
            
            
                
                $file = $request->file("audioFile");
                $fileName = $file->getClientOriginalName();
            
                
            
                $recognitionConfig = new RecognitionConfig();
                $recognitionConfig->setEncoding(AudioEncoding::MP3);
                $recognitionConfig->setSampleRateHertz(22050);
                $recognitionConfig->setLanguageCode('en-US');
            
            
                $audioContent = file_get_contents($file);
                $audio = (new RecognitionAudio())->setContent($audioContent);
            
                $operation = $speech->longRunningRecognize($recognitionConfig, $audio);
                 $operation->pollUntilComplete();
            
                 if ($operation->operationSucceeded()) {
                    $response = $operation->getResult();
            
                    $transcript = '';
                    foreach ($response->getResults() as $result) {
                        $transcript .= $result->getAlternatives()[0]->getTranscript() . ' ';
                    }

                    SpeechText::create([
                        "user_id" => auth()->user()->id,
                        "report_id" => $request->report_id,
                        "speech" => $transcript,
                        "file_name" => $fileName
                    ]);

            
                    return response()->json([ 'status' => true ,  'text' => $transcript]);

            
                } else {
                    $error = $operation->getError();
                    return response()->json([ 'status' => false ,  'error' => $error]);
                }

            }


        
        } catch (\Exception $e) {
            return response()->json([ 'status' => false ,  'error' => $e->getMessage()]);
        }

    }


    public function getSpeechList(Request $request)
    {
        try {

            $validator = Validator::make($request->all() , [
                'report_id' => "required|numeric"
            ]);

            if($validator->fails())
            {
                return response()->json([ 'status' => false ,  'error' => $validator->getMessageBag()]);
            }else{
                $speech = SpeechText::where('report_id' , $request->report_id)->get();
                return response()->json([ 'status' => true ,  'reportSpeeches' => $speech ]);
            }

        
        } catch (\Exception $e) {
            return response()->json([ 'status' => false ,  'error' => $e->getMessage()]);
        }
    }

    public function deleteSpeech(Request $request)
    {
        try {

            $validator = Validator::make($request->all() , [
                'speech_id' => "required|numeric"
            ]);

            if($validator->fails())
            {
                return response()->json([ 'status' => false ,  'error' => $validator->getMessageBag()]);
            }else{
                SpeechText::where('id' , $request->speech_id)->delete();
                return response()->json([ 'status' => true ,  'message' => "Speech Deleted Successfully" ]);
            }

        
        } catch (\Exception $e) {
            return response()->json([ 'status' => false ,  'error' => $e->getMessage()]);
        }
    }


}
