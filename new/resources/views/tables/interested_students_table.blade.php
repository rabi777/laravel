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
                            <i class="fa fa-align-justify"></i> Interested Students Table
                        </div>
                        <div class="card-body">
                            @if(session()->has('msg'))
                                <div class="alert alert-success"> {{session()->get('msg')}}</div>
                            @endif
                            <table class="table table-bordered table-striped table-sm">
                                <thead>
                                    <tr class="text-center">
                                        <th>Name</th>
                                        <th>Course Name</th>
                                        <th>Institute</th>
                                        <th>Ocupation</th>
                                        <th>Address</th>
                                        <th>phone Number</th>
                                        <th class="text-center">Action</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($std as $student)
                                    <tr>
                                        <td>{{$student->name}}</td>
                                        <td>{{$student->course_name}}</td>
                                        <td>{{$student->institute}}</td>
                                        <td>{{$student->ocupation}}</td>
                                        <td>{{$student->address}}</td>
                                        <td>{{$student->phone_no}}</td>

                                        <td class="text-center">
                                            <a href="{{URL::to("/forms/add-student",$student->id)}}"><button type="button" class="btn btn-success">Add</button></a>
                                        </td>
                                        <td class="text-center">
                                            <form action="{{URL::to("/forms/interested-students/".$student->id)}}" method="post">
                                            {{csrf_field()}}
                                            {{method_field('DELETE')}}
                                           
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            
                                        </form></td>
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