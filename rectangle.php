<?php


class Rectangle
{
    public $width;
    public $height;

    public function __construct($width,$height)
    {
    $this->width=$width;
    $this->height=$height;

    }

    public function getArea(){

        return "Dien tich =".$this->width*$this->height;
    }

    public function getPermimeter(){

        return "Chu vi =".($this->width+$this->height)*2;
    }


}
