<?php
//强制转换（显示转换）

//临时转换 临时转换不改变变量本身的类型
//(变量类型)$变量名称
//整形  (int)$变量名称 
//浮点型  （float）$变量名称
//字符串  （string）$变量名称
//布尔型  （bool）$变量名称
//空   （unset）$变量名称
//数组 （array）$变量名称
//对象  （object）$变量名称

$var=true;
var_dump($var);//boolean true
var_dump((int)$var);//转换为整形 int 1

$res=(int)$var;
var_dump($res);//int 1
var_dump($var);//临时转换不改变变量本身的类型 boolean true


echo '<hr/>';

//临时转换成浮点类型

var_dump((float)$var); //float 1

//临时转换成整形
$var=3.6;
var_dump((int)$var); //转换为整形 舍掉小数部分 int 3

//临时转换成字符串
$var=true;
var_dump((string)$var);//string '1' (length=1)

//临时转换成布尔类型
$var='3king';
var_dump((bool)$var,(boolean)$var);//boolean true

//临时转换成空
var_dump((unset)$var);//null

//临时转换成数组
$var=123;
var_dump((array)$var);//array (size=1)  0 => int 123 转换成数组里的一个元素

//临时转换成对象
$var =12.3;
var_dump((object)$var);//public 'scalar' => float 12.3 转换成对象中的一个公共属性

echo "<hr/>";

//通过系统函数实现临时转换
//intval($var) 返回变量转换成整型之后的值
//floatval($var)|doubleval($var) 返回变量转换成浮点类型的值
//strval($var)返回变量转换成字符串的值
//boolval($val)返回变量转换成布尔类型的值


//转换成整形；
$var='3king';
var_dump(intval($var));

echo intval($var);

//转换成浮点类型
var_dump(
   floatval($var),  
   doubleval($var)
	);

//转换成布尔类型
var_dump(boolval($var));

$var=true;
var_dump(strval($var));//string '1' (length=1)
echo strval($var);//1

echo '<hr/>';


//3-4选择题测试
$str='A3eb6';
echo strval($str).'<br/>'; 
echo floatval($str).'<br/>'; //'A3eb6'取不到合法数值 转换成浮点和整形都为0
echo boolval($str).'<br/>'; 
echo intval($str).'<br/>';

$var="3king";
echo (bool)$var; //输出，取不到合法数值的转换成1
var_dump((bool)$var); //打印类型为布尔值

echo boolval($var); 
var_dump(boolval($var));




