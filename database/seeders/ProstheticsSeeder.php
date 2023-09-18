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
                        <td style='border: 1px solid lightslategray; padding: 10px'>{{part_1_ndis_name}}</td>
                        </tr>
                        <tr>
                        <td style='border: 1px solid lightslategray; padding: 10px; width: 40%;background-color: lightgrey; font-size: 17px'>Date of Birth</td>
                        <td style='border: 1px solid lightslategray; padding: 10px'>{{part_1_ndis_date_of_birth}}</td>
                        </tr>
                        <tr>
                        <td style='border: 1px solid lightslategray; padding: 10px; width: 40%; background-color: lightgrey; font-size: 17px'>Age</td>
                        <td style='border: 1px solid lightslategray; padding: 10px'>{{part_1_ndis_age}}</td>
                        </tr>
                        <tr>
                        <td style='border: 1px solid lightslategray; padding: 10px; width: 40%;background-color: lightgrey; font-size: 17px'>NDIS Number</td>
                        <td style='border: 1px solid lightslategray; padding: 10px'>{{part_1_ndis_participantndis_number}}</td>
                        </tr>
                        <tr>
                        <td style='border: 1px solid lightslategray; padding: 10px; width: 40%;background-color: lightgrey; font-size: 17px'>Address</td>
                        <td style='border: 1px solid lightslategray; padding: 10px'>{{part_1_ndis_participant_address}}</td>
                        </tr>
                        <tr>
                        <td style='border: 1px solid lightslategray; padding: 10px; width: 40%;background-color: lightgrey; font-size: 17px'>Contact Telephone Number</td>
                        <td style='border: 1px solid lightslategray; padding: 10px'>{{part_1_ndis_participantphone_number}}</td>
                        </tr>
                        <tr>
                        <td style='border: 1px solid lightslategray; padding: 10px; width: 40%;background-color: lightgrey; font-size: 17px'>Email</td>
                        <td style='border: 1px solid lightslategray; padding: 10px'>{{part_1_ndis_participant_email}}</td>
                        </tr>
                        <tr>
                        <td style='border: 1px solid lightslategray; padding: 10px; width: 40%;background-color: lightgrey; font-size: 17px'>Preferred Contact Method </td>
                        <td style='border: 1px solid lightslategray; padding: 10px'>{{part_1_ndis_participant_preferredcontact}}</td>
                        </tr>
                        <tr>
                        <td style='border: 1px solid lightslategray; padding: 10px; width: 40%;background-color: lightgrey; font-size: 17px'>Nominee or Guardian Name</td>
                        <td style='border: 1px solid lightslategray; padding: 10px'>{{part_1_ndis_participantguardian_name}}</td>
                        </tr>
                        <tr>
                        <td style='border: 1px solid lightslategray; padding: 10px; width: 40%;background-color: lightgrey; font-size: 17px'>Nominee or Guardian Phone</td>
                        <td style='border: 1px solid lightslategray; padding: 10px'>{{part_1_ndis_participantguardian_phone}}</td>
                        </tr>
                        <tr>
                        <td style='border: 1px solid lightslategray; padding: 10px; width: 40%;background-color: lightgrey; font-size: 17px'>NDIS Support Coordinator</td>
                        <td style='border: 1px solid lightslategray; padding: 10px'>{{part_1_plan_management_ndis_coordinator}}</td>
                        </tr>
                        <tr>
                        <td style='border: 1px solid lightslategray; padding: 10px; width: 40%;background-color: lightgrey; font-size: 17px'>Contact Details</td>
                        <td style='border: 1px solid lightslategray; padding: 10px'>{{part_1_ndis_participantcontact_details}}</td>
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
                        <td style='border: 1px solid lightslategray; padding: 10px'>{{part_1_ndis_agency_managed}}</td>
                        </tr>
                        <tr>
                        <td style='border: 1px solid lightslategray; padding: 10px; width: 40%; background-color: lightgrey; font-size: 17px'>Self-Managed</td>
                        <td style='border: 1px solid lightslategray; padding: 10px'>{{part_1_ndis_self_managed}}</td>
                        </tr>
                        <tr>
                        <td style='border: 1px solid lightslategray; padding: 10px; width: 40%; background-color: lightgrey; font-size: 17px'>Registered Plan Management Provider</td>
                        <td style='border: 1px solid lightslategray; padding: 10px'>{{part_1_ndis_registeredplanmanagement_provider}}</td>
                        </tr>
                        <tr>
                        <td style='border: 1px solid lightslategray; padding: 10px; width: 40%; background-color: lightgrey; font-size: 17px'>Contact Details </td>
                        <td style='border: 1px solid lightslategray; padding: 10px'>{{part_1_ndis_registeredplanmanagementcontact_details}}</td>
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
                        <td style='border: 1px solid lightslategray; padding: 10px; width: 40%; background-color: lightgrey; font-size: 15px'><p style='margin-top:8px; margin-bottom:8px; margin-left:8px'>  Agency Managed</p></td>
                        <td style='border: 1px solid lightslategray; padding: 10px'>
                            <p style='margin-top:8px; margin-bottom:8px; margin-left:8px'>   {{part_1_plan_management_agency_managed}}</p>
                        </td>
                        </tr>
                        <tr>
                        <td style='border: 1px solid lightslategray; padding: 10px; width: 40%; background-color: lightgrey; font-size: 15px'><p style='margin-top:8px; margin-bottom:8px; margin-left:8px'>  Self-Managed</p></td>
                        <td style='border: 1px solid lightslategray; padding: 10px'>
                            <p style='margin-top:8px; margin-bottom:8px; margin-left:8px'>   {{part_1_plan_management_self_managed}}</p>
                        </td>
                        </tr>
                        <tr>
                        <td style='border: 1px solid lightslategray; padding: 10px; width: 40%; background-color: lightgrey; font-size: 15px'><p style='margin-top:8px; margin-bottom:8px; margin-left:8px'>  Registered Plan Management Provider</p></td>
                        <td style='border: 1px solid lightslategray; padding: 10px'>
                            <p style='margin-top:8px; margin-bottom:8px; margin-left:8px'>   {{part_1_plan_management_registered_plan_management_provider}}</p>
                        </td>
                        </tr>
                        <tr>
                        <td style='border: 1px solid lightslategray; padding: 10px; width: 40%; background-color: lightgrey; font-size: 15px'><p style='margin-top:8px; margin-bottom:8px; margin-left:8px'>  Contact Details</p> </td>
                        <td style='border: 1px solid lightslategray; padding: 10px'>
                            <p style='margin-top:8px; margin-bottom:8px; margin-left:8px'>   {{part_1_plan_management_contact_details}}</p>
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
    <p style='font-weight:bold; font-size:13pt;margin-top:20px; margin-bottom:20px;'>2.1 Background</p>
    <p style='font-size:12pt;'>General: Describe participant’s current status which may include diagnosis, prognosis, co-existing conditions, disability, personal and instrumental activities of daily living, formal and informal support arrangements and life transitions.</p>
    <table style='width:100%; border: 1px solid black'>
        <tr>
            <td style='width: 100%; border: 1px solid black;'>
                <p style='margin-top:10px; margin-bottom:10px;'>{{part_2_assesment_background}}</p>
            </td>
        </tr>
    </table>
    <p style='font-weight:bold; font-size:13pt;margin-top:20px; margin-bottom:20px;'>2.2 Participant Goals</p>
    <p style='font-size:12pt;'>If the participant’s NDIS plan has been made available, you can refer to the statement of participant’s goals and outline those relevant to the AT solution.</p>
    <table style='width:100%; border: 1px solid black'>
        <tr>
            <td style='width: 100%; border: 1px solid black;'>
                <p style='margin-top:10px; margin-bottom:10px;'>{{part_2_participant_goals}}</p>
            </td>
        </tr>
    </table>
    <p style='font-weight:bold; font-size:13pt;margin-top:20px; margin-bottom:20px;'>2.3 Functional Assessment</p>
    <p style='font-size:12pt;'>Summarise the assessment findings relevant to your recommendations (include aspects such as range of motion, strength, interpretation of valid outcome measure findings etc. as appropriate) and explain the impact on life roles. *NDIS expects valid and reliable outcome measures are conducted, where possible, and records held by AT assessor for NDIS audit purposes. (e.g. AMPPRO, DASH)</p>
    <table style=' width:100%; border: 1px solid black;'>
        <tr>
            <td style='border: 1px solid black;'>{{part_2_functional_assessment}}</td>
        </tr>
    </table>
    <table style=' width:100%; border: 1px solid black;'>
    <tr>
        <td style='width:40%; background-color: lightgrey;'>Height in cm</td>
        <td style='width:60%; border: 1px solid black;'>{{part_2_height_in_cm}}</td>
    </tr>
    <tr>
        <td style='width:40%; background-color: lightgrey;'>Weight in kg</td>
        <td style='width:60%; border: 1px solid black;'>{{part_2_weight_in_kg}}</td>
    </tr>
</table>
<p style='font-weight:bold; font-size:13pt;margin-top:20px; margin-bottom:20px;'>2.4 Current AT in use</p>
<p style='font-size:12pt;'>If it is the view of the NDIS participant or AT assessor that another relevant item of AT involved in goal achievement needs to be reassessed before this P and O assessment progresses, contact should be made with Participant’s LAC and/or Support Plan Coordinator at this point (e.g. where an Occupational Therapy upper limb assessment is required before a prosthetic recommendation can be made).</p>
<p style='font-size:12pt;'> *Document 'Type of AT' in detail; e.g. 'jointed ankle foot orthosis with XX shells and XX joints', or specific component name of prosthetic knees and feet.</p>
<p style='font-weight:bold; font-size:13pt;'>**Note: To add rows for additional items navigate to any column. Either right mouse click or select the right context menu, move to and select Insert…move to and select Insert below to add a row. Repeat as required.</p>
<table style='border-collapse: collapse; width: 100%; margin: auto; border: 1px solid lightslategray;'>
    <tbody>
        <tr>
            <td style='border: 1px solid lightslategray; padding: 10px; width: 20%; background-color: lightgrey; font-size: 17px'>Type of AT</td>
            <td style='border: 1px solid lightslategray; padding: 10px; width: 20%; background-color: lightgrey; font-size: 17px'>Usage</td>
            <td style='border: 1px solid lightslategray; padding: 10px; width: 20%; background-color: lightgrey; font-size: 17px'>Participant’s report of suitability</td>
            <td style='border: 1px solid lightslategray; padding: 10px; width: 20%; background-color: lightgrey; font-size: 17px'>Does it need reassessment? Yes or No. Details</td>
        </tr>
        <tr>
            <td style='border: 1px solid lightslategray; padding: 10px'>{{part_2_type_of_at1}}</td>
            <td style='border: 1px solid lightslategray; padding: 10px'>{{part_2_usage1}}</td>
            <td style='border: 1px solid lightslategray; padding: 10px'>{{part_2_participant’s_report_of_suitability1}}</td>
            <td style='border: 1px solid lightslategray; padding: 10px'>{{part_2_does_it_need_reassessment1}}</td>
        </tr>
        <tr>
            <td style='border: 1px solid lightslategray; padding: 10px'>{{part_2_type_of_at2}}</td>
            <td style='border: 1px solid lightslategray; padding: 10px'>{{part_2_usage2}}</td>
            <td style='border: 1px solid lightslategray; padding: 10px'>{{part_2_participant’s_report_of_suitability2}}</td>
            <td style='border: 1px solid lightslategray; padding: 10px'>{{part_2_does_it_need_reassessment2}}</td>
        </tr>
        <tr>
            <td style='border: 1px solid lightslategray; padding: 10px'>{{part_2_type_of_at3}}</td>
            <td style='border: 1px solid lightslategray; padding: 10px'>{{part_2_usage3}}</td>
            <td style='border: 1px solid lightslategray; padding: 10px'>{{part_2_participant’s_report_of_suitability3}}</td>
            <td style='border: 1px solid lightslategray; padding: 10px'>{{part_2_does_it_need_reassessment3}}</td>
        </tr>
    </tbody>
</table>
<p style='font-size:12pt;margin-top:20px; margin-bottom:20px;'>2.4.1 Outline any disability related functional limitation/s which need to be addressed to pursue the stated goal(s). Describe any limitations such as malfunctioning AT, no prior access to this AT etc. If no functional limitation changes, indicate why AT requires replacement in the plan period (e.g. ill-fitting).</p>
<table style=' width:100%; border: 1px solid black;'>
    <tr>
        <td style='border: 1px solid black;'>{{part_2_outline_any_disability}}</td>
    </tr>
