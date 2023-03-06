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
        $section1 = '<table style="background-color:#7209B7; border:none; width:100%;">
        <tr>
            <td>
                <p style="font-size:12pt; font-weight:bold; margin-top:5px; margin-bottom:5px; color: white">  PART 1 – Participant and Plan Management Details</p>
            </td>
        </tr>
    </table>
    <p style="font-weight: bold; margin-bottom: 10px; margin-top: 10px">1.1  NDIS Participant Details</p>
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
              <td style="font-weight:bold; border: 1px solid lightslategray; padding: 10px; width: 40%; background-color: lightgrey; font-size: 17px">Name</td>
              <td style="border: 1px solid lightslategray; padding: 10px;">
                Field Data
              </td>
            </tr>
            <tr>
              <td style="font-weight:bold; border: 1px solid lightslategray; padding: 10px; width: 40%;background-color: lightgrey; font-size: 17px">Date of Birth</td>
              <td style="border: 1px solid lightslategray; padding: 10px;">
                Field Data
              </td>
            </tr>
            <tr>
              <td style="font-weight:bold; border: 1px solid lightslategray; padding: 10px; width: 40%; background-color: lightgrey; font-size: 17px">Age</td>
              <td style="border: 1px solid lightslategray; padding: 10px;">
                Field Data
              </td>
            </tr>
            <tr>
              <td style="font-weight:bold; border: 1px solid lightslategray; padding: 10px; width: 40%;background-color: lightgrey; font-size: 17px">NDIS Number</td>
              <td style="border: 1px solid lightslategray; padding: 10px;">
                Field Data
              </td>
            </tr>
            <tr>
              <td style="font-weight:bold; border: 1px solid lightslategray; padding: 10px; width: 40%;background-color: lightgrey; font-size: 17px">Address</td>
              <td style="border: 1px solid lightslategray; padding: 10px;">
                Field Data
              </td>
            </tr>
            <tr>
              <td style="font-weight:bold; border: 1px solid lightslategray; padding: 10px; width: 40%;background-color: lightgrey; font-size: 17px">Contact Telephone Number</td>
              <td style="border: 1px solid lightslategray; padding: 10px">
                Field Data
              </td>
            </tr>
            <tr>
              <td style="font-weight:bold; border: 1px solid lightslategray; padding: 10px; width: 40%;background-color: lightgrey; font-size: 17px">Email</td>
              <td style="border: 1px solid lightslategray; padding: 10px">
                Field Data
              </td>
            </tr>
            <tr>
              <td style="font-weight:bold; border: 1px solid lightslategray; padding: 10px; width: 40%;background-color: lightgrey; font-size: 17px">Preferred Contact Method </td>
              <td style="border: 1px solid lightslategray; padding: 10px">
                Field Data
              </td>
            </tr>
            <tr>
              <td style="font-weight:bold; border: 1px solid lightslategray; padding: 10px; width: 40%;background-color: lightgrey; font-size: 17px">Nominee or Guardian Name</td>
              <td style="border: 1px solid lightslategray; padding: 10px">
                Field Data
              </td>
            </tr>
            <tr>
              <td style="font-weight:bold; border: 1px solid lightslategray; padding: 10px; width: 40%;background-color: lightgrey; font-size: 17px">Nominee or Guardian Phone</td>
              <td style="border: 1px solid lightslategray; padding: 10px">
                Field Data
              </td>
            </tr>
            <tr>
              <td style="font-weight:bold; border: 1px solid lightslategray; padding: 10px; width: 40%;background-color: lightgrey; font-size: 17px">NDIS Support Coordinator</td>
              <td style="border: 1px solid lightslategray; padding: 10px">
                Field Data
              </td>
            </tr>
            <tr>
              <td style="font-weight:bold; border: 1px solid lightslategray; padding: 10px; width: 40%;background-color: lightgrey; font-size: 17px">Contact Details</td>
              <td style="border: 1px solid lightslategray; padding: 10px">
                Field Data
              </td>
            </tr>
            
          </tbody>
    </table>
    <p style="font-weight: bold; margin-bottom: 10px; margin-top: 10px;">1.2 Plan Management Details</p>
    <p style="font-size: 12pt; margin-bottom: 11px; margin-top:12px;">Select option by checking the box</p>
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
              <td style="font-weight:bold; border: 1px solid lightslategray; padding: 10px; width: 40%; background-color: lightgrey; font-size: 17px">Agency Managed</td>
              <td style="border: 1px solid lightslategray; padding: 10px">
                Field Data
              </td>
            </tr>
            <tr>
              <td style="font-weight:bold; border: 1px solid lightslategray; padding: 10px; width: 40%;background-color: lightgrey; font-size: 17px">Self-Managed</td>
              <td style="border: 1px solid lightslategray; padding: 10px">
                Field Data
              </td>
            </tr>
            <tr>
              <td style="font-weight:bold; border: 1px solid lightslategray; padding: 10px; width: 40%; background-color: lightgrey; font-size: 17px">Registered Plan Management Provider. Add contact details below</td>
              <td style="border: 1px solid lightslategray; padding: 10px">
                Field Data
              </td>
            </tr>
            </tbody>
            </table>
    
    <table style="width:100%;">
    <tr>
              <td style="font-weight:bold; border: 1px solid lightslategray; padding: 10px; width: 40%;background-color: lightgrey; font-size: 17px">Contact Details</td>
              <td style="border: 1px solid lightslategray; padding: 10px; width: 60%;">
                Field Data
              </td>
            </tr>
    </table>
    <p style="margin-top:10px"></p>';
    
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
                  <td style="border: 1px solid lightslategray; padding: 10px">
                    Field Data
                  </td>
                </tr>
                <tr>
                  <td style="font-weight:bold; border: 1px solid lightslategray; padding: 10px; width: 40%;background-color: lightgrey; font-size: 17px">The first device for this ear?</td>
                  <td style="border: 1px solid lightslategray; padding: 10px">
                    Field Data
                  </td>
                </tr>
                <tr>
                  <td style="font-weight:bold; border: 1px solid lightslategray; padding: 10px; width: 40%; background-color: lightgrey; font-size: 17px">A replacement device?</td>
                  <td style="border: 1px solid lightslategray; padding: 10px">
                    Field Data
                  </td>
                </tr>
                <tr>
                  <td style="font-weight:bold; border: 1px solid lightslategray; padding: 10px; width: 40%;background-color: lightgrey; font-size: 17px">The previous device is lost / damaged beyond repair (DBR) / has reached the end of its service life?</td>
                  <td style="border: 1px solid lightslategray; padding: 10px">
                    Field Data
                  </td>
                </tr>
                <tr>
                  <td style="font-weight:bold; border: 1px solid lightslategray; padding: 10px; width: 40%;background-color: lightgrey; font-size: 17px">A refitted / upgraded device?</td>
                  <td style="border: 1px solid lightslategray; padding: 10px">
                    Field Data
                  </td>
                </tr>
                <tr>
                  <td style="font-weight:bold; border: 1px solid lightslategray; padding: 10px; width: 40%;background-color: lightgrey; font-size: 17px">A new device with higher specifications or different style is required because of the participants functional capacity has changed?</td>
                  <td style="border: 1px solid lightslategray; padding: 10px">
                    Field Data
                  </td>
                </tr>
              </tbody>
              </table>
              <p style="font-weight:bold; font-size:13pt;margin-top:20px; margin-bottom:20px;">2.2   Hearing Background</p>
              <p style="font-size:12pt;">Describe below the participant’s ear and hearing history, include age of diagnosis, cause of hearing loss (if known), and hearing device usage history</p>
              <table style="width:100%; border: 1px solid black">
                  <tr>
                      <td style="width: 100%; border: 1px solid black;"><p style="margin-top:10px; margin-bottom:10px;"> Text goes here</p></td>
                  </tr>
              </table>
              
        <p style="font-weight:bold; font-size:13pt;margin-top:20px; margin-bottom:20px;">2.3   Communication background</p>
        <p style="font-size:12pt;">Include information about the participant’s current communication including preferred mode of communication and any barriers to communicate (for example, literacy).</p>
        <table style="width:100%; border: 1px solid black">
            <tr>
                <td style="width: 100%; border: 1px solid black;"><p style="margin-top:10px; margin-bottom:10px;"> Text goes here</p></td>
            </tr>
        </table>
        
        <p style="font-weight:bold; font-size:13pt;margin-top:20px; margin-bottom:20px;">2.4   Medical / Health background</p>
        <p style="font-size:12pt;">Provide information about co-existing conditions or disabilities that may impact on communication and/or device use, if relevant to the device prescription. Attach relevant reports if available (with the participant’s consent) and provide information about treating professionals.</p>
        <table style="width:100%; border: 1px solid black">
            <tr>
                <td style="width: 100%; border: 1px solid black;"><p style="margin-top:10px; margin-bottom:10px;"> Text goes here</p></td>
            </tr>
        </table>
        <p style="font-weight:bold; font-size:13pt;margin-top:20px; margin-bottom:20px;">2.5   Participant Goals</p>
        <p style="font-size:12pt;">If the participant’s NDIS plan has been made available, you can refer to the statement of participant’s goals and outline the goals relevant to the hearing technology request. Include any other relevant communication goals, for example Client Oriented Scale of Improvement (COSI) goals or other goal-setting tools. Where possible, goals should be specific and measurable. In the assessor’s view, are the participant’s goals realistic and achievable?</p>
        <table style="width:100%; border: 1px solid black">
            <tr>
                <td style="width: 100%; border: 1px solid black;"><p style="margin-top:10px; margin-bottom:10px;"> Text goes here</p></td>
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
                    Current Sound Processor(s) and / or hearing aid
                </td>

                <td
                    style="border: 1px solid lightslategray; padding: 10px; width: 35%; background-color: lightgrey; font-size: 17px">
                    Left eart
                </td>

                <td
                    style="border: 1px solid lightslategray; padding: 10px; width: 35%; background-color: lightgrey; font-size: 17px">
                    Right ear
                </td>
               
            </tr>

            <tr>
                <td style="border: 1px solid lightslategray; padding: 10px; width:30px;">
                  Manufacturer
                </td>
                <td style="border: 1px solid lightslategray; padding: 10px; width: 35%;">
                    Field Data
                </td>
                <td style="border: 1px solid lightslategray; padding: 10px; width: 35%;">
                    Field Data
                </td>
            </tr>
            <tr>
            <td style="border: 1px solid lightslategray; padding: 10px; width:30px;">
              Model and style
            </td>
            <td style="border: 1px solid lightslategray; padding: 10px; width: 35%;">
                Field Data
            </td>
            <td style="border: 1px solid lightslategray; padding: 10px; width: 35%;">
                Field Data
            </td>
            
        </tr>

        <tr>
            <td style="border: 1px solid lightslategray; padding: 10px; width:30px;">
              Date of a last fitting
            </td>
            <td style="border: 1px solid lightslategray; padding: 10px; width: 35%;">
                Field Data
            </td>
            <td style="border: 1px solid lightslategray; padding: 10px; width: 35%;">
                Field Data
            </td>
            
        </tr>

        <tr>
            <td style="border: 1px solid lightslategray; padding: 10px; width:30px;">
              Hours worn per day / week. Provide evidence of use, including data logging where possible
            </td>
            <td style="border: 1px solid lightslategray; padding: 10px; width: 35%;">
                Field Data
            </td>
            <td style="border: 1px solid lightslategray; padding: 10px; width: 35%;">
                Field Data
            </td>
            
        </tr>

        <tr>
            <td style="border: 1px solid lightslategray; padding: 10px; width:30px;">
            Service and repair history (where relevant). Attach documentation to application. Yes/No
            </td>
            <td style="border: 1px solid lightslategray; padding: 10px; width: 35%;">
                Field Data
            </td>
            <td style="border: 1px solid lightslategray; padding: 10px; width: 35%;">
                Field Data
            </td>
           
        </tr>
        
        <tr>
            <td style="border: 1px solid lightslategray; padding: 10px; width: 30%;">
            List other assistive devices available to the participant. For example, remote microphones, phone clips, television streamers etc.
            </td>
            <td style="border: 1px solid lightslategray; padding: 10px; width: 35%;">
                Field Data
            </td>
            <td style="border: 1px solid lightslategray; padding: 10px; width: 35%;">
                Field Data
            </td>
           
        </tr>
      </tbody>
      </table>
