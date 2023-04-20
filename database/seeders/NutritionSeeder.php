<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\{Form , FormHeading , FormField};

class NutritionSeeder extends Seeder
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
            <td style='border: 1px solid lightslategray; padding: 10px; width: 40%; background-color: lightgrey; font-size: 15px'><p style='margin-top:8px; margin-bottom:8px; margin-left:8px'>   Name</p></td>
            <td style='border: 1px solid lightslategray; padding: 10px'>
                <p style='margin-top:8px; margin-bottom:8px; margin-left:8px'>{{part_1_ndis_name}}</p>
            </td>
            </tr>
            <tr>
            <td style='border: 1px solid lightslategray; padding: 10px; width: 40%;background-color: lightgrey; font-size: 15px'><p style='margin-top:8px; margin-bottom:8px; margin-left:8px'>   Date of Birth</p></td>
            <td style='border: 1px solid lightslategray; padding: 10px'>
                <p style='margin-top:8px; margin-bottom:8px; margin-left:8px'>{{part_1_ndis_date_of_birth}}</p>
            </td>
            </tr>
            <tr>
            <td style='border: 1px solid lightslategray; padding: 10px; width: 40%; background-color: lightgrey; font-size: 15px'><p style='margin-top:8px; margin-bottom:8px; margin-left:8px'>   Age</p></td>
            <td style='border: 1px solid lightslategray; padding: 10px'>
                <p style='margin-top:8px; margin-bottom:8px; margin-left:8px'>{{part_1_ndis_age}}</p>
            </td>
            </tr>
            <tr>
            <td style='border: 1px solid lightslategray; padding: 10px; width: 40%;background-color: lightgrey; font-size: 15px'><p style='margin-top:8px; margin-bottom:8px; margin-left:8px'>   NDIS Number</p></td>
            <td style='border: 1px solid lightslategray; padding: 10px'>
                <p style='margin-top:8px; margin-bottom:8px; margin-left:8px'>{{part_1_ndis_participantndis_number}}</p>
            </td>
            </tr>
            <tr>
            <td style='border: 1px solid lightslategray; padding: 10px; width: 40%;background-color: lightgrey; font-size: 15px'><p style='margin-top:8px; margin-bottom:8px; margin-left:8px'>   Address</p></td>
            <td style='border: 1px solid lightslategray; padding: 10px'>
                <p style='margin-top:8px; margin-bottom:8px; margin-left:8px'>{{part_1_ndis_participant_address}}</p>
            </td>
            </tr>
            <tr>
            <td style='border: 1px solid lightslategray; padding: 10px; width: 40%;background-color: lightgrey; font-size: 15px'><p style='margin-top:8px; margin-bottom:8px; margin-left:8px'>   Contact Telephone Number</p></td>
            <td style='border: 1px solid lightslategray; padding: 10px'>
                <p style='margin-top:8px; margin-bottom:8px; margin-left:8px'>{{part_1_ndis_participantphone_number}}</p>
            </td>
            </tr>
            <tr>
            <td style='border: 1px solid lightslategray; padding: 10px; width: 40%;background-color: lightgrey; font-size: 15px'><p style='margin-top:8px; margin-bottom:8px; margin-left:8px'>   Email</p></td>
            <td style='border: 1px solid lightslategray; padding: 10px'>
                <p style='margin-top:8px; margin-bottom:8px; margin-left:8px'>{{part_1_ndis_participant_email}}</p>
            </td>
            </tr>
            <tr>
            <td style='border: 1px solid lightslategray; padding: 10px; width: 40%;background-color: lightgrey; font-size: 15px'><p style='margin-top:8px; margin-bottom:8px; margin-left:8px'>   Preferred Contact Method</p> </td>
            <td style='border: 1px solid lightslategray; padding: 10px'>
                <p style='margin-top:8px; margin-bottom:8px; margin-left:8px'>{{part_1_ndis_participant_preferredcontact}}</p>
            </td>
            </tr>
            <tr>
            <td style='border: 1px solid lightslategray; padding: 10px; width: 40%;background-color: lightgrey; font-size: 15px'><p style='margin-top:8px; margin-bottom:8px; margin-left:8px'>   Alternative Contact (Nominee or Guardian) Name</p></td>
            <td style='border: 1px solid lightslategray; padding: 10px'>
                <p style='margin-top:8px; margin-bottom:8px; margin-left:8px'>{{part_1_ndis_participantguardian_name}}</p>
            </td>
            </tr>
            <tr>
            <td style='border: 1px solid lightslategray; padding: 10px; width: 40%;background-color: lightgrey; font-size: 15px'><p style='margin-top:8px; margin-bottom:8px; margin-left:8px'>   Alternative Contact (Nominee or Guardian) Phone</p></td>
            <td style='border: 1px solid lightslategray; padding: 10px'>
                <p style='margin-top:8px; margin-bottom:8px; margin-left:8px'>{{part_1_ndis_participantguardian_phone}}</p>
            </td>
            </tr>
            <tr>
            <td style='border: 1px solid lightslategray; padding: 10px; width: 40%;background-color: lightgrey; font-size: 15px'><p style='margin-top:8px; margin-bottom:8px; margin-left:8px'>   NDIS Support Coordinator</p></td>
            <td style='border: 1px solid lightslategray; padding: 10px'>
                <p style='margin-top:8px; margin-bottom:8px; margin-left:8px'>{{part_1_ndis_support_coordinator}}</p>
            </td>
            </tr>
            <tr>
            <td style='border: 1px solid lightslategray; padding: 10px; width: 40%;background-color: lightgrey; font-size: 15px'><p style='margin-top:8px; margin-bottom:8px; margin-left:8px'>   Contact Details</p></td>
            <td style='border: 1px solid lightslategray; padding: 10px'>
                <p style='margin-top:8px; margin-bottom:8px; margin-left:10px'>{{part_1_ndis_participantcontact_details}}</p>
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
    </table>";


    $section2 = "<p style='margin-top:10px'></p>
                <table style='background-color:#7209B7; border:none; width:100%;'>
                    <tr>
                        <td>
                            <p style='font-size:12pt; font-weight:bold; margin-top:5px; margin-bottom:5px; color: white'> PART 2 – Evaluation and Assessment</p>
                        </td>
                    </tr>
                </table>
                <p style='font-weight:bold; font-size:13pt;margin-top:20px; margin-bottom:20px;'>2.1   Background </p>
                <p style='font-size:12pt;'>Note participant’s circumstances, including:</p>
                <ul style='font-size:12pt;'>
                    <li><p style='margin-top:10px; margin-bottom:10px;'>Disability;</p></li>
                    <li><p style='margin-top:10px; margin-bottom:10px;'>current living situation;</p></li>
                    <li><p style='margin-top:10px; margin-bottom:10px;'>social supports and environment in general and with regard to use of AT;</p></li>
                    <li><p style='margin-top:10px; margin-bottom:10px;'>if moving through life transition;</p></li>
                    <li><p style='margin-top:10px; margin-bottom:10px;'>coexisting medical and health conditions including behavioural status (note that NDIS can only fund AT related to participant’s disability);</p></li>
                </ul>
                <p style='font-size:12pt;'>Please include information regarding the participant’s current mealtime regime and nutritional supports and how well these meet participant’s nutritional needs</p>
                <table style='width:100%; border: 1px solid black'>
                    <tr>
                        <td style='width: 100%; border: 1px solid black;'><p style='margin-top:10px; margin-bottom:10px;'>{{part_2_assesment_background_01}}</p></td>
                    </tr>
                </table>


                <p style='font-weight:bold; font-size:13pt;margin-top:20px; margin-bottom:20px;'>2.2	Functional Assessment findings</p>
                <p style='font-size:12pt;'> Please clearly outline the specific functional limitation/s related to the participant’s disability and impact on life roles:</p>
                <ul style='font-size:12pt;'>
                    <li><p style='margin-top:10px; margin-bottom:10px;'>postural deformity of complex postural needs;</p></li>
                    <li><p style='margin-top:10px; margin-bottom:10px;'>skin integrity issues;</p></li>
                    <li><p style='margin-top:10px; margin-bottom:10px;'>rapidly changing condition-including growth or weight change;</p></li>
                    <li><p style='margin-top:10px; margin-bottom:10px;'>cognitive issues;</p></li>
                    <li><p style='margin-top:10px; margin-bottom:10px;'>behaviours of concern;</p></li>
                    <li><p style='margin-top:10px; margin-bottom:10px;'>dysphagia;</p></li>
                    <li><p style='margin-top:10px; margin-bottom:10px;'>bowel habits;</p></li>    
                </ul>
                <p style='font-weight:bold; font-size:13pt;margin-top:20px; margin-bottom:20px;'>*NDIS expects relevant assessments are conducted where required and records held by AT assessor for NDIS audit purposes.</p>
                <table style='width:100%; border: 1px solid black'>
                    <tr>
                        <td style='width: 100%; border: 1px solid black;'><p style='margin-top:10px; margin-bottom:10px;'>{{part_2_assesment_functional_assessment_02}}</p></td>
                    </tr>
                </table>


                <p style='font-weight:bold; font-size:13pt;margin-top:20px; margin-bottom:20px;'>2.3 Participant’s measurements details</p>
                <table style=' width:100%; border: 1px solid black;'>
                <tr>
                <td style='width:40%;'>Date of measurement</td>
                <td style='width:60%; border: 1px solid black;'>{{part_2_date_of_measurement_03}}</td>
                </tr>
                <tr>
                <td style='width:40%;'>Height in centimetres (cm)</td>
                <td style='width:60%; border: 1px solid black;'>{{part_2_height_in_centimetres_04}}</td>
                </tr>
                <tr>
                <td style='width:40%;'>Weight in kilograms (kg)</td>
                <td style='width:60%; border: 1px solid black;'>{{part_2_weight_in_kilograms_05}}</td>
                </tr>
                </table>
                <p style='margin-top:10px'></p>";


    $section3 = "<table style='background-color:#7209B7; border:none; width:100%;'>
                    <tr>
                        <td>
                            <p style='font-size:12pt; font-weight:bold; margin-top:5px; margin-bottom:5px; color: white'> PART 3 – Exploration of Optionst</p>
                        </td>
                    </tr>
                </table>

                <p style='font-weight:bold; font-size:13pt;margin-top:20px; margin-bottom:20px;'>3.1 Evaluation of options</p>
                <p style='margin-bottom: 10px'>Please provide information on all alternatives considered (including non-nutrition support AT-related solutions) to achieve goal/s, including use of other supports and approaches and reasons why they were not considered suitable. Note that the NDIA will generally fund the most cost-effective option, usually the minimum necessary, for example, tinned products rather than ‘ready-made premixed’ and larger tins rather than individual serves. Where trials have been conducted, please give details of where the trials took place and for how long.</p>
                    <table style='
                        border-collapse: collapse;
                        width: 100%;
                        margin: auto;
                        border: 1px solid lightslategray;
                    '>
                        <tbody>
                            <tr>
                                <td
                                    style='border: 1px solid lightslategray; padding: 10px; width: 20%; background-color: lightgrey; font-size: 17px'>
                                    Option</td>
                                <td
                                    style='border: 1px solid lightslategray; padding: 10px; width: 20%; background-color: lightgrey; font-size: 17px'>
                                    Describe potential options in relation to goal achievement
                                </td>
                                <td
                                    style='border: 1px solid lightslategray; padding: 10px; width: 20%; background-color: lightgrey; font-size: 17px'>
                                    Trailled (T) or Considered (C)? Trail details (date, length, location)
                                </td>
                                <td
                                    style='border: 1px solid lightslategray; padding: 10px; width: 20%; background-color: lightgrey; font-size: 17px'>
                                    Why was it considered suitable/not suitable?
                                </td>
                                <td
                                    style='border: 1px solid lightslategray; padding: 10px; width: 20%; background-color: lightgrey; font-size: 17px'>
                                    Estimated cost (include training)
                                </td>

                            </tr>
                            <tr>
                                <td style='border: 1px solid lightslategray; padding: 10px'>
                                    {{part_3_con_option_evaluation_option1}}
                                </td>
                                <td style='border: 1px solid lightslategray; padding: 10px'>
                                    {{part_3_con_option_evaluation_option_potential1}}
                                </td>
                                <td style='border: 1px solid lightslategray; padding: 10px'>
                                    {{part_3_con_option_trial_option1}}
                                </td>
                                <td style='border: 1px solid lightslategray; padding: 10px'>
                                    {{part_3_considered_suitable1}}
                                </td>
                                <td style='border: 1px solid lightslategray; padding: 10px'>
                                    {{part_3_estimated_cost1}}
                                </td>
                            </tr>

                            <tr>

                                <td style='border: 1px solid lightslategray; padding: 10px'>
                                    {{part_3_con_option_evaluation_option2}}
                                </td>
                                <td style='border: 1px solid lightslategray; padding: 10px'>
                                    {{part_3_con_option_evaluation_option_potential2}}
                                </td>
                                <td style='border: 1px solid lightslategray; padding: 10px'>
                                    {{part_3_con_option_trial_option2}}
                                </td>
                                <td style='border: 1px solid lightslategray; padding: 10px'>
                                    {{part_3_considered_suitable2}}
                                </td>
                                <td style='border: 1px solid lightslategray; padding: 10px'>
                                    {{part_3_estimated_cost2}}
                                </td>
                            </tr>

                            <tr>

                                <td style='border: 1px solid lightslategray; padding: 10px'>
                                    {{part_3_con_option_evaluation_option3}}
                                </td>
                                <td style='border: 1px solid lightslategray; padding: 10px'>
                                    {{part_3_con_option_evaluation_option_potential3}}
                                </td>
                                <td style='border: 1px solid lightslategray; padding: 10px'>
                                    {{part_3_con_option_trial_option3}}
                                </td>
                                <td style='border: 1px solid lightslategray; padding: 10px'>
                                    {{part_3_considered_suitable3}}
                                </td>
                                <td style='border: 1px solid lightslategray; padding: 10px'>
                                    {{part_3_estimated_cost3}}
                                </td>
                            </tr>

                        </tbody>
                    </table>";




    $section4 = "<p style='margin-top:10px'></p>
                <table style='background-color:#7209B7; border:none; width:100%;'>
                    <tr>
                        <td>
                            <p style='font-size:12pt; font-weight:bold; margin-top:5px; margin-bottom:5px; color: white'>  PART 4 – Recommended option</p>
                        </td>
                    </tr>
                </table>
                <p style='font-weight:bold; font-size:13pt;margin-top:20px; margin-bottom:20px;'>4.1 Please state all the supports required for the recommended option including non AT supports and environmental modifications.</p>
                <p style='margin-bottom: 10px'>The specification for the AT support/device should be provided in Part 5.</p>
                <table style='width:100%; border: 1px solid black'>
                    <tr>
                        <td style='width: 100%; border: 1px solid black;'><p style='margin-top:10px; margin-bottom:10px;'>{{part_4_state_all_the_supports_required_for_the_recommended_option}}</p></td>
                    </tr>
                </table>
                <p style='margin-bottom: 10px'>1 NOTE training in AT device use of participant/family or support workers is included and expected to be accomplished within 2 hours. Please provide rationale and hours required if more extensive or specific training is indicated. A quote is not required Is there agreement between the AT assessor and participant on the recommended option? Yes or No. Explain if required.</p>
                <table style='width:100%; border: 1px solid black'>
                    <tr>
                        <td style='width: 100%; border: 1px solid black;'><p style='margin-top:10px; margin-bottom:10px;'>{{part_4_agreement_between_the_at_assessor_and_participant}}</p></td>
                    </tr>
                </table>
                <p style='font-weight:bold; font-size:13pt;margin-top:20px; margin-bottom:20px;'>4.2 Explain the evidence for the recommended option which will facilitate the participant’s goals compared to other options considered.</p>
                <p style='margin-bottom: 10px'>E.g., demonstrated trial outcomes and consideration of long term benefit in both current and anticipated future needs; change or adjustment to personal care supports need. If the recommended enteral feed, nutritional supplement, or thickener is above the basic minimum or standard level, please include specific evidence/ clinical justification in Section 4.4 below. Please consider those products available on the Pharmaceutical Benefits Scheme.</p>
                <table style='width:100%; border: 1px solid black'>
                    <tr>
                        <td style='width: 100%; border: 1px solid black;'><p style='margin-top:10px; margin-bottom:10px;'>{{part_4_evidence_for_the_recommended_option}}</p></td>
                    </tr>
                </table>
                <p style='font-weight:bold; font-size:13pt; margin-top:20px; margin-bottom:20px;'>4.3 Are there any other factors that need resolution in order to implement the above?</p>
                <p style='margin-bottom: 10px'>E.g., postural management; behavioural management plan for restrictive practice; are any environmental modifications required.</p>
                <table style='width:100%; border: 1px solid black'>
                    <tr>
                        <td style='width: 100%; border: 1px solid black;'><p style='margin-top:10px; margin-bottom:10px;'>{{part_4_other_factors_that_need_resolution_in_order}}</p></td>
                    </tr>
                </table>
                <p style='font-weight:bold; font-size:13pt; margin-top:20px; margin-bottom:20px;'>4.4 If an enteral feed, nutritional supplement or thickener is above basic minimum or standard level being recommended in Section 4.2.</p>
                <p style='margin-bottom: 10px'>Please provide the specific evidence/ clinical justification (e.g., medical confirmation of results of food allergies/intolerance tests or blood nutrient analysis), or if the participant has agreed to fund.</p>
                <table style='width:100%; border: 1px solid black'>
                    <tr>
                        <td style='width: 100%; border: 1px solid black;'><p style='margin-top:10px; margin-bottom:10px;'>{{part_4_enteral_feed_nutritional_supplement_thickener}}</p></td>
                    </tr>
                </table>
                <p style='margin-top:10px'></p>";





    $section5 = "<table style='background-color:#7209B7; border:none; width:100%;'>
                    <tr>
                        <td>
                            <p style='font-size:12pt; font-weight:bold; margin-top:5px; margin-bottom:5px; color: white'>  PART 5 – Recommended Nutrition Support AT specification</p>
                        </td>
                    </tr>
                </table>
                <p style='font-weight:bold; font-size:13pt;margin-top:20px; margin-bottom:20px;'>5.1 Description of nutrition support AT including recommended product(s).</p>
                <p style='margin-bottom: 10px'>Detail all necessary specifications required to meet client’s goal. This must be detailed enough to ensure that the item can be accurately quoted and supplied.</p>
                <table style='width:100%; border: 1px solid black'>
                    <tr>
                        <td style='width: 100%; border: 1px solid black;'><p style='margin-top:10px; margin-bottom:10px;'>{{part_5_description_nutrition_support_AT_including_recommended_product}}</p></td>
                    </tr>
                </table>
                <p style='margin-botton: 10px'>Recommended supplier</p>
                <table style='width:100%; border: 1px solid black'>
                    <tr>
                        <td style='width: 100%; border: 1px solid black;'><p style='margin-top:10px; margin-bottom:10px;'>{{part_5_Recommended_supplier}}</p></td>
                    </tr>
                </table>
                <p style='margin-botton: 10px'>Nutrition support AT equipment delivery costs</p>
                <table style='width:100%; border: 1px solid black'>
                    <tr>
                        <td style='width: 100%; border: 1px solid black;'><p style='margin-top:10px; margin-bottom:10px;'>{{part_5_nutrition_suppor_AT_equipment_elivery_costs}}</p></td>
                    </tr>
                </table>
                <p style='font-weight:bold; font-size:13pt;margin-top:20px; margin-bottom:20px;'>5.2 Extra Features.</p>
                <p style='margin-bottom: 10px;'>List below and estimate cost of any other nutrition support supplies (including additional cost of food when necessary) that are desired by the participant but are not due to the functional limitation/s related to the participant’s disability and the achievement of their stated goals.</p>
                <table>
                <tbody>
                <tr>
                    <td
                        style='border: 1px solid lightslategray; padding: 10px; width: 33%; background-color: lightgrey; font-size: 17px'>
                        Item(s)</td>
                    <td
                        style='border: 1px solid lightslategray; padding: 10px; width: 33%; background-color: lightgrey; font-size: 17px'>
                        Quantity/frequency of supply required:
                    </td>
                    <td
                        style='border: 1px solid lightslategray; padding: 10px; width: 33%; background-color: lightgrey; font-size: 17px'>
                        Cost estimate including delivery:
                    </td>
                </tr>
                <tr>
                    <td style='border: 1px solid lightslategray; padding: 10px'>
                        {{part_5_extra_features_item1}}
                    </td>
                    <td style='border: 1px solid lightslategray; padding: 10px'>
                        {{part_5_extra_features_Quantity_frequency_supply_required1}}
                    </td>
                    <td style='border: 1px solid lightslategray; padding: 10px'>
                        {{part_5_extra_features_cost_estimate1}}
                    </td>
                </tr>
                <tr>

                    <td style='border: 1px solid lightslategray; padding: 10px'>
                        {{part_5_extra_features_item2}}
                    </td>
                    <td style='border: 1px solid lightslategray; padding: 10px'>
                        {{part_5_extra_features_Quantity_frequency_supply_required2}}
                    </td>
                    <td style='border: 1px solid lightslategray; padding: 10px'>
                        {{part_5_extra_features_cost_estimate2}}
                    </td>
                </tr>
                <tr>

                    <td style='border: 1px solid lightslategray; padding: 10px'>
                        {{part_5_extra_features_item3}}
                    </td>
                    <td style='border: 1px solid lightslategray; padding: 10px'>
                        {{part_5_extra_features_Quantity_frequency_supply_required3}}
                    </td>
                    <td style='border: 1px solid lightslategray; padding: 10px'>
                        {{part_5_extra_features_cost_estimate3}}
                    </td>
                </tr>
                </tbody>
                </table>

                <p style='margin-top:10px'>   </p>
                <table style='width:100%; border: 1px solid black;'>
                    <tr>
                        <td style='width: 100%; border: 1px solid black;'><p style='margin-top:10px; margin-bottom:10px;'>Does the participant agree to pay for these from their own (not NDIS) funds? Yes/No</p></td>
                    </tr>

                    <tr>
                        <td style='width: 100%; border: 1px solid black;'><p style='margin-top:10px; margin-bottom:10px;'>{{part_5_extra_features_participant_agree_pay_their_own_funds}}</p></td>
                    </tr>

                    <tr>
                        <td style='width: 100%; border: 1px solid black;'><p style='margin-top:10px; margin-bottom:10px;'>Other supplier’s specification (optional)</p></td>
                    </tr>

                    <tr>
                        <td style='width: 100%; border: 1px solid black;'><p style='margin-top:10px; margin-bottom:10px;'>{{part_5_extra_features_Other_supplier_specification}}</p></td>
                    </tr>
                </table>
                <p style='margin-top:10px'></p>";




    $section6 = "<table style='background-color:#7209B7; border:none; width:100%;'>
                    <tr>
                        <td>
                            <p style='font-size:12pt; font-weight:bold; margin-top:5px; margin-bottom:5px; color: white'>  PART 6 – Details of Assistive Technology Assessor</p>
                        </td>
                    </tr>
                </table>
                <p style='font-weight:bold; font-size:13pt;margin-top:20px; margin-bottom:20px;'>DECLARATION</p>
                <p style='margin-bottom: 10px'>(indicate all relevant sections that apply).</p>

                <table style=' width:100%; border: 1px solid black;'>
                <tr>
                <td style='width:80%; background-color: lightgrey; font-size: 17px;'>I certify that I meet the NDIA expectations of AT assessor provider suitability (including understanding of the current NDIS Act, Rules and Operational Guidelines) to assess the type of assistive technology and associated supports, at the level of complexity required by this participant.</td>
                <td style='width:20%; border: 1px solid black;'>{{part_6_details_of_assistive_technology_assessor1}}</td>
                </tr>
                <tr>
                <td style='width:80%; background-color: lightgrey; font-size: 17px;'>I will provide appropriate evidence to the NDIA and/or NDIS Quality and Safeguards Commission if and as requested.</td>
                <td style='width:20%; border: 1px solid black;'>{{part_6_details_of_assistive_technology_assessor2}}</td>
                </tr>
                <tr>
                <td style='width:80%; background-color: lightgrey; font-size: 17px;'>I understand and acknowledge that the NDIA and participant will rely on my professional advice to select, source and implement this assistive technology.</td>
                <td style='width:20%; border: 1px solid black;'>{{part_6_details_of_assistive_technology_assessor3}}</td>
                </tr>
                <tr>
                <td style='width:80%; background-color: lightgrey; font-size: 17px;'>This assistive technology has been assessed by the treating multi-disciplinary team and I have completed the AT assessment on behalf of that team.</td>
                <td style='width:20%; border: 1px solid black;'>{{part_6_details_of_assistive_technology_assessor4}}</td>
                </tr>
                </table>
                <p style='margin-top:10px'></p>

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
                            {{part_6_details_of_assistive_technology_assessor5}}
                        </td>
                        </tr>
                        <tr>
                        <td style='border: 1px solid lightslategray; padding: 10px; width: 40%;background-color: lightgrey; font-size: 17px'>Position</td>
                        <td style='border: 1px solid lightslategray; padding: 10px'>
                            {{part_6_details_of_assistive_technology_assessor6}}
                        </td>
                        </tr>
                        <tr>
                        <td style='border: 1px solid lightslategray; padding: 10px; width: 40%; background-color: lightgrey; font-size: 17px'>Qualification</td>
                        <td style='border: 1px solid lightslategray; padding: 10px'>
                            {{part_6_details_of_assistive_technology_assessor7}}
                        </td>
                        </tr>
                        <tr>
                        <td style='border: 1px solid lightslategray; padding: 10px; width: 40%;background-color: lightgrey; font-size: 17px'>Business Name</td>
                        <td style='border: 1px solid lightslategray; padding: 10px'>
                            {{part_6_details_of_assistive_technology_assessor8}}
                        </td>
                        </tr>
                        <tr>
                        <td style='border: 1px solid lightslategray; padding: 10px; width: 40%;background-color: lightgrey; font-size: 17px'>Contact Telephone Number</td>
                        <td style='border: 1px solid lightslategray; padding: 10px'>
                        {{part_6_details_of_assistive_technology_assessor9}}
                        </td>
                        </tr>
                        <tr>
                        <td style='border: 1px solid lightslategray; padding: 10px; width: 40%;background-color: lightgrey; font-size: 17px'>Email</td>
                        <td style='border: 1px solid lightslategray; padding: 10px'>
                            {{part_6_details_of_assistive_technology_assessor10}}
                        </td>
                        </tr>
                        <tr>
                        <td style='border: 1px solid lightslategray; padding: 10px; width: 40%;background-color: lightgrey; font-size: 17px'>Preferred Contact Method </td>
                        <td style='border: 1px solid lightslategray; padding: 10px'>
                            {{part_6_details_of_assistive_technology_assessor11}}
                        </td>
                        </tr>
                        <tr>
                        <td style='border: 1px solid lightslategray; padding: 10px; width: 40%;background-color: lightgrey; font-size: 17px'>Date of Assessment</td>
                        <td style='border: 1px solid lightslategray; padding: 10px'>
                            {{part_6_details_of_assistive_technology_assessor12}}
                        </td>
                        </tr>
                        <tr>
                        <td style='border: 1px solid lightslategray; padding: 10px; width: 40%;background-color: lightgrey; font-size: 17px'>Date of Report</td>
                        <td style='border: 1px solid lightslategray; padding: 10px'>
                            {{part_6_details_of_assistive_technology_assessor13}}
                        </td>
                        </tr>
                    </tbody>
                    </table>
                    <p style='margin-top:10px'></p>";




    $section7 = "<table style='background-color:#7209B7; border:none; width:100%;'>
                        <tr>
                            <td>
                                <p style='font-size:12pt; font-weight:bold; margin-top:5px; margin-bottom:5px; color: white'>  PART 7 – Consent to Collect and Share Your Information - Provider AT Assessment and Quotation(s)</p>
                            </td>
                        </tr>
                    </table>
                    <p style='font-weight:bold; font-size:13pt;margin-top:20px; margin-bottom:20px;'>For the participant to complete</p>
                    <p style='margin-bottom: 10px'>As a participant who requires assistive technology supports, the National Disability Insurance Agency (NDIA) may need to contact your service providers, health and medical practitioners to discuss information within your assistive technology assessment and quotation(s). This will assist the NDIA with determining whether your request for assistive technology funded support(s) can be provided to you under the NDIS.</p>
                    <p style='margin-bottom: 10px'>(indicate all relevant sections that apply)If you choose not to provide this consent, this may extend the time required in considering this request for assistive technology supports to be included in your NDIS plan.</p>
                    <p style='margin-bottom: 10px'>(indicate all relevant sections that apply)Do you consent to the NDIA collecting and disclosing your information, including from these third parties mentioned above, in relation to your assistive technology assessment and quotation? (Please tick either the yes or no answer below.)</p>
                    
                    <table style=' width:100%; border: 1px solid black;'>
                    <tr>
                        <td style='width:40%; background-color: lightgrey; font-size: 17px;'>Yes, I consent</td>
                        <td style='width:60%; border: 1px solid black;'>{{part_7_consent_to_collect_share_your_information1}}</td>
                    </tr>
                    <tr>
                        <td style='width:40%; background-color: lightgrey; font-size: 17px;'>No, I do not consent</td>
                        <td style='width:60%; border: 1px solid black;'>{{part_7_consent_to_collect_share_your_information2}}</td>
                    </tr>
                    </table>
                    <p style='margin-bottom: 10px'>When i sign this form:</p>
                    <p style='margin-bottom: 10px'>I understand that I am giving consent to the NDIA to do the things with my information set out in Part 5. I understand that I can withdraw my consent for the NDIS to do things with my information at any time by letting the NDIA know.</p>
                    <p style='margin-bottom: 10px'>I understand that I can access the NDIA’s Privacy Notice and Privacy Policy on the NDIA website or by contacting the NDIA.</p>
                    <table style=' width:100%; border: 1px solid black;'>
                    <tr>
                        <td style='width:40%; background-color: lightgrey; font-size: 17px;'>Signature</td>
                        <td style='width:60%; border: 1px solid black;'>{{part_7_consent_to_collect_share_your_information3}}</td>
                    </tr>
                    <tr>
                        <td style='width:40%; background-color: lightgrey; font-size: 17px;'>Full name</td>
                        <td style='width:60%; border: 1px solid black;'>{{part_7_consent_to_collect_share_your_information4}}</td>
                    </tr>
                    <tr>
                        <td style='width:40%; background-color: lightgrey; font-size: 17px;'>Date</td>
                        <td style='width:60%; border: 1px solid black;'>{{part_7_consent_to_collect_share_your_information5}}</td>
                    </tr>
                    </table>

                    <p style='font-weight:bold; font-size:13pt;margin-top:20px; margin-bottom:20px;'>If you have signed this form on behalf of the NDIS participant,</p>
                    <p style='margin-bottom: 10px'>please complete the details below. It is an offence to provide false or misleading information.</p>
                    <p style='margin-bottom: 10px'>We may require you to provide evidence of your authority to sign on behalf of the person</p>
                    <table style=' width:100%; border: 1px solid black;'>
                    <tr>
                        <td style='width:40%; background-color: lightgrey; font-size: 17px;'>Signature</td>
                        <td style='width:60%; border: 1px solid black;'>{{part_7_consent_to_collect_share_your_information6}}</td>
                    </tr>
                    <tr>
                        <td style='width:40%; background-color: lightgrey; font-size: 17px;'>Date</td>
                        <td style='width:60%; border: 1px solid black;'>{{part_7_consent_to_collect_share_your_information7}}</td>
                    </tr>
                    <tr>
                        <td style='width:40%; background-color: lightgrey; font-size: 17px;'>Full Name of person completing this form (please print):</td>
                        <td style='width:60%; border: 1px solid black;'>{{part_7_consent_to_collect_share_your_information8}}</td>
                    </tr>
                    <tr>
                        <td style='width:40%; background-color: lightgrey; font-size: 17px;'>Relationship to participant</td>
                        <td style='width:60%; border: 1px solid black;'>{{part_7_consent_to_collect_share_your_information9}}</td>
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
                        "label":"Cotact Details",
                        "placeholder":"Enter Your Contact Details",
                        "className":"form-control",
                        "name":"part_1_ndis_participantcontact_details",
                        "access":false,
                        "subtype":"text"
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
                "type":"text",
                "required":false,
                "label":"Background",
                "placeholder":"Enter Your Background",
                "className":"form-control",
                "name":"part_2_assesment_background_01",
                "access":false,
                "subtype":"text"
                },

                {
                "type":"text",
                "required":false,
                "label":"Functional Assessment findings",
                "placeholder":"Enter Functional Assessment findings",
                "className":"form-control",
                "name":"part_2_assesment_functional_assessment_02",
                "access":false,
                "subtype":"text"
                },


                {
                "type":"text",
                "required":false,
                "label":"Date of measurement",
                "placeholder":"Enter Date of measurement",
                "className":"form-control",
                "name":"part_2_date_of_measurement_03",
                "access":false,
                "subtype":"text"
                },

                {
                "type":"text",
                "required":false,
                "label":"Height in centimetres (cm)",
                "placeholder":"Enter BowHeight in centimetres (cm)el",
                "className":"form-control",
                "name":"part_2_height_in_centimetres_04",
                "access":false,
                "subtype":"text"
                },


                {
                "type":"text",
                "required":false,
                "label":"Weight in kilograms (kg)",
                "placeholder":"Weight in kilograms (kg)",
                "className":"form-control",
                "name":"part_2_weight_in_kilograms_05",
                "access":false,
                "subtype":"text"
                }
                ]';


    $form_fields3 = '[
        {
            "type":"text",
            "required":false,
            "label":"Option",
            "placeholder":"Enter Option",
            "className":"form-control",
            "name":"part_3_con_option_evaluation_option1",
            "access":false,
            "subtype":"text"
        },
        {
            "type":"text",
            "required":false,
            "label":"Option",
            "placeholder":"Enter Option",
            "className":"form-control",
            "name":"part_3_con_option_evaluation_option2",
            "access":false,
            "subtype":"text"
        },
        {
            "type":"text",
            "required":false,
            "label":"Option",
            "placeholder":"Enter Option",
            "className":"form-control",
            "name":"part_3_con_option_evaluation_option3",
            "access":false,
            "subtype":"text"
        },


        {
            "type":"text",
            "required":false,
            "label":"Describe potential options in relation to goal achievement",
            "placeholder":"Enter Describe potential options in relation to goal achievement",
            "className":"form-control",
            "name":"part_3_con_option_evaluation_option_potential1",
            "access":false,
            "subtype":"text"
        },
        {
            "type":"text",
            "required":false,
            "label":"Describe potential options in relation to goal achievement",
            "placeholder":"Enter Describe potential options in relation to goal achievement",
            "className":"form-control",
            "name":"part_3_con_option_evaluation_option_potential2",
            "access":false,"subtype":"text"
        },
        {
            "type":"text",
            "required":false,
            "label":"Describe potential options in relation to goal achievement",
            "placeholder":"Enter Describe potential options in relation to goal achievement",
            "className":"form-control",
            "name":"part_3_con_option_evaluation_option_potential3",
            "access":false,
            "subtype":"text"
        },


        {
            "type":"text",
            "required":false,
            "label":"Trialled (T) or Considered (C)? Trial details (date, length, location)",
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
            "label":"Why was it considered suitable/not suitable?",
            "placeholder":"Enter Why was it considered suitable/not suitable?",
            "className":"form-control",
            "name":"part_3_considered_suitable1",
            "access":false,
            "subtype":"text"
        },
        {
            "type":"text","required":false,
            "label":"Why was it considered suitable/not suitable?",
            "placeholder":"Enter Why was it considered suitable/not suitable?",
            "className":"form-control",
            "name":"part_3_considered_suitable2",
            "access":false,
            "subtype":"text"
        },
        {
            "type":"text","required":false,
            "label":"Why was it considered suitable/not suitable?",
            "placeholder":"Enter Why was it considered suitable/not suitable?",
            "className":"form-control",
            "name":"part_3_considered_suitable3",
            "access":false,
            "subtype":"text"
        },




        {
            "type":"text",
            "required":false,
            "label":"Estimated cost (include training)",
            "placeholder":"Enter Estimated cost (include training)",
            "className":"form-control",
            "name":"part_3_estimated_cost1",
            "access":false,
            "subtype":"text"
        },
        {
            "type":"text",
            "required":false,
            "label":"Estimated cost (include training)",
            "placeholder":"Enter Estimated cost (include training)",
            "className":"form-control",
            "name":"part_3_estimated_cost2",
            "access":false,
            "subtype":"text"
        },
        {
            "type":"text",
            "required":false,
            "label":"Estimated cost (include training)",
            "placeholder":"Enter Estimated cost (include training)",
            "className":"form-control",
            "name":"part_3_estimated_cost3",
            "access":false,
            "subtype":"text"
        }
        ]';


    $form_fields4 = '[
        {
            "type":"textarea",
            "required":false,
            "label":"State all the supports required for the recommended option ",
            "placeholder":"Enter State all the supports required for the recommended option",
            "className":"form-control",
            "name":"part_4_state_all_the_supports_required_for_the_recommended_option",
            "access":false,
            "subtype":"textarea"
        },

        {
            "type":"textarea",
            "required":false,
            "label":"Agreement between the AT assessor and participant",
            "placeholder":"Enter Is there agreement between the AT assessor and participant on the recommended option? Yes or No. Explain if required?",
            "className":"form-control",
            "name":"part_4_agreement_between_the_at_assessor_and_participant",
            "access":false,
            "subtype":"textarea"
        },

        {
            "type":"textarea",
            "required":false,
            "label":"Evidence for the recommended option",
            "placeholder":"Enter Explain the evidence for the recommended option which will facilitate the participant’s goals compared to other options considered",
            "className":"form-control",
            "name":"part_4_evidence_for_the_recommended_option",
            "access":false,
            "subtype":"textarea"
        },

        {
            "type":"textarea",
            "required":false,
            "label":"Are there any other factors that need resolution in order to implement the above? ",
            "placeholder":"Enter Are there any other factors that need resolution in order to implement the above? ",
            "className":"form-control",
            "name":"part_4_other_factors_that_need_resolution_in_order",
            "access":false,
            "subtype":"textarea"
        },

        {
            "type":"textarea",
            "required":false,
            "label":"If an enteral feed, nutritional supplement or thickener",
            "placeholder":"Enter If an enteral feed, nutritional supplement or thickener",
            "className":"form-control",
            "name":"part_4_enteral_feed_nutritional_supplement_thickener",
            "access":false,
            "subtype":"textarea"
        }
        ]';

    $form_fields5 = '[
        {
            "type":"textarea",
            "required":false,
            "label":"Description of nutrition support AT including recommended product",
            "placeholder":"Enter Description of nutrition support AT including recommended product",
            "className":"form-control",
            "name":"part_5_description_nutrition_support_AT_including_recommended_product",
            "access":false,
            "subtype":"textarea"
        },
        {
            "type":"textarea",
            "required":false,
            "label":"Recommended supplier.",
            "placeholder":"Enter Recommended supplier.",
            "className":"form-control",
            "name":"part_5_Recommended_supplier",
            "access":false,
            "subtype":"textarea"
        },
        {
            "type":"textarea",
            "required":false,
            "label":"Nutrition support AT equipment delivery costs",
            "placeholder":"Enter Nutrition support AT equipment delivery costs",
            "className":"form-control",
            "name":"part_5_nutrition_suppor_AT_equipment_elivery_costs",
            "access":false,
            "subtype":"textarea"
        },



        {
            "type":"textarea",
            "required":false,
            "label":"Item(s):",
            "placeholder":"Enter Item(s):",
            "className":"form-control",
            "name":"part_5_extra_features_item1",
            "access":false,
            "subtype":"textarea"
        },
        {
            "type":"textarea",
            "required":false,
            "label":"Item(s):",
            "placeholder":"Enter Item(s):",
            "className":"form-control",
            "name":"part_5_extra_features_item2",
            "access":false,
            "subtype":"textarea"
        },
        {
            "type":"textarea",
            "required":false,
            "label":"Item(s):",
            "placeholder":"Enter Item(s):",
            "className":"form-control",
            "name":"part_5_extra_features_item3",
            "access":false,
            "subtype":"textarea"
        },


        {
            "type":"textarea",
            "required":false,
            "label":"Quantity/frequency of supply required:",
            "placeholder":"Enter Quantity/frequency of supply required:",
            "className":"form-control",
            "name":"part_5_extra_features_Quantity_frequency_supply_required1",
            "access":false,
            "subtype":"textarea"
        },
        {
            "type":"textarea",
            "required":false,
            "label":"Quantity/frequency of supply required:",
            "placeholder":"Enter Quantity/frequency of supply required:",
            "className":"form-control",
            "name":"part_5_extra_features_Quantity_frequency_supply_required2",
            "access":false,
            "subtype":"textarea"
        },
        {
            "type":"textarea",
            "required":false,
            "label":"Quantity/frequency of supply required:",
            "placeholder":"Enter Quantity/frequency of supply required:",
            "className":"form-control",
            "name":"part_5_extra_features_Quantity_frequency_supply_required3",
            "access":false,
            "subtype":"textarea"
        },


        {
            "type":"textarea",
            "required":false,
            "label":"Cost estimate (including delivery):",
            "placeholder":"Enter Cost estimate (including delivery):",
            "className":"form-control",
            "name":"part_5_extra_features_cost_estimate1",
            "access":false,
            "subtype":"textarea"
        },
        {
            "type":"textarea",
            "required":false,
            "label":"Cost estimate (including delivery):",
            "placeholder":"Enter Cost estimate (including delivery):",
            "className":"form-control",
            "name":"part_5_extra_features_cost_estimate2",
            "access":false,
            "subtype":"textarea"
        }, 
        {
            "type":"textarea",
            "required":false,
            "label":"Cost estimate (including delivery):",
            "placeholder":"Enter Cost estimate (including delivery):",
            "className":"form-control",
            "name":"part_5_extra_features_cost_estimate3",
            "access":false,
            "subtype":"textarea"
        },


        {
            "type":"textarea",
            "required":false,
            "label":"Does the participant agree to pay for these from their own (not NDIS) funds? Yes/No",
            "placeholder":"Enter Does the participant agree to pay for these from their own (not NDIS) funds? Yes/No",
            "className":"form-control",
            "name":"part_5_extra_features_participant_agree_pay_their_own_funds",
            "access":false,
            "subtype":"textarea"
        },

        {
            "type":"textarea",
            "required":false,
            "label":"Other supplier’s specification (optional)",
            "placeholder":"Enter Other supplier’s specification (optional)",
            "className":"form-control",
            "name":"part_5_extra_features_Other_supplier_specification",
            "access":false,
            "subtype":"textarea"
        }
       ]';

    $form_fields6 = '[
        {
            "type":"textarea",
            "required":false,
            "label":"I certify that I meet the NDIA expectations of AT assessor provider suitability ",
            "placeholder":"Enter I certify that I meet the NDIA expectations of AT assessor provider suitability",
            "className":"form-control",
            "name":"part_6_details_of_assistive_technology_assessor1",
            "access":false,
            "subtype":"textarea"
        },
        {
            "type":"textarea",
            "required":false,
            "label":"I will provide appropriate evidence to the NDIA and/or NDIS Quality",
            "placeholder":"Enter I will provide appropriate evidence to the NDIA and/or NDIS Quality ",
            "className":"form-control",
            "name":"part_6_details_of_assistive_technology_assessor2",
            "access":false,
            "subtype":"textarea"
        },
        {
            "type":"textarea",
            "required":false,
            "label":"I understand and acknowledge that the NDIA and participant",
            "placeholder":"I understand and acknowledge that the NDIA and participant",
            "className":"form-control",
            "name":"part_6_details_of_assistive_technology_assessor3",
            "access":false,
            "subtype":"textarea"
        },
        {
            "type":"textarea",
            "required":false,
            "label":"This assistive technology has been assessed by the treating multi-disciplinary team",
            "placeholder":"This assistive technology has been assessed by the treating multi-disciplinary team",
            "className":"form-control",
            "name":"part_6_details_of_assistive_technology_assessor4",
            "access":false,
            "subtype":"textarea"
        },

        {
            "type":"textarea",
            "required":false,
            "label":"Name",
            "placeholder":"Name",
            "className":"form-control",
            "name":"part_6_details_of_assistive_technology_assessor5",
            "access":false,
            "subtype":"textarea"
        },
        {
            "type":"textarea",
            "required":false,
            "label":"Position",
            "placeholder":"Position",
            "className":"form-control",
            "name":"part_6_details_of_assistive_technology_assessor6",
            "access":false,
            "subtype":"textarea"
        },
        {
            "type":"textarea",
            "required":false,
            "label":"Qualification",
            "placeholder":"Qualification",
            "className":"form-control",
            "name":"part_6_details_of_assistive_technology_assessor7",
            "access":false,
            "subtype":"textarea"
        },
        {
            "type":"textarea",
            "required":false,
            "label":"Business Name",
            "placeholder":"Business Name",
            "className":"form-control",
            "name":"part_6_details_of_assistive_technology_assessor8",
            "access":false,
            "subtype":"textarea"
        },
        {
            "type":"textarea",
            "required":false,
            "label":"Contact Telephone Number",
            "placeholder":"Contact Telephone Number",
            "className":"form-control",
            "name":"part_6_details_of_assistive_technology_assessor9",
            "access":false,
            "subtype":"textarea"
        },
        {
            "type":"textarea",
            "required":false,
            "label":"Email ",
            "placeholder":"Email",
            "className":"form-control",
            "name":"part_6_details_of_assistive_technology_assessor10",
            "access":false,
            "subtype":"textarea"
        },
        {
            "type":"textarea",
            "required":false,
            "label":"Preferred Contact Method  ",
            "placeholder":"Preferred Contact Method ",
            "className":"form-control",
            "name":"part_6_details_of_assistive_technology_assessor11",
            "access":false,
            "subtype":"textarea"
        },
        {
            "type":"textarea",
            "required":false,
            "label":"Date of assessment",
            "placeholder":"Date of assessment",
            "className":"form-control",
            "name":"part_6_details_of_assistive_technology_assessor12",
            "access":false,
            "subtype":"textarea"
        },
        {
            "type":"textarea",
            "required":false,
            "label":"Date of report",
            "placeholder":"Date of report",
            "className":"form-control",
            "name":"part_6_details_of_assistive_technology_assessor13",
            "access":false,
            "subtype":"textarea"
        }
        ]';

    $form_fields7 = '[
        {
            "type":"textarea",
            "required":false,
            "label":"Yes, I consent",
            "placeholder":"Yes, I consent",
            "className":"form-control",
            "name":"part_7_consent_to_collect_share_your_information1",
            "access":false,
            "subtype":"textarea"
        },

        {
            "type":"textarea",
            "required":false,
            "label":"No, I do not consent",
            "placeholder":"No, I do not consent",
            "className":"form-control",
            "name":"part_7_consent_to_collect_share_your_information2",
            "access":false,
            "subtype":"textarea"
        },

        {
            "type":"textarea",
            "required":false,
            "label":"Signature",
            "placeholder":"Signature",
            "className":"form-control",
            "name":"part_7_consent_to_collect_share_your_information3",
            "access":false,
            "subtype":"textarea"
        },

        {
            "type":"textarea",
            "required":false,
            "label":"Date",
            "placeholder":"Date",
            "className":"form-control",
            "name":"part_7_consent_to_collect_share_your_information4",
            "access":false,
            "subtype":"textarea"
        },

        {
            "type":"textarea",
            "required":false,
            "label":"Full name",
            "placeholder":"Full name",
            "className":"form-control",
            "name":"part_7_consent_to_collect_share_your_information5",
            "access":false,
            "subtype":"textarea"
        },


        {
            "type":"textarea",
            "required":false,
            "label":"Signature",
            "placeholder":"Signature",
            "className":"form-control",
            "name":"part_7_consent_to_collect_share_your_information6",
            "access":false,
            "subtype":"textarea"
        },

        {
            "type":"textarea",
            "required":false,
            "label":"Date",
            "placeholder":"Date",
            "className":"form-control",
            "name":"part_7_consent_to_collect_share_your_information7",
            "access":false,
            "subtype":"textarea"
        },

        {
            "type":"textarea",
            "required":false,
            "label":"Full Name of person completing this form (please print):",
            "placeholder":"Full Name of person completing this form (please print):",
            "className":"form-control",
            "name":"part_7_consent_to_collect_share_your_information8",
            "access":false,
            "subtype":"textarea"
        },
        {
            "type":"textarea",
            "required":false,
            "label":"Relationship to participant",
            "placeholder":"Relationship to participant",
            "className":"form-control",
            "name":"part_7_consent_to_collect_share_your_information9",
            "access":false,
            "subtype":"textarea"
        }
     ]';

        $form = Form::insertGetId([
            'name' => 'Nutrition and Dysphagia Assistive Technology Supports Assessment Template'
        ]);

        $heading1 = FormHeading::insertGetId([
            'form_heading' => 'Part 1 - Details',
            'form_id' => $form,
            'section_html' => $section1
        ]);

        $heading2 = FormHeading::insertGetId([
            'form_heading' => 'PART 2 - Evaluation / Assessment',
            'form_id' => $form,
            'section_html' => $section2
        ]);

        $heading3 = FormHeading::insertGetId([
            'form_heading' => 'PART 3 - Exploration of Options',
            'form_id' => $form,
            'section_html' => $section3
        ]);

        $heading4 = FormHeading::insertGetId([
            'form_heading' => 'PART 4 - Recommended Option',
            'form_id' => $form,
            'section_html' => $section4
        ]);

        $heading5 = FormHeading::insertGetId([
            'form_heading' => 'PART 5 – Recommended Nutrition Support AT specification',
            'form_id' => $form,
            'section_html' => $section5
        ]);

        $heading6 = FormHeading::insertGetId([
            'form_heading' => 'PART 6 – Details of Assistive Technology Assessor',
            'form_id' => $form,
            'section_html' => $section6
        ]);

        $heading7 = FormHeading::insertGetId([
            'form_heading' => 'PART 7 – Consent to Collect and Share Your Information - Provider AT Assessment and Quotation(s)',
            'form_id' => $form,
            'section_html' => $section7
        ]);

        // $form = FormHeading::create([
        //     'form_heading' => 'Participant and Plan Management Details',
        //     'form_id' => '8',
        //     'section_html' => $section7
        // ]);


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
        FormField::create([
        'form_heading_id' => $heading7,
        'form_field' => $form_fields7
        ]);

        
    }
}
