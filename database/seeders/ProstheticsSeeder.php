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

        $section4 = "";

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
        <td style='width:20%; border: 1px solid black;'>{{part_5_declaration_NDIA_expectation}}</td>
        </tr>
        <tr>
        <td style='width:80%; background-color: lightgrey; font-size: 17px;'>I will provide appropriate evidence to the NDIA and/or NDIS Quality and Safeguards Commission if and as requested.</td>
        <td style='width:20%; border: 1px solid black;'>{{part_5_declaration_appropriate_evidence}}</td>
        </tr>
        <tr>
        <td style='width:80%; background-color: lightgrey; font-size: 17px;'>I understand and acknowledge that the NDIA and participant will rely on my professional advice to select, source and implement this assistive technology.</td>
        <td style='width:20%; border: 1px solid black;'>{{part_5_declaration_NDIA_understanding}}</td>
        </tr>
        <tr>
        <td style='width:80%; background-color: lightgrey; font-size: 17px;'>This assistive technology has been assessed by the treating multi-disciplinary team and I have completed the AT assessment on behalf of that team.</td>
        <td style='width:20%; border: 1px solid black;'>{{part_5_declaration_accessing_team}}</td>
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
            <td style='border: 1px solid lightslategray; padding: 10px'>{{part_5_assessors_name}}</td>
            </tr>
            <tr>
            <td style='border: 1px solid lightslategray; padding: 10px; width: 40%;background-color: lightgrey; font-size: 17px'>NDIS Provider Registration number (where applicable)</td>
            <td style='border: 1px solid lightslategray; padding: 10px'>{{part_5_provider_registration_number}}</td>
            </tr>
            <tr>
            <td style='border: 1px solid lightslategray; padding: 10px; width: 40%; background-color: lightgrey; font-size: 17px'>Phone</td>
            <td style='border: 1px solid lightslategray; padding: 10px'>{{part_5_assessorphone_number}}</td>
            </tr>
            <tr>
            <td style='border: 1px solid lightslategray; padding: 10px; width: 40%;background-color: lightgrey; font-size: 17px'>Email</td>
            <td style='border: 1px solid lightslategray; padding: 10px'>{{part_5_email_address}}</td>
            </tr>
            <tr>
            <td style='border: 1px solid lightslategray; padding: 10px; width: 40%;background-color: lightgrey; font-size: 17px'>Signature</td>
            <td style='border: 1px solid lightslategray; padding: 10px'></td>
            </tr>
            <tr>
            <td style='border: 1px solid lightslategray; padding: 10px; width: 40%;background-color: lightgrey; font-size: 17px'>Qualification</td>
            <td style='border: 1px solid lightslategray; padding: 10px'>{{part_5_qualification}}</td>
            </tr>
            <tr>
            <td style='border: 1px solid lightslategray; padding: 10px; width: 40%;background-color: lightgrey; font-size: 17px'>Date of Assessment(s)</td>
            <td style='border: 1px solid lightslategray; padding: 10px'>{{part_5_date_assessment}}</td>
            </tr>
            <tr>
            <td style='border: 1px solid lightslategray; padding: 10px; width: 40%;background-color: lightgrey; font-size: 17px'>Date of Report</td>
            <td style='border: 1px solid lightslategray; padding: 10px'>{{part_5_reportDate}}</td>
            </tr>
        </tbody>
        </table>";

        $section6 = "<p style='margin-top:10px'></p>
                    <table style='background-color:#7209B7; border:none; width:100%;'>
                    <tr>
                        <td>
                            <p style='font-size:12pt; font-weight:bold; margin-top:5px; margin-bottom:5px; color: white'>  PART 6 – Consent to Collect and Share Your Information – 
                    Provider AT Assessment and Quotation(s)</p>
                        </td>
                    </tr>
                    </table>
                    <p style='font-weight:bold; font-size:13pt;margin-top:20px; margin-bottom:20px;'>For the participant to complete</p>
    
                    <p style='margin-bottom: 10px'>As a participant who requires assistive technology supports, the National Disability Insurance Agency (NDIA) may need to contact your AT assessor and / or AT supplier to discuss information within your assistive technology assessment and quotation(s). This will assist the NDIA with determining whether your request for assistive technology support(s) can be provided to you under the NDIS. Do you consent to the NDIA collecting and disclosing your information including from these third parties mentioned above, in relation to your assistive technology assessment and quotation?</p>
                    <table style=' width:100%; border: 1px solid black;'>
                    <tr>
                    <td style='width:40%; background-color: lightgrey; font-size: 17px;'>Yes, I consent</td>
                    <td style='width:60%; border: 1px solid black;'>{{part_6_yes_consent}}</td>
                    </tr>
                    <tr>
                    <td style='width:40%; background-color: lightgrey; font-size: 17px;'>No, I do not consent</td>
                    <td style='width:60%; border: 1px solid black;'>{{part_6_noidonot_consent}}</td>
                    </tr>
                    </table>
                    <p style='margin-bottom: 10px'>Participant’s Signature</p>
                    <table style=' width:100%; border: 1px solid black;'>
                    <tr>
                    <td style='width:80%; background-color: lightgrey; font-size: 17px;'>I understand that I am giving consent to the NDIA to do the things with my information set out in this section. I understand that I can withdraw my consent for the NDIS to do things with my information at any time by letting the NDIA know.</td>
                    <td style='width:20%; border: 1px solid black;'>{{part_6_iunderstandthatiamgivingconsenttothe_NDIA}}</td>
                    </tr>
                    <tr>
                    <td style='width:80%; background-color: lightgrey; font-size: 17px;'>I understand that I can access the NDIA’s Privacy Notice and Privacy Policy on the NDIA website or by contacting the NDIA.</td>
                    <td style='width:20%; border: 1px solid black;'>{{part_6_iunderstandthaticanaccesstheNDIAsprivacy_notice}}</td>
                    </tr>
                    </table>
                    <table style=' width:100%; border: 1px solid black;'>
                    <tr>
                    <td style='width:40%; background-color: lightgrey; font-size: 17px;'>Signature</td>
                    <td style='width:60%; border: 1px solid black;'></td>
                    </tr>
                    <tr>
                    <td style='width:40%; background-color: lightgrey; font-size: 17px;'>Full name</td>
                    <td style='width:60%; border: 1px solid black;'>{{part_6_signaturersfull_name}}</td>
                    </tr>
                    <tr>
                    <td style='width:40%; background-color: lightgrey; font-size: 17px;'>Date</td>
                    <td style='width:60%; border: 1px solid black;'>{{part_6_signaturers_date}}</td>
                    </tr>
                    </table>
                    <p style='font-weight:bold; font-size:13pt;margin-top:20px; margin-bottom:20px;'>If you have signed this Form on behalf of the NDIS participant,</p>
                    <p style='margin-bottom: 10px'>please complete the details below. It is an offence to provide false or misleading information.</p>
                    <p style='margin-bottom: 10px'>We may require you to provide evidence of your authority to sign on behalf of the person</p>
                    <table style=' width:100%; border: 1px solid black;'>
                    <tr>
                    <td style='width:40%; background-color: lightgrey; font-size: 17px;'>Signature</td>
                    <td style='width:60%; border: 1px solid black;'></td>
                    </tr>
                    <tr>
                    <td style='width:40%; background-color: lightgrey; font-size: 17px;'>Date</td>
                    <td style='width:60%; border: 1px solid black;'>{{part_6_signaturersonbefalfofparticipant_date}}</td>
                    </tr>
                    <tr>
                    <td style='width:40%; background-color: lightgrey; font-size: 17px;'>Full Name of person completing this form (please print):</td>
                    <td style='width:60%; border: 1px solid black;'>{{part_6_fullnameofpersoncompletingthis_form}}</td>
                    </tr>
                    <tr>
                    <td style='width:40%; background-color: lightgrey; font-size: 17px;'>Relationship to participant</td>
                    <td style='width:60%; border: 1px solid black;'>{{part_6_relationshiptoparticipant}}</td>
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
               "type":"text",
               "required":false,
               "label":"Type of AT 1",
               "placeholder":"Enter Type of AT 1",
               "className":"form-control",
               "name":"part_2_type_of_at1",
               "access":false,
               "subtype":"text"
            },
            {
               "type":"text",
               "required":false,
               "label":"Usage 1",
               "placeholder":"Enter Usage 1",
               "className":"form-control",
               "name":"part_2_usage1",
               "access":false,
               "subtype":"text"
            },
            {
               "type":"text",
               "required":false,
               "label":"Participant’s report of suitability 1",
               "placeholder":"Enter Participant’s report of suitability 1",
               "className":"form-control",
               "name":"part_2_participant’s_report_of_suitability1",
               "access":false,
               "subtype":"text"
            },
            {
               "type":"checkbox-group",
               "required":false,
               "label":"Does it need reassessment 1?",
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
               "type":"text",
               "required":false,
               "label":"Type of AT 2",
               "placeholder":"Enter Type of AT 2",
               "className":"form-control",
               "name":"part_2_type_of_at2",
               "access":false,
               "subtype":"text"
            },
            {
               "type":"text",
               "required":false,
               "label":"Usage 2",
               "placeholder":"Enter Usage 2",
               "className":"form-control",
               "name":"part_2_usage2",
               "access":false,
               "subtype":"text"
            },
            {
               "type":"text",
               "required":false,
               "label":"Participant’s report of suitability 2",
               "placeholder":"Enter Participant’s report of suitability 2",
               "className":"form-control",
               "name":"part_2_participant’s_report_of_suitability2",
               "access":false,
               "subtype":"text"
            },
            {
               "type":"checkbox-group",
               "required":false,
               "label":"Does it need reassessment 2?",
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
               "type":"text",
               "required":false,
               "label":"Type of AT 3",
               "placeholder":"Enter Type of AT 3",
               "className":"form-control",
               "name":"part_2_type_of_at3",
               "access":false,
               "subtype":"text"
            },
            {
               "type":"text",
               "required":false,
               "label":"Usage 3",
               "placeholder":"Enter Usage 3",
               "className":"form-control",
               "name":"part_2_usage3",
               "access":false,
               "subtype":"text"
            },
            {
               "type":"text",
               "required":false,
               "label":"Participant’s report of suitability 3",
               "placeholder":"Enter Participant’s report of suitability 3",
               "className":"form-control",
               "name":"part_2_participant’s_report_of_suitability3",
               "access":false,
               "subtype":"text"
            },
            {
               "type":"checkbox-group",
               "required":false,
               "label":"Does it need reassessment 3?",
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
               "type":"textarea",
               "required":false,
               "label":"Outline any disability",
               "placeholder":"Enter Outline any disability",
               "className":"form-control",
               "name":"part_2_outline_any_disability",
               "access":false,
               "subtype":"text"
            }
         ]';

        $form_fields3 = '[
            {
               "type":"text",
               "required":false,
               "label":"Evaluation_optionTextField",
               "placeholder":"Enter option",
               "className":"form-control",
               "name":"part_3_con_option_evaluation_option1",
               "access":false,
               "subtype":"text"
            },
            {
               "type":"text",
               "required":false,
               "label":"Evaluation_optionTextField",
               "placeholder":"Enter option",
               "className":"form-control",
               "name":"part_3_con_option_evaluation_option2",
               "access":false,
               "subtype":"text"
            },
            {
               "type":"text",
               "required":false,
               "label":"Evaluation_optionTextField",
               "placeholder":"Enter option",
               "className":"form-control",
               "name":"part_3_con_option_evaluation_option3",
               "access":false,
               "subtype":"text"
            },
            {
               "type":"text",
               "required":false,
               "label":"Evaluation_optionTextField",
               "placeholder":"Enter option",
               "className":"form-control",
               "name":"part_3_con_option_evaluation_option4",
               "access":false,
               "subtype":"text"
            },
            {
               "type":"text",
               "required":false,
               "label":"Evaluation_optionTextField",
               "placeholder":"Enter Potential Option",
               "className":"form-control",
               "name":"part_3_con_option_potential_option1",
               "access":false,
               "subtype":"text"
            },
            {
               "type":"text",
               "required":false,
               "label":"Evaluation_optionTextField",
               "placeholder":"Enter Potential Option",
               "className":"form-control",
               "name":"part_3_con_option_potential_option2",
               "access":false,
               "subtype":"text"
            },
            {
               "type":"text",
               "required":false,
               "label":"Evaluation_optionTextField",
               "placeholder":"Enter Potential Option",
               "className":"form-control",
               "name":"part_3_con_option_potential_option3",
               "access":false,
               "subtype":"text"
            },
            {
               "type":"text",
               "required":false,
               "label":"Evaluation_optionTextField",
               "placeholder":"Enter Potential Option",
               "className":"form-control",
               "name":"part_3_con_option_potential_option4",
               "access":false,
               "subtype":"text"
            },
            {
               "type":"text",
               "required":false,
               "label":"Evaluation_optionTextField",
               "placeholder":"Enter Trial Details",
               "className":"form-control",
               "name":"part_3_con_option_trial_option1",
               "access":false,
               "subtype":"text"
            },
            {
               "type":"text",
               "required":false,
               "label":"Evaluation_optionTextField",
               "placeholder":"Enter Trial Details",
               "className":"form-control",
               "name":"part_3_con_option_trial_option2",
               "access":false,
               "subtype":"text"
            },
            {
               "type":"text",
               "required":false,
               "label":"Evaluation_optionTextField",
               "placeholder":"Enter Trial Details",
               "className":"form-control",
               "name":"part_3_con_option_trial_option3",
               "access":false,
               "subtype":"text"
            },
            {
               "type":"text",
               "required":false,
               "label":"Evaluation_optionTextField",
               "placeholder":"Enter Trial Details",
               "className":"form-control",
               "name":"part_3_con_option_trial_option4",
               "access":false,
               "subtype":"text"
            },
            {
               "type":"text",
               "required":false,
               "label":"Evaluation_optionTextField",
               "placeholder":"Enter Disadvantage",
               "className":"form-control",
               "name":"part_3_con_option_disdvantage1",
               "access":false,
               "subtype":"text"
            },
            {
               "type":"text",
               "required":false,
               "label":"Evaluation_optionTextField",
               "placeholder":"Enter Disadvantage",
               "className":"form-control",
               "name":"part_3_con_option_disdvantage2",
               "access":false,
               "subtype":"text"
            },
            {
               "type":"text",
               "required":false,
               "label":"Evaluation_optionTextField",
               "placeholder":"Enter Disadvantage",
               "className":"form-control",
               "name":"part_3_con_option_disdvantage3",
               "access":false,
               "subtype":"text"
            },
            {
               "type":"text",
               "required":false,
               "label":"Evaluation_optionTextField",
               "placeholder":"Enter Disadvantage",
               "className":"form-control",
               "name":"part_3_con_option_disdvantage4",
               "access":false,
               "subtype":"text"
            },
            {
               "type":"text",
               "required":false,
               "label":"Cost (include training)",
               "placeholder":"Enter Cost (include training)",
               "className":"form-control",
               "name":"part_3_con_option_cost1",
               "access":false,
               "subtype":"text"
            },
            {
               "type":"text",
               "required":false,
               "label":"Cost (include training)",
               "placeholder":"Enter Cost (include training)",
               "className":"form-control",
               "name":"part_3_con_option_cost2",
               "access":false,
               "subtype":"text"
            },
            {
               "type":"text",
               "required":false,
               "label":"Cost (include training)",
               "placeholder":"Enter Cost (include training)",
               "className":"form-control",
               "name":"part_3_con_option_cost3",
               "access":false,
               "subtype":"text"
            },
            {
               "type":"text",
               "required":false,
               "label":"Cost (include training)",
               "placeholder":"Enter Cost (include training)",
               "className":"form-control",
               "name":"part_3_con_option_cost4",
               "access":false,
               "subtype":"text"
            },
            {
               "type":"text",
               "required":false,
               "label":"Feature 1",
               "placeholder":"Enter Feature 1",
               "className":"form-control",
               "name":"part_3_feature_option1",
               "access":false,
               "subtype":"text"
            },
            {
               "type":"text",
               "required":false,
               "label":"Feature 2",
               "placeholder":"Enter Feature 2",
               "className":"form-control",
               "name":"part_3_feature_option2",
               "access":false,
               "subtype":"text"
            },
            {
               "type":"text",
               "required":false,
               "label":"Trial Details 1",
               "placeholder":"Enter Trial Details 1",
               "className":"form-control",
               "name":"part_3_trial_details1",
               "access":false,
               "subtype":"text"
            },
            {
               "type":"text",
               "required":false,
               "label":"Trial Details 2",
               "placeholder":"Enter Trial Details 2",
               "className":"form-control",
               "name":"part_3_trial_details2",
               "access":false,
               "subtype":"text"
            },
            {
               "type":"text",
               "required":false,
               "label":"Feature Cost 1",
               "placeholder":"Enter Feature Cost 1",
               "className":"form-control",
               "name":"part_3_feature_cost1",
               "access":false,
               "subtype":"text"
            },
            {
               "type":"text",
               "required":false,
               "label":"Feature Cost 2",
               "placeholder":"Enter Feature Cost 2",
               "className":"form-control",
               "name":"part_3_feature_cost2",
               "access":false,
               "subtype":"text"
            },
            {
               "type":"textarea",
               "required":false,
               "label":"Evidence",
               "placeholder":"Enter Evidence",
               "className":"form-control",
               "name":"part_3_evidence",
               "access":false,
               "subtype":"text"
            },
            {
               "type":"textarea",
               "required":false,
               "label":"Identify where change to other supports may be required",
               "placeholder":"Identify where change to other supports may be required",
               "className":"form-control",
               "name":"part_3_identify_where_changeto_other_support",
               "access":false,
               "subtype":"text"
            },
            {
               "type":"textarea",
               "required":false,
               "label":"What are the expected outcomes of providing this recommended support?",
               "placeholder":"What are the expected outcomes of providing this recommended support?",
               "className":"form-control",
               "name":"part_3_expected_outcomes",
               "access":false,
               "subtype":"text"
            },
            {
               "type":"textarea",
               "required":false,
               "label":"If Outcomes Acheive",
               "placeholder":"If Outcomes Acheive",
               "className":"form-control",
               "name":"part_3_if_outcomes_achieve",
               "access":false,
               "subtype":"text"
            },
            {
               "type":"textarea",
               "required":false,
               "label":"If Outcomes Acheive",
               "placeholder":"If Outcomes Acheive",
               "className":"form-control",
               "name":"part_3_if_outcomes_achieve",
               "access":false,
               "subtype":"text"
            },
            {
               "type":"textarea",
               "required":false,
               "label":"Measure These Outcomes",
               "placeholder":"Measure These Outcomes",
               "className":"form-control",
               "name":"part_3_measure_these_outcomes",
               "access":false,
               "subtype":"text"
            }
         ]';

        $form_fields4 = '[]';

        $form_fields5 = '[
            {
               "type":"checkbox-group",
               "required":false,
               "label":"Meet the NDIA expectation",
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
               "label":"Providing appropriate evidence to the NDIA",
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
               "label":"I understand all about the NDIA",
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
               "label":"Accessing by the treating multi-disciplinary team",
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
               "type":"text",
               "required":false,
               "label":"Assessor’s Name",
               "placeholder":"Enter Assessor’s Name",
               "className":"form-control",
               "name":"part_5_assessors_name",
               "access":false,
               "subtype":"text"
            },
            {
               "type":"text",
               "required":false,
               "label":"Assessor’s NDIS Provider Registration Number",
               "placeholder":"Enter Assessor’s NDIS Provider Registration Number",
               "className":"form-control",
               "name":"part_5_provider_registration_number",
               "access":false,
               "subtype":"text"
            },
            {
               "type":"text",
               "required":false,
               "label":"Assessor’s Phone Number",
               "placeholder":"Enter Assessor’s Phone Number",
               "className":"form-control",
               "name":"part_5_assessorphone_number",
               "access":false,
               "subtype":"text"
            },
            {
               "type":"text",
               "subtype":"email",
               "required":false,
               "label":"Assessor’s Email",
               "placeholder":"Enter Assessor’s Email Address",
               "className":"form-control",
               "name":"part_5_email_address",
               "access":false
            },
            {
               "type":"text",
               "required":false,
               "label":"Assessor’s Qualification",
               "placeholder":"Enter Assessor’s Qualification",
               "className":"form-control",
               "name":"part_5_qualification",
               "access":false,
               "subtype":"text"
            },
            {
               "type":"date",
               "required":false,
               "label":"Assessor’s Date of Assessment",
               "placeholder":"Set Assessor’s Date of Assessment",
               "className":"form-control",
               "name":"part_5_date_assessment",
               "access":false
            },
            {
               "type":"date",
               "required":false,
               "label":"Assessor’s Date of Report",
               "placeholder":"Set Assessor’s Date of Report",
               "className":"form-control",
               "name":"part_5_reportDate",
               "access":false
            }
         ]';

        $form_fields6 = '[
            {
               "type":"checkbox-group",
               "required":false,
               "label":"Yes, I consent",
               "toggle":false,
               "inline":false,
               "name":"part_6_yes_consent",
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
               "name":"part_6_noidonot_consent",
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
               "label":"I understand that I am giving consent to the NDIA",
               "toggle":false,
               "inline":false,
               "name":"part_6_iunderstandthatiamgivingconsenttothe_NDIA",
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
               "label":"I understand that I can access the NDIA’s Privacy Notice",
               "toggle":false,
               "inline":false,
               "name":"part_6_iunderstandthaticanaccesstheNDIAsprivacy_notice",
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
               "label":"Full Name",
               "placeholder":"Enter Full  Name",
               "className":"form-control",
               "name":"part_6_signaturersfull_name",
               "access":false,
               "subtype":"text"
            },
            {
               "type":"date",
               "required":false,
               "label":"Date",
               "placeholder":"Enter Date",
               "className":"form-control",
               "name":"part_6_signaturers_date",
               "access":false,
               "subtype":"text"
            },
            {
               "type":"text",
               "required":false,
               "label":"Full Name of person completing this form",
               "placeholder":"Enter Full Name of person completing this form",
               "className":"form-control",
               "name":"part_6_fullnameofpersoncompletingthis_form",
               "access":false,
               "subtype":"text"
            },
            {
                "type":"date",
                "required":false,
                "label":"Date",
                "placeholder":"Enter Date",
                "className":"form-control",
                "name":"part_6_signaturersonbefalfofparticipant_date",
                "access":false,
                "subtype":"text"
            },
            {
               "type":"text",
               "required":false,
               "label":"Relationship to participant",
               "placeholder":"Enter Relationship to participant",
               "className":"form-control",
               "name":"part_6_relationshiptoparticipant",
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
