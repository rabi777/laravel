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
                                        <th>Email</th>
                                        <th>Course Name</th>
                                        <th>Phone No</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($std as $student)
                                        <tr>
                                            <td>{{$student->name}}</td>
                                            <td>{{$student->email}}</td>
                                            <td>{{$student->course_name}}</td>
                                            <td>{{$student->phone_no}}</td>
                                            <td>
                                            <a href="{{URL::to("/forms/register-students/".$student->id)}}" class="pull-left"><button type="button" class="btn btn-info">View</button></a>
                                           
                                            <a href="{{URL::to("/forms/register-students/".$student->id."/edit")}}" class="pull-right"><button type="button" class="btn btn-success">Edit</button></a></td>
                                        </tr>
                                    @endforeach
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