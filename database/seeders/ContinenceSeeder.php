<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\{Form, FormField, FormHeading};

class ContinenceSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $section1 = "<table style='background-color:#6a2c75; border:none; width:100%; margin-top:20px'>
        <tr>
            <td>
                <p style='font-size:14pt; font-weight:bold; margin-top:8px; margin-bottom:8px; color: white'>  PART 1 – Participant and Plan Management Details</p>
            </td>
        </tr>
    </table>
    <p style='font-weight: bold; margin-bottom: 10px; margin-top: 10px; font-size: 12pt'>1.1	NDIS Participant Details </p>
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
              <td style='border: 1px solid lightslategray; padding: 10px; width: 40%; background-color: lightgrey; font-size: 15px'><p style='margin-top:8px; margin-bottom:8px; margin-left:8px'>Name</p></td>
              <td style='border: 1px solid lightslategray; padding: 10px'>
                <p style='margin-top:8px; margin-bottom:8px; margin-left:8px'>{{part_1_ndis_name}}</p>
              </td>
            </tr>
            <tr>
              <td style='border: 1px solid lightslategray; padding: 10px; width: 40%;background-color: lightgrey; font-size: 15px'><p style='margin-top:8px; margin-bottom:8px; margin-left:8px'>Date of Birth</p></td>
              <td style='border: 1px solid lightslategray; padding: 10px'>
                <p style='margin-top:8px; margin-bottom:8px; margin-left:8px'>{{part_1_ndis_date_of_birth}}</p>
              </td>
            </tr>
            <tr>
              <td style='border: 1px solid lightslategray; padding: 10px; width: 40%; background-color: lightgrey; font-size: 15px'><p style='margin-top:8px; margin-bottom:8px; margin-left:8px'>Age</p></td>
              <td style='border: 1px solid lightslategray; padding: 10px'>
                <p style='margin-top:8px; margin-bottom:8px; margin-left:8px'>{{part_1_ndis_age}}</p>
              </td>
            </tr>
            <tr>
              <td style='border: 1px solid lightslategray; padding: 10px; width: 40%;background-color: lightgrey; font-size: 15px'><p style='margin-top:8px; margin-bottom:8px; margin-left:8px'>NDIS Number</p></td>
              <td style='border: 1px solid lightslategray; padding: 10px'>
                <p style='margin-top:8px; margin-bottom:8px; margin-left:8px'>{{part_1_ndis_participantndis_number}}</p>
              </td>
            </tr>
            <tr>
              <td style='border: 1px solid lightslategray; padding: 10px; width: 40%;background-color: lightgrey; font-size: 15px'><p style='margin-top:8px; margin-bottom:8px; margin-left:8px'>Address</p></td>
              <td style='border: 1px solid lightslategray; padding: 10px'>
                <p style='margin-top:8px; margin-bottom:8px; margin-left:8px'>{{part_1_ndis_participant_address}}</p>
              </td>
            </tr>
            <tr>
              <td style='border: 1px solid lightslategray; padding: 10px; width: 40%;background-color: lightgrey; font-size: 15px'><p style='margin-top:8px; margin-bottom:8px; margin-left:8px'>Contact Telephone Number</p></td>
              <td style='border: 1px solid lightslategray; padding: 10px'>
                <p style='margin-top:8px; margin-bottom:8px; margin-left:8px'>{{part_1_ndis_participantphone_number}}</p>
              </td>
            </tr>
            <tr>
              <td style='border: 1px solid lightslategray; padding: 10px; width: 40%;background-color: lightgrey; font-size: 15px'><p style='margin-top:8px; margin-bottom:8px; margin-left:8px'>Email</p></td>
              <td style='border: 1px solid lightslategray; padding: 10px'>
                <p style='margin-top:8px; margin-bottom:8px; margin-left:8px'>{{part_1_ndis_participant_email}}</p>
              </td>
            </tr>
            <tr>
              <td style='border: 1px solid lightslategray; padding: 10px; width: 40%;background-color: lightgrey; font-size: 15px'><p style='margin-top:8px; margin-bottom:8px; margin-left:8px'>Preferred Contact Method</p> </td>
              <td style='border: 1px solid lightslategray; padding: 10px'>
                <p style='margin-top:8px; margin-bottom:8px; margin-left:8px'>{{part_1_ndis_participant_preferredcontact}}</p>
              </td>
            </tr>
            <tr>
              <td style='border: 1px solid lightslategray; padding: 10px; width: 40%;background-color: lightgrey; font-size: 15px'><p style='margin-top:8px; margin-bottom:8px; margin-left:8px'>Nominee or Guardian Name</p></td>
              <td style='border: 1px solid lightslategray; padding: 10px'>
                <p style='margin-top:8px; margin-bottom:8px; margin-left:8px'>{{part_1_ndis_participantguardian_name}}</p>
              </td>
            </tr>
            <tr>
              <td style='border: 1px solid lightslategray; padding: 10px; width: 40%;background-color: lightgrey; font-size: 15px'><p style='margin-top:8px; margin-bottom:8px; margin-left:8px'>Nominee or Guardian Phone</p></td>
              <td style='border: 1px solid lightslategray; padding: 10px'>
                <p style='margin-top:8px; margin-bottom:8px; margin-left:8px'>{{part_1_ndis_participantguardian_phone}}</p>
              </td>
            </tr>
            <tr>
              <td style='border: 1px solid lightslategray; padding: 10px; width: 40%;background-color: lightgrey; font-size: 15px'><p style='margin-top:8px; margin-bottom:8px; margin-left:8px'>NDIS Support Coordinator</p></td>
              <td style='border: 1px solid lightslategray; padding: 10px'>
                <p style='margin-top:8px; margin-bottom:8px; margin-left:8px'>{{part_1_ndis_support_coordinator}}</p>
              </td>
            </tr>
            <tr>
              <td style='border: 1px solid lightslategray; padding: 10px; width: 40%;background-color: lightgrey; font-size: 15px'><p style='margin-top:8px; margin-bottom:8px; margin-left:8px'>Contact Details</p></td>
              <td style='border: 1px solid lightslategray; padding: 10px'>
                <p style='margin-top:8px; margin-bottom:8px; margin-left:8px'>{{part_1_ndis_participantcontact_details}}</p>
              </td>
            </tr>
            
          </tbody>
    </table>
    <p style='font-weight: bold; margin-bottom: 10px; margin-top: 10px; font-size: 12pt'>1.2	Plan Management Details</p>
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
              <td style='border: 1px solid lightslategray; padding: 10px; width: 40%; background-color: lightgrey; font-size: 15px'><p style='margin-top:8px; margin-bottom:8px; margin-left:8px'>Agency Managed</p></td>
              <td style='border: 1px solid lightslategray; padding: 10px'>
                <p style='margin-top:8px; margin-bottom:8px; margin-left:8px'>{{part_1_agency_managed}}</p>
              </td>
            </tr>
            <tr>
              <td style='border: 1px solid lightslategray; padding: 10px; width: 40%; background-color: lightgrey; font-size: 15px'><p style='margin-top:8px; margin-bottom:8px; margin-left:8px'>Self-Managed</p></td>
              <td style='border: 1px solid lightslategray; padding: 10px'>
                <p style='margin-top:8px; margin-bottom:8px; margin-left:8px'>{{part_1_self_managed}}</p>
              </td>
            </tr>
            <tr>
              <td style='border: 1px solid lightslategray; padding: 10px; width: 40%; background-color: lightgrey; font-size: 15px'><p style='margin-top:8px; margin-bottom:8px; margin-left:8px'>Registered Plan Management Provider</p></td>
              <td style='border: 1px solid lightslategray; padding: 10px'>
                <p style='margin-top:8px; margin-bottom:8px; margin-left:8px'>{{part_1_registered_plan_management_provier}}</p>
              </td>
            </tr>
            <tr>
              <td style='border: 1px solid lightslategray; padding: 10px; width: 40%; background-color: lightgrey; font-size: 15px'><p style='margin-top:8px; margin-bottom:8px; margin-left:8px'>Contact Details</p> </td>
              <td style='border: 1px solid lightslategray; padding: 10px'>
                <p style='margin-top:8px; margin-bottom:8px; margin-left:8px'>{{part_1_plan_managementcontact_details}}</p>
              </td>
            </tr>
          </tbody>
    </table>
    <p></p>";




    $section2 = "<table style='background-color:#6a2c75; border:none; width:100%; margin-top:20px'>
        <tr>
            <td>
                <p style='font-size:14pt; font-weight:bold; margin-top:8px; margin-bottom:8px; color: white'>  PART 2 – Assessment</p>
            </td>
        </tr>
    </table>
    <p style='font-weight:bold; font-size:12pt;margin-top:10px; margin-bottom:10px;'>2.1 Background</p>
    <p style='font-size:11pt; margin-bottom: 10px'>General: Describe participants current status which may include diagnosis, prognosis, co-existing conditions, disability, personal and instrumental activities of daily living, formal and informal support arrangements and life transitions. Consider health issues and other related aspects that may influence the need for continence support. </p>
    <table style='width:100%; border: 1px solid black'>
        <tr>
            <td style='width: 100%; border: 1px solid black;'><p style='margin-top:10px; margin-bottom:10px;'>{{part_2_assesment_background}}</p></td>
        </tr>
    </table>
    <p style='font-weight:bold; font-size:12pt;margin-top:10px; margin-bottom:10px;'>2.2 Participant Goals</p>
    <p style='font-size:11pt; margin-bottom: 10px;'>If the participants NDIS plan has been made available, you can refer to the statement of participant’s goals and outline those relevant to the AT solution.</p>
    <table style='width:100%; border: 1px solid black'>
        <tr>
            <td style='width: 100%; border: 1px solid black;'><p style='margin-top:10px; margin-bottom:10px;'>{{part_2_assesment_participantgoals}}</p></td>
        </tr>
    </table>
    <p style='font-weight:bold; font-size:12pt; margin-top:10px; margin-bottom:10px;'>2.3 Functional Assessment</p>
    <p style='font-size:12pt; margin-bottom: 10px'>Note current level of function related to disability and impact on life roles: skin integrity issues; rapidly changing condition – including cognitive issues; dexterity and mobility issues. Consider the need for a support person to assist with the use of continence products. Does the participant currently need assistance to use their continence items? What assistance do they currently get? Will your recommendations result in a change in personal care needs? What assistance will the participant need?</p>
    <p style='font-size:12pt; margin-bottom: 10px'>NDIS expects relevant assessments are conducted where required and records held by AT assessor for NDIS audit purposes.</p>
    <table style='width:100%; border: 1px solid black'>
        <tr>
            <td style='width: 100%; border: 1px solid black;'><p style='margin-top:10px; margin-bottom:10px;'>{{part_2_assesment_functional_assessment}}</p></td>
        </tr>
    </table>
    <p style='font-size:12pt; margin-top:10px; margin-bottom: 10px'>Indicate Type of Loss</p>
    <table style='width:100%; border: 1px solid black'>
        <tr>
            <td style='background: #efefef; width: 30%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'> Bladder</p></td>
            <td><p style='margin-top:10px; margin-bottom:10px;'> 
            
            {{part_2_assesment_bladder}}

            </p>
            </td>
        </tr>
        <tr>
            <td style='background: #efefef; width: 30%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'> Bowel</p></td>
            <td style='width: 80%'><p style='margin-top:10px; margin-bottom:10px;'> 
            
            {{part_2_assesment_bowel}}

            </p>
            </td>
        </tr>
    </table>

    <p style='font-weight:bold; font-size:12pt;margin-top:10px; margin-bottom:10px;'>2.4 Current Continence Product in Use</p>
    <table style='width:100%; border: 1px solid black; font-size:11pt;'>
        <tr>
            <th style='width: 30%; border: 1px solid black; text-align:center'><p style='margin-top:10px; margin-bottom:10px;'> Type of Continence Product</p></th>
            <th style='width: 20%; border: 1px solid black; text-align:center'><p style='margin-top:10px; margin-bottom:10px;'> Usage</p></th>
            <th style='width: 30%; border: 1px solid black; text-align:center'><p style='margin-top:10px; margin-bottom:10px;'> Participant's Report of Suitability</p></th>
            <th style='width: 20%; border: 1px solid black; text-align:center'><p style='margin-top:10px; margin-bottom:10px;'> Does it need reassessment? Yes/No</p></th>
        </tr>
        <tr>
            <td style='width: 30%; border: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>{{part_2_type_of_continence_product}}</p></td>
            <td style='width: 30%; border: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>{{part_2_assesment_usage}}</p></td>
            <td style='width: 30%; border: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>{{part_2_participants_report_of_suitability}}</p></td>
            <td style='width: 30%; border: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>{{part_2_does_it_need_reassessment}}</p></td>
        </tr>
        <tr>
            <td style='width: 30%; border: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>{{part_2_type_of_continence_2product}}</p></td>
            <td style='width: 30%; border: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>{{part_2_assesment_2usage}}</p></td>
            <td style='width: 30%; border: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>{{part_2_participants_report_of_2suitability}}</p></td>
            <td style='width: 30%; border: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>{{part_2_does_it_need_2reassessment}}</p></td>
        </tr>
    </table>
    <p style='font-weight:bold; font-size:12pt;margin-top:10px; margin-bottom:10px;'>2.5 Consideration of health and other issues</p>
    <p style='font-size:11pt; margin-bottom: 10px'>2.5.1 Summarise recommendations from allied health and/or medical assessments.</p>
    <table style='width:100%; border: 1px solid black; font-size:12pt;'>
        <tr>
            <td style='width: 100%; border: 1px solid black;'><p style='margin-top:10px; margin-bottom:10px;'>{{part_2_summarise_recommendations_from_allied_health_medical_assessments}}</p></td>
        </tr>
    </table>
    <table style='width:100%; border: 1px solid black; font-size:12pt;'>
        <tr>
            <td style='width: 90%; border: 1px solid black; backgound-color: lightgray'><p> 2.5.2 Are further health, medical assessments, AT solutions and/or advice required from any of the following health or allied health professionals? Yes/No</p></td>
            <td style='width: 10%; border: 1px solid black;'><p style='margin-top:10px; margin-bottom:10px;'>  
            
            </p>
            </td>
        </tr>
    </table>
    <p style='font-size:12pt; margin-top:10px; margin-bottom: 10px'>Indicate relevant health professional</p>
    <table style='width:100%; border: 1px solid black; font-size:12pt;'>
        <tr>
            <th style='width: 40%; border: 1px solid black; text-align:start; font-weight:bold; background-color: lightgrey;'><p style='margin-top:10px; margin-bottom:10px;'> Physiotherapist</p></th>
            <th style='width: 60%; border: 1px solid black;'><p style='margin-top:10px; margin-bottom:10px;'>{{part_2_assesment_physiotherapist}}</p></th>
        </tr>
        <tr>
            <th style='width: 40%; border: 1px solid black; text-align:start; font-weight:bold; background-color: lightgrey;'><p style='margin-top:10px; margin-bottom:10px;'> Dietician</p></th>
            <th style='width: 60%; border: 1px solid black;'><p style='margin-top:10px; margin-bottom:10px;'>{{part_2_assesment_dietician}}</p></th>
        </tr>
        <tr>
            <th style='width: 40%; border: 1px solid black; text-align:start; font-weight:bold; background-color: lightgrey;'><p style='margin-top:10px; margin-bottom:10px;'> Occupational Therapist</p></th>
            <th style='width: 60%; border: 1px solid black;'><p style='margin-top:10px; margin-bottom:10px;'>{{part_2_assesment_occupational_therapist}}</p></th>
        </tr>
        <tr>
            <th style='width: 40%; border: 1px solid black; text-align:start; font-weight:bold; background-color: lightgrey;'><p style='margin-top:10px; margin-bottom:10px;'> Psychologist</p></th>
            <th style='width: 60%; border: 1px solid black;'><p style='margin-top:10px; margin-bottom:10px;'>{{part_2_assesment_psychologist}}</p></th>
        </tr>
        <tr>
            <th style='width: 40%; border: 1px solid black; text-align:start; font-weight:bold; background-color: lightgrey;'><p style='margin-top:10px; margin-bottom:10px;'> General Practitioner</p></th>
            <th style='width: 60%; border: 1px solid black;'><p style='margin-top:10px; margin-bottom:10px;'>{{part_2_assesment_general_practitioner}}</p></th>
        </tr>
        <tr>
            <th style='width: 40%; border: 1px solid black; text-align:start; font-weight:bold; background-color: lightgrey;'><p style='margin-top:10px; margin-bottom:10px;'> Medical Specialist</p></th>
            <th style='width: 60%; border: 1px solid black;'><p style='margin-top:10px; margin-bottom:10px;'>{{part_2_assesment_medical_specialist}}</p></th>
        </tr>
        <tr>
            <th style='width: 40%; border: 1px solid black; text-align:start; font-weight:bold; background-color: lightgrey;'><p style='margin-top:10px; margin-bottom:10px;'> Other</p></th>
            <th style='width: 60%; border: 1px solid black;'><p style='margin-top:10px; margin-bottom:10px;'>{{part_2_assessment_other}}</p></th>
        </tr>
    </table>

    <p style='font-size:12pt; margin-top: 10px; margin-bottom: 10px'>If yes, please provide the following information</p>
    <ul style='font-size:12pt;'>
        <li><p style='margin-top:10px; margin-bottom:10px;'>Has the participant agreed to seek this assessment and/or advice?</p></li>
        <li><p style='margin-top:10px; margin-bottom:10px;'>Is the participant aware that the NDIS cannot fund mainstream medical and health services?</p></li>
        <li><p style='margin-top:10px; margin-bottom:10px;'>Describe the additional continence product/training needs identified by participant/Continence Assessor?</p></li>
        <li><p style='margin-top:10px; margin-bottom:10px;'>Are other AT solutions or environmental adaptations/home modifications such as toileting AT or bathroom modifications required ?</p></li>
        <li><p style='margin-top:10px; margin-bottom:10px;'>Does the participant demonstrate behaviours of concern and have a behaviour support plan for restrictive practice?</p></li>
        <li><p style='margin-top:10px; margin-bottom:10px;'>How might the outcome of this advice change the recommended NDIS continence supports to pursue the participant’s goals?</p></li>
    </ul>
    <table
          style='
            border-collapse: collapse;
            width: 100%;
            margin-bottom: 10px;
            border: 1px solid lightslategray;
          '
        >
          <tbody>
            <tr>
              <td style='border: 1px solid lightslategray; padding: 10px; width: 100%; background-color: lightgrey; font-size: 17px'><p style='margin-top:10px; margin-bottom:10px;'>{{part_2_additional_information}}</p></td>
            </tr>
          </tbody>
    </table>
    <p></p>";



    $section3 = "<table style='background-color:#6a2c75; border:none; width:100%; margin-top:20px'>
    <tr>
        <td>
            <p style='font-size:14pt; font-weight:bold; margin-top:8px; margin-bottom:8px; color: white'>PART 3 - Exploration of Continence Interventions and Options</p>
        </td>
    </tr>
