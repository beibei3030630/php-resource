<?php
date_default_timezone_set("PRC");
//封装截图文件扩展名(十种方法)
$filename="1.php.html";
function getExt($filename){
	//method 1
	// $array=explode('.', $filename);
	// return array_pop($array);
	// method2
	//return  strtolower(pathinfo($filename,PATHINFO_EXTENSION));
	//method3
	$array=explode('.', $filename);
	return end($array);
}
echo getExt($filename);


//封装简单的计算器

function calculator($num1,$num2,$opi='+'){
	if(!is_numeric($num1)||!is_numeric($num2)){
	exit("非法输入...<br/>");
}
	$res='';
	switch($opi){
		case "+":
		$res=$num1+$num2;
		break;
		case "-":
		$res=$num1-$num2;
		break;		
		case "*":
		$res=$num1*$num2;
		break;		
		case "/":
		if($num2==0){	
			return "除数不可以为0";
		}
		$res=$num1/$num2;
		break;		

	}
	return "{$num1}{$opi}{$num2}={$res}";
	}

echo calculator("6","6","*");


//输出日期 年月日 小时分钟秒钟  星期几 可自定义分割符 
function func($opr){
	$weekArr=["星期日","星期一","星期二","星期三","星期四","星期五","星期六"];
	$week=$weekArr[date(w)];
	$date=date("Y{$opr}m{$opr}d H:i:s {$week}");
	return $date;
}
echo func("**");

echo "<br/>";

//封装验证码
function code(){
	$span="";
	for ($i=1; $i <=4 ; $i++) { 
			$span.=mt_rand(0,9);
		}	
	return $span;
}
echo code();