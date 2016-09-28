<?php


class Log

{
	
	public $fileName;

	public $handle;

	public $date;

	public $time;

	public function logMessage($logLevel,$message){
		fwrite($this->handle, PHP_EOL . $this->date . $this->time . " " . $logLevel . ":" . $message);

	}

	public function logError($message){
		$this->logMessage("ERROR", $message);
	}

	public function logInfo($message){
		$this->logMessage("INFO", $message);
	}

	public function __construct($prefix='log-'){
		$this->date=date("m-d-o");
		$this->fileName=$prefix . $this->date;
		$this->handle=fopen($this->fileName, 'a');
		$this->time=" " . date("g") . ":" . date("i") . ":" . date("s");
		

	}
	public function __destruct(){
		fclose($this->handle);
	}


}
