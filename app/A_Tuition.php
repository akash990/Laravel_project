<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class A_Tuition extends Model
{
    //
	protected $table = "tuition";
	public $timestamps = false;
	/*const CREATED_AT = "create_time";
	const UPDATED_AT = "update_time";*/
	protected $primaryKey = "id";

}