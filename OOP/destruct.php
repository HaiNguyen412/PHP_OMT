<?php
// //hàm hủy sẽ đc gọi tự động ở cuối tập lệnh
//hàm hủy sẽ đc gọi tự động ở cuối tập lệnh

class Fruit{
    public $name;
    public $color;
    function __construct($name, $color)
    {
        $this->name=$name;
        $this->color=$color;
    }
    function __destruct()
    {
        echo "the fruit is". $this->name."the color is". $this->color;
     }
}
$apple = new Fruit('Qua tao', "mau den ");