<?php
$a=[0,1,2,3];

$b=[1,2,3,4,5];
$a+=$b;
echo json_encode($a);


$a=[1,2,3];
foreach($a as &$v){
}
foreach($a as $v){

}
echo json_encode($a);
//如何不使用第三个变量交换两个字符串的值

$str1='abc';
$str2='def';

list($str1, $str2) = array($str2, $str1);

var_dump($str1);

