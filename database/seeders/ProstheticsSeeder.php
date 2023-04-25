<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\{Form, FormHeading, FormField};

class ProstheticsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $section1 = "<table style='background-color:#7209B7; border:none; width:100%;'>
                    <tr>
                        <td>
                            <p style='font-size:12pt; font-weight:bold; margin-top:5px; margin-bottom:5px; color: white'>  PART 1 – Participant and Plan Management Details</p>
                        </td>
                    </tr>
                </table>
                <p style='font-weight: bold; margin-bottom: 10px; margin-top: 10px'>1.1  NDIS Participant Details</p>
                <table
                    style='
                        border-collapse: collapse;
                        width: 100%;
                        margin: auto;
                        border: 1px solid lightslategray;
                    '
                    >
                    <tbody>
                        <tr>
                        <td style='border: 1px solid lightslategray; padding: 10px; width: 40%; background-color: lightgrey; font-size: 17px'>Name</td>
                        <td style='border: 1px solid lightslategray; padding: 10px'>
                            {{part_1_ndis_name}}
                        </td>
                        </tr>
                        <tr>
                        <td style='border: 1px solid lightslategray; padding: 10px; width: 40%;background-color: lightgrey; font-size: 17px'>Date of Birth</td>
                        <td style='border: 1px solid lightslategray; padding: 10px'>
                            {{part_1_ndis_date_of_birth}}
                        </td>
                        </tr>
                        <tr>
                        <td style='border: 1px solid lightslategray; padding: 10px; width: 40%; background-color: lightgrey; font-size: 17px'>Age</td>
                        <td style='border: 1px solid lightslategray; padding: 10px'>
                            {{part_1_ndis_age}}
                        </td>
                        </tr>
                        <tr>
                        <td style='border: 1px solid lightslategray; padding: 10px; width: 40%;background-color: lightgrey; font-size: 17px'>NDIS Number</td>
                        <td style='border: 1px solid lightslategray; padding: 10px'>
                            {{part_1_ndis_participantndis_number}}
                        </td>
                        </tr>
                        <tr>
                        <td style='border: 1px solid lightslategray; padding: 10px; width: 40%;background-color: lightgrey; font-size: 17px'>Address</td>
                        <td style='border: 1px solid lightslategray; padding: 10px'>
                            {{part_1_ndis_participant_address}}
                        </td>
                        </tr>
                        <tr>
                        <td style='border: 1px solid lightslategray; padding: 10px; width: 40%;background-color: lightgrey; font-size: 17px'>Contact Telephone Number</td>
                        <td style='border: 1px solid lightslategray; padding: 10px'>
                            {{part_1_ndis_participantphone_number}}
                        </td>
                        </tr>
                        <tr>
                        <td style='border: 1px solid lightslategray; padding: 10px; width: 40%;background-color: lightgrey; font-size: 17px'>Email</td>
                        <td style='border: 1px solid lightslategray; padding: 10px'>
                            {{part_1_ndis_participant_email}}
                        </td>
                        </tr>
                        <tr>
                        <td style='border: 1px solid lightslategray; padding: 10px; width: 40%;background-color: lightgrey; font-size: 17px'>Preferred Contact Method </td>
                        <td style='border: 1px solid lightslategray; padding: 10px'>
                            {{part_1_ndis_participant_preferredcontact}}
                        </td>
                        </tr>
                        <tr>
                        <td style='border: 1px solid lightslategray; padding: 10px; width: 40%;background-color: lightgrey; font-size: 17px'>Nominee or Guardian Name</td>
                        <td style='border: 1px solid lightslategray; padding: 10px'>
                            {{part_1_ndis_participantguardian_name}}
                        </td>
                        </tr>
                        <tr>
                        <td style='border: 1px solid lightslategray; padding: 10px; width: 40%;background-color: lightgrey; font-size: 17px'>Nominee or Guardian Phone</td>
                        <td style='border: 1px solid lightslategray; padding: 10px'>
                            {{part_1_ndis_participantguardian_phone}}
                        </td>
                        </tr>
                        <tr>
                        <td style='border: 1px solid lightslategray; padding: 10px; width: 40%;background-color: lightgrey; font-size: 17px'>NDIS Support Coordinator</td>
                        <td style='border: 1px solid lightslategray; padding: 10px'>{{part_1_plan_management_ndis_coordinator}}</td>
                        </tr>
                        <tr>
                        <td style='border: 1px solid lightslategray; padding: 10px; width: 40%;background-color: lightgrey; font-size: 17px'>Contact Details</td>
                        <td style='border: 1px solid lightslategray; padding: 10px'>
                            {{part_1_ndis_participantcontact_details}}
                        </td>
                        </tr>
                        
                    </tbody>
                </table>
                <p style='font-weight: bold; margin-bottom: 10px; margin-top: 10px'>1.2 Plan Management Details</p>
                <table
                    style='
                        border-collapse: collapse;
                        width: 100%;
                        margin: auto;
                        border: 1px solid lightslategray;
                    '
                    >
                    <tbody>
                        <tr>
                        <td style='border: 1px solid lightslategray; padding: 10px; width: 40%; background-color: lightgrey; font-size: 17px'>Agency Managed</td>
                        <td style='border: 1px solid lightslategray; padding: 10px'>
                            {{part_1_ndis_agency_managed}}
                        </td>
                        </tr>
                        <tr>
                        <td style='border: 1px solid lightslategray; padding: 10px; width: 40%; background-color: lightgrey; font-size: 17px'>Self-Managed</td>
                        <td style='border: 1px solid lightslategray; padding: 10px'>
                            {{part_1_ndis_self_managed}}
                        </td>
                        </tr>
                        <tr>
                        <td style='border: 1px solid lightslategray; padding: 10px; width: 40%; background-color: lightgrey; font-size: 17px'>Registered Plan Management Provider</td>
                        <td style='border: 1px solid lightslategray; padding: 10px'>
                            {{part_1_ndis_registeredplanmanagement_provider}}
                        </td>
                        </tr>
                        <tr>
                        <td style='border: 1px solid lightslategray; padding: 10px; width: 40%; background-color: lightgrey; font-size: 17px'>Contact Details </td>
                        <td style='border: 1px solid lightslategray; padding: 10px'>
                            {{part_1_ndis_registeredplanmanagementcontact_details}}
                        </td>
                        </tr>
                    </tbody>
                </table>
                <p style='margin-top:10px'></p>";

        $section2 = "<table style='background-color:#7209B7; border:none; width:100%;'>
                        <tr>
                            <td>
                                <p style='font-size:12pt; font-weight:bold; margin-top:5px; margin-bottom:5px; color: white'> PART 2 – Assessment</p>
                            </td>
                        </tr>
                    </table>
                    <p style='font-weight:bold; font-size:13pt;margin-top:20px; margin-bottom:20px;'>2.1   Background</p>
                    <p style='font-size:12pt;'>General: Describe participant’s current status which may include diagnosis, prognosis, co-existing conditions, disability, personal and instrumental activities of daily living, formal and informal support arrangements and life transitions.</p>
                    <table style='width:100%; border: 1px solid black'>
                        <tr>
                            <td style='width: 100%; border: 1px solid black;'><p style='margin-top:10px; margin-bottom:10px;'>{{part_2_assesment_background}}</p></td>
                        </tr>
                    </table>
                    <p style='font-weight:bold; font-size:13pt;margin-top:20px; margin-bottom:20px;'>2.2 Participant Goals</p>
                    <p style='font-size:12pt;'>If the participant’s NDIS plan has been made available, you can refer to the statement of participant’s goals and outline those relevant to the AT solution.</p>
                    <table style='width:100%; border: 1px solid black'>
                        <tr>
                            <td style='width: 100%; border: 1px solid black;'><p style='margin-top:10px; margin-bottom:10px;'>{{part_2_participant_goals}}</p></td>
                        </tr>
                    </table>
                    <p style='font-weight:bold; font-size:13pt;margin-top:20px; margin-bottom:20px;'>2.3 Functional Assessment</p>
                    <p style='font-size:12pt;'>Summarise the assessment findings relevant to your recommendations (include aspects such as range of motion, strength, interpretation of valid outcome measure findings etc. as appropriate) and explain the impact on life roles. *NDIS expects valid and reliable outcome measures are conducted, where possible, and records held by AT assessor for NDIS audit purposes. (e.g. AMPPRO, DASH)</p>
                    <table style=' width:100%; border: 1px solid black;'>
                    <tr>
                        <td style='width:60%; border: 1px solid black;'>{{part_2_functional_assessment}}</td>
                    </tr>
                    </table>";

        $form_fields = '[
                    {
                    "type":"text",
                    "required":false,
                    "label":"Full Name",
                    "placeholder":"Enter Your Full Name",
                    "className":"form-control",
                    "name":"part_1_ndis_name",
                    "access":false,
                    "subtype":"text"
                    },
                    {
                    "type":"date",
                    "required":false,
                    "label":"Date of Birth",
                    "placeholder":"Enter Your Date of Birth",
                    "className":"form-control",
                    "name":"part_1_ndis_date_of_birth",
                    "access":false,
                    "subtype":"text"
                    },
                    {
                    "type":"text",
                    "required":false,
                    "label":"Age",
                    "placeholder":"Enter Your Age",
                    "className":"form-control",
                    "name":"part_1_ndis_age",
                    "access":false,
                    "subtype":"text"
                    },
                    {
                    "type":"text",
                    "required":false,
                    "label":"NDIS Number",
                    "placeholder":"Enter Your NDIS Number",
                    "className":"form-control",
                    "name":"part_1_ndis_participantndis_number",
                    "access":false,
                    "subtype":"text"
                    },
                    {
                    "type":"text",
                    "required":false,
                    "label":"Address",
                    "placeholder":"Enter Your Address",
                    "className":"form-control",
                    "name":"part_1_ndis_participant_address",
                    "access":false,
                    "subtype":"text"
                    },
                    {
                    "type":"text",
                    "required":false,
                    "label":"Phone Number",
                    "placeholder":"Enter Your Phone Number",
                    "className":"form-control",
                    "name":"part_1_ndis_participantphone_number",
                    "access":false,
                    "subtype":"text"
                    },
                    {
                    "type":"text",
                    "required":false,
                    "label":"Email",
                    "placeholder":"Enter Your Email",
                    "className":"form-control",
                    "name":"part_1_ndis_participant_email",
                    "access":false,
                    "subtype":"text"
                    },
                    {
                    "type":"text",
                    "required":false,
                    "label":"Preferred Contact Method",
                    "placeholder":"Enter Your Preferred Contact Method",
                    "className":"form-control",
                    "name":"part_1_ndis_participant_preferredcontact",
                    "access":false,
                    "subtype":"text"
                    },
                    {
                    "type":"text",
                    "required":false,
                    "label":"Nominee or Guardian Name",
                    "placeholder":"Enter Your Nominee or Guardian Name",
                    "className":"form-control",
                    "name":"part_1_ndis_participantguardian_name",
                    "access":false,
                    "subtype":"text"
                    },
                    {
                    "type":"text",
                    "required":false,
                    "label":"Nominee or Guardian Phone",
                    "placeholder":"Enter Your Nominee or Guardian Phone",
                    "className":"form-control",
                    "name":"part_1_ndis_participantguardian_phone",
                    "access":false,
                    "subtype":"text"
                    },
                    {
                    "type":"text",
                    "required":false,
                    "label":"NDIS Coordinator",
                    "placeholder":"Enter Your NDIS Coordinator",
                    "className":"form-control",
                    "name":"part_1_plan_management_ndis_coordinator",
                    "access":false,
                    "subtype":"text"
                    },
                    {
                    "type":"text",
                    "required":false,
                    "label":"Contact Details",
                    "placeholder":"Enter Contact Details",
                    "className":"form-control",
                    "name":"part_1_ndis_participantcontact_details",
                    "access":false,
                    "subtype":"text"
                    },
                    {
                    "type":"text",
                    "required":false,
                    "label":"Agency Managed",
                    "placeholder":"Enter Agency Managed",
                    "className":"form-control",
                    "name":"part_1_ndis_agency_managed",
                    "access":false,
                    "subtype":"text"
                    },
                    {
                    "type":"text",
                    "required":false,
                    "label":"Self-Managed",
                    "placeholder":"Enter Self Managed",
                    "className":"form-control",
                    "name":"part_1_ndis_self_managed",
                    "access":false,
                    "subtype":"text"
                    },
                    {
                    "type":"text",
                    "required":false,
                    "label":"Registered Plan Management Provider",
                    "placeholder":"Enter Registered Plan Management Provider",
                    "className":"form-control",
                    "name":"part_1_ndis_registeredplanmanagement_provider",
                    "access":false,
                    "subtype":"text"
                    },
                    {
                    "type":"text",
                    "required":false,
                    "label":"Contact Details",
                    "placeholder":"Enter Registered Plan Management Provider Contact Details",
                    "className":"form-control",
                    "name":"part_1_ndis_registeredplanmanagementcontact_details",
                    "access":false,
                    "subtype":"text"
                    }
                    ]';

        $form_fields2 = '[
            {
                "type":"textarea",
                "required":false,
                "label":"Background",
                "placeholder":"Enter Your Background",
                "className":"form-control",
                "name":"part_2_assesment_background",
                "access":false,
                "subtype":"text"
             },
             {
                 "type":"textarea",
                 "required":false,
                 "label":"Participant Goals",
                 "placeholder":"Enter Participant Goals",
                 "className":"form-control",
                 "name":"part_2_participant_goals",
                 "access":false,
                 "subtype":"text"
              },
              {
                "type":"textarea",
                "required":false,
                "label":"Functional Assessment",
                "placeholder":"Enter Functional Assessment",
                "className":"form-control",
                "name":"part_2_functional_assessment",
                "access":false,
                "subtype":"text"
             }
        ]';

        $form = Form::insertGetId([
            'name' => 'Prosthetics & Orthotics Assistive Technology Assessment Template'
        ]);

        $heading1 = FormHeading::insertGetId([
            'form_heading' => 'PART 1 – Participant and Plan Management Details',
            'form_id' => $form,
            'section_html' => $section1
        ]);

        $heading2 = FormHeading::insertGetId([
            'form_heading' => 'PART 2 – Assessment',
            'form_id' => $form,
            'section_html' => $section2
        ]);

        FormField::create([
            'form_heading_id' => $heading1,
            'form_field' => $form_fields
        ]);

        FormField::create([
            'form_heading_id' => $heading2,
            'form_field' => $form_fields2
        ]);
    }
}
