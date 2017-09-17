@extends('layouts.app')
@section('content')
<main class="main">
    <div class="container-fluid">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <div class="card">
                        <div class="card-header">
                            <strong>ITSD STUDENT REGISTRATION FORM</strong>
                             <span class="pull-right">Date {{Date('Y-m-d')}}</span>
                        </div>
                        @include('errors.error');
                        <div class="card-body">
                            <form action="{{URL::to('forms/register-students')}}" method="post" class="form-horizontal">
                                {{csrf_field()}}
                                <div class="form-group row">
                                    <label class="col-md-3 form-control-label" for="hf-name">NAME</label>
                                    <div class="col-md-9">
                                        <input type="text" id="hf-Name" name="name" class="form-control" placeholder="Enter Name..">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 form-control-label" for="hf-name">EMAIL</label>
                                    <div class="col-md-9">
                                        <input type="text" id="hf-Name" name="email" class="form-control" placeholder="Enter Email..">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 form-control-label" for="hf-name">FATHER'S NAME</label>
                                    <div class="col-md-9">
                                        <input type="text" id="hf-Name" name="father_name" class="form-control" placeholder="Enter Student Father's Name..">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 form-control-label" for="hf-name">MOTHER'S NAME</label>
                                    <div class="col-md-9">
                                        <input type="text" id="hf-Name" name="mother_name" class="form-control" placeholder="Enter Student Mother's Name..">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 form-control-label" for="hf-phone-no">PERMANENT ADDRESS</label>
                                    <div class="col-md-9">
                                        <input type="text" id="hf-mobile-no" name="permanent_address" class="form-control" placeholder="Enter Permanent Address..">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 form-control-label" for="hf-phone-no">CURRENT ADDRESS</label>
                                    <div class="col-md-9">
                                        <input type="text" id="hf-mobile-no" name="current_address" class="form-control" placeholder="Enter Current Address..">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 form-control-label" for="hf-email">OCUPATION</label>
                                    <div class="col-md-9">
                                        <input type="text" id="hf-Ocupation" name="ocupation" class="form-control" placeholder="Enter Ocupation..">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 form-control-label" for="hf-email">INSTITUTE NAME</label>
                                    <div class="col-md-9">
                                        <input type="text" id="hf-Institute" name="institute" class="form-control" placeholder="Enter Institute Name..">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 form-control-label" for="hf-email">ACADEMIC QUALIFICATION</label>
                                    <div class="col-md-9">
                                        <input type="text" id="hf-academic-qualification" name="academic_qualification" class="form-control" placeholder="Enter Academic Qualification..">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-3 form-control-label" for="hf-phone-no">DATE OF BIRTH</label>
                                    <div class="col-md-9">
                                        <input type="text" id="hf-date-of-birth" name="date_of_birth" class="form-control" placeholder="dd-mm-yyyy">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 form-control-label" for="hf-phone-no">PHONE NO</label>
                                    <div class="col-md-9">
                                        <input type="text" id="hf-mobile-no" name="phone_no" class="form-control" placeholder="Enter Phone No..">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 form-control-label" for="hf-phone-no">ID NO</label>
                                    <div class="col-md-9">
                                        <input type="text" id="hf-id-no" name="id_no" class="form-control" placeholder="Enter Id No..">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 form-control-label" for="select">COURSE</label>
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
                                    <label class="col-md-3 form-control-label" for="select">COMPUTER SKILL</label>
                                    <div class="col-md-9">
                                        <select id="select" name="skill" class="form-control">
                                            <option>Select Skill</option>
                                            <option value="computer basic">computer basic</option>
                                            <option value="bigginer">bigginer</option>
                                            <option value="none">none</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 form-control-label">HAVE YOU ANY</label>
                                    <div class="col-md-9">
                                        <label class="radio-inline" for="inline-radio1">
                                            <input type="radio" id="inline-radio1" name="machine" value="laptop">Laptop
                                        </label>
                                        <label class="radio-inline" for="inline-radio2">
                                            <input type="radio" id="inline-radio2" name="machine" value="desktop">Desktop
                                        </label>
                                        <label class="radio-inline" for="inline-radio3">
                                            <input type="radio" id="inline-radio3" name="machine" value="none">None
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary pull-right"></i> Register</button>
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