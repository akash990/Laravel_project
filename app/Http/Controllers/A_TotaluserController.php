<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use App\T_User;
use App\A_Totaluser;



class A_TotaluserController extends Controller
{
 
 public function index(Request $request){



    $response = Http::get('http://localhost:3000/totaluser');
$List = json_decode($response->body());
return view('A_totaluser.totaluser')->with('userList', $List);
   

  


 }


}
