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

        Form::create([
            'name' => 'Continence Related Assistive Technology Assessment Template'
        ]);

        Form::create([
            'name' => 'Animal Assessment Report'
        ]);

        Form::create([
            'name' => 'Dog Guide Report'
        ]);

        Form::create([
            'name' => 'Home Modification Report'
        ]);

        Form::create([
            'name' => 'Prosthetics & Orthotics Assistive Technology Assessment Template'
        ]);

        Form::create([
            'name' => 'Vehicle Modification Assessment Template'
        ]);

        Form::create([
            'name' => 'Hearing Devices and Hearing Technology Assessment Template'
        ]);

        Form::create([
            'name' => 'Nutrition and Dysphagia Assistive Technology Supports Assessment Template'
        ]);


        $section1 = '<table style="background-color:#6a2c75; border:none; width:100%; margin-top:20px">
    <tr>
        <td>
            <p style="font-size:14pt; font-weight:bold; margin-top:8px; margin-bottom:8px; color: white">  PART 1 – Participant and Plan Management Details</p>
        </td>
    </tr>
</table>
<p style="font-weight: bold; margin-bottom: 10px; margin-top: 10px; font-size: 12pt">NDIS Participant Details </p>
<table
    style="
        border-collapse: collapse;
        width: 100%;
        margin: auto;
        border: 1px solid lightslategray;
      "
>
    <tbody>
    <tr>
        <td style="border: 1px solid lightslategray; padding: 10px; width: 40%; background-color: lightgrey; font-size: 15px"><p style="margin-top:8px; margin-bottom:8px; margin-left:8px">Name</p></td>
        <td style="border: 1px solid lightslategray; padding: 10px">
            <p style="margin-top:8px; margin-bottom:8px; margin-left:8px">{{part_1_ndis_name}}</p>
        </td>
    </tr>
    <tr>
        <td style="border: 1px solid lightslategray; padding: 10px; width: 40%;background-color: lightgrey; font-size: 15px"><p style="margin-top:8px; margin-bottom:8px; margin-left:8px">Date of Birth</p></td>
        <td style="border: 1px solid lightslategray; padding: 10px">
            <p style="margin-top:8px; margin-bottom:8px; margin-left:8px">{{part_1_ndis_date_of_birth}}</p>
        </td>
    </tr>
    <tr>
        <td style="border: 1px solid lightslategray; padding: 10px; width: 40%; background-color: lightgrey; font-size: 15px"><p style="margin-top:8px; margin-bottom:8px; margin-left:8px">Age</p></td>
        <td style="border: 1px solid lightslategray; padding: 10px">
            <p style="margin-top:8px; margin-bottom:8px; margin-left:8px">{{part_1_ndis_age}}</p>
        </td>
    </tr>
    <tr>
        <td style="border: 1px solid lightslategray; padding: 10px; width: 40%;background-color: lightgrey; font-size: 15px"><p style="margin-top:8px; margin-bottom:8px; margin-left:8px">NDIS Number</p></td>
        <td style="border: 1px solid lightslategray; padding: 10px">
            <p style="margin-top:8px; margin-bottom:8px; margin-left:8px">{{part_1_ndis_participantndis_number}}</p>
        </td>
    </tr>
    <tr>
        <td style="border: 1px solid lightslategray; padding: 10px; width: 40%;background-color: lightgrey; font-size: 15px"><p style="margin-top:8px; margin-bottom:8px; margin-left:8px">Contact Telephone Number</p></td>
        <td style="border: 1px solid lightslategray; padding: 10px">
            <p style="margin-top:8px; margin-bottom:8px; margin-left:8px">{{part_1_ndis_participantphone_number}}</p>
        </td>
    </tr>
    <tr>
        <td style="border: 1px solid lightslategray; padding: 10px; width: 40%;background-color: lightgrey; font-size: 15px"><p style="margin-top:8px; margin-bottom:8px; margin-left:8px">Address</p></td>
        <td style="border: 1px solid lightslategray; padding: 10px">
            <p style="margin-top:8px; margin-bottom:8px; margin-left:8px">{{part_1_ndis_participant_address}}</p>
        </td>
    </tr>
    <tr>
        <td style="border: 1px solid lightslategray; padding: 10px; width: 40%;background-color: lightgrey; font-size: 15px"><p style="margin-top:8px; margin-bottom:8px; margin-left:8px">Email</p></td>
        <td style="border: 1px solid lightslategray; padding: 10px">
            <p style="margin-top:8px; margin-bottom:8px; margin-left:8px">{{part_1_ndis_participant_email}}</p>
        </td>
    </tr>
    <tr>
        <td style="border: 1px solid lightslategray; padding: 10px; width: 40%;background-color: lightgrey; font-size: 15px"><p style="margin-top:8px; margin-bottom:8px; margin-left:8px">Preferred Contact Method</p> </td>
        <td style="border: 1px solid lightslategray; padding: 10px">
            <p style="margin-top:8px; margin-bottom:8px; margin-left:8px">Field Data</p>
        </td>
    </tr>
    <tr>
        <td style="border: 1px solid lightslategray; padding: 10px; width: 40%;background-color: lightgrey; font-size: 15px"><p style="margin-top:8px; margin-bottom:8px; margin-left:8px">Nominee or Guardian Name</p></td>
        <td style="border: 1px solid lightslategray; padding: 10px">
            <p style="margin-top:8px; margin-bottom:8px; margin-left:8px">{{part_1_ndis_participantguardian_name}}</p>
        </td>
    </tr>
    <tr>
        <td style="border: 1px solid lightslategray; padding: 10px; width: 40%;background-color: lightgrey; font-size: 15px"><p style="margin-top:8px; margin-bottom:8px; margin-left:8px">Nominee or Guardian Phone</p></td>
        <td style="border: 1px solid lightslategray; padding: 10px">
            <p style="margin-top:8px; margin-bottom:8px; margin-left:8px">Field Data</p>
        </td>
    </tr>
    <tr>
        <td style="border: 1px solid lightslategray; padding: 10px; width: 40%;background-color: lightgrey; font-size: 15px"><p style="margin-top:8px; margin-bottom:8px; margin-left:8px">NDIS Support Coordinator</p></td>
        <td style="border: 1px solid lightslategray; padding: 10px">
            <p style="margin-top:8px; margin-bottom:8px; margin-left:8px">Field Data</p>
        </td>
    </tr>
    <tr>
        <td style="border: 1px solid lightslategray; padding: 10px; width: 40%;background-color: lightgrey; font-size: 15px"><p style="margin-top:8px; margin-bottom:8px; margin-left:8px">Contact Details</p></td>
        <td style="border: 1px solid lightslategray; padding: 10px">
            <p style="margin-top:8px; margin-bottom:8px; margin-left:8px">Field Data</p>
        </td>
    </tr>

    </tbody>
</table>
<p style="font-weight: bold; margin-bottom: 10px; margin-top: 10px; font-size: 12pt">Plan Management Details</p>
<table
    style="
        border-collapse: collapse;
        width: 100%;
        margin: auto;
        border: 1px solid lightslategray;
      "
