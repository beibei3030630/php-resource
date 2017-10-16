<?php
header('content-type:text/html;charset=utf-8');
//其它类型转换成布尔类型
 //0->false;
 //0.0->false;
 //""->false;
 //"0"->false;
 //空数组array()->false;
 //"0.0"->true;
 //null->false;
 
/*
	if(条件){
	 执行条件为真的代码段
	}else{
	 执行条件为真的代码段
	}
*/
$var=123;
if($var){
 echo '真的';
}else{
 echo '假的';
}

echo "<br/>";
$var=null;
if($var){
 echo '真的';
}else{
 echo '假的';
}

echo "<br/>";
$var=0;//0->false;
if($var){
 echo '真的';
}else{
 echo '假的';
}

echo "<br/>";
$var=-123;
if($var){
 echo '真的';
}else{
 echo '假的';
}

echo "<br/>";
$var=0.0;//0.0->false;
if($var){
 echo '真的';
}else{
 echo '假的';
}

//只有空字符串已经字符串0（不包括0.0）会转换成false
echo "<br/>";
$var='';//空字符串->false;
if($var){
 echo '真的';
}else{
 echo '假的';
}

echo "<br/>";
$var='  ';//空格字符串->true;
if($var){
 echo '真的';
}else{
 echo '假的';
}

echo "<br/>";
$var='false';//字符串类型的false ->true;
if($var){
 echo '真的';
}else{
 echo '假的';
}

echo "<br/>";
$var='0';//字符串类型的0 ->false;
if($var){
 echo '真的';
}else{
 echo '假的';
}


echo "<br/>";
$var='0.0';//字符串类型的0.0 ->false;
if($var){
 echo '真的';
}else{
 echo '假的';
}

echo "<br/>";
$var=null;//null->false;
if($var){
 echo '真的';
}else{
 echo '假的';
}

echo "<br/>";
$var=array();//空数组->false;
if($var){
 echo '真的';
}else{
 echo '假的';
}