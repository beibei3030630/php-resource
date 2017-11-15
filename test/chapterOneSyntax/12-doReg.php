<?php

//预定义变量 PHP提供给大家直接就可以使用的变量。所有预定义变量都是全局变量。并且都是数组。
/*
	$GLOBALS 超全局变量，包含以下所有的预定义变量
	$_SERVES  服务器和执行环境信息变量
	$_COOKIE 
	$_SESSION
	$_FILES
	$_GET
	$_POST
	$_REQUEST

 */

//$_POST接收表单发送过来的数据
//$_POST['名称']
//主要接受表单以post形式发送的数据

echo  '用户名 '.$_POST['username'].'<br/>';

echo '<br/>';

echo '密码 '.$_POST['password'].'<br/>';

echo '<br/>';

echo '邮箱 '.$_POST['email'];