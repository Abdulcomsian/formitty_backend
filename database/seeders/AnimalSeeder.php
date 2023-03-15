<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\{Form , FormHeading , FormField};

class AnimalSeeder extends Seeder
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
                                <p style='font-size:12pt; font-weight:bold; margin-top:5px; margin-bottom:5px; color: white'>  Part 1 - Details</p>
                            </td>
                        </tr>
                    </table>
                    <p style='font-weight: bold; margin-bottom: 10px; margin-top: 10px'>1.1	NDIS Participant Details </p>
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
                            <td style='border: 1px solid lightslategray; padding: 10px'>
                                {{part_1_plan_management_ndis_coordinator}}
                            </td>
                            </tr>
                            <tr>
                            <td style='border: 1px solid lightslategray; padding: 10px; width: 40%;background-color: lightgrey; font-size: 17px'>Contact Details</td>
                            <td style='border: 1px solid lightslategray; padding: 10px'>
                                {{part_1_ndis_participantcontact_details}}
                            </td>
                            </tr>
                            
                        </tbody>
                    </table>
                    <p style='margin-top:10px'></p>";



        $section2 = "<table style='background-color:#7209B7; border:none; width:100%;'>
                        <tr>
                            <td>
                                <p style='font-size:12pt; font-weight:bold; margin-top:5px; margin-bottom:5px; color: white'> PART 2 – Evaluation and Assessment</p>
                            </td>
                        </tr>
                    </table>
                    <p style='font-weight:bold; font-size:13pt;margin-top:20px; margin-bottom:20px;'>2.1   Background </p>
                    <p style='font-size:12pt;'>General: Describe participant’s current status which may include diagnosis, prognosis, co-existing conditions, disability, personal and instrumental activities of daily living, formal and informal support arrangements and life transitions.</p>
                    <table style='width:100%; border: 1px solid black'>
                        <tr>
                            <td style='width: 100%; border: 1px solid black;'><p style='margin-top:10px; margin-bottom:10px;'> {{part_2_assesment_background}}</p></td>
                        </tr>
                    </table>
                    <p style='font-weight:bold; font-size:13pt;margin-top:20px; margin-bottom:20px;'>2.2 Participant Goals</p>
                    <p style='font-size:12pt;'>If the participant’s NDIS plan has been made available, you can refer to the statement of participant’s goals and outline those relevant to provision of an Assistance Animal.</p>
                    <table style='width:100%; border: 1px solid black'>
                        <tr>
                            <td style='width: 100%; border: 1px solid black;'><p style='margin-top:10px; margin-bottom:10px;'> {{part_2_assesment_participantgoals}}</p></td>
                        </tr>
                    </table>
                    <p style='font-weight:bold; font-size:13pt;margin-top:20px; margin-bottom:20px;'>2.3 Functional Assessment</p>
                    <p style='font-size:12pt;'>Outline the specific functional limitation/s related to the participant’s disability that indicate the need for the Assistance Animal. Summarise relevant assessments that have been undertaken such as sensory profiling, cognitive assessments, current capacity to access the community, positive behaviour support assessments. Please only comment on the below points where applicable.</p>
                    <table style=' width:100%; border: 1px solid black;'>
                    <tr>
                    <td style='width:40%;'>Physical</td>
                    <td style='width:60%; border: 1px solid black;'>{{part_2_physical_functional_assessment}}</td>
                    </tr>
                    <tr>
                    <td style='width:40%;'>Sensory</td>
                    <td style='width:60%; border: 1px solid black;'>{{part_2_sensory_functional_assessment}}</td>
                    </tr>
                    <tr>
                    <td style='width:40%;'>Communication</td>
                    <td style='width:60%; border: 1px solid black;'>{{part_2_communication_functional_assessment}}</td>
                    </tr>
                    <tr>
                    <td style='width:40%;'>Cognitive</td>
                    <td style='width:60%; border: 1px solid black;'>{{part_2_cognitive_functional_assessment}}</td>
                    </tr>
                    <tr>
                    <td style='width:40%;'>Behavioural</td>
                    <td style='width:60%; border: 1px solid black;'>{{part_2_behavioural_functional_assessment}}</td>
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
                <body>
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
                                    Field Data
                                </td>
                                <td style='border: 1px solid lightslategray; padding: 10px'>
                                    Field Data
                                </td>
                                <td style='border: 1px solid lightslategray; padding: 10px'>
                                    Field Data
                                </td>
                                <td style='border: 1px solid lightslategray; padding: 10px'>
                                    Field Data
                                </td>
                                <td style='border: 1px solid lightslategray; padding: 10px'>
                                    Field Data
                                </td>
                            </tr>
                            <tr>

                                <td style='border: 1px solid lightslategray; padding: 10px'>
                                    Field Data
                                </td>
                                <td style='border: 1px solid lightslategray; padding: 10px'>
                                    Field Data
                                </td>
                                <td style='border: 1px solid lightslategray; padding: 10px'>
                                    Field Data
                                </td>
                                <td style='border: 1px solid lightslategray; padding: 10px'>
                                    Field Data
                                </td>
                                <td style='border: 1px solid lightslategray; padding: 10px'>
                                    Field Data
                                </td>
                            </tr>
                            <tr>

                                <td style='border: 1px solid lightslategray; padding: 10px'>
                                    Field Data
                                </td>
                                <td style='border: 1px solid lightslategray; padding: 10px'>
                                    Field Data
                                </td>
                                <td style='border: 1px solid lightslategray; padding: 10px'>
                                    Field Data
                                </td>
                                <td style='border: 1px solid lightslategray; padding: 10px'>
                                    Field Data
                                </td>
                                <td style='border: 1px solid lightslategray; padding: 10px'>
                                    Field Data
                                </td>
                            </tr>

                        </tbody>
                    </table>";







    $section4 =  "<p style='margin-top:10px'></p>
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
                        <td style='width: 100%; border: 1px solid black;'><p style='margin-top:10px; margin-bottom:10px;'> Text goes here</p></td>
                    </tr>
                </table>
                <p style='margin-bottom: 10px'>1 NOTE training in AT device use of participant/family or support workers is included and expected to be accomplished within 2 hours. Please provide rationale and hours required if more extensive or specific training is indicated. A quote is not required Is there agreement between the AT assessor and participant on the recommended option? Yes or No. Explain if required.</p>
                <table style='width:100%; border: 1px solid black'>
                    <tr>
                        <td style='width: 100%; border: 1px solid black;'><p style='margin-top:10px; margin-bottom:10px;'> Text goes here</p></td>
                    </tr>
                </table>
                <p style='font-weight:bold; font-size:13pt;margin-top:20px; margin-bottom:20px;'>4.2 Explain the evidence for the recommended option which will facilitate the participant’s goals compared to other options considered.</p>
                <p style='margin-bottom: 10px'>E.g., demonstrated trial outcomes and consideration of long term benefit in both current and anticipated future needs; change or adjustment to personal care supports need. If the recommended enteral feed, nutritional supplement, or thickener is above the basic minimum or standard level, please include specific evidence/ clinical justification in Section 4.4 below. Please consider those products available on the Pharmaceutical Benefits Scheme.</p>
                <table style='width:100%; border: 1px solid black'>
                    <tr>
                        <td style='width: 100%; border: 1px solid black;'><p style='margin-top:10px; margin-bottom:10px;'> Text goes here</p></td>
                    </tr>
                </table>
                <p style='font-weight:bold; font-size:13pt; margin-top:20px; margin-bottom:20px;'>4.3 Are there any other factors that need resolution in order to implement the above?</p>
                <p style='margin-bottom: 10px'>E.g., postural management; behavioural management plan for restrictive practice; are any environmental modifications required.</p>
                <table style='width:100%; border: 1px solid black'>
                    <tr>
                        <td style='width: 100%; border: 1px solid black;'><p style='margin-top:10px; margin-bottom:10px;'> Text goes here</p></td>
                    </tr>
                </table>
                <p style='font-weight:bold; font-size:13pt; margin-top:20px; margin-bottom:20px;'>4.4 If an enteral feed, nutritional supplement or thickener is above basic minimum or standard level being recommended in Section 4.2.</p>
                <p style='margin-bottom: 10px'>Please provide the specific evidence/ clinical justification (e.g., medical confirmation of results of food allergies/intolerance tests or blood nutrient analysis), or if the participant has agreed to fund.</p>
                <table style='width:100%; border: 1px solid black'>
                    <tr>
                        <td style='width: 100%; border: 1px solid black;'><p style='margin-top:10px; margin-bottom:10px;'> Text goes here</p></td>
                    </tr>
                </table>
                <p style='margin-top:10px'></p>";







    $section5 =  "<table style='background-color:#7209B7; border:none; width:100%;'>
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
                        <td style='width: 100%; border: 1px solid black;'><p style='margin-top:10px; margin-bottom:10px;'> Text goes here</p></td>
                    </tr>
                </table>
                <p style='margin-botton: 10px'>Recommended supplier</p>
                <table style='width:100%; border: 1px solid black'>
                    <tr>
                        <td style='width: 100%; border: 1px solid black;'><p style='margin-top:10px; margin-bottom:10px;'> Text goes here</p></td>
                    </tr>
                </table>
                <p style='margin-botton: 10px'>Nutrition support AT equipment delivery costs</p>
                <table style='width:100%; border: 1px solid black'>
                    <tr>
                        <td style='width: 100%; border: 1px solid black;'><p style='margin-top:10px; margin-bottom:10px;'> Text goes here</p></td>
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
                        Field Data
                    </td>
                    <td style='border: 1px solid lightslategray; padding: 10px'>
                        Field Data
                    </td>
                    <td style='border: 1px solid lightslategray; padding: 10px'>
                        Field Data
                    </td>
                </tr>
                <tr>

                    <td style='border: 1px solid lightslategray; padding: 10px'>
                        Field Data
                    </td>
                    <td style='border: 1px solid lightslategray; padding: 10px'>
                        Field Data
                    </td>
                    <td style='border: 1px solid lightslategray; padding: 10px'>
                        Field Data
                    </td>
                </tr>
                <tr>

                    <td style='border: 1px solid lightslategray; padding: 10px'>
                        Field Data
                    </td>
                    <td style='border: 1px solid lightslategray; padding: 10px'>
                        Field Data
                    </td>
                    <td style='border: 1px solid lightslategray; padding: 10px'>
                        Field Data
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
                        <td style='width: 100%; border: 1px solid black;'><p style='margin-top:10px; margin-bottom:10px;'> Text goes here</p></td>
                    </tr>

                    <tr>
                        <td style='width: 100%; border: 1px solid black;'><p style='margin-top:10px; margin-bottom:10px;'>Other supplier’s specification (optional)</p></td>
                    </tr>

                    <tr>
                        <td style='width: 100%; border: 1px solid black;'><p style='margin-top:10px; margin-bottom:10px;'> Text goes here</p></td>
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
            <td style='width:20%; border: 1px solid black;'></td>
            </tr>
            <tr>
            <td style='width:80%; background-color: lightgrey; font-size: 17px;'>I will provide appropriate evidence to the NDIA and/or NDIS Quality and Safeguards Commission if and as requested.</td>
            <td style='width:20%; border: 1px solid black;'></td>
            </tr>
            <tr>
            <td style='width:80%; background-color: lightgrey; font-size: 17px;'>I understand and acknowledge that the NDIA and participant will rely on my professional advice to select, source and implement this assistive technology.</td>
            <td style='width:20%; border: 1px solid black;'></td>
            </tr>
            <tr>
            <td style='width:80%; background-color: lightgrey; font-size: 17px;'>This assistive technology has been assessed by the treating multi-disciplinary team and I have completed the AT assessment on behalf of that team.</td>
            <td style='width:20%; border: 1px solid black;'></td>
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
                    Field Data
                </td>
                </tr>
                <tr>
                <td style='border: 1px solid lightslategray; padding: 10px; width: 40%;background-color: lightgrey; font-size: 17px'>Position</td>
                <td style='border: 1px solid lightslategray; padding: 10px'>
                    Field Data
                </td>
                </tr>
                <tr>
                <td style='border: 1px solid lightslategray; padding: 10px; width: 40%; background-color: lightgrey; font-size: 17px'>Qualification</td>
                <td style='border: 1px solid lightslategray; padding: 10px'>
                    Field Data
                </td>
                </tr>
                <tr>
                <td style='border: 1px solid lightslategray; padding: 10px; width: 40%;background-color: lightgrey; font-size: 17px'>Business Name</td>
                <td style='border: 1px solid lightslategray; padding: 10px'>
                    Field Data
                </td>
                </tr>
                <tr>
                <td style='border: 1px solid lightslategray; padding: 10px; width: 40%;background-color: lightgrey; font-size: 17px'>Contact Telephone Number</td>
                <td style='border: 1px solid lightslategray; padding: 10px'>
                    Field Data
                </td>
                </tr>
                <tr>
                <td style='border: 1px solid lightslategray; padding: 10px; width: 40%;background-color: lightgrey; font-size: 17px'>Email</td>
                <td style='border: 1px solid lightslategray; padding: 10px'>
                    Field Data
                </td>
                </tr>
                <tr>
                <td style='border: 1px solid lightslategray; padding: 10px; width: 40%;background-color: lightgrey; font-size: 17px'>Preferred Contact Method </td>
                <td style='border: 1px solid lightslategray; padding: 10px'>
                    Field Data
                </td>
                </tr>
                <tr>
                <td style='border: 1px solid lightslategray; padding: 10px; width: 40%;background-color: lightgrey; font-size: 17px'>Date of Assessment</td>
                <td style='border: 1px solid lightslategray; padding: 10px'>
                    Field Data
                </td>
                </tr>
                <tr>
                <td style='border: 1px solid lightslategray; padding: 10px; width: 40%;background-color: lightgrey; font-size: 17px'>Date of Report</td>
                <td style='border: 1px solid lightslategray; padding: 10px'>
                    Field Data
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
                <td style='width:60%; border: 1px solid black;'></td>
                </tr>
                <tr>
                <td style='width:40%; background-color: lightgrey; font-size: 17px;'>No, I do not consent</td>
                <td style='width:60%; border: 1px solid black;'></td>
                </tr>
                </table>
                <p style='margin-bottom: 10px'>When i sign this form:</p>
                <p style='margin-bottom: 10px'>I understand that I am giving consent to the NDIA to do the things with my information set out in Part 5. I understand that I can withdraw my consent for the NDIS to do things with my information at any time by letting the NDIA know.</p>
                <p style='margin-bottom: 10px'>I understand that I can access the NDIA’s Privacy Notice and Privacy Policy on the NDIA website or by contacting the NDIA.</p>
                <table style=' width:100%; border: 1px solid black;'>
                <tr>
                <td style='width:40%; background-color: lightgrey; font-size: 17px;'>Signature</td>
                <td style='width:60%; border: 1px solid black;'></td>
                </tr>
                <tr>
                <td style='width:40%; background-color: lightgrey; font-size: 17px;'>Full name</td>
                <td style='width:60%; border: 1px solid black;'></td>
                </tr>
                <tr>
                <td style='width:40%; background-color: lightgrey; font-size: 17px;'>Date</td>
                <td style='width:60%; border: 1px solid black;'></td>
                </tr>
                </table>

                <p style='font-weight:bold; font-size:13pt;margin-top:20px; margin-bottom:20px;'>If you have signed this form on behalf of the NDIS participant,</p>
                <p style='margin-bottom: 10px'>please complete the details below. It is an offence to provide false or misleading information.</p>
                <p style='margin-bottom: 10px'>We may require you to provide evidence of your authority to sign on behalf of the person</p>
                <table style=' width:100%; border: 1px solid black;'>
                <tr>
                <td style='width:40%; background-color: lightgrey; font-size: 17px;'>Signature</td>
                <td style='width:60%; border: 1px solid black;'></td>
                </tr>
                <tr>
                <td style='width:40%; background-color: lightgrey; font-size: 17px;'>Date</td>
                <td style='width:60%; border: 1px solid black;'></td>
                </tr>
                <tr>
                <td style='width:40%; background-color: lightgrey; font-size: 17px;'>Full Name of person completing this form (please print):</td>
                <td style='width:60%; border: 1px solid black;'></td>
                </tr>
                <tr>
                <td style='width:40%; background-color: lightgrey; font-size: 17px;'>Relationship to participant</td>
                <td style='width:60%; border: 1px solid black;'></td>
                </tr>
                </table>";


                $form = Form::create([
                    'name' => 'Animal Assessment Report'
                ]);


                $heading1 = FormHeading::insertGetId([
                    'form_heading' => 'Part 1 – Participant and Plan Management Details',
                    'form_id' => '2',
                    'section_html' => $section1
                ]);

                $heading2 = FormHeading::insertGetId([
                    'form_heading' => 'Part 2 – Assessment',
                    'form_id' => '2',
                    'section_html' => $section2
                ]);

               $heading3 = FormHeading::insertGetId([
                   'form_heading' => 'Part 3 – Assistance Animal Assessment',
                   'form_id' => '2',
                   'section_html' => $section3
               ]);

                $heading4 = FormHeading::insertGetId([
                    'form_heading' => 'Part 4 – Attachments',
                    'form_id' => '2',
                    'section_html' => $section4
                ]);

                $heading5 = FormHeading::insertGetId([
                    'form_heading' => 'Part 5 - Participant feedback and notifications',
                    'form_id' => '2',
                    'section_html' => $section5
                ]);


                $heading6 = FormHeading::insertGetId([
                    'form_heading' => 'Part 6 – Details of Assistive Technology Assessor',
                    'form_id' => '2',
                    'section_html' => $section6
                ]);


                $heading7 = FormHeading::insertGetId([
                    'form_heading' => 'Part 7 – Consent to collect and share your information',
                    'form_id' => '2',
                    'section_html' => $section7
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
                    "type":"number",
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
                    "placeholder":"Enter NDIS Coordinator",
                    "className":"form-control",
                    "name":"part_1_plan_management_ndis_coordinator",
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
                        "label":"Physical",
                        "placeholder":"Enter Physical Limitation",
                        "className":"form-control",
                        "name":"part_2_assesment_participantgoals",
                        "access":false,
                        "subtype":"text"
                        },
                        {
                        "type":"text",
                        "required":false,
                        "label":"Sensory",
                        "placeholder":"Enter Sensory Assessment",
                        "className":"form-control",
                        "name":"part_2_physical_functional_assessment",
                        "access":false,
                        "subtype":"text"
                        },
                        {
                        "type":"text",
                        "required":false,
                        "label":"Communication",
                        "placeholder":"Enter Communication Assessment",
                        "className":"form-control",
                        "name":"part_2_sensory_functional_assessment",
                        "access":false,
                        "subtype":"text"
                        },
                        {
                        "type":"text",
                        "required":false,
                        "label":"Cognitive",
                        "placeholder":"Enter Cognitive Assessment",
                        "className":"form-control",
                        "name":"part_2_communication_functional_assessment",
                        "access":false,
                        "subtype":"text"
                        },
                        {
                        "type":"text",
                        "required":false,
                        "label":"Behavioural",
                        "placeholder":"Enter Behavioural Assessment",
                        "className":"form-control",
                        "name":"part_2_cognitive_functional_assessment",
                        "access":false,
                        "subtype":"text"
                        }
                        ]';
    $form_fields3 = '[
        {
            "type":"text",
            "required":false,
            "label":"Evidence",
            "placeholder":"Enter Evidence",
            "className":"form-control",
            "name":"part_3_evidence",
            "access":false,
            "subtype":"text"
        },
            {
                "type":"text",
                "required":false,
                "label":"Functional limitation",
                "placeholder":"Enter Functional Limitation",
                "className":"form-control",
                "name":"part_3_functional_limitation",
                "access":false,
                "subtype":"text"
            },
            {
                "type":"text",
                "required":false,
                "label":"How the Assistance Animal will assist",
                "placeholder":"How Assistance Animal will Assist",
                "className":"form-control",
                "name":"part_3_assistanceanimation_assist",
                "access":false,
                "subtype":"text"
            },
            {
                "type":"text",
                "required":false,
                "label":"Equipment / methods and access to allied health",
                "placeholder":"Enter current equipment / methods / access to allied health interventions",
                "className":"form-control",
                "name":"part_3_current_equipment",
                "access":false,
                "subtype":"text"
            },
            {
                "type":"text",
                "required":false,
                "label":"Alternative options",
                "placeholder":"Enter Alternative Options",
                "className":"form-control",
                "name":"part_3_alternative_options",
                "access":false,
                "subtype":"text"
            },
            {
                "type":"text",
                "required":false,
                "label":"Benefits",
                "placeholder":"Enter Benefits",
                "className":"form-control",
                "name":"part_3_assistanceanimal_benefits",
                "access":false,
                "subtype":"text"
            },
            {
                "type":"text",
                "required":false,
                "label":"Participant Activities",
                "placeholder":"Provide Comprehensive Details",
                "className":"form-control",
                "name":"part_3_comprehensive_detail",
                "access":false,
                "subtype":"text"
            },
            {
                "type":"text",
                "required":false,
                "label":"Assistance Animal working life",
                "placeholder":"What is the anticipated working life of the Assistance Animal?",
                "className":"form-control",
                "name":"part_3_working_life",
                "access":false,
                "subtype":"text"
            },
            {
                "type":"text",
                "required":false,
                "label":"Participant supports",
                "placeholder":"Enter Current Supports",
                "className":"form-control",
                "name":"part_3_participant_supports",
                "access":false,
                "subtype":"text"
            },
            {
                "type":"text",
                "required":false,
                "label":"Plan Of Use",
                "placeholder":"Please provide a detailed plan",
                "className":"form-control",
                "name":"part_3_planof_use",
                "access":false,
                "subtype":"text"
            },
            {
                "type":"text",
                "required":false,
                "label":"Evidence of effectiveness",
                "placeholder":"Enter Benefit Evidence for participant",
                "className":"form-control",
                "name":"part_3_evidence",
                "access":false,
                "subtype":"text"
            },
            {
                "type":"text",
                "required":false,
                "label":"Objective outcomes",
                "placeholder":"Enter Outcome Objectives",
                "className":"form-control",
                "name":"part_3_objective_outcomes",
                "access":false,
                "subtype":"text"
            },

            {
                "type":"text",
                "required":false,
                "label":"Participant experience with previous animals",
                "placeholder":"Participant experience with previous animals",
                "className":"form-control",
                "name":"part_3_participant_experience",
                "access":false,
                "subtype":"text"
            },
            {
                "type":"text",
                "required":false,
                "label":"Medical impacts",
                "placeholder":"Enter Any Medical impacts",
                "className":"form-control",
                "name":"part_3_medical_impact",
                "access":false,
                "subtype":"text"
            },
            {
                "type":"text",
                "required":false,
                "label":"Alternate funding",
                "placeholder":"Enter Alternate funding",
                "className":"form-control",
                "name":"part_3_alternate_funding",
                "access":false,
                "subtype":"text"
            },
            {
                "type":"text",
                "required":false,
                "label":"Reasonable expectations of care",
                "placeholder":"Enter Reasonable expectations of care",
                "className":"form-control",
                "name":"part_3_expectation_care",
                "access":false,
                "subtype":"text"
            },
            {
                "type":"text",
                "required":false,
                "label":"Mitigation of Risk",
                "placeholder":"Enter Mitigation of Risk",
                "className":"form-control",
                "name":"part_3_mitigation_risk",
                "access":false,
                "subtype":"text"
            },
            {
                "type":"text",
                "required":false,
                "label":"Primary handler",
                "placeholder":"Enter Primary handler",
                "className":"form-control",
                "name":"part_3_primary_handler",
                "access":false,
                "subtype":"text"
            },
            {
                "type":"text",
                "required":false,
                "label":"Home environment",
                "placeholder":"Enter Home environment",
                "className":"form-control",
                "name":"part_3_home_enviroment",
                "access":false,
                "subtype":"text"
            },
            {
                "type":"text",
                "required":false,
                "label":"Attendance at school",
                "placeholder":"Will Assisted Animal Attend School",
                "className":"form-control",
                "name":"part_3_schoold_attendance",
                "access":false,
                "subtype":"text"
            },
            {
                "type":"text",
                "required":false,
                "label":"Permission to attend school",
                "placeholder":"Do you have Permission For Animal to attend school",
                "className":"form-control",
                "name":"part_3_objective_outcomes",
                "access":false,
                "subtype":"text"
            },
            {
                "type":"text",
                "required":false,
                "label":"School environment",
                "placeholder":"Enter School environment",
                "className":"form-control",
                "name":"part_3_schoolenviroment",
                "access":false,
                "subtype":"text"
            },

            {
                "type":"text",
                "required":false,
                "label":"Public access test",
                "placeholder":"Provide Evidence of Public access test",
                "className":"form-control",
                "name":"part_3_publicaccess_test",
                "access":false,
                "subtype":"text"
            },
            {
                "type":"text",
                "required":false,
                "label":"Enter Legal responsibility",
                "placeholder":"Enter Name of Person",
                "className":"form-control",
                "name":"part_3_legal_responsibility",
                "access":false,
                "subtype":"text"
            },
            {
                "type":"text",
                "required":false,
                "label":"Standards",
                "placeholder":"Provide the Standards the Assistance Animal provider adheres to.",
                "className":"form-control",
                "name":"part_3_standards",
                "access":false,
                "subtype":"text"
            }
        ]';

    $form_fields4 = '[{"type":"textarea","required":false,"label":"Continence Recommendations","placeholder":"Enter Specific Evidence","className":"form-control","name":"part_4_con_recomm_specific_evidence","access":false,"subtype":"textarea"},{"type":"textarea","required":false,"label":"Continence Recommendations","placeholder":"Enter additional features, customisation or specification recommended","className":"form-control","name":"part_4_con_recomm_additional_feature","access":false,"subtype":"textarea"},{"type":"textarea","required":false,"label":"Item 1","placeholder":"Enter Item","className":"form-control","name":"part_4_con_recomm_item1","access":false,"subtype":"textarea"},{"type":"textarea","required":false,"label":"Item 2","placeholder":"Enter Item","className":"form-control","name":"part_4_con_recomm_item2","access":false,"subtype":"textarea"},{"type":"textarea","required":false,"label":"Item 3","placeholder":"Enter Item","className":"form-control","name":"part_4_con_recomm_item3","access":false,"subtype":"textarea"},{"type":"textarea","required":false,"label":"Quantity 1","placeholder":"Enter Quantity","className":"form-control","name":"part_4_con_recomm_quantity1","access":false,"subtype":"textarea"},{"type":"textarea","required":false,"label":"Quantity 2","placeholder":"Enter Quantity","className":"form-control","name":"part_4_con_recomm_quantity2","access":false,"subtype":"textarea"},{"type":"textarea","required":false,"label":"Quantity 3","placeholder":"Enter Quantity","className":"form-control","name":"part_4_con_recomm_quantity3","access":false,"subtype":"textarea"},{"type":"text","required":false,"label":"Frequency of Supply 1","placeholder":"Enter Frequency of Supply","className":"form-control","name":"part_4_con_recomm_frequency1","access":false,"subtype":"text"},{"type":"text","required":false,"label":"Frequency of Supply 2","placeholder":"Enter Frequency of Supply","className":"form-control","name":"part_4_con_recomm_frequency2","access":false,"subtype":"text"},{"type":"text","required":false,"label":"Frequency of Supply 3","placeholder":"Enter Frequency of Supply","className":"form-control","name":"part_4_con_recomm_frequency3","access":false,"subtype":"text"},{"type":"text","required":false,"label":"State / Specification 1","placeholder":"Enter State/Specification","className":"form-control","name":"part_4_con_recomm_StateSpecification1","access":false,"subtype":"text"},{"type":"text","required":false,"label":"State / Specification 2","placeholder":"Enter State/Specification","className":"form-control","name":"part_4_con_recomm_StateSpecification2","access":false,"subtype":"text"},{"type":"text","required":false,"label":"State / Specification 3","placeholder":"Enter State/Specification","className":"form-control","name":"part_4_con_recomm_StateSpecification3","access":false,"subtype":"text"},{"type":"text","required":false,"label":"Preferred supplier (Optional)","placeholder":"Enter your Preferred Supplier","className":"form-control","name":"part_4_con_recomm_preferred_supplier1","access":false,"subtype":"text"},{"type":"checkbox-group","required":false,"label":"Supplier Product Use Guidence","toggle":false,"inline":false,"name":"part_4_con_recomm_SPUG1","access":false,"other":false,"values":[{"label":"Option 1","value":"option-1","selected":true}]},{"type":"textarea","required":false,"label":"Information and Instructions","placeholder":"Enter Information and Instructions for Usage.","className":"form-control","name":"part_4_con_recomm_information_instructions_field","access":false,"subtype":"textarea"},{"type":"textarea","required":false,"label":"Urgent supply required?&nbsp;","placeholder":"Enter detail with YES/NO","className":"form-control","name":"part_4_con_recomm_urgentSupply","access":false,"subtype":"textarea"},{"type":"text","required":false,"label":"Scheme Specification (Optional)","placeholder":"Enter your scheme specification here.","className":"form-control","name":"part_4_con_recomm_schemeSpecification","access":false,"subtype":"text"},{"type":"text","required":false,"label":"Other supplier specification (Optional)","placeholder":"Enter your supplier specification","className":"form-control","name":"part_4_con_recomm_supplier_specification","access":false,"subtype":"text"},{"type":"radio-group","required":true,"label":"Participant Agreement","inline":false,"name":"part_4_con_recomm_participant_agreement","access":false,"other":false,"values":[{"label":"Yes","value":"","selected":true},{"label":"No","value":"option-2","selected":false},{"label":"Please provide details","value":"option-3","selected":false}]}]';

    $form_fields5 = '[{"type":"checkbox-group","required":false,"label":"Meet the NDIA expectation","toggle":false,"inline":false,"name":"part_5_declaration_NDIA_expectation","access":false,"other":false,"values":[{"label":"YES/NO","value":"option-1","selected":true}]},{"type":"checkbox-group","required":false,"label":"Providing appropriate evidence to the NDIA","toggle":false,"inline":false,"name":"part_5_declaration_appropriate_evidence","access":false,"other":false,"values":[{"label":"YES/NO","value":"option-1","selected":true}]},{"type":"checkbox-group","required":false,"label":"I understand all about the NDIA","toggle":false,"inline":false,"name":"part_5_declaration_NDIA_understanding","access":false,"other":false,"values":[{"label":"YES/NO","value":"option-1","selected":false}]},{"type":"checkbox-group","required":false,"label":"Accessing by the treating multi-disciplinary team","toggle":false,"inline":false,"name":"part_5_declaration_accessing_team","access":false,"other":false,"values":[{"label":"YES/NO","value":"option-1","selected":false}]},{"type":"text","required":false,"label":"Name","placeholder":"Enter Assessor’s  Name","className":"form-control","name":"part_5_assessors_name","access":false,"subtype":"text"},{"type":"text","required":false,"label":"NDIS Provider Registration Number","placeholder":"Enter Registration Number","className":"form-control","name":"part_5_registration_number","access":false,"subtype":"text"},{"type":"text","required":false,"label":"Phone Number","placeholder":"Enter Phone Number","className":"form-control","name":"part_5_assessorphone_number","access":false,"subtype":"text"},{"type":"text","subtype":"email","required":false,"label":"Email","placeholder":"Enter Email Address","className":"form-control","name":"part_5_email_address","access":false},{"type":"text","required":false,"label":"Qualification","placeholder":"Enter Qualification here.","className":"form-control","name":"part_5_qualification","access":false,"subtype":"text"},{"type":"date","required":false,"label":"Date of Assessment","placeholder":"Set Date of Assessment","className":"form-control","name":"part_5_date_assessment","access":false},{"type":"date","required":false,"label":"Date of Report","placeholder":"Set Date of Report","className":"form-control","name":"part_5_reportDate","access":false}]';

    $form_fields6 = '[{"type":"checkbox-group","required":false,"label":"Meet the NDIA expectation","toggle":false,"inline":false,"name":"part_6_declaration_NDIA_expectation","access":false,"other":false,"values":[{"label":"YES/NO","value":"option-1","selected":true}]},{"type":"checkbox-group","required":false,"label":"Providing appropriate evidence to the NDIA","toggle":false,"inline":false,"name":"part_6_declaration_appropriate_evidence","access":false,"other":false,"values":[{"label":"YES/NO","value":"option-1","selected":true}]},{"type":"checkbox-group","required":false,"label":"I understand all about the NDIA","toggle":false,"inline":false,"name":"part_6_declaration_NDIA_understanding","access":false,"other":false,"values":[{"label":"YES/NO","value":"option-1","selected":false}]},{"type":"checkbox-group","required":false,"label":"Accessing by the treating multi-disciplinary team","toggle":false,"inline":false,"name":"part_6_declaration_accessing_team","access":false,"other":false,"values":[{"label":"YES/NO","value":"option-1","selected":false}]},{"type":"text","required":false,"label":"Name","placeholder":"Enter Assessor’s  Name","className":"form-control","name":"part_6_assessors_name","access":false,"subtype":"text"},{"type":"text","required":false,"label":"NDIS Provider Registration Number","placeholder":"Enter Registration Number","className":"form-control","name":"part_6_registration_number","access":false,"subtype":"text"},{"type":"text","required":false,"label":"Phone Number","placeholder":"Enter Phone Number","className":"form-control","name":"part_6_assessorphone_number","access":false,"subtype":"text"},{"type":"text","subtype":"email","required":false,"label":"Email","placeholder":"Enter Email Address","className":"form-control","name":"part_6_email_address","access":false},{"type":"text","required":false,"label":"Qualification","placeholder":"Enter Qualification here.","className":"form-control","name":"part_6_qualification","access":false,"subtype":"text"},{"type":"date","required":false,"label":"Date of Assessment","placeholder":"Set Date of Assessment","className":"form-control","name":"part_6_date_assessment","access":false},{"type":"date","required":false,"label":"Date of Report","placeholder":"Set Date of Report","className":"form-control","name":"part_6_reportDate","access":false}]';

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
        'form_field' => $form_fields6
    ]);


    }
}
