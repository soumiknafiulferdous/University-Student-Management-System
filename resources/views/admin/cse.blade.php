@extends('layout')
@section('content')

   @extends('layout')
@section('content')



          <div class="card">
            <div class="card-body">
              <h2 class="card-title">Data table</h2>
              <div class="row">
                <div class="col-12">
                  <table id="order-listing" class="table table-striped" style="width:100%;">
                    <thead>
                      <tr>
                          <th>Name</th>
                          <th>Roll</th>
                          <th>Father Name</th>
                          <th>Mother Name</th>
                          <th>Email</th>
                          <th>Phone</th>
                          <th>Subject</th>
                          <th>admission Year</th>
                          <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    	@foreach($cse_student_info as $v_student)
                      <tr>
                          <td>{{($v_student->student_name)}}</td>
                          <td>{{($v_student->student_roll)}}</td>
                          <td>{{($v_student->student_fathername)}}</td>
                          <td>{{($v_student->student_mothername)}}</td>
                          <td>{{($v_student->student_email)}}</td>
                          <td>{{($v_student->student_phone)}}</td>
                          <td>
                          	@if($v_student->student_department=='CSE')
                          	<span>{{'CSE'}}</span>
                          	@elseif($v_student->student_department=='EEE')
                          	<span>{{'EEE'}}</span>
                          	@elseif($v_student->student_department=='Civil')
                          	<span>{{'civil'}}</span>
                          	@elseif($v_student->student_department=='BBA')
                          	<span>{{'BBA'}}</span>
                          	@elseif($v_student->student_department=='MBA')
                          	<span>{{'MBA'}}</span>
                          	@else
                          	<span>{{'Not Found'}}</span>
                          	@endif
                          </td>
                          <td>{{($v_student->student_admissionyear)}}</td>
                          <td>
                             <a href="{{URL::to('student_view/'.$v_student->student_id)}}"><button class="btn btn-outline-primary" id="delete">View</button></a>
                            

                            <a href="{{URL::to('student_edit/'.$v_student->student_id)}}"><button class="btn btn-outline-primary">Edit</button></a>

                            <a href="{{URL::to('student_delete/'.$v_student->student_id)}}"><button class="btn btn-outline-primary" id="delete">Delete</button></a>
                          </td>
                          
                      </tr>
                  @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        


@endsection

@endsection