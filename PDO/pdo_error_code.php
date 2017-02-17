<?php
/**
 * Created by PhpStorm.
 * User: drago
 * Date: 2017/2/17
 * Time: 11:46
 */

header('content-type:text:html;charset=utf-8');
try {
  $dsn = 'mysql:host=localhost;dbname=test';
  $username = 'root';
  $password = '111111';
  $pdo = new PDO($dsn, $username, $password);

  $sql = 'update user_ set username="fff" WHERE id=1';
  $res = $pdo->exec($sql);
  if($res === FALSE){
    //SQLSTATE的值
    echo $pdo->errorCode();
    //返回的错误信息数组,数组中包含3个单元
    //0 => SQLSTATE, 1 => CODE, 2=> INFO
    print_r($pdo->errorInfo());
  }



} catch (PDOException $e) {
  echo $e->getMessage();
}