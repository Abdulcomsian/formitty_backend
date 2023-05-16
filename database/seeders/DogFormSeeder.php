<?php

namespace Database\Seeders;

use App\Models\Form;
use App\Models\FormField;
use App\Models\FormHeading;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DogFormSeeder extends Seeder
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
    
$section2 = '<table style="background-color:#7209B7; border:none; width:100%;">
            <tr>
                <td>
                    <p style="font-size:12pt; font-weight:bold; margin-top:5px; margin-bottom:5px; color: white"> PART 2 – Evaluation and Assessment</p>
                </td>
            </tr>
        </table>
        
        <p style="font-weight:bold; font-size:13pt;margin-top:20px; margin-bottom:20px;">2.1	Vision Background </p>
        <p style="font-size:12pt;">Describe participant’s vision diagnosis and functional vision information.</p>
        <table style="width:100%; border: 1px solid black">
            <tr>
                <td style="width: 100%; border: 1px solid black;"><p style="margin-top:10px; margin-bottom:10px;">{{part_2_evaluation_and_assessment_01}}</p></td>
            </tr>
        </table>
        
        <p style="font-weight:bold; font-size:13pt;margin-top:20px; margin-bottom:20px;">2.2	Background Information</p>
        <p style="font-size:12pt;"> Include information about the participant’s current mobility including travel routes the participant can currently do, or has the capacity to do (with any current mobility aids or equipment used) without the use of a dog guide.</p>
        <table style="width:100%; border: 1px solid black">
            <tr>
                <td style="width: 100%; border: 1px solid black;"><p style="margin-top:10px; margin-bottom:10px;">{{part_2_evaluation_and_assessment_02}}</p></td>
            </tr>
        </table>
        
        <p style="font-weight:bold; font-size:13pt;margin-top:20px; margin-bottom:20px;">2.3	Participant goals</p>
        <p style="font-size:12pt;">If the participant’s NDIS plan has been made available, you can refer to the statement of participant’s goals and outline those relevant to the dog guide request. Include any other relevant mobility goals.</p>
        <table style="width:100%; border: 1px solid black">
            <tr>
                <td style="width: 100%; border: 1px solid black;"><p style="margin-top:10px; margin-bottom:10px;">{{part_2_evaluation_and_assessment_03}}</p></td>
            </tr>
        </table>
        
        <p style="font-weight:bold; font-size:13pt;margin-top:20px; margin-bottom:20px;">2.4	Dog Guide Assessor Information: Participant Suitability</p>
        <p style="font-size:12pt;">Outline the participant’s suitability to be a dog guide user. Evidence may include outcomes from an experiential walk or previous dog guide experience. Previous dog guide history should include information regarding the length of the working partnership and reasons for the partnership ending.</p>
        <table style="width:100%; border: 1px solid black">
            <tr>
                <td style="width: 100%; border: 1px solid black;"><p style="margin-top:10px; margin-bottom:10px;">{{part_2_evaluation_and_assessment_04}}</p></td>
            </tr>
        </table>
        
        
        <p style="font-weight:bold; font-size:13pt;margin-top:20px; margin-bottom:20px;">2.5	Dog Guide Assessor Information: Expected Differences</p>
        <p style="font-size:12pt;">Either detail information regarding any expected differences in the participant’s ability to travel independently with the dog guide. Including:</p>
        <ul style="font-size:12pt;">
            <li><p style="margin-top:10px; margin-bottom:10px;">any changes to the type, frequency and duration of travel routes.</p></li>
            <li><p style="margin-top:10px; margin-bottom:10px;">any changes to additional community access supports i.e. an outline of formal and informal support currently required to access the community and if and how this will change with the implementation of a dog guide.</p></li>
        </ul>
        <p style="font-size:12pt;">Or, in the instance that a praticipant has a dog guide that is soon to retire, you should note this, and indicate the extent of independence lost in similar lines, if a futher dog guide is not available.</p>
        <table style="width:100%; border: 1px solid black">
            <tr>
                <td style="width: 100%; border: 1px solid black;"><p style="margin-top:10px; margin-bottom:10px;">{{part_2_evaluation_and_assessment_05}}</p></td>
            </tr>
        </table>
        
        
        <p style="font-weight:bold; font-size:13pt;margin-top:20px; margin-bottom:20px;">2.6  Other Relevant Information</p>
        <p style="font-size:12pt;">Provide any relevant medical information (such as allergies, cognitive, psychosocial, other physical impairment or cardiopulmonary conditions that would limit mobility) that impact on the participant’s current and ongoing ability to use the dog guide. A medical report supporting the use of the dog guide is recommended.</p>
        <table style="width:100%; border: 1px solid black">
            <tr>
                <td style="width: 100%; border: 1px solid black;"><p style="margin-top:10px; margin-bottom:10px;">{{part_2_evaluation_and_assessment_06}}</p></td>
            </tr>
        </table>
        <p></p>';


    
