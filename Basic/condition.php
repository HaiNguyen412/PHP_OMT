<?php 
// // dau ra .... neeus tg hien taij nho hon 20 
// $t = date("19");
// if($t<"20"){
//     echo "Have a good day ";
// }


// // //cau lenh if else 
// $t = date("30");
// if($t <"20"){
//     echo " chuc mot ngay tot lanh";

// }
// else {
//     echo "good night ";

// }

//ex1
$t = date("23");
if($t<"10"){
    echo "chuc buoi sang tot lanh!";

}elseif($t<"20"){
    echo "chuc mot ngay tot lanh";

}else{
    echo "chuc mot dem tot dep";
}
//ex2
// $a = 30;
// $b = 10;
// if($a>$b)
//     echo "Hello world";
// else{
//     echo "$a > $b";
// }




//switch case
$color = "red";
switch($color)
{
case "blue":
    echo "Mau xanh nuoc bien";
    break;
case "green":
    echo "mau xanh la cay";
    break;
case "red":
    echo " mau do";
    break;
    case "yellow":
        echo "Mau vang";
        break;
    default:
    echo " khong co mau nao";
}







