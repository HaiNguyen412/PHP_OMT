<?php
// abstract class Car{
//     public $name;
//     public function __construct($name){
//         $this->name = $name;
//     }
//     abstract public function intro():string;
// }
// class Audi extends Car{
//     public function intro():string{
//         return "I am an $this->name";
//     }
// }
// $audi = new Audi('Audi');
// echo $audi->intro();

abstract class parentclass{
    abstract protected function typeName($name);
}
class child extends parentclass {
    public function typeName($name){
        if($name == "Hai"){
            $type = "Mr";
        }
        else if($name == "Van Anh"){
            $type = "Ms.";
        }
        else{
            $type = "";
        }
        return $type." ".$name;
    }
}
$class = new child;
echo $class->typeName("Van Anh");
echo "\n";  
echo $class->typeName("Hai");  