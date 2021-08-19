<?php

// class Name{
//     public static function Welcome(){
//         echo "Hello World";
//     }
//     public function __construct(){
//         self::Welcome();
//     }
// }
// class Classes{
//     public function Message(){
//         echo Name::Welcome();
//     }
// }
// new Name();
// //Name::Welcome();
class Animals{
    protected static function GetName(){
        return "Dong vat";
    }
}
class Cat extends Animals {
    public $name;
    public function __construct(){
        $this->name = parent::GetName();//gọi phuwogn thức tĩnh trong lớp con dùng parent
    }
}
$cat = new Cat();
echo $cat->name;