<?php
/**
 * Created by PhpStorm.
 * User: drago
 * Date: 2017/2/16
 * Time: 17:40
 */

/*第一种链接*/
try{
  $dsn='mysql:host=localhost;dbname=test';
  $username='root';
  $passwd = '111111';
  $pdo = new PDO($dsn,$username,$passwd);
  var_dump($pdo);

}catch (PDOException $e){
  echo $e->getMessage();
}

/*通过uri链接*/
//try {
//  $dsn = 'uri:file://C:\project\database_aggregation\PDO\dsn.txt';
//  $username = 'root';
//  $passwd = '111111';
//  $pdo = new PDO($dsn, $username, $passwd);
//  var_dump($pdo);
//
//} catch (PDOException $e) {
//  echo $e->getMessage();
//}