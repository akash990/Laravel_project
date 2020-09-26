<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class A_TeacherComplain extends Model
{
    //
	protected $table = "teachercomplain";
	public $timestamps = false;
	/*const CREATED_AT = "create_time";
	const UPDATED_AT = "update_time";*/
	protected $primaryKey = "id";

}