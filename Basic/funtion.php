<?php
// function SinhVien($name){
//     echo "$name";
// }
// SinhVien("Jani");
// SinhVien("Jani");
// SinhVien("Jani");
// SinhVien("Jani");
// SinhVien("Jani");


// strict_types:tranh loi du lieu khong khop 
// declare(strict_types=1);

//doi so mac dinh cua php 
// function setHeight(int $minheight = 50){
//     echo "Height is $minheight";
// }
// setHeight(300);
// setHeight();



// ham return lai gia tri 

// declare(strict_types=1);
// function sum(int $x, $y){
//     $z = $x +$y;
//     return $z;
// }
// echo "5+10=".sum(5, 10);

 

// //khai bao loai tr ve 
// strict_types:tranh loi du lieu khong khop 
// declare(strict_types=1);
// // function addNumber(float $a, $b) :float{
// //     return $a+$b;
// // }
// // echo addNumber(1.2, 5.2);




// function addNumber(float $a, $b) :float{
//     return $a+$b;
// }
// echo addNumber(1.2, 5.2);



//decle...
// declare (strict_types=1);
// function Sum(int $a, int $b){
//     return $a + $b;
// }



// echo Sum(4, "20 days");

//tham chiếu và tham trị trong php 
//ví dụ tham trị:
// la mot bien thong thuong 
// khi tac dong va thay foi no 

$a = 5 ;
function sum($b){
    $b+=10;
}
sum($a);//goi a tron ham sum se co gia tri la 10 
echo $a;//goi a ngoai ham sum van co gia tri la 5

