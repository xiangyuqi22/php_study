<?php
/**
 * Created by PhpStorm.
 * User: xiangning
 * Date: 2019/4/18
 * Time: 20:41
 */
$a = 100;
echo $a;

echo "<br />";
$a = "a";
echo $a;
echo "<br />";
$b = "bbb";
echo "<br />";
$bbb = "bbbbbbb";
echo $$b;
echo "<br />";
$c = "100a";
echo "c = " , $c;
$d = "200";
echo "<br />";
echo $c;
e();
function e(){
    echo "<br /> function e";
}

e();

$a = 100;
echo "<br />";
f($a);
function f($a){
    echo $a;
}
