<?php
header('content-type:text/hmtl;charset=utf-8');
 require_once('./commonFunc.php');
//  $filesArray=getFilesInfo();
//  $i=0;
//  foreach ($filesArray as $fileInfo) {
//  	$res[$i]=getFileInfo($fileInfo);
//  	$i++;
//  }
// print_r($res);

$files=getFilesInfo();
$res=[];
foreach($files as $fileInfo){
	$res=getFileInfo($fileInfo);
	echo $res['msg'];
	@$getFile[]=$res['dest'];
}
print_r(array_values(array_filter($getFile)));