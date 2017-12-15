<?php
date_default_timezone_set('PRC');
//检测文件是否存在，不存在则创建。可创建多级目录或平级目录下的文件。
function create_file($filename){
	if(is_file($filename)&&is_readable($filename)){
		return false;
	}
	$path=dirname($filename);
	if(!is_dir($path)){
		mkdir($path,0777,true);
	}
	return file_put_contents($filename,'');
}
 // create_file('test1.txt');



//检测删除的文件是否存在，并且是否有权限操作
function del_file($filename){
	if(!is_file($filename)||!is_writable($filename)){
		return false;
	}
	if(unlink($filename)){
		return true;
	}
	return false;
}
// del_file('test3.txt');



/**
 * [copy_file 拷贝文件]
 * @param  string $filename 文件名
 * @param  string $path    复制文件路径
 * @return  bool         
 */
function copy_file(string $filename,string $path){   
	//要复制的文件不存在 直接返回
	if(!is_file($filename)){
		return false;
	}

	 //防止传入的参数带有文件名。
	 //如果带有文件的路径使用mkdir创建，会创建出错误路径。  
	  $path=dirname($path);
	
	//要复制的路径不存在 创建一个
	if(!is_dir($path)){
		mkdir($path,0777,true);
	}
	
	//不可自定义文件名，复制和被复制的文件名相同
	$newFile=$path.DIRECTORY_SEPARATOR.basename($filename);
	
	//如果要复制的文件在上下级目录或同级目录下存在，直接返回
	//同级目录可以使用常量__DIR__进行测试
	if(is_file($newFile)&&is_readable($filename)){
		return false;
	}
	if(copy($filename,$newFile)){
		return true;
	}else{
		return false;
	}
}
// var_dump(copy_file('test4.txt',__DIR__));


//重命名文件
	function rename_file($filename,$newFileName){
		if(!file_exists($filename)||!is_writable($filename)){
			return false;
		}
		//防止参数传入路径，如果传入路径会被过滤掉
		$newFileName=basename($newFileName);

		//如重命名的名称与被重命名之前的名称相同，直接返回
		if(basename($filename)===$newFileName){
			return false;
		}
		if(rename($filename, $newFileName)){
			return true;
		}
		return false;
	}
	// var_dump(rename_file('test55.txt','./test55.txt'));


//剪切文件 
function cut_file($filename,$path){
	if(!is_file($filename)){
		return false;
	}
	$path=dirname($path);
	if(!is_dir($path)){
		mkdir($path,0777,true);
	}
	//剪切文件不可自定义名字
	$newFileName=$path.DIRECTORY_SEPARATOR.basename($filename);
	//筛选剪切的文件是否重名
	if(file_exists($newFileName)){
		return '重名';
	}
	if(rename($filename, $newFileName)){
		return true;
	}
	return false;
}
// var_dump(cut_file('./aaa/nnn/test6.txt','./aaa/nnn/aa.txt'));

//返回文件信息
function getFileInfo($filename){
	if(!is_file($filename)){
		return false;
	}
	return [
		"atime"=>date('Y-m-d H:i:s',fileatime($filename)),
		"mtime"=>date('Y-m-d H:i:s',filemtime($filename)),
		"ctime"=>date('Y-m-d H:i:s',filectime($filename)),
		"type"=>filetype($filename),
		"size"=>trans_byte(filesize($filename))
	];
}
// var_dump(getFileInfo('user.txt'));

//转换字节单位
	function trans_byte(int $filesize,$precision=2){
		$kb=1024;
		$mb=1024*$kb;
		$gb=1024*$mb;
		$tb=1024*$gb;
		if($filesize<$kb){
			return $filesize.'B';
		}elseif ($filesize<$mb) {
			return round($filesize/$kb,$precision).'KB';
		}elseif($filesize<$gb){
			return round($filesize/$mb,$precision).'MB';
		}elseif($filesize<$tb){
			return round($filesize/$gb,$precision).'GB';
		}else{
			return round($filesize/$tb,$precision).'TB';
		}
	}
// var_dump(trans_byte('666666'));

//读取文件内容信息
function getFileContent($filename){
	if(!file_exists($filename)||!is_readable($filename)){
		return false;
	}
	return file_get_contents($filename);
}
var_dump(getFileContent('user.txt'));

//读取文件中的内容到数组中

//对文件写入内容,追加内容不清空文件。

//截取文件内容