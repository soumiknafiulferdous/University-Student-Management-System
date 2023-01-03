<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('student.student_login');
});


Route::get('/backend', function () {
    return view('admin.admin_login');
});
///student and admin
Route::get('/admin_logout','AdminController@logout');

Route::post('/admindashboard','AdminController@admindash');
Route::get('/admin_dashboard','AdminController@admin_desh');
Route::get('/all_student','AdminController@all_stu');
Route::get('/add_student','AdminController@add_stu');
Route::get('/tution_fee','AdminController@tuti_fee');
Route::get('/result','AdminController@result');
Route::get('/cse_stu','AdminController@cse');
Route::get('/eee_stu','AdminController@eee');
Route::get('/civil_stu','AdminController@civil');
Route::get('/bba_stu','AdminController@bba');
Route::get('/mba_stu','AdminController@mba');
Route::get('/view_profile','AdminController@profile');
Route::get('/setting','AdminController@setting');
Route::post('/addstudent','AdminController@addstudent');
Route::get('/student_delete/{student_id}','AdminController@students_delete');
Route::get('/student_view/{student_id}','AdminController@studentsview');

Route::get('/student_edit/{student_id}','AdminController@studentsedit');
Route::post('/student_update/{student_id}','AdminController@studentupdate');
//teacher=============================================================
Route::get('/add_teacher','TeacherController@teacher_add');
Route::post('/addteacher','TeacherController@teacheradd');
Route::get('/all_teacher','TeacherController@teacherall');
Route::get('/teacher_view/{teacher_id}','TeacherController@teacherview');
Route::get('/teacher_delete/{teacher_id}','TeacherController@teacherdelete');
Route::get('/teacher_edit/{teacher_id}','TeacherController@teacheredit');
Route::post('/teacher_update/{teacher_id}','TeacherController@teacherupdate');

//student  part===============================
Route::post('/stuentlogin','StudentController@student_login');
Route::get('/student_dashboard','StudentController@studentdashboard');
Route::get('/student_logout','StudentController@studentlogout');
Route::get('/about_profile','StudentController@aboutprofile');



Route::get('/student_setting','StudentController@studentsetting');
Route::get('/student_profile','StudentController@studentprofile');

Route::post('student_own_update','StudentController@studentownupdate');
