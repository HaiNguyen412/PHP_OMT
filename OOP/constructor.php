<?php

//ham construct: tu dong goi ham nay khi b taoj ddoi tuowng tu lop
// // su dung thay phuong thuc set_name
class Fruit{
    public $name;
    public $color;
    function __construct($name, $color)
    {
        $this->name = $name;
        $this->color = $color;
    }
    function get_name(){
        return $this->name;
    }
    function get_color(){
        return $this->color;
    }
}
$apple = new Fruit('iPhone12promax', 'gold');
echo $apple->get_name();
echo "\r\n------";
echo $apple->get_color();
echo "\r\n------";