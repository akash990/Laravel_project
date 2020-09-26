<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\T_User;


use Illuminate\Support\Facades\DB;

//use Validator;

class T_TeachersController extends Controller
{

   
   
	
function teachers()
	
	 {
        $List = T_User::all()->where('type','teacher');
        
        return view('t_teachers.teachers')->with('tlist',$List);
    }
   
	
	function search(Request $req)
    {
       
        
        $List = T_User::where('type','teacher')
                                ->where('username', 'like', '%'.$req->key.'%')
                                ->orWhere('type','teacher')
                                ->where('email', 'like', '%'.$req->key.'%')
                                ->get();
        
        return view('t_teachers.teacherslist')->with('tlist',$List);
    }




}
