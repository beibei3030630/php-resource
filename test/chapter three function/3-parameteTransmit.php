<?php
header('content-type:text/html;charset=utf-8');

//变量的作用域
function test1(){
	$i=1;
	$j=2;
	return $i+$j;
}
echo test1();
var_dump($i,$j);

echo "<hr/>";

$k=6;
function test2(){
 global  $k;
 echo $k;
}
test2();

$z=9;
//$GLOBALS
function test3($param){
	return $GLOBALS['username']=$param;
}
echo test3("beibei3030630");//beibei3030630


$age='22';
function test4(){
	echo "年龄:".$GLOBALS['age'];
}
test4();

echo "<br/>";

$email="1686310541@qq.com";
function test5(){
	$GLOBALS['email']="1014619466@qq.com";
	echo "邮箱：".$GLOBALS['email']."<br/>";
}
echo $email."<br/>";//1686310541@qq.com
test5();//邮箱：1014619466@qq.com
echo $email;//1014619466@qq.com

echo "<hr/>";
$a=3;
$b=5;
function funcTest(){
	echo $a,$b;
}
funcTest();

echo "<hr/>";

//按值传递
function paramTrans($i){
	$i+=10;
	return $i;
}
$m=2;
echo paramTrans($m);//12
echo $m;//2

echo "<hr>";


//按引用传递
function paramTrans2(&$j){
	$j+=20;
	return $j;
}
$n=4;
echo paramTrans2($n);//24
echo  $n;//24

function func(&$i){
	return $i;
}
echo func(3);


