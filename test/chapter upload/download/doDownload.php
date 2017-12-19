<?php
$fileName=$_GET['filename'];


downloadFile1($fileName);


function download_file(string $filename,array $allowExtArray=['jpg','jpeg','png','gif','html','zip','rar']){
	if(!file_exists($filename)||!is_readable($filename)){
		return false;
	}
	//得到扩展名，并检测扩展名是否存在于可
	//支持下载格式中
	$ext=strtolower(pathinfo($filename,PATHINFO_EXTENSION));
	if(!in_array($ext, $allowExtArray)){
		return false;
	}
	//告诉浏览器输出的是字节流
	header('content-type:application/octet-stream');
	//告诉浏览器返回的文件大小是按照字节进行计算的
	header('Accept-Ranges:bytes');
	//告诉浏览器返回的文件大小
	header('Accept-length:'.filesize($filename));
	//告诉浏览器作为附件处理，告诉浏览器最终下载完的文件名称(这句是重点)
	header('Content-Disposition:attachment;filename='.basename($filename));
	//读取文件内容
	//read_file 不需要使用php内存，读取大文件内容速度很快
	@readfile($filename);
}

function downloadFile1( $filename,array $allowExtArray=['jpg','jpeg','png','gif','zip','rar']){
	if(!is_file($filename)||!is_readable($filename)){
		return false;
	}
	//得到扩展名，并检测扩展名是否存在于可
	//支持下载格式中	
	$ext=strtolower(pathinfo($filename,PATHINFO_EXTENSION));
	if(!in_array($ext,$allowExtArray)){
		return false;
	}
	$filesize=filesize($filename);
	//告诉浏览器输出的是字节流
	header('content-type:application/octet-stream');
	//告诉浏览器返回的文件大小
	header('Accept-length:'.$filesize);
	//告诉浏览器返回的文件大小是按照字节进行计算的
	header('Accept-Ranges:bytes');
	//告诉浏览器作为附件处理，告诉浏览器最终下载完的文件名称(这句是重点)
	header('Content-Disposition:attachment;filename='.basename($filename));

	//每次读取1024个字节到浏览器中
	$read_buffer=1024;
	$sum_buffer=0;
	$handle=fopen($filename, 'r+');
	//不到文件末尾，读取文件大小小于文件大小，
	//服务器就会一段段的从服务器中读取内存给浏览器
	while(!feof($handle)&&$sum_buffer<$filesize){
		echo fread($handle, $read_buffer);
		$sum_buffer+=$read_buffer;
	}
	fclose($handle);
}
