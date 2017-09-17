<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\manageCourse;

class manageCourseController extends Controller
{
    public function course(){
    	$courses = manageCourse::all();
    	return view('/tables.course_table', compact('courses'));
    }
}
