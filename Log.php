<?php

// This class is to log information, it creates a txt file with information in it
class Log

{
	// These are the features of this class ///////////////////////////////////////////
	
	private $fileName;

	private $handle;

	public $date;

	public $time;

	// These are the functions of this class ///////////////////////////////////////////////////

	// The setters setup properties that are private

	private function setFileName($fileName)
	{
		if (is_writable($fileName) && touch($fileName)) {
			$fileName=strval($fileName);
			$this->fileName=trim($fileName);
		}else{
			echo "ERROR";
		}
	}
	private function setHandle($handle)
	{
		$this->handle=$handle;
	}

	// This function actually logs the message based on the LevelParameter(whether it's a message or error) 
	// and the MessageParameter(the actual message to be logged)

	public function logMessage($logLevel,$message){
		fwrite($this->handle, PHP_EOL . $this->date . $this->time . " " . $logLevel . ":" . $message);

	}

	// The logMessage and logError functions take in messages and send them to the logMessage function as either messages or errors

	public function logError($message){
		$this->logMessage("ERROR", $message);
	}

	public function logInfo($message){
		$this->logMessage("INFO", $message);
	}

	// This is the contstruct function for creating new instances of logs

	public function __construct($prefix='log-'){
		$this->date=date("m-d-o");
		$this->setFileName($prefix . $this->date);
		$this->setHandle(fopen($this->fileName, 'a'));
		$this->time=" " . date("g") . ":" . date("i") . ":" . date("s");
		

	}

	// This is the destruct function which is a magic method that activates to close and instance of this class

	public function __destruct(){
		fclose($this->handle);
	}

 	// and the getters allow these properties to be accessed from anywhere

	public function getFileName(){
		return $this->fileName;
	}
	public function getHandle(){
		return $this->handle;
	}

}


