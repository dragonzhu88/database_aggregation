<?php
	header("Content-type: text/html; charset=utf-8");
	//连库、择库、设定字符集
	mysql_connect('localhost', 'root', '111111');
	mysql_select_db('test');
	mysql_query('set names utf8');
	//发指令、取数据
	$query = mysql_query('select * from test_1');

	$arr = mysql_fetch_assoc($query);

	print_r($arr);


?>