>
    <tbody>
    <tr>
        <td style="border: 1px solid lightslategray; padding: 10px; width: 40%; background-color: lightgrey; font-size: 15px"><p style="margin-top:8px; margin-bottom:8px; margin-left:8px">Agency Managed</p></td>
        <td style="border: 1px solid lightslategray; padding: 10px">
            <p style="margin-top:8px; margin-bottom:8px; margin-left:8px">Field Data</p>
        </td>
    </tr>
    <tr>
        <td style="border: 1px solid lightslategray; padding: 10px; width: 40%; background-color: lightgrey; font-size: 15px"><p style="margin-top:8px; margin-bottom:8px; margin-left:8px">Self-Managed</p></td>
        <td style="border: 1px solid lightslategray; padding: 10px">
            <p style="margin-top:8px; margin-bottom:8px; margin-left:8px">Field Data</p>
        </td>
    </tr>
    <tr>
        <td style="border: 1px solid lightslategray; padding: 10px; width: 40%; background-color: lightgrey; font-size: 15px"><p style="margin-top:8px; margin-bottom:8px; margin-left:8px">Registered Plan Management Provider</p></td>
        <td style="border: 1px solid lightslategray; padding: 10px">
            <p style="margin-top:8px; margin-bottom:8px; margin-left:8px">Field Data</p>
        </td>
    </tr>
    <tr>
        <td style="border: 1px solid lightslategray; padding: 10px; width: 40%; background-color: lightgrey; font-size: 15px"><p style="margin-top:8px; margin-bottom:8px; margin-left:8px">Contact Details</p> </td>
        <td style="border: 1px solid lightslategray; padding: 10px">
            <p style="margin-top:8px; margin-bottom:8px; margin-left:8px">Field Data</p>
        </td>
    </tr>
    </tbody>
</table>';

        $section2 = '<table style="background-color:#6a2c75; border:none; width:100%; margin-top:20px">
    <tr>
        <td>
            <p style="font-size:14pt; font-weight:bold; margin-top:8px; margin-bottom:8px; color: white">  PART 2 – Assessment</p>
        </td>
    </tr>
</table>
<p style="font-weight:bold; font-size:12pt;margin-top:10px; margin-bottom:10px;">Background</p>
<p style="font-size:11pt; margin-bottom: 10px">General: Describe participant’s current status which may include diagnosis, prognosis, co-existing conditions, disability, personal and instrumental activities of daily living, formal and informal support arrangements and life transitions. Consider health issues and other related aspects that may influence the need for continence support. </p>
<table style="width:100%; border: 1px solid black">
    <tr>
        <td style="width: 100%; border: 1px solid black;"><p style="margin-top:10px; margin-bottom:10px;"> Text goes here</p></td>
    </tr>
</table>
<p style="font-weight:bold; font-size:12pt;margin-top:10px; margin-bottom:10px;">Participant Goals</p>
<p style="font-size:11pt; margin-bottom: 10px;">If the participant’s NDIS plan has been made available, you can refer to the statement of participant’s goals and outline those relevant to the AT solution.</p>
<table style="width:100%; border: 1px solid black">
    <tr>
        <td style="width: 100%; border: 1px solid black;"><p style="margin-top:10px; margin-bottom:10px;"> Text goes here</p></td>
    </tr>
</table>
<p style="font-weight:bold; font-size:12pt; margin-top:10px; margin-bottom:10px;">Functional Assessment</p>
<p style="font-size:12pt; margin-bottom: 10px">Note current level of function related to disability and impact on life roles: skin integrity issues; rapidly changing condition – including cognitive issues; dexterity and mobility issues. Consider the need for a support person to assist with the use of continence products. Does the participant currently need assistance to use their continence items? What assistance do they currently get? Will your recommendations result in a change in personal care needs? What assistance will the participant need?</p>
<p style="font-size:12pt; margin-bottom: 10px">NDIS expects relevant assessments are conducted where required and records held by AT assessor for NDIS audit purposes.</p>
<table style="width:100%; border: 1px solid black">
    <tr>
        <td style="width: 100%; border: 1px solid black;"><p style="margin-top:10px; margin-bottom:10px;"> Text goes here</p></td>
    </tr>
</table>
<p style="font-size:12pt; margin-top:10px; margin-bottom: 10px">Indicate Type of Loss</p>
<table style="width:100%; border: 1px solid black">
    <tr>
        <td style="background: #efefef; width: 30%; border-right: 1px solid black"><p style="margin-top:10px; margin-bottom:10px;"> Bladder</p></td>
        <td><p style="margin-top:10px; margin-bottom:10px;"> Type</p></td>
    </tr>
    <tr>
        <td style="background: #efefef; width: 30%; border-right: 1px solid black"><p style="margin-top:10px; margin-bottom:10px;"> Bowel</p></td>
        <td style="width: 80%"><p style="margin-top:10px; margin-bottom:10px;"> .html</p></td>
    </tr>
</table>
<p style="font-weight:bold; font-size:12pt;margin-top:10px; margin-bottom:10px;">Current Continence Product in Use</p>
<table style="width:100%; border: 1px solid black; font-size:11pt;">
    <tr>
        <th style="width: 30%; border: 1px solid black; text-align:center"><p style="margin-top:10px; margin-bottom:10px;"> Type of Continence Product</p></th>
        <th style="width: 20%; border: 1px solid black; text-align:center"><p style="margin-top:10px; margin-bottom:10px;"> Usage</p></th>
        <th style="width: 30%; border: 1px solid black; text-align:center"><p style="margin-top:10px; margin-bottom:10px;"> Participants Report of Suitability</p></th>
        <th style="width: 20%; border: 1px solid black; text-align:center"><p style="margin-top:10px; margin-bottom:10px;"> Does it need reassessment? Yes/No</p></th>
    </tr>
    <tr>
        <td style="width: 30%; border: 1px solid black"><p style="margin-top:10px; margin-bottom:10px;"> Some Text will go here!</p></td>
        <td style="width: 30%; border: 1px solid black"><p style="margin-top:10px; margin-bottom:10px;"> Some Text will go here!</p></td>
        <td style="width: 30%; border: 1px solid black"><p style="margin-top:10px; margin-bottom:10px;"> Some Text will go here!</p></td>
        <td style="width: 30%; border: 1px solid black"><p style="margin-top:10px; margin-bottom:10px;"> Some Text will go here!</p></td>
    </tr>
    <tr>
        <td style="width: 30%; border: 1px solid black"><p style="margin-top:10px; margin-bottom:10px;"> Some Text will go here!</p></td>
        <td style="width: 30%; border: 1px solid black"><p style="margin-top:10px; margin-bottom:10px;"> Some Text will go here!</p></td>
        <td style="width: 30%; border: 1px solid black"><p style="margin-top:10px; margin-bottom:10px;"> Some Text will go here!</p></td>
        <td style="width: 30%; border: 1px solid black"><p style="margin-top:10px; margin-bottom:10px;"> Some Text will go here!</p></td>
    </tr>
</table>
<p style="font-weight:bold; font-size:12pt;margin-top:10px; margin-bottom:10px;">Consideration of health and other issues</p>
<p style="font-size:11pt; margin-bottom: 10px">Summarise recommendations from allied health and/or medical assessments.</p>
<table style="width:100%; border: 1px solid black; font-size:12pt;">
    <tr>
        <td style="width: 100%; border: 1px solid black;"><p style="margin-top:10px; margin-bottom:10px;"> Text goes here</p></td>
    </tr>
</table>
<table style="width:100%; border: 1px solid black; font-size:12pt;">
    <tr>
        <td style="width: 90%; border: 1px solid black; backgound-color: lightgray"><p>Are further health, medical assessments, AT solutions and/or advice required from any of the following health or allied health professionals? Yes/No</p></td>
        <td style="width: 10%; border: 1px solid black;"><p style="margin-top:10px; margin-bottom:10px;"> |</p></td>
    </tr>
