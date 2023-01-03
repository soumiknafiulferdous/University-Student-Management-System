@extends('student_layout')
@section('content')


<div class="col-12 col-lg-6 grid-margin">
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

                          <h2 class="card-title">Update Your Profile</h2><br>
                          <form class="forms-sample" method="post" action="{{URL::to('/student_own_update')}}">

                          {{ csrf_field() }}
                              

                               <div class="form-group">
                                  <label for="exampleInputEmail1">Student Name</label>
                                  <input type="text" class="form-control p-input" id="exampleInputEmail1" aria-describedby="emailHelp" name="student_name" value="{{($student_edit->student_name)}}" />
                                  
                              </div>

                                <div class="form-group">
                                  <label for="exampleInputEmail1">Phone No.</label>
                                  <input type="text"   class="form-control p-input" id="exampleInputEmail1" aria-describedby="emailHelp" name="student_phone" value="{{($student_edit->student_phone)}}">
                                  
                              </div>

                          
                              
                           
                              <div class="form-group">
                                  <label for="exampleInputPassword1">Password</label>
                                  <input type="password"  class="form-control p-input" id="exampleInputPassword1" name="student_pass" value="{{($student_edit->student_pass)}}">
                              </div>
                              

                             
                              <br>
                              <button type="submit" class="btn btn-success btn-block">Update</button>
                          </form>
                      </div>
                  </div>
              </div>



@endsection