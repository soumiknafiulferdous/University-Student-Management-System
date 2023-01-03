@extends('layout')
@section('content')


<div class="col-12 col-lg-6 grid-margin">
                  <div class="card">
                      <div class="card-body">
                     
                      	
                          <h2 class="card-title">Add Teacher</h2><br>



                          <form class="forms-sample" method="post" action="{{URL::to('addteacher')}}">

                          {{ csrf_field() }}
                              <div class="form-group">
                                  <label for="exampleInputEmail1">Name</label>
                                  <input type="text"  name="teacher_name" class="form-control p-input" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name" required="" >
                                  
                              </div>



                                <div class="form-group">
                                  <label for="exampleInputEmail1">Desiganation</label>
                                  <select class="form-control p-input" id="exampleInputEmail1" aria-describedby="emailHelp" name="teacher_designation" required="">
                                  	<option value="Lecturer">Lecturer</option>
                                  	<option value="Assistant Professor">Assistant Professor</option>
                                  	<option value="Associate Professor">Associate Professor</option>
                                  	<option value="Professor">Professor</option>
                                  </select>
                                  
                              </div>

                                 <div class="form-group">
                                  <label for="exampleInputEmail1">Present Address</label>
                                  <input type="text"  class="form-control p-input" id="exampleInputEmail1" aria-describedby="emailHelp" name="teacher_address" placeholder="Enter Address" required="">
                                  
                              </div>

                                  <div class="form-group">
                                  <label for="exampleInputEmail1">Phone No.</label>
                                  <input type="text"  class="form-control p-input" id="exampleInputEmail1" aria-describedby="emailHelp" name="teacher_phone" placeholder="Enter Phone No." required="">
                                  
                              </div>

                               <div class="form-group">
                                  <label for="exampleInputEmail1">Email Address</label>
                                  <input type="text" class="form-control p-input" id="exampleInputEmail1" aria-describedby="emailHelp" name="teacher_email" placeholder="Enter Email Address" required=""/>
                                  
                              </div>

                               <div class="form-group">
                                  <label for="exampleInputEmail1">Select Department</label>
                                  <select class="form-control p-input" id="exampleInputEmail1" aria-describedby="emailHelp" name="teacher_departmentstring" required="">
                                  	<option value="CSE">CSE</option>
                                  	<option value="EEE">EEE</option>
                                  	<option value="Civil">Civil</option>
                                  	<option value="BBA">BBA</option>
                                  	<option value="MBA">MBA</option>

                                  </select>
                                  
                              </div>

                              <br>
                              <button type="submit" class="btn btn-success btn-block">Submit</button>
                          </form>
                      </div>
                  </div>
              </div>



@endsection