<?php
/**
 * Created by PhpStorm.
 * User: xiangning
 * Date: 2019/4/20
 * Time: 8:01
 */

header("Context:text/html;charet=utf-8");

//echo $_POST["username"];
//echo $_FILES['file'];

define("DIR","../uploadData/");

print_r($_FILES);

if( $_FILES['file']['error'] == 0  &&   is_uploaded_file($_FILES['file']['tmp_name'])){
    $subfix = strstr($_FILES['file']['name'],'.');

    $fileName =  md5(time());

    echo time();
    if(!file_exists(DIR)){
        mkdir(DIR);
    }
    $filePath = DIR.$fileName.$subfix;
    move_uploaded_file($_FILES['file']['tmp_name'],$filePath);
}

