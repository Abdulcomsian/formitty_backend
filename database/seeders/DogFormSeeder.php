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
        $section1 = '<table style="background-color:#7209B7; border:none; width:100%;">
        <tr>
            <td>
                <p style="font-size:12pt; font-weight:bold; margin-top:5px; margin-bottom:5px; color: white">  PART 1 – Participant and Plan Management Details</p>
            </td>
        </tr>
    </table>
    <p style="font-weight: bold; margin-bottom: 10px; margin-top: 10px">1.1	NDIS Participant Details </p>
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
              <td style="border: 1px solid lightslategray; padding: 10px; width: 40%; background-color: lightgrey; font-size: 17px">Name</td>
              <td style="border: 1px solid lightslategray; padding: 10px">
                Field Data
              </td>
            </tr>
            <tr>
              <td style="border: 1px solid lightslategray; padding: 10px; width: 40%;background-color: lightgrey; font-size: 17px">Date of Birth</td>
              <td style="border: 1px solid lightslategray; padding: 10px">
                Field Data
              </td>
            </tr>
            <tr>
              <td style="border: 1px solid lightslategray; padding: 10px; width: 40%; background-color: lightgrey; font-size: 17px">Age</td>
              <td style="border: 1px solid lightslategray; padding: 10px">
                Field Data
              </td>
            </tr>
            <tr>
              <td style="border: 1px solid lightslategray; padding: 10px; width: 40%;background-color: lightgrey; font-size: 17px">NDIS Number</td>
              <td style="border: 1px solid lightslategray; padding: 10px">
                Field Data
              </td>
            </tr>
            <tr>
              <td style="border: 1px solid lightslategray; padding: 10px; width: 40%;background-color: lightgrey; font-size: 17px">Contact Telephone Number</td>
              <td style="border: 1px solid lightslategray; padding: 10px">
                Field Data
              </td>
            </tr>
            <tr>
              <td style="border: 1px solid lightslategray; padding: 10px; width: 40%;background-color: lightgrey; font-size: 17px">Address</td>
              <td style="border: 1px solid lightslategray; padding: 10px">
                Field Data
              </td>
            </tr>
            <tr>
              <td style="border: 1px solid lightslategray; padding: 10px; width: 40%;background-color: lightgrey; font-size: 17px">Email</td>
              <td style="border: 1px solid lightslategray; padding: 10px">
                Field Data
              </td>
            </tr>
            <tr>
              <td style="border: 1px solid lightslategray; padding: 10px; width: 40%;background-color: lightgrey; font-size: 17px">Preferred Contact Method </td>
              <td style="border: 1px solid lightslategray; padding: 10px">
                Field Data
              </td>
            </tr>
            <tr>
              <td style="border: 1px solid lightslategray; padding: 10px; width: 40%;background-color: lightgrey; font-size: 17px">Nominee or Guardian Name</td>
              <td style="border: 1px solid lightslategray; padding: 10px">
                Field Data
              </td>
            </tr>
            <tr>
              <td style="border: 1px solid lightslategray; padding: 10px; width: 40%;background-color: lightgrey; font-size: 17px">Nominee or Guardian Phone</td>
              <td style="border: 1px solid lightslategray; padding: 10px">
                Field Data
              </td>
            </tr>
            <tr>
              <td style="border: 1px solid lightslategray; padding: 10px; width: 40%;background-color: lightgrey; font-size: 17px">NDIS Support Coordinator</td>
              <td style="border: 1px solid lightslategray; padding: 10px">
                Field Data
              </td>
            </tr>
            <tr>
              <td style="border: 1px solid lightslategray; padding: 10px; width: 40%;background-color: lightgrey; font-size: 17px">Contact Details</td>
              <td style="border: 1px solid lightslategray; padding: 10px">
                Field Data
              </td>
            </tr>
            
          </tbody>
    </table>
    <p style="font-weight: bold; margin-bottom: 10px; margin-top: 10px">1.2	Plan Management Details</p>
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
              <td style="border: 1px solid lightslategray; padding: 10px; width: 40%; background-color: lightgrey; font-size: 17px">Agency Managed</td>
              <td style="border: 1px solid lightslategray; padding: 10px">
                Field Data
              </td>
            </tr>
            <tr>
              <td style="border: 1px solid lightslategray; padding: 10px; width: 40%; background-color: lightgrey; font-size: 17px">Self-Managed</td>
              <td style="border: 1px solid lightslategray; padding: 10px">
                Field Data
              </td>
            </tr>
            <tr>
              <td style="border: 1px solid lightslategray; padding: 10px; width: 40%; background-color: lightgrey; font-size: 17px">Registered Plan Management Provider</td>
              <td style="border: 1px solid lightslategray; padding: 10px">
                Field Data
              </td>
            </tr>
            <tr>
              <td style="border: 1px solid lightslategray; padding: 10px; width: 40%; background-color: lightgrey; font-size: 17px">Contact Details </td>
              <td style="border: 1px solid lightslategray; padding: 10px">
                Field Data
              </td>
            </tr>
          </tbody>
    </table>';
    
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
                <td style="width: 100%; border: 1px solid black;"><p style="margin-top:10px; margin-bottom:10px;"> Text goes here</p></td>
            </tr>
        </table>
        
        <p style="font-weight:bold; font-size:13pt;margin-top:20px; margin-bottom:20px;">2.2	Background Information</p>
        <p style="font-size:12pt;"> Include information about the participant’s current mobility including travel routes the participant can currently do, or has the capacity to do (with any current mobility aids or equipment used) without the use of a dog guide.</p>
        <table style="width:100%; border: 1px solid black">
            <tr>
                <td style="width: 100%; border: 1px solid black;"><p style="margin-top:10px; margin-bottom:10px;"> Text goes here</p></td>
            </tr>
        </table>
        
        <p style="font-weight:bold; font-size:13pt;margin-top:20px; margin-bottom:20px;">2.3	Participant goals</p>
        <p style="font-size:12pt;">If the participant’s NDIS plan has been made available, you can refer to the statement of participant’s goals and outline those relevant to the dog guide request. Include any other relevant mobility goals.</p>
        <table style="width:100%; border: 1px solid black">
            <tr>
                <td style="width: 100%; border: 1px solid black;"><p style="margin-top:10px; margin-bottom:10px;"> Text goes here</p></td>
            </tr>
        </table>
        
        <p style="font-weight:bold; font-size:13pt;margin-top:20px; margin-bottom:20px;">2.4	Dog Guide Assessor Information: Participant Suitability</p>
        <p style="font-size:12pt;">Outline the participant’s suitability to be a dog guide user. Evidence may include outcomes from an experiential walk or previous dog guide experience. Previous dog guide history should include information regarding the length of the working partnership and reasons for the partnership ending.</p>
        <table style="width:100%; border: 1px solid black">
            <tr>
                <td style="width: 100%; border: 1px solid black;"><p style="margin-top:10px; margin-bottom:10px;"> Text goes here</p></td>
            </tr>
        </table>
        
        
        <p style="font-weight:bold; font-size:13pt;margin-top:20px; margin-bottom:20px;">2.5	Dog Guide Assessor Information: Expected Differences</p>
        <p style="font-size:12pt;">Either detail information regarding any expected differences in the participant’s ability to travel independently with the dog guide. Including:</p>
        <ul style="font-size:12pt;">
            <li><p style="margin-top:10px; margin-bottom:10px;">any changes to the type, frequency and duration of travel routes.</p></li>
            <li><p style="margin-top:10px; margin-bottom:10px;">any changes to additional community access supports i.e. an outline of formal and informal support currently required to access the community and if and how this will change with the implementation of a dog guide.</p></li>
        </ul>
        <p style="font-size:12pt;">Or, in the instance that a praticipant has a dog guide that is soon to retire, you should note this, and indicate the extent of independence lost in similar lines, if a futher dog guide is not available.</p>
        
        
        
        <p style="font-weight:bold; font-size:13pt;margin-top:20px; margin-bottom:20px;">2.6  Other Relevant Information</p>
        <p style="font-size:12pt;">Provide any relevant medical information (such as allergies, cognitive, psychosocial, other physical impairment or cardiopulmonary conditions that would limit mobility) that impact on the participant’s current and ongoing ability to use the dog guide. A medical report supporting the use of the dog guide is recommended.</p>
        <table style="width:100%; border: 1px solid black">
            <tr>
                <td style="width: 100%; border: 1px solid black;"><p style="margin-top:10px; margin-bottom:10px;"> Text goes here</p></td>
            </tr>
        </table>';
    
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
        <td style="width: 100%; border: 1px solid black;"><p style="margin-top:10px; margin-bottom:10px;"> Text goes here</p></td>
    </tr>
