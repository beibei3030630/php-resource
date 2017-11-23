<?php
//封装截图文件扩展名
$filename="1.php.html";
function getExt($filename){
	//method 1
	// $array=explode('.', $filename);
	// return array_pop($array);
	// method2
	//return  strtolower(pathinfo($filename,PATHINFO_EXTENSION));
	//method3
	
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