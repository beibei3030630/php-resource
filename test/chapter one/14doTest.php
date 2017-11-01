<?php
//接收超链接发送过来的数据
print_r($_GET);

echo "<hr/>";
echo $_GET['username'].'<br/>';
echo $_GET['age'].'<br/>';
echo $_GET['a'].'<br/>';

//通过预定义变量$_REQUEST同样可以接收到参数
echo $_REQUEST['username'].'<br/>';
echo $_REQUEST['age'].'<br/>';
echo $_REQUEST['a'].'<br/>';

//常量 1-10选择题
$_GET['name']='imooc';
$_POST['address']='北京';
var_dump($_GET);
echo '<br/>';
var_dump($_POST);
echo "<br/>";
var_dump($_REQUEST);
