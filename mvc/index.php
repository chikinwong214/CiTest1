<?php
/**
 * Created by PhpStorm.
 * User: zjhuang
 * Date: 2019/7/24
 * Time: 17:11
 */
//这是一个入口文件
header("content-type:text/html;charset=utf-8");

//控制器
$c = $_GET['c'];

//包含控制器
include './controllers/'.$c.'Controller.php';

//实例化控制器对象
$className = $c.'Controller';
$controller = new $className();

//方法名
$a=$_GET['a'];

//调用方法
$controller->$a();