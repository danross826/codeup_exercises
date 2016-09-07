<?php

if (! isset($argv[1])) {
    echo 'give me a filename!' . PHP_EOL;
    
    die;
}

$contact = $argv[1];

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

$names = getFileContents($contact);

// Turn names into an array//////////////////////////////////////////////////
$names = explode("\n", $names);

// Go through array of strings and split them in to smaller strings/////////

$contacts=array();


foreach ($names as $key => $value) {
	$names[$key]=explode("|", $value);
	$newArray=array ("name"=>$names[$key][0], "number"=>$names[$key][1]);
	array_push($contacts, $newArray);

}







function stringReplace($oldstr,$str_to_insert,$pos){

$str = substr($oldstr, 0, $pos) . $str_to_insert . substr($oldstr, $pos);

return $str;
}




for ($i=0; $i <=2 ; $i++) { 
	$contacts[$i]["number"]=stringReplace($contacts[$i]["number"],"-",3);
	$contacts[$i]["number"]=stringReplace($contacts[$i]["number"],"-",7);
}

var_dump($contacts);



















