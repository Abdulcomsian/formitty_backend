<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\{Form , FormHeading , FormField};

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
                        <td style='border: 1px solid lightslategray; padding: 10px; width: 40%;background-color: lightgrey; font-size: 17px'>Address</td>
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
                <td style='width: 100%; border: 1px solid black;'><p style='margin-top:10px; margin-bottom:10px;'> Text goes here</p></td>
            </tr>
            </table>

            <p style='font-weight:bold; font-size:13pt;margin-top:20px; margin-bottom:20px;'>2.2 Participant’s Goals</p>
            <p style='font-size:12pt;'>If the participant’s NDIS plan has been made available, you can refer to the statement of participant’s goals and outline those relevant to the vehicle modification assessment. Consider the benefits for the participant in pursuing their goals through the recommended vehicle modification, as either a driver and/ or passenger.</p>
            <table style='width:100%; border: 1px solid black'>
            <tr>
                <td style='width: 100%; border: 1px solid black;'><p style='margin-top:10px; margin-bottom:10px;'> Text goes here</p></td>
            </tr>
            </table>

            <p style='font-weight:bold; font-size:13pt;margin-top:20px; margin-bottom:20px;'>2.3 Functional Assessment</p>
            <p style='font-size:12pt;'>2.3.1	Outline the specific functional limitation/s related to the participant’s disability that indicate the need for the vehicle modification. Consider indoor/outdoor mobility, transfer function, balance, upper and lower limb function. Summarise or attach relevant assessments that have been undertaken such as cognitive and mobility assessments.</p>
            <table style='width:100%; border: 1px solid black'>
            <tr>
                <td style='width: 100%; border: 1px solid black;'><p style='margin-top:10px; margin-bottom:10px;'> Text goes here</p></td>
            </tr>
            </table>
            <p style='font-size:12pt; margin-top:10px; margin-bottom:10px;'>2.3.2 What are the spplicant's measurements?</p>

            <table style=' width:100%; border: 1px solid black;'>
            <tr>
            <td style='width:40%; background-color: lightgrey;'>Height in cm</td>
            <td style='width:60%; border: 1px solid black;'></td>
            </tr>
            <tr>
            <td style='width:40%; background-color: lightgrey;'>Weight in kg</td>
            <td style='width:60%; border: 1px solid black;'></td>
            </tr>
            </table>
            <p style='font-size:12pt; margin-top:10px; margin-bottom:10px;'>2.3.3	Outline any assistive technology in relation to the vehicle modification such as hoists, orthotics/prosthetics and manual or power wheelchairs. Describe the wheelchair specifications the participant will be seated in when travelling or transferring from/into vehicle and any relevant restraints.</p>
            <table style='width:100%; border: 1px solid black'>
            <tr>
                <td style='width: 100%; border: 1px solid black;'><p style='margin-top:10px; margin-bottom:10px;'> Text goes here</p></td>
            </tr>
            </table>
            <p style='font-size:12pt; margin-top:10px; margin-bottom:10px;'>1 To be eligible for vehicle modifications a participant must have physical, sensory and/or cognitive disability that prevents safe driving, accessing or travelling as a passenger in an unmodified vehicle.</p>
            <p style='font-size:12pt; margin-top:10px; margin-bottom:10px;'>2.3.4	Describe the participant’s participation in work/study or community activities. Consider the location of activities and the availability and accessibility of transport options. Consider all options to access the community and the anticipated benefit of vehicle modifications. Are there any comparable support options and / or solutions that would achieve the same outcome, such as hire/ leasing AT?</p>
            <table style='width:100%; border: 1px solid black'>
            <tr>
                <td style='width: 100%; border: 1px solid black;'><p style='margin-top:10px; margin-bottom:10px;'> Text goes here</p></td>
            </tr>
            </table>

            <p style='font-size:12pt; margin-top:10px; margin-bottom:10px;'>2.3.5 Describe the participant’s current driving status and proposed use of the vehicle. i.e. a driver and/or passenger or potential to drive in the future. Provide specific details about seating arrangements and the frequency the participant is the driver and/or the passenger in an average week (e.g. percentage or number of times). Describe any license restrictions if relevant.</p>
            <table style='width:100%; border: 1px solid black'>
            <tr>
                <td style='width: 100%; border: 1px solid black;'><p style='margin-top:10px; margin-bottom:10px;'> Text goes here</p></td>
            </tr>
            </table>
            <p style='font-size:12pt; margin-top:10px; margin-bottom:10px;'>Evidence: If the participant will be driving you must attach the driving assessment report, relevant State medical report forms and a copy of a current licence.</p>
            <table style=' width:100%; border: 1px solid black;'>
            <tr>
            <td style='width:70%; background-color: lightgrey;'>Evidence is required and has been attached. Yes/no</td>
            <td style='width:30%; border: 1px solid black;'></td>
            </tr>
            <tr>
            <td style='width:70%; background-color: lightgrey;'>Participant is the vehicle passenger only – no evidence required</td>
            <td style='width:30%; border: 1px solid black;'></td>
            </tr>
            </table>
            <p style='font-size:12pt; margin-top:10px; margin-bottom:10px;'>2.3.7 Confirm that assistive technology will fit in the proposed vehicle and outline if the predicted needs of the participant are expected to change. Consider dimensions of the vehicle interior and ensure appropriate clearances for circulation and safe use of assistive technology (ie head room clearance), growth and foreseeable changes in function.</p>
            <table style='width:100%; border: 1px solid black'>
            <tr>
                <td style='width: 100%; border: 1px solid black;'><p style='margin-top:10px; margin-bottom:10px;'> Text goes here</p></td>
            </tr>
            </table>
            <p style='font-size:12pt; margin-top:10px; margin-bottom:10px;'>2.3.8 Describe any other considerations that have been assessed in relation to vehicle access and transport such as height clearance and circulation space in garage, safe location for transfers, friends/family to assist with transport, use i.e. remote/ metropolitan areas.</p>
            <table style='width:100%; border: 1px solid black'>
            <tr>
                <td style='width: 100%; border: 1px solid black;'><p style='margin-top:10px; margin-bottom:10px;'> Text goes here</p></td>
            </tr>
            </table>
            <p style='font-weight:bold; font-size:13pt;margin-top:20px; margin-bottom:20px;'>2.4  Information about the vehicle</p>
            <p style='font-size:12pt;'>Evidence: Please attach a copy of the current registration certification and list the details of the vehicle to be modified where appropriate.</p>
            <table style=' width:100%; border: 1px solid black;'>
            <tr>
            <td style='width:80%; background-color: lightgrey; font-size: 17px;'>Make  Model.</td>
            <td style='width:20%; border: 1px solid black;'></td>
            </tr>
            <tr>
            <td style='width:80%; background-color: lightgrey; font-size: 17px;'>Year of Manufacture.</td>
            <td style='width:20%; border: 1px solid black;'></td>
            </tr>
            <tr>
            <td style='width:80%; background-color: lightgrey; font-size: 17px;'>Current kilometres travelled (including date of reading).</td>
            <td style='width:20%; border: 1px solid black;'></td>
            </tr>
            <tr>
            <td style='width:80%; background-color: lightgrey; font-size: 17px;'>Ownership  of the vehicle and date of purchase.</td>
            <td style='width:20%; border: 1px solid black;'></td>
            </tr>
            <tr>
            <td style='width:80%; background-color: lightgrey; font-size: 17px;'>Permission of the owner of the vehicle for proposed modifications. Evidence: Attach a signed letter from the owner or the person to whom the vehicle is registered, or to be registered, giving permission for the disability access modifications.</td>
            <td style='width:20%; border: 1px solid black;'></td>
            </tr>
            <tr>
            <td style='width:80%; background-color: lightgrey; font-size: 17px;'>How frequently does the participant have access to this vehicle? Is it used by others? For how many years/other time period is it expected that the participant have access to the vehicle?  Evidence: Attach a signed letter from the owner or the person to whom the vehicle is registered, or to be registered, confirming the participant’s access to the vehicle.</td>
            <td style='width:20%; border: 1px solid black;'></td>
            </tr>
            <tr>
            <td style='width:80%; background-color: lightgrey; font-size: 17px;'>Condition of the vehicle (if required), evidence of road worthiness and the expected lifespan of the vehicle (e.g. via inspection report by the state Automobile Club) is required if the vehicle is over the age and kilometres generally considered suitable for the NDIS to fund vehicle modifications per the NDIS Vehicle Modification Operational Guideline</td>
            <td style='width:20%; border: 1px solid black;'></td>
            </tr>
            <tr>
            <td style='width:80%; background-color: lightgrey; font-size: 17px;'>Vehicle is second-hand and/or already modified – Age and condition of the modification.</td>
            <td style='width:20%; border: 1px solid black;'></td>
            </tr>
            <tr>
            <td style='width:80%; background-color: lightgrey; font-size: 17px;'>Year of Manufacture.</td>
            <td style='width:20%; border: 1px solid black;'></td>
            </tr>
            <tr>
            <td style='width:80%; background-color: lightgrey; font-size: 17px;'>Evidence of the age and condition of the modification.</td>
            <td style='width:20%; border: 1px solid black;'></td>
            </tr>
            <tr>
            <td style='width:80%; background-color: lightgrey; font-size: 17px;'>Vehicle is imported.</td>
            <td style='width:20%; border: 1px solid black;'></td>
            </tr>
            <tr>
            <td style='width:80%; background-color: lightgrey; font-size: 17px;'>Evidence that the vehicle (as modified) meets the requirements for registration in the state or territory of use. Describe:</td>
            <td style='width:20%; border: 1px solid black;'></td>
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
            <td style='border: 1px solid lightslategray; padding: 10px'>
                1
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
                1
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
                3
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
            4
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
</table>
</body>
<p style='margin-top:10px'></p>
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
    <td style='width: 100%; border: 1px solid black;'><p style='margin-top:10px; margin-bottom:10px;'> Text goes here</p></td>
