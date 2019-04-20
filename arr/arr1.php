<?php
/**
 * 数组
 * User: xiangning
 * Date: 2019/4/19
 * Time: 0:53
 */

define("BR","<br />");
$arr1 = array(1,3,3,4,423,3,4,2,43,42,4);

$arr2['one'] = 1;
$arr2['two'] = 2;
$arr2['three'] = 3;

print_r($arr1);

echo BR;

print_r($arr2);

$arr1['arr'] = $arr2;

echo BR;
print_r($arr1);

echo BR;

foreach ($arr2 as $str){
    echo $str.BR;
};


echo BR;
list($a,$b,$c,$d) = array("aaa","bbb","ccc","ddd");
echo $a.BR;

while(list($key,$value) = each($arr1)){
        echo $key,"--",$value.BR;
}

echo BR;
foreach ($arr2 as $key => $value){
    echo "key = " .$key ," ; value = ",$value.BR;
}



