<?php
/**
 * Created by PhpStorm.
 * User: drago
 * Date: 2017/2/17
 * Time: 11:21
 */

header('content-type:text:html;charset=utf-8');
try {
  $dsn = 'mysql:host=localhost;dbname=test';
  $username = 'root';
  $password = '111111';
  $pdo = new PDO($dsn, $username, $password);

  $sql = 'update user_info set username="fff" WHERE id=1';
  $res = $pdo->exec($sql);
  echo $res . '条记录被影响';


} catch (PDOException $e) {
  echo $e->getMessage();
}