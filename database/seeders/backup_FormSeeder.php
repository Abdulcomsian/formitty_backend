<?php

namespace Database\Seeders;

use App\Models\Form;
use App\Models\FormField;
use App\Models\FormHeading;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FormSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $form = Form::create([
            'name' => 'Continence Related Assistive Technology Assessment Template'
        ]);

        $form = FormHeading::create([
            'form_heading' => 'NDIS Participant Details',
            'form_id' => '1'
        ]);

        $form = FormHeading::create([
            'form_heading' => 'Plan Management Details',
            'form_id' => '1'
        ]);

        $form = FormHeading::create([
            'form_heading' => 'Assessment',
            'form_id' => '1'
        ]);

        $form = FormHeading::create([
            'form_heading' => 'Evaluation Option',
            'form_id' => '1'
        ]);

        $form = FormHeading::create([
            'form_heading' => 'Continence Recommendations',
            'form_id' => '1'
        ]);

        $form = FormHeading::create([
            'form_heading' => 'Details of Assistive Technology Assessor',
            'form_id' => '1'
        ]);

        $form = FormHeading::create([
            'form_heading' => 'Assessor’s Details',
            'form_id' => '1'
        ]);

        $form = FormHeading::create([
            'form_heading' => 'Consent to Collect and Share Your Information',
            'form_id' => '1'
        ]);

        $form_fields = '[
        {
        "type":"text",
        "required":false,
        "label":"Full Name",
        "placeholder":"Enter Your Full Name",
        "className":"form-control",
        "name":"name",
        "access":false,
        "subtype":"text"
        },
        {
        "type":"text",
        "required":false,
        "label":"Date of Birth",
        "placeholder":"Enter Your Date of Birth",
        "className":"form-control",
        "name":"date_of_birth",
        "access":false,
        "subtype":"text"
        },
        {
        "type":"text",
        "required":false,
        "label":"Age",
        "placeholder":"Enter Your Age",
        "className":"form-control",
        "name":"age",
        "access":false,
        "subtype":"text"
        },
        {
        "type":"text",
        "required":false,
        "label":"NDIS Number",
        "placeholder":"Enter Your NDIS Number",
        "className":"form-control",
        "name":"participantndis_number",
        "access":false,
        "subtype":"text"
        },
        {
        "type":"text",
        "required":false,
        "label":"Address",
        "placeholder":"Enter Your Address",
        "className":"form-control",
        "name":"participant_address",
        "access":false,
        "subtype":"text"
        },
        {
        "type":"text",
        "required":false,
        "label":"Phone Number",
        "placeholder":"Enter Your Phone Number",
        "className":"form-control",
        "name":"participantphone_number",
        "access":false,
        "subtype":"text"
        },
        {
        "type":"text",
        "required":false,
        "label":"Email",
        "placeholder":"Enter Your Email",
        "className":"form-control",
        "name":"participant_email",
        "access":false,
        "subtype":"text"
        },
        {
        "type":"text",
        "required":false,
        "label":"Preferred Contact Method",
        "placeholder":"Enter Your Preferred Contact Method",
        "className":"form-control",
        "name":"participant_preferredcontact",
        "access":false,
        "subtype":"text"
        },
        {
        "type":"text",
        "required":false,
        "label":"Nominee or Guardian Name",
        "placeholder":"Enter Your Nominee or Guardian Name",
        "className":"form-control",
        "name":"participantguardian_name",
        "access":false,
        "subtype":"text"
        },
        {
        "type":"text",
        "required":false,
        "label":"Nominee or Guardian Phone",
        "placeholder":"Enter Your Nominee or Guardian Phone",
        "className":"form-control",
        "name":"participantguardian_phone",
        "access":false,
        "subtype":"text"
        },
        {
        "type":"text",
        "required":false,
        "label":"Cotact Details",
        "placeholder":"Enter Your Contact Details",
        "className":"form-control",
        "name":"participantcontact_details",
        "access":false,
        "subtype":"text"
        }

        ]';

        $form_fields2 = '[
        {
        "type":"text",
        "required":false,
        "label":"Full Name",
        "placeholder":"Enter Your Full Name",
        "className":"form-control",
        "name":"management_fullname",
        "access":false,
        "subtype":"text"
        },
        {
        "type":"text",
        "required":false,
        "label":"Email",
        "placeholder":"Enter Your Email",
        "className":"form-control",
        "name":"management_email",
        "access":false,
        "subtype":"text"
        },
        {
        "type":"text",
        "required":false,
        "label":"NDIS Coordinator",
        "placeholder":"Enter Your NDIS Coordinator",
        "className":"form-control",
        "name":"management_ndis_coordinator",
        "access":false,
        "subtype":"text"
        },
        {
        "type":"text",
        "required":false,
        "label":"Guardian Name",
        "placeholder":"Enter Your Guardian Name",
        "className":"form-control",
        "name":"managementguardian_name",
        "access":false,
        "subtype":"text"
        },
        {
        "type":"text",
        "required":false,
        "label":"Guardian Phone",
        "placeholder":"Enter Your Guardian Phone",
        "className":"form-control",
        "name":"managementguardian_phone",
        "access":false,
        "subtype":"text"
        },
        {
        "type":"text",
        "required":false,
        "label":"Date of Assessment",
        "placeholder":"Enter Your Date of Assessment",
        "className":"form-control",
        "name":"management_date_assessment",
        "access":false,
        "subtype":"text"
        },
        {
        "type":"text",
        "required":false,
        "label":"Phone Number",
        "placeholder":"Enter Your Phone Number",
        "className":"form-control",
        "name":"managementphone_number",
        "access":false,
        "subtype":"text"
        },
        {
        "type":"text",
        "required":false,
        "label":"NDIS Number",
        "placeholder":"Enter Your NDIS Number",
        "className":"form-control",
        "name":"managementndis_number",
        "access":false,
        "subtype":"text"
        }
        ]';


        $form_fields3 = '[
        {
        "type":"text",
        "required":false,
        "label":"Background",
        "placeholder":"Enter Your Background",
        "className":"form-control",
        "name":"assesment_background",
        "access":false,
        "subtype":"text"
        },
        {
        "type":"text",
        "required":false,
        "label":"Participant Goals",
        "placeholder":"Enter Your Participant Goals",
        "className":"form-control",
        "name":"assesment_participantgoals",
        "access":false,
        "subtype":"text"
        },
        {
        "type":"text",
        "required":false,
        "label":"Functional Assessment",
        "placeholder":"Enter Functional Assessment",
        "className":"form-control",
        "name":"assesment_functional_assessment",
        "access":false,
        "subtype":"text"
        },
        {
        "type":"text",
        "required":false,
        "label":"Bladder",
        "placeholder":"Enter Bladder",
        "className":"form-control",
        "name":"assesment_bladder",
        "access":false,
        "subtype":"text"
        },
        {
        "type":"text",
        "required":false,
        "label":"Bowel",
        "placeholder":"Enter Bowel",
        "className":"form-control",
        "name":"assesment_bowel",
        "access":false,
        "subtype":"text"
        },
        {
        "type":"text",
        "required":false,
        "label":"Consideration of health and other issues",
        "placeholder":"Consideration of health and other issues",
        "className":"form-control",
        "name":"assesment_consideration_health",
        "access":false,
        "subtype":"text"
        },
        {
        "type":"text",
        "required":false,
        "label":"Physiotherapist",
        "placeholder":"Enter Physiotherapist",
        "className":"form-control",
        "name":"assesment_physiotherapist",
        "access":false,
        "subtype":"text"
        },
        {
        "type":"text",
        "required":false,
        "label":"Dietician",
        "placeholder":"Enter Dietician",
        "className":"form-control",
        "name":"assesment_dietician",
        "access":false,
        "subtype":"text"
        },
        {
        "type":"text",
        "required":false,
        "label":"Occupational Therapist",
        "placeholder":"Occupational Therapist",
        "className":"form-control",
        "name":"assesment_occupational_therapist",
        "access":false,
        "subtype":"text"
        },
        {
        "type":"text",
        "required":false,
        "label":"Psychologist",
        "placeholder":"Enter Psychologist",
        "className":"form-control",
        "name":"assesment_psychologist",
        "access":false,
        "subtype":"text"
        },
        {
        "type":"text",
        "required":false,
        "label":"General Practitioner",
        "placeholder":"Enter General Practitioner",
        "className":"form-control",
        "name":"assesment_general_practitioner",
        "access":false,
        "subtype":"text"
        },
        {
        "type":"text",
        "required":false,
        "label":"Medical Specialist",
        "placeholder":"Enter Medical Specialist",
        "className":"form-control",
        "name":"assesment_medical_specialist",
        "access":false,
        "subtype":"text"
        },
        {
        "type":"text",
        "required":false,
        "label":"Other",
        "placeholder":"Enter Other",
        "className":"form-control",
        "name":"assessment_other",
        "access":false,
        "subtype":"text"
        }
]';

        $form_fields4 = '[{"type":"text","required":false,"label":"Evaluation_optionTextField","placeholder":"Enter option","className":"form-control","name":"evaluation_option1","access":false,"subtype":"text"},{"type":"text","required":false,"label":"Evaluation_optionTextField","placeholder":"Enter option","className":"form-control","name":"evaluation_option2","access":false,"subtype":"text"},{"type":"text","required":false,"label":"Evaluation_optionTextField","placeholder":"Enter option","className":"form-control","name":"evaluation_option3","access":false,"subtype":"text"},{"type":"text","required":false,"label":"Evaluation_optionTextField","placeholder":"Enter option","className":"form-control","name":"evaluation_option4","access":false,"subtype":"text"},{"type":"text","required":false,"label":"Evaluation_optionTextField","placeholder":"Enter Potential Option","className":"form-control","name":"potential_option1","access":false,"subtype":"text"},{"type":"text","required":false,"label":"Evaluation_optionTextField","placeholder":"Enter Potential Option","className":"form-control","name":"potential_option2","access":false,"subtype":"text"},{"type":"text","required":false,"label":"Evaluation_optionTextField","placeholder":"Enter Potential Option","className":"form-control","name":"potential_option3","access":false,"subtype":"text"},{"type":"text","required":false,"label":"Evaluation_optionTextField","placeholder":"Enter Potential Option","className":"form-control","name":"potential_option4","access":false,"subtype":"text"},{"type":"text","required":false,"label":"Evaluation_optionTextField","placeholder":"Enter Trial Details","className":"form-control","name":"trial_option1","access":false,"subtype":"text"},{"type":"text","required":false,"label":"Evaluation_optionTextField","placeholder":"Enter Trial Details","className":"form-control","name":"trial_option2","access":false,"subtype":"text"},{"type":"text","required":false,"label":"Evaluation_optionTextField","placeholder":"Enter Trial Details","className":"form-control","name":"trial_option3","access":false,"subtype":"text"},{"type":"text","required":false,"label":"Evaluation_optionTextField","placeholder":"Enter Trial Details","className":"form-control","name":"trial_option4","access":false,"subtype":"text"},{"type":"text","required":false,"label":"Evaluation_optionTextField","placeholder":"Enter Advantages","className":"form-control","name":"advantage1","access":false,"subtype":"text"},{"type":"text","required":false,"label":"Evaluation_optionTextField","placeholder":"Enter Advantages","className":"form-control","name":"advantage2","access":false,"subtype":"text"},{"type":"text","required":false,"label":"Evaluation_optionTextField","placeholder":"Enter Advantages","className":"form-control","name":"advantage3","access":false,"subtype":"text"},{"type":"text","required":false,"label":"Evaluation_optionTextField","placeholder":"Enter Advantages","className":"form-control","name":"advantage4","access":false,"subtype":"text"},{"type":"text","required":false,"label":"Evaluation_optionTextField","placeholder":"Enter Disadvantage","className":"form-control","name":"disdvantage1","access":false,"subtype":"text"},{"type":"text","required":false,"label":"Evaluation_optionTextField","placeholder":"Enter Disadvantage","className":"form-control","name":"disdvantage2","access":false,"subtype":"text"},{"type":"text","required":false,"label":"Evaluation_optionTextField","placeholder":"Enter Disadvantage","className":"form-control","name":"disdvantage3","access":false,"subtype":"text"},{"type":"text","required":false,"label":"Evaluation_optionTextField","placeholder":"Enter Disadvantage","className":"form-control","name":"disdvantage4","access":false,"subtype":"text"},{"type":"text","required":false,"label":"Evaluation_optionTextField","placeholder":"Enter Estimated Time","className":"form-control","name":"estimatedTime1","access":false,"subtype":"text"},{"type":"text","required":false,"label":"Evaluation_optionTextField","placeholder":"Enter Estimated Time","className":"form-control","name":"estimatedTime2","access":false,"subtype":"text"},{"type":"text","required":false,"label":"Evaluation_optionTextField","placeholder":"Enter Estimated Time","className":"form-control","name":"estimatedTime3","access":false,"subtype":"text"},{"type":"text","required":false,"label":"Evaluation_optionTextField","placeholder":"Enter Estimated Time","className":"form-control","name":"estimatedTime4","access":false,"subtype":"text"}]';

        $form_fields5 = '[{"type":"textarea","required":false,"label":"Continence Recommendations","placeholder":"Enter Specific Evidence","className":"form-control","name":"specific_evidence","access":false,"subtype":"textarea"},{"type":"textarea","required":false,"label":"Continence Recommendations","placeholder":"Enter additional features, customisation or specification recommended","className":"form-control","name":"additional_feature","access":false,"subtype":"textarea"},{"type":"textarea","required":false,"label":"Item 1","placeholder":"Enter Item","className":"form-control","name":"item1","access":false,"subtype":"textarea"},{"type":"textarea","required":false,"label":"Item 2","placeholder":"Enter Item","className":"form-control","name":"item2","access":false,"subtype":"textarea"},{"type":"textarea","required":false,"label":"Item 3","placeholder":"Enter Item","className":"form-control","name":"item3","access":false,"subtype":"textarea"},{"type":"textarea","required":false,"label":"Quantity 1","placeholder":"Enter Quantity","className":"form-control","name":"quantity1","access":false,"subtype":"textarea"},{"type":"textarea","required":false,"label":"Quantity 2","placeholder":"Enter Quantity","className":"form-control","name":"quantity2","access":false,"subtype":"textarea"},{"type":"textarea","required":false,"label":"Quantity 3","placeholder":"Enter Quantity","className":"form-control","name":"quantity3","access":false,"subtype":"textarea"},{"type":"text","required":false,"label":"Frequency of Supply 1","placeholder":"Enter Frequency of Supply","className":"form-control","name":"frequency1","access":false,"subtype":"text"},{"type":"text","required":false,"label":"Frequency of Supply 2","placeholder":"Enter Frequency of Supply","className":"form-control","name":"frequency2","access":false,"subtype":"text"},{"type":"text","required":false,"label":"Frequency of Supply 3","placeholder":"Enter Frequency of Supply","className":"form-control","name":"frequency3","access":false,"subtype":"text"},{"type":"text","required":false,"label":"State / Specification 1","placeholder":"Enter State/Specification","className":"form-control","name":"StateSpecification1","access":false,"subtype":"text"},{"type":"text","required":false,"label":"State / Specification 2","placeholder":"Enter State/Specification","className":"form-control","name":"StateSpecification2","access":false,"subtype":"text"},{"type":"text","required":false,"label":"State / Specification 3","placeholder":"Enter State/Specification","className":"form-control","name":"StateSpecification3","access":false,"subtype":"text"},{"type":"text","required":false,"label":"Preferred supplier (Optional)","placeholder":"Enter your Preferred Supplier","className":"form-control","name":"preferred_supplier1","access":false,"subtype":"text"},{"type":"checkbox-group","required":false,"label":"Supplier Product Use Guidence","toggle":false,"inline":false,"name":"SPUG1","access":false,"other":false,"values":[{"label":"Option 1","value":"option-1","selected":true}]},{"type":"textarea","required":false,"label":"Information and Instructions","placeholder":"Enter Information and Instructions for Usage.","className":"form-control","name":"information_instructions_field","access":false,"subtype":"textarea"},{"type":"textarea","required":false,"label":"Urgent supply required?&nbsp;","placeholder":"Enter detail with YES/NO","className":"form-control","name":"urgentSupply","access":false,"subtype":"textarea"},{"type":"text","required":false,"label":"Scheme Specification (Optional)","placeholder":"Enter your scheme specification here.","className":"form-control","name":"schemeSpecification","access":false,"subtype":"text"},{"type":"text","required":false,"label":"Other supplier specification (Optional)","placeholder":"Enter your supplier specification","className":"form-control","name":"supplier_specification","access":false,"subtype":"text"},{"type":"radio-group","required":true,"label":"Participant Agreement","inline":false,"name":"participant_agreement","access":false,"other":false,"values":[{"label":"Yes","value":"","selected":true},{"label":"No","value":"option-2","selected":false},{"label":"Please provide details","value":"option-3","selected":false}]}]';

        $form_fields6 = '[{"type":"checkbox-group","required":false,"label":"Meet the NDIA expectation","toggle":false,"inline":false,"name":"NDIA_expectation","access":false,"other":false,"values":[{"label":"YES/NO","value":"option-1","selected":true}]},{"type":"checkbox-group","required":false,"label":"Providing appropriate evidence to the NDIA","toggle":false,"inline":false,"name":"appropriate_evidence","access":false,"other":false,"values":[{"label":"YES/NO","value":"option-1","selected":true}]},{"type":"checkbox-group","required":false,"label":"I understand all about the NDIA","toggle":false,"inline":false,"name":"NDIA_understanding","access":false,"other":false,"values":[{"label":"YES/NO","value":"option-1","selected":false}]},{"type":"checkbox-group","required":false,"label":"Accessing by the treating multi-disciplinary team","toggle":false,"inline":false,"name":"accessing_team","access":false,"other":false,"values":[{"label":"YES/NO","value":"option-1","selected":false}]}]';

        $form_fields7 = '[{"type":"text","required":false,"label":"Name","placeholder":"Enter Assessor’s  Name","className":"form-control","name":"assessors_name","access":false,"subtype":"text"},{"type":"text","required":false,"label":"NDIS Provider Registration Number","placeholder":"Enter Registration Number","className":"form-control","name":"registration_number","access":false,"subtype":"text"},{"type":"text","required":false,"label":"Phone Number","placeholder":"Enter Phone Number","className":"form-control","name":"assessorphone_number","access":false,"subtype":"text"},{"type":"text","subtype":"email","required":false,"label":"Email","placeholder":"Enter Email Address","className":"form-control","name":"email_address","access":false},{"type":"text","required":false,"label":"Qualification","placeholder":"Enter Qualification here.","className":"form-control","name":"qualification","access":false,"subtype":"text"},{"type":"date","required":false,"label":"Date of Assessment","placeholder":"Set Date of Assessment","className":"form-control","name":"date_assessment","access":false},{"type":"date","required":false,"label":"Date of Report","placeholder":"Set Date of Report","className":"form-control","name":"reportDate","access":false}]';
        $form_fields8 = '[{"type":"radio-group","required":false,"label":"Are you consent","inline":false,"name":"consent_decision","access":false,"other":false,"values":[{"label":"Yes, I consent","value":"option-1","selected":false},{"label":"No, I do not consent","value":"option-2","selected":false}]},{"type":"checkbox-group","required":false,"label":"I understand that I am giving consent to the NDIA to do the things with my informations set out in this section.","toggle":false,"inline":false,"name":"access_information","access":false,"other":false,"values":[{"label":"Yes/No","value":"option-1","selected":true}]},{"type":"checkbox-group","required":false,"label":"I Understand that I can access the NDIA Privacy Notice and Policy.","toggle":false,"inline":false,"name":"privacy_check","access":false,"other":false,"values":[{"label":"YES/NO","value":"option-1","selected":true}]},{"type":"date","required":false,"label":"Date","placeholder":"Enter Date of Completion","className":"form-control","name":"completion_date","access":false},{"type":"text","required":false,"label":"Full Name","placeholder":"Enter Full Name","className":"form-control","name":"full_name","access":false,"subtype":"text"},{"type":"date","required":false,"label":"Form signed in Date","placeholder":"Enter date you signed this form on behalf of NDIA Participant.","className":"form-control","name":"signedIn_date","access":false},{"type":"text","required":false,"label":"Full Name&nbsp;","placeholder":"Enter full name of  Person Completing this Form","className":"form-control","name":"person_name","access":false,"subtype":"text"},{"type":"text","required":false,"label":"Relation to the Participant","placeholder":"Enter Participant name","className":"form-control","name":"participant_name","access":false,"subtype":"text"}]';

        FormField::create([
            'form_heading_id' => 1,
            'form_field' => $form_fields
        ]);
        FormField::create([
            'form_heading_id' => 2,
            'form_field' => $form_fields2
        ]);
        FormField::create([
            'form_heading_id' => 3,
            'form_field' => $form_fields3
        ]);
        FormField::create([
            'form_heading_id' => 4,
            'form_field' => $form_fields4
        ]);
        FormField::create([
            'form_heading_id' => 5,
            'form_field' => $form_fields5
        ]);
        FormField::create([
            'form_heading_id' => 6,
            'form_field' => $form_fields6
        ]);
        FormField::create([
            'form_heading_id' => 7,
            'form_field' => $form_fields7
        ]);
        FormField::create([
            'form_heading_id' => 8,
            'form_field' => $form_fields8
        ]);

    }
}
