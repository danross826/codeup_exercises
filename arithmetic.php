<?php

$number='cat';

function throwErrorMessage($value){
	echo $value . " Is Invalid Input!" . PHP_EOL;
}

function checkNumber($number){
	if (is_numeric($number)){
		return $number;
	}else{
		throwErrorMessage($number);
	};
}

function add($a, $b=null)
{
	checkNumber($a);
	checkNumber($b);
    return $a + $b;
}

function subtract($a, $b=1)
{
	checkNumber($a);
	checkNumber($b);
    return $a-$b;
}

function multiply($a, $b)
{
	checkNumber($a);
	checkNumber($b);
    return $a*$b;
}

function divide($a, $b)
{
	checkNumber($a);
	checkNumber($b);
	if ($b!=0) {
		return $a/$b;
	}else{
		throwErrorMessage($b);
	}

}

function modulus($a, $b)
{
	checkNumber($a);
	checkNumber($b);
    return $a%$b;
}

function squareRoot($a){
	checkNumber($a);
	return sqrt($a);
}

function squared($a){
	checkNumber($a);
	return $a * $a;
}

echo add(6,6) . PHP_EOL;

echo subtract(7,6) . PHP_EOL;

echo multiply(7,6) . PHP_EOL;

echo divide(7,0) . PHP_EOL;

echo modulus(6,4) . PHP_EOL;
