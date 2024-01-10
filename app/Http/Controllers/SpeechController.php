<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Google\Cloud\Speech\V1p1beta1\RecognitionConfig\AudioEncoding;
// use Google\Cloud\Speech\V1p1beta1\RecognitionConfig;
// use Google\Cloud\Speech\V1p1beta1\SpeechClient;
// use Google\Cloud\Speech\V1p1beta1\RecognitionAudio;
// use Google\Cloud\Speech\V1p1beta1\LongRunningRecognizeRequest;
use Google\Cloud\Speech\V1p1beta1\SpeechClient;
use Google\Cloud\Speech\V1p1beta1\RecognitionAudio;
use Google\Cloud\Speech\V1p1beta1\RecognitionConfig;
use Google\Cloud\Speech\V1p1beta1\RecognitionConfig\AudioEncoding;
use Google\Cloud\Speech\V1p1beta1\LongRunningRecognizeRequest;
use Google\Cloud\Speech\V1p1beta1\RecognitionMetadata;
use Google\Cloud\Speech\V1p1beta1\RecognitionMetadata\InteractionType;
use Google\Cloud\Speech\V1p1beta1\RecognitionMetadata\MicrophoneDistance;
use Google\Cloud\Speech\V1p1beta1\RecognitionMetadata\OriginalMediaType;
use Google\Cloud\Speech\V1p1beta1\RecognitionMetadata\RecordingDeviceType;
use Google\LongRunning\Operation;
use Google\Protobuf\Duration;
use Google\Cloud\Storage\StorageClient;
use Google\Auth\ApplicationDefaultCredentials;
use GuzzleHttp\Client;
use App\Models\{SpeechText};
use Illuminate\Support\Facades\Validator;

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


    // public function convertSpeech(Request $request)
    // {
    //     try {
    //         $validator = Validator::make($request->all() , [
    //             'audioFile' => "required|file|mimes:mp3",
    //             'report_id' => "required|numeric"
    //         ]);

    //         if($validator->fails())
    //         {
    //             return response()->json(['status' => false , 'error' => $validator->getMessageBag() ]);
    //         }
    //         else
    //         {
        
    //             // API GG Authenic Json Path
    //             $json = public_path('google2.json');
    //             putenv('GOOGLE_APPLICATION_CREDENTIALS='.$json);



    //             /** Uncomment and populate these variables in your code */
    //             $audioFile = $request->audioFile;
    //             $fileName = $audioFile->getClientOriginalName();

    //             // change these variables if necessary
    //             $encoding = AudioEncoding::MP3;
    //             $sampleRateHertz = 32000;
    //             // Your language
    //             $languageCode = 'en-US';

    //             // get contents of a file into a string
    //             $content = file_get_contents($audioFile);

    //             // set string as audio content
    //             $audio = (new RecognitionAudio())
    //                 ->setContent($content);

    //             // set config
    //             $config = (new RecognitionConfig())
    //                 ->setEncoding($encoding)
    //                 ->setSampleRateHertz($sampleRateHertz)
    //                 ->setLanguageCode($languageCode);

    //             // create the speech client
    //             $client = new SpeechClient();

    //             try {
    //                 $response = $client->recognize($config, $audio);
    //                 foreach ($response->getResults() as $result) {
    //                     $alternatives = $result->getAlternatives();
    //                     $mostLikely = $alternatives[0];
    //                     $transcript = $mostLikely->getTranscript();
    //                     printf($transcript);
    //                 }
    //             } finally {
    //                 $client->close();
    //             }
    //             SpeechText::create([
    //                 "user_id" => auth()->user()->id,
    //                 "report_id" => $request->report_id,
    //                 "speech" => $transcript,
    //                 "file_name" => $audioFile
    //             ]);
                
    //     }
            
    //     } catch (\Exception $e) {
    //         return response()->json([ 'status' => false ,  'error' => $e->getMessage()]);
    //     }
    // }
    

    // public function saveFile(Request $request)
    // {
    //     try {
    //         $json = public_path('google4.json');
    //         putenv('GOOGLE_APPLICATION_CREDENTIALS='.$json);
    
    //         $storage = new StorageClient([
    //             'keyFilePath' => $json,
    //         ]);
            
    //         // dd($storage->bucket('sparkintelligence'));
    
    //         $bucketName = 'sparkintelligence';

    //       $fileName =  public_path('5MB.mp3');
    //         $bucket = $storage->bucket($bucketName);
                                                                                        
    //          $chunkSize = 262144; // chunk in bytes

    //         $options = [
    //             'chunkSize' => $chunkSize,
    //         ];
        
    //         $uploader = $bucket->getResumableUploader(
    //             fopen($fileName, 'r'),
    //             $options
    //         );
        
    //         try {
    //             $object = $uploader->upload();
    //         } catch (GoogleException $ex) {
    //             $resumeUri = $uploader->getResumeUri();
    //             $object = $uploader->resume($resumeUri);
    //         }
        
    //         echo "File is uploaded successfully.";
    //     } catch (Exception $e) {
    //         echo $e->getMessage();
    //     }
    // }
    
    // public function convertSpeech(Request $request)
    // {
    //     try {
    //         $validator = Validator::make($request->all() , [
    //             'audioFile' => "required|file|mimes:mp3",
    //             'report_id' => "required|numeric"
    //         ]);

    //         if($validator->fails())
    //         {
    //             return response()->json(['status' => false , 'error' => $validator->getMessageBag() ]);
    //         }
    //         else
    //         {
        
    //             // API GG Authenic Json Path
    //             $json = public_path('google2.json');
    //             putenv('GOOGLE_APPLICATION_CREDENTIALS='.$json);



    //             /** Uncomment and populate these variables in your code */
    //             $audioFile = $request->audioFile;
    //             $fileName = $audioFile->getClientOriginalName();

    //             // change these variables if necessary
    //             $encoding = AudioEncoding::MP3;
    //             $sampleRateHertz = 32000;
    //             // Your language
    //             $languageCode = 'en-US';

    //             // get contents of a file into a string
    //             $content = file_get_contents($audioFile);

    //             // set string as audio content
    //             $audio = (new RecognitionAudio())
    //                 ->setContent($content);

    //             // set config
    //             $config = (new RecognitionConfig())
    //                 ->setEncoding($encoding)
    //                 ->setSampleRateHertz($sampleRateHertz)
    //                 ->setLanguageCode($languageCode);

    //             // create the speech client
    //             $client = new SpeechClient();

    //             try {
    //                 $response = $client->recognize($config, $audio);
    //                 foreach ($response->getResults() as $result) {
    //                     $alternatives = $result->getAlternatives();
    //                     $mostLikely = $alternatives[0];
    //                     $transcript = $mostLikely->getTranscript();
    //                     printf($transcript);
    //                 }
    //             } finally {
    //                 $client->close();
    //             }
    //             SpeechText::create([
    //                 "user_id" => auth()->user()->id,
    //                 "report_id" => $request->report_id,
    //                 "speech" => $transcript,
    //                 "file_name" => $audioFile
    //             ]);
                
    //     }
            
    //     } catch (\Exception $e) {
    //         return response()->json([ 'status' => false ,  'error' => $e->getMessage()]);
    //     }
    // }
    // public function convertSpeech(Request $request)
    // {
    //     try {
    //         $validator = Validator::make($request->all(), [
    //             'audioFile' => "required|file|mimes:mp3",
    //             'report_id' => "required|numeric"
    //         ]);
    
    //         if ($validator->fails()) {
    //             return response()->json(['status' => false, 'error' => $validator->getMessageBag()]);
    //         } else {
    //             // API GG Authenic Json Path
    //             $json = public_path('google4.json');
    //             putenv('GOOGLE_APPLICATION_CREDENTIALS='.$json);
    
    //             // Save the file on Google Cloud Storage
    //             $storage = new StorageClient([
    //                 'keyFilePath' => $json,
    //             ]);
    
    //             $bucketName = 'sparkintelligence';
    //             $bucket = $storage->bucket($bucketName);
    
    //             $audioFile = $request->file('audioFile');
    //             $fileName = $audioFile->getClientOriginalName();
    //             $objectName = 'audio/' . $fileName;
    
    //             $bucket->upload(
    //                 file_get_contents($audioFile),
    //                 [
    //                     'name' => $objectName
    //                 ]
    //             );
    
    //             // Convert the audio to text
    //             $encoding = AudioEncoding::MP3;
    //             // $sampleRateHertz = 44100;
    //             $sampleRateHertz = 32000;
    //             $languageCode = 'en-US';
    
    //             // Set the audio URI
    //             $audioUri = 'gs://' . $bucketName . '/' . $objectName;
    //             dd($audioUri);
    
    //             // Create the audio object
    //             $audio = (new RecognitionAudio())->setUri($audioUri);
    
    //             // Set the config
    //             $config = (new RecognitionConfig())
    //                 ->setEncoding($encoding)
    //                 ->setSampleRateHertz($sampleRateHertz)
    //                 ->setLanguageCode($languageCode);
    
    //             // Create the speech client
    //             $client = new SpeechClient();
    //             try {
    //                 $response = $client->recognize($config, $audio);
    //                 foreach ($response->getResults() as $result) {
    //                     $alternatives = $result->getAlternatives();
    //                     $mostLikely = $alternatives[0];
    //                     $transcript = $mostLikely->getTranscript();
    //                     printf($transcript);
    //                 }
    //             } finally {
    //                 $client->close();
    //             }
    
    //             SpeechText::create([
    //                 "user_id" => auth()->user()->id ?? 1,
    //                 "report_id" => $request->report_id,
    //                 "speech" => $transcript,
    //                 "file_name" => $audioFile
    //             ]);
    
    //             return response()->json(['status' => true, 'message' => 'File uploaded and converted successfully']);
    //         }
    //     } catch (\Exception $e) {
    //         return response()->json(['status' => false, 'error' => $e->getMessage()]);
    //     }
    // }
    


