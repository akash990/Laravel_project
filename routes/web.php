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
    echo "index page";
});
Route::get('/t_registration/rules', 'T_RegistrationController@rules')->name('rules.index');
Route::get('/t_registration', 'T_RegistrationController@insert')->name('registration.index');
Route::post('/t_registration', 'T_RegistrationController@store');
Route::get('/t_login', 'T_LoginController@index')->name('login.index');
Route::post('/t_login', ['uses'=>'T_LoginController@verify']);
Route::get('/t_logout', ['as'=>'logout.index', 'uses'=>'T_logoutController@index']);


/*Route::group(['middleware'=>'sess'], function(){
	Route::get('/home', 'HomeController@index')->middleware('sess');
	Route::get('/home/edit/{id}', 'HomeController@edit')->middleware('sess');
	Route::post('/home/edit/{id}', 'HomeController@update')->middleware('sess');
	Route::get('/home/delete/{id}', 'HomeController@delete')->middleware('sess');
	Route::post('/home/delete/{id}', 'HomeController@destroy')->middleware('sess');
});*/

Route::middleware(['tsess'])->group(function(){

	Route::get('/A_home', 'A_HomeController@index')->name('home.index');

	Route::group(['middleware'=>['ttype']], function(){
		Route::get('/t_home/availabletuition', 'T_AvailableController@index')->name('home.availabletuition');
		Route::get('/A_home/profile', 'A_ProfileController@tprofile')->name('home.tprofile');
		Route::get('/A_home/profile/edit/{id}', 'A_ProfileController@pedit')->name('home.pedit');
		Route::post('/A_home/profile/edit/{id}', 'A_ProfileController@pupdate');
	
		Route::get('/t_home/offeredtuition', 'T_OfferedController@offered')->name('home.offeredtuition');
		Route::get('/A_home/studentsinfo', 'T_StudentsController@students')->name('home.studentsinfo');
		
		Route::get('/A_home/studentsinfo/edit/{id}', 'T_StudentsController@studentedit')->name('home.studentedit');
		Route::post('/A_home/studentsinfo/edit/{id}', 'T_StudentsController@studentupdate');
		Route::get('/A_home/studentsinfo/delete/{id}', 'T_StudentsController@studentdelete')->name('home.studentdelete');
		Route::post('/A_home/studentsinfo/delete/{id}', 'T_StudentsController@studentdestroy');
		Route::get('/A_home/studentsinfo/add', 'T_StudentsController@addstudent')->name('home.addstudent');
		Route::post('/A_home/studentsinfo/add', 'T_StudentsController@studentstore');
		Route::get('/A_home/studentscomplain', 'T_StudentsController@showcomplain')->name('home.studentcomplain');
		Route::get('/A_home/studentscomplain/edit/{id}', 'T_StudentsController@studentcomplainedit')->name('home.studentcomplainedit');
		Route::post('/A_home/studentscomplain/edit/{id}', 'T_StudentsController@studentcomplainupdate');
		Route::get('/A_home/studentscomplain/delete/{id}', 'T_StudentsController@studentcomplaindelete')->name('home.studentcomplaindelete');
		Route::post('/A_home/studentscomplain/delete/{id}', 'T_StudentsController@studentcomplainremove');
		Route::get('/A_home/teachersinfo', 'A_TeachersController@teachers')->name('home.teachersinfo');
		Route::post('/A_home/teachersinfo', 'A_TeachersController@search');
		
		Route::get('/A_home/teachersinfo/edit/{id}', 'A_TeachersController@teacheredit')->name('home.teacheredit');
		Route::post('/A_home/teachersinfo/edit/{id}', 'A_TeachersController@teacherupdate');
		Route::get('/A_home/teachersinfo/delete/{id}', 'A_TeachersController@teacherdelete')->name('home.teacherdelete');
		Route::post('/A_home/teachersinfo/delete/{id}', 'A_TeachersController@teacherdestroy');
		
		Route::get('/A_home/teacherscomplain', 'A_TeachersController@showcomplain')->name('home.teachercomplain');
		Route::get('/A_home/teacherscomplain/edit/{id}', 'A_TeachersController@teachercomplainedit')->name('home.teachercomplainedit');
		Route::post('/A_home/teacherscomplain/edit/{id}', 'A_TeachersController@teachercomplainupdate');
		Route::get('/A_home/teacherscomplain/delete/{id}', 'A_TeachersController@teachercomplaindelete')->name('home.teachercomplaindelete');
		Route::post('/A_home/teacherscomplain/delete/{id}', 'A_TeachersController@teachercomplainremove');
		
		
		Route::get('/A_home/tpinfo', 'A_TpController@tp')->name('home.tpinfo');
		Route::post('/A_home/tpinfo', 'A_TpController@search');
		Route::get('/A_home/tpinfo/edit/{id}', 'A_TpController@tpedit')->name('home.tpedit');
		Route::post('/A_home/tpinfo/edit/{id}', 'A_TpController@tpupdate');
		Route::get('/A_home/tpinfo/delete/{id}', 'A_TpController@tpdelete')->name('home.tpdelete');
		Route::post('/A_home/tpinfo/delete/{id}', 'A_TpController@tpdestroy');
		
		Route::get('/A_home/tpcomplain', 'A_TpController@showcomplain')->name('home.tpcomplain');
		Route::get('/A_home/tpcomplain/edit/{id}', 'A_TpController@tpcomplainedit')->name('home.tpcomplainedit');
		Route::post('/A_home/tpcomplain/edit/{id}', 'A_TpController@tpcomplainupdate');
		Route::get('/A_home/tpcomplain/delete/{id}', 'A_TpController@tpcomplaindelete')->name('home.tpcomplaindelete');
		Route::post('/A_home/tpcomplain/delete/{id}', 'A_TpController@tpcomplainremove');
		
		Route::get('/A_home/tuition', 'A_TuitionController@show')->name('home.tuition');
		Route::get('/A_home/tuition/edit/{id}', 'A_TuitionController@edit')->name('home.tuitionedit');
		Route::post('/A_home/tuition/edit/{id}', 'A_TuitionController@update');
		Route::get('/A_home/totaluser', 'A_TotaluserController@index')->name('home.totaluser');
		
		
		
		
		Route::get('/t_home/ctp', 'T_ProviderController@alltp')->name('home.ctp');
		Route::post('/t_home/ctp', 'T_ProviderController@search');
		Route::get('/t_home/ratings', 'T_RatingsController@ratings')->name('home.ratings');
	    Route::get('/t_home/answer', 'T_ExamController@answer')->name('home.answer');
		
		
		
		
		Route::get('/t_home/salary', 'T_SalaryController@salary')->name('home.salary');
		Route::get('/t_home/salary/insert', 'T_SalaryController@sinsert')->name('home.sinsert');
		Route::post('/t_home/salary/insert', 'T_SalaryController@sstore');
		
		Route::get('/t_home/salary/edit/{id}', 'T_SalaryController@sedit')->name('home.sedit');
		Route::post('/t_home/salary/edit/{id}', 'T_SalaryController@supdate');
		Route::get('/t_home/salary/delete/{id}', 'T_SalaryController@sdelete')->name('home.sdelete');
		Route::post('/t_home/salary/delete/{id}', 'T_SalaryController@sdestroy');
		
		
		
		
		Route::get('/t_home/fileupload', 'T_FileuploadController@upload')->name('home.fileupload');
		Route::post('/t_home/fileupload', 'T_FileuploadController@store');
		Route::get('/t_home/fileupload/checknotes', 'T_FileuploadController@check')->name('home.checknotes');
		Route::get('/t_home/fileupload/checknotes/delete/{id}', 'T_FileuploadController@delete')->name('home.notesdelete');
		Route::post('/t_home/fileupload/checknotes/delete/{id}', 'T_FileuploadController@destroy');
		
		Route::get('/t_home/schedule', 'T_ScheduleController@schedule')->name('home.schedule');
		Route::get('/t_home/schedule/insert', 'T_ScheduleController@sinsert')->name('home.scheduleinsert');
		Route::post('/t_home/schedule/insert', 'T_ScheduleController@sstore');
		Route::get('/t_home/schedule/edit/{id}', 'T_ScheduleController@sedit')->name('home.scheduleedit');
		Route::post('/t_home/schedule/edit/{id}', 'T_ScheduleController@supdate');
		Route::get('/t_home/schedule/delete/{id}', 'T_ScheduleController@sdelete')->name('home.scheduledelete');
		Route::post('/t_home/schedule/delete/{id}', 'T_ScheduleController@sdestroy');
		
		Route::get('/t_home/complain', 'T_ComplainController@insert')->name('home.cta');
		Route::post('/t_home/complain', 'T_ComplainController@store');
		Route::get('/t_home/complain/check', 'T_ComplainController@check')->name('home.ctacheck');
		Route::get('/t_home/complain/check/delete/{id}', 'T_ComplainController@delete')->name('home.ctadelete');
		Route::post('/t_home/complain/check/delete/{id}', 'T_ComplainController@destroy');
		
		Route::get('/t_home/exam', 'T_ExamController@view')->name('home.exam');
		Route::get('/t_home/exam/take', 'T_ExamController@take')->name('home.takeexam');
		Route::post('/t_home/exam/take', 'T_ExamController@store');
		Route::get('/t_home/exam/take/questions', 'T_ExamController@questions')->name('home.questions');
		Route::get('/t_home/exam/take/questions/delete/{id}', 'T_ExamController@delete')->name('home.qdelete');
		Route::post('/t_home/exam/take/questions/delete/{id}', 'T_ExamController@destroy');
		Route::get('/t_home/exam/grades', 'T_GradeController@upload')->name('home.uploadgrades');
		Route::post('/t_home/exam/grades', 'T_GradeController@store');
		Route::get('/t_home/exam/grades/check', 'T_GradeController@check')->name('home.checkgrades');
		Route::get('/t_home/exam/grades/check/delete/{id}', 'T_GradeController@delete')->name('home.gdelete');
		Route::post('/t_home/exam/grades/check/delete/{id}', 'T_GradeController@destroy');
		
		Route::get('/t_home/notices', 'T_NoticesController@view')->name('home.notices');
		Route::get('/t_home/notices/read', 'T_NoticesController@read')->name('home.readnotices');
		Route::get('/t_home/notices/post', 'T_NoticesController@post')->name('home.postnotices');
		Route::post('/t_home/notices/post', 'T_NoticesController@store');
		Route::get('/t_home/notices/post/check', 'T_NoticesController@posted')->name('home.postednotices');
		Route::get('/t_home/notices/post/check/delete/{id}', 'T_NoticesController@delete')->name('home.ndelete');
		Route::post('/t_home/notices/post/check/delete/{id}', 'T_NoticesController@destroy');
	});
	
});




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