</tr>
</table>
<p style='margin-bottom: 10px;'>All quotes must be itemised to show the cost of the individual components of the recommended modification. The following are attached to this assessment:</p>
<table style=' width:100%; border: 1px solid black;'>
<tr>
<td style='width:80%; background-color: lightgrey;'>At least one quotation for modifications up to $15 000 value. Yes or No</td>
<td style='width:20%; border: 1px solid black;'></td>
</tr>
<tr>
<td style='width:80%; background-color: lightgrey;'>Two quotations $15 000 value. Yes or No</td>
<td style='width:20%; border: 1px solid black;'></td>
</tr>
<tr>
<td style='width:80%; background-color: lightgrey;'>The above specification is consistent with the preferred option agreed between the participant and the AT assessor. Yes or No</td>
<td style='width:20%; border: 1px solid black;'></td>
</tr>
</table>
<p style='font-size: 12pt; margin-top:10px: margin-bottom:20px'>(if no, provide details of points of difference) </p>
<table style='width:100%; border: 1px solid black'>
<tr>
    <td style='width: 100%; border: 1px solid black;'><p style='margin-top:10px; margin-bottom:10px;'> Text goes here</p></td>
</tr>
</table>
<p style='font-weight:bold; font-size:13pt;margin-top:20px; margin-bottom:20px;'>4.2	Participant seating in vehicle.</p>

