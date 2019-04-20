<?php
/**
 * Created by PhpStorm.
 * User: xiangning
 * Date: 2019/4/20
 * Time: 8:47
 */

//$host = '', $user = '', $password = '', $database = '', $port = '', $socket = ''
require_once "../common/constant.php";
define("HOST","virtual_mechine");
define("USER","develop");
define("PASSWORD","Dev@2017");
define("DATABASE","web_jk");
define("PORT","3306");
$conn = mysqli_connect(HOST,USER,PASSWORD,DATABASE,PORT)
    or die("数据库连接失败");

//选择数据源
$bool = mysqli_select_db($conn,"web_jk") or die("数据库选择失败");

//查询SQL
$query = mysqli_query($conn,"select * from web_user");

var_dump($query).BR;

//获取结果集
//$result = mysqli_fetch_row($query);
//
//print_r($result).BR;
//
//$result = mysqli_fetch_row($query);
//
//print_r($result).BR;

echo HR;

for($i = 0; $i < $query->field_count ; $i++){
    $result = mysqli_fetch_row($query);
    print_r($result).BR;
}

$conn->commit();

$conn->close();