$section3 = '<table style="background-color:#7209B7; border:none; width:100%;">
        <tr>
            <td>
                <p style="font-size:12pt; font-weight:bold; margin-top:5px; margin-bottom:5px; color: white"> PART 3 – Recommended Option</p>
            </td>
        </tr>
    </table>
    <p style="font-weight:bold; font-size:13pt;margin-top:20px; margin-bottom:20px;">3.1 Most Suitable / Appropriate to facilitate goal attainment</p>
    <p style="font-size:12pt;">Briefly summarise the evidence for the recommended option as the most suitable/appropriate alternative which will facilitate attainment of the participant’s goal compared to others considered, including lower cost alternatives. (N.B. in the instance where previous dog guide relationship failed, evidence of actions to reduce the risk of repeat issues)</p>
    <table style="width:100%; border: 1px solid black">
        <tr>
            <td style="width: 100%; border: 1px solid black;"><p style="margin-top:10px; margin-bottom:10px;">{{part_3_recommended_option_01}}</p></td>
        </tr>
    </table>

    <p style="font-weight:bold; font-size:13pt;margin-top:20px; margin-bottom:20px;">3.2 Additional Features</p>
    <p style="font-size:12pt;">Are there any additional features, customisation or specification recommended that is considered to be above the minimum or standard level of this support for reasonable and necessary funding? (E.g. customised harness, the requirement for additional training hours (that is: training that is considered above the ‘usual’ amount), and additional maintenance costs). </p>
    <table style="width:100%; border: 1px solid black">
        <tr>
            <td style="width: 100%; border: 1px solid black;"><p style="margin-top:10px; margin-bottom:10px;">{{part_3_recommended_option_02}}</p></td>
        </tr>
    </table>
    <p style="font-weight:bold; font-size:13pt;margin-top:20px; margin-bottom:20px;">Participant Agreement</p>
    <p style="font-size:12pt;">Does the participant agree with the recommended AT solution (Are the assessor’s clinical recommendation and participant preference the same)</p>

    <table style=" width:100%; border: 1px solid black;">
    <tr>
      <td style="width:30%;">Yes</td>
      <td style="width: 70%; border: 1px solid black;">{{part_3_recommended_option_03}}</td>
    </tr>
    <tr>
      <td style="width:30%;">No</td>
      <td style="width: 70%; border: 1px solid black;">{{part_3_recommended_option_04}}</td>
    </tr>
    <tr>
      <td style="width:30%;">Please provide details</td>
      <td style="width: 70%; border: 1px solid black;">{{part_3_recommended_option_05}}</td>
    </tr>
    </table>
    <p></p>';
    


$section4 = '<table style="background-color:#7209B7; border:none; width:100%;">
    <tr>
      <td>
          <p style="font-size:12pt; font-weight:bold; margin-top:5px; margin-bottom:5px; color: white"> PART 4 – Attachments</p>
      </td>
    </tr>
    </table>
    
    <p style="font-size:12pt;">Please attach</p>
    <ul style="font-size:12pt;">
        <li><p style="margin-top:10px; margin-bottom:10px;">A detailed quote outlining the full cost of any assessment, training, matching and follow-up associated with the cost of the dog guide purchase.</p></li>
        <li><p style="margin-top:10px; margin-bottom:10px;">Medical Report (as outlined in section 2.6 if relevant).</p></li>
    </ul>
    <p style="font-size:12pt;">Please Note: for an approved dog guide, funding for the extra in maintenance costs would be considered to reflect the higher costs of a dog guide over those of an equivalent companion animal/pet. The NDIS will provide an appropriate annual maintenance cost which the participant can use to pay for reasonable and necessary dog guide maintenance costs (including food, grooming, flea and worm treatments, medication, vaccinations, veterinary costs and/or insurance).</p>
  <p></p>';
    
