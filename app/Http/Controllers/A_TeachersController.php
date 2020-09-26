<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\T_User;
use App\Http\Requests\T_UserRequests;
use App\Http\Requests\A_TeachercomplainRequests;
use App\A_TeacherComplain;

use Illuminate\Support\Facades\DB;

//use Validator;

class A_TeachersController extends Controller
{

   
   
	
function teachers()
	
	 {
        $List = T_User::all()->where('type','teacher');
        
        return view('A_teachers.teachers')->with('tlist',$List);
    }
   
	
	function search(Request $req)
    {
       
        
        $List = T_User::where('type','teacher')
                                ->where('username', 'like', '%'.$req->key.'%')
                                ->orWhere('type','teacher')
                                ->where('email', 'like', '%'.$req->key.'%')
                                ->get();
        
        return view('A_teachers.teacherslist')->with('tlist',$List);
    }
	function teacheredit($id){


        $user = T_User::find($id);
    	return view('A_teachers.teacheredit')->with('user', $user);

    }
	function teacherupdate($id, T_UserRequests $request){

    

        $user = T_User::find($id);
        $user->username = $request->username;
        $user->password = $request->password;
		$user->email = $request->email;
		$user->gender = $request->gender;
		$user->education = $request->education;
		$user->picture = $request->picture;
        $user->save();

    	return redirect()->route('home.teachersinfo');

    }
	function teacherdelete($id){

   
    	
        $user = T_User::find($id);
        return view('A_teachers.teacherdelete')->with('user', $user);

    }
 function teacherdestroy($id, Request $request){
    	
    
        if(T_User::destroy($id)){
            return redirect()->route('home.teachersinfo');
        }else{
            return redirect()->route('home.teachersinfo', $id);
        }
    }
	
	function showcomplain(Request $request){
		$List = A_TeacherComplain::all();
 
     return view('A_teachers.showteachercomplain')->with('users', $List);
 }
 function teachercomplainedit($id){


        $user = A_TeacherComplain::find($id);
    	return view('A_teachers.teachercomplainedit')->with('user', $user);

    }
 

     function teachercomplainupdate($id, A_TeachercomplainRequests $request){

		$user = A_TeacherComplain::find($id);
		$user->name = $request->name;
        $user->complain = $request->complain;
		$user->reply = $request->reply;
			
        $user->save();

    	return redirect()->route('home.teachercomplain');

    }
	function teachercomplaindelete($id){

   
    	
        $user = A_TeacherComplain::find($id);
        return view('A_teachers.teachercomplaindelete')->with('user', $user);

    }
 function teachercomplainremove($id, Request $request){
    	
    
        if(A_TeacherComplain::destroy($id)){
            return redirect()->route('home.teachercomplain');
        }else{
            return redirect()->route('home.teachercomplain', $id);
        }
    }




}
