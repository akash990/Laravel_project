<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\A_Tuition;
use App\Http\Requests\A_TuitionRequests;

use Illuminate\Support\Facades\DB;

//use Validator;

class A_TuitionController extends Controller
{
	function show(){
        $List = A_Tuition::all();
        return view('A_tuition.tuition')->with('tlist',$List);
    }
   function edit($id){


        $user = A_Tuition::find($id);
    	return view('A_tuition.tuitionedit')->with('user', $user);

    }
	function update($id, A_TuitionRequests $request){

		$user = A_Tuition::find($id);
		$user->name = $request->name;
		$user->class = $request->class;
		$user->subject = $request->subject;
		$user->salary = $request->salary;
        $user->contact = $request->contact;
		$user->teacher = $request->tname;
			
        $user->save();

    	return redirect()->route('home.tuition');

    }
}
