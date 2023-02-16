<?php

namespace Database\Seeders;

use App\Models\Form;
use App\Models\FormField;
use App\Models\FormHeading;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FormSeeder3 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $form = Form::create([
            'name' => 'Dog Guide Report'
        ]);

        form = FormHeading::create([
            'form_heading' => 'NDIS Participant Details',
            'form_id' => '3'
        ]);

        form = FormHeading::create([
            'form_heading' => 'Plan Management Details',
            'form_id' => '3'
        ]);

        form = FormHeading::create([
            'form_heading' => 'Evaluation and Assessment',
            'form_id' => '3'
        ]);

        form = FormHeading::create([
            'form_heading' => 'Recommended Option',
            'form_id' => '3'
        ]);

        form = FormHeading::create([
            'form_heading' => 'Details of Assistive Technology Assessor',
            'form_id' => '3'
        ]);

        form = FormHeading::create([
            'form_heading' => 'Consent to Collect and Share Your Information – Provider AT Assessment and Quotation(s)',
            'form_id' => '3'
        ]);

        $form_fields = '[{"type":"text","required":false,"label":"Name","placeholder":"Enter participant name","className":"form-control","name":"participant_name","access":false,"subtype":"text"},{"type":"text","required":false,"label":"Date of Birth","placeholder":"Enter participant DOB","className":"form-control","name":"participant_dateOfBirth","access":false,"subtype":"text"},{"type":"text","required":false,"label":"Age","placeholder":"Enter participant age","className":"form-control","name":"participant_age","access":false,"subtype":"text"},{"type":"text","required":false,"label":"NDIS Number","placeholder":"Enter NDIS number","className":"form-control","name":"NDIS_number","access":false,"subtype":"text"},{"type":"text","required":false,"label":"Address","placeholder":"Enter Participant Address","className":"form-control","name":"participant_address","access":false,"value":"Address","subtype":"text"},{"type":"text","required":false,"label":"Contact Telephone Number","placeholder":"Enter Participant contact number","className":"form-control","name":"participant_contact","access":false,"subtype":"text"},{"type":"text","required":false,"label":"Email","placeholder":"Enter participant Email","className":"form-control","name":"participant_email","access":false,"subtype":"text"},{"type":"text","required":false,"label":"Preferred Contact Number","placeholder":"Enter Preferred Contact Number","className":"form-control","name":"preferred_contact","access":false,"subtype":"text"},{"type":"text","required":false,"label":"Guardian Name","placeholder":"Enter Nominee or Guardian Name","className":"form-control","name":"guardian_name","access":false,"subtype":"text"},{"type":"text","required":false,"label":"Guardian Phone","placeholder":"Enter Guardian Phone","className":"form-control","name":"guardian_phone","access":false,"subtype":"text"},{"type":"text","required":false,"label":"NDIS Support Coordinator","placeholder":"Enter Support Coordinator ","className":"form-control","name":"support_coordinator","access":false,"subtype":"text"},{"type":"text","required":false,"label":"Contact Details","placeholder":"Enter contact Details","className":"form-control","name":"contact_details","access":false,"subtype":"text"}]';

        $form_fields2 = '[{"type":"text","required":false,"label":"Agency Managed","placeholder":"Enter Agency Managed","className":"form-control","name":"agency_managed","access":false,"subtype":"text"},{"type":"text","required":false,"label":"Self Managed","placeholder":"Enter Self-Managed","className":"form-control","name":"self_managed","access":false,"subtype":"text"},{"type":"text","required":false,"label":"Registered Plan Management Provider","placeholder":"Enter plan management provider","className":"form-control","name":"management_provider","access":false,"subtype":"text"},{"type":"text","required":false,"label":"Contact Details","placeholder":"Enter contact details","className":"form-control","name":"contact_details","access":false,"subtype":"text"}]';

        $form_fields3 = '[{"type":"textarea","required":false,"label":"Vision Background","placeholder":"Enter Detail Vision Background","className":"form-control","name":"vision_background","access":false,"subtype":"textarea"},{"type":"textarea","required":false,"label":"Background Information","placeholder":"Enter background Information","className":"form-control","name":"info_background","access":false,"subtype":"textarea"},{"type":"textarea","required":false,"label":"Participant Goals","placeholder":"Enter participant Goals","className":"form-control","name":"participant_goals","access":false,"subtype":"textarea"},{"type":"textarea","required":false,"label":"Gog Guide Assessor Information","placeholder":"Enter Participant Suitability","className":"form-control","name":"participant_suitability","access":false,"subtype":"textarea"}]';

        $form_fields4 = '[{"type":"textarea","required":false,"label":"<span lang=\"EN-AU\" style=\"color: rgb(0, 0, 0); font-size: 11pt; line-height: 16.8667px; font-family: Arial, sans-serif;\">Goal attainment</span>","placeholder":"Enter goal attainment","className":"form-control","name":"goal_attainment","access":false,"subtype":"textarea"},{"type":"textarea","required":false,"label":"Additional Feature","placeholder":"Enter additional Feature","className":"form-control","name":"additional_feature","access":false,"subtype":"textarea"},{"type":"radio-group","required":false,"label":"Participant Agreement","inline":false,"name":"participant_agreement","access":false,"other":false,"values":[{"label":"Yes","value":"option-1","selected":false},{"label":"No","value":"option-2","selected":false}]},{"type":"text","required":false,"label":"Agreement Detail","placeholder":"Enter participant agreement detail","className":"form-control","name":"agreement_detail","access":false,"subtype":"text"}]';

        $form_fields5 = '[{"type":"checkbox-group","required":false,"label":"Meet NDIA expectations","toggle":false,"inline":false,"name":"NDIA_expectations","access":false,"other":false,"values":[{"label":"Option 1","value":"option-1","selected":true}]},{"type":"checkbox-group","required":false,"label":"Providing Appropriate Evidence","toggle":false,"inline":false,"name":"appropraite_evidence","access":false,"other":false,"values":[{"label":"Option 1","value":"option-1","selected":true}]},{"type":"checkbox-group","required":false,"label":"NDIA will rely on my Professional advice","toggle":false,"inline":false,"name":"professional_advice","access":false,"other":false,"values":[{"label":"Option 1","value":"option-1","selected":true}]},{"type":"checkbox-group","required":false,"label":"Treating Multi-Disciplinary Team","toggle":false,"inline":false,"name":"multi-disciplinary","access":false,"other":false,"values":[{"label":"Option 1","value":"option-1","selected":true}]},{"type":"text","required":false,"label":"Name","placeholder":"Enter Assessor’s  Name","className":"form-control","name":"assessors_name","access":false,"subtype":"text"},{"type":"text","required":false,"label":"NDIS Registration Number","placeholder":"Enter NDIS  Provider Registration number","className":"form-control","name":"pro_reg_number","access":false,"subtype":"text"},{"type":"text","required":false,"label":"Phone","placeholder":"Enter Assessor’s  Phone number","className":"form-control","name":"assessors_phone_num","access":false,"subtype":"text"},{"type":"text","required":false,"label":"Email","placeholder":"Enter Assessor’s  Email","className":"form-control","name":"assessors_email","access":false,"subtype":"text"},{"type":"text","required":false,"label":"Signature","placeholder":"Enter Assessor’s  Signature","className":"form-control","name":"assessors_signature","access":false,"subtype":"text"},{"type":"text","required":false,"label":"Qualification","placeholder":"Enter Assessor’s  Qualification","className":"form-control","name":"assessors_qualification","access":false,"subtype":"text"},{"type":"text","required":false,"label":"Date of Assessment","placeholder":"Enter Assessor’s  Date of Assessment","className":"form-control","name":"date_of_assessment","access":false,"subtype":"text"},{"type":"text","required":false,"label":"Date of Report","placeholder":"Enter Assessor’s  Date of Report","className":"form-control","name":"date_of_report","access":false,"subtype":"text"}]';

        $form_fields6 = '[{"type":"radio-group","required":false,"label":"Are you consent","inline":false,"name":"consent_decision","access":false,"other":false,"values":[{"label":"Yes, I consent","value":"option-1","selected":false},{"label":"No, I do not consent","value":"option-2","selected":false}]},{"type":"checkbox-group","required":false,"label":"I understand that i am giving consent to the NDIA to do things with my information set out in this section","toggle":false,"inline":false,"name":"consent_declaration1","access":false,"other":false,"values":[{"label":"Yes","value":"option-1","selected":true},{"label":"No","value":"","selected":false}]},{"type":"checkbox-group","required":false,"label":"<span lang=\"EN-AU\" style=\"color: rgb(0, 0, 0); font-size: 11pt; line-height: 16.8667px; font-family: Arial, sans-serif;\">I understand that I can access the NDIA’s Privacy Notice and Privacy Policy</span><span style=\"color: rgb(0, 0, 0); font-size: medium;\"></span>","toggle":false,"inline":false,"name":"consent_declaration2","access":false,"other":false,"values":[{"label":"Option 1","value":"option-1","selected":true},{"label":"No","value":"","selected":true}]},{"type":"text","required":false,"label":"Date","placeholder":"Enter Date ","className":"form-control","name":"quotation_date","access":false,"subtype":"text"},{"type":"text","required":false,"label":"Full name","placeholder":"Enter Full Name","className":"form-control","name":"quotation_fullname","access":false,"subtype":"text"},{"type":"text","required":false,"label":"Date","placeholder":"Enter Date of Form Signing","className":"form-control","name":"form_signning_date","access":false,"subtype":"text"},{"type":"text","required":false,"label":"Full Person Name","placeholder":"Enter full name of Person completing this form","className":"form-control","name":"fullname_formComplition","access":false,"subtype":"text"},{"type":"text","required":false,"label":"Relationship to participant","placeholder":"Enter relation to participant to become an NDIS participant","className":"form-control","name":"person_relationship","access":false,"subtype":"text"}]';

        FormField::create([
            'form_heading_id' => 9,
            'form_field' => $form_fields
        ]);

        FormField::create([
            'form_heading_id' => 10,
            'form_field' => $form_fields2
        ]);

        FormField::create([
            'form_heading_id' => 11,
            'form_field' => $form_fields3
        ]);

        FormField::create([
            'form_heading_id' => 12,
            'form_field' => $form_fields4
        ]);

        FormField::create([
            'form_heading_id' => 13,
            'form_field' => $form_fields5
        ]);

        FormField::create([
            'form_heading_id' => 14,
            'form_field' => $form_fields6
        ]);
    }
}
