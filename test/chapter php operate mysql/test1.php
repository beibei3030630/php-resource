<?php
header('content_type:text/html;charset=utf-8');
@mysql_connect('localhost','root','123') or die('数据库连接失败');

mysql_select_db('test') or die('选择的数据库不存在');


mysql_set_charset('utf8');

$result=mysql_query("SELECT * FROM test");
$select=mysql_fetch_array($result,MYSQL_NUM);
var_dump($select);

