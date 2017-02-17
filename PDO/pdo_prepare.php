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

$row = $stmt->fetch();
print_r($row);