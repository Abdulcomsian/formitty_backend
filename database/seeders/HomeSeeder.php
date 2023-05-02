<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\{Form , FormHeading , FormField};

class HomeSeeder extends Seeder
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
                            <td style='border: 1px solid lightslategray; padding: 10px; width: 40%;background-color: lightgrey; font-size: 15px'><p style='margin-top:8px; margin-bottom:8px; margin-left:8px'>   Nominee or Guardian Name</p></td>
                            <td style='border: 1px solid lightslategray; padding: 10px'>
                                <p style='margin-top:8px; margin-bottom:8px; margin-left:8px'>{{part_1_ndis_participantguardian_name}}</p>
                            </td>
                            </tr>
                            <tr>
                            <td style='border: 1px solid lightslategray; padding: 10px; width: 40%;background-color: lightgrey; font-size: 15px'><p style='margin-top:8px; margin-bottom:8px; margin-left:8px'>   Nominee or Guardian Phone</p></td>
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
                            <tr>
                            <td style='border: 1px solid lightslategray; padding: 10px; width: 40%;background-color: lightgrey; font-size: 15px'><p style='margin-top:8px; margin-bottom:8px; margin-left:8px'>   Date of Assessment</p></td>
                            <td style='border: 1px solid lightslategray; padding: 10px'>
                                <p style='margin-top:8px; margin-bottom:8px; margin-left:10px'>{{part_1_ndis_date_of_assessment}}</p>
                            </td>
                            </tr>
                            <tr>
                            <td style='border: 1px solid lightslategray; padding: 10px; width: 40%;background-color: lightgrey; font-size: 15px'><p style='margin-top:8px; margin-bottom:8px; margin-left:8px'>   Date of Report</p></td>
                            <td style='border: 1px solid lightslategray; padding: 10px'>
                                <p style='margin-top:8px; margin-bottom:8px; margin-left:10px'>{{part_1_ndis_participan_date_of_report}}</p>
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
                    </table>
                    <p></p>";


        $section2 = "<table style='background-color:#6a2c75; border:none; width:100%; margin-top:20px'>
                        <tr>
                            <td>
                                <p style='font-size:14pt; font-weight:bold; margin-top:8px; margin-bottom:8px; color: white'>  PART 2 – Assessment</p>
                            </td>
                        </tr>
                    </table>
                    <p style='font-weight:bold; font-size:13pt;margin-top:10px; margin-bottom:10px;'>2.1 Background</p>
                    <p style='font-size:11pt; margin-bottom:10px'>General: Describe participant’s current status which may include diagnosis, prognosis, co-existing conditions, disability, personal and instrumental activities of daily living, formal and informal support arrangements and life transitions.</p>
                    <table style='width:100%; border: 1px solid black'>
                    <tr><td style='width: 100%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>{{part_2_assesment_background}}</p></td>
                    </tr>
                    </table>
                    <p style='font-weight:bold; font-size:13pt;margin-top:10px; margin-bottom:10px;'>2.2	Participant Goals </p>
                    <p style='font-size:11pt; margin-bottom:10px'>If the participant’s NDIS plan has been made available, you can refer to the statement of participant’s goals and outline those relevant to the AT solution.</p>
                    <table style='width:100%; border: 1px solid black'>
                    <tr>
                    <td style='width: 100%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>{{part_2_assesment_participantgoals}}</p></td>
                    </tr>
                    </table>
                    <p style='font-weight:bold; font-size:13pt;margin-top:10px; margin-bottom:10px;'>2.3	Functional Assessment </p>
                    <p style='font-size:11pt; margin-bottom:10px'>Outline the specific functional limitation/s related to the participant’s disability that indicate the need for the home modification as below;</p>
                    <ul style='margin-bottom: 10px; margin-top: 10px'>
                    <li style='font-size: 11pt'>Current functional status, including functional outcomes on discharge if hospitalised, outlining anticipated optimum level of independence and participation in personal care and domestic activities within the home</li>
                    <li style='font-size: 11pt'>Details of any formal personal support / informal support and the impact of the proposed complex home modification that the participant requires to perform activities of daily living.  </li>
                    <li style='font-size: 11pt'>Comment on the impact of any other non-disability related issues on the participant’s functioning. Consider whether assistive technology, additional capacity building supports would enable the participant to maximise their independence.</li>
                    <li style='font-size: 11pt'>Consider the social and economic participation and the location of the participants home from their activities.</li>
                    </ul>
                    <p style='font-size:11pt; margin-top:10px; margin-bottom:10px'><strong>2.3.1</strong>	Frequency of use of proposed modification.</p>
                    <table style='width:100%; border: 1px solid black'>
                    <tr>
                            <td style='background-color: #efefef; width: 50%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px; font-weight: bold; text-align: center'>  Continuously / multiple times each day</p></td>
                            <td style='background-color: #efefef; width: 50%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px; font-weight: bold; text-align: center'>{{part_2_assesment_functional_assessment1}}</p></td>
                    </tr>
                    <tr>
                            <td style='width: 50%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px; text-align: center'>  Several times weekly  </p></td>
                            <td style='width: 50%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px; text-align: center'>{{part_2_assesment_functional_assessment2}}</p></td>
                    </tr>
                    <tr>
                            <td style='width: 50%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px; text-align: center'>  Other, provide details: </p></td>
                            <td style='width: 50%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px; text-align: center'>{{part_2_assesment_functional_assessment3}}</p></td>
                    </tr>
                    </table>


                    <p style='font-size:11pt; margin-top:10px; margin-bottom:10px'><strong>2.3.2</strong>	Is the Participant / Nominee in agreement with this AT request? Please describe.</p>
                    <table style='width:100%; border: 1px solid black'>
                    <tr>
                    <td style='background-color: #efefef; width: 30%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px; font-weight: bold; '>Yes</p></td>
                    <td style='border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px; '>{{part_2_assesment_functional_assessment4}}</p></td>
                    </tr>
                    <tr>
                    <td style='background-color: #efefef; width: 30%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>No</p></td>
                    <td style=' border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>{{part_2_assesment_functional_assessment5}}</p></td>
                    </tr>
                    <tr>
                    <td style=' background-color: #efefef;width: 30%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>Comment</p></td>
                    <td style=' border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>{{part_2_assesment_functional_assessment6}}</p></td>
                    </tr>
                    </table>
                    <p style='font-size:11pt; margin-top:10px; margin-bottom:10px'><strong>2.3.3</strong>Findings from functional assessment</p>
                    <table style='width:100%; border: 1px solid black'>
                    <tr>
                    <td style='background-color: #efefef; width: 33%; font-weight: bold; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>  Assessment Area</p></td>
                    <td style='background-color: #efefef; width: 33%; font-weight: bold; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>  Current Status</p></td>
                    <td style='background-color: #efefef; width: 33%; font-weight: bold; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>  Expected future level of independence</p></td>
                    </tr>
                    <tr>
                    <td style='width: 33%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>  Mobility (Including the ability to use stairs and ramps)</p></td>
                    <td style='width: 33%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>{{part_2_functional_assessment1}}</p></td>
                    <td style='width: 33%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>{{part_2_functional_assessment2}}</p></td>
                    </tr>
                    <tr>
                    <td style='width: 33%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>  Transfers, consider bed, chair, toilet and car.  </p></td>
                    <td style='width: 33%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>{{part_2_functional_assessment3}}</p></td>
                    <td style='width: 33%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>{{part_2_functional_assessment4}}</p></td>
                    </tr>
                    <tr>
                    <td style='width: 33%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>  Mobility aids, consider typical footprint and circulation space required for wheelchairs</p></td>
                    <td style='width: 33%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>{{part_2_functional_assessment5}}</p></td>
                    <td style='width: 33%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>{{part_2_functional_assessment6}}</p></td>
                    </tr>
                    <tr>
                    <td style='width: 33%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>  Upper limb / Hand function and reach</p></td>
                    <td style='width: 33%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>{{part_2_functional_assessment7}}</p></td>
                    <td style='width: 33%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>{{part_2_functional_assessment8}}</p></td>
                    </tr>
                    <tr>
                    <td style='width: 33%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>  Lifting and carrying capacity</p></td>
                    <td style='width: 33%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>{{part_2_functional_assessment9}}</p></td>
                    <td style='width: 33%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>{{part_2_functional_assessment10}}</p></td>
                    </tr>
                    <tr>
                    <td style='width: 33%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>  Functional cognitive status</p></td>
                    <td style='width: 33%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>{{part_2_functional_assessment11}}</p></td>
                    <td style='width: 33%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>{{part_2_functional_assessment12}}</p></td>
                    </tr>
                    <tr>
                    <td style='width: 33%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>  Other general safety Issues</p></td>
                    <td style='width: 33%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>{{part_2_functional_assessment13}}</p></td>
                    <td style='width: 33%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>{{part_2_functional_assessment14}}</p></td>
                    </tr>
                    </table>


                    <table style='width:100%; border: 1px solid black'>
                    <tr>
                    <td style='background-color: #efefef; width: 33%; font-weight: bold; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>  Personal ADL</p></td>
                    <td style='background-color: #efefef; width: 33%; font-weight: bold; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>  Current Status</p></td>
                    <td style='background-color: #efefef; width: 33%; font-weight: bold; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>  Expected future level of independence</p></td>
                    </tr>
                    <tr>
                    <td style='width: 33%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>  Toileting </p></td>
                    <td style='width: 33%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>{{part_2_functional_assessment15}}</p></td>
                    <td style='width: 33%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>{{part_2_functional_assessment16}}</p></td>
                    </tr>
                    <tr>
                    <td style='width: 33%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>  Dressing</p></td>
                    <td style='width: 33%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>{{part_2_functional_assessment17}}</p></td>
                    <td style='width: 33%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>{{part_2_functional_assessment18}}</p></td>
                    </tr>
                    <tr>
                    <td style='width: 33%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>  Showering/bathing </p></td>
                    <td style='width: 33%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>{{part_2_functional_assessment19}}</p></td>
                    <td style='width: 33%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>{{part_2_functional_assessment20}}</p></td>
                    </tr>
                    <tr>
                    <td style='width: 33%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>  Grooming </p></td>
                    <td style='width: 33%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>{{part_2_functional_assessment21}}</p></td>
                    <td style='width: 33%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>{{part_2_functional_assessment22}}</p></td>
                    </tr>
                    <tr>
                    <td style='width: 33%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>  Other</p></td>
                    <td style='width: 33%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>{{part_2_functional_assessment23}}</p></td>
                    <td style='width: 33%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>{{part_2_functional_assessment24}}</p></td>
                    </tr>
                    </table>
                    <table style='width:100%; border: 1px solid black'>
                    <tr>
                    <td style='background-color: #efefef; width: 33%; font-weight: bold; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>  Domestic ADL</p></td>
                    <td style='background-color: #efefef; width: 33%; font-weight: bold; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>  Current Status</p></td>
                    <td style='background-color: #efefef; width: 33%; font-weight: bold; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>  Expected future level of independence</p></td>
                    </tr>
                    <tr>
                    <td style='width: 33%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>  Meal preparation </p></td>
                    <td style='width: 33%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>{{part_2_functional_assessment25}}</p></td>
                    <td style='width: 33%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>{{part_2_functional_assessment26}}</p></td>
                    </tr>
                    <tr>
                    <td style='width: 33%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>  Cleaning </p></td>
                    <td style='width: 33%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>{{part_2_functional_assessment27}}</p></td>
                    <td style='width: 33%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>{{part_2_functional_assessment28}}</p></td>
                    </tr>
                    <tr>
                    <td style='width: 33%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>  Laundry </p></td>
                    <td style='width: 33%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>{{part_2_functional_assessment29}}</p></td>
                    <td style='width: 33%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>{{part_2_functional_assessment30}}</p></td>
                    </tr>
                    <tr>
                    <td style='width: 33%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>  Other</p></td>
                    <td style='width: 33%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>{{part_2_functional_assessment31}}</p></td>
                    <td style='width: 33%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>{{part_2_functional_assessment32}}</p></td>
                    </tr>
                    </table>
                    <table style='width:100%; border: 1px solid black'>
                    <tr>
                    <td style='background-color: #efefef; width: 33%; font-weight: bold; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>  Community Activities / Access</p></td>
                    <td style='background-color: #efefef; width: 33%; font-weight: bold; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>  Current Status</p></td>
                    <td style='background-color: #efefef; width: 33%; font-weight: bold; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>  Expected future level of independence</p></td>
                    </tr>
                    <tr>
                    <td style='width: 33%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>  Recreation and leisure </p></td>
                    <td style='width: 33%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>{{part_2_functional_assessment33}}</p></td>
                    <td style='width: 33%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>{{part_2_functional_assessment34}}</p></td>
                    </tr>
                    <tr>
                    <td style='width: 33%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>  Driving and/or transportation in vehicle/cars </p></td>
                    <td style='width: 33%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>{{part_2_functional_assessment35}}</p></td>
                    <td style='width: 33%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>{{part_2_functional_assessment36}}</p></td>
                    </tr>
                    <tr>
                    <td style='width: 33%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>  Work and study issues </p></td>
                    <td style='width: 33%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>{{part_2_functional_assessment37}}</p></td>
                    <td style='width: 33%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>{{part_2_functional_assessment38}}</p></td>
                    </tr>
                    </table>
                    <p></p>";


        $section3 = "<table style='background-color:#6a2c75; border:none; width:100%; margin-top:20px'>
                        <tr>
                        <td>
                        <p style='font-size:14pt; font-weight:bold; margin-top:8px; margin-bottom:8px; color: white'>  PART 3 – Property Details</p>
                        </td>
                        </tr>
                        </table>
                        <p style='font-size:11pt; margin-top:10px; margin-bottom:10px; font-weight: bold'>3.1	Home ownership</p>
                        <p style='font-size:12pt; margin-top:10px; margin-bottom:10px;'><strong>3.1.1</strong>	Please indicate the ownership status of the property being assessed. Where ownership is other than the participant, provide more details, e.g. name of real estate agency and contact number</p>
                        <table style='width:100%; margin-top: 10px; border: 1px solid black'>
                        <tr>
                        <td style='background-color: #efefef; width: 30%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>  Participant owned</p></td>
                        <td><p style='margin-top:10px; margin-bottom:10px;'>{{part_3_property_details_participant_owned}}</p></td>
                        </tr>
                        <tr>
                        <td style='background-color: #efefef; width: 30%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>  Co-owned</p></td>
                        <td><p style='margin-top:10px; margin-bottom:10px;'>{{part_3_property_details_co_owned}}</p></td>
                        </tr>
                        <tr>
                        <td style='background-color: #efefef; width: 30%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>  Private rental</p></td>
                        <td><p style='margin-top:10px; margin-bottom:10px;'>{{part_3_property_details_private_rental}}</p></td>
                        </tr>
                        <tr>
                        <td style='background-color: #efefef; width: 30%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>  Public rental / housing</p></td>
                        <td><p style='margin-top:10px; margin-bottom:10px;'>{{part_3_property_details_public_rental_housing}}</p></td>
                        </tr>
                        <tr>
                        <td style='background-color: #efefef; width: 30%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>  Family owned</p></td>
                        <td><p style='margin-top:10px; margin-bottom:10px;'>{{part_3_property_details_family_owned}}</p></td>
                        </tr>
                        </table>
                        <p style='font-size:12pt; margin-top:10px; margin-bottom:10px;'><strong>3.1.2</strong>	Has the property had previous modifications funded by the NDIA? If ‘yes’, please outline previous modifications completed</p>
                        <table style='width:100%; margin-top: 10px; border: 1px solid black'>

                        <tr>
                            <td style='background-color: #efefef; width: 30%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>  Yes</p></td>
                            <td><p style='margin-top:10px; margin-bottom:10px;'>{{part_3_property_details_yes1}}</p></td>
                        </tr>
                        <tr>
                            <td style='background-color: #efefef; width: 30%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>  No</p></td>
                            <td><p style='margin-top:10px; margin-bottom:10px;'>{{part_3_property_details_no1}}</p></td>
                        </tr>
                        <tr>
                            <td style='background-color: #efefef; width: 30%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>  Detail of Previous Modification</p></td>
                            <td><p style='margin-top:10px; margin-bottom:10px;'>{{part_3_property_details__of_previous_modifications}}</p></td>
                        </tr>
                        </table>



                        <p style='font-size:12pt; margin-top:10px; margin-bottom:10px;'><strong>3.1.3</strong>	Is the owner of the property aware of and provided written authorisation for the potential modifications?</p>
                        <table style='width:100%; margin-top: 10px; border: 1px solid black'>
                        <tr>
                            <td style='background-color: #efefef; width: 30%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>  Yes</p></td>
                            <td><p style='margin-top:10px; margin-bottom:10px;'>{{part_3_property_details_yes2}}</p></td>
                        </tr>
                        <tr>
                            <td style='background-color: #efefef; width: 30%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>  No</p></td>
                            <td><p style='margin-top:10px; margin-bottom:10px;'>{{part_3_property_details_no2}}</p></td>
                        </tr>
                        </table>


                        <p style='font-size:12pt; margin-top:10px; margin-bottom:10px; font-weight: bold'>3.2	Structure of property</p>
                        <p style='font-size:12pt; margin-top:10px; margin-bottom:10px; '>Please describe the construction type, e.g. brick or weatherboard, colour bond or tiled roof, approximate age or era, concrete slab or timber stumps</p>
                        <table style='width:100%; margin-top: 10px; border: 1px solid black'>
                        <tr>
                            <td style='background-color: #efefef; width: 100%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>{{part_3_property_details_structure_of_property}}</p></td>
                        </tr>
                        </table>
                        <p style='font-size:12pt; margin-top:10px; margin-bottom:10px; font-weight: bold'>3.3	Description of property</p>
                        <p style='font-size:12pt; margin-top:10px; margin-bottom:10px; '>Please describe the layout and size, e.g. 3 bedroom residence with central bathroom and two living areas, single garage, porch at front and back entrances, medium sized home = approx 20 square metres, block size approx 500 – 600 square metres, level block, etc.</p>
                        <table style='width:100%; margin-top: 10px; border: 1px solid black'>
                        <tr>
                            <td style='background-color: #efefef; width: 100%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>{{part_3_property_details_description_of_property}}</p></td>
                        </tr>
                        </table>
                        <p style='font-size:12pt; margin-top:10px; margin-bottom:10px; font-weight: bold'>3.4	Special Conditions</p>
                        <p style='font-size:12pt; margin-top:10px; margin-bottom:10px; '>Please outline any special conditions or considerations, e.g. heritage listed</p>
                        <table style='width:100%; margin-top: 10px; border: 1px solid black'>
                        <tr>
                        <td style='background-color: #efefef; width: 100%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>{{part_3_property_details_special_conditions}}</p></td>
                        </tr>
                        </table>";


        $section4 = "<p style='font-size:12pt; margin-top:10px; margin-bottom:10px; '></p>
                <table style='background-color:#6a2c75; border:none; width:100%; margin-top:20px'>
                <tr>
                <td>
                <p style='font-size:14pt; font-weight:bold; margin-top:8px; margin-bottom:8px; color: white'>  PART 4 – Social Situation</p>
                </td>
                </tr>
                </table>
                <p style='font-size:12pt; margin-top:10px; margin-bottom:10px; font-weight: bold'>4.1	Social Circumstances</p>
                <p style='font-size:12pt; margin-top:10px; margin-bottom:10px; '>Detail the participant’s living arrangements, social background, relationship status and other information relevant to the need for home modifications.</p>
                <table style='width:100%; margin-top: 10px; border: 1px solid black'>
                <tr>
                <td style='background-color: #efefef; width: 100%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>{{part_4_property_details_participant_owned}}</p></td>
                </tr>
                </table>
                <p style='font-size:12pt; margin-top:10px; margin-bottom:10px; font-weight: bold'>4.2	Hospitalisation or Inpatient</p>
                <p style='font-size:12pt; margin-top:10px; margin-bottom:10px; '>If currently an inpatient, please outline which hospital, the current discharge plan and describe any interim arrangements while complex home modifications are completed such as short term accommodation. Describe other assistive technology as appropriate. </p>
                <table style='width:100%; margin-top: 10px; border: 1px solid black'>
                <tr>
                <td style='background-color: #efefef; width: 40%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>  N/A</p></td>
                <td><p style='margin-top:10px; margin-bottom:10px;'>{{part_4_property_details_n_a}}</p></td>
                </tr>
                <tr>
                <td style='background-color: #efefef; width: 40%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>  Anticipated discharge date</p></td>
                <td><p style='margin-top:10px; margin-bottom:10px;'>{{part_4_property_details_anticipated_discharge_date}}</p></td>
                </tr>
                </table>
                <p style='font-size:12pt; margin-top:10px; margin-bottom:10px; '>Discharge plan details/Comments</p>
                <table style='width:100%; margin-top: 10px; border: 1px solid black'>
                <tr>
                    <td style='background-color: #efefef; width: 100%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>{{part_4_property_details_discharge_plan_details_Comments}}</p></td>
                </tr>
                </table>
                <p style='font-size:12pt; margin-top:10px; margin-bottom:10px; font-weight: bold'>4.3	Proposed living arrangements (including post-discharge, where appropriate)</p>
                <p style='font-size:12pt; margin-top:10px; margin-bottom:10px; '>Comments in this section will relate to decisions that have been made about where and who the participant will live with and how long it is expected they will reside in the house which is being considered for modification. Detail the participant’s expected long-term household/social situation and household supports as well as the participant’s current family support and any known future plans or changes to this.</p>
                <table style='width:100%; margin-top: 10px; border: 1px solid black'>
                <tr>
                <td style='background-color: #efefef; width: 100%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>{{part_4_property_details_proposed_living_arrangements}}</p></td>
                </tr>
                </table>
                <p style='font-size:12pt; margin-top:10px; margin-bottom:10px; font-weight: bold'></p>";


        $section5 = "<table style='background-color:#6a2c75; border:none; width:100%; margin-top:20px'>
                    <tr>
                    <td>
                    <p style='font-size:14pt; font-weight:bold; margin-top:8px; margin-bottom:8px; color: white'>  PART 5 – Complex Home Modification Recommendations</p>
                    </td>
                    </tr>
                    </table>
                    <p style='font-size:12pt; margin-top:10px; margin-bottom:10px; font-weight: bold'>5.1	Modification Details </p>
                    <p style='font-size:12pt; margin-top:10px; margin-bottom:10px;'>You should detail the participant’s existing home environment and provide clinical evidence for all home modification recommendation(s). Recommended specifications for access must be consistent with The NDIA document “Guidance for Builders and Designers” unless specifically referenced as an ‘exception’. </p>
                    <p style='font-size:12pt; margin-top:10px; margin-bottom:10px;'>You must include:</p>
                    <ul style='margin-bottom: 10px; margin-top: 10px'>
                    <li style='font-size: 11pt'>Recommendations, having considered all reasonable options</li>
                    <li style='font-size: 11pt'>Recommendations should reflect consideration of the requirements of the legislation to pay for the reasonable costs of home modifications required as a result of the participant’s disability.</li>
                    <li style='font-size: 11pt'>Clinical evidence for each aspect of your recommendations.</li>
                    <li style='font-size: 11pt'>Specific details to ensure recommendations for home modifications are comprehensive and meet the participant’s home modification needs</li>
                    <li style='font-size: 11pt'>Where relevant, details of any related modifications or equipment currently being used by the participant</li>
                    <li style='font-size: 11pt'>Where appropriate, provide diagrams and/or digital photographs of the home areas requiring modification</li>
                    <li style='font-size: 11pt'>Note the participant’s or family preferences separately to the assessor’s recommendations where applicable</li>
                    <li style='font-size: 11pt'>Under each area/room requiring modification below, please detail any changes required to door widths, fixtures, fittings, floor coverings etc.</li>
                    <li style='font-size: 11pt'>Recommendations comply with relevant Australian Standards</li>
                    </ul>
                    <p style='font-size:12pt; margin-top:10px; margin-bottom:10px; font-style: italic'>Example Bathroom</p>
                    <table style='width:100%; margin-top: 10px; border: 1px solid black'>
                    <tr>
                        <td style='background-color: #efefef; width: 40%; border-right: 1px solid black'><p style='margin-top:10px; font-style: italic; margin-bottom:10px;'>  N/A</p></td>
                        <td><p style='margin-top:10px; margin-bottom:10px;'>{{part_5_ndis_complex_home_modification_recommendations001}}</p></td>
                    </tr>
                    <tr>
                        <td style='background-color: #efefef; width: 40%; border-right: 1px solid black'><p style='margin-top:10px; font-style: italic; margin-bottom:10px;'>  Current Situation</p></td>
                        <td><p style='margin-top:10px; margin-bottom:10px; font-size: italic;'>    Existing bathroom has a shower over the bath and there is no other wheelchair accessible bathroom in the home.</p></td>
                    </tr>
                    <tr>
                        <td style='background-color: #efefef; width: 40%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>  Recommendations</p></td>
                        <td><p style='margin-top:10px; margin-bottom:10px; font-size: italic;'>    Removal of bath and installation of a level-entry shower recess with hand-held shower hose.</p></td>
                    </tr>
                    <tr>
                        <td style='background-color: #efefef; width: 40%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>  Priority</p></td>
                        <td><p style='margin-top:10px; margin-bottom:10px; font-size: italic;'>    1</p></td>
                    </tr>
                    <tr>
                        <td style='background-color: #efefef; width: 40%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>  Clinical Evidence</p></td>
                        <td><p style='margin-top:10px; margin-bottom:10px; font-size: italic;'>    The client is wheelchair dependent for all mobility and requires use of a mobile shower commode to enable them to shower independently, with no further change in mobility status anticipated. </p></td>
                    </tr>
                    </table>



                    <p style='font-size:12pt; margin-top:10px; margin-bottom:10px; font-weight: bold'>5.2	Externals </p>
                    <p style='font-size:12pt; margin-top:10px; margin-bottom:10px;'>5.2.1	Front Access </p>
                    <table style='width:100%; margin-top: 10px; border: 1px solid black'>
                    <tr>
                        <td style='background-color: #efefef; width: 40%; border-right: 1px solid black'><p style='margin-top:10px; font-style: italic; margin-bottom:10px;'>  N/A</p></td>
                        <td><p style='margin-top:10px; margin-bottom:10px;'>{{part_5_complex_home_modification_recommendations_externals_n_a}}</p></td>
                    </tr>
                    <tr>
                        <td style='background-color: #efefef; width: 40%; border-right: 1px solid black'><p style='margin-top:10px; font-style: italic; margin-bottom:10px;'>  Current Situation</p></td>
                        <td><p style='margin-top:10px; margin-bottom:10px; font-size: italic;'>{{part_5_complex_home_modification_recommendations_externals_current_situation}}</p></td>
                    </tr>
                    <tr>
                        <td style='background-color: #efefef; width: 40%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>  Recommendations</p></td>
                        <td><p style='margin-top:10px; margin-bottom:10px; font-size: italic;'>{{part_5_complex_home_modification_recommendations_externals_recommendations}}</p></td>
                    </tr>
                    <tr>
                        <td style='background-color: #efefef; width: 40%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>  Priority</p></td>
                        <td><p style='margin-top:10px; margin-bottom:10px; font-size: italic;'>{{part_5_complex_home_modification_recommendations_externals_priority}}</p></td>
                    </tr>
                    <tr>
                        <td style='background-color: #efefef; width: 40%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>  Clinical Evidence</p></td>
                        <td><p style='margin-top:10px; margin-bottom:10px; font-size: italic;'>{{part_5_complex_home_modification_recommendations_externals_clinical_evidence}}</p></td>
                    </tr>
                    </table>




                    <p style='font-size:12pt; margin-top:10px; margin-bottom:10px;'>5.2.2	Other Access </p>
                    <table style='width:100%; margin-top: 10px; border: 1px solid black'>
                    <tr>
                        <td style='background-color: #efefef; width: 40%; border-right: 1px solid black'><p style='margin-top:10px; font-style: italic; margin-bottom:10px;'>  N/A</p></td>
                        <td><p style='margin-top:10px; margin-bottom:10px;'>{{part_5_complex_home_modification_recommendations_externals_n_a1}}</p></td>
                    </tr>
                    <tr>
                        <td style='background-color: #efefef; width: 40%; border-right: 1px solid black'><p style='margin-top:10px; font-style: italic; margin-bottom:10px;'>  Current Situation</p></td>
                        <td><p style='margin-top:10px; margin-bottom:10px; font-size: italic;'>{{part_5_complex_home_modification_recommendations_externals_current_situation1}}</p></td>
                    </tr>
                    <tr>
                        <td style='background-color: #efefef; width: 40%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>  Recommendations</p></td>
                        <td><p style='margin-top:10px; margin-bottom:10px; font-size: italic;'> {{part_5_complex_home_modification_recommendations_externals_recommendations1}}</p></td>
                    </tr>
                    <tr>
                        <td style='background-color: #efefef; width: 40%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>  Priority</p></td>
                        <td><p style='margin-top:10px; margin-bottom:10px; font-size: italic;'>{{part_5_complex_home_modification_recommendations_externals_priority1}}</p></td>
                    </tr>
                    <tr>
                        <td style='background-color: #efefef; width: 40%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>  Clinical Evidence</p></td>
                        <td><p style='margin-top:10px; margin-bottom:10px; font-size: italic;'>{{part_5_complex_home_modification_recommendations_externals_clinical_evidence1}}</p></td>
                    </tr>
                    </table>



                    <p style='font-size:12pt; margin-top:10px; margin-bottom:10px;'>5.2.3	Car Parking </p>
                    <table style='width:100%; margin-top: 10px; border: 1px solid black'>
                    <tr>
                    <td style='background-color: #efefef; width: 40%; border-right: 1px solid black'><p style='margin-top:10px; font-style: italic; margin-bottom:10px;'>  N/A</p></td>
                    <td><p style='margin-top:10px; margin-bottom:10px;'>{{part_5_complex_home_modification_recommendations_externals_n_a2}}</p></td>
                    </tr>
                    <tr>
                    <td style='background-color: #efefef; width: 40%; border-right: 1px solid black'><p style='margin-top:10px; font-style: italic; margin-bottom:10px;'>  Current Situation</p></td>
                    <td><p style='margin-top:10px; margin-bottom:10px; font-size: italic;'>{{part_5_complex_home_modification_recommendations_externals_current_situation2}}</p></td>
                    </tr>
                    <tr>
                    <td style='background-color: #efefef; width: 40%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>  Recommendations</p></td>
                    <td><p style='margin-top:10px; margin-bottom:10px; font-size: italic;'>{{part_5_complex_home_modification_recommendations_externals_recommendations2}}</p></td>
                    </tr>
                    <tr>
                    <td style='background-color: #efefef; width: 40%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>  Priority</p></td>
                    <td><p style='margin-top:10px; margin-bottom:10px; font-size: italic;'>{{part_5_complex_home_modification_recommendations_externals_priority2}}</p></td>
                    </tr>
                    <tr>
                    <td style='background-color: #efefef; width: 40%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>  Clinical Evidence</p></td>
                    <td><p style='margin-top:10px; margin-bottom:10px; font-size: italic;'>{{part_5_complex_home_modification_recommendations_externals_clinical_evidence2}}</p></td>
                    </tr>
                    </table>

                    <p style='font-size:12pt; margin-top:10px; margin-bottom:10px; font-weight: bold'>5.3	Internals </p>
                    <p style='font-size:12pt; margin-top:10px; margin-bottom:10px; '>5.3.1	Bedroom.  </p>
                    <p style='font-size:12pt; margin-top:10px; margin-bottom:10px; '>Suitable for participant to use (preferably located on ground floor). Please include doorways, flooring, lights, fixtures/fittings, door handles and light switches where applicable </p>
                    <table style='width:100%; margin-top: 10px; border: 1px solid black'>
                    <tr>
                        <td style='background-color: #efefef; width: 40%; border-right: 1px solid black'><p style='margin-top:10px; font-style: italic; margin-bottom:10px;'>  N/A</p></td>
                        <td><p style='margin-top:10px; margin-bottom:10px;'>{{part_5_complex_home_modification_recommendations_internals_n_a3}}</p></td>
                    </tr>
                    <tr>
                        <td style='background-color: #efefef; width: 40%; border-right: 1px solid black'><p style='margin-top:10px; font-style: italic; margin-bottom:10px;'>  Current Situation</p></td>
                        <td><p style='margin-top:10px; margin-bottom:10px; font-size: italic;'>{{part_5_complex_home_modification_recommendations_internals_current_situation3}}</p></td>
                    </tr>
                    <tr>
                        <td style='background-color: #efefef; width: 40%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>  Recommendations</p></td>
                        <td><p style='margin-top:10px; margin-bottom:10px; font-size: italic;'>{{part_5_complex_home_modification_recommendations_internals_recommendations3}}</p></td>
                    </tr>
                    <tr>
                        <td style='background-color: #efefef; width: 40%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>  Priority</p></td>
                        <td><p style='margin-top:10px; margin-bottom:10px; font-size: italic;'>{{part_5_complex_home_modification_recommendations_internals_priority3}}</p></td>
                    </tr>
                    <tr>
                        <td style='background-color: #efefef; width: 40%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>  Clinical Evidence</p></td>
                        <td><p style='margin-top:10px; margin-bottom:10px; font-size: italic;'>{{part_5_complex_home_modification_recommendations_internals_clinical_evidence3}}</p></td>
                    </tr>
                    </table>


                    <p style='font-size:12pt; margin-top:10px; margin-bottom:10px; '>5.3.2	Living Area  </p>
                    <p style='font-size:12pt; margin-top:10px; margin-bottom:10px; '>Please include doorways, flooring, lights, fixtures/fittings, door handles and light switches, circulation space where applicable</p>
                    <table style='width:100%; margin-top: 10px; border: 1px solid black'>
                    <tr>
                        <td style='background-color: #efefef; width: 40%; border-right: 1px solid black'><p style='margin-top:10px; font-style: italic; margin-bottom:10px;'>  N/A</p></td>
                        <td><p style='margin-top:10px; margin-bottom:10px;'>{{part_5_complex_home_modification_recommendations_internals_n_a4}}</p></td>
                    </tr>
                    <tr>
                        <td style='background-color: #efefef; width: 40%; border-right: 1px solid black'><p style='margin-top:10px; font-style: italic; margin-bottom:10px;'>  Current Situation</p></td>
                        <td><p style='margin-top:10px; margin-bottom:10px; font-size: italic;'>{{part_5_complex_home_modification_recommendations_internals_current_situation4}}</p></td>
                    </tr>
                    <tr>
                        <td style='background-color: #efefef; width: 40%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>  Recommendations</p></td>
                        <td><p style='margin-top:10px; margin-bottom:10px; font-size: italic;'>{{part_5_complex_home_modification_recommendations_internals_recommendations4}}</p></td>
                    </tr>
                    <tr>
                        <td style='background-color: #efefef; width: 40%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>  Priority</p></td>
                        <td><p style='margin-top:10px; margin-bottom:10px; font-size: italic;'>{{part_5_complex_home_modification_recommendations_internals_priority4}}</p></td>
                    </tr>
                    <tr>
                        <td style='background-color: #efefef; width: 40%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>  Clinical Evidence</p></td>
                        <td><p style='margin-top:10px; margin-bottom:10px; font-size: italic;'>{{part_5_complex_home_modification_recommendations_internals_clinical_evidence4}}</p></td>
                    </tr>
                    </table>



                    <p style='font-size:12pt; margin-top:10px; margin-bottom:10px; '>5.3.3	Hallway </p>
                    <p style='font-size:12pt; margin-top:10px; margin-bottom:10px; '>Internal steps to enable access to a suitable bedroom and bathroom. Please include doorways, flooring, lights, fixtures/fittings, door handles, light switches and width of corridors where applicable</p>
                    <table style='width:100%; margin-top: 10px; border: 1px solid black'>
                    <tr>
                        <td style='background-color: #efefef; width: 40%; border-right: 1px solid black'><p style='margin-top:10px; font-style: italic; margin-bottom:10px;'>  N/A</p></td>
                        <td><p style='margin-top:10px; margin-bottom:10px;'>{{part_5_complex_home_modification_recommendations_internals_n_a5}}</p></td>
                    </tr>
                    <tr>
                        <td style='background-color: #efefef; width: 40%; border-right: 1px solid black'><p style='margin-top:10px; font-style: italic; margin-bottom:10px;'>  Current Situation</p></td>
                        <td><p style='margin-top:10px; margin-bottom:10px; font-size: italic;'>{{part_5_complex_home_modification_recommendations_internals_current_situation5}}</p></td>
                    </tr>
                    <tr>
                        <td style='background-color: #efefef; width: 40%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>  Recommendations</p></td>
                        <td><p style='margin-top:10px; margin-bottom:10px; font-size: italic;'>{{part_5_complex_home_modification_recommendations_internals_recommendations5}}</p></td>
                    </tr>
                    <tr>
                        <td style='background-color: #efefef; width: 40%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>  Priority</p></td>
                        <td><p style='margin-top:10px; margin-bottom:10px; font-size: italic;'>{{part_5_complex_home_modification_recommendations_internals_priority5}}</p></td>
                    </tr>
                    <tr>
                        <td style='background-color: #efefef; width: 40%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>  Clinical Evidence</p></td>
                        <td><p style='margin-top:10px; margin-bottom:10px; font-size: italic;'>{{part_5_complex_home_modification_recommendations_internals_clinical_evidence5}}</p></td>
                    </tr>
                    </table>


                    <p style='font-size:12pt; margin-top:10px; margin-bottom:10px; '>5.3.4	Bathroom/Toilet </p>
                    <p style='font-size:12pt; margin-top:10px; margin-bottom:10px; '>Bathroom/toilet that would be suitable for participant to use (preferably located on ground floor). Please include doorways, flooring, lights, fixtures/fittings, door handles and light switches, hand rails, tap ware, shower hose, etc. where applicable. Describe if combined or separate.</p>
                    <table style='width:100%; margin-top: 10px; border: 1px solid black'>
                    <tr>
                        <td style='background-color: #efefef; width: 40%; border-right: 1px solid black'><p style='margin-top:10px; font-style: italic; margin-bottom:10px;'>  N/A</p></td>
                        <td><p style='margin-top:10px; margin-bottom:10px;'>{{part_5_complex_home_modification_recommendations_internals_n_a6}}</p></td>
                    </tr>
                    <tr>
                        <td style='background-color: #efefef; width: 40%; border-right: 1px solid black'><p style='margin-top:10px; font-style: italic; margin-bottom:10px;'>  Current Situation</p></td>
                        <td><p style='margin-top:10px; margin-bottom:10px; font-size: italic;'>{{part_5_complex_home_modification_recommendations_internals_current_situation6}}</p></td>
                    </tr>
                    <tr>
                        <td style='background-color: #efefef; width: 40%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>  Recommendations</p></td>
                        <td><p style='margin-top:10px; margin-bottom:10px; font-size: italic;'>{{part_5_complex_home_modification_recommendations_internals_recommendations6}}</p></td>
                    </tr>
                    <tr>
                        <td style='background-color: #efefef; width: 40%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>  Priority</p></td>
                        <td><p style='margin-top:10px; margin-bottom:10px; font-size: italic;'>{{part_5_complex_home_modification_recommendations_internals_priority6}}</p></td>
                    </tr>
                    <tr>
                        <td style='background-color: #efefef; width: 40%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>  Clinical Evidence</p></td>
                        <td><p style='margin-top:10px; margin-bottom:10px; font-size: italic;'>{{part_5_complex_home_modification_recommendations_internals_clinical_evidence6}}</p></td>
                    </tr>
                    </table>


                    <p style='font-size:12pt; margin-top:10px; margin-bottom:10px; '>5.3.5	Kitchen </p>
                    <p style='font-size:12pt; margin-top:10px; margin-bottom:10px; '>Please include doorways, flooring, lights, fixtures/fittings, door handles and light switches, hand rails, tap ware, etc. where applicable</p>
                    <table style='width:100%; margin-top: 10px; border: 1px solid black'>
                    <tr>
                        <td style='background-color: #efefef; width: 40%; border-right: 1px solid black'><p style='margin-top:10px; font-style: italic; margin-bottom:10px;'>  N/A</p></td>
                        <td><p style='margin-top:10px; margin-bottom:10px;'>{{part_5_complex_home_modification_recommendations_internals_n_a7}}</p></td>
                    </tr>
                    <tr>
                        <td style='background-color: #efefef; width: 40%; border-right: 1px solid black'><p style='margin-top:10px; font-style: italic; margin-bottom:10px;'>  Current Situation</p></td>
                        <td><p style='margin-top:10px; margin-bottom:10px; font-size: italic;'>{{part_5_complex_home_modification_recommendations_internals_current_situation7}}</p></td>
                    </tr>
                    <tr>
                        <td style='background-color: #efefef; width: 40%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>  Recommendations</p></td>
                        <td><p style='margin-top:10px; margin-bottom:10px; font-size: italic;'>{{part_5_complex_home_modification_recommendations_internals_recommendations7}}</p></td>
                    </tr>
                    <tr>
                        <td style='background-color: #efefef; width: 40%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>  Priority</p></td>
                        <td><p style='margin-top:10px; margin-bottom:10px; font-size: italic;'>{{part_5_complex_home_modification_recommendations_internals_priority7}}</p></td>
                    </tr>
                    <tr>
                        <td style='background-color: #efefef; width: 40%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>  Clinical Evidence</p></td>
                        <td><p style='margin-top:10px; margin-bottom:10px; font-size: italic;'>{{part_5_complex_home_modification_recommendations_internals_clinical_evidence7}}</p></td>
                    </tr>
                    </table>


                    <p style='font-size:12pt; margin-top:10px; margin-bottom:10px; '>5.3.6	Laundry</p>
                    <p style='font-size:12pt; margin-top:10px; margin-bottom:10px; '>Please include doorways, flooring, lights, fixtures/fittings, door handles and light switches, hand rails, tap ware, etc. where applicable</p>
                    <table style='width:100%; margin-top: 10px; border: 1px solid black'>
                    <tr>
                        <td style='background-color: #efefef; width: 40%; border-right: 1px solid black'><p style='margin-top:10px; font-style: italic; margin-bottom:10px;'>  N/A</p></td>
                        <td><p style='margin-top:10px; margin-bottom:10px;'>{{part_5_complex_home_modification_recommendations_internals_n_a8}}</p></td>
                    </tr>
                    <tr>
                        <td style='background-color: #efefef; width: 40%; border-right: 1px solid black'><p style='margin-top:10px; font-style: italic; margin-bottom:10px;'>  Current Situation</p></td>
                        <td><p style='margin-top:10px; margin-bottom:10px; font-size: italic;'>{{part_5_complex_home_modification_recommendations_internals_current_situation8}}</p></td>
                    </tr>
                    <tr>
                        <td style='background-color: #efefef; width: 40%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>  Recommendations</p></td>
                        <td><p style='margin-top:10px; margin-bottom:10px; font-size: italic;'>{{part_5_complex_home_modification_recommendations_internals_recommendations8}}</p></td>
                    </tr>
                    <tr>
                        <td style='background-color: #efefef; width: 40%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>  Priority</p></td>
                        <td><p style='margin-top:10px; margin-bottom:10px; font-size: italic;'>{{part_5_complex_home_modification_recommendations_internals_priority8}}</p></td>
                    </tr>
                    <tr>
                        <td style='background-color: #efefef; width: 40%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>  Clinical Evidence</p></td>
                        <td><p style='margin-top:10px; margin-bottom:10px; font-size: italic;'>{{part_5_complex_home_modification_recommendations_internals_clinical_evidence8}}</p></td>
                    </tr>
                    </table>


                    <p style='font-size:12pt; margin-top:10px; margin-bottom:10px; '>5.3.7	Other/not included above</p>
                    <table style='width:100%; margin-top: 10px; border: 1px solid black'>
                    <tr>
                    <td style='background-color: #efefef; width: 40%; border-right: 1px solid black'><p style='margin-top:10px; font-style: italic; margin-bottom:10px;'>  N/A</p></td>
                    <td><p style='margin-top:10px; margin-bottom:10px;'>{{part_5_complex_home_modification_recommendations_internals_n_a9}}</p></td>
                    </tr>
                    <tr>
                    <td style='background-color: #efefef; width: 40%; border-right: 1px solid black'><p style='margin-top:10px; font-style: italic; margin-bottom:10px;'>  Current Situation</p></td>
                    <td><p style='margin-top:10px; margin-bottom:10px; font-size: italic;'>{{part_5_complex_home_modification_recommendations_internals_current_situation9}}</p></td>
                    </tr>
                    <tr>
                    <td style='background-color: #efefef; width: 40%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>  Recommendations</p></td>
                    <td><p style='margin-top:10px; margin-bottom:10px; font-size: italic;'>{{part_5_complex_home_modification_recommendations_internals_recommendations9}}</p></td>
                    </tr>
                    <tr>
                    <td style='background-color: #efefef; width: 40%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>  Priority</p></td>
                    <td><p style='margin-top:10px; margin-bottom:10px; font-size: italic;'>{{part_5_complex_home_modification_recommendations_internals_priority9}}</p></td>
                    </tr>
                    <tr>
                    <td style='background-color: #efefef; width: 40%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>  Clinical Evidence</p></td>
                    <td><p style='margin-top:10px; margin-bottom:10px; font-size: italic;'>{{part_5_complex_home_modification_recommendations_internals_clinical_evidence09}}</p></td>
                    </tr>
                    </table>





                    <p style='font-size:12pt; margin-top:10px; margin-bottom:10px; font-weight: bold '>5.4	Heating and Cooling</p>
                    <p style='font-size:12pt; margin-top:10px; margin-bottom:10px;'>Please note, this modification applies only to participants with medically diagnosed thermoregulation impairment. Please provide details of current heating and cooling systems. </p>
                    <table style='width:100%; margin-top: 10px; border: 1px solid black'>
                    <tr>
                    <td style='background-color: #efefef; width: 100%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>{{part_5_complex_home_modification_recommendations_heating_and_cooling}}</p></td>
                    </tr>
                    </table>



                    <p style='font-size:12pt; margin-top:10px; margin-bottom:10px; font-weight: bold '>5.5	Staged Process</p>
                    <table style='width:100%; margin-top: 10px; border: 1px solid black'>
                    <tr>
                    <td style='background-color: #efefef; width: 80%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>  Is a staged process for building modifications appropriate? Yes or No?</p></td>
                    <td style=' border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>{{part_5_complex_home_modification_recommendations_staged_process1}}</p></td>
                    </tr>
                    </table>
                    <p style='font-size:12pt; margin-top:10px; margin-bottom:10px; '>e.g. first stage is to enable access for safe discharge from hospital and short term accommodation. The second stage is modifications to enable the participant to transition to long-term accommodation.</p>
                    <table style='width:100%; margin-top: 10px; border: 1px solid black'>
                    <tr>
                    <td style='background-color: #efefef; width: 100%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>{{part_5_complex_home_modification_recommendations_staged_process2}}</p></td>
                    </tr>
                    </table>
                    <p style='font-size:12pt; margin-top:10px; margin-bottom:10px; font-weight: bold '>5.6	Exception to Disability Standards</p>
                    <p style='font-size:12pt; margin-top:10px; margin-bottom:10px; '>Please note in most cases compliance with Australian Standard 1428 Design for Access and Mobility Part 1 (General) (AS 1428.1) is not required but are examples of best practice.  Users of this template need to ensure they understand the relevant building codes, standards and regulations that relate to the state and location where the modification is planned.</p>
                    <table style='width:100%; margin-top: 10px; border: 1px solid black'>
                    <tr>
                    <td style='background-color: #efefef; width: 100%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>{{part_5_complex_home_modification_recommendations_exception_to_disability_standards}}</p></td>
                    </tr>
                    </table>";


        $section6 = "<p style='font-size:12pt; margin-top:10px; margin-bottom:10px; '></p>
                    <table style='background-color:#6a2c75; border:none; width:100%; margin-top:20px'>
                    <tr>
                    <td>
                    <p style='font-size:14pt; font-weight:bold; margin-top:8px; margin-bottom:8px; color: white'>  PART 6 – Complex Home Modification Quotes</p>
                    </td>
                    </tr>
                    </table>
                    <p style='font-size:12pt; margin-top:10px; margin-bottom:10px; '>Please attach information from relevant builders, building project management meetings or relevant scope of works documents </p>
                    <table style='width:100%; margin-top: 10px; border: 1px solid black'>
                    <tr>
                    <td style='background-color: #efefef; width: 100%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>{{part_6_complex_home_modification_quotes}}</p></td>
                    </tr>
                    </table>
                    <p></p>";


        $section7 = "<table style='background-color:#6a2c75; border:none; width:100%; margin-top:20px'>
                    <tr>
                    <td><p style='font-size:14pt; font-weight:bold; margin-top:8px; margin-bottom:8px; color: white'>  PART 7 – Details of Assessor  </p></td>
                    </tr>
                    </table>
                    <p style='font-size: 12pt; margin-top:10px; margin-bottom:10px;'><strong>Declaration</strong> (indicate all relevant sections that apply)</p>
                    <table style='width:100%; margin-top: 10px; border: 1px solid black'>
                    <tr>
                    <td style='background-color: #efefef; width: 80%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px'>  I certify that I meet the NDIA expectations of AT assessor provider suitability (including understanding of the current NDIS Act, Rules and Operational Guidelines) to assess the type of assistive technology and associated supports, at the level of complexity required by this participant.</p></td>
                    <td style='border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px; font-weight: bold'>{{part_7_details_of_assessor_01}}</p></td>
                    </tr>
                    <tr>
                    <td style='background-color: #efefef; width: 80%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px'>  I will provide appropriate evidence to the NDIA and/or Quality and Safe Guards Commission if and as requested.</p></td>
                    <td style='border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px; font-weight: bold'>{{part_7_details_of_assessor_02}}</p></td>
                    </tr>
                    <tr>
                    <td style='background-color: #efefef; width: 80%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px'>  I understand and acknowledge that the NDIA and participant will rely on my professional advice to select, source and implement this assistive technology, and confirm that I am acting in accordance with the NDIS Quality and Safeguards Commission Code of Conduct and Practice Standards.</p></td>
                    <td style='border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px; font-weight: bold'>{{part_7_details_of_assessor_03}}</p></td>
                    </tr>
                    <tr>
                    <td style='background-color: #efefef; width: 80%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px'>  This assistive technology has been assessed by the treating multi-disciplinary team and I have completed the AT assessment on behalf of that team..</p></td>
                    <td style='border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px; font-weight: bold'>{{part_7_details_of_assessor_04}}</p></td>
                    </tr>
                    </table>


                    <p style='font-size: 12pt; font-weight: bold; margin-top:10px; margin-bottom:10px;'>Assessor’s Details</p>
                    <table style='width:100%; margin-top: 10px; border: 1px solid black'>

                    <tr>
                        <td style='background-color: #efefef; width: 50%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px'>  Name</p></td>
                        <td style='border-right: 1px solid black; width: 50%;'><p style='margin-top:10px; margin-bottom:10px; font-weight: bold'>{{part_7_details_of_assessor_05}}</p></td>
                    </tr>
                    <tr>
                        <td style='background-color: #efefef; width: 50%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px'>  NDIS Provider Registration number (where applicable)</p></td>
                        <td style='border-right: 1px solid black; width: 50%;'><p style='margin-top:10px; margin-bottom:10px; font-weight: bold'>{{part_7_details_of_assessor_06}}</p></td>
                    </tr>
                    <tr>
                        <td style='background-color: #efefef; width: 50%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px'>  Phone</p></td>
                        <td style='border-right: 1px solid black; width: 50%;'><p style='margin-top:10px; margin-bottom:10px; font-weight: bold'>{{part_7_details_of_assessor_07}}</p></td>
                    </tr>
                    <tr>
                        <td style='background-color: #efefef; width: 50%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px'>  Email</p></td>
                        <td style='border-right: 1px solid black; width: 50%;'><p style='margin-top:10px; margin-bottom:10px; font-weight: bold'>{{part_7_details_of_assessor_08}}</p></td>
                    </tr>
                    <tr>
                        <td style='background-color: #efefef; width: 50%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px'>  Signature</p></td>
                        <td style='border-right: 1px solid black; width: 50%;'><p style='margin-top:10px; margin-bottom:10px; font-weight: bold'>{{part_7_details_of_assessor_09}}</p></td>
                    </tr>
                    <tr>
                        <td style='background-color: #efefef; width: 50%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px'>  Qualification</p></td>
                        <td style='border-right: 1px solid black; width: 50%;'><p style='margin-top:10px; margin-bottom:10px; font-weight: bold'>{{part_7_details_of_assessor_10}}</p></td>
                    </tr>
                    <tr>
                        <td style='background-color: #efefef; width: 50%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px'>  Date of Assessment</p></td>
                        <td style='border-right: 1px solid black; width: 50%;'><p style='margin-top:10px; margin-bottom:10px; font-weight: bold'>{{part_7_details_of_assessor_11}}</p></td>
                    </tr>
                    <tr>
                        <td style='background-color: #efefef; width: 50%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px'>  Date of Report </p></td>
                        <td style='border-right: 1px solid black; width: 50%;'><p style='margin-top:10px; margin-bottom:10px; font-weight: bold'>{{part_7_details_of_assessor_12}}</p></td>
                    </tr>
                    </table>

                    <p style='font-size: 12pt; font-weight: bold; margin-top:10px; margin-bottom:10px;'>Review by Building Construction Professional (as applicable)</p>
                    <table style='width:100%; margin-top: 10px; border: 1px solid black'>
                    <tr>
                        <td style='background-color: #efefef; width: 50%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px'>  Name</p></td>
                        <td style='border-right: 1px solid black; width: 50%;'><p style='margin-top:10px; margin-bottom:10px; font-weight: bold'>{{part_7_details_of_assessor_13}}</p></td>
                    </tr>
                    <tr>
                        <td style='background-color: #efefef; width: 50%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px'>  NDIS Provider Registration and/or Builder Registration</p></td>
                        <td style='border-right: 1px solid black; width: 50%;'><p style='margin-top:10px; margin-bottom:10px; font-weight: bold'>{{part_7_details_of_assessor_14}}</p></td>
                    </tr>
                    <tr>
                        <td style='background-color: #efefef; width: 50%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px'>  Phone</p></td>
                        <td style='border-right: 1px solid black; width: 50%;'><p style='margin-top:10px; margin-bottom:10px; font-weight: bold'>{{part_7_details_of_assessor_15}}</p></td>
                    </tr>
                    <tr>
                        <td style='background-color: #efefef; width: 50%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px'>  Email</p></td>
                        <td style='border-right: 1px solid black; width: 50%;'><p style='margin-top:10px; margin-bottom:10px; font-weight: bold'>{{part_7_details_of_assessor_16}}</p></td>
                    </tr>
                    <tr>
                        <td style='background-color: #efefef; width: 50%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px'>  Signature</p></td>
                        <td style='border-right: 1px solid black; width: 50%;'><p style='margin-top:10px; margin-bottom:10px; font-weight: bold'>{{part_7_details_of_assessor_17}}</p></td>
                    </tr>
                    <tr>
                        <td style='background-color: #efefef; width: 50%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px'>  Qualification</p></td>
                        <td style='border-right: 1px solid black; width: 50%;'><p style='margin-top:10px; margin-bottom:10px; font-weight: bold'>{{part_7_details_of_assessor_18}}</p></td>
                    </tr>

                    <tr>
                    <td style='background-color: #efefef; width: 50%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px'>  Date of review by Building Construction Professional</p></td>
                    <td style='border-right: 1px solid black; width: 50%;'><p style='margin-top:10px; margin-bottom:10px; font-weight: bold'>{{part_7_details_of_assessor_19}}</p></td>
                   </tr>

                   <tr>
                    <td style='background-color: #efefef; width: 50%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px'>  Indicate where this report has been developed in consultation with a Building Construction Professional. The recommendations contained herein are viable for this property (including construction risks e.g. asbestos) and are proposed as the most suitable of all reasonable alternatives.</p></td>
                    <td style='border-right: 1px solid black; width: 50%;'><p style='margin-top:10px; margin-bottom:10px; font-weight: bold'>{{part_7_details_of_assessor_20}}</p></td>
                   </tr>
                   </table>";












        $section8 = "<table style='background-color:#6a2c75; border:none; width:100%; margin-top:20px'>
                    <tr>
                    <td>
                    <p style='font-size:14pt; font-weight:bold; margin-top:8px; margin-bottom:8px; color: white'>8.	Consent to Collect and Share Your Information</p>
                    </td>
                    </tr>
                    </table>

                    <p style='font-size:12pt; margin-top:10px; margin-bottom:10px; font-weight: bold'>For the participant to complete</p>
                    <p style='font-size:12pt; margin-top:10px; margin-bottom:10px;'>As a participant who requires home modification and/or assistive technology supports, the National Disability Insurance Agency (NDIA) may need to contact your service providers, health and medical practitioners to discuss information within your assistive technology assessment and quotation(s). This will assist the NDIA with determining whether your request for assistive technology funded support(s) can be provided to you under the NDIS.If you choose not to provide this consent, this may extend the time required in considering this request for assistive technology supports to be included in your NDIS plan.Do you consent to the NDIA collecting and disclosing your information including from these third parties mentioned above, in relation to your assistive technology assessment and quotation?</p>

                    <table style='width:100%; margin-top: 10px; border: 1px solid black'>
                    <tr>
                    <td style='background-color: #efefef; width: 70%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px'> Yes, I consent </p></td>
                    <td style='border-right: 1px solid black;'><p style='margin-top:10px; margin-bottom:10px; font-weight: bold'>{{part_8_Consent_to_collect_and_share_your_information_01}}</p></td>
                    </tr>
                    <tr>
                    <td style='background-color: #efefef; width: 70%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px'>  No, I do not consent </p></td>
                    <td style='border-right: 1px solid black;'><p style='margin-top:10px; margin-bottom:10px; font-weight: bold'>{{part_8_Consent_to_collect_and_share_your_information_02}}</p></td>
                    </tr>

                    <tr>
                    <td><p style='font-size:12pt; margin-top:10px; margin-bottom:10px;'>Participant’s Signature When I sign this form:</p></td>
                    <td></td>
                    </tr>

                    <tr>
                    <td style='background-color: #efefef; width: 70%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px'>  I understand that I am giving consent to the NDIA to do the things with my information set out in this section. I understand that I can withdraw my consent for the NDIS to do things with my information at any time by letting the NDIA know.</p></td>
                    <td style='border-right: 1px solid black;'><p style='margin-top:10px; margin-bottom:10px; font-weight: bold'>{{part_8_Consent_to_collect_and_share_your_information_03}}</p></td>
                    </tr>
                    <tr>
                    <td style='background-color: #efefef; width: 70%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px'>  I understand that I can access the NDIA’s Privacy Notice and Privacy Policy on the NDIA website or by contacting the NDIA.</p></td>
                    <td style='border-right: 1px solid black;'><p style='margin-top:10px; margin-bottom:10px; font-weight: bold'>{{part_8_Consent_to_collect_and_share_your_information_04}}</p></td>
                    </tr>


                    <tr>
                    <td style='background-color: #efefef; width: 70%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px'>  Signature.</p></td>
                    <td style='border-right: 1px solid black;'><p style='margin-top:10px; margin-bottom:10px; font-weight: bold'>{{part_8_Consent_to_collect_and_share_your_information_05}}</p></td>
                    </tr>
                    <tr>
                    <td style='background-color: #efefef; width: 70%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px'>  Date.</p></td>
                    <td style='border-right: 1px solid black;'><p style='margin-top:10px; margin-bottom:10px; font-weight: bold'>{{part_8_Consent_to_collect_and_share_your_information_06}}</p></td>
                    </tr>
                    <tr>
                    <td style='background-color: #efefef; width: 70%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px'>  Full name </p></td>
                    <td style='border-right: 1px solid black;'><p style='margin-top:10px; margin-bottom:10px; font-weight: bold'>{{part_8_Consent_to_collect_and_share_your_information_07}}</p></td>
                    </tr>
                   
                    </table>
                    <p style='font-size:12pt; margin-top: 10px; margin-bottom: 10px'><strong>If you have signed this Form on behalf of the NDIS participant,</strong>, please complete the details below. It is an offence to provide false or misleading information.</p>
                    <p style='font-size: 12pt; margin-bottom: 10px'>We may require you to provide evidence of your authority to sign on behalf of the person.</p>
                    <table style='width:100%; margin-top: 10px; border: 1px solid black'>

                    <tr>
                    <td style='background-color: #efefef; width: 70%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px'>  Signature</p></td>
                    <td style='border-right: 1px solid black;'><p style='margin-top:10px; margin-bottom:10px; font-weight: bold'>{{part_8_Consent_to_collect_and_share_your_information_08}}</p></td>
                    </tr>
                    <tr>
                    <td style='background-color: #efefef; width: 70%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px'>  Date</p></td>
                    <td style='border-right: 1px solid black;'><p style='margin-top:10px; margin-bottom:10px; font-weight: bold'>{{part_8_Consent_to_collect_and_share_your_information_09}}</p></td>
                    </tr>
                    <tr>
                    <td style='background-color: #efefef; width: 70%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px'>  Full Name of person completing this form (please print):</p></td>
                    <td style='border-right: 1px solid black;'><p style='margin-top:10px; margin-bottom:10px; font-weight: bold'>{{part_8_Consent_to_collect_and_share_your_information_10}}</p></td>
                    </tr>
                    <tr>
                    <td style='background-color: #efefef; width: 70%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px'>  Relationship to participant or person wishing to become an NDIS participant:</p></td>
                    <td style='border-right: 1px solid black;'><p style='margin-top:10px; margin-bottom:10px; font-weight: bold'>{{part_8_Consent_to_collect_and_share_your_information_11}}</p></td>
                    </tr>
                    </table>
                    <p></p>";




                    // <table style='background-color:#6a2c75; border:none; width:100%; margin-top:20px'>
                    // <tr>
                    // <td>
                    // <p style='font-size:14pt; font-weight:bold; margin-top:8px; margin-bottom:8px; color: white'>9.	Appendix A: Replacement Device Requestr</p>
                    // </td>
                    // </tr>
                    // </table>
                    // <p style='font-size: 12pt; margin-top: 10px; margin-bottom: 10px'>Replacement device requests occur when the previous device is lost / damaged beyond repair / has reached the end of its service life AND the same level of technology is requested.</p>
                    // <table style='width:100%; border: 1px solid black'>
                    // <tr>
                    //     <td style='background-color: #efefef; width: 33%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px; font-weight: bold'>  Reason</p></td>
                    //     <td style='background-color: #efefef; width: 33%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px; font-weight: bold'>  Evidence required</p></td>
                    //     <td style='background-color: #efefef; width: 33%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px; font-weight: bold'>  Considerations</p></td>
                    // </tr>
                    // <tr>
                    //     <td style='width: 33%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>  Current device has reached the end of its service life</p></td>
                    //     <td style='width: 33%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>  Date of last fitting of device to be provided by audiologist/ audiometrist, with model and make of device.</p></td>
                    //     <td style='width: 33%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>  Expected service life of sound processors is 6 years.</p></td>
                    // </tr>
                    // <tr>
                    //     <td style='width: 33%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>  Current device is out of warranty</p></td>
                    //     <td style='width: 33%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>  None required</p></td>
                    //     <td style='width: 33%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>  Completion of the warranty period is not a valid reason for replacement of hearing technology.</p></td>
                    // </tr>
                    // <tr>
                    //     <td style='width: 33%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>  Current device is faulty or damaged beyond repair</p></td>
                    //     <td style='width: 33%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>  Service and maintenance report from the manufacturer, demonstrating the device requires a major repair that is not considered cost effective and /or the device cannot be repaired.</p></td>
                    //     <td style='width: 33%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>  NDIS will replace a faulty device that is out of warranty or a damaged device, with the same item on the market.</p></td>
                    // </tr>
                    // <tr>
                    //     <td style='width: 33%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>  Current device is lost or stolen</p></td>
                    //     <td style='width: 33%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>  A statutory declaration is required.Consideration needs to be given whether the cost of the device can be recovered through household insurance where relevant.</p></td>
                    //     <td style='width: 33%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>  NDIS will replace a lost / stolen device with the same item on the market (if available), unless the participant’s needs meet upgrade criteria.</p></td>
                    // </tr>
                    // </table>
                    // <table style='background-color:#6a2c75; border:none; width:100%; margin-top:20px'>
                    // <tr>
                    // <td>
                    // <p style='font-size:14pt; font-weight:bold; margin-top:8px; margin-bottom:8px; color: white'>10.	Appendix B: Refit / Upgrade Request</p>
                    // </td>
                    // </tr>
                    // </table>
                    // <p style='font-size: 12pt; margin-top: 10px; margin-bottom: 10px'>A refitted/upgraded device is requested when a new device with higher specifications or a different style is required because the participant’s functional capacity has changed.</p>
                    // <table style='width:100%; border: 1px solid black'>
                    // <tr>
                    //         <td style='background-color: #efefef; width: 50%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px; font-weight: bold; text-align: center'>  Reason</p></td>
                    //         <td style='background-color: #efefef; width: 50%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px; font-weight: bold; text-align: center'>  Evidence required</p></td>
                    // </tr>
                    // <tr>
                    //         <td style='width: 50%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px; text-align: center'> The current hearing devices are not suitable because they can no longer be optimised by adjustments or any other modifications to meet current gain requirements. </p></td>
                    //         <td style='width: 50%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px; text-align: center'> Documented evidence on file that the current hearing technology is established to be in optimal working order.
                    //         And
                    //         After adjustment/modification has been made to current hearing aid(s) through manufacturer service/repair, mould/shell modification or replacement to accommodate changes in thresholds, Real Ear Measurements show a poor match to targets.
                    //         Or
                    //         Aid specifications show that the client’s current Hearing Threshold Level (HTL) is outside the range of the current hearing aid(s) and they were previously optimally fitted.
                    //         </p></td>
                    // </tr>
                    // <tr>
                    //         <td style='width: 50%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px; text-align: center'> The current hearing technology is unsuitable because the client can no longer use the device due to a significant deterioration in health, dexterity or cognitive ability since last fitting.
                    //         Or
                    //         A permanent change in physical condition of the ear or ear health has occurred since last fitting and the client requires a different style </p></td>
                    //         <td style='width: 50%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px; text-align: center'> Documented evidence on file describes the change in physical condition of the ear or ear health; or describes the client’s deterioration and how this affects the client’s ability to manage their hearing aid(s); or a letter from the client’s doctor, carer, nurse, supervisor etc. giving details of how the condition affects current hearing aid usage. Details of what has been tried with the current hearing aid(s) or why they cannot be modified 
                    //         And
                    //         Details how the new aid(s) proposed for refitting will address the issues with the current hearing aid(s)
                    //         </p></td>
                    // </tr>
                    // </table>
                    // <table style='background-color:#6a2c75; border:none; width:100%; margin-top:20px'>
                    // <tr>
                    // <td>
                    // <p style='font-size:14pt; font-weight:bold; margin-top:8px; margin-bottom:8px; color: white'>11.	Appendix C: Examples of functional measures for hearing device refitting requests</p>
                    // </td>
                    // </tr>
                    // </table>
                    // <p style='font-size: 12pt; margin-top: 10px; margin-bottom: 10px'><strong>Please note</strong>: This Appendix is to be used as a guide for functional evidence.  Please complete as appropriate or attach relevant clinical documentation that provides similar information.</p>
                    // <p style='font-size: 12pt; font-weight: bold'>Option 1</p>
                    // <ul style='margin-bottom: 10px; margin-top: 10px'>
                    // <li style='font-size: 11pt'>Aided Audiogram or Real Ear Measurements (Please attach)</li>
                    // <li style='font-size: 11pt'>Hearing   </li>
                    // <li style='font-size: 11pt'>Speech Audiometry including dynamic range, Loudness Discomfort Level (LDL) and speech in noise testing (Please attach)</li>
                    // </ul>
                    // <p style='margin-top: 10px; margin-bottom: 10px; font-size: 12pt'>What functional benefit does the requested device provide in the context of the participant’s current communication profile (including all current hearing supports accessed)? Provide comparison, for example, hearing aids alone, hearing aids with a remote microphone.</p>
                    // <p style='margin-bottom: 10px; font-size: 12pt'>Speech in noise, for example, Quick SIN / SPIN / Other</p>
                    // <table style='width:100%; margin-top: 10px; border: 1px solid black'>
                    // <tr>
                    // <td style='background-color: #efefef; width: 20%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px; font-weight: bold'>   Unaided</p></td>
                    // <td style='background-color: #efefef; width: 20%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px; font-weight: bold'>   Current preferred aided condition (if relevant</p></td>
                    // <td style='background-color: #efefef; width: 20%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px; font-weight: bold'>   Option 1 Device Details</p></td>
                    // <td style='background-color: #efefef; width: 20%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px; font-weight: bold'>   Option 2 Device Details</p></td>
                    // <td style='background-color: #efefef; width: 20%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px; font-weight: bold'>   Option 3 Device Details</p></td>
                    // </tr>
                    // <tr>
                    // <td style='background-color: #efefef; width: 20%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px; font-weight: bold'>   Data-Field</p></td>
                    // <td style='background-color: #efefef; width: 20%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px; font-weight: bold'>   Data-Field</p></td>
                    // <td style='background-color: #efefef; width: 20%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px; font-weight: bold'>   Data-Field</p></td>
                    // <td style='background-color: #efefef; width: 20%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px; font-weight: bold'>   Data-Field</p></td>
                    // <td style='background-color: #efefef; width: 20%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px; font-weight: bold'>   Data-Field</p></td>
                    // </tr>
                    // </table>


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
               "label":"Date of Assessment",
               "placeholder":"Enter Date of Assessment",
               "className":"form-control",
               "name":"part_1_ndis_date_of_assessment",
               "access":false,
               "subtype":"text"
            },
            {
               "type":"text",
               "required":false,
               "label":"Date of Report",
               "placeholder":"Enter Your Date of Report",
               "className":"form-control",
               "name":"part_1_ndis_participan_date_of_report",
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
               "placeholder":"Enter Your Participant Goals",
               "className":"form-control",
               "name":"part_2_assesment_participantgoals",
               "access":false,
               "subtype":"text"
            },
            {
               "type":"text",
               "required":false,
               "label":"Continuously / multiple times each day",
               "placeholder":"Enter Continuously / multiple times each day",
               "className":"form-control",
               "name":"part_2_assesment_functional_assessment1",
               "access":false,
               "subtype":"text"
            },
            {
               "type":"text",
               "required":false,
               "label":"Several times weekly  ",
               "placeholder":"Enter Several times weekly  ",
               "className":"form-control",
               "name":"part_2_assesment_functional_assessment2",
               "access":false,
               "subtype":"text"
            },
            {
               "type":"text",
               "required":false,
               "label":"Other, provide details:",
               "placeholder":"Enter Other, provide details:",
               "className":"form-control",
               "name":"part_2_assesment_functional_assessment3",
               "access":false,
               "subtype":"text"
            },
            {
               "type":"text",
               "required":false,
               "label":"Is the Participant / Nominee in agreement with this AT request? Please describe",
               "placeholder":"Is the Participant / Nominee in agreement with this AT request? Yes",
               "className":"form-control",
               "name":"part_2_assesment_functional_assessment4",
               "access":false,
               "subtype":"text"
            },
            {
               "type":"text",
               "required":false,
               "label":"Is the Participant / Nominee in agreement with this AT request? Please describe",
               "placeholder":"Is the Participant / Nominee in agreement with this AT request? No",
               "className":"form-control",
               "name":"part_2_assesment_functional_assessment5",
               "access":false,
               "subtype":"text"
            },
            {
               "type":"text",
               "required":false,
               "label":"Is the Participant / Nominee in agreement with this AT request? Please describe",
               "placeholder":"Is the Participant / Nominee in agreement with this AT request? Comment",
               "className":"form-control",
               "name":"part_2_assesment_functional_assessment6",
               "access":false,
               "subtype":"text"
            },
            {
               "type":"text",
               "required":false,
               "label":"Mobility",
               "placeholder":"Enter Mobility",
               "className":"form-control",
               "name":"part_2_functional_assessment1",
               "access":false,
               "subtype":"text"
            },
            {
               "type":"text",
               "required":false,
               "label":"Mobility",
               "placeholder":"Enter Mobility",
               "className":"form-control",
               "name":"part_2_functional_assessment2",
               "access":false,
               "subtype":"text"
            },
            {
               "type":"text",
               "required":false,
               "label":"Transfers, consider bed, chair, toilet and car",
               "placeholder":"Enter Transfers, consider bed, chair, toilet and car",
               "className":"form-control",
               "name":"part_2_functional_assessment3",
               "access":false,
               "subtype":"text"
            },
            {
               "type":"text",
               "required":false,
               "label":"Transfers, consider bed, chair, toilet and car",
               "placeholder":"Enter Transfers, consider bed, chair, toilet and car",
               "className":"form-control",
               "name":"part_2_functional_assessment4",
               "access":false,
               "subtype":"text"
            },
            {
               "type":"text",
               "required":false,
               "label":"Mobility aids, consider typical footprint and circulation space required for wheelchairs",
               "placeholder":"Mobility aids, consider typical footprint and circulation space required for wheelchairs",
               "className":"form-control",
               "name":"part_2_functional_assessment5",
               "access":false,
               "subtype":"text"
            },
            {
               "type":"text",
               "required":false,
               "label":"Mobility aids, consider typical footprint and circulation space required for wheelchairs",
               "placeholder":"Mobility aids, consider typical footprint and circulation space required for wheelchairs",
               "className":"form-control",
               "name":"part_2_functional_assessment6",
               "access":false,
               "subtype":"text"
            },
            {
               "type":"text",
               "required":false,
               "label":"Upper limb / Hand function and reach",
               "placeholder":"Upper limb / Hand function and reach",
               "className":"form-control",
               "name":"part_2_functional_assessment7",
               "access":false,
               "subtype":"text"
            },
            {
               "type":"text",
               "required":false,
               "label":"Upper limb / Hand function and reach",
               "placeholder":"Upper limb / Hand function and reach",
               "className":"form-control",
               "name":"part_2_functional_assessment8",
               "access":false,
               "subtype":"text"
            },
            {
               "type":"text",
               "required":false,
               "label":"Lifting and carrying capacity",
               "placeholder":"Lifting and carrying capacity",
               "className":"form-control",
               "name":"part_2_functional_assessment9",
               "access":false,
               "subtype":"text"
            },
            {
               "type":"text",
               "required":false,
               "label":"Lifting and carrying capacity",
               "placeholder":"Lifting and carrying capacity",
               "className":"form-control",
               "name":"part_2_functional_assessment10",
               "access":false,
               "subtype":"text"
            },
            {
               "type":"text",
               "required":false,
               "label":"Functional cognitive status",
               "placeholder":"Functional cognitive status",
               "className":"form-control",
               "name":"part_2_functional_assessment11",
               "access":false,
               "subtype":"text"
            },
            {
               "type":"text",
               "required":false,
               "label":"Functional cognitive status",
               "placeholder":"Functional cognitive status",
               "className":"form-control",
               "name":"part_2_functional_assessment12",
               "access":false,
               "subtype":"text"
            },
            {
               "type":"text",
               "required":false,
               "label":"Other general safety issues",
               "placeholder":"Other general safety issues",
               "className":"form-control",
               "name":"part_2_functional_assessment13",
               "access":false,
               "subtype":"text"
            },
            {
               "type":"text",
               "required":false,
               "label":"Other general safety issues",
               "placeholder":"Other general safety issues",
               "className":"form-control",
               "name":"part_2_functional_assessment14",
               "access":false,
               "subtype":"text"
            },
            {
               "type":"text",
               "required":false,
               "label":"Toileting ",
               "placeholder":"Toileting",
               "className":"form-control",
               "name":"part_2_functional_assessment15",
               "access":false,
               "subtype":"text"
            },
            {
               "type":"text",
               "required":false,
               "label":"Toileting ",
               "placeholder":"Toileting",
               "className":"form-control",
               "name":"part_2_functional_assessment16",
               "access":false,
               "subtype":"text"
            },
            {
               "type":"text",
               "required":false,
               "label":"Dressing",
               "placeholder":"Dressing",
               "className":"form-control",
               "name":"part_2_functional_assessment17",
               "access":false,
               "subtype":"text"
            },
            {
               "type":"text",
               "required":false,
               "label":"Dressing",
               "placeholder":"Dressing",
               "className":"form-control",
               "name":"part_2_functional_assessment18",
               "access":false,
               "subtype":"text"
            },
            {
               "type":"text",
               "required":false,
               "label":"Showering/bathing ",
               "placeholder":"Showering/bathing ",
               "className":"form-control",
               "name":"part_2_functional_assessment19",
               "access":false,
               "subtype":"text"
            },
            {
               "type":"text",
               "required":false,
               "label":"Showering/bathing ",
               "placeholder":"Showering/bathing ",
               "className":"form-control",
               "name":"part_2_functional_assessment20",
               "access":false,
               "subtype":"text"
            },
            {
               "type":"text",
               "required":false,
               "label":"Grooming",
               "placeholder":"Grooming ",
               "className":"form-control",
               "name":"part_2_functional_assessment21",
               "access":false,
               "subtype":"text"
            },
            {
               "type":"text",
               "required":false,
               "label":"Grooming",
               "placeholder":"Grooming ",
               "className":"form-control",
               "name":"part_2_functional_assessment22",
               "access":false,
               "subtype":"text"
            },
            {
               "type":"text",
               "required":false,
               "label":"Other",
               "placeholder":"Other ",
               "className":"form-control",
               "name":"part_2_functional_assessment23",
               "access":false,
               "subtype":"text"
            },
            {
               "type":"text",
               "required":false,
               "label":"Other",
               "placeholder":"Other ",
               "className":"form-control",
               "name":"part_2_functional_assessment24",
               "access":false,
               "subtype":"text"
            },
            {
               "type":"text",
               "required":false,
               "label":"Meal preparation",
               "placeholder":"Meal preparation",
               "className":"form-control",
               "name":"part_2_functional_assessment25",
               "access":false,
               "subtype":"text"
            },
            {
               "type":"text",
               "required":false,
               "label":"Meal preparation",
               "placeholder":"Meal preparation",
               "className":"form-control",
               "name":"part_2_functional_assessment26",
               "access":false,
               "subtype":"text"
            },
            {
               "type":"text",
               "required":false,
               "label":"Cleaning",
               "placeholder":"Cleaning",
               "className":"form-control",
               "name":"part_2_functional_assessment27",
               "access":false,
               "subtype":"text"
            },
            {
               "type":"text",
               "required":false,
               "label":"Cleaning",
               "placeholder":"Cleaning",
               "className":"form-control",
               "name":"part_2_functional_assessment28",
               "access":false,
               "subtype":"text"
            },
            {
               "type":"text",
               "required":false,
               "label":"Laundry",
               "placeholder":"Laundry",
               "className":"form-control",
               "name":"part_2_functional_assessment29",
               "access":false,
               "subtype":"text"
            },
            {
               "type":"text",
               "required":false,
               "label":"Laundry",
               "placeholder":"Laundry",
               "className":"form-control",
               "name":"part_2_functional_assessment30",
               "access":false,
               "subtype":"text"
            },
            {
               "type":"text",
               "required":false,
               "label":"Other",
               "placeholder":"Other",
               "className":"form-control",
               "name":"part_2_functional_assessment31",
               "access":false,
               "subtype":"text"
            },
            {
               "type":"text",
               "required":false,
               "label":"Other",
               "placeholder":"Other",
               "className":"form-control",
               "name":"part_2_functional_assessment32",
               "access":false,
               "subtype":"text"
            },
            {
               "type":"text",
               "required":false,
               "label":"Recreation and leisure",
               "placeholder":"Recreation and leisure",
               "className":"form-control",
               "name":"part_2_functional_assessment33",
               "access":false,
               "subtype":"text"
            },
            {
               "type":"text",
               "required":false,
               "label":"Recreation and leisure",
               "placeholder":"Recreation and leisure",
               "className":"form-control",
               "name":"part_2_functional_assessment34",
               "access":false,
               "subtype":"text"
            },
            {
               "type":"text",
               "required":false,
               "label":"Driving and/or transportation in vehicle/cars",
               "placeholder":"Driving and/or transportation in vehicle/cars",
               "className":"form-control",
               "name":"part_2_functional_assessment35",
               "access":false,
               "subtype":"text"
            },
            {
               "type":"text",
               "required":false,
               "label":"Driving and/or transportation in vehicle/cars",
               "placeholder":"Driving and/or transportation in vehicle/cars",
               "className":"form-control",
               "name":"part_2_functional_assessment36",
               "access":false,
               "subtype":"text"
            },
            {
               "type":"text",
               "required":false,
               "label":"Work and study issues",
               "placeholder":"Work and study issues",
               "className":"form-control",
               "name":"part_2_functional_assessment37",
               "access":false,
               "subtype":"text"
            },
            {
               "type":"text",
               "required":false,
               "label":"Work and study issues",
               "placeholder":"Work and study issues",
               "className":"form-control",
               "name":"part_2_functional_assessment38",
               "access":false,
               "subtype":"text"
            }
         ]';


        $form_fields3 = '[
            {
               "type":"text",
               "required":false,
               "label":"Participant owned",
               "placeholder":"Enter Participant owned",
               "className":"form-control",
               "name":"part_3_property_details_participant_owned",
               "access":false,
               "subtype":"text"
            },
            {
               "type":"text",
               "required":false,
               "label":"Co-owned",
               "placeholder":"Enter Co-owned",
               "className":"form-control",
               "name":"part_3_property_details_co_owned",
               "access":false,
               "subtype":"text"
            },
            {
               "type":"text",
               "required":false,
               "label":"Private rental",
               "placeholder":"Enter Private rental",
               "className":"form-control",
               "name":"part_3_property_details_private_rental",
               "access":false,
               "subtype":"text"
            },
            {
               "type":"text",
               "required":false,
               "label":"Public rental / housing",
               "placeholder":"Enter Public rental / housing",
               "className":"form-control",
               "name":"part_3_property_details_public_rental_housing",
               "access":false,
               "subtype":"text"
            },
            {
               "type":"text",
               "required":false,
               "label":"Family owned",
               "placeholder":"Enter Family owned",
               "className":"form-control",
               "name":"part_3_property_details_family_owned",
               "access":false,
               "subtype":"text"
            },
            {
               "type":"text",
               "required":false,
               "label":"Yes",
               "placeholder":"Enter Yes",
               "className":"form-control",
               "name":"part_3_property_details_yes1",
               "access":false,
               "subtype":"text"
            },
            {
               "type":"text",
               "required":false,
               "label":"Yes",
               "placeholder":"Enter No",
               "className":"form-control",
               "name":"part_3_property_details_no1",
               "access":false,
               "subtype":"text"
            },
            {
               "type":"text",
               "required":false,
               "label":"Details of previous modifications",
               "placeholder":"Enter Details of previous modifications",
               "className":"form-control",
               "name":"part_3_property_details__of_previous_modifications",
               "access":false,
               "subtype":"text"
            },
            {
               "type":"text",
               "required":false,
               "label":"Yes",
               "placeholder":"Enter Yes",
               "className":"form-control",
               "name":"part_3_property_details_yes2",
               "access":false,
               "subtype":"text"
            },
            {
               "type":"text",
               "required":false,
               "label":"Yes",
               "placeholder":"Enter Yes",
               "className":"form-control",
               "name":"part_3_property_details_no2",
               "access":false,
               "subtype":"text"
            },
            {
               "type":"textarea",
               "required":false,
               "label":"Structure of property",
               "placeholder":"Enter Structure of property",
               "className":"form-control",
               "name":"part_3_property_details_structure_of_property",
               "access":false,
               "subtype":"text"
            },
            {
               "type":"textarea",
               "required":false,
               "label":"Description of property",
               "placeholder":"Enter Description of property",
               "className":"form-control",
               "name":"part_3_property_details_description_of_property",
               "access":false,
               "subtype":"text"
            },
            {
               "type":"textarea",
               "required":false,
               "label":"Special Conditions",
               "placeholder":"Enter Special Conditions",
               "className":"form-control",
               "name":"part_3_property_details_special_conditions",
               "access":false,
               "subtype":"text"
            }
         ]';

        $form_fields4 = '[
            {
               "type":"textarea",
               "required":false,
               "label":"Social Circumstances",
               "placeholder":"Enter Social Circumstances",
               "className":"form-control",
               "name":"part_4_property_details_participant_owned",
               "access":false,
               "subtype":"textarea"
            },
            {
               "type":"textarea",
               "required":false,
               "label":"Not Available",
               "placeholder":"Enter N/A",
               "className":"form-control",
               "name":"part_4_property_details_n_a",
               "access":false,
               "subtype":"textarea"
            },
            {
               "type":"text",
               "required":false,
               "label":"Anticipated discharge date",
               "placeholder":"Enter Anticipated discharge date",
               "className":"form-control",
               "name":"part_4_property_details_anticipated_discharge_date",
               "access":false,
               "subtype":"textarea"
            },
            {
               "type":"textarea",
               "required":false,
               "label":"Discharge plan details/Comments",
               "placeholder":"Enter Discharge plan details/Comments",
               "className":"form-control",
               "name":"part_4_property_details_discharge_plan_details_Comments",
               "access":false,
               "subtype":"textarea"
            },
            {
               "type":"textarea",
               "required":false,
               "label":"Proposed living arrangements ",
               "placeholder":"Enter Proposed living arrangements",
               "className":"form-control",
               "name":"part_4_property_details_proposed_living_arrangements",
               "access":false,
               "subtype":"textarea"
            }
         ]';

        $form_fields5 = '[
            {
               "type":"text",
               "required":false,
               "label":"Modification Details N/A",
               "placeholder":"Enter Modification Details N/A",
               "className":"form-control",
               "name":"part_5_ndis_complex_home_modification_recommendations001",
               "access":false,
               "subtype":"textarea"
            },
            {
               "type":"text",
               "required":false,
               "label":"Modification Details N/A",
               "placeholder":"Enter Modification Details N/A",
               "className":"form-control",
               "name":"part_5_complex_home_modification_recommendations_externals_n_a",
               "access":false,
               "subtype":"textarea"
            },
            {
               "type":"text",
               "required":false,
               "label":"Current Situation",
               "placeholder":"Current Situation",
               "className":"form-control",
               "name":"part_5_complex_home_modification_recommendations_externals_current_situation",
               "access":false,
               "subtype":"textarea"
            },
            {
               "type":"text",
               "required":false,
               "label":"Recommendations",
               "placeholder":"Recommendations",
               "className":"form-control",
               "name":"part_5_complex_home_modification_recommendations_externals_recommendations",
               "access":false,
               "subtype":"textarea"
            },
            {
               "type":"text",
               "required":false,
               "label":"Priority",
               "placeholder":"Priority",
               "className":"form-control",
               "name":"part_5_complex_home_modification_recommendations_externals_priority",
               "access":false,
               "subtype":"textarea"
            },
            {
               "type":"text",
               "required":false,
               "label":"Clinical Evidence",
               "placeholder":"Clinical Evidence",
               "className":"form-control",
               "name":"part_5_complex_home_modification_recommendations_externals_clinical_evidence",
               "access":false,
               "subtype":"textarea"
            },
            {
               "type":"text",
               "required":false,
               "label":"Modification Details N/A",
               "placeholder":"Enter Modification Details N/A",
               "className":"form-control",
               "name":"part_5_complex_home_modification_recommendations_externals_n_a1",
               "access":false,
               "subtype":"textarea"
            },
            {
               "type":"text",
               "required":false,
               "label":"Current Situation",
               "placeholder":"Current Situation",
               "className":"form-control",
               "name":"part_5_complex_home_modification_recommendations_externals_current_situation1",
               "access":false,
               "subtype":"textarea"
            },
            {
               "type":"text",
               "required":false,
               "label":"Recommendations",
               "placeholder":"Recommendations",
               "className":"form-control",
               "name":"part_5_complex_home_modification_recommendations_externals_recommendations1",
               "access":false,
               "subtype":"textarea"
            },
            {
               "type":"text",
               "required":false,
               "label":"Priority",
               "placeholder":"Priority",
               "className":"form-control",
               "name":"part_5_complex_home_modification_recommendations_externals_priority1",
               "access":false,
               "subtype":"textarea"
            },
            {
               "type":"text",
               "required":false,
               "label":"Clinical Evidence",
               "placeholder":"Clinical Evidence",
               "className":"form-control",
               "name":"part_5_complex_home_modification_recommendations_externals_clinical_evidence1",
               "access":false,
               "subtype":"textarea"
            },
            {
               "type":"text",
               "required":false,
               "label":"Modification Details N/A",
               "placeholder":"Enter Modification Details N/A",
               "className":"form-control",
               "name":"part_5_complex_home_modification_recommendations_externals_n_a2",
               "access":false,
               "subtype":"textarea"
            },
            {
               "type":"text",
               "required":false,
               "label":"Current Situation",
               "placeholder":"Current Situation",
               "className":"form-control",
               "name":"part_5_complex_home_modification_recommendations_externals_current_situation2",
               "access":false,
               "subtype":"textarea"
            },
            {
               "type":"text",
               "required":false,
               "label":"Recommendations",
               "placeholder":"Recommendations",
               "className":"form-control",
               "name":"part_5_complex_home_modification_recommendations_externals_recommendations2",
               "access":false,
               "subtype":"textarea"
            },
            {
               "type":"text",
               "required":false,
               "label":"Priority",
               "placeholder":"Priority",
               "className":"form-control",
               "name":"part_5_complex_home_modification_recommendations_externals_priority2",
               "access":false,
               "subtype":"textarea"
            },
            {
               "type":"text",
               "required":false,
               "label":"Clinical Evidence",
               "placeholder":"Clinical Evidence",
               "className":"form-control",
               "name":"part_5_complex_home_modification_recommendations_externals_clinical_evidence2",
               "access":false,
               "subtype":"textarea"
            },
            {
               "type":"text",
               "required":false,
               "label":"Internals N/A",
               "placeholder":"Enter Modification Details N/A",
               "className":"form-control",
               "name":"part_5_complex_home_modification_recommendations_internals_n_a3",
               "access":false,
               "subtype":"textarea"
            },
            {
               "type":"text",
               "required":false,
               "label":"Current Situation",
               "placeholder":"Current Situation",
               "className":"form-control",
               "name":"part_5_complex_home_modification_recommendations_internals_current_situation3",
               "access":false,
               "subtype":"textarea"
            },
            {
               "type":"text",
               "required":false,
               "label":"Recommendations",
               "placeholder":"Recommendations",
               "className":"form-control",
               "name":"part_5_complex_home_modification_recommendations_internals_recommendations3",
               "access":false,
               "subtype":"textarea"
            },
            {
               "type":"text",
               "required":false,
               "label":"Priority",
               "placeholder":"Priority",
               "className":"form-control",
               "name":"part_5_complex_home_modification_recommendations_internals_priority3",
               "access":false,
               "subtype":"textarea"
            },
            {
               "type":"text",
               "required":false,
               "label":"Clinical Evidence",
               "placeholder":"Clinical Evidence",
               "className":"form-control",
               "name":"part_5_complex_home_modification_recommendations_internals_clinical_evidence3",
               "access":false,
               "subtype":"textarea"
            },
            {
               "type":"text",
               "required":false,
               "label":"Internals N/A",
               "placeholder":"Enter Modification Details N/A",
               "className":"form-control",
               "name":"part_5_complex_home_modification_recommendations_internals_n_a4",
               "access":false,
               "subtype":"textarea"
            },
            {
               "type":"text",
               "required":false,
               "label":"Current Situation",
               "placeholder":"Current Situation",
               "className":"form-control",
               "name":"part_5_complex_home_modification_recommendations_internals_current_situation4",
               "access":false,
               "subtype":"textarea"
            },
            {
               "type":"text",
               "required":false,
               "label":"Recommendations",
               "placeholder":"Recommendations",
               "className":"form-control",
               "name":"part_5_complex_home_modification_recommendations_internals_recommendations4",
               "access":false,
               "subtype":"textarea"
            },
            {
               "type":"text",
               "required":false,
               "label":"Priority",
               "placeholder":"Priority",
               "className":"form-control",
               "name":"part_5_complex_home_modification_recommendations_internals_priority4",
               "access":false,
               "subtype":"textarea"
            },
            {
               "type":"text",
               "required":false,
               "label":"Clinical Evidence",
               "placeholder":"Clinical Evidence",
               "className":"form-control",
               "name":"part_5_complex_home_modification_recommendations_internals_clinical_evidence4",
               "access":false,
               "subtype":"textarea"
            },
            {
               "type":"text",
               "required":false,
               "label":"Internals N/A",
               "placeholder":"Enter Modification Details N/A",
               "className":"form-control",
               "name":"part_5_complex_home_modification_recommendations_internals_n_a5",
               "access":false,
               "subtype":"textarea"
            },
            {
               "type":"text",
               "required":false,
               "label":"Current Situation",
               "placeholder":"Current Situation",
               "className":"form-control",
               "name":"part_5_complex_home_modification_recommendations_internals_current_situation5",
               "access":false,
               "subtype":"textarea"
            },
            {
               "type":"text",
               "required":false,
               "label":"Recommendations",
               "placeholder":"Recommendations",
               "className":"form-control",
               "name":"part_5_complex_home_modification_recommendations_internals_recommendations5",
               "access":false,
               "subtype":"textarea"
            },
            {
               "type":"text",
               "required":false,
               "label":"Priority",
               "placeholder":"Priority",
               "className":"form-control",
               "name":"part_5_complex_home_modification_recommendations_internals_priority5",
               "access":false,
               "subtype":"textarea"
            },
            {
               "type":"text",
               "required":false,
               "label":"Clinical Evidence",
               "placeholder":"Clinical Evidence",
               "className":"form-control",
               "name":"part_5_complex_home_modification_recommendations_internals_clinical_evidence5",
               "access":false,
               "subtype":"textarea"
            },
            {
               "type":"text",
               "required":false,
               "label":"Internals N/A",
               "placeholder":"Enter Modification Details N/A",
               "className":"form-control",
               "name":"part_5_complex_home_modification_recommendations_internals_n_a6",
               "access":false,
               "subtype":"textarea"
            },
            {
               "type":"text",
               "required":false,
               "label":"Current Situation",
               "placeholder":"Current Situation",
               "className":"form-control",
               "name":"part_5_complex_home_modification_recommendations_internals_current_situation6",
               "access":false,
               "subtype":"textarea"
            },
            {
               "type":"text",
               "required":false,
               "label":"Recommendations",
               "placeholder":"Recommendations",
               "className":"form-control",
               "name":"part_5_complex_home_modification_recommendations_internals_recommendations6",
               "access":false,
               "subtype":"textarea"
            },
            {
               "type":"text",
               "required":false,
               "label":"Priority",
               "placeholder":"Priority",
               "className":"form-control",
               "name":"part_5_complex_home_modification_recommendations_internals_priority6",
               "access":false,
               "subtype":"textarea"
            },
            {
               "type":"text",
               "required":false,
               "label":"Clinical Evidence",
               "placeholder":"Clinical Evidence",
               "className":"form-control",
               "name":"part_5_complex_home_modification_recommendations_internals_clinical_evidence6",
               "access":false,
               "subtype":"textarea"
            },
            {
               "type":"text",
               "required":false,
               "label":"Internals N/A",
               "placeholder":"Enter Modification Details N/A",
               "className":"form-control",
               "name":"part_5_complex_home_modification_recommendations_internals_n_a7",
               "access":false,
               "subtype":"textarea"
            },
            {
               "type":"text",
               "required":false,
               "label":"Current Situation",
               "placeholder":"Current Situation",
               "className":"form-control",
               "name":"part_5_complex_home_modification_recommendations_internals_current_situation7",
               "access":false,
               "subtype":"textarea"
            },
            {
               "type":"text",
               "required":false,
               "label":"Recommendations",
               "placeholder":"Recommendations",
               "className":"form-control",
               "name":"part_5_complex_home_modification_recommendations_internals_recommendations7",
               "access":false,
               "subtype":"textarea"
            },
            {
               "type":"text",
               "required":false,
               "label":"Priority",
               "placeholder":"Priority",
               "className":"form-control",
               "name":"part_5_complex_home_modification_recommendations_internals_priority7",
               "access":false,
               "subtype":"textarea"
            },
            {
               "type":"text",
               "required":false,
               "label":"Clinical Evidence",
               "placeholder":"Clinical Evidence",
               "className":"form-control",
               "name":"part_5_complex_home_modification_recommendations_internals_clinical_evidence7",
               "access":false,
               "subtype":"textarea"
            },
            {
               "type":"text",
               "required":false,
               "label":"Internals N/A",
               "placeholder":"Enter Modification Details N/A",
               "className":"form-control",
               "name":"part_5_complex_home_modification_recommendations_internals_n_a8",
               "access":false,
               "subtype":"textarea"
            },
            {
               "type":"text",
               "required":false,
               "label":"Current Situation",
               "placeholder":"Current Situation",
               "className":"form-control",
               "name":"part_5_complex_home_modification_recommendations_internals_current_situation8",
               "access":false,
               "subtype":"textarea"
            },
            {
               "type":"text",
               "required":false,
               "label":"Recommendations",
               "placeholder":"Recommendations",
               "className":"form-control",
               "name":"part_5_complex_home_modification_recommendations_internals_recommendations8",
               "access":false,
               "subtype":"textarea"
            },
            {
               "type":"text",
               "required":false,
               "label":"Priority",
               "placeholder":"Priority",
               "className":"form-control",
               "name":"part_5_complex_home_modification_recommendations_internals_priority8",
               "access":false,
               "subtype":"textarea"
            },
            {
               "type":"text",
               "required":false,
               "label":"Clinical Evidence",
               "placeholder":"Clinical Evidence",
               "className":"form-control",
               "name":"part_5_complex_home_modification_recommendations_internals_clinical_evidence8",
               "access":false,
               "subtype":"textarea"
            },
            {
               "type":"text",
               "required":false,
               "label":"Internals N/A",
               "placeholder":"Enter Modification Details N/A",
               "className":"form-control",
               "name":"part_5_complex_home_modification_recommendations_internals_n_a9",
               "access":false,
               "subtype":"textarea"
            },
            {
               "type":"text",
               "required":false,
               "label":"Current Situation",
               "placeholder":"Current Situation",
               "className":"form-control",
               "name":"part_5_complex_home_modification_recommendations_internals_current_situation9",
               "access":false,
               "subtype":"textarea"
            },
            {
               "type":"text",
               "required":false,
               "label":"Recommendations",
               "placeholder":"Recommendations",
               "className":"form-control",
               "name":"part_5_complex_home_modification_recommendations_internals_recommendations9",
               "access":false,
               "subtype":"textarea"
            },
            {
               "type":"text",
               "required":false,
               "label":"Priority",
               "placeholder":"Priority",
               "className":"form-control",
               "name":"part_5_complex_home_modification_recommendations_internals_priority9",
               "access":false,
               "subtype":"textarea"
            },
            {
               "type":"text",
               "required":false,
               "label":"Clinical Evidence",
               "placeholder":"Clinical Evidence",
               "className":"form-control",
               "name":"part_5_complex_home_modification_recommendations_internals_clinical_evidence09",
               "access":false,
               "subtype":"textarea"
            },
            {
               "type":"textarea",
               "required":false,
               "label":"Heating and Cooling",
               "placeholder":"Heating and Cooling",
               "className":"form-control",
               "name":"part_5_complex_home_modification_recommendations_heating_and_cooling",
               "access":false,
               "subtype":"textarea"
            },
            {
               "type":"text",
               "required":false,
               "label":"Is a staged process for building modifications appropriate? Yes or No?",
               "placeholder":"Is a staged process for building modifications appropriate? Yes or No?",
               "className":"form-control",
               "name":"part_5_complex_home_modification_recommendations_staged_process1",
               "access":false,
               "subtype":"textarea"
            },
            {
               "type":"textarea",
               "required":false,
               "label":"Staged Process",
               "placeholder":"Staged Process",
               "className":"form-control",
               "name":"part_5_complex_home_modification_recommendations_staged_process2",
               "access":false,
               "subtype":"textarea"
            },
            {
               "type":"textarea",
               "required":false,
               "label":"Exception to Disability Standards",
               "placeholder":"Exception to Disability Standards",
               "className":"form-control",
               "name":"part_5_complex_home_modification_recommendations_exception_to_disability_standards",
               "access":false,
               "subtype":"textarea"
            }
         ]';

        $form_fields6 = '[
            {
               "type":"textarea",
               "required":false,
               "label":"Complex Home Modification Quotes",
               "placeholder":"Complex Home Modification Quotes",
               "className":"form-control",
               "name":"part_6_complex_home_modification_quotes",
               "access":false,
               "subtype":"textarea"
            }
         ]';


            // Details of Assessor  

        $form_fields7 = '[
            {
               "type":"text",
               "required":false,
               "label":"Details of Assessor",
               "placeholder":"Details of Assessor",
               "className":"form-control",
               "name":"part_7_details_of_assessor_01",
               "access":false,
               "subtype":"textarea"
            },
            {
               "type":"text",
               "required":false,
               "label":"Details of Assessor ",
               "placeholder":"Details of Assessor",
               "className":"form-control",
               "name":"part_7_details_of_assessor_02",
               "access":false,
               "subtype":"textarea"
            },
            {
               "type":"text",
               "required":false,
               "label":"Details of Assessor ",
               "placeholder":"Details of Assessor",
               "className":"form-control",
               "name":"part_7_details_of_assessor_03",
               "access":false,
               "subtype":"textarea"
            },
            {
               "type":"text",
               "required":false,
               "label":"Details of Assessor ",
               "placeholder":"Details of Assessor",
               "className":"form-control",
               "name":"part_7_details_of_assessor_04",
               "access":false,
               "subtype":"textarea"
            },
            {
               "type":"text",
               "required":false,
               "label":"Name",
               "placeholder":"Name",
               "className":"form-control",
               "name":"part_7_details_of_assessor_05",
               "access":false,
               "subtype":"textarea"
            },
            {
               "type":"text",
               "required":false,
               "label":"NDIS Provider Registration number",
               "placeholder":"NDIS Provider Registration number",
               "className":"form-control",
               "name":"part_7_details_of_assessor_06",
               "access":false,
               "subtype":"textarea"
            },
            {
               "type":"text",
               "required":false,
               "label":"Phone",
               "placeholder":"Phone",
               "className":"form-control",
               "name":"part_7_details_of_assessor_07",
               "access":false,
               "subtype":"textarea"
            },
            {
               "type":"email",
               "required":false,
               "label":"Email",
               "placeholder":"Enter Your Email",
               "className":"form-control",
               "name":"part_7_details_of_assessor_08",
               "access":false,
               "subtype":"text"
            },
            {
               "type":"text",
               "required":false,
               "label":"Signature",
               "placeholder":"Signature",
               "className":"form-control",
               "name":"part_7_details_of_assessor_09",
               "access":false,
               "subtype":"textarea"
            },
            {
               "type":"text",
               "required":false,
               "label":"Qualification",
               "placeholder":"Qualification",
               "className":"form-control",
               "name":"part_7_details_of_assessor_10",
               "access":false,
               "subtype":"textarea"
            },
            {
               "type":"text",
               "required":false,
               "label":"Date of Assessment ",
               "placeholder":"Date of Assessment ",
               "className":"form-control",
               "name":"part_7_details_of_assessor_11",
               "access":false,
               "subtype":"textarea"
            },
            {
               "type":"text",
               "required":false,
               "label":"Date of Report ",
               "placeholder":"Date of Report",
               "className":"form-control",
               "name":"part_7_details_of_assessor_12",
               "access":false,
               "subtype":"textarea"
            },
            {
               "type":"text",
               "required":false,
               "label":"Name",
               "placeholder":"Name",
               "className":"form-control",
               "name":"part_7_details_of_assessor_13",
               "access":false,
               "subtype":"textarea"
            },
            {
               "type":"text",
               "required":false,
               "label":"NDIS Provider Registration number ",
               "placeholder":"NDIS Provider Registration and/or Builder Registration",
               "className":"form-control",
               "name":"part_7_details_of_assessor_14",
               "access":false,
               "subtype":"textarea"
            },
            {
               "type":"text",
               "required":false,
               "label":"Phone",
               "placeholder":"Phone",
               "className":"form-control",
               "name":"part_7_details_of_assessor_15",
               "access":false,
               "subtype":"textarea"
            },
            {
               "type":"email",
               "required":false,
               "label":"Email",
               "placeholder":"Enter Your Email",
               "className":"form-control",
               "name":"part_7_details_of_assessor_16",
               "access":false,
               "subtype":"text"
            },
            {
               "type":"text",
               "required":false,
               "label":"Signature",
               "placeholder":"Signature",
               "className":"form-control",
               "name":"part_7_details_of_assessor_17",
               "access":false,
               "subtype":"textarea"
            },
            {
               "type":"text",
               "required":false,
               "label":"Qualification",
               "placeholder":"Qualification",
               "className":"form-control",
               "name":"part_7_details_of_assessor_18",
               "access":false,
               "subtype":"textarea"
            },
            {
               "type":"text",
               "required":false,
               "label":"Date of review by Building Construction Professional",
               "placeholder":"Date of review by Building Construction Professional",
               "className":"form-control",
               "name":"part_7_details_of_assessor_19",
               "access":false,
               "subtype":"textarea"
            },
            {
               "type":"text",
               "required":false,
               "label":"Indicate where this report has been developed in consultation",
               "placeholder":"Indicate where this report has been developed in consultation",
               "className":"form-control",
               "name":"part_7_details_of_assessor_20",
               "access":false,
               "subtype":"textarea"
            }
         ]';


        $form_fields8 = '[
            {
               "type":"text",
               "required":false,
               "label":"Yes, I consent",
               "placeholder":"Yes, I consent",
               "className":"form-control",
               "name":"part_8_Consent_to_collect_and_share_your_information_01",
               "access":false,
               "subtype":"text"
            },
            {
               "type":"text",
               "required":false,
               "label":"No, I do not consent",
               "placeholder":"No, I do not consent",
               "className":"form-control",
               "name":"part_8_Consent_to_collect_and_share_your_information_02",
               "access":false,
               "subtype":"text"
            },
            {
               "type":"text",
               "required":false,
               "label":"I understand that I am giving consent to the NDIA to do the things.",
               "placeholder":"I understand that I am giving consent to the NDIA to do the things",
               "className":"form-control",
               "name":"part_8_Consent_to_collect_and_share_your_information_03",
               "access":false,
               "subtype":"text"
            },
            {
               "type":"text",
               "required":false,
               "label":"I understand that I can access the NDIA’s Privacy Notice and Privacy Policy .",
               "placeholder":"I understand that I can access the NDIA’s Privacy Notice and Privacy Policy.",
               "className":"form-control",
               "name":"part_8_Consent_to_collect_and_share_your_information_04",
               "access":false,
               "subtype":"text"
            },
            {
               "type":"text",
               "required":false,
               "label":"Signature",
               "placeholder":"Signature",
               "className":"form-control",
               "name":"part_8_Consent_to_collect_and_share_your_information_05",
               "access":false,
               "subtype":"text"
            },
            {
               "type":"text",
               "required":false,
               "label":"Date",
               "placeholder":"Date",
               "className":"form-control",
               "name":"part_8_Consent_to_collect_and_share_your_information_06",
               "access":false,
               "subtype":"text"
            },
            {
               "type":"text",
               "required":false,
               "label":"Full name ",
               "placeholder":"Full name ",
               "className":"form-control",
               "name":"part_8_Consent_to_collect_and_share_your_information_07",
               "access":false,
               "subtype":"text"
            },
            {
               "type":"text",
               "required":false,
               "label":"Signature",
               "placeholder":"Signature",
               "className":"form-control",
               "name":"part_8_Consent_to_collect_and_share_your_information_08",
               "access":false,
               "subtype":"text"
            },
            {
               "type":"text",
               "required":false,
               "label":"Date",
               "placeholder":"Date",
               "className":"form-control",
               "name":"part_8_Consent_to_collect_and_share_your_information_09",
               "access":false,
               "subtype":"text"
            },
            {
               "type":"text",
               "required":false,
               "label":"Full Name of person completing this form (please print):",
               "placeholder":"Full Name of person completing this form (please print):",
               "className":"form-control",
               "name":"part_8_Consent_to_collect_and_share_your_information_10",
               "access":false,
               "subtype":"text"
            },
            {
               "type":"text",
               "required":false,
               "label":"Relationship to participant or person wishing to become an NDIS participant:",
               "placeholder":"Relationship to participant or person wishing to become an NDIS participant:",
               "className":"form-control",
               "name":"part_8_Consent_to_collect_and_share_your_information_11",
               "access":false,
               "subtype":"text"
            }
         ]';


        $form = Form::insertGetId([
            'name' => 'Complex Home Modification Assessment Template'
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
            'form_heading' => 'PART 3 – Property Details',
            'form_id' => $form,
            'section_html' => $section3
        ]);

        $heading4 = FormHeading::insertGetId([
            'form_heading' => 'PART 4 – Social Situation',
            'form_id' => $form,
            'section_html' => $section4
        ]);

        $heading5 = FormHeading::insertGetId([
            'form_heading' => 'PART 5 – Complex Home Modification Recommendations',
            'form_id' => $form,
            'section_html' => $section5
        ]);


        $heading6 = FormHeading::insertGetId([
            'form_heading' => 'PART 6 – Complex Home Modification Quotes',
            'form_id' => $form,
            'section_html' => $section6
        ]);


        $heading7 = FormHeading::insertGetId([
            'form_heading' => 'PART 7 – Details of Assessor',
            'form_id' => $form,
            'section_html' => $section7
        ]);

        $heading8 = FormHeading::insertGetId([
            'form_heading' => 'PART 8 – Consent to Collect and Share Your Information ',
            'form_id' => $form,
            'section_html' => $section8
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
        FormField::create([
            'form_heading_id' => $heading7,
            'form_field' => $form_fields7
        ]);

        FormField::create([
            'form_heading_id' => $heading8,
            'form_field' => $form_fields8
        ]);

    }

}
