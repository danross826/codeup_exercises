<?php


$integer = intval(8);

// if(is_int(intval(sqrt($integer)))){
// 	echo "" . $integer ." is a perfect square.";
// }else{
// 	echo "" . $integer ." is not a perfect square.";
// };

$sqrRoot=sqrt($integer);

$squared=$sqrRoot * $sqrRoot;

// var_dump($squared);


// Number 2


$string="WorlD";

$array=str_split($string);

$number=count($array);

for ($i=0;$i<$number;$i++){
	if(ctype_upper($array[$i])){
		
		echo $i . PHP_EOL;
	}
}

// Q 3

$milesPerGallon=13;

$kilPerLiter=$milesPerGallon * 0.4251;


$answer = round($kilPerLiter,2);

$answer = strval($answer);

echo $answer;