<?php
/**
 * Created by PhpStorm.
 * User: drago
 * Date: 2017/2/16
 * Time: 17:56
 */

try {
  $dsn = 'mysql:host=localhost;dbname=test';
  $username = 'root';
  $passwd = '111111';
  $pdo = new PDO($dsn, $username, $passwd);
  //exec():执行一条sql语句并返回其受影响的记录条数
  //exec对于select没有作用

  $sql = 'INSERT user_info(username,password,email) VALUES("zdc2","111","12@qq.com")';
//  echo $sql;
  $res = $pdo->exec($sql);
  echo '受影响的条数：'.$res."<br>";
  //lastInsertId()得到新的id号
  echo '最后查出的ID号'.$pdo->lastInsertId();

} catch (PDOException $e) {
  echo $e->getMessage();
}