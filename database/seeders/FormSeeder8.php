<?php

namespace Database\Seeders;

use App\Models\Form;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FormSeeder8 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $form = Form::create([
            'name' => 'Nutrition and Dysphagia Assistive Technology Supports Assessment Template '
        ]);
    }
}

[{"type":"radio-group","required":false,"label":"Are you Consent","inline":false,"name":"radio-group-1674565857847-0","access":false,"other":false,"values":[{"label":"Yes, I consent","value":"option-1","selected":false},{"label":"No, I do not consent","value":"option-2","selected":false}]},{"type":"checkbox-group","required":false,"label":"<span lang=\"EN-AU\" style=\"color: rgb(0, 0, 0); font-size: 11pt; line-height: 16.8667px; font-family: Arial, sans-serif;\">I understand that I am giving consent to the NDIA to do the things with my information set out in this section. I understand that I can withdraw my consent for the NDIS to do things with my information at any time by letting the NDIA know.</span><span style=\"color: rgb(0, 0, 0); font-size: medium;\"></span>","toggle":false,"inline":false,"name":"checkbox-group-1674565912995-0","access":false,"other":false,"values":[{"label":"YES / NO","value":"option-1","selected":true}]},{"type":"checkbox-group","required":false,"label":"<span lang=\"EN-AU\" style=\"color: rgb(0, 0, 0); font-size: 11pt; line-height: 16.8667px; font-family: Arial, sans-serif;\">I understand that I can access the NDIA’s Privacy Notice and Privacy Policy</span><span style=\"color: rgb(0, 0, 0); font-size: medium;\"></span>","toggle":false,"inline":false,"name":"checkbox-group-1674565914266-0","access":false,"other":false,"values":[{"label":"YES / NO","value":"option-1","selected":true}]},{"type":"date","required":false,"label":"Completion Date","placeholder":"Enter Date of participant complete","className":"form-control","name":"completionDate","access":false},{"type":"text","required":false,"label":"Full Name","placeholder":"Enter participant full name to be completed","className":"form-control","name":"completed_formFullname","access":false,"subtype":"text"},{"type":"date","required":false,"label":"Date of Form Signed","placeholder":"Enter the date of form signed in","className":"form-control","name":"formSigned_date","access":false},{"type":"text","required":false,"label":"<span lang=\"EN-AU\" style=\"color: rgb(0, 0, 0); font-size: 11pt; line-height: 16.8667px; font-family: Arial, sans-serif;\">Full Name</span><span style=\"color: rgb(0, 0, 0); font-size: medium;\"></span>","placeholder":"Enter Full Name of person completing this form ","className":"form-control","name":"person_fullname","access":false,"subtype":"text"},{"type":"text","required":false,"label":"Relationship to participant","placeholder":"Relationship to participant ","className":"form-control","name":"participant_relationship","access":false,"subtype":"text"}]