</table>
<p style="font-size:12pt; margin-top:10px; margin-bottom: 10px">Indicate relevant health professional</p>
<table style="width:100%; border: 1px solid black; font-size:12pt;">
    <tr>
        <th style="width: 40%; border: 1px solid black; text-align:start; font-weight:bold; background-color: lightgrey;"><p style="margin-top:10px; margin-bottom:10px;"> Physiotherapist</p></th>
        <th style="width: 60%; border: 1px solid black;"><p style="margin-top:10px; margin-bottom:10px;"> |</p></th>
    </tr>
    <tr>
        <th style="width: 40%; border: 1px solid black; text-align:start; font-weight:bold; background-color: lightgrey;"><p style="margin-top:10px; margin-bottom:10px;"> Dietician</p></th>
        <th style="width: 60%; border: 1px solid black;"><p style="margin-top:10px; margin-bottom:10px;"> |</p></th>
    </tr>
    <tr>
        <th style="width: 40%; border: 1px solid black; text-align:start; font-weight:bold; background-color: lightgrey;"><p style="margin-top:10px; margin-bottom:10px;"> Occupational Therapist</p></th>
        <th style="width: 60%; border: 1px solid black;"><p style="margin-top:10px; margin-bottom:10px;"> |</p></th>
    </tr>
    <tr>
        <th style="width: 40%; border: 1px solid black; text-align:start; font-weight:bold; background-color: lightgrey;"><p style="margin-top:10px; margin-bottom:10px;"> Psychologist</p></th>
        <th style="width: 60%; border: 1px solid black;"><p style="margin-top:10px; margin-bottom:10px;"> |</p></th>
    </tr>
    <tr>
        <th style="width: 40%; border: 1px solid black; text-align:start; font-weight:bold; background-color: lightgrey;"><p style="margin-top:10px; margin-bottom:10px;"> General Practitioner</p></th>
        <th style="width: 60%; border: 1px solid black;"><p style="margin-top:10px; margin-bottom:10px;"> |</p></th>
    </tr>
    <tr>
        <th style="width: 40%; border: 1px solid black; text-align:start; font-weight:bold; background-color: lightgrey;"><p style="margin-top:10px; margin-bottom:10px;"> Medical Specialist</p></th>
        <th style="width: 60%; border: 1px solid black;"><p style="margin-top:10px; margin-bottom:10px;"> |</p></th>
    </tr>
    <tr>
        <th style="width: 40%; border: 1px solid black; text-align:start; font-weight:bold; background-color: lightgrey;"><p style="margin-top:10px; margin-bottom:10px;"> Other</p></th>
        <th style="width: 60%; border: 1px solid black;"><p style="margin-top:10px; margin-bottom:10px;"> |</p></th>
    </tr>
</table>
<p style="font-size:12pt; margin-top: 10px; margin-bottom: 10px">If yes, please provide the following information</p>
<ul style="font-size:12pt;">
    <li><p style="margin-top:10px; margin-bottom:10px;">Has the participant agreed to seek this assessment and/or advice?</p></li>
    <li><p style="margin-top:10px; margin-bottom:10px;">Is the participant aware that the NDIS cannot fund mainstream medical and health services?</p></li>
    <li><p style="margin-top:10px; margin-bottom:10px;">Describe the additional continence product/training needs identified by participant/Continence Assessor?</p></li>
    <li><p style="margin-top:10px; margin-bottom:10px;">Are other AT solutions or environmental adaptations/home modifications such as toileting AT or bathroom modifications required ?</p></li>
    <li><p style="margin-top:10px; margin-bottom:10px;">Does the participant demonstrate behaviours of concern and have a behaviour support plan for restrictive practice?</p></li>
    <li><p style="margin-top:10px; margin-bottom:10px;">How might the outcome of this advice change the recommended NDIS continence supports to pursue the participant’s goals?</p></li>
</ul>
<table
    style="
        border-collapse: collapse;
        width: 100%;
        margin-bottom: 10px;
        border: 1px solid lightslategray;
      "
        >
    <tbody>
    <tr>
        <td style="border: 1px solid lightslategray; padding: 10px; width: 100%; background-color: lightgrey; font-size: 17px"><p style="margin-top:10px; margin-bottom:10px;">Field-Data</p></td>
    </tr>
    </tbody>
</table>';

$section3 = '<table style="background-color:#6a2c75; border:none; width:100%; margin-top:20px">
    <tr>
        <td>
            <p style="font-size:14pt; font-weight:bold; margin-top:8px; margin-bottom:8px; color: white">Exploration of Continence Interventions and Options</p>
        </td>
    </tr>
</table>
<p style="font-weight: bold; margin-bottom: 10px; margin-top: 10px">Evaluation of options</p>
<p style="margin-bottom: 10px">Thorough list of alternatives including use of other supports and approaches. Where trials have been conducted please give details of where the trials took place and for how long.</p>
<p style="margin-bottom: 10px">NOTE training in device use is included and expected to be accomplished within 2 hours. Provide rationale and hours required if more extensive or specific training is indicated</p>
<table
    style="
        border-collapse: collapse;
        width: 100%;
        margin: auto;
        border: 1px solid lightslategray;
      "
>
    <thead>
    <tr>
        <th style="border: 1px solid lightslategray; background-color: lightgrey; font-size: 15px">Option</th>
        <th style="border: 1px solid lightslategray;  background-color: lightgrey; font-size: 15px">Describe potential options trialled in relation to goal attainment</th>
        <th style="border: 1px solid lightslategray;  background-color: lightgrey; font-size: 15px">Trialled (T) or Considered (C)? Include trial details (timing, location)</th>
        <th style="border: 1px solid lightslategray;  background-color: lightgrey; font-size: 15px">Advantages</th>
        <th style="border: 1px solid lightslategray;  background-color: lightgrey; font-size: 15px">Disadvantages</th>
        <th style="border: 1px solid lightslategray;  background-color: lightgrey; font-size: 15px">Estimated hours for training and review</th>

    </tr>
    </thead>
    <tbody>
    <tr>
        <td style="border: 1px solid lightslategray; padding: 10px">
            Field Data
        </td>
        <td style="border: 1px solid lightslategray; padding: 10px">
            Field Data
        </td>
        <td style="border: 1px solid lightslategray; padding: 10px">
            Field Data
        </td>
        <td style="border: 1px solid lightslategray; padding: 10px">
            Field Data
        </td>
        <td style="border: 1px solid lightslategray; padding: 10px">
            Field Data
        </td>
        <td style="border: 1px solid lightslategray; padding: 10px">
            Field Data
        </td>
    </tr>
    <tr>
        <td style="border: 1px solid lightslategray; padding: 10px">
            Field Data
        </td>
        <td style="border: 1px solid lightslategray; padding: 10px">
            Field Data
        </td>
        <td style="border: 1px solid lightslategray; padding: 10px">
            Field Data
        </td>
        <td style="border: 1px solid lightslategray; padding: 10px">
            Field Data
        </td>
        <td style="border: 1px solid lightslategray; padding: 10px">
            Field Data
        </td>
        <td style="border: 1px solid lightslategray; padding: 10px">
            Field Data
        </td>
    </tr>
    <tr>
        <td style="border: 1px solid lightslategray; padding: 10px">
            Field Data
        </td>
        <td style="border: 1px solid lightslategray; padding: 10px">
            Field Data
        </td>
        <td style="border: 1px solid lightslategray; padding: 10px">
            Field Data
        </td>
        <td style="border: 1px solid lightslategray; padding: 10px">
            Field Data
        </td>
        <td style="border: 1px solid lightslategray; padding: 10px">
            Field Data
        </td>
        <td style="border: 1px solid lightslategray; padding: 10px">
            Field Data
        </td>
    </tr>
    <tr>
        <td style="border: 1px solid lightslategray; padding: 10px">
            Field Data
        </td>
        <td style="border: 1px solid lightslategray; padding: 10px">
            Field Data
        </td>
        <td style="border: 1px solid lightslategray; padding: 10px">
            Field Data
        </td>
        <td style="border: 1px solid lightslategray; padding: 10px">
            Field Data
        </td>
        <td style="border: 1px solid lightslategray; padding: 10px">
            Field Data
        </td>
        <td style="border: 1px solid lightslategray; padding: 10px">
            Field Data
        </td>
    </tr>
    </tbody>
