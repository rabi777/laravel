<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\registerStudent;

class manageStudentController extends Controller
{
    public function student(){
    	$std = registerStudent::all();
    	return view('/tables.register_student_table', compact('std'));
    }
}
