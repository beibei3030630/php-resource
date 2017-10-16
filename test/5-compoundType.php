<?php
//复合类型
//1.数组

$arr=array();//空数组
var_dump($arr);
$arr=array(12,'king',true,123.45);
var_dump($arr);




//2.对象
$obj=new StdClass();
var_dump($obj);//打印结果：object(stdClass)[1]





//特殊类型
//1.资源

$handle=fopen('./test.html','r');
var_dump($handle);//打印结果：resource(3, stream)


//2.空（null NULL)
//变量未声明直接使用，它的值就是null
var_dump($notExistsVar);//打印结果 php:33:null


//声明一个变量，并且赋值为null
$var=null;
var_dump($var);

echo "<hr/>";
//经过unset（）注销过的变量，值为null
$var=123;
unset($var);
var_dump($var);

echo '<hr/>';

$a=$b=$c='king';
var_dump($a,$b,$c);
unset($a,$b,$c);
var_dump($a,$b,$c);