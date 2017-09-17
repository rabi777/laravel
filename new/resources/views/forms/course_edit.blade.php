@extends('layouts.app')
@section('content')
<main class="main">

    <!-- Breadcrumb -->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item"><a href="#">Admin</a>
        </li>
        <li class="breadcrumb-item active">Dashboard</li>

        <!-- Breadcrumb Menu-->
        <li class="breadcrumb-menu d-md-down-none">
            <div class="btn-group" role="group" aria-label="Button group">
                <a class="btn" href="#"><i class="icon-speech"></i></a>
                <a class="btn" href="./"><i class="icon-graph"></i> &nbsp;Dashboard</a>
                <a class="btn" href="#"><i class="icon-settings"></i> &nbsp;Settings</a>
            </div>
        </li>
    </ol>
    <div class="container-fluid">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <div class="card">
                        <div class="card-header">
                            <strong>MANAGE COURSE</strong>

                        </div>
                        <div class="card-body">
                            <form action="{{URL::to("/forms/course",$course->id)}}" method="post" class="form-horizontal">
                                {{csrf_field()}}
                                {{method_field('PUT')}}
                                <div class="form-group row">
                                    <label class="col-md-3 form-control-label" for="hf-name">COURSE NAME</label>
                                    <div class="col-md-9">
                                        <input type="text" id="hf-Name" name="course" class="form-control" placeholder="Enter Course Name" value="{{$course->course_name}}" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 form-control-label" for="hf-name">TEACHER'S NAME</label>
                                    <div class="col-md-9">
                                        <input type="text" id="hf-Name" name="teacher_name" class="form-control" placeholder="Enter Teacher's Name" value="{{$course->teacher_name}}" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 form-control-label" for="hf-name">COURSE AMOUNT</label>
                                    <div class="col-md-9">
                                        <input type="text" id="hf-course-amount" name="course_amount" class="form-control" placeholder="Enter Course Fee" value="{{$course->course_amount}}" required>
                                    </div>
                                </div>
                             </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary pull-right"></i> Update</button>
                                <a href="{{URL::to('/')}}"><button type="button" class="btn btn-secondary"></i> Cancel</button></a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection