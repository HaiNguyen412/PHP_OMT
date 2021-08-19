<?php 
//vong lap 
// while - lặp qua một khối mã miễn là điều kiện được chỉ định là đúng
// do...while - lặp qua một khối mã một lần và sau đó lặp lại vòng lặp miễn là điều kiện được chỉ định là đúng
// for - lặp qua một khối mã một số lần được chỉ định
// foreach - lặp qua một khối mã cho mỗi phần tử trong một mảng

//while khi dieu kien dung thi thuc thi lenh
// $x = 1;
// while($x<=10)
// {
//     echo "$x";
//     $x++;
// }



//do .. while: thuc thi lenh cho den khi gap dk dung 
// $x=1;
// do{
//     echo "$x";
//     $x++;

// }while($x<=10);



//for: lap khi biet gia trij dau cuoi can duyet
// for($x =0; $x<=10; $x++){
// echo "$x";
// }


//vong lap foreach: hoat dong tren mang 
//Đối với mỗi lần lặp vòng lặp, giá trị của phần tử mảng hiện tại được gán cho giá trị $ và con trỏ mảng được di chuyển từng con một, cho đến khi nó đến phần tử mảng cuối cùng.
$color = array("xanh", "do", "tim", "vang");
foreach($color as $value){
    echo "$value";
}


// beak: ngawts cong lap
// for($x =0; $x<=10; $x++){
//     if($x==5){
//         //break;
//         continue;
//     }
//         echo "$x";
// }