</table>

<p style="font-weight:bold; font-size:13pt;margin-top:20px; margin-bottom:20px;">3.2 Additional Features</p>
<p style="font-size:12pt;">Are there any additional features, customisation or specification recommended that is considered to be above the minimum or standard level of this support for reasonable and necessary funding? (E.g. customised harness, the requirement for additional training hours (that is: training that is considered above the ‘usual’ amount), and additional maintenance costs). </p>
<table style="width:100%; border: 1px solid black">
    <tr>
        <td style="width: 100%; border: 1px solid black;"><p style="margin-top:10px; margin-bottom:10px;">Text goes here</p></td>
    </tr>
</table>
<p style="font-weight:bold; font-size:13pt;margin-top:20px; margin-bottom:20px;">Participant Agreement</p>
<p style="font-size:12pt;">Does the participant agree with the recommended AT solution (Are the assessor’s clinical recommendation and participant preference the same)</p>

<table style=" width:100%; border: 1px solid black;">
<tr>
  <td style="width:30%;">Yes</td>
  <td style="width: 70%; border: 1px solid black;"></td>
</tr>
<tr>
  <td style="width:30%;">No</td>
  <td style="width: 70%; border: 1px solid black;"></td>
</tr>
<tr>
  <td style="width:30%;">Please provide details</td>
  <td style="width: 70%; border: 1px solid black;"></td>
