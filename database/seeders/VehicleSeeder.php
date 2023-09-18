<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\{Form, FormHeading, FormField};

class VehicleSeeder extends Seeder
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
                    <p style='font-size:12pt; font-weight:bold; margin-top:5px; margin-bottom:5px; color: white'> PART 2 – Evaluation and Assessment</p>
                </td>
            </tr>
            </table>
            <p style='font-weight:bold; font-size:13pt;margin-top:20px; margin-bottom:20px;'>2.1   Background </p>

            <p style='font-size:12pt;'>Describe the participant’s current status which may include diagnosis, prognosis, co-existing conditions, disability , personal and instrumental activities of daily living, formal and informal support arrangements and life transitions.</p>
            <table style='width:100%; border: 1px solid black'>
            <tr>
                <td style='width: 100%; border: 1px solid black;'><p style='margin-top:10px; margin-bottom:10px;'>{{part_2_assesment_background}}</p></td>
            </tr>
            </table>

            <p style='font-weight:bold; font-size:13pt;margin-top:20px; margin-bottom:20px;'>2.2 Participant’s Goals</p>
            <p style='font-size:12pt;'>If the participant’s NDIS plan has been made available, you can refer to the statement of participant’s goals and outline those relevant to the vehicle modification assessment. Consider the benefits for the participant in pursuing their goals through the recommended vehicle modification, as either a driver and/ or passenger.</p>
            <table style='width:100%; border: 1px solid black'>
            <tr>
                <td style='width: 100%; border: 1px solid black;'><p style='margin-top:10px; margin-bottom:10px;'>{{part_2_assesment_participantgoals}}</p></td>
            </tr>
            </table>

            <p style='font-weight:bold; font-size:13pt;margin-top:20px; margin-bottom:20px;'>2.3 Functional Assessment</p>
            <p style='font-size:12pt;'>2.3.1	Outline the specific functional limitation/s related to the participant’s disability that indicate the need for the vehicle modification. Consider indoor/outdoor mobility, transfer function, balance, upper and lower limb function. Summarise or attach relevant assessments that have been undertaken such as cognitive and mobility assessments.</p>
            <table style='width:100%; border: 1px solid black'>
            <tr>
                <td style='width: 100%; border: 1px solid black;'><p style='margin-top:10px; margin-bottom:10px;'>{{part_2_assesment_functional_assessment}}</p></td>
            </tr>
            </table>
            <p style='font-size:12pt; margin-top:10px; margin-bottom:10px;'>2.3.2 What are the spplicant's measurements?</p>

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
            <p style='font-size:12pt; margin-top:10px; margin-bottom:10px;'>2.3.3	Outline any assistive technology in relation to the vehicle modification such as hoists, orthotics/prosthetics and manual or power wheelchairs. Describe the wheelchair specifications the participant will be seated in when travelling or transferring from/into vehicle and any relevant restraints.</p>
            <table style='width:100%; border: 1px solid black'>
            <tr>
                <td style='width: 100%; border: 1px solid black;'><p style='margin-top:10px; margin-bottom:10px;'>{{part_2_wheelchair_specifications}}</p></td>
            </tr>
            </table>
            <p style='font-size:12pt; margin-top:10px; margin-bottom:10px;'>1 To be eligible for vehicle modifications a participant must have physical, sensory and/or cognitive disability that prevents safe driving, accessing or travelling as a passenger in an unmodified vehicle.</p>
            <p style='font-size:12pt; margin-top:10px; margin-bottom:10px;'>2.3.4	Describe the participant’s participation in work/study or community activities. Consider the location of activities and the availability and accessibility of transport options. Consider all options to access the community and the anticipated benefit of vehicle modifications. Are there any comparable support options and / or solutions that would achieve the same outcome, such as hire/ leasing AT?</p>
            <table style='width:100%; border: 1px solid black'>
            <tr>
                <td style='width: 100%; border: 1px solid black;'><p style='margin-top:10px; margin-bottom:10px;'>{{part_2_support_options}}</p></td>
            </tr>
            </table>

            <p style='font-size:12pt; margin-top:10px; margin-bottom:10px;'>2.3.5 Describe the participant’s current driving status and proposed use of the vehicle. i.e. a driver and/or passenger or potential to drive in the future. Provide specific details about seating arrangements and the frequency the participant is the driver and/or the passenger in an average week (e.g. percentage or number of times). Describe any license restrictions if relevant.</p>
            <table style='width:100%; border: 1px solid black'>
            <tr>
                <td style='width: 100%; border: 1px solid black;'><p style='margin-top:10px; margin-bottom:10px;'>{{part_2_participant’scurrentdriving_status}}</p></td>
            </tr>
            </table>
            <p style='font-size:12pt; margin-top:10px; margin-bottom:10px;'>Evidence: If the participant will be driving you must attach the driving assessment report, relevant State medical report forms and a copy of a current licence.</p>
            <table style=' width:100%; border: 1px solid black;'>
            <tr>
            <td style='width:70%; background-color: lightgrey;'>Evidence is required and has been attached. Yes/no</td>
            <td style='width:30%; border: 1px solid black;'>{{part_4_evidence_is_required_and_has_been_attached}}</td>
            </tr>
            <tr>
            <td style='width:70%; background-color: lightgrey;'>Participant is the vehicle passenger only – no evidence required</td>
            <td style='width:30%; border: 1px solid black;'>{{part_4_participant_is_the_vehicle_passenger_only}}</td>
            </tr>
            </table>
            <p style='font-size:12pt; margin-top:10px; margin-bottom:10px;'>2.3.7 Confirm that assistive technology will fit in the proposed vehicle and outline if the predicted needs of the participant are expected to change. Consider dimensions of the vehicle interior and ensure appropriate clearances for circulation and safe use of assistive technology (ie head room clearance), growth and foreseeable changes in function.</p>
            <table style='width:100%; border: 1px solid black'>
            <tr>
                <td style='width: 100%; border: 1px solid black;'><p style='margin-top:10px; margin-bottom:10px;'>{{part_2_dimensionsofthevehicle_interior}}</p></td>
            </tr>
            </table>
            <p style='font-size:12pt; margin-top:10px; margin-bottom:10px;'>2.3.8 Describe any other considerations that have been assessed in relation to vehicle access and transport such as height clearance and circulation space in garage, safe location for transfers, friends/family to assist with transport, use i.e. remote/ metropolitan areas.</p>
            <table style='width:100%; border: 1px solid black'>
            <tr>
                <td style='width: 100%; border: 1px solid black;'><p style='margin-top:10px; margin-bottom:10px;'>{{part_2_relationtovehicleaccessandtransport}}</p></td>
            </tr>
            </table>
            <p style='font-weight:bold; font-size:13pt;margin-top:20px; margin-bottom:20px;'>2.4  Information about the vehicle</p>
            <p style='font-size:12pt;'>Evidence: Please attach a copy of the current registration certification and list the details of the vehicle to be modified where appropriate.</p>
            <table style=' width:100%; border: 1px solid black;'>
            <tr>
            <td style='width:80%; background-color: lightgrey; font-size: 17px;'>Make  Model.</td>
            <td style='width:20%; border: 1px solid black;'>{{part_2_make_model}}</td>
            </tr>
            <tr>
            <td style='width:80%; background-color: lightgrey; font-size: 17px;'>Year of Manufacture.</td>
            <td style='width:20%; border: 1px solid black;'>{{part_2_yearofmanufacture}}</td>
            </tr>
            <tr>
            <td style='width:80%; background-color: lightgrey; font-size: 17px;'>Current kilometres travelled (including date of reading).</td>
            <td style='width:20%; border: 1px solid black;'>{{part_2_currentkilometres_travelled}}</td>
            </tr>
            <tr>
            <td style='width:80%; background-color: lightgrey; font-size: 17px;'>Ownership  of the vehicle and date of purchase.</td>
            <td style='width:20%; border: 1px solid black;'>{{part_2_ownershipanddateof_purchase}}</td>
            </tr>
            <tr>
            <td style='width:80%; background-color: lightgrey; font-size: 17px;'>Permission of the owner of the vehicle for proposed modifications. Evidence: Attach a signed letter from the owner or the person to whom the vehicle is registered, or to be registered, giving permission for the disability access modifications.</td>
            <td style='width:20%; border: 1px solid black;'>{{part_2_permissionoftheownerforproposed_modifications}}</td>
            </tr>
            <tr>
            <td style='width:80%; background-color: lightgrey; font-size: 17px;'>How frequently does the participant have access to this vehicle? Is it used by others? For how many years/other time period is it expected that the participant have access to the vehicle?  Evidence: Attach a signed letter from the owner or the person to whom the vehicle is registered, or to be registered, confirming the participant’s access to the vehicle.</td>
            <td style='width:20%; border: 1px solid black;'>{{part_2_participanthaveaccesstothis_vehicle}}</td>
            </tr>
            <tr>
            <td style='width:80%; background-color: lightgrey; font-size: 17px;'>Condition of the vehicle (if required), evidence of road worthiness and the expected lifespan of the vehicle (e.g. via inspection report by the state Automobile Club) is required if the vehicle is over the age and kilometres generally considered suitable for the NDIS to fund vehicle modifications per the NDIS Vehicle Modification Operational Guideline</td>
            <td style='width:20%; border: 1px solid black;'>{{part_2_evidenceofroad_worthiness}}</td>
            </tr>
            <tr>
            <td style='width:80%; background-color: lightgrey; font-size: 17px;'>Vehicle is second-hand and/or already modified – Age and condition of the modification.</td>
            <td style='width:20%; border: 1px solid black;'>{{part_2_ageandconditionofthe_modification}}</td>
            </tr>
            <tr>
            <td style='width:80%; background-color: lightgrey; font-size: 17px;'>Year of Manufacture.</td>
            <td style='width:20%; border: 1px solid black;'></td>
            </tr>
            <tr>
            <td style='width:80%; background-color: lightgrey; font-size: 17px;'>Evidence of the age and condition of the modification.</td>
            <td style='width:20%; border: 1px solid black;'>{{part_2_evidenceoftheageandconditionofthe_modification}}</td>
            </tr>
            <tr>
            <td style='width:80%; background-color: lightgrey; font-size: 17px;'>Vehicle is imported.</td>
            <td style='width:20%; border: 1px solid black;'>{{part_2_vehicleis_imported}}</td>
            </tr>
            <tr>
            <td style='width:80%; background-color: lightgrey; font-size: 17px;'>Evidence that the vehicle (as modified) meets the requirements for registration in the state or territory of use. Describe:</td>
            <td style='width:20%; border: 1px solid black;'>{{part_2_vehiclemeetsthe_requirements}}</td>
            </tr>
            </table>
            <p style='font-size:12pt; margin-top:10px; margin-bottom:10px;'>1   Note if the participant does not already own the vehicle and the NDIS finds that in principle the proposed modification meets the NDIS reasonable and necessary criteria, funding may be approved in the participant’s NDIS plan for this support pending evidence of vehicle purchase and AT Assessor recommendations.</p>
            <p style='margin-top:10px'></p>";

      $section3 = "<table style='background-color:#7209B7; border:none; width:100%;'>
