<?php
$arr1=[1,2,3];
$arr2=[4,5,6];
$newArr=$arr1+$arr2;
print_r($newArr);

$arr1=["a","b","c"];
$arr2=[10=>"aa",11=>"bb",12=>"cc"];
$arr3=["username"=>"beibei","id"=>123];
$newArr=$arr1+$arr2+$arr3;
print_r($newArr);

$arr1=[
  3=>1,
  "5"=>"a",
  "6"=>123
];
$arr2=[
	5=>"a",
	"3"=>true
];
var_dump($arr1==$arr2);

