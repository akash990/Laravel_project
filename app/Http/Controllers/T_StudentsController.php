<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\T_User;
use App\Http\Requests\A_StudentcomplainRequests;
use App\A_StudentComplain;
use App\Http\Requests\T_UserRequests;
use app\Http\Requests\T_SalaryRequests;

use Illuminate\Support\Facades\DB;

//use Validator;

class T_StudentsController extends Controller
{

   
   
	
function students(Request $request){
	
$students = new T_User();
 $data= $students->where('type', 'student')
                        ->get();
                    
	return view('t_students.students')->with('users', $data);
 }
  function studentedit($id){


        $user = T_User::find($id);
    	return view('t_students.studentedit')->with('user', $user);

    }
	function studentupdate($id, T_UserRequests $request){

    

        $user = T_User::find($id);
        $user->username = $request->username;
        $user->password = $request->password;
		$user->email = $request->email;
		$user->gender = $request->gender;
		$user->education = $request->education;
		$user->type = $request->type;
		$user->picture = $request->picture;
        $user->save();

    	return redirect()->route('home.studentsinfo');

    }
	function studentdelete($id){

   
    	
        $user = T_User::find($id);
        return view('t_students.studentdelete')->with('user', $user);

    }
 function studentdestroy($id, Request $request){
    	
    
        if(T_User::destroy($id)){
            return redirect()->route('home.studentsinfo');
        }else{
            return redirect()->route('home.studentsinfo', $id);
        }
    }
	
	
	 public function addstudent(Request $request){
        return view('A_students.studentadd');
    }
	 public function studentstore(T_UserRequests $request){
	 if($request->hasFile('myfile')){
            $file = $request->file('myfile');
            $filename = $file->getClientOriginalName();
			
        
            if($file->move('upload', $filename)){
        $user = new T_User();
        $user->username= $request->username;
        $user->password= $request->password;
		$user->email= $request->email;
		$user->gender= $request->gender;
		$user->education= $request->education;
		$user->type=$request->type;
		$user->picture= $filename;
		$user->save();
 }else{
                echo "<h1>Error!</h1>";
            }
        }

        return redirect()->route('t_students.students');
	 

	   }

	   public function store(T_UserRequests $request){
	 if($request->hasFile('myfile')){
            $file = $request->file('myfile');
            $filename = $file->getClientOriginalName();
			
        
            if($file->move('upload', $filename)){
        $user = new T_User();
        $user->username     = $request->username;
        $user->password    = $request->password;
		$user->email    = $request->email;
		$user->gender    = $request->gender;
		$user->education    = $request->education;
		$user->type    = $request->type;
		$user->picture    = $filename;
		$user->save();
 }else{
                echo "<h1>Error!</h1>";
            }
        }

        return redirect()->route('login.index');
	 

	   }
	   function showcomplain(Request $request){
$List = A_StudentComplain::all();
 
                    

                    
	return view('A_students.showstudentcomplain')->with('users', $List);
 }
 function studentcomplainedit($id){


        $user = A_StudentComplain::find($id);
    	return view('A_students.studentcomplainedit')->with('user', $user);

    }
 

    

        function studentcomplainupdate($id, A_StudentcomplainRequests $request){

    

        
		
		$user = A_StudentComplain::find($id);
		$user->name = $request->name;
        $user->complain = $request->complain;
		$user->reply = $request->reply;
			
        $user->save();

    	return redirect()->route('home.studentcomplain');

    }
	function studentcomplaindelete($id){

   
    	
        $user = A_StudentComplain::find($id);
        return view('A_students.studentcomplaindelete')->with('user', $user);

    }
 function studentcomplainremove($id, Request $request){
    	
    
        if(A_StudentComplain::destroy($id)){
            return redirect()->route('home.studentcomplain');
        }else{
            return redirect()->route('home.studentcomplain', $id);
        }
    }
 



}
