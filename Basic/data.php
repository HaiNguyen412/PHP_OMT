<?php
// kieu: int, float, string, boolean, array, object, null, resource
// //ex1: string 
// $x = "hello world";
// $y = "hello Hai";
// echo $x;
// echo $y;


// //ex2: int 
// $x = 45634;
// var_dump($x);//var_dump() trong php tra ve kieu du lieu va gia tri


// // //EX3: float
// // $x = 223.234;
// // var_dump($x);


// // //ex4: mang(array)
// // $cars = array("BMW", "HONDA","YAMAHA");
// // var_dump($cars);


// //ex5: object-doi tuong trong php
// class Car{
//     public $color;
//     public $model;
//     public function __construct($color, $model)
//     {
//         $this->color = $color;
//         $this->model = $model;
//     }
//     public function message(){
//         return "My car is a ".$this->color. "". $this->model. "!";
//     }
// }
// $myCar = new Car("Black", "Toyota");
// echo $myCar->message();
// $myCar = new Car("red", "toyota");
// echo $myCar ->message();



// //Exx: gia tri null 
//  $x = "Hello a hai";
//  $x = null;//lam trong cac bien bang cach dat gia tri null 
//  var_dump($x);


//ex: Ham chuoi php
//strlen(): tra ve do dai cua chuoi
//echo strlen("Hello world");
//str_word_count()//dem so tu trong 1 chuoi
echo str_word_count("Hello World!");
//strrev(): dao nguoc chuoi
//echo strrev("Hello world!");
//strpos: tim kiem van ban trong chuoi 
//echo strpos("Hello World!", "World");
//str_replace: thay the van ban trong mot chuoi 
//echo str_replace("world", "Dolly", "Hello world!");

























































