<?php
//单文件压缩
function compressFile(string $filename){
	if(!is_file($filename)){
		return false;
	}
	$zip=new ZipArchive();
	$zipName=pathinfo($zipName);
	//创建压缩包 单文件压缩包以文件名+'zip'命名。
	//如文件不存在则创建。存在则重命名
	if($zip->open($zipName,ZipArchive::CREATE|ZipArchive::OVERWRITE)){
		//像压缩包中添加文件。添加成功，删除原有文件
		$zip->addFile($filename);
		$zip->close();
		return $zipName;
	}else{
	return false;
	}
}
var_dump(compressFile('1.php'));