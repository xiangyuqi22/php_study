<?php
/**
 * Created by PhpStorm.
 * User: xiangning
 * Date: 2019/4/20
 * Time: 7:51
 */

define("FILE_NAME","file.txt");
define("BR","<br />");

if(file_exists(FILE_NAME)){
    echo "文件是存在的";
}else{
    echo "文件是不存在的";
}
echo BR;
echo "读取文件内容";
echo BR;
echo $fileContent = file_get_contents(FILE_NAME);
echo BR;
file_put_contents("file2.txt",$fileContent);

echo BR;
echo "获取文件大小".filesize(FILE_NAME);
