<?php
/**
 * Created by PhpStorm.
 * User: drago
 * Date: 2017/2/17
 * Time: 16:36
 */

header('content-type:text/html:charset=utf-8');
try{
  $dsn = 'mysql:host=localhost;dbname=test';
  $username = 'root';
  $password = '111111';

  //在options可选参数中设置属性
  $options = [
    PDO::ATTR_AUTOCOMMIT => 0,
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
  ];
  $pdo = new PDO($dsn,$username,$password,$options);
  echo $pdo->getAttribute(PDO::ATTR_AUTOCOMMIT);

  echo $pdo->getAttribute(PDO::ATTR_ERRMODE);
}catch (PDOException $e){
  $e->getMessage();
}