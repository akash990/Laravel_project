<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;





use Illuminate\Support\Facades\DB;

//use Validator;

class A_StudentcomplainController extends Controller
{

   function showcomplain(Request $request){
	
$students = new A_StudentComplain();
 $data= $students;
                    
	return view('A_students.showstudent')->with('users', $data);
 }
   
	
function check(Request $request){
	
$check = new T_Complain();
 $data= $check->where('name', $request->session()->get('username'))
                        ->get();
                    
	 
	 
	 
	   return view('t_complain.check')->with('users', $data);
 }




	    public function insert(Request $request){
        return view('t_complain.insert');
    }








	   public function store(A_StudentcomplainRequests $request){
	
        $user = new A_StudentComplain();
        $user->complain = '';
        $user->reply    = $request->reply;
		$user->name = $request->session()->get('username');	
        $user->save();

        return redirect()->route('home.studentcomplain');
    }
	
	
	  

 function delete($id){

   
    	
        $user = T_Complain::find($id);
        return view('t_complain.delete')->with('user', $user);

    }
 function destroy($id, Request $request){
    	
    
        if(T_Complain::destroy($id)){
            return redirect()->route('home.ctacheck');
        }else{
            return redirect()->route('home.ctacheck', $id);
        }
    }


}
 
