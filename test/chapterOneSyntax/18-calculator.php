	<?php
	  error_reporting(E_ALL&~E_NOTICE);
		
		$num1=$_POST['num1'];
		$num2=$_POST['num2'];
		$mark=$_POST['mark']; 
	if(is_numeric($num1)&&is_numeric($num2)){
		switch ($mark) {
			case'+':
			$res=$num1+$num2;	
				break;
			case'-':
			$res=$num1-$num2;	
				break;
			case'*':
			$res=$num1*$num2;	
				break;
			case'/':
			if($num2==0){
				exit('0不能当除数');//exit()或者die()；输出一个消息并且退出当前脚本
			}
			$res=$num1/$num2;	
			break;
			case'%':
			$res=$num1%$num2;	
				break;					
			default:
			$res='非法操作';
			break;
		}
		echo  $num1.$mark.$num2."的运算结果为：".$res;
	}else{
		echo "请输入合法数字";
	}
	



