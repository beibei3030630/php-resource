<?php
// var_dump(touch('./test3.txt'));
//同级目录下新建文件
// var_dump(touch('d:/test3.txt'));
//D盘下新建文件
// var_dump(touch('../test3.txt'));
//上级目录下新建文件

// var_dump(touch('./xxx/test3.txt'));
//返回false
//不能向下创建文件，不能在不存在的
//目录下创建文件。


// $filename='d:/test3.txt';
// if(file_exists($filename)){
// 	if(unlink($filename)){
// 		echo '文件删除成功';
// 	}else{
// 		echo '文件删除失败';
// 	}
// }else{
// 	echo '文件不存在';
// }



$filename='./test2.txt';
if(file_exists($filename)){
	if(rename($filename,'test222.txt')){
		echo '文件重命名成功';
	}else{
		echo '文件重命名失败';
	}
}else{
	echo '文件不存在';
}



//剪切路径
$filename='./test2.txt';
$newPath='d:/test222.txt';
if(file_exists($filename)){
	if(rename($filename	, $newPath)){
		echo '文件重命名成功';
	}else{
		echo '文件重命名失败';
	}
}else{
	echo  '文件不存在';
}



$source='http://php.net/manual/zh/function.copy.php';
$