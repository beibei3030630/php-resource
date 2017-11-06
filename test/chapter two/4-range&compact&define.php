<?php
//使用range()创造下标连续的数组
 $arr=range(1,4);
 print_r($arr);

$arr=range(-8,-5);
print_r($arr);

$arr=range(-8,-1,2);
print_r($arr);

//快速创建"a-e"的下标连续数组
$arr=range('a','e');
print_r($arr);

//使用for循环创造下标连续的“a-e”数组
for($i=97;$i<=101;$i++){
	$newArr[]=chr($i);
}
print_r($newArr);

//创建关联数组
$username='beibei';
$id="123";
$age='22';
$strArray=compact('username','id','age');
print_r($strArray);

//define定义常量数组
define('TEST1',array("A","B","C"));
print_r(TEST1);

const TEST2=array("A1","A2","A3");
print_r(TEST2);

define("CUSTOM_UPLOAD_ERRORS",[
	'ext_error'=>"上传文件扩展名不符合规范",
	"maxsize"=>"上传文件大小不符合规范"
	]);
print_r(CUSTOM_UPLOAD_ERRORS);
echo CUSTOM_UPLOAD_ERRORS["ext_error"];

