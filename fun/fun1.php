<?php
/**
 * Created by PhpStorm.
 * User: xiangning
 * Date: 2019/4/19
 * Time: 0:29
 */

define("BR","<br />");

$b = 'bbb';

function fun(&$b){
    $a = 100;
    $b = 'ccccc';
    return $a;
}

echo isset($a) == NULL;
echo fun($b).BR;
echo $b.BR;


/**
 * function_exist();  检测函数是否已定义
 */
if(function_exists("fun")){
    echo "函数已存在";
}else{
    echo "函数不存在";
}
echo BR;
function sum ($int1= 0 , $int2 = 0 ,  $int3 = 0 ){
    return $int1 + $int2 + $int3;
}
echo sum();