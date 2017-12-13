<?php
header("content-type:text/html;charset=utf-8");
//检测文件是否存在，不存在则创建。可创建多级目录或平级目录下的文件。
/**
 * [create_file description]
 * @param  [type] $filename 可以传入带路径的文件名
 * @return [type]           bool
 */
function create_file(string $filename){
	//文件存在，不创建直接返回。
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



//检测删除的文件是否存在，并且是否有权限操作
/**
 * [delFile description]
 * @param  [type] $filename 可以传入带路径的文件名
 * @return [type]           bool
 */
function delFile($filename){
	if(!file_exists($filename)||!is_writable($filename)){
		return false;
	}
	if(unlink($filename)){
		return true;
	}
	return false;
}
  // delFile('./aaa/30.txt');



/**
 * 拷贝文件
 * @param  string  $filename     文件名
 * @param  string $path         复制文件路径，默认同级
 * @param  string $copyFileName 要被复制的名称，默认叫copyFile
 * @return [type]               bool
 */
function copy_file(string $filename,string $path='./copy',string $copyFileName='copyFile'){
	//要复制的文件不存在 直接返回
  if(!file_exists($filename)){
  	return false;
  }
  //要复制的路径不存在 创建一个
  if(!file_exists($path)){
  	mkdir($path,0777,true);
  }
  //文件扩展名与被复制的扩展名一致，不可自定义扩展名
  $ext=strtolower(pathinfo($filename,PATHINFO_EXTENSION));
  $dest=$path.DIRECTORY_SEPARATOR.pathinfo($copyFileName,PATHINFO_FILENAME).'.'.$ext;
  //同级目录下文件名如果重名  直接返回
  if(file_exists($dest)){
  	return false;
 }
  if(copy($filename, $dest)){
  	return true;
  }
  	return false;
}
 // copy_file('test1.txt','xxx','6000.php');



//
/**
 * 重命名文件
 * @param  string $filename 要被重命名的文件
 * @param  string $rename   重命名的名称
 * @return [type]            bool
 */
function rename_file(string $filename,string $rename){
	if(!file_exists($filename)){
		return false;
	}
	//重命名文件不可带有路径，如带有路径名会被去掉
	$rename=basename($rename);
	if(rename($filename,$rename)){
		return true;
	}
	return false;
}
// rename_file('test123.txt','./axxx/aaa/test789.txt');	


/**
 *剪切文件 
 * @param  string $filename 要剪切的文件
 * @param  string $source   剪切的路径
 * @return [type]           bool
 */
function  cut_file(string $filename,string $path){
	if(!file_exists($filename)){
		return false;
	}
	//传参的目录如不存在，创建
	if(!is_dir($path)){
		mkdir(dirname($path),0777,true);
	}
	//剪切地址+文件名
	$dest=dirname($path).DIRECTORY_SEPARATOR.basename($filename);
	//如剪切前文件已存在 直接返回
	if(file_exists($dest)){
		return false;
	}
	if(rename($filename,$dest)){
		return true;
	}
	return false;
}
