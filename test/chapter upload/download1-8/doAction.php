<?php
$file=$_GET['filename'];
function download1(string $filename,array $allowExt=['jpg','png','gif','jpeg','zip','rar']){
  
  if(!is_file($filename)||!is_readable($filename)){
  	return false;
  }
  $ext=strtolower(pathinfo($filename,PATHINFO_EXTENSION));
  if(!in_array($ext, $allowExt)){
	 return false;
  }
  $filesize=filesize($filename);
   $handle=fopen($filename,'r');
   header('content-type:application/octet-stream');
   header('Accept-Ranges:bytes');
   header('Accept-Length:'.$filesize);
   header('Content-Disposition:attachment;filename='.basename($filename));
    $buffer_size=1024;
    $sum_size=0;
   while ($filesize>$sum_size&&!feof($handle)) {
   	  echo fread($handle, $buffer_size);
   	  $sum_size+=$buffer_size;
   }
   fclose($filename);
}
function download(string $filename,array $allowExt=['jpg','jpeg','png','gif','zip','rar']){
		if(!is_file($filename)&&!is_readable($filename)){
			return false;
		}
		$ext=strtolower(pathinfo($filename,PATHINFO_EXTENSION));
		if(!in_array($ext, $allowExt)){
			return false;
		}
		header('content-type:application/octet-stream');
		header('Accept-Length:'.filesize($filename));
		header('Accept-Ranges:bytes');
		header('Content-Disposition:attachment;filename='.basename($filename));
		@readfile($filename);
	}
//download($file);
download1($file);