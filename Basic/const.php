<?php


//hang so sinh danh cho 1 gia ri don gian , k the thay doi 
//ten hang hop le bang 1 chu cai hoac dau gach duoi k co $
// hang tu dong la toan cuc tren toan bo tap lenh 
//define(name, value, case-insensitive)
// define("Hello", "Welcome to OMT", true);//tao hang co ten k phan biet chu hoa chu thuong 
// echo Hello;


//const array: mang co dinh rong php 
// define("cars",["romeo", "bmw", "toyota"]);
// echo cars[0];


// hang so la toan cuc nen co the su dung trong ham 
define("HELLO", "welcome to my house!");
function myTest(){
    echo HELLO;
}
myTest();