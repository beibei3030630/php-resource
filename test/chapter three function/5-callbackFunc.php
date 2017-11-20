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
print_r($arr);//array_map取得是值引用，结果还是1,2,3,4


//array_walk
$arr2=[3,6,9,12];
function division(&$j){
	 return $j/=3;

}
print_r($arr2);
var_dump(array_walk($arr2, 'division'));
print_r($arr2);
