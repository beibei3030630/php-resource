<?php
//单文件压缩
function compressFile(string $filename){
	if(!is_file($filename)){
		return false;
	}
	$zip=new ZipArchive();
	$zipName=pathinfo($zipName,PATHINFO_BASENAME);
	//创建压缩包 单文件压缩包以文件名+'zip'命名。
	//如文件不存在则创建。存在则重命名
	if($zip->open($zipName,ZipArchive::CREATE|ZipArchive::OVERWRITE)){
		//像压缩包中添加文件。添加成功，删除原有文件
		$zip->addfile($filename);
		$zip->close();
		return true;
	}else{
	return false;
	}
}
var_dump(compressFile('1.php'));

// function compress(string $filename){
// 	if(!is_file($filename)){
// 		return false;
// 	}
//    $zipName=pathinfo($filename,PATHINFO_FILENAME).'.zip';
//    $zip=new ZipArchive();
//    if($zip->open($zipName,ZipArchive::CREATE|ZipArchive::OVERWRITE)){
// 	    $zip->addfile($filename);
// 	   $zip->close();
// 	   	return true;
//    }else{
//    		return false;
//    }
// }
// var_dump(compress('2.txt'));


//压缩多文件
function compressFiles(string $zipName, ...$files){
   $zipExt=pathinfo($zipName,PATHINFO_EXTENSION);
   if($zipExt!=='zip'){
   	 return '后缀错误';
   }
   $zip=new ZipArchive();
   if($zip->open($zipName,ZipArchive::CREATE|ZipArchive::OVERWRITE)){
   		foreach ( $files as $file) {
	   		 if(is_file($file)){
	   			$zip->addfile($file);
	   		 }
   		}
   		$zip->close();
   		return true;
   }else{
   		return false;
   }
}
// var_dump(compressFiles('test.zip','../doAction.php','../doAction1.php','../doAction2.php'));


//解压缩文件
function unzip_file(string $zipName,string $dest){
	$zipExt=pathinfo($zipName,PATHINFO_EXTENSION);
	if($zipExt!=='zip'||!is_file($zipName)){
		return false;
	}
	if(!is_dir($dest)){
		mkdir($dest,0777,true);
	}
	$zip=new ZipArchive();
	if($zip->open($zipName)){
		//解压到指定目录
		$zip->extractTo($dest);
		$zip->close();
		return true;
	}else{
		return false;
	}
}
 var_dump(unzip_file('test.zip','../test'));
