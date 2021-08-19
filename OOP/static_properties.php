<?php
class Name{
    public static $x = "Hello";//thuoc tinh tinh 
    public function value(){
        return self::$x;// goi thuoc tinh tinh tu mot phuong thuc tron cung mot lop dung self
    }
}
class Xname extends Name{
    public function X(){
        return parent::$x;
    }
}
//echo name::$x;
$x = new Xname();
echo $x->X();
// $wel = new Name();
// echo $wel->value();
//echo Name::$x;