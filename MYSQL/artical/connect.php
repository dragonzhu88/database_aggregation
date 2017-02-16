<?php
/**
 * Created by PhpStorm.
 * User: drago
 * Date: 2017/2/16
 * Time: 14:40
 */
require_once('config.php');

//连库

$con = mysql_connect(HOST, USERNAME, PASSWORD);
if ($con) {
  echo 'connect ok';
}
else {
  echo mysql_error();
}
//选库
if (mysql_select_db('test')) {
  echo 'select ok';
}
else {
  echo mysql_error();
}
//定义字符集
if (mysql_query('set names utf8')) {
  echo 'set names ok';
}
else {
  echo mysql_error();
}