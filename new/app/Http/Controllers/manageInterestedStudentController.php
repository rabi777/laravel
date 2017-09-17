<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\interstedStudent;

class manageInterestedStudentController extends Controller
{
    public function student(){
    	$std = interstedStudent::all();
    	return view('/tables/interested_students_table',compact('std'));
    }
}