</table><p> </p>";

      $section3 = "<table style='background-color:#7209B7; border:none; width:100%; margin-top:20px; margin-bottom:20px;'>
        <tr>
            <td>
                <p style='font-size:12pt; font-weight:bold; margin-top:5px; margin-bottom:5px; color: white'>PART 3 – Exploration of Options and Recommendation</p>
            </td>
        </tr>
    </table>
    <p style='font-weight:bold; font-size:13pt;margin-top:20px; margin-bottom:20px;'>3.1	Evaluation of other options</p>
    <p style='font-size:12pt;'>Please provide information on alternatives considered to pursue goal/s including repairs, adjustments, therapy or AT training, and reasons why they were not considered suitable. Note that NDIA will generally fund the most cost-effective option, usually the minimum necessary componentry to pursue the goals, so lowest cost solutions must be considered. Where trials have been conducted or alternative AT used in the past, please give details of where the trials/use took place, for how long and the outcomes. Where necessary add further lines and/or attach further detail</p>
    <p style='font-weight:bold; font-size:13pt;'>**Note: To add rows for additional items navigate to any column. Either right mouse click or select the right context menu, move to and select Insert…move to and select Insert below to add a row. Repeat as required.</p>
    <table style='border-collapse: collapse; width: 100%; margin: auto; border: 1px solid lightslategray; '>
        <tbody>
            <tr>
                <td style='border: 1px solid lightslategray; padding: 10px; width: 20%; background-color: lightgrey; font-size: 17px'>Option</td>
                <td style='border: 1px solid lightslategray; padding: 10px; width: 20%; background-color: lightgrey; font-size: 17px'>Describe features / functions of vehicle modification and other options trialled to pursue goal achievement</td>
                <td style='border: 1px solid lightslategray; padding: 10px; width: 20%; background-color: lightgrey; font-size: 17px'>Trialled (T) or Considered (C) include details</td>
                <td style='border: 1px solid lightslategray; padding: 10px; width: 20%; background-color: lightgrey; font-size: 17px'>Describe why not considered suitable (not applicable for preferred option)</td>
                <td style='border: 1px solid lightslategray; padding: 10px; width: 20%; background-color: lightgrey; font-size: 17px'>Cost (include training)</td>

            </tr>
            <tr>
                <td style='border: 1px solid lightslategray; padding: 10px'>{{part_3_con_option_evaluation_option1}}</td>
                <td style='border: 1px solid lightslategray; padding: 10px'>{{part_3_con_option_potential_option1}}</td>
                <td style='border: 1px solid lightslategray; padding: 10px'>{{part_3_con_option_trial_option1}}</td>
                <td style='border: 1px solid lightslategray; padding: 10px'>{{part_3_con_option_disdvantage1}}</td>
                <td style='border: 1px solid lightslategray; padding: 10px'>{{part_3_con_option_cost1}}</td>
            </tr>
            <tr>
                <td style='border: 1px solid lightslategray; padding: 10px'>{{part_3_con_option_evaluation_option2}}</td>
                <td style='border: 1px solid lightslategray; padding: 10px'>{{part_3_con_option_potential_option2}}</td>
                <td style='border: 1px solid lightslategray; padding: 10px'>{{part_3_con_option_trial_option2}}</td>
                <td style='border: 1px solid lightslategray; padding: 10px'>{{part_3_con_option_disdvantage2}}</td>
                <td style='border: 1px solid lightslategray; padding: 10px'>{{part_3_con_option_cost2}}</td>
            </tr>
            <tr>
                <td style='border: 1px solid lightslategray; padding: 10px'>{{part_3_con_option_evaluation_option3}}</td>
                <td style='border: 1px solid lightslategray; padding: 10px'>{{part_3_con_option_potential_option3}}</td>
                <td style='border: 1px solid lightslategray; padding: 10px'>{{part_3_con_option_trial_option3}}</td>
                <td style='border: 1px solid lightslategray; padding: 10px'>{{part_3_con_option_disdvantage3}}</td>
                <td style='border: 1px solid lightslategray; padding: 10px'>{{part_3_con_option_cost3}}</td>
            </tr>
            <tr>
                <td style='border: 1px solid lightslategray; padding: 10px'>{{part_3_con_option_evaluation_option4}}</td>
                <td style='border: 1px solid lightslategray; padding: 10px'>{{part_3_con_option_potential_option4}}</td>
                <td style='border: 1px solid lightslategray; padding: 10px'>{{part_3_con_option_trial_option4}}</td>
                <td style='border: 1px solid lightslategray; padding: 10px'>{{part_3_con_option_disdvantage4}}</td>
                <td style='border: 1px solid lightslategray; padding: 10px'>{{part_3_con_option_cost4}}</td>
            </tr>
        </tbody>
    </table>
    <p style='font-weight:bold; font-size:13pt;margin-top:20px; margin-bottom:20px;'>3.2	Recommended Solution (specification in Section 4)</p>
    <table style='border-collapse: collapse; width: 100%; margin: auto; border: 1px solid lightslategray; '>
        <tbody>
            <tr>
                <td style='border: 1px solid lightslategray; padding: 10px; width: 20%; background-color: lightgrey; font-size: 17px'>Describe the features or functions of solution  that address the goal and functional need</td>
                <td style='border: 1px solid lightslategray; padding: 10px; width: 20%; background-color: lightgrey; font-size: 17px'>Include any trial details</td>
                <td style='border: 1px solid lightslategray; padding: 10px; width: 20%; background-color: lightgrey; font-size: 17px'>Estimated cost (include training</td>

            </tr>
            <tr>
                <td style='border: 1px solid lightslategray; padding: 10px'>{{part_3_feature_option1}}</td>
                <td style='border: 1px solid lightslategray; padding: 10px'>{{part_3_trial_details1}}</td>
                <td style='border: 1px solid lightslategray; padding: 10px'>{{part_3_feature_cost1}}</td>
            </tr>
            <tr>
                <td style='border: 1px solid lightslategray; padding: 10px'>{{part_3_feature_option2}}</td>
                <td style='border: 1px solid lightslategray; padding: 10px'>{{part_3_trial_details2}}</td>
                <td style='border: 1px solid lightslategray; padding: 10px'>{{part_3_feature_cost2}}</td>
            </tr>
        </tbody>
    </table>
    <p style='font-weight:bold; font-size:13pt;margin-top:20px; margin-bottom:20px;'>3.3	Evidence</p>
    <p style='font-size:12pt;'>Explain the evidence for the recommended option as the most suitable and cost-effective, which will facilitate pursuit of the participant’s goal(s), facilitate participation, and/or improve life stage outcomes, compared to others considered (e.g. trial outcomes and consideration of long term benefit in both current and anticipated future needs, change/adjustment to personal care support need etc.). Particularly where a change in AT is recommended, briefly discuss why this is required e.g. rule out all mechanical knee options before considering only microprocessor knee unit options.</p>
    <table style='width:100%; border: 1px solid black'>
        <tr>
            <td style='width: 100%; border: 1px solid black;'>
                <p style='margin-top:10px; margin-bottom:10px;'>{{part_3_evidence}}</p>
            </td>
        </tr>
    </table>
    <p style='font-weight:bold; font-size:13pt;margin-top:20px; margin-bottom:20px;'>3.4	Identify where change to other supports may be required (noting reduction or addition) for the recommended option including non AT supports and environmental modifications.</p>
    <p style='font-size:12pt;'>Results of options review from perspective of participant and P and O assessor.</p>
    <table style='width:100%; border: 1px solid black'>
        <tr>
            <td style='width: 100%; border: 1px solid black;'>
                <p style='margin-top:10px; margin-bottom:10px;'>{{part_3_identify_where_changeto_other_support}}</p>
            </td>
        </tr>
    </table>
    <p style='font-weight:bold; font-size:13pt;margin-top:20px; margin-bottom:20px;'>3.5	Measuring success</p>
    <p style='font-size:12pt;'>3.5.1 What are the expected outcomes of providing this recommended support? E.g. specific goals achieved, other supports changed/reduced, etc.?</p>
    <table style='width:100%; border: 1px solid black'>
        <tr>
            <td style='width: 100%; border: 1px solid black;'>
                <p style='margin-top:10px; margin-bottom:10px;'>{{part_3_expected_outcomes}}</p>
            </td>
        </tr>
    </table>
    <p style='font-size:12pt;'>3.5.2 How will you measure whether these outcomes have been achieved?</p>
    <table style='width:100%; border: 1px solid black'>
        <tr>
            <td style='width: 100%; border: 1px solid black;'>
                <p style='margin-top:10px; margin-bottom:10px;'>{{part_3_if_outcomes_achieve}}</p>
            </td>
        </tr>
    </table>
    <p style='font-size:12pt;'>3.5.3 When will you measure these outcomes?</p>
    <table style='width:100%; border: 1px solid black'>
        <tr>
            <td style='width: 100%; border: 1px solid black;'>
                <p style='margin-top:10px; margin-bottom:10px;'>{{part_3_measure_these_outcomes}}</p>
            </td>
        </tr>
    </table>
    <p> </p>";

      $section4 = "<table style='background-color:#7209B7; border:none; width:100%;'>
        <tr>
            <td>
                <p style='font-size:12pt; font-weight:bold; margin-top:5px; margin-bottom:5px; color: white'>PART 4 – Specification of Recommended P and O solution/device</p>
            </td>
        </tr>
        </table>
        <p style='font-weight:bold; font-size:13pt;margin-top:20px; margin-bottom:20px;'>4.1	Specification/Description of P and O AT solution/device</p>
        <p style='font-size:12pt;'>Detail all necessary components required to meet participant’s goal. This must be detailed enough to ensure that reasonable and necessary can be accurately assessed in relation to the information supplied above (the fully completed  Activity, Detail and quantity  columns only of an AOPA  compliant example quotation form can be attached to this form as an alternative) Reference: AOPA  Quotation Development Guidance Quotation Development Tool</p>
        <table style='width:100%; border: 1px solid black'>
            <tr>
                <td style='width: 100%; border: 1px solid black;'>
                    <p style='margin-top:10px; margin-bottom:10px;'>{{part_3_description_of_P&O_AT_solution}}</p>
                </td>
            </tr>
        </table>
        <p> </p>
        <p style='font-size:12pt;'>4.1.1 (Capacity building) Professional assessment, specification, fitting and training</p>
        <table style='border-collapse: collapse; width: 100%;'>
            <tr>
                <th style='border-top: 1px solid black; border-right: 1px solid black; width: 40%;'>Activity</th>
                <th style='border-top: 1px solid black; border-right: 1px solid black; width: 30%;'>Detail</th>
                <th style='border-top: 1px solid black; width: 30%;'>Quantity (hrs)</th>
            </tr>
            <tr>
                <td style='border-top: 1px solid black; border-right: 1px solid black'>e.g. Clinical Assessment</td>
                <td style='border-top: 1px solid black; border-right: 1px solid black'>e.g. Clinical assessment; Goal setting</td>
                <td style='border-top: 1px solid black'>eg 2 hrs</td>
            </tr>
            <tr>
                <td style='border-top: 1px solid black; border-right: 1px solid black'>e.g. Device specification or measurement</td>
                <td style='border-top: 1px solid black; border-right: 1px solid black'>e.g. Casting/measuring for bilateral articulated AFO</td>
                <td style='border-top: 1px solid black'>eg 3 hrs</td>
            </tr>
            <tr>
                <td style='border-top: 1px solid black; border-right: 1px solid black'>Clinical Assessment</td>
                <td style='border-top: 1px solid black; border-right: 1px solid black'>{{part_3_detail1}}</td>
                <td style='border-top: 1px solid black'>{{part_3_quantity1}}</td>
            </tr>
            <tr>
                <td style='border-top: 1px solid black; border-right: 1px solid black'>Liaise with other health professionals</td>
                <td style='border-top: 1px solid black; border-right: 1px solid black'>{{part_3_detail2}}</td>
                <td style='border-top: 1px solid black'>{{part_3_quantity2}}</td>
            </tr>
            <tr>
                <td style='border-top: 1px solid black; border-right: 1px solid black'>Device specification/measurement</td>
                <td style='border-top: 1px solid black; border-right: 1px solid black'>{{part_3_detail3}}</td>
                <td style='border-top: 1px solid black'>{{part_3_quantity3}}</td>
            </tr>
            <tr>
                <td style='border-top: 1px solid black; border-right: 1px solid black'>Fitting and adjustment</td>
                <td style='border-top: 1px solid black; border-right: 1px solid black'>{{part_3_detail4}}</td>
                <td style='border-top: 1px solid black'>{{part_3_quantity4}}</td>
            </tr>
             <tr>
                <td style='border-top: 1px solid black; border-right: 1px solid black'>Client education</td>
                <td style='border-top: 1px solid black; border-right: 1px solid black'>{{part_3_detail5}}</td>
                <td style='border-top: 1px solid black'>{{part_3_quantity5}}</td>
            </tr>
            <tr>
                <td style='border-top: 1px solid black; border-right: 1px solid black'>Ongoing review/s (Identify intervals for first two years)</td>
                <td style='border-top: 1px solid black; border-right: 1px solid black'>{{part_3_detail6}}</td>
                <td style='border-top: 1px solid black'>{{part_3_quantity6}}</td>
            </tr>
            <tr>
                <td colspan='2' style='border-top: 1px solid black; border-right: 1px solid black; text-align: end;'>Capital Building Hours Sub Total (hrs)</td>
                <td style='border-top: 1px solid black'>{{capital_building_hours_sub_total}}</td>
            </tr>
            <tr>
                <td colspan='2' style=' border-top: 1px solid black; border-right: 1px solid black; text-align: end;'>Capital Building Hours x Hourly Rate Sub Total ($) (A)</td>
                <td style='border-top: 1px solid black'>{{capital_building_hours_hour_rate_sub__total}}</td>
            </tr>
        </table>  
        <p> </p>
        <p style='font-size:12pt;'>4.1.2 (Capital) Labour</p>
        <table style='border-collapse: collapse; width: 100%;'>
            <tr>
                <th style='border-top: 1px solid black; border-right: 1px solid black; width: 40%;'>Activity</th>
                <th style='border-top: 1px solid black; border-right: 1px solid black; width: 30%;'>Detail</th>
                <th style='border-top: 1px solid black; width: 30%;'>Value ($)</th>
            </tr>
            <tr>
                <td style='border-top: 1px solid black; border-right: 1px solid black'>Fabrication/modification</td>
                <td style='border-top: 1px solid black; border-right: 1px solid black'>{{part_3_detail7}}</td>
                <td style='border-top: 1px solid black'>{{part_3_quantity7}}</td>
            </tr>
            <tr>
                <td style='border-top: 1px solid black; border-right: 1px solid black'>Fitting/s</td>
                <td style='border-top: 1px solid black; border-right: 1px solid black'>{{part_3_detail8}}</td>
                <td style='border-top: 1px solid black'>{{part_3_quantity8}}</td>
            </tr>
            <tr>
                <td style='border-top: 1px solid black; border-right: 1px solid black'>Administration</td>
                <td style='border-top: 1px solid black; border-right: 1px solid black'>{{part_3_detail9}}</td>
                <td style='border-top: 1px solid black'>{{part_3_quantity9}}</td>
            </tr>
            <tr>
                <td colspan='2' style='border-top: 1px solid black; border-right: 1px solid black; text-align: end;'>Capital Labour Sub Total ($) (B)</td>
                <td style='border-top: 1px solid black'>{{part_3_capital_labour_sub_total}}</td>
            </tr>
        </table>
        <p> </p>
        <p style='font-size:12pt;'>4.1.3 Componentry included in specification (Prosthetic) List details using ISO codes.</p>
        <table style='border-collapse: collapse; width: 100%;'>
            <tr>
                <th style='border-top: 1px solid black; border-right: 1px solid black; width: 40%;'>Component</th>
                <th style='border-top: 1px solid black; border-right: 1px solid black; width: 30%;'>Detail</th>
                <th style='border-top: 1px solid black; width: 30%;'>Value ($)</th>
            </tr>
            <tr>
                <td style='border-top: 1px solid black; border-right: 1px solid black'>Connective componentry</td>
                <td style='border-top: 1px solid black; border-right: 1px solid black'>{{part_3_detail10}}</td>
                <td style='border-top: 1px solid black'>{{part_3_quantity10}}</td>
            </tr>
            <tr>
                <td style='border-top: 1px solid black; border-right: 1px solid black'>Knee/Elbow</td>
                <td style='border-top: 1px solid black; border-right: 1px solid black'>{{part_3_detail11}}</td>
                <td style='border-top: 1px solid black'>{{part_3_quantity11}}</td>
            </tr>
            <tr>
                <td style='border-top: 1px solid black; border-right: 1px solid black'>Foot/Wrist</td>
                <td style='border-top: 1px solid black; border-right: 1px solid black'>{{part_3_detail12}}</td>
                <td style='border-top: 1px solid black'>{{part_3_quantity12}}</td>
            </tr>
            <tr>
                <td style='border-top: 1px solid black; border-right: 1px solid black'>Socket/suspension</td>
                <td style='border-top: 1px solid black; border-right: 1px solid black'>{{part_3_detail13}}</td>
                <td style='border-top: 1px solid black'>{{part_3_quantity13}}</td>
            </tr>
            <tr>
                <td style='border-top: 1px solid black; border-right: 1px solid black'>Consumables</td>
                <td style='border-top: 1px solid black; border-right: 1px solid black'>{{part_3_detail14}}</td>
                <td style='border-top: 1px solid black'>{{part_3_quantity14}}</td>
            </tr>
            <tr>
                <td colspan='2' style='border-top: 1px solid black; border-right: 1px solid black; text-align: end;'>Prosthetic Componentry Sub Total ($) (C)</td>
                <td style='border-top: 1px solid black'>{{part_3_Prosthetic_Componentry_Sub_Total}}</td>
            </tr>
        </table>
        <p> </p>
        <p style='font-size:12pt;'>4.1.4 Componentry included in specification (Orthotic) List details using ISO codes.</p>
        <table style='border-collapse: collapse; width: 100%;'>
            <tr>
                <th style='border-top: 1px solid black; border-right: 1px solid black; width: 40%;'>Component</th>
                <th style='border-top: 1px solid black; border-right: 1px solid black; width: 30%;'>Detail</th>
                <th style='border-top: 1px solid black; width: 30%;'>Value ($)</th>
            </tr>
            <tr>
                <td style='border-top: 1px solid black; border-right: 1px solid black'>Fabrication materials</td>
                <td style='border-top: 1px solid black; border-right: 1px solid black'>{{part_3_detail15}}</td>
                <td style='border-top: 1px solid black'>{{part_3_quantity15}}</td>
            </tr>
            <tr>
                <td style='border-top: 1px solid black; border-right: 1px solid black'>Ankle Joints  (Size; batch number)</td>
                <td style='border-top: 1px solid black; border-right: 1px solid black'>{{part_3_detail16}}</td>
                <td style='border-top: 1px solid black'>{{part_3_quantity16}}</td>
            </tr>
            <tr>
                <td style='border-top: 1px solid black; border-right: 1px solid black'>Knee Joints</td>
                <td style='border-top: 1px solid black; border-right: 1px solid black'>{{part_3_detail17}}</td>
                <td style='border-top: 1px solid black'>{{part_3_quantity17}}</td>
            </tr>
            <tr>
                <td style='border-top: 1px solid black; border-right: 1px solid black'>Other Joints</td>
                <td style='border-top: 1px solid black; border-right: 1px solid black'>{{part_3_detail18}}</td>
                <td style='border-top: 1px solid black'>{{part_3_quantity18}}</td>
            </tr>
            <tr>
                <td style='border-top: 1px solid black; border-right: 1px solid black'>Prefabricated componentry</td>
                <td style='border-top: 1px solid black; border-right: 1px solid black'>{{part_3_detail19}}</td>
                <td style='border-top: 1px solid black'>{{part_3_quantity19}}</td>
            </tr>
            <tr>
                <td style='border-top: 1px solid black; border-right: 1px solid black'>Custom made componentry</td>
                <td style='border-top: 1px solid black; border-right: 1px solid black'>{{part_3_detail20}}</td>
                <td style='border-top: 1px solid black'>{{part_3_quantity20}}</td>
            </tr>
            <tr>
                <td style='border-top: 1px solid black; border-right: 1px solid black'>Consumables</td>
                <td style='border-top: 1px solid black; border-right: 1px solid black'>{{part_3_detail21}}</td>
                <td style='border-top: 1px solid black'>{{part_3_quantity21}}</td>
            </tr>
            <tr>
                <td colspan='2' style='border-top: 1px solid black; border-right: 1px solid black; text-align: end;'>Orthotic Componentry Sub Total ($) (D)</td>
                <td style='border-top: 1px solid black'>{{part_3_Orthotic_Componentry_Sub_Total}}</td>
            </tr>
            <tr>
                <td colspan='2' style='border-top: 1px solid black; border-right: 1px solid black; text-align: end;'>Quoted Capital Cost of Total Solution/Device ($) (A + B + C + D) </td>
                <td style='border-top: 1px solid black'>{{part_3_Quoted_Capital_Cost_of_Total_Solution}}</td>
            </tr>
        </table>
        <p> </p>
        <p style='font-size:12pt;'>4.1.5 Extra Features. List and Estimate cost of components/accessories (if any) that are desired by the participant but are unlikely to be assessed reasonable and necessary. Does the participant agree to pay for these from their own (not NDIS) funds?</p>
        <table style='border-collapse: collapse; width: 100%; margin: auto; border: 1px solid lightslategray;'>
            <tbody>
                <tr>
                    <td style='border: 1px solid lightslategray; padding: 10px; width: 40%; background-color: lightgrey; font-size: 17px'>Yes</td>
                    <td style='border: 1px solid lightslategray; padding: 10px'>{{part_5_features_if_yes}}</td>
                </tr>
                <tr>
                    <td style='border: 1px solid lightslategray; padding: 10px; width: 40%;background-color: lightgrey; font-size: 17px'>No</td>
                    <td style='border: 1px solid lightslategray; padding: 10px'>{{part_5_features_if_no}}</td>
                </tr>
            </tbody>
        </table>
        <table style='border-collapse: collapse; width: 100%;'>
            <tr>
                <th style='border-top: 1px solid black; border-right: 1px solid black; width: 40%;'>Item(s)</th>
                <th style='border-top: 1px solid black; border-right: 1px solid black; width: 30%;'>Detail</th>
                <th style='border-top: 1px solid black; width: 30%;'>Cost Estimate($)</th>
            </tr>
            <tr>
                <td style='border-top: 1px solid black; border-right: 1px solid black'>{{part_3_item22}}</td>
                <td style='border-top: 1px solid black; border-right: 1px solid black'>{{part_3_detail22}}</td>
                <td style='border-top: 1px solid black'>{{part_3_quantity22}}</td>
            </tr>
            <tr>
                <td style='border-top: 1px solid black; border-right: 1px solid black'>{{part_3_item23}}</td>
                <td style='border-top: 1px solid black; border-right: 1px solid black'>{{part_3_detail23}}</td>
                <td style='border-top: 1px solid black'>{{part_3_quantity23}}</td>
            </tr>
            <tr>
                <td style='border-top: 1px solid black; border-right: 1px solid black'>{{part_3_item24}}</td>
                <td style='border-top: 1px solid black; border-right: 1px solid black'>{{part_3_detail24}}</td>
                <td style='border-top: 1px solid black'>{{part_3_quantity24}}</td>
            </tr>
        </table>
        <p></p>
        <p style='font-size:12pt;'>4.1.6 The participant must be provided with maintenance and servicing information for their prosthetic/orthotic to remain in good working order. When will this be done? What are the warranty periods applying?</p>
        <table style='width:100%; border: 1px solid black'>
            <tr>
                <td style='width: 100%; border: 1px solid black;'>
                    <p style='margin-top:10px; margin-bottom:10px;'>{{part_3_The_participant_must_be_provided}}</p>
                </td>
            </tr>
        </table>
        <p></p>
        <table style='border-collapse: collapse; width: 100%; margin: auto; border: 1px solid lightslategray;'>
            <tbody>
                <tr>
                    <td style='border: 1px solid lightslategray; padding: 10px; width: 40%; background-color: lightgrey; font-size: 17px'>Time from funding approval to expected  orthosis/prosthesis provision (weeks):  </td>
                    <td style='border: 1px solid lightslategray; padding: 10px'>{{part_3_Time_from_funding_approval}}</td>
                </tr>
            </tbody>
        </table>
        <p style='font-size:12pt;'>4.1.7 Is the participant at safety or other risk while waiting for the orthosis/prosthesis? Yes or no, give details</p>
        <table style='border-collapse: collapse; width: 100%; margin: auto; border: 1px solid lightslategray;'>
            <tbody>
                <tr>
                    <td style='border: 1px solid lightslategray; padding: 10px; width: 40%; background-color: lightgrey; font-size: 17px'>Yes</td>
                    <td style='border: 1px solid lightslategray; padding: 10px'>{{part_5_Yes_the_participant_at_safety}}</td>
                </tr>
                <tr>
                    <td style='border: 1px solid lightslategray; padding: 10px; width: 40%;background-color: lightgrey; font-size: 17px'>No</td>
                    <td style='border: 1px solid lightslategray; padding: 10px'>{{part_5_No_the_participant_at_safety}}</td>
                </tr>
                <tr>
                    <td style='border: 1px solid lightslategray; padding: 10px; width: 40%;background-color: lightgrey; font-size: 17px'>Details</td>
                    <td style='border: 1px solid lightslategray; padding: 10px'>{{part_3_detail25}}</td>
                </tr>
            </tbody>
        </table>
        <p style='font-size:12pt;'>4.1.8 Is a short term option necessary? E.g. immediate repair on current or prefabricated item to trial or rent to ensure safety prior to final orthosis/prosthesis provision. Yes or no, give details.</p>
        <table style='border-collapse: collapse; width: 100%; margin: auto; border: 1px solid lightslategray;'>
            <tbody>
                <tr>
                    <td style='border: 1px solid lightslategray; padding: 10px; width: 40%; background-color: lightgrey; font-size: 17px'>Yes</td>
                    <td style='border: 1px solid lightslategray; padding: 10px'>{{part_5_yes_short_term_option_is_necessary}}</td>
                </tr>
                <tr>
                    <td style='border: 1px solid lightslategray; padding: 10px; width: 40%;background-color: lightgrey; font-size: 17px'>No</td>
                    <td style='border: 1px solid lightslategray; padding: 10px'>{{part_5_No_short_term_option_is_not_necessary}}</td>
                </tr>
                <tr>
                    <td style='border: 1px solid lightslategray; padding: 10px; width: 40%;background-color: lightgrey; font-size: 17px'>Details</td>
                    <td style='border: 1px solid lightslategray; padding: 10px'>{{part_3_detail26}}</td>
                </tr>
            </tbody>
        </table>
        <p style='font-weight:bold; font-size:13pt;margin-top:20px; margin-bottom:20px;'>4.2	Participant Agreement</p>
        <p style='font-size:12pt;'>Do AT Assessor and Participant agree on the recommended option?</p>
        <table style='border-collapse: collapse; width: 100%; margin: auto; border: 1px solid lightslategray;'>
            <tbody>
                <tr>
                    <td style='border: 1px solid lightslategray; padding: 10px; width: 40%; background-color: lightgrey; font-size: 17px'>Yes</td>
                    <td style='border: 1px solid lightslategray; padding: 10px'>{{part_5_Yes_AT_Assessor_and_Participant_agree}}</td>
                </tr>
                <tr>
                    <td style='border: 1px solid lightslategray; padding: 10px; width: 40%;background-color: lightgrey; font-size: 17px'>No</td>
                    <td style='border: 1px solid lightslategray; padding: 10px'>{{part_5_No_AT_Assessor_and_Participant_does_not_agree}}</td>
                </tr>
                <tr>
                    <td style='border: 1px solid lightslategray; padding: 10px; width: 40%;background-color: lightgrey; font-size: 17px'>Details</td>
                    <td style='border: 1px solid lightslategray; padding: 10px'>{{part_3_detail27}}</td>
                </tr>
            </tbody>
        </table>
        <p></p>";

      $section5 = "<table style='background-color:#7209B7; border:none; width:100%;'>
        <tr>
            <td>
                <p style='font-size:12pt; font-weight:bold; margin-top:5px; margin-bottom:5px; color: white'>PART 5 – Details of Assistive Technology Assessor</p>
            </td>
        </tr>
        </table>
        <p style='font-weight:bold; font-size:13pt;margin-top:20px; margin-bottom:20px;'>DECLARATION</p> <p style='margin-bottom: 10px'>(indicate all relevant sections that apply)</p>
        <table style=' width:100%; border: 1px solid black;'>
        <tr>
        <td style='width:80%; background-color: lightgrey; font-size: 17px;'>I certify that I meet the NDIA expectations of AT assessor provider suitability (including understanding of the current NDIS Act, Rules and Operational Guidelines) to assess the type of assistive technology and associated supports, at the level of complexity required by this participant.</td>
        <td style='width:20%; border: 1px solid black;'>{{part_5_details_of_assistive_technology_assessor_01}}</td>
        </tr>
        <tr>
        <td style='width:80%; background-color: lightgrey; font-size: 17px;'>I will provide appropriate evidence to the NDIA and/or NDIS Quality and Safeguards Commission if and as requested.</td>
        <td style='width:20%; border: 1px solid black;'>{{part_5_details_of_assistive_technology_assessor_02}}</td>
        </tr>
        <tr>
        <td style='width:80%; background-color: lightgrey; font-size: 17px;'>I understand and acknowledge that the NDIA and participant will rely on my professional advice to select, source and implement this assistive technology.</td>
        <td style='width:20%; border: 1px solid black;'>{{part_5_details_of_assistive_technology_assessor_03}}</td>
        </tr>
        <tr>
        <td style='width:80%; background-color: lightgrey; font-size: 17px;'>This assistive technology has been assessed by the treating multi-disciplinary team and I have completed the AT assessment on behalf of that team.</td>
        <td style='width:20%; border: 1px solid black;'>{{part_5_details_of_assistive_technology_assessor_04}}</td>
        </tr>
        </table>
        <p style='margin-top:10px'></p>
        <p style='font-weight:bold; font-size:13pt;margin-top:20px; margin-bottom:20px;'>Assessor’s Details </p>
        <p style='margin-bottom: 10px'>You must be able to provide evidence of competence in assessing AT needs at this level on request from NDIS Auditor</p>
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
                <td style='border: 1px solid lightslategray; padding: 10px'>{{part_5_details_of_assistive_technology_assessor_05}}</td>
                </tr>
                <tr>
                <td style='border: 1px solid lightslategray; padding: 10px; width: 40%;background-color: lightgrey; font-size: 17px'>NDIS Provider Registration number (where applicable)</td>
                <td style='border: 1px solid lightslategray; padding: 10px'>{{part_5_details_of_assistive_technology_assessor_06}}</td>
                </tr>
                <tr>
                <td style='border: 1px solid lightslategray; padding: 10px; width: 40%; background-color: lightgrey; font-size: 17px'>Phone</td>
                <td style='border: 1px solid lightslategray; padding: 10px'>{{part_5_details_of_assistive_technology_assessor_07}}</td>
                </tr>
                <tr>
                <td style='border: 1px solid lightslategray; padding: 10px; width: 40%;background-color: lightgrey; font-size: 17px'>Email</td>
                <td style='border: 1px solid lightslategray; padding: 10px'>{{part_5_details_of_assistive_technology_assessor_08}}</td>
                </tr>
                <tr>
                <td style='border: 1px solid lightslategray; padding: 10px; width: 40%;background-color: lightgrey; font-size: 17px'>Signature</td>
                <td style='border: 1px solid lightslategray; padding: 10px'>{{part_5_details_of_assistive_technology_assessor_09}}</td>
                </tr>
                <tr>
                <td style='border: 1px solid lightslategray; padding: 10px; width: 40%;background-color: lightgrey; font-size: 17px'>Qualification</td>
                <td style='border: 1px solid lightslategray; padding: 10px'>{{part_5_details_of_assistive_technology_assessor_10}}</td>
                </tr>
                <tr>
                <td style='border: 1px solid lightslategray; padding: 10px; width: 40%;background-color: lightgrey; font-size: 17px'>Date of Assessment(s)</td>
                <td style='border: 1px solid lightslategray; padding: 10px'>{{part_5_details_of_assistive_technology_assessor_11}}</td>
                </tr>
                <tr>
                <td style='border: 1px solid lightslategray; padding: 10px; width: 40%;background-color: lightgrey; font-size: 17px'>Date of Report</td>
                <td style='border: 1px solid lightslategray; padding: 10px'>{{part_5_details_of_assistive_technology_assessor_12}}</td>
                </tr>
            </tbody>
        </table>";

      $section6 = '<table style="background-color:#7209B7; border:none; width:100%;">
        <tr>
          <td>
              <p style="font-size:12pt; font-weight:bold; margin-top:5px; margin-bottom:5px; color: white"> PART 6 – Consent to Collect and Share Your Information – Provider AT Assessment and Quotation(s)</p>
          </td>
        </tr>
        </table>
        <p style="font-weight:bold; font-size:13pt;margin-top:20px; margin-bottom:20px;">For the participant to complete</p>
        <p style="font-size:12pt;">As a participant who requires assistive technology supports, the National Disability Insurance Agency (NDIA) may need to contact your AT assessor and / or AT supplier to discuss information within your assistive technology assessment and quotation(s). This will assist the NDIA with determining whether your request for assistive technology support(s) can be provided to you under the NDIS. Do you consent to the NDIA collecting and disclosing your information including from these third parties mentioned above, in relation to your assistive technology assessment and quotation?</p>
        
        <table style=" width:100%; border: 1px solid black;">
        <tr>
          <td style="width:40%;">Yes, I consent</td>
          <td style="width: 60%; border: 1px solid black;">{{part_6_consent_to_collect_and_share_your_information_01}}</td>
        </tr>
        <tr>
          <td style="width:40%;">No, I do not consent</td>
          <td style="width: 60%; border: 1px solid black;">{{part_6_consent_to_collect_and_share_your_information_02}}</td>
        </tr>
        <tr>
          <td style="width:40%;">Participants Signature</td>
          <td style="width: 60%; border: 1px solid black;">{{part_6_consent_to_collect_and_share_your_information_03}}</td>
        </tr>
        <tr>
          <td style="width:80%;">I understand that I am giving consent to the NDIA to do the things with my information set out in this section. I understand that I can withdraw my consent for the NDIS to do things with my information at any time by letting the NDIA know.</td>
          <td style="width: 20%; border: 1px solid black;">{{part_6_consent_to_collect_and_share_your_information_04}}</td>
        </tr>
        <tr>
          <td style="width:80%;">I understand that I can access the NDIA’s Privacy Notice and Privacy Policy on the NDIA website or by contacting the NDIA.</td>
          <td style="width: 20%; border: 1px solid black;">{{part_6_consent_to_collect_and_share_your_information_05}}</td>
        </tr>
        <tr>
          <td style="width:40%;">Signature</td>
          <td style="width: 60%; border: 1px solid black;">{{part_6_consent_to_collect_and_share_your_information_06}}</td>
        </tr>
        <tr>
          <td style="width:40%;">Date</td>
          <td style="width: 60%; border: 1px solid black;">{{part_6_consent_to_collect_and_share_your_information_07}}</td>
        </tr>
        <tr>
          <td style="width:40%;">Full name</td>
          <td style="width: 60%; border: 1px solid black;">{{part_6_consent_to_collect_and_share_your_information_08}}</td>
        </tr>
        </table>
        <p style="font-weight:bold; font-size:13pt;margin-top:20px; margin-bottom:20px;">If you have signed this Form on behalf of the NDIS participant,</p>
        <p style="font-size:12pt;">please complete the details below. It is an offence to provide false or misleading information.</p>
        <p style="font-size:12pt;">We may require you to provide evidence of your authority to sign on behalf of the person.</p>
        
        <table style=" width:100%; border: 1px solid black;">
        <tr>
          <td style="width:40%;">Signature</td>
          <td style="width: 60%; border: 1px solid black;">{{part_6_consent_to_collect_and_share_your_information_09}}</td>
        </tr>
        <tr>
          <td style="width:40%;">Date</td>
          <td style="width: 60%; border: 1px solid black;">{{part_6_consent_to_collect_and_share_your_information_10}}</td>
        </tr>
        <tr>
          <td style="width:40%;">Full Name of person completing this form (please print):</td>
          <td style="width: 60%; border: 1px solid black;">{{part_6_consent_to_collect_and_share_your_information_11}}</td>
        </tr>
        <tr>
          <td style="width:40%;">Relationship to participant or person wishing to become an NDIS participant:</td>
          <td style="width: 60%; border: 1px solid black;">{{part_6_consent_to_collect_and_share_your_information_12}}</td>
        </tr>
        </table>
        <p></p>';

      $form_fields = '[
         {
            "type":"heading",
            "required":false,
            "label_1":"1.1 NDIS Participant Details",
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
                     "placeholder":"Enter Your Agency Managed",
                     "className":"form-control",
                     "name":"part_1_plan_management_agency_managed",
                     "access":false,
                     "subtype":"text"
                     },
                     {
                     "type":"text",
                     "required":false,
                     "label":"Self-Managed",
                     "placeholder":"Self-Managed",
                     "className":"form-control",
                     "name":"part_1_plan_management_self_managed",
                     "access":false,
                     "subtype":"text"
                     },
                     {
                     "type":"text",
                     "required":false,
                     "label":"Registered Plan Management Provider",
                     "placeholder":"Enter Registered Plan Management Provider",
                     "className":"form-control",
                     "name":"part_1_plan_management_registered_plan_management_provider",
                     "access":false,
                     "subtype":"text"
                     },
                     {
                         "type":"text",
                         "required":false,
                         "label":"Contact Details ",
                         "placeholder":"Enter Contact Details ",
                         "className":"form-control",
                         "name":"part_1_plan_management_contact_details",
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
            "label_3":"General: Describe participant’s current status which may include diagnosis, prognosis, co-existing conditions, disability, personal and instrumental activities of daily living, formal and informal support arrangements and life transitions.",
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
               "label_1":"2.2 Participant Goals ",
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
               "placeholder":"Enter Participant Goals",
               "className":"form-control",
               "name":"part_2_participant_goals",
               "access":false,
               "subtype":"text"
            },
            {
               "type":"heading",
               "required":false,
               "label_1":"2.3 Functional Assessment",
               "label_2":"",
               "label_3":"Summarise the assessment findings relevant to your recommendations (include aspects such as range of motion, strength, interpretation of valid outcome measure findings etc. as appropriate) and explain the impact on life roles. *NDIS expects valid and reliable outcome measures are conducted, where possible, and records held by AT assessor for NDIS audit purposes. (e.g. AMPPRO, DASH)",
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
               "name":"part_2_functional_assessment",
               "access":false,
               "subtype":"text"
            },
            {
               "type":"heading",
               "required":false,
               "label_1":"",
               "label_2":"",
               "label_3":"What are the applicant’s measurements?",
               "placeholder":"Full Name",
               "className":"form-control",
               "name":"part_2_heading_extra_4",
               "access":false
            },
            {
               "type":"text",
               "required":false,
               "label":"Height in cm",
               "placeholder":"Enter Height in cm",
               "className":"form-control",
               "name":"part_2_height_in_cm",
               "access":false,
               "subtype":"text"
            },
            {
               "type":"text",
               "required":false,
               "label":"Weight in KG",
               "placeholder":"Enter Weight in KG",
               "className":"form-control",
               "name":"part_2_weight_in_kg",
               "access":false,
               "subtype":"text"
            },
            {
               "type":"heading",
               "required":false,
               "label_1":"2.4 Current AT in use",
               "label_2":"",
               "label_3":"If it is the view of the NDIS participant or AT assessor that another relevant item of AT involved in goal achievement needs to be reassessed before this P&O assessment progresses, contact should be made with Participant’s LAC and/or Support Plan Coordinator at this point (e.g. where an Occupational Therapy upper limb assessment is required before a prosthetic recommendation can be made). \n*Document ‘Type of AT’ in detail; e.g. “jointed ankle foot orthosis with XX shells and XX joints”, or specific component name of prosthetic knees and feet. \n**Note: To add rows for additional items navigate to any column. Either right mouse click or select the right context menu, move to and select Insert…move to and select Insert below to add a row. Repeat as required.",
               "placeholder":"Full Name",
               "className":"form-control",
               "name":"part_2_heading_extra_5",
               "access":false
            },
            {
               "type":"heading",
               "required":false,
               "label_1":"",
               "label_2":"",
               "label_3":"Data Entry Row 1",
               "placeholder":"Full Name",
               "className":"form-control",
               "name":"part_2_heading_extra_6",
               "access":false
            },
            {
               "type":"text",
               "required":false,
               "label":"Type of AT",
               "placeholder":"Enter Type of AT",
               "className":"form-control",
               "name":"part_2_type_of_at1",
               "access":false,
               "subtype":"text"
            },
            {
               "type":"text",
               "required":false,
               "label":"Usage",
               "placeholder":"Enter Usage",
               "className":"form-control",
               "name":"part_2_usage1",
               "access":false,
               "subtype":"text"
            },
            {
               "type":"text",
               "required":false,
               "label":"Participant’s report of suitability",
               "placeholder":"Enter Participant’s report of suitability",
               "className":"form-control",
               "name":"part_2_participant’s_report_of_suitability1",
               "access":false,
               "subtype":"text"
            },
            {
               "type":"checkbox-group",
               "required":false,
               "label":"Does it need reassessment?",
               "toggle":false,
               "inline":false,
               "name":"part_2_does_it_need_reassessment1",
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
               "label_1":"",
               "label_2":"",
               "label_3":"Data Entry Row 2",
               "placeholder":"Full Name",
               "className":"form-control",
               "name":"part_2_heading_extra_7",
               "access":false
            },
            {
               "type":"text",
               "required":false,
               "label":"Type of AT",
               "placeholder":"Enter Type of AT",
               "className":"form-control",
               "name":"part_2_type_of_at2",
               "access":false,
               "subtype":"text"
            },
            {
               "type":"text",
               "required":false,
               "label":"Usage",
               "placeholder":"Enter Usage",
               "className":"form-control",
               "name":"part_2_usage2",
               "access":false,
               "subtype":"text"
            },
            {
               "type":"text",
               "required":false,
               "label":"Participant’s report of suitability",
               "placeholder":"Enter Participant’s report of suitability",
               "className":"form-control",
               "name":"part_2_participant’s_report_of_suitability2",
               "access":false,
               "subtype":"text"
            },
            {
               "type":"checkbox-group",
               "required":false,
               "label":"Does it need reassessment?",
               "toggle":false,
               "inline":false,
               "name":"part_2_does_it_need_reassessment2",
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
               "label_1":"",
               "label_2":"",
               "label_3":"Data Entry Row 3",
               "placeholder":"Full Name",
               "className":"form-control",
               "name":"part_2_heading_extra_8",
               "access":false
            },
            {
               "type":"text",
               "required":false,
               "label":"Type of AT",
               "placeholder":"Enter Type of AT",
               "className":"form-control",
               "name":"part_2_type_of_at3",
               "access":false,
               "subtype":"text"
            },
            {
               "type":"text",
               "required":false,
               "label":"Usage",
               "placeholder":"Enter Usage",
               "className":"form-control",
               "name":"part_2_usage3",
               "access":false,
               "subtype":"text"
            },
            {
               "type":"text",
               "required":false,
               "label":"Participant’s report of suitability",
               "placeholder":"Enter Participant’s report of suitability",
               "className":"form-control",
               "name":"part_2_participant’s_report_of_suitability3",
               "access":false,
               "subtype":"text"
            },
            {
               "type":"checkbox-group",
               "required":false,
               "label":"Does it need reassessment?",
               "toggle":false,
               "inline":false,
               "name":"part_2_does_it_need_reassessment3",
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
               "label_1":"",
               "label_2":"2.4.1 Outline any disability related functional limitation/s which need to be addressed to pursue the stated goal(s). Describe any limitations such as malfunctioning AT, no prior access to this AT etc. If no functional limitation changes, indicate why AT requires replacement in the plan period (e.g. ill-fitting).",
               "label_3":"",
               "placeholder":"Full Name",
               "className":"form-control",
               "name":"part_2_heading_extra_9",
               "access":false
            },
            {
               "type":"textarea",
               "required":false,
               "label":"",
               "placeholder":"Enter Outline any disability",
               "className":"form-control",
               "name":"part_2_outline_any_disability",
               "access":false,
               "subtype":"text"
            }
         ]';

      $form_fields3 = '[
         {
            "type":"heading",
            "required":false,
            "label_1":"3.1 Evaluation of other options",
            "label_2":"",
            "label_3":"Please provide information on alternatives considered to pursue goal/s including repairs, adjustments, therapy or AT training, and reasons why they were not considered suitable. Note that NDIA will generally fund the most cost-effective option, usually the minimum necessary componentry to pursue the goals, so lowest cost solutions must be considered. Where trials have been conducted or alternative AT used in the past, please give details of where the trials/use took place, for how long and the outcomes. Where necessary add further lines and/or attach further detail \n**Note: To add rows for additional items navigate to any column. Either right mouse click or select the right context menu, move to and select Insert…move to and select Insert below to add a row. Repeat as required.",
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
            "label_3":"Data Entry Row 1",
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
               "label":"Describe the features or functions of AT solutions  and other options trialled  to address the goal",
               "placeholder":"Enter Potential Option",
               "className":"form-control",
               "name":"part_3_con_option_potential_option1",
               "access":false,
               "subtype":"text"
            },
            {
               "type":"text",
               "required":false,
               "label":"Trialled (T) or considered (C)? Include trial details",
               "placeholder":"Enter Trial Details",
               "className":"form-control",
               "name":"part_3_con_option_trial_option1",
               "access":false,
               "subtype":"text"
            },
            {
               "type":"text",
               "required":false,
               "label":"Describe why it was not considered suitable (not applicable for the preferred option)",
               "placeholder":"Enter Disadvantage",
               "className":"form-control",
               "name":"part_3_con_option_disdvantage1",
               "access":false,
               "subtype":"text"
            },
            {
               "type":"text",
               "required":false,
               "label":"Estimated cost (include training)",
               "placeholder":"Enter Cost (include training)",
               "className":"form-control",
               "name":"part_3_con_option_cost1",
               "access":false,
               "subtype":"text"
            },
            {
               "type":"heading",
               "required":false,
               "label_1":"",
               "label_2":"",
               "label_3":"Data Entry Row 2",
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
               "label":"Describe the features or functions of AT solutions  and other options trialled  to address the goal",
               "placeholder":"Enter Potential Option",
               "className":"form-control",
               "name":"part_3_con_option_potential_option2",
               "access":false,
               "subtype":"text"
            },
            {
               "type":"text",
               "required":false,
               "label":"Trialled (T) or considered (C)? Include trial details",
               "placeholder":"Enter Trial Details",
               "className":"form-control",
               "name":"part_3_con_option_trial_option2",
               "access":false,
               "subtype":"text"
            },
            {
               "type":"text",
               "required":false,
               "label":"Describe why it was not considered suitable (not applicable for the preferred option)",
               "placeholder":"Enter Disadvantage",
               "className":"form-control",
               "name":"part_3_con_option_disdvantage2",
               "access":false,
               "subtype":"text"
            },
            {
               "type":"text",
               "required":false,
               "label":"Estimated cost (include training)",
               "placeholder":"Enter Cost (include training)",
               "className":"form-control",
               "name":"part_3_con_option_cost2",
               "access":false,
               "subtype":"text"
            },
            {
               "type":"heading",
               "required":false,
               "label_1":"",
               "label_2":"",
               "label_3":"Data Entry Row 3",
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
               "label":"Describe the features or functions of AT solutions  and other options trialled  to address the goal",
               "placeholder":"Enter Potential Option",
               "className":"form-control",
               "name":"part_3_con_option_potential_option3",
               "access":false,
               "subtype":"text"
            },
            {
               "type":"text",
               "required":false,
               "label":"Trialled (T) or considered (C)? Include trial details",
               "placeholder":"Enter Trial Details",
               "className":"form-control",
               "name":"part_3_con_option_trial_option3",
               "access":false,
               "subtype":"text"
            },
            {
               "type":"text",
               "required":false,
               "label":"Describe why it was not considered suitable (not applicable for the preferred option)",
               "placeholder":"Enter Disadvantage",
               "className":"form-control",
               "name":"part_3_con_option_disdvantage3",
               "access":false,
               "subtype":"text"
            },
            {
               "type":"text",
               "required":false,
               "label":"Estimated cost (include training)",
               "placeholder":"Enter Cost (include training)",
               "className":"form-control",
               "name":"part_3_con_option_cost3",
               "access":false,
               "subtype":"text"
            },
            {
               "type":"heading",
               "required":false,
               "label_1":"",
               "label_2":"",
               "label_3":"Data Entry Row 4",
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
               "label":"Describe the features or functions of AT solutions  and other options trialled  to address the goal",
               "placeholder":"Enter Potential Option",
               "className":"form-control",
               "name":"part_3_con_option_potential_option4",
               "access":false,
               "subtype":"text"
            },
            {
               "type":"text",
               "required":false,
               "label":"Trialled (T) or considered (C)? Include trial details",
               "placeholder":"Enter Trial Details",
               "className":"form-control",
               "name":"part_3_con_option_trial_option4",
               "access":false,
               "subtype":"text"
            },
            {
               "type":"text",
               "required":false,
               "label":"Describe why it was not considered suitable (not applicable for the preferred option)",
               "placeholder":"Enter Disadvantage",
               "className":"form-control",
               "name":"part_3_con_option_disdvantage4",
               "access":false,
               "subtype":"text"
            },
            {
               "type":"text",
               "required":false,
               "label":"Estimated cost (include training)",
               "placeholder":"Enter Cost (include training)",
               "className":"form-control",
               "name":"part_3_con_option_cost4",
               "access":false,
               "subtype":"text"
            },
            {
               "type":"heading",
               "required":false,
               "label_1":"",
               "label_2":"3.2 Recommended Solution (specification in Section 4)",
               "label_3":"",
               "placeholder":"Full Name",
               "className":"form-control",
               "name":"part_3_heading_extra_6",
               "access":false
            },
            {
               "type":"heading",
               "required":false,
               "label_1":"",
               "label_2":"",
               "label_3":"Data Entry Row 1",
               "placeholder":"Full Name",
               "className":"form-control",
               "name":"part_3_heading_extra_7",
               "access":false
            },
            {
               "type":"text",
               "required":false,
               "label":"Describe the features or functions of solution  that address the goal and functional need",
               "placeholder":"Enter Feature",
               "className":"form-control",
               "name":"part_3_feature_option1",
               "access":false,
               "subtype":"text"
            },
            {
               "type":"text",
               "required":false,
               "label":"Include any trial details",
               "placeholder":"Enter Trial Details",
               "className":"form-control",
               "name":"part_3_trial_details1",
               "access":false,
               "subtype":"text"
            },
            {
               "type":"text",
               "required":false,
               "label":"Estimated cost (include training",
               "placeholder":"Enter Feature Cost",
               "className":"form-control",
               "name":"part_3_feature_cost1",
               "access":false,
               "subtype":"text"
            },
            {
               "type":"heading",
               "required":false,
               "label_1":"",
               "label_2":"",
               "label_3":"Data Entry Row 2",
               "placeholder":"Full Name",
               "className":"form-control",
               "name":"part_3_heading_extra_8",
               "access":false
            },
            {
               "type":"text",
               "required":false,
               "label":"Describe the features or functions of solution  that address the goal and functional need",
               "placeholder":"Enter Feature",
               "className":"form-control",
               "name":"part_3_feature_option2",
               "access":false,
               "subtype":"text"
            },
            {
               "type":"text",
               "required":false,
               "label":"Include any trial details",
               "placeholder":"Enter Trial Details",
               "className":"form-control",
               "name":"part_3_trial_details2",
               "access":false,
               "subtype":"text"
            },
            {
               "type":"text",
               "required":false,
               "label":"Estimated cost (include training",
               "placeholder":"Enter Feature Cost",
               "className":"form-control",
               "name":"part_3_feature_cost2",
               "access":false,
               "subtype":"text"
            },
            {
               "type":"heading",
               "required":false,
               "label_1":"3.3 Evidence",
               "label_2":"",
               "label_3":"Explain the evidence for the recommended option as the most suitable and cost-effective, which will facilitate pursuit of the participant’s goal(s), facilitate participation, and/or improve life stage outcomes, compared to others considered (e.g. trial outcomes and consideration of long term benefit in both current and anticipated future needs, change/adjustment to personal care support need etc.). Particularly where a change in AT is recommended, briefly discuss why this is required e.g. rule out all mechanical knee options before considering only microprocessor knee unit options.",
               "placeholder":"Full Name",
               "className":"form-control",
               "name":"part_3_heading_extra_9",
               "access":false
            },
            {
               "type":"textarea",
               "required":false,
               "label":"",
               "placeholder":"Enter Evidence",
               "className":"form-control",
               "name":"part_3_evidence",
               "access":false,
               "subtype":"text"
            },
            {
               "type":"heading",
               "required":false,
               "label_1":"3.4 Identify where change to other supports may be required (noting reduction or addition) for the recommended option including non AT supports and environmental modifications.",
               "label_2":"",
               "label_3":"Results of options review from perspective of participant and P&O assessor.",
               "placeholder":"Full Name",
               "className":"form-control",
               "name":"part_3_heading_extra_10",
               "access":false
            },
            {
               "type":"textarea",
               "required":false,
               "label":"",
               "placeholder":"Identify where change to other supports may be required",
               "className":"form-control",
               "name":"part_3_identify_where_changeto_other_support",
               "access":false,
               "subtype":"text"
            },
            {
               "type":"heading",
               "required":false,
               "label_1":"3.5 Measuring success",
               "label_2":"3.5.1 What are the expected outcomes of providing this recommended support? E.g. specific goals achieved, other supports changed/reduced, etc.?",
               "label_3":"",
               "placeholder":"Full Name",
               "className":"form-control",
               "name":"part_3_heading_extra_11",
               "access":false
            },
            {
               "type":"textarea",
               "required":false,
               "label":"",
               "placeholder":"What are the expected outcomes of providing this recommended support?",
               "className":"form-control",
               "name":"part_3_expected_outcomes",
               "access":false,
               "subtype":"text"
            },
            {
               "type":"heading",
               "required":false,
               "label_1":"",
               "label_2":"3.5.2 How will you measure whether these outcomes have been achieved?",
               "label_3":"",
               "placeholder":"Full Name",
               "className":"form-control",
               "name":"part_3_heading_extra_12",
               "access":false
            },
            {
               "type":"textarea",
               "required":false,
               "label":"",
               "placeholder":"If Outcomes Acheive",
               "className":"form-control",
               "name":"part_3_if_outcomes_achieve",
               "access":false,
               "subtype":"text"
            },
            {
               "type":"heading",
               "required":false,
               "label_1":"",
               "label_2":"3.5.3 When will you measure these outcomes?",
               "label_3":"",
               "placeholder":"Full Name",
               "className":"form-control",
               "name":"part_3_heading_extra_13",
               "access":false
            },
            {
               "type":"textarea",
               "required":false,
               "label":"",
               "placeholder":"Measure These Outcomes",
               "className":"form-control",
               "name":"part_3_measure_these_outcomes",
               "access":false,
               "subtype":"text"
            }
         ]';

      $form_fields4 = '[
         {
            "type":"heading",
            "required":false,
            "label_1":"4.1 Specification/Description of P&O AT solution/device",
            "label_2":"Detail all necessary components required to meet participant’s goal. This must be detailed enough to ensure that reasonable and necessary can be accurately assessed in relation to the information supplied above (the fully completed  Activity, Detail and quantity  columns only of an AOPA  compliant example quotation form can be attached to this form as an alternative) Reference: AOPA  Quotation Development Guidance Quotation Development Tool (https://www.aopa.org.au/sb_cache/events/id/488/f/AOPA-Quotation-Development-Tool-%20Final_2015.pdf)",
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
                "placeholder":"",
                "className":"form-control",
                "name":"part_3_description_of_P&O_AT_solution",
                "access":false,
                "subtype":"text"
             },
             {
               "type":"heading",
               "required":false,
               "label_1":"",
               "label_2":"",
               "label_3":"4.1.1 (Capacity building) Professional assessment, specification, fitting and training",
               "placeholder":"Full Name",
               "className":"form-control",
               "name":"part_4_heading_extra_2",
               "access":false
            },
            {
               "type":"heading",
               "required":false,
               "label_1":"",
               "label_2":"",
               "label_3":"Clinical Assessment",
               "placeholder":"Full Name",
               "className":"form-control",
               "name":"part_4_heading_extra_3",
               "access":false
            },
             {
                "type":"text",
                "required":false,
                "label":"Detail",
                "placeholder":"Enter Detail",
                "className":"form-control",
                "name":"part_3_detail1",
                "access":false,
                "subtype":"text"
             },
             {
                "type":"text",
                "required":false,
                "label":"Quantity (hrs)",
                "placeholder":"Enter Quantity (hrs)",
                "className":"form-control",
                "name":"part_3_quantity1",
                "access":false,
                "subtype":"text"
             },
             {
               "type":"heading",
               "required":false,
               "label_1":"",
               "label_2":"",
               "label_3":"Liaise with other health professionals",
               "placeholder":"Full Name",
               "className":"form-control",
               "name":"part_4_heading_extra_4",
               "access":false
            },
             {
                "type":"text",
                "required":false,
                "label":"Detail",
                "placeholder":"Enter Detail",
                "className":"form-control",
                "name":"part_3_detail2",
                "access":false,
                "subtype":"text"
             },
             {
                "type":"text",
                "required":false,
                "label":"Quantity (hrs)",
                "placeholder":"Enter Quantity (hrs)",
                "className":"form-control",
                "name":"part_3_quantity2",
                "access":false,
                "subtype":"text"
             },
             {
               "type":"heading",
               "required":false,
               "label_1":"",
               "label_2":"",
               "label_3":"Device specification/measurement",
               "placeholder":"Full Name",
               "className":"form-control",
               "name":"part_4_heading_extra_5",
               "access":false
            },
             {
                "type":"text",
                "required":false,
                "label":"Detail",
                "placeholder":"Enter Detail",
                "className":"form-control",
                "name":"part_3_detail3",
                "access":false,
                "subtype":"text"
             },
             {
                "type":"text",
                "required":false,
                "label":"Quantity (hrs)",
                "placeholder":"Enter Quantity (hrs)",
                "className":"form-control",
                "name":"part_3_quantity3",
                "access":false,
                "subtype":"text"
             },
             {
               "type":"heading",
               "required":false,
               "label_1":"",
               "label_2":"",
               "label_3":"Fitting and adjustment",
               "placeholder":"Full Name",
               "className":"form-control",
               "name":"part_4_heading_extra_6",
               "access":false
            },
             {
                "type":"text",
                "required":false,
                "label":"Detail",
                "placeholder":"Enter Detail",
                "className":"form-control",
                "name":"part_3_detail4",
                "access":false,
                "subtype":"text"
             },
             {
                "type":"text",
                "required":false,
                "label":"Quantity (hrs)",
                "placeholder":"Enter Quantity (hrs)",
                "className":"form-control",
                "name":"part_3_quantity4",
                "access":false,
                "subtype":"text"
             },
             {
               "type":"heading",
               "required":false,
               "label_1":"",
               "label_2":"",
               "label_3":"Client education",
               "placeholder":"Full Name",
               "className":"form-control",
               "name":"part_4_heading_extra_7",
               "access":false
            },
             {
                "type":"text",
                "required":false,
                "label":"Detail",
                "placeholder":"Enter Detail",
                "className":"form-control",
                "name":"part_3_detail5",
                "access":false,
                "subtype":"text"
             },
             {
                "type":"text",
                "required":false,
                "label":"Quantity (hrs)",
                "placeholder":"Enter Quantity (hrs)",
                "className":"form-control",
                "name":"part_3_quantity5",
                "access":false,
                "subtype":"text"
             },
             {
               "type":"heading",
               "required":false,
               "label_1":"",
               "label_2":"",
               "label_3":"Ongoing review/s (Identify intervals for first two years)",
               "placeholder":"Full Name",
               "className":"form-control",
               "name":"part_4_heading_extra_8",
               "access":false
            },
             {
                "type":"text",
                "required":false,
                "label":"Detail",
                "placeholder":"Enter Detail",
                "className":"form-control",
                "name":"part_3_detail6",
                "access":false,
                "subtype":"text"
             },
             {
                "type":"text",
                "required":false,
                "label":"Quantity (hrs)",
                "placeholder":"Enter Quantity (hrs)",
                "className":"form-control",
                "name":"part_3_quantity6",
                "access":false,
                "subtype":"text"
             },
             {
               "type":"heading",
               "required":false,
               "label_1":"",
               "label_2":"Capital Building Hours Sub Total (hrs)",
               "label_3":"",
               "placeholder":"Full Name",
               "className":"form-control",
               "name":"part_4_heading_extra_9",
               "access":false
            },
             {
                "type":"text",
                "required":false,
                "label":"",
                "placeholder":"Capital Building Hours Sub Total",
                "className":"form-control",
                "name":"capital_building_hours_sub_total",
                "access":false,
                "subtype":"text"
             },
             {
               "type":"heading",
               "required":false,
               "label_1":"",
               "label_2":"Capital Building Hours x Hourly Rate Sub Total ($) (A)",
               "label_3":"",
               "placeholder":"Full Name",
               "className":"form-control",
               "name":"part_4_heading_extra_10",
               "access":false
            },
             {
                "type":"text",
                "required":false,
                "label":"",
                "placeholder":"Capital Building Hours x Hourly Rate",
                "className":"form-control",
                "name":"capital_building_hours_hour_rate_sub__total",
                "access":false,
                "subtype":"text"
             },
             {
               "type":"heading",
               "required":false,
               "label_1":"",
               "label_2":"",
               "label_3":"4.1.2 (Capital) Labour",
               "placeholder":"Full Name",
               "className":"form-control",
               "name":"part_4_heading_extra_11",
               "access":false
            },
            {
               "type":"heading",
               "required":false,
               "label_1":"",
               "label_2":"",
               "label_3":"Fabrication/modification",
               "placeholder":"Full Name",
               "className":"form-control",
               "name":"part_4_heading_extra_12",
               "access":false
            },
             {
                "type":"text",
                "required":false,
                "label":"Detail",
                "placeholder":"Enter Detail",
                "className":"form-control",
                "name":"part_3_detail7",
                "access":false,
                "subtype":"text"
             },
             {
                "type":"text",
                "required":false,
                "label":"Value ($)",
                "placeholder":"Enter Value ($)",
                "className":"form-control",
                "name":"part_3_quantity7",
                "access":false,
                "subtype":"text"
             },
             {
               "type":"heading",
               "required":false,
               "label_1":"",
               "label_2":"",
               "label_3":"Fitting/s",
               "placeholder":"Full Name",
               "className":"form-control",
               "name":"part_4_heading_extra_13",
               "access":false
            },
             {
                "type":"text",
                "required":false,
                "label":"Detail",
                "placeholder":"Enter Detail",
                "className":"form-control",
                "name":"part_3_detail8",
                "access":false,
                "subtype":"text"
             },
             {
                "type":"text",
                "required":false,
                "label":"Value ($)",
                "placeholder":"Enter Value ($)",
                "className":"form-control",
                "name":"part_3_quantity8",
                "access":false,
                "subtype":"text"
             },
             {
               "type":"heading",
               "required":false,
               "label_1":"",
               "label_2":"",
               "label_3":"Administration",
               "placeholder":"Full Name",
               "className":"form-control",
               "name":"part_4_heading_extra_14",
               "access":false
            },
             {
                "type":"text",
                "required":false,
                "label":"Detail",
                "placeholder":"Enter Detail",
                "className":"form-control",
                "name":"part_3_detail9",
                "access":false,
                "subtype":"text"
             },
             {
                "type":"text",
                "required":false,
                "label":"Value ($)",
                "placeholder":"Enter Value ($)",
                "className":"form-control",
                "name":"part_3_quantity9",
                "access":false,
                "subtype":"text"
             },
             {
               "type":"heading",
               "required":false,
               "label_1":"",
               "label_2":"Capital Labour Sub Total ($) (B)",
               "label_3":"",
               "placeholder":"Full Name",
               "className":"form-control",
               "name":"part_4_heading_extra_15",
               "access":false
            },
             {
                "type":"text",
                "required":false,
                "label":"",
                "placeholder":"Capital Labour Sub Total",
                "className":"form-control",
                "name":"part_3_capital_labour_sub_total",
                "access":false,
                "subtype":"text"
             },
             {
               "type":"heading",
               "required":false,
               "label_1":"",
               "label_2":"",
               "label_3":"4.1.3 Componentry included in specification (Prosthetic) List details using ISO codes.",
               "placeholder":"Full Name",
               "className":"form-control",
               "name":"part_4_heading_extra_16",
               "access":false
            },
            {
               "type":"heading",
               "required":false,
               "label_1":"",
               "label_2":"",
               "label_3":"Connective componentry",
               "placeholder":"Full Name",
               "className":"form-control",
               "name":"part_4_heading_extra_17",
               "access":false
            },
             {
                "type":"text",
                "required":false,
                "label":"Detail",
                "placeholder":"Enter Detail",
                "className":"form-control",
                "name":"part_3_detail10",
                "access":false,
                "subtype":"text"
             },
             {
                "type":"text",
                "required":false,
                "label":"Value ($)",
                "placeholder":"Enter Value ($)",
                "className":"form-control",
                "name":"part_3_quantity10",
                "access":false,
                "subtype":"text"
             },
             {
               "type":"heading",
               "required":false,
               "label_1":"",
               "label_2":"",
               "label_3":"Knee/Elbow",
               "placeholder":"Full Name",
               "className":"form-control",
               "name":"part_4_heading_extra_18",
               "access":false
            },
             {
                "type":"text",
                "required":false,
                "label":"Detail",
                "placeholder":"Enter Detail",
                "className":"form-control",
                "name":"part_3_detail11",
                "access":false,
                "subtype":"text"
             },
             {
                "type":"text",
                "required":false,
                "label":"Value ($)",
                "placeholder":"Enter Value ($)",
                "className":"form-control",
                "name":"part_3_quantity11",
                "access":false,
                "subtype":"text"
             },
             {
               "type":"heading",
               "required":false,
               "label_1":"",
               "label_2":"",
               "label_3":"Foot/Wrist",
               "placeholder":"Full Name",
               "className":"form-control",
               "name":"part_4_heading_extra_19",
               "access":false
            },
             {
                "type":"text",
                "required":false,
                "label":"Detail",
                "placeholder":"Enter Detail",
                "className":"form-control",
                "name":"part_3_detail12",
                "access":false,
                "subtype":"text"
             },
             {
                "type":"text",
                "required":false,
                "label":"Value ($)",
                "placeholder":"Enter Value",
                "className":"form-control",
                "name":"part_3_quantity12",
                "access":false,
                "subtype":"text"
             },
             {
               "type":"heading",
               "required":false,
               "label_1":"",
               "label_2":"",
               "label_3":"Socket/suspension",
               "placeholder":"Full Name",
               "className":"form-control",
               "name":"part_4_heading_extra_20",
               "access":false
            },
             {
                "type":"text",
                "required":false,
                "label":"Detail",
                "placeholder":"Enter Detail",
                "className":"form-control",
                "name":"part_3_detail13",
                "access":false,
                "subtype":"text"
             },
             {
                "type":"text",
                "required":false,
                "label":"Value ($)",
                "placeholder":"Enter Value ($)",
                "className":"form-control",
                "name":"part_3_quantity13",
                "access":false,
                "subtype":"text"
             },
             {
               "type":"heading",
               "required":false,
               "label_1":"",
               "label_2":"",
               "label_3":"Consumables",
               "placeholder":"Full Name",
               "className":"form-control",
               "name":"part_4_heading_extra_21",
               "access":false
            },
             {
                "type":"text",
                "required":false,
                "label":"Detail",
                "placeholder":"Enter Detail",
                "className":"form-control",
                "name":"part_3_detail14",
                "access":false,
                "subtype":"text"
             },
             {
                "type":"text",
                "required":false,
                "label":"Value ($)",
                "placeholder":"Enter Value ($)",
                "className":"form-control",
                "name":"part_3_quantity14",
                "access":false,
                "subtype":"text"
             },
             {
               "type":"heading",
               "required":false,
               "label_1":"",
               "label_2":"Prosthetic Componentry Sub Total ($) (C)",
               "label_3":"",
               "placeholder":"Full Name",
               "className":"form-control",
               "name":"part_4_heading_extra_22",
               "access":false
            },
             {
                "type":"text",
                "required":false,
                "label":"",
                "placeholder":"Prosthetic Componentry Sub Total ($) (C)",
                "className":"form-control",
                "name":"part_3_Prosthetic_Componentry_Sub_Total",
                "access":false,
                "subtype":"text"
             },
             {
               "type":"heading",
               "required":false,
               "label_1":"",
               "label_2":"",
               "label_3":"Fabrication materials",
               "placeholder":"Full Name",
               "className":"form-control",
               "name":"part_4_heading_extra_23",
               "access":false
            },
             {
                "type":"text",
                "required":false,
                "label":"Detail",
                "placeholder":"Enter Detail",
                "className":"form-control",
                "name":"part_3_detail15",
                "access":false,
                "subtype":"text"
             },
             {
                "type":"text",
                "required":false,
                "label":"Value ($)",
                "placeholder":"Enter Value ($)",
                "className":"form-control",
                "name":"part_3_quantity15",
                "access":false,
                "subtype":"text"
             },
             {
               "type":"heading",
               "required":false,
               "label_1":"",
               "label_2":"",
               "label_3":"Ankle Joints (Size; batch number)",
               "placeholder":"Full Name",
               "className":"form-control",
               "name":"part_4_heading_extra_24",
               "access":false
            },
             {
                "type":"text",
                "required":false,
                "label":"FDetail",
                "placeholder":"Enter Detail",
                "className":"form-control",
                "name":"part_3_detail16",
                "access":false,
                "subtype":"text"
             },
             {
                "type":"text",
                "required":false,
                "label":"Value ($)",
                "placeholder":"Enter Value ($)",
                "className":"form-control",
                "name":"part_3_quantity16",
                "access":false,
                "subtype":"text"
             },
             {
               "type":"heading",
               "required":false,
               "label_1":"",
               "label_2":"",
               "label_3":"Knee Joints",
               "placeholder":"Full Name",
               "className":"form-control",
               "name":"part_4_heading_extra_25",
               "access":false
            },
             {
                "type":"text",
                "required":false,
                "label":"Detail",
                "placeholder":"Enter Detail",
                "className":"form-control",
                "name":"part_3_detail17",
                "access":false,
                "subtype":"text"
             },
             {
                "type":"text",
                "required":false,
                "label":"Value ($)",
                "placeholder":"Enter Value ($)",
                "className":"form-control",
                "name":"part_3_quantity17",
                "access":false,
                "subtype":"text"
             },
             {
               "type":"heading",
               "required":false,
               "label_1":"",
               "label_2":"",
               "label_3":"Other Joints",
               "placeholder":"Full Name",
               "className":"form-control",
               "name":"part_4_heading_extra_26",
               "access":false
            },
             {
                "type":"text",
                "required":false,
                "label":"Detail",
                "placeholder":"Enter Detail",
                "className":"form-control",
                "name":"part_3_detail18",
                "access":false,
                "subtype":"text"
             },
             {
                "type":"text",
                "required":false,
                "label":"Value ($)",
                "placeholder":"Enter Value ($)",
                "className":"form-control",
                "name":"part_3_quantity18",
                "access":false,
                "subtype":"text"
             },
             {
               "type":"heading",
               "required":false,
               "label_1":"",
               "label_2":"",
               "label_3":"Prefabricated componentry",
               "placeholder":"Full Name",
               "className":"form-control",
               "name":"part_4_heading_extra_27",
               "access":false
            },
             {
                "type":"text",
                "required":false,
                "label":"Detail",
                "placeholder":"Enter Detail",
                "className":"form-control",
                "name":"part_3_detail19",
                "access":false,
                "subtype":"text"
             },
             {
                "type":"text",
                "required":false,
                "label":"Value ($)",
                "placeholder":"Enter Value ($)",
                "className":"form-control",
                "name":"part_3_quantity19",
                "access":false,
                "subtype":"text"
             },
             {
               "type":"heading",
               "required":false,
               "label_1":"",
               "label_2":"",
               "label_3":"Custom made componentry",
               "placeholder":"Full Name",
               "className":"form-control",
               "name":"part_4_heading_extra_28",
               "access":false
            },
             {
                "type":"text",
                "required":false,
                "label":"Detail",
                "placeholder":"Enter Detail",
                "className":"form-control",
                "name":"part_3_detail20",
                "access":false,
                "subtype":"text"
             },
             {
                "type":"text",
                "required":false,
                "label":"Value ($)",
                "placeholder":"Enter Value ($)",
                "className":"form-control",
                "name":"part_3_quantity20",
                "access":false,
                "subtype":"text"
             },
             {
               "type":"heading",
               "required":false,
               "label_1":"",
               "label_2":"",
               "label_3":"Consumables",
               "placeholder":"Full Name",
               "className":"form-control",
               "name":"part_4_heading_extra_29",
               "access":false
            },
             {
                "type":"text",
                "required":false,
                "label":"Detail",
                "placeholder":"Enter Detail",
                "className":"form-control",
                "name":"part_3_detail21",
                "access":false,
                "subtype":"text"
             },
             {
                "type":"text",
                "required":false,
                "label":"Value ($)",
                "placeholder":"Enter Value ($)",
                "className":"form-control",
                "name":"part_3_quantity21",
                "access":false,
                "subtype":"text"
             },
             {
               "type":"heading",
               "required":false,
               "label_1":"",
               "label_2":"Orthotic Componentry Sub Total ($) (D)",
               "label_3":"",
               "placeholder":"Full Name",
               "className":"form-control",
               "name":"part_4_heading_extra_30",
               "access":false
            },
             {
                "type":"text",
                "required":false,
                "label":"",
                "placeholder":"Orthotic Componentry Sub Total",
                "className":"form-control",
                "name":"part_3_Orthotic_Componentry_Sub_Total",
                "access":false,
                "subtype":"text"
             },
             {
               "type":"heading",
               "required":false,
               "label_1":"",
               "label_2":"Quoted Capital Cost of Total Solution/Device ($) (A + B + C + D)",
               "label_3":"",
               "placeholder":"Full Name",
               "className":"form-control",
               "name":"part_4_heading_extra_31",
               "access":false
            },
             {
                "type":"text",
                "required":false,
                "label":"",
                "placeholder":"Quoted Capital Cost of Total Solution",
                "className":"form-control",
                "name":"part_3_Quoted_Capital_Cost_of_Total_Solution",
                "access":false,
                "subtype":"text"
             },
             {
               "type":"heading",
               "required":false,
               "label_1":"",
               "label_2":"",
               "label_3":"4.1.5 Extra Features. List and Estimate cost of components/accessories (if any) that are desired by the participant but are unlikely to be assessed reasonable and necessary. Does the participant agree to pay for these from their own (not NDIS) funds?",
               "placeholder":"Full Name",
               "className":"form-control",
               "name":"part_4_heading_extra_32",
               "access":false
            },
             {
                "type":"checkbox-group",
                "required":false,
                "label":"Yes",
                "toggle":false,
                "inline":false,
                "name":"part_5_features_if_yes",
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
                "label":"No",
                "toggle":false,
                "inline":false,
                "name":"part_5_features_if_no",
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
               "type":"heading",
               "required":false,
               "label_1":"",
               "label_2":"",
               "label_3":"Data Entry Row 1",
               "placeholder":"Full Name",
               "className":"form-control",
               "name":"part_4_heading_extra_33",
               "access":false
            },
             {
                "type":"text",
                "required":false,
                "label":"Item",
                "placeholder":"Enter Item",
                "className":"form-control",
                "name":"part_3_item22",
                "access":false,
                "subtype":"text"
             },
             {
                "type":"text",
                "required":false,
                "label":"Detail",
                "placeholder":"Enter Details",
                "className":"form-control",
                "name":"part_3_detail22",
                "access":false,
                "subtype":"text"
             },
             {
                "type":"text",
                "required":false,
                "label":"Cost Estimate($)",
                "placeholder":"Enter Cost Estimate($)",
                "className":"form-control",
                "name":"part_3_quantity22",
                "access":false,
                "subtype":"text"
             },
             {
               "type":"heading",
               "required":false,
               "label_1":"",
               "label_2":"",
               "label_3":"Data Entry Row 2",
               "placeholder":"Full Name",
               "className":"form-control",
               "name":"part_4_heading_extra_34",
               "access":false
            },
             {
                "type":"text",
                "required":false,
                "label":"Item",
                "placeholder":"Enter Item",
                "className":"form-control",
                "name":"part_3_item23",
                "access":false,
                "subtype":"text"
             },
             {
                "type":"text",
                "required":false,
                "label":"Detail",
                "placeholder":"Enter Detail",
                "className":"form-control",
                "name":"part_3_detail23",
                "access":false,
                "subtype":"text"
             },
             {
                "type":"text",
                "required":false,
                "label":"Cost Estimate($)",
                "placeholder":"Enter Cost Estimate($)",
                "className":"form-control",
                "name":"part_3_quantity23",
                "access":false,
                "subtype":"text"
             },
             {
               "type":"heading",
               "required":false,
               "label_1":"",
               "label_2":"",
               "label_3":"Data Entry Row 3",
               "placeholder":"Full Name",
               "className":"form-control",
               "name":"part_4_heading_extra_35",
               "access":false
            },
             {
                "type":"text",
                "required":false,
                "label":"Item",
                "placeholder":"Enter Item",
                "className":"form-control",
                "name":"part_3_item24",
                "access":false,
                "subtype":"text"
             },
             {
                "type":"text",
                "required":false,
                "label":"Details",
                "placeholder":"Enter Details",
                "className":"form-control",
                "name":"part_3_detail24",
                "access":false,
                "subtype":"text"
             },
             {
                "type":"text",
                "required":false,
                "label":"Cost Estimate($)",
                "placeholder":"Enter Cost Estimate($)",
                "className":"form-control",
                "name":"part_3_quantity24",
                "access":false,
                "subtype":"text"
             },
             {
               "type":"heading",
               "required":false,
               "label_1":"",
               "label_2":"",
               "label_3":"4.1.6 The participant must be provided with maintenance and servicing information for their prosthetic/orthotic to remain in good working order. When will this be done? What are the warranty periods applying?",
               "placeholder":"Full Name",
               "className":"form-control",
               "name":"part_4_heading_extra_36",
               "access":false
            },
             {
                "type":"textarea",
                "required":false,
                "label":"",
                "placeholder":"The participant must be provided with maintenance and servicing information",
                "className":"form-control",
                "name":"part_3_The_participant_must_be_provided",
                "access":false,
                "subtype":"text"
             },
             {
               "type":"heading",
               "required":false,
               "label_1":"",
               "label_2":"",
               "label_3":"Time from funding approval to expected  orthosis/prosthesis provision (weeks):?",
               "placeholder":"Full Name",
               "className":"form-control",
               "name":"part_4_heading_extra_37",
               "access":false
            },
             {
                "type":"text",
                "required":false,
                "label":"",
                "placeholder":"Time from funding approval to expected  orthosis/prosthesis provision",
                "className":"form-control",
                "name":"part_3_Time_from_funding_approval",
                "access":false,
                "subtype":"text"
             },
             {
               "type":"heading",
               "required":false,
               "label_1":"",
               "label_2":"",
               "label_3":"4.1.7 Is the participant at safety or other risk while waiting for the orthosis/prosthesis? Yes or no, give details",
               "placeholder":"Full Name",
               "className":"form-control",
               "name":"part_4_heading_extra_38",
               "access":false
            },
             {
                "type":"checkbox-group",
                "required":false,
                "label":"Yes",
                "toggle":false,
                "inline":false,
                "name":"part_5_Yes_the_participant_at_safety",
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
                "label":"No",
                "toggle":false,
                "inline":false,
                "name":"part_5_No_the_participant_at_safety",
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
                "type":"textarea",
                "required":false,
                "label":"Details",
                "placeholder":"Enter Details",
                "className":"form-control",
                "name":"part_3_detail25",
                "access":false,
                "subtype":"text"
             },
             {
               "type":"heading",
               "required":false,
               "label_1":"",
               "label_2":"",
               "label_3":"4.1.8 Is a short term option necessary? E.g. immediate repair on current or prefabricated item to trial or rent to ensure safety prior to final orthosis/prosthesis provision. Yes or no, give details.",
               "placeholder":"Full Name",
               "className":"form-control",
               "name":"part_4_heading_extra_39",
               "access":false
            },
             {
                "type":"checkbox-group",
                "required":false,
                "label":"Yes",
                "toggle":false,
                "inline":false,
                "name":"part_5_yes_short_term_option_is_necessary",
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
                "label":"No",
                "toggle":false,
                "inline":false,
                "name":"part_5_No_short_term_option_is_not_necessary",
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
                "type":"textarea",
                "required":false,
                "label":"Details",
                "placeholder":"Enter Details",
                "className":"form-control",
                "name":"part_3_detail26",
                "access":false,
                "subtype":"text"
             },
             {
               "type":"heading",
               "required":false,
               "label_1":"4.2 Participant Agreement",
               "label_2":"",
               "label_3":"Do AT Assessor and Participant agree on the recommended option?",
               "placeholder":"Full Name",
               "className":"form-control",
               "name":"part_4_heading_extra_40",
               "access":false
            },
             {
                "type":"checkbox-group",
                "required":false,
                "label":"Yes",
                "toggle":false,
                "inline":false,
                "name":"part_5_Yes_AT_Assessor_and_Participant_agree",
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
                "label":"No",
                "toggle":false,
                "inline":false,
                "name":"part_5_No_AT_Assessor_and_Participant_does_not_agree",
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
                "type":"textarea",
                "required":false,
                "label":"Details",
                "placeholder":"Enter Details",
                "className":"form-control",
                "name":"part_3_detail27",
                "access":false,
                "subtype":"text"
             }
        ]';

      $form_fields5 = '[
         {
           "type":"heading",
           "required":false,
           "label_1":"DECLARATION (indicate all relevant sections that apply)",
           "label_2":"",
           "label_3":"",
           "placeholder":"Full Name",
           "className":"form-control",
           "name":"part_5_heading_extra_1",
           "access":false
        },
             {
               "type": "checkbox-group",
               "required": false,
               "label": "I certify that I meet the NDIA expectations of AT assessor provider suitability (including understanding of the current NDIS Act, Rules and Operational Guidelines) to assess the type of assistive technology and associated supports, at the level of complexity required by this participant.",
               "toggle": false,
               "inline": false,
               "name": "part_5_details_of_assistive_technology_assessor_01",
               "access": false,
               "other": false,
               "values": [
                   {
                       "label": "YES/NO",
                       "value": "option-1",
                       "selected": true
                   }
               ]
           },
             {
               "type": "checkbox-group",
               "required": false,
               "label": "I will provide appropriate evidence to the NDIA and/or Quality and Safe Guards Commission if and as requested.",
               "toggle": false,
               "inline": false,
               "name": "part_5_details_of_assistive_technology_assessor_02",
               "access": false,
               "other": false,
               "values": [
                   {
                       "label": "YES/NO",
                       "value": "option-1",
                       "selected": true
                   }
               ]
           },
             {
               "type": "checkbox-group",
               "required": false,
               "label": "I understand and acknowledge that the NDIA and participant will rely on my professional advice to select, source and implement this assistive technology.",
               "toggle": false,
               "inline": false,
               "name": "part_5_details_of_assistive_technology_assessor_03",
               "access": false,
               "other": false,
               "values": [
                   {
                       "label": "YES/NO",
                       "value": "option-1",
                       "selected": true
                   }
               ]
           },
             {
               "type": "checkbox-group",
               "required": false,
               "label": "This assistive technology has been assessed by the treating multi-disciplinary team and I have completed the AT assessment on behalf of that team.",
               "toggle": false,
               "inline": false,
               "name": "part_5_details_of_assistive_technology_assessor_04",
               "access": false,
               "other": false,
               "values": [
                   {
                       "label": "YES/NO",
                       "value": "option-1",
                       "selected": true
                   }
               ]
           },
           {
             "type":"heading",
             "required":false,
             "label_1":"Assessor’s Details",
             "label_2":"",
             "label_3":"",
             "placeholder":"Full Name",
             "className":"form-control",
             "name":"part_5_heading_extra_2",
             "access":false
          },
             {
               "type":"text",
               "required":false,
               "label":"Name",
               "placeholder":"Enter Name",
               "className":"form-control",
               "name":"part_5_details_of_assistive_technology_assessor_05",
               "access":false,
               "subtype":"text"
            },
             {
               "type":"text",
               "required":false,
               "label":"NDIS Provider Registration number (where applicable)",
               "placeholder":"Enter NDIS Provider Registration number (where applicable)",
               "className":"form-control",
               "name":"part_5_details_of_assistive_technology_assessor_06",
               "access":false,
               "subtype":"text"
            },
             {
               "type":"text",
               "required":false,
               "label":"Phone",
               "placeholder":"Enter Phone",
               "className":"form-control",
               "name":"part_5_details_of_assistive_technology_assessor_07",
               "access":false,
               "subtype":"text"
            },
             {
               "type":"text",
               "required":false,
               "label":"Email",
               "placeholder":"Enter Email",
               "className":"form-control",
               "name":"part_5_details_of_assistive_technology_assessor_08",
               "access":false,
               "subtype":"text"
            },
             {
               "type":"text",
               "required":false,
               "label":"Signature",
               "placeholder":"Enter Signature",
               "className":"form-control",
               "name":"part_5_details_of_assistive_technology_assessor_09",
               "access":false,
               "subtype":"text"
            },
             {
               "type":"text",
               "required":false,
               "label":"Qualification",
               "placeholder":"Enter Qualification",
               "className":"form-control",
               "name":"part_5_details_of_assistive_technology_assessor_10",
               "access":false,
               "subtype":"text"
            },
             {
               "type":"date",
               "required":false,
               "label":"Date of Assessment",
               "placeholder":"Date of Assessment",
               "className":"form-control",
               "name":"part_5_details_of_assistive_technology_assessor_11",
               "access":false,
               "subtype":"textarea"
             },
             {
               "type":"date",
               "required":false,
               "label":"Date of Report",
               "placeholder":"Date of Report",
               "className":"form-control",
               "name":"part_5_details_of_assistive_technology_assessor_12",
               "access":false,
               "subtype":"textarea"
             }
         ]';

      $form_fields6 = '[
            {
              "type":"heading",
              "required":false,
              "label_1":"For the participant to complete",
              "label_2":"",
              "label_3":"As a participant who requires assistive technology supports, the National Disability Insurance Agency (NDIA) may need to contact your AT assessor and / or AT supplier to discuss information within your assistive technology assessment and quotation(s). This will assist the NDIA with determining whether your request for assistive technology support(s) can be provided to you under the NDIS. Do you consent to the NDIA collecting and disclosing your information including from these third parties mentioned above, in relation to your assistive technology assessment and quotation?",
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
                  "name":"part_6_consent_to_collect_and_share_your_information_01",
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
                  "type":"checkbox-group",
                  "required":false,
                  "label":"No, I do not consent",
                  "toggle":false,
                  "inline":false,
                  "name":"part_6_consent_to_collect_and_share_your_information_02",
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
                  "type":"checkbox-group",
                  "required":false,
                  "label":"Participant’s Signature",
                  "toggle":false,
                  "inline":false,
                  "name":"part_6_consent_to_collect_and_share_your_information_03",
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
                  "type":"checkbox-group",
                  "required":false,
                  "label":"I understand that I am giving consent to the NDIA to do the things with my information set out in this section. I understand that I can withdraw my consent for the NDIS to do things with my information at any time by letting the NDIA know.",
                  "toggle":false,
                  "inline":false,
                  "name":"part_6_consent_to_collect_and_share_your_information_04",
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
                  "type":"checkbox-group",
                  "required":false,
                  "label":"I understand that I can access the NDIA’s Privacy Notice and Privacy Policy on the NDIA website(https://www.ndis.gov.au/about-us/operational-guidelines/information-handling-operational-guideline/information-handling-operational-guideline-privacy) or by contacting the NDIA (https://www.ndis.gov.au/contact).",
                  "toggle":false,
                  "inline":false,
                  "name":"part_6_consent_to_collect_and_share_your_information_05",
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
                  "type": "text",
                  "required": false,
                  "label": "Signature",
                  "placeholder": "Signature",
                  "className": "form-control",
                  "name": "part_6_consent_to_collect_and_share_your_information_06",
                  "access": false,
                  "subtype": "text"
              },
                {
                  "type":"date",
                  "required":false,
                  "label":"Date",
                  "placeholder":"Date",
                  "className":"form-control",
                  "name":"part_6_consent_to_collect_and_share_your_information_07",
                  "access":false,
                  "subtype":"textarea"
                },
                {
                  "type": "text",
                  "required": false,
                  "label": "Full name",
                  "placeholder": "Enter Full name",
                  "className": "form-control",
                  "name": "part_6_consent_to_collect_and_share_your_information_08",
                  "access": false,
                  "subtype": "text"
              },
              {
                "type":"heading",
                "required":false,
                "label_1": "",
                "label_2": "",
                "label_3": "If you have signed this Form on behalf of the NDIS participant, please complete the details below. It is an offence to provide false or misleading information. \nWe may require you to provide evidence of your authority to sign on behalf of the person.",
                "placeholder":"Full Name",
                "className":"form-control",
                "name":"part_6_heading_extra_2",
                "access":false
             },
                {
                  "type": "text",
                  "required": false,
                  "label": "Signature",
                  "placeholder": "Signature",
                  "className": "form-control",
                  "name": "part_6_consent_to_collect_and_share_your_information_09",
                  "access": false,
                  "subtype": "text"
              },
                {
                  "type":"date",
                  "required":false,
                  "label":"Date",
                  "placeholder":"Date",
                  "className":"form-control",
                  "name":"part_6_consent_to_collect_and_share_your_information_10",
                  "access":false,
                  "subtype":"textarea"
                },
                {
                  "type": "text",
                  "required": false,
                  "label": "Full Name of person completing this form (please print)",
                  "placeholder": "Enter Full Name of person completing this form (please print)",
                  "className": "form-control",
                  "name": "part_6_consent_to_collect_and_share_your_information_11",
                  "access": false,
                  "subtype": "text"
              },
                {
                  "type": "text",
                  "required": false,
                  "label": "Relationship to participant or person wishing to become an NDIS participant",
                  "placeholder": "Enter Relationship to participant or person wishing to become an NDIS participant",
                  "className": "form-control",
                  "name": "part_6_consent_to_collect_and_share_your_information_12",
                  "access": false,
                  "subtype": "text"
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

      $heading3 = FormHeading::insertGetId([
         'form_heading' => 'PART 3 – Exploration of Options and Recommendation',
         'form_id' => $form,
         'section_html' => $section3
      ]);

      $heading4 = FormHeading::insertGetId([
         'form_heading' => 'PART 4 – Specification of Recommended P&O solution/device',
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
   }
}
