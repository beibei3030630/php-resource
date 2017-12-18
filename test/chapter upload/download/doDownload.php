<?php
$file=$_GET['filename'];
download_file($file);


function download_file(string $filename,array $allowExtArray=['jpg','jpeg','png','gif','html','zip','rar']){
	if(!file_exists($filename)||!is_readable($filename)){
		return false;
	}
	$ext=strtolower(pathinfo($filename,PATHINFO_EXTENSION));
	if(!in_array($ext, $allowExtArray)){
		return false;
	}
	//告诉浏览器输出的是字节流
	header('content-type：application/octet-stream');
	//告诉浏览器返回的文件大小是按照字节进行计算的
	header('Accept-Ranges:bytes';
	//告诉浏览器返回的文件大小
	header('Accept-length:'.filesize($filename));
	//告诉浏览器作为附件处理，告诉浏览器最终下载完的文件名称
	header('Content-Disposition:attachment;filename='.basename($filename));
	//读取文件内容
	@read_file($filename);
}