<?php

// // // $a=[1, 2, 3];
// // // $b=["a", "b"];
// // // $d=["x", 1];

// function GhepPhanTu($a, $b){
//     $c =[];
//     foreach($a as $vala){
//         foreach($b as $valb)
//         {
//             $c[]=Check1($vala, $valb);
//         }
//     }
//     return $c;
// }
// function Check1($vala, $valb)
// {
//     $c1=[];
//     if(is_array($vala))
//     {
//         foreach($vala as $valA)
//         {
//             $c1[] = $valA;
//         }
//     }
//     else 
//     {
//         $c1[] = $vala;
//     }
//     if(is_array($valb)){
//         foreach($valb as $valB){
//             $c1[] = $valB;
//         }
//     }
//     else 
//     {
//         $c1[] = $valb;
//     }
//     return $c1;  
// }

// $c = GhepPhanTu([1, 2 ],["a", "b"]);
// echo json_encode($c);
// echo "\r\n---";



//dhep phan tu 
// function Ghep($c, $d){
//     $z=[];
//     foreach($c as $valc){
//         foreach($d as $vald){
//             $z[] = Check2($valc, $vald);
//         }
//     }
//     return $z;
// }
// function Check2($valc, $vald){
//     $d1=[];
//     if(is_array($valc)){
//         foreach($valc as $valC){
//             $d1[] = $valC;
//         }
//     }
//     else
//     {
//         $d1[] = $valc;    
//     }
//     if(is_array($vald)){
//         foreach($vald as $valD){
//             $d1[] = $valD;
//         }
//     }
//     else
//     {
//         $d1[] = $vald;    
//     }
//     return $d1;
// }
// echo "\r\n---";
// $k  = Ghep($c,["x", 1]);
// echo json_encode($k);


// $a=[1, 2, 3];
// $b=["a", "b"];
// $c=[4, 5];
// $d=["x", 1];
// function GhepPTNangCao($input){
//     $count = count($input);
//     if($count == 0) return [];
//     if($count ==1) return $input[0];
//     $temp=$input[0];
//     for($i=1; $i<$input;$i++){
//        $temp = GhepPhanTu($temp, $input[$i]);
//     }
//     return $temp;
// }
// $input = array($a, $b);
// $output = GhepPTNangCao($input);
// echo json_encode($output);
// echo "\r---\n";

$arr = [1,2,3,4,5,1,1,2,12312,99,-1];
function Tim_max($arr){
    $max = $arr[0];
    for($x=0; $x<count($arr); $x++){
        if($arr[$x]>$max) 
        {
            $max = $arr[$x];
        }
    }
    return $max;
}
$y = Tim_max($arr);
echo "Max: ";
echo $y;
