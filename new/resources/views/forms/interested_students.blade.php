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
                            <strong>INTERESTED STUDENTS REGISTRATION FORM</strong>
                             <span class="pull-right">Date {{Date('Y-m-d')}}</span>
                        </div>
                        @include('errors.error');
                        <div class="card-body">
                            <form action="{{URL::to('/forms/interested-students')}}" method="post" class="form-horizontal">
                                {{csrf_field()}}
                                <div class="form-group row">
                                    <label class="col-md-2 form-control-label" for="hf-name">NAME</label>
                                    <div class="col-md-9">
                                        <input type="text" id="hf-Name" name="name" class="form-control" placeholder="Enter Name.." required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-2 form-control-label" for="hf-phone-no">PHONE NO</label>
                                    <div class="col-md-9">
                                        <input type="text" id="hf-mobile-no" name="Phone_no" class="form-control" placeholder="Enter Phone NO.." required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-2 form-control-label" for="hf-email">OCUPATION</label>
                                    <div class="col-md-9">
                                        <input type="text" id="hf-Ocupation" name="ocupation" class="form-control" placeholder="Enter Ocupation..">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-2 form-control-label" for="select">COURSE</label>
                                    <div class="col-md-9">
                                        <select id="select" name="course_name" class="form-control">
                                            <option>Select Course</option>
                                            @foreach($course as $courses)
                                                <option value="{{$courses->course_name}}">{{$courses->course_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-2 form-control-label" for="hf-email">ADDRESS</label>
                                    <div class="col-md-9">
                                        <input type="text" id="hf-Address" name="address" class="form-control" placeholder="Enter Address..">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-2 form-control-label" for="hf-email">INSTITUTE</label>
                                    <div class="col-md-9">
                                        <input type="text" id="hf-Institute" name="institute" class="form-control" placeholder="Enter Institute..">
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary pull-right"> Register</button>
                                    <a href="{{URL::to('/')}}"><button type="button" class="btn btn-secondary"></i> Cancel</button></a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection