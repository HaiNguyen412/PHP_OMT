<?php 
// function GiaiThua($n){
//     if($n==0){
//         return 1;
//     }
//     else{
//         return $n * GiaiThua($n-1);
//     }
// }
// echo GiaiThua(5);

// function SoNguyenTo($n){
//     for($x = 2; $x <$n; $x++)
//     {
//         if($n%$x == 0){
//             return 0;
//         }
//     }
//     return 1;
// }
// $a = SoNguyenTo(3);
// if ($a == 0){
//     echo "NOT";
// }
// // else{
// //     echo "YES";
// // }


// function ex($x){
//     for($x = 1; $x <= 100; $x++){
//         if($x % 3 == 0 && $x %5 == 0){
//             echo "FizzBuzz$x ";
//         }
//         else if($x %3 == 0){
//             echo "Fizz$x ";
//             }
//         else if($x %5 == 0){
//             echo "Buzz$x ";
//         }
//     }
// }
// ex($x);


// Hàm tính giá trị của phần tử thứ $n của dãy Fibonacci
// function Fibo($n){
//     if($n < 0){
//         return -1;
//     }
//     else if($n == 0 || $n == 1){
//         return $n;
//     }
//     else {
//         return (Fibo($n - 2) + Fibo($n -1));
//     }
// }
// for($i = 0; $i < 10; $i ++) {
//     echo Fibo($i);
// }


// function ham_sap_xep_mang($a)  
// {  
//  for($x=0; $x < count($a);++$x)  
//   {  
//     $min = $x;  
//   for($y=$x+1; $y < count($a);++$y)  
//    {  
//      if($a[$y] < $a[$min] )   
//      {  
//        $temp = $a[$min];  
//        $a[$min] = $a[$y];  
//        $a[$y] = $temp;  
//      }  
//     }  
//   }  
//  return $a;  
//  }  
// $a = array(51,14,1,21, 23, 54, 67 ,34 ,23, 67, 78,745, 675);  
// //print_r(ham_sap_xep_mang($a));
// sort($a);
// print_r($a);