//     public function convertSpeech(Request $request)
// {
//     try {
//         $validator = Validator::make($request->all(), [
//             'audioFile' => "required|file|mimes:mp3",
//             'report_id' => "required|numeric"
//         ]);

//         if ($validator->fails()) {
//             return response()->json(['status' => false, 'error' => $validator->getMessageBag()]);
//         } else {
//             // API GG Authenic Json Path
//             $json = public_path('google4.json');
//             putenv('GOOGLE_APPLICATION_CREDENTIALS='.$json);

//             //Save the file on Google Cloud Storage
//             $storage = new StorageClient([
//                 'keyFilePath' => $json,
//             ]);

//             $bucketName = 'sparkintelligence';
//             $bucket = $storage->bucket($bucketName);

//             $audioFile = $request->file('audioFile');
//             $fileName = $audioFile->getClientOriginalName();
//             $objectName = 'audio/' . $fileName;

//             $bucket->upload(
//                 file_get_contents($audioFile),
//                 [
//                     'name' => $objectName
//                 ]
//             );

//             // // Convert the audio to text
//             $encoding = AudioEncoding::MP3;
//             // // $sampleRateHertz = 44100;
//             $sampleRateHertz = 32000;
//             $languageCode = 'en-US';

//             // Set the audio URI
//             // $audioUri = 'gs://' . $bucketName . '/' . $objectName;
//             $audioUri = 'gs://sparkintelligence/audio/One of The Greatest Speeches Ever by President Obama - Best Eye Opening Speech (online-audio-converter.com).mp3';
//                 // $audioUri = 'gs://' . $bucketName . '/' . $objectName;
//             // Create the audio object with the audio URI
//             $audio = (new RecognitionAudio())->setUri($audioUri);

