@extends('layout')
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
                          <h2 class="card-title">Add Student</h2><br>
                          <form class="forms-sample" method="post" action="{{URL::to('addstudent')}}">

                          {{ csrf_field() }}
                              <div class="form-group">
                                  <label for="exampleInputEmail1">Full Name</label>
                                  <input type="text" name="student_name" class="form-control p-input" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name" required="">
                                  
                              </div>

                                <div class="form-group">
                                  <label for="exampleInputEmail1">Student ID</label>
                                  <input type="text" name="student_roll" class="form-control p-input" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Student ID" required="">
                                  
                              </div>

                                 <div class="form-group">
                                  <label for="exampleInputEmail1">Father's Name</label>
                                  <input type="text" name="student_fathername" class="form-control p-input" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Father's Name" required="">
                                  
                              </div>

                                  <div class="form-group">
                                  <label for="exampleInputEmail1">Mother's Name</label>
                                  <input type="text" name="student_mothername" class="form-control p-input" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Mother's Name" required="">
                                  
                              </div>

                               <div class="form-group">
                                  <label for="exampleInputEmail1">Email Address</label>
                                  <input type="text" name="student_email" class="form-control p-input" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Email Address" required="">
                                  
                              </div>

                                <div class="form-group">
                                  <label for="exampleInputEmail1">Phone No.</label>
                                  <input type="text" name="student_phone" name="student_email" class="form-control p-input" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Phone No." required="">
                                  
                              </div>

                          


                           
                              <div class="form-group">
                                  <label for="exampleInputPassword1">Password</label>
                                  <input type="password" name="student_pass" class="form-control p-input" id="exampleInputPassword1" placeholder="Enter Password" required="">
                              </div>
                               <div class="form-group">
                                  <label for="exampleInputEmail1">Select Department</label>
                                  <select class="form-control p-input" name="student_department" required="">
                                  	<option value="CSE">CSE</option>
                                  	<option value="EEE">EEE</option>
                                  	<option value="Civil">Civil</option>
                                  	<option value="BBA">BBA</option>
                                  	<option value="MBA">MBA</option>

                                  </select>
                                  
                              </div>

                               <div class="form-group">
                                  <label for="exampleInputEmail1">Date of Admission</label>
                                  <input type="date" name="student_admissionyear" name="student_email" class="form-control p-input" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Admission year" required="">
                                  
                              </div>
                              <br>
                              
                              <button type="submit" class="btn btn-success btn-block">Submit</button>
                          </form>
                      </div>
                  </div>
              </div>



@endsection