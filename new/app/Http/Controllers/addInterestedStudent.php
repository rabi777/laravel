<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\manageCourse;
use App\interstedStudent;


class addInterestedStudent extends Controller
{
    public function create($id){
    	$course = manageCourse::all();
    	$student = interstedStudent::find($id);
    	return view('forms.addNewStudent',compact('id','course','student'));
    }
}