//             // Create the recognition config
//             $config = (new RecognitionConfig())
//                 ->setEncoding($encoding)
//                 ->setSampleRateHertz($sampleRateHertz)
//                 ->setLanguageCode($languageCode);

//             // Create the speech client
//             $client = new SpeechClient();

//             // Start the asynchronous speech recognition operation
//             $operation = $client->longRunningRecognize($config, $audio);

//             // Get the operation name
//             $operationName = $operation->getName();

//             // Wait for the operation to complete
//             $operation->pollUntilComplete(['timeout' => 100]);

//             // Retrieve the response
//             $response = $operation->getResult();

//             // Process the response
//             $results = $response->getResults();
//             $transcript = '';
//             foreach ($results as $result) {
//                 $alternatives = $result->getAlternatives();
//                 $mostLikely = $alternatives[0];
//                 $transcript .= $mostLikely->getTranscript();
//             }

//             $client->close();

//             $result = SpeechText::create([
//                 "user_id" => auth()->user()->id ?? 1,
//                 "report_id" => $request->report_id,
//                 "speech" => $transcript,
//                 "file_name" => $fileName ?? 'file'
//             ]);

//             return response()->json(['status' => true, 'message' => 'File uploaded and converted successfully', 'result' => $result]);
//         }
//     } catch (\Exception $e) {
//         return response()->json(['status' => false, 'error' => $e->getMessage()]);
//     }
// }

    
    // public function convertSpeech(Request $request)
    // {
    //     // $filePath = '/path/to/your/uploaded/file'; // Replace with the path to your uploaded file
    //     $filePath = 'gs://sparkintelligence/audio/sample (1).mp3';

    //     // Create a temporary file to store the audio content
    //     $tempFile = tempnam(sys_get_temp_dir(), 'audio');

    //     // Download the file from Google Storage
    //     file_put_contents($tempFile, file_get_contents($filePath));

    //     // Set up the API endpoint
    //     $url = 'https://speech.googleapis.com/v1p1beta1/speech:recognize?key=' . $apiKey;

    //     // Set the request payload
    //     $payload = [
    //         'config' => [
    //             'encoding' => 'LINEAR16',
    //             'sampleRateHertz' => 16000,
    //             'languageCode' => 'en-US',
    //         ],
    //         'audio' => [
    //             'content' => base64_encode(file_get_contents($tempFile)),
    //         ],
    //     ];

    //     // Make the curl request
    //     $ch = curl_init();
    //     curl_setopt($ch, CURLOPT_URL, $url);
    //     curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    //     curl_setopt($ch, CURLOPT_HTTPHEADER, [
    //         'Content-Type: application/json',
    //     ]);
    //     curl_setopt($ch, CURLOPT_POST, true);
    //     curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($payload));
    //     $response = curl_exec($ch);
    //     curl_close($ch);

    //     // Clean up the temporary file
    //     unlink($tempFile);

    //     // Process the API response
    //     $result = json_decode($response, true);

    //     // Extract the transcribed text
    //     $transcription = $result['results'][0]['alternatives'][0]['transcript'];

    //     // Return the transcribed text
    //     return response()->json(['transcription' => $transcription]);
    // }
    
    public function convertSpeech(Request $request)
    {
        // Set the request URL for the long-running operation
        $url = 'https://speech.googleapis.com/v1p1beta1/speech:longrunningrecognize';
        $json = public_path('google4.json');
        putenv('GOOGLE_APPLICATION_CREDENTIALS='.$json);
    
        // Save the file on Google Cloud Storage
        $storage = new StorageClient([
            'keyFilePath' => $json,
        ]);
    
        $bucketName = 'sparkintelligence';
        $bucket = $storage->bucket($bucketName);
    
        $audioFile = $request->file('audioFile');
        $fileName = $audioFile->getClientOriginalName();
        $objectName = 'audio/' . $fileName;
    
        $bucket->upload(
            file_get_contents($audioFile),
            [
                'name' => $objectName
            ]
        );
    
        $audioUri = 'gs://' . $bucketName . '/' . $objectName;
    
        // Set the request headers
        $headers = array(
            'Authorization: Bearer ' . self::getAccessToken(),
            'Content-Type: application/json; charset=utf-8'
        );
    
        // Set the request data
        $data = array(
            'config' => array(
                'encoding' => 'MP3',
                'sampleRateHertz' => 32000,
                'language_code' => 'en-US',
            ),
            'audio' => array(
                'uri' => $audioUri
            )
        );
    
        // Convert data to JSON
        $jsonData = json_encode($data);
    
        // Initialize cURL for the long-running operation
        $curl = curl_init($url);
    
        // Set cURL options
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $jsonData);
    
        // Execute the request and get the response
        $response = curl_exec($curl);
    
        // Check for errors
        if ($response === false) {
            $error = curl_error($curl);
            return $error;
            // Handle the error appropriately
        } else {
            // Decode the response JSON
            $responseData = json_decode($response, true);
            $resultArray = json_decode($response, true);
        
            // Now you can access the 'name' key from the array
            $operationName = $resultArray['name'];
        
            // Extract the operation name from the response
            $operationName = $responseData['name'];

            // Close cURL
            curl_close($curl);
    
            // Use the operation name to check the status and retrieve the results
            $result = $this->checkSpeechRecognitionStatus($operationName);
            $data = SpeechText::create([
                "user_id" => auth()->user()->id ?? 1,
                "report_id" => $request->report_id,
                "speech" => '',
                "file_name" => $fileName,
                'operation_name' => $result['operationName']
            ]);
            return response()->json([
                    'status' => 'Success',
                    'name' => $result['operationName'],
                    'speech_text' => $data
                ], 200);
            }
                        
        
    }


    private function checkSpeechRecognitionStatus($operationName)
    {
        // Set the request URL to check the operation status
        $url = "https://speech.googleapis.com/v1/operations/{$operationName}";
        $headers = array(
            'Authorization: Bearer ' . self::getAccessToken(),
            'Content-Type: application/json; charset=utf-8'
        );
    
        // Initialize cURL to check the status
        $curl = curl_init($url);
    
        // Set cURL options
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
    
        // Execute the request and get the response
        $response = curl_exec($curl);
    
        // Check for errors
        if ($response === false) {
            $error = curl_error($curl);
            return $error;
            // Handle the error appropriately
        } else {
            // Decode the response JSON
            $responseData = json_decode($response, true);
    
            // Check if the operation is complete
            if (isset($responseData['done']) && $responseData['done'] === true) {
                // The operation is complete, retrieve the results
                $results = $responseData['response']['results'];
                $transcripts = array_map(function ($result) {
                    return $result['alternatives'][0]['transcript'];
                }, $results);
    
                $finalTranscript = implode(' ', $transcripts);
    
                // Clean up (optional): Delete the file from Google Cloud Storage if needed
                // $storage = new StorageClient();
                // $storage->bucket('your_bucket_name')->object($objectName)->delete();
    
                return $finalTranscript;
            } else {
                // The operation is still in progress, return both the message and operation name
                return [
                    'message' => 'Recognition in progress...',
                    'operationName' => $operationName
                ];
            }
        }
    }


    
    public function getStatus(Request $request)
    {
        $url = 'https://speech.googleapis.com/v1/operations/'. $request->name;
        $json = public_path('google4.json');
            putenv('GOOGLE_APPLICATION_CREDENTIALS='.$json);
        // Set the request headers
        $headers = array(
            'Authorization: Bearer ' . self::getAccessToken(),
            'Content-Type: application/json; charset=utf-8'
        );
        // Create stream context with headers
        $context = stream_context_create([
            'http' => [
                'header' => implode("\r\n", $headers)
            ]
        ]);
                $response = file_get_contents($url, false, $context);
                
        
        // Check for errors
        if ($response === false) {
            $error = curl_error($curl);
            return $error;
            // Handle the error appropriately
        } else {
            $responseData = json_decode($response, true);
    
            // Check if the operation is complete
            if (isset($responseData['done']) && $responseData['done'] === true) {
                // The operation is complete, retrieve the results
                $results = $responseData['response']['results'];
                $transcripts = array_map(function ($result) {
                    return $result['alternatives'][0]['transcript'];
                }, $results);
    
                $finalTranscript = implode(' ', $transcripts);
                $speech_text = SpeechText::findorfail($request->speech_text_id);
                $speech_text->speech = $finalTranscript;
                $speech_text->save();
                return response()->json([
                                    'status' => 'Success',
                                    'transcript' => $finalTranscript,
                                    'speech_text' =>$speech_text
                                ], 200);
                return 'success ' . $finalTranscript;
            } else {
                // The operation is still in progress, return the response as it is
                return 'success ' . $response;
            }
        }
        
    }
    // Function to retrieve the access token
    public function getAccessToken() {
        $credentials = ApplicationDefaultCredentials::getCredentials('https://www.googleapis.com/auth/cloud-platform');
        // dd($credentials->fetchAuthToken()['access_token']);
    return $credentials->fetchAuthToken()['access_token'];
        // return $apiKey;
        // Replace with your code to retrieve the access token
        // You can use a library like 'google/auth' or 'google/apiclient'
        // or implement your own method to obtain the access token
    }


}