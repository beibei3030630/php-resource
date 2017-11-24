<?php
 function calculator($num1,$num2,$opi='+'){
 	if(!is_numeric($num1)||!is_numeric($num2)){
 		exit('请输入合法的数字');
 	}
 	$result='';
 	switch($opi){
 		case "+":
 		$result=$num1+$num2;
 		break;
 		case "-":
 		$result=$num1-$num2;
 		break;
 		case "*":
 		$result=$num1*$num2;
 		break;
 		case "/":
 		if($num2==0){
 			exit('除数不可以为0');
 		}
 		$result=$num1/$num2;
 		break;
 	}
 	return "{$num1}{$opi}{$num2}={$result}";
 }

echo calculator(3,7,"/");