<?php

class Model
{

	protected static $table = "national_parks";

	private $attributes = [];

	public static function getTableName(){

		return self::$table;
	}


	public function __set($name, $value){

		$this->attributes[$name] = $value;
	}

	public function __get($name){

		if (isset($this->attributes[$name])) {
			return $this->attributes[$name];
		}else{
			return null;
		}
		
	}

}

