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
                <table style='width:100%; border: 1px solid black'>
                    <tr>
                        <td style='width: 100%; border: 1px solid black;'><p style='margin-top:10px; margin-bottom:10px;'> {{part_3_evidence}}</p></td>
                    </tr>
                </table>
                <p style='font-weight:bold; font-size:13pt;margin-top:20px; margin-bottom:20px;'>3.1.2	Functional limitation</p>
                <p style='margin-bottom: 10px'>Outline the functional limitations of the participant to be mitigated by the Assistance Animal. There should be a minimum of three tasks which are measurable that the Assistance Animal is intended to perform to reduce the functional impact of the participant’s disability.</p>
                <table style='width:100%; border: 1px solid black'>
                    <tr>
                        <td style='width: 100%; border: 1px solid black;'><p style='margin-top:10px; margin-bottom:10px;'>{{part_3_functional_limitation}}</p></td>
                    </tr>
                </table>
                <p style='font-weight:bold; font-size:13pt;margin-top:20px; margin-bottom:20px;'>3.1.3	How the Assistance Animal will assist</p>
                <p style='margin-bottom: 10px'>Consider and outline evidence regarding how the Assistance Animal will assist the participant to undertake activities so as to facilitate their social and /or economic participation. Consider including information regarding current baseline functioning and anticipated outcome measures.</p>
                <table style='width:100%; border: 1px solid black'>
                    <tr>
                        <td style='width: 100%; border: 1px solid black;'><p style='margin-top:10px; margin-bottom:10px;'>{{part_3_assistanceanimation_assist}}</p></td>
                    </tr>
                </table>
                <p style='font-weight:bold; font-size:13pt;margin-top:20px; margin-bottom:20px;'>3.1.4	Equipment / methods and access to allied health</p>
                <p style='margin-bottom: 10px'>Detail the participant’s current equipment/methods / access to allied health interventions</p>
                <table style='width:100%; border: 1px solid black'>
                    <tr>
                        <td style='width: 100%; border: 1px solid black;'><p style='margin-top:10px; margin-bottom:10px;'>{{part_3_current_equipment}}</p></td>
                    </tr>
                </table>
                <p style='font-weight:bold; font-size:13pt;margin-top:20px; margin-bottom:20px;'>3.1.4	Equipment / methods and access to allied health</p>
                <p style='margin-bottom: 10px'>Detail the participant’s current equipment/methods / access to allied health interventions</p>
                <table style='width:100%; border: 1px solid black'>
                    <tr>
                        <td style='width: 100%; border: 1px solid black;'><p style='margin-top:10px; margin-bottom:10px;'>{{part_3_current_equipment}}</p></td>
                    </tr>
                </table>
                <p style='font-weight:bold; font-size:13pt;margin-top:20px; margin-bottom:20px;'>3.1.5	Alternative options</p>
                <p style='margin-bottom: 10px'>Detail other options which have been considered as an alternative to an Assistance Animal, including evidence based best practice intervention, capacity building, alternative assistive technology, linkages with community supports and increased social participation. Information should include outcomes of intervention provided.</p>
                <table style='width:100%; border: 1px solid black'>
                    <tr>
                        <td style='width: 100%; border: 1px solid black;'><p style='margin-top:10px; margin-bottom:10px;'>{{part_3_alternative_options}}</p></td>
                    </tr>
                </table>
                <p style='font-weight:bold; font-size:13pt;margin-top:20px; margin-bottom:20px;'>3.1.6	Benefits</p>
                <p style='margin-bottom: 10px'>Outline how the Assistance Animal benefits exceed those reasonably expected from the presence of a companion animal.</p>
                <table style='width:100%; border: 1px solid black'>
                    <tr>
                        <td style='width: 100%; border: 1px solid black;'><p style='margin-top:10px; margin-bottom:10px;'>{{part_3_assistanceanimal_benefits}}</p></td>
                    </tr>
                </table>
                <p style='font-weight:bold; font-size:13pt;margin-top:20px; margin-bottom:20px;'>3.1.7	Participant Activities</p>
                <p style='margin-bottom: 10px'>Please provide comprehensive detail regarding the activities the participant will complete with the Assistance Animal, including the frequency of activities</p>
                <table style='width:100%; border: 1px solid black'>
                    <tr>
                        <td style='width: 100%; border: 1px solid black;'><p style='margin-top:10px; margin-bottom:10px;'>{{part_3_comprehensive_detail}}</p></td>
                    </tr>
                </table>
                <p style='font-weight:bold; font-size:13pt;margin-top:20px; margin-bottom:20px;'>3.1.8	Assistance Animal working life</p>
                <p style='margin-bottom: 10px'>What is the anticipated working life of the Assistance Animal?</p>
                <table style='width:100%; border: 1px solid black'>
                    <tr>
                        <td style='width: 100%; border: 1px solid black;'><p style='margin-top:10px; margin-bottom:10px;'>{{part_3_working_life}}</p></td>
                    </tr>
                </table>
                <p style='font-weight:bold; font-size:13pt;margin-top:20px; margin-bottom:20px;'>3.1.9	Participant supports</p>
                <p style='margin-bottom: 10px'>Please provide comprehensive detail regarding the activities the participant will complete with the Assistance Animal, including the frequency of activities</p>
                <table style='width:100%; border: 1px solid black'>
                    <tr>
                        <td style='width: 100%; border: 1px solid black;'><p style='margin-top:10px; margin-bottom:10px;'>{{part_3_participant_supports}}</p></td>
                    </tr>
                </table>
                <p style='font-weight:bold; font-size:13pt;margin-top:20px; margin-bottom:20px;'>3.1.10	Plan of use</p>
                <p style='margin-bottom: 10px'>Please provide a detailed plan, including a timeframe, regarding how the Assistance Animal will reduce the participant’s current use of formal and informal support required.</p>
                <table style='width:100%; border: 1px solid black'>
                    <tr>
                        <td style='width: 100%; border: 1px solid black;'><p style='margin-top:10px; margin-bottom:10px;'>{{part_3_planof_use}}</p></td>
                    </tr>
                </table>
                <p style='font-weight:bold; font-size:13pt;margin-top:20px; margin-bottom:20px;'>3.1.11	Evidence of effectiveness</p>
                <p style='margin-bottom: 10px'>Having regard to evidenced based practice, what evidence indicates the proposed Assistance Animal will be, or is likely to be, effective and beneficial for the participant? (For example; past participant experience of an assistance animal).</p>
                <table style='width:100%; border: 1px solid black'>
                    <tr>
                        <td style='width: 100%; border: 1px solid black;'><p style='margin-top:10px; margin-bottom:10px;'>{{part_3_evidence}}</p></td>
                    </tr>
                </table>
                <p style='font-weight:bold; font-size:13pt;margin-top:20px; margin-bottom:20px;'>3.1.12	Objective outcomes</p>
                <p style='margin-bottom: 10px'>Objective outcomes from a trial with the Assistance Animal including pre and post outcome measures.</p>
                <table style='width:100%; border: 1px solid black'>
                    <tr>
                        <td style='width: 100%; border: 1px solid black;'><p style='margin-top:10px; margin-bottom:10px;'>{{part_3_objective_outcomes}}</p></td>
                    </tr>
                </table>
                <p style='font-weight:bold; font-size:13pt;margin-top:20px; margin-bottom:20px;'>3.1.13	Participant experience with previous animals</p>
                <p style='margin-bottom: 10px'>Detail of the participant’s previous lived experience with animals, family pet, or animal assisted therapy interventions and the effect it had on the participant.</p>
                <table style='width:100%; border: 1px solid black'>
                    <tr>
                        <td style='width: 100%; border: 1px solid black;'><p style='margin-top:10px; margin-bottom:10px;'>{{part_3_participant_experience}}</p></td>
                    </tr>
                </table>
                <p style='font-weight:bold; font-size:13pt;margin-top:20px; margin-bottom:20px;'>3.1.14	Medical impacts</p>
                <p style='margin-bottom: 10px'>Any relevant medical information that impacts on the participant’s ability to use the Assistance Animal?</p>
                <table style='width:100%; border: 1px solid black'>
                    <tr>
                        <td style='width: 100%; border: 1px solid black;'><p style='margin-top:10px; margin-bottom:10px;'>{{part_3_medical_impact}}</p></td>
                    </tr>
                </table>
                <p style='font-weight:bold; font-size:13pt;margin-top:20px; margin-bottom:20px;'>3.1.15	Alternate funding</p>
                <p style='margin-bottom: 10px'>Consider whether support delivered under alternative funding through the NDIS is being provided for the same functional goals.</p>
                <table style='width:100%; border: 1px solid black'>
                    <tr>
                        <td style='width: 100%; border: 1px solid black;'><p style='margin-top:10px; margin-bottom:10px;'>{{part_3_alternate_funding}}</p></td>
                    </tr>
                </table>
                <p style='font-weight:bold; font-size:13pt;margin-top:20px; margin-bottom:20px;'>3.2 Reasonable expectations of care</p>
                <p style='margin-bottom: 10px'>Has this assessment considered what it is reasonable to expect family, carers, informal networks and the community to provide?</p>
                <table style='width:100%; border: 1px solid black'>
                    <tr>
                        <td style='width: 100%; border: 1px solid black;'><p style='margin-top:10px; margin-bottom:10px;'>{{part_3_expectation_care}}</p></td>
                    </tr>
                </table>
                <p style='font-weight:bold; font-size:13pt;margin-top:20px; margin-bottom:20px;'>3.3 Mitigation of Risk</p>
                <p style='margin-bottom: 10px'>Detail any behaviour issues which may impact on, or potentially cause harm to the Assistance Animal and how these will be managed. Please note: In reference to Assistance Animal Operational Guideline, NDIS funding for Assistance Animals for a participant with behaviours of concern will not be provided due to the foreseeable risk to the participant and the animal. Behaviours of concern should be addressed prior to consideration of an Assistance Animal. Please attach a behaviour support plan if relevant.</p>
                <table style='width:100%; border: 1px solid black'>
                    <tr>
                        <td style='width: 100%; border: 1px solid black;'><p style='margin-top:10px; margin-bottom:10px;'>{{part_3_mitigation_risk}}</p></td>
                    </tr>
                </table>
                <p style='font-weight:bold; font-size:13pt;margin-top:20px; margin-bottom:20px;'>3.3.1	Primary handler</p>
                <p style='margin-bottom: 10px'>Please list the primary handler/responsible person/people in the home, community, school and any other environments.</p>
                <table style='width:100%; border: 1px solid black'>
                    <tr>
                        <td style='width: 100%; border: 1px solid black;'><p style='margin-top:10px; margin-bottom:10px;'>{{part_3_primary_handler}}</p></td>
                    </tr>
                </table>
                <p style='font-weight:bold; font-size:13pt;margin-top:20px; margin-bottom:20px;'>3.3.2	Home environment</p>
                <p style='margin-bottom: 10px'>Provide evidence that the environment where the Assistance Animal will be homed is suitable for all household members and the welfare of the Assistance Animal.</p>
                <table style='width:100%; border: 1px solid black'>
                    <tr>
                        <td style='width: 100%; border: 1px solid black;'><p style='margin-top:10px; margin-bottom:10px;'>{{part_3_home_enviroment}}</p></td>
                    </tr>
                </table>
                <p style='font-weight:bold; font-size:13pt;margin-top:20px; margin-bottom:20px;'>3.3.3	Attendance at school</p>
                <p style='margin-bottom: 10px'>Will the Assistance Animal be attending school with the participant?</p>
                <table style='width:100%; border: 1px solid black'>
                    <tr>
                        <td style='width: 100%; border: 1px solid black;'><p style='margin-top:10px; margin-bottom:10px;'>{{part_3_schoold_attendance}}</p></td>
                    </tr>
                </table>
                <p style='font-weight:bold; font-size:13pt;margin-top:20px; margin-bottom:20px;'>3.3.4	Permission to attend school</p>
                <p style='margin-bottom: 10px'>Where the assistance animal will be attending school provide evidence from school that the Assistance Animal is permitted to attend with the participant.</p>
                <table style='width:100%; border: 1px solid black'>
                    <tr>
                        <td style='width: 100%; border: 1px solid black;'><p style='margin-top:10px; margin-bottom:10px;'>{{part_3_permissionattend}}</p></td>
                    </tr>
                </table>
                <p style='font-weight:bold; font-size:13pt;margin-top:20px; margin-bottom:20px;'>3.3.5	School environment</p>
                <p style='margin-bottom: 10px'>Where the assistance animal will be attending school provide evidence that the school environment has been assessed as suitable for the Assistance Animal.</p>
                <table style='width:100%; border: 1px solid black'>
                    <tr>
                        <td style='width: 100%; border: 1px solid black;'><p style='margin-top:10px; margin-bottom:10px;'>{{part_3_schoolenviroment}}</p></td>
                    </tr>
                </table>
                <p style='font-weight:bold; font-size:13pt;margin-top:20px; margin-bottom:20px;'>3.3.6	Public access test</p>
                <p style='margin-bottom: 10px'>Provide evidence that the Assistance Animal has passed the Public Access Test, as assessed by an unbiased independent assessor.</p>
                <table style='width:100%; border: 1px solid black'>
                    <tr>
                        <td style='width: 100%; border: 1px solid black;'><p style='margin-top:10px; margin-bottom:10px;'>{{part_3_publicaccess_test}}</p></td>
                    </tr>
                </table>
                <p style='font-weight:bold; font-size:13pt;margin-top:20px; margin-bottom:20px;'>3.3.7	Legal responsibility</p>
                <p style='margin-bottom: 10px'>Please provide details of the person who will take legal responsibility if something happens to the animal.</p>
                <table style='width:100%; border: 1px solid black'>
                    <tr>
                        <td style='width: 100%; border: 1px solid black;'><p style='margin-top:10px; margin-bottom:10px;'>{{part_3_legal_responsibility}}</p></td>
                    </tr>
                </table>
                <p style='font-weight:bold; font-size:13pt;margin-top:20px; margin-bottom:20px;'>3.3.8	Standards</p>
                <p style='margin-bottom: 10px'>Provide the Standards the Assistance Animal provider adheres to.</p>
                <table style='width:100%; border: 1px solid black'>
                    <tr>
                        <td style='width: 100%; border: 1px solid black;'><p style='margin-top:10px; margin-bottom:10px;'>{{part_3_standards}}</p></td>
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
                <td style='border: 1px solid lightslategray; padding: 10px; width: 40%; background-color: lightgrey; font-size: 17px'>Name</td>
                <td style='border: 1px solid lightslategray; padding: 10px'>
                    {{part_5_agreement}}
                </td>
                </tr>
            </table>
            <p style='font-weight:bold; font-size:13pt;margin-top:20px; margin-bottom:20px;'>5.1.1	Copy of assessment</p>
            <p style='margin-bottom: 10px'>Has a copy of the assessment been given to the participant? If not please explain.</p>
            <table style='width:100%; border: 1px solid black'>
                <tr>
                    <td style='width: 100%; border: 1px solid black;'><p style='margin-top:10px; margin-bottom:10px;'>{{part_5_copyassessment}}</p></td>
                </tr>
            </table>
           ";