<p style="margin-top:12tp;"></p>

<table style="width:100%; border: 1px solid black">
<tr>
    <td style="width: 100%; border: 1px solid black; width:20%;background-color: lightgrey;"><p style="margin-top:10px; margin-bottom:10px;"> Comment</p></td>
    <td style="width: 100%; border: 1px solid black; width:80%;"><p style="margin-top:10px; margin-bottom:10px;"> </p></td>
    
</tr>
</table>
  <p style="font-size:12pt;">What is the participant’s current preferred daily listening condition? Delete the response not required</p>
  <table style="
  border-collapse: collapse;
  width: 100%;
  margin: auto;
  border: 1px solid lightslategray;
">
  <tbody>
      <tr>
          <td
              style="font-weight:bold; border: 1px solid lightslategray; padding: 10px; width: 30%; background-color: lightgrey; font-size: 17px">
            Left
          </td>

          <td
              style="font-weight:bold; border: 1px solid lightslategray; padding: 10px; width: 70%; background-color: lightgrey; font-size: 17px">
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
      <table style="width:100%; border: 1px solid black">
      <tr>
          <td style="width: 100%; border: 1px solid black; width:20%;background-color: lightgrey;"><p style="margin-top:10px; margin-bottom:10px;"> Comment</p></td>
          <td style="width: 100%; border: 1px solid black; width:80%;"><p style="margin-top:10px; margin-bottom:10px;"> </p></td>
          
      </tr>
    </table>

  <p style="margin-top:12pt; margin-botton:12px;">Recommended replacement sound processor(s):</p>
  <table style="width:100%; border: 1px solid black">
  <tr>
      <td style="width: 100%; border: 1px solid black; width:20%;background-color: lightgrey;"><p style="margin-top:10px; margin-bottom:10px;"> Make and Model</p></td>
      <td style="width: 100%; border: 1px solid black; width:80%;"><p style="margin-top:10px; margin-bottom:10px;"> </p></td>
      
  </tr>
</table>
  <p style="font-size:12pt;">Evidence of functional outcomes with the recommended sound processor(s)</p>
  <p style="font-size:12pt;">Evidence is attached:</p>
  
  
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
            Yes
          </td>

          <td
              style="border: 1px solid lightslategray; padding: 10px; width: 70%;; font-size: 17px">
              Field data
          </td>
      </tr>
      <tr>
          <td
              style="border: 1px solid lightslategray; padding: 10px; width: 30%; background-color: lightgrey; font-size: 17px">
            No
          </td>

          <td
              style="border: 1px solid lightslategray; padding: 10px; width: 70%;; font-size: 17px">
              Field data
          </td>
      </tr>
      </tbody>
      </table>
      <p style="margin-top:12tp;">Description of evidence if not attached</p>
     
  <p style="margin-top:12tp;">Description of evidence</p>
  <p style="margin-top:12tp;"></p>
  <table style="width:100%; border: 1px solid black">
  <tr>
      <td style="width: 100%; border: 1px solid black; width:20%;background-color: lightgrey;"><p style="margin-top:10px; margin-bottom:10px;"> Description</p></td>
      <td style="width: 100%; border: 1px solid black; width:80%;"><p style="margin-top:10px; margin-bottom:10px;"> </p></td>
  </tr>
