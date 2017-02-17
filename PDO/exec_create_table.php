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
  var_dump($pdo);

  $sql = <<<EOF
CREATE TABLE IF NOT EXISTS user_info(
id INT UNSIGNED AUTO_INCREMENT KEY,
username VARCHAR(20) NOT NULL UNIQUE,
password CHAR(32) NOT NULL,
email VARCHAR(30) NOT NULL
);
EOF;

  $res = $pdo->exec($sql);
  var_dump($res);

} catch (PDOException $e) {
  echo $e->getMessage();
}