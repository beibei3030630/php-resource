<?php
	 error_reporting(E_ALL&~E_NOTICE);
	$num=$_POST['num'];
	$res;
	if($num!=''&&is_numeric($num)){
	  if($num%2==0){
		 $res="这是一个偶数";
	  }else{
		$res='这是一个奇数';
	  }
    }else{
		$res='请输入合法字符';
    }

   echo '测试数字是否为奇数：'.$num.$res;

   echo "<hr/>";
 

  //能被4整除但不能被100整除，或能被400整除的年份即为闰年
   $year=$_POST['year'];
   $result;
   if(strlen($year)==4&&is_numeric($year)){
	   if(($year%4==0&&$year%100!=0)||($year%400==0)){
   		 $result='是闰年';
   	  }else{
   		 $result='不是闰年';
   	 }
   }else{
   		$result='请输入合法年份';
   }
   echo "测试年份是否为闰年:  ".$year.'年'.$result;

   echo "<hr/>";

   $num1=$_POST['compareNum1'];
   $num2=$_POST['compareNum2'];
   $num3=$_POST['compareNum3'];
   $maxNum;
    if(is_numeric($num1)&&is_numeric($num2)&&is_numeric($num3)){
	   	if($num1>=$num2){  //两两比较 如果相同只需赋值给其中一个即可
	   		$maxNum=$num1;
	   	}else{
	   		$maxNum=$num2;
	   	}
	   	if($maxNum<$num3){  //比较第三个数字大还是前面两个中较大（也有可能相等）的那个大。赋值给变量即可。
	   		$maxNum=$num3;
	   	}
	}else{
		$maxNum="请输入合法字符";
	}
   echo "测试输出最大数字：".$maxNum;