</tr>
</table>';
    
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
    ';
    
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
              <td style="width: 30%; border: 1px solid black;"></td>
            </tr>
            <tr>
              <td style="width:70%;">I will provide appropriate evidence to the NDIA and/or Quality and Safe Guards Commission if and as requested.</td>
              <td style="width: 30%; border: 1px solid black;"></td>
            </tr>
            <tr>
              <td style="width:70%;">I understand and acknowledge that the NDIA and participant will rely on my professional advice to select, source and implement this assistive technology.</td>
              <td style="width: 30%; border: 1px solid black;"></td>
            </tr>
            <tr>
              <td style="width:70%;">This assistive technology has been assessed by the treating multi-disciplinary team and I have completed the AT assessment on behalf of that team.</td>
              <td style="width: 30%; border: 1px solid black;"></td>
            </tr>
            </table>
            <p style="font-weight:bold; font-size:13pt;margin-top:20px; margin-bottom:20px;">Assessor’s Details</p>
            <table style=" width:100%; border: 1px solid black;">
            <tr>
              <td style="width:40%;">Name</td>
              <td style="width: 60%; border: 1px solid black;"></td>
            </tr>
            <tr>
              <td style="width:40%;">NDIS Provider Registration number (where applicable)</td>
              <td style="width: 60%; border: 1px solid black;"></td>
            </tr>
            <tr>
              <td style="width:40%;">Phone</td>
              <td style="width: 60%; border: 1px solid black;"></td>
            </tr>
            <tr>
              <td style="width:40%;">Email</td>
              <td style="width: 60%; border: 1px solid black;"></td>
            </tr>
            <tr>
              <td style="width:40%;">Signature</td>
              <td style="width: 60%; border: 1px solid black;"></td>
            </tr>
            <tr>
              <td style="width:40%;">Qualification</td>
              <td style="width: 60%; border: 1px solid black;"></td>
            </tr>
            <tr>
              <td style="width:40%;">Date of Assessment</td>
              <td style="width: 60%; border: 1px solid black;"></td>
            </tr>
            <tr>
              <td style="width:40%;">Date of Report</td>
              <td style="width: 60%; border: 1px solid black;"></td>
            </tr>
            </table>';
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
              <td style="width: 60%; border: 1px solid black;"></td>
            </tr>
            <tr>
              <td style="width:40%;">No, I do not consent</td>
              <td style="width: 60%; border: 1px solid black;"></td>
            </tr>
            <tr>
              <td style="width:40%;">Participants Signature</td>
              <td style="width: 60%; border: 1px solid black;"></td>
            </tr>
            <tr>
              <td style="width:80%;">I understand that I am giving consent to the NDIA to do the things with my information set out in this section. I understand that I can withdraw my consent for the NDIS to do things with my information at any time by letting the NDIA know.</td>
              <td style="width: 20%; border: 1px solid black;"></td>
            </tr>
            <tr>
              <td style="width:80%;">I understand that I can access the NDIA’s Privacy Notice and Privacy Policy on the NDIA website or by contacting the NDIA.</td>
              <td style="width: 20%; border: 1px solid black;"></td>
            </tr>
            <tr>
              <td style="width:40%;">Signature</td>
              <td style="width: 60%; border: 1px solid black;"></td>
            </tr>
            <tr>
              <td style="width:40%;">Date</td>
              <td style="width: 60%; border: 1px solid black;"></td>
            </tr>
            <tr>
              <td style="width:40%;">Full name</td>
              <td style="width: 60%; border: 1px solid black;"></td>
            </tr>
            </table>
            <p style="font-weight:bold; font-size:13pt;margin-top:20px; margin-bottom:20px;">If you have signed this Form on behalf of the NDIS participant,</p>
            <p style="font-size:12pt;">please complete the details below. It is an offence to provide false or misleading information.</p>
            <p style="font-size:12pt;">We may require you to provide evidence of your authority to sign on behalf of the person.</p>
            
            <table style=" width:100%; border: 1px solid black;">
            <tr>
              <td style="width:40%;">Signature</td>
              <td style="width: 60%; border: 1px solid black;"></td>
            </tr>
            <tr>
              <td style="width:40%;">Date</td>
              <td style="width: 60%; border: 1px solid black;"></td>
            </tr>
            <tr>
              <td style="width:40%;">Full Name of person completing this form (please print):</td>
              <td style="width: 60%; border: 1px solid black;"></td>
            </tr>
            <tr>
              <td style="width:40%;">Relationship to participant or person wishing to become an NDIS participant:</td>
              <td style="width: 60%; border: 1px solid black;"></td>
            </tr>
            </table>';

        $form_title = Form::create([
            'name' => 'Dog Guide Report'
        ]);

        $form = FormHeading::create([
            'form_heading' => 'Participant and Plan Management Details',
            'form_id' => $form_title->id,
            'section_html'=>$section1
        ]);

        $form_fields = '[{"type":"text","required":false,"label":"Name","placeholder":"Enter participant name","className":"form-control","name":"participant_name","access":false,"subtype":"text"},{"type":"text","required":false,"label":"Date of Birth","placeholder":"Enter participant DOB","className":"form-control","name":"participant_dateOfBirth","access":false,"subtype":"text"},{"type":"text","required":false,"label":"Age","placeholder":"Enter participant age","className":"form-control","name":"participant_age","access":false,"subtype":"text"},{"type":"text","required":false,"label":"NDIS Number","placeholder":"Enter NDIS number","className":"form-control","name":"NDIS_number","access":false,"subtype":"text"},{"type":"text","required":false,"label":"Address","placeholder":"Enter Participant Address","className":"form-control","name":"participant_address","access":false,"value":"Address","subtype":"text"},{"type":"text","required":false,"label":"Contact Telephone Number","placeholder":"Enter Participant contact number","className":"form-control","name":"participant_contact","access":false,"subtype":"text"},{"type":"text","required":false,"label":"Email","placeholder":"Enter participant Email","className":"form-control","name":"participant_email","access":false,"subtype":"text"},{"type":"text","required":false,"label":"Preferred Contact Number","placeholder":"Enter Preferred Contact Number","className":"form-control","name":"preferred_contact","access":false,"subtype":"text"},{"type":"text","required":false,"label":"Guardian Name","placeholder":"Enter Nominee or Guardian Name","className":"form-control","name":"guardian_name","access":false,"subtype":"text"},{"type":"text","required":false,"label":"Guardian Phone","placeholder":"Enter Guardian Phone","className":"form-control","name":"guardian_phone","access":false,"subtype":"text"},{"type":"text","required":false,"label":"NDIS Support Coordinator","placeholder":"Enter Support Coordinator ","className":"form-control","name":"support_coordinator","access":false,"subtype":"text"},{"type":"text","required":false,"label":"Contact Details","placeholder":"Enter contact Details","className":"form-control","name":"contact_details","access":false,"subtype":"text"}]';


        FormField::create([
              'form_heading_id' => $form->id,
              'form_field' => $form_fields
          ]);
      
        //
        $form = FormHeading::create([
            'form_heading' => 'Evaluation and Assessment',
            'form_id' => $form_title->id,
            'section_html'=>$section2
        ]);

        $form_fields2 = '[{"type":"text","required":false,"label":"Agency Managed","placeholder":"Enter Agency Managed","className":"form-control","name":"agency_managed","access":false,"subtype":"text"},{"type":"text","required":false,"label":"Self Managed","placeholder":"Enter Self-Managed","className":"form-control","name":"self_managed","access":false,"subtype":"text"},{"type":"text","required":false,"label":"Registered Plan Management Provider","placeholder":"Enter plan management provider","className":"form-control","name":"management_provider","access":false,"subtype":"text"},{"type":"text","required":false,"label":"Contact Details","placeholder":"Enter contact details","className":"form-control","name":"contact_details","access":false,"subtype":"text"}]';

        FormField::create([
          'form_heading_id' => $form->id,
          'form_field' => $form_fields2
        ]);

      //

        $form = FormHeading::create([
            'form_heading' => 'Recommended Option',
            'form_id' => $form_title->id,
            'section_html'=>$section3
        ]);

        $form_fields3 = '[{"type":"textarea","required":false,"label":"Vision Background","placeholder":"Enter Detail Vision Background","className":"form-control","name":"vision_background","access":false,"subtype":"textarea"},{"type":"textarea","required":false,"label":"Background Information","placeholder":"Enter background Information","className":"form-control","name":"info_background","access":false,"subtype":"textarea"},{"type":"textarea","required":false,"label":"Participant Goals","placeholder":"Enter participant Goals","className":"form-control","name":"participant_goals","access":false,"subtype":"textarea"},{"type":"textarea","required":false,"label":"Gog Guide Assessor Information","placeholder":"Enter Participant Suitability","className":"form-control","name":"participant_suitability","access":false,"subtype":"textarea"}]';
        FormField::create([
          'form_heading_id' => $form->id,
          'form_field' => $form_fields3
      ]);

      //

        $form = FormHeading::create([
            'form_heading' => 'Attachments',
            'form_id' => $form_title->id,
            'section_html'=>$section4
        ]);

        $form_fields4 = '[{"type":"textarea","required":false,"label":"<span lang=\"EN-AU\" style=\"color: rgb(0, 0, 0); font-size: 11pt; line-height: 16.8667px; font-family: Arial, sans-serif;\">Goal attainment</span>","placeholder":"Enter goal attainment","className":"form-control","name":"goal_attainment","access":false,"subtype":"textarea"},{"type":"textarea","required":false,"label":"Additional Feature","placeholder":"Enter additional Feature","className":"form-control","name":"additional_feature","access":false,"subtype":"textarea"},{"type":"radio-group","required":false,"label":"Participant Agreement","inline":false,"name":"participant_agreement","access":false,"other":false,"values":[{"label":"Yes","value":"option-1","selected":false},{"label":"No","value":"option-2","selected":false}]},{"type":"text","required":false,"label":"Agreement Detail","placeholder":"Enter participant agreement detail","className":"form-control","name":"agreement_detail","access":false,"subtype":"text"}]';

        FormField::create([
          'form_heading_id' => $form->id,
          'form_field' => $form_fields4
      ]);

      //
        $form = FormHeading::create([
            'form_heading' => 'Details of Assistive Technology Assessor',
            'form_id' => $form_title->id,
            'section_html'=>$section5
        ]);

        $form_fields5 = '[{"type":"checkbox-group","required":false,"label":"Meet NDIA expectations","toggle":false,"inline":false,"name":"NDIA_expectations","access":false,"other":false,"values":[{"label":"Option 1","value":"option-1","selected":true}]},{"type":"checkbox-group","required":false,"label":"Providing Appropriate Evidence","toggle":false,"inline":false,"name":"appropraite_evidence","access":false,"other":false,"values":[{"label":"Option 1","value":"option-1","selected":true}]},{"type":"checkbox-group","required":false,"label":"NDIA will rely on my Professional advice","toggle":false,"inline":false,"name":"professional_advice","access":false,"other":false,"values":[{"label":"Option 1","value":"option-1","selected":true}]},{"type":"checkbox-group","required":false,"label":"Treating Multi-Disciplinary Team","toggle":false,"inline":false,"name":"multi-disciplinary","access":false,"other":false,"values":[{"label":"Option 1","value":"option-1","selected":true}]},{"type":"text","required":false,"label":"Name","placeholder":"Enter Assessor’s  Name","className":"form-control","name":"assessors_name","access":false,"subtype":"text"},{"type":"text","required":false,"label":"NDIS Registration Number","placeholder":"Enter NDIS  Provider Registration number","className":"form-control","name":"pro_reg_number","access":false,"subtype":"text"},{"type":"text","required":false,"label":"Phone","placeholder":"Enter Assessor’s  Phone number","className":"form-control","name":"assessors_phone_num","access":false,"subtype":"text"},{"type":"text","required":false,"label":"Email","placeholder":"Enter Assessor’s  Email","className":"form-control","name":"assessors_email","access":false,"subtype":"text"},{"type":"text","required":false,"label":"Signature","placeholder":"Enter Assessor’s  Signature","className":"form-control","name":"assessors_signature","access":false,"subtype":"text"},{"type":"text","required":false,"label":"Qualification","placeholder":"Enter Assessor’s  Qualification","className":"form-control","name":"assessors_qualification","access":false,"subtype":"text"},{"type":"text","required":false,"label":"Date of Assessment","placeholder":"Enter Assessor’s  Date of Assessment","className":"form-control","name":"date_of_assessment","access":false,"subtype":"text"},{"type":"text","required":false,"label":"Date of Report","placeholder":"Enter Assessor’s  Date of Report","className":"form-control","name":"date_of_report","access":false,"subtype":"text"}]';

        FormField::create([
          'form_heading_id' => $form->id,
          'form_field' => $form_fields5
      ]);

      //
        $form = FormHeading::create([
            'form_heading' => 'Consent to Collect and Share Your Information – Provider AT Assessment and Quotation(s)',
            'form_id' => $form_title->id,
            'section_html'=>$section6
        ]);

        $form_fields6 = '[{"type":"radio-group","required":false,"label":"Are you consent","inline":false,"name":"consent_decision","access":false,"other":false,"values":[{"label":"Yes, I consent","value":"option-1","selected":false},{"label":"No, I do not consent","value":"option-2","selected":false}]},{"type":"checkbox-group","required":false,"label":"I understand that i am giving consent to the NDIA to do things with my information set out in this section","toggle":false,"inline":false,"name":"consent_declaration1","access":false,"other":false,"values":[{"label":"Yes","value":"option-1","selected":true},{"label":"No","value":"","selected":false}]},{"type":"checkbox-group","required":false,"label":"<span lang=\"EN-AU\" style=\"color: rgb(0, 0, 0); font-size: 11pt; line-height: 16.8667px; font-family: Arial, sans-serif;\">I understand that I can access the NDIA’s Privacy Notice and Privacy Policy</span><span style=\"color: rgb(0, 0, 0); font-size: medium;\"></span>","toggle":false,"inline":false,"name":"consent_declaration2","access":false,"other":false,"values":[{"label":"Option 1","value":"option-1","selected":true},{"label":"No","value":"","selected":true}]},{"type":"text","required":false,"label":"Date","placeholder":"Enter Date ","className":"form-control","name":"quotation_date","access":false,"subtype":"text"},{"type":"text","required":false,"label":"Full name","placeholder":"Enter Full Name","className":"form-control","name":"quotation_fullname","access":false,"subtype":"text"},{"type":"text","required":false,"label":"Date","placeholder":"Enter Date of Form Signing","className":"form-control","name":"form_signning_date","access":false,"subtype":"text"},{"type":"text","required":false,"label":"Full Person Name","placeholder":"Enter full name of Person completing this form","className":"form-control","name":"fullname_formComplition","access":false,"subtype":"text"},{"type":"text","required":false,"label":"Relationship to participant","placeholder":"Enter relation to participant to become an NDIS participant","className":"form-control","name":"person_relationship","access":false,"subtype":"text"}]';

        FormField::create([
            'form_heading_id' => $form->id ,
            'form_field' => $form_fields6
        ]);
        // $form = FormHeading::create([
        //     'form_heading' => 'Plan Management Details',
        //     'form_id' => '3'
        // ]);
    }
}