$section6 = "<p style='margin-top:10px'></p>
            <table style='background-color:#7209B7; border:none; width:100%;'>
                <tr>
                    <td>
                        <p style='font-size:12pt; font-weight:bold; margin-top:5px; margin-bottom:5px; color: white'>	6.	Part 6 – Details of Assistive Technology Assessor</p>
                    </td>
                </tr>
            </table>
            <p style='font-weight:bold; font-size:13pt;margin-top:20px; margin-bottom:20px;'><b>Declaration</b> (indicate all relevant section that apply)</p>
            <p style='margin-bottom: 10px'>I/we certify that I/we meet the NDIA expectations of AT assessor provider suitability (including understanding of the current NDIS Act, Rules and Operational Guidelines) to assess the type of assistive technology and associated supports, at the level of complexity required by this participant.</p>
            <p style='margin-bottom: 10px'>I/we will provide appropriate evidence to the NDIA and/or Quality and Safe Guards Commission if and as requested.</p>
            <p style='margin-bottom: 10px'>I/we understand and acknowledge that the NDIA and participant will rely on my professional advice to select, source and implement this assistive technology.</p>
            <p style='margin-bottom: 10px'>This assistive technology has been assessed by the treating multi-disciplinary team and I have completed the AT assessment on behalf of that team.</p>
            <p style='margin-bottom: 10px;font-weight:bold;'>Assessor 1 Details</p>
            <table
            style='border-collapse: collapse;width: 100%;margin: auto;border: 1px solid lightslategray;'>
                <tr>
                <td style='border: 1px solid lightslategray; padding: 10px; width: 40%; background-color: lightgrey; font-size: 17px'>Name</td>
                    <td style='border: 1px solid lightslategray; padding: 10px'>
                        {{part_5_agreement}}
                    </td>
                </tr>
                <tr>
                    <td style='border: 1px solid lightslategray; padding: 10px; width: 40%; background-color: lightgrey; font-size: 17px'>NDIS provider Registration number (where applicable)</td>
                    <td style='border: 1px solid lightslategray; padding: 10px'>
                        {{part_5_agreement}}
                    </td>
                </tr>
                <tr>
                <td style='border: 1px solid lightslategray; padding: 10px; width: 40%; background-color: lightgrey; font-size: 17px'>Phone</td>
                    <td style='border: 1px solid lightslategray; padding: 10px'>
                        {{part_5_agreement}}
                    </td>
                </tr>
                <tr>
                    <td style='border: 1px solid lightslategray; padding: 10px; width: 40%; background-color: lightgrey; font-size: 17px'>Email</td>
                        <td style='border: 1px solid lightslategray; padding: 10px'>
                            {{part_5_agreement}}
                        </td>
                </tr>
                <tr>
                     <td style='border: 1px solid lightslategray; padding: 10px; width: 40%; background-color: lightgrey; font-size: 17px'>Signature</td>
                    <td style='border: 1px solid lightslategray; padding: 10px'>
                        {{part_5_agreement}}
                    </td>
                </tr>
                <tr>
                     <td style='border: 1px solid lightslategray; padding: 10px; width: 40%; background-color: lightgrey; font-size: 17px'>Qualification</td>
                    <td style='border: 1px solid lightslategray; padding: 10px'>
                        {{part_5_agreement}}
                    </td>
                </tr>
                <tr>
                     <td style='border: 1px solid lightslategray; padding: 10px; width: 40%; background-color: lightgrey; font-size: 17px'>Date of Assessment</td>
                    <td style='border: 1px solid lightslategray; padding: 10px'>
                        {{part_5_agreement}}
                    </td>
                </tr>
                <tr>
                     <td style='border: 1px solid lightslategray; padding: 10px; width: 40%; background-color: lightgrey; font-size: 17px'>Date of Report</td>
                    <td style='border: 1px solid lightslategray; padding: 10px'>
                        {{part_5_agreement}}
                    </td>
                </tr>
            </table>
            <p style='margin-bottom: 10px;font-weight:bold;'>Assessor 2 Details</p>
            <table
            style='border-collapse: collapse;width: 100%;margin: auto;border: 1px solid lightslategray;'>
                <tr>
                <td style='border: 1px solid lightslategray; padding: 10px; width: 40%; background-color: lightgrey; font-size: 17px'>Name</td>
                    <td style='border: 1px solid lightslategray; padding: 10px'>
                        {{part_5_agreement}}
                    </td>
                </tr>
                <tr>
                    <td style='border: 1px solid lightslategray; padding: 10px; width: 40%; background-color: lightgrey; font-size: 17px'>NDIS provider Registration number (where applicable)</td>
                    <td style='border: 1px solid lightslategray; padding: 10px'>
                        {{part_5_agreement}}
                    </td>
                </tr>
                <tr>
                <td style='border: 1px solid lightslategray; padding: 10px; width: 40%; background-color: lightgrey; font-size: 17px'>Phone</td>
                    <td style='border: 1px solid lightslategray; padding: 10px'>
                        {{part_5_agreement}}
                    </td>
                </tr>
                <tr>
                    <td style='border: 1px solid lightslategray; padding: 10px; width: 40%; background-color: lightgrey; font-size: 17px'>Email</td>
                        <td style='border: 1px solid lightslategray; padding: 10px'>
                            {{part_5_agreement}}
                        </td>
                </tr>
                <tr>
                     <td style='border: 1px solid lightslategray; padding: 10px; width: 40%; background-color: lightgrey; font-size: 17px'>Signature</td>
                    <td style='border: 1px solid lightslategray; padding: 10px'>
                        {{part_5_agreement}}
                    </td>
                </tr>
                <tr>
                     <td style='border: 1px solid lightslategray; padding: 10px; width: 40%; background-color: lightgrey; font-size: 17px'>Qualification</td>
                    <td style='border: 1px solid lightslategray; padding: 10px'>
                        {{part_5_agreement}}
                    </td>
                </tr>
                <tr>
                     <td style='border: 1px solid lightslategray; padding: 10px; width: 40%; background-color: lightgrey; font-size: 17px'>Date of Assessment</td>
                    <td style='border: 1px solid lightslategray; padding: 10px'>
                        {{part_5_agreement}}
                    </td>
                </tr>
                <tr>
                     <td style='border: 1px solid lightslategray; padding: 10px; width: 40%; background-color: lightgrey; font-size: 17px'>Date of Report</td>
                    <td style='border: 1px solid lightslategray; padding: 10px'>
                        {{part_5_agreement}}
                    </td>
                </tr>
            </table>
            ";
            




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


                // $heading7 = FormHeading::insertGetId([
                //     'form_heading' => 'Part 7 – Consent to collect and share your information',
                //     'form_id' => '2',
                //     'section_html' => $section7
                // ]);
        


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
                "name":"part_3_permissionattend",
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

    $form_fields4 = '[]';

    $form_fields5 = '[
        {
            "type":"text",
            "required":false,
            "label":"Participant Nominee Agreement",
            "placeholder":"Is the Participant / Nominee in agreement with this AT request? Please describe any issues?",
            "className":"form-control",
            "name":"part_5_agreement",
            "access":false,
            "subtype":"text"
        },
        {
            "type":"text",
            "required":false,
            "label":"Copy of Assessment",
            "placeholder":"Has a copy of the assessment been given to the participant? If not please explain.",
            "className":"form-control",
            "name":"part_5_copyassessment",
            "access":false,
            "subtype":"text"
        }
    ]';

    $form_fields6 = '[
        
    ]';

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
    // FormField::create([
    //     'form_heading_id' => $heading7,
    //     'form_field' => $form_fields6
    // ]);


    }
}
