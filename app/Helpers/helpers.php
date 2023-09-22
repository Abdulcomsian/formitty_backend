<?php

use App\Models\MediaUpload;
use App\Models\StaticOption;
use Illuminate\Support\Str;

function get_static_option($key)
{
    if (StaticOption::where('option_name', $key)->first()) {
        $return_val = StaticOption::where('option_name', $key)->first();
        return $return_val->option_value;
    }
    return null;
}

function update_static_option($key, $value)
{
    if (!StaticOption::where('option_name', $key)->first()) {
        StaticOption::create([
            'option_name' => $key,
            'option_value' => $value
        ]);
        return true;
    } else {
        StaticOption::where('option_name', $key)->update([
            'option_name' => $key,
            'option_value' => $value
        ]);
        return true;
    }
    return false;
}

function setEnvValue(array $values)
{

    $envFile = app()->environmentFilePath();
    $str = file_get_contents($envFile);

    if (count($values) > 0) {
        foreach ($values as $envKey => $envValue) {

            $str .= "\n"; // In case the searched variable is in the last line without \n
            $keyPosition = strpos($str, "{$envKey}=");
            $endOfLinePosition = strpos($str, "\n", $keyPosition);
            $oldLine = substr($str, $keyPosition, $endOfLinePosition - $keyPosition);

            // If key does not exist, add it
            if (!$keyPosition || !$endOfLinePosition || !$oldLine) {
                $str .= "{$envKey}={$envValue}\n";
            } else {
                $str = str_replace($oldLine, "{$envKey}={$envValue}", $str);
            }
        }
    }

    $str = substr($str, 0, -1);
    if (!file_put_contents($envFile, $str)) return false;
    return true;
}

function render_favicon_by_id($id)
{

    $site_favicon = get_attachment_image_by_id($id, "full", false);
    $output = '';
    if (!empty($site_favicon)) {
        $output .= '<link rel="icon" href="' . $site_favicon['img_url'] . '" type="image/png">';
    }
    return $output;
}

function get_attachment_image_by_id($id, $size = null, $default = false)
{
    $image_details = MediaUpload::find($id);
    $return_val = [];
    $image_url = '';

    if (!empty($id)) {
        switch ($size) {
            case "large":
                if (file_exists('assets/uploads/media-uploader/large-' . $image_details->path)) {
                    $image_url = asset('assets/uploads/media-uploader/large-' . $image_details->path);
                }
                break;
            case "grid":
                if (file_exists('assets/uploads/media-uploader/grid-' . $image_details->path)) {
                    $image_url = asset('assets/uploads/media-uploader/grid-' . $image_details->path);
                }
                break;
            case "thumb":
                if (file_exists('assets/uploads/media-uploader/thumb-' . $image_details->path)) {
                    $image_url = asset('assets/uploads/media-uploader/thumb-' . $image_details->path);
                }
                break;
            default:
                if (is_numeric($id) && file_exists('assets/uploads/media-uploader/' . $image_details->path)) {
                    $image_url = asset('assets/uploads/media-uploader/' . $image_details->path);
                }
                break;
        }
    }

    if (!empty($image_details)) {
        $return_val['image_id'] = $image_details->id;
        $return_val['path'] = $image_details->path;
        $return_val['img_url'] = $image_url;
    } elseif (empty($image_details) && $default) {
        $return_val['img_url'] = asset('assets/uploads/no-image.png');
    }

    return $return_val;
}

function formatBytes($size, $precision = 2)
{
    $base = log($size, 1024);
    $suffixes = array('', 'KB', 'MB', 'GB', 'TB');

    return round(pow(1024, $base - floor($base)), $precision) . ' ' . $suffixes[floor($base)];
}

function fetchValue($predefine_name,$formData ){
    foreach($formData as $data){
        if($data['name'] == $predefine_name){
            return $data['value'];
        }
    }
    return null;
}


function extract_values($string) {
    $parts = explode("-", $string);
    $name = $parts[0];
    $heading_id = $parts[1];
    $orderId = $parts[2];
    return array($name, $heading_id, $orderId);
}

function update_extract_values($string) {
    $parts = explode("-", $string);
    $headingid = $parts[0];
    $name = $parts[1];
    $heading_id = $parts[2];
    $orderId = $parts[3];
    return array($headingid, $name, $heading_id, $orderId);
}

function extract_values_assessment($string) {
    $parts = explode("-", $string);
    $name = $parts[0];
    $question_id = $parts[1];
    $option_id = $parts[2] ?? null;
    return array($name, $question_id, $option_id);
}

function assessment_tool($type){
    if($type == 'questionnaire'){
        return '<span class="badge badge-primary">Questionnaire</span>';
    }elseif($type == 'flow_chart'){
        return '<span class="badge badge-success">Flow Chart</span>';
    }
}

function generateRandomNumber()
{
    $randomNumber = mt_rand(10000000, 99999999);
    
    return $randomNumber;
}

function mapAnswerToText($answer) {
    switch ($answer) {
        case 1:
            return 'never';
        case 2:
            return 'rarely';
        case 3:
            return 'sometimes';
        case 4:
            return 'often';
        case 5:
            return 'always';
        default:
            return ''; // Default to an empty string for unknown values
    }
}