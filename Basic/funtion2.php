<?php 
// declare (strict_types=1);
// function Sum(int $a, int $b){
//     return $a + $b;
// }
// echo Sum(4, "dfdf");




// truyền đối số 
// php cac đối số đc truyền giá trị là bản sao gái trị đc sử dụng hàm và biesens đc truyền vào hàm k thay đỏi r
//sử dụng toán tuet &

function add(&$value){
    $value +=5;
}
$num = 2;
add($num);
echo $num;