<?php
//通过arr1动态创建下标连续的索引数组
$arr1[]=12;
$arr1[]=45678.9;
$arr1[]=true;
print_r($arr1);	

//手动指定下标的索引数组
$arr2[3]=45;
$arr2[-56]=-12;
$arr2[0]="hello world";
$arr2[]="this is king show time";
print_r($arr2);
$arr3=[	
 3=>6,
 7=>8
];
print_r($arr3);

//动态创建关联数组
$desc='this is a test';
$userInfo["username"]="king";
$userInfo["age"]=12;
$userInfo['desc']=$desc;
$userInfo[]="bbb";
print_r($userInfo);
	
$array[]=[
	"id"=>123,
	"name"=>"beibei",
	"age"=>23
];
$array[]=[
	"id"=>456,
	"name"=>"angle",
	"age"=>22
];
print_r($array);		


$arrTest["name"]=[
	"c","a","d"
];
$arrTest["age"]=[
	"15","16","17"
];
print_r($arrTest);

$newArr["test1"]=[
	"first"=>"sport",	
	"end"=>"print"
];
$newArr["test2"]=[
	"first"=>"aa",
	"end"=>"bb	"
];
print_r($newArr);	
$arr5[][][][]=1;
print_r($arr5);