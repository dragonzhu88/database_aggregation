<?php
/**
 * Created by PhpStorm.
 * User: drago
 * Date: 2017/2/17
 * Time: 15:04
 */

header('content-type:text/html;charset=utf-8');
$dsn = 'mysql:host=localhost;dbname=test';
$username = 'root';
$password = '111111';

$pdo = new PDO($dsn,$username,$password);

$sql = 'select * from user_info';
//准备sql语句
$stmt = $pdo->prepare($sql);
//执行预处理语句
$res = $stmt->execute();

//取出一行数据
//$row = $stmt->fetch();
//print_r($row);

//循环取出所有数据，索引+关联
//if($res){
//  while ($row = $stmt->fetch()){
//    var_dump($row);
//    echo '<hr>';
//  }
//}

//循环取出所有数据，关联
//if($res){
//  while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
//    var_dump($row);
//    echo '<hr>';
//  }
//}

//循环取出所有数据，索引
//if($res){
//  while ($row = $stmt->fetch(PDO::FETCH_NUM)){
//    var_dump($row);
//    echo '<hr>';
//  }
//}

//一次取出所有数据
//echo "<pre>";
//$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
//var_dump($rows);

//设置fetch模式
$stmt->setFetchMode(PDO::FETCH_ASSOC);
echo "<pre>";
$rows = $stmt->fetchAll();
var_dump($rows);