<?php
//对于字符串中的指定字符做增删改查操作

$string="abcdef";
//查找
 echo  $string{0}."<br/>";
 echo  $string{2}."<br/>";

 //修改
 //注意修改的时候只能一个字符替换一个字符
 //不要对于中文字符做操作
 $string{5}="Z";
echo $string."<br/>";

echo "<hr/>";

$string="abc";
$string{0}="hello";
echo $string."<br/>";

//删除
$string="abcdef";
$string{2}='';
echo $string."<br/>";


//添加字符
//一次添加一个
$string="abc";
$string{3}="d";
echo $string."<br/>";
$string{6}="e";
echo $string."<br/>";
var_dump($string);//页面显示abcd e，只会有一个空格。但其实有两个空格，字符串长度为7。


$string="king";
echo $string{0}.'<br/>';
$string{2}="o";
echo $string.'<br/>';
$string{1}='';
echo $string.'<br/>';
$string{4}='!';
echo $string.'<br/>';

$string="Knowledge";
echo $string{1}.$string{2}.$string{3};


//传统写法
$id=2;
$username='beibei';
$email="1686310541@qq.com";
$str="<table border='1' width='80%' bgcolor='pink'>
	<tr>
		<td>编号</td>
		<td>用户名</td>
		<td>邮箱</td>
	</tr>
<tr>
		<td>1</td>
		<td>beibei</td>
		<td>1686310541@qq.com</td>
	</tr>	
	<tr>
		<td>{$id}</td>
		<td>{$username}</td>
		<td>{$email}</td>
	</tr>	

<table>
";
echo $str;


//heredoc相当于双引号。写大段东西的时候可以考虑heredoc
//不用考虑转义了。
//<<<名称
//代码段;
//名称；
//注意在结束名称之前不能有任何输出

$str=<<<EOF
	this is a test
	<h1 align="center">Hello world</h1>
EOF;
echo $str;

$str=<<<TABLE
  <table border='1' width='80%' bgcolor='gold'>
	<tr>
		<td>编号</td>
		<td>用户名</td>
		<td>邮箱</td>
	</tr>
<tr>
		<td>1</td>
		<td>beibei</td>
		<td>1686310541@qq.com</td>
	</tr>	
	<tr>
		<td>{$id}</td>
		<td>{$username}</td>
		<td>{$email}</td>
	</tr>	
</table>
TABLE;
echo $str;

//nowdoc 相当于单引号 
//无法解析变量名
//<<<'名称'
//代码段;
//名称；
//注意在结束名称之前不能有任何输出
$username="beibei3030630";
$str=<<<'TEST'
	<h1>this is a test</h1>
	<p>用户名:{$username}</p>
TEST;
echo $str;

//2-12编程练习

$table=<<<TABLE
<table>
 <tr>
	<td width="80px" height="80px" border="1px solid #fff" bgcolor="purple"></td>
	<td width="80px" height="80px" border="1px solid #fff" bgcolor="purple"></td>
	<td width="80px" height="80px" border="1px solid #fff" bgcolor="blue"></td>
 </tr>
  <tr>
	<td width="80px" height="80px" border="1px solid #fff" bgcolor="orange"></td>
	<td width="80px" height="80px" border="1px solid #fff" bgcolor="white"></td>
	<td width="80px" height="80px" border="1px solid #fff" bgcolor="blue"></td>
 </tr>
  <tr>
	<td width="80px" height="80px" border="1px solid #fff" bgcolor="orange"></td>
	<td width="80px" height="80px" border="1px solid #fff" bgcolor="red"></td>
	<td width="80px" height="80px" border="1px solid #fff" bgcolor="red"></td>
 </tr>
</table>
TABLE;
echo $table;