</table>
<p style='font-weight: bold; margin-bottom: 10px; margin-top: 10px'>3.1  Evaluation of options</p>
<p style='margin-bottom: 10px'>Thorough list of alternatives including use of other supports and approaches. Where trials have been conducted please give details of where the trials took place and for how long.</p>
<p style='margin-bottom: 10px'>NOTE training in device use is included and expected to be accomplished within 2 hours. Provide rationale and hours required if more extensive or specific training is indicated</p>
<table
      style='
        border-collapse: collapse;
        width: 100%;
        margin: auto;
        border: 1px solid lightslategray;
      '
    >
    <thead>
        <tr>
            <th style='border: 1px solid lightslategray; background-color: lightgrey; font-size: 15px'>Option</th>
            <th style='border: 1px solid lightslategray;  background-color: lightgrey; font-size: 15px'>Describe potential options trialled in relation to goal attainment</th>
            <th style='border: 1px solid lightslategray;  background-color: lightgrey; font-size: 15px'>Trialled (T) or Considered (C)? Include trial details (timing, location)</th>
            <th style='border: 1px solid lightslategray;  background-color: lightgrey; font-size: 15px'>Advantages</th>
            <th style='border: 1px solid lightslategray;  background-color: lightgrey; font-size: 15px'>Disadvantages</th>
            <th style='border: 1px solid lightslategray;  background-color: lightgrey; font-size: 15px'>Estimated hours for training and review</th>

        </tr>
    </thead>
      <tbody>
        <tr>
          <td style='border: 1px solid lightslategray; padding: 10px'>
            {{part_3_con_option_evaluation_option1}}
          </td>
          <td style='border: 1px solid lightslategray; padding: 10px'>
            {{part_3_con_option_potential_option1}}
          </td>
          <td style='border: 1px solid lightslategray; padding: 10px'>
            {{part_3_con_option_trial_option1}}
          </td>
          <td style='border: 1px solid lightslategray; padding: 10px'>
            {{part_3_con_option_advantage1}}
          </td>
          <td style='border: 1px solid lightslategray; padding: 10px'>
            {{part_3_con_option_disdvantage1}}
          </td>
          <td style='border: 1px solid lightslategray; padding: 10px'>
            {{part_3_con_option_estimatedTime1}}
          </td>
        </tr>

        <tr>
          <td style='border: 1px solid lightslategray; padding: 10px'>
          {{part_3_con_option_evaluation_option2}}
          </td>
          <td style='border: 1px solid lightslategray; padding: 10px'>
          {{part_3_con_option_potential_option2}}
          </td>
          <td style='border: 1px solid lightslategray; padding: 10px'>
          {{part_3_con_option_trial_option2}}
          </td>
          <td style='border: 1px solid lightslategray; padding: 10px'>
            {{part_3_con_option_advantage2}}
          </td>
          <td style='border: 1px solid lightslategray; padding: 10px'>
            {{part_3_con_option_disdvantage2}}
          </td>
          <td style='border: 1px solid lightslategray; padding: 10px'>
          {{part_3_con_option_estimatedTime2}}
          </td>
        </tr>


        <tr>
          <td style='border: 1px solid lightslategray; padding: 10px'>
          {{part_3_con_option_evaluation_option3}}
          </td>
          <td style='border: 1px solid lightslategray; padding: 10px'>
          {{part_3_con_option_potential_option3}}
          </td>
          <td style='border: 1px solid lightslategray; padding: 10px'>
          {{part_3_con_option_trial_option3}}
          </td>
          <td style='border: 1px solid lightslategray; padding: 10px'>
            {{part_3_con_option_advantage3}}
          </td>
          <td style='border: 1px solid lightslategray; padding: 10px'>
          {{part_3_con_option_disdvantage3}}
          </td>
          <td style='border: 1px solid lightslategray; padding: 10px'>
          {{part_3_con_option_estimatedTime3}}
          </td>
        </tr>


        <tr>
          <td style='border: 1px solid lightslategray; padding: 10px'>
          {{part_3_con_option_evaluation_option4}}
          </td>
          <td style='border: 1px solid lightslategray; padding: 10px'>
          {{part_3_con_option_potential_option4}}
          </td>
          <td style='border: 1px solid lightslategray; padding: 10px'>
          {{part_3_con_option_trial_option4}}
          </td>
          <td style='border: 1px solid lightslategray; padding: 10px'>
            {{part_3_con_option_advantage4}}
          </td>
          <td style='border: 1px solid lightslategray; padding: 10px'>
          {{part_3_con_option_disdvantage4}}
          </td>
          <td style='border: 1px solid lightslategray; padding: 10px'>
          {{part_3_con_option_estimatedTime4}}
          </td>
        </tr>

      </tbody>
