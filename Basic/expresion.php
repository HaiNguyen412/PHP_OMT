<?php 
//ham bieuthuc chinh quy 
//preg_match: tra ve 1 nei mau d citm trong chuoi ngc lai la 0
//preg_match_all: tra ve so lan mau dc tim thay trong cuoi cx co the la khong 
//perg_replace(): tra ve mot chuoi khac trong khi do cac mau da duco thay the bang mot chuoi kkhac
//$str = 'visit my house house house visit sisit sit';
//$pattern = "/house/i";
//echo preg_match($pattern, $str);tr ve tu co trong chuoi
//echo preg_match_all($pattern, $str);trar ve so chuw cai lap lai
//echo preg_replace($pattern, "Mixi", $str);//doi cho mau thanhf chuoi moi


// cong cu sua doi bieu thuc chinh quy 
//i: Thực hiện tìm kiếm không phân biệt chữ hoa chữ thường
//m: Thực hiện tìm kiếm nhiều dòng (các mẫu tìm kiếm phần đầu hoặc phần cuối của một chuỗi sẽ khớp với phần đầu hoặc phần cuối của mỗi dòng)
//u: 