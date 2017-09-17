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
                            <i class="fa fa-align-justify"></i> Course Table
                        </div>
                        @if(session()->has('msg'))
                            <div class="alert alert-success"> {{session()->get('msg')}}</div>
                        @endif
                        <div class="card-body">
                            <table class="table table-bordered table-striped table-sm">
                                <thead>
                                    <tr>
                                        <th>Course Name</th>
                                        <th>Teacher's Name</th>
                                        <th>Course Amount</th>
                                        <th>Details</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($courses as $course)
                                    <tr>
                                        <td>{{$course->course_name}}</td>
                                        <td>{{$course->teacher_name}}</td>
                                        <td>{{$course->course_amount}}</td>
                                        <td>
                                            <span class="badge badge-success">Active</span>
                                        </td>
                                        <td>
                                            <a href="{{URL::to("forms/course/".$course->id."/edit")}}"><span class="badge badge-success">Edit</span></a>
                                        </td>

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