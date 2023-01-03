<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use APP\Http\Requests;
use Illuminate\Support\Facades\Redirect;

use DB;
use Session;
session_start();
class AdminController extends Controller
{

	public function admin_desh(){
		return view('admin.dashboard');
  }
  
  //admin login part
    public function admindash(Request $request){


    	     $email = $request->admin_user;
           $pass  = $request->admin_password;
           $result = DB::table('admin_tbl')->where('admin_email',$email)->where('admin_pass',$pass)->first();

           // echo"<pre>";
           //  print_r($result);
           // echo "</pre>";

       if ($result) {
           
            Session::put('admin_email',$request->admin_email);
            Session::put('admin_id',$request->admin_id);
           return Redirect::to('/admin_dashboard');

           }    

        else{
          Session::put('message','mail or password Invalid');
          return Redirect::to('/backend');
        }


    }

    //admin logout part 

    public function logout(){

      Session::put('admin_name',null);
      Session::put('admin_id',null);
      return Redirect::to('/backend');

    }

//all Student show...................................................
    public function all_stu(){

       $allstudent_info=DB::table('student_tbl')->get();

       $manage_student=view('admin.allstudent')->with('all_student_info',$allstudent_info);

      return view('layout')->with('admin.allstudent',$manage_student);
      //return view('admin.allstudent');
    }

    public function add_stu(){
      return view('admin.addstudent');
    }

    public function tuti_fee(){
      return view('admin.tutionfee');
    }

     public function result(){
      return view('admin.result');
    }

    //cse student show======================================
     public function cse(){
     $csestudent_info=DB::table('student_tbl')->where(['student_department'=>'CSE'])->get();

       $manage_student=view('admin.cse')->with('cse_student_info',$csestudent_info);

      return view('layout')->with('admin.cse',$manage_student);


    }
/// eee studen show==================================
     public function eee(){
      $eeestudent_info=DB::table('student_tbl')->where(['student_department'=>'EEE'])->get();

       $manage_student=view('admin.eee')->with('eee_student_info',$eeestudent_info);

      return view('layout')->with('admin.eee',$manage_student);
    }

    /// civil studen show=================================
     public function civil(){
      $civilstudent_info=DB::table('student_tbl')->where(['student_department'=>'Civil'])->get();

       $manage_student=view('admin.civil')->with('civil_student_info',$civilstudent_info);

      return view('layout')->with('admin.civil',$manage_student);
    }

     /// bba studen show======================================
     public function bba(){
      $bbastudent_info=DB::table('student_tbl')->where(['student_department'=>'BBA'])->get();

       $manage_student=view('admin.bba')->with('bba_student_info',$bbastudent_info);

      return view('layout')->with('admin.bba',$manage_student);
    }

    /// mba studen show======================================
     public function mba(){
      $mbastudent_info=DB::table('student_tbl')->where(['student_department'=>'MBA'])->get();

       $manage_student=view('admin.mba')->with('mba_student_info',$mbastudent_info);

      return view('layout')->with('admin.mba',$manage_student);
    }



     public function profile(){
      return view('admin.viewprofile');
    }

      public function setting(){
      return view('admin.setting');
    }
//save student=====================================================
    public function addstudent(Request $request){
      
       $data = array();
       $data['student_name']=$request->student_name;
       $data['student_roll']=$request->student_roll;
       $data['student_fathername']=$request->student_fathername;
       $data['student_mothername']=$request->student_mothername;
       $data['student_email']     =$request->student_email;
       $data['student_phone']     =$request->student_phone;
       $data['student_pass']      =$request->student_pass;
       $data['student_department']=$request->student_department;
       $data['student_admissionyear']=$request->student_admissionyear;

       DB::table('student_tbl')->insert($data);
       Session::put('message','Student added successfully');
       return Redirect::to('/all_student');
}

//student delete ======================================

public function students_delete($student_id){

   DB::table('student_tbl')->where('student_id',$student_id)->delete();
   return Redirect::to('/all_student');
}


//student view description ======================================

public function studentsview($student_id){
 $student_des_view =  DB::table('student_tbl')->select('*')->where('student_id',$student_id)->first();

   $student_view = view('admin.studentview')->with('manage_student_view',$student_des_view);

   return view('layout')->with('studentview',$student_view);
    
}


//student Edit ======================================

public function studentsedit($student_id){
  $student_des_view =  DB::table('student_tbl')->select('*')->where('student_id',$student_id)->first();

  
  $student_edit= view('admin.student_edit')->with('student_edit',$student_des_view);

  return view('layout')->with('student_edit',$student_edit);

    
}

//student Update ======================================

public function studentupdate(Request $request, $student_id){
   
   
      $data = array();
      $data ['student_name']=$request->student_name;
      $data ['student_roll']=$request->student_roll;
      $data ['student_fathername']=$request->student_fathername;
      $data ['student_mothername']=$request->student_mothername;
      $data ['student_email']=$request->student_email;
      $data ['student_phone']=$request->student_phone;
      $data ['student_pass']=$request->student_pass;

       DB::table('student_tbl')->where('student_id',$student_id)->update($data);
       Session::put('message','Student data updated successfully');
                         
            return redirect::to('/all_student');
            
          

    }
    


}



          
          

