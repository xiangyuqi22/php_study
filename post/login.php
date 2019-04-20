<?php
header('Content-type:text/html;charset:utf8');
//require "..\mine\basic.php";

/**
 * Created by PhpStorm.
 * User: xiangning
 * Date: 2019/4/18
 * Time: 23:22
 */
print_r($_POST);
echo "<br />";
$username = $_POST['username'];
$password = $_POST['password'];
echo $username,"<br />",$password;

print_r($_FILES);

echo "<br />";
//if($_SESSION == NULL){
//    echo "sission 是存在的";
//}

//echo constant;

echo "<hr />";
foreach ($_POST as $a){
    echo "<br />".$a;
}