$section5 = '<table style="background-color:#7209B7; border:none; width:100%;">
            <tr>
              <td>
                  <p style="font-size:12pt; font-weight:bold; margin-top:5px; margin-bottom:5px; color: white"> PART 5 – Details of Assistive Technology Assessor</p>
              </td>
            </tr>
            </table>
            <p style="font-size:12pt;"> <strong>DECLARATION</strong> (Indicate all relevant sections that apply. </p>
            <table style=" width:100%; border: 1px solid black;">
            <tr>
              <td style="width:70%;">I certify that I meet the NDIA expectations of AT assessor provider suitability (including understanding of the current NDIS Act, Rules and Operational Guidelines) to assess the type of assistive technology and associated supports, at the level of complexity required by this participant.</td>
              <td style="width: 30%; border: 1px solid black;">{{part_5_details_of_assistive_technology_assessor_01}}</td>
            </tr>
            <tr>
              <td style="width:70%;">I will provide appropriate evidence to the NDIA and/or Quality and Safe Guards Commission if and as requested.</td>
              <td style="width: 30%; border: 1px solid black;">{{part_5_details_of_assistive_technology_assessor_02}}</td>
            </tr>
            <tr>
              <td style="width:70%;">I understand and acknowledge that the NDIA and participant will rely on my professional advice to select, source and implement this assistive technology.</td>
              <td style="width: 30%; border: 1px solid black;">{{part_5_details_of_assistive_technology_assessor_03}}</td>
            </tr>
            <tr>
              <td style="width:70%;">This assistive technology has been assessed by the treating multi-disciplinary team and I have completed the AT assessment on behalf of that team.</td>
              <td style="width: 30%; border: 1px solid black;">{{part_5_details_of_assistive_technology_assessor_04}}</td>
            </tr>
            </table>


            <p style="font-weight:bold; font-size:13pt;margin-top:20px; margin-bottom:20px;">Assessor’s Details</p>
            <table style=" width:100%; border: 1px solid black;">
            <tr>
              <td style="width:40%;">Name</td>
              <td style="width: 60%; border: 1px solid black;">{{part_5_details_of_assistive_technology_assessor_05}}</td>
            </tr>
            <tr>
              <td style="width:40%;">NDIS Provider Registration number (where applicable)</td>
              <td style="width: 60%; border: 1px solid black;">{{part_5_details_of_assistive_technology_assessor_06}}</td>
            </tr>
            <tr>
              <td style="width:40%;">Phone</td>
              <td style="width: 60%; border: 1px solid black;">{{part_5_details_of_assistive_technology_assessor_07}}</td>
            </tr>
            <tr>
              <td style="width:40%;">Email</td>
              <td style="width: 60%; border: 1px solid black;">{{part_5_details_of_assistive_technology_assessor_08}}</td>
            </tr>
            <tr>
              <td style="width:40%;">Signature</td>
              <td style="width: 60%; border: 1px solid black;">{{part_5_details_of_assistive_technology_assessor_09}}</td>
            </tr>
            <tr>
              <td style="width:40%;">Qualification</td>
              <td style="width: 60%; border: 1px solid black;">{{part_5_details_of_assistive_technology_assessor_10}}</td>
            </tr>
            <tr>
              <td style="width:40%;">Date of Assessment</td>
              <td style="width: 60%; border: 1px solid black;">{{part_5_details_of_assistive_technology_assessor_11}}</td>
            </tr>
            <tr>
              <td style="width:40%;">Date of Report</td>
              <td style="width: 60%; border: 1px solid black;">{{part_5_details_of_assistive_technology_assessor_12}}</td>
            </tr>
            </table>
            <p></p>';


$section6='<table style="background-color:#7209B7; border:none; width:100%;">
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



        $form_title = Form::create([
            'name' => 'Dog Guide Report'
        ]);

        $form = FormHeading::create([
            'form_heading' => 'Participant and Plan Management Details',
            'form_id' => $form_title->id,
            'section_html'=>$section1
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
              "type":"date",
              "required":false,
              "label":"Date of Assessment",
              "placeholder":"Enter Date of Assessment",
              "className":"form-control",
              "name":"part_1_ndis_date_of_assessment",
              "access":false,
              "subtype":"text"
          },
          {
              "type":"date",
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

        FormField::create([
              'form_heading_id' => $form->id,
              'form_field' => $form_fields
          ]);
      
      
        $form = FormHeading::create([
            'form_heading' => 'Evaluation and Assessment',
            'form_id' => $form_title->id,
            'section_html'=>$section2
        ]);

$form_fields2 = '[
          {
            "type":"text",
            "required":false,
            "label":"Vision Background ",
            "placeholder":"Vision Background ",
            "className":"form-control",
            "name":"part_2_evaluation_and_assessment_01",
            "access":false,
            "subtype":"text"
          },

          {
            "type":"text",
            "required":false,
            "label":"Background Information",
            "placeholder":"Background Information",
            "className":"form-control",
            "name":"part_2_evaluation_and_assessment_02",
            "access":false,
            "subtype":"text"
          },

          {
            "type":"text",
            "required":false,
            "label":"Participant Goals ",
            "placeholder":"Participant Goals ",
            "className":"form-control",
            "name":"part_2_evaluation_and_assessment_03",
            "access":false,
            "subtype":"text"
          },

          {
            "type":"text",
            "required":false,
            "label":"Dog Guide Assessor Information: Participant Suitability",
            "placeholder":"Dog Guide Assessor Information: Participant Suitability",
            "className":"form-control",
            "name":"part_2_evaluation_and_assessment_04",
            "access":false,
            "subtype":"text"
          },

          {
            "type":"text",
            "required":false,
            "label":"Dog Guide Assessor Information: Expected Differences",
            "placeholder":"Dog Guide Assessor Information: Expected Differences",
            "className":"form-control",
            "name":"part_2_evaluation_and_assessment_05",
            "access":false,
            "subtype":"text"
          },

          {
            "type":"text",
            "required":false,
            "label":"Other Relevant Information",
            "placeholder":"Other Relevant Information",
            "className":"form-control",
            "name":"part_2_evaluation_and_assessment_06",
            "access":false,
            "subtype":"text"
          }
          ]';

        FormField::create([
          'form_heading_id' => $form->id,
          'form_field' => $form_fields2
        ]);
        $form = FormHeading::create([
            'form_heading' => 'Recommended Option',
            'form_id' => $form_title->id,
            'section_html'=>$section3
        ]);

$form_fields3 = '[
          {
            "type":"textarea",
            "required":false,
            "label":"Most Suitable / Appropriate Alternative to facilitate goal attainment",
            "placeholder":"Most Suitable / Appropriate Alternative to facilitate goal attainment",
            "className":"form-control",
            "name":"part_3_recommended_option_01",
            "access":false,
            "subtype":"textarea"
          },
          {
            "type":"textarea",
            "required":false,
            "label":"Additional Features",
            "placeholder":"Additional Features",
            "className":"form-control",
            "name":"part_3_recommended_option_02",
            "access":false,
            "subtype":"textarea"
          },
          {
            "type":"textarea",
            "required":false,
            "label":"Yes",
            "placeholder":"Yes, Participant signature",
            "className":"form-control",
            "name":"part_3_recommended_option_03",
            "access":false,
            "subtype":"textarea"
          },
          {
            "type":"textarea",
            "required":false,
            "label":"No",
            "placeholder":"No, Participant Suitability",
            "className":"form-control",
            "name":"part_3_recommended_option_04",
            "access":false,
            "subtype":"textarea"
          },
          {
            "type":"textarea",
            "required":false,
            "label":"Please provide details",
            "placeholder":"Participant signature",
            "className":"form-control",
            "name":"part_3_recommended_option_05",
            "access":false,
            "subtype":"textarea"
          }
          ]';

        FormField::create([
          'form_heading_id' => $form->id,
          'form_field' => $form_fields3
      ]);
        $form = FormHeading::create([
            'form_heading' => 'Attachments',
            'form_id' => $form_title->id,
            'section_html'=>$section4
        ]);

$form_fields4 = '[]';

        FormField::create([
          'form_heading_id' => $form->id,
          'form_field' => $form_fields4
      ]);


        $form = FormHeading::create([
            'form_heading' => 'Details of Assistive Technology Assessor',
            'form_id' => $form_title->id,
            'section_html'=>$section5
        ]);

$form_fields5 = '[
          {
            "type":"textarea",
            "required":false,
            "label":"I certify that I meet the NDIA expectations of AT assessor provider suitability ",
            "placeholder":"I certify that I meet the NDIA expectations of AT assessor provider suitability ",
            "className":"form-control",
            "name":"part_5_details_of_assistive_technology_assessor_01",
            "access":false,
            "subtype":"textarea"
          },
          {
            "type":"textarea",
            "required":false,
            "label":"I will provide appropriate evidence to the NDIA and/or Quality and Safe Guards Commission if and as requested.",
            "placeholder":"I will provide appropriate evidence to the NDIA and/or Quality and Safe Guards Commission if and as requested.",
            "className":"form-control",
            "name":"part_5_details_of_assistive_technology_assessor_02",
            "access":false,
            "subtype":"textarea"
          },
          {
            "type":"textarea",
            "required":false,
            "label":"I understand and acknowledge that the NDIA and participant ",
            "placeholder":"I understand and acknowledge that the NDIA and participant",
            "className":"form-control",
            "name":"part_5_details_of_assistive_technology_assessor_03",
            "access":false,
            "subtype":"textarea"
          },
          {
            "type":"textarea",
            "required":false,
            "label":"This assistive technology has been assessed by the treating multi-disciplinary team",
            "placeholder":"This assistive technology has been assessed by the treating multi-disciplinary team",
            "className":"form-control",
            "name":"part_5_details_of_assistive_technology_assessor_04",
            "access":false,
            "subtype":"textarea"
          },
          {
            "type":"textarea",
            "required":false,
            "label":"Name",
            "placeholder":"Assessor_Name",
            "className":"form-control",
            "name":"part_5_details_of_assistive_technology_assessor_05",
            "access":false,
            "subtype":"textarea"
          },
          {
            "type":"textarea",
            "required":false,
            "label":"NDIS Provider Registration number (where applicable)",
            "placeholder":"Assessor_NDIS Provider Registration number (where applicable)",
            "className":"form-control",
            "name":"part_5_details_of_assistive_technology_assessor_06",
            "access":false,
            "subtype":"textarea"
          },
          {
            "type":"textarea",
            "required":false,
            "label":"Phone",
            "placeholder":"Assessor_Phone",
            "className":"form-control",
            "name":"part_5_details_of_assistive_technology_assessor_07",
            "access":false,
            "subtype":"textarea"
          },
          {
            "type":"email",
            "required":false,
            "label":"Email",
            "placeholder":"Assessor_Email",
            "className":"form-control",
            "name":"part_5_details_of_assistive_technology_assessor_08",
            "access":false,
            "subtype":"textarea"
          },
          {
            "type":"textarea",
            "required":false,
            "label":"Signature",
            "placeholder":"Assessor_Signature",
            "className":"form-control",
            "name":"part_5_details_of_assistive_technology_assessor_09",
            "access":false,
            "subtype":"textarea"
          },
          {
            "type":"textarea",
            "required":false,
            "label":"Qualification",
            "placeholder":"Assessor_Qualification",
            "className":"form-control",
            "name":"part_5_details_of_assistive_technology_assessor_10",
            "access":false,
            "subtype":"textarea"
          },
          {
            "type":"date",
            "required":false,
            "label":"Date of Assessment ",
            "placeholder":"Assessor_Date of Assessment ",
            "className":"form-control",
            "name":"part_5_details_of_assistive_technology_assessor_11",
            "access":false,
            "subtype":"textarea"
          },
          {
            "type":"date",
            "required":false,
            "label":"Date of Report",
            "placeholder":"Assessor_Date of Report",
            "className":"form-control",
            "name":"part_5_details_of_assistive_technology_assessor_12",
            "access":false,
            "subtype":"textarea"
          }
        ]';

        FormField::create([
          'form_heading_id' => $form->id,
          'form_field' => $form_fields5
      ]);


        $form = FormHeading::create([
            'form_heading' => 'Consent to Collect and Share Your Information – Provider AT Assessment and Quotation(s)',
            'form_id' => $form_title->id,
            'section_html'=>$section6
        ]);

