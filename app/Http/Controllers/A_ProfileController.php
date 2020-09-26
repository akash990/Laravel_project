<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\T_User;
use App\Http\Requests\T_UserRequests;
use Illuminate\Support\Facades\DB;

//use Validator;

class A_ProfileController extends Controller
{

   
 function tprofile(Request $request){

	 $user = new T_User();

                        
  $data= $user->where('username', $request->session()->get('username'))
                        ->get();
	 
	 
	 
	   return view('A_profile.profile')->with('users', $data);
 }
 
 
	  function pedit($id){


        $user = T_User::find($id);
    	return view('A_profile.edit')->with('user', $user);

    }
	


 function pupdate($id, T_UserRequests $request){

    

        $user = T_User::find($id);
        $user->username = $request->username;
        $user->password = $request->password;
		$user->email = $request->email;
		$user->gender = $request->gender;
		$user->type = $request->type;
		$user->picture = $request->picture;
		$user->education = $request->education;
        $user->save();

    	return redirect()->route('home.tprofile');

    }

 

   
}
