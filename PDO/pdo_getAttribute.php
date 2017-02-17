<?php
/**
 * Created by PhpStorm.
 * User: drago
 * Date: 2017/2/17
 * Time: 16:16
 */

header("content-type:text/html;charset=utf-8");
$dsn = 'mysql:host=localhost;dbname=test';
$username = 'root';
$password = '111111';

$pdo = new PDO($dsn, $username, $password);

$attrArr = [
  'AUTOCOMMIT','ERRMODE','CASE','PERSISTENT','TIMEOUT'
];

foreach ($attrArr as $attr){
  echo "<br>PDO::ATTR_$attr: ";
  echo $pdo->getAttribute(constant("PDO::ATTR_$attr"));
}
