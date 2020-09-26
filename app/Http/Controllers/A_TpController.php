<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\T_User;
use App\Http\Requests\T_UserRequests;
use App\Http\Requests\A_TpcomplainRequests;
use App\A_TpComplain;

use Illuminate\Support\Facades\DB;

//use Validator;

class A_TpController extends Controller
{

   
   
	
function tp()
	
	 {
        $List = T_User::all()->where('type','tp');
        
        return view('A_tp.tp')->with('tlist',$List);
    }
   
	
	function search(Request $req)
    {
      $List = T_User::where('type','tp')
                                ->where('username', 'like', '%'.$req->key.'%')
                                ->orWhere('type','teacher')
                                ->where('email', 'like', '%'.$req->key.'%')
                                ->get();
        
        return view('A_tp.tplist')->with('tlist',$List);
    }
	function tpedit($id){


        $user = T_User::find($id);
    	return view('A_tp.tpedit')->with('user', $user);

    }
	function tpupdate($id, T_UserRequests $request){

    

        $user = T_User::find($id);
        $user->username = $request->username;
        $user->password = $request->password;
		$user->email = $request->email;
		$user->gender = $request->gender;
		$user->education = $request->education;
		$user->picture = $request->picture;
        $user->save();

    	return redirect()->route('home.tpinfo');

    }
	function tpdelete($id){

   
    	
        $user = T_User::find($id);
        return view('A_tp.tpdelete')->with('user', $user);

    }
 function tpdestroy($id, Request $request){
    	
    
        if(T_User::destroy($id)){
            return redirect()->route('home.tpinfo');
        }else{
            return redirect()->route('home.tpinfo', $id);
        }
    }
	
	function showcomplain(Request $request){
		$List = A_TpComplain::all();
 
     return view('A_tp.showtpcomplain')->with('users', $List);
 }
 function tpcomplainedit($id){


        $user = A_TpComplain::find($id);
    	return view('A_tp.tpcomplainedit')->with('user', $user);

    }
 

     function tpcomplainupdate($id, A_TpcomplainRequests $request){

		$user = A_TpComplain::find($id);
		$user->name = $request->name;
        $user->complain = $request->complain;
		$user->reply = $request->reply;
			
        $user->save();

    	return redirect()->route('home.tpcomplain');

    }
	function tpcomplaindelete($id){

   
    	
        $user = A_TpComplain::find($id);
        return view('A_tp.tpcomplaindelete')->with('user', $user);

    }
 function tpcomplainremove($id, Request $request){
    	
    
        if(A_TpComplain::destroy($id)){
            return redirect()->route('home.tpcomplain');
        }else{
            return redirect()->route('home.tpcomplain', $id);
        }
    }




}
