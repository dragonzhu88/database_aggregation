<?php
/**
 * Created by PhpStorm.
 * User: drago
 * Date: 2017/2/16
 * Time: 17:56
 */
header('content-type:text:html;charset=utf-8');
try {
  $dsn = 'mysql:host=localhost;dbname=test';
  $username = 'root';
  $passwd = '111111';
  $pdo = new PDO($dsn, $username, $passwd);
  //exec():执行一条sql语句并返回其受影响的记录条数
  //exec对于select没有作用

  $sql = 'delete from user_info WHERE id=1';
//  echo $sql;
  $res = $pdo->exec($sql);
  echo '受影响的条数：' . $res;

} catch (PDOException $e) {
  echo $e->getMessage();
}