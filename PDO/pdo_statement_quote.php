<?php
/**
 * Created by PhpStorm.
 * User: drago
 * Date: 2017/2/17
 * Time: 16:54
 */


header('content-type:text/html:charset=utf-8');
try{
  $dsn = 'mysql:host=localhost;dbname=test';
  $username = 'root';
  $password = '111111';
  $pdo = new PDO($dsn,$username,$password);

  $sql = "select * from user_info WHERE username='{$username}' AND password='{$password}'";
  $stmt = $pdo->query($sql);
  echo $stmt->rowCount();
}catch (PDOException $e){
  $e->getMessage();
}