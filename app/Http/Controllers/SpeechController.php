<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Google\Cloud\Speech\V1p1beta1\RecognitionConfig\AudioEncoding;
// use Google\Cloud\Speech\V1p1beta1\RecognitionConfig;
// use Google\Cloud\Speech\V1p1beta1\SpeechClient;
// use Google\Cloud\Speech\V1p1beta1\RecognitionAudio;
use Google\Cloud\Speech\V1p1beta1\SpeechClient;
use Google\Cloud\Speech\V1p1beta1\RecognitionAudio;
use Google\Cloud\Speech\V1p1beta1\RecognitionConfig;
use Google\Cloud\Speech\V1p1beta1\RecognitionConfig\AudioEncoding;
use Illuminate\Support\Facades\Validator;
use App\Models\{SpeechText};
class SpeechController extends Controller
{
    // public function convertSpeech(Request $request)
    // {
    //     // dd(base_path(env('GOOGLE_APPLICATION_CREDENTIALS')));
    //     try {
    //         $validator = Validator::make($request->all() , [
    //             'audioFile' => "required|file|mimes:mp3",
    //             'report_id' => "required|numeric"
    //         ]);

    //         if($validator->fails())
    //         {
    //             return response()->json(['status' => false , 'error' => $validator->getMessageBag() ]);
    //         }
    //         else{
    //             $credentialsPath = base_path(env('GOOGLE_APPLICATION_CREDENTIALS'));

    //             // // Load the credentials file
    //             $credentials = json_decode(file_get_contents($credentialsPath), true);
    //             // dd($json_file);
    //             $speech = new SpeechClient([
    //                 'credentials' => $json_file
    //             ]);
            
            
            
                
    //             $file = $request->file("audioFile");
    //             $fileName = $file->getClientOriginalName();
            
                
            
    //             $recognitionConfig = new RecognitionConfig();
    //             $recognitionConfig->setEncoding(AudioEncoding::MP3);
    //             $recognitionConfig->setSampleRateHertz(22050);
    //             $recognitionConfig->setLanguageCode('en-US');
            
            
    //             $audioContent = file_get_contents($file);
    //             $audio = (new RecognitionAudio())->setContent($audioContent);
            
    //             $operation = $speech->longRunningRecognize($recognitionConfig, $audio);
    //              $operation->pollUntilComplete();
            
    //              if ($operation->operationSucceeded()) {
    //                 $response = $operation->getResult();
            
    //                 $transcript = '';
    //                 foreach ($response->getResults() as $result) {
    //                     $transcript .= $result->getAlternatives()[0]->getTranscript() . ' ';
    //                 }

    //                 SpeechText::create([
    //                     "user_id" => auth()->user()->id,
    //                     "report_id" => $request->report_id,
    //                     "speech" => $transcript,
    //                     "file_name" => $fileName
    //                 ]);

            
    //                 return response()->json([ 'status' => true ,  'text' => $transcript]);

            
    //             } else {
    //                 $error = $operation->getError();
    //                 return response()->json([ 'status' => false ,  'error' => $error]);
    //             }

    //         }


        
    //     } catch (\Exception $e) {
    //         return response()->json([ 'status' => false ,  'error' => $e->getMessage()]);
    //     }

    // }


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
            else
            {
        
                // API GG Authenic Json Path
                $json = public_path('google2.json');
                putenv('GOOGLE_APPLICATION_CREDENTIALS='.$json);



                /** Uncomment and populate these variables in your code */
                $audioFile = $request->audioFile;
                $fileName = $audioFile->getClientOriginalName();

                // change these variables if necessary
                $encoding = AudioEncoding::MP3;
                $sampleRateHertz = 32000;
                // Your language
                $languageCode = 'en-US';

                // get contents of a file into a string
                $content = file_get_contents($audioFile);

                // set string as audio content
                $audio = (new RecognitionAudio())
                    ->setContent($content);

                // set config
                $config = (new RecognitionConfig())
                    ->setEncoding($encoding)
                    ->setSampleRateHertz($sampleRateHertz)
                    ->setLanguageCode($languageCode);

                // create the speech client
                $client = new SpeechClient();

                try {
                    $response = $client->recognize($config, $audio);
                    foreach ($response->getResults() as $result) {
                        $alternatives = $result->getAlternatives();
                        $mostLikely = $alternatives[0];
                        $transcript = $mostLikely->getTranscript();
                        printf($transcript);
                    }
                } finally {
                    $client->close();
                }
                SpeechText::create([
                    "user_id" => auth()->user()->id,
                    "report_id" => $request->report_id,
                    "speech" => $transcript,
                    "file_name" => $audioFile
                ]);
                
        }
            
        } catch (\Exception $e) {
            return response()->json([ 'status' => false ,  'error' => $e->getMessage()]);
        }
    }

}
