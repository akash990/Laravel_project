<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class A_Totaluser extends Model
{
    //
	protected $table = "totaluser";
	public $timestamps = false;
	/*const CREATED_AT = "create_time";
	const UPDATED_AT = "update_time";*/
	protected $primaryKey = "id";

}
