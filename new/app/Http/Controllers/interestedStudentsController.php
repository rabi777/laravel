<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\interstedStudent;
use App\manageCourse;

class interestedStudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return redirect('/forms/interested-students/create');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $course = manageCourse::all();
        return view('forms.interested_students',compact('course'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $std = new interstedStudent();
        $this->validate($request ,[
            'name'=>'required:intersted_students|max:255',
            'Phone_no'=>'unique:intersted_students',
            'ocupation'=>'required',
            'course_name'=>'required',
            'address'=>'required',
            'institute'=>'required',
        ]);
        $std->name = $request->name;
        $std->Phone_no = $request->Phone_no;
        $std->ocupation = $request->ocupation;
        $std->course_name = $request->course_name;
        $std->address = $request->address;
        $std->institute = $request->institute;
        $std->save();
        return redirect('/tables/interested-students');
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
        return view('errors.404');
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
        return view('errors.404');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $std = interstedStudent::find($id);
        $std->delete();
        session()->flash('msg','Deleted Sussessfully');
        return redirect('/tables/interested-students');
    }
}