</table>
<table style="background-color:#7209B7; border:none; width:100%;">
    <tr>
        <td>
            <p style="font-size:12pt; font-weight:bold; margin-top:5px; margin-bottom:5px; color: white"> 3.2 – Section 3b: Request for hearing aid</p>
        </td>
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
                <td
                    style="border: 1px solid lightslategray; padding: 10px; width: 30%; background-color: lightgrey; font-size: 17px">
                    Current Sound Processor(s) and / or hearing aid
                </td>

                <td
                    style="border: 1px solid lightslategray; padding: 10px; width: 35%; background-color: lightgrey; font-size: 17px">
                    Left eart
                </td>

                <td
                    style="border: 1px solid lightslategray; padding: 10px; width: 35%; background-color: lightgrey; font-size: 17px">
                    Right ear
                </td>
               
            </tr>

            <tr>
                <td style="border: 1px solid lightslategray; padding: 10px; width: 30%;">
                  Manufacturer
                </td>
                <td style="border: 1px solid lightslategray; padding: 10px; width: 35%;">
                    Field Data
                </td>
                <td style="border: 1px solid lightslategray; padding: 10px; width: 35%;">
                    Field Data
                </td>
            </tr>
            <tr>
            <td style="border: 1px solid lightslategray; padding: 10px; width: 30%;">
              Model and style
            </td>
            <td style="border: 1px solid lightslategray; padding: 10px; width: 35%;">
                Field Data
            </td>
            <td style="border: 1px solid lightslategray; padding: 10px; width: 35%;">
                Field Data
            </td>
            
        </tr>

        <tr>
            <td style="border: 1px solid lightslategray; padding: 10px; width: 30%;">
              Date of a last fitting
            </td>
            <td style="border: 1px solid lightslategray; padding: 10px; width: 35%;">
                Field Data
            </td>
            <td style="border: 1px solid lightslategray; padding: 10px; width: 35%;">
                Field Data
            </td>
            
        </tr>

        <tr>
            <td style="border: 1px solid lightslategray; padding: 10px; width: 30%;">
              Hours worn per day / week.
            </td>
            <td style="border: 1px solid lightslategray; padding: 10px; width: 35%;">
                Field Data
            </td>
            <td style="border: 1px solid lightslategray; padding: 10px; width: 35%;">
                Field Data
            </td>
            
        </tr>

        <tr>
            <td style="border: 1px solid lightslategray; padding: 10px; width: 30%;">
            Service and repair history Yes/No
            </td>
            <td style="border: 1px solid lightslategray; padding: 10px; width: 35%;">
                Field Data
            </td>
            <td style="border: 1px solid lightslategray; padding: 10px; width: 35%;">
                Field Data
            </td>
           
        </tr>
        
        <tr>
            <td style="border: 1px solid lightslategray; padding: 10px; width: 30%;">
            List other assistive devices
            </td>
            <td style="border: 1px solid lightslategray; padding: 10px; width: 35%;">
                Field Data
            </td>
            <td style="border: 1px solid lightslategray; padding: 10px; width: 35%;">
                Field Data
            </td>
           
        </tr>
      </tbody>
      </table>
<p style="margin-top:12tp;"></p>
<table style="width:100%; border: 1px solid black">
<tr>
    <td style="width: 100%; border: 1px solid black; width:20%;background-color: lightgrey;"><p style="margin-top:10px; margin-bottom:10px;"> Comment</p></td>
    <td style="width: 100%; border: 1px solid black; width:80%;"><p style="margin-top:10px; margin-bottom:10px;"> </p></td>
    
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
          <td style="width: 100%; border: 1px solid black; width:80%;"><p style="margin-top:10px; margin-bottom:10px;"> </p></td>
      </tr>
    </table>
    <p style="margin-top:12pt; margin-bottom:12px;">If the devices are not used on a daily basis, describe when the devices are used.</p>
    <table style="width:100%; border: 1px solid black">
<tr>
    <td style="width: 100%; border: 1px solid black; width:20%;background-color: lightgrey;"><p style="margin-top:10px; margin-bottom:10px;"> Comment</p></td>
    <td style="width: 100%; border: 1px solid black; width:80%;"><p style="margin-top:10px; margin-bottom:10px;"> </p></td>
</tr>
</table>
<p style="font-weight:bold; font-size:13pt;margin-top:20px; margin-bottom:20px;">3.2.2	Participant Suitability</p>
<p style="font-size:12pt;">Outline the participant’s suitability to use the recommended hearing technology:</p>
<p style="font-size:12pt;">Evidence of suitability, which may include outcomes from speech discrimination and speech in noise assessments and / or other measures</p>
<p style="margin-top:12tp;"></p>
<table style="width:100%; border: 1px solid black;">
<tr>
    <td style="width: 100%; border: 1px solid black; width:20%;background-color: lightgrey;"><p style="font-weight:bold; margin-top:10px; margin-bottom:10px;"> Comment</p></td>
    <td style="width: 100%; border: 1px solid black; width:80%;"><p style="margin-top:10px; margin-bottom:10px;"> </p></td>
</tr>
</table>
<p style="font-size:12pt;">Previous hearing technology use:</p>



<p style="margin-top:12tp;">1.	Length and frequency of the technology use.</p>
<table style="width:100%; border: 1px solid black;">
<tr>
    <td style="width: 100%; border: 1px solid black; width:20%;background-color: lightgrey;"><p style="font-weight:bold; margin-top:10px; margin-bottom:10px;"> Comment</p></td>
    <td style="width: 100%; border: 1px solid black; width:80%;"><p style="margin-top:10px; margin-bottom:10px;"> </p></td>
    
</tr>
</table>

<p style="margin-top:12tp; font-size:12px;">2.	Comment on the success of technology use.</p>
<p style="margin-top:10px;"></p>
<table style="width:100%; border: 1px solid black;">
<tr>
    <td style="width: 100%; border: 1px solid black; width:20%;background-color: lightgrey;"><p style="font-weight:bold; margin-top:10px; margin-bottom:10px;"> Comment</p></td>
    <td style="width: 100%; border: 1px solid black; width:80%;"><p style="margin-top:10px; margin-bottom:10px;"> </p></td>
    
</tr>
</table>
<p style="margin-top:10px;"></p>
<p style="margin-top:12tp;">3.	Comment on the use of compatible assistive listening devices, such as remote microphone systems and /or other wireless streaming devices.</p>
<table style="width:100%; border: 1px solid black;">
<tr>
    <td style="width: 100%; border: 1px solid black; width:20%;background-color: lightgrey;"><p style="font-weight:bold; margin-top:10px; margin-bottom:10px;"> Comment</p></td>
    <td style="width: 100%; border: 1px solid black; width:80%;"><p style="margin-top:10px; margin-bottom:10px;"> </p></td>
    
</tr>
</table>
<p style="margin-top:10px;"></p>
<p style="margin-top:12tp;">4.	Identify factors that impacted on the success of technology use, and steps taken to address any challenges experienced by the participant in using the technology successfully.</p>
<table style="width:100%; border: 1px solid black;">
<tr>
    <td style="width: 100%; border: 1px solid black; width:20%;background-color: lightgrey;"><p style="margin-top:10px; font-weight:bold; margin-bottom:10px;"> Comment</p></td>
    <td style="width: 100%; border: 1px solid black; width:80%;"><p style="margin-top:10px; margin-bottom:10px;"> </p></td>
    
</tr>
</table>
<p style="font-weight:bold; font-size:13pt; margin-top:20px; margin-bottom:20px;">3.2.3	Recommendation of hearing aid(s)</p>
<p style="font-size:12pt;">The recommended hearing aid has the following level of technology:</p>
<p style="margin-top:10px;"></p>

<table style="width:100%; border: 1px solid black;">
<tr>
    <td style="width: 100%; border: 1px solid black; width:20%;background-color: lightgrey;"><p style="margin-top:10px; margin-bottom:10px;"> Basic / Essential</p></td>
    <td style="width: 100%; border: 1px solid black; width:80%;"><p style="margin-top:10px; margin-bottom:10px;"> </p></td>
</tr>
<tr>
    <td style="width: 100%; border: 1px solid black; width:20%;background-color: lightgrey;"><p style="margin-top:10px; margin-bottom:10px;"> Intermediate / Standard</p></td>
    <td style="width: 100%; border: 1px solid black; width:80%;"><p style="margin-top:10px; margin-bottom:10px;"> </p></td>
