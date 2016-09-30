<?php

class Rectangle
{
    private $height;
    private $width;

    public function __construct($height, $width)
    {
        $this->setHeight($height);
        $this->setWidth($width);
    }

    private function setHeight($height)
    {
        $this->height = trim($height);
    }

    private function setWidth($width)
    {
        $this->width = trim($width);
    }

    private function area()
    {
        $area=$this->height * $this->width;
        return $area;
    }
    private function perimeter()
    {
        $perimeter= 2 * $this->height + 2 * $this->width;
        return $perimeter;
    }
    public function getHeight()
    {
        return $this->height;
    }
    public function getWidth()
    {
        return $this->width;
    }
    public function getArea()
    {
        return $this->area();
    }
    public function getPerimeter()
    {
        return $this->perimeter();
    }
}