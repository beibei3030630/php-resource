<?php

//函数返回值
function test1(){
	"string";
}
$res=test1();
echo $res; //无返回值

echo "<br/>";

 function test(){
   return "string"; 
 }
 $result=test();
echo $result; //有返回值，把返回值赋值给变量输出
echo "<br/>";

// function test(){
// 	return "str";
// 	}
// 	$res=test();
// 	echo $res;
// 	不可以重新定义函数

//2-3 practice 
function foo(){
	echo "string";
}
foo();
echo "<br/>";
//2-6 choice
function aaa(){
	return 1;
	return 2;
}
$a=aaa();
echo $a;

echo "<br/>";

function test2(){
	return [1,2,3];
}
$res=test2();
print_r($res);

echo "<br/>";
//局部动态变量
function localVar(){
	$i=3;
	return ++$i;
}
echo localVar()."//两次结果都为相同的值<br/>";
echo localVar()."<br/>";
//echo $int;//函数执行完毕，变量销毁
echo "<br/>";

function staticLocalVar(){
	static $k=3;
	return ++$k;
}
echo staticLocalVar()."<br/>";
echo staticLocalVar()."//第二次局部变量的值在<br/>第一次的基础上+1<br/>";

echo "<br/>";
//全局变量
$a=3;
$b=4;
function testc(){
	global $a,$b;
	return ++$a."<br/>".++$b;
}
echo testc();