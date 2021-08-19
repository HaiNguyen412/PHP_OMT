<?php
// class Fruit{
//     public $name;
//     public $color;
//     function set_name($name){
//         $this->name = $name;
//     }
//     function get_name(){
//         return $this->name;
//     }
//     function set_color($color){
//         $this->color = $color;
//     }
//     function get_color(){
//         return $this->color;
//     }
// }
// $tao = new Fruit();
// $chuoi = new Fruit();
// $tao->set_name('apple');
// $chuoi->set_name('banana');
// $tao->set_color("Do");
// $chuoi->set_color("Do");
// echo $tao ->get_name();
// echo $chuoi->get_name();
// echo $tao->get_color();
// echo $chuoi->get_color();



//keyword $this->: tu khoa de cap den doi tuong hien tai chi co san trng phuowng thuc 
//thay doi gia tri cua thuoc tinh $name:
// class Fruit{
//     public $name;
//     function set_name($name)// thay doi gia tri cua bien $name bang cach dung tu khoa this
//     {
//         $this->name = $name;
//     }
//     function get_name(){
//         return $this->name;
//     }
// }
// // $apple = new Fruit();
// $apple->set_name("Apple");
// echo $apple->get_name();



//cach 2 thay doi thuoct tinh cua bien $name
//  class Fruit{
//     public $name;
//     function get_name(){
//         return $this->name;
//      }
// }
// $apple = new Fruit();
// $apple->name = "Apple";
// echo $apple->get_name();



// tu khoa instanceof kiem tra doi tuong co thuoc lop cu the hay khong 
// $apple = new Fruit();
// var_dump($apple instanceof Fruit);