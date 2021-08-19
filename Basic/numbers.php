<?php 
//ex1: int, float, gia tri vo han
//kiem tra bien co phai so nguyen hay khong 
// $x = 2323;
// var_dump(is_integer($x));
// $x = 234.234;
// var_dump(is_integer($x));
// $x = 234.234;
// var_dump(is_long($x));
// $x = 2323;
// var_dump(is_float($x));
// $x = 234.234;
// var_dump(is_double($x));
//gia tri vo han 
// $x = 1.9e321;
// var_dump($x);


//gia tri khong hop le 
// $x = acos(8);
// var_dump($x);


// //is_numberic: kiem tra 1 chuoi cos phai so hay khong 
// $x = 2342;
// var_dump(is_numeric($x));
// $x = "234234";
// var_dump(is_numeric($x));
// $x = "45.34" + 100;
// echo $x;
// var_dump(is_numeric($x));
// $x = "Hello";
// var_dump(is_numeric($x));


//truyen mot so gia tri sang mot kieu du lieu khac 
$x = 124124.234;//float -> int 
$int_cast = (int)$x;
echo $int_cast;

$x = "123.321";//string -> int 
$int_cast = (int)$x;
echo $int_cast;