</tr>
<tr>
    <td style="width: 100%; border: 1px solid black; width:20%;background-color: lightgrey;"><p style="margin-top:10px; margin-bottom:10px;"> Advanced / Premium / Premium Plus</p></td>
    <td style="width: 100%; border: 1px solid black; width:80%;"><p style="margin-top:10px; margin-bottom:10px;"> </p></td>
</tr>
</table>
<p style="font-weight:bold; font-size:13pt;margin-top:20px; margin-bottom:20px;"><strong style="font-weight:bold; font-size:12pt;">Option 1:</strong>Hearing aid recommendation for basic or essential level hearing aids:</p>  
<p style="font-size:12pt; margin-top:10px; margin-bottom:10px;">Recommended device name, model number and style:</p>
<p style="margin-top:12pt;"></p>
<table style="width:100%; border: 1px solid black;">
<tr>
    <td style="width: 100%; border: 1px solid black; width:20%;background-color: lightgrey;"><p style="margin-top:10px; margin-bottom:10px;"> Recommendation</p></td>
    <td style="width: 100%; border: 1px solid black; width:80%;"><p style="margin-top:10px; margin-bottom:10px;"> </p></td>
    
</tr>
</table>
<p style="font-size:12pt; margin-top:10px; margin-bottom:10px;">Evidence of functional outcomes with the recommended device: Both objective evidence (test results) and subjective evidence (participant feedback) is required. Evidence can be provided in the comment section below, or can be attached. Assessors can refer to Appendix C for examples of evidence. Then go to Part 4.</p>
<p style="margin-top:12pt;"></p>
<table style="width:100%; border: 1px solid black;">
<tr>
    <td style="width: 100%; border: 1px solid black; width:20%;background-color: lightgrey;"><p style="margin-top:10px; margin-bottom:10px;"> Comment</p></td>
    <td style="width: 100%; border: 1px solid black; width:80%;"><p style="margin-top:10px; margin-bottom:10px;"> </p></td>   
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
    <td style="width: 100%; border: 1px solid black; width:50%;"><p style="margin-top:10px; margin-bottom:10px;"> </p></td>   
</tr>
<tr>
    <td style="width: 100%; border: 1px solid black; width:50%;background-color: lightgrey; font-weight:bold;"><p style="margin-top:10px; margin-bottom:10px;"> Alternatives trialled to improve outcomes</p></td>
    <td style="width: 100%; border: 1px solid black; width:50%;"><p style="margin-top:10px; margin-bottom:10px;"> </p></td>   
</tr>
<tr>
    <td style="width: 100%; border: 1px solid black; width:50%;background-color: lightgrey; font-weight:bold;"><p style="margin-top:10px; margin-bottom:10px;"> Goals and outcomes with recommended technology</p></td>
    <td style="width: 100%; border: 1px solid black; width:50%;"><p style="margin-top:10px; margin-bottom:10px;"> </p></td>   
</tr>
</table>
<p style="font-size:12pt; margin-top:10px; margin-bottom:10px;"><strong style="font-weight:bold; font-size:12pt;">Context 2:</strong> Describe context, including frequency experienced</p>

<table style="width:100%; border: 1px solid black;">
<tr>
    <td style="width: 100%; border: 1px solid black; width:50%;background-color: lightgrey; font-weight:bold;"><p style="margin-top:10px; margin-bottom:10px;">Goals and outcomes with current device</p></td>
    <td style="width: 100%; border: 1px solid black; width:50%;"><p style="margin-top:10px; margin-bottom:10px;"> </p></td>   
</tr>
<tr>
    <td style="width: 100%; border: 1px solid black; width:50%;background-color: lightgrey; font-weight:bold;"><p style="margin-top:10px; margin-bottom:10px;"> Alternatives trialled to improve outcomes</p></td>
    <td style="width: 100%; border: 1px solid black; width:50%;"><p style="margin-top:10px; margin-bottom:10px;"> </p></td>   
</tr>
<tr>
    <td style="width: 100%; border: 1px solid black; width:50%;background-color: lightgrey; font-weight:bold;"><p style="margin-top:10px; margin-bottom:10px;"> Goals and outcomes with recommended technology</p></td>
    <td style="width: 100%; border: 1px solid black; width:50%;"><p style="margin-top:10px; margin-bottom:10px;"> </p></td>   
</tr>
</table>
<p style="font-size:12pt; margin-top:10px; margin-bottom:10px;"><strong style="font-weight:bold; font-size:12pt;">Context 3:</strong> Describe context, including frequency experienced</p>

<table style="width:100%; border: 1px solid black;">
<tr>
    <td style="width: 100%; border: 1px solid black; width:50%;background-color: lightgrey; font-weight:bold;"><p style="margin-top:10px; margin-bottom:10px;">Goals and outcomes with current device</p></td>
    <td style="width: 100%; border: 1px solid black; width:50%;"><p style="margin-top:10px; margin-bottom:10px;"> </p></td>   
</tr>
<tr>
    <td style="width: 100%; border: 1px solid black; width:50%;background-color: lightgrey; font-weight:bold;"><p style="margin-top:10px; margin-bottom:10px;"> Alternatives trialled to improve outcomes</p></td>
    <td style="width: 100%; border: 1px solid black; width:50%;"><p style="margin-top:10px; margin-bottom:10px;"> </p></td>   
</tr>
<tr>
    <td style="width: 100%; border: 1px solid black; width:50%;background-color: lightgrey; font-weight:bold;"><p style="margin-top:10px; margin-bottom:10px;"> Goals and outcomes with recommended technology</p></td>
    <td style="width: 100%; border: 1px solid black; width:50%;"><p style="margin-top:10px; margin-bottom:10px;"> </p></td>   
</tr>
</table>

<p style="font-size:12pt; margin-top:10px; margin-bottom:10px;"><strong style="font-weight:bold; font-size:12pt;">Context 4:</strong> Describe context, including frequency experienced</p>

<table style="width:100%; border: 1px solid black;">
<tr>
    <td style="width: 100%; border: 1px solid black; width:50%;background-color: lightgrey; font-weight:bold;"><p style="margin-top:10px; margin-bottom:10px;">Goals and outcomes with current device</p></td>
    <td style="width: 100%; border: 1px solid black; width:50%;"><p style="margin-top:10px; margin-bottom:10px;"> </p></td>   
</tr>
<tr>
    <td style="width: 100%; border: 1px solid black; width:50%;background-color: lightgrey; font-weight:bold;"><p style="margin-top:10px; margin-bottom:10px;"> Alternatives trialled to improve outcomes</p></td>
    <td style="width: 100%; border: 1px solid black; width:50%;"><p style="margin-top:10px; margin-bottom:10px;"> </p></td>   
</tr>
<tr>
    <td style="width: 100%; border: 1px solid black; width:50%;background-color: lightgrey; font-weight:bold;"><p style="margin-top:10px; margin-bottom:10px;"> Goals and outcomes with recommended technology</p></td>
    <td style="width: 100%; border: 1px solid black; width:50%;"><p style="margin-top:10px; margin-bottom:10px;"> </p></td>   
</tr>
</table>
<p style="font-size:12pt; margin-top:10px; margin-bottom:10px;"><strong style="font-weight:bold; font-size:12pt;">Context 5:</strong> Describe context, including frequency experienced</p>

<table style="width:100%; border: 1px solid black;">
<tr>
    <td style="width: 100%; border: 1px solid black; width:50%;background-color: lightgrey; font-weight:bold;"><p style="margin-top:10px; margin-bottom:10px;">Goals and outcomes with current device</p></td>
    <td style="width: 100%; border: 1px solid black; width:50%;"><p style="margin-top:10px; margin-bottom:10px;"> </p></td>   