<table style=' width:100%; border: 1px solid black;'>
<tr>
<td style='width:80%; background-color: lightgrey; font-size: 17px;'>Participant will be travelling in a car seat: Yes/No  </td>
<td style='width:20%; border: 1px solid black;'></td>
</tr>
</table>
<p style='font-size:12pt; margin-top:10px; margin-bottom:10px;'>If yes, give details (e.g. standard or modified, and what Australian Standards you, as the Assessor of the vehicle modification, have adhered to when assessing the car seat (describe the features of the modified car seat and relevant standard)</p>
<table style=' width:100%; border: 1px solid black;'>
<tr>
<td style='width:80%; background-color: lightgrey; font-size: 17px;'>Is the wheelchair to be stowed?</td>
<td style='width:20%; border: 1px solid black;'></td>
</tr>
<tr>
<td style='width:80%; background-color: lightgrey; font-size: 17px;'>Will it be stowed by the participant? Yes/No</td>
<td style='width:20%; border: 1px solid black;'></td>
</tr>
<tr>
<td style='width:80%; background-color: lightgrey; font-size: 17px;'>Is it able to be appropriately secured? Yes/No</td>
<td style='width:20%; border: 1px solid black;'></td>
</tr>
<tr>
<td style='width:80%; background-color: lightgrey; font-size: 17px;'>Participant will be travelling in a wheelchair: Yes/No</td>
<td style='width:20%; border: 1px solid black;'></td>
</tr>
<tr>
<td style='width:80%; background-color: lightgrey; font-size: 17px;'>Does this wheelchair meet safety requirements for use in a vehicle in the jurisdiction where the participant lives? Yes/No</td>
<td style='width:20%; border: 1px solid black;'></td>
</tr>
</table>
<p style='margin-bottom: 10px'>Give details (e.g. headrest; technical details of crash testing of this model; compliant tie- down points/brackets; compliant use of current /proposed vehicle occupant restraint system).</p>
<table style='width:100%; border: 1px solid black'>
<tr>
    <td style='width: 100%; border: 1px solid black;'><p style='margin-top:10px; margin-bottom:10px;'> Text goes here</p></td>
</tr>
</table>
<table style=' width:100%; border: 1px solid black;'>
<tr>
<td style='width:80%; background-color: lightgrey; font-size: 17px;'>Has the participant been advised of the requirements, relevant information and risks? Yes/No</td>
<td style='width:20%; border: 1px solid black;'></td>
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
<td style='border: 1px solid lightslategray; padding: 10px; width:50%;'>
    Field Data
</td>
<td style='border: 1px solid lightslategray; padding: 10px; width:50%;'>
    Field Data
</td>

</tr>
<tr>

<td style='border: 1px solid lightslategray; padding: 10px; width:50%;'>
    Field Data
</td>
<td style='border: 1px solid lightslategray; padding: 10px; width:50%;'>
    Field Data
</td>

</tr>
<tr>

<td style='border: 1px solid lightslategray; padding: 10px; width:50%;'>
    Field Data
</td>
<td style='border: 1px solid lightslategray; padding: 10px; width:50%;'>
    Field Data
</td>

</tr>
</tbody>
</table>
<table style=' width:100%; border: 1px solid black;'>
<tr>
<td style='width:80%; background-color: lightgrey; font-size: 17px;'>Is the participant at immediate safety or other risk? Yes or No</td>
<td style='width:20%; border: 1px solid black;'></td>
</tr>
</table>";




$section4 = "<p style='margin-top:10px; font-size:12pt;'>If yes, describe any identified short-term recommendations</p>
                <table style='width:100%; border: 1px solid black'>
                    <tr>
                        <td style='width: 100%; border: 1px solid black;'><p style='margin-top:10px; margin-bottom:10px;'> Text goes here</p></td>
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
                    <td style='border: 1px solid lightslategray; padding: 10px; width:50%;'>
                        Field Data
                    </td>
                    <td style='border: 1px solid lightslategray; padding: 10px; width:50%;'>
                        Field Data
                    </td>
                
                </tr>
                <tr>

                    <td style='border: 1px solid lightslategray; padding: 10px; width:50%;'>
                        Field Data
                    </td>
                    <td style='border: 1px solid lightslategray; padding: 10px; width:50%;'>
                        Field Data
                    </td>
                
                </tr>
                <tr>

                    <td style='background-color: lightgrey; border: 1px solid lightslategray; padding: 10px; width:50%;'>
                    Does the participant agree to self-fund these items? Yes or No
                    </td>
                    <td style='border: 1px solid lightslategray; padding: 10px; width:50%;'>
                        Field Data
                    </td>
                </tr>
                </tbody>
                </table>
                <p style='font-weight:bold; font-size:13pt; margin-top:20px; margin-bottom:20px;'>4.5	Repairs and Maintenance</p>

                <table style=' width:100%; border: 1px solid black;'>
                <tr>
                <td style='width:80%; background-color: lightgrey; font-size: 17px;'>Will the participant have comprehensive vehicle insurance to cover repairs or replacement of the vehicle and vehicle modifications in the event of accidents or theft? Yes or No</td>
                <td style='width:20%; border: 1px solid black;'></td>
                </tr>
                <tr>
                <td style='width:80%; background-color: lightgrey; font-size: 17px;'>Is the participant aware that maintenance of the vehicle, including vehicle features not related to the disability modification, are not the responsibility of the NDIS to fund as they are an everyday living cost e.g. engine, exterior and non-disability specific interior features are considered an everyday cost under Section 34(1)(e)?  Yes or No</td>
                <td style='width:20%; border: 1px solid black;'></td>
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
                <td style='border: 1px solid lightslategray; padding: 10px'>
                    Field Data
                </td>
                </tr>
                <tr>
                <td style='border: 1px solid lightslategray; padding: 10px; width: 40%;background-color: lightgrey; font-size: 17px'>NDIS Provider Registration number (where applicable)</td>
                <td style='border: 1px solid lightslategray; padding: 10px'>
                    Field Data
                </td>
                </tr>
                <tr>
                <td style='border: 1px solid lightslategray; padding: 10px; width: 40%; background-color: lightgrey; font-size: 17px'>Phone</td>
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
                <td style='border: 1px solid lightslategray; padding: 10px; width: 40%;background-color: lightgrey; font-size: 17px'>Signature</td>
                <td style='border: 1px solid lightslategray; padding: 10px'>
                    Field Data
                </td>
                </tr>
                <tr>
                <td style='border: 1px solid lightslategray; padding: 10px; width: 40%;background-color: lightgrey; font-size: 17px'>Qualification</td>
                <td style='border: 1px solid lightslategray; padding: 10px'>
                    Field Data
                </td>
                </tr>
                <tr>
                <td style='border: 1px solid lightslategray; padding: 10px; width: 40%;background-color: lightgrey; font-size: 17px'>Date of Assessment(s)</td>
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
                <tr>
                <td style='border: 1px solid lightslategray; padding: 10px; width: 40%;background-color: lightgrey; font-size: 17px'>State/territory where accredited.t</td>
                <td style='border: 1px solid lightslategray; padding: 10px'>
                    Field Data
                </td>
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
                <td style='border: 1px solid lightslategray; padding: 10px'>
                    Field Data
                </td>
                </tr>
                <tr>
                <td style='border: 1px solid lightslategray; padding: 10px; width: 40%;background-color: lightgrey; font-size: 17px'>NDIS Provider Registration number (where applicable)</td>
                <td style='border: 1px solid lightslategray; padding: 10px'>
                    Field Data
                </td>
                </tr>
                <tr>
                <td style='border: 1px solid lightslategray; padding: 10px; width: 40%; background-color: lightgrey; font-size: 17px'>Phone</td>
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
                <td style='border: 1px solid lightslategray; padding: 10px; width: 40%;background-color: lightgrey; font-size: 17px'>Signature</td>
                <td style='border: 1px solid lightslategray; padding: 10px'>
                    Field Data
                </td>
                </tr>
                <tr>
                <td style='border: 1px solid lightslategray; padding: 10px; width: 40%;background-color: lightgrey; font-size: 17px'>Qualification</td>
                <td style='border: 1px solid lightslategray; padding: 10px'>
                    Field Data
                </td>
                </tr>
                <tr>
                <td style='border: 1px solid lightslategray; padding: 10px; width: 40%;background-color: lightgrey; font-size: 17px'>Date of Assessment(s)</td>
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
                <tr>
                <td style='border: 1px solid lightslategray; padding: 10px; width: 40%;background-color: lightgrey; font-size: 17px'>State/territory where accredited.t</td>
                <td style='border: 1px solid lightslategray; padding: 10px'>
                    Field Data
                </td>
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
                <td style='width:60%; border: 1px solid black;'></td>
                </tr>
                <tr>
                <td style='width:40%; background-color: lightgrey; font-size: 17px;'>No, I do not consent</td>
                <td style='width:60%; border: 1px solid black;'></td>
                </tr>
                </table>
                <p style='margin-bottom: 10px'>Participant’s Signature</p>
                <table style=' width:100%; border: 1px solid black;'>
                <tr>
                <td style='width:80%; background-color: lightgrey; font-size: 17px;'>I understand that I am giving consent to the NDIA to do the things with my information set out in this section. I understand that I can withdraw my consent for the NDIS to do things with my information at any time by letting the NDIA know.</td>
                <td style='width:20%; border: 1px solid black;'></td>
                </tr>
                <tr>
                <td style='width:80%; background-color: lightgrey; font-size: 17px;'>I understand that I can access the NDIA’s Privacy Notice and Privacy Policy on the NDIA website or by contacting the NDIA.</td>
                <td style='width:20%; border: 1px solid black;'></td>
                </tr>
                </table>
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
                                "label":"Full Name",
                                "placeholder":"Enter Your Full Name",
                                "className":"form-control",
                                "name":"part_1_plan_management_fullname",
                                "access":false,
                                "subtype":"text"
                                },
                                {
                                "type":"text",
                                "required":false,
                                "label":"Email",
                                "placeholder":"Enter Your Email",
                                "className":"form-control",
                                "name":"part_1_plan_management_email",
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
                                "label":"Guardian Name",
                                "placeholder":"Enter Your Guardian Name",
                                "className":"form-control",
                                "name":"part_1_plan_managementguardian_name",
                                "access":false,
                                "subtype":"text"
                                },
                                {
                                "type":"text",
                                "required":false,
                                "label":"Guardian Phone",
                                "placeholder":"Enter Your Guardian Phone",
                                "className":"form-control",
                                "name":"part_1_plan_managementguardian_phone",
                                "access":false,
                                "subtype":"text"
                                },
                                {
                                "type":"text",
                                "required":false,
                                "label":"Date of Assessment",
                                "placeholder":"Enter Your Date of Assessment",
                                "className":"form-control",
                                "name":"part_1_plan_management_date_assessment",
                                "access":false,
                                "subtype":"text"
                                },
                                {
                                "type":"text",
                                "required":false,
                                "label":"Phone Number",
                                "placeholder":"Enter Your Phone Number",
                                "className":"form-control",
                                "name":"part_1_plan_managementphone_number",
                                "access":false,
                                "subtype":"text"
                                },
                                {
                                "type":"text",
                                "required":false,
                                "label":"NDIS Number",
                                "placeholder":"Enter Your NDIS Number",
                                "className":"form-control",
                                "name":"part_1_plan_managementndis_number",
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
                                    "label":"Functional Assessment",
                                    "placeholder":"Enter Functional Assessment",
                                    "className":"form-control",
                                    "name":"part_2_assesment_functional_assessment",
                                    "access":false,
                                    "subtype":"text"
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
                                    "type":"text",
                                    "required":false,
                                    "label":"Consideration of health and other issues",
                                    "placeholder":"Consideration of health and other issues",
                                    "className":"form-control",
                                    "name":"part_2_assesment_consideration_health",
                                    "access":false,
                                    "subtype":"text"
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
                                    }
                                    ]';
                $form_fields3 = '[{"type":"text","required":false,"label":"Evaluation_optionTextField","placeholder":"Enter option","className":"form-control","name":"part_3_con_option_evaluation_option1","access":false,"subtype":"text"},{"type":"text","required":false,"label":"Evaluation_optionTextField","placeholder":"Enter option","className":"form-control","name":"part_3_con_option_evaluation_option2","access":false,"subtype":"text"},{"type":"text","required":false,"label":"Evaluation_optionTextField","placeholder":"Enter option","className":"form-control","name":"part_3_con_option_evaluation_option3","access":false,"subtype":"text"},{"type":"text","required":false,"label":"Evaluation_optionTextField","placeholder":"Enter option","className":"form-control","name":"part_3_con_option_evaluation_option4","access":false,"subtype":"text"},{"type":"text","required":false,"label":"Evaluation_optionTextField","placeholder":"Enter Potential Option","className":"form-control","name":"part_3_con_option_potential_option1","access":false,"subtype":"text"},{"type":"text","required":false,"label":"Evaluation_optionTextField","placeholder":"Enter Potential Option","className":"form-control","name":"part_3_con_option_potential_option2","access":false,"subtype":"text"},{"type":"text","required":false,"label":"Evaluation_optionTextField","placeholder":"Enter Potential Option","className":"form-control","name":"part_3_con_option_potential_option3","access":false,"subtype":"text"},{"type":"text","required":false,"label":"Evaluation_optionTextField","placeholder":"Enter Potential Option","className":"form-control","name":"part_3_con_option_potential_option4","access":false,"subtype":"text"},{"type":"text","required":false,"label":"Evaluation_optionTextField","placeholder":"Enter Trial Details","className":"form-control","name":"part_3_con_option_trial_option1","access":false,"subtype":"text"},{"type":"text","required":false,"label":"Evaluation_optionTextField","placeholder":"Enter Trial Details","className":"form-control","name":"part_3_con_option_trial_option2","access":false,"subtype":"text"},{"type":"text","required":false,"label":"Evaluation_optionTextField","placeholder":"Enter Trial Details","className":"form-control","name":"part_3_con_option_trial_option3","access":false,"subtype":"text"},{"type":"text","required":false,"label":"Evaluation_optionTextField","placeholder":"Enter Trial Details","className":"form-control","name":"part_3_con_option_trial_option4","access":false,"subtype":"text"},{"type":"text","required":false,"label":"Evaluation_optionTextField","placeholder":"Enter Advantages","className":"form-control","name":"part_3_con_option_advantage1","access":false,"subtype":"text"},{"type":"text","required":false,"label":"Evaluation_optionTextField","placeholder":"Enter Advantages","className":"form-control","name":"part_3_con_option_advantage2","access":false,"subtype":"text"},{"type":"text","required":false,"label":"Evaluation_optionTextField","placeholder":"Enter Advantages","className":"form-control","name":"part_3_con_option_advantage3","access":false,"subtype":"text"},{"type":"text","required":false,"label":"Evaluation_optionTextField","placeholder":"Enter Advantages","className":"form-control","name":"part_3_con_option_advantage4","access":false,"subtype":"text"},{"type":"text","required":false,"label":"Evaluation_optionTextField","placeholder":"Enter Disadvantage","className":"form-control","name":"part_3_con_option_disdvantage1","access":false,"subtype":"text"},{"type":"text","required":false,"label":"Evaluation_optionTextField","placeholder":"Enter Disadvantage","className":"form-control","name":"part_3_con_option_disdvantage2","access":false,"subtype":"text"},{"type":"text","required":false,"label":"Evaluation_optionTextField","placeholder":"Enter Disadvantage","className":"form-control","name":"part_3_con_option_disdvantage3","access":false,"subtype":"text"},{"type":"text","required":false,"label":"Evaluation_optionTextField","placeholder":"Enter Disadvantage","className":"form-control","name":"part_3_con_option_disdvantage4","access":false,"subtype":"text"},{"type":"text","required":false,"label":"Evaluation_optionTextField","placeholder":"Enter Estimated Time","className":"form-control","name":"part_3_con_option_estimatedTime1","access":false,"subtype":"text"},{"type":"text","required":false,"label":"Evaluation_optionTextField","placeholder":"Enter Estimated Time","className":"form-control","name":"part_3_con_option_estimatedTime2","access":false,"subtype":"text"},{"type":"text","required":false,"label":"Evaluation_optionTextField","placeholder":"Enter Estimated Time","className":"form-control","name":"part_3_con_option_estimatedTime3","access":false,"subtype":"text"},{"type":"text","required":false,"label":"Evaluation_optionTextField","placeholder":"Enter Estimated Time","className":"form-control","name":"part_3_con_option_estimatedTime4","access":false,"subtype":"text"}]';
        
                $form_fields4 = '[{"type":"textarea","required":false,"label":"Continence Recommendations","placeholder":"Enter Specific Evidence","className":"form-control","name":"part_4_con_recomm_specific_evidence","access":false,"subtype":"textarea"},{"type":"textarea","required":false,"label":"Continence Recommendations","placeholder":"Enter additional features, customisation or specification recommended","className":"form-control","name":"part_4_con_recomm_additional_feature","access":false,"subtype":"textarea"},{"type":"textarea","required":false,"label":"Item 1","placeholder":"Enter Item","className":"form-control","name":"part_4_con_recomm_item1","access":false,"subtype":"textarea"},{"type":"textarea","required":false,"label":"Item 2","placeholder":"Enter Item","className":"form-control","name":"part_4_con_recomm_item2","access":false,"subtype":"textarea"},{"type":"textarea","required":false,"label":"Item 3","placeholder":"Enter Item","className":"form-control","name":"part_4_con_recomm_item3","access":false,"subtype":"textarea"},{"type":"textarea","required":false,"label":"Quantity 1","placeholder":"Enter Quantity","className":"form-control","name":"part_4_con_recomm_quantity1","access":false,"subtype":"textarea"},{"type":"textarea","required":false,"label":"Quantity 2","placeholder":"Enter Quantity","className":"form-control","name":"part_4_con_recomm_quantity2","access":false,"subtype":"textarea"},{"type":"textarea","required":false,"label":"Quantity 3","placeholder":"Enter Quantity","className":"form-control","name":"part_4_con_recomm_quantity3","access":false,"subtype":"textarea"},{"type":"text","required":false,"label":"Frequency of Supply 1","placeholder":"Enter Frequency of Supply","className":"form-control","name":"part_4_con_recomm_frequency1","access":false,"subtype":"text"},{"type":"text","required":false,"label":"Frequency of Supply 2","placeholder":"Enter Frequency of Supply","className":"form-control","name":"part_4_con_recomm_frequency2","access":false,"subtype":"text"},{"type":"text","required":false,"label":"Frequency of Supply 3","placeholder":"Enter Frequency of Supply","className":"form-control","name":"part_4_con_recomm_frequency3","access":false,"subtype":"text"},{"type":"text","required":false,"label":"State / Specification 1","placeholder":"Enter State/Specification","className":"form-control","name":"part_4_con_recomm_StateSpecification1","access":false,"subtype":"text"},{"type":"text","required":false,"label":"State / Specification 2","placeholder":"Enter State/Specification","className":"form-control","name":"part_4_con_recomm_StateSpecification2","access":false,"subtype":"text"},{"type":"text","required":false,"label":"State / Specification 3","placeholder":"Enter State/Specification","className":"form-control","name":"part_4_con_recomm_StateSpecification3","access":false,"subtype":"text"},{"type":"text","required":false,"label":"Preferred supplier (Optional)","placeholder":"Enter your Preferred Supplier","className":"form-control","name":"part_4_con_recomm_preferred_supplier1","access":false,"subtype":"text"},{"type":"checkbox-group","required":false,"label":"Supplier Product Use Guidence","toggle":false,"inline":false,"name":"part_4_con_recomm_SPUG1","access":false,"other":false,"values":[{"label":"Option 1","value":"option-1","selected":true}]},{"type":"textarea","required":false,"label":"Information and Instructions","placeholder":"Enter Information and Instructions for Usage.","className":"form-control","name":"part_4_con_recomm_information_instructions_field","access":false,"subtype":"textarea"},{"type":"textarea","required":false,"label":"Urgent supply required?&nbsp;","placeholder":"Enter detail with YES/NO","className":"form-control","name":"part_4_con_recomm_urgentSupply","access":false,"subtype":"textarea"},{"type":"text","required":false,"label":"Scheme Specification (Optional)","placeholder":"Enter your scheme specification here.","className":"form-control","name":"part_4_con_recomm_schemeSpecification","access":false,"subtype":"text"},{"type":"text","required":false,"label":"Other supplier specification (Optional)","placeholder":"Enter your supplier specification","className":"form-control","name":"part_4_con_recomm_supplier_specification","access":false,"subtype":"text"},{"type":"radio-group","required":true,"label":"Participant Agreement","inline":false,"name":"part_4_con_recomm_participant_agreement","access":false,"other":false,"values":[{"label":"Yes","value":"","selected":true},{"label":"No","value":"option-2","selected":false},{"label":"Please provide details","value":"option-3","selected":false}]}]';
        
                $form_fields5 = '[{"type":"checkbox-group","required":false,"label":"Meet the NDIA expectation","toggle":false,"inline":false,"name":"part_5_declaration_NDIA_expectation","access":false,"other":false,"values":[{"label":"YES/NO","value":"option-1","selected":true}]},{"type":"checkbox-group","required":false,"label":"Providing appropriate evidence to the NDIA","toggle":false,"inline":false,"name":"part_5_declaration_appropriate_evidence","access":false,"other":false,"values":[{"label":"YES/NO","value":"option-1","selected":true}]},{"type":"checkbox-group","required":false,"label":"I understand all about the NDIA","toggle":false,"inline":false,"name":"part_5_declaration_NDIA_understanding","access":false,"other":false,"values":[{"label":"YES/NO","value":"option-1","selected":false}]},{"type":"checkbox-group","required":false,"label":"Accessing by the treating multi-disciplinary team","toggle":false,"inline":false,"name":"part_5_declaration_accessing_team","access":false,"other":false,"values":[{"label":"YES/NO","value":"option-1","selected":false}]},{"type":"text","required":false,"label":"Name","placeholder":"Enter Assessor’s  Name","className":"form-control","name":"part_5_assessors_name","access":false,"subtype":"text"},{"type":"text","required":false,"label":"NDIS Provider Registration Number","placeholder":"Enter Registration Number","className":"form-control","name":"part_5_registration_number","access":false,"subtype":"text"},{"type":"text","required":false,"label":"Phone Number","placeholder":"Enter Phone Number","className":"form-control","name":"part_5_assessorphone_number","access":false,"subtype":"text"},{"type":"text","subtype":"email","required":false,"label":"Email","placeholder":"Enter Email Address","className":"form-control","name":"part_5_email_address","access":false},{"type":"text","required":false,"label":"Qualification","placeholder":"Enter Qualification here.","className":"form-control","name":"part_5_qualification","access":false,"subtype":"text"},{"type":"date","required":false,"label":"Date of Assessment","placeholder":"Set Date of Assessment","className":"form-control","name":"part_5_date_assessment","access":false},{"type":"date","required":false,"label":"Date of Report","placeholder":"Set Date of Report","className":"form-control","name":"part_5_reportDate","access":false}]';
        
                $form_fields6 = '[{"type":"checkbox-group","required":false,"label":"Meet the NDIA expectation","toggle":false,"inline":false,"name":"part_5_declaration_NDIA_expectation","access":false,"other":false,"values":[{"label":"YES/NO","value":"option-1","selected":true}]},{"type":"checkbox-group","required":false,"label":"Providing appropriate evidence to the NDIA","toggle":false,"inline":false,"name":"part_5_declaration_appropriate_evidence","access":false,"other":false,"values":[{"label":"YES/NO","value":"option-1","selected":true}]},{"type":"checkbox-group","required":false,"label":"I understand all about the NDIA","toggle":false,"inline":false,"name":"part_5_declaration_NDIA_understanding","access":false,"other":false,"values":[{"label":"YES/NO","value":"option-1","selected":false}]},{"type":"checkbox-group","required":false,"label":"Accessing by the treating multi-disciplinary team","toggle":false,"inline":false,"name":"part_5_declaration_accessing_team","access":false,"other":false,"values":[{"label":"YES/NO","value":"option-1","selected":false}]},{"type":"text","required":false,"label":"Name","placeholder":"Enter Assessor’s  Name","className":"form-control","name":"part_5_assessors_name","access":false,"subtype":"text"},{"type":"text","required":false,"label":"NDIS Provider Registration Number","placeholder":"Enter Registration Number","className":"form-control","name":"part_5_registration_number","access":false,"subtype":"text"},{"type":"text","required":false,"label":"Phone Number","placeholder":"Enter Phone Number","className":"form-control","name":"part_5_assessorphone_number","access":false,"subtype":"text"},{"type":"text","subtype":"email","required":false,"label":"Email","placeholder":"Enter Email Address","className":"form-control","name":"part_5_email_address","access":false},{"type":"text","required":false,"label":"Qualification","placeholder":"Enter Qualification here.","className":"form-control","name":"part_5_qualification","access":false,"subtype":"text"},{"type":"date","required":false,"label":"Date of Assessment","placeholder":"Set Date of Assessment","className":"form-control","name":"part_5_date_assessment","access":false},{"type":"date","required":false,"label":"Date of Report","placeholder":"Set Date of Report","className":"form-control","name":"part_5_reportDate","access":false}]';

        $form = Form::insertGetId([
            'name' => 'Vehicle Modification Assessment Template''
        ]);

        $heading1 = FormHeading::insertGetId([
            'form_heading' => 'PART 1 – Participant and Plan Management Details',
            'form_id' => $form,
            'section_html' => $section1
        ]);

        $heading2 = FormHeading::insertGetId([
            'form_heading' => 'PART 2 – Evaluation and Assessment',
            'form_id' => $form,
            'section_html' => $section2
        ]);

        $heading3 = FormHeading::insertGetId([
            'form_heading' => 'PART 3 - Exploration of Options',
            'form_id' => $form,
            'section_html' => $section3
        ]);

        $heading4 = FormHeading::insertGetId([
            'form_heading' => 'PART 4 - Recommendations',
            'form_id' => $form,
            'section_html' => $section4
        ]);

        $heading5 = FormHeading::insertGetId([
            'form_heading' => 'PART 5 – Details of Assistive Technology Assessor',
            'form_id' => $form,
            'section_html' => $section5
        ]);

        $heading6 = FormHeading::insertGetId([
            'form_heading' => 'PART 6 – Consent to Collect and Share Your Information – Provider AT Assessment and Quotation(s',
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
            'form_field' => $form_fields5
        ]);





























    }
}
