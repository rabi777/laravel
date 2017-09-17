<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\manageCourse;

class courseController extends Controller
{
    protected $id;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return redirect('/forms/course/create');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('forms.course');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $course = new manageCourse();
        $this->validate($request ,[
            'course_name'=>'required|unique:manage_courses|max:255',
            'teacher_name'=>'required',
            'course_amount'=>'required',
        ]);
        $course->course_name = $request->course_name;
        $course->teacher_name = $request->teacher_name;
        $course->course_amount = $request->course_amount;
        $course->save();
        return redirect('/tables/courses');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('errors.404');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $course = manageCourse::find($id);
        return view('forms/course_edit',compact('course'));
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
        $course = manageCourse::find($id);
        $course->course_name = $request->course;
        $course->teacher_name = $request->teacher_name;
        $course->course_amount = $request->course_amount;
        $course->save();
        session()->flash('msg','Updated Successfully');
        return redirect('/tables/courses');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return view('errors.404');
    }
}