</tr>
<tr>
    <td style="width: 100%; border: 1px solid black; width:50%;background-color: lightgrey; font-weight:bold;"><p style="margin-top:10px; margin-bottom:10px;"> Alternatives trialled to improve outcomes</p></td>
    <td style="width: 100%; border: 1px solid black; width:50%;"><p style="margin-top:10px; margin-bottom:10px;"> </p></td>   
</tr>
<tr>
    <td style="width: 100%; border: 1px solid black; width:50%;background-color: lightgrey; font-weight:bold;"><p style="margin-top:10px; margin-bottom:10px;"> Goals and outcomes with recommended technology</p></td>
    <td style="width: 100%; border: 1px solid black; width:50%;"><p style="margin-top:10px; margin-bottom:10px;"> </p></td>   
</tr>
</table>
<p style="font-size:12pt; margin-top:10px; margin-bottom:10px;"><strong style="font-weight:bold; font-size:12pt;">Context 6:</strong> Describe context, including frequency experienced</p>

<table style="width:100%; border: 1px solid black;">
<tr>
    <td style="width: 100%; border: 1px solid black; width:50%;background-color: lightgrey; font-weight:bold;"><p style="margin-top:10px; margin-bottom:10px;">Goals and outcomes with current device</p></td>
    <td style="width: 100%; border: 1px solid black; width:50%;"><p style="margin-top:10px; margin-bottom:10px;"> </p></td>   
</tr>
<tr>
    <td style="width: 100%; border: 1px solid black; width:50%;background-color: lightgrey; font-weight:bold;"><p style="margin-top:10px; margin-bottom:10px;"> Alternatives trialled to improve outcomes</p></td>
    <td style="width: 100%; border: 1px solid black; width:50%;"><p style="margin-top:10px; margin-bottom:10px;"> </p></td>   
</tr>
<tr>
    <td style="width: 100%; border: 1px solid black; width:50%;background-color: lightgrey; font-weight:bold;"><p style="margin-top:10px; margin-bottom:10px;"> Goals and outcomes with recommended technology</p></td>
    <td style="width: 100%; border: 1px solid black; width:50%;"><p style="margin-top:10px; margin-bottom:10px;"> </p></td>   
</tr>
</table>


<p style="font-size:12pt; margin-top:10px; margin-bottom:10px;"><strong style="font-weight:bold; font-size:12pt;">Context 7:</strong> Describe context, including frequency experienced</p>

<table style="width:100%; border: 1px solid black;">
<tr>
    <td style="width: 100%; border: 1px solid black; width:50%;background-color: lightgrey; font-weight:bold;"><p style="margin-top:10px; margin-bottom:10px;">Goals and outcomes with current device</p></td>
    <td style="width: 100%; border: 1px solid black; width:50%;"><p style="margin-top:10px; margin-bottom:10px;"> </p></td>   
</tr>
<tr>
    <td style="width: 100%; border: 1px solid black; width:50%;background-color: lightgrey; font-weight:bold;"><p style="margin-top:10px; margin-bottom:10px;"> Alternatives trialled to improve outcomes</p></td>
    <td style="width: 100%; border: 1px solid black; width:50%;"><p style="margin-top:10px; margin-bottom:10px;"> </p></td>   
</tr>
<tr>
    <td style="width: 100%; border: 1px solid black; width:50%;background-color: lightgrey; font-weight:bold;"><p style="margin-top:10px; margin-bottom:10px;"> Goals and outcomes with recommended technology</p></td>
    <td style="width: 100%; border: 1px solid black; width:50%;"><p style="margin-top:10px; margin-bottom:10px;"> </p></td>   
</tr>
</table>
<p style="margin-top:12pt; margin-bottom:12px">3.2.3.1 <strong style="font-weight:bold">Other Relevant Information for intermediate, advanced and/or premium level hearing aids.</strong></p>

<p style="font-size:12pt; margin-top:10px; margin-bottom:10px;">Provide any other relevant information, such as activities of daily living; formal and informal support arrangements (families or carers who can support device usage); the participant’s attitude towards hearing aids and technology in general; their expectations of the devices; and foreseeable life-stage transitions.</p>
<p style="margin-top:12pt;"></p>
<table style="width:100%; border: 1px solid black;">
<tr>
    <td style="width: 100%; border: 1px solid black; width:20%;background-color: lightgrey;"><p style="margin-top:10px; margin-bottom:10px;"> Comment</p></td>
    <td style="width: 100%; border: 1px solid black; width:80%;"><p style="margin-top:10px; margin-bottom:10px;"> </p></td>
    
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
        <p style="margin-top:10px; margin-bottom:10px;"> </p>
    </td>
    <td style="width: 100%; border: 1px solid black; width:35%;">
        <p style="margin-top:10px; margin-bottom:10px;"> </p>
    </td>
    <td style="width: 100%; border: 1px solid black; width:35%;">
        <p style="margin-top:10px; margin-bottom:10px;"> </p>
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
        <p style="margin-top:10px; margin-bottom:10px;"> </p>
    </td>
    <td style="width: 100%; border: 1px solid black; width:35%;">
        <p style="margin-top:10px; margin-bottom:10px;"> </p>
    </td>
    <td style="width: 100%; border: 1px solid black; width:35%;">
        <p style="margin-top:10px; margin-bottom:10px;"> </p>
    </td>
</tr>
</table>

<p style="font-size:12pt; margin-top:10px; margin-bottom:10px;">Steps taken to consider lower cost alternatives to improve hearing outcomes. For example; lower cost devices trialled, use of remote microphones / wireless streaming devices.</p>
<table style="width:100%; border: 1px solid black;">
<tr>
    <td style="width: 100%; border: 1px solid black; width:20%;background-color: lightgrey;"><p style="margin-top:10px; margin-bottom:10px;"> Comment</p></td>
    <td style="width: 100%; border: 1px solid black; width:80%;"><p style="margin-top:10px; margin-bottom:10px;"> </p></td>
    
</tr>
</table>
<p style="font-size:12pt; margin-top:10px; margin-bottom:10px;">Are there any comparable support options that would achieve similar outcomes at a lower cost? For example, auditory training, training in handling devices, etc.</p>
<table style="width:100%; border: 1px solid black;">
<tr>
    <td style="width: 100%; border: 1px solid black; width:20%;background-color: lightgrey;"><p style="margin-top:10px; margin-bottom:10px;"> Comment</p></td>
    <td style="width: 100%; border: 1px solid black; width:80%;"><p style="margin-top:10px; margin-bottom:10px;"> </p></td>
    
