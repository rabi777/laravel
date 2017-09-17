<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\registerStudent;
use App\manageCourse;

class registerStudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return redirect('/forms/register-students/create');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $course = manageCourse::all();
        return view('forms.register_student',compact('course'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $std = new registerStudent();
        $this->validate($request ,[
            'name'=>'required:register_students|max:255',
            'email'=>'required|unique:register_students',
            'father_name'=>'required',
            'mother_name'=>'required',
            'permanent_address'=>'required',
            'current_address'=>'required',
            'ocupation'=>'required',
            'institute'=>'required',
            'academic_qualification'=>'required',
            'date_of_birth'=>'required',
            'Phone_no'=>'unique:register_students',
            'id_no'=>'unique:register_students',
            'course_name'=>'required',
            'skill'=>'required',
            'machine'=>'required',
        ]);
        $std->name = $request->name;
        $std->email = $request->email;
        $std->father_name = $request->father_name;
        $std->mother_name = $request->mother_name;
        $std->permanent_address = $request->permanent_address;
        $std->current_address = $request->current_address;
        $std->ocupation = $request->ocupation;
        $std->institute = $request->institute;
        $std->academic_qualification = $request->academic_qualification;
        $std->date_of_birth = $request->date_of_birth;
        $std->phone_no = $request->phone_no;
        $std->id_no = $request->id_no;
        $std->course_name = $request->course_name;
        $std->skill = $request->skill;
        $std->machine = $request->machine;
        $std->save();
        return redirect('/tables/register-students');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $student = registerStudent::find($id);
        return view('tables.StudentInfo',compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $std = registerStudent::find($id);
        $course = manageCourse::all();
        return view('forms.register_student_edit',compact('std','course'));
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
        $std = registerStudent::find($id);
        $std->name = $request->name;
        $std->email = $request->email;
        $std->father_name = $request->father_name;
        $std->mother_name = $request->mother_name;
        $std->permanent_address = $request->permanent_address;
        $std->current_address = $request->current_address;
        $std->institute = $request->institute;
        $std->academic_qualification = $request->academic_qualification;
        $std->date_of_birth = $request->date_of_birth;
        $std->phone_no = $request->phone_no;
        $std->id_no = $request->id_no;
        $std->course_name = $request->course_name;
        $std->skill = $request->skill;
        $std->machine = $request->machine;
        $std->save();
        session()->flash('msg','Updated Successfully');
        return redirect('/tables/register-students');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
