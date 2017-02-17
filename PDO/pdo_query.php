<?php
/**
 * Created by PhpStorm.
 * User: drago
 * Date: 2017/2/17
 * Time: 14:48
 */

header("content-type:text/html;charset=utf-8");
$dsn = "mysql:host=localhost;dbname=test";
$username = 'root';
$password = '111111';

$pdo = new PDO($dsn,$username,$password);

$sql = 'select * from user_info';
$stmt = $pdo->query($sql);

var_dump($stmt);

echo "<br>";
echo "<pre>";

foreach ($stmt as $row){
  var_dump($row);
}
