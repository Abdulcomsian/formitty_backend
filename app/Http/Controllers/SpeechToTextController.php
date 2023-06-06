<?php

namespace App\Http\Controllers;

use App\Models\Speech;
use App\Services\SpeechToTextService;
use Illuminate\Http\Request;

class SpeechToTextController extends Controller
{
    protected $speechToTextService;

    public function __construct(SpeechToTextService $speechToTextService)
    {
        $this->speechToTextService = $speechToTextService;
    }

    public function convert(Request $request)
    {
   
        if (!$request->hasFile('audio_file')) {
            return response()->json(['error' => 'Audio file not found.'], 400);
        }
    
        $audioFile = $request->file('audio_file');
    
        if (!$audioFile->isValid()) {
            return response()->json(['error' => 'Invalid audio file.'], 400);
        }
    
        $transcriptions = $this->speechToTextService->transcribeAudio($audioFile);
    
        $speech = Speech::create([
            'audio_file' => $audioFile->getClientOriginalName(),
            'transcription' => implode("\n", $transcriptions),
        ]);
        // dd(response()->json(['transcriptions' => $transcriptions]));
    
        return response()->json(['transcriptions' => $transcriptions]);
    }
    
}
