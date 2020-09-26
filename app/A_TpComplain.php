<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class A_TpComplain extends Model
{
    //
	protected $table = "tpcomplain";
	public $timestamps = false;
	/*const CREATED_AT = "create_time";
	const UPDATED_AT = "update_time";*/
	protected $primaryKey = "id";

}