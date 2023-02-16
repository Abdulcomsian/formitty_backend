<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Log;
use Illuminate\Http\Request;
use App\Models\FormField;
use App\Models\FormHeading;
use App\Models\Form;
use Illuminate\Support\Facades\Session;

class FormBuilderController extends Controller
{

    private $obj;

    public function __construct(Form $object)
    {
        $this->obj = $object;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $forms = Form::get();
        return view('admin.form_builder.index',['forms'=>$forms]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.form_builder.create');
    }

    public function createHeading($id)
    {
        return view('admin.form_builder.create',['form_id'=>$id]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $form_heading = new FormHeading();
        $form_heading->form_heading = $request->form_heading;
        $form_heading->form_id = $request->form_id;
        $form_heading->save();
        //store form fields individually
        $form_field = new FormField();
        $form_field->form_heading_id = $form_heading->id;
        $form_field->form_field = $request->form_fields;
        $form_field->save();
        return response()->json(['success'=>true], 200);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = FormHeading::find($id);
        $user->delete();
        Session::flash('success_message', 'Form successfully deleted!');
        return redirect()->route('form-builder.index');
    }

    public function DeleteSelectedLogs(Request $request)
    {
        $input = $request->all();
        $this->validate($request, [
            'forms' => 'required',

        ]);
        foreach ($input['forms'] as $index => $id) {
            $user = $this->obj->findOrFail($id);
            $user->delete();
        }
        Session::flash('success_message', 'Forms successfully deleted!');
        return redirect()->back();

    }

    public function logDetail(Request $request)
    {
        $form = $this->obj->findOrFail($request->input('id'));

        return view('admin.logs.single', ['title' => 'Log Detail', 'form' => $form]);
    }

    public function getFormFields($id){
        $forms = Form::where('id', $id)->with('form_headings.form_fields')->first();
        return view('admin.form_builder.form_field',['forms'=>$forms]);
    }

    public function formHeading($id){
        $form_headings = FormHeading::where('form_id',$id)->latest()->get();
        return view('admin.form_builder.form_heading',['form_id' => $id, 'form_headings' => $form_headings]);
    }
}
