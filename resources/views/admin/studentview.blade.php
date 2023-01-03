@extends('layout')
@section('content')

    <div class="content-wrapper">
          <h1 class="page-title">{{$manage_student_view->student_name}}</h1>
         
          <div class="row user-profile">
            <div class="col-lg-4 side-left">
              <div class="card mb-4">
                
                <div class="card-body avatar">
                  <h2 class="card-title">Academic Information</h2><br>
                  
                  <label>Department:</label><br>
                  <p class="designation">@if($manage_student_view->student_department=='CSE')
                            <span>{{'CSE'}}</span>
                            @elseif($manage_student_view->student_department=='EEE')
                            <span>{{'EEE'}}</span>
                            @elseif($manage_student_view->student_department=='Civil')
                            <span>{{'civil'}}</span>
                            @elseif($manage_student_view->student_department=='BBA')
                            <span>{{'BBA'}}</span>
                            @elseif($manage_student_view->student_department=='MBA')
                            <span>{{'MBA'}}</span>
                            @else
                            <span>{{'Not Found'}}</span>
                            @endif</p>

                  <label>Student ID:</label><br>
                  <p class="designation">{{$manage_student_view->student_roll}}</p>
                  
                                    <label>Date of Admission:</label><br>
                  <p class="designation">{{$manage_student_view->student_admissionyear}}</p>
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
                  <p class="designation">{{$manage_student_view->student_fathername}}</p>
                  <label>Mother's Name:</label><br>
                  <p class="designation">{{$manage_student_view->student_mothername}}</p>
                  <label>Email Address:</label><br>

                  <a class="email" href="#">{{$manage_student_view->student_email}}</a><br>
                  <label>Phone Number:</label><br>
                  <a class="number" href="#">{{$manage_student_view->student_phone}}</a>

                </div>
              </div>
              
                </div>
              </div>
              
                </div>
              



              
@endsection