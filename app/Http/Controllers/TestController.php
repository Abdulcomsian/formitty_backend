<?php

namespace App\Http\Controllers;

use App\Models\FormData;
use App\Models\UserFormHeading;
use Illuminate\Http\Request;
use PhpOffice\PhpWord\IOFactory;
use PhpOffice\PhpWord\PhpWord;

use PhpOffice\PhpWord\Element\Section;
use PhpOffice\PhpWord\Element\TextRun;
use PhpOffice\PhpWord\Element\Text;
use PhpOffice\PhpWord\Element\Link;
use PhpOffice\PhpWord\Element\Image;
use PhpOffice\PhpWord\Element\ListItem;
use PhpOffice\PhpWord\Style\Table;
use PhpOffice\PhpWord\Style\Cell;
use PhpOffice\PhpWord\Style\Font;
use File;

class TestController extends Controller
{
    //create crud form  for user model with SOLID principles
    public function index()
    {
        return view('user.create');
    }

    //create user blade page
    public function create()
    {
        return view('user.create');
    }

    //store user data in database
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:120',
            'email' => 'required|unique:users|max:120',
            'password' => 'required|min:8',
            'state' => 'required',
            'address' => 'required',
        ]);
        $user = User::create($validatedData);
        return redirect('/user')->with('success', 'User is successfully saved');
    }

    //show all user data
    public function show()
    {
        $users = User::all();
        return view('user.show', compact('users'));
    }

    //edit user data
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('user.edit', compact('user'));
    }

    //update user date with validations
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:120',
            'email' => 'required|unique:users|max:120',
            'password' => 'required|min:8',
            'state' => 'required',
            'address' => 'required',
        ]);
        User::whereId($id)->update($validatedData);//update user data one by one
        return redirect('/user')->with('success', 'User is successfully updated');
    }

    //delete user data
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect('/user')->with('success', 'User is successfully deleted');
    }

    public function test()
    {
        $phpWord = new \PhpOffice\PhpWord\PhpWord();


        $formHeadings = FormHeading::with(['formData' => function ($query) {
            $query->where('user_id', 2)->orderBy('order_id', 'asc');
        }])->get();

        dd($formHeadings);

        /* $return = [];
         $return_array = ['form_name' => $forms[0]->formHeading->form->name];

         foreach($groupedForms as $forms){
             $form_heading = $forms[0]->formHeading;
             if (!is_null($form_heading)) {
                 $form = $form_heading->form;
                 $return[] = [
                     'id' => $form_heading->id,
                     'heading_name' => $form_heading->form_heading,
                     'order_id' => $forms[0]->order_id,
                     'user_data' => $forms->map(function ($data) {
                         return [
                             'id' => $data->id,
                             'form_heading_id' => $data->form_heading_id,
                             'name' => $data->name,
                             'value' => $data->value,
                         ];
                     }),
                 ];
             }
         }*/

        $return_array['form_headings'] = collect($return)->sortBy('order_id')->all();

        foreach ($return_array['form_headings'] as $form_heading) {
            dd($form_heading['user_data'][0]['value']);
            echo "<h1>" . $form_heading['order_id'] . ".   " . $form_heading['heading_name'] . "</h1><br>";
            foreach ($form_heading['user_data'] as $user_data) {
                echo "<h4>" . $user_data['name'] . "</h4>    <p>" . $user_data['value'] . "</p><br>";
            }
        }


        //print word documents

        foreach ($return_array['form_headings'] as $form_heading) {
            $section = $phpWord->addSection();
            $table = $section->addTable();
            $table->addRow();
            $table->addCell(3000)->addText('Column 1');
            $table->addCell(1750)->addText('Column 2');
            $table->addCell(3000)->addText('Full Name');
            $table->addCell(1750)->addText($date_of);
            $section->addText($form_heading['order_id'] . '. ' . $form_heading['heading_name'], ['size' => 14, 'bold' => true]);

            foreach ($form_heading['user_data'] as $user_data) {
                $section->addText($user_data['name'], ['size' => 12, 'bold' => true]);
                $section->addText($user_data['value'], ['size' => 12]);
            }
        }

        $objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');
        $objWriter->save('form_data3.docx');

        /*  $fileName = "hello_world.docx";

          $phpWord->save($fileName, 'Word2007');s
          return response()->download($fileName, $fileName, [
              'Content-Type' => 'application/vnd.openxmlformats-officedocument.wordprocessingml.document',
          ])->deleteFileAfterSend(true);*/

//        $return_array['form_headings'] = $return;
//
//
//        foreach($return_array['form_headings'] as $form_heading){
////            dd($form_heading['user_data']);
//            echo "<h1>".$form_heading['heading_name']."</h1><br>";
//            foreach($form_heading['user_data'] as $user_data){
//                echo "<h4>".$user_data['name']."</h4>    <p>".$user_data['value']."</p><br>";
//            }
////            dd($form_heading['heading_name']);
//        }
//         dd($return_array['form_headings']);
//
//        foreach($groupedForms as $forms){
//            foreach($forms as $form){
//              echo $form->formHeading->form_heading.'<br>';
//            }
//            /*print_r($forms->formHeading->form_heading);
//            foreach($forms->formHeading as $form_heading){
//                dd($form_heading);
//            }*/
//        }


        /*$phpword = new \PhpOffice\PhpWord\PhpWord();
        $section = $phpword->addSection();

        $section->addText("Hello World!");
        $fileName = "hello_world.docx";

        $phpword->save($fileName, 'Word2007');


        // Download the file
        return response()->download($fileName, $fileName, [
            'Content-Type' => 'application/vnd.openxmlformats-officedocument.wordprocessingml.document',
        ])->deleteFileAfterSend(true);*/
    }

    public function test2()
    {
        $path = public_path('demo.xml');
        dd($path);
//        $xml = File::get($path);
        $xml = file_get_contents($path);
        $phpWord = IOFactory::load($xml, 'Word2007');
        $objWriter = IOFactory::createWriter($phpWord, 'Word2007');
        $objWriter->save("public/demo.docx");
    }

    public function test3()
    {
        $phpWord = new PhpWord();

        $forms = FormData::with(['formHeading', 'formHeading.form'])
            ->where('user_id', 2)
            ->get();

        $groupedForms = $forms->groupBy('form_heading_id');

        $sortedForms = $groupedForms->sortBy(function ($formData, $formHeadingId) {
            return UserFormHeading::where('user_id', 2)
                ->where('form_heading_id', $formHeadingId)
                ->value('order_id');
        });

        $section = $phpWord->addSection();
        // Define a font style for the form heading
        $fontFormHeading = new Font();
        $fontFormHeading->setBold(true)
            ->setSize(16);

        foreach ($sortedForms as $formHeadingId => $formData) {
            if ($formHeadingId == 1) {
                $formHeading = $formData->first()->formHeading->form_heading;
                $section->addText("Form Heading: $formHeading", $fontFormHeading);


                $cellStyle = ['size' => 14, 'color' => 'blue', 'bgColor' => 'red', 'borderSize' => 6,
                    'borderColor' => '006699', 'valign' => 'center', 'align' => 'center',];

                $leftCell = ['borderSize' => 6, 'borderColor' => '000000', 'bgColor' => 'blue'];
                $rightCell = ['borderSize' => 6, 'borderColor' => '000000'];
                $tableText = array('size' => 14, 'valign' => 'center', 'align' => 'center');
//                $section = $phpWord->addSection();
                $table = $section->addTable();
                $table->addRow();
                $table->addCell(4000, $leftCell)->addText('Name', $tableText);
                $table->addCell(1750, $rightCell)->addText('Value', $tableText);

// Add rows and cells to the table
                $table->addRow();
                $table->addCell(4000, $leftCell)->addText('Name', $tableText);
                $table->addCell(1750, $rightCell)->addText(fetchValue('name', $formData), $tableText);

                $table->addRow();
                $table->addCell(1750, $leftCell)->addText('Date of Birth', $tableText);
                $table->addCell(1750, $rightCell)->addText(fetchValue('date_of_birth', $formData), $tableText);

                $table->addRow();
                $table->addCell(1750, $leftCell)->addText('Address', $tableText);
                $table->addCell(1750, $rightCell)->addText(fetchValue('participant_address', $formData), $tableText);

            }
            if ($formHeadingId == 6) {
                $formHeading = $formData->first()->formHeading->form_heading;
                $orderId = UserFormHeading::where('user_id', 2)
                    ->where('form_heading_id', $formHeadingId)
                    ->value('order_id');
                $section->addText("Form Heading: $formHeading", $fontFormHeading);

                $text = "The assessment information provided in this form will be used by the NDIA to understand
                how the specified AT will assist" . fetchValue('name', $formData) . "the participant to pursue their goals and to assess whether it
                is reasonable and necessary for the NDIS to fund AT support.";

                $section->addText($text);
            }
        }

        $fileName = "form_data2.docx";
        $phpWord->save($fileName, "Word2007");
    }

    public function test4()
    {

        $phpWord = new PhpWord();

        $section = $phpWord->addSection();
        $table = $section->addTable();
        $table->addRow();
        $table->addCell(4000, ['borderSize' => 6, 'borderColor' => '000000', 'bgColor' => 'blue'])->addText('Name', array('bold' => true, 'size' => 14, 'valign' => 'center', 'align' => 'center'));
        $table->addCell(1750, ['borderSize' => 6, 'borderColor' => '000000', 'bgColor' => 'blue'])->addText('Value');

        $fileName = "table.docx";
        $phpWord->save($fileName, "Word2007");
    }

    public function test5()
    {
        $phpWord = new \PhpOffice\PhpWord\PhpWord();
        $forms = FormData::with(['formHeading', 'formHeading.form'])
            ->where('user_id', 2)
            ->get();

        $groupedForms = $forms->groupBy('form_heading_id');

        $sortedForms = $groupedForms->sortBy(function ($formData, $formHeadingId) {
            return UserFormHeading::where('user_id', 2)
                ->where('form_heading_id', $formHeadingId)
                ->value('order_id');
        });

        return view('users.sections.form1', compact('phpWord','sortedForms'));
    }

    public function submit(Request $request){
            dd($request->content);
    }


    public function con(){
        $result = extract_values('name-7-6');
        $name = $result[0];
        $heading_id = $result[1];
        $order_id = $result[2];
        dd($name,$heading_id,$order_id);
    }
}