<tr>
    <td>
        <p style='font-size:12pt; font-weight:bold; margin-top:5px; margin-bottom:5px; color: white'> PART 3 – Exploration of Options</p>
    </td>
</tr>
</table>
<p style='font-weight:bold; font-size:13pt;margin-top:20px; margin-bottom:20px;'>3.1   Evaluation of modification options for achievement of participant’s goals</p>
<p style='font-size:12pt; margin-top:10px; margin-bottom:10px;'>Outline information on alternatives considered to achieve goal/s including use of other supports and approaches and reasons why they were not considered suitable. Where trials have been conducted please give details of where the trials took place and for how long.</p>
<p style='font-size:12pt; margin-top:10px; margin-bottom:10px;'>Note- that where a participant is able to transfer in and out of a wheelchair, it is expected that options that allow this transfer are considered first. Where a participant is exploring a vehicle to purchase, it is expected that the vehicle requiring the lowest cost modification, and second hand already modified vehicles which meet the guidelines set out in the NDIS Vehicle Modifications Operational Guideline, are considered first.</p>
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
                Describe features / functions of vehicle modification and other options trialled to pursue goal achievement
            </td>
            <td
                style='border: 1px solid lightslategray; padding: 10px; width: 20%; background-color: lightgrey; font-size: 17px'>
                Trialled (T) or Considered (C) include details
            </td>
            <td
                style='border: 1px solid lightslategray; padding: 10px; width: 20%; background-color: lightgrey; font-size: 17px'>
                Describe why not considered suitable (not applicable for preferred option)
            </td>
            <td
                style='border: 1px solid lightslategray; padding: 10px; width: 20%; background-color: lightgrey; font-size: 17px'>
                Cost (include training)
            </td>

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
</table>";
      $section4 = "<p style='margin-top:10px'></p>
<table style='background-color:#7209B7; border:none; width:100%;'>
<tr>
    <td>
        <p style='font-size:12pt; font-weight:bold; margin-top:5px; margin-bottom:5px; color: white'>  PART 4 – Recommendation</p>
    </td>
</tr>
</table>
<p style='font-weight:bold; font-size:13pt;margin-top:20px; margin-bottom:20px;'>4.1	Preferred Option(s): Result of options from perspective Participant and Assessor.</p>
<p style='margin-bottom: 10px'>Description of proposed modification/s including reason for each modification component recommended, and evidence supporting the recommended options as the most suitable/appropriate to assist the participant pursue their goals. Consider long term benefit and future needs, change/adjustment to personal care support need etc).</p>
<table style='width:100%; border: 1px solid black'>
<tr>
    <td style='width: 100%; border: 1px solid black;'><p style='margin-top:10px; margin-bottom:10px;'>{{part_4_desc_of_eadh_modificaion}}</p></td>
