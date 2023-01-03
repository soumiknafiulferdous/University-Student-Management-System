@extends('layout')
@section('content')



          <div class="card">
            <div class="card-body">


                                    <p class="alert-success">
                      		<?php
                           $data = Session::get('message');
                        if ($data) {
                        	echo $data;
                            Session::put('data',null);
                            session()->forget('message');
                          session()->flush();
                        }
                      		?>
                      	</p>
                        
              <h2 class="card-title">Teacher Table</h2>


                  
              <div class="row">
                <div class="col-12">

                  
                  <table id="order-listing" class="table table-striped" style="width:100%;">
                    <thead>
                      <tr>
                          <th>Name</th>
                          <th>Designation</th>
                          <th>Address</th>
                          <th>Phone</th>
                          <th>Email</th>
                          <th>Department</th>
                          <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    	@foreach($teacherview as $v_teacher)
                      <tr>
                          <td>{{$v_teacher->teacher_name}}</td>
                          <td>{{$v_teacher->teacher_designation}}</td>
                          <td>{{$v_teacher->teacher_address}}</td>
                          <td>{{$v_teacher->teacher_phone}}</td>
                          <td>{{$v_teacher->teacher_email}}</td>
                          <td>{{$v_teacher->teacher_departmentstring}}</td>
                          
                        
                       <td>
                           <a href="{{('teacher_view/'.$v_teacher->teacher_id)}}"><button class="btn btn-outline-primary" id="delete">View</button></a>
                            

                            <a href="{{('teacher_edit/'.$v_teacher->teacher_id)}}"><button class="btn btn-outline-primary">Edit</button></a>

                            <a href="{{('teacher_delete/'.$v_teacher->teacher_id)}}"><button class="btn btn-outline-primary" id="delete">Delete</button></a>
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