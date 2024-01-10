<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\{Form, FormHeading, FormField};

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
                                {{part_1_ndis_age1}}
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
                                {{part_1_ndis_participantphone_number1}}
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
                                <p style='font-size:12pt; font-weight:bold; margin-top:5px; margin-bottom:5px; color: white'> PART 2 – Assessment</p>
                            </td>
                        </tr>
                    </table>
                    <p style='font-weight:bold; font-size:13pt;margin-top:20px; margin-bottom:20px;'>2.1   Background </p>
                    <p style='font-size:12pt;'>General: Describe participant’s current status which may include diagnosis, prognosis, co-existing conditions, disability, personal and instrumental activities of daily living, formal and informal support arrangements and life transitions.</p>
                    <table
                    style='border-collapse: collapse;width: 100%;margin: auto;border: 1px solid lightslategray;'>
                        <tr>
                        <td style='border: 1px solid lightslategray; padding: 10px; width: 20%; background-color: lightgrey; font-size: 17px'>Details</td>
                        <td style='border: 1px solid lightslategray; padding: 10px'>
                            {{part_2_assesment_background}}
                        </td>
                        </tr>
                    </table>
                    <p style='font-weight:bold; font-size:13pt;margin-top:20px; margin-bottom:20px;'>2.2 Participant Goals</p>
                    <p style='font-size:12pt;'>If the participant’s NDIS plan has been made available, you can refer to the statement of participant’s goals and outline those relevant to provision of an Assistance Animal.</p>
                    <table
                    style='border-collapse: collapse;width: 100%;margin: auto;border: 1px solid lightslategray;'>
                        <tr>
                        <td style='border: 1px solid lightslategray; padding: 10px; width: 20%; background-color: lightgrey; font-size: 17px'>Details</td>
                        <td style='border: 1px solid lightslategray; padding: 10px'>
                            {{part_2_participant_goals}}
                        </td>
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
                    <td style='width:60%; border: 1px solid black;'>{{part_2_Cognitive_functional_assessment}}</td>
                    </tr>
                    <tr>
                    <td style='width:40%;'>Behavioural</td>
                    <td style='width:60%; border: 1px solid black;'>{{part_2_behavioural_functional_assessment}}</td>
                    </tr>
                    </table>
                    <p style='margin-top:10px'></p>";


        $section3 =  "<p style='margin-top:10px'></p>
                <table style='background-color:#7209B7; border:none; width:100%;'>
                    <tr>
                        <td>
                            <p style='font-size:12pt; font-weight:bold; margin-top:5px; margin-bottom:5px; color: white'>Part 3 – Assistance Animal Assessment</p>
                        </td>
                    </tr>
                </table>
                <p style='margin-bottom: 10px'>NDIA delegates determine whether the support is “reasonable and necessary” according to section 34 of the NDIS Act. The following section will assist to inform a delegate reasonable and necessary decision.</p>
                <p style='font-weight:bold; font-size:13pt;margin-top:20px; margin-bottom:20px;'>3.1 Information to support decision</p>
                <p style='font-weight:bold; font-size:13pt;margin-top:20px; margin-bottom:20px;'>3.1.1	Evidence</p>
                <p style='margin-bottom: 10px'>Consider and outline evidence regarding how the recommended Assistance Animal will assist the participant to pursue the goals, objectives and aspirations contained in the participant’s statement in their plan.</p>
                <table style='border-collapse: collapse;width: 100%;margin: auto;border: 1px solid lightslategray;'>
                    <tr>
                        <td style='border: 1px solid lightslategray; padding: 10px; width: 20%; background-color: lightgrey; font-size: 17px'>Details</td>
                        <td style='border: 1px solid lightslategray; padding: 10px'>{{part_3_evidence}}</td>
                    </tr>
                </table>

                <p style='font-weight:bold; font-size:13pt;margin-top:20px; margin-bottom:20px;'>3.1.2	Functional limitation</p>
                <p style='margin-bottom: 10px'>Outline the functional limitations of the participant to be mitigated by the Assistance Animal. There should be a minimum of three tasks which are measurable that the Assistance Animal is intended to perform to reduce the functional impact of the participant’s disability.</p>
                <table style='border-collapse: collapse;width: 100%;margin: auto;border: 1px solid lightslategray;'>
                    <tr>
                        <td style='border: 1px solid lightslategray; padding: 10px; width: 20%; background-color: lightgrey; font-size: 17px'>Details</td>
                        <td style='border: 1px solid lightslategray; padding: 10px'>{{part_3_functional_limitation}}</td>
                    </tr>
                </table>

                <p style='font-weight:bold; font-size:13pt;margin-top:20px; margin-bottom:20px;'>3.1.3	How the Assistance Animal will assist</p>
                <p style='margin-bottom: 10px'>Consider and outline evidence regarding how the Assistance Animal will assist the participant to undertake activities so as to facilitate their social and /or economic participation. Consider including information regarding current baseline functioning and anticipated outcome measures.</p>
                <table style='border-collapse: collapse;width: 100%;margin: auto;border: 1px solid lightslategray;'>
                    <tr>
                        <td style='border: 1px solid lightslategray; padding: 10px; width: 20%; background-color: lightgrey; font-size: 17px'>Details</td>
                        <td style='border: 1px solid lightslategray; padding: 10px'>{{part_3_assistanceanimation_assist}}</td>
                    </tr>
                </table>

                <p style='font-weight:bold; font-size:13pt;margin-top:20px; margin-bottom:20px;'>3.1.4	Equipment / methods and access to allied health</p>
                <p style='margin-bottom: 10px'>Detail the participant’s current equipment/methods / access to allied health interventions</p>
                <table style='border-collapse: collapse;width: 100%;margin: auto;border: 1px solid lightslategray;'>
                    <tr>
                        <td style='border: 1px solid lightslategray; padding: 10px; width: 20%; background-color: lightgrey; font-size: 17px'>Details</td>
                        <td style='border: 1px solid lightslategray; padding: 10px'>{{part_3_current_equipment}}</td>
                    </tr>
                </table>


                <p style='font-weight:bold; font-size:13pt;margin-top:20px; margin-bottom:20px;'>3.1.5	Alternative options</p>
                <p style='margin-bottom: 10px'>Detail other options which have been considered as an alternative to an Assistance Animal, including evidence based best practice intervention, capacity building, alternative assistive technology, linkages with community supports and increased social participation. Information should include outcomes of intervention provided.</p>
                <table style='border-collapse: collapse;width: 100%;margin: auto;border: 1px solid lightslategray;'>
                    <tr>
                        <td style='border: 1px solid lightslategray; padding: 10px; width: 20%; background-color: lightgrey; font-size: 17px'>Details</td>
                        <td style='border: 1px solid lightslategray; padding: 10px'>{{part_3_alternative_options}}</td>
                    </tr>
                </table>

                <p style='font-weight:bold; font-size:13pt;margin-top:20px; margin-bottom:20px;'>3.1.6	Benefits</p>
                <p style='margin-bottom: 10px'>Outline how the Assistance Animal benefits exceed those reasonably expected from the presence of a companion animal.</p>
                <table style='border-collapse: collapse;width: 100%;margin: auto;border: 1px solid lightslategray;'>
                    <tr>
                        <td style='border: 1px solid lightslategray; padding: 10px; width: 20%; background-color: lightgrey; font-size: 17px'>Details</td>
                        <td style='border: 1px solid lightslategray; padding: 10px'>{{part_3_assistanceanimal_benefits}}</td>
                    </tr>
                </table>

                <p style='font-weight:bold; font-size:13pt;margin-top:20px; margin-bottom:20px;'>3.1.7	Participant Activities</p>
                <p style='margin-bottom: 10px'>Please provide comprehensive detail regarding the activities the participant will complete with the Assistance Animal, including the frequency of activities</p>
                <table style='border-collapse: collapse;width: 100%;margin: auto;border: 1px solid lightslategray;'>
                    <tr>
                        <td style='border: 1px solid lightslategray; padding: 10px; width: 20%; background-color: lightgrey; font-size: 17px'>Details</td>
                        <td style='border: 1px solid lightslategray; padding: 10px'>{{part_3_comprehensive_detail}}</td>
                    </tr>
                </table>

                <p style='font-weight:bold; font-size:13pt;margin-top:20px; margin-bottom:20px;'>3.1.8	Assistance Animal working life</p>
                <p style='margin-bottom: 10px'>What is the anticipated working life of the Assistance Animal?</p>
                <table style='border-collapse: collapse;width: 100%;margin: auto;border: 1px solid lightslategray;'>
                    <tr>
                        <td style='border: 1px solid lightslategray; padding: 10px; width: 20%; background-color: lightgrey; font-size: 17px'>Details</td>
                        <td style='border: 1px solid lightslategray; padding: 10px'>{{part_3_working_life}}</td>
                    </tr>
                </table>

                <p style='font-weight:bold; font-size:13pt;margin-top:20px; margin-bottom:20px;'>3.1.9	Participant supports</p>
                <p style='margin-bottom: 10px'>Please provide comprehensive detail regarding the activities the participant will complete with the Assistance Animal, including the frequency of activities</p>
                <table style='border-collapse: collapse;width: 100%;margin: auto;border: 1px solid lightslategray;'>
                    <tr>
                        <td style='border: 1px solid lightslategray; padding: 10px; width: 20%; background-color: lightgrey; font-size: 17px'>Details</td>
                        <td style='border: 1px solid lightslategray; padding: 10px'>{{part_3_participant_supports}}</td>
                    </tr>
                </table>

                <p style='font-weight:bold; font-size:13pt;margin-top:20px; margin-bottom:20px;'>3.1.10	Plan of use</p>
                <p style='margin-bottom: 10px'>Please provide a detailed plan, including a timeframe, regarding how the Assistance Animal will reduce the participant’s current use of formal and informal support required.</p>
                <table style='border-collapse: collapse;width: 100%;margin: auto;border: 1px solid lightslategray;'>
                    <tr>
                        <td style='border: 1px solid lightslategray; padding: 10px; width: 20%; background-color: lightgrey; font-size: 17px'>Details</td>
                        <td style='border: 1px solid lightslategray; padding: 10px'>{{part_3_planof_use}}</td>
                    </tr>
                </table>

                <p style='font-weight:bold; font-size:13pt;margin-top:20px; margin-bottom:20px;'>3.1.11	Evidence of effectiveness</p>
                <p style='margin-bottom: 10px'>Having regard to evidenced based practice, what evidence indicates the proposed Assistance Animal will be, or is likely to be, effective and beneficial for the participant? (For example; past participant experience of an assistance animal).</p>
                <table style='border-collapse: collapse;width: 100%;margin: auto;border: 1px solid lightslategray;'>
                    <tr>
                        <td style='border: 1px solid lightslategray; padding: 10px; width: 20%; background-color: lightgrey; font-size: 17px'>Details</td>
                        <td style='border: 1px solid lightslategray; padding: 10px'>{{part_3_evidence_effectiveness}}</td>
                    </tr>
                </table>

                <p style='font-weight:bold; font-size:13pt;margin-top:20px; margin-bottom:20px;'>3.1.12	Objective outcomes</p>
                <p style='margin-bottom: 10px'>Objective outcomes from a trial with the Assistance Animal including pre and post outcome measures.</p>
                <table style='border-collapse: collapse;width: 100%;margin: auto;border: 1px solid lightslategray;'>
                    <tr>
                        <td style='border: 1px solid lightslategray; padding: 10px; width: 20%; background-color: lightgrey; font-size: 17px'>Details</td>
                        <td style='border: 1px solid lightslategray; padding: 10px'>{{part_3_objective_outcomes}}</td>
                    </tr>
                </table>

                <p style='font-weight:bold; font-size:13pt;margin-top:20px; margin-bottom:20px;'>3.1.13	Participant experience with previous animals</p>
                <p style='margin-bottom: 10px'>Detail of the participant’s previous lived experience with animals, family pet, or animal assisted therapy interventions and the effect it had on the participant.</p>
                <table style='border-collapse: collapse;width: 100%;margin: auto;border: 1px solid lightslategray;'>
                    <tr>
                        <td style='border: 1px solid lightslategray; padding: 10px; width: 20%; background-color: lightgrey; font-size: 17px'>Details</td>
                        <td style='border: 1px solid lightslategray; padding: 10px'>{{part_3_participant_experience}}</td>
                    </tr>
                </table>

                <p style='font-weight:bold; font-size:13pt;margin-top:20px; margin-bottom:20px;'>3.1.14	Medical impacts</p>
                <p style='margin-bottom: 10px'>Any relevant medical information that impacts on the participant’s ability to use the Assistance Animal?</p>
                <table style='border-collapse: collapse;width: 100%;margin: auto;border: 1px solid lightslategray;'>
                    <tr>
                        <td style='border: 1px solid lightslategray; padding: 10px; width: 20%; background-color: lightgrey; font-size: 17px'>Details</td>
                        <td style='border: 1px solid lightslategray; padding: 10px'>{{part_3_medical_impact}}</td>
                    </tr>
                </table>

                <p style='font-weight:bold; font-size:13pt;margin-top:20px; margin-bottom:20px;'>3.1.15	Alternate funding</p>
                <p style='margin-bottom: 10px'>Consider whether support delivered under alternative funding through the NDIS is being provided for the same functional goals.</p>
                <table style='border-collapse: collapse;width: 100%;margin: auto;border: 1px solid lightslategray;'>
                    <tr>
                        <td style='border: 1px solid lightslategray; padding: 10px; width: 20%; background-color: lightgrey; font-size: 17px'>Details</td>
                        <td style='border: 1px solid lightslategray; padding: 10px'>{{part_3_alternate_funding}}</td>
                    </tr>
                </table>

                <p style='font-weight:bold; font-size:13pt;margin-top:20px; margin-bottom:20px;'>3.2 Reasonable expectations of care</p>
                <p style='margin-bottom: 10px'>Has this assessment considered what it is reasonable to expect family, carers, informal networks and the community to provide?</p>
                <table style='border-collapse: collapse;width: 100%;margin: auto;border: 1px solid lightslategray;'>
                    <tr>
                        <td style='border: 1px solid lightslategray; padding: 10px; width: 40%; background-color: lightgrey; font-size: 17px'>Details</td>
                        <td style='border: 1px solid lightslategray; padding: 10px'>{{part_3_expectation_care}}</td>
                    </tr>
                </table>

                <p style='font-weight:bold; font-size:13pt;margin-top:20px; margin-bottom:20px;'>3.3 Mitigation of Risk</p>
                <p style='margin-bottom: 10px'>Detail any behaviour issues which may impact on, or potentially cause harm to the Assistance Animal and how these will be managed. Please note: In reference to Assistance Animal Operational Guideline, NDIS funding for Assistance Animals for a participant with behaviours of concern will not be provided due to the foreseeable risk to the participant and the animal. Behaviours of concern should be addressed prior to consideration of an Assistance Animal. Please attach a behaviour support plan if relevant.</p>
                <table style='border-collapse: collapse;width: 100%;margin: auto;border: 1px solid lightslategray;'>
                    <tr>
                        <td style='border: 1px solid lightslategray; padding: 10px; width: 20%; background-color: lightgrey; font-size: 17px'>Details</td>
                        <td style='border: 1px solid lightslategray; padding: 10px'>{{part_3_mitigation_risk}}</td>
                    </tr>
                </table>

                <p style='font-weight:bold; font-size:13pt;margin-top:20px; margin-bottom:20px;'>3.3.1	Primary handler</p>
                <p style='margin-bottom: 10px'>Please list the primary handler/responsible person/people in the home, community, school and any other environments.</p>
                <table style='border-collapse: collapse;width: 100%;margin: auto;border: 1px solid lightslategray;'>
                    <tr>
                        <td style='border: 1px solid lightslategray; padding: 10px; width: 20%; background-color: lightgrey; font-size: 17px'>Details</td>
                        <td style='border: 1px solid lightslategray; padding: 10px'>{{part_3_primary_handler}}</td>
                    </tr>
                </table>

                <p style='font-weight:bold; font-size:13pt;margin-top:20px; margin-bottom:20px;'>3.3.2	Home environment</p>
                <p style='margin-bottom: 10px'>Provide evidence that the environment where the Assistance Animal will be homed is suitable for all household members and the welfare of the Assistance Animal.</p>
                <table style='border-collapse: collapse;width: 100%;margin: auto;border: 1px solid lightslategray;'>
                    <tr>
                        <td style='border: 1px solid lightslategray; padding: 10px; width: 20%; background-color: lightgrey; font-size: 17px'>Details</td>
                        <td style='border: 1px solid lightslategray; padding: 10px'>{{part_3_home_enviroment}}</td>
                    </tr>
                </table>

                <p style='font-weight:bold; font-size:13pt;margin-top:20px; margin-bottom:20px;'>3.3.3	Attendance at school</p>
                <p style='margin-bottom: 10px'>Will the Assistance Animal be attending school with the participant?</p>
                <table style='border-collapse: collapse;width: 100%;margin: auto;border: 1px solid lightslategray;'>
                    <tr>
                        <td style='border: 1px solid lightslategray; padding: 10px; width: 20%; background-color: lightgrey; font-size: 17px'>Yes</td>
                        <td style='border: 1px solid lightslategray; padding: 10px'>{{part_3_schoold_attendance_yes}}</td>
                    </tr>                   
                    <tr>
                        <td style='border: 1px solid lightslategray; padding: 10px; width: 20%; background-color: lightgrey; font-size: 17px'>No</td>
                        <td style='border: 1px solid lightslategray; padding: 10px'>{{part_3_schoold_attendance_no}}</td>
                    </tr>
                    <tr>
                        <td style='border: 1px solid lightslategray; padding: 10px; width: 20%; background-color: lightgrey; font-size: 17px'>Describe</td>
                        <td style='border: 1px solid lightslategray; padding: 10px'>{{part_3_schoold_attendance_details}}</td>
                    </tr>
                </table>

                <p style='font-weight:bold; font-size:13pt;margin-top:20px; margin-bottom:20px;'>3.3.4	Permission to attend school</p>
                <p style='margin-bottom: 10px'>Where the assistance animal will be attending school provide evidence from school that the Assistance Animal is permitted to attend with the participant.</p>
                <table style='border-collapse: collapse;width: 100%;margin: auto;border: 1px solid lightslategray;'>
                    <tr>
                        <td style='border: 1px solid lightslategray; padding: 10px; width: 20%; background-color: lightgrey; font-size: 17px'>Details</td>
                        <td style='border: 1px solid lightslategray; padding: 10px'>{{part_3_permissionattend}}</td>
                    </tr>
                </table>

                <p style='font-weight:bold; font-size:13pt;margin-top:20px; margin-bottom:20px;'>3.3.5	School environment</p>
                <p style='margin-bottom: 10px'>Where the assistance animal will be attending school provide evidence that the school environment has been assessed as suitable for the Assistance Animal.</p>
                <table style='border-collapse: collapse;width: 100%;margin: auto;border: 1px solid lightslategray;'>
                    <tr>
                        <td style='border: 1px solid lightslategray; padding: 10px; width: 20%; background-color: lightgrey; font-size: 17px'>Details</td>
                        <td style='border: 1px solid lightslategray; padding: 10px'>{{part_3_schoolenviroment}}</td>
                    </tr>
                </table>

                <p style='font-weight:bold; font-size:13pt;margin-top:20px; margin-bottom:20px;'>3.3.6	Public access test</p>
                <table style='border-collapse: collapse;width: 100%;margin: auto;border: 1px solid lightslategray;'>
                    <tr>
                        <td style='border: 1px solid lightslategray; padding: 10px; width: 20%; background-color: lightgrey; font-size: 17px'>Details</td>
                        <td style='border: 1px solid lightslategray; padding: 10px'>{{part_3_publicaccess_test}}</td>
                    </tr>
                </table>

                <p style='font-weight:bold; font-size:13pt;margin-top:20px; margin-bottom:20px;'>3.3.7	Legal responsibility</p>
                <p style='margin-bottom: 10px'>Please provide details of the person who will take legal responsibility if something happens to the animal.</p>
                <table style='border-collapse: collapse;width: 100%;margin: auto;border: 1px solid lightslategray;'>
                    <tr>
                        <td style='border: 1px solid lightslategray; padding: 10px; width: 20%; background-color: lightgrey; font-size: 17px'>Details</td>
                        <td style='border: 1px solid lightslategray; padding: 10px'>{{part_3_legal_responsibility}}</td>
                    </tr>
                </table>

                <p style='font-weight:bold; font-size:13pt;margin-top:20px; margin-bottom:20px;'>3.3.8	Standards</p>
                <p style='margin-bottom: 10px'>Provide the Standards the Assistance Animal provider adheres to.</p>
                <table style='border-collapse: collapse;width: 100%;margin: auto;border: 1px solid lightslategray;'>
                    <tr>
                        <td style='border: 1px solid lightslategray; padding: 10px; width: 20%; background-color: lightgrey; font-size: 17px'>Details</td>
                        <td style='border: 1px solid lightslategray; padding: 10px'>{{part_3_standards}}</td>
                    </tr>
                </table>
                <p style='margin-top:10px'></p>";



        $section4 = "<p style='margin-top:10px'></p>
                <table style='background-color:#7209B7; border:none; width:100%;'>
                    <tr>
                        <td>
                            <p style='font-size:12pt; font-weight:bold; margin-top:5px; margin-bottom:5px; color: white'>Part 4 – Attachments</p>
                        </td>
                    </tr>
                </table>

                <p style='margin-bottom: 10px'>Please attach:</p>
                <p style='margin-bottom: 10px;margin-left:10px'>1.	A detailed quote outlining the full cost of any assessment, training of the participant with the dog, matching, and follow-up associated with the cost of the Assistance Animal purchase.</p>
                <p style='margin-bottom: 10px;margin-left:10px'><b>Noting</b>, as outlined in the Assistance Animal Operational Guideline that NDIS funding is provided for a fully qualified Assistance Animal and not for the training of an animal to become an Assistance Animal.</p>
                <p style='margin-bottom: 10px;margin-left:10px'>2.	Behaviour Support Plan (as outlined in section 3.3 if relevant).</p>
                <p style='margin-bottom: 10px;'><b>Please Note:</b> For an approved Assistance Animal the NDIS will provide an appropriate annual maintenance cost which the participant can use to pay for reasonable and necessary Assistance Animal maintenance costs (including food, grooming, flea and worm treatments, medication, vaccinations, and veterinary costs).</p>";



        $section5 =  "<p style='margin-top:10px'></p>
            <table style='background-color:#7209B7; border:none; width:100%;'>
                <tr>
                    <td>
                        <p style='font-size:12pt; font-weight:bold; margin-top:5px; margin-bottom:5px; color: white'>	Part 5 - Participant feedback and notifications</p>
                    </td>
                </tr>
            </table>
            <p style='font-weight:bold; font-size:13pt;margin-top:20px; margin-bottom:20px;'>5.1	Agreement with AT request</p>
            <p style='margin-bottom: 10px'>Is the Participant / Nominee in agreement with this AT request? Please describe any issues?</p>
            <table
            style='border-collapse: collapse;width: 100%;margin: auto;border: 1px solid lightslategray;'>
                <tr>
                <td style='border: 1px solid lightslategray; padding: 10px; width: 40%; background-color: lightgrey; font-size: 17px'>Yes</td>
                <td style='border: 1px solid lightslategray; padding: 10px'>
                    {{part_5_agreement_yes2}}
                </td>
                </tr>
                <tr>
                <td style='border: 1px solid lightslategray; padding: 10px; width: 40%; background-color: lightgrey; font-size: 17px'>No</td>
                <td style='border: 1px solid lightslategray; padding: 10px'>
                    {{part_5_agreement_no1}}
                </td>
                </tr>
                <tr>
                <td style='border: 1px solid lightslategray; padding: 10px; width: 40%; background-color: lightgrey; font-size: 17px'>Comments</td>
                <td style='border: 1px solid lightslategray; padding: 10px'>
                    {{part_5_agreement_comments3}}
                </td>
                </tr>
            </table>


            <p style='font-weight:bold; font-size:13pt;margin-top:20px; margin-bottom:20px;'>5.1.1	Copy of assessment</p>
            <p style='margin-bottom: 10px'>Has a copy of the assessment been given to the participant? If not please explain.</p>
            <table
            style='border-collapse: collapse;width: 100%;margin: auto;border: 1px solid lightslategray;'>
                <tr>
                <td style='border: 1px solid lightslategray; padding: 10px; width: 40%; background-color: lightgrey; font-size: 17px'>Yes</td>
                <td style='border: 1px solid lightslategray; padding: 10px'>
                    {{part_5_copyassessment_yes4}}
                </td>
                </tr>
                <tr>
                <td style='border: 1px solid lightslategray; padding: 10px; width: 40%; background-color: lightgrey; font-size: 17px'>No</td>
                <td style='border: 1px solid lightslategray; padding: 10px'>
                    {{part_5_copyassessment_no5}}
                </td>
                </tr>
                <tr>
                <td style='border: 1px solid lightslategray; padding: 10px; width: 40%; background-color: lightgrey; font-size: 17px'>Comments</td>
                <td style='border: 1px solid lightslategray; padding: 10px'>
                    {{part_5_copyassessment_comments6}}
                </td>
                </tr>
            </table>
            <p style='margin-top:10px'></p>";




        $section6 = "<p style='margin-top:10px'></p>
            <table style='background-color:#7209B7; border:none; width:100%;'>
                <tr>
                    <td>
                        <p style='font-size:12pt; font-weight:bold; margin-top:5px; margin-bottom:5px; color: white'>	6.	Part 6 – Details of Assistive Technology Assessor</p>
                    </td>
                </tr>
            </table>
            <p></p>
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
                    {{part_6_declaration_NDIA_expectation}}
                    </td>
                </tr>
                <tr>
                    <td style='border: 1px solid lightslategray; padding: 10px; width: 80%;background-color: lightgrey; font-size: 17px'>I will provide appropriate evidence to the NDIA and/or Quality and Safe Guards Commission if and as requested.</td>
                    <td style='border: 1px solid lightslategray; padding: 10px'>
                    {{part_6_declaration_appropriate_evidence}}
                    </td>
                </tr>
                <tr>
                    <td style='border: 1px solid lightslategray; padding: 10px; width: 80%; background-color: lightgrey; font-size: 17px'>I understand and acknowledge that the NDIA and participant will rely on my professional advice to select, source and implement this assistive technology.</td>
                    <td style='border: 1px solid lightslategray; padding: 10px'>
                    {{part_6_declaration_NDIA_understanding}}
                    </td>
                </tr>
                <tr>
                    <td style='border: 1px solid lightslategray; padding: 10px; width: 80%; background-color: lightgrey; font-size: 17px'>This assistive technology has been assessed by the treating multi-disciplinary team and I have completed the AT assessment on behalf of that team.</td>
                    <td style='border: 1px solid lightslategray; padding: 10px'>
                    {{part_6_declaration_accessing_team}}
                </td>
                 </tr>
            </tbody>
        </table>

            <p style='margin-bottom: 10px;font-weight:bold;'>Assessor 1 Details</p>
            <table
            style='border-collapse: collapse;width: 100%;margin: auto;border: 1px solid lightslategray;'>
                <tr>
                <td style='border: 1px solid lightslategray; padding: 10px; width: 40%; background-color: lightgrey; font-size: 17px'>Name</td>
                    <td style='border: 1px solid lightslategray; padding: 10px'>
                        {{part_6_details_of_assistive_technology_assessor1}}
                    </td>
                </tr>
                <tr>
                    <td style='border: 1px solid lightslategray; padding: 10px; width: 40%; background-color: lightgrey; font-size: 17px'>NDIS provider Registration number (where applicable)</td>
                    <td style='border: 1px solid lightslategray; padding: 10px'>
                        {{part_6_details_of_assistive_technology_assessor2}}
                    </td>
                </tr>
                <tr>
                <td style='border: 1px solid lightslategray; padding: 10px; width: 40%; background-color: lightgrey; font-size: 17px'>Phone</td>
                    <td style='border: 1px solid lightslategray; padding: 10px'>
                        {{part_6_details_of_assistive_technology_assessor3}}
                    </td>
                </tr>
                <tr>
                    <td style='border: 1px solid lightslategray; padding: 10px; width: 40%; background-color: lightgrey; font-size: 17px'>Email</td>
                        <td style='border: 1px solid lightslategray; padding: 10px'>
                            {{part_6_details_of_assistive_technology_assessor4}}
                        </td>
                </tr>
                <tr>
                     <td style='border: 1px solid lightslategray; padding: 10px; width: 40%; background-color: lightgrey; font-size: 17px'>Signature</td>
                    <td style='border: 1px solid lightslategray; padding: 10px'>
                        {{part_6_details_of_assistive_technology_assessor5}}
                    </td>
                </tr>
                <tr>
                     <td style='border: 1px solid lightslategray; padding: 10px; width: 40%; background-color: lightgrey; font-size: 17px'>Qualification</td>
                    <td style='border: 1px solid lightslategray; padding: 10px'>
                        {{part_6_details_of_assistive_technology_assessor6}}
                    </td>
                </tr>
                <tr>
                     <td style='border: 1px solid lightslategray; padding: 10px; width: 40%; background-color: lightgrey; font-size: 17px'>Date of Assessment</td>
                    <td style='border: 1px solid lightslategray; padding: 10px'>
                        {{part_6_details_of_assistive_technology_assessor7}}
                    </td>
                </tr>
                <tr>
                     <td style='border: 1px solid lightslategray; padding: 10px; width: 40%; background-color: lightgrey; font-size: 17px'>Date of Report</td>
                    <td style='border: 1px solid lightslategray; padding: 10px'>
                        {{part_6_details_of_assistive_technology_assessor8}}
                    </td>
                </tr>
            </table>


            <p style='margin-bottom: 10px;font-weight:bold;'>Assessor 2 Details</p>
            <table
            style='border-collapse: collapse;width: 100%;margin: auto;border: 1px solid lightslategray;'>
                <tr>
                <td style='border: 1px solid lightslategray; padding: 10px; width: 40%; background-color: lightgrey; font-size: 17px'>Name</td>
                    <td style='border: 1px solid lightslategray; padding: 10px'>
                        {{part_6_details_of_assistive_technology_assessor9}}
                    </td>
                </tr>
                <tr>
                    <td style='border: 1px solid lightslategray; padding: 10px; width: 40%; background-color: lightgrey; font-size: 17px'>NDIS provider Registration number (where applicable)</td>
                    <td style='border: 1px solid lightslategray; padding: 10px'>
                        {{part_6_details_of_assistive_technology_assessor10}}
                    </td>
                </tr>
                <tr>
                <td style='border: 1px solid lightslategray; padding: 10px; width: 40%; background-color: lightgrey; font-size: 17px'>Phone</td>
                    <td style='border: 1px solid lightslategray; padding: 10px'>
                        {{part_6_details_of_assistive_technology_assessor11}}
                    </td>
                </tr>
                <tr>
                    <td style='border: 1px solid lightslategray; padding: 10px; width: 40%; background-color: lightgrey; font-size: 17px'>Email</td>
                        <td style='border: 1px solid lightslategray; padding: 10px'>
                            {{part_6_details_of_assistive_technology_assessor12}}
                        </td>
                </tr>
                <tr>
                     <td style='border: 1px solid lightslategray; padding: 10px; width: 40%; background-color: lightgrey; font-size: 17px'>Signature</td>
                    <td style='border: 1px solid lightslategray; padding: 10px'>
                        {{part_6_details_of_assistive_technology_assessor13}}
                    </td>
                </tr>
                <tr>
                     <td style='border: 1px solid lightslategray; padding: 10px; width: 40%; background-color: lightgrey; font-size: 17px'>Qualification</td>
                    <td style='border: 1px solid lightslategray; padding: 10px'>
                        {{part_6_details_of_assistive_technology_assessor14}}
                    </td>
                </tr>
                <tr>
                     <td style='border: 1px solid lightslategray; padding: 10px; width: 40%; background-color: lightgrey; font-size: 17px'>Date of Assessment</td>
                    <td style='border: 1px solid lightslategray; padding: 10px'>
                        {{part_6_details_of_assistive_technology_assessor15}}
                    </td>
                </tr>
                <tr>
                     <td style='border: 1px solid lightslategray; padding: 10px; width: 40%; background-color: lightgrey; font-size: 17px'>Date of Report</td>
                    <td style='border: 1px solid lightslategray; padding: 10px'>
                        {{part_6_details_of_assistive_technology_assessor16}}
                    </td>
                </tr>
            </table>
            <p style='margin-top:10px'></p>";



        $section7 = "<p style='margin-top:10px'></p>
            <table style='background-color:#7209B7; border:none; width:100%;'>
                <tr>
                    <td>
                        <p style='font-size:12pt; font-weight:bold; margin-top:5px; margin-bottom:5px; color: white'>7.	Part 7 – Consent to collect and share your information</p>
                    </td>
                </tr>
            </table>
            <p style='font-weight:bold; font-size:13pt;margin-top:20px; margin-bottom:20px;'><b>For the participant to complete</b></p>
            <p style='margin-bottom: 10px'>As a participant who requires assistive technology supports, the National Disability Insurance Agency (NDIA) may need to contact your AT assessor and / or AT supplier to discuss information within your assistive technology assessment and quotation(s). This will assist the NDIA with determining whether your request for assistive technology support(s) can be provided to you under the NDIS.</p>
            <p style='margin-bottom: 10px'>Do you consent to the NDIA collecting and disclosing your information including from these third parties mentioned above, in relation to your assistive technology assessment and quotation?</p>
            
            <p style='margin-bottom: 10px;font-weight:bold;'>Assessor 1 Details</p>
            <table
            style='border-collapse: collapse;width: 100%;margin: auto;border: 1px solid lightslategray;'>
                <tr>
                <td style='border: 1px solid lightslategray; padding: 10px; width: 40%; background-color: lightgrey; font-size: 17px'>Yes, I consent</td>
                    <td style='border: 1px solid lightslategray; padding: 10px'>
                    {{part_7_consent_to_collect_and_share_your_information01}}
                    </td>
                </tr>
                <tr>
                    <td style='border: 1px solid lightslategray; padding: 10px; width: 40%; background-color: lightgrey; font-size: 17px'>No, I do not consent</td>
                    <td style='border: 1px solid lightslategray; padding: 10px'>
                    {{part_7_consent_to_collect_and_share_your_information02}}
                    </td>
                </tr>
            </table>
            <table
            style='border-collapse: collapse;width: 100%;margin: auto;border: 1px solid lightslategray;'>
               <tr>
                     <td style='border: 1px solid lightslategray; padding: 10px; width: 40%; background-color: lightgrey; font-size: 17px'>Participant signature</td>
                    <td style='border: 1px solid lightslategray; padding: 10px'>
                        {{part_7_consent_to_collect_and_share_your_information03}}
                    </td>
                </tr>
            </table>
            <p style='margin-bottom: 10px;font-weight:bold;'></p>
            <table
            style='border-collapse: collapse;width: 100%;margin: auto;border: 1px solid lightslategray;'>
                <tr>
                <td style='border: 1px solid lightslategray; padding: 10px; width: 40%; background-color: lightgrey; font-size: 17px'>I understand that I am giving consent to the NDIA to do the things with my information set out in this section. I understand that I can withdraw my consent for the NDIS to do things with my information at any time by letting the NDIA know.</td>
                    <td style='border: 1px solid lightslategray; padding: 10px'>
                    {{part_7_consent_to_collect_and_share_your_information04}}
                    </td>
                </tr>
                <tr>
                    <td style='border: 1px solid lightslategray; padding: 10px; width: 40%; background-color: lightgrey; font-size: 17px'>I understand that I can access the NDIA’s Privacy Notice and Privacy Policy on the NDIA website or by contacting the NDIA.</td>
                    <td style='border: 1px solid lightslategray; padding: 10px'>
                    {{part_7_consent_to_collect_and_share_your_information05}}
                    </td>
                </tr>
            </table>
            <table
            style='border-collapse: collapse;width: 100%;margin: auto;border: 1px solid lightslategray;'>
               <tr>
                     <td style='border: 1px solid lightslategray; padding: 10px; width: 40%; background-color: lightgrey; font-size: 17px'>Signature</td>
                    <td style='border: 1px solid lightslategray; padding: 10px'>
                        {{part_7_consent_to_collect_and_share_your_information06}}
                    </td>
                </tr>
                <tr>
                     <td style='border: 1px solid lightslategray; padding: 10px; width: 40%; background-color: lightgrey; font-size: 17px'>Date</td>
                    <td style='border: 1px solid lightslategray; padding: 10px'>
                        {{part_7_consent_to_collect_and_share_your_information07}}
                    </td>
                </tr>
                <tr>
                     <td style='border: 1px solid lightslategray; padding: 10px; width: 40%; background-color: lightgrey; font-size: 17px'>Full name</td>
                    <td style='border: 1px solid lightslategray; padding: 10px'>
                        {{part_7_consent_to_collect_and_share_your_information08}}
                    </td>
                </tr>
            </table>
            <p style='margin-bottom: 10px;font-weight:bold;'><b>If you have signed this Form on behalf of the NDIS participant,</b> please complete the details below. </p>
            <p style='margin-bottom: 10px;font-weight:bold;'><b>Note:</b> It is an offence to provide false or misleading information.</p>
            <p style='margin-bottom: 10px;font-weight:bold;'>We may require you to provide evidence of your authority to sign on behalf of the person.</p>
            <table
            style='border-collapse: collapse;width: 100%;margin: auto;border: 1px solid lightslategray;'>
               <tr>
                     <td style='border: 1px solid lightslategray; padding: 10px; width: 40%; background-color: lightgrey; font-size: 17px'>Signature</td>
                    <td style='border: 1px solid lightslategray; padding: 10px'>
                        {{part_7_consent_to_collect_and_share_your_information09}}
                    </td>
                </tr>
                <tr>
                     <td style='border: 1px solid lightslategray; padding: 10px; width: 40%; background-color: lightgrey; font-size: 17px'>Date</td>
                    <td style='border: 1px solid lightslategray; padding: 10px'>
                        {{part_7_consent_to_collect_and_share_your_information10}}
                    </td>
                </tr>
                <tr>
                     <td style='border: 1px solid lightslategray; padding: 10px; width: 40%; background-color: lightgrey; font-size: 17px'>Full name of person completing this form (please print</td>
                    <td style='border: 1px solid lightslategray; padding: 10px'>
                        {{part_7_consent_to_collect_and_share_your_information11}}
                    </td>
                </tr>
                <tr>
                <td style='border: 1px solid lightslategray; padding: 10px; width: 40%; background-color: lightgrey; font-size: 17px'>Relationship to participant or person wishing to become an NDIS participant</td>
               <td style='border: 1px solid lightslategray; padding: 10px'>
                   {{part_7_consent_to_collect_and_share_your_information12}}
               </td>
                </tr>
<<<<<<< HEAD
                </table>";


                $form = Form::create([
                    'name' => 'Notes for Assistive Technology (AT) Assessors of Assistance Animal Supports'
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
        

                $form_fields1 = '[
                    {"type":"text","required":false,"label":"Name","placeholder":"Enter participant name","className":"form-control","name":"participant_name","access":false,"subtype":"text"},
                    {"type":"text","required":false,"label":"Date of Birth","placeholder":"Enter participant DOB","className":"form-control","name":"participant_DOB","access":false,"subtype":"text"},
                    {"type":"text","required":false,"label":"Age","placeholder":"Enter participant age","className":"form-control","name":"participant_age","access":false,"subtype":"text"},
                    {"type":"text","required":false,"label":"NDIS Number","placeholder":"Enter NDIS number","className":"form-control","name":"NDIS_number","access":false,"subtype":"text"},
                    {"type":"text","required":false,"label":"Address","placeholder":"Enter participant address","className":"form-control","name":"participant_address","access":false,"subtype":"text"},
                    {"type":"text","required":false,"label":"Contact Telephone Number","placeholder":"Enter participant Phone number","className":"form-control","name":"participant_phone_num","access":false,"subtype":"text"},
                    {"type":"text","required":false,"label":"Email","placeholder":"Enter participant email","className":"form-control","name":"participant_email","access":false,"subtype":"text"},
                    {"type":"text","required":false,"label":"Preferred Contact Number","placeholder":"Enter participant contact number","className":"form-control","name":"participant_contct_num","access":false,"subtype":"text"},
                    {"type":"text","required":false,"label":"Nominee or Guardian Name","placeholder":"Enter participant guardian name","className":"form-control","name":"guardian_name","access":false,"subtype":"text"},
                    {"type":"text","required":false,"label":"Nominee or Guardian Phone","placeholder":"Enter participant phone","className":"form-control","name":"participant_guardian_phone","access":false,"subtype":"text"},
                    {"type":"text","required":false,"label":"NDIS Support Coordinator","placeholder":"Enter NDIS Support Coordinator","className":"form-control","name":"NDIS_support","access":false,"subtype":"text"},
                    {"type":"text","required":false,"label":"Contact Details","placeholder":"Enter participant contact Details","className":"form-control","name":"contact_detail","access":false,"subtype":"text"}
                    ]';
               $form_fields2 = '[
                    {"type":"text","required":false,"label":"Background","placeholder":"Enter Your Background","className":"form-control","name":"background","access":false,"subtype":"text"},
                    {"type":"text","required":false,"label":"Participant Goals","placeholder":"Enter Your Participant Goals","className":"form-control","name":"participant_goals","access":false,"subtype":"text"},
                    {"type":"text","required":false,"label":"Functional Assessment","placeholder":"Enter Functional Assessment","className":"form-control","name":"functional_assessment","access":false,"subtype":"text"},
                    {"type":"text","required":false,"label":"Bladder","placeholder":"Enter Bladder","className":"form-control","name":"bladder","access":false,"subtype":"text"},
                    {"type":"text","required":false,"label":"Bowel","placeholder":"Enter Bowel","className":"form-control","name":"bowel","access":false,"subtype":"text"},
                    {"type":"text","required":false,"label":"Consideration of health and other issues","placeholder":"Consideration of health and other issues","className":"form-control","name":"consideration_of_health_and_other_issues","access":false,"subtype":"text"},
                    {"type":"text","required":false,"label":"Physiotherapist","placeholder":"Enter Physiotherapist","className":"form-control","name":"physiotherapist","access":false,"subtype":"text"},
                    {"type":"text","required":false,"label":"Dietician","placeholder":"Enter Dietician","className":"form-control","name":"dietician","access":false,"subtype":"text"},
                    {"type":"text","required":false,"label":"Occupational Therapist","placeholder":"Occupational Therapist","className":"form-control","name":"occupational_therapist","access":false,"subtype":"text"},
                    {"type":"text","required":false,"label":"Psychologist","placeholder":"Enter Psychologist","className":"form-control","name":"psychologist","access":false,"subtype":"text"},
                    {"type":"text","required":false,"label":"General Practitioner","placeholder":"Enter General Practitioner","className":"form-control","name":"general_practitioner","access":false,"subtype":"text"},
                    {"type":"text","required":false,"label":"Medical Specialist","placeholder":"Enter Medical Specialist","className":"form-control","name":"medical_specialist","access":false,"subtype":"text"},
                    {"type":"text","required":false,"label":"Other","placeholder":"Enter Other","className":"form-control","name":"assessment_other","access":false,"subtype":"text"}
                ]';

                $form_fields3 = '[
                        {"type": "text","required": false,"label": "Evidence","placeholder": "Enter Evidence Details","className": "form-control","name": "support_decision_evidence","access": false,"subtype": "text"},
                        {"type": "text","required": false,"label": "Functional Limitation","placeholder": "Enter Functional Limitation Details","className": "form-control","name": "support_decision_functional_limitation","access": false,"subtype": "text"},
                        {"type": "text","required": false,"label": "How the Assistance Animal will assist","placeholder": "Enter Details for How the Assistance Animal will assist","className": "form-control","name": "support_decision_assistance_animal","access": false,"subtype": "text"},
                        {"type": "text","required": false,"label": "Equipment methods and access to allied health","placeholder": "Enter Equipment methods and access to allied health","className": "form-control","name": "support_decision_equipment_methods_and_access","access": false,"subtype": "text"},
                        {"type": "text","required": false,"label": "Alternative Options","placeholder": "Enter Alternative Options Details","className": "form-control","name": "support_decision_alternative_options","access": false,"subtype": "text"},
                        {"type": "text","required": false,"label": "Benefits","placeholder": "Enter Benefits Details","className": "form-control","name": "support_decision_benefits","access": false,"subtype": "text"},
                        {"type": "text","required": false,"label": "Participant Activities","placeholder": "Participant Activities Details","className": "form-control","name": "support_decision_participant_activities","access": false,"subtype": "text"},
                        {"type": "text","required": false,"label": "Assistance Animal Working Life","placeholder": "Enter Assistance Animal Working Life Details","className": "form-control","name": "support_decision_assistance_animal","access": false,"subtype": "text"},
                        {"type": "text","required": false,"label": "Participant Supports","placeholder": "Enter Participant Supports Details","className": "form-control","name": "support_decision_participant_supports","access": false,"subtype": "text"},
                        {"type": "text","required": false,"label": "Plan of Use","placeholder": "Enter Plan of Use Details","className": "form-control","name": "support_decision_plan_use","access": false,"subtype": "text"},
                        {"type": "text","required": false,"label": "Evidence of Effectiveness","placeholder": "Enter Evidence of Effectiveness Detalis","className": "form-control","name": "support_decision_evidence_effectiveness","access": false,"subtype": "text"},
                        {"type": "text","required": false,"label": "Objective Outcomes","placeholder": "Enter Objective Outcomes Details","className": "form-control","name": "support_decision_objective_outcomes","access": false,"subtype": "text"},
                        {"type": "text","required": false,"label": "Participant Experience with Previous Animals","placeholder": "Enter Participant Experience with Previous Animals Details","className": "form-control","name": "support_decision_participant_experience","access": false,"subtype": "text"},
                        {"type": "text","required": false,"label": "Medical Impacts","placeholder": "Enter Medical Impacts Details","className": "form-control","name": "support_decision_medical_impacts","access": false,"subtype": "text"},
                        {"type": "text","required": false,"label": "Alternate Funding","placeholder": "Enter Alternate Funding Details","className": "form-control","name": "support_decision_alternate_funding","access": false,"subtype": "text"},
                        {"type": "text","required": false,"label": "Reasonable Expectations of Care","placeholder": "Enter Reasonable Expectations of Care Details","className": "form-control","name": "reasonable_expectations_care","access": false,"subtype": "text"},
                        {"type": "text","required": false,"label": "Mitigation of Risk","placeholder": "Enter Mitigation of Risk Details","className": "form-control","name": "mitigation_risk","access": false,"subtype": "text"},
                        {"type": "text","required": false,"label": "Primary Handler","placeholder": "Enter Primary Handler Details","className": "form-control","name": "mitigation_primary_handler","access": false,"subtype": "text"},
                        {"type": "text","required": false,"label": "Home environment","placeholder": "Enter Home Environment Details","className": "form-control","name": "mitigation_home_environment","access": false,"subtype": "text"},
                        {"type": "radio-group","required": false,"label": "Attendance at school","inline": false,"className": "form-control","name": "mitigation_school_attendance","access": false,"other": false,"values": [{"label": "Yes","value": "Yes","selected": false},{"label": "No","value": "No","selected": false}]},
                        {"type": "text","required": false,"label": "Describe","placeholder": "Describe","className": "form-control","name": "mitigation_school_attendance_describe","access": false,"subtype": "text"},
                        {"type": "text","required": false,"label": "Permission to attend school","placeholder": "Enter Permission to attend school Details","className": "form-control","name": "mitigation_permission","access": false,"subtype": "text"},
                        {"type": "text","required": false,"label": "School Environment","placeholder": "Enter School Environment Details","className": "form-control","name": "mitigation_school_environment","access": false,"subtype": "text"},
                        {"type": "text","required": false,"label": "Public Access Test","placeholder": "Enter Public Access Test Details","className": "form-control","name": "mitigation_public_access","access": false,"subtype": "text"},
                        {"type": "text","required": false,"label": "Legal Responsibility","placeholder": "Enter Legal Responsibility Details","className": "form-control","name": "mitigation_legal_responsibility","access": false,"subtype": "text"},
                        {"type": "text","required": false,"label": "Standards","placeholder": "Enter Standards Details","className": "form-control","name": "mitigation_standards","access": false,"subtype": "text"}
                             
                ]';

            $form_fields4 = '[]';

            $form_fields5 = '[
                        {"type":"radio-group","required":false,"label":"<span lang=\"EN-AU\" style=\"font-size:12.0pt;mso-bidi-font-size:\n11.0pt;line-height:120%;font-family:&quot;Arial&quot;,sans-serif;mso-fareast-font-family:\nCalibri;mso-fareast-theme-font:minor-latin;mso-bidi-font-family:&quot;Times New Roman&quot;;\nmso-bidi-theme-font:minor-bidi;mso-ansi-language:EN-AU;mso-fareast-language:\nEN-US;mso-bidi-language:AR-SA\">Agreement with AT request</span>","inline":false,"name":"participant_agreement","access":false,"other":false,"values":[{"label":"Yes","value":"Yes","selected":false},{"label":"No","value":"No","selected":false}]},
                        {"type":"text","required":false,"label":"Comments","placeholder":"Write Your Comments","className":"form-control","name":"participant_comments","access":false,"subtype":"text"},{"type":"radio-group","required":false,"label":"<span lang=\"EN-AU\" style=\"font-size:12.0pt;mso-bidi-font-size:\n11.0pt;line-height:120%;font-family:&quot;Arial&quot;,sans-serif;mso-fareast-font-family:\nCalibri;mso-fareast-theme-font:minor-latin;mso-bidi-font-family:&quot;Times New Roman&quot;;\nmso-bidi-theme-font:minor-bidi;mso-ansi-language:EN-AU;mso-fareast-language:\nEN-US;mso-bidi-language:AR-SA\">Copy of Assessment</span>","inline":false,"name":"Agreement_assessment","access":false,"other":false,"values":[{"label":"Yes","value":"Yes","selected":false},{"label":"No","value":"No","selected":false}]},
                        {"type":"text","required":false,"label":"Comments","placeholder":"Write Your Comments","className":"form-control","name":"assessment_comments","access":false,"subtype":"text"}
            ]';

            $form_fields6 = '[

                {"type":"text","required":false,"label":"<span lang=\"EN-AU\" style=\"font-size:12.0pt;mso-bidi-font-size:\n11.0pt;line-height:120%;font-family:&quot;Arial&quot;,sans-serif;mso-fareast-font-family:\nCalibri;mso-fareast-theme-font:minor-latin;mso-bidi-font-family:&quot;Times New Roman&quot;;\nmso-bidi-theme-font:minor-bidi;mso-ansi-language:EN-AU;mso-fareast-language:\nEN-US;mso-bidi-language:AR-SA\">I certify that I meet the NDIA expectations of\nAT assessor provider suitability (including understanding of the current NDIS\nAct, Rules and Operational Guidelines) to assess the type of assistive\ntechnology and associated supports, at the level of complexity required by this\nparticipant.</span>","className":"form-control","name":"ndis_rules_and_operational","access":false,"subtype":"text"},
                {"type":"text","required":false,"label":"<span lang=\"EN-AU\" style=\"font-size:12.0pt;mso-bidi-font-size:\n11.0pt;line-height:120%;font-family:&quot;Arial&quot;,sans-serif;mso-fareast-font-family:\nCalibri;mso-fareast-theme-font:minor-latin;mso-bidi-font-family:&quot;Times New Roman&quot;;\nmso-bidi-theme-font:minor-bidi;mso-ansi-language:EN-AU;mso-fareast-language:\nEN-US;mso-bidi-language:AR-SA\">I will provide appropriate evidence to the NDIA\nand/or NDIS Quality and Safeguards Commission if and as requested.</span><br>","className":"form-control","name":"ndis_safeguards_commission","access":false,"subtype":"text"},{"type":"text","required":false,"label":"<span lang=\"EN-AU\" style=\"font-size:12.0pt;mso-bidi-font-size:\n11.0pt;line-height:120%;font-family:&quot;Arial&quot;,sans-serif;mso-fareast-font-family:\nCalibri;mso-fareast-theme-font:minor-latin;mso-bidi-font-family:&quot;Times New Roman&quot;;\nmso-bidi-theme-font:minor-bidi;mso-ansi-language:EN-AU;mso-fareast-language:\nEN-US;mso-bidi-language:AR-SA\">I understand and acknowledge that the NDIA and\nparticipant will rely on my professional advice to select, source and implement\nthis assistive technology.</span><br>","className":"form-control","name":"ndis_source_and_implement","access":false,"subtype":"text"},
                {"type":"text","required":false,"label":"<span lang=\"EN-AU\" style=\"font-size:12.0pt;mso-bidi-font-size:\n11.0pt;line-height:120%;font-family:&quot;Arial&quot;,sans-serif;mso-fareast-font-family:\nCalibri;mso-fareast-theme-font:minor-latin;mso-bidi-font-family:&quot;Times New Roman&quot;;\nmso-bidi-theme-font:minor-bidi;mso-ansi-language:EN-AU;mso-fareast-language:\nEN-US;mso-bidi-language:AR-SA\">This assistive technology has been assessed by\nthe treating multi-disciplinary team and I have completed the AT assessment on\nbehalf of that team.</span><br>","className":"form-control","name":"ndis_assistive_technology","access":false,"subtype":"text"},
                {"type":"text","required":false,"label":"Name","placeholder":"Enter name","className":"form-control","name":"ndis_assistive_technology_name","access":false,"subtype":"text"},
                {"type":"text","required":false,"label":"Position","placeholder":"Enter position","className":"form-control","name":"ndis_assistive_technology_position","access":false,"subtype":"text"},
                {"type":"text","required":false,"label":"Qualification","placeholder":"Enter qualification","className":"form-control","name":"ndis_assistive_technology_qualification","access":false,"subtype":"text"},
                {"type":"text","required":false,"label":"Business name","placeholder":"Enter business name","className":"form-control","name":"ndis_assistive_technology_business","access":false,"subtype":"text"},
                {"type":"text","required":false,"label":"Contact telephone number","placeholder":"Enter contact number","className":"form-control","name":"ndis_assistive_contact_number","access":false,"subtype":"text"},
                {"type":"text","required":false,"label":"Email","placeholder":"Enter email","className":"form-control","name":"ndis_assistive_technology_email","access":false,"subtype":"text"},
                {"type":"text","required":false,"label":"Preffered contact method","placeholder":"Enter preffered contact","className":"form-control","name":"ndis_assistive_technology_preffered","access":false,"subtype":"text"},
                {"type":"text","required":false,"label":"Date of assessment","placeholder":"Enter date of assesment","className":"form-control","name":"ndis_assistive_technology_assessment","access":false,"subtype":"text"},
                {"type":"text","required":false,"label":"Date of report","placeholder":"Enter date of report","className":"form-control","name":"ndis_assistive_technology_report","access":false,"subtype":"text"}

                ]';


         $form_fields7 = '[
            {"type":"radio-group","required":false,"label":"Are you consent","inline":false,"name":"consent_decision","access":false,"other":false,"values":[{"label":"Yes, I consent","value":"option-1","selected":false},{"label":"No, I do not consent","value":"option-2","selected":false}]},
            {"type":"checkbox-group","required":false,"label":"I understand that I am giving consent to the NDIA to do the things with my informations set out in this section.","toggle":false,"inline":false,"name":"access_information","access":false,"other":false,"values":[{"label":"Yes/No","value":"option-1","selected":true}]},{"type":"checkbox-group","required":false,"label":"I Understand that I can access the NDIA Privacy Notice and Policy.","toggle":false,"inline":false,"name":"privacy_check","access":false,"other":false,"values":[{"label":"YES/NO","value":"option-1","selected":true}]},
            {"type":"date","required":false,"label":"Date","placeholder":"Enter Date of Completion","className":"form-control","name":"completion_date","access":false},
            {"type":"text","required":false,"label":"Full Name","placeholder":"Enter Full Name","className":"form-control","name":"full_name","access":false,"subtype":"text"},{"type":"date","required":false,"label":"Form signed in Date","placeholder":"Enter date you signed this form on behalf of NDIA Participant.","className":"form-control","name":"signedIn_date","access":false},{"type":"text","required":false,"label":"Full Name&nbsp;","placeholder":"Enter full name of  Person Completing this Form","className":"form-control","name":"person_name","access":false,"subtype":"text"},
            {"type":"text","required":false,"label":"Relation to the Participant","placeholder":"Enter Participant name","className":"form-control","name":"participant_name","access":false,"subtype":"text"}

         ]';
         
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
=======
            </table>
            <p style='margin-top:10px'></p>";
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
       "name":"part_1_ndis_age1",
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
       "name":"part_1_ndis_participantphone_number1",
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
>>>>>>> 52cf4aa6a824ebe8f2ad0837255557ea5b62a503

        $form_fields2 = '[
            {
                "type":"heading",
                "required":false,
                "label_1":"2.1 Background",
                "label_2":"",
                "label_2":"General: Describe participant’s current status which may include diagnosis, prognosis, co-existing conditions, disability, personal and instrumental activities of daily living, formal and informal support arrangements and life transitions.",
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
        "label_3":"If the participant’s NDIS plan has been made available, you can refer to the statement of participant’s goals and outline those relevant to provision of an Assistance Animal.",
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
        "label_3":"Outline the specific functional limitation/s related to the participant’s disability that indicate the need for the Assistance Animal. Summarise relevant assessments that have been undertaken such as sensory profiling, cognitive assessments, current capacity to access the community, positive behaviour support assessments. Please only comment on the below points where applicable.",
        "placeholder":"Full Name",
        "className":"form-control",
        "name":"part_2_heading_extra_3",
        "access":false
     },
    {
       "type":"text",
       "required":false,
       "label":"Physical",
       "placeholder":"Enter Physical Limitation",
       "className":"form-control",
       "name":"part_2_physical_functional_assessment",
       "access":false,
       "subtype":"text"
    },
    {
       "type":"text",
       "required":false,
       "label":"Sensory",
       "placeholder":"Enter Sensory Assessment",
       "className":"form-control",
       "name":"part_2_sensory_functional_assessment",
       "access":false,
       "subtype":"text"
    },
    {
       "type":"text",
       "required":false,
       "label":"communication",
       "placeholder":"Enter communication Assessment",
       "className":"form-control",
       "name":"part_2_communication_functional_assessment",
       "access":false,
       "subtype":"text"
    },
    {
       "type":"text",
       "required":false,
       "label":"Cognitive",
       "placeholder":"Enter Cognitive Assessment",
       "className":"form-control",
       "name":"part_2_Cognitive_functional_assessment",
       "access":false,
       "subtype":"text"
    },
    {
       "type":"text",
       "required":false,
       "label":"Behavioural",
       "placeholder":"Enter Behavioural Assessment",
       "className":"form-control",
       "name":"part_2_behavioural_functional_assessment",
       "access":false,
       "subtype":"text"
    }
 ]';
        $form_fields3 = '[
            {
                "type":"heading",
                "required":false,
                "label_1":"",
                "label_2":"",
                "label_3":"NDIA delegates determine whether the support is “reasonable and necessary” according to section 34 of the NDIS Act. The following section will assist to inform a delegate reasonable and necessary decision.",
                "placeholder":"Full Name",
                "className":"form-control",
                "name":"part_3_heading_extra_1",
                "access":false
             },
             {
                "type":"heading",
                "required":false,
                "label_1":"3.1 Information to support decision",
                "label_2":"3.1.1 Evidence",
                "label_3":"Consider and outline evidence regarding how the recommended Assistance Animal will assist the participant to pursue the goals, objectives and aspirations contained in the participant’s statement in their plan.",
                "placeholder":"Full Name",
                "className":"form-control",
                "name":"part_3_heading_extra_2",
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
        "label_1":"",
        "label_2":"3.1.2 Functional limitation",
        "label_3":"Outline the functional limitations of the participant to be mitigated by the Assistance Animal. There should be a minimum of three tasks which are measurable that the Assistance Animal is intended to perform to reduce the functional impact of the participant’s disability.",
        "placeholder":"Full Name",
        "className":"form-control",
        "name":"part_3_heading_extra_3",
        "access":false
     },
    {
       "type":"textarea",
       "required":false,
       "label":"",
       "placeholder":"Enter Functional Limitation",
       "className":"form-control",
       "name":"part_3_functional_limitation",
       "access":false,
       "subtype":"text"
    },
    {
        "type":"heading",
        "required":false,
        "label_1":"",
        "label_2":"3.1.3 How the Assistance Animal will assist",
        "label_3":"Consider and outline evidence regarding how the Assistance Animal will assist the participant to undertake activities so as to facilitate their social and /or economic participation. Consider including information regarding current baseline functioning and anticipated outcome measures.",
        "placeholder":"Full Name",
        "className":"form-control",
        "name":"part_3_heading_extra_4",
        "access":false
     },
    {
       "type":"textarea",
       "required":false,
       "label":"",
       "placeholder":"How Assistance Animal will Assist",
       "className":"form-control",
       "name":"part_3_assistanceanimation_assist",
       "access":false,
       "subtype":"text"
    },
    {
        "type":"heading",
        "required":false,
        "label_1":"",
        "label_2":"3.1.4 Equipment / methods and access to allied health",
        "label_3":"Detail the participant’s current equipment/methods / access to allied health interventions",
        "placeholder":"Full Name",
        "className":"form-control",
        "name":"part_3_heading_extra_5",
        "access":false
     },
    {
       "type":"textarea",
       "required":false,
       "label":"",
       "placeholder":"Equipment / methods and access to allied health",
       "className":"form-control",
       "name":"part_3_current_equipment",
       "access":false,
       "subtype":"text"
    },
    {
        "type":"heading",
        "required":false,
        "label_1":"",
        "label_2":"3.1.5 Alternative options",
        "label_3":"Detail other options which have been considered as an alternative to an Assistance Animal, including evidence based best practice intervention, capacity building, alternative assistive technology, linkages with community supports and increased social participation. Information should include outcomes of intervention provided.",
        "placeholder":"Full Name",
        "className":"form-control",
        "name":"part_3_heading_extra_6",
        "access":false
     },
    {
       "type":"textarea",
       "required":false,
       "label":"",
       "placeholder":"Enter Alternative Options",
       "className":"form-control",
       "name":"part_3_alternative_options",
       "access":false,
       "subtype":"text"
    },
    {
        "type":"heading",
        "required":false,
        "label_1":"",
        "label_2":"3.1.6 Benefits",
        "label_3":"Outline how the Assistance Animal benefits exceed those reasonably expected from the presence of a companion animal.",
        "placeholder":"Full Name",
        "className":"form-control",
        "name":"part_3_heading_extra_7",
        "access":false
     },
    {
       "type":"textarea",
       "required":false,
       "label":"",
       "placeholder":"Enter Benefits",
       "className":"form-control",
       "name":"part_3_assistanceanimal_benefits",
       "access":false,
       "subtype":"text"
    },
    {
        "type":"heading",
        "required":false,
        "label_1":"",
        "label_2":"3.1.7 Participant Activities",
        "label_3":"Please provide comprehensive detail regarding the activities the participant will complete with the Assistance Animal, including the frequency of activities",
        "placeholder":"Full Name",
        "className":"form-control",
        "name":"part_3_heading_extra_8",
        "access":false
     },
    {
       "type":"textarea",
       "required":false,
       "label":"",
       "placeholder":"Enter Participant Activities",
       "className":"form-control",
       "name":"part_3_comprehensive_detail",
       "access":false,
       "subtype":"text"
    },
    {
        "type":"heading",
        "required":false,
        "label_1":"",
        "label_2":"3.1.8 Assistance Animal working life",
        "label_3":"What is the anticipated working life of the Assistance Animal?",
        "placeholder":"Full Name",
        "className":"form-control",
        "name":"part_3_heading_extra_9",
        "access":false
     },
    {
       "type":"textarea",
       "required":false,
       "label":"",
       "placeholder":"Enter Assistance Animal working life",
       "className":"form-control",
       "name":"part_3_working_life",
       "access":false,
       "subtype":"text"
    },
    {
        "type":"heading",
        "required":false,
        "label_1":"",
        "label_2":"3.1.9 Participant supports",
        "label_3":"Outline the participant’s current use of formal and informal supports, including frequency of supports provided.",
        "placeholder":"Full Name",
        "className":"form-control",
        "name":"part_3_heading_extra_10",
        "access":false
     },
    {
       "type":"textarea",
       "required":false,
       "label":"Participant supports",
       "placeholder":"Enter Participant supports",
       "className":"form-control",
       "name":"part_3_participant_supports",
       "access":false,
       "subtype":"text"
    },
    {
        "type":"heading",
        "required":false,
        "label_1":"",
        "label_2":"3.1.10 Plan of use",
        "label_3":"Please provide a detailed plan, including a timeframe, regarding how the Assistance Animal will reduce the participant’s current use of formal and informal support required.",
        "placeholder":"Full Name",
        "className":"form-control",
        "name":"part_3_heading_extra_11",
        "access":false
     },
    {
       "type":"textarea",
       "required":false,
       "label":"",
       "placeholder":"Enter Plan Of Use",
       "className":"form-control",
       "name":"part_3_planof_use",
       "access":false,
       "subtype":"text"
    },
    {
        "type":"heading",
        "required":false,
        "label_1":"",
        "label_2":"3.1.11 Evidence of effectiveness",
        "label_3":"Having regard to evidenced based practice, what evidence indicates the proposed Assistance Animal will be, or is likely to be, effective and beneficial for the participant? (For example; past participant experience of an assistance animal).",
        "placeholder":"Full Name",
        "className":"form-control",
        "name":"part_3_heading_extra_12",
        "access":false
     },
    {
       "type":"textarea",
       "required":false,
       "label":"",
       "placeholder":"Enter Evidence of effectiveness",
       "className":"form-control",
       "name":"part_3_evidence_effectiveness",
       "access":false,
       "subtype":"text"
    },
    {
        "type":"heading",
        "required":false,
        "label_1":"",
        "label_2":"3.1.12 Objective outcomes",
        "label_3":"Objective outcomes from a trial with the Assistance Animal including pre and post outcome measures.",
        "placeholder":"Full Name",
        "className":"form-control",
        "name":"part_3_heading_extra_13",
        "access":false
     },
    {
       "type":"textarea",
       "required":false,
       "label":"",
       "placeholder":"Enter Outcome Objectives",
       "className":"form-control",
       "name":"part_3_objective_outcomes",
       "access":false,
       "subtype":"text"
    },
    {
        "type":"heading",
        "required":false,
        "label_1":"",
        "label_2":"3.1.13 Participant experience with previous animals",
        "label_3":"Detail of the participant’s previous lived experience with animals, family pet, or animal assisted therapy interventions and the effect it had on the participant.",
        "placeholder":"Full Name",
        "className":"form-control",
        "name":"part_3_heading_extra_14",
        "access":false
     },
    {
       "type":"textarea",
       "required":false,
       "label":"",
       "placeholder":"Enter Participant experience with previous animals",
       "className":"form-control",
       "name":"part_3_participant_experience",
       "access":false,
       "subtype":"text"
    },
    {
        "type":"heading",
        "required":false,
        "label_1":"",
        "label_2":"3.1.14 Medical impacts",
        "label_3":"Any relevant medical information that impacts on the participant’s ability to use the Assistance Animal?",
        "placeholder":"Full Name",
        "className":"form-control",
        "name":"part_3_heading_extra_15",
        "access":false
     },
    {
       "type":"textarea",
       "required":false,
       "label":"",
       "placeholder":"Enter Medical impacts",
       "className":"form-control",
       "name":"part_3_medical_impact",
       "access":false,
       "subtype":"text"
    },
    {
        "type":"heading",
        "required":false,
        "label_1":"",
        "label_2":"3.1.15 Alternate funding",
        "label_3":"Consider whether support delivered under alternative funding through the NDIS is being provided for the same functional goals.",
        "placeholder":"Full Name",
        "className":"form-control",
        "name":"part_3_heading_extra_16",
        "access":false
     },
    {
       "type":"textarea",
       "required":false,
       "label":"",
       "placeholder":"Enter Alternate funding",
       "className":"form-control",
       "name":"part_3_alternate_funding",
       "access":false,
       "subtype":"text"
    },
    {
        "type":"heading",
        "required":false,
        "label_1":"3.2 Reasonable expectations of care",
        "label_2":"",
        "label_3":"Has this assessment considered what it is reasonable to expect family, carers, informal networks and the community to provide?",
        "placeholder":"Full Name",
        "className":"form-control",
        "name":"part_3_heading_extra_17",
        "access":false
     },
    {
       "type":"textarea",
       "required":false,
       "label":"",
       "placeholder":"Enter Reasonable expectations of care",
       "className":"form-control",
       "name":"part_3_expectation_care",
       "access":false,
       "subtype":"text"
    },
    {
        "type":"heading",
        "required":false,
        "label_1":"3.3 Mitigation of Risk",
        "label_2":"",
        "label_3":"Detail any behaviour issues which may impact on, or potentially cause harm to the Assistance Animal and how these will be managed. Please note: In reference to Assistance Animal Operational Guideline, NDIS funding for Assistance Animals for a participant with behaviours of concern will not be provided due to the foreseeable risk to the participant and the animal. Behaviours of concern should be addressed prior to consideration of an Assistance Animal. Please attach a behaviour support plan if relevant.",
        "placeholder":"Full Name",
        "className":"form-control",
        "name":"part_3_heading_extra_18",
        "access":false
     },
    {
       "type":"textarea",
       "required":false,
       "label":"",
       "placeholder":"Enter Mitigation of Risk",
       "className":"form-control",
       "name":"part_3_mitigation_risk",
       "access":false,
       "subtype":"text"
    },
    {
        "type":"heading",
        "required":false,
        "label_1":"",
        "label_2":"3.3.1 Primary handler",
        "label_3":"Please list the primary handler/responsible person/people in the home, community, school and any other environments.",
        "placeholder":"Full Name",
        "className":"form-control",
        "name":"part_3_heading_extra_19",
        "access":false
     },
    {
       "type":"textarea",
       "required":false,
       "label":"",
       "placeholder":"Enter Primary handler",
       "className":"form-control",
       "name":"part_3_primary_handler",
       "access":false,
       "subtype":"text"
    },
    {
        "type":"heading",
        "required":false,
        "label_1":"",
        "label_2":"3.3.2 Home environment",
        "label_3":"Provide evidence that the environment where the Assistance Animal will be homed is suitable for all household members and the welfare of the Assistance Animal.",
        "placeholder":"Full Name",
        "className":"form-control",
        "name":"part_3_heading_extra_20",
        "access":false
     },
    {
       "type":"textarea",
       "required":false,
       "label":"",
       "placeholder":"Enter Home environment",
       "className":"form-control",
       "name":"part_3_home_enviroment",
       "access":false,
       "subtype":"text"
    },
    {
        "type":"heading",
        "required":false,
        "label_1":"",
        "label_2":"3.3.3 Attendance at school",
        "label_3":"",
        "placeholder":"Full Name",
        "className":"form-control",
        "name":"part_3_heading_extra_21",
        "access":false
     },
     {
        "type":"heading",
        "required":false,
        "label_1":"",
        "label_2":"",
        "label_3":"Will the Assistance Animal Attending School with the participant?",
        "placeholder":"Full Name",
        "className":"form-control",
        "name":"part_3_heading_extra_22",
        "access":false
     },
     {
        "type":"checkbox-group",
        "required":false,
        "label":"Yes",
        "toggle":false,
        "inline":false,
        "name":"part_3_schoold_attendance_yes",
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
       "label":"No",
       "toggle":false,
       "inline":false,
       "name":"part_3_schoold_attendance_no",
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
       "label":"Describe",
       "placeholder":"Will the Assistance Animal Attending School with the participant? Describe",
       "className":"form-control",
       "name":"part_3_schoold_attendance_details",
       "access":false,
       "subtype":"text"
    },
    {
        "type":"heading",
        "required":false,
        "label_1":"",
        "label_2":"3.3.4 Permission to attend school",
        "label_3":"Where the assistance animal will be attending school provide evidence from school that the Assistance Animal is permitted to attend with the participant.",
        "placeholder":"Full Name",
        "className":"form-control",
        "name":"part_3_heading_extra_23",
        "access":false
     },
    {
        "type":"textarea",
        "required":false,
        "label":"",
        "placeholder":"Do you have Permission For Animal to attend school",
        "className":"form-control",
        "name":"part_3_permissionattend",
        "access":false,
        "subtype":"text"
     },
     {
        "type":"heading",
        "required":false,
        "label_1":"",
        "label_2":"3.3.5 School environment",
        "label_3":"Where the assistance animal will be attending school provide evidence that the school environment has been assessed as suitable for the Assistance Animal.",
        "placeholder":"Full Name",
        "className":"form-control",
        "name":"part_3_heading_extra_24",
        "access":false
     },
    {
       "type":"textarea",
       "required":false,
       "label":"",
       "placeholder":"Enter School environment",
       "className":"form-control",
       "name":"part_3_schoolenviroment",
       "access":false,
       "subtype":"text"
    },
    {
        "type":"heading",
        "required":false,
        "label_1":"",
        "label_2":"3.3.6 Public access test",
        "label_3":"Provide evidence that the Assistance Animal has passed the Public Access Test, as assessed by an unbiased independent assessor.",
        "placeholder":"Full Name",
        "className":"form-control",
        "name":"part_3_heading_extra_25",
        "access":false
     },
    {
       "type":"textarea",
       "required":false,
       "label":"",
       "placeholder":"Provide Evidence of Public access test",
       "className":"form-control",
       "name":"part_3_publicaccess_test",
       "access":false,
       "subtype":"text"
    },
    {
        "type":"heading",
        "required":false,
        "label_1":"",
        "label_2":"3.3.7 Legal responsibility",
        "label_3":"Please provide details of the person who will take legal responsibility if something happens to the animal.",
        "placeholder":"Full Name",
        "className":"form-control",
        "name":"part_3_heading_extra_26",
        "access":false
     },
    {
       "type":"textarea",
       "required":false,
       "label":"",
       "placeholder":"Enter Name of Person",
       "className":"form-control",
       "name":"part_3_legal_responsibility",
       "access":false,
       "subtype":"text"
    },
    {
        "type":"heading",
        "required":false,
        "label_1":"",
        "label_2":"3.3.8 Standards",
        "label_3":"Provide the Standards the Assistance Animal provider adheres to.",
        "placeholder":"Full Name",
        "className":"form-control",
        "name":"part_3_heading_extra_27",
        "access":false
     },
    {
       "type":"textarea",
       "required":false,
       "label":"",
       "placeholder":"Provide the Standards the Assistance Animal provider adheres to.",
       "className":"form-control",
       "name":"part_3_standards",
       "access":false,
       "subtype":"text"
    }
 ]';
        $form_fields4 = '[
            {
                "type":"heading",
                "required":false,
                "label_1":"",
                "label_2":"",
                "label_3":"Please attach:\n   1. A detailed quote outlining the full cost of any assessment, training of the participant with the dog, matching, and follow-up associated with the cost of the Assistance Animal purchase. \n   Noting, as outlined in the Assistance Animal Operational Guideline that NDIS funding is provided for a fully qualified Assistance Animal and not for the training of an animal to become an Assistance Animal. \n   2. Behaviour Support Plan (as outlined in section 3.3 if relevant). \nPlease Note: For an approved Assistance Animal the NDIS will provide an appropriate annual maintenance cost which the participant can use to pay for reasonable and necessary Assistance Animal maintenance costs (including food, grooming, flea and worm treatments, medication, vaccinations, and veterinary costs).",
                "placeholder":"Full Name",
                "className":"form-control",
                "name":"part_4_heading_extra_1",
                "access":false
             }
        ]';
        $form_fields5 = '[
            {
                "type": "heading",
                "required": false,
                "label_1": "5.1 Agreement with AT request",
                "label_2": "",
                "label_3": "Is the Participant / Nominee in agreement with this AT request? Please describe any issues?",
                "placeholder": "Full Name",
                "className": "form-control",
                "name": "part_5_heading_extra_1",
                "access": false
            },
            {
                "type": "checkbox-group",
                "required": false,
                "label": "Yes, Agreement with AT Request",
                "toggle": false,
                "inline": false,
                "name": "part_5_agreement_yes2",
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
                "label": "No, Agreement with AT Request",
                "toggle": false,
                "inline": false,
                "name": "part_5_agreement_no1",
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
                "type": "textarea",
                "required": false,
                "label": "Comments",
                "placeholder": "Enter Comments",
                "className": "form-control",
                "name": "part_5_agreement_comments3",
                "access": false,
                "subtype": "text"
            },
            {
                "type": "heading",
                "required": false,
                "label_1": "",
                "label_2": "5.1.1 Copy of assessment",
                "label_3": "Has a copy of the assessment been given to the participant? If not please explain.",
                "placeholder": "Full Name",
                "className": "form-control",
                "name": "part_5_heading_extra_2",
                "access": false
            },
            {
                "type": "checkbox-group",
                "required": false,
                "label": "Yes, The copy of the assessment has been given to the participant? If not please explain.",
                "toggle": false,
                "inline": false,
                "name": "part_5_copyassessment_yes4",
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
                "label": "No, The copy of the assessment has not been given to the participant. If not please explain.",
                "toggle": false,
                "inline": false,
                "name": "part_5_copyassessment_no5",
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
                "type": "textarea",
                "required": false,
                "label": "Comments",
                "placeholder": "Comments, Copy of Assessment",
                "className": "form-control",
                "name": "part_5_copyassessment_comments6",
                "access": false,
                "subtype": "text"
            }
        ]';

        $form_fields6 = '[
            {
                "type":"heading",
                "required":false,
                "label_1": "",
                "label_2":"DECLARATION (indicate all relevant sections that apply)",
                "label_3": "",
                "placeholder":"Full Name",
                "className":"form-control",
                "name":"part_6_heading_extra_1",
                "access":false
             },
              {
                 "type":"checkbox-group",
                 "required":false,
                 "label":"I/we certify that I/we meet the NDIA expectations of AT assessor provider suitability (including understanding of the current NDIS Act, Rules and Operational Guidelines) to assess the type of assistive technology and associated supports, at the level of complexity required by this participant.",
                 "toggle":false,
                 "inline":false,
                 "name":"part_6_declaration_NDIA_expectation",
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
                 "label":"I/we will provide appropriate evidence to the NDIA and/or Quality and Safe Guards Commission if and as requested.",
                 "toggle":false,
                 "inline":false,
                 "name":"part_6_declaration_appropriate_evidence",
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
                 "label":"I/we understand and acknowledge that the NDIA and participant will rely on my professional advice to select, source and implement this assistive technology.",
                 "toggle":false,
                 "inline":false,
                 "name":"part_6_declaration_NDIA_understanding",
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
                 "name":"part_6_declaration_accessing_team",
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
                "label_2":"Assessor 1 Details",
                "label_3": "",
                "placeholder":"Full Name",
                "className":"form-control",
                "name":"part_6_heading_extra_2",
                "access":false
             },
            {
                "type": "text",
                "required": false,
                "label": "Name",
                "placeholder": "Name",
                "className": "form-control",
                "name": "part_6_details_of_assistive_technology_assessor1",
                "access": false,
                "subtype": "text"
            },
            {
                "type": "text",
                "required": false,
                "label": "NDIS Provider Register Number",
                "placeholder": "NDIS Provider Register Number",
                "className": "form-control",
                "name": "part_6_details_of_assistive_technology_assessor2",
                "access": false,
                "subtype": "text"
            },
            {
                "type": "text",
                "required": false,
                "label": "Phone",
                "placeholder": "Phone",
                "className": "form-control",
                "name": "part_6_details_of_assistive_technology_assessor3",
                "access": false,
                "subtype": "text"
            },
            {
                "type": "email",
                "required": false,
                "label": "Email",
                "placeholder": "Email",
                "className": "form-control",
                "name": "part_6_details_of_assistive_technology_assessor4",
                "access": false,
                "subtype": "text"
            },
            {
                "type": "text",
                "required": false,
                "label": "Signature",
                "placeholder": "Signature",
                "className": "form-control",
                "name": "part_6_details_of_assistive_technology_assessor5",
                "access": false,
                "subtype": "text"
            },
            {
                "type": "text",
                "required": false,
                "label": "Qualification",
                "placeholder": "Qualification",
                "className": "form-control",
                "name": "part_6_details_of_assistive_technology_assessor6",
                "access": false,
                "subtype": "text"
            },
            {
                "type": "date",
                "required": false,
                "label": "Date of Assessment",
                "placeholder": "Date of Assessment",
                "className": "form-control",
                "name": "part_6_details_of_assistive_technology_assessor7",
                "access": false,
                "subtype": "text"
            },
            {
                "type": "date",
                "required": false,
                "label": "Date of Report",
                "placeholder": "Date of Report",
                "className": "form-control",
                "name": "part_6_details_of_assistive_technology_assessor8",
                "access": false,
                "subtype": "text"
            },
            {
                "type":"heading",
                "required":false,
                "label_1": "",
                "label_2":"Assessor 2 Details",
                "label_3": "",
                "placeholder":"Full Name",
                "className":"form-control",
                "name":"part_6_heading_extra_3",
                "access":false
             },
            {
                "type": "text",
                "required": false,
                "label": "Name",
                "placeholder": "Name",
                "className": "form-control",
                "name": "part_6_details_of_assistive_technology_assessor9",
                "access": false,
                "subtype": "text"
            },
            {
                "type": "text",
                "required": false,
                "label": "NDIS Provider Register Number",
                "placeholder": "NDIS Provider Register Number",
                "className": "form-control",
                "name": "part_6_details_of_assistive_technology_assessor10",
                "access": false,
                "subtype": "text"
            },
            {
                "type": "text",
                "required": false,
                "label": "Phone",
                "placeholder": "Phone",
                "className": "form-control",
                "name": "part_6_details_of_assistive_technology_assessor11",
                "access": false,
                "subtype": "text"
            },
            {
                "type": "email",
                "required": false,
                "label": "Email",
                "placeholder": "Email",
                "className": "form-control",
                "name": "part_6_details_of_assistive_technology_assessor12",
                "access": false,
                "subtype": "text"
            },
            {
                "type": "text",
                "required": false,
                "label": "Signature",
                "placeholder": "Signature",
                "className": "form-control",
                "name": "part_6_details_of_assistive_technology_assessor13",
                "access": false,
                "subtype": "text"
            },
            {
                "type": "text",
                "required": false,
                "label": "Qualification",
                "placeholder": "Qualification",
                "className": "form-control",
                "name": "part_6_details_of_assistive_technology_assessor14",
                "access": false,
                "subtype": "text"
            },
            {
                "type": "date",
                "required": false,
                "label": "Date of Assessment",
                "placeholder": "Date of Assessment",
                "className": "form-control",
                "name": "part_6_details_of_assistive_technology_assessor15",
                "access": false,
                "subtype": "text"
            },
            {
                "type": "date",
                "required": false,
                "label": "Date of Report",
                "placeholder": "Date of Report",
                "className": "form-control",
                "name": "part_6_details_of_assistive_technology_assessor16",
                "access": false,
                "subtype": "text"
            }
        ]';


        $form_fields7 = '[
            {
                "type": "heading",
                "required": false,
                "label_1": "",
                "label_2": "For the participant to complete",
                "label_3": "As a participant who requires assistive technology supports, the National Disability Insurance Agency (NDIA) may need to contact your AT assessor and / or AT supplier to discuss information within your assistive technology assessment and quotation(s). This will assist the NDIA with determining whether your request for assistive technology support(s) can be provided to you under the NDIS. \nDo you consent to the NDIA collecting and disclosing your information including from these third parties mentioned above, in relation to your assistive technology assessment and quotation? ",
                "placeholder": "Full Name",
                "className": "form-control",
                "name": "part_7_heading_extra_1",
                "access": false
            },
            {
                "type": "checkbox-group",
                "required": false,
                "label": "Yes, I consent",
                "toggle": false,
                "inline": false,
                "name": "part_7_consent_to_collect_and_share_your_information01",
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
                "label": "No, I do not consent",
                "toggle": false,
                "inline": false,
                "name": "part_7_consent_to_collect_and_share_your_information02",
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
                "label": "Participants Signature",
                "toggle": false,
                "inline": false,
                "name": "part_7_consent_to_collect_and_share_your_information03",
                "access": false,
                "other": false,
                "values": [
                    {
                        "label": "YES/NO",
                        "value": "option-1",
                        "selected": false
                    }
                ]
            },
            {
                "type": "checkbox-group",
                "required": false,
                "label": "I understand that I am giving consent to the NDIA to do the things with my information set out in this section. I understand that I can withdraw my consent for the NDIS to do things with my information at any time by letting the NDIA know.",
                "toggle": false,
                "inline": false,
                "name": "part_7_consent_to_collect_and_share_your_information04",
                "access": false,
                "other": false,
                "values": [
                    {
                        "label": "YES/NO",
                        "value": "option-1",
                        "selected": false
                    }
                ]
            },
            {
                "type": "checkbox-group",
                "required": false,
                "label": "I understand that I can access the NDIA’s Privacy Notice and Privacy Policy on the NDIA website(https://www.ndis.gov.au/about-us/operational-guidelines/information-handling-operational-guideline/information-handling-operational-guideline-privacy) or by contacting the NDIA (https://www.ndis.gov.au/contact).",
                "toggle": false,
                "inline": false,
                "name": "part_7_consent_to_collect_and_share_your_information05",
                "access": false,
                "other": false,
                "values": [
                    {
                        "label": "YES/NO",
                        "value": "option-1",
                        "selected": false
                    }
                ]
            },
            {
                "type": "text",
                "required": false,
                "label": "Signature",
                "placeholder": "Enter Signature",
                "className": "form-control",
                "name": "part_7_consent_to_collect_and_share_your_information06",
                "access": false,
                "subtype": "text"
            },
            {
                "type": "date",
                "required": false,
                "label": "Date",
                "placeholder": "Enter Date",
                "className": "form-control",
                "name": "part_7_consent_to_collect_and_share_your_information07",
                "access": false,
                "subtype": "text"
            },
            {
                "type": "text",
                "required": false,
                "label": "Full Name",
                "placeholder": "Enter Full Name",
                "className": "form-control",
                "name": "part_7_consent_to_collect_and_share_your_information08",
                "access": false
            },
            {
                "type": "heading",
                "required": false,
                "label_1": "",
                "label_2": "",
                "label_3": "If you have signed this Form on behalf of the NDIS participant, please complete the details below. \nNote: It is an offence to provide false or misleading information. \nWe may require you to provide evidence of your authority to sign on behalf of the person.",
                "placeholder": "Full Name",
                "className": "form-control",
                "name": "part_7_heading_extra_2",
                "access": false
            },
            {
                "type": "text",
                "required": false,
                "label": "Signature",
                "placeholder": "Enter Signature.",
                "className": "form-control",
                "name": "part_7_consent_to_collect_and_share_your_information09",
                "access": false,
                "subtype": "text"
            },
            {
                "type": "date",
                "required": false,
                "label": "Date of Assessment",
                "placeholder": "Set Date of Assessment",
                "className": "form-control",
                "name": "part_7_consent_to_collect_and_share_your_information10",
                "access": false
            },
            {
                "type": "text",
                "required": false,
                "label": "Full Name",
                "placeholder": "Full Name",
                "className": "form-control",
                "name": "part_7_consent_to_collect_and_share_your_information11",
                "access": false
            },
            {
                "type": "text",
                "required": false,
                "label": "Relationship to participant ",
                "placeholder": "Relationship to participant",
                "className": "form-control",
                "name": "part_7_consent_to_collect_and_share_your_information12",
                "access": false
            }
        ]';


        $form = Form::create([
            'name' => 'Animal Assessment Report'
        ]);


        $heading1 = FormHeading::insertGetId([
            'form_heading' => 'Part 1 – Participant and Plan Management Details',
            'form_id' => $form->id,
            'section_html' => $section1
        ]);

        $heading2 = FormHeading::insertGetId([
            'form_heading' => 'Part 2 – Assessment',
            'form_id' => $form->id,
            'section_html' => $section2
        ]);

        $heading3 = FormHeading::insertGetId([
            'form_heading' => 'Part 3 – Assistance Animal Assessment',
            'form_id' => $form->id,
            'section_html' => $section3
        ]);

        $heading4 = FormHeading::insertGetId([
            'form_heading' => 'Part 4 – Attachments',
            'form_id' => $form->id,
            'section_html' => $section4
        ]);

        $heading5 = FormHeading::insertGetId([
            'form_heading' => 'Part 5 - Participant feedback and notifications',
            'form_id' => $form->id,
            'section_html' => $section5
        ]);


        $heading6 = FormHeading::insertGetId([
            'form_heading' => 'Part 6 – Details of Assistive Technology Assessor',
            'form_id' => $form->id,
            'section_html' => $section6
        ]);


        $heading7 = FormHeading::insertGetId([
            'form_heading' => 'Part 7 – Consent to collect and share your information',
            'form_id' => $form->id,
            'section_html' => $section7
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
    }
}