$form_fields6 = '[
          {
            "type":"textarea",
            "required":false,
            "label":"Yes, I consent",
            "placeholder":"Yes, I consent",
            "className":"form-control",
            "name":"part_6_consent_to_collect_and_share_your_information_01",
            "access":false,
            "subtype":"textarea"
          },

          {
            "type":"textarea",
            "required":false,
            "label":"No, I do not consent",
            "placeholder":"No, I do not consent",
            "className":"form-control",
            "name":"part_6_consent_to_collect_and_share_your_information_02",
            "access":false,
            "subtype":"textarea"
          },

          {
            "type":"textarea",
            "required":false,
            "label":"Participant’s Signature",
            "placeholder":"Participant’s Signature",
            "className":"form-control",
            "name":"part_6_consent_to_collect_and_share_your_information_03",
            "access":false,
            "subtype":"textarea"
          },

          {
            "type":"textarea",
            "required":false,
            "label":"I understand that I am giving consent to the NDIA to do the things ",
            "placeholder":"I understand that I am giving consent to the NDIA to do the things ",
            "className":"form-control",
            "name":"part_6_consent_to_collect_and_share_your_information_04",
            "access":false,
            "subtype":"textarea"
          },

          {
            "type":"textarea",
            "required":false,
            "label":"I understand that I can access the NDIA’s Privacy Notice and Privacy Policy",
            "placeholder":"I understand that I can access the NDIA’s Privacy Notice and Privacy Policy",
            "className":"form-control",
            "name":"part_6_consent_to_collect_and_share_your_information_05",
            "access":false,
            "subtype":"textarea"
          },

          {
            "type":"textarea",
            "required":false,
            "label":"Signature",
            "placeholder":"Signature",
            "className":"form-control",
            "name":"part_6_consent_to_collect_and_share_your_information_06",
            "access":false,
            "subtype":"textarea"
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
            "type":"textarea",
            "required":false,
            "label":"Full name ",
            "placeholder":"Full name ",
            "className":"form-control",
            "name":"part_6_consent_to_collect_and_share_your_information_08",
            "access":false,
            "subtype":"textarea"
          },

          {
            "type":"textarea",
            "required":false,
            "label":"Signature",
            "placeholder":"Signature",
            "className":"form-control",
            "name":"part_6_consent_to_collect_and_share_your_information_09",
            "access":false,
            "subtype":"textarea"
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
            "type":"textarea",
            "required":false,
            "label":"Full Name of person completing this form (please print):",
            "placeholder":"Full Name of person completing this form (please print):",
            "className":"form-control",
            "name":"part_6_consent_to_collect_and_share_your_information_11",
            "access":false,
            "subtype":"textarea"
          },

          {
            "type":"textarea",
            "required":false,
            "label":"Relationship to participant or person wishing to become an NDIS participant:",
            "placeholder":"Relationship to participant or person wishing to become an NDIS participant:",
            "className":"form-control",
            "name":"part_6_consent_to_collect_and_share_your_information_12",
            "access":false,
            "subtype":"textarea"
          }
        ]';

       


        FormField::create([
            'form_heading_id' => $form->id ,
            'form_field' => $form_fields6
        ]);

    }
}
