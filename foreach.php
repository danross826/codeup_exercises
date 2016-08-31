<?php

$things = array('Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false,
	(string) 11);


foreach ($things as $value) {
	$output="";
	$type=" type: ";
	if (is_bool($value)) {
		$type=$type . "boolean";
	}else if(is_array($value)){
		$arrayValue="";
		foreach ($value as $item) {
			if ($arrayValue!="") {
				$arrayValue=$arrayValue . ", " . $item;
				$type=" type: array";
			}else{
				$arrayValue="Array " . $arrayValue . $item;
				$type=" type: array";
			};
		};
		$value=$arrayValue;
	}else if(is_null($value)){
		$value="null";
		$type=$type . "null";
	}else if(is_string($value)){
		$type=$type . "string";
	}else if(is_integer($value)){
		$type=$type . "integer";
	}else if(is_float($value)){
		$type=$type . "float";
	}
	$output=$value . $type;
	echo ($output) . PHP_EOL;
}

echo "If value of things is scalar it will be repeated below: " . PHP_EOL;

foreach ($things as $value) {
	if (is_scalar($value)) {
	
		$output="";
		$type=" type: ";
		if (is_bool($value)) {
			$type=$type . "boolean";
		}else if(is_array($value)){
			$arrayValue="";
			foreach ($value as $item) {
				if ($arrayValue!="") {
					$arrayValue=$arrayValue . ", " . $item;
					$type=" type: array";
				}else{
					$arrayValue="Array " . $arrayValue . $item;
					$type=" type: array";
				};
			};
			$value=$arrayValue;
		}else if(is_null($value)){
			$value="null";
			$type=$type . "null";
		}else if(is_string($value)){
			$type=$type . "string";
		}else if(is_integer($value)){
			$type=$type . "integer";
		}else if(is_float($value)){
			$type=$type . "float";
		}
		$output=$value . $type;
		echo ($output) . PHP_EOL;
		};
	};








?>