<?php
$arr = [1,2,3,4,5,1,1,2,12312,99,-1];
//tim min, max, so lap
function Tim_min($arr){
     $min = $arr[0];
     for($i=0; $i<count($arr); $i++){
         if($arr[$i]<$min){
            $min = $arr[$i];
        }
    }
    return $min;
}
$x = Tim_min($arr);
echo "Min: ";
echo $x;
echo "\r\n";

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
function Same($arr){
    $c=[];
    for($x=0; $x<count($arr); $x++){
        for($y=0; $y<count($arr);$y++){
            if($x != $y && $arr[$y] == $arr[$x]){
                // echo "\r\n";
                // echo $x." ".$y ."_".$arr[$x]." ".$arr[$y];
                $c[]= $arr[$x];
            }
        }
    }
    return $c;
}
$k = Same($arr);
echo "\r\n";
echo "Same: ";
echo json_encode($k);


function Duplicate($arr){

    $listDup=[];
    foreach($arr as $val){
        if(array_key_exists((string)$val, $arr) == false){
            $listDup[(string)$val]=1;}
        else
        {
            $listDup[(string) $val] = $listDup[(string) $val] + 1;
        }
    }
    return $listDup;
    echo $listDup;
    
}
$k = Duplicate($arr);
echo "\r\n";
echo "Duplicate: ";
echo json_encode($k);
// print_r($k);
echo "\r\n";
echo "Phần tử trùng lặp: ";
foreach($k as $key=>$value){
    if($value > 1){
        print_r($key." ");
        //echo json_encode($key);
        //echo json_encode($key);
    }  
}