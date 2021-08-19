<?php 
function GhepPhanTu($a, $b){
    $c = [];
    foreach($a as $itema){
        foreach($b as $itemb){
            $c[] =Check($itema, $itemb);
        }
    }
    return $c;
}
function Check($itema, $itemb){
    $c1=[];
    if(is_array($itema)){
        foreach($itema as $itemA){
            $c1[]=$itemA;
        }  
    }
    else
    {
        $c1[]=$itema;
    }
    if(is_array($itemb)){
        foreach($itemb as $itemB){
            $c1[]=$itemB;
        }  
    }
    else
    {
        $c1[] = $itemb;
    }
    return $c1;
}
$x = GhepPhanTu([1, 2, 3], ["a", "b", "x", "y"]);
echo json_encode($x);
echo "\r\n------\n";


$d=["x", 1];
echo "\r\n------\n";
function GhepPhanTuMoi($x, $d){
    $z = [];
    foreach($x as $itemx){
        foreach($d as $itemd){
            $z[] = Check1($itemx, $itemd);  
        }
    }
    return $z;
}
function Check1($itemx, $itemd){
    $z1=[];
    if(is_array($itemx)){
        foreach($itemx as $itemX){
            $z1[]=$itemX;
        }
    }
    else
    {
            $z1[]=$itemx;
    }
    if(is_array($itemd)){
        foreach($itemd as $itemD){
            $z1[] = $itemD;
        }
    }
    else
    {
        $z1[] = $itemd;
    }
    return $z1;
}
echo "Ghep phan tu moi: ";
$k = GhepPhanTuMoi($x, $d);
echo json_encode($k);
echo "\r\n------";

$a=[1, 2, 3];
$b=["a", "b"];
$c=[4, 5];
$d=["x", 1];
function GhepPTNangCao($input){
    $count = count($input);
    if($count == 0) return [];
    if($count ==1) return $input[0];
    $temp=$input[0];
    for($i=1; $i<$count;$i++){
       $temp = GhepPhanTu($temp, $input[$i]);
    }
    return $temp;
}
$input = array($a);
$output = GhepPTNangCao($input);
echo json_encode($output);
echo "\r---\n";