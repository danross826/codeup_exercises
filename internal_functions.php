<?php

function message($type,$value){
	$words="";
	return $words . "$value is a $type." . PHP_EOL;
}

// TODO: Create your inspect() function here

function inspect($arg){
	if(is_float($arg)){
		if ($arg==0) {
			$customMessage="Zero can be an integer or a float depending on how it's written.  In this case, $arg is a float." . PHP_EOL;
			return $customMessage;
		}
		$type="float";
		return message($type,$arg);
	}elseif(is_int($arg)){
		$type="integer";
		return message($type,$arg);
	}elseif(is_bool($arg)){
		if ($arg==true) {
			$arg="boolean";
			$type="true boolean";
			return message($type,$arg);
		}elseif ($arg!=true) {
			if (empty($arg)) {
				$arg="boolean";
				$type="false boolean";
				return message($type,$arg);
			}
				$arg="boolean";
				$type="false boolean";
				return message($type,$arg);
		}
	}elseif(is_string($arg)){
		if (empty($arg)) {
			$arg="string";
			$type="empty string";
			return message($type,$arg);
		}
		$type="string";
		return message($type,$arg);
	}elseif(is_array($arg)){
		if (empty($arg)) {
			$type="empty array";
			$arg="array";
			return message($type,$arg);
		}
		$type="array";
		$arg=implode(",", $arg);
		return message($type,$arg);
	}elseif(is_null($arg)){
		$type="null";
		$arg="value";
		return message($type,$arg);
	}
}

// Do not mofify these variables!
$string1 = "I'm a little teapot";
$string2 = '';
$array1 = [];
$array2 = [1, 2, 3];
$bool1 = true;
$bool2 = false;
$num1 = 0;
$num2 = 0.0;
$num3 = 12;
$num4 = 14.4;
$null = NULL;

// TODO: After each echo statement, use inspect() to output the variable's type and its value

echo 'Inspecting $num1: ' . inspect($num1) . PHP_EOL;

echo 'Inspecting $num2: ' . inspect($num2) . PHP_EOL;

echo 'Inspecting $num3: ' . inspect($num3) . PHP_EOL;

echo 'Inspecting $num4: ' . inspect($num4) . PHP_EOL;

echo 'Inspecting $null: ' . inspect($null) . PHP_EOL;

echo 'Inspecting $bool1: ' . inspect($bool1) . PHP_EOL;

echo 'Inspecting $bool2: ' . inspect($bool2) . PHP_EOL;

echo 'Inspecting $string1: ' . inspect($string1) . PHP_EOL;

echo 'Inspecting $string2: ' . inspect($string2) . PHP_EOL;

echo 'Inspecting $array1: ' . inspect($array1) . PHP_EOL;

echo 'Inspecting $array2: ' . inspect($array2) . PHP_EOL;

?>
