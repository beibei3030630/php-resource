<?php
error_reporting(E_ALL&~E_NOTICE);
header('content-type:text/html;charset=utf-8');
include_once('commonFunc.php');
include_once('uploadFunc.php');
$filesArr=getFiles();
$res=[];
foreach ($filesArr as $fileInfo) {
	$res=getFilesInfo($fileInfo);
	//输出文件上传成功或者报错信息
	echo $res['msg'].'<br/>';
	//赋值文件路给新数组，为之后输入数据库做准备。
	$getFilesInfo[]=$res['dest'];		
	}
//上传失败的文件没有路径（$res['dest'}），会造成空值。
//使用array_filter()去除空值
//使用array_values()为键值按照顺序重新赋值键名
print_r(array_values(array_filter($getFilesInfo)));