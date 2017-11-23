<?php
//回调函数
function study($username){
	echo $username." is studying";
}
function sleeping(){
	echo "sleeping";
}
function doWhat($funcName){
	echo "beibei is ";
	$funcName();
}
doWhat('sleeping');
echo "<br/>";

//给回调函数传参
function test2($funcName,$param){
	return $funcName($param);
}
echo test2('study','beibei3030630');

//带参数的回调函数 完成加减法
function add($num1,$num2){
	return $num1+$num2;
}
function reduce($num1,$num2){
	return $num1-$num2;
}
function calc($funcName,$num1,$num2){
	return $funcName($num1,$num2);
}
echo calc('add',6,7);//加法回调函数
echo calc('reduce',8,2);//减法回调函数


//回到函数配合数组函数
//array_map
$arr=[1,2,3,4];
function multip($k){
	return $k*3;
}
print_r($arr);//[0] => 1  [1] => 2 [2] => 3  [3] => 4
print_r(array_map('multip',$arr)); 
//[0] => 3  [1] => 6 [2] => 9  [3] => 12
print_r($arr);//array_map修改的是数组的副本，结果还是1,2,3,4


//array_walk
// $arr2=[3,6,9,12];
// function division(&$j){
// 	 return $j/=3;


// }
// print_r($arr2);
// var_dump(array_walk($arr2, 'division'));
// print_r($arr2);

//array_filter
//筛选出奇数
$arr=[1,2,3,4,5,6,7,8,9];
function filter($i){
   if($i%2==1){
 	 return $i;  	
   }
}
print_r(array_filter($arr,'filter'));
//1 3 5 7 9

echo "<hr/>";

function a1(){
	echo  "this is a1";
}
function  a2(){
	echo "this is a2";
}
function num($func){
	return $func();
}
num('a1');

echo "<hr/>";
//测试array_walk
$arrayTest=[5,10,15];
function func(&$i){
	return $i/=3;
}
print_r($arrayTest);
var_dump(array_walk($arrayTest, 'func'));
print_r($arrayTest);



$arr2=[3,6,9,12];
function division(&$j){
	 return $j/3;
}
print_r($arr2);//Array ( [0] => 3 [1] => 6 [2] => 9 [3] => 12 )
var_dump(array_walk($arr2, 'division'));//true
print_r($arr2);//Array ( [0] => 3 [1] => 6 [2] => 9 [3] => 12 )

	

echo call_user_func('md5','beiebi3030630');