</tr>
</table>
<p style='margin-bottom: 10px;'>All quotes must be itemised to show the cost of the individual components of the recommended modification. The following are attached to this assessment:</p>
<table style=' width:100%; border: 1px solid black;'>
<tr>
<td style='width:80%; background-color: lightgrey;'>At least one quotation for modifications up to $15 000 value. Yes or No</td>
<td style='width:20%; border: 1px solid black;'>{{part_4_atleat_one_quotation}}</td>
</tr>
<tr>
<td style='width:80%; background-color: lightgrey;'>Two quotations $15 000 value. Yes or No</td>
<td style='width:20%; border: 1px solid black;'>{{part_4_two_quotations}}</td>
</tr>
<tr>
<td style='width:80%; background-color: lightgrey;'>The above specification is consistent with the preferred option agreed between the participant and the AT assessor. Yes or No</td>
<td style='width:20%; border: 1px solid black;'>{{part_4_preferred_option_agreed_between_participant_and_at}}</td>
</tr>
</table>
<p style='font-size: 12pt; margin-top:10px: margin-bottom:20px'>(if no, provide details of points of difference) </p>
<table style='width:100%; border: 1px solid black'>
<tr>
    <td style='width: 100%; border: 1px solid black;'><p style='margin-top:10px; margin-bottom:10px;'>{{part_4_provide_details_of_point_of_difference}}</p></td>
</tr>
</table>
<p style='font-weight:bold; font-size:13pt;margin-top:20px; margin-bottom:20px;'>4.2	Participant seating in vehicle.</p>

