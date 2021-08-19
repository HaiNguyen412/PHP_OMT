<?php 


//$GLOBALS:chuc nang có thể truy cập các biến toàn cục từ bất kì đâu trong tập lệnh 
// lưu trữ trong 1 mảng $GLOBALS[]
//ex1:
// $x = 75;
// $y = 35;
// function addition(){
//     $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
// }

// addition();
// echo $z;




//$_SERVER: la bien co san trong moi pham vi 
//chua thong tin tieu de, duong dan va vi tri tap lenh 
//EX2:

// echo $_SERVER['PHP_SELF'];//Trả về tên tệp của tập lệnh hiện đang thực thi
// echo $_SERVER['PHP_INTERFACE'];//Trả về phiên bản của Giao diện cổng chung (CGI) mà máy chủ đang sử dụng
// echo $_SERVER['SERVER_ADDR'];//Trả về địa chỉ IP của máy chủ lưu trữ
// echo $_SERVER['SERVER_NAME'];//tra ve ten server 
// echo $_SERVER['SERVER_SOFTWARE'];//tra ve phan mem su dung chay server
// echo $_SERVER['SERVER_PROTOCOL'];//Trả về tên và bản sửa đổi của giao thức thông tin (chẳng hạn như HTTP / 1.1)
// echo $_SERVER['REQUEST_MEHTOD'];//Trả về phương thức yêu cầu được sử dụng để truy cập trang (chẳng hạn như POST)
// echo $_SERVER['REQUEST_TIME'];//Trả về dấu thời gian bắt đầu yêu cầu (
// echo $_SERVER['HTTP_ACCEPT_CHARSET'];//Trả về chuỗi truy vấn nếu trang được truy cập qua chuỗi truy vấn
//echo $_SERVER['HTTP_HOST'];//Trả về tiêu đề Máy chủ lưu trữ từ yêu cầu hiện tại
//echo $_SERVER['HTTP_REFERER'];



//$_REQUEST: dung the thu tha[p du lieu sau khi gui bieu mau html]

//$GET:

echo "HOC" . $_GET['Mon hoc'] . 'o' . $_GET["web"];