</table>
<br/>';

$section4 = '<table style="background-color:#6a2c75; border:none; width:100%; margin-top:20px">
    <tr>
        <td>
            <p style="font-size:14pt; font-weight:bold; margin-top:8px; margin-bottom:8px; color: white">Continence Recommendations</p>
        </td>
    </tr>
</table>
<p style="margin-bottom: 10px; margin-top: 10px">Provide specific evidence that the supports/products described will enable the participant to pursue their identified goals and be of long-term benefit considering both current and future needs.</p>
<table
    style="
        border-collapse: collapse;
        width: 100%;
        margin-bottom: 10px;
        border: 1px solid lightslategray;
      "
>
    <tbody>
    <tr>
        <td style="border: 1px solid lightslategray; padding: 10px; width: 100%; background-color: lightgrey; font-size: 17px">Field-Data</td>
    </tr>
    </tbody>
</table>
<p style="margin-bottom: 10px; margin-top: 10px">Are there additional features, customisation or specification recommended that is considered to be above the minimum or standard level for this support? Please provide the specific evidence or clinical justification for these.</p>
<table
    style="
        border-collapse: collapse;
        width: 100%;
        margin-bottom: 10px;
        border: 1px solid lightslategray;
      "
>
    <tbody>
    <tr>
        <td style="border: 1px solid lightslategray; padding: 10px; width: 100%; background-color: lightgrey; font-size: 17px">Field-Data</td>
    </tr>
    </tbody>
</table>
<p style="margin-bottom: 10px; margin-top: 10px">Description of continence products and/or AT solution. Detail all necessary components required to meet participant’s goal. This must be detailed enough to ensure that the item can be accurately supplied (attach completed supplier(s) specification/quotes as required).</p>
<table
    style="
        border-collapse: collapse;
        width: 100%;
        margin: auto;
        border: 1px solid lightslategray;
      "
>
    <tbody>
    <tr>
        <td style="border: 1px solid lightslategray; padding: 10px; width: 40%; background-color: lightgrey; font-size: 15px">Item</td>
        <td style="border: 1px solid lightslategray; padding: 10px; width: 40%; background-color: lightgrey; font-size: 15px">Quantity</td>
        <td style="border: 1px solid lightslategray; padding: 10px; width: 40%; background-color: lightgrey; font-size: 15px">Frequency of supply required. (not usually more frequent than quarterly)</td>
        <td style="border: 1px solid lightslategray; padding: 10px; width: 40%; background-color: lightgrey; font-size: 15px">State/territory specification/item ID</td>
    </tr>
    <tr>
        <td style="border: 1px solid lightslategray">
            Field Data
        </td>
        <td style="border: 1px solid lightslategray">
            Field Data
        </td>
        <td style="border: 1px solid lightslategray">
            Field Data
        </td>
        <td style="border: 1px solid lightslategray">
            Field Data
        </td>
    </tr>
    <tr>
        <td style="border: 1px solid lightslategray; padding: 10px">
            Field Data
        </td>
        <td style="border: 1px solid lightslategray; padding: 10px">
            Field Data
        </td>
        <td style="border: 1px solid lightslategray; padding: 10px">
            Field Data
        </td>
        <td style="border: 1px solid lightslategray; padding: 10px">
            Field Data
        </td>
    </tr>
    <tr>
        <td style="border: 1px solid lightslategray; padding: 10px">
            Field Data
        </td>
        <td style="border: 1px solid lightslategray; padding: 10px">
            Field Data
        </td>
        <td style="border: 1px solid lightslategray; padding: 10px">
            Field Data
        </td>
        <td style="border: 1px solid lightslategray; padding: 10px">
            Field Data
        </td>
    </tr>
    </tbody>
</table>
<table
    style="
        border-collapse: collapse;
        width: 100%;
        margin: auto;
        border: 1px solid lightslategray;
      "
>
    <tbody>
    <tr>
        <td style="border: 1px solid lightslategray; padding: 10px; width: 60%; background-color: lightgrey; font-size: 15px">Participant’s preferred supplier (optional):</td>
        <td style="border: 1px solid lightslategray; padding: 10px; font-size: 15px">Field-Data</td>
    </tr>
    <tr>
        <td style="border: 1px solid lightslategray; padding: 10px; width: 60%; background-color: lightgrey; font-size: 15px">Is recommendation in line with supplier product use guidance? Yes/No</td>
        <td style="border: 1px solid lightslategray; padding: 10px; font-size: 15px">
            Field Data
        </td>
    </tr>
    </tbody>
</table>
<p style="margin-bottom: 10px; margin-top: 10px">The participant is to be provided with product information and instructions for use including any precautions. Specify who is to do this and when.</p>
<table
    style="
        border-collapse: collapse;
        width: 100%;
        margin-bottom: 10px;
        border: 1px solid lightslategray;
      "
>
    <tbody>
    <tr>
        <td style="border: 1px solid lightslategray; padding: 10px; width: 100%; background-color: lightgrey; font-size: 17px">Field-Data</td>
    </tr>
    </tbody>
</table>
<p style="margin-bottom: 10px; margin-top: 10px">Is urgent supply required?	 Yes/No Details</p>
<table
    style="
        border-collapse: collapse;
        width: 100%;
        margin-bottom: 10px;
        border: 1px solid lightslategray;
      "
>
    <tbody>
    <tr>
        <td style="border: 1px solid lightslategray; padding: 10px; width: 100%; background-color: lightgrey; font-size: 17px">Field-Data</td>
    </tr>
    </tbody>
</table>
<p style="margin-bottom: 10px; margin-top: 10px">Continence product order detail is attached (as advised by supplier(s))</p>
<table
    style="
        border-collapse: collapse;
        width: 100%;
        margin: auto;
        border: 1px solid lightslategray;
      "
>
    <tbody>
    <tr>
        <td style="border: 1px solid lightslategray; padding: 10px; width: 60%; background-color: lightgrey; font-size: 15px">State/Territory Scheme specification (optional)</td>
        <td style="border: 1px solid lightslategray; padding: 10px; font-size: 15px">Field-Data</td>
    </tr>
    <tr>
        <td style="border: 1px solid lightslategray; padding: 10px; width: 60%; background-color: lightgrey; font-size: 15px">Other supplier’s specification (optional)</td>
        <td style="border: 1px solid lightslategray; padding: 10px; font-size: 15px">
            Field Data
        </td>
    </tr>
    </tbody>
</table>
<table
    style="
        border-collapse: collapse;
        width: 100%;
        margin-bottom: 10px;
        border: 1px solid lightslategray;
      "
>
    <tbody>
    <tr>
        <td style="border: 1px solid lightslategray; padding: 10px; width: 100%; background-color: lightgrey; font-size: 17px">Field-Data</td>
    </tr>
    </tbody>
</table>
<p style="margin-bottom: 10px; margin-top: 10px">Participant Agreement</p>
<p style="margin-bottom: 10px">Does the participant agree with the recommended continence assessment and products? (Are the assessor’s clinical recommendations and participant preference the same?)</p>
<table
    style="
        border-collapse: collapse;
        width: 100%;
        margin: auto;
        border: 1px solid lightslategray;
      "