</tr>
</table>
<p>Evidence that the recommended device is the most appropriate, based on measurable goals and outcomes. Where an intermediate, advanced or premium level hearing aid is recommended, comparison to other devices is required. Where the participant has a hearing loss in both ears, it is expected that the evidence be based on two aided ears. For example; sound processor in one ear, recommended hearing aid in the other ear.</p>
<table style="width:100%; border: 1px solid black;">
<tr>
    <td style="width: 100%; border: 1px solid black; width:20%;background-color: lightgrey;"><p style="margin-top:10px; margin-bottom:10px;"> Comment</p></td>
    <td style="width: 100%; border: 1px solid black; width:80%;"><p style="margin-top:10px; margin-bottom:10px;"> </p></td>
    
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
    <td style="width: 100%; border: 1px solid black; width:80%;"><p style="margin-top:10px; margin-bottom:10px;"> </p></td>
    
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
            <td style="width: 100%; border: 1px solid black; width:80%;"><p style="margin-top:10px; margin-bottom:10px;"> </p></td>
            
        </tr>
        <tr>
            <td style="width: 100%; border: 1px solid black; width:20%;background-color: lightgrey;"><p style="margin-top:10px; margin-bottom:10px; font-size:bold;"> No</p></td>
            <td style="width: 100%; border: 1px solid black; width:80%;"><p style="margin-top:10px; margin-bottom:10px;"> </p></td>
            
        </tr>
        <tr>
            <td style="width: 100%; border: 1px solid black; width:20%;background-color: lightgrey;"><p style="margin-top:10px; margin-bottom:10px; font-size:bold;"> Provide details</p></td>
            <td style="width: 100%; border: 1px solid black; width:80%;"><p style="margin-top:10px; margin-bottom:10px;"> </p></td>
            
        </tr>
        </table>
        <p style="margin-top:12pt:"></p>';

        $section6='<table style="background-color:#7209B7; border:none; width:100%;">
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
        $section7='<table style="background-color:#7209B7; border:none; width:100%;">
        <tr>
            <td>
                <p style="font-size:12pt; font-weight:bold; margin-top:5px; margin-bottom:5px; color: white">7. Details Assessor</p>
            </td>
        </tr>
    </table>
    <P style="font-size:12pt;"> <strong style="font-size:bold;">Declaration</strong> (indicate all relevant sections that apply)</P>
    <table>
    <tr>
        <td style="width: 100%; border: 1px solid black; width:10%;background-color: lightgrey;"><p style="margin-top:10px; margin-bottom:10px;">Field data</p></td>
        <td style="width: 100%; border: 1px solid black; width:90%;"><p style="margin-top:10px; margin-bottom:10px;">I certify that I meet the NDIA expectations of AT assessor provider suitability (including understanding of the current NDIS Act</p></td>
    </tr>
    <tr>
        <td style="width: 100%; border: 1px solid black; width:10%;background-color: lightgrey;"><p style="margin-top:10px; margin-bottom:10px;">Field data</p></td>
        <td style="width: 100%; border: 1px solid black; width:90%;"><p style="margin-top:10px; margin-bottom:10px;">I will provide appropriate evidence to the NDIA and/or Quality and Safe Guards Commission if and as requested</p></td>
    </tr>
    <tr>
        <td style="width: 100%; border: 1px solid black; width:10%;background-color: lightgrey;"><p style="margin-top:10px; margin-bottom:10px;">Field data</p></td>
        <td style="width: 100%; border: 1px solid black; width:90%;"><p style="margin-top:10px; margin-bottom:10px;">I understand and acknowledge that the NDIA and participant will rely on my professional advice to select</p></td>
    </tr>
    <tr>
        <td style="width: 100%; border: 1px solid black; width:10%;background-color: lightgrey;"><p style="margin-top:10px; margin-bottom:10px;">Field data</p></td>
        <td style="width: 100%; border: 1px solid black; width:90%;"><p style="margin-top:10px; margin-bottom:10px;">I have informed the participant of any arrangements with suppliers of hearing technology.</p></td>
    </tr>
    <tr>
        <td style="width: 100%; border: 1px solid black; width:10%;background-color: lightgrey;"><p style="margin-top:10px; margin-bottom:10px;">Field data</p></td>
        <td style="width: 100%; border: 1px solid black; width:90%;"><p style="margin-top:10px; margin-bottom:10px;">For HSP eligible participants, I have informed them of services available through Specialist Hearing</p></td>
    </tr> 
    </table>
    <p style="font-weight:bold; font-size:13pt;margin-top:20px; margin-bottom:20px;">Assessor’s Details</p>
    <p style="margin-top:12pt;"></p>
    <table>
    <tr>
        <td style="width: 100%; border: 1px solid black; width:50%;background-color: lightgrey;"><p style="margin-top:10px; margin-bottom:10px;">Name</p></td>
        <td style="width: 100%; border: 1px solid black; width:50%;"><p style="margin-top:10px; margin-bottom:10px;"></p></td>
    </tr>
    
    <tr>
        <td style="width: 100%; border: 1px solid black; width:50%;background-color: lightgrey;"><p style="margin-top:10px; margin-bottom:10px;">Qualification</p></td>
        <td style="width: 100%; border: 1px solid black; width:50%;"><p style="margin-top:10px; margin-bottom:10px;">Audiologist / Audiometrist Please list qualifications:</p></td>
    </tr>
    <tr>
        <td style="width: 100%; border: 1px solid black; width:50%;background-color: lightgrey;"><p style="margin-top:10px; margin-bottom:10px;">Qualification</p></td>
        <td style="width: 100%; border: 1px solid black; width:50%;"><p style="margin-top:10px; margin-bottom:10px;">Audiologist / Audiometrist Please list qualifications:</p></td>
    </tr>
    <tr>
        <td style="width: 100%; border: 1px solid black; width:50%;background-color: lightgrey;"><p style="margin-top:10px; margin-bottom:10px;">Membership of Professional Association</p></td>
        <td style="width: 100%; border: 1px solid black; width:50%;"><p style="margin-top:10px; margin-bottom:10px;"></p></td>
    </tr>
    <tr>
        <td style="width: 100%; border: 1px solid black; width:50%;background-color: lightgrey;"><p style="margin-top:10px; margin-bottom:10px;">Current arrangements with preferred suppliers. Include details of supplier(s) and types of devices</p></td>
        <td style="width: 100%; border: 1px solid black; width:50%;"><p style="margin-top:10px; margin-bottom:10px;"></p></td>
    </tr>
    <tr>
        <td style="width: 100%; border: 1px solid black; width:50%;background-color: lightgrey;"><p style="margin-top:10px; margin-bottom:10px;">NDIS Provider Registration number (where applicable)</p></td>
        <td style="width: 100%; border: 1px solid black; width:50%;"><p style="margin-top:10px; margin-bottom:10px;"></p></td>
    </tr>
    <tr>
        <td style="width: 100%; border: 1px solid black; width:50%;background-color: lightgrey;"><p style="margin-top:10px; margin-bottom:10px;">Phone</p></td>
        <td style="width: 100%; border: 1px solid black; width:50%;"><p style="margin-top:10px; margin-bottom:10px;"></p></td>
    </tr>
    
    <tr>
        <td style="width: 100%; border: 1px solid black; width:50%;background-color: lightgrey;"><p style="margin-top:10px; margin-bottom:10px;">Emial</p></td>
        <td style="width: 100%; border: 1px solid black; width:50%;"><p style="margin-top:10px; margin-bottom:10px;"></p></td>
    </tr>
    <tr>
        <td style="width: 100%; border: 1px solid black; width:50%;background-color: lightgrey;"><p style="margin-top:10px; margin-bottom:10px;">Signature</p></td>
        <td style="width: 100%; border: 1px solid black; width:50%;"><p style="margin-top:10px; margin-bottom:10px;"></p></td>
    </tr>
    <tr>
        <td style="width: 100%; border: 1px solid black; width:50%;background-color: lightgrey;"><p style="margin-top:10px; margin-bottom:10px;">Date of Assessment(s)</p></td>
        <td style="width: 100%; border: 1px solid black; width:50%;"><p style="margin-top:10px; margin-bottom:10px;"></p></td>
    </tr>
    <tr>
        <td style="width: 100%; border: 1px solid black; width:50%;background-color: lightgrey;"><p style="margin-top:10px; margin-bottom:10px;">Name</p></td>
        <td style="width: 100%; border: 1px solid black; width:50%;"><p style="margin-top:10px; margin-bottom:10px;"></p></td>
    </tr>
    <tr>
        <td style="width: 100%; border: 1px solid black; width:50%;background-color: lightgrey;"><p style="margin-top:10px; margin-bottom:10px;">Date of Report</p></td>
        <td style="width: 100%; border: 1px solid black; width:50%;"><p style="margin-top:10px; margin-bottom:10px;"></p></td>
    </tr>
    </table>
    
    <p style="margin-top:12pt:"></p>';

    $section8='<table style="background-color:#7209B7; border:none; width:100%;">
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
    <td style=" border: 1px solid black;"><p style="margin-top:10px; margin-bottom:10px;"></p></td>
</tr>
<tr>
    <td style=" border: 1px solid black; width:20%;background-color: lightgrey;"><p style="margin-top:10px; margin-bottom:10px;">No</p></td>
    <td style=" border: 1px solid black;"><p style="margin-top:10px; margin-bottom:10px;"></p></td>
</tr>
</table>
<p style="font-size:13pt;margin-top:20px; margin-bottom:20px;">Do you understand that your Audiologist/Audiometrist may only work with a small number of hearing aid brands, and that other providers may recommend different hearing aids?</p>
<table style="width:100%;">
<tr>
    <td style=" border: 1px solid black; width:20%;background-color: lightgrey;"><p style="margin-top:10px; margin-bottom:10px;">Yes</p></td>
    <td style=" border: 1px solid black;"><p style="margin-top:10px; margin-bottom:10px;"></p></td>
</tr>
<tr>
    <td style=" border: 1px solid black; width:20%;background-color: lightgrey;"><p style="margin-top:10px; margin-bottom:10px;">No</p></td>
    <td style=" border: 1px solid black;"><p style="margin-top:10px; margin-bottom:10px;"></p></td>
</tr>
</table>
<p style="font-size:13pt;margin-top:20px; margin-bottom:20px;">Do you understand that the National Disability Insurance Agency (NDIA) will generally fund the standard level of technology you require to achieve functional hearing and that not all requested technology may be funded?</p>
<table style="width:100%;">
<tr>
    <td style=" border: 1px solid black; width:20%;background-color: lightgrey;"><p style="margin-top:10px; margin-bottom:10px;">Yes</p></td>
    <td style=" border: 1px solid black;"><p style="margin-top:10px; margin-bottom:10px;"></p></td>
</tr>
<tr>
    <td style=" border: 1px solid black; width:20%;background-color: lightgrey;"><p style="margin-top:10px; margin-bottom:10px;">No</p></td>
    <td style=" border: 1px solid black;"><p style="margin-top:10px; margin-bottom:10px;"></p></td>
</tr>
</table>
<p style="font-size:13pt;margin-top:20px; margin-bottom:20px;">The NDIA may need to contact your Audiologist/Audiometrist to discuss information within your assessment and quotation(s). This will assist the NDIA to determine if your request can be funded under the NDIS. Do you consent to the NDIA collecting and disclosing your information including from these third parties mentioned above, in relation to your hearing technology assessment and quotation?</p>
<table style="width:100%;">
<tr>
    <td style=" border: 1px solid black; width:20%;background-color: lightgrey;"><p style="margin-top:10px; margin-bottom:10px;">I consent</p></td>
    <td style=" border: 1px solid black;"><p style="margin-top:10px; margin-bottom:10px;"></p></td>
</tr>
<tr>
    <td style=" border: 1px solid black; width:20%;background-color: lightgrey;"><p style="margin-top:10px; margin-bottom:10px;">No, I do not consent</p></td>
    <td style=" border: 1px solid black;"><p style="margin-top:10px; margin-bottom:10px;"></p></td>
</tr>
</table>


<table style="width:100%; border: 1px solid black;">
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
  <p style="margin-top:12pt:"></p>';

  $section9='  <table style="background-color:#7209B7; border:none; width:100%;">
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

$section10='<table style="width:100%; border: 1px solid black;">
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

$section11='<table style="background-color:#7209B7; border:none; width:100%;">
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
<td style="width:20%; background-color: lightgrey; font-size: 17px; font-weight:bold;">Current preferred aided condition (if relevant</td>
<td style="width:20%; background-color: lightgrey; font-size: 17px; font-weight:bold;">Option 1 Device Details</td>
<td style="width:20%; background-color: lightgrey; font-size: 17px; font-weight:bold;">Option 2 Device Details</td>
<td style="width:20%; background-color: lightgrey; font-size: 17px; font-weight:bold;">Option 3 Device Details</td>

</tr>

<tr>
<td style="width:20%;font-size: 17px; border: 1px solid black;"></td>
<td style="width:20%;font-size: 17px; border: 1px solid black;"></td>
<td style="width:20%;font-size: 17px; border: 1px solid black;"></td>
<td style="width:20%;font-size: 17px; border: 1px solid black;"></td>
<td style="width:20%;font-size: 17px; border: 1px solid black;"></td>
</tr>
</table> 
<p style="margin-top:12px;"></p>
<table style=" width:100%; border: 1px solid black; border-collapse: collapse;
margin: auto;">
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
<td style="width:10%;font-size: 17px; border: 1px solid black;">Sentence</td>
<td style="width:10%;font-size: 17px; border: 1px solid black;">Hearing aid /Sound</td>
<td style="width:10%;font-size: 17px; border: 1px solid black;">%</td>
<td style="width:20%;font-size: 17px; border: 1px solid black;">%</td>
<td style="width:20%;font-size: 17px; border: 1px solid black;">%</td>
<td style="width:15%;font-size: 17px; border: 1px solid black;">%</td>
<td style="width:15%;font-size: 17px; border: 1px solid black;">%</td>
</tr>
<tr>
<td style="width:10%;font-size: 17px; border: 1px solid black;"></td>
<td style="width:10%;font-size: 17px; border: 1px solid black;">Recorded voice at</td>
<td style="width:10%;font-size: 17px; border: 1px solid black;">%</td>
<td style="width:20%;font-size: 17px; border: 1px solid black;">%</td>
<td style="width:20%;font-size: 17px; border: 1px solid black;">%</td>
<td style="width:15%;font-size: 17px; border: 1px solid black;">%</td>
<td style="width:15%;font-size: 17px; border: 1px solid black;">%</td>
</tr>
</table>
<strong style="font-weight:bold; font-size:13pt;">Other relevant Functional Assessments: </strong> <p style="font-size:13pt;margin-top:20px; margin-bottom:20px;">Please describe or attach.</p>
<table style="width:100%; border: 1px solid black;">
<tr>
<td style="width: 100%; border: 1px solid black; width:20%;background-color: lightgrey;"><p style="margin-top:10px; margin-bottom:10px;"> Comment</p></td>
<td style="width: 100%; border: 1px solid black; width:80%;"><p style="margin-top:10px; margin-bottom:10px;"> </p></td>

</tr>
</table>
<p style="font-weight:bold; font-size:12pt;">option 2:</p>
<p style="font-size:12pt;margin-top:20px; margin-bottom:20px;">This table is to be used as a guide for functional evidence required to make a reasonable and necessary decision. Cross / complete as appropriate or attach relevant information from clinical documentation where convenient.</p>
<p style="font-size:12pt;margin-top:20px; margin-bottom:20px;">Please attach aided audiogram, or Real Ear Measurement</p>
<table style="width:100%; border: 1px solid black;">
<tr>
<td style="width: 100%; border: 1px solid black; width:20%;background-color: lightgrey;"><p style="margin-top:10px; margin-bottom:10px;"> Yes</p></td>
<td style="width: 100%; border: 1px solid black; width:80%;"><p style="margin-top:10px; margin-bottom:10px;"> field data</p></td>
</tr>
<tr>
<td style="width: 100%; border: 1px solid black; width:20%;background-color: lightgrey;"><p style="margin-top:10px; margin-bottom:10px;"> No</p></td>
<td style="width: 100%; border: 1px solid black; width:80%;"><p style="margin-top:10px; margin-bottom:10px;">field data</p></td>
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
<td style="width:10%;font-size: 17px; border: 1px solid black;">%</td>
<td style="width:10%;font-size: 17px; border: 1px solid black;">%</td>
<td style="width:20%;font-size: 17px; border: 1px solid black;"></td>
<td style="width:20%;font-size: 17px; border: 1px solid black;"></td>
<td style="width:15%;font-size: 17px; border: 1px solid black;">%</td>
<td style="width:15%;font-size: 17px; border: 1px solid black;">%</td>
</tr>
<tr>
<td style="width:10%;font-size: 17px; border: 1px solid black;">Right</td>
<td style="width:10%;font-size: 17px; border: 1px solid black;">%</td>
<td style="width:10%;font-size: 17px; border: 1px solid black;"></td>
<td style="width:20%;font-size: 17px; border: 1px solid black;"></td>
<td style="width:20%;font-size: 17px; border: 1px solid black;">%</td>
<td style="width:15%;font-size: 17px; border: 1px solid black;">%</td>
<td style="width:15%;font-size: 17px; border: 1px solid black;">%</td>
</tr>
<tr>
<td style="width:10%;font-size: 17px; border: 1px solid black;">Both</td>
<td style="width:10%;font-size: 17px; border: 1px solid black;">%</td>
<td style="width:10%;font-size: 17px; border: 1px solid black;"></td>
<td style="width:20%;font-size: 17px; border: 1px solid black;"></td>
<td style="width:20%;font-size: 17px; border: 1px solid black;">%</td>
<td style="width:15%;font-size: 17px; border: 1px solid black;">%</td>
<td style="width:15%;font-size: 17px; border: 1px solid black;">%</td>
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
<td style="width:10%;font-size: 17px; border: 1px solid black;">%</td>
<td style="width:10%;font-size: 17px; border: 1px solid black;">%</td>
<td style="width:20%;font-size: 17px; border: 1px solid black;"></td>
<td style="width:20%;font-size: 17px; border: 1px solid black;"></td>
<td style="width:15%;font-size: 17px; border: 1px solid black;">%</td>
<td style="width:15%;font-size: 17px; border: 1px solid black;">%</td>
</tr>
<tr>
<td style="width:10%;font-size: 17px; border: 1px solid black;">Right</td>
<td style="width:10%;font-size: 17px; border: 1px solid black;">%</td>
<td style="width:10%;font-size: 17px; border: 1px solid black;"></td>
<td style="width:20%;font-size: 17px; border: 1px solid black;"></td>
<td style="width:20%;font-size: 17px; border: 1px solid black;">%</td>
<td style="width:15%;font-size: 17px; border: 1px solid black;">%</td>
<td style="width:15%;font-size: 17px; border: 1px solid black;">%</td>
</tr>
<tr>
<td style="width:10%;font-size: 17px; border: 1px solid black;">Both</td>
<td style="width:10%;font-size: 17px; border: 1px solid black;">%</td>
<td style="width:10%;font-size: 17px; border: 1px solid black;"></td>
<td style="width:20%;font-size: 17px; border: 1px solid black;"></td>
<td style="width:20%;font-size: 17px; border: 1px solid black;">%</td>
<td style="width:15%;font-size: 17px; border: 1px solid black;">%</td>
<td style="width:15%;font-size: 17px; border: 1px solid black;">%</td>
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
<td style="width: 100%; border: 1px solid black; width:35%;"><p style="margin-top:10px; margin-bottom:10px;"> Yes</p></td>
<td style="width: 100%; border: 1px solid black; width:35%;"><p style="margin-top:10px; margin-bottom:10px;"> No</p></td>
</tr>
<tr>
<td style="width: 100%; border: 1px solid black; width:30%;background-color: lightgrey;"><p style="margin-top:10px; margin-bottom:10px;">SPIN</p></td>
<td style="width: 100%; border: 1px solid black; width:35%;"><p style="margin-top:10px; margin-bottom:10px;"> Yes</p></td>
<td style="width: 100%; border: 1px solid black; width:35%;"><p style="margin-top:10px; margin-bottom:10px;"> No</p></td>
</tr>
<tr>
<td style="width: 100%; border: 1px solid black; width:30%;background-color: lightgrey;"><p style="margin-top:10px; margin-bottom:10px;">SPIN Loss</p></td>
<td style="width: 100%; border: 1px solid black; width:35%;"><p style="margin-top:10px; margin-bottom:10px;"> Yes</p></td>
<td style="width: 100%; border: 1px solid black; width:35%;"><p style="margin-top:10px; margin-bottom:10px;"> No</p></td>
</tr>
<tr>
<td style="width: 100%; border: 1px solid black; width:20%;background-color: lightgrey;"><p style="margin-top:10px; margin-bottom:10px;">Similar Test</p></td>
<td style="width: 100%; border: 1px solid black; width:35%;"><p style="margin-top:10px; margin-bottom:10px;"> Describe</p></td>
<td style="width: 100%; border: 1px solid black; width:35%;"><p style="margin-top:10px; margin-bottom:10px;"> </p></td>
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
<td style="width:25%;font-size: 17px; border: 1px solid black;">%</td>
<td style="width:25%;font-size: 17px; border: 1px solid black;"></td>
<td style="width:25%;font-size: 17px; border: 1px solid black;"></td>
</tr>

<tr>
<td style="width:25%;font-size: 17px; border: 1px solid black;">Right</td>
<td style="width:25%;font-size: 17px; border: 1px solid black;">%</td>
<td style="width:25%;font-size: 17px; border: 1px solid black;"></td>
<td style="width:25%;font-size: 17px; border: 1px solid black;"></td>
</tr>

<tr>
<td style="width:25%;font-size: 17px; border: 1px solid black;">Both</td>
<td style="width:25%;font-size: 17px; border: 1px solid black;">%</td>
<td style="width:25%;font-size: 17px; border: 1px solid black;"></td>
<td style="width:25%;font-size: 17px; border: 1px solid black;"></td>
</tr>

</table>
<p style="margin-to:10pt"></p>
<table style="width:100%; border: 1px solid black;">
<tr>
<td style="width: 100%; border: 1px solid black; width:20%;background-color: lightgrey;"><p style="margin-top:10px; margin-bottom:10px;"> Other Functional Assessments?</p></td>
<td style="width: 100%; border: 1px solid black; width:80%;"><p style="margin-top:10px; margin-bottom:10px;"> Field data</p></td>

</tr>
</table>
<p style="margin-top:3pt;"></p>
<p style="font-weight:bold;">Key</p>
<p style="font-size:12pt; margin-top:10pt;">1 Attach relevant audiograms (Indicate assessments completed within table).</p>
<p style="font-size:12pt; margin-top:10pt;">2 Aided preference describes participant’s preferred daily wearing option on each ear.</p>
';

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
            'name' => 'Continence Related Assistive Technology Assessment Template'
        ]);

        $heading1 = FormHeading::insertGetId([
            'form_heading' => 'Participant and Plan Management Details',
            'form_id' => $form,
            'section_html' => $section1
        ]);

        $heading2 = FormHeading::insertGetId([
            'form_heading' => 'Assessment',
            'form_id' => $form,
            'section_html' => $section2
        ]);

        $heading3 = FormHeading::insertGetId([
            'form_heading' => 'Exploration of Continence Interventions and Options',
            'form_id' => $form,
            'section_html' => $section3
        ]);

        $heading4 = FormHeading::insertGetId([
            'form_heading' => 'Continence Recommendations',
            'form_id' => $form,
            'section_html' => $section4
        ]);

        $heading5 = FormHeading::insertGetId([
            'form_heading' => 'Details of Assistive Technology Assessor',
            'form_id' => $form,
            'section_html' => $section5
        ]);

        $heading6 = FormHeading::insertGetId([
            'form_heading' => 'Details of Assistive Technology Assessor',
            'form_id' => $form,
            'section_html' => $section6
        ]);

        $heading7 = FormHeading::insertGetId([
            'form_heading' => 'Details of Assistive Technology Assessor',
            'form_id' => $form,
            'section_html' => $section7
        ]);

        $heading8 = FormHeading::insertGetId([
            'form_heading' => 'Details of Assistive Technology Assessor',
            'form_id' => $form,
            'section_html' => $section8
        ]);
        $heading9 = FormHeading::insertGetId([
            'form_heading' => 'Details of Assistive Technology Assessor',
            'form_id' => $form,
            'section_html' => $section9
        ]);
        $heading10 = FormHeading::insertGetId([
            'form_heading' => 'Details of Assistive Technology Assessor',
            'form_id' => $form,
            'section_html' => $section10
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
                'form_field' => $form_fields6
            ]);
            FormField::create([
                'form_heading_id' => $heading8,
                'form_field' => $form_fields6
            ]);
            FormField::create([
                'form_heading_id' => $heading8,
                'form_field' => $form_fields6
            ]);
            FormField::create([
                'form_heading_id' => $heading9,
                'form_field' => $form_fields6
            ]);
            FormField::create([
                'form_heading_id' => $heading10,
                'form_field' => $form_fields6
            ]);
    
        
    }
}
