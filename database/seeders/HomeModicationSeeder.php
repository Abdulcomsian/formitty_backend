<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\{Form , FormField , FormHeading};

class HomeModicationSeeder extends Seeder
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
                '>
          <tbody>
            <tr>
              <td style='border: 1px solid lightslategray; padding: 10px; width: 40%; background-color: lightgrey; font-size: 15px'><p style='margin-top:8px; margin-bottom:8px; margin-left:8px'>   Name</p></td>
              <td style='border: 1px solid lightslategray; padding: 10px'>
                <p style='margin-top:8px; margin-bottom:8px; margin-left:8px'>   Field Data</p>
              </td>
            </tr>
            <tr>
              <td style='border: 1px solid lightslategray; padding: 10px; width: 40%;background-color: lightgrey; font-size: 15px'><p style='margin-top:8px; margin-bottom:8px; margin-left:8px'>   Date of Birth</p></td>
              <td style='border: 1px solid lightslategray; padding: 10px'>
                <p style='margin-top:8px; margin-bottom:8px; margin-left:8px'>   Field Data</p>
              </td>
            </tr>
            <tr>
              <td style='border: 1px solid lightslategray; padding: 10px; width: 40%; background-color: lightgrey; font-size: 15px'><p style='margin-top:8px; margin-bottom:8px; margin-left:8px'>   Age</p></td>
              <td style='border: 1px solid lightslategray; padding: 10px'>
                <p style='margin-top:8px; margin-bottom:8px; margin-left:8px'>   Field Data</p>
              </td>
            </tr>
            <tr>
              <td style='border: 1px solid lightslategray; padding: 10px; width: 40%;background-color: lightgrey; font-size: 15px'><p style='margin-top:8px; margin-bottom:8px; margin-left:8px'>   NDIS Number</p></td>
              <td style='border: 1px solid lightslategray; padding: 10px'>
                <p style='margin-top:8px; margin-bottom:8px; margin-left:8px'>   Field Data</p>
              </td>
            </tr>
            <tr>
              <td style='border: 1px solid lightslategray; padding: 10px; width: 40%;background-color: lightgrey; font-size: 15px'><p style='margin-top:8px; margin-bottom:8px; margin-left:8px'>   Contact Telephone Number</p></td>
              <td style='border: 1px solid lightslategray; padding: 10px'>
                <p style='margin-top:8px; margin-bottom:8px; margin-left:8px'>   Field Data</p>
              </td>
            </tr>
            <tr>
              <td style='border: 1px solid lightslategray; padding: 10px; width: 40%;background-color: lightgrey; font-size: 15px'><p style='margin-top:8px; margin-bottom:8px; margin-left:8px'>   Address</p></td>
              <td style='border: 1px solid lightslategray; padding: 10px'>
                <p style='margin-top:8px; margin-bottom:8px; margin-left:8px'>   Field Data</p>
              </td>
            </tr>
            <tr>
              <td style='border: 1px solid lightslategray; padding: 10px; width: 40%;background-color: lightgrey; font-size: 15px'><p style='margin-top:8px; margin-bottom:8px; margin-left:8px'>   Email</p></td>
              <td style='border: 1px solid lightslategray; padding: 10px'>
                <p style='margin-top:8px; margin-bottom:8px; margin-left:8px'>   Field Data</p>
              </td>
            </tr>
            <tr>
              <td style='border: 1px solid lightslategray; padding: 10px; width: 40%;background-color: lightgrey; font-size: 15px'><p style='margin-top:8px; margin-bottom:8px; margin-left:8px'>   Preferred Contact Method</p> </td>
              <td style='border: 1px solid lightslategray; padding: 10px'>
                <p style='margin-top:8px; margin-bottom:8px; margin-left:8px'>   Field Data</p>
              </td>
            </tr>
            <tr>
              <td style='border: 1px solid lightslategray; padding: 10px; width: 40%;background-color: lightgrey; font-size: 15px'><p style='margin-top:8px; margin-bottom:8px; margin-left:8px'>   Nominee or Guardian Name</p></td>
              <td style='border: 1px solid lightslategray; padding: 10px'>
                <p style='margin-top:8px; margin-bottom:8px; margin-left:8px'>   Field Data</p>
              </td>
            </tr>
            <tr>
              <td style='border: 1px solid lightslategray; padding: 10px; width: 40%;background-color: lightgrey; font-size: 15px'><p style='margin-top:8px; margin-bottom:8px; margin-left:8px'>   Nominee or Guardian Phone</p></td>
              <td style='border: 1px solid lightslategray; padding: 10px'>
                <p style='margin-top:8px; margin-bottom:8px; margin-left:8px'>   Field Data</p>
              </td>
            </tr>
            <tr>
              <td style='border: 1px solid lightslategray; padding: 10px; width: 40%;background-color: lightgrey; font-size: 15px'><p style='margin-top:8px; margin-bottom:8px; margin-left:8px'>   NDIS Support Coordinator</p></td>
              <td style='border: 1px solid lightslategray; padding: 10px'>
                <p style='margin-top:8px; margin-bottom:8px; margin-left:8px'>   Field Data</p>
              </td>
            </tr>
            <tr>
              <td style='border: 1px solid lightslategray; padding: 10px; width: 40%;background-color: lightgrey; font-size: 15px'><p style='margin-top:8px; margin-bottom:8px; margin-left:8px'>   Contact Details</p></td>
              <td style='border: 1px solid lightslategray; padding: 10px'>
                <p style='margin-top:8px; margin-bottom:8px; margin-left:10px'>   Field Data</p>
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
                <p style='margin-top:8px; margin-bottom:8px; margin-left:8px'>   Field Data</p>
              </td>
            </tr>
            <tr>
              <td style='border: 1px solid lightslategray; padding: 10px; width: 40%; background-color: lightgrey; font-size: 15px'><p style='margin-top:8px; margin-bottom:8px; margin-left:8px'>  Self-Managed</p></td>
              <td style='border: 1px solid lightslategray; padding: 10px'>
                <p style='margin-top:8px; margin-bottom:8px; margin-left:8px'>   Field Data</p>
              </td>
            </tr>
            <tr>
              <td style='border: 1px solid lightslategray; padding: 10px; width: 40%; background-color: lightgrey; font-size: 15px'><p style='margin-top:8px; margin-bottom:8px; margin-left:8px'>  Registered Plan Management Provider</p></td>
              <td style='border: 1px solid lightslategray; padding: 10px'>
                <p style='margin-top:8px; margin-bottom:8px; margin-left:8px'>   Field Data</p>
              </td>
            </tr>
            <tr>
              <td style='border: 1px solid lightslategray; padding: 10px; width: 40%; background-color: lightgrey; font-size: 15px'><p style='margin-top:8px; margin-bottom:8px; margin-left:8px'>  Contact Details</p> </td>
              <td style='border: 1px solid lightslategray; padding: 10px'>
                <p style='margin-top:8px; margin-bottom:8px; margin-left:8px'>   Field Data</p>
              </td>
            </tr>
          </tbody>
    </table>"
    ;

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
      <tr>
        <td style='background-color: #efefef; width: 100%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>  FieldData</p></td>
      </tr>
    </table>
    <p style='font-weight:bold; font-size:13pt;margin-top:10px; margin-bottom:10px;'>2.2	Participant Goals </p>
    <p style='font-size:11pt; margin-bottom:10px'>If the participant’s NDIS plan has been made available, you can refer to the statement of participant’s goals and outline those relevant to the AT solution.</p>
    <table style='width:100%; border: 1px solid black'>
    <tr>
    <td style='background-color: #efefef; width: 100%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>  FieldData</p></td>
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
            <td style='background-color: #efefef; width: 50%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px; font-weight: bold; text-align: center'>  Right</p></td>
      </tr>
      <tr>
            <td style='width: 50%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px; text-align: center'>  Several times weekly  </p></td>
            <td style='width: 50%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px; text-align: center'>  FieldData</p></td>
      </tr>
      <tr>
            <td style='width: 50%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px; text-align: center'>  Other, provide details: </p></td>
            <td style='width: 50%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px; text-align: center'>  FieldData</p></td>
      </tr>
    </table>
    <p style='font-size:11pt; margin-top:10px; margin-bottom:10px'><strong>2.3.2</strong>	Is the Participant / Nominee in agreement with this AT request? Please describe.</p>
    <table style='width:100%; border: 1px solid black'>
    <tr>
    <td style='background-color: #efefef; width: 30%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px; font-weight: bold; '>  Yes</p></td>
    <td style='border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px; '>  Field Data</p></td>
    </tr>
    <tr>
    <td style='background-color: #efefef; width: 30%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>  No</p></td>
    <td style=' border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>  FieldData</p></td>
    </tr>
    <tr>
    <td style=' background-color: #efefef;width: 30%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>  Comment </p></td>
    <td style=' border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>  FieldData</p></td>
    </tr>
    </table>
    <p style='font-size:11pt; margin-top:10px; margin-bottom:10px'><strong>2.3.3</strong>	Findings from functional assessment</p>
    <table style='width:100%; border: 1px solid black'>
    <tr>
    <td style='background-color: #efefef; width: 33%; font-weight: bold; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>  Assessment Area</p></td>
    <td style='background-color: #efefef; width: 33%; font-weight: bold; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>  Current Status</p></td>
    <td style='background-color: #efefef; width: 33%; font-weight: bold; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>  Expected future level of independence</p></td>
    </tr>
    <tr>
    <td style='width: 33%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>  Mobility (Including the ability to use stairs and ramps)</p></td>
    <td style='width: 33%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'> </p></td>
    <td style='width: 33%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'> </p></td>
    </tr>
    <tr>
    <td style='width: 33%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>  Transfers, consider bed, chair, toilet and car.  </p></td>
    <td style='width: 33%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'> </p></td>
    <td style='width: 33%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'> </p></td>
    </tr>
    <tr>
    <td style='width: 33%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>  Mobility aids, consider typical footprint and circulation space required for wheelchairs</p></td>
    <td style='width: 33%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'> </p></td>
    <td style='width: 33%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'> </p></td>
    </tr>
    <tr>
    <td style='width: 33%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>  Upper limb / Hand function and reach</p></td>
    <td style='width: 33%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'> </p></td>
    <td style='width: 33%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'> </p></td>
    </tr>
    <tr>
    <td style='width: 33%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>  Lifting and carrying capacity</p></td>
    <td style='width: 33%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'> </p></td>
    <td style='width: 33%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'> </p></td>
    </tr>
    <tr>
    <td style='width: 33%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>  Functional cognitive status</p></td>
    <td style='width: 33%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'> </p></td>
    <td style='width: 33%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'> </p></td>
    </tr>
    <tr>
    <td style='width: 33%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>  Other general safety Issues</p></td>
    <td style='width: 33%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'> </p></td>
    <td style='width: 33%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'> </p></td>
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
    <td style='width: 33%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'> </p></td>
    <td style='width: 33%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'> </p></td>
    </tr>
    <tr>
    <td style='width: 33%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>  Dressing</p></td>
    <td style='width: 33%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'> </p></td>
    <td style='width: 33%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'> </p></td>
    </tr>
    <tr>
    <td style='width: 33%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>  Showering/bathing </p></td>
    <td style='width: 33%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'> </p></td>
    <td style='width: 33%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'> </p></td>
    </tr>
    <tr>
    <td style='width: 33%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>  Other</p></td>
    <td style='width: 33%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'> </p></td>
    <td style='width: 33%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'> </p></td>
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
    <td style='width: 33%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'> </p></td>
    <td style='width: 33%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'> </p></td>
    </tr>
    <tr>
    <td style='width: 33%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>  Cleaning </p></td>
    <td style='width: 33%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'> </p></td>
    <td style='width: 33%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'> </p></td>
    </tr>
    <tr>
    <td style='width: 33%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>  Laundry </p></td>
    <td style='width: 33%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'> </p></td>
    <td style='width: 33%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'> </p></td>
    </tr>
    <tr>
    <td style='width: 33%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>  Other</p></td>
    <td style='width: 33%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'> </p></td>
    <td style='width: 33%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'> </p></td>
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
    <td style='width: 33%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'> </p></td>
    <td style='width: 33%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'> </p></td>
    </tr>
    <tr>
    <td style='width: 33%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>  Driving and/or transportation in vehicle/cars </p></td>
    <td style='width: 33%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'> </p></td>
    <td style='width: 33%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'> </p></td>
    </tr>
    <tr>
    <td style='width: 33%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>  Work and study issues </p></td>
    <td style='width: 33%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'> </p></td>
    <td style='width: 33%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'> </p></td>
    </tr>
    </table>";

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
        <td><p style='margin-top:10px; margin-bottom:10px;'>    Field-Data</p></td>
        </tr>
        <tr>
        <td style='background-color: #efefef; width: 30%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>  Co-owned</p></td>
        <td><p style='margin-top:10px; margin-bottom:10px;'>    Field-Data</p></td>
        </tr>
        <tr>
        <td style='background-color: #efefef; width: 30%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>  Private rental</p></td>
        <td><p style='margin-top:10px; margin-bottom:10px;'>    Field-Data</p></td>
        </tr>
        <tr>
        <td style='background-color: #efefef; width: 30%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>  Public rental / housing</p></td>
        <td><p style='margin-top:10px; margin-bottom:10px;'>    Field-Data</p></td>
        </tr>
        <tr>
        <td style='background-color: #efefef; width: 30%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>  Family owned</p></td>
        <td><p style='margin-top:10px; margin-bottom:10px;'>    Field-Data</p></td>
        </tr>
        </table>
        <p style='font-size:12pt; margin-top:10px; margin-bottom:10px;'><strong>3.1.2</strong>	Has the property had previous modifications funded by the NDIA? If ‘yes’, please outline previous modifications completed</p>
        <table style='width:100%; margin-top: 10px; border: 1px solid black'>
          <tr>
            <td style='background-color: #efefef; width: 30%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>  Yes</p></td>
            <td><p style='margin-top:10px; margin-bottom:10px;'>    Field-Data</p></td>
          </tr>
          <tr>
            <td style='background-color: #efefef; width: 30%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>  No</p></td>
            <td><p style='margin-top:10px; margin-bottom:10px;'>    Field-Data</p></td>
          </tr>
          <tr>
            <td style='background-color: #efefef; width: 30%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>  Detail of Previous Modification</p></td>
            <td><p style='margin-top:10px; margin-bottom:10px;'>    Field-Data</p></td>
          </tr>
        </table>
        <p style='font-size:12pt; margin-top:10px; margin-bottom:10px;'><strong>3.1.3</strong>	Is the owner of the property aware of and provided written authorisation for the potential modifications?</p>
        <table style='width:100%; margin-top: 10px; border: 1px solid black'>
          <tr>
            <td style='background-color: #efefef; width: 30%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>  Yes</p></td>
            <td><p style='margin-top:10px; margin-bottom:10px;'>    Field-Data</p></td>
          </tr>
          <tr>
            <td style='background-color: #efefef; width: 30%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>  No</p></td>
            <td><p style='margin-top:10px; margin-bottom:10px;'>    Field-Data</p></td>
          </tr>
        </table>
        <p style='font-size:12pt; margin-top:10px; margin-bottom:10px; font-weight: bold'>3.2	Structure of property</p>
        <p style='font-size:12pt; margin-top:10px; margin-bottom:10px; '>Please describe the construction type, e.g. brick or weatherboard, colour bond or tiled roof, approximate age or era, concrete slab or timber stumps</p>
        <table style='width:100%; margin-top: 10px; border: 1px solid black'>
          <tr>
            <td style='background-color: #efefef; width: 100%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>  Field Data</p></td>
          </tr>
        </table>
        <p style='font-size:12pt; margin-top:10px; margin-bottom:10px; font-weight: bold'>3.3	Description of property</p>
        <p style='font-size:12pt; margin-top:10px; margin-bottom:10px; '>Please describe the layout and size, e.g. 3 bedroom residence with central bathroom and two living areas, single garage, porch at front and back entrances, medium sized home = approx 20 square metres, block size approx 500 – 600 square metres, level block, etc.</p>
        <table style='width:100%; margin-top: 10px; border: 1px solid black'>
          <tr>
            <td style='background-color: #efefef; width: 100%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>  Field Data</p></td>
          </tr>
        </table>
        <p style='font-size:12pt; margin-top:10px; margin-bottom:10px; font-weight: bold'>3.4	Special Conditions</p>
        <p style='font-size:12pt; margin-top:10px; margin-bottom:10px; '>Please outline any special conditions or considerations, e.g. heritage listed</p>
        <table style='width:100%; margin-top: 10px; border: 1px solid black'>
        <tr>
        <td style='background-color: #efefef; width: 100%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>  Field Data</p></td>
        </tr>
        </table>
        
        <p style='font-size:12pt; margin-top:10px; margin-bottom:10px; '></p>";

        $section4 = "<table style='background-color:#6a2c75; border:none; width:100%; margin-top:20px'>
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
        <td style='background-color: #efefef; width: 100%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>  Field Data</p></td>
        </tr>
        </table>
        <p style='font-size:12pt; margin-top:10px; margin-bottom:10px; font-weight: bold'>4.2	Hospitalisation or Inpatient</p>
        <p style='font-size:12pt; margin-top:10px; margin-bottom:10px; '>If currently an inpatient, please outline which hospital, the current discharge plan and describe any interim arrangements while complex home modifications are completed such as short term accommodation. Describe other assistive technology as appropriate. </p>
        <table style='width:100%; margin-top: 10px; border: 1px solid black'>
        <tr>
        <td style='background-color: #efefef; width: 40%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>  N/A</p></td>
        <td><p style='margin-top:10px; margin-bottom:10px;'>    Field-Data</p></td>
        </tr>
        <tr>
        <td style='background-color: #efefef; width: 40%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>  Anticipated discharge date</p></td>
        <td><p style='margin-top:10px; margin-bottom:10px;'>    Field-Data</p></td>
        </tr>
        </table>
        <p style='font-size:12pt; margin-top:10px; margin-bottom:10px; '>Discharge plan details/Comments</p>
        <table style='width:100%; margin-top: 10px; border: 1px solid black'>
          <tr>
            <td style='background-color: #efefef; width: 100%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>  Field Data</p></td>
          </tr>
        </table>
        <p style='font-size:12pt; margin-top:10px; margin-bottom:10px; font-weight: bold'>4.3	Proposed living arrangements (including post-discharge, where appropriate)</p>
        <p style='font-size:12pt; margin-top:10px; margin-bottom:10px; '>Comments in this section will relate to decisions that have been made about where and who the participant will live with and how long it is expected they will reside in the house which is being considered for modification. Detail the participant’s expected long-term household/social situation and household supports as well as the participant’s current family support and any known future plans or changes to this.</p>
        <table style='width:100%; margin-top: 10px; border: 1px solid black'>
        <tr>
        <td style='background-color: #efefef; width: 100%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>  Field Data</p></td>
        </tr>
        </table>";
        
        $section5 = "<p style='font-size:12pt; margin-top:10px; margin-bottom:10px; font-weight: bold'></p>
        <table style='background-color:#6a2c75; border:none; width:100%; margin-top:20px'>
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
            <td><p style='margin-top:10px; margin-bottom:10px;'>    FieldData</p></td>
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
            <td><p style='margin-top:10px; margin-bottom:10px;'>    FieldData</p></td>
          </tr>
          <tr>
            <td style='background-color: #efefef; width: 40%; border-right: 1px solid black'><p style='margin-top:10px; font-style: italic; margin-bottom:10px;'>  Current Situation</p></td>
            <td><p style='margin-top:10px; margin-bottom:10px; font-size: italic;'> Field Data</p></td>
          </tr>
          <tr>
            <td style='background-color: #efefef; width: 40%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>  Recommendations</p></td>
            <td><p style='margin-top:10px; margin-bottom:10px; font-size: italic;'>    FieldData</p></td>
          </tr>
          <tr>
            <td style='background-color: #efefef; width: 40%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>  Priority</p></td>
            <td><p style='margin-top:10px; margin-bottom:10px; font-size: italic;'>    Field Data</p></td>
          </tr>
          <tr>
            <td style='background-color: #efefef; width: 40%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>  Clinical Evidence</p></td>
            <td><p style='margin-top:10px; margin-bottom:10px; font-size: italic;'>    Field Data</p></td>
          </tr>
        </table>
        <p style='font-size:12pt; margin-top:10px; margin-bottom:10px;'>5.2.2	Other Access </p>
        <table style='width:100%; margin-top: 10px; border: 1px solid black'>
          <tr>
            <td style='background-color: #efefef; width: 40%; border-right: 1px solid black'><p style='margin-top:10px; font-style: italic; margin-bottom:10px;'>  N/A</p></td>
            <td><p style='margin-top:10px; margin-bottom:10px;'>    FieldData</p></td>
          </tr>
          <tr>
            <td style='background-color: #efefef; width: 40%; border-right: 1px solid black'><p style='margin-top:10px; font-style: italic; margin-bottom:10px;'>  Current Situation</p></td>
            <td><p style='margin-top:10px; margin-bottom:10px; font-size: italic;'> Field Data</p></td>
          </tr>
          <tr>
            <td style='background-color: #efefef; width: 40%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>  Recommendations</p></td>
            <td><p style='margin-top:10px; margin-bottom:10px; font-size: italic;'>    FieldData</p></td>
          </tr>
          <tr>
            <td style='background-color: #efefef; width: 40%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>  Priority</p></td>
            <td><p style='margin-top:10px; margin-bottom:10px; font-size: italic;'>    Field Data</p></td>
          </tr>
          <tr>
            <td style='background-color: #efefef; width: 40%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>  Clinical Evidence</p></td>
            <td><p style='margin-top:10px; margin-bottom:10px; font-size: italic;'>    Field Data</p></td>
          </tr>
        </table>
        <p style='font-size:12pt; margin-top:10px; margin-bottom:10px;'>5.2.3	Car Parking </p>
        <table style='width:100%; margin-top: 10px; border: 1px solid black'>
        <tr>
        <td style='background-color: #efefef; width: 40%; border-right: 1px solid black'><p style='margin-top:10px; font-style: italic; margin-bottom:10px;'>  N/A</p></td>
        <td><p style='margin-top:10px; margin-bottom:10px;'>    FieldData</p></td>
        </tr>
        <tr>
        <td style='background-color: #efefef; width: 40%; border-right: 1px solid black'><p style='margin-top:10px; font-style: italic; margin-bottom:10px;'>  Current Situation</p></td>
        <td><p style='margin-top:10px; margin-bottom:10px; font-size: italic;'> Field Data</p></td>
        </tr>
        <tr>
        <td style='background-color: #efefef; width: 40%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>  Recommendations</p></td>
        <td><p style='margin-top:10px; margin-bottom:10px; font-size: italic;'>    FieldData</p></td>
        </tr>
        <tr>
        <td style='background-color: #efefef; width: 40%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>  Priority</p></td>
        <td><p style='margin-top:10px; margin-bottom:10px; font-size: italic;'>    Field Data</p></td>
        </tr>
        <tr>
        <td style='background-color: #efefef; width: 40%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>  Clinical Evidence</p></td>
        <td><p style='margin-top:10px; margin-bottom:10px; font-size: italic;'>    Field Data</p></td>
        </tr>
        </table>
        <p style='font-size:12pt; margin-top:10px; margin-bottom:10px; font-weight: bold'>5.3	Internals </p>
        <p style='font-size:12pt; margin-top:10px; margin-bottom:10px; '>5.3.1	Bedroom.  </p>
        <p style='font-size:12pt; margin-top:10px; margin-bottom:10px; '>Suitable for participant to use (preferably located on ground floor). Please include doorways, flooring, lights, fixtures/fittings, door handles and light switches where applicable </p>
        <table style='width:100%; margin-top: 10px; border: 1px solid black'>
          <tr>
            <td style='background-color: #efefef; width: 40%; border-right: 1px solid black'><p style='margin-top:10px; font-style: italic; margin-bottom:10px;'>  N/A</p></td>
            <td><p style='margin-top:10px; margin-bottom:10px;'>    FieldData</p></td>
          </tr>
          <tr>
            <td style='background-color: #efefef; width: 40%; border-right: 1px solid black'><p style='margin-top:10px; font-style: italic; margin-bottom:10px;'>  Current Situation</p></td>
            <td><p style='margin-top:10px; margin-bottom:10px; font-size: italic;'> Field Data</p></td>
          </tr>
          <tr>
            <td style='background-color: #efefef; width: 40%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>  Recommendations</p></td>
            <td><p style='margin-top:10px; margin-bottom:10px; font-size: italic;'>    FieldData</p></td>
          </tr>
          <tr>
            <td style='background-color: #efefef; width: 40%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>  Priority</p></td>
            <td><p style='margin-top:10px; margin-bottom:10px; font-size: italic;'>    Field Data</p></td>
          </tr>
          <tr>
            <td style='background-color: #efefef; width: 40%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>  Clinical Evidence</p></td>
            <td><p style='margin-top:10px; margin-bottom:10px; font-size: italic;'>    Field Data</p></td>
          </tr>
        </table>
        <p style='font-size:12pt; margin-top:10px; margin-bottom:10px; '>5.3.2	Living Area  </p>
        <p style='font-size:12pt; margin-top:10px; margin-bottom:10px; '>Please include doorways, flooring, lights, fixtures/fittings, door handles and light switches, circulation space where applicable</p>
        <table style='width:100%; margin-top: 10px; border: 1px solid black'>
          <tr>
            <td style='background-color: #efefef; width: 40%; border-right: 1px solid black'><p style='margin-top:10px; font-style: italic; margin-bottom:10px;'>  N/A</p></td>
            <td><p style='margin-top:10px; margin-bottom:10px;'>    FieldData</p></td>
          </tr>
          <tr>
            <td style='background-color: #efefef; width: 40%; border-right: 1px solid black'><p style='margin-top:10px; font-style: italic; margin-bottom:10px;'>  Current Situation</p></td>
            <td><p style='margin-top:10px; margin-bottom:10px; font-size: italic;'> Field Data</p></td>
          </tr>
          <tr>
            <td style='background-color: #efefef; width: 40%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>  Recommendations</p></td>
            <td><p style='margin-top:10px; margin-bottom:10px; font-size: italic;'>    FieldData</p></td>
          </tr>
          <tr>
            <td style='background-color: #efefef; width: 40%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>  Priority</p></td>
            <td><p style='margin-top:10px; margin-bottom:10px; font-size: italic;'>    Field Data</p></td>
          </tr>
          <tr>
            <td style='background-color: #efefef; width: 40%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>  Clinical Evidence</p></td>
            <td><p style='margin-top:10px; margin-bottom:10px; font-size: italic;'>    Field Data</p></td>
          </tr>
        </table>
        <p style='font-size:12pt; margin-top:10px; margin-bottom:10px; '>5.3.3	Hallway </p>
        <p style='font-size:12pt; margin-top:10px; margin-bottom:10px; '>Internal steps to enable access to a suitable bedroom and bathroom. Please include doorways, flooring, lights, fixtures/fittings, door handles, light switches and width of corridors where applicable</p>
        <table style='width:100%; margin-top: 10px; border: 1px solid black'>
          <tr>
            <td style='background-color: #efefef; width: 40%; border-right: 1px solid black'><p style='margin-top:10px; font-style: italic; margin-bottom:10px;'>  N/A</p></td>
            <td><p style='margin-top:10px; margin-bottom:10px;'>    FieldData</p></td>
          </tr>
          <tr>
            <td style='background-color: #efefef; width: 40%; border-right: 1px solid black'><p style='margin-top:10px; font-style: italic; margin-bottom:10px;'>  Current Situation</p></td>
            <td><p style='margin-top:10px; margin-bottom:10px; font-size: italic;'> Field Data</p></td>
          </tr>
          <tr>
            <td style='background-color: #efefef; width: 40%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>  Recommendations</p></td>
            <td><p style='margin-top:10px; margin-bottom:10px; font-size: italic;'>    FieldData</p></td>
          </tr>
          <tr>
            <td style='background-color: #efefef; width: 40%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>  Priority</p></td>
            <td><p style='margin-top:10px; margin-bottom:10px; font-size: italic;'>    Field Data</p></td>
          </tr>
          <tr>
            <td style='background-color: #efefef; width: 40%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>  Clinical Evidence</p></td>
            <td><p style='margin-top:10px; margin-bottom:10px; font-size: italic;'>    Field Data</p></td>
          </tr>
        </table>
        <p style='font-size:12pt; margin-top:10px; margin-bottom:10px; '>5.3.4	Bathroom/Toilet </p>
        <p style='font-size:12pt; margin-top:10px; margin-bottom:10px; '>Bathroom/toilet that would be suitable for participant to use (preferably located on ground floor). Please include doorways, flooring, lights, fixtures/fittings, door handles and light switches, hand rails, tap ware, shower hose, etc. where applicable. Describe if combined or separate.</p>
        <table style='width:100%; margin-top: 10px; border: 1px solid black'>
          <tr>
            <td style='background-color: #efefef; width: 40%; border-right: 1px solid black'><p style='margin-top:10px; font-style: italic; margin-bottom:10px;'>  N/A</p></td>
            <td><p style='margin-top:10px; margin-bottom:10px;'>    FieldData</p></td>
          </tr>
          <tr>
            <td style='background-color: #efefef; width: 40%; border-right: 1px solid black'><p style='margin-top:10px; font-style: italic; margin-bottom:10px;'>  Current Situation</p></td>
            <td><p style='margin-top:10px; margin-bottom:10px; font-size: italic;'> Field Data</p></td>
          </tr>
          <tr>
            <td style='background-color: #efefef; width: 40%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>  Recommendations</p></td>
            <td><p style='margin-top:10px; margin-bottom:10px; font-size: italic;'>    FieldData</p></td>
          </tr>
          <tr>
            <td style='background-color: #efefef; width: 40%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>  Priority</p></td>
            <td><p style='margin-top:10px; margin-bottom:10px; font-size: italic;'>    Field Data</p></td>
          </tr>
          <tr>
            <td style='background-color: #efefef; width: 40%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>  Clinical Evidence</p></td>
            <td><p style='margin-top:10px; margin-bottom:10px; font-size: italic;'>    Field Data</p></td>
          </tr>
        </table>
        <p style='font-size:12pt; margin-top:10px; margin-bottom:10px; '>5.3.5	Kitchen </p>
        <p style='font-size:12pt; margin-top:10px; margin-bottom:10px; '>Please include doorways, flooring, lights, fixtures/fittings, door handles and light switches, hand rails, tap ware, etc. where applicable</p>
        <table style='width:100%; margin-top: 10px; border: 1px solid black'>
          <tr>
            <td style='background-color: #efefef; width: 40%; border-right: 1px solid black'><p style='margin-top:10px; font-style: italic; margin-bottom:10px;'>  N/A</p></td>
            <td><p style='margin-top:10px; margin-bottom:10px;'>    FieldData</p></td>
          </tr>
          <tr>
            <td style='background-color: #efefef; width: 40%; border-right: 1px solid black'><p style='margin-top:10px; font-style: italic; margin-bottom:10px;'>  Current Situation</p></td>
            <td><p style='margin-top:10px; margin-bottom:10px; font-size: italic;'> Field Data</p></td>
          </tr>
          <tr>
            <td style='background-color: #efefef; width: 40%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>  Recommendations</p></td>
            <td><p style='margin-top:10px; margin-bottom:10px; font-size: italic;'>    FieldData</p></td>
          </tr>
          <tr>
            <td style='background-color: #efefef; width: 40%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>  Priority</p></td>
            <td><p style='margin-top:10px; margin-bottom:10px; font-size: italic;'>    Field Data</p></td>
          </tr>
          <tr>
            <td style='background-color: #efefef; width: 40%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>  Clinical Evidence</p></td>
            <td><p style='margin-top:10px; margin-bottom:10px; font-size: italic;'>    Field Data</p></td>
          </tr>
        </table>
        <p style='font-size:12pt; margin-top:10px; margin-bottom:10px; '>5.3.6	Laundry</p>
        <p style='font-size:12pt; margin-top:10px; margin-bottom:10px; '>Please include doorways, flooring, lights, fixtures/fittings, door handles and light switches, hand rails, tap ware, etc. where applicable</p>
        <table style='width:100%; margin-top: 10px; border: 1px solid black'>
          <tr>
            <td style='background-color: #efefef; width: 40%; border-right: 1px solid black'><p style='margin-top:10px; font-style: italic; margin-bottom:10px;'>  N/A</p></td>
            <td><p style='margin-top:10px; margin-bottom:10px;'>    FieldData</p></td>
          </tr>
          <tr>
            <td style='background-color: #efefef; width: 40%; border-right: 1px solid black'><p style='margin-top:10px; font-style: italic; margin-bottom:10px;'>  Current Situation</p></td>
            <td><p style='margin-top:10px; margin-bottom:10px; font-size: italic;'> Field Data</p></td>
          </tr>
          <tr>
            <td style='background-color: #efefef; width: 40%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>  Recommendations</p></td>
            <td><p style='margin-top:10px; margin-bottom:10px; font-size: italic;'>    FieldData</p></td>
          </tr>
          <tr>
            <td style='background-color: #efefef; width: 40%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>  Priority</p></td>
            <td><p style='margin-top:10px; margin-bottom:10px; font-size: italic;'>    Field Data</p></td>
          </tr>
          <tr>
            <td style='background-color: #efefef; width: 40%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>  Clinical Evidence</p></td>
            <td><p style='margin-top:10px; margin-bottom:10px; font-size: italic;'>    Field Data</p></td>
          </tr>
        </table>
        <p style='font-size:12pt; margin-top:10px; margin-bottom:10px; '>5.3.7	Other/not included above</p>
        <table style='width:100%; margin-top: 10px; border: 1px solid black'>
        <tr>
        <td style='background-color: #efefef; width: 40%; border-right: 1px solid black'><p style='margin-top:10px; font-style: italic; margin-bottom:10px;'>  N/A</p></td>
        <td><p style='margin-top:10px; margin-bottom:10px;'>    FieldData</p></td>
        </tr>
        <tr>
        <td style='background-color: #efefef; width: 40%; border-right: 1px solid black'><p style='margin-top:10px; font-style: italic; margin-bottom:10px;'>  Current Situation</p></td>
        <td><p style='margin-top:10px; margin-bottom:10px; font-size: italic;'> Field Data</p></td>
        </tr>
        <tr>
        <td style='background-color: #efefef; width: 40%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>  Recommendations</p></td>
        <td><p style='margin-top:10px; margin-bottom:10px; font-size: italic;'>    FieldData</p></td>
        </tr>
        <tr>
        <td style='background-color: #efefef; width: 40%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>  Priority</p></td>
        <td><p style='margin-top:10px; margin-bottom:10px; font-size: italic;'>    Field Data</p></td>
        </tr>
        <tr>
        <td style='background-color: #efefef; width: 40%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>  Clinical Evidence</p></td>
        <td><p style='margin-top:10px; margin-bottom:10px; font-size: italic;'>    Field Data</p></td>
        </tr>
        </table>
        <p style='font-size:12pt; margin-top:10px; margin-bottom:10px; font-weight: bold '>5.4	Heating and Cooling</p>
        <p style='font-size:12pt; margin-top:10px; margin-bottom:10px;'>Please note, this modification applies only to participants with medically diagnosed thermoregulation impairment. Please provide details of current heating and cooling systems. </p>
        <table style='width:100%; margin-top: 10px; border: 1px solid black'>
        <tr>
        <td style='background-color: #efefef; width: 100%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>  Field Data</p></td>
        </tr>
        </table>
        <p style='font-size:12pt; margin-top:10px; margin-bottom:10px; font-weight: bold '>5.5	Staged Process</p>
        <table style='width:100%; margin-top: 10px; border: 1px solid black'>
        <tr>
        <td style='background-color: #efefef; width: 80%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>  Is a staged process for building modifications appropriate? Yes or No?</p></td>
        <td style=' border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>  Field Data</p></td>
        </tr>
        </table>
        <p style='font-size:12pt; margin-top:10px; margin-bottom:10px; '>e.g. first stage is to enable access for safe discharge from hospital and short term accommodation. The second stage is modifications to enable the participant to transition to long-term accommodation.</p>
        <table style='width:100%; margin-top: 10px; border: 1px solid black'>
        <tr>
        <td style='background-color: #efefef; width: 100%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>  Field Data</p></td>
        </tr>
        </table>
        <p style='font-size:12pt; margin-top:10px; margin-bottom:10px; font-weight: bold '>5.6	Exception to Disability Standards</p>
        <p style='font-size:12pt; margin-top:10px; margin-bottom:10px; '>Please note in most cases compliance with Australian Standard 1428 Design for Access and Mobility Part 1 (General) (AS 1428.1) is not required but are examples of best practice.  Users of this template need to ensure they understand the relevant building codes, standards and regulations that relate to the state and location where the modification is planned.</p>
        <table style='width:100%; margin-top: 10px; border: 1px solid black'>
        <tr>
        <td style='background-color: #efefef; width: 100%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>  Field Data</p></td>
        </tr>
        </table>"
        ;

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
                    <td style='background-color: #efefef; width: 100%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>  Field Data</p></td>
                    </tr>
                    </table>";

        $section7 = "<table style='background-color:#6a2c75; border:none; width:100%; margin-top:20px'>
        <tr>
        <td>
        <p style='font-size:14pt; font-weight:bold; margin-top:8px; margin-bottom:8px; color: white'>  PART 7 – Details of Assessor  </p>
        </td>
        </tr>
        </table>
        <p style='font-size: 12pt; margin-top:10px; margin-bottom:10px;'><strong>Declaration</strong> (indicate all relevant sections that apply)</p>
        <table style='width:100%; margin-top: 10px; border: 1px solid black'>
        <tr>
        <td style='background-color: #efefef; width: 80%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px'>  I certify that I meet the NDIA expectations of AT assessor provider suitability (including understanding of the current NDIS Act, Rules and Operational Guidelines) to assess the type of assistive technology and associated supports, at the level of complexity required by this participant.</p></td>
        <td style='border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px; font-weight: bold'>    Field Data</p></td>
        </tr>
        <tr>
        <td style='background-color: #efefef; width: 80%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px'>  I will provide appropriate evidence to the NDIA and/or Quality and Safe Guards Commission if and as requested.</p></td>
        <td style='border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px; font-weight: bold'>    Field Data</p></td>
        </tr>
        <tr>
        <td style='background-color: #efefef; width: 80%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px'>  I understand and acknowledge that the NDIA and participant will rely on my professional advice to select, source and implement this assistive technology, and confirm that I am acting in accordance with the NDIS Quality and Safeguards Commission Code of Conduct and Practice Standards.</p></td>
        <td style='border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px; font-weight: bold'>    Field Data</p></td>
        </tr>
        <tr>
        <td style='background-color: #efefef; width: 80%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px'>  I have informed the participant of any arrangements with suppliers of hearing technology.</p></td>
        <td style='border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px; font-weight: bold'>    Field Data</p></td>
        </tr>
        <tr>
        <td style='background-color: #efefef; width: 80%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px'>󠅦  For HSP eligible participants, I have informed them of services available through Specialist Hearing Services (Community Service Obligations) where relevant</p></td>
        <td style='border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px; font-weight: bold'>    Field Data</p></td>
        </tr>
        </table>
        <p style='font-size: 12pt; font-weight: bold; margin-top:10px; margin-bottom:10px;'>Assessor’s Details</p>
        <table style='width:100%; margin-top: 10px; border: 1px solid black'>
          <tr>
            <td style='background-color: #efefef; width: 50%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px'>  Name</p></td>
            <td style='border-right: 1px solid black; width: 50%;'><p style='margin-top:10px; margin-bottom:10px; font-weight: bold'>    Field Data</p></td>
          </tr>
          <tr>
            <td style='background-color: #efefef; width: 50%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px'>  Qualification</p></td>
            <td style='border-right: 1px solid black; width: 50%;'><p style='margin-top:10px; margin-bottom:10px; font-weight: bold'> Audiologist / Audiometrist</p></td>
          </tr>
          <tr>
            <td style='background-color: #efefef; width: 50%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px'>  Membership of Professional Association</p></td>
            <td style='border-right: 1px solid black; width: 50%;'><p style='margin-top:10px; margin-bottom:10px; font-weight: bold'>    Field Data</p></td>
          </tr>
          <tr>
            <td style='background-color: #efefef; width: 50%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px'>  Organisation / Company</p></td>
            <td style='border-right: 1px solid black; width: 50%;'><p style='margin-top:10px; margin-bottom:10px; font-weight: bold'>    Field Data</p></td>
          </tr>
          <tr>
            <td style='background-color: #efefef; width: 50%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px'>  Current arrangements with preferred suppliers. Include details of supplier(s) and types of devices</p></td>
            <td style='border-right: 1px solid black; width: 50%;'><p style='margin-top:10px; margin-bottom:10px; font-weight: bold'>    Field Data</p></td>
          </tr>
          <tr>
            <td style='background-color: #efefef; width: 50%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px'>  NDIS Provider Registration number (where applicable)</p></td>
            <td style='border-right: 1px solid black; width: 50%;'><p style='margin-top:10px; margin-bottom:10px; font-weight: bold'>    Field Data</p></td>
          </tr>
          <tr>
            <td style='background-color: #efefef; width: 50%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px'>  Phone</p></td>
            <td style='border-right: 1px solid black; width: 50%;'><p style='margin-top:10px; margin-bottom:10px; font-weight: bold'>    Field Data</p></td>
          </tr>
          <tr>
            <td style='background-color: #efefef; width: 50%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px'>  Email</p></td>
            <td style='border-right: 1px solid black; width: 50%;'><p style='margin-top:10px; margin-bottom:10px; font-weight: bold'>    Field Data</p></td>
          </tr>
          <tr>
            <td style='background-color: #efefef; width: 50%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px'>  Signature</p></td>
            <td style='border-right: 1px solid black; width: 50%;'><p style='margin-top:10px; margin-bottom:10px; font-weight: bold'>    Field Data</p></td>
          </tr>
          <tr>
            <td style='background-color: #efefef; width: 50%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px'>  Qualification</p></td>
            <td style='border-right: 1px solid black; width: 50%;'><p style='margin-top:10px; margin-bottom:10px; font-weight: bold'>    Field Data</p></td>
          </tr>
          <tr>
            <td style='background-color: #efefef; width: 50%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px'>  Date of Assessment(s)</p></td>
            <td style='border-right: 1px solid black; width: 50%;'><p style='margin-top:10px; margin-bottom:10px; font-weight: bold'>    Field Data</p></td>
          </tr>
          <tr>
            <td style='background-color: #efefef; width: 50%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px'>  Name</p></td>
            <td style='border-right: 1px solid black; width: 50%;'><p style='margin-top:10px; margin-bottom:10px; font-weight: bold'>    Field Data</p></td>
          </tr>
          <tr>
            <td style='background-color: #efefef; width: 50%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px'>  Date of Report</p></td>
            <td style='border-right: 1px solid black; width: 50%;'><p style='margin-top:10px; margin-bottom:10px; font-weight: bold'>    Field Data</p></td>
          </tr>
        </table>
        <p style='font-size: 12pt; margin-bottom: 10px; margin-top: 10px'><strong>Review by Building Construction Professional</strong> (as applicable)</p>
        <table style='width:100%; margin-top: 10px; border: 1px solid black'>
          <tr>
            <td style='background-color: #efefef; width: 50%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px'>  Name</p></td>
            <td style='border-right: 1px solid black; width: 50%;'><p style='margin-top:10px; margin-bottom:10px; font-weight: bold'>    Field Data</p></td>
          </tr>
          <tr>
            <td style='background-color: #efefef; width: 50%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px'>  NDIS Provider Registration number (where applicable)</p></td>
            <td style='border-right: 1px solid black; width: 50%;'><p style='margin-top:10px; margin-bottom:10px; font-weight: bold'>    Field Data</p></td>
          </tr>
          <tr>
            <td style='background-color: #efefef; width: 50%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px'>  Phone</p></td>
            <td style='border-right: 1px solid black; width: 50%;'><p style='margin-top:10px; margin-bottom:10px; font-weight: bold'>    Field Data</p></td>
          </tr>
          <tr>
            <td style='background-color: #efefef; width: 50%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px'>  Email</p></td>
            <td style='border-right: 1px solid black; width: 50%;'><p style='margin-top:10px; margin-bottom:10px; font-weight: bold'>    Field Data</p></td>
          </tr>
          <tr>
            <td style='background-color: #efefef; width: 50%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px'>  Signature</p></td>
            <td style='border-right: 1px solid black; width: 50%;'><p style='margin-top:10px; margin-bottom:10px; font-weight: bold'>    Field Data</p></td>
          </tr>
          <tr>
            <td style='background-color: #efefef; width: 50%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px'>  Qualification</p></td>
            <td style='border-right: 1px solid black; width: 50%;'><p style='margin-top:10px; margin-bottom:10px; font-weight: bold'>    Field Data</p></td>
          </tr>
          <tr>
            <td style='background-color: #efefef; width: 50%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px'>  Date of review by Building Construction Professional</p></td>
            <td style='border-right: 1px solid black; width: 50%;'><p style='margin-top:10px; margin-bottom:10px; font-weight: bold'>    Field Data</p></td>
          </tr>
        </table>
        <table style='background-color:#6a2c75; border:none; width:100%; margin-top:20px'>
        <tr>
        <td>
        <p style='font-size:14pt; font-weight:bold; margin-top:8px; margin-bottom:8px; color: white'>8.	Participant Consent and Acknowledgement of Interest</p>
        </td>
        </tr>
        </table>
        <p style='font-weight: bold; font-size: 12pt; margin-top:10px; margin-bottom: 10px'>For the participant to complete</p>
        <table style='width:100%; margin-top: 10px; border: 1px solid black'>
        <tr>
        <td style='background-color: #efefef; width: 70%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px'>  Has your audiologist/Audiometrist discussed arrangements they have with particular suppliers of hearing aids?</p></td>
        <td style='border-right: 1px solid black;'><p style='margin-top:10px; margin-bottom:10px; font-weight: bold'>  Yes / No</p></td>
        </tr>
        <tr>
        <td style='background-color: #efefef; width: 70%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px'>  Do you understand that your Audiologist/Audiometrist may only work with a small number of hearing aid brands, and that other providers may recommend different hearing aids?</p></td>
        <td style='border-right: 1px solid black;'><p style='margin-top:10px; margin-bottom:10px; font-weight: bold'>  Yes / No</p></td>
        </tr>
        <tr>
        <td style='background-color: #efefef; width: 70%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px'>  Do you understand that the National Disability Insurance Agency (NDIA) will generally fund the standard level of technology you require to achieve functional hearing and that not all requested technology may be funded?</p></td>
        <td style='border-right: 1px solid black;'><p style='margin-top:10px; margin-bottom:10px; font-weight: bold'> Yes / No</p></td>
        </tr>
        <tr>
        <td style='background-color: #efefef; width: 70%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px'>  The NDIA may need to contact your Audiologist/Audiometrist to discuss information within your assessment and quotation(s). This will assist the NDIA to determine if your request can be funded under the NDIS. Do you consent to the NDIA collecting and disclosing your information including from these third parties mentioned above, in relation to your hearing technology assessment and quotation?</p></td>
        <td style='border-right: 1px solid black;'><p style='margin-top:10px; margin-bottom:10px; font-weight: bold'>  Yes, I consent,  No, I do not consent</p></td>
        </tr>
        <tr>
        <td style='background-color: #efefef; width: 70%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px'>  I understand that I am giving consent to the NDIA to do the things with my information set out in this section. I understand that I can withdraw my consent for the NDIS to do things with my information at any time by letting the NDIA know.</p></td>
        <td style='border-right: 1px solid black;'><p style='margin-top:10px; margin-bottom:10px; font-weight: bold'>   Field Data</p></td>
        </tr>
        <tr>
        <td style='background-color: #efefef; width: 70%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px'>  I understand that I can access the NDIA’s Privacy Notice and Privacy Policy on the NDIA website or by contacting the NDIA.</p></td>
        <td style='border-right: 1px solid black;'><p style='margin-top:10px; margin-bottom:10px; font-weight: bold'>   Field Data</p></td>
        </tr>
        <tr>
        <td style='background-color: #efefef; width: 70%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px'>  Signature</p></td>
        <td style='border-right: 1px solid black;'><p style='margin-top:10px; margin-bottom:10px; font-weight: bold'>   Field Data</p></td>
        </tr>
        <tr>
        <td style='background-color: #efefef; width: 70%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px'>  Date</p></td>
        <td style='border-right: 1px solid black;'><p style='margin-top:10px; margin-bottom:10px; font-weight: bold'>   Field Data</p></td>
        </tr>
        <tr>
        <td style='background-color: #efefef; width: 70%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px'>  Full name (please print)</p></td>
        <td style='border-right: 1px solid black;'><p style='margin-top:10px; margin-bottom:10px; font-weight: bold'>   Field Data</p></td>
        </tr>
        </table>
        <p style='font-size:12pt; margin-top: 10px; margin-bottom: 10px'><strong>If you have signed this Form on behalf of the NDIS participant</strong>, please complete the details below. It is an offence to provide false or misleading information.</p>
        <p style='font-size: 12pt; margin-bottom: 10px'>We may require you to provide evidence of your authority to sign on behalf of the person.</p>
        <table style='width:100%; margin-top: 10px; border: 1px solid black'>
        <tr>
        <td style='background-color: #efefef; width: 70%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px'>  Signature</p></td>
        <td style='border-right: 1px solid black;'><p style='margin-top:10px; margin-bottom:10px; font-weight: bold'>   Field Data</p></td>
        </tr>
        <tr>
        <td style='background-color: #efefef; width: 70%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px'>  Date</p></td>
        <td style='border-right: 1px solid black;'><p style='margin-top:10px; margin-bottom:10px; font-weight: bold'>   Field Data</p></td>
        </tr>
        <tr>
        <td style='background-color: #efefef; width: 70%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px'>  Full name (please print)</p></td>
        <td style='border-right: 1px solid black;'><p style='margin-top:10px; margin-bottom:10px; font-weight: bold'>   Field Data</p></td>
        </tr>
        </table>
        <table style='background-color:#6a2c75; border:none; width:100%; margin-top:20px'>
        <tr>
        <td>
        <p style='font-size:14pt; font-weight:bold; margin-top:8px; margin-bottom:8px; color: white'>9.	Appendix A: Replacement Device Requestr</p>
        </td>
        </tr>
        </table>
        <p style='font-size: 12pt; margin-top: 10px; margin-bottom: 10px'>Replacement device requests occur when the previous device is lost / damaged beyond repair / has reached the end of its service life AND the same level of technology is requested.</p>
        <table style='width:100%; border: 1px solid black'>
          <tr>
            <td style='background-color: #efefef; width: 33%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px; font-weight: bold'>  Reason</p></td>
            <td style='background-color: #efefef; width: 33%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px; font-weight: bold'>  Evidence required</p></td>
            <td style='background-color: #efefef; width: 33%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px; font-weight: bold'>  Considerations</p></td>
          </tr>
          <tr>
            <td style='width: 33%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>  Current device has reached the end of its service life</p></td>
            <td style='width: 33%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>  Date of last fitting of device to be provided by audiologist/ audiometrist, with model and make of device.</p></td>
            <td style='width: 33%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>  Expected service life of sound processors is 6 years.</p></td>
          </tr>
          <tr>
            <td style='width: 33%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>  Current device is out of warranty</p></td>
            <td style='width: 33%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>  None required</p></td>
            <td style='width: 33%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>  Completion of the warranty period is not a valid reason for replacement of hearing technology.</p></td>
          </tr>
          <tr>
            <td style='width: 33%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>  Current device is faulty or damaged beyond repair</p></td>
            <td style='width: 33%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>  Service and maintenance report from the manufacturer, demonstrating the device requires a major repair that is not considered cost effective and /or the device cannot be repaired.</p></td>
            <td style='width: 33%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>  NDIS will replace a faulty device that is out of warranty or a damaged device, with the same item on the market.</p></td>
          </tr>
          <tr>
            <td style='width: 33%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>  Current device is lost or stolen</p></td>
            <td style='width: 33%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>  A statutory declaration is required.Consideration needs to be given whether the cost of the device can be recovered through household insurance where relevant.</p></td>
            <td style='width: 33%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px;'>  NDIS will replace a lost / stolen device with the same item on the market (if available), unless the participant’s needs meet upgrade criteria.</p></td>
          </tr>
        </table>
        <table style='background-color:#6a2c75; border:none; width:100%; margin-top:20px'>
        <tr>
        <td>
        <p style='font-size:14pt; font-weight:bold; margin-top:8px; margin-bottom:8px; color: white'>10.	Appendix B: Refit / Upgrade Request</p>
        </td>
        </tr>
        </table>
        <p style='font-size: 12pt; margin-top: 10px; margin-bottom: 10px'>A refitted/upgraded device is requested when a new device with higher specifications or a different style is required because the participant’s functional capacity has changed.</p>
        <table style='width:100%; border: 1px solid black'>
          <tr>
                <td style='background-color: #efefef; width: 50%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px; font-weight: bold; text-align: center'>  Reason</p></td>
                <td style='background-color: #efefef; width: 50%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px; font-weight: bold; text-align: center'>  Evidence required</p></td>
          </tr>
          <tr>
                <td style='width: 50%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px; text-align: center'> The current hearing devices are not suitable because they can no longer be optimised by adjustments or any other modifications to meet current gain requirements. </p></td>
                <td style='width: 50%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px; text-align: center'> Documented evidence on file that the current hearing technology is established to be in optimal working order.
                And
                After adjustment/modification has been made to current hearing aid(s) through manufacturer service/repair, mould/shell modification or replacement to accommodate changes in thresholds, Real Ear Measurements show a poor match to targets.
                Or
                Aid specifications show that the client’s current Hearing Threshold Level (HTL) is outside the range of the current hearing aid(s) and they were previously optimally fitted.
                 </p></td>
          </tr>
          <tr>
                <td style='width: 50%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px; text-align: center'> The current hearing technology is unsuitable because the client can no longer use the device due to a significant deterioration in health, dexterity or cognitive ability since last fitting.
                Or
                A permanent change in physical condition of the ear or ear health has occurred since last fitting and the client requires a different style </p></td>
                <td style='width: 50%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px; text-align: center'> Documented evidence on file describes the change in physical condition of the ear or ear health; or describes the client’s deterioration and how this affects the client’s ability to manage their hearing aid(s); or a letter from the client’s doctor, carer, nurse, supervisor etc. giving details of how the condition affects current hearing aid usage. Details of what has been tried with the current hearing aid(s) or why they cannot be modified 
                And
                Details how the new aid(s) proposed for refitting will address the issues with the current hearing aid(s)
                </p></td>
          </tr>
        </table>
        <table style='background-color:#6a2c75; border:none; width:100%; margin-top:20px'>
        <tr>
        <td>
        <p style='font-size:14pt; font-weight:bold; margin-top:8px; margin-bottom:8px; color: white'>11.	Appendix C: Examples of functional measures for hearing device refitting requests</p>
        </td>
        </tr>
        </table>
        <p style='font-size: 12pt; margin-top: 10px; margin-bottom: 10px'><strong>Please note</strong>: This Appendix is to be used as a guide for functional evidence.  Please complete as appropriate or attach relevant clinical documentation that provides similar information.</p>
        <p style='font-size: 12pt; font-weight: bold'>Option 1</p>
        <ul style='margin-bottom: 10px; margin-top: 10px'>
        <li style='font-size: 11pt'>Aided Audiogram or Real Ear Measurements (Please attach)</li>
        <li style='font-size: 11pt'>Hearing   </li>
        <li style='font-size: 11pt'>Speech Audiometry including dynamic range, Loudness Discomfort Level (LDL) and speech in noise testing (Please attach)</li>
        </ul>
        <p style='margin-top: 10px; margin-bottom: 10px; font-size: 12pt'>What functional benefit does the requested device provide in the context of the participant’s current communication profile (including all current hearing supports accessed)? Provide comparison, for example, hearing aids alone, hearing aids with a remote microphone.</p>
        <p style='margin-bottom: 10px; font-size: 12pt'>Speech in noise, for example, Quick SIN / SPIN / Other</p>
        <table style='width:100%; margin-top: 10px; border: 1px solid black'>
        <tr>
        <td style='background-color: #efefef; width: 20%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px; font-weight: bold'>   Unaided</p></td>
        <td style='background-color: #efefef; width: 20%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px; font-weight: bold'>   Current preferred aided condition (if relevant</p></td>
        <td style='background-color: #efefef; width: 20%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px; font-weight: bold'>   Option 1 Device Details</p></td>
        <td style='background-color: #efefef; width: 20%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px; font-weight: bold'>   Option 2 Device Details</p></td>
        <td style='background-color: #efefef; width: 20%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px; font-weight: bold'>   Option 3 Device Details</p></td>
        </tr>
        <tr>
        <td style='background-color: #efefef; width: 20%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px; font-weight: bold'>   Data-Field</p></td>
        <td style='background-color: #efefef; width: 20%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px; font-weight: bold'>   Data-Field</p></td>
        <td style='background-color: #efefef; width: 20%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px; font-weight: bold'>   Data-Field</p></td>
        <td style='background-color: #efefef; width: 20%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px; font-weight: bold'>   Data-Field</p></td>
        <td style='background-color: #efefef; width: 20%; border-right: 1px solid black'><p style='margin-top:10px; margin-bottom:10px; font-weight: bold'>   Data-Field</p></td>
        </tr>
        </table>";


        
        $form = Form::create([
            'name' => 'Notes for completing the Complex Home Modification Assessment Template'
        ]);

        $heading1 = FormHeading::insertGetId([
            'form_heading' => 'PART 1 – Participant and Plan Management Details',
            'form_id' => '6',
            'section_html' => $section1
        ]);

        $heading2 = FormHeading::insertGetId([
            'form_heading' => 'PART 2 – Assessment',
            'form_id' => '6',
            'section_html' => $section2
        ]);

        $heading3 = FormHeading::insertGetId([
            'form_heading' => 'PART 3 – Property Details',
            'form_id' => '6',
            'section_html' => $section3
        ]);

        $heading4 = FormHeading::insertGetId([
            'form_heading' => 'PART 4 – Social Situation',
            'form_id' => '6',
            'section_html' => $section4
        ]);

        $heading5 = FormHeading::insertGetId([
            'form_heading' => 'PART 5 – Complex Home Modification Recommendations',
            'form_id' => '6',
            'section_html' => $section5
        ]);

        $heading6 = FormHeading::insertGetId([
            'form_heading' => 'PART 6 – Complex Home Modification Quotes',
            'form_id' => '6',
            'section_html' => $section6
        ]);


        $heading7 = FormHeading::insertGetId([
            'form_heading' => 'PART 7 – Details of Assessor',
            'form_id' => '6',
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

          $form_fields2 ='[
            [
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
                  {"type":"text","required":false,"label":"<span lang=\"EN-AU\" style=\"color: rgb(0, 0, 0); font-size: 11pt; line-height: 16.8667px; font-family: Arial, sans-serif;\">Participant owned</span><span style=\"color: rgb(0, 0, 0); font-size: medium;\"></span>","placeholder":"Enter Participant owned","className":"form-control","name":"participant_owned","access":false,"subtype":"text"},
                  {"type":"text","required":false,"label":"<span lang=\"EN-AU\" style=\"color: rgb(0, 0, 0); font-size: 11pt; line-height: 16.8667px; font-family: Arial, sans-serif;\">Co-owned</span><span style=\"color: rgb(0, 0, 0); font-size: medium;\"></span>","placeholder":"Enter Co-owned","className":"form-control","name":"co_owned","access":false,"subtype":"text"},
                  {"type":"text","required":false,"label":"<span lang=\"EN-AU\" style=\"color: rgb(0, 0, 0); font-size: 11pt; line-height: 16.8667px; font-family: Arial, sans-serif;\">Private rental</span><span style=\"color: rgb(0, 0, 0); font-size: medium;\"></span>","placeholder":"Enter Private rental","className":"form-control","name":"private_rental","access":false,"subtype":"text"},
                  {"type":"text","required":false,"label":"<span lang=\"EN-AU\" style=\"color: rgb(0, 0, 0); font-size: 11pt; line-height: 16.8667px; font-family: Arial, sans-serif;\">Public rental / housing</span><span style=\"color: rgb(0, 0, 0); font-size: medium;\"></span>","placeholder":"Enter Public rental / housing","className":"form-control","name":"private_housing_rental","access":false,"subtype":"text"},
                  {"type":"text","required":false,"label":"<span lang=\"EN-AU\" style=\"color: rgb(0, 0, 0); font-size: 11pt; line-height: 16.8667px; font-family: Arial, sans-serif;\">Family owned</span><span style=\"color: rgb(0, 0, 0); font-size: medium;\"></span>","placeholder":"Enter Family owned","className":"form-control","name":"family_owned","access":false,"subtype":"text"},
                  {"type":"radio-group","required":false,"label":"<span lang=\"EN-AU\" style=\"color: rgb(0, 0, 0); font-size: 11pt; line-height: 16.8667px; font-family: Arial, sans-serif;\">Modifications Completed</span><span style=\"color: rgb(0, 0, 0); font-size: medium;\"></span>","inline":false,"name":"radio-group-1674631745645-0","access":false,"other":false,"values":[{"label":"Yes","value":"option-1","selected":false},{"label":"No","value":"option-2","selected":false}]},{"type":"text","required":false,"label":"<span lang=\"EN-AU\" style=\"color: rgb(0, 0, 0); font-size: 11pt; line-height: 16.8667px; font-family: Arial, sans-serif;\">Details of previous modifications</span><span style=\"color: rgb(0, 0, 0); font-size: medium;\"></span>","placeholder":"Enter Details of previous modifications","className":"form-control","name":"previous_modifications","access":false,"subtype":"text"},
                  {"type":"radio-group","required":false,"label":"<span lang=\"EN-AU\" style=\"color: rgb(0, 0, 0); font-size: 11pt; line-height: 16.8667px; font-family: Arial, sans-serif;\">Potential Modifications</span><span style=\"color: rgb(0, 0, 0); font-size: medium;\"></span>","inline":false,"name":"radio-group-1674631853905-0","access":false,"other":false,"values":[{"label":"YES","value":"option-1","selected":false},{"label":"No","value":"option-2","selected":false}]},{"type":"textarea","required":false,"label":"Structure of property<br>","placeholder":"Enter Structure of property","className":"form-control","name":"structure_property","access":false,"subtype":"textarea"},
                  {"type":"textarea","required":false,"label":"Description of property","placeholder":"Enter Description of property","className":"form-control","name":"description_property","access":false,"subtype":"textarea"},{"type":"textarea","required":false,"label":"Special Conditions","placeholder":"Enter Special Conditions","className":"form-control","name":"special_conditions","access":false,"subtype":"textarea"}
              ]';

          $form_fields4 = '[
                  {"type":"textarea","required":false,"label":"Social Circumstances","placeholder":"Enter Social Circumstances","className":"form-control","name":"social_circumstances","access":false,"subtype":"textarea"},
                  {"type":"text","required":false,"label":"Hospitalisation N/A","placeholder":"Enter Hospitalisation N/A","className":"form-control","name":"hospitalisation_N_A","access":false,"subtype":"text"},
                  {"type":"text","required":false,"label":"<span lang=\"EN-AU\" style=\"color: rgb(0, 0, 0); font-size: 11pt; line-height: 16.8667px; font-family: Arial, sans-serif;\">Anticipated discharge date</span><span style=\"color: rgb(0, 0, 0); font-size: medium;\"></span>","placeholder":"Enter Anticipated discharge date","className":"form-control","name":"anticipated_discharge_date","access":false,"subtype":"text"},
                  {"type":"textarea","required":false,"label":"<span lang=\"EN-AU\" style=\"color: rgb(0, 0, 0); font-size: 11pt; line-height: 16.8667px; font-family: Arial, sans-serif;\">Discharge plan details/Comments</span><span style=\"color: rgb(0, 0, 0); font-size: medium;\"></span>","placeholder":"Enter Discharge plan details/Comments","className":"form-control","name":"discharge_plan","access":false,"subtype":"textarea"},
                  {"type":"textarea","required":false,"label":"Proposed living arrangements","placeholder":"Enter Proposed living arrangements ","className":"form-control","name":"proposed_living","access":false,"subtype":"textarea"}
          ]';

          $form_fields5 = '[
                  {"type":"text","required":false,"label":"Example Bathroom","placeholder":"Enter Example Bathroom","className":"form-control","name":"example_bathroom","access":false,"subtype":"text"},
                  {"type":"text","required":false,"label":"<span lang=\"EN-AU\" style=\"color: rgb(0, 0, 0); font-size: 11pt; line-height: 16.8667px; font-family: Arial, sans-serif;\">N/A</span><span style=\"color: rgb(0, 0, 0); font-size: medium;\"></span>","placeholder":"Enter (N/A) Front Access","className":"form-control","name":"front_access_na","access":false,"subtype":"text"},{"type":"text","required":false,"label":"<font color=\"#000000\" face=\"Arial, sans-serif\"><span style=\"font-size: 14.6667px;\">&nbsp;Current Situation</span></font>","placeholder":"Enter Current Situation (Front Access)","className":"form-control","name":"front_access_front_access","access":false,"subtype":"text"},
                  {"type":"text","required":false,"label":"<font color=\"#000000\" face=\"Arial, sans-serif\"><span style=\"font-size: 14.6667px;\">Recommendations</span></font><br>","placeholder":"Enter Recommendations (Front Access)","className":"form-control","name":"front_access_recommendation","access":false,"subtype":"text"},{"type":"text","required":false,"label":"<font color=\"#000000\" face=\"Arial, sans-serif\"><span style=\"font-size: 14.6667px;\">Priority&nbsp;</span></font><br>","placeholder":"Enter Priority (Front Access)","className":"form-control","name":"front_access_priority","access":false,"subtype":"text"},{"type":"text","required":false,"label":"<font color=\"#000000\" face=\"Arial, sans-serif\"><span style=\"font-size: 14.6667px;\">Clinical Evidence&nbsp;</span></font><br>","placeholder":"Enter Clinical Evidence (Front Access)","className":"form-control","name":"front_access_clinicalEvidence","access":false,"subtype":"text"},
                  {"type":"text","required":false,"label":"<span style=\"color: rgb(0, 0, 0); font-family: Arial, sans-serif; font-size: 14.6667px;\">N/A</span>","placeholder":"Enter (N/A) Other Access","className":"form-control","name":"other_access_na","access":false,"subtype":"text"},{"type":"text","required":false,"label":"&nbsp;Current Situation","placeholder":"Enter Current Situation (Other Access)","className":"form-control","name":"other_Access_current","access":false,"subtype":"text"},{"type":"text","required":false,"label":"Recommendations","placeholder":"Enter Recommendations (Other Access)","className":"form-control","name":"other_Access_recommendations","access":false,"subtype":"text"},{"type":"text","required":false,"label":"Priority&nbsp;","placeholder":"Enter Priority (Other Access)","className":"form-control","name":"other_Access_priority","access":false,"subtype":"text"},{"type":"text","required":false,"label":"Clinical Evidence","placeholder":"Enter Clinical Evidence (Other Access)","className":"form-control","name":"other_Access_clinical","access":false,"subtype":"text"},{"type":"text","required":false,"label":"<span lang=\"EN-AU\" style=\"color: rgb(0, 0, 0); font-size: 11pt; line-height: 16.8667px; font-family: Arial, sans-serif;\">N/A</span><span style=\"color: rgb(0, 0, 0); font-size: medium;\"></span>","placeholder":"Enter N/A (Car Parking)","className":"form-control","name":"car_parking_na","access":false,"subtype":"text"},
                  {"type":"text","required":false,"label":"<span lang=\"EN-AU\" style=\"color: rgb(0, 0, 0); font-size: 11pt; line-height: 16.8667px; font-family: Arial, sans-serif;\">Current Situation</span><span style=\"color: rgb(0, 0, 0); font-size: medium;\"></span>","placeholder":"Enter Current Situation (Car Parking)","className":"form-control","name":"car_parking_current_situation","access":false,"subtype":"text"},{"type":"text","required":false,"label":"<span lang=\"EN-AU\" style=\"color: rgb(0, 0, 0); font-size: 11pt; line-height: 16.8667px; font-family: Arial, sans-serif;\">Recommendations</span><span style=\"color: rgb(0, 0, 0); font-size: medium;\"></span>","placeholder":"Enter Recommendations (Car Parking)","className":"form-control","name":"car_parking_recommendations","access":false,"subtype":"text"},{"type":"text","required":false,"label":"Priority","placeholder":"Enter Priority (Car Parking)","className":"form-control","name":"car_parking_priority","access":false,"subtype":"text"},
                  {"type":"text","required":false,"label":"Clinical Evidence","placeholder":"Enter Clinical Evidence (Car Parking)","className":"form-control","name":"car_parking_clinical_evidence","access":false,"subtype":"text"},
                  {"type":"text","required":false,"label":"N/A","placeholder":"Enter  N/A (Bed Room)","className":"form-control","name":"bed_room_na","access":false,"subtype":"text"},{"type":"text","required":false,"label":"current Situation","placeholder":"Enter  current Situation (Bed Room)","className":"form-control","name":"bed_room_current","access":false,"subtype":"text"},
                  {"type":"text","required":false,"label":"Recommendations","placeholder":"Enter  Recommendations (Bed Room)","className":"form-control","name":"bed_room_recommendations","access":false,"subtype":"text"},
                  {"type":"text","required":false,"label":"Priority","placeholder":"Enter  Priority (Bed Room)","className":"form-control","name":"bed_room_priority","access":false,"subtype":"text"},
                  {"type":"text","required":false,"label":"Clinical Evidence","placeholder":"Enter  Clinical Evidence (Bed Room)","className":"form-control","name":"bed_room_clinical_evidence","access":false,"subtype":"text"},
                  {"type":"text","required":false,"label":"N/A","placeholder":"Enter  N/A (Living Area)","className":"form-control","name":"living_area_na","access":false,"subtype":"text"},
                  {"type":"text","required":false,"label":"Current Situation","placeholder":"Enter  Current Situation (Living Area)","className":"form-control","name":"living_area_current_situation","access":false,"subtype":"text"},
                  {"type":"text","required":false,"label":"Recommendations","placeholder":"Enter  Recommendations (Living Area)","className":"form-control","name":"living_room_recommendations","access":false,"subtype":"text"},
                  {"type":"text","required":false,"label":"Priority","placeholder":"Enter  Priority (Living Area)","className":"form-control","name":"living_area_priority","access":false,"subtype":"text"},
                  {"type":"text","required":false,"label":"Clinical Evidence","placeholder":"Enter  Clinical Evidence (Living Area)","className":"form-control","name":"living_area_clinical_evidence","access":false,"subtype":"text"},
                  {"type":"text","required":false,"label":"N/A","placeholder":"Enter  N/A (Hallway)","className":"form-control","name":"hallway_na","access":false,"subtype":"text"},
                  {"type":"text","required":false,"label":"Current Situation","placeholder":"Enter Current Situation (Hallway)","className":"form-control","name":"hallway_current_situation","access":false,"subtype":"text"},
                  {"type":"text","required":false,"label":"Recommendations","placeholder":"Enter Recommendations (Hallway)","className":"form-control","name":"hallways_recommendations","access":false,"subtype":"text"},
                  {"type":"text","required":false,"label":"Priority","placeholder":"Enter Priority (Hallway)","className":"form-control","name":"hallway_priority","access":false,"subtype":"text"},
                  {"type":"text","required":false,"label":"Clinical Evidence","placeholder":"Enter Clinical Evidence (Hallway)","className":"form-control","name":"hallway_clinical_evidence","access":false,"subtype":"text"},
                  {"type":"text","required":false,"label":"N/A","placeholder":"Enter N/A (Toilet)","className":"form-control","name":"toilet_na","access":false,"subtype":"text"},
                  {"type":"text","required":false,"label":"Current Situation","placeholder":"Enter Current Situation (Toilet)","className":"form-control","name":"toilet_current_situation","access":false,"subtype":"text"},
                  {"type":"text","required":false,"label":"Recommendations","placeholder":"Enter Recommendations (Toilet)","className":"form-control","name":"text-1674634622887","access":false,"subtype":"text"},
                  {"type":"text","required":false,"label":"Priority","placeholder":"Enter Priority (Toilet)","className":"form-control","name":"text-1674634629551","access":false,"subtype":"text"},
                  {"type":"text","required":false,"label":"Clinical Evidence","placeholder":"Enter Clinical Evidence (Toilet)","className":"form-control","name":"text-1674634635519","access":false,"subtype":"text"},
                  {"type":"text","required":false,"label":"N/A","placeholder":"Enter N/A (Kitchen)","className":"form-control","name":"kitchen_na","access":false,"subtype":"text"},
                  {"type":"text","required":false,"label":"Current Situation","placeholder":"Enter Current Situation (Kitchen)","className":"form-control","name":"kitchen_current_situation","access":false,"subtype":"text"},
                  {"type":"text","required":false,"label":"Recommendations","placeholder":"Enter Recommendations (Kitchen)","className":"form-control","name":"Kitchen_recommendations","access":false,"subtype":"text"},
                  {"type":"text","required":false,"label":"Priority","placeholder":"Enter Priority (Kitchen)","className":"form-control","name":"kitchen_priority","access":false,"subtype":"text"},
                  {"type":"text","required":false,"label":"Clinical Evidence","placeholder":"Enter Clinical Evidence (Kitchen)","className":"form-control","name":"Kitchen_clinical_evidence","access":false,"subtype":"text"},
                  {"type":"text","required":false,"label":"N/A","placeholder":"Enter N/A (Laundry)","className":"form-control","name":"laundary_na","access":false,"subtype":"text"},
                  {"type":"text","required":false,"label":"Current Situation","placeholder":"Enter Current Situation (Laundry)","className":"form-control","name":"Laundry_current_situation","access":false,"subtype":"text"},
                  {"type":"text","required":false,"label":"Recommendations","placeholder":"Enter Recommendations (Laundry)","className":"form-control","name":"Laundry_recommendations","access":false,"subtype":"text"},
                  {"type":"text","required":false,"label":"Priority","placeholder":"Enter Priority (Laundry)","className":"form-control","name":"Laundry_priority","access":false,"subtype":"text"},
                  {"type":"text","required":false,"label":"Clinical Evidence","placeholder":"Enter Clinical Evidence (Laundry)","className":"form-control","name":"Laundry_clinical_evidence","access":false,"subtype":"text"},
                  {"type":"text","required":false,"label":"N/A","placeholder":"Enter N/A (Other)","className":"form-control","name":"other_na","access":false,"subtype":"text"},
                  {"type":"text","required":false,"label":"Current Situation","placeholder":"Enter Current Situation (Other)","className":"form-control","name":"other_current_situation","access":false,"subtype":"text"},
                  {"type":"text","required":false,"label":"Recommendations","placeholder":"Enter Recommendations (Other)","className":"form-control","name":"other_recommendations","access":false,"subtype":"text"},
                  {"type":"text","required":false,"label":"Priority","placeholder":"Enter Priority (Other)","className":"form-control","name":"other_priority","access":false,"subtype":"text"},
                  {"type":"text","required":false,"label":"Clinical Evidence","placeholder":"Enter Clinical Evidence (Other)","className":"form-control","name":"other_clinical_evidence","access":false,"subtype":"text"},
                  {"type":"textarea","required":false,"label":"Heating and Cooling","className":"form-control","name":"heating_cooling","access":false,"subtype":"textarea"},{"type":"text","required":false,"label":"Building Modification","placeholder":"Enter Building Modification","className":"form-control","name":"building_modification","access":false,"subtype":"text"},
                  {"type":"textarea","required":false,"label":"Staged Process","placeholder":"Enter Detail Staged Process","className":"form-control","name":"staged_process","access":false,"subtype":"textarea"},
                  {"type":"textarea","required":false,"label":"Exception to Disability Standards","placeholder":"Enter Exception to Disability Standards","className":"form-control","name":"disability_standards","access":false,"subtype":"textarea"}
          ]';

          $form_fields6 = '[
            {"type":"textarea","required":false,"label":"Home Modification Quote","placeholder":"Enter Detail Home Modification Quote","className":"form-control","name":"home_modification_quote","access":false,"subtype":"textarea"}
          ]';
       
          $form_fields7 = '[
                {"type":"text","required":false,"label":"Name","placeholder":"Enter Assessor’s  Name","className":"form-control","name":"assessors_name","access":false,"subtype":"text"},
                {"type":"text","required":false,"label":"NDIS Provider Registration Number","placeholder":"Enter Registration Number","className":"form-control","name":"registration_number","access":false,"subtype":"text"},
                {"type":"text","required":false,"label":"Phone Number","placeholder":"Enter Phone Number","className":"form-control","name":"phone_number","access":false,"subtype":"text"},{"type":"text","subtype":"email","required":false,"label":"Email","placeholder":"Enter Email Address","className":"form-control","name":"email_address","access":false},{"type":"text","required":false,"label":"Qualification","placeholder":"Enter Qualification here.","className":"form-control","name":"qualification","access":false,"subtype":"text"},
                {"type":"date","required":false,"label":"Date of Assessment","placeholder":"Set Date of Assessment","className":"form-control","name":"date_assessment","access":false},
                {"type":"date","required":false,"label":"Date of Report","placeholder":"Set Date of Report","className":"form-control","name":"reportDate","access":false}
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


    }
}
