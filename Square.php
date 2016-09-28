<?php

require_once "rectangle.php";

class Square extends Rectangle
{

	public $side;
    public function __construct($side)
    {
    	parent::__construct($side,$side);
    }

    public function perimeter(){
    	$perimeter = $this->height *2;
    	$perimeter = $perimeter + $this->height * 2;
        return $perimeter;
    }

    
}