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
                                Field Data
                            </td>
                            </tr>
                            <tr>
                            <td style='border: 1px solid lightslategray; padding: 10px; width: 40%;background-color: lightgrey; font-size: 17px'>Date of Birth</td>
                            <td style='border: 1px solid lightslategray; padding: 10px'>
                                Field Data
                            </td>
                            </tr>
                            <tr>
                            <td style='border: 1px solid lightslategray; padding: 10px; width: 40%; background-color: lightgrey; font-size: 17px'>Age</td>
                            <td style='border: 1px solid lightslategray; padding: 10px'>
                                Field Data
                            </td>
                            </tr>
                            <tr>
                            <td style='border: 1px solid lightslategray; padding: 10px; width: 40%;background-color: lightgrey; font-size: 17px'>NDIS Number</td>
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
                            <td style='border: 1px solid lightslategray; padding: 10px; width: 40%;background-color: lightgrey; font-size: 17px'>Address</td>
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
                            <td style='border: 1px solid lightslategray; padding: 10px; width: 40%;background-color: lightgrey; font-size: 17px'>Nominee or Guardian Name</td>
                            <td style='border: 1px solid lightslategray; padding: 10px'>
                                Field Data
                            </td>
                            </tr>
                            <tr>
                            <td style='border: 1px solid lightslategray; padding: 10px; width: 40%;background-color: lightgrey; font-size: 17px'>Nominee or Guardian Phone</td>
                            <td style='border: 1px solid lightslategray; padding: 10px'>
                                Field Data
                            </td>
                            </tr>
                            <tr>
                            <td style='border: 1px solid lightslategray; padding: 10px; width: 40%;background-color: lightgrey; font-size: 17px'>NDIS Support Coordinator</td>
                            <td style='border: 1px solid lightslategray; padding: 10px'>
                                Field Data
                            </td>
                            </tr>
                            <tr>
                            <td style='border: 1px solid lightslategray; padding: 10px; width: 40%;background-color: lightgrey; font-size: 17px'>Contact Details</td>
                            <td style='border: 1px solid lightslategray; padding: 10px'>
                                Field Data
                            </td>
                            </tr>
                            
                        </tbody>
                    </table>
                    <p style='font-weight: bold; margin-bottom: 10px; margin-top: 10px'>1.2 NDIS Participant Plan Management Details</p>
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
                                Field Data
                            </td>
                            </tr>
                            <tr>
                            <td style='border: 1px solid lightslategray; padding: 10px; width: 40%; background-color: lightgrey; font-size: 17px'>Self-Managed</td>
                            <td style='border: 1px solid lightslategray; padding: 10px'>
                                Field Data
                            </td>
                            </tr>
                            <tr>
                            <td style='border: 1px solid lightslategray; padding: 10px; width: 40%; background-color: lightgrey; font-size: 17px'>Registered Plan Management Provider</td>
                            <td style='border: 1px solid lightslategray; padding: 10px'>
                                Field Data
                            </td>
                            </tr>
                            <tr>
                            <td style='border: 1px solid lightslategray; padding: 10px; width: 40%; background-color: lightgrey; font-size: 17px'>Contact Details </td>
                            <td style='border: 1px solid lightslategray; padding: 10px'>
                                Field Data
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
                        <td style='width: 100%; border: 1px solid black;'><p style='margin-top:10px; margin-bottom:10px;'> Text goes here</p></td>
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
                        <td style='width: 100%; border: 1px solid black;'><p style='margin-top:10px; margin-bottom:10px;'> Text goes here</p></td>
                    </tr>
                </table>
                <p style='font-weight:bold; font-size:13pt;margin-top:20px; margin-bottom:20px;'>2.3 Participant’s measurements details</p>
                <table style=' width:100%; border: 1px solid black;'>
                <tr>
                <td style='width:40%;'>Date of measurement</td>
                <td style='width:60%; border: 1px solid black;'></td>
                </tr>
                <tr>
                <td style='width:40%;'>Height in centimetres (cm)</td>
                <td style='width:60%; border: 1px solid black;'></td>
                </tr>
                <tr>
                <td style='width:40%;'>Weight in kilograms (kg)</td>
                <td style='width:60%; border: 1px solid black;'></td>
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


        $form_fields1 = '[
                            {"type":"text","required":false,"label":"Name","placeholder":"Enter name","className":"form-control","name":"ndis_name","access":false,"subtype":"text"},
                            {"type":"text","required":false,"label":"Date of birth","placeholder":"Enter DOB","className":"form-control","name":"ndis_dob","access":false,"subtype":"text"},
                            {"type":"text","required":false,"label":"Age","placeholder":"Enter age","className":"form-control","name":"ndis_age","access":false,"subtype":"text"},
                            {"type":"text","required":false,"label":"NDIS number","placeholder":"Enter NDIS number","className":"form-control","name":"ndis_number","access":false,"subtype":"text"},
                            {"type":"text","required":false,"label":"NDIS address","placeholder":"Enter address","className":"form-control","name":"ndis_address","access":false,"subtype":"text"},
                            {"type":"text","required":false,"label":"Contact Telephone Number","placeholder":"Enter telephone number","className":"form-control","name":"ndis_telephone_number","access":false,"subtype":"text"},
                            {"type":"text","required":false,"label":"Email","placeholder":"Enter email","className":"form-control","name":"ndis_email","access":false,"subtype":"text"},
                            {"type":"text","required":false,"label":"Prefered contact number","placeholder":"Enter preferred contact number","className":"form-control","name":"ndis_preferred_contact_number","access":false,"subtype":"text"},
                            {"type":"text","required":false,"label":"Alternative contact (nominee or guardian) name","placeholder":"Enter alternative contact","className":"form-control","name":"ndis_alternative_contact","access":false,"subtype":"text"},
                            {"type":"text","required":false,"label":"Alternative contact (nominee or guardian) phone","placeholder":"Enter alternative phone","className":"form-control","name":"ndis_alternative_phone","access":false,"subtype":"text"},
                            {"type":"text","required":false,"label":"NDIS support coordinator","placeholder":"Enter support coordinator","className":"form-control","name":"ndis_support_coordinator","access":false,"subtype":"text"},
                            {"type":"text","required":false,"label":"Contact details","placeholder":"Enter contact details","className":"form-control","name":"ndis_contact_details","access":false,"subtype":"text"}
                            {"type":"text","required":false,"label":"Agency managed","placeholder":"Enter agency managed","className":"form-control","name":"ndis_agency_managed","access":false,"subtype":"text"},
                            {"type":"text","required":false,"label":"Self-Managed","placeholder":"Enter self managed","className":"form-control","name":"ndis_self_managed","access":false,"subtype":"text"},
                            {"type":"text","required":false,"label":"Registered plan management provider","placeholder":"Enter registered plan management provider","className":"form-control","name":"ndis_registered_plan","access":false,"subtype":"text"},
                            {"type":"text","required":false,"label":"Contact details","placeholder":"Enter contact details","className":"form-control","name":"ndis_contact_details","access":false,"subtype":"text"}]';
        $form_fields2 = '[
                            [{"type":"text","required":false,"label":"Date of measurement","placeholder":"Enter date of measurement","className":"form-control","name":"ndis_date_of_measurement","access":false,"subtype":"text"},
                            {"type":"text","required":false,"label":"Height in centimetres (cm)","placeholder":"Enter height in centimetres (cm)","className":"form-control","name":"ndis_height","access":false,"subtype":"text"},
                            {"type":"text","required":false,"label":"Weight in kilograms (kg)","placeholder":"Enter weight in kilograms(kg)","className":"form-control","name":"ndis_weight","access":false,"subtype":"text"}]
                        ]';


        $form_fields3 = '[
                            {"type":"text","required":false,"label":"<span lang=\"EN-AU\" style=\"font-size:12.0pt;mso-bidi-font-size:\n11.0pt;line-height:120%;font-family:&quot;Arial&quot;,sans-serif;mso-fareast-font-family:\nCalibri;mso-fareast-theme-font:minor-latin;mso-bidi-font-family:&quot;Times New Roman&quot;;\nmso-bidi-theme-font:minor-bidi;mso-ansi-language:EN-AU;mso-fareast-language:\nEN-US;mso-bidi-language:AR-SA\">Option 1</span>","className":"form-control","name":"ndis_option","access":false,"subtype":"text"},
                            {"type":"text","required":false,"label":"Option 2","className":"form-control","name":"ndis_option_2","access":false,"subtype":"text"},{"type":"text","required":false,"label":"Option 3","className":"form-control","name":"ndis_option_3","access":false,"subtype":"text"},
                            {"type":"text","required":false,"label":"<span lang=\"EN-AU\" style=\"font-size:11.0pt;line-height:120%;font-family:&quot;Arial&quot;,sans-serif;\nmso-fareast-font-family:Calibri;mso-fareast-theme-font:minor-latin;mso-bidi-font-family:\n&quot;Times New Roman&quot;;mso-bidi-theme-font:minor-bidi;mso-ansi-language:EN-AU;\nmso-fareast-language:EN-US;mso-bidi-language:AR-SA\">Describe potential options\nin relation to goal achievement</span>","className":"form-control","name":"ndis_potential_option","access":false,"subtype":"text"},
                            {"type":"text","required":false,"label":"<span lang=\"EN-AU\" style=\"font-size:11.0pt;line-height:120%;font-family:&quot;Arial&quot;,sans-serif;\nmso-fareast-font-family:Calibri;mso-fareast-theme-font:minor-latin;mso-bidi-font-family:\n&quot;Times New Roman&quot;;mso-bidi-theme-font:minor-bidi;mso-ansi-language:EN-AU;\nmso-fareast-language:EN-US;mso-bidi-language:AR-SA\">Describe potential options\nin relation to goal achievement</span>","className":"form-control","name":"ndis_potential_option_2","access":false,"subtype":"text"},
                            {"type":"text","required":false,"label":"<span lang=\"EN-AU\" style=\"font-size:11.0pt;line-height:120%;font-family:&quot;Arial&quot;,sans-serif;\nmso-fareast-font-family:Calibri;mso-fareast-theme-font:minor-latin;mso-bidi-font-family:\n&quot;Times New Roman&quot;;mso-bidi-theme-font:minor-bidi;mso-ansi-language:EN-AU;\nmso-fareast-language:EN-US;mso-bidi-language:AR-SA\">Describe potential options\nin relation to goal achievement</span>","className":"form-control","name":"ndis_potential_option_3","access":false,"subtype":"text"},
                            {"type":"text","required":false,"label":"<span lang=\"EN-AU\" style=\"font-size: 11pt; line-height: 120%; font-family: Arial, sans-serif;\">Trialled (T) or Considered\n(C)? Trial details (date, length, location)</span><br>","className":"form-control","name":"ndis_trial_details","access":false,"subtype":"text"},
                            {"type":"text","required":false,"label":"<span lang=\"EN-AU\" style=\"font-size: 11pt; line-height: 120%; font-family: Arial, sans-serif;\">Trialled (T) or Considered\n(C)? Trial details (date, length, location)</span><br>","className":"form-control","name":"ndis_trial_details_2","access":false,"subtype":"text"},
                            {"type":"text","required":false,"label":"<span lang=\"EN-AU\" style=\"font-size: 11pt; line-height: 120%; font-family: Arial, sans-serif;\">Trialled (T) or Considered\n(C)? Trial details (date, length, location)</span><br>","className":"form-control","name":"ndis_trial_details_3","access":false,"subtype":"text"},
                            {"type":"text","required":false,"label":"<span lang=\"EN-AU\" style=\"font-size: 11pt; line-height: 120%; font-family: Arial, sans-serif;\">Why was it considered\nsuitable/not suitable?</span><br>","className":"form-control","name":"ndis_considered","access":false,"subtype":"text"},
                            {"type":"text","required":false,"label":"<span lang=\"EN-AU\" style=\"font-size: 11pt; line-height: 120%; font-family: Arial, sans-serif;\">Why was it considered\nsuitable/not suitable?</span><br>","className":"form-control","name":"ndis_considered_2","access":false,"subtype":"text"},
                            {"type":"text","required":false,"label":"<span lang=\"EN-AU\" style=\"font-size: 11pt; line-height: 120%; font-family: Arial, sans-serif;\">Why was it considered\nsuitable/not suitable?</span><br>","className":"form-control","name":"ndis_considered_3","access":false,"subtype":"text"},
                            {"type":"text","required":false,"label":"<span lang=\"EN-AU\" style=\"font-size: 11pt; line-height: 120%; font-family: Arial, sans-serif;\">Estimated cost (include\ntraining)</span><div><div id=\"ftn1\">\n\n</div>\n\n</div>","className":"form-control","name":"ndis_estimated_cost","access":false,"subtype":"text"},
                            {"type":"text","required":false,"label":"<span lang=\"EN-AU\" style=\"font-size: 11pt; line-height: 120%; font-family: Arial, sans-serif;\">Estimated cost (include\ntraining)</span><div><div id=\"ftn1\">\n\n</div>\n\n</div>","className":"form-control","name":"ndis_estimated_cost_2","access":false,"subtype":"text"},
                            {"type":"text","required":false,"label":"<span lang=\"EN-AU\" style=\"font-size: 11pt; line-height: 120%; font-family: Arial, sans-serif;\">Estimated cost (include\ntraining)</span><div><div id=\"ftn1\">\n\n</div>\n\n</div>","className":"form-control","name":"ndis_estimated_cost_3","access":false,"subtype":"text"}
                        ]';
        
        $form_fields4 = '[
                            {"type":"textarea","required":false,"label":"<span lang=\"EN-AU\" style=\"color: rgb(0, 0, 0); font-size: 11pt; line-height: 16.8667px; font-family: Arial, sans-serif;\">Goal attainment</span>","placeholder":"Enter goal attainment","className":"form-control","name":"goal_attainment","access":false,"subtype":"textarea"},
                            {"type":"textarea","required":false,"label":"Additional Feature","placeholder":"Enter additional Feature","className":"form-control","name":"additional_feature","access":false,"subtype":"textarea"},
                            {"type":"radio-group","required":false,"label":"Participant Agreement","inline":false,"name":"participant_agreement","access":false,"other":false,"values":[{"label":"Yes","value":"option-1","selected":false},{"label":"No","value":"option-2","selected":false}]},{"type":"text","required":false,"label":"Agreement Detail","placeholder":"Enter participant agreement detail","className":"form-control","name":"agreement_detail","access":false,"subtype":"text"},
                            {"type":"text","required":false,"label":"<span class=\"Heading2Char\"><span lang=\"EN-AU\" style=\"font-size:12.0pt;mso-bidi-font-size:14.0pt;line-height:120%;mso-fareast-font-family:\nCalibri;mso-fareast-theme-font:minor-latin;mso-bidi-font-family:&quot;Times New Roman&quot;;\nmso-bidi-theme-font:minor-bidi;mso-ansi-language:EN-AU;mso-fareast-language:\nEN-US;mso-bidi-language:AR-SA\">Please state all the supports required for the\nrecommended option including non AT supports and environmental modifications.</span></span><span lang=\"EN-AU\" style=\"font-size:12.0pt;mso-bidi-font-size:11.0pt;line-height:120%;\nfont-family:&quot;Arial&quot;,sans-serif;mso-fareast-font-family:Calibri;mso-fareast-theme-font:\nminor-latin;mso-bidi-font-family:&quot;Times New Roman&quot;;mso-bidi-theme-font:minor-bidi;\nmso-ansi-language:EN-AU;mso-fareast-language:EN-US;mso-bidi-language:AR-SA\"></span>","className":"form-control","name":"ndis_enviromental_modifications","access":false,"subtype":"text"},
                            {"type":"text","required":false,"label":"<p class=\"MsoNormal\"><span lang=\"EN-AU\">Is there agreement between the AT assessor and\nparticipant on the recommended option? Yes or No. Explain if required.<o:p></o:p></span></p><span lang=\"EN-AU\" style=\"font-size:12.0pt;mso-bidi-font-size:11.0pt;line-height:120%;\nfont-family:&quot;Arial&quot;,sans-serif;mso-fareast-font-family:Calibri;mso-fareast-theme-font:\nminor-latin;mso-bidi-font-family:&quot;Times New Roman&quot;;mso-bidi-theme-font:minor-bidi;\nmso-ansi-language:EN-AU;mso-fareast-language:EN-US;mso-bidi-language:AR-SA\"></span>","className":"form-control","name":"ndis_assessror_and_participant","access":false,"subtype":"text"},
                            {"type":"text","required":false,"label":"<p class=\"MsoNormal\"><span class=\"Heading2Char\"><span lang=\"EN-AU\" style=\"font-size:12.0pt;mso-bidi-font-size:14.0pt;line-height:120%;mso-fareast-font-family:\nCalibri;mso-fareast-theme-font:minor-latin;mso-bidi-font-family:&quot;Times New Roman&quot;;\nmso-bidi-theme-font:minor-bidi;mso-ansi-language:EN-AU;mso-fareast-language:\nEN-US;mso-bidi-language:AR-SA\">Explain the evidence for the recommended option\nwhich will facilitate the participant’s goals compared to other options\nconsidered.</span></span><span lang=\"EN-AU\" style=\"font-size:12.0pt;mso-bidi-font-size:\n11.0pt;line-height:120%;font-family:&quot;Arial&quot;,sans-serif;mso-fareast-font-family:\nCalibri;mso-fareast-theme-font:minor-latin;mso-bidi-font-family:&quot;Times New Roman&quot;;\nmso-bidi-theme-font:minor-bidi;mso-ansi-language:EN-AU;mso-fareast-language:\nEN-US;mso-bidi-language:AR-SA\"></span><br></p><span lang=\"EN-AU\" style=\"font-size:12.0pt;mso-bidi-font-size:11.0pt;line-height:120%;\nfont-family:&quot;Arial&quot;,sans-serif;mso-fareast-font-family:Calibri;mso-fareast-theme-font:\nminor-latin;mso-bidi-font-family:&quot;Times New Roman&quot;;mso-bidi-theme-font:minor-bidi;\nmso-ansi-language:EN-AU;mso-fareast-language:EN-US;mso-bidi-language:AR-SA\"></span>","className":"form-control","name":"ndis_evidence","access":false,"subtype":"text"},
                            {"type":"text","required":false,"label":"<p class=\"MsoNormal\"><span class=\"Heading2Char\"><span lang=\"EN-AU\" style=\"font-size:12.0pt;mso-bidi-font-size:14.0pt;line-height:120%;mso-fareast-font-family:\nCalibri;mso-fareast-theme-font:minor-latin;mso-bidi-font-family:&quot;Times New Roman&quot;;\nmso-bidi-theme-font:minor-bidi;mso-ansi-language:EN-AU;mso-fareast-language:\nEN-US;mso-bidi-language:AR-SA\">Are there any other factors that need resolution\nin order to implement the above?</span></span><br></p><span lang=\"EN-AU\" style=\"font-size:12.0pt;mso-bidi-font-size:11.0pt;line-height:120%;\nfont-family:&quot;Arial&quot;,sans-serif;mso-fareast-font-family:Calibri;mso-fareast-theme-font:\nminor-latin;mso-bidi-font-family:&quot;Times New Roman&quot;;mso-bidi-theme-font:minor-bidi;\nmso-ansi-language:EN-AU;mso-fareast-language:EN-US;mso-bidi-language:AR-SA\"></span>","className":"form-control","name":"ndis_other_factors","access":false,"subtype":"text"},
                            {"type":"text","required":false,"label":"<p class=\"MsoNormal\"><span class=\"Heading2Char\"><span lang=\"EN-AU\" style=\"font-size:12.0pt;mso-bidi-font-size:14.0pt;line-height:120%;mso-fareast-font-family:\nCalibri;mso-fareast-theme-font:minor-latin;mso-bidi-font-family:&quot;Times New Roman&quot;;\nmso-bidi-theme-font:minor-bidi;mso-ansi-language:EN-AU;mso-fareast-language:\nEN-US;mso-bidi-language:AR-SA\">If an enteral feed, nutritional supplement or\nthickener is above basic minimum or standard level being recommended in Section\n4.2.</span></span><span lang=\"EN-AU\" style=\"font-size:12.0pt;mso-bidi-font-size:\n11.0pt;line-height:120%;font-family:&quot;Arial&quot;,sans-serif;mso-fareast-font-family:\nCalibri;mso-fareast-theme-font:minor-latin;mso-bidi-font-family:&quot;Times New Roman&quot;;\nmso-bidi-theme-font:minor-bidi;mso-ansi-language:EN-AU;mso-fareast-language:\nEN-US;mso-bidi-language:AR-SA\"></span><br></p><span lang=\"EN-AU\" style=\"font-size:12.0pt;mso-bidi-font-size:11.0pt;line-height:120%;\nfont-family:&quot;Arial&quot;,sans-serif;mso-fareast-font-family:Calibri;mso-fareast-theme-font:\nminor-latin;mso-bidi-font-family:&quot;Times New Roman&quot;;mso-bidi-theme-font:minor-bidi;\nmso-ansi-language:EN-AU;mso-fareast-language:EN-US;mso-bidi-language:AR-SA\"></span>","className":"form-control","name":"ndis_nutritional_supplement","access":false,"subtype":"text"}]
                        ]';
        
        $form_fields5 = '[
                            {"type":"text","required":false,"label":"<span class=\"Heading2Char\"><span lang=\"EN-AU\" style=\"font-size:12.0pt;mso-bidi-font-size:14.0pt;line-height:120%;mso-fareast-font-family:\nCalibri;mso-fareast-theme-font:minor-latin;mso-bidi-font-family:&quot;Times New Roman&quot;;\nmso-bidi-theme-font:minor-bidi;mso-ansi-language:EN-AU;mso-fareast-language:\nEN-US;mso-bidi-language:AR-SA\">Description of nutrition support AT including\nrecommended product(s).</span></span>","className":"form-control","name":"ndis_nutrition_support","access":false,"subtype":"text"},
                            {"type":"text","required":false,"label":"<span class=\"Heading2Char\"><span lang=\"EN-AU\" style=\"font-size:12.0pt;mso-bidi-font-size:14.0pt;line-height:120%;mso-fareast-font-family:\nCalibri;mso-fareast-theme-font:minor-latin;mso-bidi-font-family:&quot;Times New Roman&quot;;\nmso-bidi-theme-font:minor-bidi;mso-ansi-language:EN-AU;mso-fareast-language:\nEN-US;mso-bidi-language:AR-SA\">Recommended supplier</span></span>","className":"form-control","name":"ndis_supplier","access":false,"subtype":"text"},
                            {"type":"text","required":false,"label":"<span class=\"Heading2Char\"><span lang=\"EN-AU\" style=\"font-size:12.0pt;mso-bidi-font-size:14.0pt;line-height:120%;mso-fareast-font-family:\nCalibri;mso-fareast-theme-font:minor-latin;mso-bidi-font-family:&quot;Times New Roman&quot;;\nmso-bidi-theme-font:minor-bidi;mso-ansi-language:EN-AU;mso-fareast-language:\nEN-US;mso-bidi-language:AR-SA\">Nutrition support AT equipment delivery costs</span></span>","className":"form-control","name":"ndis_equipment_delivery_costs","access":false,"subtype":"text"},
                            {"type":"text","required":false,"label":"<span class=\"Heading2Char\"><span lang=\"EN-AU\" style=\"font-size:12.0pt;mso-bidi-font-size:14.0pt;line-height:120%;mso-fareast-font-family:\nCalibri;mso-fareast-theme-font:minor-latin;mso-bidi-font-family:&quot;Times New Roman&quot;;\nmso-bidi-theme-font:minor-bidi;mso-ansi-language:EN-AU;mso-fareast-language:\nEN-US;mso-bidi-language:AR-SA\">Item(s)</span></span>","className":"form-control","name":"ndis_item","access":false,"subtype":"text"},
                            {"type":"text","required":false,"label":"<span class=\"Heading2Char\"><span lang=\"EN-AU\" style=\"font-size:12.0pt;mso-bidi-font-size:14.0pt;line-height:120%;mso-fareast-font-family:\nCalibri;mso-fareast-theme-font:minor-latin;mso-bidi-font-family:&quot;Times New Roman&quot;;\nmso-bidi-theme-font:minor-bidi;mso-ansi-language:EN-AU;mso-fareast-language:\nEN-US;mso-bidi-language:AR-SA\">Item(s)</span></span>","className":"form-control","name":"ndis_item_2","access":false,"subtype":"text"},
                            {"type":"text","required":false,"label":"<span class=\"Heading2Char\"><span lang=\"EN-AU\" style=\"font-size:12.0pt;mso-bidi-font-size:14.0pt;line-height:120%;mso-fareast-font-family:\nCalibri;mso-fareast-theme-font:minor-latin;mso-bidi-font-family:&quot;Times New Roman&quot;;\nmso-bidi-theme-font:minor-bidi;mso-ansi-language:EN-AU;mso-fareast-language:\nEN-US;mso-bidi-language:AR-SA\">Item(s)</span></span>","className":"form-control","name":"ndis_item_3","access":false,"subtype":"text"},
                            {"type":"text","required":false,"label":"<span lang=\"EN-AU\" style=\"font-size: 11pt; line-height: 120%; font-family: Arial, sans-serif;\">Quantity/frequency of\nsupply required</span><br>","className":"form-control","name":"ndis_quantity_frequency","access":false,"subtype":"text"},{"type":"text","required":false,"label":"<span lang=\"EN-AU\" style=\"font-size: 11pt; line-height: 120%; font-family: Arial, sans-serif;\">Quantity/frequency of\nsupply required</span><br>","className":"form-control","name":"ndis_quantity_frequency_2","access":false,"subtype":"text"},
                            {"type":"text","required":false,"label":"<span lang=\"EN-AU\" style=\"font-size: 11pt; line-height: 120%; font-family: Arial, sans-serif;\">Quantity/frequency of\nsupply required</span><br>","className":"form-control","name":"ndis_quantity_frequency_3","access":false,"subtype":"text"},
                            {"type":"text","required":false,"label":"<span lang=\"EN-AU\" style=\"font-size: 11pt; line-height: 120%; font-family: Arial, sans-serif;\">Cost estimate (including\ndelivery)</span><br>","className":"form-control","name":"ndis_cost_estimate","access":false,"subtype":"text"},
                            {"type":"text","required":false,"label":"<span lang=\"EN-AU\" style=\"font-size: 11pt; line-height: 120%; font-family: Arial, sans-serif;\">Cost estimate (including\ndelivery)</span><br>","className":"form-control","name":"ndis_cost_estimate_2","access":false,"subtype":"text"},
                            {"type":"text","required":false,"label":"<span lang=\"EN-AU\" style=\"font-size: 11pt; line-height: 120%; font-family: Arial, sans-serif;\">Cost estimate (including\ndelivery)</span><br>","className":"form-control","name":"ndis_cost_estimate_3","access":false,"subtype":"text"},
                            {"type":"text","required":false,"label":"<span lang=\"EN-AU\" style=\"font-size:12.0pt;line-height:\n120%;font-family:&quot;Arial&quot;,sans-serif;mso-fareast-font-family:Calibri;mso-fareast-theme-font:\nminor-latin;mso-bidi-font-family:&quot;Times New Roman&quot;;mso-bidi-theme-font:minor-bidi;\nmso-ansi-language:EN-AU;mso-fareast-language:EN-US;mso-bidi-language:AR-SA\">Does\nthe participant agree to pay for these from their own (not NDIS) funds? Yes/No</span><br>","className":"form-control","name":"ndis_funds","access":false,"subtype":"text"},
                            {"type":"text","required":false,"label":"<span lang=\"EN-AU\" style=\"font-size:12.0pt;mso-bidi-font-size:\n11.0pt;line-height:120%;font-family:&quot;Arial&quot;,sans-serif;mso-fareast-font-family:\nCalibri;mso-fareast-theme-font:minor-latin;mso-bidi-font-family:&quot;Times New Roman&quot;;\nmso-bidi-theme-font:minor-bidi;mso-ansi-language:EN-AU;mso-fareast-language:\nEN-US;mso-bidi-language:AR-SA\">Other supplier’s specification (optional)</span><br>","className":"form-control","name":"ndis_suppliers_specification","access":false,"subtype":"text"}
                        ]';

        $form_fields6 = '[
                        {"type":"text","required":false,"label":"<span lang=\"EN-AU\" style=\"font-size:12.0pt;mso-bidi-font-size:\n11.0pt;line-height:120%;font-family:&quot;Arial&quot;,sans-serif;mso-fareast-font-family:\nCalibri;mso-fareast-theme-font:minor-latin;mso-bidi-font-family:&quot;Times New Roman&quot;;\nmso-bidi-theme-font:minor-bidi;mso-ansi-language:EN-AU;mso-fareast-language:\nEN-US;mso-bidi-language:AR-SA\">I certify that I meet the NDIA expectations of\nAT assessor provider suitability (including understanding of the current NDIS\nAct, Rules and Operational Guidelines) to assess the type of assistive\ntechnology and associated supports, at the level of complexity required by this\nparticipant.</span>","className":"form-control","name":"ndis_rules_and_operational","access":false,"subtype":"text"},
                        {"type":"text","required":false,"label":"<span lang=\"EN-AU\" style=\"font-size:12.0pt;mso-bidi-font-size:\n11.0pt;line-height:120%;font-family:&quot;Arial&quot;,sans-serif;mso-fareast-font-family:\nCalibri;mso-fareast-theme-font:minor-latin;mso-bidi-font-family:&quot;Times New Roman&quot;;\nmso-bidi-theme-font:minor-bidi;mso-ansi-language:EN-AU;mso-fareast-language:\nEN-US;mso-bidi-language:AR-SA\">I will provide appropriate evidence to the NDIA\nand/or NDIS Quality and Safeguards Commission if and as requested.</span><br>","className":"form-control","name":"ndis_safeguards_commission","access":false,"subtype":"text"},
                        {"type":"text","required":false,"label":"<span lang=\"EN-AU\" style=\"font-size:12.0pt;mso-bidi-font-size:\n11.0pt;line-height:120%;font-family:&quot;Arial&quot;,sans-serif;mso-fareast-font-family:\nCalibri;mso-fareast-theme-font:minor-latin;mso-bidi-font-family:&quot;Times New Roman&quot;;\nmso-bidi-theme-font:minor-bidi;mso-ansi-language:EN-AU;mso-fareast-language:\nEN-US;mso-bidi-language:AR-SA\">I understand and acknowledge that the NDIA and\nparticipant will rely on my professional advice to select, source and implement\nthis assistive technology.</span><br>","className":"form-control","name":"ndis_source_and_implement","access":false,"subtype":"text"},
                        {"type":"text","required":false,"label":"<span lang=\"EN-AU\" style=\"font-size:12.0pt;mso-bidi-font-size:\n11.0pt;line-height:120%;font-family:&quot;Arial&quot;,sans-serif;mso-fareast-font-family:\nCalibri;mso-fareast-theme-font:minor-latin;mso-bidi-font-family:&quot;Times New Roman&quot;;\nmso-bidi-theme-font:minor-bidi;mso-ansi-language:EN-AU;mso-fareast-language:\nEN-US;mso-bidi-language:AR-SA\">This assistive technology has been assessed by\nthe treating multi-disciplinary team and I have completed the AT assessment on\nbehalf of that team.</span><br>","className":"form-control","name":"ndis_assistive_technology","access":false,"subtype":"text"},{"type":"text","required":false,"label":"Name","placeholder":"Enter name","className":"form-control","name":"ndis_assistive_technology_name","access":false,"subtype":"text"},{"type":"text","required":false,"label":"Position","placeholder":"Enter position","className":"form-control","name":"ndis_assistive_technology_position","access":false,"subtype":"text"},{"type":"text","required":false,"label":"Qualification","placeholder":"Enter qualification","className":"form-control","name":"ndis_assistive_technology_qualification","access":false,"subtype":"text"},{"type":"text","required":false,"label":"Business name","placeholder":"Enter business name","className":"form-control","name":"ndis_assistive_technology_business","access":false,"subtype":"text"},{"type":"text","required":false,"label":"Contact telephone number","placeholder":"Enter contact number","className":"form-control","name":"ndis_assistive_contact_number","access":false,"subtype":"text"},{"type":"text","required":false,"label":"Email","placeholder":"Enter email","className":"form-control","name":"ndis_assistive_technology_email","access":false,"subtype":"text"},{"type":"text","required":false,"label":"Preffered contact method","placeholder":"Enter preffered contact","className":"form-control","name":"ndis_assistive_technology_preffered","access":false,"subtype":"text"},{"type":"text","required":false,"label":"Date of assessment","placeholder":"Enter date of assesment","className":"form-control","name":"ndis_assistive_technology_assessment","access":false,"subtype":"text"},{"type":"text","required":false,"label":"Date of report","placeholder":"Enter date of report","className":"form-control","name":"ndis_assistive_technology_report","access":false,"subtype":"text"}]
                        ]';
        
        $form_fields7 = '[
                        {"type":"text","required":false,"label":"Yes, I consent","className":"form-control","name":"ndis_consent","access":false,"subtype":"text"},
                        {"type":"text","required":false,"label":"No, I do not consent","className":"form-control","name":"ndis_donot_consent","access":false,"subtype":"text"},
                        {"type":"text","required":false,"label":"Signature","className":"form-control","name":"ndis_signature","access":false,"subtype":"text"},
                        {"type":"text","required":false,"label":"Date","placeholder":"Enter date","className":"form-control","name":"ndis_date","access":false,"subtype":"text"},
                        {"type":"text","required":false,"label":"Full name","placeholder":"Enter full name","className":"form-control","name":"ndis_full_name","access":false,"subtype":"text"}]';

        $form = Form::insertGetId([
            'name' => 'Notes for Assessors of Nutrition and Dysphagia AT Supports'
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
        'form_field' => $form_fields1
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
