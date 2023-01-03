@extends('student_layout')


@section('content')

    <div class="content-wrapper">
<div class="col-lg-4 side-left">
                          	<p class="alert-success">
                      		<?php
                           $data = Session::get('message');
                        if ($data) {
                        	echo $data;
                            Session::put('data',null);
                            session()->forget('message');
                          
                        }
                      		?>
                      	</p></div>
          <h1 class="page-title">{{$student_profile->student_name}}</h1>
         
          <div class="row user-profile">
            <div class="col-lg-4 side-left">
              <div class="card mb-4">
                
                <div class="card-body avatar">
                  <h2 class="card-title">Academic Information</h2><br>
                  
                  <label>Department:</label><br>
                  <p class="designation">@if($student_profile->student_department=='CSE')
                            <span>{{'CSE'}}</span>
                            @elseif($student_profile->student_department=='EEE')
                            <span>{{'EEE'}}</span>
                            @elseif($student_profile->student_department=='Civil')
                            <span>{{'civil'}}</span>
                            @elseif($student_profile->student_department=='BBA')
                            <span>{{'BBA'}}</span>
                            @elseif($student_profile->student_department=='MBA')
                            <span>{{'MBA'}}</span>
                            @else
                            <span>{{'Not Found'}}</span>
                            @endif</p>

                  <label>Student ID:</label><br>
                  <p class="designation">{{$student_profile->student_roll}}</p>
                  
                                    <label>Date of Admission:</label><br>
                  <p class="designation">{{$student_profile->student_admissionyear}}</p>
                </div>
              </div>
                  </div>
                </div>

          <div class="row user-profile">
            <div class="col-lg-4 side-left">
              <div class="card mb-4">
                
                <div class="card-body avatar">
                  <h2 class="card-title">Personal Details</h2><br>
                  
          

                  <label>Father's Name:</label><br>
                  <p class="designation">{{$student_profile->student_fathername}}</p>
                  <label>Mother's Name:</label><br>
                  <p class="designation">{{$student_profile->student_mothername}}</p>
                  <label>Email Address:</label><br>

                  <a class="email" href="#">{{$student_profile->student_email}}</a><br>
                  <label>Phone Number:</label><br>
                  <a class="number" href="#">{{$student_profile->student_phone}}</a>

                </div>
              </div>
              
                </div>
              </div>
              
                </div>
              



              
@endsection