>
    <tbody>
    <tr>
        <td style="border: 1px solid lightslategray; padding: 10px; width: 40%; background-color: lightgrey; font-size: 17px">Yes</td>
        <td style="border: 1px solid lightslategray; padding: 10px">
            Field Data
        </td>
    </tr>
    <tr>
        <td style="border: 1px solid lightslategray; padding: 10px; width: 40%;background-color: lightgrey; font-size: 17px">No</td>
        <td style="border: 1px solid lightslategray; padding: 10px">
            Field Data
        </td>
    </tr>
    <tr>
        <td style="border: 1px solid lightslategray; padding: 10px; width: 40%; background-color: lightgrey; font-size: 17px">Please provide detail</td>
        <td style="border: 1px solid lightslategray; padding: 10px">
            Field Data
        </td>
    </tr>
    </tbody>
</table>
<br/>';

        $section5 = '<table style="background-color:#6a2c75; border:none; width:100%; margin-top:20px">
    <tr>
        <td>
            <p style="font-size:14pt; font-weight:bold; margin-top:8px; margin-bottom:8px; color: white">Details of Assistive Technology Assessor</p>
        </td>
    </tr>
</table>
<p style="margin-bottom: 10px; margin-top: 10px"><span style="font-weight: bold">DECLARATION </span> (indicate all relevant sections that apply)</p>
<table
    style="
        border-collapse: collapse;
        width: 100%;
        margin: auto;
        border: 1px solid lightslategray;
      "
>
    <tbody>
    <tr>
        <td style="border: 1px solid lightslategray; padding: 10px; width: 80%; background-color: lightgrey; font-size: 17px">I certify that I meet the NDIA expectations of AT assessor provider suitability (including understanding of the current NDIS Act, Rules and Operational Guidelines) to assess the type of assistive technology and associated supports, at the level of complexity required by this participant.</td>
        <td style="border: 1px solid lightslategray; padding: 10px">
            Field Data
        </td>
    </tr>
    <tr>
        <td style="border: 1px solid lightslategray; padding: 10px; width: 80%;background-color: lightgrey; font-size: 17px">I will provide appropriate evidence to the NDIA and/or Quality and Safe Guards Commission if and as requested.</td>
        <td style="border: 1px solid lightslategray; padding: 10px">
            Field Data
        </td>
    </tr>
    <tr>
        <td style="border: 1px solid lightslategray; padding: 10px; width: 80%; background-color: lightgrey; font-size: 17px">I understand and acknowledge that the NDIA and participant will rely on my professional advice to select, source and implement this assistive technology.</td>
        <td style="border: 1px solid lightslategray; padding: 10px">
            Field Data
        </td>
    </tr>
    <tr>
        <td style="border: 1px solid lightslategray; padding: 10px; width: 80%; background-color: lightgrey; font-size: 17px">This assistive technology has been assessed by the treating multi-disciplinary team and I have completed the AT assessment on behalf of that team.</td>
        <td style="border: 1px solid lightslategray; padding: 10px">
            Field Data
        </td>
    </tr>
    </tbody>
</table>
<p style="margin-bottom: 10px; margin-top: 10px; font-weight: bold">Assessor’s Details</p>
<table
    style="
        border-collapse: collapse;
        width: 100%;
        margin: auto;
        border: 1px solid lightslategray;
      "
>
    <tbody>
    <tr>
        <td style="border: 1px solid lightslategray; padding: 10px; width: 60%; background-color: lightgrey; font-size: 17px">Name</td>
        <td style="border: 1px solid lightslategray; padding: 10px; font-size: 17px"></td>
    </tr>
    <tr>
        <td style="border: 1px solid lightslategray; padding: 10px; width: 60%; background-color: lightgrey; font-size: 17px">NDIS Provider Registration number (where applicable)</td>
        <td style="border: 1px solid lightslategray; padding: 10px; font-size: 17px">Field-Data</td>
    </tr>
    <tr>
        <td style="border: 1px solid lightslategray; padding: 10px; width: 60%; background-color: lightgrey; font-size: 17px">Phone</td>
        <td style="border: 1px solid lightslategray; padding: 10px; font-size: 17px">Field-Data</td>
    </tr>
    <tr>
        <td style="border: 1px solid lightslategray; padding: 10px; width: 60%; background-color: lightgrey; font-size: 17px">Email</td>
        <td style="border: 1px solid lightslategray; padding: 10px; font-size: 17px">Field-Data</td>
    </tr>
    <tr>
        <td style="border: 1px solid lightslategray; padding: 10px; width: 60%; background-color: lightgrey; font-size: 17px">Signature</td>
        <td style="border: 1px solid lightslategray; padding: 10px; font-size: 17px">Field-Data</td>
    </tr>
    <tr>
        <td style="border: 1px solid lightslategray; padding: 10px; width: 60%; background-color: lightgrey; font-size: 17px">Qualification</td>
        <td style="border: 1px solid lightslategray; padding: 10px; font-size: 17px">Field-Data</td>
    </tr>
    <tr>
        <td style="border: 1px solid lightslategray; padding: 10px; width: 60%; background-color: lightgrey; font-size: 17px">Date of Assessment</td>
        <td style="border: 1px solid lightslategray; padding: 10px; font-size: 17px">Field-Data</td>
    </tr>
    <tr>
        <td style="border: 1px solid lightslategray; padding: 10px; width: 60%; background-color: lightgrey; font-size: 17px">Date of Report</td>
        <td style="border: 1px solid lightslategray; padding: 10px; font-size: 17px">Field-Data</td>
    </tr>

    </tbody>
</table>
<br/>
<table style="background-color:#6a2c75; border:none; width:100%; margin-top:20px">
    <tr>
        <td>
            <p style="font-size:14pt; font-weight:bold; margin-top:8px; margin-bottom:8px; color: white">Consent to Collect and Share Your Information – Provider AT Assessment and Quotation(s)</p>
        </td>
    </tr>
</table>
<p style="margin-bottom: 10px; margin-top: 10px; font-weight: bold">For the participant to complete</p>
<p>As a participant who requires assistive technology supports, the National Disability Insurance Agency (NDIA) may need to contact your AT assessor and / or AT supplier to discuss information within your assistive technology assessment and quotation(s). This will assist the NDIA with determining whether your request for assistive technology support(s) can be provided to you under the NDIS. Do you consent to the NDIA collecting and disclosing your information including from these third parties mentioned above, in relation to your assistive technology assessment and quotation? </p>
<table
    style="
        border-collapse: collapse;
        width: 100%;
        margin: auto;
        border: 1px solid lightslategray;
      "
>
    <tbody>
    <tr>
        <td style="border: 1px solid lightslategray; padding: 10px; width: 40%; background-color: lightgrey; font-size: 17px">Yes, I consent</td>
        <td style="border: 1px solid lightslategray; padding: 10px; font-size: 17px">Field-Data</td>
    </tr>
    <tr>
        <td style="border: 1px solid lightslategray; padding: 10px; width: 40%; background-color: lightgrey; font-size: 17px">No, I do not consent</td>
        <td style="border: 1px solid lightslategray; padding: 10px; font-size: 17px">Field-Data</td>
    </tr>
    <tr>
        <td style="border: 1px solid lightslategray; padding: 10px; width: 40%; background-color: lightgrey; font-size: 17px">Participant’s Signature</td>
        <td style="border: 1px solid lightslategray; padding: 10px; font-size: 17px">Field-Data</td>
    </tr>
    <tr>
        <td style="border: 1px solid lightslategray; padding: 10px; width: 80%; background-color: lightgrey; font-size: 17px">I understand that I am giving consent to the NDIA to do the things with my information set out in this section. I understand that I can withdraw my consent for the NDIS to do things with my information at any time by letting the NDIA know.</td>
        <td style="border: 1px solid lightslategray; padding: 10px; font-size: 17px">Field-Data</td>
    </tr>
    <tr>
        <td style="border: 1px solid lightslategray; padding: 10px; width: 80%; background-color: lightgrey; font-size: 17px">I understand that I can access the NDIA’s Privacy Notice and Privacy Policy on the <a href="http://phpword.readthedocs.io" style="text-decoration: underline; color: blue;">NDIA website</a> or by contacting the NDIA.
        </td>
        <td style="border: 1px solid lightslategray; padding: 10px; font-size: 17px">Field-Data</td>
    </tr>
    <tr>
        <td style="border: 1px solid lightslategray; padding: 10px; width: 40%; background-color: lightgrey; font-size: 17px">Signature</td>
        <td style="border: 1px solid lightslategray; padding: 10px; font-size: 17px">Field-Data</td>
    </tr>
    <tr>
        <td style="border: 1px solid lightslategray; padding: 10px; width: 40%; background-color: lightgrey; font-size: 17px">Date</td>
        <td style="border: 1px solid lightslategray; padding: 10px; font-size: 17px">Field-Data</td>
    </tr>
    <tr>
        <td style="border: 1px solid lightslategray; padding: 10px; width: 40%; background-color: lightgrey; font-size: 17px">Full name</td>
        <td style="border: 1px solid lightslategray; padding: 10px; font-size: 17px">Field-Data</td>
    </tr>

    </tbody>
