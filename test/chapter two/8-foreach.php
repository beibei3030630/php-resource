<?php
 //通过range得到a-z数组
 //通过循环拿到数值
 $arr=range("a","h");
//for方法
 for($i=0,$count=count($arr);$i<$count;$i++){
 	echo $arr[$i];
 }
 echo "<br/>";

//foreach方法 得到键名和键值
 foreach ($arr as $key=>$v) {
 	echo $key."--".$v."<br/>";
 }

$arr=[];
foreach ($arr as $value) {
	echo $value;
}

$int=123;
if(is_array($int)){
	foreach ($int as $value) {
	echo "this is a test";
	}
};

//foreach 循环二维数组
$arr=[
	['a','b','c'],
	['d','e','f']
];
foreach ($arr as $value) {
	foreach ($value as $v) {
		echo $v."<br/>";
	}
}

$userInfo[]=["id"=>12,"username"=>"beibei","email"=>"1686310541@qq.com"];
foreach ($userInfo as  $value) {
	echo $value["id"]."<br/>";
	echo $value["username"]."<br/>";
	echo $value["email"];
}
