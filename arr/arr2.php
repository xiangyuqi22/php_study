<?php
/**
 * 数组的内置函数
 * User: xiangning
 * Date: 2019/4/19
 * Time: 1:11
 */



define("BR","<br />");

e("数组的内置函数");

function e($str){
    echo $str.BR;
}

$arr1 = array("libai","dufu","baijuyi","sudongpo");
$arr2 = array('songjiang','likui','yanqing','wusong');
print_r($arr1);

echo BR;
array_push($arr1,"ouyangxiu");

print_r($arr1);

echo BR;

print_r(count($arr1));
echo BR;

print_r(sort($arr1));
print_r($arr1);