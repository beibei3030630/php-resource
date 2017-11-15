<?php
//永久转换
//1.settype($var,$type) 设置变量的类型

//gettype($var) 得到变量的类型 注意不要使用 gettype() 来测试某种类型 推荐使用is_*
//gettype（）方法可能得到的值
//“boolean”（从 PHP 4 起）
// “integer”
// “double”（由于历史原因，如果是 float 则返回“double”，而不是“float”）
// “string”
// “array”
// “object”
// “resource”（从 PHP 4 起）
// “NULL”（从 PHP 4 起）
$var=123;
var_dump($var);
echo gettype($var).'<br/>';//integer
$var=true;
echo gettype($var).'<br/>';
$var="12.33";
echo gettype($var);
echo "<br/>";

echo'<hr/>';


//settype($var,$type) 永久转换类型。改变变量原本类型。
/*
type可能的值为
	 “boolean” （或为“bool”，从 PHP 4.2.0 起）
	 “integer” （或为“int”，从 PHP 4.2.0 起）
	 “float” （只在 PHP 4.2.0 之后可以使用，对于旧版本中使用的“double”现已停用）
	 "string"
	 "array"
	 "object"
	 “null” （从 PHP 4.2.0 起）
 */
$var=123;
var_dump($var); 

settype($var,'boolean');
var_dump($var); //永久转换成布尔类型。

$var='3king';
settype($var, 'int');
var_dump($var);//int 3;
echo $var;//3

$var=12.3;
settype($var, 'king');//替换成不存在的类型。转换失败。变量依旧是转换前的类型
var_dump($var);



//2.通过变量函数库检测变量的类型

//is_*($var) 检测结果要么true 要么false

//整形 is_init(),is_integer(),is()_long
//浮点型 is_float(),is_doublue()
//字符串 is_string()
//布尔类型 is_bool()
//标量类型 is_scalar()
//空 is_null()
//数组 is_array()
//资源 is_resource()
//是否为数值型或者字符串形式的数值 is_numeric()
$var=123;
$var=12.3;
var_dump(is_int($var));


$var=1234;
var_dump(
  is_int($var),
  is_integer($var)
	);

echo "<hr/>";


$float=12.34;
var_dump(
  is_float($float),
  is_double($float),
  is_real($float)
	);

//是否为字符串形
$var='3king';
var_dump(
 is_string($var)
	);

//是否是布尔类型
$var=false;
var_dump(is_bool($var));

$var=123;
$var=null;
var_dump(is_scalar($var));
var_dump(is_null($var));

//空字符串类型为字符串，不为null
$str="";
var_dump(is_null($str));
var_dump(is_string($str));

$arr=array();
var_dump(is_array($arr));

$var=new StdClass();
var_dump(is_object($var));

$var =fopen('./test.html', 'r');
var_dump(is_resource($var));

//检测是否为数值型或者字符串型的数值
$var=123;
var_dump(is_numeric($var));
$var="123";
var_dump(is_numeric($var));
$var="2.3a";
var_dump(is_numeric($var));//false 不是合法的字符串形式的数值


//3-7编程练习
$email='1000@imooc.com';
settype($email, 'int');
var_dump($email); //打印出类型转换之后的详细信息

settype($email, 'boolean');
var_dump($email);

settype($email, 'float');
var_dump($email);