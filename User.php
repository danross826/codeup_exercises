<?php

require_once 'Model.php';

class User extends Model
{
	protected static $table = 'users';

	public static function getTableName(){

		return static::$table;
	}
}



var_dump(User::getTableName());