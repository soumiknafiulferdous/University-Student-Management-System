@extends('layout')
@section('content')

    <div class="content-wrapper">
          <h1 class="page-title">{{$teacher_views->teacher_name}}</h1>

         
          <div class="row user-profile">
            <div class="col-lg-4 side-left">
              <div class="card mb-4">
                
                <div class="card-body avatar">
                  <h2 class="card-title">Teacher Details</h2><br>
                 


                  <label>Teacher's Department:</label><br>
                   <p class="designation">{{$teacher_views->teacher_departmentstring}}</p>

                  <label>Teacher's Designation:</label><br>
                  <p class="designation">{{$teacher_views->teacher_designation}}</p>

                  <label>Present Address:</label><br>
                  <p class="designation">{{$teacher_views->teacher_address}}</p>

                  <label>Email Address:</label><br>
                  <a class="email" href="#">{{$teacher_views->teacher_email}}</a>

                  <label><br>Phone Number:</label><br>
                  <a class="number" href="#">{{$teacher_views->teacher_phone}}</a>




                   

                </div>
                
              </div>
              
            </div>
          </div>


     
        </div>


@endsection