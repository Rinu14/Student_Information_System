<?php
use Illuminate\Support\Facades\Route;
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
    return view('welcome');
});

 //Route::get('students/create',function(){
   //  return view ('students');
 //});

// Route::get('/student_form',function(){
//     return view ('student_form');
// });

// Route::get('/student_index',function(){
//     return view('student.index');
// });
// Route::get('/student_create',function(){
//     return view('student.create');
// });
// Route::get('/student_show',function(){
//     return view('student.show');
// });
// Route::get('/student_edit',function(){
//     return view('student.edit');
// });

Route::resource('students','StudentController');
Route::resource('batches','BatchController');
Route::resource('college_infos','College_InfoController');
Route::resource('semesters','SemesterController');
Route::resource('education_infos','Education_InfoController');
Route::resource('faculties','FacultyController');
Route::resource('parent_infos','Parent_InfoController');


//Route::get('student','StudentController@index')
    //->name('student.index');

//Route::get('student','StudentController@store')
    //->name('student.store');
 
