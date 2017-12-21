<?php
require_once('')
$filename=$_GET['filename'];

function download_func(string $filename,array $allowExt=['jpg','jpeg','png','gif','zip','rar']){
	if(!file_exists($filename)||!is_readable($filename)){
		return false;
	}
	$ext=strtolower(pathinfo($filename,PATHINFO_EXTENSION));
	if(!in_array($ext,$allowExt)){
		return false;
	}
	$filesize=filesize($filename);
	header('content-type:application/octet-stream');
	header('Accept-Ranges:bytes');
	header('Accept-Length:'.$filesize);
	header('Content-Disposition:attachment;filename='.basename($filename));
	$read_buffer=1024;
	$sum_buffer=0;
	$handle=fopen($filename, 'rb');
	while(!feof($handle)&&$sum_buffer<$filesize){
		echo fread($handle, $read_buffer);
		$sum_buffer+=$read_buffer;
	}
	fclose($handle);
}

download_func($filename);