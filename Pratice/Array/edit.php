<?php
//  $list_color = array('green', 'red', 'blue');
//  //them black vao mang 
//  // mag tren co key tu dong 
//  $list_color[] ='black';
//  //print_r($list_color);



 // them phan tu vao mang co key dc xac dinh truoc
 //them mot sinh vien co ma so sinh vien 18810340648 Nguyen viet hai 
//  $student = array(
//     1 => "Phan Văn Cương",
//     2 => "Nguyễn Văn Hoàng",
//     3 => "Bùi Việt Đức",
// );
// $student[4]="Nguyễn Viết Hải";
// //print_r($student);




//cập nhật mảng key tu dong va key xac dinh
// //cap nhat  blue = black voi key tu dong 
// $list_color = array('green', 'red', 'blue');
// //them black vao mang 
// // mag tren co key tu dong 
// $list_color[0] ='black';
// //print_r($list_color);

// //edit phan tu mang voi ke xac dinh 
// $student[1] = "Tào Nhật Ninh";
// //print_r($student);


// xoa phan tu trong mang phai biet key 
// $list_color = array('green', 'red', 'blue');
// //xoa dung unset
// unset($list_color[1]);
// //print_r($list_color);

// // xoa phan tu voi key xac dinh
// $student = array(
//     1 => "Phan Văn Cương",
//     2 => "Nguyễn Văn Hoàng",
//     3 => "Bùi Việt Đức",
// );
// unset($student[2]);
// //print_r($student);

// //thêm một phần tử vào vị trí bất kì trong mảng 
// $arr1 = array(1, 2, 3, 4, 5, 6, );
// echo "Mảng ban đầu: ";
// foreach($arr1 as $x){
//     echo $x;
// }
// $insert = "H";
// array_splice($arr1, 0, 0, $insert);// cú pháp array_splice($array, $offset [, $lenght, $replace]);
// echo "     Mảng mới: ";
// foreach($arr1 as $x){
//     echo $x;
// }
// echo "\r\n------\n";

// $numbers = array( 1, 2, 3, 4, 5, 6, 7, 6);
// foreach( $numbers as $value )
// {
//     //echo "Giá trị phần tử mảng là $value    ";
// }

// $list_color = array('green', 'red', 'blue');
// //echo count($list_color);
// //echo count($numbers);


// //$array_values($array): ham co tac dung dua mang ve mang tuan tu 
// $student = array(
//     'a' => "Phan Văn Cương",
//     'b' => "Nguyễn Văn Hoàng",
//     'c' => "Bùi Việt Đức",
// );


// print_r(array_values($student));
//print_r(array_pop($student));//array_pop: ham tra ve phan tu cuoi cung cua mang 

//print_r(array_push($student, 'Nguyễn Hoàng Hiệp'));//array_push: co tac dung them mot hoac nhieu phan tu vao cuoi mang va tra ve so luong phan tu sau khi them 
//print_r($student);


//print_r(array_shift($student));//array_shift: xoa phan tu dau cua mang tra ve phan tu do


// print_r(array_unshift($student, 'Nguyen Hoang Hiep', 'Nguyen hai'));//them mot hoac nhieu phan tu vao dau mang tra ve so luong sau khi them 
// print_r($student);


//print_r(array_flip($student));//chuyeern ddooir key mangr thanh value va ngc lai


//$numbers = array( 1, 2, 3, 4, 5, 6, 7, 6);
// sort($numbers);// sawps xep tu nho den lon 
// print_r($numbers);

//print_r(array_reverse($numbers));// đảo ngược mảng


//print_r(array_merge($numbers, $student));
//gọp 2 mảng thành 1 mảng 

//print_r(array_rand($numbers));
//print_r(array_rand($numbers, 3));//ham lay key ngau nhien trong mang voi so la so luong muob lay 

// $student = array(
//     'a' => "Bùi Việt Đức",
//     'b' => "Nguyễn Văn Hoàng",
//     'c' => "Bùi Việt Đức",
//     'd' => "Bùi Việt Đức",
// );

//print_r(array_search('Phan Văn Cương', $student));

//print_r(array_splice($student, 0));
//print_r(array_splice($student, 0,2));//ham co tac dung lay ra $lenght phan thu bat dau tu $begin trong mang 


//print_r(array_unique($student));//loai bo phan tu trung nhau 


// print_r($a = serialize($student));//ma hoa
// print_r(unserialize($a));//dduwa vef trang thai trc khi ma hoa 


// $student = array(
//     'a' => "Bùi Việt Đức",
//     'b' => "Nguyễn Văn Hoàng",
//     'c' => "Bùi Việt Đức",
//     'd' => "Bùi Việt Đức",
//     'd' => "Nguyễn Hoàng Hiệp"
// );
// $student1 = array(
//     'a' => "Bùi Việt Đức",
//     'b' => "Nguyễn Văn Hoàng",
// );
//print_r(array_key_exists('b', $student));//kiem tra khoa key co ton tai rong màn k 
//print_r(in_array('hiệp', $student));//tìm value có trong mảng k 
//print_r(array_diff($student, $student1));tra ve gia tri cua mang 1 cos maf mang 2 k co 
// print_r(array_intersect($student, $student));
// print_r(array_intersect_assoc($student, $student1));// trar vef phan tu giongs nhau a ve key lacn value trong mang 
// print_r(is_array($student1));//kiem tra xembienco spahi mang hay k 
// $a = array(4, 3, 5, 7, 8, );
// //print_r(in_array(5, $a));
// arsort($a);
// print_r($a);


//decode json string 
// $a = array("tao nhat ninh", "nguyen viet hai", "nguyen hoang hiep");
// echo str_word_count('tao nhat ninh');

// $b = "Nguyen van a";
// $c = "hien dang la sinh vien";
// echo $b ."\r".$c;


//sắp xếp mảng tăng dần theo value 
$student = array(
   "Hải"=> 15,
   "Ninh"=> 22,
   "Hiệp" => 23,
   "Lan" => 17,
   "Nga" => 30,
   "Anh" => 30
);
//asort($student);
ksort($student);
foreach($student as $k => $val){
    echo "Tên của " . $val . " là: ".$k;
    echo "\r\n------\n"; 
}
