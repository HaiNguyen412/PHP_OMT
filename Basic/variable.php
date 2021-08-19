<?php 
//ex1
// $txt ="hello world";
// $x =5;
// $y = 10.5;
/*
ex2
$txt = "My name is Hai!";
echo("Introduce: " . $txt);
*/
/*
ex3
$x = 4; 
$y = 5;
echo $x + $y;
*/
/*
ex4 pham vi bien 
$x = 5;// bien toan cau(global scope )
bien khai bao ngoai ham co pham vi toan cau thi chir truy cap ddc ben ngoai
function myTest(){
    $x= 5;// bien khai bao trong cos pham vi dia phuong co the truy cap trong ham 
    echo " Variable x ....is:$x";
}
myTest();
echo( "Variable x ....is: $x");
*/

//ex5: goi bien toan cau trong ham bang tu khoa  
/*


//ex6: luu tru tat ca cac bien toan cuc trong mang
// co the truy cap tu trong cac ham bang tu khoa 
$x = 5;
$y = 10;
function myTest()
{
    $GLOBALS['y']=$GLOBALS['x']+ $GLOBALS['y'];
}
myTest();
echo $y;
*/
/*
//ex7:tu khoa tinh static de luu tru bien cuc bo
function myTest(){
    static $x = 0;// khoi tao gia tri bien cuc bo  =0
    echo $x;
    $x++;

}
myTest();// sau moi lan goi ham thuc thi, bien sex chua thong tin lan cuoi cung dc goi
myTest();
myTest();
*/