</table>
<p style="margin-bottom: 10px; margin-top: 10px"><span style="font-weight: bold">If you have signed this Form on behalf of the NDIS participant</span>, please complete the details below.It is an offence to provide false or misleading information. We may require you to provide evidence of your authority to sign on behalf of the person.
</p>
<table
    style="
        border-collapse: collapse;
        width: 100%;
        margin: auto;
        border: 1px solid lightslategray;
      "
>
    <tbody>
    <tr>
        <td style="border: 1px solid lightslategray; padding: 10px; width: 40%; background-color: lightgrey; font-size: 17px">Signature</td>
        <td style="border: 1px solid lightslategray; padding: 10px; font-size: 17px">Field-Data</td>
    </tr>
    <tr>
        <td style="border: 1px solid lightslategray; padding: 10px; width: 40%; background-color: lightgrey; font-size: 17px">Date</td>
        <td style="border: 1px solid lightslategray; padding: 10px; font-size: 17px">Field-Data</td>
    </tr>
    <tr>
        <td style="border: 1px solid lightslategray; padding: 10px; width: 40%; background-color: lightgrey; font-size: 17px">Full Name of person completing this form (please print):</td>
        <td style="border: 1px solid lightslategray; padding: 10px; font-size: 17px">Field-Data</td>
    </tr>
    <tr>
        <td style="border: 1px solid lightslategray; padding: 10px; width: 40%; background-color: lightgrey; font-size: 17px">Relationship to participant or person wishing to become an NDIS participant:</td>
        <td style="border: 1px solid lightslategray; padding: 10px; font-size: 17px">Field-Data</td>
    </tr>

    </tbody>
