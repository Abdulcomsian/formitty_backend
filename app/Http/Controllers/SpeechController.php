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
        // dd(base_path(env('GOOGLE_APPLICATION_CREDENTIALS')));
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
                $credentialsPath = base_path(env('GOOGLE_APPLICATION_CREDENTIALS'));

                // dd($credentialsPath);

                // // Load the credentials file
                // $credentials = json_decode(file_get_contents($credentialsPath), true);

                // $speech = new SpeechClient([
                //     'credentials' => $credentials,
                // ]);
                $json_file = json_decode('
                {
                     "type": "service_account",
  "project_id": "velvety-pagoda-388513",
  "private_key_id": "a6d96b038b1ce9d0892f248f62108ba1392ab57b",
  "private_key": "-----BEGIN PRIVATE KEY-----\nMIIEvAIBADANBgkqhkiG9w0BAQEFAASCBKYwggSiAgEAAoIBAQC99qOwxWXH9cb3\nF2UES/IULnottjDmnhbzAs1D6jnU39Mon2LCOt+YsIAaPReCsRrkWYE/HpNX8QtP\n3wjRwZ71ftrkeq8Qh8SsqhGjbSJqKgz94AszaSrej4dmVUGO7ooUMXIaryGjsuEM\nJclcZgbEqvrbO+XNJyMiI27q0o3BZyOUlSSdO6MTfRB3Kgai1X85jFghjK54FFY9\n20D9DvFyrOioPAuqMljBqhNjEB9y9P8mGTX9c6yeVdX9dFq6j0kv4VDyu2bTOSu8\nhhI6MOKYqpo8aPMyURB94UDy/LX+rwAJBD2mGKRfc04g1O6bREXcCn76sNHSNsTV\nRa5YeWiPAgMBAAECggEAKJF/q8S8U9PdRe+tFxnQ/RZf6Vs7XkTsycETbSmcaCXU\nxpwjTy+biNRIx1G8r6B7CcFDpOM2vFUyAUC0dXdQJ0WMIbdBo9oa2nUHh0tLSjjo\nxV8PhU80ZItqcyRJ9+hhfKaCo8g6+ua8wQdg1WbEk0OghylnjkSJcET47xVASMkL\nUWqJhd8JXQa6jBxwh283QLLeiqHA59H8iRmERvt69iVTcfd/3mcZvTiDESDwLZ1v\nl2deWwyvt3c73o06Ec6qt0mwNjEwVA1R0LLzxrC73rQI4bC9ezxKifgC5ime73Eh\n1HyS04jtEnpPxrFuR9pbijoDErj5+rNy4kBE5WaWAQKBgQD0okuI8W8xQL7tJvRi\n8NYzMbZhORKA3Hn45imlqQcDxsh1a8ZCrGjtGv8ZHV9sOHm/TT9ok95+ZBliLBgW\n+BrZfYx/DLpW4SclQ2G6XxLkFHG2ihh7UkqM/A9MsYnsENNJCKmwpuVPkZFBLGNK\n7ecnDogja6EonsZBS3zZoV/qTwKBgQDGyhYxgMShTisWKkGNrOFlo7V+YUPmK9Q7\nC6ObdydtKoiZu7YP/6J+qvGAkiVyEOUYZX2VeJlM4VyCoyyM8OZ9MjbU+Th5bM8e\nlJB4dPiiRGzX4rgVUu7sKcHqVrrDCETmrK7+i4h7l4iab2j8/JajXWTZUFvifnq6\nTomPU1BNwQKBgG5TUyVrXO4lePWS/9wvKSrlXI70IjgjNo7dniKr3BID8Bukg0FG\nZ/umlS1KZeJ0hdOUjugm58ywcBIqOKMDOXikelxB7TeJSxIvFT/r6KUb4zyjgu76\n6cwzUOMRnlXsMJ1bXsvgOMJtr8hosE72g6zFjPgMbh3XnSmNVb0AXjVZAoGAU9Ri\n2YtY4EErkFRPgqRWBNutrNbtoEH5ZND6tJPh73pRUqtDEqoV517FKxf2bIzNX6Vk\n+UR7OV2L+pc/MUxhlog3cUaL10DYcyfpaLLDKwK596xnPq7TjInreZwLdDWngLNv\ntG45Jw13ENFMr+sAx3GaFr55kSEPNkPqZKOYqMECgYAgBl4mldIvf/Q43/acCWma\n77h7p4MK0TuU3K153e4GIiTtDOysYkwHwADd8YiO4MpgSGShi1unXmz2vpEddz/F\neiViKAKqwikllcuih98k2WQG3CR68N8zZZjfgWmJlpJyXRjTbFdbgNmMT+PXcP3u\n8MfUcxq6F+WRdEwjEzd4RA==\n-----END PRIVATE KEY-----\n",
  "client_email": "spark-mvp@velvety-pagoda-388513.iam.gserviceaccount.com",
  "client_id": "105616140013948013354",
  "auth_uri": "https://accounts.google.com/o/oauth2/auth",
  "token_uri": "https://oauth2.googleapis.com/token",
  "auth_provider_x509_cert_url": "https://www.googleapis.com/oauth2/v1/certs",
  "client_x509_cert_url": "https://www.googleapis.com/robot/v1/metadata/x509/spark-mvp%40velvety-pagoda-388513.iam.gserviceaccount.com",
  "universe_domain": "googleapis.com"
                  }
                ', true);
                // dd($json_file);
                $speech = new SpeechClient([
                    'credentials' => $json_file
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
