<?php


// THis is for getting the txt file and putting it into a variable I can use//////

if (! isset($argv[1])) {
    echo 'give me a filename!' . PHP_EOL;
    
    die;
}

$sales = $argv[1];

function getFileContents($filename)
{
    // create a resource that points to our file
    // http://php.net/manual/en/function.fopen.php
    // 'r' means for reading
    //   - more modes in the next lesson
    // like a cursor or pointer
    $handle = fopen($filename, 'r');

    // our handle is at the start of the file, read until the end of the file
    // i.e. the size of the file
    $fileContents = fread($handle, filesize($filename));

    // make sure to cleanup
    fclose($handle);

    return $fileContents;
}

$names = trim(getFileContents($sales));

// I'm turning the string into an array//////////////

$names = explode("\n",$names);

// I'm getting the number of employees by counting the values in the array///////////


$numberOfEmployees=count($names);

echo "We have " . $numberOfEmployees . " employees." . PHP_EOL;

// I'm getting the total units sold by creating a variable that's a number

$totalSold=0;

// I'm now going to get the last character off each string in the array then turn it into an integer to be calculated

foreach ($names as $key => $value) {
    $number=intval(substr($value, -2));
    $totalSold=$totalSold+$number;
}

// Once they're added, I turn them back into a string then echo it

$totalSold=strval($totalSold);

echo "We've sold " . $totalSold . " units" . PHP_EOL;

for ($i=0; $i <count($names) ; $i++) { 
    $names[$i]=explode(',', $names[$i]);
}

$employees = array();

foreach ($names as $key => $value) {
    $employeeNumber=trim($value[0]);
    $fullName=$value[1] . $value[2];
    $unitsSold=trim($value[3]);
    var_dump($unitsSold);
    $arrayForm= array('Employee Number ' =>$employeeNumber ,'Full Name '=>$fullName,'Units Sold '=>$unitsSold);
    array_push($employees, $arrayForm);
    
}

var_dump($employees);




foreach ($names as $key => $value) {

    $arrayForm = array("Employee Number " => "","Full Name "=>"","Units Sold"=>"");
}



