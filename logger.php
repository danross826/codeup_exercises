<?php

date_default_timezone_set('GMT');









function logMessage($logLevel, $message)
{
	$date=date("m-d-o") . " " . date("g") . ":" . date("i") . ":" . date("s");
    $filename = "log-YYYY-MM-DD.log";
	$handle = fopen($filename, 'a');
	fwrite($handle, PHP_EOL . $date . " " . $logLevel . ":" . $message);
	fclose($handle);
}

function logError($message){
	logMessage("ERROR", $message);
}

function logInfo($message){
	logMessage("INFO", $message);
}

$passwordMessage="Wrong Password!";

logError($passwordMessage);






