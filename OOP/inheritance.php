<?php
//kế thừa trong php khi 1 lớp dẫn xuất từ 1 lớp khác 
//lớp con sẽ thừa hưởng lại tất cả các thuộc tính..... 
// 1 lớp kế thừa được xác định bằng cash sử dụng extends từ khóa 
class Fruit{
    public $name;
    public $color;
    public function __construct($name, $color)
    {
        $this->name=$name;
        $this->color=$color;
    }
    public function intro()
    {
        echo "The fruit is: ". $this->name."\nThe color is: ". $this->color;
    }
}
class Dautay extends Fruit{
    public function message(){
        echo "Message: ";
    }
}
$Dautay = new Dautay("Dâu tây", "Màu hồng");
$Dautay->message();
$Dautay->intro();
// // kế thừa và sửa đổi quyền truy cập đc bảo vệ 
// class Fruit{
//     public $name;
//     public $color;
//     public function __construct($name, $color)
//     {
//         $this->name = $name;
//         $this->color - $color;
//     }
//     protected function intro(){
//         echo "The fruit is ". $this->name. "and the color is". $this->color;
        
//     }
// }


// class Dautay extends Fruit{
//     public function message(){
//         echo "Toi co mot trai bo";
//         $this->intro();//gọi phương thức intro trong lớp dẫn xuất
//     }
// }
// $Dautay = new Dautay('Dau tay', 'red');
// $Dautay->message();//do phương thức mesage đc khai báo public nên vẫn gọi dc ngoài lớp
// //$Dautay->intro();//lỗi do intro đc bảo vệ bơi protected
// $Dautay->intro();