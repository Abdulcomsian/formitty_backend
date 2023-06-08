<?php

namespace App\Services;

use Google\Cloud\Speech\V1\SpeechClient;
use Google\Cloud\Speech\V1\RecognitionAudio;
use Google\Cloud\Speech\V1\RecognitionConfig;

class SpeechToTextService
{
    protected $speechClient;

    public function __construct()
    {
        $credentialsPath = public_path('test.json');
        $this->speechClient = new SpeechClient([
            'credentials' => $credentialsPath,
            'key' => env('GOOGLE_API_KEY'),
        ]);
    }

    public function transcribeAudio($audioFile)
    {
        $config = (new RecognitionConfig())
            ->setEncoding(RecognitionConfig\AudioEncoding::LINEAR16)
            ->setSampleRateHertz(16000)
            ->setLanguageCode('en-US');

        $audio = (new RecognitionAudio())
            ->setContent(file_get_contents($audioFile->getRealPath()));

        $response = $this->speechClient->recognize($config, $audio);

        $transcriptions = [];
        foreach ($response->getResults() as $result) {
            $transcriptions[] = $result->getAlternatives()[0]->getTranscript();
        }

        return $transcriptions;
    }
}