</table>';

       $form = Form::create([
            'name' => 'Continence Related Assistive Technology Assessment Template'
        ]);

        $form = FormHeading::create([
            'form_heading' => 'Participant and Plan Management Details',
            'form_id' => '1',
            'section_html' => $section1
        ]);

        $form = FormHeading::create([
            'form_heading' => 'Assessment',
            'form_id' => '1',
            'section_html' => $section2
        ]);

        $form = FormHeading::create([
            'form_heading' => 'Exploration of Continence Interventions and Options',
            'form_id' => '1',
            'section_html' => $section3
        ]);

        $form = FormHeading::create([
            'form_heading' => 'Continence Recommendations',
            'form_id' => '1',
            'section_html' => $section4
        ]);

        $form = FormHeading::create([
            'form_heading' => 'Details of Assistive Technology Assessor',
            'form_id' => '1',
            'section_html' => $section5
        ]);

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
                        "type":"text",
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
                        "label":"Contact Details",
                        "placeholder":"Enter Your Contact Details",
                        "className":"form-control",
                        "name":"part_1_ndis_participantcontact_details",
                        "access":false,
                        "subtype":"text"
                        },
                        {
                        "type":"text",
                        "required":false,
                        "label":"Full Name",
                        "placeholder":"Enter Your Full Name",
                        "className":"form-control",
                        "name":"part_1_plan_management_fullname",
                        "access":false,
                        "subtype":"text"
                        },
                        {
                        "type":"text",
                        "required":false,
                        "label":"Email",
                        "placeholder":"Enter Your Email",
                        "className":"form-control",
                        "name":"part_1_plan_management_email",
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
                        "label":"Guardian Name",
                        "placeholder":"Enter Your Guardian Name",
                        "className":"form-control",
                        "name":"part_1_plan_managementguardian_name",
                        "access":false,
                        "subtype":"text"
                        },
                        {
                        "type":"text",
                        "required":false,
                        "label":"Guardian Phone",
                        "placeholder":"Enter Your Guardian Phone",
                        "className":"form-control",
                        "name":"part_1_plan_managementguardian_phone",
                        "access":false,
                        "subtype":"text"
                        },
                        {
                        "type":"text",
                        "required":false,
                        "label":"Date of Assessment",
                        "placeholder":"Enter Your Date of Assessment",
                        "className":"form-control",
                        "name":"part_1_plan_management_date_assessment",
                        "access":false,
                        "subtype":"text"
                        },
                        {
                        "type":"text",
                        "required":false,
                        "label":"Phone Number",
                        "placeholder":"Enter Your Phone Number",
                        "className":"form-control",
                        "name":"part_1_plan_managementphone_number",
                        "access":false,
                        "subtype":"text"
                        },
                        {
                        "type":"text",
                        "required":false,
                        "label":"NDIS Number",
                        "placeholder":"Enter Your NDIS Number",
                        "className":"form-control",
                        "name":"part_1_plan_managementndis_number",
                        "access":false,
                        "subtype":"text"
                        }
                        ]';
        $form_fields2 = '[
                            {
                            "type":"text",
                            "required":false,
                            "label":"Background",
                            "placeholder":"Enter Your Background",
                            "className":"form-control",
                            "name":"part_2_assesment_background",
                            "access":false,
                            "subtype":"text"
                            },
                            {
                            "type":"text",
                            "required":false,
                            "label":"Participant Goals",
                            "placeholder":"Enter Your Participant Goals",
                            "className":"form-control",
                            "name":"part_2_assesment_participantgoals",
                            "access":false,
                            "subtype":"text"
                            },
                            {
                            "type":"text",
                            "required":false,
                            "label":"Functional Assessment",
                            "placeholder":"Enter Functional Assessment",
                            "className":"form-control",
                            "name":"part_2_assesment_functional_assessment",
                            "access":false,
                            "subtype":"text"
                            },
                            {
                            "type":"text",
                            "required":false,
                            "label":"Bladder",
                            "placeholder":"Enter Bladder",
                            "className":"form-control",
                            "name":"part_2_assesment_bladder",
                            "access":false,
                            "subtype":"text"
                            },
                            {
                            "type":"text",
                            "required":false,
                            "label":"Bowel",
                            "placeholder":"Enter Bowel",
                            "className":"form-control",
                            "name":"part_2_assesment_bowel",
                            "access":false,
                            "subtype":"text"
                            },
                            {
                            "type":"text",
                            "required":false,
                            "label":"Consideration of health and other issues",
                            "placeholder":"Consideration of health and other issues",
                            "className":"form-control",
                            "name":"part_2_assesment_consideration_health",
                            "access":false,
                            "subtype":"text"
                            },
                            {
                            "type":"text",
                            "required":false,
                            "label":"Physiotherapist",
                            "placeholder":"Enter Physiotherapist",
                            "className":"form-control",
                            "name":"part_2_assesment_physiotherapist",
                            "access":false,
                            "subtype":"text"
                            },
                            {
                            "type":"text",
                            "required":false,
                            "label":"Dietician",
                            "placeholder":"Enter Dietician",
                            "className":"form-control",
                            "name":"part_2_assesment_dietician",
                            "access":false,
                            "subtype":"text"
                            },
                            {
                            "type":"text",
                            "required":false,
                            "label":"Occupational Therapist",
                            "placeholder":"Occupational Therapist",
                            "className":"form-control",
                            "name":"part_2_assesment_occupational_therapist",
                            "access":false,
                            "subtype":"text"
                            },
                            {
                            "type":"text",
                            "required":false,
                            "label":"Psychologist",
                            "placeholder":"Enter Psychologist",
                            "className":"form-control",
                            "name":"part_2_assesment_psychologist",
                            "access":false,
                            "subtype":"text"
                            },
                            {
                            "type":"text",
                            "required":false,
                            "label":"General Practitioner",
                            "placeholder":"Enter General Practitioner",
                            "className":"form-control",
                            "name":"part_2_assesment_general_practitioner",
                            "access":false,
                            "subtype":"text"
                            },
                            {
                            "type":"text",
                            "required":false,
                            "label":"Medical Specialist",
                            "placeholder":"Enter Medical Specialist",
                            "className":"form-control",
                            "name":"part_2_assesment_medical_specialist",
                            "access":false,
                            "subtype":"text"
                            },
                            {
                            "type":"text",
                            "required":false,
                            "label":"Other",
                            "placeholder":"Enter Other",
                            "className":"form-control",
                            "name":"part_2_assessment_other",
                            "access":false,
                            "subtype":"text"
                            }
                            ]';
        $form_fields3 = '[{"type":"text","required":false,"label":"Evaluation_optionTextField","placeholder":"Enter option","className":"form-control","name":"part_3_con_option_evaluation_option1","access":false,"subtype":"text"},{"type":"text","required":false,"label":"Evaluation_optionTextField","placeholder":"Enter option","className":"form-control","name":"part_3_con_option_evaluation_option2","access":false,"subtype":"text"},{"type":"text","required":false,"label":"Evaluation_optionTextField","placeholder":"Enter option","className":"form-control","name":"part_3_con_option_evaluation_option3","access":false,"subtype":"text"},{"type":"text","required":false,"label":"Evaluation_optionTextField","placeholder":"Enter option","className":"form-control","name":"part_3_con_option_evaluation_option4","access":false,"subtype":"text"},{"type":"text","required":false,"label":"Evaluation_optionTextField","placeholder":"Enter Potential Option","className":"form-control","name":"part_3_con_option_potential_option1","access":false,"subtype":"text"},{"type":"text","required":false,"label":"Evaluation_optionTextField","placeholder":"Enter Potential Option","className":"form-control","name":"part_3_con_option_potential_option2","access":false,"subtype":"text"},{"type":"text","required":false,"label":"Evaluation_optionTextField","placeholder":"Enter Potential Option","className":"form-control","name":"part_3_con_option_potential_option3","access":false,"subtype":"text"},{"type":"text","required":false,"label":"Evaluation_optionTextField","placeholder":"Enter Potential Option","className":"form-control","name":"part_3_con_option_potential_option4","access":false,"subtype":"text"},{"type":"text","required":false,"label":"Evaluation_optionTextField","placeholder":"Enter Trial Details","className":"form-control","name":"part_3_con_option_trial_option1","access":false,"subtype":"text"},{"type":"text","required":false,"label":"Evaluation_optionTextField","placeholder":"Enter Trial Details","className":"form-control","name":"part_3_con_option_trial_option2","access":false,"subtype":"text"},{"type":"text","required":false,"label":"Evaluation_optionTextField","placeholder":"Enter Trial Details","className":"form-control","name":"part_3_con_option_trial_option3","access":false,"subtype":"text"},{"type":"text","required":false,"label":"Evaluation_optionTextField","placeholder":"Enter Trial Details","className":"form-control","name":"part_3_con_option_trial_option4","access":false,"subtype":"text"},{"type":"text","required":false,"label":"Evaluation_optionTextField","placeholder":"Enter Advantages","className":"form-control","name":"part_3_con_option_advantage1","access":false,"subtype":"text"},{"type":"text","required":false,"label":"Evaluation_optionTextField","placeholder":"Enter Advantages","className":"form-control","name":"part_3_con_option_advantage2","access":false,"subtype":"text"},{"type":"text","required":false,"label":"Evaluation_optionTextField","placeholder":"Enter Advantages","className":"form-control","name":"part_3_con_option_advantage3","access":false,"subtype":"text"},{"type":"text","required":false,"label":"Evaluation_optionTextField","placeholder":"Enter Advantages","className":"form-control","name":"part_3_con_option_advantage4","access":false,"subtype":"text"},{"type":"text","required":false,"label":"Evaluation_optionTextField","placeholder":"Enter Disadvantage","className":"form-control","name":"part_3_con_option_disdvantage1","access":false,"subtype":"text"},{"type":"text","required":false,"label":"Evaluation_optionTextField","placeholder":"Enter Disadvantage","className":"form-control","name":"part_3_con_option_disdvantage2","access":false,"subtype":"text"},{"type":"text","required":false,"label":"Evaluation_optionTextField","placeholder":"Enter Disadvantage","className":"form-control","name":"part_3_con_option_disdvantage3","access":false,"subtype":"text"},{"type":"text","required":false,"label":"Evaluation_optionTextField","placeholder":"Enter Disadvantage","className":"form-control","name":"part_3_con_option_disdvantage4","access":false,"subtype":"text"},{"type":"text","required":false,"label":"Evaluation_optionTextField","placeholder":"Enter Estimated Time","className":"form-control","name":"part_3_con_option_estimatedTime1","access":false,"subtype":"text"},{"type":"text","required":false,"label":"Evaluation_optionTextField","placeholder":"Enter Estimated Time","className":"form-control","name":"part_3_con_option_estimatedTime2","access":false,"subtype":"text"},{"type":"text","required":false,"label":"Evaluation_optionTextField","placeholder":"Enter Estimated Time","className":"form-control","name":"part_3_con_option_estimatedTime3","access":false,"subtype":"text"},{"type":"text","required":false,"label":"Evaluation_optionTextField","placeholder":"Enter Estimated Time","className":"form-control","name":"part_3_con_option_estimatedTime4","access":false,"subtype":"text"}]';

        $form_fields4 = '[{"type":"textarea","required":false,"label":"Continence Recommendations","placeholder":"Enter Specific Evidence","className":"form-control","name":"part_4_con_recomm_specific_evidence","access":false,"subtype":"textarea"},{"type":"textarea","required":false,"label":"Continence Recommendations","placeholder":"Enter additional features, customisation or specification recommended","className":"form-control","name":"part_4_con_recomm_additional_feature","access":false,"subtype":"textarea"},{"type":"textarea","required":false,"label":"Item 1","placeholder":"Enter Item","className":"form-control","name":"part_4_con_recomm_item1","access":false,"subtype":"textarea"},{"type":"textarea","required":false,"label":"Item 2","placeholder":"Enter Item","className":"form-control","name":"part_4_con_recomm_item2","access":false,"subtype":"textarea"},{"type":"textarea","required":false,"label":"Item 3","placeholder":"Enter Item","className":"form-control","name":"part_4_con_recomm_item3","access":false,"subtype":"textarea"},{"type":"textarea","required":false,"label":"Quantity 1","placeholder":"Enter Quantity","className":"form-control","name":"part_4_con_recomm_quantity1","access":false,"subtype":"textarea"},{"type":"textarea","required":false,"label":"Quantity 2","placeholder":"Enter Quantity","className":"form-control","name":"part_4_con_recomm_quantity2","access":false,"subtype":"textarea"},{"type":"textarea","required":false,"label":"Quantity 3","placeholder":"Enter Quantity","className":"form-control","name":"part_4_con_recomm_quantity3","access":false,"subtype":"textarea"},{"type":"text","required":false,"label":"Frequency of Supply 1","placeholder":"Enter Frequency of Supply","className":"form-control","name":"part_4_con_recomm_frequency1","access":false,"subtype":"text"},{"type":"text","required":false,"label":"Frequency of Supply 2","placeholder":"Enter Frequency of Supply","className":"form-control","name":"part_4_con_recomm_frequency2","access":false,"subtype":"text"},{"type":"text","required":false,"label":"Frequency of Supply 3","placeholder":"Enter Frequency of Supply","className":"form-control","name":"part_4_con_recomm_frequency3","access":false,"subtype":"text"},{"type":"text","required":false,"label":"State / Specification 1","placeholder":"Enter State/Specification","className":"form-control","name":"part_4_con_recomm_StateSpecification1","access":false,"subtype":"text"},{"type":"text","required":false,"label":"State / Specification 2","placeholder":"Enter State/Specification","className":"form-control","name":"part_4_con_recomm_StateSpecification2","access":false,"subtype":"text"},{"type":"text","required":false,"label":"State / Specification 3","placeholder":"Enter State/Specification","className":"form-control","name":"part_4_con_recomm_StateSpecification3","access":false,"subtype":"text"},{"type":"text","required":false,"label":"Preferred supplier (Optional)","placeholder":"Enter your Preferred Supplier","className":"form-control","name":"part_4_con_recomm_preferred_supplier1","access":false,"subtype":"text"},{"type":"checkbox-group","required":false,"label":"Supplier Product Use Guidence","toggle":false,"inline":false,"name":"part_4_con_recomm_SPUG1","access":false,"other":false,"values":[{"label":"Option 1","value":"option-1","selected":true}]},{"type":"textarea","required":false,"label":"Information and Instructions","placeholder":"Enter Information and Instructions for Usage.","className":"form-control","name":"part_4_con_recomm_information_instructions_field","access":false,"subtype":"textarea"},{"type":"textarea","required":false,"label":"Urgent supply required?&nbsp;","placeholder":"Enter detail with YES/NO","className":"form-control","name":"part_4_con_recomm_urgentSupply","access":false,"subtype":"textarea"},{"type":"text","required":false,"label":"Scheme Specification (Optional)","placeholder":"Enter your scheme specification here.","className":"form-control","name":"part_4_con_recomm_schemeSpecification","access":false,"subtype":"text"},{"type":"text","required":false,"label":"Other supplier specification (Optional)","placeholder":"Enter your supplier specification","className":"form-control","name":"part_4_con_recomm_supplier_specification","access":false,"subtype":"text"},{"type":"radio-group","required":true,"label":"Participant Agreement","inline":false,"name":"part_4_con_recomm_participant_agreement","access":false,"other":false,"values":[{"label":"Yes","value":"","selected":true},{"label":"No","value":"option-2","selected":false},{"label":"Please provide details","value":"option-3","selected":false}]}]';

        $form_fields5 = '[{"type":"checkbox-group","required":false,"label":"Meet the NDIA expectation","toggle":false,"inline":false,"name":"part_5_declaration_NDIA_expectation","access":false,"other":false,"values":[{"label":"YES/NO","value":"option-1","selected":true}]},{"type":"checkbox-group","required":false,"label":"Providing appropriate evidence to the NDIA","toggle":false,"inline":false,"name":"part_5_declaration_appropriate_evidence","access":false,"other":false,"values":[{"label":"YES/NO","value":"option-1","selected":true}]},{"type":"checkbox-group","required":false,"label":"I understand all about the NDIA","toggle":false,"inline":false,"name":"part_5_declaration_NDIA_understanding","access":false,"other":false,"values":[{"label":"YES/NO","value":"option-1","selected":false}]},{"type":"checkbox-group","required":false,"label":"Accessing by the treating multi-disciplinary team","toggle":false,"inline":false,"name":"part_5_declaration_accessing_team","access":false,"other":false,"values":[{"label":"YES/NO","value":"option-1","selected":false}]},{"type":"text","required":false,"label":"Name","placeholder":"Enter Assessor’s  Name","className":"form-control","name":"part_5_assessors_name","access":false,"subtype":"text"},{"type":"text","required":false,"label":"NDIS Provider Registration Number","placeholder":"Enter Registration Number","className":"form-control","name":"part_5_registration_number","access":false,"subtype":"text"},{"type":"text","required":false,"label":"Phone Number","placeholder":"Enter Phone Number","className":"form-control","name":"part_5_assessorphone_number","access":false,"subtype":"text"},{"type":"text","subtype":"email","required":false,"label":"Email","placeholder":"Enter Email Address","className":"form-control","name":"part_5_email_address","access":false},{"type":"text","required":false,"label":"Qualification","placeholder":"Enter Qualification here.","className":"form-control","name":"part_5_qualification","access":false,"subtype":"text"},{"type":"date","required":false,"label":"Date of Assessment","placeholder":"Set Date of Assessment","className":"form-control","name":"part_5_date_assessment","access":false},{"type":"date","required":false,"label":"Date of Report","placeholder":"Set Date of Report","className":"form-control","name":"part_5_reportDate","access":false}]';

        $form_fields6 = '[{"type":"checkbox-group","required":false,"label":"Meet the NDIA expectation","toggle":false,"inline":false,"name":"part_5_declaration_NDIA_expectation","access":false,"other":false,"values":[{"label":"YES/NO","value":"option-1","selected":true}]},{"type":"checkbox-group","required":false,"label":"Providing appropriate evidence to the NDIA","toggle":false,"inline":false,"name":"part_5_declaration_appropriate_evidence","access":false,"other":false,"values":[{"label":"YES/NO","value":"option-1","selected":true}]},{"type":"checkbox-group","required":false,"label":"I understand all about the NDIA","toggle":false,"inline":false,"name":"part_5_declaration_NDIA_understanding","access":false,"other":false,"values":[{"label":"YES/NO","value":"option-1","selected":false}]},{"type":"checkbox-group","required":false,"label":"Accessing by the treating multi-disciplinary team","toggle":false,"inline":false,"name":"part_5_declaration_accessing_team","access":false,"other":false,"values":[{"label":"YES/NO","value":"option-1","selected":false}]},{"type":"text","required":false,"label":"Name","placeholder":"Enter Assessor’s  Name","className":"form-control","name":"part_5_assessors_name","access":false,"subtype":"text"},{"type":"text","required":false,"label":"NDIS Provider Registration Number","placeholder":"Enter Registration Number","className":"form-control","name":"part_5_registration_number","access":false,"subtype":"text"},{"type":"text","required":false,"label":"Phone Number","placeholder":"Enter Phone Number","className":"form-control","name":"part_5_assessorphone_number","access":false,"subtype":"text"},{"type":"text","subtype":"email","required":false,"label":"Email","placeholder":"Enter Email Address","className":"form-control","name":"part_5_email_address","access":false},{"type":"text","required":false,"label":"Qualification","placeholder":"Enter Qualification here.","className":"form-control","name":"part_5_qualification","access":false,"subtype":"text"},{"type":"date","required":false,"label":"Date of Assessment","placeholder":"Set Date of Assessment","className":"form-control","name":"part_5_date_assessment","access":false},{"type":"date","required":false,"label":"Date of Report","placeholder":"Set Date of Report","className":"form-control","name":"part_5_reportDate","access":false}]';

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
  /*      FormField::create([
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
        ]);*/

    }
}