<table style=' width:100%; border: 1px solid black;'>
<tr>
<td style='width:80%; background-color: lightgrey; font-size: 17px;'>Participant will be travelling in a car seat: Yes/No  </td>
<td style='width:20%; border: 1px solid black;'>{{part_4_participant_travelling_in_car_seat}}</td>
</tr>
</table>
<p style='font-size:12pt; margin-top:10px; margin-bottom:10px;'>If yes, give details (e.g. standard or modified, and what Australian Standards you, as the Assessor of the vehicle modification, have adhered to when assessing the car seat (describe the features of the modified car seat and relevant standard)</p>
<table style=' width:100%; border: 1px solid black;'>
<tr>
<td style='width:80%; background-color: lightgrey; font-size: 17px;'>Is the wheelchair to be stowed?</td>
<td style='width:20%; border: 1px solid black;'>{{part_4_wheelchair_to_be_stowed}}</td>
</tr>
<tr>
<td style='width:80%; background-color: lightgrey; font-size: 17px;'>Will it be stowed by the participant? Yes/No</td>
<td style='width:20%; border: 1px solid black;'>{{part_4_will_stowed_by_participant}}</td>
</tr>
<tr>
<td style='width:80%; background-color: lightgrey; font-size: 17px;'>Is it able to be appropriately secured? Yes/No</td>
<td style='width:20%; border: 1px solid black;'>{{part_4_able_to_appropriately_secured}}</td>
</tr>
<tr>
<td style='width:80%; background-color: lightgrey; font-size: 17px;'>Participant will be travelling in a wheelchair: Yes/No</td>
<td style='width:20%; border: 1px solid black;'>{{part_4_participant_will_be_travelling_in_wheelchair}}</td>
</tr>
<tr>
<td style='width:80%; background-color: lightgrey; font-size: 17px;'>Does this wheelchair meet safety requirements for use in a vehicle in the jurisdiction where the participant lives? Yes/No</td>
<td style='width:20%; border: 1px solid black;'>{{part_4_wheelchair_meet_safety_requirements}}</td>
</tr>
</table>
<p style='margin-bottom: 10px'>Give details (e.g. headrest; technical details of crash testing of this model; compliant tie- down points/brackets; compliant use of current /proposed vehicle occupant restraint system).</p>
<table style='width:100%; border: 1px solid black'>
<tr>
    <td style='width: 100%; border: 1px solid black;'><p style='margin-top:10px; margin-bottom:10px;'>{{part_4_give_details_eg_headrest}}</p></td>
</tr>
</table>
<table style=' width:100%; border: 1px solid black;'>
<tr>
<td style='width:80%; background-color: lightgrey; font-size: 17px;'>Has the participant been advised of the requirements, relevant information and risks? Yes/No</td>
<td style='width:20%; border: 1px solid black;'>{{part_4_participant_been_advised_of_requirements}}</td>
</tr>
</table>
<p style='margin-bottom: 10px'>3  A single quote for work above $15 000 may be authorised where other appropriate procurement processes assure the NDIA of value for money</p>
<p style='font-weight:bold; font-size:13pt; margin-top:20px; margin-bottom:20px;'>4.3	Describe any other factors that need resolution in order to implement the vehicle modifications such as a behavioural management plan for restrictive practice.</p>
<table style='width: 100%;'>
<tbody>
<tr>
<td
    style='border: 1px solid lightslategray; padding: 10px; background-color: lightgrey; font-size: 17px; width:50%'>
    Factor Issues</td>
<td
    style='border: 1px solid lightslategray; padding: 10px; background-color: lightgrey; font-size: 17px; width:50%'>
    Mitigation / Option
</td>

</tr>
<tr>
<td style='border: 1px solid lightslategray; padding: 10px; width:50%;'>{{part_4_factor_issue1}}</td>
<td style='border: 1px solid lightslategray; padding: 10px; width:50%;'>{{part_4_mitigation_option1}}</td>

</tr>
<tr>

<td style='border: 1px solid lightslategray; padding: 10px; width:50%;'>{{part_4_factor_issue2}}</td>
<td style='border: 1px solid lightslategray; padding: 10px; width:50%;'>{{part_4_mitigation_option2}}</td>

</tr>
<tr>

<td style='border: 1px solid lightslategray; padding: 10px; width:50%;'>{{part_4_factor_issue3}}</td>
<td style='border: 1px solid lightslategray; padding: 10px; width:50%;'>{{part_4_mitigation_option3}}</td>

</tr>
</tbody>
</table>
<table style=' width:100%; border: 1px solid black;'>
<tr>
<td style='width:80%; background-color: lightgrey; font-size: 17px;'>Is the participant at immediate safety or other risk? Yes or No</td>
<td style='width:20%; border: 1px solid black;'>{{part_4_participant_at_immediate_risk_or_safety}}</td>
</tr>
</table>

       <p style='margin-top:10px; font-size:12pt;'>If yes, describe any identified short-term recommendations</p>
                <table style='width:100%; border: 1px solid black'>
                    <tr>
                        <td style='width: 100%; border: 1px solid black;'><p style='margin-top:10px; margin-bottom:10px;'>{{part_4_if_yes_describe_any_identified_short_term_recommendations}}</p></td>
                    </tr>
                </table>
                <p style='font-weight:bold; font-size:13pt; margin-top:20px; margin-bottom:20px;'>4.4	Describe any additional features requested by the participant unlikely to meet Sect 34. criteria and be assessed as reasonable and necessary?</p>
                <table style='width: 100%;'>
                <tbody>
                <tr>
                    <td
                        style='border: 1px solid lightslategray; padding: 10px; background-color: lightgrey; font-size: 17px; width:50%'>
                        Item (s) </td>
                    <td
                        style='border: 1px solid lightslategray; padding: 10px; background-color: lightgrey; font-size: 17px; width:50%'>
                        Cost
                    </td>
                
                </tr>
                <tr>
                    <td style='border: 1px solid lightslategray; padding: 10px; width:50%;'>{{part_4_item1}}</td>
                    <td style='border: 1px solid lightslategray; padding: 10px; width:50%;'>{{part_4_cost1}}</td>
                
                </tr>
                <tr>
                    <td style='border: 1px solid lightslategray; padding: 10px; width:50%;'>{{part_4_item2}}</td>
                    <td style='border: 1px solid lightslategray; padding: 10px; width:50%;'>{{part_4_cost2}}</td>
                </tr>
                <tr>
                     <td style='border: 1px solid lightslategray; padding: 10px; width:50%;'>{{part_4_item3}}</td>
                     <td style='border: 1px solid lightslategray; padding: 10px; width:50%;'>{{part_4_cost3}}</td>
               </tr>
                <tr>

                    <td style='background-color: lightgrey; border: 1px solid lightslategray; padding: 10px; width:50%;'>
                    Does the participant agree to self-fund these items? Yes or No
                    </td>
                    <td style='border: 1px solid lightslategray; padding: 10px; width:50%;'>{{part_4_participant_to_self_fund_these_items}}</td>
                </tr>
                </tbody>
                </table>
                <p style='font-weight:bold; font-size:13pt; margin-top:20px; margin-bottom:20px;'>4.5	Repairs and Maintenance</p>

                <table style=' width:100%; border: 1px solid black;'>
                <tr>
                <td style='width:80%; background-color: lightgrey; font-size: 17px;'>Will the participant have comprehensive vehicle insurance to cover repairs or replacement of the vehicle and vehicle modifications in the event of accidents or theft? Yes or No</td>
                <td style='width:20%; border: 1px solid black;'>{{part_4_participant__has_comprehensive_vehicle_insurance}}</td>
                </tr>
                <tr>
                <td style='width:80%; background-color: lightgrey; font-size: 17px;'>Is the participant aware that maintenance of the vehicle, including vehicle features not related to the disability modification, are not the responsibility of the NDIS to fund as they are an everyday living cost e.g. engine, exterior and non-disability specific interior features are considered an everyday cost under Section 34(1)(e)?  Yes or No</td>
                <td style='width:20%; border: 1px solid black;'>{{part_4_participant_aware_that_maintenance_of_the_vehicle}}</td>
                </tr>
                </table>
                <p style='margin-top:10px'></p>";

      $section5 = "<table style='background-color:#7209B7; border:none; width:100%;'>
            <tr>
                <td>
                    <p style='font-size:12pt; font-weight:bold; margin-top:5px; margin-bottom:5px; color: white'>PART 5 – Details of Assistive Technology Assessor</p>
                </td>
            </tr>
            </table>
            <p style='font-weight:bold; font-size:13pt;margin-top:20px; margin-bottom:20px;'>DECLARATION</p>
            <p style='margin-bottom: 10px'>(indicate all relevant sections that apply)</p>
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
                <tr>
                <td style='border: 1px solid lightslategray; padding: 10px; width: 40%;background-color: lightgrey; font-size: 17px'>State/territory where accredited.t</td>
                <td style='border: 1px solid lightslategray; padding: 10px'>{{part_5_statewhere_accredited}}</td>
                </tr>
            </tbody>
            </table>
            <p style='font-weight:bold; font-size:13pt;margin-top:20px; margin-bottom:20px;'>Vehicle Modifiers Details  </p>
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
                <td style='border: 1px solid lightslategray; padding: 10px'>{{part_5_vehiclemodifiers_name}}</td>
                </tr>
                <tr>
                <td style='border: 1px solid lightslategray; padding: 10px; width: 40%;background-color: lightgrey; font-size: 17px'>NDIS Provider Registration number (where applicable)</td>
                <td style='border: 1px solid lightslategray; padding: 10px'>{{part_5_vehiclemodifiersndisproviderregistration_number}}</td>
                </tr>
                <tr>
                <td style='border: 1px solid lightslategray; padding: 10px; width: 40%; background-color: lightgrey; font-size: 17px'>Phone</td>
                <td style='border: 1px solid lightslategray; padding: 10px'>{{part_5_vehiclemodifiersphone_number}}</td>
                </tr>
                <tr>
                <td style='border: 1px solid lightslategray; padding: 10px; width: 40%;background-color: lightgrey; font-size: 17px'>Email</td>
                <td style='border: 1px solid lightslategray; padding: 10px'>{{part_5_vehiclemodifiersemail_address}}</td>
                </tr>
                <tr>
                <td style='border: 1px solid lightslategray; padding: 10px; width: 40%;background-color: lightgrey; font-size: 17px'>Signature</td>
                <td style='border: 1px solid lightslategray; padding: 10px'>{{part_5_vehiclemodifiersemail_signature}}</td>
                </tr>
                <tr>
                <td style='border: 1px solid lightslategray; padding: 10px; width: 40%;background-color: lightgrey; font-size: 17px'>Qualification</td>
                <td style='border: 1px solid lightslategray; padding: 10px'>{{part_5_vehiclemodifiersqualification}}</td>
                </tr>
                <tr>
                <td style='border: 1px solid lightslategray; padding: 10px; width: 40%;background-color: lightgrey; font-size: 17px'>Date of Assessment(s)</td>
                <td style='border: 1px solid lightslategray; padding: 10px'>{{part_5_vehiclemodifiersdate_assessment}}</td>
                </tr>
                <tr>
                <td style='border: 1px solid lightslategray; padding: 10px; width: 40%;background-color: lightgrey; font-size: 17px'>Date of Report</td>
                <td style='border: 1px solid lightslategray; padding: 10px'>{{part_5_vehiclemodifiersreportDate}}</td>
                </tr>
                <tr>
                <td style='border: 1px solid lightslategray; padding: 10px; width: 40%;background-color: lightgrey; font-size: 17px'>State/territory where accredited.t</td>
                <td style='border: 1px solid lightslategray; padding: 10px'>{{part_5_vehiclemodifiersstatewhere_accredited}}</td>
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
            "label_3":"Describe the participant’s current status which may include diagnosis, prognosis, co-existing conditions, disability , personal and instrumental activities of daily living, formal and informal support arrangements and life transitions.",
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
            "label_3":"If the participant’s NDIS plan has been made available, you can refer to the statement of participant’s goals and outline those relevant to the vehicle modification assessment. Consider the benefits for the participant in pursuing their goals through the recommended vehicle modification, as either a driver and/ or passenger.",
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
                                       "label_2":".3.1 Outline the specific functional limitation/s related to the participant’s disability that indicate the need for the vehicle modification. Consider indoor/outdoor mobility, transfer function, balance, upper and lower limb function. Summarise or attach relevant assessments that have been undertaken such as cognitive and mobility assessments.",
                                       "label_3":"",
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
                                       "label_2":"2.3.2 What are the applicant’s measurements?",
                                       "label_3":"",
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
                                       "label_1":"",
                                       "label_2":"2.3.3 Outline any assistive technology in relation to the vehicle modification such as hoists, orthotics/prosthetics and manual or power wheelchairs. Describe the wheelchair specifications the participant will be seated in when travelling or transferring from/into vehicle and any relevant restraints.",
                                       "label_3":"",
                                       "placeholder":"Full Name",
                                       "className":"form-control",
                                       "name":"part_2_heading_extra_5",
                                       "access":false
                                    },
                                    {
                                    "type":"textarea",
                                    "required":false,
                                    "label":"",
                                    "placeholder":"Enter Wheelchair Specifications",
                                    "className":"form-control",
                                    "name":"part_2_wheelchair_specifications",
                                    "access":false,
                                    "subtype":"text"
                                    },
                                    {
                                       "type":"heading",
                                       "required":false,
                                       "label_1":"",
                                       "label_2":"2.3.4 Describe the participant’s participation in work/study or community activities. Consider the location of activities and the availability and accessibility of transport options. Consider all options to access the community and the anticipated benefit of vehicle modifications. Are there any comparable support options and / or solutions that would achieve the same outcome, such as hire/ leasing AT?",
                                       "label_3":"",
                                       "placeholder":"Full Name",
                                       "className":"form-control",
                                       "name":"part_2_heading_extra_6",
                                       "access":false
                                    },
                                    {
                                    "type":"textarea",
                                    "required":false,
                                    "label":"",
                                    "placeholder":"Enter Support Options",
                                    "className":"form-control",
                                    "name":"part_2_support_options",
                                    "access":false,
                                    "subtype":"text"
                                    },
                                    {
                                       "type":"heading",
                                       "required":false,
                                       "label_1":"",
                                       "label_2":"2.3.5 Describe the participant’s current driving status and proposed use of the vehicle. i.e. a driver and/or passenger or potential to drive in the future. Provide specific details about seating arrangements and the frequency the participant is the driver and/or the passenger in an average week (e.g. percentage or number of times). Describe any license restrictions if relevant.",
                                       "label_3":"",
                                       "placeholder":"Full Name",
                                       "className":"form-control",
                                       "name":"part_2_heading_extra_7",
                                       "access":false
                                    },
                                    {
                                    "type":"textarea",
                                    "required":false,
                                    "label":"",
                                    "placeholder":"Enter Participant’s Current driving status",
                                    "className":"form-control",
                                    "name":"part_2_participant’scurrentdriving_status",
                                    "access":false,
                                    "subtype":"text"
                                    },
                                    {
                                       "type":"heading",
                                       "required":false,
                                       "label_1":"",
                                       "label_2":"2.3.6 Evidence: If the participant will be driving you must attach the driving assessment report, relevant State medical report forms and a copy of a current licence.",
                                       "label_3":"",
                                       "placeholder":"Full Name",
                                       "className":"form-control",
                                       "name":"part_2_heading_extra_8",
                                       "access":false
                                    },
                                    {
                                       "type":"checkbox-group",
                                       "required":false,
                                       "label":"Evidence is required and has been attached. Yes/no",
                                       "toggle":false,
                                       "inline":false,
                                       "name":"part_4_evidence_is_required_and_has_been_attached",
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
                                       "label":"Participant is the vehicle passenger only – no evidence required",
                                       "toggle":false,
                                       "inline":false,
                                       "name":"part_4_participant_is_the_vehicle_passenger_only",
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
                                       "label_2":"2.3.7 Confirm that assistive technology will fit in the proposed vehicle and outline if the predicted needs of the participant are expected to change. Consider dimensions of the vehicle interior and ensure appropriate clearances for circulation and safe use of assistive technology (ie head room clearance), growth and foreseeable changes in function.",
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
                                    "placeholder":"Enter Dimensions of the Vehicle Interior",
                                    "className":"form-control",
                                    "name":"part_2_dimensionsofthevehicle_interior",
                                    "access":false,
                                    "subtype":"text"
                                    },
                                    {
                                       "type":"heading",
                                       "required":false,
                                       "label_1":"",
                                       "label_2":"2.3.8 Describe any other considerations that have been assessed in relation to vehicle access and transport such as height clearance and circulation space in garage, safe location for transfers, friends/family to assist with transport, use i.e. remote/ metropolitan areas.",
                                       "label_3":"",
                                       "placeholder":"Full Name",
                                       "className":"form-control",
                                       "name":"part_2_heading_extra_10",
                                       "access":false
                                    },
                                    {
                                    "type":"textarea",
                                    "required":false,
                                    "label":"",
                                    "placeholder":"Enter Relation To Vehicle Access and Transport",
                                    "className":"form-control",
                                    "name":"part_2_relationtovehicleaccessandtransport",
                                    "access":false,
                                    "subtype":"text"
                                    },
                                    {
                                       "type":"heading",
                                       "required":false,
                                       "label_1":"2.4 Information about the vehicle",
                                       "label_2":"Evidence: Please attach a copy of the current registration certification and list the details of the vehicle to be modified where appropriate.",
                                       "label_3":"",
                                       "placeholder":"Full Name",
                                       "className":"form-control",
                                       "name":"part_2_heading_extra_11",
                                       "access":false
                                    },
                                    {
                                    "type":"text",
                                    "required":false,
                                    "label":"Make/Model",
                                    "placeholder":"Enter Make/Model",
                                    "className":"form-control",
                                    "name":"part_2_make_model",
                                    "access":false,
                                    "subtype":"text"
                                    },
                                    {
                                    "type":"text",
                                    "required":false,
                                    "label":"Year of Manufacture",
                                    "placeholder":"Enter Year of Manufacture",
                                    "className":"form-control",
                                    "name":"part_2_yearofmanufacture",
                                    "access":false,
                                    "subtype":"text"
                                    },
                                    {
                                    "type":"text",
                                    "required":false,
                                    "label":"Current kilometres travelled (including date of reading)",
                                    "placeholder":"Enter Current kilometres travelled",
                                    "className":"form-control",
                                    "name":"part_2_currentkilometres_travelled",
                                    "access":false,
                                    "subtype":"text"
                                    },
                                    {
                                    "type":"date",
                                    "required":false,
                                    "label":"OOwnership of the vehicle and date of purchase",
                                    "placeholder":"Enter Ownership  of the vehicle and date of purchase",
                                    "className":"form-control",
                                    "name":"part_2_ownershipanddateof_purchase",
                                    "access":false,
                                    "subtype":"text"
                                    },
                                    {
                                    "type":"text",
                                    "required":false,
                                    "label":"Permission of the owner of the vehicle for proposed modifications. Evidence: Attach a signed letter from the owner or the person to whom the vehicle is registered, or to be registered, giving permission for the disability access modifications",
                                    "placeholder":"Permission of the owner of the vehicle for proposed modifications",
                                    "className":"form-control",
                                    "name":"part_2_permissionoftheownerforproposed_modifications",
                                    "access":false,
                                    "subtype":"text"
                                    }
                                    ,
                                    {
                                       "type":"heading",
                                       "required":false,
                                       "label_1":"",
                                       "label_2":"How frequently does the participant have access to this vehicle? Is it used by others? For how many years/other time period is it expected that the participant have access to the vehicle? \nEvidence: Attach a signed letter from the owner or the person to whom the vehicle is registered, or to be registered, confirming the participant’s access to the vehicle.",
                                       "label_3":"",
                                       "placeholder":"Full Name",
                                       "className":"form-control",
                                       "name":"part_2_heading_extra_12",
                                       "access":false
                                    },
                                    {
                                       "type":"textarea",
                                       "required":false,
                                       "label":"",
                                       "placeholder":"How frequently does the participant have access to this vehicle?",
                                       "className":"form-control",
                                       "name":"part_2_participanthaveaccesstothis_vehicle",
                                       "access":false,
                                       "subtype":"text"
                                    },
                                    {
                                    "type":"checkbox-group",
                                    "required":false,
                                    "label":"Condition of the vehicle (if required), evidence of road worthiness and the expected lifespan of the vehicle (e.g. via inspection report by the state Automobile Club) is required if the vehicle is over the age and kilometres generally considered suitable for the NDIS to fund vehicle modifications per the NDIS Vehicle Modification Operational Guideline.",
                                    "className":"form-control",
                                    "name":"part_2_evidenceofroad_worthiness",
                                    "access":false,
                                    "subtype":"text"
                                    }
                                    ,
                                    {
                                    "type":"text",
                                    "required":false,
                                    "label":"Vehicle is second-hand and/or already modified – Age and condition of the modification.",
                                    "placeholder":"Enter Age and condition of the modification",
                                    "className":"form-control",
                                    "name":"part_2_ageandconditionofthe_modification",
                                    "access":false,
                                    "subtype":"text"
                                    }
                                    ,
                                    {
                                    "type":"checkbox-group",
                                    "required":false,
                                    "label":"Evidence of the age and condition of the modification.",
                                    "className":"form-control",
                                    "name":"part_2_evidenceoftheageandconditionofthe_modification",
                                    "access":false,
                                    "subtype":"text"
                                    }
                                    ,
                                    {
                                    "type":"text",
                                    "required":false,
                                    "label":"Vehicle is imported",
                                    "placeholder":"Enter vehicle is imported",
                                    "className":"form-control",
                                    "name":"part_2_vehicleis_imported",
                                    "access":false,
                                    "subtype":"text"
                                    }
                                    ,
                                    {
                                    "type":"textarea",
                                    "required":false,
                                    "label":"Evidence that the vehicle (as modified) meets the requirements for registration in the state or territory of use. Describe:",
                                    "placeholder":"Enter Evidence that the vehicle (as modified) meets the requirements for registration in the state or territory of use",
                                    "className":"form-control",
                                    "name":"part_2_vehiclemeetsthe_requirements",
                                    "access":false,
                                    "subtype":"text"
                                    }
                                    ]';
      $form_fields3 = '[
         {
            "type":"heading",
            "required":false,
            "label_1":"3.1 Evaluation of modification options for achievement of participant’s goals",
            "label_2":"",
            "label_3":"Outline information on alternatives considered to achieve goal/s including use of other supports and approaches and reasons why they were not considered suitable. Where trials have been conducted please give details of where the trials took place and for how long. \nNote- that where a participant is able to transfer in and out of a wheelchair, it is expected that options that allow this transfer are considered first. Where a participant is exploring a vehicle to purchase, it is expected that the vehicle requiring the lowest cost modification, and second hand already modified vehicles which meet the guidelines set out in the NDIS Vehicle Modifications Operational Guideline, are considered first.",
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
               "label":"Describe features / functions of vehicle modification and other options trialled to pursue goal achievement",
               "placeholder":"Enter Potential Option",
               "className":"form-control",
               "name":"part_3_con_option_potential_option1",
               "access":false,
               "subtype":"text"
            },
            {
               "type":"text",
               "required":false,
               "label":"Trialled (T) or Considered (C) include details",
               "placeholder":"Enter Trial Details",
               "className":"form-control",
               "name":"part_3_con_option_trial_option1",
               "access":false,
               "subtype":"text"
            },
            {
               "type":"text",
               "required":false,
               "label":"Describe why not considered suitable (not applicable for preferred option)",
               "placeholder":"Enter Disadvantage",
               "className":"form-control",
               "name":"part_3_con_option_disdvantage1",
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
               "label":"Describe features / functions of vehicle modification and other options trialled to pursue goal achievement",
               "placeholder":"Enter Potential Option",
               "className":"form-control",
               "name":"part_3_con_option_potential_option2",
               "access":false,
               "subtype":"text"
            },
            {
               "type":"text",
               "required":false,
               "label":"Trialled (T) or Considered (C) include details",
               "placeholder":"Enter Trial Details",
               "className":"form-control",
               "name":"part_3_con_option_trial_option2",
               "access":false,
               "subtype":"text"
            },
            {
               "type":"text",
               "required":false,
               "label":"Describe why not considered suitable (not applicable for preferred option)",
               "placeholder":"Enter Disadvantage",
               "className":"form-control",
               "name":"part_3_con_option_disdvantage2",
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
               "label":"Describe features / functions of vehicle modification and other options trialled to pursue goal achievement",
               "placeholder":"Enter Potential Option",
               "className":"form-control",
               "name":"part_3_con_option_potential_option3",
               "access":false,
               "subtype":"text"
            },
            {
               "type":"text",
               "required":false,
               "label":"Trialled (T) or Considered (C) include details",
               "placeholder":"Enter Trial Details",
               "className":"form-control",
               "name":"part_3_con_option_trial_option3",
               "access":false,
               "subtype":"text"
            },
            {
               "type":"text",
               "required":false,
               "label":"Describe why not considered suitable (not applicable for preferred option)",
               "placeholder":"Enter Disadvantage",
               "className":"form-control",
               "name":"part_3_con_option_disdvantage3",
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
               "label":"Describe features / functions of vehicle modification and other options trialled to pursue goal achievement",
               "placeholder":"Enter Potential Option",
               "className":"form-control",
               "name":"part_3_con_option_potential_option4",
               "access":false,
               "subtype":"text"
            },
            {
               "type":"text",
               "required":false,
               "label":"Trialled (T) or Considered (C) include details",
               "placeholder":"Enter Trial Details",
               "className":"form-control",
               "name":"part_3_con_option_trial_option4",
               "access":false,
               "subtype":"text"
            },
            {
               "type":"text",
               "required":false,
               "label":"Describe why not considered suitable (not applicable for preferred option)",
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
               "name":"part_3_con_option_cost4",
               "access":false,
               "subtype":"text"
            }
         ]';

      $form_fields4 = '[
         {
            "type":"heading",
            "required":false,
            "label_1":"4.1 Preferred Option(s): Result of options from perspective Participant and Assessor",
            "label_2":"",
            "label_3":"Description of proposed modification/s including reason for each modification component recommended, and evidence supporting the recommended options as the most suitable/appropriate to assist the participant pursue their goals. Consider long term benefit and future needs, change/adjustment to personal care support need etc).",
            "placeholder":"Full Name",
            "className":"form-control",
            "name":"part_4_heading_extra_1",
            "access":false
         },
            {
               "type":"textarea",
               "required":false,
               "label":"",
               "placeholder":"Description of proposed modification/s including reason for each modification",
               "className":"form-control",
               "name":"part_4_desc_of_eadh_modificaion",
               "access":false,
               "subtype":"textarea"
            },
            {
               "type":"heading",
               "required":false,
               "label_1":"",
               "label_2":"",
               "label_3":"All quotes must be itemised to show the cost of the individual components of the recommended modification. The following are attached to this assessment:",
               "placeholder":"Full Name",
               "className":"form-control",
               "name":"part_4_heading_extra_2",
               "access":false
            },
            {
               "type":"checkbox-group",
               "required":false,
               "label":"At least one quotation for modifications up to $15 000 value. Yes or No",
               "className":"form-control",
               "name":"part_4_atleat_one_quotation",
               "access":false,
               "subtype":"textarea"
            },
            {
               "type":"checkbox-group",
               "required":false,
               "label":"Two quotations  > $15 000 value. Yes or No",
               "className":"form-control",
               "name":"part_4_two_quotations",
               "access":false,
               "subtype":"textarea"
            },
            {
               "type":"checkbox-group",
               "required":false,
               "label":"The above specification is consistent with the preferred option agreed between the participant and the AT assessor. Yes or No",
               "className":"form-control",
               "name":"part_4_preferred_option_agreed_between_participant_and_at",
               "access":false,
               "subtype":"textarea"
            },
            {
               "type":"heading",
               "required":false,
               "label_1":"",
               "label_2":"",
               "label_3":"(if no, provide details of points of difference)",
               "placeholder":"Full Name",
               "className":"form-control",
               "name":"part_4_heading_extra_3",
               "access":false
            },
            {
               "type":"textarea",
               "required":false,
               "label":"",
               "placeholder":"if no, provide details of points of difference",
               "className":"form-control",
               "name":"part_4_provide_details_of_point_of_difference",
               "access":false,
               "subtype":"textarea"
            },
            {
               "type":"heading",
               "required":false,
               "label_1":"4.2 Participant seating in vehicle",
               "label_2":"",
               "label_3":"",
               "placeholder":"Full Name",
               "className":"form-control",
               "name":"part_4_heading_extra_4",
               "access":false
            },
            {
               "type":"checkbox-group",
               "required":false,
               "label":"Participant will be travelling in a car seat: Yes/No  ",
               "className":"form-control",
               "name":"part_4_participant_travelling_in_car_seat",
               "access":false,
               "subtype":"textarea"
            },
            {
               "type":"heading",
               "required":false,
               "label_1":"",
               "label_2":"",
               "label_3":"If yes, give details (e.g. standard or modified, and what Australian Standards you, as the Assessor of the vehicle modification, have adhered to when assessing the car seat (describe the features of the modified car seat and relevant standard)",
               "placeholder":"Full Name",
               "className":"form-control",
               "name":"part_4_heading_extra_4",
               "access":false
            },
            {
               "type":"checkbox-group",
               "required":false,
               "label":"Is the wheelchair to be stowed?",
               "className":"form-control",
               "name":"part_4_wheelchair_to_be_stowed",
               "access":false,
               "subtype":"textarea"
            },
            {
               "type":"checkbox-group",
               "required":false,
               "label":"Will it be stowed by the participant? Yes/No",
               "className":"form-control",
               "name":"part_4_will_stowed_by_participant",
               "access":false,
               "subtype":"textarea"
            },
            {
               "type":"checkbox-group",
               "required":false,
               "label":"Is it able to be appropriately secured? Yes/No",
               "className":"form-control",
               "name":"part_4_able_to_appropriately_secured",
               "access":false,
               "subtype":"text"
            },
            {
               "type":"checkbox-group",
               "required":false,
               "label":"Participant will be travelling in a wheelchair: Yes/No",
               "className":"form-control",
               "name":"part_4_participant_will_be_travelling_in_wheelchair",
               "access":false,
               "subtype":"text"
            },
            {
               "type":"checkbox-group",
               "required":false,
               "label":"Does this wheelchair meet safety requirements for use in a vehicle in the jurisdiction where the participant lives? Yes/No",
               "className":"form-control",
               "name":"part_4_wheelchair_meet_safety_requirements",
               "access":false,
               "subtype":"text"
            },
            {
               "type":"heading",
               "required":false,
               "label_1":"",
               "label_2":"",
               "label_3":"Give details (e.g. headrest; technical details of crash testing of this model; compliant tie- down points/brackets; compliant use of current /proposed vehicle occupant restraint system)",
               "placeholder":"Full Name",
               "className":"form-control",
               "name":"part_4_heading_extra_5",
               "access":false
            },
            {
               "type":"textarea",
               "required":false,
               "label":"",
               "placeholder":"Give details (e.g. headrest; technical details of crash testing of this model; compliant tie- down points/brackets; compliant use of current /proposed vehicle occupant restraint system)",
               "className":"form-control",
               "name":"part_4_give_details_eg_headrest",
               "access":false,
               "subtype":"text"
            },
            {
               "type":"checkbox-group",
               "required":false,
               "label":"Has the participant been advised of the requirements, relevant information and risks? Yes/No",
               "className":"form-control",
               "name":"part_4_participant_been_advised_of_requirements",
               "access":false,
               "subtype":"text"
            },
            {
               "type":"heading",
               "required":false,
               "label_1":"4.3 Describe any other factors that need resolution in order to implement the vehicle modifications such as a behavioural management plan for restrictive practice.",
               "label_2":"",
               "label_3":"",
               "placeholder":"Full Name",
               "className":"form-control",
               "name":"part_4_heading_extra_6",
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
               "name":"part_4_heading_extra_7",
               "access":false
            },
            {
               "type":"text",
               "required":false,
               "label":"Factor Issues",
               "placeholder":"Factor Issues",
               "className":"form-control",
               "name":"part_4_factor_issue1",
               "access":false,
               "subtype":"text"
            },
            {
               "type":"text",
               "required":false,
               "label":"Mitigation / Option",
               "placeholder":"Mitigation / Option",
               "className":"form-control",
               "name":"part_4_mitigation_option1",
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
               "name":"part_4_heading_extra_8",
               "access":false
            },
            {
               "type":"text",
               "required":false,
               "label":"Factor Issues",
               "placeholder":"Factor Issues",
               "className":"form-control",
               "name":"part_4_factor_issue2",
               "access":false,
               "subtype":"text"
            },
            {
               "type":"text",
               "required":false,
               "label":"Mitigation / Option",
               "placeholder":"Mitigation / Option",
               "className":"form-control",
               "name":"part_4_mitigation_option2",
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
               "name":"part_4_heading_extra_9",
               "access":false
            },
            {
               "type":"text",
               "required":false,
               "label":"Factor Issues",
               "placeholder":"Factor Issues",
               "className":"form-control",
               "name":"part_4_factor_issue3",
               "access":false,
               "subtype":"text"
            },
            {
               "type":"text",
               "required":false,
               "label":"Mitigation / Option",
               "placeholder":"Mitigation / Option",
               "className":"form-control",
               "name":"part_4_mitigation_option3",
               "access":false,
               "subtype":"text"
            },
            {
               "type":"checkbox-group",
               "required":false,
               "label":"Is the participant at immediate safety or other risk? Yes or No ",
               "toggle":false,
               "inline":false,
               "name":"part_4_participant_at_immediate_risk_or_safety",
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
               "label":"If yes, describe any identified short-term recommendations",
               "placeholder":"If yes, describe any identified short-term recommendations",
               "className":"form-control",
               "name":"part_4_if_yes_describe_any_identified_short_term_recommendations",
               "access":false,
               "subtype":"textarea"
            },
            {
               "type":"heading",
               "required":false,
               "label_1":"4.4 Describe any additional features requested by the participant unlikely to meet Sect 34. criteria and be assessed as reasonable and necessary?",
               "label_2":"",
               "label_3":"",
               "placeholder":"Full Name",
               "className":"form-control",
               "name":"part_4_heading_extra_10",
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
               "name":"part_4_heading_extra_11",
               "access":false
            },
            {
               "type":"text",
               "required":false,
               "label":"Item",
               "placeholder":"Enter Item",
               "className":"form-control",
               "name":"part_4_item1",
               "access":false,
               "subtype":"text"
            },
            {
               "type":"text",
               "required":false,
               "label":"Cost",
               "placeholder":"Enter Cost",
               "className":"form-control",
               "name":"part_4_cost1",
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
               "name":"part_4_heading_extra_12",
               "access":false
            },
            {
               "type":"text",
               "required":false,
               "label":"Item",
               "placeholder":"Enter Item",
               "className":"form-control",
               "name":"part_4_item2",
               "access":false,
               "subtype":"text"
            },
            {
               "type":"text",
               "required":false,
               "label":"Cost",
               "placeholder":"Enter Cost",
               "className":"form-control",
               "name":"part_4_cost2",
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
               "name":"part_4_heading_extra_13",
               "access":false
            },
            {
               "type":"text",
               "required":false,
               "label":"Item",
               "placeholder":"Enter Item",
               "className":"form-control",
               "name":"part_4_item3",
               "access":false,
               "subtype":"text"
            },
            {
               "type":"text",
               "required":false,
               "label":"Cost",
               "placeholder":"Enter Cost",
               "className":"form-control",
               "name":"part_4_cost3",
               "access":false,
               "subtype":"text"
            },
            {
               "type":"heading",
               "required":false,
               "label_1":"4.5 Repairs and Maintenance",
               "label_2":"",
               "label_3":"",
               "placeholder":"Full Name",
               "className":"form-control",
               "name":"part_4_heading_extra_14",
               "access":false
            },
            {
               "type":"checkbox-group",
               "required":false,
               "label":"Will the participant have comprehensive vehicle insurance to cover repairs or replacement of the vehicle and vehicle modifications in the event of accidents or theft? Yes or No",
               "toggle":false,
               "inline":false,
               "name":"part_4_participant_to_self_fund_these_items",
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
               "label":"Is the participant aware that maintenance of the vehicle, including vehicle features not related to the disability modification, are not the responsibility of the NDIS to fund as they are an everyday living cost e.g. engine, exterior and non-disability specific interior features are considered an everyday cost under Section 34(1)(e)?  Yes or No",
               "toggle":false,
               "inline":false,
               "name":"part_4_participant__has_comprehensive_vehicle_insurance",
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
               "label":"Is the participant aware that maintenance of the vehicle",
               "toggle":false,
               "inline":false,
               "name":"part_4_participant_aware_that_maintenance_of_the_vehicle",
               "access":false,
               "other":false,
               "values":[
                  {
                     "label":"Option 1",
                     "value":"option-1",
                     "selected":true
                  }
               ]
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
               "label_1":"Assessor’s Details",
               "label_2":"",
               "label_3":"You must be able to provide evidence of competence in assessing AT needs at this level on request from NDIS Auditor",
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
               "name":"part_5_assessors_name",
               "access":false,
               "subtype":"text"
            },
            {
               "type":"text",
               "required":false,
               "label":"NDIS Provider Registration Number",
               "placeholder":"Enter NDIS Provider Registration Number",
               "className":"form-control",
               "name":"part_5_provider_registration_number",
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
               "label":"Qualification",
               "placeholder":"Enter Qualification",
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
            },
            {
               "type":"text",
               "required":false,
               "label":"State/territory where accredited",
               "placeholder":"Enter State/territory where accredited",
               "className":"form-control",
               "name":"part_5_statewhere_accredited",
               "access":false
            },
            {
               "type":"heading",
               "required":false,
               "label_1":"Vehicle Modifiers Details ",
               "label_2":"",
               "label_3":"You must be able to provide evidence of competence in assessing AT needs at this level on request from NDIS Auditor",
               "placeholder":"Full Name",
               "className":"form-control",
               "name":"part_5_heading_extra_3",
               "access":false
            },
            {
               "type":"text",
               "required":false,
               "label":"Name",
               "placeholder":"Enter Name",
               "className":"form-control",
               "name":"part_5_vehiclemodifiers_name",
               "access":false
            },
            {
               "type":"text",
               "required":false,
               "label":"NDIS Provider Registration number (where applicable)",
               "placeholder":"Enter NDIS Provider Registration number (where applicable)",
               "className":"form-control",
               "name":"part_5_vehiclemodifiersndisproviderregistration_number",
               "access":false
            },
            {
                "type":"text",
                "required":false,
                "label":"Phone",
                "placeholder":"Enter Phone",
                "className":"form-control",
                "name":"part_5_vehiclemodifiersphone_number",
                "access":false,
                "subtype":"text"
             },
             {
                "type":"email",
                "subtype":"email",
                "required":false,
                "label":"Email",
                "placeholder":"Enter Email",
                "className":"form-control",
                "name":"part_5_vehiclemodifiersemail_address",
                "access":false
             },
             {
               "type":"email",
               "subtype":"email",
               "required":false,
               "label":"Signature",
               "placeholder":"Enter Signature",
               "className":"form-control",
               "name":"part_5_vehiclemodifiersemail_signature",
               "access":false
            },
             {
                "type":"text",
                "required":false,
                "label":"Qualification",
                "placeholder":"Qualification",
                "className":"form-control",
                "name":"part_5_vehiclemodifiersqualification",
                "access":false,
                "subtype":"text"
             },
             {
                "type":"date",
                "required":false,
                "label":"Date of Assessment",
                "placeholder":"Set Date of Assessment",
                "className":"form-control",
                "name":"part_5_vehiclemodifiersdate_assessment",
                "access":false
             },
             {
                "type":"date",
                "required":false,
                "label":"Date of Report",
                "placeholder":"Set Date of Report",
                "className":"form-control",
                "name":"part_5_vehiclemodifiersreportDate",
                "access":false
             },
             {
                "type":"text",
                "required":false,
                "label":"State/territory where accredited",
                "placeholder":"Enter State/territory where accredited",
                "className":"form-control",
                "name":"part_5_vehiclemodifiersstatewhere_accredited",
                "access":false
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
         'name' => 'Vehicle Modification Assessment Template'
      ]);

      $heading1 = FormHeading::insertGetId([
         'form_heading' => 'PART 1 – Participant and Plan Management Details',
         'form_id' => $form,
         'section_html' => $section1
      ]);

      $heading2 = FormHeading::insertGetId([
         'form_heading' => ' PART 2 – Evaluation and Assessment',
         'form_id' => $form,
         'section_html' => $section2
      ]);

      $heading3 = FormHeading::insertGetId([
         'form_heading' => 'PART 3 – Exploration of Options',
         'form_id' => $form,
         'section_html' => $section3
      ]);

      $heading4 = FormHeading::insertGetId([
         'form_heading' => 'PART 4 – Recommendation',
         'form_id' => $form,
         'section_html' => $section4
      ]);

      $heading5 = FormHeading::insertGetId([
         'form_heading' => 'PART 5 – Details of Assistive Technology Assessor',
         'form_id' => $form,
         'section_html' => $section5
      ]);

      $heading6 = FormHeading::insertGetId([
         'form_heading' => 'PART 6 – Consent to Collect and Share Your Information –                 Provider AT Assessment and Quotation(s)',
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
