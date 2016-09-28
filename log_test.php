<?php 

require_once ('Log.php');

$git= new Log();

$git->logInfo("user logged in");
$git->logError("Wrong Password!");