<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use APP\Http\Requests;
use Illuminate\Support\Facades\Redirect;

use DB;
use Session;
session_start();
class TeacherController extends Controller
{
   
  public function teacher_add(){
   
   return view('admin.add_teacher');
  }

//Teacher Add =========================================================
   public function teacheradd(Request $request){
   
   $data= array();
   $data['teacher_name']=$request->teacher_name;
   $data['teacher_designation']=$request->teacher_designation;
   $data['teacher_address']=$request->teacher_address;
   $data['teacher_phone']=$request->teacher_phone;
   $data['teacher_email']=$request->teacher_email;
   $data['teacher_departmentstring']=$request->teacher_departmentstring;

   DB::table('teacher_tbl')->insert($data);
            Session::put('message','Teacher added successfully');     

  return Redirect::to('/all_teacher');


  }
////all teacher view
  public function teacherall(){
      
      $teacher_view = DB::table('teacher_tbl')->get();

      $teacher_mange = view('admin.all_teacher')->with('teacherview',$teacher_view);

      return view('layout')->with('all_teacher',$teacher_mange);
  }

  //individual Teacher View 

  public function teacherview($teacher_id){
    
     $teacher_view = DB::table('teacher_tbl')->select('*')->where('teacher_id',$teacher_id)->first();

     $manage_teacher=view('admin.teacher_view')->with('teacher_views',$teacher_view);

     return view('layout')->with('teacher_view',$manage_teacher);

  }

  //teacher delete==================================== 
   public function teacherdelete($teacher_id){
     
      DB::table('teacher_tbl')->where('teacher_id',$teacher_id)->delete();

      return Redirect::to('all_teacher');

   }

 //teacher edit ====================================================
   public function teacheredit ($teacher_id){
   $teacher_edit = DB::table('teacher_tbl')->where('teacher_id',$teacher_id)->first();

   $teacher_edit_manage = view('admin.teacher_edit')->with('teacher_edts',$teacher_edit);

   return view('layout')->with('teacher_edit',$teacher_edit_manage);

   
}

//teacher update =====================================================

public function teacherupdate(Request $request,$teacher_id){

    $data= array();
   $data['teacher_name']=$request->teacher_name;
   $data['teacher_designation']=$request->teacher_designation;
   $data['teacher_address']=$request->teacher_address;
   $data['teacher_phone']=$request->teacher_phone;
   $data['teacher_email']=$request->teacher_email;



  DB::table('teacher_tbl')->where('teacher_id',$teacher_id)->update($data);
Session::put('message','Teacher data updated successfully'); 
  return Redirect::to('all_teacher');
  
}
}
