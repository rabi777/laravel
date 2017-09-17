@extends('layouts.app')
@section('content')			
        <!-- Main content -->
	<main class="main">
	<div class="container-fluid">
    	<div class="animated fadeIn">
			<div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <i class="fa fa-align-justify"></i> ITSD Students Table
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table-striped table-sm">
                                <thead>
                                    <h5><strong>Student Information</strong></h5>
                                    <tr>
                                        <th>Name</th>
                                        <th>Father's Name</th>
                                        <th>Mother's Name</th>
                                        <th>Id No</th>
                                        <th>Course Name</th>
                                        <th>Date of birth</th>
                                        <th>Phone No</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>{{$student->name}}</td>
                                        <td>{{$student->father_name}}</td>
                                        <td>{{$student->mother_name}}</td>
                                        <td>{{$student->id_no}}</td>
                                        <td>{{$student->course_name}}</td>
                                        <td>{{$student->date_of_birth}}</td>
                                        <td>{{$student->phone_no}}</td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr>
                            <table class="table table-bordered table-striped table-sm">
                                <thead>
                                    <tr>
                                        <th>Permanent Address</th>
                                        <th>Current Address</th>
                                        <th>Institute</th>
                                        <th>Academic Qualifucation</th>
                                        <th>Skill</th>
                                        <th>Machine</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>{{$student->permanent_address}}</td>
                                        <td>{{$student->current_address}}</td>
                                        <td>{{$student->institute}}</td>
                                        <td>{{$student->academic_qualification}}</td>
                                        <td>{{$student->skill}}</td>
                                        <td>{{$student->machine}}</td>
                                        <td>
                                        <a href="{{URL::to("/forms/register-students/".$student->id."/edit")}}"><button type="button" class="btn btn-success">Edit</button></a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!--/.col-->
            </div>
            <!--/.row-->
        </div>

    </div>
    <!-- /.conainer-fluid -->
</main>
 @endsection