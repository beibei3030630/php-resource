<?php
//通过array（）
//空数组
$arr=array();


var_dump($arr);
//检测是否是数组

echo gettype($arr)."<br/>";
//不推荐这个方法

var_dump(is_array($arr)); 

//索引数组
$arr=["3","4",6,8,10];
print_r($arr);
/*
Array
(
    [0] => 3
    [1] => 4
    [2] => 6
    [3] => 8
    [4] => 10
)

 */
echo "<hr/>";
//手动指定下标
$arr=array(
	5=>'a',
	8=>"c",
	6,
	7,
	8
	);
print_r($arr);
echo "<hr/>";
$arr=array(
	"username"=>"beibei",
	"id"=>123
	);
print_r($arr);
$arr=array(
	1,
	6,
	10,
	"userinfo"=>"789",
	5=>35,
	"abc"=>"aaa",
	"ccc"=>"bbb"
	);
print_r($arr);
$arr=array(
	5.6=>'b',
	true=>'c',
	false=>'d',
	null=>"e"
);
print_r($arr);

$arr=array(
	"a",
	0=>"b"
	);
print_r($arr);

$arr=array(
	15=>6,
	20=>7,
	37=>8
);
print_r($arr);
$arr=[
	6,
	10,
	"userinfo"=>"789",
	5=>35
];
print_r($arr);
$arr=array(
	array('a','b','c'),
	array('d','e','f')
	);
print_r($arr);
$arr[]=["a","b","c"];
$arr[]=["d","e","f"];
print_r($arr);
$arr=["7"];
print_r($arr);
$arr1[]=["a"];
print_r($arr1);
$arr1=array("6","8");
print_r($arr1);
$arr2=array(
	array("b","c",6)
	);
print_r($arr2);
$arr2[]=["d","e",7];
print_r($arr2);

$arr=array(
	"name"=>array("id"=>167,"info"=>"abc"),
	"email"=>array("common"=>"123456789@qq.com")
);
print_r($arr);
$arr=array(
	"name"=>array("a","b","c"),
	"id"=>array(33,22,11)
	);
print_r($arr);

//$arr=[];索引+索引
$arr=[
	["1","2","6"]
];
print_r($arr);

$arr=[
	"name"=>[1,2,5],
	"id"=>[7,8,9]
];
print_r($arr);
$arr=[
	["abc"=>123],
	["abc"=>456],
	["abc"=>789],
];
print_r($arr);
$arr=[
	"id"=>["one"=>123,"two"=>456],
	"email"=>["three"=>789,"four"=>123],
];
print_r($arr);
