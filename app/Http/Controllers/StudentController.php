<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use APP\Http\Requests;
use Illuminate\Support\Facades\Redirect;

use DB;
use Session;
session_start();
class StudentController extends Controller
{
    public function student_login(Request $request){
           $email = $request->student_email;
           $pass  = $request->student_pass;
           $result = DB::table('student_tbl')->where('student_email',$email)->where('student_pass',$pass)->first();

           // echo"<pre>";
           //   print_r($result);
           //  echo "</pre>";

        if ($result) {
           
             Session::put('student_email',$request->student_email);
             Session::put('student_pass',$request->student_pass);
           return Redirect::to('student_dashboard');

            }    

         else{
           Session::put('message','mail or password Invalid');
           return Redirect::to('/');
        }
}

 public function studentdashboard(){

 	return view('student.student_dashboard');
 }


  public function studentsetting(){
    $student_email=Session::get ('student_email');

  $student_des_view =  DB::table('student_tbl')->select('*')->where('student_email',$student_email)->first();

  
  $student_edit= view('student.student_setting')->with('student_edit',$student_des_view);

  return view('student_layout')->with('student_edit',$student_edit);

    
}



   public function studentprofile(){

$student_email=Session::get ('student_email');

  $student_profile =  DB::table('student_tbl')->select('*')
  ->where('student_email',$student_email)->first();

  
  $manage_student= view('student.student_view')
  ->with('student_profile',$student_profile);

  return view('student_layout')
  ->with('student_view',$manage_student);

   
}



 //student logout part here ================================

 public function studentlogout(){

      Session::put('student_email',null);
      Session::put('student_pass',null);
      return Redirect::to('/');

    }
 



public function studentownupdate(Request $request){
   
   $student_email=Session::get ('student_email');
      $data = array();

      $data ['student_name']=$request->student_name;
      $data ['student_phone']=$request->student_phone;
      $data ['student_pass']=$request->student_pass;

       DB::table('student_tbl')->where('student_email',$student_email)->update($data);
       Session::put('message','Student data updated successfully');
                         
            return redirect::to('/student_profile');
            
          

    }
 

       public function aboutprofile(){
      return view('student.about_profile');
    }

     }