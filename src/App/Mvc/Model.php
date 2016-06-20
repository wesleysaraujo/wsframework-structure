<?php

namespace App\Mvc;

use Illuminate\Database\Eloquent\Model as Model_Eloquent;

class Model extends Model_Eloquent
{

	public static function getText($str = 'Olá mundo')
	{
		return $str;
	}



}