</table>
<p></p>";




    $section4 = "<table style='background-color:#6a2c75; border:none; width:100%; margin-top:20px'>
            <tr>
                <td>
                    <p style='font-size:14pt; font-weight:bold; margin-top:8px; margin-bottom:8px; color: white'>  PART 4 – Continence Recommendations</p>
                </td>
            </tr>
        </table>
        <p style='margin-bottom: 10px; margin-top: 10px'><span style='font-weight: bold'>4.1</span>	Provide specific evidence that the supports/products described will enable the participant to pursue their identified goals and be of long-term benefit considering both current and future needs.</p>
        <table
              style='
                border-collapse: collapse;
                width: 100%;
                margin-bottom: 10px;
                border: 1px solid lightslategray;
              '
            >
              <tbody>
                <tr>
                  <td style='border: 1px solid lightslategray; padding: 10px; width: 100%; background-color: lightgrey; font-size: 17px'>{{part_4_con_recomm_specific_evidence}}</td>
                </tr>
              </tbody>
        </table>
        <p style='margin-bottom: 10px; margin-top: 10px'><span style='font-weight: bold'>4.2</span>	Are there additional features, customisation or specification recommended that is considered to be above the minimum or standard level for this support? Please provide the specific evidence or clinical justification for these.</p>
        <table
              style='
                border-collapse: collapse;
                width: 100%;
                margin-bottom: 10px;
                border: 1px solid lightslategray;
              '
            >
              <tbody>
                <tr>
                  <td style='border: 1px solid lightslategray; padding: 10px; width: 100%; background-color: lightgrey; font-size: 17px'>{{part_4_con_recomm_additional_feature}}</td>
                </tr>
              </tbody>
        </table>
        <p style='margin-bottom: 10px; margin-top: 10px'><span style='font-weight: bold'>4.3</span>	Description of continence products and/or AT solution. Detail all necessary components required to meet participant’s goal. This must be detailed enough to ensure that the item can be accurately supplied (attach completed supplier(s) specification/quotes as required).</p>
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
                  <td style='border: 1px solid lightslategray; padding: 10px; width: 40%; background-color: lightgrey; font-size: 15px'>Item</td>
                  <td style='border: 1px solid lightslategray; padding: 10px; width: 40%; background-color: lightgrey; font-size: 15px'>Quantity</td>
                  <td style='border: 1px solid lightslategray; padding: 10px; width: 40%; background-color: lightgrey; font-size: 15px'>Frequency of supply required. (not usually more frequent than quarterly)</td>
                  <td style='border: 1px solid lightslategray; padding: 10px; width: 40%; background-color: lightgrey; font-size: 15px'>State/territory specification/item ID</td>
                </tr>

                <tr>
                  <td style='border: 1px solid lightslategray'>
                    {{part_4_con_recomm_item1}}
                  </td>
                  <td style='border: 1px solid lightslategray'>
                    {{part_4_con_recomm_quantity1}}
                  </td>
                  <td style='border: 1px solid lightslategray'>
                    {{part_4_con_recomm_frequency1}}
                  </td>
                  <td style='border: 1px solid lightslategray'>
                    {{part_4_con_recomm_StateSpecification1}}
                  </td>
                </tr>


                <tr>
                  <td style='border: 1px solid lightslategray; padding: 10px'>
                  {{part_4_con_recomm_item2}}
                  </td>
                  <td style='border: 1px solid lightslategray; padding: 10px'>
                  {{part_4_con_recomm_quantity2}}
                  </td>
                  <td style='border: 1px solid lightslategray; padding: 10px'>
                  {{part_4_con_recomm_frequency2}}
                  </td>
                  <td style='border: 1px solid lightslategray; padding: 10px'>
                  {{part_4_con_recomm_StateSpecification2}}
                  </td>
                </tr>


                <tr>
                  <td style='border: 1px solid lightslategray; padding: 10px'>
                  {{part_4_con_recomm_item3}}
                  </td>
                  <td style='border: 1px solid lightslategray; padding: 10px'>
                  {{part_4_con_recomm_quantity3}}
                  </td>
                  <td style='border: 1px solid lightslategray; padding: 10px'>
                  {{part_4_con_recomm_frequency3}}
                  </td>
                  <td style='border: 1px solid lightslategray; padding: 10px'>
                  {{part_4_con_recomm_StateSpecification3}}
                  </td>
                </tr>


              </tbody>
        </table>
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
                  <td style='border: 1px solid lightslategray; padding: 10px; width: 60%; background-color: lightgrey; font-size: 15px'>Participant’s preferred supplier (optional):</td>
                  <td style='border: 1px solid lightslategray; padding: 10px; font-size: 15px'>{{part_4_con_recomm_preferred_supplier1}}</td>
                  </tr>
                  <tr>
                  <td style='border: 1px solid lightslategray; padding: 10px; width: 60%; background-color: lightgrey; font-size: 15px'>Is recommendation in line with supplier product use guidance? Yes/No</td>
                  <td style='border: 1px solid lightslategray; padding: 10px; font-size: 15px'>
                  {{part_4_con_recomm_SPUG1}}
                  </td>
                </tr>
              </tbody>
        </table>


        <p style='margin-bottom: 10px; margin-top: 10px'><span style='font-weight: bold'>4.4</span>The participant is to be provided with product information and instructions for use including any precautions. Specify who is to do this and when.</p>
        <table
              style='
                border-collapse: collapse;
                width: 100%;
                margin-bottom: 10px;
                border: 1px solid lightslategray;
              '
            >
              <tbody>
                <tr>
                  <td style='border: 1px solid lightslategray; padding: 10px; width: 100%; background-color: lightgrey; font-size: 17px'>{{part_4_con_recomm_information_instructions_field}}</td>
                </tr>
              </tbody>
        </table>



        <p style='margin-bottom: 10px; margin-top: 10px'><span style='font-weight: bold'>4.5</span> Is urgent supply required?	 Yes/No Details</p>
        <table
              style='
                border-collapse: collapse;
                width: 100%;
                margin-bottom: 10px;
                border: 1px solid lightslategray;
              '
            >
              <tbody>
                <tr>
                  <td style='border: 1px solid lightslategray; padding: 10px; width: 100%; background-color: lightgrey; font-size: 17px'>{{part_4_con_recomm_urgentSupply}}</td>
                </tr>
              </tbody>
        </table>


        <p style='margin-bottom: 10px; margin-top: 10px'><span style='font-weight: bold'>4.6</span> Continence product order detail is attached (as advised by supplier(s))</p>
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
                  <td style='border: 1px solid lightslategray; padding: 10px; width: 60%; background-color: lightgrey; font-size: 15px'>State/Territory Scheme specification (optional)</td>
                  <td style='border: 1px solid lightslategray; padding: 10px; font-size: 15px'>{{part_4_con_recomm_scheme_specification}}</td>
                </tr>
                <tr>
                  <td style='border: 1px solid lightslategray; padding: 10px; width: 60%; background-color: lightgrey; font-size: 15px'>Other supplier’s specification (optional)</td>
                  <td style='border: 1px solid lightslategray; padding: 10px; font-size: 15px'>
                  {{part_4_con_recomm_supplier_specification}}
                  </td>
                </tr>
              </tbody>
        </table>
        <table
              style='
                border-collapse: collapse;
                width: 100%;
                margin-bottom: 10px;
                border: 1px solid lightslategray;
              '
            >
              <tbody>
                <tr>
                  <td style='border: 1px solid lightslategray; padding: 10px; width: 100%; background-color: lightgrey; font-size: 17px'>{{part_4_con_recomm_supplier_specification}}</td>
                </tr>
              </tbody>
        </table>

        <p style='margin-bottom: 10px; margin-top: 10px'><span style='font-weight: bold'>4.7</span> Participant Agreement</p>
        <p style='margin-bottom: 10px'>Does the participant agree with the recommended continence assessment and products? (Are the assessor’s clinical recommendations and participant preference the same?)</p>
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
                  <td style='border: 1px solid lightslategray; padding: 10px; width: 40%; background-color: lightgrey; font-size: 17px'>Yes</td>
                  <td style='border: 1px solid lightslategray; padding: 10px'>
                    {{part_4_con_recomm_participant_agreement}}
                  </td>
                </tr>
                <tr>
                  <td style='border: 1px solid lightslategray; padding: 10px; width: 40%;background-color: lightgrey; font-size: 17px'>No</td>
                  <td style='border: 1px solid lightslategray; padding: 10px'>
                    {{part_4_con_recomm_participant_agreement}}
                  </td>
                </tr>
                <tr>
                  <td style='border: 1px solid lightslategray; padding: 10px; width: 40%; background-color: lightgrey; font-size: 17px'>Please provide detail</td>
                  <td style='border: 1px solid lightslategray; padding: 10px'>
                    {{part_4_detail_about_Participant_Agreement}}
                  </td>
                </tr>
              </tbody>
        </table>
        <p></p>";


    $section5 = "<table style='background-color:#6a2c75; border:none; width:100%; margin-top:20px'>
        <tr>
            <td>
                <p style='font-size:14pt; font-weight:bold; margin-top:8px; margin-bottom:8px; color: white'>  PART 5 – Details of Assistive Technology Assessor</p>
            </td>
        </tr>
    </table>
    <p style='margin-bottom: 10px; margin-top: 10px'><span style='font-weight: bold'>DECLARATION </span> (indicate all relevant sections that apply)</p>
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
              <td style='border: 1px solid lightslategray; padding: 10px; width: 80%; background-color: lightgrey; font-size: 17px'>I certify that I meet the NDIA expectations of AT assessor provider suitability (including understanding of the current NDIS Act, Rules and Operational Guidelines) to assess the type of assistive technology and associated supports, at the level of complexity required by this participant.</td>
              <td style='border: 1px solid lightslategray; padding: 10px'>
                {{part_5_declaration_NDIA_expectation}}
              </td>
            </tr>
            <tr>
              <td style='border: 1px solid lightslategray; padding: 10px; width: 80%;background-color: lightgrey; font-size: 17px'>I will provide appropriate evidence to the NDIA and/or Quality and Safe Guards Commission if and as requested.</td>
              <td style='border: 1px solid lightslategray; padding: 10px'>
                {{part_5_declaration_appropriate_evidence}}
              </td>
            </tr>
            <tr>
              <td style='border: 1px solid lightslategray; padding: 10px; width: 80%; background-color: lightgrey; font-size: 17px'>I understand and acknowledge that the NDIA and participant will rely on my professional advice to select, source and implement this assistive technology.</td>
              <td style='border: 1px solid lightslategray; padding: 10px'>
                {{part_5_declaration_NDIA_understanding}}
              </td>
            </tr>
            <tr>
              <td style='border: 1px solid lightslategray; padding: 10px; width: 80%; background-color: lightgrey; font-size: 17px'>This assistive technology has been assessed by the treating multi-disciplinary team and I have completed the AT assessment on behalf of that team.</td>
              <td style='border: 1px solid lightslategray; padding: 10px'>
                {{part_5_declaration_accessing_team}}
              </td>
            </tr>
          </tbody>
    </table>


    <p style='margin-bottom: 10px; margin-top: 10px; font-weight: bold'>Assessor’s Details</p>
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
              <td style='border: 1px solid lightslategray; padding: 10px; width: 60%; background-color: lightgrey; font-size: 17px'>Name</td>
              <td style='border: 1px solid lightslategray; padding: 10px; font-size: 17px'>{{part_5_assessors_name}}</td>
            </tr>
            <tr>
              <td style='border: 1px solid lightslategray; padding: 10px; width: 60%; background-color: lightgrey; font-size: 17px'>NDIS Provider Registration number (where applicable)</td>
              <td style='border: 1px solid lightslategray; padding: 10px; font-size: 17px'>{{part_5_registration_number}}</td>
            </tr>
            <tr>
              <td style='border: 1px solid lightslategray; padding: 10px; width: 60%; background-color: lightgrey; font-size: 17px'>Phone</td>
              <td style='border: 1px solid lightslategray; padding: 10px; font-size: 17px'>{{part_5_assessorphone_number}}</td>
            </tr>
            <tr>
              <td style='border: 1px solid lightslategray; padding: 10px; width: 60%; background-color: lightgrey; font-size: 17px'>Email</td>
              <td style='border: 1px solid lightslategray; padding: 10px; font-size: 17px'>{{part_5_email_address}}</td>
            </tr>
            <tr>
              <td style='border: 1px solid lightslategray; padding: 10px; width: 60%; background-color: lightgrey; font-size: 17px'>Signature</td>
              <td style='border: 1px solid lightslategray; padding: 10px; font-size: 17px'>{{part_5_signature}}</td>
            </tr>
            <tr>
              <td style='border: 1px solid lightslategray; padding: 10px; width: 60%; background-color: lightgrey; font-size: 17px'>Qualification</td>
              <td style='border: 1px solid lightslategray; padding: 10px; font-size: 17px'>{{part_5_qualification}}</td>
            </tr>
            <tr>
              <td style='border: 1px solid lightslategray; padding: 10px; width: 60%; background-color: lightgrey; font-size: 17px'>Date of Assessment</td>
              <td style='border: 1px solid lightslategray; padding: 10px; font-size: 17px'>{{part_5_date_assessment}}</td>
            </tr>
            <tr>
              <td style='border: 1px solid lightslategray; padding: 10px; width: 60%; background-color: lightgrey; font-size: 17px'>Date of Report</td>
              <td style='border: 1px solid lightslategray; padding: 10px; font-size: 17px'>{{part_5_reportDate}}</td>
            </tr>
            
          </tbody>
    </table>
    <p></p>";


    $section6 = "<table style='background-color:#6a2c75; border:none; width:100%; margin-top:20px'>
        <tr>
            <td>
                <p style='font-size:14pt; font-weight:bold; margin-top:8px; margin-bottom:8px; color: white'>  PART 6 – Consent to Collect and Share Your Information – Provider AT Assessment and Quotation(s)</p>
            </td>
        </tr>
    </table>
    <p style='margin-bottom: 10px; margin-top: 10px; font-weight: bold'>For the participant to complete</p>
    <p>As a participant who requires assistive technology supports, the National Disability Insurance Agency (NDIA) may need to contact your AT assessor and / or AT supplier to discuss information within your assistive technology assessment and quotation(s). This will assist the NDIA with determining whether your request for assistive technology support(s) can be provided to you under the NDIS. Do you consent to the NDIA collecting and disclosing your information including from these third parties mentioned above, in relation to your assistive technology assessment and quotation? </p>
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
              <td style='border: 1px solid lightslategray; padding: 10px; width: 40%; background-color: lightgrey; font-size: 17px'>Yes, I consent</td>
              <td style='border: 1px solid lightslategray; padding: 10px; font-size: 17px'>{{part_6_yes_i_consent}}</td>
            </tr>
            <tr>
              <td style='border: 1px solid lightslategray; padding: 10px; width: 40%; background-color: lightgrey; font-size: 17px'>No, I do not consent</td>
              <td style='border: 1px solid lightslategray; padding: 10px; font-size: 17px'>{{part_6_no_i_do_not_consent}}</td>
            </tr>
            <tr>
              <td style='border: 1px solid lightslategray; padding: 10px; width: 40%; background-color: lightgrey; font-size: 17px'>Participant’s Signature</td>
              <td style='border: 1px solid lightslategray; padding: 10px; font-size: 17px'>{{part_6_participant_signature}}</td>
            </tr>
            <tr>
              <td style='border: 1px solid lightslategray; padding: 10px; width: 80%; background-color: lightgrey; font-size: 17px'>I understand that I am giving consent to the NDIA to do the things with my information set out in this section. I understand that I can withdraw my consent for the NDIS to do things with my information at any time by letting the NDIA know.</td>
              <td style='border: 1px solid lightslategray; padding: 10px; font-size: 17px'>{{part_6_understand_giving_consent}}</td>
            </tr>
            <tr>
              <td style='border: 1px solid lightslategray; padding: 10px; width: 80%; background-color: lightgrey; font-size: 17px'>I understand that I can access the NDIA’s Privacy Notice and Privacy Policy on the <a href='http://phpword.readthedocs.io' style='text-decoration: underline; color: blue;'>NDIA website</a> or by contacting the NDIA.
              </td>
              <td style='border: 1px solid lightslategray; padding: 10px; font-size: 17px'>{{part_6_i_can_access_NDIA_privacy_notice}}</td>
            </tr>
            <tr>
              <td style='border: 1px solid lightslategray; padding: 10px; width: 40%; background-color: lightgrey; font-size: 17px'>Signature</td>
              <td style='border: 1px solid lightslategray; padding: 10px; font-size: 17px'>{{part_6_signature_final}}</td>
            </tr>
            <tr>
              <td style='border: 1px solid lightslategray; padding: 10px; width: 40%; background-color: lightgrey; font-size: 17px'>Date</td>
              <td style='border: 1px solid lightslategray; padding: 10px; font-size: 17px'>{{part_6_date_now}}</td>
            </tr>
            <tr>
              <td style='border: 1px solid lightslategray; padding: 10px; width: 40%; background-color: lightgrey; font-size: 17px'>Full name</td>
              <td style='border: 1px solid lightslategray; padding: 10px; font-size: 17px'>{{part_6_full_name_here}}</td>
            </tr>
            
          </tbody>
    </table>
    <p style='margin-bottom: 10px; margin-top: 10px'><span style='font-weight: bold'>If you have signed this Form on behalf of the NDIS participant</span>, please complete the details below.It is an offence to provide false or misleading information. We may require you to provide evidence of your authority to sign on behalf of the person.
    </p>
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
              <td style='border: 1px solid lightslategray; padding: 10px; width: 40%; background-color: lightgrey; font-size: 17px'>Signature</td>
              <td style='border: 1px solid lightslategray; padding: 10px; font-size: 17px'>{{part_6_signature_confirm}}</td>
            </tr>
            <tr>
              <td style='border: 1px solid lightslategray; padding: 10px; width: 40%; background-color: lightgrey; font-size: 17px'>Date</td>
              <td style='border: 1px solid lightslategray; padding: 10px; font-size: 17px'>{{part_6_date_assessment_con}}</td>
            </tr>
            <tr>
              <td style='border: 1px solid lightslategray; padding: 10px; width: 40%; background-color: lightgrey; font-size: 17px'>Full Name of person completing this form (please print):</td>
              <td style='border: 1px solid lightslategray; padding: 10px; font-size: 17px'>{{part_6_full_name_please}}</td>
            </tr>
            <tr>
              <td style='border: 1px solid lightslategray; padding: 10px; width: 40%; background-color: lightgrey; font-size: 17px'>Relationship to participant or person wishing to become an NDIS participant:</td>
              <td style='border: 1px solid lightslategray; padding: 10px; font-size: 17px'>{{part_6_relationship_participant}}</td>
            </tr>
            
          </tbody>
    </table>";


    $form_fields = '[
      {
        "type":"heading",
        "required":false,
        "label_1":"1.1 NDIS Participant Details ",
        "placeholder":"Full Name",
        "className":"form-control",
        "name":"part_1_heading_extra_1",
        "access":false
     },
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
             "type":"email",
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
             "label":"NDIS Support Coordinator",
             "placeholder":"Enter Your NDIS Support Coordinator",
             "className":"form-control",
             "name":"part_1_ndis_support_coordinator",
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
            "type":"heading",
            "required":false,
            "label_1":"1.2 Plan Management Details",
            "placeholder":"Full Name",
            "className":"form-control",
            "name":"part_1_heading_extra_2",
            "access":false
         },
          {
             "type":"text",
             "required":false,
             "label":"Agency Managed",
             "placeholder":"Enter Agency Managed",
             "className":"form-control",
             "name":"part_1_agency_managed",
             "access":false,
             "subtype":"text"
          },
          {
             "type":"text",
             "required":false,
             "label":"Self-Managed",
             "placeholder":"Enter Self Managed",
             "className":"form-control",
             "name":"part_1_self_managed",
             "access":false,
             "subtype":"text"
          },
          {
             "type":"text",
             "required":false,
             "label":"Registered Plan Management Provider",
             "placeholder":"Enter Registered Plan Management Provider",
             "className":"form-control",
             "name":"part_1_registered_plan_management_provier",
             "access":false,
             "subtype":"text"
          },
          {
             "type":"text",
             "required":false,
             "label":"Contact Details",
             "placeholder":"Enter Your Contact Details",
             "className":"form-control",
             "name":"part_1_plan_managementcontact_details",
             "access":false,
             "subtype":"text"
          }
       ]';



    $form_fields2 = '[
      {
        "type":"heading",
        "required":false,
        "label_1":"2.1 Background",
        "label_2":"",
        "label_3":"General: Describe participant’s current status which may include diagnosis, prognosis, co-existing conditions, disability, personal and instrumental activities of daily living, formal and informal support arrangements and life transitions. Consider health issues and other related aspects that may influence the need for continence support.",
        "placeholder":"Full Name",
        "className":"form-control",
        "name":"part_2_heading_extra_1",
        "access":false
     },
          {
             "type":"textarea",
             "required":false,
             "label":"",
             "placeholder":"Enter Your Background",
             "className":"form-control",
             "name":"part_2_assesment_background",
             "access":false,
             "subtype":"text"
          },
          {
            "type":"heading",
            "required":false,
            "label_1":"2.2 Participant Goals",
            "label_2":"",
            "label_3":"If the participant’s NDIS plan has been made available, you can refer to the statement of participant’s goals and outline those relevant to the AT solution.",
            "placeholder":"Full Name",
            "className":"form-control",
            "name":"part_2_heading_extra_2",
            "access":false
         },
          {
             "type":"textarea",
             "required":false,
             "label":"",
             "placeholder":"Enter Your Participant Goals",
             "className":"form-control",
             "name":"part_2_assesment_participantgoals",
             "access":false,
             "subtype":"text"
          },
          {
            "type":"heading",
            "required":false,
            "label_1":"2.3 Functional Assessment",
            "label_2":"",
            "label_3":"Note current level of function related to disability and impact on life roles: skin integrity issues; rapidly changing condition – including cognitive issues; dexterity and mobility issues. Consider the need for a support person to assist with the use of continence products. Does the participant currently need assistance to use their continence items? What assistance do they currently get? Will your recommendations result in a change in personal care needs? What assistance will the participant need? \nNDIS expects relevant assessments are conducted where required and records held by AT assessor for NDIS audit purposes.",
            "placeholder":"Full Name",
            "className":"form-control",
            "name":"part_2_heading_extra_3",
            "access":false
         },
          {
             "type":"textarea",
             "required":false,
             "label":"",
             "placeholder":"Enter Functional Assessment",
             "className":"form-control",
             "name":"part_2_assesment_functional_assessment",
             "access":false,
             "subtype":"text"
          },
          {
            "type":"heading",
            "required":false,
            "label_1":"",
            "label_2":"",
            "label_3":"Indicate type of loss",
            "placeholder":"Full Name",
            "className":"form-control",
            "name":"part_2_heading_extra_4",
            "access":false
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
            "type":"heading",
            "required":false,
            "label_1":"2.4 Current Continence products in use",
            "label_2":"",
            "placeholder":"Full Name",
            "className":"form-control",
            "name":"part_2_heading_extra_5",
            "access":false
         },
          {
             "type":"text",
             "required":false,
             "label":"Type of Continence Product",
             "placeholder":"Type of Continence Product",
             "className":"form-control",
             "name":"part_2_type_of_continence_product",
             "access":false,
             "subtype":"text"
          },
          {
             "type":"text",
             "required":false,
             "label":"Usage",
             "placeholder":"Enter Usage",
             "className":"form-control",
             "name":"part_2_assesment_usage",
             "access":false,
             "subtype":"text"
          },
          {
             "type":"text",
             "required":false,
             "label":"Participant’s report of suitability",
             "placeholder":"Enter Participant’s report of suitability",
             "className":"form-control",
             "name":"part_2_participants_report_of_suitability",
             "access":false,
             "subtype":"text"
          },
          {
             "type":"text",
             "required":false,
             "label":"Does it need reassessment Yes/No",
             "placeholder":"Does it need reassessment",
             "className":"form-control",
             "name":"part_2_does_it_need_reassessment",
             "access":false,
             "subtype":"text"
          },
          {
            "type":"text",
            "required":false,
            "label":"Type of Continence Product 2",
            "placeholder":"Type of Continence Product 2",
            "className":"form-control",
            "name":"part_2_type_of_continence_2product",
            "access":false,
            "subtype":"text"
         },
         {
            "type":"text",
            "required":false,
            "label":"Usage 2",
            "placeholder":"Enter Usage 2",
            "className":"form-control",
            "name":"part_2_assesment_2usage",
            "access":false,
            "subtype":"text"
         },
         {
            "type":"text",
            "required":false,
            "label":"Participant’s report of suitability 2",
            "placeholder":"Enter Participant’s report of suitability 2",
            "className":"form-control",
            "name":"part_2_participants_report_of_2suitability",
            "access":false,
            "subtype":"text"
         },
         {
            "type":"text",
            "required":false,
            "label":"Does it need reassessment Yes/No 2",
            "placeholder":"Does it need reassessment 2",
            "className":"form-control",
            "name":"part_2_does_it_need_2reassessment",
            "access":false,
            "subtype":"text"
         },
          {
            "type":"heading",
            "required":false,
            "label_1":"2.5 Consideration of health and other issues",
            "label_2":"2.5.1 Summarise recommendations from allied health and/or medical assessments.",
            "placeholder":"Full Name",
            "className":"form-control",
            "name":"part_2_heading_extra_6",
            "access":false
         },
          {
             "type":"textarea",
             "required":false,
             "label":"",
             "placeholder":"Summarise recommendations from allied health and/or medical assessments",
             "className":"form-control",
             "name":"part_2_summarise_recommendations_from_allied_health_medical_assessments",
             "access":false,
             "subtype":"text"
          },
          {
            "type":"heading",
            "required":false,
            "label_1":"",
            "label_2":"2.5.2 Are further health, medical assessments, AT solutions and/or advice required from any of the following health or allied health professionals? Yes/No",
            "label_3":"Indicate relevant health professional",
            "placeholder":"Full Name",
            "className":"form-control",
            "name":"part_2_heading_extra_7",
            "access":false
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
          },
          {
            "type":"heading",
            "required":false,
            "label_1":"",
            "label_2":"",
            "label_3":"If yes, please provide the following information. \n Has the participant agreed to seek this assessment and/or advice? \n Is the participant aware that the NDIS cannot fund mainstream medical and health services? \n Describe the additional continence product/training needs identified by participant/Continence Assessor? \n Are other AT solutions or environmental adaptations/home modifications such as toileting AT or bathroom modifications required? \n Does the participant demonstrate behaviours of concern and have a behaviour support plan for restrictive practice? \n How might the outcome of this advice change the recommended NDIS continence supports to pursue the participant’s goals?\n",
            "placeholder":"Full Name",
            "className":"form-control",
            "name":"part_2_heading_extra_8",
            "access":false
         },
          {
             "type":"textarea",
             "required":false,
             "label":"",
             "placeholder":"If yes, please provide the following information",
             "className":"form-control",
             "name":"part_2_additional_information",
             "access":false,
             "subtype":"text"
          }
       ]';


    $form_fields3 = '
        [
          {
            "type":"heading",
            "required":false,
            "label_1":"3.1 Evaluation of options",
            "label_2":"",
            "label_3":"Thorough list of alternatives including use of other supports and approaches. Where trials have been conducted please give details of where the trials took place and for how long. \nNOTE training in device use is included and expected to be accomplished within 2 hours. Provide rationale and hours required if more extensive or specific training is indicated.",
            "placeholder":"Full Name",
            "className":"form-control",
            "name":"part_3_heading_extra_1",
            "access":false
         },
          {
            "type":"heading",
            "required":false,
            "label_1":"",
            "label_2":"",
            "label_3":"Data Entry Section 1",
            "placeholder":"Full Name",
            "className":"form-control",
            "name":"part_3_heading_extra_2",
            "access":false
         },
          {
             "type":"text",
             "required":false,
             "label":"Option",
             "placeholder":"Enter option",
             "className":"form-control",
             "name":"part_3_con_option_evaluation_option1",
             "access":false,
             "subtype":"text"
          },
          {
             "type":"text",
             "required":false,
             "label":"Describe potential options trialled in relation to goal attainment",
             "placeholder":"Enter Potential Option",
             "className":"form-control",
             "name":"part_3_con_option_potential_option1",
             "access":false,
             "subtype":"text"
          },
          {
             "type":"text",
             "required":false,
             "label":"Trialled (T) or Considered (C)? Include trial details (timing, location)",
             "placeholder":"Enter Trial Details",
             "className":"form-control",
             "name":"part_3_con_option_trial_option1",
             "access":false,
             "subtype":"text"
          },
          {
             "type":"text",
             "required":false,
             "label":"Advantages",
             "placeholder":"Enter Advantages",
             "className":"form-control",
             "name":"part_3_con_option_advantage1",
             "access":false,
             "subtype":"text"
          },
          {
             "type":"text",
             "required":false,
             "label":"Disadvantages",
             "placeholder":"Enter Disadvantage",
             "className":"form-control",
             "name":"part_3_con_option_disdvantage1",
             "access":false,
             "subtype":"text"
          },
          {
             "type":"text",
             "required":false,
             "label":"Estimated hours for training & review",
             "placeholder":"Enter Estimated Time",
             "className":"form-control",
             "name":"part_3_con_option_estimatedTime1",
             "access":false,
             "subtype":"text"
          },
          {
            "type":"heading",
            "required":false,
            "label_1":"",
            "label_2":"",
            "label_3":"Data Entry Section 2",
            "placeholder":"Full Name",
            "className":"form-control",
            "name":"part_3_heading_extra_3",
            "access":false
         },
          {
             "type":"text",
             "required":false,
             "label":"Option",
             "placeholder":"Enter option",
             "className":"form-control",
             "name":"part_3_con_option_evaluation_option2",
             "access":false,
             "subtype":"text"
          },
          {
             "type":"text",
             "required":false,
             "label":"Describe potential options trialled in relation to goal attainment",
             "placeholder":"Enter Potential Option",
             "className":"form-control",
             "name":"part_3_con_option_potential_option2",
             "access":false,
             "subtype":"text"
          },
          {
             "type":"text",
             "required":false,
             "label":"Trialled (T) or Considered (C)? Include trial details (timing, location)",
             "placeholder":"Enter Trial Details",
             "className":"form-control",
             "name":"part_3_con_option_trial_option2",
             "access":false,
             "subtype":"text"
          },
          {
             "type":"text",
             "required":false,
             "label":"Advantages",
             "placeholder":"Enter Advantages",
             "className":"form-control",
             "name":"part_3_con_option_advantage2",
             "access":false,
             "subtype":"text"
          },
          {
             "type":"text",
             "required":false,
             "label":"Disadvantages",
             "placeholder":"Enter Disadvantage",
             "className":"form-control",
             "name":"part_3_con_option_disdvantage2",
             "access":false,
             "subtype":"text"
          },
          {
             "type":"text",
             "required":false,
             "label":"Estimated hours for training & review",
             "placeholder":"Enter Estimated Time",
             "className":"form-control",
             "name":"part_3_con_option_estimatedTime2",
             "access":false,
             "subtype":"text"
          },
          {
            "type":"heading",
            "required":false,
            "label_1":"",
            "label_2":"",
            "label_3":"Data Entry Section 3",
            "placeholder":"Full Name",
            "className":"form-control",
            "name":"part_3_heading_extra_4",
            "access":false
         },
          {
             "type":"text",
             "required":false,
             "label":"Option",
             "placeholder":"Enter option",
             "className":"form-control",
             "name":"part_3_con_option_evaluation_option3",
             "access":false,
             "subtype":"text"
          },
          {
             "type":"text",
             "required":false,
             "label":"Describe potential options trialled in relation to goal attainment",
             "placeholder":"Enter Potential Option",
             "className":"form-control",
             "name":"part_3_con_option_potential_option3",
             "access":false,
             "subtype":"text"
          },
          {
             "type":"text",
             "required":false,
             "label":"Trialled (T) or Considered (C)? Include trial details (timing, location)",
             "placeholder":"Enter Trial Details",
             "className":"form-control",
             "name":"part_3_con_option_trial_option3",
             "access":false,
             "subtype":"text"
          },
          {
             "type":"text",
             "required":false,
             "label":"Advantages",
             "placeholder":"Enter Advantages",
             "className":"form-control",
             "name":"part_3_con_option_advantage3",
             "access":false,
             "subtype":"text"
          },
          {
             "type":"text",
             "required":false,
             "label":"Disadvantages",
             "placeholder":"Enter Disadvantage",
             "className":"form-control",
             "name":"part_3_con_option_disdvantage3",
             "access":false,
             "subtype":"text"
          },
          {
             "type":"text",
             "required":false,
             "label":"Estimated hours for training & review",
             "placeholder":"Enter Estimated Time",
             "className":"form-control",
             "name":"part_3_con_option_estimatedTime3",
             "access":false,
             "subtype":"text"
          },
          {
            "type":"heading",
            "required":false,
            "label_1":"",
            "label_2":"",
            "label_3":"Data Entry Section 4",
            "placeholder":"Full Name",
            "className":"form-control",
            "name":"part_3_heading_extra_5",
            "access":false
         },
          {
             "type":"text",
             "required":false,
             "label":"Option",
             "placeholder":"Enter option",
             "className":"form-control",
             "name":"part_3_con_option_evaluation_option4",
             "access":false,
             "subtype":"text"
          },
          {
             "type":"text",
             "required":false,
             "label":"Describe potential options trialled in relation to goal attainment",
             "placeholder":"Enter Potential Option",
             "className":"form-control",
             "name":"part_3_con_option_potential_option4",
             "access":false,
             "subtype":"text"
          },
          {
             "type":"text",
             "required":false,
             "label":"Trialled (T) or Considered (C)? Include trial details (timing, location)",
             "placeholder":"Enter Trial Details",
             "className":"form-control",
             "name":"part_3_con_option_trial_option4",
             "access":false,
             "subtype":"text"
          },
          {
             "type":"text",
             "required":false,
             "label":"Advantages",
             "placeholder":"Enter Advantages",
             "className":"form-control",
             "name":"part_3_con_option_advantage4",
             "access":false,
             "subtype":"text"
          },
          {
             "type":"text",
             "required":false,
             "label":"Disadvantages",
             "placeholder":"Enter Disadvantage",
             "className":"form-control",
             "name":"part_3_con_option_disdvantage4",
             "access":false,
             "subtype":"text"
          },
          {
             "type":"text",
             "required":false,
             "label":"Estimated hours for training & review",
             "placeholder":"Enter Estimated Time",
             "className":"form-control",
             "name":"part_3_con_option_estimatedTime4",
             "access":false,
             "subtype":"text"
          }
       ]';


    $form_fields4 = '
        [
          {
            "type":"heading",
            "required":false,
            "label_1":"4.1 Provide specific evidence that the supports/products described will enable the participant to pursue their identified goals and be of long-term benefit considering both current and future needs.",
            "label_2":"",
            "label_3":"",
            "placeholder":"Full Name",
            "className":"form-control",
            "name":"part_4_heading_extra_1",
            "access":false
         },
          {
             "type":"textarea",
             "required":false,
             "label":"",
             "placeholder":"Enter Specific Evidence",
             "className":"form-control",
             "name":"part_4_con_recomm_specific_evidence",
             "access":false,
             "subtype":"textarea"
          },
          {
            "type":"heading",
            "required":false,
            "label_1":"4.2 Are there additional features, customisation or specification recommended that is considered to be above the minimum or standard level for this support? Please provide the specific evidence or clinical justification for these.",
            "label_2":"",
            "label_3":"",
            "placeholder":"Full Name",
            "className":"form-control",
            "name":"part_4_heading_extra_2",
            "access":false
         },
          {
             "type":"textarea",
             "required":false,
             "label":"",
             "placeholder":"Enter additional features, customisation or specification recommended",
             "className":"form-control",
             "name":"part_4_con_recomm_additional_feature",
             "access":false,
             "subtype":"textarea"
          },
          {
            "type":"heading",
            "required":false,
            "label_1":"4.3 Description of continence products and/or AT solution. Detail all necessary components required to meet participant’s goal. This must be detailed enough to ensure that the item can be accurately supplied (attach completed supplier(s) specification/quotes as required).",
            "label_2":"",
            "label_3":"",
            "placeholder":"Full Name",
            "className":"form-control",
            "name":"part_4_heading_extra_3",
            "access":false
         },
         {
          "type":"heading",
          "required":false,
          "label_1":"",
          "label_2":"",
          "label_3":"Data Entry Section 1",
          "placeholder":"Full Name",
          "className":"form-control",
          "name":"part_4_heading_extra_4",
          "access":false
       },
          {
             "type":"text",
             "required":false,
             "label":"Item 1",
             "placeholder":"Enter Item",
             "className":"form-control",
             "name":"part_4_con_recomm_item1",
             "access":false,
             "subtype":"textarea"
          },
          {
            "type":"text",
            "required":false,
            "label":"Quantity 1",
            "placeholder":"Enter Quantity",
            "className":"form-control",
            "name":"part_4_con_recomm_quantity1",
            "access":false,
            "subtype":"textarea"
         },
         {
          "type":"text",
          "required":false,
          "label":"Frequency of Supply 1",
          "placeholder":"Enter Frequency of Supply",
          "className":"form-control",
          "name":"part_4_con_recomm_frequency1",
          "access":false,
          "subtype":"text"
        },
        {
           "type":"text",
           "required":false,
           "label":"State / Specification 1",
           "placeholder":"Enter State/Specification",
           "className":"form-control",
           "name":"part_4_con_recomm_StateSpecification1",
           "access":false,
           "subtype":"text"
        },
        {
          "type":"heading",
          "required":false,
          "label_1":"",
          "label_2":"",
          "label_3":"Data Entry Section 2",
          "placeholder":"Full Name",
          "className":"form-control",
          "name":"part_4_heading_extra_5",
          "access":false
       },
          {
             "type":"text",
             "required":false,
             "label":"Item 2",
             "placeholder":"Enter Item",
             "className":"form-control",
             "name":"part_4_con_recomm_item2",
             "access":false,
             "subtype":"textarea"
          },
          {
            "type":"text",
            "required":false,
            "label":"Quantity 2",
            "placeholder":"Enter Quantity",
            "className":"form-control",
            "name":"part_4_con_recomm_quantity2",
            "access":false,
            "subtype":"textarea"
         },
         {
          "type":"text",
          "required":false,
          "label":"Frequency of Supply 2",
          "placeholder":"Enter Frequency of Supply",
          "className":"form-control",
          "name":"part_4_con_recomm_frequency2",
          "access":false,
          "subtype":"text"
       },
       {
          "type":"text",
          "required":false,
          "label":"State / Specification 2",
          "placeholder":"Enter State/Specification",
          "className":"form-control",
          "name":"part_4_con_recomm_StateSpecification2",
          "access":false,
          "subtype":"text"
       },
       {
        "type":"heading",
        "required":false,
        "label_1":"",
        "label_2":"",
        "label_3":"Data Entry Section 3",
        "placeholder":"Full Name",
        "className":"form-control",
        "name":"part_4_heading_extra_6",
        "access":false
     },
          {
             "type":"text",
             "required":false,
             "label":"Item 3",
             "placeholder":"Enter Item",
             "className":"form-control",
             "name":"part_4_con_recomm_item3",
             "access":false,
             "subtype":"textarea"
          },
          {
             "type":"text",
             "required":false,
             "label":"Quantity 3",
             "placeholder":"Enter Quantity",
             "className":"form-control",
             "name":"part_4_con_recomm_quantity3",
             "access":false,
             "subtype":"textarea"
          },
          {
             "type":"text",
             "required":false,
             "label":"Frequency of Supply 3",
             "placeholder":"Enter Frequency of Supply",
             "className":"form-control",
             "name":"part_4_con_recomm_frequency3",
             "access":false,
             "subtype":"text"
          },
          {
             "type":"text",
             "required":false,
             "label":"State / Specification 3",
             "placeholder":"Enter State/Specification",
             "className":"form-control",
             "name":"part_4_con_recomm_StateSpecification3",
             "access":false,
             "subtype":"text"
          },
          {
             "type":"text",
             "required":false,
             "label":"Participant’s preferred supplier (optional):",
             "placeholder":"Enter Participant’s preferred supplier",
             "className":"form-control",
             "name":"part_4_con_recomm_preferred_supplier1",
             "access":false,
             "subtype":"text"
          },
          {
             "type":"checkbox-group",
             "required":false,
             "label":"Is recommendation in line with supplier product use guidance? Yes/No",
             "toggle":false,
             "inline":false,
             "name":"part_4_con_recomm_SPUG1",
             "access":false,
             "other":false,
             "values":[
                {
                   "label":"Option 1",
                   "value":"option-1",
                   "selected":true
                }
             ]
          },
          {
            "type":"heading",
            "required":false,
            "label_1":"4.4 The participant is to be provided with product information and instructions for use including any precautions. Specify who is to do this and when.",
            "label_2":"",
            "label_3":"",
            "placeholder":"Full Name",
            "className":"form-control",
            "name":"part_4_heading_extra_7",
            "access":false
         },
          {
             "type":"textarea",
             "required":false,
             "label":"",
             "placeholder":"Enter Information and Instructions for Usage.",
             "className":"form-control",
             "name":"part_4_con_recomm_information_instructions_field",
             "access":false,
             "subtype":"textarea"
          },
          {
            "type":"heading",
            "required":false,
            "label_1":"4.5 Is urgent supply required? Yes or No Details",
            "label_2":"",
            "label_3":"",
            "placeholder":"Full Name",
            "className":"form-control",
            "name":"part_4_heading_extra_8",
            "access":false
         },
          {
             "type":"textarea",
             "required":false,
             "label":"",
             "placeholder":"Enter detail with YES/NO",
             "className":"form-control",
             "name":"part_4_con_recomm_urgentSupply",
             "access":false,
             "subtype":"textarea"
          },
          {
            "type":"heading",
            "required":false,
            "label_1":"4.6 Continence product order detail is attached (as advised by supplier(s))",
            "label_2":"",
            "label_3":"",
            "placeholder":"Full Name",
            "className":"form-control",
            "name":"part_4_heading_extra_9",
            "access":false
         },
          {
             "type":"text",
             "required":false,
             "label":"State/Territory Scheme specification (optional)",
             "placeholder":"Enter your scheme specification",
             "className":"form-control",
             "name":"part_4_con_recomm_scheme_specification",
             "access":false,
             "subtype":"text"
          },
          {
             "type":"text",
             "required":false,
             "label":"Other supplier specification (Optional)",
             "placeholder":"Enter your supplier specification",
             "className":"form-control",
             "name":"part_4_con_recomm_supplier_specification",
             "access":false,
             "subtype":"text"
          },
          {
            "type":"heading",
            "required":false,
            "label_1":"4.7 Participant Agreement",
            "label_2":"Does the participant agree with the recommended continence assessment and products? (Are the assessor’s clinical recommendations and participant preference the same?)",
            "label_3":"",
            "placeholder":"Full Name",
            "className":"form-control",
            "name":"part_4_heading_extra_10",
            "access":false
         },
          {
             "type":"radio-group",
             "required":true,
             "label":"Participant Agreement",
             "inline":false,
             "name":"part_4_con_recomm_participant_agreement",
             "access":false,
             "other":false,
             "values":[
                {
                   "label":"Yes",
                   "value":"",
                   "selected":true
                },
                {
                   "label":"No",
                   "value":"option-2",
                   "selected":false
                },
                {
                   "label":"Please provide details",
                   "value":"option-3",
                   "selected":false
                }
             ]
          },
          {
             "type":"textarea",
             "required":false,
             "label":"Please provide details",
             "placeholder":"Please provide detail about Participant Agreement",
             "className":"form-control",
             "name":"part_4_detail_about_Participant_Agreement",
             "access":false,
             "subtype":"text"
          }
       ]';


    $form_fields5 = '
        [
          {
            "type":"heading",
            "required":false,
            "label_1": "",
            "label_2":"DECLARATION (indicate all relevant sections that apply)",
            "label_3": "",
            "placeholder":"Full Name",
            "className":"form-control",
            "name":"part_5_heading_extra_1",
            "access":false
         },
          {
             "type":"checkbox-group",
             "required":false,
             "label":"I certify that I meet the NDIA expectations of AT assessor provider suitability (including understanding of the current NDIS Act, Rules and Operational Guidelines) to assess the type of assistive technology and associated supports, at the level of complexity required by this participant.",
             "toggle":false,
             "inline":false,
             "name":"part_5_declaration_NDIA_expectation",
             "access":false,
             "other":false,
             "values":[
                {
                   "label":"YES/NO",
                   "value":"option-1",
                   "selected":true
                }
             ]
          },
          {
             "type":"checkbox-group",
             "required":false,
             "label":"I will provide appropriate evidence to the NDIA and/or Quality and Safe Guards Commission if and as requested.",
             "toggle":false,
             "inline":false,
             "name":"part_5_declaration_appropriate_evidence",
             "access":false,
             "other":false,
             "values":[
                {
                   "label":"YES/NO",
                   "value":"option-1",
                   "selected":true
                }
             ]
          },
          {
             "type":"checkbox-group",
             "required":false,
             "label":"I understand and acknowledge that the NDIA and participant will rely on my professional advice to select, source and implement this assistive technology.",
             "toggle":false,
             "inline":false,
             "name":"part_5_declaration_NDIA_understanding",
             "access":false,
             "other":false,
             "values":[
                {
                   "label":"YES/NO",
                   "value":"option-1",
                   "selected":false
                }
             ]
          },
          {
             "type":"checkbox-group",
             "required":false,
             "label":"This assistive technology has been assessed by the treating multi-disciplinary team and I have completed the AT assessment on behalf of that team.",
             "toggle":false,
             "inline":false,
             "name":"part_5_declaration_accessing_team",
             "access":false,
             "other":false,
             "values":[
                {
                   "label":"YES/NO",
                   "value":"option-1",
                   "selected":false
                }
             ]
          },
          {
            "type":"heading",
            "required":false,
            "label_1": "",
            "label_2":"Assessor’s Details",
            "label_3": "",
            "placeholder":"Full Name",
            "className":"form-control",
            "name":"part_5_heading_extra_2",
            "access":false
         },
          {
             "type":"text",
             "required":false,
             "label":"Name",
             "placeholder":"Enter Assessor’s  Name",
             "className":"form-control",
             "name":"part_5_assessors_name",
             "access":false,
             "subtype":"text"
          },
          {
             "type":"text",
             "required":false,
             "label":"NDIS Provider Registration Number",
             "placeholder":"Enter Registration Number",
             "className":"form-control",
             "name":"part_5_registration_number",
             "access":false,
             "subtype":"text"
          },
          {
             "type":"text",
             "required":false,
             "label":"Phone Number",
             "placeholder":"Enter Phone Number",
             "className":"form-control",
             "name":"part_5_assessorphone_number",
             "access":false,
             "subtype":"text"
          },
          {
             "type":"email",
             "subtype":"email",
             "required":false,
             "label":"Email",
             "placeholder":"Enter Email Address",
             "className":"form-control",
             "name":"part_5_email_address",
             "access":false
          },
          {
             "type":"text",
             "required":false,
             "label":"Signature",
             "placeholder":"Enter Signature",
             "className":"form-control",
             "name":"part_5_signature",
             "access":false
          },
          {
             "type":"text",
             "required":false,
             "label":"Qualification",
             "placeholder":"Enter Qualification here.",
             "className":"form-control",
             "name":"part_5_qualification",
             "access":false,
             "subtype":"text"
          },
          {
             "type":"date",
             "required":false,
             "label":"Date of Assessment",
             "placeholder":"Set Date of Assessment",
             "className":"form-control",
             "name":"part_5_date_assessment",
             "access":false
          },
          {
             "type":"date",
             "required":false,
             "label":"Date of Report",
             "placeholder":"Set Date of Report",
             "className":"form-control",
             "name":"part_5_reportDate",
             "access":false
          }
       ]';

    $form_fields6 = '
        [
          {
            "type":"heading",
            "required":false,
            "label_1": "",
            "label_2": "For the participant to complete",
            "label_3":"As a participant who requires assistive technology supports, the National Disability Insurance Agency (NDIA) may need to contact your AT assessor and / or AT supplier to discuss information within your assistive technology assessment and quotation(s). This will assist the NDIA with determining whether your request for assistive technology support(s) can be provided to you under the NDIS. \nDo you consent to the NDIA collecting and disclosing your information including from these third parties mentioned above, in relation to your assistive technology assessment and quotation? ",
            "placeholder":"Full Name",
            "className":"form-control",
            "name":"part_6_heading_extra_1",
            "access":false
         },
          {
             "type":"checkbox-group",
             "required":false,
             "label":"Yes, I consent",
             "toggle":false,
             "inline":false,
             "name":"part_6_yes_i_consent",
             "access":false,
             "other":false,
             "values":[
                {
                   "label":"YES/NO",
                   "value":"option-1",
                   "selected":true
                }
             ]
          },
          {
             "type":"checkbox-group",
             "required":false,
             "label":"No, I do not consent",
             "toggle":false,
             "inline":false,
             "name":"part_6_no_i_do_not_consent",
             "access":false,
             "other":false,
             "values":[
                {
                   "label":"YES/NO",
                   "value":"option-1",
                   "selected":true
                }
             ]
          },
          {
             "type":"checkbox-group",
             "required":false,
             "label":"Participants Signature",
             "toggle":false,
             "inline":false,
             "name":"part_6_participant_signature",
             "access":false,
             "other":false,
             "values":[
                {
                   "label":"YES/NO",
                   "value":"option-1",
                   "selected":false
                }
             ]
          },
          {
             "type":"checkbox-group",
             "required":false,
             "label":"I understand that I am giving consent to the NDIA to do the things with my information set out in this section. I understand that I can withdraw my consent for the NDIS to do things with my information at any time by letting the NDIA know.",
             "toggle":false,
             "inline":false,
             "name":"part_6_understand_giving_consent",
             "access":false,
             "other":false,
             "values":[
                {
                   "label":"YES/NO",
                   "value":"option-1",
                   "selected":false
                }
             ]
          },
          {
            "type":"checkbox-group",
            "required":false,
            "label":"I understand that I can access the NDIA’s Privacy Notice and Privacy Policy on the NDIA website(https://www.ndis.gov.au/about-us/operational-guidelines/information-handling-operational-guideline/information-handling-operational-guideline-privacy) or by contacting the NDIA (https://www.ndis.gov.au/contact).",
            "toggle":false,
            "inline":false,
            "name":"part_6_i_can_access_NDIA_privacy_notice",
            "access":false,
            "other":false,
            "values":[
               {
                  "label":"YES/NO",
                  "value":"option-1",
                  "selected":false
               }
            ]
         },
          {
             "type":"text",
             "required":false,
             "label":"Signature",
             "placeholder":"Enter Signature",
             "className":"form-control",
             "name":"part_6_signature_final",
             "access":false,
             "subtype":"text"
          },
          {
             "type":"date",
             "required":false,
             "label":"Date",
             "placeholder":"Enter Date",
             "className":"form-control",
             "name":"part_6_date_now",
             "access":false,
             "subtype":"text"
          },
          {
             "type":"text",
             "required":false,
             "label":"Full Name",
             "placeholder":"Enter Full Name",
             "className":"form-control",
             "name":"part_6_full_name_here",
             "access":false
          },
          {
            "type":"heading",
            "required":false,
            "label_1": "",
            "label_2": "",
            "label_3":"If you have signed this Form on behalf of the NDIS participant, please complete the details below. \nNote: It is an offence to provide false or misleading information. \nWe may require you to provide evidence of your authority to sign on behalf of the person.",
            "placeholder":"Full Name",
            "className":"form-control",
            "name":"part_6_heading_extra_2",
            "access":false
         },
          {
             "type":"text",
             "required":false,
             "label":"Signature",
             "placeholder":"Enter Signature.",
             "className":"form-control",
             "name":"part_6_signature_confirm",
             "access":false,
             "subtype":"text"
          },
          {
             "type":"date",
             "required":false,
             "label":"Date of Assessment",
             "placeholder":"Set Date of Assessment",
             "className":"form-control",
             "name":"part_6_date_assessment_con",
             "access":false
          },
          {
             "type":"text",
             "required":false,
             "label":"Full Name",
             "placeholder":"Full Name",
             "className":"form-control",
             "name":"part_6_full_name_please",
             "access":false
          },
          {
             "type":"text",
             "required":false,
             "label":"Relationship to participant ",
             "placeholder":"Relationship to participant",
             "className":"form-control",
             "name":"part_6_relationship_participant",
             "access":false
          }
       ]';

    $form = Form::insertGetId([
      'name' => 'Notes for AT Assessors of Continence AT Supports'
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

    $heading3 = FormHeading::insertGetId([
      'form_heading' => 'PART 3 - Exploration of Continence Interventions and Options',
      'form_id' => $form,
      'section_html' => $section3
    ]);

    $heading4 = FormHeading::insertGetId([
      'form_heading' => 'PART 4 – Continence Recommendations',
      'form_id' => $form,
      'section_html' => $section4
    ]);

    $heading5 = FormHeading::insertGetId([
      'form_heading' => 'PART 5 – Details of Assistive Technology Assessor',
      'form_id' => $form,
      'section_html' => $section5
    ]);


    $heading6 = FormHeading::insertGetId([
      'form_heading' => 'PART 6 – Consent to Collect and Share Your Information – Provider AT Assessment and Quotation(s)',
      'form_id' => $form,
      'section_html' => $section6
    ]);


    /* $heading7 = FormHeading::insertGetId([
            'form_heading' => 'PART 7 – Details of Assessor',
            'form_id' => $form,
            'section_html' => $section7
        ]);*/


    FormField::create([
      'form_heading_id' => $heading1,
      'form_field' => $form_fields
    ]);
    FormField::create([
      'form_heading_id' => $heading2,
      'form_field' => $form_fields2
    ]);
    FormField::create([
      'form_heading_id' => $heading3,
      'form_field' => $form_fields3
    ]);
    FormField::create([
      'form_heading_id' => $heading4,
      'form_field' => $form_fields4
    ]);
    FormField::create([
      'form_heading_id' => $heading5,
      'form_field' => $form_fields5
    ]);
    FormField::create([
      'form_heading_id' => $heading6,
      'form_field' => $form_fields6
    ]);
    /*FormField::create([
            'form_heading_id' => $heading7,
            'form_field' => $form_fields6
        ]);*/
  }
}
