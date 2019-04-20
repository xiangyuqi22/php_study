<?php
/**
 * incloude  和  require
 *
 * 区别：如果引用出错
 * include 会给一个致命的错误
 * require 会警告
 *
 * include_once  检测是否被引用过，如果已引用就不再会执行了
 *
 *
 *
 * User: xiangning
 * Date: 2019/4/19
 * Time: 0:36
 */
include_once "include1.php";
include_once "include1.php";
require_once "require1.php";
require_once "require1.php";
fun_include();
fun_require();

