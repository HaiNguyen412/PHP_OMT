<?php

trait Message{
    public function msg1(){
        echo "hello hai";
    }
}
trait Message1{
    public function msg2(){
        echo "hello Van Anh ";
    }
}

class welcome{
    use Message;
}
class welcome1{
    use Message, Message1;
}
$obj = new welcome();
$obj ->msg1();

$obj1 = new welcome1();
$obj1 ->msg1();
$obj1 ->msg2();