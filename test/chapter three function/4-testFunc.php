<?php
header('content-type:text/html;charset=utf-8');

//可变函数的使用
$funcName='md5';
echo $funcName('beibei');//46d294deab9987e94ced5c0f7b478f5d

// if(get_defined_functions()){
// 	$funcName='abc';
// 	echo $funcName();
// }else{
// 	echo "未定义函数";
// }
function test1(){
	return "tesst1";
}

function test2(){
	return "tesst2";
}


function getFuncname($funcname){
	if(function_exists('funcname')){
		$fun='funcname';
		return $fun();
	}else{
		return "未定义函数，不可以使用可变函数进行等量代换";
	}
}
echo getFuncname("test1");
echo "<>";

//嵌套函数
function wrapperFunction(){
	function nestFunction(){
		return "this is nestFunction{$a}";
	}
		$a=666;
		return  "this is wrapperFunction{$a}";
}
echo wrapperFunction();
echo nestFunction();

//嵌套的调用
function bar(){
	echo "hello world";
}
function foo(){
	bar();
}
foo();