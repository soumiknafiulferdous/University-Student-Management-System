@extends('layout')
@section('content')

      
<div class="col-sm-6 col-md-3 grid-margin">
              <div class="card">
                <div class="card-body">
                  @php
                   $student = DB::table('student_tbl')->count('student_id');

                  @endphp
                  <h2 class="card-title">Total Registered Students</h2>
                  <p>{{$student}}</p>
                </div>
                <div class="dashboard-chart-card-container">
                  <div id="" class="card-float-chart">
                    
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-3 grid-margin">
              <div class="card">
                <div class="card-body">
               @php
                   $teacher = DB::table('teacher_tbl')->count('teacher_id');

                  @endphp
                  <h2 class="card-title">Total Registered Teachers</h2>
                  <p>{{$teacher}}</p>
                </div>
                <div class="dashboard-chart-card-container">
                  <div id="" class="card-float-chart"></div>
                </div>
              </div>
            </div>



@endsection;