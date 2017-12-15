<?php
header("content-type:text/html;charset=utf-8");
date_default_timezone_set('PRC');

/**
 * [create_file 创建文件]
 * @param  string $filename 可以传入带路径的文件名
 * @return bool
 */
function create_file(string $filename){
	//检测文件是否存在，不存在则创建。可创建多级目录或平级目录下的文件。
	if(file_exists($filename)){
		return false;
	}

	//检测目录是否存在，不存在则创建。
	if(!file_exists(dirname($filename))){
		//创建目录，可创建多级
		mkdir(dirname($filename),0777,true);
	}

	//在创建完成的目录下创建文件
	if(touch($filename)){
		//创建文件 成功返回true，失败返回false
		return true;
	}
	return false;
}

//如果不传入路径并文件不存在，则在同级下创建文件
 //create_file('./aaa/30.txt');




/**
 * [delFile 删除文件]
 * @param  [type] $filename 可以传入带路径的文件名
 * @return [type]           bool
 */
function delFile($filename){
	//检测删除的文件是否存在，并且是否有权限操作
	if(!file_exists($filename)||!is_writable($filename)){
		return false;
	}
	if(unlink($filename)){
		return true;
	}
	return false;
}
	// delFile('test4.txt');



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



/**
 * 重命名文件
 * @param  string $filename 要被重命名的文件
 * @param  string $rename   重命名的名称
 * @return [type]            bool
 */
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
	var_dump(rename_file('test55.txt','./test55.txt'));


/**
 *剪切文件 
 * @param  string $filename 要剪切的文件
 * @param  string $source   剪切的路径
 * @return  bool
 */
function cut_file(string $filename,string $path){
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


/**
 * 返回文件信息
 * @param  string $filename 文件名
 * @return mixed     文件信息相关数据|false
 */
function get_file_info(string $filename){
	if(!is_file($filename)||!is_readable($filename)){
		return false;
	}
	return [
		'atime'=>date('Y-m-d H:i:s',fileatime($filename)),
		'ctime'=>date('Y-m-d H:i:s',filectime($filename)),
		'mtime'=>date('Y-m-d H:i:s',filemtime($filename)),
		'size'=>trans_byte(filesize($filename)),
		'type'=>filetype($filename)
		];
}
//print_r(get_file_info('test2.txt'));



/**
 * 转换字节单位
 * @param  int         $byte     字节
 * @param  int|integer $precision 默认精度，保留小数点后两位
 * @return string         转换之后的字符串
 */
function trans_byte(int $byte,int $precision=2){
	$kb=1024;
	$mb=1024*$kb;
	$gb=1024*$mb;
	$tb=1024*$gb;
	if($byte<$kb){
		return $byte.'B';
	}elseif($byte<$mb){
		return round($byte/$kb,$precision).'KB';
	}elseif($byte<$gb){
		return round($byte/$mb,$precision).'MB';
	}elseif($byte<$tb){
		return round($byte/$gb,$precision).'GB';
	}else{
		return round($byte/$tb,$precision).'TB';
	}
}

// var_dump(trans_byte(123456));
//D:\wamp\wamp\www\test\chapter DIR\10-fileFunction.php:175:string '120.56KB' (length=8)



/**
 *读取文件信息 
 * @param  string $filename 文件名
 * @return mixed           读取文件内容|false
 */
function read_file(string $filename){
	if(is_file($filename)&&is_readable($filename)){
		return file_get_contents($filename);
	}
	return false;
}
 // var_dump(read_file('test1.txt'));


/**
 * 读取文件中的内容到数组中
 * @param  string       $filename  文件名
 * @param  bool|boolean $skip_empty_lines  是否过滤空行
 * @return [type]       包含文件内容的数组|false
 */
function read_file_array(string $filename,bool $skip_empty_lines=false){
	if(!is_file($filename)&&!is_readable($filename)){
		return false;
	}
	if($skip_empty_lines){
		return file($filename,FILE_IGNORE_NEW_LINES|FILE_SKIP_EMPTY_LINES);
	}else{
		return file($filename);
	}
	return false;
}
// print_r(read_file_array('test1.txt',true));




/**
 *对文件写入内容,追加内容不清空文件。
 * @param  string $filename 文件名
 * @param  mixed $data     数据。数组和对象需要处理
 * @return bool             true|false
 */
function put_files(stirng $filename, $data){
	$path=dirname($filename);
	if(!file_exists($path)){
		mkdir($path,0777,true);
	}
	if(is_file($filename)&&is_readable($filename)){
		if(filesize($filename)>0){
			$srcData=file_get_contents($filename);
		}
	}
	//判断内容是否是数组或者对象
	if(is_array($data)||is_object($data)){
		$data=serialize($data);
	}
	$data=$srcData.$data;
	if(file_put_contents($filename, $data)){
		return true;
	}
	return false;
}
// put_files('test1.txt','123');	

/**
 * 截取文件内容
 * @param  string $filename 文件名
 * @param  int $len      需要截取的文件长度
 * @return  bool
 */
function truncate_file($filename,$len){
	if(is_file($filename)||is_writable($filename)){
		$len<0?0:$len;
		$handle=fopen($filename, 'rb+');
		$data=ftruncate($handle, $len);
		fclose($handle);
		return true;		
	}
	return false;
}
// truncate_file('test2.txt',3);