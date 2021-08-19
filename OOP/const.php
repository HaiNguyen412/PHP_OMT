<?php

class Bye{
    const BYE = "Thank you for watching!";
    public function byebye(){
        echo self::BYE;
    }
}
$goodbye = new Bye();
$goodbye->byebye();
// echo Bye::BYE;



