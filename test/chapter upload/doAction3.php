<?php
header('content-type:text/html;charset=utf-8');
include_once('commonFunc.php');
include_once('uploadFunc.php');
$filesArr=getFiles();

foreach ($filesArr as $fileInfo) {
	$res=getFilesInfo($fileInfo);
	echo $res['msg'].'<br/>';
	$res['dest']='';
	 $getFilesInfo[]=$res['dest'];

}
print_r($getFilesInfo);