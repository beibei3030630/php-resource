<?php
header('content-type:text/html;charset=utf-8');
$username="beiebei";
$email="1686310541@qq.com";
$var="email";
var_dump($email);
//字符串拼接用. 也可以用 ,
echo $username."'s\t".$var.$email;

$string="";
var_dump($string);
echo "<hr/>";

echo 'this is a test <br/>';
echo "hello world<br/>";

$username="beibei";

echo $username,"<br/>";

//变量可以放在定界符中
//单引号不解析变量(执行效率更高)
//双引号解析变量
echo '$username'."<br/>";
echo "$username","<br/>";

$str="He said 'I\"m fine'";
echo $str,"<br/>";

$str='He said "I"m fine"';
echo $str,"<br/>";

//单、双引号会把离自己最近的当做一段。
//如果内容与定界符有冲突。需要用到转义词。
//\n 换行
//\r 回车
//\t 水平制表符（缩进）
//\\ \
//\$  $
//\'  '
//\"  "
$str='He said "l\'m fine"';
echo $str."<br/>";

//以下字符串\r \n \t \$ 无法转义
//因为单引号只解析\'和\\两个转义符号
$str='!\r@\n#\t%a\\b\'c\$d';
echo $str,"<br/>";

//双引号转义所有转义符号
//但与定界符不冲突的内容不会转义
$str="!\r@\n#\t%a\\b\"c\$d";
echo $str,"<br/>";

$var=123;
echo "\$var的值为$var"."<br/>";
echo '$var的值为',"$var";

echo '<hr/>';

$username="beibei";
//php会尽量向后去取合法的名称。这里会取username是我作为变量解析，结果未定义。
echo "名称：$username"."是我<br/>";


//花括号可以将php中的变量变成一个整体来解析。
//花括号可以对指定字符增删改查。
//注意花括号之间不能有空格
echo "名称:{$username}是我<br/>";

//有冲突就转义 没冲突就不用转义
$word3="Tom said:\"I'm fond of PHP!\"";
echo $word3;


