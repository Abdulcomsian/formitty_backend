<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\{Form, FormField, FormHeading};

class HearingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $form = Form::create([
        //     'name' => 'Animal Assessment Report'
        // ]);
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
    <p style='margin-top:8px; margin-bottom:8px; margin-left:8px'></p>";


        $section2 = '<table style="background-color:#7209B7; border:none; width:100%;">
            <tr>
                <td>
                    <p style="font-size:12pt; font-weight:bold; margin-top:5px; margin-bottom:5px; color: white"> 2 – Background Information</p>
                </td>
            </tr>
        </table>
        <p style="font-weight:bold; font-size:13pt;margin-top:20px; margin-bottom:20px;">2.1   Reason for request</p>
        <p style="font-size:12pt;">See Appendix A and Appendix B for guidance regarding replacement and refitting criteria.</p>
        <p style="font-size:12pt;">This technology is being requested as:</p>
        <p style="font-size:12pt;">Use the check box to indicate if the device is;</p>
        
        <table
              style="
                border-collapse: collapse;
                width: 100%;
                margin: auto;
                border: 1px solid lightslategray;
              "
            >
              <tbody>
                <tr>
                  <td style="font-weight:bold; border: 1px solid lightslategray; padding: 10px; width: 40%; background-color: lightgrey; font-size: 17px">A new device for a first time user?</td>
                  <td style="border: 1px solid lightslategray; padding: 10px">{{part_2_background_information1}}</td>
                </tr>
                <tr>
                  <td style="font-weight:bold; border: 1px solid lightslategray; padding: 10px; width: 40%;background-color: lightgrey; font-size: 17px">The first device for this ear?</td>
                  <td style="border: 1px solid lightslategray; padding: 10px">{{part_2_background_information2}}</td>
                </tr>
                <tr>
                  <td style="font-weight:bold; border: 1px solid lightslategray; padding: 10px; width: 40%; background-color: lightgrey; font-size: 17px">A replacement device?</td>
                  <td style="border: 1px solid lightslategray; padding: 10px">{{part_2_background_information3}}</td>
                </tr>
                <tr>
                  <td style="font-weight:bold; border: 1px solid lightslategray; padding: 10px; width: 40%;background-color: lightgrey; font-size: 17px">The previous device is lost / damaged beyond repair (DBR) / has reached the end of its service life?</td>
                  <td style="border: 1px solid lightslategray; padding: 10px">{{part_2_background_information4}}</td>
                </tr>
                <tr>
                  <td style="font-weight:bold; border: 1px solid lightslategray; padding: 10px; width: 40%;background-color: lightgrey; font-size: 17px">A refitted / upgraded device?</td>
                  <td style="border: 1px solid lightslategray; padding: 10px">{{part_2_background_information5}}</td>
                </tr>
                <tr>
                  <td style="font-weight:bold; border: 1px solid lightslategray; padding: 10px; width: 40%;background-color: lightgrey; font-size: 17px">A new device with higher specifications or different style is required because of the participants functional capacity has changed?</td>
                  <td style="border: 1px solid lightslategray; padding: 10px">{{part_2_background_information6}}</td>
                </tr>
              </tbody>
              </table>


              <p style="font-weight:bold; font-size:13pt;margin-top:20px; margin-bottom:20px;">2.2   Hearing Background</p>
              <p style="font-size:12pt;">Describe below the participant’s ear and hearing history, include age of diagnosis, cause of hearing loss (if known), and hearing device usage history</p>
              <table style="width:100%; border: 1px solid black">
                  <tr>
                      <td style="width: 100%; border: 1px solid black;"><p style="margin-top:10px; margin-bottom:10px;">{{part_2_background_information7}}</p></td>
                  </tr>
              </table>
              
        <p style="font-weight:bold; font-size:13pt;margin-top:20px; margin-bottom:20px;">2.3   Communication background</p>
        <p style="font-size:12pt;">Include information about the participant’s current communication including preferred mode of communication and any barriers to communicate (for example, literacy).</p>
        <table style="width:100%; border: 1px solid black">
            <tr>
                <td style="width: 100%; border: 1px solid black;"><p style="margin-top:10px; margin-bottom:10px;">{{part_2_background_information8}}</p></td>
            </tr>
        </table>
        
        <p style="font-weight:bold; font-size:13pt;margin-top:20px; margin-bottom:20px;">2.4   Medical / Health background</p>
        <p style="font-size:12pt;">Provide information about co-existing conditions or disabilities that may impact on communication and/or device use, if relevant to the device prescription. Attach relevant reports if available (with the participant’s consent) and provide information about treating professionals.</p>
        <table style="width:100%; border: 1px solid black">
            <tr>
                <td style="width: 100%; border: 1px solid black;"><p style="margin-top:10px; margin-bottom:10px;">{{part_2_background_information9}}</p></td>
            </tr>
        </table>
        <p style="font-weight:bold; font-size:13pt;margin-top:20px; margin-bottom:20px;">2.5   Participant Goals</p>
        <p style="font-size:12pt;">If the participant’s NDIS plan has been made available, you can refer to the statement of participant’s goals and outline the goals relevant to the hearing technology request. Include any other relevant communication goals, for example Client Oriented Scale of Improvement (COSI) goals or other goal-setting tools. Where possible, goals should be specific and measurable. In the assessor’s view, are the participant’s goals realistic and achievable?</p>
        <table style="width:100%; border: 1px solid black">
            <tr>
                <td style="width: 100%; border: 1px solid black;"><p style="margin-top:10px; margin-bottom:10px;">{{part_2_background_information10}}</p></td>
            </tr>
        </table>
        <p style="margin-top:10px"></p>';




        $section3 = '<table style="background-color:#7209B7; border:none; width:100%;">
        <tr>
            <td>
                    <p style="font-size:12pt; font-weight:bold; margin-top:5px; margin-bottom:5px; color: white"> 3 – Recommended Option</p>
                </td>
            </tr>
            </table>
            <p style="margin-top:10px"></p>
            <p style="font-size:12pt;">Note: Complete Section 3a OR 3b. Delete the section that is not required.</p>
            <p style="font-weight:bold; font-size:13pt;margin-top:20px; margin-bottom:20px;">3.1   Section 3a: Request for Cochlear Implant Sound Processor</p>
            <table style="border-collapse: collapse;width: 100%;margin: auto;border: 1px solid lightslategray;">
                <tbody>
                    <tr>
                        <td style="border: 1px solid lightslategray; padding: 10px; width: 30%; background-color: lightgrey; font-size: 17px">Current Sound Processor(s) and / or hearing aid</td>
                        <td style="border: 1px solid lightslategray; padding: 10px; width: 35%; background-color: lightgrey; font-size: 17px">Left ear</td>
                        <td style="border: 1px solid lightslategray; padding: 10px; width: 35%; background-color: lightgrey; font-size: 17px">Right ear</td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid lightslategray; padding: 10px; width:30px;">Manufacturer</td>
                        <td style="border: 1px solid lightslategray; padding: 10px; width: 35%;">{{part_3_recommended_option_01}}</td>
                        <td style="border: 1px solid lightslategray; padding: 10px; width: 35%;">{{part_3_recommended_option_02}}</td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid lightslategray; padding: 10px; width:30px;">Model and style</td>
                        <td style="border: 1px solid lightslategray; padding: 10px; width: 35%;">{{part_3_recommended_option_03}}</td>
                        <td style="border: 1px solid lightslategray; padding: 10px; width: 35%;">{{part_3_recommended_option_04}}</td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid lightslategray; padding: 10px; width:30px;">Date of a last fitting</td>
                        <td style="border: 1px solid lightslategray; padding: 10px; width: 35%;">{{part_3_recommended_option_05}}</td>
                        <td style="border: 1px solid lightslategray; padding: 10px; width: 35%;">{{part_3_recommended_option_06}}</td> 
                    </tr>
                    <tr>
                        <td style="border: 1px solid lightslategray; padding: 10px; width:30px;">Hours worn per day / week. Provide evidence of use, including data logging where possible</td>
                        <td style="border: 1px solid lightslategray; padding: 10px; width: 35%;">{{part_3_recommended_option_07}}</td>
                        <td style="border: 1px solid lightslategray; padding: 10px; width: 35%;">{{part_3_recommended_option_08}}</td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid lightslategray; padding: 10px; width:30px;">Service and repair history (where relevant). Attach documentation to application. Yes/No</td>
                        <td style="border: 1px solid lightslategray; padding: 10px; width: 35%;">{{part_3_recommended_option_09}}</td>
                        <td style="border: 1px solid lightslategray; padding: 10px; width: 35%;">{{part_3_recommended_option_10}}</td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid lightslategray; padding: 10px; width: 30%;">List other assistive devices available to the participant. For example, remote microphones, phone clips, television streamers etc.</td>
                        <td style="border: 1px solid lightslategray; padding: 10px; width: 35%;">{{part_3_recommended_option_11}}</td>
                        <td style="border: 1px solid lightslategray; padding: 10px; width: 35%;">{{part_3_recommended_option_12}}</td>
                    </tr>
                </tbody>
            </table>

            <p style="margin-top:12tp;"></p>

            <table style="width:100%; border: 1px solid black">
                <tr>
                    <td style="width: 100%; border: 1px solid black; width:20%;background-color: lightgrey;"><p style="margin-top:10px; margin-bottom:10px;"> Comment</p></td>
                    <td style="width: 100%; border: 1px solid black; width:80%;"><p style="margin-top:10px; margin-bottom:10px;">{{part_3_recommended_option_13}}</p></td>
                
                </tr>
            </table>
                <p style="font-size:12pt;">What is the participant’s current preferred daily listening condition? Delete the response not required</p>
                <table style="border-collapse: collapse;width: 100%;margin: auto;border: 1px solid lightslategray;">
                    <tbody>
                        <tr>
                            <td style="font-weight:bold; border: 1px solid lightslategray; padding: 10px; width: 30%; background-color: lightgrey; font-size: 17px">Left</td>
                            <td style="font-weight:bold; border: 1px solid lightslategray; padding: 10px; width: 70%; background-color: lightgrey; font-size: 17px">Right</td>
                        </tr>
                        <tr>
                            <td style="border: 1px solid lightslategray; padding: 10px; width: 30%">No amplification</td>
                            <td style="border: 1px solid lightslategray; padding: 10px; width: 70%">No amplification</td>
                        </tr>
                    </tbody>
                </table>
            <p style="margin-top:12pt; margin-botton:12px;">If the devices are not used on a daily basis, describe when the devices are used.</p>

            <p style="margin-top:12tp;"></p>
            <table style="width:100%; border: 1px solid black">
                <tr>
                    <td style="width: 100%; border: 1px solid black; width:20%;background-color: lightgrey;"><p style="margin-top:10px; margin-bottom:10px;"> Comment</p></td>
                    <td style="width: 100%; border: 1px solid black; width:80%;"><p style="margin-top:10px; margin-bottom:10px;">{{part_3_recommended_option_14}}</p></td>
                </tr>
            </table>

            <p style="margin-top:12pt; margin-botton:12px;">Recommended replacement sound processor(s):</p>
            <table style="width:100%; border: 1px solid black">
                <tr>
                    <td style="width: 100%; border: 1px solid black; width:20%;background-color: lightgrey;"><p style="margin-top:10px; margin-bottom:10px;"> Make and Model</p></td>
                    <td style="width: 100%; border: 1px solid black; width:80%;"><p style="margin-top:10px; margin-bottom:10px;">{{part_3_recommended_option_15}}</p></td>
                </tr>
            </table>
            <p style="font-size:12pt;">Evidence of functional outcomes with the recommended sound processor(s)</p>
            <p style="font-size:12pt;">Evidence is attached:</p>
        
        
            <table style="border-collapse: collapse;width: 100%;margin: auto;border: 1px solid lightslategray;">
                <tbody>
                    <tr>
                        <td style="border: 1px solid lightslategray; padding: 10px; width: 30%; background-color: lightgrey; font-size: 17px">Yes</td>
                        <td style="border: 1px solid lightslategray; padding: 10px; width: 70%;; font-size: 17px">{{part_3_recommended_option_16}}</td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid lightslategray; padding: 10px; width: 30%; background-color: lightgrey; font-size: 17px">No</td>
                        <td style="border: 1px solid lightslategray; padding: 10px; width: 70%;; font-size: 17px">{{part_3_recommended_option_16}}</td>
                    </tr>
                </tbody>
            </table>
            <p style="margin-top:12tp;">Description of evidence if not attached</p>   
            <p style="margin-top:12tp;">Description of evidence</p>
            <p style="margin-top:12tp;"></p>
            <table style="width:100%; border: 1px solid black">
                <tr>
                    <td style="width: 100%; border: 1px solid black; width:20%;background-color: lightgrey;"><p style="margin-top:10px; margin-bottom:10px;"> Description</p></td>
                    <td style="width: 100%; border: 1px solid black; width:80%;"><p style="margin-top:10px; margin-bottom:10px;">{{part_3_recommended_option_18}}</p></td>
                </tr>
           </table>
           <p></p>
            <table style="background-color:#7209B7; border:none; width:100%;">
                <tr>
                    <td><p style="font-size:12pt; font-weight:bold; margin-top:5px; margin-bottom:5px; color: white"> 3.2 – Section 3b: Request for hearing aid</p></td>
                </tr>
            </table>

            <p style="margin-top:10px"></p>
            <p style="font-size:12pt;">Note: Complete Section 3a OR 3b. Delete the section that is not required.</p>
            <p style="font-weight:bold; font-size:13pt;margin-top:20px; margin-bottom:20px;">3.2.1	Hearing aid information for current users</p>

            <table style="
                border-collapse: collapse;
                width: 100%;
                margin: auto;
                border: 1px solid lightslategray;
            ">
                <tbody>
                    <tr>
                        <td style="border: 1px solid lightslategray; padding: 10px; width: 30%; background-color: lightgrey; font-size: 17px">Current Sound Processor(s) and / or hearing aid</td>
                        <td style="border: 1px solid lightslategray; padding: 10px; width: 35%; background-color: lightgrey; font-size: 17px">Left ear</td>
                        <td style="border: 1px solid lightslategray; padding: 10px; width: 35%; background-color: lightgrey; font-size: 17px">Right ear</td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid lightslategray; padding: 10px; width: 30%;">Manufacturer</td>
                        <td style="border: 1px solid lightslategray; padding: 10px; width: 35%;">{{part_3_recommended_option_19}}</td>
                        <td style="border: 1px solid lightslategray; padding: 10px; width: 35%;">{{part_3_recommended_option_20}}</td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid lightslategray; padding: 10px; width: 30%;">Model and style</td>
                        <td style="border: 1px solid lightslategray; padding: 10px; width: 35%;">{{part_3_recommended_option_21}}</td>
                        <td style="border: 1px solid lightslategray; padding: 10px; width: 35%;">{{part_3_recommended_option_22}}</td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid lightslategray; padding: 10px; width: 30%;">Date of a last fitting</td>
                        <td style="border: 1px solid lightslategray; padding: 10px; width: 35%;">{{part_3_recommended_option_23}}</td>
                        <td style="border: 1px solid lightslategray; padding: 10px; width: 35%;">{{part_3_recommended_option_24}}</td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid lightslategray; padding: 10px; width: 30%;">Hours worn per day / week. Provide evidence of use, including data logging where possible.</td>
                        <td style="border: 1px solid lightslategray; padding: 10px; width: 35%;">{{part_3_recommended_option_25}}</td>
                        <td style="border: 1px solid lightslategray; padding: 10px; width: 35%;">{{part_3_recommended_option_26}}</td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid lightslategray; padding: 10px; width: 30%;">Is the device fitted optimally? For example when doing real ear insertion gain measurements</td>
                        <td style="border: 1px solid lightslategray; padding: 10px; width: 35%;">{{part_3_recommended_option_72}}</td>
                        <td style="border: 1px solid lightslategray; padding: 10px; width: 35%;">{{part_3_recommended_option_73}}</td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid lightslategray; padding: 10px; width: 30%;">Service and repair history is attached (where relevant).</td>
                        <td style="border: 1px solid lightslategray; padding: 10px; width: 35%;">{{part_3_recommended_option_74}}</td>
                        <td style="border: 1px solid lightslategray; padding: 10px; width: 35%;">{{part_3_recommended_option_75}}</td>
                    </tr>

                    <tr>
                        <td style="border: 1px solid lightslategray; padding: 10px; width: 30%;">List other assistive devices available to the participant. For example, remote microphones, phone clips, television streamers etc.</td>
                        <td style="border: 1px solid lightslategray; padding: 10px; width: 35%;">{{part_3_recommended_option_27}}</td>
                        <td style="border: 1px solid lightslategray; padding: 10px; width: 35%;">{{part_3_recommended_option_28}}</td>
                    </tr>
                </tbody>
            </table>




                <p style="margin-top:12tp;"></p>
                <table style="width:100%; border: 1px solid black">
                <tr>
                <td style="width: 100%; border: 1px solid black; width:20%;background-color: lightgrey;"><p style="margin-top:10px; margin-bottom:10px;"> Comment</p></td>
                <td style="width: 100%; border: 1px solid black; width:80%;"><p style="margin-top:10px; margin-bottom:10px;">{{part_3_recommended_option_29}}</p></td>
                
                </tr>
                </table>
                <p style="margin-bottom: 10px">What is the participant’s current preferred daily listening condition? Delete the response not required</p>



                <table style="
                border-collapse: collapse;
                width: 100%;
                margin: auto;
                border: 1px solid lightslategray;
                ">
                <tbody>
                <tr>
                    <td
                        style="border: 1px solid lightslategray; padding: 10px; width: 30%; background-color: lightgrey; font-size: 17px">
                        Left
                    </td>

                    <td
                        style="border: 1px solid lightslategray; padding: 10px; width: 70%; background-color: lightgrey; font-size: 17px">
                        Right
                    </td>
                </tr>
                <tr>
                    <td style="border: 1px solid lightslategray; padding: 10px; width: 30%">
                    No amplification
                    </td>
                    <td style="border: 1px solid lightslategray; padding: 10px; width: 70%">
                    No amplification
                    </td>
                </tr>
                </tbody>
                </table>


                <p style="margin-top:12pt; margin-botton:12px;">If the devices are not used on a daily basis, describe when the devices are used.</p>

                <p style="margin-top:12tp;"></p>
                <table style="width:100%; border: 1px solid black;">
                <tr>
                    <td style="width: 100%; border: 1px solid black; width:20%;background-color: lightgrey;"><p style="margin-top:10px; margin-bottom:10px;"> Comment</p></td>
                    <td style="width: 100%; border: 1px solid black; width:80%;"><p style="margin-top:10px; margin-bottom:10px;">{{part_3_recommended_option_30}}</p></td>
                </tr>
                </table>



                <p style="font-weight:bold; font-size:13pt;margin-top:20px; margin-bottom:20px;">3.2.2	Participant Suitability</p>
                <p style="font-size:12pt;">Outline the participant’s suitability to use the recommended hearing technology:</p>
                <p style="font-size:12pt;">Evidence of suitability, which may include outcomes from speech discrimination and speech in noise assessments and / or other measures</p>
                <p style="margin-top:12tp;"></p>
                <table style="width:100%; border: 1px solid black;">
                <tr>
                <td style="width: 100%; border: 1px solid black; width:20%;background-color: lightgrey;"><p style="font-weight:bold; margin-top:10px; margin-bottom:10px;"> Comment</p></td>
                <td style="width: 100%; border: 1px solid black; width:80%;"><p style="margin-top:10px; margin-bottom:10px;">{{part_3_recommended_option_31}}</p></td>
                </tr>
                </table>
                <p style="font-size:12pt;">Previous hearing technology use:</p>



            <p style="margin-top:12tp;">1.	Length and frequency of the technology use.</p>
            <table style="width:100%; border: 1px solid black;">
            <tr>
            <td style="width: 100%; border: 1px solid black; width:20%;background-color: lightgrey;"><p style="font-weight:bold; margin-top:10px; margin-bottom:10px;"> Comment</p></td>
            <td style="width: 100%; border: 1px solid black; width:80%;"><p style="margin-top:10px; margin-bottom:10px;">{{part_3_recommended_option_32}}</p></td>
            </tr>
            </table>

            <p style="margin-top:12tp; font-size:12px;">2.	Comment on the success of technology use.</p>
            <p style="margin-top:10px;"></p>
            <table style="width:100%; border: 1px solid black;">
            <tr>
            <td style="width: 100%; border: 1px solid black; width:20%;background-color: lightgrey;"><p style="font-weight:bold; margin-top:10px; margin-bottom:10px;"> Comment</p></td>
            <td style="width: 100%; border: 1px solid black; width:80%;"><p style="margin-top:10px; margin-bottom:10px;">{{part_3_recommended_option_33}}</p></td>
            
            </tr>
            </table>
            <p style="margin-top:10px;"></p>
            <p style="margin-top:12tp;">3.	Comment on the use of compatible assistive listening devices, such as remote microphone systems and /or other wireless streaming devices.</p>
            <table style="width:100%; border: 1px solid black;">
            <tr>
            <td style="width: 100%; border: 1px solid black; width:20%;background-color: lightgrey;"><p style="font-weight:bold; margin-top:10px; margin-bottom:10px;"> Comment</p></td>
            <td style="width: 100%; border: 1px solid black; width:80%;"><p style="margin-top:10px; margin-bottom:10px;">{{part_3_recommended_option_34}}</p></td>
            
            </tr>
            </table>
            <p style="margin-top:10px;"></p>
            <p style="margin-top:12tp;">4.	Identify factors that impacted on the success of technology use, and steps taken to address any challenges experienced by the participant in using the technology successfully.</p>
            <table style="width:100%; border: 1px solid black;">
            <tr>
            <td style="width: 100%; border: 1px solid black; width:20%;background-color: lightgrey;"><p style="margin-top:10px; font-weight:bold; margin-bottom:10px;"> Comment</p></td>
            <td style="width: 100%; border: 1px solid black; width:80%;"><p style="margin-top:10px; margin-bottom:10px;">{{part_3_recommended_option_35}}</p></td>
            
            </tr>
            </table>




            <p style="font-weight:bold; font-size:13pt; margin-top:20px; margin-bottom:20px;">3.2.3	Recommendation of hearing aid(s)</p>
            <p style="font-size:12pt;">The recommended hearing aid has the following level of technology:</p>
            <p style="margin-top:10px;"></p>

            <table style="width:100%; border: 1px solid black;">
            <tr>
            <td style="width: 100%; border: 1px solid black; width:20%;background-color: lightgrey;"><p style="margin-top:10px; margin-bottom:10px;"> Basic / Essential</p></td>
            <td style="width: 100%; border: 1px solid black; width:80%;"><p style="margin-top:10px; margin-bottom:10px;">{{part_3_recommended_option_36}}</p></td>
            </tr>
            <tr>
            <td style="width: 100%; border: 1px solid black; width:20%;background-color: lightgrey;"><p style="margin-top:10px; margin-bottom:10px;"> Intermediate / Standard</p></td>
            <td style="width: 100%; border: 1px solid black; width:80%;"><p style="margin-top:10px; margin-bottom:10px;">{{part_3_recommended_option_37}}</p></td>
            </tr>
            <tr>
            <td style="width: 100%; border: 1px solid black; width:20%;background-color: lightgrey;"><p style="margin-top:10px; margin-bottom:10px;"> Advanced / Premium / Premium Plus</p></td>
            <td style="width: 100%; border: 1px solid black; width:80%;"><p style="margin-top:10px; margin-bottom:10px;">{{part_3_recommended_option_38}}</p></td>
            </tr>
            </table>


            <p style="font-weight:bold; font-size:13pt;margin-top:20px; margin-bottom:20px;"><strong style="font-weight:bold; font-size:12pt;">Option 1: </strong>Hearing aid recommendation for basic or essential level hearing aids:</p>  
            <p style="font-size:12pt; margin-top:10px; margin-bottom:10px;">Recommended device name, model number and style:</p>
                <p style="margin-top:12pt;"></p>
            <table style="width:100%; border: 1px solid black;">
            <tr>
            <td style="width: 100%; border: 1px solid black; width:20%;background-color: lightgrey;"><p style="margin-top:10px; margin-bottom:10px;"> Recommendation</p></td>
            <td style="width: 100%; border: 1px solid black; width:80%;"><p style="margin-top:10px; margin-bottom:10px;">{{part_3_recommended_option_39}}</p></td>
    
            </tr>
            </table>
            <p style="font-size:12pt; margin-top:10px; margin-bottom:10px;">Evidence of functional outcomes with the recommended device: Both objective evidence (test results) and subjective evidence (participant feedback) is required. Evidence can be provided in the comment section below, or can be attached. Assessors can refer to Appendix C for examples of evidence. Then go to Part 4.</p>
            <p style="margin-top:12pt;"></p>
            <table style="width:100%; border: 1px solid black;">
            <tr>
            <td style="width: 100%; border: 1px solid black; width:20%;background-color: lightgrey;"><p style="margin-top:10px; margin-bottom:10px;"> Comment</p></td>
            <td style="width: 100%; border: 1px solid black; width:80%;"><p style="margin-top:10px; margin-bottom:10px;">{{part_3_recommended_option_40}}</p></td>   
            </tr>
            </table>



            <p style="font-weight:bold; font-size:13pt; margin-top:20px; margin-bottom:20px;">Or</p>
            <p style="font-size:12pt;"> <strong style="font-weight:bold; font-size:12pt;">Option 2:</strong> Recommendation of intermediate, advanced or premium level hearing aids: Differences in functional capacity with recommended device.</p>

            <p style="font-size:12pt; margin-top:10px; margin-bottom:10px;">Provide a detailed description of current communication/listening contexts. How is the participant’s functional capacity expected to change with the recommended technology, based <strong style="font-weight:bold; font-size:12pt;">on objective assessment</strong> as well as <strong style="font-weight:bold; font-size:12pt;">participant experience? </strong>assessments can be attached to this form. See Appendix C for examples of assessments. The assessor is expected to compare hearing aids of <strong style="font-weight:bold; font-size:12pt;"> more than one level of technology,</strong> and preferably adjacent levels of technology. For example; do not compare a basic hearing aid to a premium-level hearing aid.</p>
            <p style="font-size:12pt; margin-top:10px; margin-bottom:10px;"><strong style="font-weight:bold; font-size:12pt;">Please note:</strong> Where work-related contexts are described (including self-employed contexts), provide information regarding steps taken through Job Access to modify the working environment and/or obtain suitable assistive technology.</p>
            <p style="margin-top:12pt;"></p>
            <table style="width:100%; border: 1px solid black;">
            <tr>
            <td style="width: 100%; border: 1px solid black; width:20%;background-color: lightgrey;"><p style="margin-top:10px; margin-bottom:10px;"> Current Device</p></td>
            <td style="width: 100%; border: 1px solid black; width:80%;"><p style="margin-top:10px; margin-bottom:10px;">Level: Basic / Essential / Intermediate / Advanced / Premium / Premium Plus (Delete the responses not required) </p></td>   
            </tr>
            <tr>
            <td style="width: 100%; border: 1px solid black; width:20%;background-color: lightgrey;"><p style="margin-top:10px; margin-bottom:10px;"> Recommended Device</p></td>
            <td style="width: 100%; border: 1px solid black; width:80%;"><p style="margin-top:10px; margin-bottom:10px;"> Level: Basic / Essential / Intermediate / Advanced / Premium / Premium Plus (Delete the responses not required)</p></td>   
            </tr>
            </table>

            

            <p style="font-size:12pt; margin-top:10px; margin-bottom:10px;"><strong style="font-weight:bold; font-size:12pt;">Context 1:</strong> Describe context, including frequency experienced</p>
            <p style="margin-top:12pt;"></p>
            <table style="width:100%; border: 1px solid black;">
            <tr>
            <td style="width: 100%; border: 1px solid black; width:50%;background-color: lightgrey; font-weight:bold;"><p style="margin-top:10px; margin-bottom:10px;">Goals and outcomes with current device</p></td>
            <td style="width: 100%; border: 1px solid black; width:50%;"><p style="margin-top:10px; margin-bottom:10px;">{{part_3_recommended_option_41}}</p></td>   
            </tr>
            <tr>
            <td style="width: 100%; border: 1px solid black; width:50%;background-color: lightgrey; font-weight:bold;"><p style="margin-top:10px; margin-bottom:10px;"> Alternatives trialled to improve outcomes</p></td>
            <td style="width: 100%; border: 1px solid black; width:50%;"><p style="margin-top:10px; margin-bottom:10px;">{{part_3_recommended_option_42}}</p></td>   
            </tr>
            <tr>
            <td style="width: 100%; border: 1px solid black; width:50%;background-color: lightgrey; font-weight:bold;"><p style="margin-top:10px; margin-bottom:10px;"> Goals and outcomes with recommended technology</p></td>
            <td style="width: 100%; border: 1px solid black; width:50%;"><p style="margin-top:10px; margin-bottom:10px;">{{part_3_recommended_option_43}}</p></td>   
            </tr>
            </table>


            <p style="font-size:12pt; margin-top:10px; margin-bottom:10px;"><strong style="font-weight:bold; font-size:12pt;">Context 2:</strong> Describe context, including frequency experienced</p>

            <table style="width:100%; border: 1px solid black;">
            <tr>
            <td style="width: 100%; border: 1px solid black; width:50%;background-color: lightgrey; font-weight:bold;"><p style="margin-top:10px; margin-bottom:10px;">Goals and outcomes with current device</p></td>
            <td style="width: 100%; border: 1px solid black; width:50%;"><p style="margin-top:10px; margin-bottom:10px;">{{part_3_recommended_option_44}}</p></td>   
            </tr>
            <tr>
            <td style="width: 100%; border: 1px solid black; width:50%;background-color: lightgrey; font-weight:bold;"><p style="margin-top:10px; margin-bottom:10px;"> Alternatives trialled to improve outcomes</p></td>
            <td style="width: 100%; border: 1px solid black; width:50%;"><p style="margin-top:10px; margin-bottom:10px;">{{part_3_recommended_option_45}}</p></td>   
            </tr>
            <tr>
            <td style="width: 100%; border: 1px solid black; width:50%;background-color: lightgrey; font-weight:bold;"><p style="margin-top:10px; margin-bottom:10px;"> Goals and outcomes with recommended technology</p></td>
            <td style="width: 100%; border: 1px solid black; width:50%;"><p style="margin-top:10px; margin-bottom:10px;">{{part_3_recommended_option_46}}</p></td>   
            </tr>
            </table>


            <p style="font-size:12pt; margin-top:10px; margin-bottom:10px;"><strong style="font-weight:bold; font-size:12pt;">Context 3:</strong> Describe context, including frequency experienced</p>

            <table style="width:100%; border: 1px solid black;">
            <tr>
            <td style="width: 100%; border: 1px solid black; width:50%;background-color: lightgrey; font-weight:bold;"><p style="margin-top:10px; margin-bottom:10px;">Goals and outcomes with current device</p></td>
            <td style="width: 100%; border: 1px solid black; width:50%;"><p style="margin-top:10px; margin-bottom:10px;">{{part_3_recommended_option_47}}</p></td>   
            </tr>
            <tr>
            <td style="width: 100%; border: 1px solid black; width:50%;background-color: lightgrey; font-weight:bold;"><p style="margin-top:10px; margin-bottom:10px;"> Alternatives trialled to improve outcomes</p></td>
            <td style="width: 100%; border: 1px solid black; width:50%;"><p style="margin-top:10px; margin-bottom:10px;">{{part_3_recommended_option_48}}</p></td>   
            </tr>
            <tr>
            <td style="width: 100%; border: 1px solid black; width:50%;background-color: lightgrey; font-weight:bold;"><p style="margin-top:10px; margin-bottom:10px;"> Goals and outcomes with recommended technology</p></td>
            <td style="width: 100%; border: 1px solid black; width:50%;"><p style="margin-top:10px; margin-bottom:10px;">{{part_3_recommended_option_49}}</p></td>   
            </tr>
            </table>



            <p style="font-size:12pt; margin-top:10px; margin-bottom:10px;"><strong style="font-weight:bold; font-size:12pt;">Context 4:</strong> Describe context, including frequency experienced</p>

            <table style="width:100%; border: 1px solid black;">
            <tr>
            <td style="width: 100%; border: 1px solid black; width:50%;background-color: lightgrey; font-weight:bold;"><p style="margin-top:10px; margin-bottom:10px;">Goals and outcomes with current device</p></td>
            <td style="width: 100%; border: 1px solid black; width:50%;"><p style="margin-top:10px; margin-bottom:10px;">{{part_3_recommended_option_50}}</p></td>   
            </tr>
            <tr>
            <td style="width: 100%; border: 1px solid black; width:50%;background-color: lightgrey; font-weight:bold;"><p style="margin-top:10px; margin-bottom:10px;"> Alternatives trialled to improve outcomes</p></td>
            <td style="width: 100%; border: 1px solid black; width:50%;"><p style="margin-top:10px; margin-bottom:10px;">{{part_3_recommended_option_51}}</p></td>   
            </tr>
            <tr>
            <td style="width: 100%; border: 1px solid black; width:50%;background-color: lightgrey; font-weight:bold;"><p style="margin-top:10px; margin-bottom:10px;"> Goals and outcomes with recommended technology</p></td>
            <td style="width: 100%; border: 1px solid black; width:50%;"><p style="margin-top:10px; margin-bottom:10px;">{{part_3_recommended_option_52}}</p></td>   
            </tr>
            </table>


            <p style="font-size:12pt; margin-top:10px; margin-bottom:10px;"><strong style="font-weight:bold; font-size:12pt;">Context 5:</strong> Describe context, including frequency experienced</p>

            <table style="width:100%; border: 1px solid black;">
            <tr>
            <td style="width: 100%; border: 1px solid black; width:50%;background-color: lightgrey; font-weight:bold;"><p style="margin-top:10px; margin-bottom:10px;">Goals and outcomes with current device</p></td>
            <td style="width: 100%; border: 1px solid black; width:50%;"><p style="margin-top:10px; margin-bottom:10px;">{{part_3_recommended_option_53}}</p></td>   
            </tr>
            <tr>
            <td style="width: 100%; border: 1px solid black; width:50%;background-color: lightgrey; font-weight:bold;"><p style="margin-top:10px; margin-bottom:10px;"> Alternatives trialled to improve outcomes</p></td>
            <td style="width: 100%; border: 1px solid black; width:50%;"><p style="margin-top:10px; margin-bottom:10px;">{{part_3_recommended_option_54}}</p></td>   
            </tr>
            <tr>
            <td style="width: 100%; border: 1px solid black; width:50%;background-color: lightgrey; font-weight:bold;"><p style="margin-top:10px; margin-bottom:10px;"> Goals and outcomes with recommended technology</p></td>
            <td style="width: 100%; border: 1px solid black; width:50%;"><p style="margin-top:10px; margin-bottom:10px;">{{part_3_recommended_option_55}}</p></td>   
            </tr>
            </table>


            <p style="font-size:12pt; margin-top:10px; margin-bottom:10px;"><strong style="font-weight:bold; font-size:12pt;">Context 6:</strong> Describe context, including frequency experienced</p>

            <table style="width:100%; border: 1px solid black;">
            <tr>
            <td style="width: 100%; border: 1px solid black; width:50%;background-color: lightgrey; font-weight:bold;"><p style="margin-top:10px; margin-bottom:10px;">Goals and outcomes with current device</p></td>
            <td style="width: 100%; border: 1px solid black; width:50%;"><p style="margin-top:10px; margin-bottom:10px;">{{part_3_recommended_option_56}}</p></td>   
            </tr>
            <tr>
            <td style="width: 100%; border: 1px solid black; width:50%;background-color: lightgrey; font-weight:bold;"><p style="margin-top:10px; margin-bottom:10px;"> Alternatives trialled to improve outcomes</p></td>
            <td style="width: 100%; border: 1px solid black; width:50%;"><p style="margin-top:10px; margin-bottom:10px;">{{part_3_recommended_option_57}}</p></td>   
            </tr>
            <tr>
            <td style="width: 100%; border: 1px solid black; width:50%;background-color: lightgrey; font-weight:bold;"><p style="margin-top:10px; margin-bottom:10px;"> Goals and outcomes with recommended technology</p></td>
            <td style="width: 100%; border: 1px solid black; width:50%;"><p style="margin-top:10px; margin-bottom:10px;">{{part_3_recommended_option_58}}</p></td>   
            </tr>
            </table>


            <p style="font-size:12pt; margin-top:10px; margin-bottom:10px;"><strong style="font-weight:bold; font-size:12pt;">Context 7:</strong> Describe context, including frequency experienced</p>

            <table style="width:100%; border: 1px solid black;">
            <tr>
            <td style="width: 100%; border: 1px solid black; width:50%;background-color: lightgrey; font-weight:bold;"><p style="margin-top:10px; margin-bottom:10px;">Goals and outcomes with current device</p></td>
            <td style="width: 100%; border: 1px solid black; width:50%;"><p style="margin-top:10px; margin-bottom:10px;">{{part_3_recommended_option_59}}</p></td>   
            </tr>
            <tr>
            <td style="width: 100%; border: 1px solid black; width:50%;background-color: lightgrey; font-weight:bold;"><p style="margin-top:10px; margin-bottom:10px;"> Alternatives trialled to improve outcomes</p></td>
            <td style="width: 100%; border: 1px solid black; width:50%;"><p style="margin-top:10px; margin-bottom:10px;">{{part_3_recommended_option_60}}</p></td>   
            </tr>
            <tr>
            <td style="width: 100%; border: 1px solid black; width:50%;background-color: lightgrey; font-weight:bold;"><p style="margin-top:10px; margin-bottom:10px;"> Goals and outcomes with recommended technology</p></td>
            <td style="width: 100%; border: 1px solid black; width:50%;"><p style="margin-top:10px; margin-bottom:10px;">{{part_3_recommended_option_61}}</p></td>   
            </tr>
            </table>


            <p style="margin-top:12pt; margin-bottom:12px">3.2.3.1 <strong style="font-weight:bold">Other Relevant Information for intermediate, advanced and/or premium level hearing aids.</strong></p>

            <p style="font-size:12pt; margin-top:10px; margin-bottom:10px;">Provide any other relevant information, such as activities of daily living; formal and informal support arrangements (families or carers who can support device usage); the participant’s attitude towards hearing aids and technology in general; their expectations of the devices; and foreseeable life-stage transitions.</p>
            <p style="margin-top:12pt;"></p>
            <table style="width:100%; border: 1px solid black;">
            <tr>
            <td style="width: 100%; border: 1px solid black; width:20%;background-color: lightgrey;"><p style="margin-top:10px; margin-bottom:10px;"> Comment</p></td>
            <td style="width: 100%; border: 1px solid black; width:80%;"><p style="margin-top:10px; margin-bottom:10px;">{{part_3_recommended_option_62}}</p></td>

            </tr>
            </table>


            <p style="font-size:12pt; margin-top:10px; margin-bottom:10px;">3.2.3.2	<strong style="font-size:bold;">Most Suitable / Appropriate Alternative to facilitate goal attainment</strong></p>
            <p style="font-size:12pt; margin-top:10px; margin-bottom:10px;">Briefly summarise the evidence for the recommended option as the most suitable/appropriate alternative which will facilitate attainment of the participant’s goal compared to others considered, including lower cost alternatives. These alternatives can include accessories, or intervention that does not involve technology, such as counselling, auditory training or speech reading training. Note: In the instance where previous hearing aid use was not successful, provide evidence of actions, such as auditory training, counselling, and setting realistic expectations.</p>

            <table style="width:100%; border: 1px solid black;">
            <tr>
            <td style="font-size:bold; width: 100%; border: 1px solid black; width:35%;background-color: lightgrey;">
            <p style="margin-top:10px; margin-bottom:10px; font-size:bold;"> Recommended device name</p>
            </td>
            <td style="font-size:bold; width: 100%; border: 1px solid black; width:35%;background-color: lightgrey;">
            <p style="margin-top:10px; margin-bottom:10px; font-size:bold;"> Model number</p>
            </td>
            <td style="font-size:bold; width: 100%; border: 1px solid black; width:35%;background-color: lightgrey;">
            <p style="margin-top:10px; margin-bottom:10px; font-size:bold;"> style</p>
            </td>
            </tr>

            <tr>
            <td style="width: 100%; border: 1px solid black; width:35%;">
            <p style="margin-top:10px; margin-bottom:10px;">{{part_3_recommended_option_63}}</p>
            </td>
            <td style="width: 100%; border: 1px solid black; width:35%;">
            <p style="margin-top:10px; margin-bottom:10px;">{{part_3_recommended_option_64}}</p>
            </td>
            <td style="width: 100%; border: 1px solid black; width:35%;">
            <p style="margin-top:10px; margin-bottom:10px;">{{part_3_recommended_option_65}}</p>
            </td>
            </tr>
            </table>


            <p style="font-size:12pt; margin-top:10px; margin-bottom:10px;">Other devices trialled (including lower cost options)</p>
            <table style="width:100%; border: 1px solid black;">
            <tr>
            <td style="font-size:bold; width: 100%; border: 1px solid black; width:35%;background-color: lightgrey;">
            <p style="margin-top:10px; margin-bottom:10px;font-size:bold;"> device name</p>
            </td>
            <td style="font-size:bold; width: 100%; border: 1px solid black; width:35%;background-color: lightgrey;">
            <p style="margin-top:10px; margin-bottom:10px;font-size:bold;"> Model number</p>
            </td>
            <td style="font-size:bold; width: 100%; border: 1px solid black; width:35%;background-color: lightgrey;">
            <p style="margin-top:10px; margin-bottom:10px;font-size:bold;"> style</p>
            </td>
            </tr>

            <tr>
            <td style="width: 100%; border: 1px solid black; width:35%;">
            <p style="margin-top:10px; margin-bottom:10px;">{{part_3_recommended_option_66}}</p>
            </td>
            <td style="width: 100%; border: 1px solid black; width:35%;">
            <p style="margin-top:10px; margin-bottom:10px;">{{part_3_recommended_option_67}}</p>
            </td>
            <td style="width: 100%; border: 1px solid black; width:35%;">
            <p style="margin-top:10px; margin-bottom:10px;">{{part_3_recommended_option_68}}</p>
            </td>
            </tr>
            </table>

            <p style="font-size:12pt; margin-top:10px; margin-bottom:10px;">Steps taken to consider lower cost alternatives to improve hearing outcomes. For example; lower cost devices trialled, use of remote microphones / wireless streaming devices.</p>
            <table style="width:100%; border: 1px solid black;">
            <tr>
            <td style="width: 100%; border: 1px solid black; width:20%;background-color: lightgrey;"><p style="margin-top:10px; margin-bottom:10px;"> Comment</p></td>
            <td style="width: 100%; border: 1px solid black; width:80%;"><p style="margin-top:10px; margin-bottom:10px;">{{part_3_recommended_option_69}}</p></td>

            </tr>
            </table>
            <p style="font-size:12pt; margin-top:10px; margin-bottom:10px;">Are there any comparable support options that would achieve similar outcomes at a lower cost? For example, auditory training, training in handling devices, etc.</p>
            <table style="width:100%; border: 1px solid black;">
            <tr>
            <td style="width: 100%; border: 1px solid black; width:20%;background-color: lightgrey;"><p style="margin-top:10px; margin-bottom:10px;"> Comment</p></td>
            <td style="width: 100%; border: 1px solid black; width:80%;"><p style="margin-top:10px; margin-bottom:10px;">{{part_3_recommended_option_70}}</p></td>

            </tr>
            </table>
            <p>Evidence that the recommended device is the most appropriate, based on measurable goals and outcomes. Where an intermediate, advanced or premium level hearing aid is recommended, comparison to other devices is required. Where the participant has a hearing loss in both ears, it is expected that the evidence be based on two aided ears. For example; sound processor in one ear, recommended hearing aid in the other ear.</p>
            <table style="width:100%; border: 1px solid black;">
            <tr>
            <td style="width: 100%; border: 1px solid black; width:20%;background-color: lightgrey;"><p style="margin-top:10px; margin-bottom:10px;"> Comment</p></td>
            <td style="width: 100%; border: 1px solid black; width:80%;"><p style="margin-top:10px; margin-bottom:10px;">{{part_3_recommended_option_71}}</p></td>

            </tr>
            </table>
            <p style="margin-top:12pt:"></p>';

        $section4 = '<table style="background-color:#7209B7; border:none; width:100%;">
    <tr>
        <td>
            <p style="font-size:12pt; font-weight:bold; margin-top:5px; margin-bottom:5px; color: white"> 4.	Additional Technology / Supports</p>
        </td>
    </tr>
    </table>

    <p style="font-size:12pt;">Are there any additional supports required to improve functional device outcomes? For example, compatible assistive technology to support device use? Auditory training and/or counselling to derive improved functional benefit from the device? Management of the participant’s expectations of device outcomes? Device management support to assist the participant to independently handle their devices?.</p>
    <p style="font-size:12pt; margin-top:10px">Describe the supports required, including the reason for the recommendation.</p>
    <table style="width:100%; border: 1px solid black;">
    <tr>
        <td style="width: 100%; border: 1px solid black; width:20%;background-color: lightgrey;"><p style="margin-top:10px; margin-bottom:10px;"> Comment</p></td>
        <td style="width: 100%; border: 1px solid black; width:80%;"><p style="margin-top:10px; margin-bottom:10px;">{{part_4_additional_technology_supports}}</p></td>
        
    </tr>
    </table>
    <p style="margin-top:12pt:"></p>';

        $section5 = '<table style="background-color:#7209B7; border:none; width:100%;">
                <tr>
                    <td>
                        <p style="font-size:12pt; font-weight:bold; margin-top:5px; margin-bottom:5px; color: white"> 5.	Participant Agreement / Supports</p>
                    </td>
                </tr>
            </table>
            <p style="font-size:12pt;">Does the participant agree with the recommended AT solution and Auditory Rehabilitation Program? (Are the assessor’s clinical recommendation and participant preference the same?</p>
            <table style="width:100%; border: 1px solid black;">
            <tr>
                <td style="width: 100%; border: 1px solid black; width:20%;background-color: lightgrey;"><p style="margin-top:10px; margin-bottom:10px; font-size:bold;"> Yes</p></td>
                <td style="width: 100%; border: 1px solid black; width:80%;"><p style="margin-top:10px; margin-bottom:10px;">{{part_5_participant_agreement1}}</p></td>
                
            </tr>
            <tr>
                <td style="width: 100%; border: 1px solid black; width:20%;background-color: lightgrey;"><p style="margin-top:10px; margin-bottom:10px; font-size:bold;"> No</p></td>
                <td style="width: 100%; border: 1px solid black; width:80%;"><p style="margin-top:10px; margin-bottom:10px;">{{part_5_participant_agreement2}}</p></td>
                
            </tr>
            <tr>
                <td style="width: 100%; border: 1px solid black; width:20%;background-color: lightgrey;"><p style="margin-top:10px; margin-bottom:10px; font-size:bold;"> Provide details</p></td>
                <td style="width: 100%; border: 1px solid black; width:80%;"><p style="margin-top:10px; margin-bottom:10px;">{{part_5_participant_agreement3}}</p></td>
                
            </tr>
            </table>
            <p style="margin-top:12pt:"></p>';

        $section6 = '<table style="background-color:#7209B7; border:none; width:100%;">
        <tr>
            <td>
                <p style="font-size:12pt; font-weight:bold; margin-top:5px; margin-bottom:5px; color: white">6.	Attachments</p>
            </td>
        </tr>
    </table>
    <p style="font-size:12pt;">Please Attach:</p>
    <ol style="margin-bottom: 10px; margin-top: 10px">
    <li> Audiogram and audiological assessment report (including speech discrimination testing and tympanometry) obtained less than 12 months before the request.</li>
    <li> Signal to Noise Ratio (SNR) loss (for participants where it can be calculated)</li>
    <li> Report from ENT (if relevant, with participant’s consent).</li>
    <li> Reports from medical or allied health professionals where other conditions may impact on communication or use of hearing technology (with participant’s consent).</li>
    <li> Recent qoute</li>
    <li> Functional measures with recommended technology (For example; real ear insertion gain, comparative speech testing).</li>
    <li> Evidence required for device replacement or refitting as per Appendix A and Appendix B</li>
    </ol>
    <p style="margin-top:12pt:"></p>';
        $section7 = '<table style="background-color:#7209B7; border:none; width:100%;">
        <tr>
            <td>
                <p style="font-size:12pt; font-weight:bold; margin-top:5px; margin-bottom:5px; color: white">7. Details Assessor</p>
            </td>
        </tr>
    </table>
    <P style="font-size:12pt;"> <strong style="font-size:bold;">Declaration</strong> (indicate all relevant sections that apply)</P>
    <table>
    <tr>
        <td style="width: 100%; border: 1px solid black; width:10%;background-color: lightgrey;"><p style="margin-top:10px; margin-bottom:10px;">{{part_7_details_of_assessor1}}</p></td>
        <td style="width: 100%; border: 1px solid black; width:90%;"><p style="margin-top:10px; margin-bottom:10px;">I certify that I meet the NDIA expectations of AT assessor provider suitability (including understanding of the current NDIS Act</p></td>
    </tr>
    <tr>
        <td style="width: 100%; border: 1px solid black; width:10%;background-color: lightgrey;"><p style="margin-top:10px; margin-bottom:10px;">{{part_7_details_of_assessor2}}</p></td>
        <td style="width: 100%; border: 1px solid black; width:90%;"><p style="margin-top:10px; margin-bottom:10px;">I will provide appropriate evidence to the NDIA and/or Quality and Safe Guards Commission if and as requested</p></td>
    </tr>
    <tr>
        <td style="width: 100%; border: 1px solid black; width:10%;background-color: lightgrey;"><p style="margin-top:10px; margin-bottom:10px;">{{part_7_details_of_assessor3}}</p></td>
        <td style="width: 100%; border: 1px solid black; width:90%;"><p style="margin-top:10px; margin-bottom:10px;">I understand and acknowledge that the NDIA and participant will rely on my professional advice to select</p></td>
    </tr>
    <tr>
        <td style="width: 100%; border: 1px solid black; width:10%;background-color: lightgrey;"><p style="margin-top:10px; margin-bottom:10px;">{{part_7_details_of_assessor4}}</p></td>
        <td style="width: 100%; border: 1px solid black; width:90%;"><p style="margin-top:10px; margin-bottom:10px;">I have informed the participant of any arrangements with suppliers of hearing technology.</p></td>
    </tr>
    <tr>
        <td style="width: 100%; border: 1px solid black; width:10%;background-color: lightgrey;"><p style="margin-top:10px; margin-bottom:10px;">{{part_7_details_of_assessor5}}</p></td>
        <td style="width: 100%; border: 1px solid black; width:90%;"><p style="margin-top:10px; margin-bottom:10px;">For HSP eligible participants, I have informed them of services available through Specialist Hearing</p></td>
    </tr> 
    </table>


    <p style="font-weight:bold; font-size:13pt;margin-top:20px; margin-bottom:20px;">Assessor’s Details</p>
    <p style="margin-top:12pt;"></p>
    <table>
    <tr>
        <td style="width: 100%; border: 1px solid black; width:50%;background-color: lightgrey;"><p style="margin-top:10px; margin-bottom:10px;">Name</p></td>
        <td style="width: 100%; border: 1px solid black; width:50%;"><p style="margin-top:10px; margin-bottom:10px;">{{part_7_details_of_assessor6}}</p></td>
    </tr>
    <tr>
        <td style="width: 100%; border: 1px solid black; width:50%;background-color: lightgrey;"><p style="margin-top:10px; margin-bottom:10px;">Qualification</p></td>
        <td style="width: 100%; border: 1px solid black; width:50%;"><p style="margin-top:10px; margin-bottom:10px;">Audiologist / Audiometrist Please list qualifications:</p></td>
    </tr>
    <tr>
        <td style="width: 100%; border: 1px solid black; width:50%;background-color: lightgrey;"><p style="margin-top:10px; margin-bottom:10px;">Membership of Professional Association</p></td>
        <td style="width: 100%; border: 1px solid black; width:50%;"><p style="margin-top:10px; margin-bottom:10px;">{{part_7_details_of_assessor7}}</p></td>
    </tr>
    <tr>
    <td style="width: 100%; border: 1px solid black; width:50%;background-color: lightgrey;"><p style="margin-top:10px; margin-bottom:10px;">Organisation / Company</p></td>
    <td style="width: 100%; border: 1px solid black; width:50%;"><p style="margin-top:10px; margin-bottom:10px;">{{part_7_details_of_assessor8}}</p></td>
    </tr>
    <tr>
        <td style="width: 100%; border: 1px solid black; width:50%;background-color: lightgrey;"><p style="margin-top:10px; margin-bottom:10px;">Current arrangements with preferred suppliers. Include details of supplier(s) and types of devices</p></td>
        <td style="width: 100%; border: 1px solid black; width:50%;"><p style="margin-top:10px; margin-bottom:10px;">{{part_7_details_of_assessor9}}</p></td>
    </tr>
    <tr>
        <td style="width: 100%; border: 1px solid black; width:50%;background-color: lightgrey;"><p style="margin-top:10px; margin-bottom:10px;">NDIS Provider Registration number (where applicable)</p></td>
        <td style="width: 100%; border: 1px solid black; width:50%;"><p style="margin-top:10px; margin-bottom:10px;">{{part_7_details_of_assessor10}}</p></td>
    </tr>
    <tr>
        <td style="width: 100%; border: 1px solid black; width:50%;background-color: lightgrey;"><p style="margin-top:10px; margin-bottom:10px;">Phone</p></td>
        <td style="width: 100%; border: 1px solid black; width:50%;"><p style="margin-top:10px; margin-bottom:10px;">{{part_7_details_of_assessor11}}</p></td>
    </tr>
    
    <tr>
        <td style="width: 100%; border: 1px solid black; width:50%;background-color: lightgrey;"><p style="margin-top:10px; margin-bottom:10px;">Emial</p></td>
        <td style="width: 100%; border: 1px solid black; width:50%;"><p style="margin-top:10px; margin-bottom:10px;">{{part_7_details_of_assessor12}}</p></td>
    </tr>
    <tr>
        <td style="width: 100%; border: 1px solid black; width:50%;background-color: lightgrey;"><p style="margin-top:10px; margin-bottom:10px;">Signature</p></td>
        <td style="width: 100%; border: 1px solid black; width:50%;"><p style="margin-top:10px; margin-bottom:10px;">{{part_7_details_of_assessor13}}</p></td>
    </tr>
    <tr>
        <td style="width: 100%; border: 1px solid black; width:50%;background-color: lightgrey;"><p style="margin-top:10px; margin-bottom:10px;">Date of Assessment(s)</p></td>
        <td style="width: 100%; border: 1px solid black; width:50%;"><p style="margin-top:10px; margin-bottom:10px;">{{part_7_details_of_assessor14}}</p></td>
    </tr>
    <tr>
        <td style="width: 100%; border: 1px solid black; width:50%;background-color: lightgrey;"><p style="margin-top:10px; margin-bottom:10px;">Name</p></td>
        <td style="width: 100%; border: 1px solid black; width:50%;"><p style="margin-top:10px; margin-bottom:10px;">{{part_7_details_of_assessor15}}</p></td>
    </tr>
    <tr>
        <td style="width: 100%; border: 1px solid black; width:50%;background-color: lightgrey;"><p style="margin-top:10px; margin-bottom:10px;">Date of Report</p></td>
        <td style="width: 100%; border: 1px solid black; width:50%;"><p style="margin-top:10px; margin-bottom:10px;">{{part_7_details_of_assessor16}}</p></td>
    </tr>
    </table>
    
    <p style="margin-top:12pt:"></p>';

        $section8 = '<table style="background-color:#7209B7; border:none; width:100%;">
    <tr>
        <td>
            <p style="font-size:12pt; font-weight:bold; margin-top:5px; margin-bottom:5px; color: white">8.	Participant Consent and Acknowledgement of Interest</p>
        </td>
    </tr>
        </table>

        <p style="font-weight:bold; font-size:13pt;margin-top:20px; margin-bottom:20px;">For the participant to complete</p>
        <p style="font-size:13pt;margin-top:20px; margin-bottom:20px;">Has your audiologist/Audiometrist discussed arrangements they have with particular suppliers of hearing aids?</p>
        <table style="width:100%;">
        <tr>
            <td style=" border: 1px solid black; width:20%;background-color: lightgrey;"><p style="margin-top:10px; margin-bottom:10px;">Yes</p></td>
            <td style=" border: 1px solid black;"><p style="margin-top:10px; margin-bottom:10px;">{{part_8_participant_consent_and_acknowledgement_of_iinterest1}}</p></td>
        </tr>
        <tr>
            <td style=" border: 1px solid black; width:20%;background-color: lightgrey;"><p style="margin-top:10px; margin-bottom:10px;">No</p></td>
            <td style=" border: 1px solid black;"><p style="margin-top:10px; margin-bottom:10px;">{{part_8_participant_consent_and_acknowledgement_of_iinterest2}}</p></td>
        </tr>
        </table>
        <p style="font-size:13pt;margin-top:20px; margin-bottom:20px;">Do you understand that your Audiologist/Audiometrist may only work with a small number of hearing aid brands, and that other providers may recommend different hearing aids?</p>
        <table style="width:100%;">
        <tr>
            <td style=" border: 1px solid black; width:20%;background-color: lightgrey;"><p style="margin-top:10px; margin-bottom:10px;">Yes</p></td>
            <td style=" border: 1px solid black;"><p style="margin-top:10px; margin-bottom:10px;">{{part_8_participant_consent_and_acknowledgement_of_iinterest3}}</p></td>
        </tr>
        <tr>
            <td style=" border: 1px solid black; width:20%;background-color: lightgrey;"><p style="margin-top:10px; margin-bottom:10px;">No</p></td>
            <td style=" border: 1px solid black;"><p style="margin-top:10px; margin-bottom:10px;">{{part_8_participant_consent_and_acknowledgement_of_iinterest4}}</p></td>
        </tr>
        </table>


        <p style="font-size:13pt;margin-top:20px; margin-bottom:20px;">Do you understand that the National Disability Insurance Agency (NDIA) will generally fund the standard level of technology you require to achieve functional hearing and that not all requested technology may be funded?</p>
        <table style="width:100%;">
        <tr>
            <td style=" border: 1px solid black; width:20%;background-color: lightgrey;"><p style="margin-top:10px; margin-bottom:10px;">Yes</p></td>
            <td style=" border: 1px solid black;"><p style="margin-top:10px; margin-bottom:10px;">{{part_8_participant_consent_and_acknowledgement_of_iinterest5}}</p></td>
        </tr>
        <tr>
            <td style=" border: 1px solid black; width:20%;background-color: lightgrey;"><p style="margin-top:10px; margin-bottom:10px;">No</p></td>
            <td style=" border: 1px solid black;"><p style="margin-top:10px; margin-bottom:10px;">{{part_8_participant_consent_and_acknowledgement_of_iinterest6}}</p></td>
        </tr>
        </table>


        <p style="font-size:13pt;margin-top:20px; margin-bottom:20px;">The NDIA may need to contact your Audiologist/Audiometrist to discuss information within your assessment and quotation(s). This will assist the NDIA to determine if your request can be funded under the NDIS. Do you consent to the NDIA collecting and disclosing your information including from these third parties mentioned above, in relation to your hearing technology assessment and quotation?</p>
        <table style="width:100%;">
        <tr>
            <td style=" border: 1px solid black; width:20%;background-color: lightgrey;"><p style="margin-top:10px; margin-bottom:10px;">Yes, I consent</p></td>
            <td style=" border: 1px solid black;"><p style="margin-top:10px; margin-bottom:10px;">{{part_8_participant_consent_and_acknowledgement_of_iinterest7}}</p></td>
        </tr>
        <tr>
            <td style=" border: 1px solid black; width:20%;background-color: lightgrey;"><p style="margin-top:10px; margin-bottom:10px;">No, I do not consent</p></td>
            <td style=" border: 1px solid black;"><p style="margin-top:10px; margin-bottom:10px;">{{part_8_participant_consent_and_acknowledgement_of_iinterest8}}</p></td>
        </tr>
        </table>


        <table style="width:100%; border: 1px solid black;">
        <tr>
            <td style="width: 100%; border: 1px solid black; width:50%;background-color: lightgrey; font-weight:bold;"><p style="margin-top:10px; margin-bottom:10px;">Participant’s signature</p></td>
            <td style="width: 100%; border: 1px solid black; width:50%;"><p style="margin-top:10px; margin-bottom:10px;">{{part_8_participant_consent_and_acknowledgement_of_iinterest9}}</p></td>   
        </tr>
        </table>

        <table style=" width:100%; border: 1px solid black;">
        <tr>
            <td style="width:40%; background-color: lightgrey; font-size: 17px;">{{part_8_participant_consent_and_acknowledgement_of_iinterest10}}</td>
            <td style="width:60%; border: 1px solid black;">I understand that I am giving consent to the NDIA to do the things with my information set out in this section.</td>
        </tr>
        <tr>
            <td style="width:40%; background-color: lightgrey; font-size: 17px;">{{part_8_participant_consent_and_acknowledgement_of_iinterest11}}</td>
            <td style="width:60%; border: 1px solid black;">I understand that I can access the NDIA’s Privacy Notice and Privacy Policy on the NDIA website</td>
        </tr>
        </table>

        <p style="margin-top:12pt;"></p>
        <table style=" width:100%; border: 1px solid black;">
        <tr>
            <td style="width:30%; background-color: lightgrey; font-size: 17px;">Signature</td>
            <td style="width:70%; border: 1px solid black;">{{part_8_participant_consent_and_acknowledgement_of_iinterest12}}</td>
        </tr>
        <tr>
            <td style="width:30%; background-color: lightgrey; font-size: 17px;">Date</td>
            <td style="width:70%; border: 1px solid black;">{{part_8_participant_consent_and_acknowledgement_of_iinterest13}}</td>
        </tr>
        <tr>
            <td style="width:30%; background-color: lightgrey; font-size: 17px;">Full name (please print)</td>
            <td style="width:70%; border: 1px solid black;">{{part_8_participant_consent_and_acknowledgement_of_iinterest14}}</td>
        </tr>
        </table>

        <p style="font-size:12pt; margin-top:5px;"> <strong style="font-size:12pt; font-weight:bold">If you have signed this Form on behalf of the NDIS participant,</strong> please complete the details below. It is an offence to provide false or misleading information</p>
        <p style="font-size:12pt; margin-top:10px;">We may require you to provide evidence of your authority to sign on behalf of the person</p>

        <table style=" width:100%; border: 1px solid black;">
        <tr>
            <td style="width:30%; background-color: lightgrey; font-size: 17px;">Signature</td>
            <td style="width:70%; border: 1px solid black;">{{part_8_participant_consent_and_acknowledgement_of_iinterest15}}</td>
        </tr>
        <tr>
            <td style="width:30%; background-color: lightgrey; font-size: 17px;">Date</td>
            <td style="width:70%; border: 1px solid black;">{{part_8_participant_consent_and_acknowledgement_of_iinterest16}}</td>
        </tr>
        <tr>
            <td style="width:30%; background-color: lightgrey; font-size: 17px;">Full name (please print)</td>
            <td style="width:70%; border: 1px solid black;">{{part_8_participant_consent_and_acknowledgement_of_iinterest17}}</td>
        </tr>
        <tr>
        <td style="width:30%; background-color: lightgrey; font-size: 17px;">Relationship to participant or person wishing to become an NDIS participant</td>
        <td style="width:70%; border: 1px solid black;">{{part_8_participant_consent_and_acknowledgement_of_iinterest18}}</td>
        </tr>
        </table>
        <p style="margin-top:12pt:"></p>';

        $section9 = '  <table style="background-color:#7209B7; border:none; width:100%;">
        <tr>
            <td>
                <p style="font-size:12pt; font-weight:bold; margin-top:5px; margin-bottom:5px; color: white">  9.	Appendix A: Replacement Device Request</p>
            </td>
        </tr>
        </table>

        <p style="font-size:12pt; margin-top:10px; margin-bottom:10px;">Replacement device requests occur when the previous device is lost / damaged beyond repair / has reached the end of its service life AND the same level of technology is requested</p>
        <table style=" width:100%; border: 1px solid black;">
        <tr>
        <td style="width:30%; background-color: lightgrey; font-size: 17px; font-weight:bold;">Reason</td>
        <td style="width:35%; background-color: lightgrey; font-size: 17px; font-weight:bold;">Evidence  required</td>
        <td style="width:35%; background-color: lightgrey; font-size: 17px; font-weight:bold;">Considerations</td>

        </tr>

        <tr>
        <td style="width:30%; border: 1px solid black;">Current device has reached the end of its service life</td>
        <td style="width:35%; border: 1px solid black;">Date of last fitting of device to be provided by audiologist/ audiometrist, with model and make of device.</td>
        <td style="width:35%; border: 1px solid black;">Expected service life of hearing aids is 5 years.
        Expected service life of sound processors is 6 years
        </td>
        </tr>

        <tr>
        <td style="width:30%;font-size: 17px; border: 1px solid black;">Current device is out of warranty</td>
        <td style="width:35%;font-size: 17px; border: 1px solid black;">Non required</td>
        <td style="width:35%;font-size: 17px; border: 1px solid black;">Completion of the warranty period is not a valid reason for replacement of hearing technology.</td>
        </tr>
        <tr>
        <td style="width:30%;font-size: 17px; border: 1px solid black;">Current device is faulty or damaged beyond repair</td>
        <td style="width:35%;font-size: 17px; border: 1px solid black;">Service and maintenance report from the manufacturer, demonstrating the device requires a major repair that is not considered cost effective and /or the device cannot be repaired.</td>
        <td style="width:35%;font-size: 17px; border: 1px solid black;">NDIS will replace a faulty device that is out of warranty or a damaged device, with the same item on the market.</td>
        </tr>
        <tr>
        <td style="width:30%;font-size: 17px; border: 1px solid black;">Current device is lost or stolen</td>
        <td style="width:35%;font-size: 17px; border: 1px solid black;">A statutory declaration is required.
        Consideration needs to be given whether the cost of the device can be recovered through household insurance where relevant.
        </td>
        <td style="width:35%; border: 1px solid black;">NDIS will replace a lost / stolen device with the same item on the market (if available), unless the participant’s needs meet upgrade criteria.</td>
        </tr>
        </table>

        <p style="margin-top:12pt:"></p>';

        $section10 = '<table style="width:100%; border: 1px solid black;">
        <tr>
            <td style="width: 100%; border: 1px solid black; width:50%;background-color: lightgrey; font-weight:bold;"><p style="margin-top:10px; margin-bottom:10px;">Participant’s signature</p></td>
            <td style="width: 100%; border: 1px solid black; width:50%;"><p style="margin-top:10px; margin-bottom:10px;"> </p></td>   
        </tr>
        </table>

        <table style=" width:100%; border: 1px solid black;">
        <tr>
        <td style="width:40%; background-color: lightgrey; font-size: 17px;">Fiel data</td>
        <td style="width:60%; border: 1px solid black;">I understand that I am giving consent to the NDIA to do the things with my information set out in this section.</td>
        </tr>
        <tr>
        <td style="width:40%; background-color: lightgrey; font-size: 17px;">field data</td>
        <td style="width:60%; border: 1px solid black;">I understand that I can access the NDIA’s Privacy Notice and Privacy Policy on the NDIA website</td>
        </tr>
        </table>

        <p style="margin-top:12pt;"></p>
        <table style=" width:100%; border: 1px solid black;">
        <tr>
        <td style="width:30%; background-color: lightgrey; font-size: 17px;">Signature</td>
        <td style="width:70%; border: 1px solid black;"></td>
        </tr>
        <tr>
        <td style="width:30%; background-color: lightgrey; font-size: 17px;">Date</td>
        <td style="width:70%; border: 1px solid black;"></td>
        </tr>
        <tr>
        <td style="width:30%; background-color: lightgrey; font-size: 17px;">Full name (please print)</td>
        <td style="width:70%; border: 1px solid black;"></td>
        </tr>

        </table>

        <p style="font-size:12pt; margin-top:5px;"> <strong style="font-size:12pt; font-weight:bold">If you have signed this Form on behalf of the NDIS participant,</strong> please complete the details below. It is an offence to provide false or misleading information</p>
        <p style="font-size:12pt; margin-top:10px;">We may require you to provide evidence of your authority to sign on behalf of the person</p>

        <table style=" width:100%; border: 1px solid black;">
        <tr>
        <td style="width:30%; background-color: lightgrey; font-size: 17px;">Signature</td>
        <td style="width:70%; border: 1px solid black;"></td>
        </tr>
        <tr>
        <td style="width:30%; background-color: lightgrey; font-size: 17px;">Date</td>
        <td style="width:70%; border: 1px solid black;"></td>
        </tr>
        <tr>
        <td style="width:30%; background-color: lightgrey; font-size: 17px;">Full name (please print)</td>
        <td style="width:70%; border: 1px solid black;"></td>
        </tr>
        <tr>
        <td style="width:30%; background-color: lightgrey; font-size: 17px;">Relationship to participant or person wishing to become an NDIS participant</td>
        <td style="width:70%; border: 1px solid black;"></td>
        </tr>
        </table>
        <p style="margin-top:12pt:"></p>
        <table style="background-color:#7209B7; border:none; width:100%;">
            <tr>
                <td>
                    <p style="font-size:12pt; font-weight:bold; margin-top:5px; margin-bottom:5px; color: white">  9.	Appendix A: Replacement Device Request</p>
                </td>
            </tr>
        </table>

        <p style="font-size:12pt; margin-top:10px; margin-bottom:10px;">Replacement device requests occur when the previous device is lost / damaged beyond repair / has reached the end of its service life AND the same level of technology is requested</p>
        <table style=" width:100%; border: 1px solid black;">
        <tr>
        <td style="width:30%; background-color: lightgrey; font-size: 17px; font-weight:bold;">Reason</td>
        <td style="width:35%; background-color: lightgrey; font-size: 17px; font-weight:bold;">Evidence  required</td>
        <td style="width:35%; background-color: lightgrey; font-size: 17px; font-weight:bold;">Considerations</td>
        
        </tr>

        <tr>
        <td style="width:30%; border: 1px solid black;">Current device has reached the end of its service life</td>
        <td style="width:35%; border: 1px solid black;">Date of last fitting of device to be provided by audiologist/ audiometrist, with model and make of device.</td>
        <td style="width:35%; border: 1px solid black;">Expected service life of hearing aids is 5 years.
        Expected service life of sound processors is 6 years
        </td>
        </tr>

        <tr>
        <td style="width:30%;font-size: 17px; border: 1px solid black;">Current device is out of warranty</td>
        <td style="width:35%;font-size: 17px; border: 1px solid black;">Non required</td>
        <td style="width:35%;font-size: 17px; border: 1px solid black;">Completion of the warranty period is not a valid reason for replacement of hearing technology.</td>
        </tr>
        <tr>
        <td style="width:30%;font-size: 17px; border: 1px solid black;">Current device is faulty or damaged beyond repair</td>
        <td style="width:35%;font-size: 17px; border: 1px solid black;">Service and maintenance report from the manufacturer, demonstrating the device requires a major repair that is not considered cost effective and /or the device cannot be repaired.</td>
        <td style="width:35%;font-size: 17px; border: 1px solid black;">NDIS will replace a faulty device that is out of warranty or a damaged device, with the same item on the market.</td>
        </tr>
        <tr>
        <td style="width:30%;font-size: 17px; border: 1px solid black;">Current device is lost or stolen</td>
        <td style="width:35%;font-size: 17px; border: 1px solid black;">A statutory declaration is required.
        Consideration needs to be given whether the cost of the device can be recovered through household insurance where relevant.
        </td>
        <td style="width:35%; border: 1px solid black;">NDIS will replace a lost / stolen device with the same item on the market (if available), unless the participant’s needs meet upgrade criteria.</td>
        </tr>
        </table>

        <p style="margin-top:12pt:"></p>
        <table style="background-color:#7209B7; border:none; width:100%;">
        <tr>
            <td>
                <p style="font-size:12pt; font-weight:bold; margin-top:5px; margin-bottom:5px; color: white">10.	Appendix B: Refit / Upgrade Request</p>
            </td>
        </tr>
        </table>
        <p style="font-size:13pt;margin-top:20px; margin-bottom:20px;">A refitted/upgraded device is requested when a new device with higher specifications or a different style is required because the participant’s functional capacity has changed.</p>
        <p></p>
        <table style=" width:100%; border: 1px solid black;">
        <tr>
        <td style="width:50%; background-color: lightgrey; font-size: 17px; font-weight:bold;">Reason</td>
        <td style="width:50%; background-color: lightgrey; font-size: 17px; font-weight:bold;">Evidence  required</td>
        </tr>

        <tr>
        <td style="width:30%;font-size: 17px; border: 1px solid black;">The current hearing devices are not suitable because they can no longer be optimised by adjustments or any other modifications to meet current gain requirements.</td>
        <td style="width:30%;font-size: 17px; border: 1px solid black;">Documented evidence on file that the current hearing technology is established to be in optimal working order. <strong style="font-weight:bold;"> And</strong>After adjustment/modification has been made to current hearing aid(s) through manufacturer service/repair, mould/shell modification or replacement to accommodate changes in thresholds, Real Ear Measurements show a poor match to targets. <strong style="font-weight:bold;"> Or </strong>Aid specifications show that the client’s current Hearing Threshold Level (HTL) is outside the range of the current hearing aid(s) and they were previously optimally fitted.</td>
        </tr>
        <tr>


        <td style="width:30%;font-size: 17px; border: 1px solid black;">The current hearing technology is unsuitable because the client can no longer use the device due to a significant deterioration in health, dexterity or cognitive ability since last fitting. <strong style="font-weight:bold;"> Or </strong>A permanent change in physical condition of the ear or ear health has occurred since last fitting and the client requires a different style of hearing device(s) to accommodate this change</td>
        <td style="width:30%;font-size: 17px; border: 1px solid black;">Documented evidence on file describes the change in physical condition of the ear or ear health; or describes the client’s deterioration and how this affects the client’s ability to manage their hearing aid(s); or a letter from the client’s doctor, carer, nurse, supervisor etc. giving details of how the condition affects current hearing aid usage.<strong style="font-weight:bold;"> And </strong>Details of what has been tried with the current hearing aid(s) or why they cannot be modified <strong style="font-weight:bold;"> And </strong> Details how the new aid(s) proposed for refitting will address the issues with the current hearing aid(s)</td>
        </tr>
        </table>
        <p style="margin-top:12pt:"></p>';


        $section11 = '<table style="background-color:#7209B7; border:none; width:100%;">
        <tr>
            <td>
                <p style="font-size:12pt; font-weight:bold; margin-top:5px; margin-bottom:5px; color: white">11.	Appendix C: Examples of functional measures for hearing device refitting requests</p>
            </td>
        </tr>
        </table>
        <p style="font-size:13pt;margin-top:20px; margin-bottom:20px;;"> <strong style="font-weight:bold;">Please note: </strong>This Appendix is to be used as a guide for functional evidence.  Please complete as appropriate or attach relevant clinical documentation that provides similar information.</p>
        <strong style="font-weight:bold; font-size:13pt;">Option 1</strong>
        <ul style="margin-bottom: 10px; margin-top: 10px; font-size: 17px;">
        <li style="font-size: 16px;">Aided Audiogram or Real Ear Measurements (Please attach)</li>
        <li style="font-size: 16px;">Hearing Goals</li>
        <li style="font-size: 16px;">Speech Audiometry including dynamic range, Loudness Discomfort Level (LDL) and speech in noise testing (Please attach)</li>
        </ul>
        <p style="font-size:13pt;margin-top:20px; margin-bottom:20px;">What functional benefit does the requested device provide in the context of the participant’s current communication profile (including all current hearing supports accessed)? Provide comparison, for example, hearing aids alone, hearing aids with a remote microphone.</p>
        <p style="font-size:13pt; margin-top:20px; margin-bottom:20px;"><strong style="font-weight:bold;"> Speach in noise, </strong>for example, Quick SIN / SPIN / Other</p>

        <table style=" width:100%; border: 1px solid black; border-collapse: collapse;
        margin: auto;">
        <tr>
        <td style="width:20%; background-color: lightgrey; font-size: 17px; font-weight:bold;">Unaided</td>
        <td style="width:20%; background-color: lightgrey; font-size: 17px; font-weight:bold;">Current preferred aided condition (if relevant)</td>
        <td style="width:20%; background-color: lightgrey; font-size: 17px; font-weight:bold;">Option 1 Device Details</td>
        <td style="width:20%; background-color: lightgrey; font-size: 17px; font-weight:bold;">Option 2 Device Details</td>
        <td style="width:20%; background-color: lightgrey; font-size: 17px; font-weight:bold;">Option 3 Device Details</td>

        </tr>

        <tr>
        <td style="width:20%;font-size: 17px; border: 1px solid black;">{{part_11_appendix_C_examples_of_functional_measures1}}</td>
        <td style="width:20%;font-size: 17px; border: 1px solid black;">{{part_11_appendix_C_examples_of_functional_measures2}}</td>
        <td style="width:20%;font-size: 17px; border: 1px solid black;">{{part_11_appendix_C_examples_of_functional_measures3}}</td>
        <td style="width:20%;font-size: 17px; border: 1px solid black;">{{part_11_appendix_C_examples_of_functional_measures4}}</td>
        <td style="width:20%;font-size: 17px; border: 1px solid black;">{{part_11_appendix_C_examples_of_functional_measures5}}</td>
        </tr>
        </table> 


        <p style="margin-top:12px;"></p>
        <table style="width:100%; border: 1px solid black; border-collapse: collapse; margin: auto;">
        <tr>
        <td style="width:10%; background-color: lightgrey; font-size: 17px; font-weight:bold;">Speach audiometry</td>
        <td style="width:10%; background-color: lightgrey; font-size: 17px; font-weight:bold;">Condition</td>
        <td style="width:10%; background-color: lightgrey; font-size: 17px; font-weight:bold;">Unaided</td>
        <td style="width:20%; background-color: lightgrey; font-size: 17px; font-weight:bold;">Current aided</td>
        <td style="width:20%; background-color: lightgrey; font-size: 17px; font-weight:bold;">Option 1 Device Details</td>
        <td style="width:15%; background-color: lightgrey; font-size: 17px; font-weight:bold;">Option 2 Device Details</td>
        <td style="width:15%; background-color: lightgrey; font-size: 17px; font-weight:bold;">Option 3 Device Details</td>
        </tr>
        <tr>
        <td style="width:10%;font-size: 17px; border: 1px solid black;">Sentence test</td>
        <td style="width:10%;font-size: 17px; border: 1px solid black;">Hearing aid /Sound</td>
        <td style="width:10%;font-size: 17px; border: 1px solid black;">{{part_11_appendix_C_examples_of_functional_measures7}}</td>
        <td style="width:20%;font-size: 17px; border: 1px solid black;">{{part_11_appendix_C_examples_of_functional_measures8}}</td>
        <td style="width:20%;font-size: 17px; border: 1px solid black;">{{part_11_appendix_C_examples_of_functional_measures9}}</td>
        <td style="width:15%;font-size: 17px; border: 1px solid black;">{{part_11_appendix_C_examples_of_functional_measures10}}</td>
        <td style="width:15%;font-size: 17px; border: 1px solid black;">{{part_11_appendix_C_examples_of_functional_measures11}}</td>
        </tr>
        <tr>
        <td style="width:10%;font-size: 17px; border: 1px solid black;">{{part_11_appendix_C_examples_of_functional_measures6}}</td>
        <td style="width:10%;font-size: 17px; border: 1px solid black;">Recorded voice at</td>
        <td style="width:10%;font-size: 17px; border: 1px solid black;">{{part_11_appendix_C_examples_of_functional_measures12}}</td>
        <td style="width:20%;font-size: 17px; border: 1px solid black;">{{part_11_appendix_C_examples_of_functional_measures13}}</td>
        <td style="width:20%;font-size: 17px; border: 1px solid black;">{{part_11_appendix_C_examples_of_functional_measures14}}</td>
        <td style="width:15%;font-size: 17px; border: 1px solid black;">{{part_11_appendix_C_examples_of_functional_measures15}}</td>
        <td style="width:15%;font-size: 17px; border: 1px solid black;">{{part_11_appendix_C_examples_of_functional_measures16}}</td>
        </tr>
        </table>


        <strong style="font-weight:bold; font-size:13pt;">Other relevant Functional Assessments: </strong> <p style="font-size:13pt;margin-top:20px; margin-bottom:20px;">Please describe or attach.</p>
        <table style="width:100%; border: 1px solid black;">
        <tr>
        <td style="width: 100%; border: 1px solid black; width:20%;background-color: lightgrey;"><p style="margin-top:10px; margin-bottom:10px;"> Comment</p></td>
        <td style="width: 100%; border: 1px solid black; width:80%;"><p style="margin-top:10px; margin-bottom:10px;">{{part_11_appendix_C_examples_of_functional_measures17}}</p></td>

        </tr>
        </table>



        <p style="font-weight:bold; font-size:12pt;">option 2:</p>
        <p style="font-size:12pt;margin-top:20px; margin-bottom:20px;">This table is to be used as a guide for functional evidence required to make a reasonable and necessary decision. Cross / complete as appropriate or attach relevant information from clinical documentation where convenient.</p>
        <p style="font-size:12pt;margin-top:20px; margin-bottom:20px;">Please attach aided audiogram, or Real Ear Measurement</p>
        <table style="width:100%; border: 1px solid black;">
        <tr>
        <td style="width: 100%; border: 1px solid black; width:20%;background-color: lightgrey;"><p style="margin-top:10px; margin-bottom:10px;"> Yes</p></td>
        <td style="width: 100%; border: 1px solid black; width:80%;"><p style="margin-top:10px; margin-bottom:10px;">{{part_11_appendix_C_examples_of_functional_measures18}}</p></td>
        </tr>
        <tr>
        <td style="width: 100%; border: 1px solid black; width:20%;background-color: lightgrey;"><p style="margin-top:10px; margin-bottom:10px;"> No</p></td>
        <td style="width: 100%; border: 1px solid black; width:80%;"><p style="margin-top:10px; margin-bottom:10px;">{{part_11_appendix_C_examples_of_functional_measures19}}</p></td>
        </tr>
        </table>


        <p style="margin-top:8px;"></p>
        <p style="font-weight:bold; font-size:12pt;">Threshold Information</p>
        <p style="font-weight:bold; font-size:12pt;">Speach test 1</p>
        <p style="font-size:12pt;">Sentence testing in quite (average conversational level)</p>
        <p style="margin-top:12px;"></p>
        <table style=" width:100%; border: 1px solid black; border-collapse: collapse;
        margin: auto;">
        <tr>
        <td style="width:10%; background-color: lightgrey; font-size: 17px; font-weight:bold;">Ear</td>
        <td style="width:10%; background-color: lightgrey; font-size: 17px; font-weight:bold;">Unaided</td>
        <td style="width:10%; background-color: lightgrey; font-size: 17px; font-weight:bold;">Aided Preference 3</td>
        <td style="width:20%; background-color: lightgrey; font-size: 17px; font-weight:bold;">Aided with remote microphone</td>
        <td style="width:20%; background-color: lightgrey; font-size: 17px; font-weight:bold;">Auditory Alone</td>
        <td style="width:15%; background-color: lightgrey; font-size: 17px; font-weight:bold;">Auditory – Visual</td>
        <td style="width:15%; background-color: lightgrey; font-size: 17px; font-weight:bold;">Visual alone</td>

        </tr>

        <tr>
        <td style="width:10%;font-size: 17px; border: 1px solid black;">Left</td>
        <td style="width:10%;font-size: 17px; border: 1px solid black;">{{part_11_appendix_C_examples_of_functional_measures20}}</td>
        <td style="width:10%;font-size: 17px; border: 1px solid black;">{{part_11_appendix_C_examples_of_functional_measures21}}</td>
        <td style="width:20%;font-size: 17px; border: 1px solid black;">{{part_11_appendix_C_examples_of_functional_measures22}}</td>
        <td style="width:20%;font-size: 17px; border: 1px solid black;">{{part_11_appendix_C_examples_of_functional_measures23}}</td>
        <td style="width:15%;font-size: 17px; border: 1px solid black;">{{part_11_appendix_C_examples_of_functional_measures24}}</td>
        <td style="width:15%;font-size: 17px; border: 1px solid black;">{{part_11_appendix_C_examples_of_functional_measures25}}</td>
        </tr>
        <tr>
        <td style="width:10%;font-size: 17px; border: 1px solid black;">Right</td>
        <td style="width:10%;font-size: 17px; border: 1px solid black;">{{part_11_appendix_C_examples_of_functional_measures26}}</td>
        <td style="width:10%;font-size: 17px; border: 1px solid black;">{{part_11_appendix_C_examples_of_functional_measures27}}</td>
        <td style="width:20%;font-size: 17px; border: 1px solid black;">{{part_11_appendix_C_examples_of_functional_measures28}}</td>
        <td style="width:20%;font-size: 17px; border: 1px solid black;">{{part_11_appendix_C_examples_of_functional_measures29}}</td>
        <td style="width:15%;font-size: 17px; border: 1px solid black;">{{part_11_appendix_C_examples_of_functional_measures30}}</td>
        <td style="width:15%;font-size: 17px; border: 1px solid black;">{{part_11_appendix_C_examples_of_functional_measures31}}</td>
        </tr>
        <tr>
        <td style="width:10%;font-size: 17px; border: 1px solid black;">Both</td>
        <td style="width:10%;font-size: 17px; border: 1px solid black;">{{part_11_appendix_C_examples_of_functional_measures32}}</td>
        <td style="width:10%;font-size: 17px; border: 1px solid black;">{{part_11_appendix_C_examples_of_functional_measures33}}</td>
        <td style="width:20%;font-size: 17px; border: 1px solid black;">{{part_11_appendix_C_examples_of_functional_measures34}}</td>
        <td style="width:20%;font-size: 17px; border: 1px solid black;">{{part_11_appendix_C_examples_of_functional_measures35}}</td>
        <td style="width:15%;font-size: 17px; border: 1px solid black;">{{part_11_appendix_C_examples_of_functional_measures36}}</td>
        <td style="width:15%;font-size: 17px; border: 1px solid black;">{{part_11_appendix_C_examples_of_functional_measures37}}</td>
        </tr>
        </table>


        <p style="margin-top:8px;"></p>
        <p style="font-weight:bold; font-size:12pt;">Speach test 2</p>
        <p style="font-size:12pt;">Sentence testing in noise (average conversation level if appropriate)</p>
        <table style=" width:100%; border: 1px solid black; border-collapse: collapse;
        margin: auto;">
        <tr>
        <td style="width:10%; background-color: lightgrey; font-size: 17px; font-weight:bold;">Ear</td>
        <td style="width:10%; background-color: lightgrey; font-size: 17px; font-weight:bold;">Unaided</td>
        <td style="width:10%; background-color: lightgrey; font-size: 17px; font-weight:bold;">Aided Preference 3</td>
        <td style="width:20%; background-color: lightgrey; font-size: 17px; font-weight:bold;">Aided with remote microphone</td>
        <td style="width:20%; background-color: lightgrey; font-size: 17px; font-weight:bold;">Auditory Alone</td>
        <td style="width:15%; background-color: lightgrey; font-size: 17px; font-weight:bold;">Auditory – Visual</td>
        <td style="width:15%; background-color: lightgrey; font-size: 17px; font-weight:bold;">Visual alone</td>

        </tr>

        <tr>
        <td style="width:10%;font-size: 17px; border: 1px solid black;">Left</td>
        <td style="width:10%;font-size: 17px; border: 1px solid black;">{{part_11_appendix_C_examples_of_functional_measures38}}</td>
        <td style="width:10%;font-size: 17px; border: 1px solid black;">{{part_11_appendix_C_examples_of_functional_measures39}}</td>
        <td style="width:20%;font-size: 17px; border: 1px solid black;">{{part_11_appendix_C_examples_of_functional_measures40}}</td>
        <td style="width:20%;font-size: 17px; border: 1px solid black;">{{part_11_appendix_C_examples_of_functional_measures41}}</td>
        <td style="width:15%;font-size: 17px; border: 1px solid black;">{{part_11_appendix_C_examples_of_functional_measures42}}</td>
        <td style="width:15%;font-size: 17px; border: 1px solid black;">{{part_11_appendix_C_examples_of_functional_measures43}}</td>
        </tr>
        <tr>
        <td style="width:10%;font-size: 17px; border: 1px solid black;">Right</td>
        <td style="width:10%;font-size: 17px; border: 1px solid black;">{{part_11_appendix_C_examples_of_functional_measures44}}</td>
        <td style="width:10%;font-size: 17px; border: 1px solid black;">{{part_11_appendix_C_examples_of_functional_measures45}}</td>
        <td style="width:20%;font-size: 17px; border: 1px solid black;">{{part_11_appendix_C_examples_of_functional_measures46}}</td>
        <td style="width:20%;font-size: 17px; border: 1px solid black;">{{part_11_appendix_C_examples_of_functional_measures47}}</td>
        <td style="width:15%;font-size: 17px; border: 1px solid black;">{{part_11_appendix_C_examples_of_functional_measures48}}</td>
        <td style="width:15%;font-size: 17px; border: 1px solid black;">{{part_11_appendix_C_examples_of_functional_measures49}}</td>
        </tr>
        <tr>
        <td style="width:10%;font-size: 17px; border: 1px solid black;">Both</td>
        <td style="width:10%;font-size: 17px; border: 1px solid black;">{{part_11_appendix_C_examples_of_functional_measures50}}</td>
        <td style="width:10%;font-size: 17px; border: 1px solid black;">{{part_11_appendix_C_examples_of_functional_measures51}}</td>
        <td style="width:20%;font-size: 17px; border: 1px solid black;">{{part_11_appendix_C_examples_of_functional_measures52}}</td>
        <td style="width:20%;font-size: 17px; border: 1px solid black;">{{part_11_appendix_C_examples_of_functional_measures53}}</td>
        <td style="width:15%;font-size: 17px; border: 1px solid black;">{{part_11_appendix_C_examples_of_functional_measures54}}</td>
        <td style="width:15%;font-size: 17px; border: 1px solid black;">{{part_11_appendix_C_examples_of_functional_measures55}}</td>
        </tr>
        </table>


        <p style="margin-top:8px;"></p>
        <p style="margin-top:8px;"></p>
        <p style="margin-top:8px;"></p>
        <p style="margin-top:8px;"></p>
        <p style="margin-top:8px;"></p>
        <p style="font-weight:bold; font-size:12pt;">Speach test 3</p>
        <p style="font-size:12pt;">Delete non-applicable response</p>
        <table style="width:100%; border: 1px solid black;">
        <tr>
        <td style="width: 100%; border: 1px solid black; width:30%;background-color: lightgrey;"><p style="margin-top:10px; margin-bottom:10px;">Quick SIN</p></td>
        <td style="width: 100%; border: 1px solid black; width:35%;"><p style="margin-top:10px; margin-bottom:10px;"> {{part_11_appendix_C_examples_of_functional_measures56}}</p></td>
        <td style="width: 100%; border: 1px solid black; width:35%;"><p style="margin-top:10px; margin-bottom:10px;"> {{part_11_appendix_C_examples_of_functional_measures57}}</p></td>
        </tr>
        <tr>
        <td style="width: 100%; border: 1px solid black; width:30%;background-color: lightgrey;"><p style="margin-top:10px; margin-bottom:10px;">SPIN</p></td>
        <td style="width: 100%; border: 1px solid black; width:35%;"><p style="margin-top:10px; margin-bottom:10px;"> {{part_11_appendix_C_examples_of_functional_measures58}}</p></td>
        <td style="width: 100%; border: 1px solid black; width:35%;"><p style="margin-top:10px; margin-bottom:10px;"> {{part_11_appendix_C_examples_of_functional_measures59}}</p></td>
        </tr>
        <tr>
        <td style="width: 100%; border: 1px solid black; width:30%;background-color: lightgrey;"><p style="margin-top:10px; margin-bottom:10px;">SPIN Loss</p></td>
        <td style="width: 100%; border: 1px solid black; width:35%;"><p style="margin-top:10px; margin-bottom:10px;"> {{part_11_appendix_C_examples_of_functional_measures60}}</p></td>
        <td style="width: 100%; border: 1px solid black; width:35%;"><p style="margin-top:10px; margin-bottom:10px;"> {{part_11_appendix_C_examples_of_functional_measures61}}</p></td>
        </tr>
        <tr>
        <td style="width: 100%; border: 1px solid black; width:20%;background-color: lightgrey;"><p style="margin-top:10px; margin-bottom:10px;">Similar Test</p></td>
        <td style="width: 100%; border: 1px solid black; width:35%;"><p style="margin-top:10px; margin-bottom:10px;"> Describe</p></td>
        <td style="width: 100%; border: 1px solid black; width:35%;"><p style="margin-top:10px; margin-bottom:10px;">{{part_11_appendix_C_examples_of_functional_measures62}}</p></td>
        </tr>
        </table>



        <p style="margin-top:8px;"></p>
        <table style="width:100%; border: 1px solid black; border-collapse: collapse;
        margin: auto;">
        <tr>
        <td style="width:25%; background-color: lightgrey; font-size: 17px; font-weight:bold;">Ear</td>
        <td style="width:25%; background-color: lightgrey; font-size: 17px; font-weight:bold;">Unaided</td>
        <td style="width:25%; background-color: lightgrey; font-size: 17px; font-weight:bold;">Aided Preference 2</td>
        <td style="width:25%; background-color: lightgrey; font-size: 17px; font-weight:bold;">Aided with remote microphone</td>
        </tr>

        <tr>
        <td style="width:25%;font-size: 17px; border: 1px solid black;">Left</td>
        <td style="width:25%;font-size: 17px; border: 1px solid black;">{{part_11_appendix_C_examples_of_functional_measures63}}</td>
        <td style="width:25%;font-size: 17px; border: 1px solid black;">{{part_11_appendix_C_examples_of_functional_measures64}}</td>
        <td style="width:25%;font-size: 17px; border: 1px solid black;">{{part_11_appendix_C_examples_of_functional_measures65}}</td>
        </tr>

        <tr>
        <td style="width:25%;font-size: 17px; border: 1px solid black;">Right</td>
        <td style="width:25%;font-size: 17px; border: 1px solid black;">{{part_11_appendix_C_examples_of_functional_measures66}}</td>
        <td style="width:25%;font-size: 17px; border: 1px solid black;">{{part_11_appendix_C_examples_of_functional_measures67}}</td>
        <td style="width:25%;font-size: 17px; border: 1px solid black;">{{part_11_appendix_C_examples_of_functional_measures68}}</td>
        </tr>

        <tr>
        <td style="width:25%;font-size: 17px; border: 1px solid black;">Both</td>
        <td style="width:25%;font-size: 17px; border: 1px solid black;">{{part_11_appendix_C_examples_of_functional_measures69}}</td>
        <td style="width:25%;font-size: 17px; border: 1px solid black;">{{part_11_appendix_C_examples_of_functional_measures70}}</td>
        <td style="width:25%;font-size: 17px; border: 1px solid black;">{{part_11_appendix_C_examples_of_functional_measures71}}</td>
        </tr>

        </table>
        <p style="margin-to:10pt"></p>
        <table style="width:100%; border: 1px solid black;">
        <tr>
        <td style="width: 100%; border: 1px solid black; width:20%;background-color: lightgrey;"><p style="margin-top:10px; margin-bottom:10px;"> Other Functional Assessments?</p></td>
        <td style="width: 100%; border: 1px solid black; width:80%;"><p style="margin-top:10px; margin-bottom:10px;">{{part_11_appendix_C_examples_of_functional_measures72}}</p></td>

        </tr>
        </table>
        <p style="margin-top:3pt;"></p>
        <p style="font-weight:bold;">Key</p>
        <p style="font-size:12pt; margin-top:10pt;">1 Attach relevant audiograms (Indicate assessments completed within table).</p>
        <p style="font-size:12pt; margin-top:10pt;">2 Aided preference describes participant’s preferred daily wearing option on each ear.</p>
        ';





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
            "label":"Contact Details",
            "placeholder":"Enter Your Contact Details",
            "className":"form-control",
            "name":"part_1_ndis_participantcontact_details",
            "access":false,
            "subtype":"text"
            },
            {
                "type":"heading",
                "required":false,
                "label_1":"1.2 Plan Management Details",
                "label_2":"",
                "label_3":"Select option by checking the box",
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
                "label_1":"2.1 Reason for request",
                "label_2":"",
                "label_3":"See Appendix A and Appendix B for guidance regarding replacement and refitting criteria. \nThis technology is being requested as: \nUse the check box to indicate if the device is;",
                "placeholder":"Full Name",
                "className":"form-control",
                "name":"part_2_heading_extra_1",
                "access":false
             },
            {
               "type":"checkbox-group",
               "required":false,
               "label":"A new device for a first time user?",
               "toggle":false,
               "inline":false,
               "name":"part_2_background_information1",
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
               "label":"The first device for this ear?",
               "toggle":false,
               "inline":false,
               "name":"part_2_background_information2",
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
               "label":"A replacement device?",
               "toggle":false,
               "inline":false,
               "name":"part_2_background_information3",
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
               "label":"The previous device is lost / damaged beyond repair (DBR) / has reached the end of its service life?",
               "toggle":false,
               "inline":false,
               "name":"part_2_background_information4",
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
               "label":"A refitted / upgraded device?",
               "toggle":false,
               "inline":false,
               "name":"part_2_background_information5",
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
               "label":"A new device with higher specifications or different style is required because of the participants functional capacity has changed?",
               "toggle":false,
               "inline":false,
               "name":"part_2_background_information6",
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
                "label_1":"2.2 Hearing background",
                "label_2":"",
                "label_3":"Describe below the participant’s ear and hearing history, include age of diagnosis, cause of hearing loss (if known), and hearing device usage history.",
                "placeholder":"Full Name",
                "className":"form-control",
                "name":"part_2_heading_extra_2",
                "access":false
             },
            {
               "type":"textarea",
               "required":false,
               "label":"",
               "placeholder":"Enter Hearing background",
               "className":"form-control",
               "name":"part_2_background_information7",
               "access":false,
               "subtype":"text"
            },
            {
                "type":"heading",
                "required":false,
                "label_1":"2.3 Communication background",
                "label_2":"",
                "label_3":"Include information about the participant’s current communication including preferred mode of communication and any barriers to communicate (for example, literacy).",
                "placeholder":"Full Name",
                "className":"form-control",
                "name":"part_2_heading_extra_3",
                "access":false
             },
            {
               "type":"textarea",
               "required":false,
               "label":"",
               "placeholder":"Enter Communication background",
               "className":"form-control",
               "name":"part_2_background_information8",
               "access":false,
               "subtype":"text"
            },
            {
                "type":"heading",
                "required":false,
                "label_1":"2.4 Medical / Health background",
                "label_2":"",
                "label_3":"Provide information about co-existing conditions or disabilities that may impact on communication and/or device use, if relevant to the device prescription. Attach relevant reports if available (with the participant’s consent) and provide information about treating professionals.",
                "placeholder":"Full Name",
                "className":"form-control",
                "name":"part_2_heading_extra_4",
                "access":false
             },
            {
               "type":"textarea",
               "required":false,
               "label":"",
               "placeholder":"Enter Medical / Health background",
               "className":"form-control",
               "name":"part_2_background_information9",
               "access":false,
               "subtype":"text"
            },
            {
                "type":"heading",
                "required":false,
                "label_1":"2.5 Participant Goals",
                "label_2":"",
                "label_3":"If the participant’s NDIS plan has been made available, you can refer to the statement of participant’s goals and outline the goals relevant to the hearing technology request. Include any other relevant communication goals, for example Client Oriented Scale of Improvement (COSI) goals or other goal-setting tools. Where possible, goals should be specific and measurable. In the assessor’s view, are the participant’s goals realistic and achievable?",
                "placeholder":"Full Name",
                "className":"form-control",
                "name":"part_2_heading_extra_5",
                "access":false
             },
            {
               "type":"textarea",
               "required":false,
               "label":"",
               "placeholder":"Enter Participant Goals",
               "className":"form-control",
               "name":"part_2_background_information10",
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
                "label_3":"Note: Complete Section 3a OR 3b. Delete the section that is not required.",
                "placeholder":"Full Name",
                "className":"form-control",
                "name":"part_3_heading_extra_1",
                "access":false
             },
            {
                "type":"heading",
                "required":false,
                "label_1":"3.1 Section 3a: Request for Cochlear Implant Sound Processor",
                "label_2":"",
                "label_3":"",
                "placeholder":"Full Name",
                "className":"form-control",
                "name":"part_3_heading_extra_2",
                "access":false
             },
             {
                "type":"heading",
                "required":false,
                "label_1":"",
                "label_2":"",
                "label_3":"Manufacturer",
                "placeholder":"Full Name",
                "className":"form-control",
                "name":"part_3_heading_extra_3",
                "access":false
             },
    {
        "type":"text",
        "required":false,
        "label":"Left ear",
        "placeholder":"Enter Left ear",
        "className":"form-control",
        "name":"part_3_recommended_option_01",
        "access":false,
        "subtype":"text"
    },
    {
        "type":"text",
        "required":false,
        "label":"Right ear",
        "placeholder":"Enter Right ear",
        "className":"form-control",
        "name":"part_3_recommended_option_02",
        "access":false,
        "subtype":"text"
    },
    {
        "type":"heading",
        "required":false,
        "label_1":"",
        "label_2":"",
        "label_3":"Model and Style",
        "placeholder":"Full Name",
        "className":"form-control",
        "name":"part_3_heading_extra_4",
        "access":false
     },
    {
        "type":"text",
        "required":false,
        "label":"Left ear",
        "placeholder":"Enter Left ear",
        "className":"form-control",
        "name":"part_3_recommended_option_03",
        "access":false,
        "subtype":"text"
    },
    {
        "type":"text",
        "required":false,
        "label":"Right ear",
        "placeholder":"Enter Right ear",
        "className":"form-control",
        "name":"part_3_recommended_option_04",
        "access":false,
        "subtype":"text"
    },
    {
        "type":"heading",
        "required":false,
        "label_1":"",
        "label_2":"",
        "label_3":"Date of a last fitting",
        "placeholder":"Full Name",
        "className":"form-control",
        "name":"part_3_heading_extra_5",
        "access":false
     },
    {
        "type":"date",
        "required":false,
        "label":"Left ear",
        "placeholder":"Enter Left ear",
        "className":"form-control",
        "name":"part_3_recommended_option_05",
        "access":false,
        "subtype":"text"
    },
    {
        "type":"date",
        "required":false,
        "label":"Right ear",
        "placeholder":"Enter Right ear",
        "className":"form-control",
        "name":"part_3_recommended_option_06",
        "access":false,
        "subtype":"text"
    },
    {
        "type":"heading",
        "required":false,
        "label_1":"",
        "label_2":"",
        "label_3":"Hours worn per day / week. Provide evidence of use, including data logging where possible.",
        "placeholder":"Full Name",
        "className":"form-control",
        "name":"part_3_heading_extra_6",
        "access":false
     },
    {
        "type":"text",
        "required":false,
        "label":"Left ear",
        "placeholder":"Enter Left ear",
        "className":"form-control",
        "name":"part_3_recommended_option_07",
        "access":false,
        "subtype":"text"
    },
    {
        "type":"text",
        "required":false,
        "label":"Right ear",
        "placeholder":"Enter Right ear",
        "className":"form-control",
        "name":"part_3_recommended_option_08",
        "access":false,
        "subtype":"text"
    },
    {
        "type":"heading",
        "required":false,
        "label_1":"",
        "label_2":"",
        "label_3":"Service and repair history (where relevant). Attach documentation to application. Yes/No",
        "placeholder":"Full Name",
        "className":"form-control",
        "name":"part_3_heading_extra_7",
        "access":false
     },
    {
        "type":"text",
        "required":false,
        "label":"Left ear",
        "placeholder":"Enter Left ear",
        "className":"form-control",
        "name":"part_3_recommended_option_09",
        "access":false,
        "subtype":"text"
    },
    {
        "type":"text",
        "required":false,
        "label":"Right ear",
        "placeholder":"Enter Right ear",
        "className":"form-control",
        "name":"part_3_recommended_option_10",
        "access":false,
        "subtype":"text"
    },
    {
        "type":"heading",
        "required":false,
        "label_1":"",
        "label_2":"",
        "label_3":"List other assistive devices available to the participant. For example, remote microphones, phone clips, television streamers etc.",
        "placeholder":"Full Name",
        "className":"form-control",
        "name":"part_3_heading_extra_8",
        "access":false
     },
    {
        "type":"text",
        "required":false,
        "label":"Left ear",
        "placeholder":"Enter Left ear",
        "className":"form-control",
        "name":"part_3_recommended_option_11",
        "access":false,
        "subtype":"text"
    },
    {
        "type":"text",
        "required":false,
        "label":"Right ear",
        "placeholder":"Enter Right ear",
        "className":"form-control",
        "name":"part_3_recommended_option_12",
        "access":false,
        "subtype":"text"
    },
    {
        "type":"textarea",
        "required":false,
        "label":"Comments",
        "placeholder":"Enter Comments",
        "className":"form-control",
        "name":"part_3_recommended_option_13",
        "access":false,
        "subtype":"text"
    },
    {
        "type":"heading",
        "required":false,
        "label_1":"",
        "label_2":"",
        "label_3":"If the devices are not used on a daily basis, describe when the devices are used.",
        "placeholder":"Full Name",
        "className":"form-control",
        "name":"part_3_heading_extra_9",
        "access":false
     },
    {
        "type":"textarea",
        "required":false,
        "label":"Comments",
        "placeholder":"Enter Comments",
        "className":"form-control",
        "name":"part_3_recommended_option_14",
        "access":false,
        "subtype":"text"
    },
    {
        "type":"heading",
        "required":false,
        "label_1":"",
        "label_2":"",
        "label_3":"Recommended replacement sound processor(s):",
        "placeholder":"Full Name",
        "className":"form-control",
        "name":"part_3_heading_extra_10",
        "access":false
     },
    {
        "type":"textarea",
        "required":false,
        "label":"Make and Model",
        "placeholder":"Enter Make and Model",
        "className":"form-control",
        "name":"part_3_recommended_option_15",
        "access":false,
        "subtype":"text"
    },
    {
        "type":"heading",
        "required":false,
        "label_1":"",
        "label_2":"",
        "label_3":"Evidence of functional outcomes with the recommended sound processor(s) \nEvidence is attached:",
        "placeholder":"Full Name",
        "className":"form-control",
        "name":"part_3_heading_extra_11",
        "access":false
     },
    {
       "type":"checkbox-group",
       "required":false,
       "label":"Yes, Evidence is attached",
       "toggle":false,
       "inline":false,
       "name":"part_3_recommended_option_16",
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
        "label":"Description of evidence if not attached",
        "placeholder":"Description",
        "className":"form-control",
        "name":"part_3_recommended_option_18",
        "access":false,
        "subtype":"text"
    },
    {
        "type":"heading",
        "required":false,
        "label_1":"3.2 Section 3b: Request for hearing aid",
        "label_2":"3.2.1 Hearing aid information for current users",
        "label_3":"",
        "placeholder":"Full Name",
        "className":"form-control",
        "name":"part_3_heading_extra_12",
        "access":false
     },
     {
        "type":"heading",
        "required":false,
        "label_1":"",
        "label_2":"",
        "label_3":"Manufacturer",
        "placeholder":"Full Name",
        "className":"form-control",
        "name":"part_3_heading_extra_13",
        "access":false
     },
    {
        "type":"text",
        "required":false,
        "label":"Left ear",
        "placeholder":"Enter Left ear",
        "className":"form-control",
        "name":"part_3_recommended_option_19",
        "access":false,
        "subtype":"text"
    },
    {
        "type":"text",
        "required":false,
        "label":"Right ear",
        "placeholder":"Enter Right ear",
        "className":"form-control",
        "name":"part_3_recommended_option_20",
        "access":false,
        "subtype":"text"
    },
    {
        "type":"heading",
        "required":false,
        "label_1":"",
        "label_2":"",
        "label_3":"Model and Style of hearing aid / sound processor",
        "placeholder":"Full Name",
        "className":"form-control",
        "name":"part_3_heading_extra_14",
        "access":false
     },
    {
        "type":"text",
        "required":false,
        "label":"Left ear",
        "placeholder":"Enter Left ear",
        "className":"form-control",
        "name":"part_3_recommended_option_21",
        "access":false,
        "subtype":"text"
    },
    {
        "type":"text",
        "required":false,
        "label":"Right ear",
        "placeholder":"Enter Right ear",
        "className":"form-control",
        "name":"part_3_recommended_option_22",
        "access":false,
        "subtype":"text"
    },
    {
        "type":"heading",
        "required":false,
        "label_1":"",
        "label_2":"",
        "label_3":"Date of a last fitting",
        "placeholder":"Full Name",
        "className":"form-control",
        "name":"part_3_heading_extra_15",
        "access":false
     },
    {
        "type":"date",
        "required":false,
        "label":"Left ear",
        "placeholder":"Enter Left ear",
        "className":"form-control",
        "name":"part_3_recommended_option_23",
        "access":false,
        "subtype":"text"
    },
    {
        "type":"date",
        "required":false,
        "label":"Right ear",
        "placeholder":"Enter Right ear",
        "className":"form-control",
        "name":"part_3_recommended_option_24",
        "access":false,
        "subtype":"text"
    },
    {
        "type":"heading",
        "required":false,
        "label_1":"",
        "label_2":"",
        "label_3":"Hours worn per day / week. Provide evidence of use, including data logging where possible.",
        "placeholder":"Full Name",
        "className":"form-control",
        "name":"part_3_heading_extra_16",
        "access":false
     },
    {
        "type":"text",
        "required":false,
        "label":"Left ear",
        "placeholder":"Enter Left ear",
        "className":"form-control",
        "name":"part_3_recommended_option_25",
        "access":false,
        "subtype":"text"
    },
    {
        "type":"text",
        "required":false,
        "label":"Right ear",
        "placeholder":"Enter Right ear",
        "className":"form-control",
        "name":"part_3_recommended_option_26",
        "access":false,
        "subtype":"text"
    },
    {
        "type":"heading",
        "required":false,
        "label_1":"",
        "label_2":"",
        "label_3":"Is the device fitted optimally?",
        "placeholder":"Full Name",
        "className":"form-control",
        "name":"part_3_heading_extra_42",
        "access":false
     },
    {
        "type":"text",
        "required":false,
        "label":"Left ear",
        "placeholder":"Enter Left ear",
        "className":"form-control",
        "name":"part_3_recommended_option_72",
        "access":false,
        "subtype":"text"
    },
    {
        "type":"text",
        "required":false,
        "label":"Right ear",
        "placeholder":"Enter Right ear",
        "className":"form-control",
        "name":"part_3_recommended_option_73",
        "access":false,
        "subtype":"text"
    },
    {
        "type":"heading",
        "required":false,
        "label_1":"",
        "label_2":"",
        "label_3":"Service and repair history is attached (where relevant).",
        "placeholder":"Full Name",
        "className":"form-control",
        "name":"part_3_heading_extra_43",
        "access":false
     },
    {
        "type":"text",
        "required":false,
        "label":"Left ear",
        "placeholder":"Enter Left ear",
        "className":"form-control",
        "name":"part_3_recommended_option_74",
        "access":false,
        "subtype":"text"
    },
    {
        "type":"text",
        "required":false,
        "label":"Right ear",
        "placeholder":"Enter Right ear",
        "className":"form-control",
        "name":"part_3_recommended_option_75",
        "access":false,
        "subtype":"text"
    },
    {
        "type":"heading",
        "required":false,
        "label_1":"",
        "label_2":"",
        "label_3":"List other assistive devices available to the participant. For example, remote microphones, phone clips, television streamers etc.",
        "placeholder":"Full Name",
        "className":"form-control",
        "name":"part_3_heading_extra_17",
        "access":false
     },
    {
        "type":"text",
        "required":false,
        "label":"Left ear",
        "placeholder":"Enter Left ear",
        "className":"form-control",
        "name":"part_3_recommended_option_27",
        "access":false,
        "subtype":"text"
    },
    {
        "type":"text",
        "required":false,
        "label":"Right ear",
        "placeholder":"Enter Right ear",
        "className":"form-control",
        "name":"part_3_recommended_option_28",
        "access":false,
        "subtype":"text"
    },
    {
        "type":"textarea",
        "required":false,
        "label":"Comments",
        "placeholder":"Enter Comments",
        "className":"form-control",
        "name":"part_3_recommended_option_29",
        "access":false,
        "subtype":"text"
    },
    {
        "type":"heading",
        "required":false,
        "label_1":"",
        "label_2":"",
        "label_3":"If the devices are not used on a daily basis, describe when the devices are used.",
        "placeholder":"Full Name",
        "className":"form-control",
        "name":"part_3_heading_extra_18",
        "access":false
     },
    {
        "type":"textarea",
        "required":false,
        "label":"Comments",
        "placeholder":"Enter Comments",
        "className":"form-control",
        "name":"part_3_recommended_option_30",
        "access":false,
        "subtype":"text"
    },
    {
        "type":"heading",
        "required":false,
        "label_1":"",
        "label_2":"3.2.2 Participant Suitability",
        "label_3":"Outline the participant’s suitability to use the recommended hearing technology: \nEvidence of suitability, which may include outcomes from speech discrimination and speech in noise assessments and / or other measures.",
        "placeholder":"Full Name",
        "className":"form-control",
        "name":"part_3_heading_extra_19",
        "access":false
     },
    {
        "type":"textarea",
        "required":false,
        "label":"Comments",
        "placeholder":"Enter Comments",
        "className":"form-control",
        "name":"part_3_recommended_option_31",
        "access":false,
        "subtype":"text"
    },
    {
        "type":"heading",
        "required":false,
        "label_1":"",
        "label_2":"",
        "label_3":"Previous hearing technology use: \n   1. Length and frequency of the technology use.",
        "placeholder":"Full Name",
        "className":"form-control",
        "name":"part_3_heading_extra_20",
        "access":false
     },
    {
        "type":"textarea",
        "required":false,
        "label":"Comments",
        "placeholder":"Enter Comments",
        "className":"form-control",
        "name":"part_3_recommended_option_32",
        "access":false,
        "subtype":"text"
    },
    {
        "type":"heading",
        "required":false,
        "label_1":"",
        "label_2":"",
        "label_3":"   2. Comment on the success of technology use.",
        "placeholder":"Full Name",
        "className":"form-control",
        "name":"part_3_heading_extra_21",
        "access":false
     },
    {
        "type":"textarea",
        "required":false,
        "label":"Comments",
        "placeholder":"Enter Comments",
        "className":"form-control",
        "name":"part_3_recommended_option_33",
        "access":false,
        "subtype":"text"
    },
    {
        "type":"heading",
        "required":false,
        "label_1":"",
        "label_2":"",
        "label_3":"   3. Comment on the use of compatible assistive listening devices, such as remote microphone systems and /or other wireless streaming devices.",
        "placeholder":"Full Name",
        "className":"form-control",
        "name":"part_3_heading_extra_22",
        "access":false
     },
    {
        "type":"textarea",
        "required":false,
        "label":"Comments",
        "placeholder":"Enter Comments",
        "className":"form-control",
        "name":"part_3_recommended_option_34",
        "access":false,
        "subtype":"text"
    },
    {
        "type":"heading",
        "required":false,
        "label_1":"",
        "label_2":"",
        "label_3":"   4. Identify factors that impacted on the success of technology use, and steps taken to address any challenges experienced by the participant in using the technology successfully.",
        "placeholder":"Full Name",
        "className":"form-control",
        "name":"part_3_heading_extra_23",
        "access":false
     },
    {
        "type":"textarea",
        "required":false,
        "label":"Comments",
        "placeholder":"Enter Comments",
        "className":"form-control",
        "name":"part_3_recommended_option_35",
        "access":false,
        "subtype":"text"
    },
    {
        "type":"heading",
        "required":false,
        "label_1":"",
        "label_2":"3.2.3 Recommendation of hearing aid(s)",
        "label_3":"The recommended hearing aid has the following level of technology:",
        "placeholder":"Full Name",
        "className":"form-control",
        "name":"part_3_heading_extra_24",
        "access":false
     },
     {
        "type":"checkbox-group",
        "required":false,
        "label":"Basic / Essential",
        "toggle":false,
        "inline":false,
        "name":"part_3_recommended_option_36",
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
        "label":"Intermediate / Standard",
        "toggle":false,
        "inline":false,
        "name":"part_3_recommended_option_37",
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
        "label":"Advanced / Premium / Premium Plus",
        "toggle":false,
        "inline":false,
        "name":"part_3_recommended_option_38",
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
        "label_2":"Option1: Hearing aid recommendation for basic or essential level hearing aids:",
        "label_3":"Recommended device name, model number and style:",
        "placeholder":"Full Name",
        "className":"form-control",
        "name":"part_3_heading_extra_25",
        "access":false
     },
    {
        "type":"textarea",
        "required":false,
        "label":"Recommendation",
        "placeholder":"Enter Recommendation of hearing aid",
        "className":"form-control",
        "name":"part_3_recommended_option_39",
        "access":false,
        "subtype":"text"
    },
    {
        "type":"heading",
        "required":false,
        "label_1":"",
        "label_2":"",
        "label_3":"Evidence of functional outcomes with the recommended device: Both objective evidence (test results) and subjective evidence (participant feedback) is required. Evidence can be provided in the comment section below, or can be attached. Assessors can refer to Appendix C for examples of evidence. Then go to Part 4.",
        "placeholder":"Full Name",
        "className":"form-control",
        "name":"part_3_heading_extra_26",
        "access":false
     },
    {
        "type":"text",
        "required":false,
        "label":"Comments",
        "placeholder":"Enter Recommendation of hearing aid",
        "className":"form-control",
        "name":"part_3_recommended_option_40",
        "access":false,
        "subtype":"text"
    },
    {
        "type":"heading",
        "required":false,
        "label_1":"",
        "label_2":"OR",
        "label_3":"",
        "placeholder":"Full Name",
        "className":"form-control",
        "name":"part_3_heading_extra_27",
        "access":false
     },
    {
        "type":"heading",
        "required":false,
        "label_1":"",
        "label_2":"Option 2:",
        "label_3":"Recommendation of intermediate, advanced or premium level hearing aids: Differences in functional capacity with recommended device. \nProvide a detailed description of current communication/listening contexts. How is the participant’s functional capacity expected to change with the recommended technology, based on objective assessment as well as participant experience? Functional assessments can be attached to this form. See Appendix C for examples of assessments. The assessor is expected to compare hearing aids of more than one level of technology, and preferably adjacent levels of technology. For example; do not compare a basic hearing aid to a premium-level hearing aid. \nPlease note: Where work-related contexts are described (including self-employed contexts), provide information regarding steps taken through Job Access to modify the working environment and/or obtain suitable assistive technology.",
        "placeholder":"Full Name",
        "className":"form-control",
        "name":"part_3_heading_extra_28",
        "access":false
     },
     {
        "type":"heading",
        "required":false,
        "label_1":"",
        "label_2":"",
        "label_3":"Context 1: Describe context, including frequency experienced",
        "placeholder":"Full Name",
        "className":"form-control",
        "name":"part_3_heading_extra_29",
        "access":false
     },
    {
        "type":"text",
        "required":false,
        "label":"Goals and outcomes with current device",
        "placeholder":"Enter Goals and outcomes with current device",
        "className":"form-control",
        "name":"part_3_recommended_option_41",
        "access":false,
        "subtype":"text"
    },
    {
        "type":"text",
        "required":false,
        "label":"Alternatives trialled to improve outcomes",
        "placeholder":"Enter Alternatives trialled to improve outcomes",
        "className":"form-control",
        "name":"part_3_recommended_option_42",
        "access":false,
        "subtype":"text"
    },
    {
        "type":"text",
        "required":false,
        "label":"Goals and outcomes with recommended technology",
        "placeholder":"Enter Goals and outcomes with recommended technology",
        "className":"form-control",
        "name":"part_3_recommended_option_43",
        "access":false,
        "subtype":"text"
    },
    {
        "type":"heading",
        "required":false,
        "label_1":"",
        "label_2":"",
        "label_3":"Context 2: Describe context, including frequency experienced",
        "placeholder":"Full Name",
        "className":"form-control",
        "name":"part_3_heading_extra_30",
        "access":false
     },
    {
        "type":"text",
        "required":false,
        "label":"Goals and outcomes with current device",
        "placeholder":"Enter Goals and outcomes with current device",
        "className":"form-control",
        "name":"part_3_recommended_option_44",
        "access":false,
        "subtype":"text"
    },
    {
        "type":"text",
        "required":false,
        "label":"Alternatives trialled to improve outcomes",
        "placeholder":"Enter Alternatives trialled to improve outcomes",
        "className":"form-control",
        "name":"part_3_recommended_option_45",
        "access":false,
        "subtype":"text"
    },
    {
        "type":"text",
        "required":false,
        "label":"Goals and outcomes with recommended technology",
        "placeholder":"Enter Goals and outcomes with recommended technology",
        "className":"form-control",
        "name":"part_3_recommended_option_46",
        "access":false,
        "subtype":"text"
    },
    {
        "type":"heading",
        "required":false,
        "label_1":"",
        "label_2":"",
        "label_3":"Context 3: Describe context, including frequency experienced",
        "placeholder":"Full Name",
        "className":"form-control",
        "name":"part_3_heading_extra_31",
        "access":false
     },
    {
        "type":"text",
        "required":false,
        "label":"Goals and outcomes with current device",
        "placeholder":"Enter Goals and outcomes with current device",
        "className":"form-control",
        "name":"part_3_recommended_option_47",
        "access":false,
        "subtype":"text"
    },
    {
        "type":"text",
        "required":false,
        "label":"Alternatives trialled to improve outcomes",
        "placeholder":"Enter Alternatives trialled to improve outcomes",
        "className":"form-control",
        "name":"part_3_recommended_option_48",
        "access":false,
        "subtype":"text"
    },
    {
        "type":"text",
        "required":false,
        "label":"Goals and outcomes with recommended technology",
        "placeholder":"Enter Goals and outcomes with recommended technology",
        "className":"form-control",
        "name":"part_3_recommended_option_49",
        "access":false,
        "subtype":"text"
    },
    {
        "type":"heading",
        "required":false,
        "label_1":"",
        "label_2":"",
        "label_3":"Context 4: Describe context, including frequency experienced",
        "placeholder":"Full Name",
        "className":"form-control",
        "name":"part_3_heading_extra_32",
        "access":false
     },
    {
        "type":"text",
        "required":false,
        "label":"Goals and outcomes with current device",
        "placeholder":"Enter Goals and outcomes with current device",
        "className":"form-control",
        "name":"part_3_recommended_option_50",
        "access":false,
        "subtype":"text"
    },
    {
        "type":"text",
        "required":false,
        "label":"Alternatives trialled to improve outcomes",
        "placeholder":"Enter Alternatives trialled to improve outcomes",
        "className":"form-control",
        "name":"part_3_recommended_option_51",
        "access":false,
        "subtype":"text"
    },
    {
        "type":"text",
        "required":false,
        "label":"Goals and outcomes with recommended technology",
        "placeholder":"Enter Goals and outcomes with recommended technology",
        "className":"form-control",
        "name":"part_3_recommended_option_52",
        "access":false,
        "subtype":"text"
    },
    {
        "type":"heading",
        "required":false,
        "label_1":"",
        "label_2":"",
        "label_3":"Context 5: Describe context, including frequency experienced",
        "placeholder":"Full Name",
        "className":"form-control",
        "name":"part_3_heading_extra_33",
        "access":false
     },
    {
        "type":"text",
        "required":false,
        "label":"Goals and outcomes with current device",
        "placeholder":"Enter Goals and outcomes with current device",
        "className":"form-control",
        "name":"part_3_recommended_option_53",
        "access":false,
        "subtype":"text"
    },
    {
        "type":"text",
        "required":false,
        "label":"Alternatives trialled to improve outcomes",
        "placeholder":"Enter Alternatives trialled to improve outcomes",
        "className":"form-control",
        "name":"part_3_recommended_option_54",
        "access":false,
        "subtype":"text"
    },
    {
        "type":"text",
        "required":false,
        "label":"Goals and outcomes with recommended technology",
        "placeholder":"Enter Goals and outcomes with recommended technology",
        "className":"form-control",
        "name":"part_3_recommended_option_55",
        "access":false,
        "subtype":"text"
    },
    {
        "type":"heading",
        "required":false,
        "label_1":"",
        "label_2":"",
        "label_3":"Context 6: Describe context, including frequency experienced",
        "placeholder":"Full Name",
        "className":"form-control",
        "name":"part_3_heading_extra_34",
        "access":false
     },
    {
        "type":"text",
        "required":false,
        "label":"Goals and outcomes with current device",
        "placeholder":"Enter Goals and outcomes with current device",
        "className":"form-control",
        "name":"part_3_recommended_option_56",
        "access":false,
        "subtype":"text"
    },
    {
        "type":"text",
        "required":false,
        "label":"Alternatives trialled to improve outcomes",
        "placeholder":"Enter Alternatives trialled to improve outcomes",
        "className":"form-control",
        "name":"part_3_recommended_option_57",
        "access":false,
        "subtype":"text"
    },
    {
        "type":"text",
        "required":false,
        "label":"Goals and outcomes with recommended technology",
        "placeholder":"Enter Goals and outcomes with recommended technology",
        "className":"form-control",
        "name":"part_3_recommended_option_58",
        "access":false,
        "subtype":"text"
    },
    {
        "type":"heading",
        "required":false,
        "label_1":"",
        "label_2":"",
        "label_3":"Context 7: Describe context, including frequency experienced",
        "placeholder":"Full Name",
        "className":"form-control",
        "name":"part_3_heading_extra_35",
        "access":false
     },
    {
        "type":"text",
        "required":false,
        "label":"Goals and outcomes with current device",
        "placeholder":"Enter Goals and outcomes with current device",
        "className":"form-control",
        "name":"part_3_recommended_option_59",
        "access":false,
        "subtype":"text"
    },
    {
        "type":"text",
        "required":false,
        "label":"Alternatives trialled to improve outcomes",
        "placeholder":"Enter Alternatives trialled to improve outcomes",
        "className":"form-control",
        "name":"part_3_recommended_option_60",
        "access":false,
        "subtype":"text"
    },
    {
        "type":"text",
        "required":false,
        "label":"Goals and outcomes with recommended technology",
        "placeholder":"Enter Goals and outcomes with recommended technology",
        "className":"form-control",
        "name":"part_3_recommended_option_61",
        "access":false,
        "subtype":"text"
    },
    {
        "type":"heading",
        "required":false,
        "label_1":"",
        "label_2":"3.2.3.1 Other Relevant Information for intermediate, advanced and/or premium level hearing aids.",
        "label_3":"Provide any other relevant information, such as activities of daily living; formal and informal support arrangements (families or carers who can support device usage); the participant’s attitude towards hearing aids and technology in general; their expectations of the devices; and foreseeable life-stage transitions.",
        "placeholder":"Full Name",
        "className":"form-control",
        "name":"part_3_heading_extra_36",
        "access":false
     },
    {
        "type":"textarea",
        "required":false,
        "label":"Comments",
        "placeholder":"Enter Comments",
        "className":"form-control",
        "name":"part_3_recommended_option_62",
        "access":false,
        "subtype":"text"
    },
    {
        "type":"heading",
        "required":false,
        "label_1":"",
        "label_2":"3.2.3.2 Most Suitable / Appropriate Alternative to facilitate goal attainment",
        "label_3":"Briefly summarise the evidence for the recommended option as the most suitable/appropriate alternative which will facilitate attainment of the participant’s goal compared to others considered, including lower cost alternatives. These alternatives can include accessories, or intervention that does not involve technology, such as counselling, auditory training or speech reading training. Note: In the instance where previous hearing aid use was not successful, provide evidence of actions, such as auditory training, counselling, and setting realistic expectations.",
        "placeholder":"Full Name",
        "className":"form-control",
        "name":"part_3_heading_extra_37",
        "access":false
     },
    {
        "type":"text",
        "required":false,
        "label":"Recommended device name",
        "placeholder":"Enter Recommended device name",
        "className":"form-control",
        "name":"part_3_recommended_option_63",
        "access":false,
        "subtype":"text"
    },
    {
        "type":"text",
        "required":false,
        "label":"Model number",
        "placeholder":"Enter Model number",
        "className":"form-control",
        "name":"part_3_recommended_option_64",
        "access":false,
        "subtype":"text"
    },
    {
        "type":"text",
        "required":false,
        "label":"Style",
        "placeholder":"Enter Style",
        "className":"form-control",
        "name":"part_3_recommended_option_65",
        "access":false,
        "subtype":"text"
    },
    {
        "type":"heading",
        "required":false,
        "label_1":"",
        "label_2":"",
        "label_3":"Other devices trialled (including lower cost options)",
        "placeholder":"Full Name",
        "className":"form-control",
        "name":"part_3_heading_extra_38",
        "access":false
     },
    {
        "type":"text",
        "required":false,
        "label":"Device name",
        "placeholder":"Enter Device name",
        "className":"form-control",
        "name":"part_3_recommended_option_66",
        "access":false,
        "subtype":"text"
    },
    {
        "type":"text",
        "required":false,
        "label":"Model number",
        "placeholder":"Enter Model number",
        "className":"form-control",
        "name":"part_3_recommended_option_67",
        "access":false,
        "subtype":"text"
    },
    {
        "type":"text",
        "required":false,
        "label":"Style",
        "placeholder":"Enter Style",
        "className":"form-control",
        "name":"part_3_recommended_option_68",
        "access":false,
        "subtype":"text"
    },
    {
        "type":"heading",
        "required":false,
        "label_1":"",
        "label_2":"",
        "label_3":"Steps taken to consider lower cost alternatives to improve hearing outcomes. For example; lower cost devices trialled, use of remote microphones / wireless streaming devices.",
        "placeholder":"Full Name",
        "className":"form-control",
        "name":"part_3_heading_extra_39",
        "access":false
     },
    {
        "type":"textarea",
        "required":false,
        "label":"Comments",
        "placeholder":"Enter Comments",
        "className":"form-control",
        "name":"part_3_recommended_option_69",
        "access":false,
        "subtype":"text"
    },
    {
        "type":"heading",
        "required":false,
        "label_1":"",
        "label_2":"",
        "label_3":"Are there any comparable support options that would achieve similar outcomes at a lower cost? For example, auditory training, training in handling devices, etc.",
        "placeholder":"Full Name",
        "className":"form-control",
        "name":"part_3_heading_extra_40",
        "access":false
     },
    {
        "type":"textarea",
        "required":false,
        "label":"Comments",
        "placeholder":"Enter Comments",
        "className":"form-control",
        "name":"part_3_recommended_option_70",
        "access":false,
        "subtype":"text"
    },
    {
        "type":"heading",
        "required":false,
        "label_1":"",
        "label_2":"",
        "label_3":"Evidence that the recommended device is the most appropriate, based on measurable goals and outcomes. Where an intermediate, advanced or premium level hearing aid is recommended, comparison to other devices is required. Where the participant has a hearing loss in both ears, it is expected that the evidence be based on two aided ears. For example; sound processor in one ear, recommended hearing aid in the other ear.",
        "placeholder":"Full Name",
        "className":"form-control",
        "name":"part_3_heading_extra_41",
        "access":false
     },
    {
        "type":"textarea",
        "required":false,
        "label":"Comments",
        "placeholder":"Enter Comments",
        "className":"form-control",
        "name":"part_3_recommended_option_71",
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
                "label_3":"Are there any additional supports required to improve functional device outcomes? For example, compatible assistive technology to support device use? Auditory training and/or counselling to derive improved functional benefit from the device? Management of the participant’s expectations of device outcomes? Device management support to assist the participant to independently handle their devices? \nDescribe the supports required, including the reason for the recommendation.",
                "placeholder":"Full Name",
                "className":"form-control",
                "name":"part_4_heading_extra_1",
                "access":false
             },
    {
        "type":"textarea",
        "required":false,
        "label":"Comment",
        "placeholder":"Enter Comment",
        "className":"form-control",
        "name":"part_4_additional_technology_supports",
        "access":false,
        "subtype":"text"
    }
 ]';

        $form_fields5 = '[
            {
                "type":"heading",
                "required":false,
                "label_1":"",
                "label_2":"",
                "label_3":"Does the participant agree with the recommended AT solution and Auditory Rehabilitation Program? (Are the assessor’s clinical recommendation and participant preference the same?)",
                "placeholder":"Full Name",
                "className":"form-control",
                "name":"part_5_heading_extra_1",
                "access":false
             },
    {
        "type":"checkbox-group",
        "required":false,
        "label":"Yes",
        "toggle":false,
        "inline":false,
        "name":"part_5_participant_agreement1",
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
        "name":"part_5_participant_agreement2",
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
        "label":"Please provide details",
        "placeholder":"Enter Participant Agreement",
        "className":"form-control",
        "name":"part_5_participant_agreement3",
        "access":false,
        "subtype":"text"
    }
    ]';

        $form_fields6 = '[
            {
                "type":"heading",
                "required":false,
                "label_1":"",
                "label_2":"",
                "label_3":"Please attach: \n   1. Audiogram and audiological assessment report (including speech discrimination testing and tympanometry) obtained less than 12 months before the request. \n   2. Signal to Noise Ratio (SNR) loss (for participants where it can be calculated). \n   3. Report from ENT (if relevant, with participant’s consent). \n   4. Reports from medical or allied health professionals where other conditions may impact on communication or use of hearing technology (with participant’s consent). \n   5. Recent quote(s). \n   6. Functional measures with recommended technology (For example; real ear insertion gain, comparative speech testing). \n   7. Evidence required for device replacement or refitting as per Appendix A and Appendix B.",
                "placeholder":"Full Name",
                "className":"form-control",
                "name":"part_6_heading_extra_1",
                "access":false
             }
        ]';
        $form_fields7 = '[
            {
                "type":"heading",
                "required":false,
                "label_1":"",
                "label_2":"DECLARATION (indicate all relevant sections that apply)",
                "label_3":"",
                "placeholder":"Full Name",
                "className":"form-control",
                "name":"part_7_heading_extra_1",
                "access":false
             },
             {
                "type":"checkbox-group",
                "required":false,
                "label":"I certify that I meet the NDIA expectations of AT assessor provider suitability (including understanding of the current NDIS Act, Rules and Operational Guidelines) to assess the type of assistive technology and associated supports, at the level of complexity required by this participant.",
                "toggle":false,
                "inline":false,
                "name":"part_7_details_of_assessor1",
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
                "name":"part_7_details_of_assessor2",
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
                "label":"I understand and acknowledge that the NDIA and participant will rely on my professional advice to select, source and implement this assistive technology, and confirm that I am acting in accordance with the NDIS Quality and Safeguards Commission (https://www.ndiscommission.gov.au/) Code of Conduct and Practice Standards.",
                "toggle":false,
                "inline":false,
                "name":"part_7_details_of_assessor3",
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
                "label":"I have informed the participant of any arrangements with suppliers of hearing technology.",
                "toggle":false,
                "inline":false,
                "name":"part_7_details_of_assessor4",
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
                "label":"For HSP eligible participants, I have informed them of services available through Specialist Hearing Services (Community Service Obligations) where relevant",
                "toggle":false,
                "inline":false,
                "name":"part_7_details_of_assessor5",
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
                "label_1":"",
                "label_2":"Assessor’s Details",
                "label_3":"",
                "placeholder":"Full Name",
                "className":"form-control",
                "name":"part_7_heading_extra_2",
                "access":false
             },
        {
            "type":"text",
            "required":false,
            "label":"Name",
            "placeholder":"Name",
            "className":"form-control",
            "name":"part_7_details_of_assessor6",
            "access":false,
            "subtype":"text"
        },
        {
            "type":"text",
            "required":false,
            "label":"Membership of Professional Association",
            "placeholder":"Membership of Professional Association",
            "className":"form-control",
            "name":"part_7_details_of_assessor7",
            "access":false,
            "subtype":"text"
        },
        {
            "type":"text",
            "required":false,
            "label":"Organisation / Company",
            "placeholder":"Organisation / Company",
            "className":"form-control",
            "name":"part_7_details_of_assessor8",
            "access":false,
            "subtype":"text"
        },
        {
            "type":"text",
            "required":false,
            "label":"Current arrangements with preferred suppliers. Include details of supplier(s) and types of devices",
            "placeholder":"Current arrangements with preferred suppliers.",
            "className":"form-control",
            "name":"part_7_details_of_assessor9",
            "access":false,
            "subtype":"text"
        },
        {
            "type":"text",
            "required":false,
            "label":"NDIS Provider Registration number (where applicable)",
            "placeholder":"NDIS Provider Registration number (where applicable)",
            "className":"form-control",
            "name":"part_7_details_of_assessor10",
            "access":false,
            "subtype":"text"
        },
        {
            "type":"text",
            "required":false,
            "label":"Phone",
            "placeholder":"Phone",
            "className":"form-control",
            "name":"part_7_details_of_assessor11",
            "access":false,
            "subtype":"text"
        },
        {
            "type":"email",
            "required":false,
            "label":"Email",
            "placeholder":"Email",
            "className":"form-control",
            "name":"part_7_details_of_assessor12",
            "access":false,
            "subtype":"text"
        },
        {
            "type":"text",
            "required":false,
            "label":"Signature",
            "placeholder":"Signature",
            "className":"form-control",
            "name":"part_7_details_of_assessor13",
            "access":false,
            "subtype":"text"
        },
        {
            "type":"date",
            "required":false,
            "label":"Date of Assessment",
            "placeholder":"Date of Assessment",
            "className":"form-control",
            "name":"part_7_details_of_assessor14",
            "access":false,
            "subtype":"text"
        },
        {
            "type":"text",
            "required":false,
            "label":"Name",
            "placeholder":"Name",
            "className":"form-control",
            "name":"part_7_details_of_assessor15",
            "access":false,
            "subtype":"text"
        },
        {
            "type":"date",
            "required":false,
            "label":"Date of Report",
            "placeholder":"Date of Report",
            "className":"form-control",
            "name":"part_7_details_of_assessor16",
            "access":false,
            "subtype":"text"
        }
        ]';

        $form_fields8 = '[
            {
                "type":"heading",
                "required":false,
                "label_1":"",
                "label_2":"For the participant to complete",
                "label_3":"Has your audiologist/Audiometrist discussed arrangements they have with particular suppliers of hearing aids?",
                "placeholder":"Full Name",
                "className":"form-control",
                "name":"part_8_heading_extra_1",
                "access":false
             },
            {
                "type":"checkbox-group",
                "required":false,
                "label":"Yes",
                "toggle":false,
                "inline":false,
                "name":"part_8_participant_consent_and_acknowledgement_of_iinterest1",
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
                "label":"No",
                "toggle":false,
                "inline":false,
                "name":"part_8_participant_consent_and_acknowledgement_of_iinterest2",
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
                "label_1":"",
                "label_2":"",
                "label_3":"Do you understand that your Audiologist/Audiometrist may only work with a small number of hearing aid brands, and that other providers may recommend different hearing aids?",
                "placeholder":"Full Name",
                "className":"form-control",
                "name":"part_8_heading_extra_2",
                "access":false
             },
            {
                "type":"checkbox-group",
                "required":false,
                "label":"Yes",
                "toggle":false,
                "inline":false,
                "name":"part_8_participant_consent_and_acknowledgement_of_iinterest3",
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
                "label":"No",
                "toggle":false,
                "inline":false,
                "name":"part_8_participant_consent_and_acknowledgement_of_iinterest4",
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
                "label_1":"",
                "label_2":"",
                "label_3":"Do you understand that the National Disability Insurance Agency (NDIA) will generally fund the standard level of technology you require to achieve functional hearing and that not all requested technology may be funded?",
                "placeholder":"Full Name",
                "className":"form-control",
                "name":"part_8_heading_extra_3",
                "access":false
             },
            {
                "type":"checkbox-group",
                "required":false,
                "label":"Yes",
                "toggle":false,
                "inline":false,
                "name":"part_8_participant_consent_and_acknowledgement_of_iinterest5",
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
                "label":"No",
                "toggle":false,
                "inline":false,
                "name":"part_8_participant_consent_and_acknowledgement_of_iinterest6",
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
                "label_1":"",
                "label_2":"",
                "label_3":"The NDIA may need to contact your Audiologist/Audiometrist to discuss information within your assessment and quotation(s). This will assist the NDIA to determine if your request can be funded under the NDIS. Do you consent to the NDIA collecting and disclosing your information including from these third parties mentioned above, in relation to your hearing technology assessment and quotation?",
                "placeholder":"Full Name",
                "className":"form-control",
                "name":"part_8_heading_extra_4",
                "access":false
             },
             {
                "type":"checkbox-group",
                "required":false,
                "label":"Yes, I consent",
                "toggle":false,
                "inline":false,
                "name":"part_8_participant_consent_and_acknowledgement_of_iinterest7",
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
                "label":"No, I do not consent",
                "toggle":false,
                "inline":false,
                "name":"part_8_participant_consent_and_acknowledgement_of_iinterest8",
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
                "label":"Participant’s signature",
                "placeholder":"Participant’s signature",
                "className":"form-control",
                "name":"part_8_participant_consent_and_acknowledgement_of_iinterest9",
                "access":false,
                "subtype":"text"
            },
            {
                "type":"checkbox-group",
                "required":false,
                "label":"I understand that I am giving consent to the NDIA to do the things with my information set out in this section. I understand that I can withdraw my consent for the NDIS to do things with my information at any time by letting the NDIA know.",
                "toggle":false,
                "inline":false,
                "name":"part_8_participant_consent_and_acknowledgement_of_iinterest10",
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
                "label":"I understand that I can access the NDIA’s Privacy Notice and Privacy Policy on the NDIA website or by contacting the NDIA.",
                "toggle":false,
                "inline":false,
                "name":"part_8_participant_consent_and_acknowledgement_of_iinterest11",
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
                "label":"Signature",
                "placeholder":"Signature.",
                "className":"form-control",
                "name":"part_8_participant_consent_and_acknowledgement_of_iinterest12",
                "access":false,
                "subtype":"text"
            },
            {
                "type":"date",
                "required":false,
                "label":"Date",
                "placeholder":"Date",
                "className":"form-control",
                "name":"part_8_participant_consent_and_acknowledgement_of_iinterest13",
                "access":false,
                "subtype":"text"
            },
            {
                "type":"text",
                "required":false,
                "label":"Full name (please print)",
                "placeholder":"Full name (please print)",
                "className":"form-control",
                "name":"part_8_participant_consent_and_acknowledgement_of_iinterest14",
                "access":false,
                "subtype":"text"
            },
            {
                "type":"heading",
                "required":false,
                "label_1":"",
                "label_2":"",
                "label_3":"If you have signed this Form on behalf of the NDIS participant, please complete the details below. It is an offence to provide false or misleading information. \nWe may require you to provide evidence of your authority to sign on behalf of the person.",
                "placeholder":"Full Name",
                "className":"form-control",
                "name":"part_8_heading_extra_5",
                "access":false
             },
            {
                "type":"text",
                "required":false,
                "label":"Signature",
                "placeholder":"Signature",
                "className":"form-control",
                "name":"part_8_participant_consent_and_acknowledgement_of_iinterest15",
                "access":false,
                "subtype":"text"
            },
            {
                "type":"date",
                "required":false,
                "label":"Date",
                "placeholder":"Date",
                "className":"form-control",
                "name":"part_8_participant_consent_and_acknowledgement_of_iinterest16",
                "access":false,
                "subtype":"text"
            },

            {
                "type":"text",
                "required":false,
                "label":"Full name (please print)",
                "placeholder":"Full name (please print)",
                "className":"form-control",
                "name":"part_8_participant_consent_and_acknowledgement_of_iinterest17",
                "access":false,
                "subtype":"text"
            },

            {
                "type":"text",
                "required":false,
                "label":"Relationship to participant or person wishing to become an NDIS participant",
                "placeholder":"Relationship to participant or person wishing to become an NDIS participant",
                "className":"form-control",
                "name":"part_8_participant_consent_and_acknowledgement_of_iinterest18",
                "access":false,
                "subtype":"text"
            }
            ]';



        $form_fields9 = '[]';
        $form_fields10 = '[]';
        $form_fields11 = '[
            {
                "type":"heading",
                "required":false,
                "label_1":"",
                "label_2":"",
                "label_3":"Please note: This Appendix is to be used as a guide for functional evidence.  Please complete as appropriate or attach relevant clinical documentation that provides similar information.",
                "placeholder":"Full Name",
                "className":"form-control",
                "name":"part_11_heading_extra_1",
                "access":false
             },
            {
                "type":"heading",
                "required":false,
                "label_1":"",
                "label_2":"Option 1",
                "label_3":"   1. Aided Audiogram or Real Ear Measurements (Please attach) \n   2. Hearing Goals \n   3. Speech Audiometry including dynamic range, Loudness Discomfort Level (LDL) and speech in noise testing (Please attach) \nWhat functional benefit does the requested device provide in the context of the participant’s current communication profile (including all current hearing supports accessed)? Provide comparison, for example, hearing aids alone, hearing aids with a remote microphone. \nSpeech in noise, for example, Quick SIN / SPIN / Other",
                "placeholder":"Full Name",
                "className":"form-control",
                "name":"part_11_heading_extra_2",
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
                "name":"part_11_heading_extra_3",
                "access":false
             },
    {
        "type":"text",
        "required":false,
        "label":"Unaided",
        "placeholder":"Unaided",
        "className":"form-control",
        "name":"part_11_appendix_C_examples_of_functional_measures1",
        "access":false,
        "subtype":"text"
    },
    {
        "type":"text",
        "required":false,
        "label":"Current preferred aided condition(if relevant)",
        "placeholder":"Current preferred aided condition(if relevant)",
        "className":"form-control",
        "name":"part_11_appendix_C_examples_of_functional_measures2",
        "access":false,
        "subtype":"text"
    },
    {
        "type":"text",
        "required":false,
        "label":"Option 1 Device Details",
        "placeholder":"Option 1 Device Details",
        "className":"form-control",
        "name":"part_11_appendix_C_examples_of_functional_measures3",
        "access":false,
        "subtype":"text"
    },
    {
        "type":"text",
        "required":false,
        "label":"Option 2 Device Details",
        "placeholder":"Option 2 Device Details",
        "className":"form-control",
        "name":"part_11_appendix_C_examples_of_functional_measures4",
        "access":false,
        "subtype":"text"
    },
    {
        "type":"text",
        "required":false,
        "label":"Option 3 Device Details",
        "placeholder":"Option 3 Device Details",
        "className":"form-control",
        "name":"part_11_appendix_C_examples_of_functional_measures5",
        "access":false,
        "subtype":"text"
    },
    {
        "type":"heading",
        "required":false,
        "label_1":"",
        "label_2":"",
        "label_3":"Data Entry Row 1",
        "placeholder":"Full Name",
        "className":"form-control",
        "name":"part_11_heading_extra_4",
        "access":false
     },
    {
        "type":"text",
        "required":false,
        "label":"Unaided",
        "placeholder":"Unaided",
        "className":"form-control",
        "name":"part_11_appendix_C_examples_of_functional_measures7",
        "access":false,
        "subtype":"text"
    },
    {
        "type":"text",
        "required":false,
        "label":"Current Aided (Preferred condition",
        "placeholder":"Current Aided (Preferred condition",
        "className":"form-control",
        "name":"part_11_appendix_C_examples_of_functional_measures8",
        "access":false,
        "subtype":"text"
    },
    {
        "type":"text",
        "required":false,
        "label":"Option 1 Device Details",
        "placeholder":"Option 1 Device Details",
        "className":"form-control",
        "name":"part_11_appendix_C_examples_of_functional_measures9",
        "access":false,
        "subtype":"text"
    },
    {
        "type":"text",
        "required":false,
        "label":"Option 2 Device Details",
        "placeholder":"Option 2 Device Details",
        "className":"form-control",
        "name":"part_11_appendix_C_examples_of_functional_measures10",
        "access":false,
        "subtype":"text"
    },
    {
        "type":"text",
        "required":false,
        "label":"Option 3 Device Details",
        "placeholder":"Option 3 Device Details",
        "className":"form-control",
        "name":"part_11_appendix_C_examples_of_functional_measures11",
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
        "name":"part_11_heading_extra_5",
        "access":false
     },
    {
        "type":"text",
        "required":false,
        "label":"Speech audiometry",
        "placeholder":"Speech audiometry",
        "className":"form-control",
        "name":"part_11_appendix_C_examples_of_functional_measures6",
        "access":false,
        "subtype":"text"
    },
    {
        "type":"text",
        "required":false,
        "label":"Unaided",
        "placeholder":"Unaided",
        "className":"form-control",
        "name":"part_11_appendix_C_examples_of_functional_measures12",
        "access":false,
        "subtype":"text"
    },
    {
        "type":"text",
        "required":false,
        "label":"Current Aided (Preferred condition",
        "placeholder":"Current Aided (Preferred condition",
        "className":"form-control",
        "name":"part_11_appendix_C_examples_of_functional_measures13",
        "access":false,
        "subtype":"text"
    },
    {
        "type":"text",
        "required":false,
        "label":"Option 1 Device Details",
        "placeholder":"Option 1 Device Details",
        "className":"form-control",
        "name":"part_11_appendix_C_examples_of_functional_measures14",
        "access":false,
        "subtype":"text"
    },
    {
        "type":"text",
        "required":false,
        "label":"Option 2 Device Details",
        "placeholder":"Option 2 Device Details",
        "className":"form-control",
        "name":"part_11_appendix_C_examples_of_functional_measures15",
        "access":false,
        "subtype":"text"
    },
    {
        "type":"text",
        "required":false,
        "label":"Option 3 Device Details",
        "placeholder":"Option 3 Device Details",
        "className":"form-control",
        "name":"part_11_appendix_C_examples_of_functional_measures16",
        "access":false,
        "subtype":"text"
    },
    {
        "type":"heading",
        "required":false,
        "label_1":"",
        "label_2":"Other relevant Functional Assessments: ",
        "label_3":"Please describe or attach.",
        "placeholder":"Full Name",
        "className":"form-control",
        "name":"part_11_heading_extra_6",
        "access":false
     },
    {
        "type":"textarea",
        "required":false,
        "label":"Comments",
        "placeholder":"Other relevant Functional Assessments",
        "className":"form-control",
        "name":"part_11_appendix_C_examples_of_functional_measures17",
        "access":false,
        "subtype":"text"
    },
    {
        "type":"heading",
        "required":false,
        "label_1":"",
        "label_2":"Option 2:",
        "label_3":"This table is to be used as a guide for functional evidence required to make a reasonable and necessary decision. Cross / complete as appropriate or attach relevant information from clinical documentation where convenient. Please attach aided audiogram, or Real Ear Measurement",
        "placeholder":"Full Name",
        "className":"form-control",
        "name":"part_11_heading_extra_7",
        "access":false
     },
    {
        "type":"checkbox-group",
        "required":false,
        "label":"Yes",
        "toggle":false,
        "inline":false,
        "name":"part_11_appendix_C_examples_of_functional_measures18",
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
        "name":"part_11_appendix_C_examples_of_functional_measures19",
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
        "label_2":"Threshold Information",
        "label_3":"",
        "placeholder":"Full Name",
        "className":"form-control",
        "name":"part_11_heading_extra_8",
        "access":false
     },
     {
        "type":"heading",
        "required":false,
        "label_1":"",
        "label_2":"Speech test 1",
        "label_3":"Sentence testing in quite (average conversational level)",
        "placeholder":"Full Name",
        "className":"form-control",
        "name":"part_11_heading_extra_9",
        "access":false
     },
     {
        "type":"heading",
        "required":false,
        "label_1":"",
        "label_2":"Ear: Left",
        "label_3":"Sentence testing in quite (average conversational level)",
        "placeholder":"Full Name",
        "className":"form-control",
        "name":"part_11_heading_extra_10",
        "access":false
     },
    {
        "type":"text",
        "required":false,
        "label":"Unaided",
        "placeholder":"Unaided",
        "className":"form-control",
        "name":"part_11_appendix_C_examples_of_functional_measures20",
        "access":false,
        "subtype":"text"
    },
    {
        "type":"text",
        "required":false,
        "label":"Aided preference",
        "placeholder":"Aided preference",
        "className":"form-control",
        "name":"part_11_appendix_C_examples_of_functional_measures21",
        "access":false,
        "subtype":"text"
    },
    {
        "type":"text",
        "required":false,
        "label":"Aided with remote microphone",
        "placeholder":"Aided with remote microphone",
        "className":"form-control",
        "name":"part_11_appendix_C_examples_of_functional_measures22",
        "access":false,
        "subtype":"text"
    },
    {
        "type":"text",
        "required":false,
        "label":"Auditory Alone",
        "placeholder":"Auditory Alone",
        "className":"form-control",
        "name":"part_11_appendix_C_examples_of_functional_measures23",
        "access":false,
        "subtype":"text"
    },
    {
        "type":"text",
        "required":false,
        "label":"Auditory – Visual",
        "placeholder":"Auditory – Visual",
        "className":"form-control",
        "name":"part_11_appendix_C_examples_of_functional_measures24",
        "access":false,
        "subtype":"text"
    },
    {
        "type":"text",
        "required":false,
        "label":"Visual alone",
        "placeholder":"Visual alone",
        "className":"form-control",
        "name":"part_11_appendix_C_examples_of_functional_measures25",
        "access":false,
        "subtype":"text"
    },
    {
        "type":"heading",
        "required":false,
        "label_1":"",
        "label_2":"Ear: Right",
        "label_3":"Sentence testing in quite (average conversational level)",
        "placeholder":"Full Name",
        "className":"form-control",
        "name":"part_11_heading_extra_11",
        "access":false
     },
    {
        "type":"text",
        "required":false,
        "label":"Unaided",
        "placeholder":"Unaided",
        "className":"form-control",
        "name":"part_11_appendix_C_examples_of_functional_measures26",
        "access":false,
        "subtype":"text"
    },
    {
        "type":"text",
        "required":false,
        "label":"Aided preference",
        "placeholder":"Aided preference",
        "className":"form-control",
        "name":"part_11_appendix_C_examples_of_functional_measures27",
        "access":false,
        "subtype":"text"
    },
    {
        "type":"text",
        "required":false,
        "label":"Aided with remote microphone",
        "placeholder":"Aided with remote microphone",
        "className":"form-control",
        "name":"part_11_appendix_C_examples_of_functional_measures28",
        "access":false,
        "subtype":"text"
    },
    {
        "type":"text",
        "required":false,
        "label":"Auditory Alone",
        "placeholder":"Auditory Alone",
        "className":"form-control",
        "name":"part_11_appendix_C_examples_of_functional_measures29",
        "access":false,
        "subtype":"text"
    },
    {
        "type":"text",
        "required":false,
        "label":"Auditory – Visual",
        "placeholder":"Auditory – Visual",
        "className":"form-control",
        "name":"part_11_appendix_C_examples_of_functional_measures30",
        "access":false,
        "subtype":"text"
    },
    {
        "type":"text",
        "required":false,
        "label":"Visual alone",
        "placeholder":"Visual alone",
        "className":"form-control",
        "name":"part_11_appendix_C_examples_of_functional_measures31",
        "access":false,
        "subtype":"text"
    },
    {
        "type":"heading",
        "required":false,
        "label_1":"",
        "label_2":"Ear: Both",
        "label_3":"Sentence testing in quite (average conversational level)",
        "placeholder":"Full Name",
        "className":"form-control",
        "name":"part_11_heading_extra_12",
        "access":false
     },
    {
        "type":"text",
        "required":false,
        "label":"Unaided",
        "placeholder":"Unaided",
        "className":"form-control",
        "name":"part_11_appendix_C_examples_of_functional_measures32",
        "access":false,
        "subtype":"text"
    },
    {
        "type":"text",
        "required":false,
        "label":"Aided preference",
        "placeholder":"Aided preference",
        "className":"form-control",
        "name":"part_11_appendix_C_examples_of_functional_measures33",
        "access":false,
        "subtype":"text"
    },
    {
        "type":"text",
        "required":false,
        "label":"Aided with remote microphone",
        "placeholder":"Aided with remote microphone",
        "className":"form-control",
        "name":"part_11_appendix_C_examples_of_functional_measures34",
        "access":false,
        "subtype":"text"
    },
    {
        "type":"text",
        "required":false,
        "label":"Auditory Alone",
        "placeholder":"Auditory Alone",
        "className":"form-control",
        "name":"part_11_appendix_C_examples_of_functional_measures35",
        "access":false,
        "subtype":"text"
    },
    {
        "type":"text",
        "required":false,
        "label":"Auditory – Visual",
        "placeholder":"Auditory – Visual",
        "className":"form-control",
        "name":"part_11_appendix_C_examples_of_functional_measures36",
        "access":false,
        "subtype":"text"
    },
    {
        "type":"text",
        "required":false,
        "label":"Visual alone",
        "placeholder":"Visual alone",
        "className":"form-control",
        "name":"part_11_appendix_C_examples_of_functional_measures37",
        "access":false,
        "subtype":"text"
    },
    {
        "type":"heading",
        "required":false,
        "label_1":"",
        "label_2":"Speech test 2",
        "label_3":"Sentence testing in noise (average conversation level if appropriate)",
        "placeholder":"Full Name",
        "className":"form-control",
        "name":"part_11_heading_extra_13",
        "access":false
     },
     {
        "type":"heading",
        "required":false,
        "label_1":"",
        "label_2":"Ear: Left",
        "label_3":"",
        "placeholder":"Full Name",
        "className":"form-control",
        "name":"part_11_heading_extra_14",
        "access":false
     },
    {
        "type":"text",
        "required":false,
        "label":"Unaided",
        "placeholder":"Unaided",
        "className":"form-control",
        "name":"part_11_appendix_C_examples_of_functional_measures38",
        "access":false,
        "subtype":"text"
    },
    {
        "type":"text",
        "required":false,
        "label":"Aided preference",
        "placeholder":"Aided preference",
        "className":"form-control",
        "name":"part_11_appendix_C_examples_of_functional_measures39",
        "access":false,
        "subtype":"text"
    },
    {
        "type":"text",
        "required":false,
        "label":"Aided with remote microphone",
        "placeholder":"Aided with remote microphone",
        "className":"form-control",
        "name":"part_11_appendix_C_examples_of_functional_measures40",
        "access":false,
        "subtype":"text"
    },
    {
        "type":"text",
        "required":false,
        "label":"Auditory Alone",
        "placeholder":"Auditory Alone",
        "className":"form-control",
        "name":"part_11_appendix_C_examples_of_functional_measures41",
        "access":false,
        "subtype":"text"
    },
    {
        "type":"text",
        "required":false,
        "label":"Auditory – Visual",
        "placeholder":"Auditory – Visual",
        "className":"form-control",
        "name":"part_11_appendix_C_examples_of_functional_measures42",
        "access":false,
        "subtype":"text"
    },
    {
        "type":"text",
        "required":false,
        "label":"Visual alone",
        "placeholder":"Visual alone",
        "className":"form-control",
        "name":"part_11_appendix_C_examples_of_functional_measures43",
        "access":false,
        "subtype":"text"
    },
    {
        "type":"heading",
        "required":false,
        "label_1":"",
        "label_2":"Ear: Right",
        "label_3":"",
        "placeholder":"Full Name",
        "className":"form-control",
        "name":"part_11_heading_extra_15",
        "access":false
     },
    {
        "type":"text",
        "required":false,
        "label":"Unaided",
        "placeholder":"Unaided",
        "className":"form-control",
        "name":"part_11_appendix_C_examples_of_functional_measures44",
        "access":false,
        "subtype":"text"
    },
    {
        "type":"text",
        "required":false,
        "label":"Aided preference",
        "placeholder":"Aided preference",
        "className":"form-control",
        "name":"part_11_appendix_C_examples_of_functional_measures45",
        "access":false,
        "subtype":"text"
    },
    {
        "type":"text",
        "required":false,
        "label":"Aided with remote microphone",
        "placeholder":"Aided with remote microphone",
        "className":"form-control",
        "name":"part_11_appendix_C_examples_of_functional_measures46",
        "access":false,
        "subtype":"text"
    },
    {
        "type":"text",
        "required":false,
        "label":"Auditory Alone",
        "placeholder":"Auditory Alone",
        "className":"form-control",
        "name":"part_11_appendix_C_examples_of_functional_measures47",
        "access":false,
        "subtype":"text"
    },
    {
        "type":"text",
        "required":false,
        "label":"Auditory – Visual",
        "placeholder":"Auditory – Visual",
        "className":"form-control",
        "name":"part_11_appendix_C_examples_of_functional_measures48",
        "access":false,
        "subtype":"text"
    },
    {
        "type":"text",
        "required":false,
        "label":"Visual alone",
        "placeholder":"Visual alone",
        "className":"form-control",
        "name":"part_11_appendix_C_examples_of_functional_measures49",
        "access":false,
        "subtype":"text"
    },
    {
        "type":"heading",
        "required":false,
        "label_1":"",
        "label_2":"Ear: Both",
        "label_3":"",
        "placeholder":"Full Name",
        "className":"form-control",
        "name":"part_11_heading_extra_16",
        "access":false
     },
    {
        "type":"text",
        "required":false,
        "label":"Unaided",
        "placeholder":"Unaided",
        "className":"form-control",
        "name":"part_11_appendix_C_examples_of_functional_measures50",
        "access":false,
        "subtype":"text"
    },
    {
        "type":"text",
        "required":false,
        "label":"Aided preference",
        "placeholder":"Aided preference",
        "className":"form-control",
        "name":"part_11_appendix_C_examples_of_functional_measures51",
        "access":false,
        "subtype":"text"
    },
    {
        "type":"text",
        "required":false,
        "label":"Aided with remote microphone",
        "placeholder":"Aided with remote microphone",
        "className":"form-control",
        "name":"part_11_appendix_C_examples_of_functional_measures52",
        "access":false,
        "subtype":"text"
    },
    {
        "type":"text",
        "required":false,
        "label":"Auditory Alone",
        "placeholder":"Auditory Alone",
        "className":"form-control",
        "name":"part_11_appendix_C_examples_of_functional_measures53",
        "access":false,
        "subtype":"text"
    },
    {
        "type":"text",
        "required":false,
        "label":"Auditory – Visual",
        "placeholder":"Auditory – Visual",
        "className":"form-control",
        "name":"part_11_appendix_C_examples_of_functional_measures54",
        "access":false,
        "subtype":"text"
    },
    {
        "type":"text",
        "required":false,
        "label":"Visual alone",
        "placeholder":"Visual alone",
        "className":"form-control",
        "name":"part_11_appendix_C_examples_of_functional_measures55",
        "access":false,
        "subtype":"text"
    },
    {
        "type":"heading",
        "required":false,
        "label_1":"",
        "label_2":"Speech test 3",
        "label_3":"Delete non-applicable response",
        "placeholder":"Full Name",
        "className":"form-control",
        "name":"part_11_heading_extra_17",
        "access":false
     },
     {
        "type":"heading",
        "required":false,
        "label_1":"",
        "label_2":"QuickSIN",
        "label_3":"",
        "placeholder":"Full Name",
        "className":"form-control",
        "name":"part_11_heading_extra_18",
        "access":false
     },
     {
        "type":"checkbox-group",
        "required":false,
        "label":"Yes",
        "toggle":false,
        "inline":false,
        "name":"part_11_appendix_C_examples_of_functional_measures56",
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
        "name":"part_11_appendix_C_examples_of_functional_measures57",
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
        "label_2":"SPIN",
        "label_3":"",
        "placeholder":"Full Name",
        "className":"form-control",
        "name":"part_11_heading_extra_19",
        "access":false
     },
     {
        "type":"checkbox-group",
        "required":false,
        "label":"Yes",
        "toggle":false,
        "inline":false,
        "name":"part_11_appendix_C_examples_of_functional_measures58",
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
        "name":"part_11_appendix_C_examples_of_functional_measures59",
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
        "label_2":"QuickSIN",
        "label_3":"",
        "placeholder":"Full Name",
        "className":"form-control",
        "name":"part_11_heading_extra_20",
        "access":false
     },
     {
        "type":"checkbox-group",
        "required":false,
        "label":"Yes",
        "toggle":false,
        "inline":false,
        "name":"part_11_appendix_C_examples_of_functional_measures60",
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
        "name":"part_11_appendix_C_examples_of_functional_measures61",
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
        "label":"Similar Test",
        "placeholder":"Similar Test",
        "className":"form-control",
        "name":"part_11_appendix_C_examples_of_functional_measures62",
        "access":false,
        "subtype":"text"
    },
    {
        "type":"heading",
        "required":false,
        "label_1":"",
        "label_2":"Ear: Left",
        "label_3":"",
        "placeholder":"Full Name",
        "className":"form-control",
        "name":"part_11_heading_extra_21",
        "access":false
     },
    {
        "type":"text",
        "required":false,
        "label":"Unaided",
        "placeholder":"Unaided",
        "className":"form-control",
        "name":"part_11_appendix_C_examples_of_functional_measures63",
        "access":false,
        "subtype":"text"
    },
    {
        "type":"text",
        "required":false,
        "label":"Aided preference",
        "placeholder":"Aided preference",
        "className":"form-control",
        "name":"part_11_appendix_C_examples_of_functional_measures64",
        "access":false,
        "subtype":"text"
    },
    {
        "type":"text",
        "required":false,
        "label":"Aided with remote microphone",
        "placeholder":"Aided with remote microphonee",
        "className":"form-control",
        "name":"part_11_appendix_C_examples_of_functional_measures65",
        "access":false,
        "subtype":"text"
    },
    {
        "type":"heading",
        "required":false,
        "label_1":"",
        "label_2":"Ear: Right",
        "label_3":"",
        "placeholder":"Full Name",
        "className":"form-control",
        "name":"part_11_heading_extra_22",
        "access":false
     },
    {
        "type":"text",
        "required":false,
        "label":"Unaided",
        "placeholder":"Unaided",
        "className":"form-control",
        "name":"part_11_appendix_C_examples_of_functional_measures66",
        "access":false,
        "subtype":"text"
    },
    {
        "type":"text",
        "required":false,
        "label":"Aided preference",
        "placeholder":"Aided preference",
        "className":"form-control",
        "name":"part_11_appendix_C_examples_of_functional_measures67",
        "access":false,
        "subtype":"text"
    },
    {
        "type":"text",
        "required":false,
        "label":"Aided with remote microphone",
        "placeholder":"Aided with remote microphonee",
        "className":"form-control",
        "name":"part_11_appendix_C_examples_of_functional_measures68",
        "access":false,
        "subtype":"text"
    },
    {
        "type":"heading",
        "required":false,
        "label_1":"",
        "label_2":"Ear: Both",
        "label_3":"",
        "placeholder":"Full Name",
        "className":"form-control",
        "name":"part_11_heading_extra_23",
        "access":false
     },
    {
        "type":"text",
        "required":false,
        "label":"Unaided",
        "placeholder":"Unaided",
        "className":"form-control",
        "name":"part_11_appendix_C_examples_of_functional_measures69",
        "access":false,
        "subtype":"text"
    },
    {
        "type":"text",
        "required":false,
        "label":"Aided preference",
        "placeholder":"Aided preference",
        "className":"form-control",
        "name":"part_11_appendix_C_examples_of_functional_measures70",
        "access":false,
        "subtype":"text"
    },
    {
        "type":"text",
        "required":false,
        "label":"Aided with remote microphone",
        "placeholder":"Aided with remote microphonee",
        "className":"form-control",
        "name":"part_11_appendix_C_examples_of_functional_measures71",
        "access":false,
        "subtype":"text"
    },
    {
        "type":"textarea",
        "required":false,
        "label":"Other Functional Assessments?",
        "placeholder":"Other Functional Assessments?",
        "className":"form-control",
        "name":"part_11_appendix_C_examples_of_functional_measures72",
        "access":false,
        "subtype":"text"
    },
    {
        "type":"heading",
        "required":false,
        "label_1":"",
        "label_2":"KEY:",
        "label_3":"Attach relevant audiograms (Indicate assessments completed within table). \nAided preference describes participant’s preferred daily wearing option on each ear.",
        "placeholder":"Full Name",
        "className":"form-control",
        "name":"part_11_heading_extra_24",
        "access":false
     }
    ]';

        $form = Form::insertGetId([
            'name' => 'Hearing Devices and Hearing Technology Assessment Template'
        ]);

        $heading1 = FormHeading::insertGetId([
            'form_heading' => 'Participant and Plan Management Details',
            'form_id' => $form,
            'section_html' => $section1
        ]);

        $heading2 = FormHeading::insertGetId([
            'form_heading' => 'Background Information',
            'form_id' => $form,
            'section_html' => $section2
        ]);

        $heading3 = FormHeading::insertGetId([
            'form_heading' => 'Recommended Option',
            'form_id' => $form,
            'section_html' => $section3
        ]);

        $heading4 = FormHeading::insertGetId([
            'form_heading' => 'Additional Technology / Supports',
            'form_id' => $form,
            'section_html' => $section4
        ]);

        $heading5 = FormHeading::insertGetId([
            'form_heading' => 'Participant Agreement',
            'form_id' => $form,
            'section_html' => $section5
        ]);

        $heading6 = FormHeading::insertGetId([
            'form_heading' => 'Attachments',
            'form_id' => $form,
            'section_html' => $section6
        ]);

        $heading7 = FormHeading::insertGetId([
            'form_heading' => 'Details of Assessor',
            'form_id' => $form,
            'section_html' => $section7
        ]);

        $heading8 = FormHeading::insertGetId([
            'form_heading' => 'Participant Consent and Acknowledgement of Interest',
            'form_id' => $form,
            'section_html' => $section8
        ]);
        $heading9 = FormHeading::insertGetId([
            'form_heading' => 'Appendix A: Replacement Device Request',
            'form_id' => $form,
            'section_html' => $section9
        ]);
        $heading10 = FormHeading::insertGetId([
            'form_heading' => 'Appendix B: Refit / Upgrade Request',
            'form_id' => $form,
            'section_html' => $section10
        ]);
        $heading11 = FormHeading::insertGetId([
            'form_heading' => 'Appendix C: Examples of functional measures for hearing device refitting requests',
            'form_id' => $form,
            'section_html' => $section11
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
        FormField::create([
            'form_heading_id' => $heading9,
            'form_field' => $form_fields9
        ]);
        FormField::create([
            'form_heading_id' => $heading10,
            'form_field' => $form_fields10
        ]);
        FormField::create([
            'form_heading_id' => $heading11,
            'form_field' => $form_fields11
        ]);
    }
}
