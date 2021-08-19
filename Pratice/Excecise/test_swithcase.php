<?php
class SwithcaseHandle{
    public $arr = array(
    "fade",
    "wipeleft",
    "wiperight",
    "wipeup",
    "wipedown",
    "slideleft",
    "slideright",
    "slideup",
    "slidedown",
    "circlecrop",
    "rectcrop",
    "distance",
    "fadeblack",
    "fadewhite",
    "radial",
    "smoothleft",
    "smoothright",
    "smoothup",
    "smoothdown",
    "circleopen",
    "circleclose",
    "vertopen",
    "vertclose",
    "horzopen",
    "horzclose",
    "dissolve",
    "pixelize",
    "diagtl",
    "diagtr",
    "diagbl",
    "diagbr",
    "hlslice",
    "hrslice",
    "vuslice",
    "vdslice"); 

    function UpperCase($arr){
        switch($arr){
            case 'wipeup':
                echo "Wipeup";
                break;
        
        default:
        echo "error";
        break;
    }
}
    function Handle($input){
        $this->input=$input;
    }
}
$test = new SwithcaseHandle();
 echo $test->Handle('wipeup');
