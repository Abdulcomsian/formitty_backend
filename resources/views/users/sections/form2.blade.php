@php $phpWord->addParagraphStyle('Heading2', ['alignment' => 'center']); @endphp
@php $section = $phpWord->addSection(); @endphp
@dd(count($sortedForms))
@foreach ($sortedForms as $formHeadingId => $formData)
    @if ($formHeadingId == 1)
        @php

            $html .= <<<'EOT'

            <h1 style="font-weight: bold; background-color: brown; color: white; font-size: 20px; padding-top:15px;width: 100%">Notes for AT Assessors of Continence AT Supports</h1>
            <p style="font-weight: bold">There are specific templates available for the following types of AT:</p>
            <ul style="margin-bottom: 10pt">
                <li>General Assistive Technology Assessment </li>
                <li>Continence Assessment </li>
                <li>Prosthetics and Orthotics Assessment</li>
                <li>Vehicle Modifications Assessment</li>
                <li>Complex Home Modification Assessment</li>
            </ul>
            <p style="margin-bottom: 10px">The assessment information provided in this form will be used by the NDIA to understand how the specified AT will assist the participant to pursue their goals and to assess whether it is reasonable and necessary for the NDIS to fund AT support.</p>
            <p style="margin-bottom: 10px">Using this template is not mandatory. If a provider elects to provide information in another format, they must include all information described in this template. Information provided needs to include an outline of the functional impact of each feature being recommended. This should include how the AT will support capacity building, promote independence and impact alternative forms of support. </p>
            <p style="margin-bottom: 10px">The primary criteria NDIS delegates use when determining if a piece of equipment or modification is suitable for the NDIS to fund is section 34: reasonable and necessary supports of the <a href="http://phpword.readthedocs.io" style="text-decoration: underline; color: blue;">National Disability Insurance Scheme Act 2013 (NDIS Act; external) and section 34.</a></p>
            <p style="margin-bottom: 10px">Additional information on how the recommendation(s) will be considered in the context of specific supports can be found in the <a href="http://phpword.readthedocs.io" style="text-decoration: underline; color: blue;">NDIS Operational Guidelines available online</a> and the <a href="http://phpword.readthedocs.io" style="text-decoration: underline; color: blue;">NDIS (Supports for Participants) Rules 2013.</a></p>
            <p style="margin-bottom: 10px"><strong>AT Strategy:</strong> Supports will be provided in line with the NDIA’s AT Strategy that can be found at <a href="http://phpword.readthedocs.io" style="text-decoration: underline; color: blue;">Assistive Technology Strategy</a> and as outlined in <a href="http://phpword.readthedocs.io" style="text-decoration: underline; color: blue;">NDIS AT Complexity</a> document.</p>
            <p style="margin-bottom: 10px"><strong>Assistive Technology (AT) Assessor:</strong> An AT assessor is able to assess a participant's needs and situation and identify the most appropriate AT, they may be an AT Mentor, allied health practitioner, continence nurse, rehabilitation engineer or other suitably qualified practitioner. </p>
            <p style="margin-bottom: 10px">AT Assessors have obligations under the NDIS Provider Terms of Business, Quality and Safeguards Commission and their respective professional registration under Australian Health Practitioner Regulation Agency (AHPRA).</p>
            <p style="margin-bottom: 10px"><strong>Caution:</strong> AT Assessors must be aware of and observe the law with regard to AT that is likely to restrain a participant. <a href="http://phpword.readthedocs.io" style="text-decoration: underline; color: blue;"> National Disability Insurance Scheme (Restrictive Practices and Behaviour Support) Rules 2018</a> </p>
            <p style="margin-bottom: 10px">The NDIA expects AT assessors to consider all options for addressing the participant’s disability related functional limitations and pursuing goals, including non-AT supports.</p>
            <p style="margin-bottom: 10px"><strong>NDIS AT Levels 3 and 4 trials:</strong> Where the AT assessor and participant need to work with an AT supplier to trial and develop a specification for the AT support, reasonable supplier costs can be quoted, and if agreed, claimed against the participant’s plan (category ‘rental/trial’). Supplier specification/order details are required with this assessment to enable the NDIS to consider quotes/prices from the supplier.</p>
            <p style="margin-bottom: 10px">Quotations should be attached where applicable (items $1500 may be funded from the CORE consumables budget and do not require an assessment and quote). Quotations can include printouts of web orders and stock numbers from relevant State based equipment suppliers where relevant.</p>
            <p style="margin-bottom: 10px">AT assessors can keep up to date at <a href="http://phpword.readthedocs.io" style="text-decoration: underline; color: blue;">NDIS provider assistive technology</a>. Participants can keep up to date at <a href="http://phpword.readthedocs.io" style="text-decoration: underline; color: blue;">NDIS participant assistive technology</a>. </p>
            <br/>
            <h1 style="font-weight: bold; background-color: brown; color: white; font-size: 20px; padding-top:15px">Notes for navigating and editing this document </h1>
            <p style="font-weight: bold;">General Notes</p>
            <p style="margin-bottom: 10px">This document is protected so that only editable fields can be changed but additional rows in tables can be inserted as required. </p>
            <p style="margin-bottom: 10px">All editable fields have unlimited text entry, and the document will expand in page length when large amounts of text are entered.</p>
            <p style="margin-bottom: 10px">Spelling and grammar can be checked according to the word processor you are using. The document can be navigated with just the Tab key to encompass varying modes of navigation and levels of computer skills</p>
            <p style="font-weight: bold;">JAWS Specific Comments</p>
            <p style="margin-bottom: 10px">Ins + F1 will read document information including the general layout, header and footer information</p>
            <p style="margin-bottom: 10px">Ins + F6 will bring up a headings list allowing a JAWS user to jump to heading sections if desired</p>
            <p style="margin-bottom: 10px">Ins + F7 will bring a list of web links embedded in the document.</p>
            <p style="margin-bottom: 10px">Ins + Z will turn on quick navigation fields so a JAWS user can use say “H” to jump to the next heading for easy navigation.</p>
            <h1 style="font-weight: bold; background-color: brown; color: white; font-size: 20px; padding-top:15px margin-bottom: 15px">PART 1 – Participant and Plan Management Details</h1>
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
            </table>
            EOT;
        @endphp
    @endif
    @if ($formHeadingId == 6)
        @php
            $html = <<<'EOT'

            <p>Some well-formed HTML snippet needs to be used</p>
            <p>With for example <strong>some<sup>1</sup> <em>inline</em> formatting</strong><sub>1</sub></p>
            <p>A link to <a href="http://phpword.readthedocs.io/" style="text-decoration: underline">Read the docs</a></p>
            <p lang="he-IL" style="text-align: right; direction: rtl">היי, זה פסקה מימין לשמאל</p>
            <p style="margin-top: 240pt;">Unordered (bulleted) list:</p>
            <ul>
                <li>Item 1</li>
                <li>Item 2</li>
                <ul>
                    <li>Item 2.1</li>
                    <li>Item 2.1</li>
                </ul>
            </ul>
            <p style="margin-top: 240pt;">1.5 line height with first line text indent:</p>
            <p style="text-align: justify; text-indent: 70.9pt; line-height: 150%;">Lorem ipsum dolor sit amet, <strong>consectetur adipiscing elit</strong>, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <h2 style="align: center">Centered title</h2>
            <p style="margin-top: 240pt;">Ordered (numbered) list:</p>
            <ol>
                <li>
                    <p style="font-weight: bold;">List 1 item 1</p>
                </li>
                <li>List 1 item 2</li>
                <ol>
                    <li>sub list 1</li>
                    <li>sub list 2</li>
                </ol>
                <li>List 1 item 3</li>
            </ol>
            <p style="margin-top: 15px;">A second list, numbering should restart</p>
            <ol>
                <li>List 2 item 1</li>
                <li>List 2 item 2</li>
                <li>
                    <ol>
                        <li>sub list 1</li>
                        <li>sub list 2</li>
                    </ol>
                </li>
                <li>List 2 item 3</li>
                <ol>
                    <li>sub list 1, restarts with a</li>
                    <li>sub list 2</li>
                </ol>
            </ol>
            <p style="margin-top: 240pt;">List with formatted content:</p>
            <p style="margin-top: 240pt;">List with formatted content:</p>
            <ul>
                <li>Item 1: <strong>Bold Text</strong></li>
                <li>Item 2: <em>Italicized Text</em></li>
                <li>Item 3: <u>Underlined Text</u></li>
                <li>Item 4: <strike>Strikethrough Text</strike></li>
                <li>Item 5: <sup>Superscript</sup></li>
                <li>Item 6: <sub>Subscript</sub></li>
            </ul>
            EOT;
        @endphp
    @endif
@endforeach
@php
    \PhpOffice\PhpWord\Shared\Html::addHtml($section, $html, false, false);

    // Save file
    $fileName = "test9.docx";
    $objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');

    $objWriter->save($fileName);
@endphp
